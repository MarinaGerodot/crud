<?php

/* UmbrellaShopBundle:Shop:index.html.twig */
class __TwigTemplate_ed6b319e47a705b61ba0b65d98118df9640ffd15ef29d4ce2ec757b0f1dd61b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("UmbrellaShopBundle::base_shop.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaShopBundle::base_shop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Shop
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"shoes-grid\">

<a href=\"#\">
\t\t\t<div class=\"wrap-in\">
\t\t\t\t<div class=\"wmuSlider example1 slide-grid\">\t\t 
\t\t\t\t   <div class=\"wmuSliderWrapper\">\t\t  
\t\t\t\t\t   <article style=\"position: absolute; width: 100%; opacity: 0;\">\t\t\t\t\t
\t\t\t\t\t\t<div class=\"banner-matter\">
\t\t\t\t\t\t<div class=\"col-md-5 banner-bag\">
\t\t\t\t\t\t\t<img class=\"img-responsive \" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/bag.jpg"), "html", null, true);
        echo "\" alt=\" \" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-7 banner-off\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2>FLAT 50% 0FF</h2>
\t\t\t\t\t\t\t\t<label>FOR ALL PURCHASE <b>VALUE</b></label>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"on-get\">GET NOW</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t \t</article>
\t\t\t\t\t \t<article style=\"position: absolute; width: 100%; opacity: 0;\">\t\t\t\t\t
\t\t\t\t\t\t<div class=\"banner-matter\">
\t\t\t\t\t\t<div class=\"col-md-5 banner-bag\">
\t\t\t\t\t\t\t<img class=\"img-responsive \" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/bag1.jpg"), "html", null, true);
        echo "\" alt=\" \" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-7 banner-off\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2>FLAT 50% 0FF</h2>
\t\t\t\t\t\t\t\t<label>FOR ALL PURCHASE <b>VALUE</b></label>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"on-get\">GET NOW</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t \t</article>
\t\t\t\t\t \t<article style=\"position: absolute; width: 100%; opacity: 0;\">\t\t\t\t\t
\t\t\t\t\t\t<div class=\"banner-matter\">
\t\t\t\t\t\t<div class=\"col-md-5 banner-bag\">
\t\t\t\t\t\t\t<img class=\"img-responsive \" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/bag.jpg"), "html", null, true);
        echo "\" alt=\" \" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-7 banner-off\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2>FLAT 50% 0FF</h2>
\t\t\t\t\t\t\t\t<label>FOR ALL PURCHASE <b>VALUE</b></label>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"on-get\">GET NOW</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t \t</article>
\t\t\t\t\t\t
\t\t\t\t\t </div>
\t\t\t\t\t </a>
\t                <ul class=\"wmuSliderPagination\">
\t                \t<li><a href=\"#\" class=\"\">0</a></li>
\t                \t<li><a href=\"#\" class=\"\">1</a></li>
\t                \t<li><a href=\"#\" class=\"\">2</a></li>
\t                </ul>
\t\t\t\t\t <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.wmuSlider.js"), "html", null, true);
        echo "\"></script> 
\t\t\t\t  <script>
\t       \t\t\t\$('.example1').wmuSlider();         
\t   \t\t     </script> 
\t            </div>
\t          </div>
\t           \t</a>
\t   \t\t      <!---->
\t   \t\t     <div class=\"shoes-grid-left\">
\t\t\t<a href=\"#\">\t\t\t\t 
\t   \t\t     \t<div class=\"col-md-6 con-sed-grid\">
\t\t\t\t\t
\t   \t\t     \t\t<div class=\" elit-grid\"> 
\t\t\t\t\t\t
\t\t   \t\t     \t\t<h4>consectetur  elit</h4>
\t\t   \t\t     \t\t<label>FOR ALL PURCHASE VALUE</label>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
\t\t\t\t\t\t\t<span class=\"on-get\">GET NOW</span>\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<img class=\"img-responsive shoe-left\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/sh.jpg"), "html", null, true);
        echo "\" alt=\" \" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t
\t   \t\t     \t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">\t
\t   \t\t     \t<div class=\"col-md-6 con-sed-grid sed-left-top\">
\t   \t\t     \t\t<div class=\" elit-grid\"> 
\t\t   \t\t     \t\t<h4>consectetur  elit</h4>
\t\t   \t\t     \t\t<label>FOR ALL PURCHASE VALUE</label>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
\t\t\t\t\t\t\t<span class=\"on-get\">GET NOW</span>
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t<img class=\"img-responsive shoe-left\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/wa.jpg"), "html", null, true);
        echo "\" alt=\" \" />
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t   \t\t     \t</div>
\t\t\t\t\t</a>
\t   \t\t     </div>
                 
