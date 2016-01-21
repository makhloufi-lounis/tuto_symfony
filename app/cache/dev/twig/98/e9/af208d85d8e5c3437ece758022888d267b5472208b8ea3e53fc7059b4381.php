<?php

/* Sdz1BlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_98e9af208d85d8e5c3437ece758022888d267b5472208b8ea3e53fc7059b4381 extends Twig_Template
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
        echo "
  <fieldset>
     \t<div class=\"well\">
     \t   <form method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t\t\t</form>.
     \t</div>
   </fieldset>
   
   

";
    }

    public function getTemplateName()
    {
        return "Sdz1BlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
