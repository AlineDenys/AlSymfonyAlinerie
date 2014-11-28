<?php

/* AlAlinerieBundle::zoom.html.twig */
class __TwigTemplate_25a932e4eeeafd4cbb9f540c8b23227532fcca593da52886ed45edfed061bae8 extends Twig_Template
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
        echo "\t\t<div class=\"col-sm-6 col-md-4\">
            ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unZoom"]) ? $context["unZoom"] : $this->getContext($context, "unZoom")));
        foreach ($context['_seq'] as $context["_key"] => $context["zoom"]) {
            // line 3
            echo "            
\t\t\t<h3><span class=\"bold\">ZOOM</span> SUR.</h3><i>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["zoom"], "title", array()), "html", null, true);
            echo "</i>
\t\t\t<div class=\"zoom\">
\t\t\t<p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["zoom"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t</div>
            
            
            <p>
    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_alinerie_editaside", array("aside_id" => $this->getAttribute($context["zoom"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"fa fa-pencil fa-1x\"></i>
      Modifier l'encart
                </a></p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            
            
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "AlAlinerieBundle::zoom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  42 => 11,  34 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
