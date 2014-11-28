<?php

/* AlAlinerieBundle:Article:view.html.twig */
class __TwigTemplate_06493bdb9fc774f7a8f3159dce0c8a66425eb6647569e902764d1ac770f11679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
            'admin' => array($this, 'block_admin'),
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
    public function block_article($context, array $blocks = array())
    {
        // line 4
        echo "\t<section class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12\">
\t\t\t<div class=\"date\">";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d"), "html", null, true);
        echo "<span class=\"bold\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "m"), "html", null, true);
        echo "</span><br/>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "Y"), "html", null, true);
        echo "</div>
\t\t\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
\t\t\t  
\t\t\t<article>
\t\t\t\t
\t\t";
        // line 11
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array())))) {
            echo "\t<div class=\"carre\" style=\"background-image:url('../web/bundles/alalinerie/images/carre";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "getName", array(), "method"), "html", null, true);
            echo "png');\"><image src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-circle \"/></div>
                ";
        }
        // line 13
        echo "\t\t\t
\t\t\t<p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t</article>
\t\t</div>
\t</section>
";
    }

    // line 22
    public function block_admin($context, array $blocks = array())
    {
        // line 23
        echo "        
\t\t<section class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"widgetRS\">
\t\t\t
\t";
        // line 28
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "\t\t
  <p>
    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_alinerie_editarticle", array("article_id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"fa fa-pencil fa-1x\"></i>
      Modifier l'article
    </a>
    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_alinerie_deletearticle", array("article_id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"fa fa-trash fa-1x\"></i>
      Supprimer l'article
    </a>
      <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("al_alinerie_addarticle");
            echo "\" class=\"btn btn-info\">
      <i class=\"fa fa-plus fa-1x\"></i>
      Ajouter un nouvel article
    </a>
  </p>
                ";
        }
        // line 44
        echo "                </div>
\t\t</div>
\t\t</section>

";
    }

    public function getTemplateName()
    {
        return "AlAlinerieBundle:Article:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  102 => 38,  95 => 34,  88 => 30,  83 => 28,  76 => 23,  73 => 22,  63 => 14,  60 => 13,  51 => 11,  44 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
