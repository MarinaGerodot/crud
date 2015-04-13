<?php

namespace Umbrella\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/login")
 */
class SecuredController extends Controller
{
    /**
     * @Route("/login", name="_security_login" )
     * @Template()
     */
    public function loginAction()
    {
        /*$request = $this->getRequest();
        // получить ошибки логина, если таковые имеются
         if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }*/
 
         //return array(
            //'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            //'error'         => $error,
        //);
 
        
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('UmbrellaShopBundle:Shop:login.html.twig', array(
             //имя, введённое пользователем в последний раз
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error' => $error,
        ));
        
        
    }


    /**
     * @Route("/login_check", name="_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/logout", name="_shop_logout"  )
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }

    
}
