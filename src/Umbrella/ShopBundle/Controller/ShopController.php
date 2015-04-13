<?php

namespace Umbrella\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
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
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $product_fields = $em->getRepository('UmbrellaShopBundle:Product')->findAll();
        $user_products = $em->getRepository('UmbrellaShopBundle:Userproducts')->findAll();
        
        
        //Вставить вызов из БД инфы о продуктах (всех) 'product_fields' => $product_fields,
        //а уже во view ставить условие, что можно выводить а, что нет //'user_products' => $user_products,
        
        //Если пользователь не аутотифицирован как anonymous, выводим шаблон без имени пользователя 
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            
            $not_auth = array(
			
				'username' => 'YOUR ACCOUNT',
				'auth' => false,	
			);
                
                //return $this->render('UmbrellaShopBundle:Shop:index.html.twig');
                return $this->render('UmbrellaShopBundle:Shop:index.html.twig', array(
                'param_name' => $not_auth,
                'product_fields' => $product_fields,
                'user_products' => $user_products,
            ));
        }
        else {//для аутотифицированного пользователя, выводим шаблон с именем пользователя
              //(имя получаем как 'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME)
              
            $yes_auth = array(
            
                'username' => 'marina',
				//'username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),//почему-то не работает???
				'auth' => true,	
			);  
            
            return $this->render('UmbrellaShopBundle:Shop:index.html.twig', array(
                'param_name' => $yes_auth,
                'product_fields' => $product_fields,
                'user_products' => $user_products,     
            ));
        }
    }
    
    /** 
     * @Route("/product")
     * @Template()
     */
    public function productAction()
    {
        //return $this->render('UmbrellaShopBundle:Shop:product.html.twig');
       $request = $this->getRequest();
        
        //Если пользователь не аутотифицирован как anonymous, выводим шаблон без имени пользователя 
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            
            $not_auth = array(
			
				'username' => 'YOUR ACCOUNT',
				'auth' => false,	
			);
                
                //return $this->render('UmbrellaShopBundle:Shop:product.html.twig');
                return $this->render('UmbrellaShopBundle:Shop:index.html.twig', array(
                'param_name' => $not_auth,
                
            ));
        }
        else {//для аутотифицированного пользователя, выводим шаблон с именем пользователя
              //(имя получаем как 'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME)
              
            $yes_auth = array(
            
                'username' => 'Marina',
				//'username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),//почему-то не работает???
				'auth' => true,	
			);  
            
            return $this->render('UmbrellaShopBundle:Shop:product.html.twig', array(
                'param_name' => $yes_auth,
               
            ));
        }
    }
    
    /**
     * @Route("/single")
     * @Template()
     */
    public function singleAction()
    {
        //return $this->render('UmbrellaShopBundle:Shop:single.html.twig');
        $request = $this->getRequest();
        
        //Если пользователь не аутотифицирован как anonymous, выводим шаблон без имени пользователя 
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            
            $not_auth = array(
			
				'username' => 'YOUR ACCOUNT',
				'auth' => false,	
			);
                
                //return $this->render('UmbrellaShopBundle:Shop:index.html.twig');
                return $this->render('UmbrellaShopBundle:Shop:single.html.twig', array(
                'param_name' => $not_auth,
                
            ));
        }
        else {//для аутотифицированного пользователя, выводим шаблон с именем пользователя
              //(имя получаем как 'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME)
              
            $yes_auth = array(
            
                'username' => 'Marina',
				//'username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),//почему-то не работает???
				'auth' => true,	
			);  
            
            return $this->render('UmbrellaShopBundle:Shop:single.html.twig', array(
                'param_name' => $yes_auth,
               
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
        //return $this->render('UmbrellaShopBundle:Shop:contact.html.twig');
        $request = $this->getRequest();
        
        //Если пользователь не аутотифицирован как anonymous, выводим шаблон без имени пользователя 
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            
            $not_auth = array(
			
				'username' => 'YOUR ACCOUNT',
				'auth' => false,	
			);
                
                //return $this->render('UmbrellaShopBundle:Shop:index.html.twig');
                return $this->render('UmbrellaShopBundle:Shop:contact.html.twig', array(
                'param_name' => $not_auth,
                
            ));
        }
        else {//для аутотифицированного пользователя, выводим шаблон с именем пользователя
              //(имя получаем как 'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME)
              
            $yes_auth = array(
            
                'username' => 'Marina',
				//'username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),//почему-то не работает???
				'auth' => true,	
			);  
            
            return $this->render('UmbrellaShopBundle:Shop:contact.html.twig', array(
                'param_name' => $yes_auth,
               
            ));
        }
    }
    
    
    //Это первый пробный опыт, с заходом в БД, но так делать не надо!!!
    /*if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
                
                return $this->render('UmbrellaShopBundle:Shop:product.html.twig');
        }
        else {//для аутотифицированного пользователя, выводим шаблон с именем пользователя
              //(имя получаем из БД)
            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('UmbrellaShopBundle:User')->findAll();
            
            $query = $em->createQuery(
                "SELECT j FROM UmbrellaShopBundle:User j WHERE j.username = 'marina'");
                
            $entities = $query->getResult();
            
            return $this->render('UmbrellaShopBundle:Shop:product.html.twig', array(
                'entities' => $entities,
            ));
            
        }  
    
    
    */

}
