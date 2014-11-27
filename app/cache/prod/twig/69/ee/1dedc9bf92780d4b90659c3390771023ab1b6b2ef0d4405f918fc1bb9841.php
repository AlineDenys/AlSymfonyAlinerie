<?php

/* AlAlinerieBundle::viewCategorie.html.twig */
class __TwigTemplate_69ee1dedc9bf92780d4b90659c3390771023ab1b6b2ef0d4405f918fc1bb9841 extends Twig_Template
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
\t\t\t\t\t\t  
\t\t\t<article>
\t\t\t\t
\t\t\t<div class=\"carreCateg\" style=\"background-image:url('images/carre";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "name", array()), "html", null, true);
        echo "png');\"><div class=\"rond ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "slug", array()), "html", null, true);
        echo "\"/><h3><span class=\"bold\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "bold", array()), "html", null, true);
        echo "</span>";
        if ((($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "slug", array()) == "geekerie") || ($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "slug", array()) == "bypasserie"))) {
            echo "ERIE.";
        } else {
            echo "RIE.";
        }
        echo "</h3></div></div>
\t\t\t
\t\t\t<p>
\t\t\t<ul class=\"listeCateg\">
                
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeArticles"]) ? $context["listeArticles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "                
\t\t\t<li>
\t\t\t<div class=\"titreCateg titreCateg";
            // line 17
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "slug", array())), "html", null, true);
            echo " float\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_alinerie_homepage", array("article_id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><div class=\"dateSansTrait\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d"), "html", null, true);
            echo "<span class=\"bold\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "m"), "html", null, true);
            echo "</span><br/>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "Y"), "html", null, true);
            echo "</div> <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4></a></div>
\t\t\t<p>
                ";
            // line 19
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["article"], "content", array())) > 150)) ? ((twig_slice($this->env, $this->getAttribute($context["article"], "content", array()), 0, 150) . "…")) : ($this->getAttribute($context["article"], "content", array()))), "html", null, true);
            echo "
                </p>
\t\t\t</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t
\t\t\t</ul>
\t\t\t</p>
\t\t\t</article>
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "AlAlinerieBundle::viewCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  79 => 19,  64 => 17,  60 => 15,  56 => 14,  38 => 9,  31 => 4,  28 => 3,);
    }
}
