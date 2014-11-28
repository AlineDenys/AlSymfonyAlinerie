<?php

/* AlAlinerieBundle:Aside:edit.html.twig */
class __TwigTemplate_9200781012fb1edf47bbacf10ba393f96aba63a4566d48a9ecf319e9db2a5070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Modifier un encart - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_article($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (($this->getAttribute((isset($context["aside"]) ? $context["aside"] : $this->getContext($context, "aside")), "type", array()) == 1)) {
            // line 10
            echo "  <h2>Modifier le zoom sur.</h2>
";
        } else {
            // line 12
            echo "  <h2>Modifier la question|réponse.</h2>
";
        }
        // line 14
        echo "
  ";
        // line 15
        echo twig_include($this->env, $context, "AlAlinerieBundle:Aside:form.html.twig");
        echo "

<p>Après la modification, vous serez redirigé vers la page d'accueil.</p>

  <p>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("al_alinerie_homepage");
        echo "\" class=\"btn btn-default\">
      <i class=\"fa fa-angle-left fa-1x\"></i>
      Retour à l'accueil
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "AlAlinerieBundle:Aside:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  58 => 15,  55 => 14,  51 => 12,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
