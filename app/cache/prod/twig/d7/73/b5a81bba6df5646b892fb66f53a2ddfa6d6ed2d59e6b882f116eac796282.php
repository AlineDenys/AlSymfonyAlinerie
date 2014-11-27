<?php

/* AlAlinerieBundle::listecategorie.html.twig */
class __TwigTemplate_d773b5a81bba6df5646b892fb66f53a2ddfa6d6ed2d59e6b882f116eac796282 extends Twig_Template
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
        echo "<ul class=\"nav\" role=\"navigation\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCategories"]) ? $context["listeCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 3
            echo "\t\t\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categ"], "slug", array()), "html", null, true);
            echo " shadow-radial\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_alinerie_categorie", array("categorie_id" => $this->getAttribute($context["categ"], "id", array()))), "html", null, true);
            echo "\"><span class=\"bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categ"], "bold", array()), "html", null, true);
            echo "</span>";
            if ((($this->getAttribute($context["categ"], "slug", array()) == "geekerie") || ($this->getAttribute($context["categ"], "slug", array()) == "bypasserie"))) {
                echo "erie.";
            } else {
                echo "rie.";
            }
            echo "</a> </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "AlAlinerieBundle::listecategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
