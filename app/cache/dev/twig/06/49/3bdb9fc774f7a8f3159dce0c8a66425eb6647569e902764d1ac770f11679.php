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
\t\t\t<div class=\"carre\" style=\"background-image:url('../web/bundles/alalinerie/images/carreBypasserie.png');\"><image src=\"../web/bundles/alalinerie/upload/photo.jpg\" class=\"img-circle \"/></div>
\t\t\t
\t\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t</article>
\t\t</div>
\t</section>
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
        return array (  52 => 13,  43 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
