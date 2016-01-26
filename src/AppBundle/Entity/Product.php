<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="app_product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var object
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Category", cascade={"persist"}, mappedBy="product")
     */
    private $category;

    /**
     * @var objects
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Tag", cascade={"persist"})
     */
    private $tags;

    /**
     * @var objects
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Translation", cascade={"persist"}, mappedBy="product")
     */
    private $translations;

    /**
     * @var object
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Shelf", cascade={"persist"})
     */
    private $shelf;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add category
     *
     * @param \AppBundle\Entity\Category $category
     * @return Product
     */
    public function addCategory(\AppBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add tags
     *
     * @param \AppBundle\Entity\Tag $tags
     * @return Product
     */
    public function addTag(\AppBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \AppBundle\Entity\Tag $tags
     */
    public function removeTag(\AppBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add translations
     *
     * @param \AppBundle\Entity\Translation $translations
     * @return Product
     */
    public function addTranslation(\AppBundle\Entity\Translation $translations)
    {
        $this->translations[] = $translations;

        return $this;
    }

    /**
     * Remove translations
     *
     * @param \AppBundle\Entity\Translation $translations
     */
    public function removeTranslation(\AppBundle\Entity\Translation $translations)
    {
        $this->translations->removeElement($translations);
    }

    /**
     * Get translations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Set shelf
     *
     * @param \AppBundle\Entity\Shelf $shelf
     * @return Product
     */
    public function setShelf(\AppBundle\Entity\Shelf $shelf = null)
    {
        $this->shelf = $shelf;

        return $this;
    }

    /**
     * Get shelf
     *
     * @return \AppBundle\Entity\Shelf 
     */
    public function getShelf()
    {
        return $this->shelf;
    }
}
