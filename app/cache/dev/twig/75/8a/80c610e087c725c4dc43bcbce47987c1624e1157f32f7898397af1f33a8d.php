<?php

/* ::layoute.html.twig */
class __TwigTemplate_758a80c610e087c725c4dc43bcbce47987c1624e1157f32f7898397af1f33a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv=\"Content-type\" content=\"text/html  charset= utf-8\" />
       <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
       ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
       <div class=\"container\">
       \t\t<div id=\"header\" class=\"hero-unit\">
       \t\t\t<h1>Mon projet Symfony</h1>
       \t\t\t<p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero. </p>
\t\t\t\t<p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votresite-web-avec-le-framework-symfony2\">
\t\t\t\t\t\tLire le tutoriel »
\t\t\t\t</a></p>
       \t\t</div>
       \t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Le blog</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">Accueil du blog</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter un article</a></li>
\t\t\t\t\t</ul>
\t                ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("Sdz1BlogBundle:myBlog:menu", array("nombre" => 3)));
        echo " 
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "\t\t\t\t</div>
\t\t\t</div>
       </div>
       <footer>
\t\t\t\t<p>The sky's the limit © 2012 and beyond.</p>
\t   </footer>
\t   ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Sdz1 ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t   ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t\t\t";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t";
        // line 39
        echo "\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"> </script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t   ";
    }

    public function getTemplateName()
    {
        return "::layoute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  112 => 39,  110 => 38,  107 => 37,  103 => 30,  100 => 29,  93 => 7,  90 => 6,  84 => 5,  78 => 42,  76 => 37,  68 => 31,  66 => 29,  60 => 26,  55 => 24,  51 => 23,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
