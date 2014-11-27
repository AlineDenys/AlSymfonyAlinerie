<?php

/* ::layout.html.twig */
class __TwigTemplate_e48a2fc87c7d9c29c51c984baacee87b3108da29147017e249606d78b06e8345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'article' => array($this, 'block_article'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

     <title> ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- CSS -->
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
  </head>

  <body>
\t<div class=\"container\">
\t\t<header>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\"><image src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alalinerie/images/headerBan.png"), "html", null, true);
        echo "\" class=\"img-responsive\"/></div>
\t\t</div>
\t\t<div class=\"row\">\t
\t\t
\t\t\t<div class=\"col-xs-12 col-sm-2 col-md-2 logo\"><h1><span class=\"bold\">ALINE</span>RIE.</h1></div>
\t\t\t<div class=\"col-md-10 rs\">
\t\t\t\t<a href=\"\" class=\"hover-shadow\" data-toggle=\"tooltip\" href=\"#\" title=\"Facebook\"><image src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alalinerie/images/rsFacebook.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t<a href=\"\" class=\"hover-shadow\" data-toggle=\"tooltip\" href=\"#\" title=\"Instagram\"><image src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alalinerie/images/rsInstagram.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t<a href=\"\" class=\"hover-shadow\" data-toggle=\"tooltip\" href=\"#\" title=\"YouTube\"><image src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alalinerie/images/rsYoutube.png"), "html", null, true);
        echo "\" /></a>
\t\t\t\t<a href=\"\" class=\"hover-shadow\" data-toggle=\"tooltip\" href=\"#\" title=\"Me contacter\"><image src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alalinerie/images/rsMail.png"), "html", null, true);
        echo "\"/></a>
\t\t\t</div>
\t\t</div>
\t\t</header>

\t<nav class=\"row navbar\" >
\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t<div class=\"navbar-header moderie\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\"></a>
\t\t\t</div>
\t   
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
";
        // line 54
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AlAlinerieBundle:Categorie:listeCategorie"));
        echo "\t
\t\t\t</div>
\t\t</div>
\t</nav>

";
        // line 59
        $this->displayBlock('article', $context, $blocks);
        // line 60
        echo "        
\t\t<section class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"widgetRS\">
\t\t\t\tWidget Réseau sociaux
\t\t\t</div>
\t\t</div>
\t\t</section>
        <div class=\"col-sm-6 col-md-4\">
        ";
        // line 69
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AlAlinerieBundle:Article:listeArticle"));
        echo "\t
        </div>
\t\t<section class=\"row\" style=\"margin:0px;\">
\t\t
  ";
        // line 73
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AlAlinerieBundle:Article:unZoom"));
        echo "\t
  ";
        // line 74
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AlAlinerieBundle:Article:unFac"));
        echo "\t
            
\t\t
\t\t</section>
\t
\t\t<footer>
\t\t\t<div class=\"row traits\">
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-2 bypasserie\">&nbsp;</div>
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-2 cuisinerie\">&nbsp;</div>
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-2 geekerie\">&nbsp;</div>
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-2 moderie\">&nbsp;</div>
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-2 musiquerie\">&nbsp;</div>
\t\t\t\t<div class=\"col-xs-2 col-sm-2 col-md-2 autrerie\">&nbsp;</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 copy\"><a data-toggle=\"tooltip\" href=\"#\" title=\"HTML5\"><i class=\"fa fa-html5\"></i></a> <a data-toggle=\"tooltip\" href=\"#\" title=\"CSS3\"><i class=\"fa fa-css3\"></i></a> <a data-toggle=\"tooltip\" href=\"#\" title=\"Font Awesome\"><i class=\"fa fa-flag\"></i></a> <a data-toggle=\"tooltip\" href=\"#\" title=\"Bootstrap Twitter\"><i class=\"fa fa-twitter\"></i></a> Copyrights ALINERIE. &copy; 2014 - <a href=\"\">Mentions légales</a></div>
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t</div>
\t\t</footer>

</div>
    <!-- Bootstrap  + jquery -->
   ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
<script>
      \$(function (){
   \$('a').tooltip();
});
    </script>

\t  </body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Alinerie";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e8fa645_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e8fa645_font-awesome.min_1.css");
            // line 18
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "e8fa645_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e8fa645_bootstrap.min_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "e8fa645_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e8fa645_part_3_hover-min_1.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "e8fa645_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e8fa645_part_3_style_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "e8fa645"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e8fa645.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "  
        ";
    }

    // line 59
    public function block_article($context, array $blocks = array())
    {
    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        // line 97
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "57f8873_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57f8873_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/57f8873_jquery-1.9.1.min_1.js");
            // line 101
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "57f8873_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57f8873_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/57f8873_dropdown_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "57f8873"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57f8873") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/57f8873.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 103
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 103,  227 => 101,  222 => 97,  219 => 96,  214 => 59,  209 => 19,  177 => 18,  172 => 14,  169 => 13,  163 => 10,  151 => 104,  149 => 96,  124 => 74,  120 => 73,  113 => 69,  102 => 60,  100 => 59,  92 => 54,  72 => 37,  68 => 36,  64 => 35,  60 => 34,  51 => 28,  42 => 21,  40 => 13,  34 => 10,  23 => 1,);
    }
}
