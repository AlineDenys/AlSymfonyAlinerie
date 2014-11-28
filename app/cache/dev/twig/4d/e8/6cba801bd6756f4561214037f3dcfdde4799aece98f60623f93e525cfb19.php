<?php

/* AlAlinerieBundle:Article:edit.html.twig */
class __TwigTemplate_4de86cba801bd6756f4561214037f3dcfdde4799aece98f60623f93e525cfb19 extends Twig_Template
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
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_article($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Modifier un article</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "AlAlinerieBundle:Article:form.html.twig");
        echo "

  <p>
    Vous éditez un article déjà existant, merci de ne pas changer
    l'esprit général de l'article déjà publié.
  </p>

  <p>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_alinerie_viewarticle", array("article_id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"fa fa-angle-left fa-1x\"></i>
      Retour à l'article
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "AlAlinerieBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
