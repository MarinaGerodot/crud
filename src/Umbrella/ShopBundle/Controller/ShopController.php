<?php

namespace Umbrella\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Umbrella\ShopBundle\Entity\Product;
use Umbrella\ShopBundle\Entity\Category;


class ShopController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
        $request = $this->get('request');
        
        $em = $this->getDoctrine()->getManager();
        $product_fields = $em->getRepository('UmbrellaShopBundle:Product')->findAll();
        $users = $em->getRepository('UmbrellaShopBundle:User')->findAll();
        
        $session = $this->get('session');
        //$session->set('username', '_security.last_username');
        
        //Если пользователь не аутотифицирован как anonymous, выводим шаблон без имени пользователя 
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            
                return $this->render('UmbrellaShopBundle:Shop:index.html.twig', array(
                'auth' => false,
                'username' => 'YOUR ACCOUNT',
                'product_fields' => $product_fields,
                'users' => $users,
            ));
        }
        else {//для аутотифицированного пользователя, выводим шаблон с именем пользователя
              //(имя получаем как 'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME)
            
            return $this->render('UmbrellaShopBundle:Shop:index.html.twig', array(
                'auth' => true,
                'username' => $request->getSession()->get(SecurityContextInterface::LAST_USERNAME),//не работает!!!
                //'username' => $session->get('username'),
                'product_fields' => $product_fields,
                'users' => $users,   
            ));
        }
    }
    
    /**
     * @Route("/single/{product_id}")
     * @Template()
     */
    public function singleAction($product_id)
    {
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('UmbrellaShopBundle:Product')->find($product_id);
        
        //Если пользователь не аутотифицирован как anonymous, выводим шаблон без имени пользователя 
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            
                return $this->render('UmbrellaShopBundle:Shop:single.html.twig', array(
                'auth' => false,
                'username' => 'YOUR ACCOUNT',
                'product' => $product,
                
            ));
        }
        else {//для аутотифицированного пользователя, выводим шаблон с именем пользователя
              //(имя получаем как 'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME)
              
            return $this->render('UmbrellaShopBundle:Shop:single.html.twig', array(
                'auth' => true,
                'username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
                'product' => $product,
               
            ));
        }
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
        $request = $this->getRequest();
        
        //Если пользователь не аутотифицирован как anonymous, выводим шаблон без имени пользователя 
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            
                return $this->render('UmbrellaShopBundle:Shop:contact.html.twig', array(
                'auth' => false,
                'username' => 'YOUR ACCOUNT',
            ));
        }
        else {//для аутотифицированного пользователя, выводим шаблон с именем пользователя
            
            return $this->render('UmbrellaShopBundle:Shop:contact.html.twig', array(
                'auth' => true,
                'username' => $request->getSession()->get(SecurityContextInterface::LAST_USERNAME),
            ));
        }
    }
    
}
