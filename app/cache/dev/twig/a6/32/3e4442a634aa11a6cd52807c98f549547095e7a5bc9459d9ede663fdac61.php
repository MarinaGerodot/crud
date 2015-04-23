<?php

/* UmbrellaShopBundle:Shop:login.html.twig */
class __TwigTemplate_a6323e4442a634aa11a6cd52807c98f549547095e7a5bc9459d9ede663fdac61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("UmbrellaShopBundle::base_login.html.twig");
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
        return "UmbrellaShopBundle::base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 40
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Login
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 13
        echo "
<div class=\"account_grid\">
    <div class=\" login-right\">
\t  \t<h3>REGISTERED CUSTOMERS</h3>
        <p>If you have an account with us, please log in.</p>
        <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
            <div>
\t\t\t\t<span>User name<label>*</label></span>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/> 
            </div>
            <div>
\t\t\t\t<span>Password<label>*</label></span>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\"/> 
            </div>
            <a class=\"forgot\" href=\"#\">Forgot Your Password?</a>
            <input type=\"submit\" value=\"login\"/>
        </form>
    </div>\t
    <div class=\" login-left\">
  \t     <h3>NEW CUSTOMERS</h3>
            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
\t\t\t <a class=\"acount-btn\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("umbrella_shop_register");
        echo "\">Create an Account</a>
    </div>
    <div class=\"clearfix\"> </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaShopBundle:Shop:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  75 => 21,  69 => 18,  62 => 13,  56 => 11,  54 => 10,  51 => 9,  48 => 8,  43 => 4,  40 => 3,  36 => 1,  34 => 40,  11 => 1,);
    }
}
