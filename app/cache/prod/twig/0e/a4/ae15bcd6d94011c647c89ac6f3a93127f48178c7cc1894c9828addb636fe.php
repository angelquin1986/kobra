<?php

/* baselogin.html.twig */
class __TwigTemplate_0ea4ae15bcd6d94011c647c89ac6f3a93127f48178c7cc1894c9828addb636fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"bg-black\">
    <head>
        <meta charset=\"UTF-8\" />        
       
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"bg-black\">

        <div>
            ";
        // line 20
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 22
        echo "        </div>
        
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Intranet | Log in!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            
            
        ";
    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 21
        echo "            ";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/jquery-2.1.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            
        ";
    }

    public function getTemplateName()
    {
        return "baselogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  105 => 26,  97 => 24,  93 => 21,  90 => 20,  82 => 11,  78 => 10,  73 => 9,  70 => 8,  64 => 7,  58 => 30,  55 => 25,  53 => 24,  47 => 20,  38 => 15,  32 => 7,  24 => 1,  172 => 85,  166 => 79,  159 => 77,  152 => 73,  146 => 70,  138 => 67,  134 => 66,  129 => 63,  125 => 61,  116 => 58,  111 => 55,  107 => 54,  102 => 25,  96 => 50,  87 => 47,  84 => 46,  79 => 45,  75 => 44,  68 => 39,  66 => 38,  62 => 36,  56 => 33,  51 => 30,  49 => 22,  43 => 26,  39 => 25,  36 => 8,  31 => 7,  28 => 6,);
    }
}
