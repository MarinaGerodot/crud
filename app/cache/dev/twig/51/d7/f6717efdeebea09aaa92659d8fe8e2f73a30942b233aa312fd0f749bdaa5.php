<?php

/* UmbrellaShopBundle::base_shop.html.twig */
class __TwigTemplate_51d7f6717efdeebea09aaa92659d8fe8e2f73a30942b233aa312fd0f749bdaa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    \t<!--header-->
\t<div class=\"header\">
\t\t<div class=\"top-header\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"top-header-left\">
\t\t\t\t\t<ul class=\"support\">
\t\t\t\t\t\t<li><a href=\"#\"><label> </label></a></li>
\t\t\t\t\t\t<li><a href=\"#\">24x7 live<span class=\"live\"> support</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"support\">
\t\t\t\t\t\t<li class=\"van\"><a href=\"#\"><label> </label></a></li>
\t\t\t\t\t\t<li><a href=\"#\">Free shipping <span class=\"live\">on order over 500</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"top-header-right\">
\t\t\t\t <div class=\"down-top\">\t\t
\t\t\t\t\t\t  <select class=\"in-drop\">
\t\t\t\t\t\t\t  <option value=\"English\" class=\"in-of\">English</option>
\t\t\t\t\t\t\t  <option value=\"Japanese\" class=\"in-of\">Japanese</option>
\t\t\t\t\t\t\t  <option value=\"French\" class=\"in-of\">French</option>
\t\t\t\t\t\t\t  <option value=\"German\" class=\"in-of\">German</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t </div>
\t\t\t\t\t<div class=\"down-top top-down\">
\t\t\t\t\t\t  <select class=\"in-drop\">
\t\t\t\t\t\t  
\t\t\t\t\t\t  <option value=\"Dollar\" class=\"in-of\">Dollar</option>
\t\t\t\t\t\t  <option value=\"Yen\" class=\"in-of\">Yen</option>
\t\t\t\t\t\t  <option value=\"Euro\" class=\"in-of\">Euro</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t </div>
\t\t\t\t\t <!---->
\t\t\t\t\t<div class=\"clearfix\"> </div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bottom-header\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"header-bottom-left\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo.png"), "html", null, true);
        echo "\" alt=\" \" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t<input type=\"text\" value=\"\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = '';}\" />
\t\t\t\t\t\t<input type=\"submit\"  value=\"SEARCH\"/>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-bottom-right\">
                
                
                
                    ";
        // line 83
        if ((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth"))) {
            // line 84
            echo "                            <body ng-app='ModalDemo'>
                                <div ng-controller='MyCtrl'>
                                    <div class=\"account\"><a href=\"#\" ng-click='toggleModal()'><span> </span>";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo "</a></div>
                                    
                                    
                                         <ul class=\"login\">
\t\t\t\t\t\t\t\t            <li ><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("_security_login");
            echo "\"><span> </span>LOGOUT</a></li>
\t\t\t\t\t\t\t             </ul>
                                      <modal-dialog show='modalShown' width='600px' height='80%'>
                                      <div class=\" login-right\">
\t  \t                                <h3>REGISTERED CUSTOMERS</h3>
                                            <p>If you have an account with us, please log in.</p>
                                            <form action=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("_security_check");
            echo "\" method=\"post\" id=\"login\">
                                            <div>
\t\t\t\t                                <span>User name<label>*</label></span>
\t\t\t\t                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo "\"/> 
                                            </div>
                                            <div>
\t\t\t\t                                <span>Password<label>*</label></span>
\t\t\t\t                                <input type=\"password\" id=\"password\" name=\"_password\"/> 
                                            </div>
                                                <a class=\"forgot\" href=\"#\">Forgot Your Password?</a>
                                                <input type=\"submit\" value=\"login\"/>
                                            </form>
                                       </div>
                                        <div class=\"clearfix\"> </div>\t
    
  \t                                     <h3>NEW CUSTOMERS</h3>
                                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
\t\t\t                                 <a class=\"acount-btn\" href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("umbrella_shop_register");
            echo "\">Create an Account</a>
   
                                                <div class=\"clearfix\"> </div>

                                        </modal-dialog>
                                 
                            
                    ";
        } else {
            // line 120
            echo "        
                            <div class=\"account\"><a href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("_security_login");
            echo "\"><span> </span>YOUR ACCOUNT</a></div>
                            <ul class=\"login\">
\t\t\t                     <li><a href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("_security_login");
            echo "\"><span> </span>LOGIN</a></li> |
\t\t\t                     <li ><a href=\"register\">SIGNUP</a></li>
                            </ul>
                    ";
        }
        // line 127
        echo "                    
                    
                                             
\t\t\t\t\t\t<div class=\"cart\"><a href=\"#\"><span> </span>CART</a></div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>\t
\t\t\t</div>
\t\t</div>
\t</div>
    </div>
\t<!---->
\t<div class=\"container\">
    
      
      ";
        // line 142
        $this->displayBlock('content', $context, $blocks);
        // line 144
        echo "     
\t\t   
          
                  
                      
\t\t\t   <div class=\"sub-cate\">
\t\t\t\t<div class=\" top-nav rsidebar span_1_of_left\">
\t\t\t\t\t<h3 class=\"cate\">CATEGORIES</h3>
\t\t <ul class=\"menu\">
\t\t<li class=\"item1\"><a href=\"#\">Curabitur sapien<img class=\"arrow-img\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/arrow1.png"), "html", null, true);
        echo "\" alt=\"\"/> </a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"#\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item2\"><a href=\"#\">Dignissim purus <img class=\"arrow-img \" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/arrow1.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"#\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item3\"><a href=\"#\">Ultrices id du<img class=\"arrow-img img-arrow\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/arrow1.png"), "html", null, true);
        echo "\" alt=\"\"/> </a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"#\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Automatic Fails</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item4\"><a href=\"#\">Cras iacaus rhone <img class=\"arrow-img img-left-arrow\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/arrow1.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"#\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t\t\t<li>
