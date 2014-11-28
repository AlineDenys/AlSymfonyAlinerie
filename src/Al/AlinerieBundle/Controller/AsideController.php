<?php

namespace Al\AlinerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Al\AlinerieBundle\Entity\Aside;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\configuration\ParamConverter;
use Al\AlinerieBundle\Form\AsideEditType;


class AsideController extends Controller
{
    

  public function editAsideAction($aside_id, Request $request)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // On récupère l'entité correspondant à l'id $id
    $aside = $em->getRepository('AlAlinerieBundle:Aside')->find($aside_id);

    // Si l'article n'existe pas, on affiche une erreur 404
    if ($aside == null) {
      throw $this->createNotFoundException("L'encart d'id ".$aside_id." n'existe pas.");
    }

    // création et de la gestion du formulaire
    $form = $this->get('form.factory')->create(new AsideEditType(), $aside);

    if ($form->handleRequest($request)->isValid()) {
      // On l'enregistre notre objet article dans la base de données
      $em = $this->getDoctrine()->getManager();
      $em->persist($aside);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Encart bien modifié.');

      // On redirige vers la page de visualisation de l'annonce nouvellement modifiée
      return $this->redirect($this->generateUrl('al_alinerie_homepage'));
    }


    return $this->render('AlAlinerieBundle:Aside:edit.html.twig', array(
      'aside' => $aside, 'form'=> $form->createView()
    ));
  }

   
}
