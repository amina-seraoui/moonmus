<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

#[Route('/boutique', name: 'shop.')]
class ShopController extends AbstractController
{
    public function __construct(Environment $twig)
    {
        $twig->addGlobal('page', 'shop');
    }

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('shop/index.html.twig');
    }

    #[Route('/{slug}', name: 'category')]
    public function category(Category $category): Response
    {
        return $this->render('shop/index.html.twig', [
            'category_actual' => $category
        ]);
    }
}