\t\t\t<ul class=\"kid-menu\">
\t\t\t\t<li><a href=\"#\">Tempus pretium</a></li>
\t\t\t\t<li ><a href=\"#\">Dignissim neque</a></li>
\t\t\t\t<li ><a href=\"#\">Ornared id aliquet</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<ul class=\"kid-menu \">
\t\t\t\t<li><a href=\"#\">Commodo sit</a></li>
\t\t\t\t<li ><a href=\"#\">Urna ac tortor sc</a></li>
\t\t\t\t<li><a href=\"#\">Ornared id aliquet</a></li>
\t\t\t\t<li><a href=\"#\">Urna ac tortor sc</a></li>
\t\t\t\t<li ><a href=\"#\">Eget nisi laoreet</a></li>
\t\t\t\t<li><a href=\"#\">Faciisis ornare</a></li>
\t\t\t\t<li class=\"menu-kid-left\"><a href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_contact");
        echo "\">Contact us</a></li>
\t\t\t</ul>
\t</ul>
\t\t\t\t\t</div>
\t\t\t\t<!--initiate accordion-->
\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t    var menu_ul = \$('.menu > li > ul'),
\t\t\t           menu_a  = \$('.menu > li > a');
\t\t\t    menu_ul.hide();
\t\t\t    menu_a.click(function(e) {
\t\t\t        e.preventDefault();
\t\t\t        if(!\$(this).hasClass('active')) {
\t\t\t            menu_a.removeClass('active');
\t\t\t            menu_ul.filter(':visible').slideUp('normal');
\t\t\t            \$(this).addClass('active').next().stop(true,true).slideDown('normal');
\t\t\t        } else {
\t\t\t            \$(this).removeClass('active');
\t\t\t            \$(this).next().stop(true,true).slideUp('normal');
\t\t\t        }
\t\t\t    });
\t\t\t
\t\t\t});
            
            app = angular.module('ModalDemo', []);
            app.directive('modalDialog', function() {
            return {
                restrict: 'E',
                scope: {
                show: '='
            },
            replace: true, // Replace with the template below
            transclude: true, // we want to insert custom content inside the directive
            link: function(scope, element, attrs) {
            scope.dialogStyle = {};
            if (attrs.width)
                scope.dialogStyle.width = attrs.width;
            if (attrs.height)
                scope.dialogStyle.height = attrs.height;
            scope.hideModal = function() {
            scope.show = false;
            };
            },
            template: \"<div class='ng-modal' ng-show='show'><div class='ng-modal-overlay' ng-click='hideModal()'></div><div class='ng-modal-dialog' ng-style='dialogStyle'><div class='ng-modal-close' ng-click='hideModal()'>X</div><div class='ng-modal-dialog-content' ng-transclude></div></div></div>\"
            };
            });

            app.controller('MyCtrl', ['\$scope', function(\$scope) {
            \$scope.modalShown = false;
            \$scope.toggleModal = function() {
            \$scope.modalShown = !\$scope.modalShown;
            };
            }]);
\t\t</script>
\t\t\t\t\t<div class=\" chain-grid menu-chain\">
\t   \t\t     \t\t<a href=\"#\"><img class=\"img-responsive chain\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/wat.jpg"), "html", null, true);
        echo "\" alt=\" \" /></a>\t   \t\t     \t\t
