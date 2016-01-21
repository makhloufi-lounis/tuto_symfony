<?php

/* Sdz1BlogBundle:Blog:affichage.html.twig */
class __TwigTemplate_bf825bba8a6a9a09ec51d4b9098c4de066a7215d8da83d0ac8643c5d4a10a057 extends Twig_Template
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
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" /> 
        <title>Bienvenue sur ma premi�re page avec le Site du Z�ro!</title>
    </head>
    <body>
        <h1>Hello Men !</h1>
        <p>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => 9));
        echo "\"> lien vers l'article ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</a>
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "              <p> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Sdz1BlogBundle:Blog:affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  40 => 12,  36 => 11,  30 => 10,  19 => 1,);
    }
}
