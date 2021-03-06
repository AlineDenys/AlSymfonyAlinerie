<?php
// src/Al/AlinerieBundle/Entity/Categorie.php

namespace Al\AlinerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Al\AlinerieBundle\Entity\CategorieRepository")
 */
class Categorie
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;
    
    /**
   * @ORM\Column(name="color", type="string", length=6)
   */
  private $color;

            /**
   * @ORM\Column(name="bold", type="string", length=255)
   */
  private $bold;
        /**
   * @ORM\Column(name="slug", type="string", length=255)
   */
  private $slug;
  // Getters et setters

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Categorie
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Categorie
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set bold
     *
     * @param string $bold
     * @return Categorie
     */
    public function setBold($bold)
    {
        $this->bold = $bold;

        return $this;
    }

    /**
     * Get bold
     *
     * @return string 
     */
    public function getBold()
    {
        return $this->bold;
    }
}
