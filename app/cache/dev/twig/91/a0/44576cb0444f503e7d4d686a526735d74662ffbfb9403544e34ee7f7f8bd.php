<?php

/* Sdz1BlogBundle:Blog:myVieu.html.twig */
class __TwigTemplate_91a044576cb0444f503e7d4d686a526735d74662ffbfb9403544e34ee7f7f8bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec le Site du Zéro!</title>
    </head>
    <body>
        <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple
            : afficher ce hello world !
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Sdz1BlogBundle:Blog:myVieu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
