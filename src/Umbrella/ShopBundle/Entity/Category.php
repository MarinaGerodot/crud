<?php

namespace Umbrella\ShopBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="Umbrella\ShopBundle\CategoryRepository")
 */ 
class Category
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
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add products
     *
     * @param \Umbrella\ShopBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(\Umbrella\ShopBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \Umbrella\ShopBundle\Entity\Product $products
     */
    public function removeProduct(\Umbrella\ShopBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    
    //Чтобы при выводе списка категорий в форме добавления продукта система знала какое поле показывать в селекте  
    public function __toString()
    {
    	return $this->getName() ? $this->getName() : "";
    }
}
