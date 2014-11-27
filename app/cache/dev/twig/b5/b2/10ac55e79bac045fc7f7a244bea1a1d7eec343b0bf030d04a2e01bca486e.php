<?php

/* AlAlinerieBundle::fac.html.twig */
class __TwigTemplate_b5b210ac55e79bac045fc7f7a244bea1a1d7eec343b0bf030d04a2e01bca486e extends Twig_Template
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
        echo "<div class=\"col-sm-12 col-md-4\">
    
     ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unFac"]) ? $context["unFac"] : $this->getContext($context, "unFac")));
        foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
            // line 4
            echo "\t\t\t<h3><span class=\"bold\">QUESTION|</span>réponse.</h3><i>Parce que vos questions comptent ...</i>
\t\t\t<div class=\"QR\"><br/>
\t\t\t\t<span style=\"text-align:center;\"><i class=\"fa fa-quote-left\"></i>  ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["fac"], "title", array()), "html", null, true);
            echo "<br/><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fac"], "author", array()), "html", null, true);
            echo "</strong></span><p><br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fac"], "content", array()), "html", null, true);
            echo "
\t\t\t\t
\t\t\t</div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t</div>";
    }

    public function getTemplateName()
    {
        return "AlAlinerieBundle::fac.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
