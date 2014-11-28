<?php

namespace Al\AlinerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->remove('date');
  }

  public function getName()
  {
    return 'al_alinerie_editarticle';
  }

  public function getParent()
  {
    return new ArticleType();
  }
}