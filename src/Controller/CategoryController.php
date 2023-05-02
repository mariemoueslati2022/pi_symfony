<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryFormType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/admin/category", name="app_category")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/category/new", name="app_category_new")
     */
    public function new(Request $request, CategoryRepository $categoryRepository): Response
    {
        
        $category = new Category();
        $form = $this->createForm(CategoryFormType::class, $category);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {

            $categoryRepository->add($category, true);

            return $this->redirectToRoute('app_category');
        }

        return $this->render('category/new.html.twig', [

            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/category/{id}/edit", name="app_category_edit")
     */
    public function edit(Category $category, Request $request, CategoryRepository $categoryRepository): Response
    {
        $form = $this->createForm(CategoryFormType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categoryRepository->add($category, true);

            return $this->redirectToRoute('app_category');
        }

        return $this->render('category/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/category/{id}/remove", name="app_category_remove")
     */
    public function remove(Category $category, CategoryRepository $categoryRepository): Response
    {
        $categoryRepository->remove($category, true);

        return $this->redirectToRoute('app_category');
    }
}
