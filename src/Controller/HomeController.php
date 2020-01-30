<?php


namespace App\Controller;


use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProduitRepository $repo, EntityManagerInterface $em){
        $produits = $repo->findAll();

        return $this->render('home/index.html.twig', [
            'produits' => $produits
        ]);
    }

}