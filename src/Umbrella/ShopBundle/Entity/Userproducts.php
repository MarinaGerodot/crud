<?php

namespace Umbrella\ShopBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 *
 * @ORM\Table(name="userproducts")
 * @ORM\Entity(repositoryClass="Umbrella\ShopBundle\UserproductsRepository")
 */ 
class Userproducts
{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */ 
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;
    
    /**
     * @var \Umbrella\ShopBundle\Entity\Product
     */
    private $product;
    

    /**
     * Set product
     *
     * @param \Umbrella\ShopBundle\Entity\Product $product
     * @return Userproducts
     */
    public function setProduct(\Umbrella\ShopBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Umbrella\ShopBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
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
     * Set username
     *
     * @param string $username
     * @return Userproducts
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    
}
