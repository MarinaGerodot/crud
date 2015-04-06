<?php

namespace Umbrella\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ShopController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('UmbrellaShopBundle:Shop:index.html.twig');
    }
    
    /**
     * @Route("/login")
     * @Template()
     */
    public function loginAction()
    {
        return $this->render('UmbrellaShopBundle:Shop:login.html.twig');
    }
    
    /**
     * @Route("/product")
     * @Template()
     */
    public function productAction()
    {
        return $this->render('UmbrellaShopBundle:Shop:product.html.twig');
    }
    
    /**
     * @Route("/single")
     * @Template()
     */
    public function singleAction()
    {
        return $this->render('UmbrellaShopBundle:Shop:single.html.twig');
    }
    
    /**
     * @Route("/register")
     * @Template()
     */
    public function registerAction()
    {
        return $this->render('UmbrellaShopBundle:Shop:register.html.twig');
    }
    
    /**
     * @Route("/contact")
     * @Template()
     */
    public function contactAction()
    {
        return $this->render('UmbrellaShopBundle:Shop:contact.html.twig');
    }

}
