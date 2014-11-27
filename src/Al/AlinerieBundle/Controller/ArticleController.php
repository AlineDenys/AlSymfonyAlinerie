<?php

namespace Al\AlinerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Al\AlinerieBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\configuration\ParamConverter;

class ArticleController extends Controller
{
    /**
    * @ParamConverter("article", options={"mapping":{"article_id":"id"}}) 
    */
    public function viewAction(Article $article)
  {
       // On vérifie que l'annonce avec cet id existe bien
    if ($article === null) {
      throw $this->createNotFoundException("L'article d'id ".$id." n'existe pas.");
    }

    return $this->render('AlAlinerieBundle:Article:view.html.twig', array(
      'article'           => $article,
    ));
  }
    
     public function listeArticleAction()
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
     $listeAlineries = $em->getRepository('AlAlinerieBundle:Article')->getArticles(6);
         
      return $this->render('AlAlinerieBundle::listearticle.html.twig', array(
      'listeAlineries'           => $listeAlineries,
    ));
     }
    
   
}