\t   \t\t     \t\t<div class=\"grid-chain-bottom chain-watch\">
\t\t   \t\t     \t\t<span class=\"actual dolor-left-grid\">300\$</span>
\t\t   \t\t     \t\t<span class=\"reducedfrom\">500\$</span>  
\t\t   \t\t     \t\t<h6><a href=\"#\">Lorem ipsum dolor</a></h6>  \t\t     \t\t\t   \t\t     \t\t\t\t\t\t\t\t\t\t
\t   \t\t     \t\t</div>
\t   \t\t     \t</div>
\t   \t\t     \t <a class=\"view-all all-product\" href=\"#\">VIEW ALL PRODUCTS<span> </span></a> \t
\t\t\t</div>
\t   \t\t    <div class=\"clearfix\"> </div>
                   
                 
                           \t         
\t\t</div>
        
        
\t
\t<!---->
\t<div class=\"footer\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"latter\">
\t\t\t\t\t<h6>NEWS-LETTER</h6>
\t\t\t\t\t<div class=\"sub-left-right\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input type=\"text\" value=\"Enter email here\"onfocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Enter email here';}\" />
\t\t\t\t\t\t\t<input type=\"submit\" value=\"SUBSCRIBE\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"latter-right\">
\t\t\t\t\t<p>FOLLOW US</p>
\t\t\t\t\t<ul class=\"face-in-to\">
\t\t\t\t\t\t<li><a href=\"#\"><span> </span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"facebook-in\"> </span></a></li>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer-bottom-cate\">
\t\t\t\t\t<h6>CATEGORIES</h6>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Curabitur sapien</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Dignissim purus</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Tempus pretium</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Dignissim neque</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Ornared id aliquet</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Ultrices id du</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Commodo sit</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Urna ac tortor sc</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Ornared id aliquet</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Urna ac tortor sc</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Eget nisi laoreet</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Faciisis ornare</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-bottom-cate bottom-grid-cat\">
\t\t\t\t\t<h6>FEATURE PROJECTS</h6>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Curabitur sapien</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Dignissim purus</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Tempus pretium</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Dignissim neque</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Ornared id aliquet</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Ultrices id du</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Commodo sit</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-bottom-cate\">
\t\t\t\t\t<h6>TOP BRANDS</h6>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Curabitur sapien</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Dignissim purus</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Tempus pretium</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Dignissim neque</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Ornared id aliquet</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Ultrices id du</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Commodo sit</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Urna ac tortor sc</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Ornared id aliquet</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Urna ac tortor sc</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Eget nisi laoreet</a></li>
\t\t\t\t\t\t<li ><a href=\"#\">Faciisis ornare</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-bottom-cate cate-bottom\">
\t\t\t\t\t<h6>OUR ADDERSS</h6>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Aliquam metus  dui. </li>
\t\t\t\t\t\t<li>orci, ornareidquet</li>
\t\t\t\t\t\t<li> ut,DUI.</li>
\t\t\t\t\t\t<li >nisi, dignissim</li>
\t\t\t\t\t\t<li >gravida at.</li>
\t\t\t\t\t\t<li class=\"phone\">PH : +79613074977</li>
\t\t\t\t\t\t<li class=\"temp\"> <p class=\"footer-class\">Design by <a href=\"#\" target=\"_blank\"> Kozlova Marina</a> </p></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
               
\t\t\t</div>
\t\t</div>
\t</div>
   
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Shop-index";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
        <!--theme-style-->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellashop/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>\t
        <!--//theme-style-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\"/>
        
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>
        <!--//fonts-->
        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "            <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/angular.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 142
    public function block_content($context, array $blocks = array())
    {
        // line 143
        echo "            
\t   ";
    }

    public function getTemplateName()
    {
        return "UmbrellaShopBundle::base_shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 143,  484 => 142,  478 => 22,  474 => 21,  471 => 20,  468 => 19,  456 => 11,  451 => 9,  446 => 8,  443 => 7,  437 => 5,  321 => 250,  263 => 195,  239 => 174,  229 => 167,  219 => 160,  209 => 153,  198 => 144,  196 => 142,  179 => 127,  172 => 123,  167 => 121,  164 => 120,  153 => 113,  136 => 99,  130 => 96,  121 => 90,  114 => 86,  110 => 84,  108 => 83,  90 => 70,  42 => 25,  39 => 24,  36 => 19,  34 => 7,  29 => 5,  23 => 1,);
    }
}
