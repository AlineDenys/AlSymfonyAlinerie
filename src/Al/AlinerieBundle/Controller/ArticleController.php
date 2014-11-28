<?php

namespace Al\AlinerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Al\AlinerieBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\configuration\ParamConverter;
use Al\AlinerieBundle\Form\ArticleType;
use Al\AlinerieBundle\Form\ArticleEditType;

class ArticleController extends Controller
{
    
     public function indexAction()
  {
     // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
     $article = $em->getRepository('AlAlinerieBundle:Article')->getDernierArticle();
         
      return $this->render('AlAlinerieBundle:Article:view.html.twig', array(
      'article'           => $article,
    ));
     
     }
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
    
    
        public function unZoomAction()
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
     $unZoom = $em->getRepository('AlAlinerieBundle:Aside')->get1Zoom();
         
      return $this->render('AlAlinerieBundle::zoom.html.twig', array(
      'unZoom'           => $unZoom,
    ));
     }
    
    
     public function unFacAction()
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
     $unFac = $em->getRepository('AlAlinerieBundle:Aside')->get1Fac();
         
      return $this->render('AlAlinerieBundle::fac.html.twig', array(
      'unFac'           => $unFac,
    ));
     }
    
    
    
    
    
    
      public function addArticleAction(Request $request)
  {
    $article = new Article();

    $form = $this->get('form.factory')->create(new ArticleType(), $article);

    if ($form->handleRequest($request)->isValid()) {
        
      // On l'enregistre notre objet $article dans la base de données
      $em = $this->getDoctrine()->getManager();
      $em->persist($article);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistré.');

      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirect($this->generateUrl('al_alinerie_viewarticle', array('article_id' => $article->getId())));
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('AlAlinerieBundle:Article:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }

  public function editArticleAction($article_id, Request $request)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('AlAlinerieBundle:Article')->find($article_id);

    // Si l'article n'existe pas, on affiche une erreur 404
    if ($article == null) {
      throw $this->createNotFoundException("L'article d'id ".$article_id." n'existe pas.");
    }

    // création et de la gestion du formulaire
    $form = $this->get('form.factory')->create(new ArticleEditType(), $article);

    if ($form->handleRequest($request)->isValid()) {
      // On l'enregistre notre objet article dans la base de données
      $em = $this->getDoctrine()->getManager();
      $em->persist($article);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Article bien modifié.');

      // On redirige vers la page de visualisation de l'annonce nouvellement modifiée
      return $this->redirect($this->generateUrl('al_alinerie_viewarticle', array('article_id' => $article->getId())));
    }


    return $this->render('AlAlinerieBundle:Article:edit.html.twig', array(
      'article' => $article, 'form'=> $form->createView()
    ));
  }

    public function deleteArticleAction($article_id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $article = $em->getRepository('AlAlinerieBundle:Article')->find($article_id);

    if (null === $article) {
      throw new NotFoundHttpException("L'article d'id ".$article_id." n'existe pas.");
    }

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->createFormBuilder()->getForm();

    if ($form->handleRequest($request)->isValid()) {
      $em->remove($article);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'article a bien été supprimé.");

      return $this->redirect($this->generateUrl('al_alinerie_homepage'));
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('AlAlinerieBundle:Article:delete.html.twig', array(
      'article' => $article,
      'form'   => $form->createView()
    ));
  }

    public function wrongRouteAction($url)
{
 throw $this->createNotFoundException("L'url n'existe pas !");
}
   
}
