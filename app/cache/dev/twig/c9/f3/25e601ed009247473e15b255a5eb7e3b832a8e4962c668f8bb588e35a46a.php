<?php

/* Sdz1BlogBundle:Blog:voir.html.twig */
class __TwigTemplate_c9f325e601ed009247473e15b255a5eb7e3b832a8e4962c668f8bb588e35a46a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("Sdz1BlogBundle::myLayout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Sdz1BlogBundle::myLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tLecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo " </h2>
\t<i> Par ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo " </i>
\t<div class=\"well\">
\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()), "html", null, true);
        echo "
\t</div>
\t<p>
\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<br/>
\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-edit\"></i>
\t\t\tModifier l'article
\t\t</a>
\t\t<br/>
\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-trash\"></i>
\t\t\tSupprimer l'article
\t\t</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "Sdz1BlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  76 => 18,  68 => 13,  62 => 10,  55 => 8,  50 => 7,  47 => 6,  40 => 4,  37 => 3,  11 => 2,);
    }
}