\t   \t\t     <div class=\"products\">
\t   \t\t     \t<h5 class=\"latest-product\">LATEST PRODUCTS</h5>\t
\t   \t\t     \t  <a class=\"view-all\" href=\"#\">VIEW ALL<span> </span></a> \t\t     
\t   \t\t     </div>
                 
                <div class=\"clearfix\"> </div>
                
                <br/><!-- Выводим flash-сообщение  -->
                <div class=\"left-n\" align=\"right\">
                    ";
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 121
            echo "                    <div>
                        ";
            // line 122
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                </div>
                <div class=\"clearfix\"> </div>
                <br/>
               
               
               
                 ";
        // line 131
        $context["count"] = 0;
        echo " 
                 ";
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_fields"]) ? $context["product_fields"] : $this->getContext($context, "product_fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 133
            echo "                 
                        ";
            // line 134
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 135
                echo "                        
                            ";
                // line 136
                if (($this->getAttribute($context["user"], "username", array()) == "marina")) {
                    // line 137
                    echo "                        
                                ";
                    // line 138
                    if (($this->getAttribute($context["product"], "userId", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        // line 139
                        echo "                                
                 
\t   \t\t     <div class=\"product-left\">
\t   \t\t     \t<div class=\"col-md-4 chain-grid\">
\t   \t\t     \t    <div class=\"left-grid-view grid-view-left\">
\t   \t\t     \t\t<a href=\"";
                        // line 144
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("umbrella_shop_single", array("product_id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\"><img class=\"img-responsive chain\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["product"], "photo", array())), "html", null, true);
                        echo "\" alt=\" \" /></a>
                        
   \t\t
\t   \t\t     \t\t<div class=\"grid-chain-bottom\">
                        
                            username = ";
                        // line 149
                        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
                        echo "<br/>
\t   \t\t     \t\t\t
                            <h6><a href=\"";
                        // line 151
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("umbrella_shop_single", array("product_id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
                        echo "</a></h6>
\t   \t\t     \t\t\t<div class=\"star-price\">
\t   \t\t     \t\t\t\t<div class=\"dolor-grid\"> 
\t\t   \t\t     \t\t\t\t<span class=\"actual\">300\$</span>
\t\t   \t\t     \t\t\t\t<span class=\"reducedfrom\">400\$</span>
\t\t   \t\t     \t\t\t\t  <span class=\"rating\">
\t\t\t\t\t\t\t\t\t        <input type=\"radio\" class=\"rating-input\" id=\"rating-input-1-5\" name=\"rating-input-1\"/>
\t\t\t\t\t\t\t\t\t        <label for=\"rating-input-1-5\" class=\"rating-star1\"> </label>
\t\t\t\t\t\t\t\t\t        <input type=\"radio\" class=\"rating-input\" id=\"rating-input-1-4\" name=\"rating-input-1\"/>
\t\t\t\t\t\t\t\t\t        <label for=\"rating-input-1-4\" class=\"rating-star1\"> </label>
\t\t\t\t\t\t\t\t\t        <input type=\"radio\" class=\"rating-input\" id=\"rating-input-1-3\" name=\"rating-input-1\"/>
\t\t\t\t\t\t\t\t\t        <label for=\"rating-input-1-3\" class=\"rating-star\"> </label>
\t\t\t\t\t\t\t\t\t        <input type=\"radio\" class=\"rating-input\" id=\"rating-input-1-2\" name=\"rating-input-1\"/>
\t\t\t\t\t\t\t\t\t        <label for=\"rating-input-1-2\" class=\"rating-star\"> </label>
\t\t\t\t\t\t\t\t\t        <input type=\"radio\" class=\"rating-input\" id=\"rating-input-1-1\" name=\"rating-input-1\"/>
\t\t\t\t\t\t\t\t\t        <label for=\"rating-input-1-1\" class=\"rating-star\"> </label>
\t\t\t\t\t\t\t    \t   </span>
\t   \t\t     \t\t\t\t</div>
\t   \t\t     \t\t\t\t<a class=\"now-get get-cart\" href=\"#\">ADD TO CART</a>
                                
                                
\t\t\t\t\t\t\t </div>
                             
\t   \t\t     \t\t   </div>
\t   \t\t     \t    </div>
                    </div>
                 </div>
                
                    <!-- Выводим построчно, по два товара в строке  -->    
\t   \t\t     \t\t\t\t";
                        // line 180
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 181
                        echo "                                ";
                        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) == 2)) {
                            // line 182
                            echo "\t\t                              <div class=\"clearfix\"> </div>
                                ";
                            // line 183
                            $context["count"] = 0;
                            // line 184
                            echo "                                ";
                        }
                        echo "            
                                
                            ";
                    }
                    // line 187
                    echo "                        ";
                }
                // line 188
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                  
                 
 </div>
 
";
    }

    public function getTemplateName()
    {
        return "UmbrellaShopBundle:Shop:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 190,  310 => 189,  304 => 188,  301 => 187,  294 => 184,  292 => 183,  289 => 182,  286 => 181,  284 => 180,  250 => 151,  245 => 149,  235 => 144,  228 => 139,  226 => 138,  223 => 137,  221 => 136,  218 => 135,  214 => 134,  211 => 133,  207 => 132,  203 => 131,  195 => 125,  186 => 122,  183 => 121,  179 => 120,  160 => 104,  143 => 90,  121 => 71,  97 => 50,  78 => 34,  59 => 18,  48 => 9,  45 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
