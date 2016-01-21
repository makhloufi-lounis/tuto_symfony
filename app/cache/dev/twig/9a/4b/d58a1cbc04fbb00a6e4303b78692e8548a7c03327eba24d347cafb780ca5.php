<?php

/* Sdz1BlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_9a4bd58a1cbc04fbb00a6e4303b78692e8548a7c03327eba24d347cafb780ca5 extends Twig_Template
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
            'body' => array($this, 'block_body'),
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
        echo "\tAjout - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<h2>Ajout</h2>
\t";
        // line 8
        $this->env->loadTemplate("Sdz1BlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 9
        echo "\t<p>
\t\tAttention: Les données serons ajouté directement sur la page d'accueil après validation du formulaire.
\t</p>
";
    }

    public function getTemplateName()
    {
        return "Sdz1BlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  53 => 8,  50 => 7,  47 => 6,  40 => 4,  37 => 3,  11 => 2,);
    }
}
