<?php

/* UmbrellaShopBundle::base_login.html.twig */
class __TwigTemplate_4be62cfb5af07e9b3e9dcca9e8440872bc70ac60cbce25963057e4845b5080c3 extends Twig_Template
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
\t\t\t
            
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!---->
\t<div class=\"container\">
       
      ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "     
\t\t   
          
                  
                      
\t\t\t   <div class=\"sub-cate\">
\t\t\t\t<div class=\" top-nav rsidebar span_1_of_left\">
\t\t\t\t\t<h3 class=\"cate\">CATEGORIES</h3>
\t\t <ul class=\"menu\">
\t\t<li class=\"item1\"><a href=\"#\">Curabitur sapien<img class=\"arrow-img\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/arrow1.png"), "html", null, true);
        echo "\" alt=\"\"/> </a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item2\"><a href=\"#\">Dignissim purus <img class=\"arrow-img \" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/arrow1.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item3\"><a href=\"#\">Ultrices id du<img class=\"arrow-img img-arrow\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/arrow1.png"), "html", null, true);
        echo "\" alt=\"\"/> </a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Automatic Fails</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item4\"><a href=\"#\">Cras iacaus rhone <img class=\"arrow-img img-left-arrow\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/arrow1.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t\t\t<li>
\t\t\t<ul class=\"kid-menu\">
\t\t\t\t<li><a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Tempus pretium</a></li>
\t\t\t\t<li ><a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Dignissim neque</a></li>
\t\t\t\t<li ><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Ornared id aliquet</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<ul class=\"kid-menu \">
\t\t\t\t<li><a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Commodo sit</a></li>
\t\t\t\t<li ><a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Urna ac tortor sc</a></li>
\t\t\t\t<li><a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Ornared id aliquet</a></li>
\t\t\t\t<li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Urna ac tortor sc</a></li>
\t\t\t\t<li ><a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Eget nisi laoreet</a></li>
\t\t\t\t<li><a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">Faciisis ornare</a></li>
\t\t\t\t<li class=\"menu-kid-left\"><a href=\"";
        // line 143
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
\t\t</script>
\t\t\t\t\t<div class=\" chain-grid menu-chain\">
\t   \t\t     \t\t<a href=\"#\"><img class=\"img-responsive chain\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/wat.jpg"), "html", null, true);
        echo "\" alt=\" \" /></a>\t   \t\t     \t\t
\t   \t\t     \t\t<div class=\"grid-chain-bottom chain-watch\">
\t\t   \t\t     \t\t<span class=\"actual dolor-left-grid\">300\$</span>
\t\t   \t\t     \t\t<span class=\"reducedfrom\">500\$</span>  
\t\t   \t\t     \t\t<h6><a href=\"#\">Lorem ipsum dolor</a></h6>  \t\t     \t\t\t   \t\t     \t\t\t\t\t\t\t\t\t\t
\t   \t\t     \t\t</div>
\t   \t\t     \t</div>
\t   \t\t     \t <a class=\"view-all all-product\" href=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_product");
        echo "\">VIEW ALL PRODUCTS<span> </span></a> \t
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

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "            
\t   ";
    }

    public function getTemplateName()
    {
        return "UmbrellaShopBundle::base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 91,  438 => 90,  432 => 22,  428 => 21,  425 => 20,  422 => 19,  410 => 11,  405 => 9,  400 => 8,  397 => 7,  391 => 5,  283 => 175,  273 => 168,  245 => 143,  241 => 142,  237 => 141,  233 => 140,  229 => 139,  225 => 138,  221 => 137,  214 => 133,  210 => 132,  206 => 131,  198 => 126,  194 => 125,  190 => 124,  185 => 122,  179 => 119,  175 => 118,  171 => 117,  166 => 115,  160 => 112,  156 => 111,  152 => 110,  147 => 108,  141 => 105,  137 => 104,  133 => 103,  128 => 101,  117 => 92,  115 => 90,  90 => 70,  42 => 25,  39 => 24,  36 => 19,  34 => 7,  29 => 5,  23 => 1,);
    }
}
