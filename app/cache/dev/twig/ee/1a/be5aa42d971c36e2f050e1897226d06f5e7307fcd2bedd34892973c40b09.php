<?php

/* Sdz1BlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_ee1abe5aa42d971c36e2f050e1897226d06f5e7307fcd2bedd34892973c40b09 extends Twig_Template
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
        echo "\tModifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<h2>Modifier un article</h2>
\t";
        // line 8
        $this->env->loadTemplate("Sdz1BlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 9
        echo "\t<p>
\t\tVous éditez un article déjà existant,
\t\tne le changez pas trop pour éviter
\t\taux membres de ne pas comprendre
\t\tce qu'il se passe.
\t</p>
\t<p>
\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à l'article
\t\t</a>
\t</p>

";
    }

    public function getTemplateName()
    {
        return "Sdz1BlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  55 => 9,  53 => 8,  50 => 7,  47 => 6,  40 => 4,  37 => 3,  11 => 2,);
    }
}
