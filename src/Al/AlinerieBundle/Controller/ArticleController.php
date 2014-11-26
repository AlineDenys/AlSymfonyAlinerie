<?php

namespace Al\AlinerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Al\AlinerieBundle\Entity\Article;

class ArticleController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlAlinerieBundle:Default:index.html.twig', array('name' => $name));
    }
    
      public function viewAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Pour récupérer une annonce unique : on utilise find()
    $article = $em->getRepository('AlAlinerieBundle:Article')->find($id);

    // On vérifie que l'annonce avec cet id existe bien
    if ($article === null) {
      throw $this->createNotFoundException("L'article d'id ".$id." n'existe pas.");
    }

    return $this->render('AlAlinerieBundle:Article:view.html.twig', array(
      'article'           => $article,
    ));
  }
}
