<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductFormType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/admin/product", name="app_product")
     */
    public function index(ProductRepository $productsRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/product/new", name="app_product_new")
     */
    public function new(Request $request, ProductRepository $productsRepository, CategoryRepository $categoryRepository): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductFormType::class, $product);
        $form->handleRequest($request);

        $product = new Product();
        $form = $this->createForm(ProductFormType::class, $product, [
            'categories' => $categoryRepository->findAll(),
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {




            // Handle the uploaded image file
            $imgFile = $form->get('img')->getData();
            if ($imgFile) {
                $newFilename = uniqid() . '.' . $imgFile->guessExtension();
                $imgFile->move(
                    $this->getParameter('product_images_directory'),
                    $newFilename
                );
                $product->setImg($newFilename);
            }

            $productsRepository->add($product, true);

            return $this->redirectToRoute('app_product');
        }

        return $this->render('product/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/product/{id}/edit", name="app_products_edit")
     */
    public function edit(Product $product, Request $request, ProductRepository $productsRepository, CategoryRepository $categoryRepository): Response
    {
        $form = $this->createForm(ProductFormType::class, $product);
        $form->handleRequest($request);

        $form = $this->createForm(ProductFormType::class, $product, [
            'categories' => $categoryRepository->findAll(),
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {




            // Handle the uploaded image file
            $imgFile = $form->get('img')->getData();
            if ($imgFile) {
                $newFilename = uniqid() . '.' . $imgFile->guessExtension();
                $imgFile->move(
                    $this->getParameter('product_images_directory'),
                    $newFilename
                );
                $product->setImg($newFilename);
            }

            $productsRepository->add($product, true);

            return $this->redirectToRoute('app_product');
        }
        return $this->render('product/edit.html.twig', [
            "product" => $product,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/product/{id}/remove", name="app_products_remove")
     */
    public function remove(Product $product, ProductRepository $productsRepository): Response
    {
        $productsRepository->remove($product, true);

        return $this->redirectToRoute('app_product');
    }
    /**
     * @Route("/", name="app_product_client")
     */
    public function indexClient(ProductRepository $productsRepository,CategoryRepository $categoryRepository): Response
    {
        $categories = $productsRepository->findByCategoryGrouped();

        return $this->render('product/indexClient.html.twig', [
            'products' => $productsRepository->findAll(),
            'categories' => $categories,
            
        ]);
    }
}
