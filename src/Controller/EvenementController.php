<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EventRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;


class EvenementController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    #[Route('/listeevenement', name: 'listeevenement')]
     public function afficher(ChartBuilderInterface $chartBuilder)
     {
 
         
             $evenements = $this->getDoctrine()->getRepository(Evenement::class)->findAll();

         // Get the data from the repository
         $events = $evenements;
         $eventDates = [];
         $eventAttendance = [];
         foreach ($events as $event) {
             $eventDates[] = $event->getDate()->format('M jS, Y');
             $eventAttendance[] = $event->getNbreDeplaces();
         }
          
         return $this->render("evenement/index.html.twig",[
             'evenementss' => $evenements,
             'event_dates' => json_encode($eventDates),
             'event_attendance' => json_encode($eventAttendance),             ]);
     }
    
    #[Route('/Ajouterevenement', name: 'AjouterEvent')]
    public function AjouterEvent(Request $request){
        $event = new Evenement();
        $form = $this->createForm(EvenementType::class,$event);
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute("listeevenement");
        }
        else
        return    $this->render("evenement/AjouterEvent.html.twig",['form'=>$form->createView()]);
    }  
    #[Route('/Supprimerevenement/{id}', name: 'SupprimerEvent')]
   
    public function supprimer(EventRepository $repository, $id)
    {   
        $Event = $repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Event);
        $em->flush();
        return $this->redirectToRoute("listeevenement");

    } 
    #[Route('/Updateevenement/{id}', name: 'update')]
    public function update(EventRepository $repository, $id, Request $request)
    {
        $Event = $repository->find($id);
        $form = $this->createForm(EvenementType::class, $Event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('listeevenement');
        }
        return $this->render('evenement/updateEvent.html.twig', [
        'form' => $form -> createView()]
        );

    } 
}
