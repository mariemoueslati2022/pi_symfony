<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\OffreType;
use App\Repository\OffreRepository;
use CalendarBundle\Entity\Event;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OffreController extends AbstractController
{
    #[Route('/offre', name: 'app_offre')]
    public function index(): Response
    {
        return $this->render('offre/index.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }

    #[Route('/calendar/loadEvents', name: 'calendar_load_events')]
    public function loadEvents(Request $request): JsonResponse
    {
        $start = $request->get('start');
        $end = $request->get('end');
        $filters = json_decode($request->get('filters'), true);

        $offres = $this->getDoctrine()->getRepository(Offre::class)->findAll();

        $events = [];

        foreach ($offres as $offre) {
            $event = new \stdClass();
            $event->id = $offre->getIdOffre();
            $event->title = $offre->getNom();
            $event->start = $offre->getDateDatedeb()->format(\DateTimeInterface::ATOM);
            $event->end = $offre->getDateFin()->format(\DateTimeInterface::ATOM);
            $events[] = $event;
        }

        return new JsonResponse($events);
    }



    #[Route('/Listoffre', name: 'listOffre')]
     public function afficher(Request $request)
     {


         $sort = $request->query->get('sort', 'nom');
         $dir = $request->query->get('dir', 'asc');
         $query = $request->query->get('q', '');

         $offres = $this->getDoctrine()->getRepository(Offre::class)->createQueryBuilder('o')
             ->where('o.nom LIKE :query')
             ->setParameter('query', '%'.$query.'%')
             ->orderBy('o.'.$sort, $dir)
             ->getQuery()
             ->getResult();         foreach ($offres as $offre) {
             $event = new Event(
                 $offre->getNom(),
                 $offre->getDateDatedeb(),
                 $offre->getDateFin()
             );
             $events[] = $event;
         }
          
         return $this->render("offre/index.html.twig",[
             'offress' => $offres,
             'events' =>$events,
             'query' =>$query,
             'dir' =>$dir,
             ]);
     }
     #[Route('/Ajouteroffre', name: 'Ajouteroffre')]
     public function AjouterEvent(Request $request){
         $offre = new Offre();
         $form = $this->createForm(OffreType::class,$offre);
         $form->handleRequest($request);
         if ($form->isSubmitted()&& $form->isValid()) {
             $em=$this->getDoctrine()->getManager();
             $em->persist($offre);
             $em->flush();
             return $this->redirectToRoute("listOffre");
         }
         else
         return    $this->render("offre/AjouterOffre.html.twig",['form'=>$form->createView()]);
     }
     #[Route('/SupprimerOffre/{id}', name: 'SupprimerOffre')]
   
    public function supprimer(OffreRepository $repository, $id)
    {   
        $offre = $repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($offre);
        $em->flush();
        return $this->redirectToRoute("listOffre");

    } 
    #[Route('/UpdateOffre/{id}', name: 'updateO')]
    public function update(OffreRepository $repository, $id, Request $request)
    {
        $offre = $repository->find($id);
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('listOffre');
        }
        return $this->render('offre/updateOffre.html.twig', [
        'form' => $form -> createView()]
        );

    } 
}
