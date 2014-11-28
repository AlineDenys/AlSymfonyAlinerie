<?php

namespace Al\AlinerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AsideEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('date',      'date')
      ->add('title',     'text')
      ->add('author',    'text')
      ->add('content',   'textarea')
      ->add('save',      'submit')
    ;

 }

  /**
   * @param OptionsResolverInterface $resolver
   */
  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Al\AlinerieBundle\Entity\Aside'
    ));
  }

  /**
   * @return string
   */
  public function getName()
  {
    return 'al_alineriebundle_editaside';
  }
}