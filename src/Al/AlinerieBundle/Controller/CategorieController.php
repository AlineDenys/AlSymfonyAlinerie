<?php

namespace Al\AlinerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Al\AlinerieBundle\Entity\Categorie;
use Sensio\Bundle\FrameworkExtraBundle\configuration\ParamConverter;

class CategorieController extends Controller
{
    public function listeCategorieAction()
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
     $listeCategories = $em->getRepository('AlAlinerieBundle:Categorie')->getCategories();
         
      return $this->render('AlAlinerieBundle::listecategorie.html.twig', array(
      'listeCategories'           => $listeCategories,
    ));
     }
    
    /**
    * @ParamConverter("categorie", options={"mapping":{"categorie_id":"id"}}) 
    */
    public function viewAction(Categorie $categorie, $categorie_id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
      
      $listeArticlesCategorie = $em->getRepository('AlAlinerieBundle:Article')->findByCategorie($categorie_id);
         
      return $this->render('AlAlinerieBundle::viewCategorie.html.twig', array(
      'categorie'           => $categorie,
          'listeArticles'   => $listeArticlesCategorie,
    ));
     }
}