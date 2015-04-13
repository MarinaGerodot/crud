<?php

namespace Umbrella\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="Umbrella\ShopBundle\ProductRepository")
 */ 
class Product
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */ 
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $title;

    
    /**
     * @ORM\Column(type="string")
     */
    private $description;

   /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;


    /**
     * @var \Umbrella\ShopBundle\Entity\Category
     */
    private $category;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $userproduct;
    
   /**
     * Constructor
     */
    public function __construct()
    {
        $this->userproduct = new \Doctrine\Common\Collections\ArrayCollection();
    } 
    
    /**
     * Add userproducts
     *
     * @param \Umbrella\ShopBundle\Entity\Userproducts $userproducts
     * @return Product
     */
    public function addUserproduct(\Umbrella\ShopBundle\Entity\Userproducts $userproduct)
    {
        $this->userproduct[] = $userproduct;

        return $this;
    }

    /**
     * Remove userproducts
     *
     * @param \Umbrella\ShopBundle\Entity\Userproducts $userproducts
     */
    public function removeUserproduct(\Umbrella\ShopBundle\Entity\Userproducts $userproduct)
    {
        $this->userproduct->removeElement($userproduct);
    }

    /**
     * Get userproducts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserproduct()
    {
        return $this->userproduct;
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
     * Set type
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Product
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

  
    /**
     * Set category
     *
     * @param \Umbrella\ShopBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Umbrella\ShopBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Umbrella\ShopBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
   
}
