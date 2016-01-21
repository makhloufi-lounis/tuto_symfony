<?php

/* Sdz1BlogBundle::myLayout.html.twig */
class __TwigTemplate_4c86b93790318a769333edb9b55f626c29fbf1772c1c6aadad28c6d33385b104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::layoute.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoute.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 
       Test - ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
    ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        
         <h1>Rendering Recruitment Test</h1>
        \t
         <hr>
        \t
         
        \t
         ";
        // line 14
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 17
        echo "        \t\t        
    ";
    }

    // line 14
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 15
        echo "        \t
\t\t ";
    }

    public function getTemplateName()
    {
        return "Sdz1BlogBundle::myLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  68 => 14,  63 => 17,  61 => 14,  52 => 7,  49 => 6,  43 => 4,  38 => 3,  11 => 2,);
    }
}
