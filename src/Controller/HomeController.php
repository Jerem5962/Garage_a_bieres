<?php


namespace App\Controller;


use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param ProduitRepository $repo
     * @return Response
     */
    public function index(ProduitRepository $repo){
        $nouveaute = $repo->selectNew();
        $promos = $repo->findBy([
            'promo' => true,
        ]);

        return $this->render('home/index.html.twig', [
            'produits' => $nouveaute,
            'promos' => $promos
        ]);
    }

}