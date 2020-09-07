<?php


namespace App\Controller;


use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProduitsController
 * @package App\Controller
 * @Route("/produits")
 */
class ProduitsController extends AbstractController
{
    /**
     * @param ProduitRepository $repoProduits
     * @param CategorieRepository $repoCategorie
     * @return Response
     * @Route("/bieres", name="beer")
     */
    public function viewBeer(ProduitRepository $repoProduits, CategorieRepository $repoCategorie)
    {
        $categorie = $repoCategorie->findOneBy(['nom' => "bière"]);
        $produits = $repoProduits->findBy(['categorie' => $categorie]);
        return $this->render('produits/produits.html.twig', [
            "produits" => $produits,
            "categorie" => $categorie
        ]);
    }

    /**
     * @param ProduitRepository $repoProduits
     * @param CategorieRepository $repoCategorie
     * @return Response
     * @Route("/whisky", name="whisky")
     */
    public function viewWhisky(ProduitRepository $repoProduits, CategorieRepository $repoCategorie)
    {
        $categorie = $repoCategorie->findOneBy(['nom' => "whisky"]);
        $produits = $repoProduits->findBy(['categorie' => $categorie]);
        return $this->render('produits/produits.html.twig', [
            "produits" => $produits,
            "categorie" => $categorie
        ]);
    }

    /**
     * @param ProduitRepository $repoProduits
     * @param CategorieRepository $repoCategorie
     * @return Response
     * @Route("/vin", name="vin")
     */
    public function viewVin(ProduitRepository $repoProduits, CategorieRepository $repoCategorie)
    {
        $categorie = $repoCategorie->findOneBy(['nom' => "vin blanc"]);
        $produits = $repoProduits->findBy(['categorie' => $categorie]);
        return $this->render('produits/produits.html.twig', [
            "produits" => $produits,
            "categorie" => $categorie
        ]);
    }
}