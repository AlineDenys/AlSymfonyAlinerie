<?php

/* AlAlinerieBundle::listearticle.html.twig */
class __TwigTemplate_2cfa71a9d01392c4ace8fea8856ec748143b9332da4e15c64135d813830d2644 extends Twig_Template
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
        echo "
\t\t\t<h3><span class=\"bold\">Dernières ALINE</span>RIES.</h3>
\t\t\t<ul class=\"dernieresAlineries\">
\t\t\t
                ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeAlineries"]) ? $context["listeAlineries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["alinerie"]) {
            // line 6
            echo "            <li class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alinerie"], "categorie", array()), "getSlug", array(), "method"), "html", null, true);
            echo " shadow-radial\" ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_alinerie_viewarticle", array("article_id" => $this->getAttribute($context["alinerie"], "id", array()))), "html", null, true);
            echo "\" ><div class=\"dateSansTrait\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alinerie"], "date", array()), "d"), "html", null, true);
            echo "<span class=\"bold\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alinerie"], "date", array()), "m"), "html", null, true);
            echo "</span><br/>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alinerie"], "date", array()), "Y"), "html", null, true);
            echo "</div><p><i class=\"fa fa-circle fa-1x\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alinerie"], "title", array()), "html", null, true);
            echo "</p></a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alinerie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t\t
\t\t\t</ul>
";
    }

    public function getTemplateName()
    {
        return "AlAlinerieBundle::listearticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
