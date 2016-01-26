<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shelf
 *
 * @ORM\Table(name="app_shelf")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShelfRepository")
 */
class Shelf
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
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=4)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=4)
     */
    private $number;
    

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
     * Set section
     *
     * @param string $section
     * @return Shelf
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Shelf
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }
}
