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
     * @ORM\Column(type="integer")
     */ 
    private $userId;


    /**
     * @var \Umbrella\ShopBundle\Entity\Category
     */
    private $category;
    
    /**
     * Set id
     *
     * @param integer $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set userId
     *
     * @param integer $userId
     * @return Product
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
    
    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
    
    /**
     * Get category_id
     * 
     * @return integer 
     */
    public function getCategory_id()//Через этот метод, мы в шаблоне получаем получаем поле category_id
    {
        return $this->category->getId();
        //return $this->getCategory()->getId();
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
        //if(!is_array($category))
        //{
            //$category = array($category);
        //}
        //$this->category = $category;

        //return $this;
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
