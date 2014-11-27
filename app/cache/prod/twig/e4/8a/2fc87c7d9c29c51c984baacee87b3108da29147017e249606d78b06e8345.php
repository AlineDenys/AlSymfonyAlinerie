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
\t\t\t\t<ul class=\"nav\" role=\"navigation\">
\t\t\t\t\t<li class=\"active bypasserie shadow-radial\"> <a href=\"#\"><span class=\"bold\">Bypass</span>erie.</a> </li>
\t\t\t\t\t<li class=\"cuisinerie shadow-radial\"> <a href=\"#\"><span class=\"bold\">Cuisine</span>rie.</a> </li>
\t\t\t\t\t<li class=\"geekerie shadow-radial\"> <a href=\"#\"><span class=\"bold\">Geek</span>erie.</a> </li>
\t\t\t\t\t<li class=\"moderie shadow-radial\"> <a href=\"#\"><span class=\"bold\">Mode</span>rie.</a> </li>
\t\t\t\t\t<li class=\"musiquerie shadow-radial\"> <a href=\"#\"><span class=\"bold\">Musique</span>rie.</a> </li>
\t\t\t\t\t<li class=\"autrerie shadow-radial\"> <a href=\"#\"><span class=\"bold\">Autre</span>rie.</a> </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

";
        // line 66
        $this->displayBlock('article', $context, $blocks);
        // line 67
        echo "        
\t\t<section class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"widgetRS\">
\t\t\t\tWidget Réseau sociaux
\t\t\t</div>
\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"row\">
\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t<h3><span class=\"bold\">Dernières ALINE</span>RIES.</h3>
\t\t\t<ul class=\"dernieresAlineries\">
\t\t\t<li class=\"bypasserie shadow-radial\" ><a href=\"\" ><div class=\"dateSansTrait\">26<span class=\"bold\">02</span><br/>2014</div><p><i class=\"fa fa-circle fa-1x\"></i>Mon bypass et moi</p></a></li>
\t\t\t<li class=\"cuisinerie shadow-radial\"><div class=\"dateSansTrait\">26<span class=\"bold\">02</span><br/>2014</div><p><i class=\"fa fa-circle\"></i>Une belle tarte</p></li>
\t\t\t<li class=\"moderie shadow-radial\"><div class=\"dateSansTrait\">26<span class=\"bold\">02</span><br/>2014</div><p><i class=\"fa fa-circle\"></i>Mon truc en plume</p></li>
\t\t\t<li class=\"geekerie shadow-radial\"><div class=\"dateSansTrait\">26<span class=\"bold\">02</span><br/>2014</div><p><i class=\"fa fa-circle\"></i>ggggg</p></li>
\t\t\t<li class=\"autrerie shadow-radial\"><div class=\"dateSansTrait\">26<span class=\"bold\">02</span><br/>2014</div><p><i class=\"fa fa-circle\"></i>ggggg</p></li>
\t\t\t<li class=\"musiquerie shadow-radial\"><div class=\"dateSansTrait\">26<span class=\"bold\">02</span><br/>2014</div><p><i class=\"fa fa-circle\"></i>ggggg</p></li>
\t\t\t
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t<h3><span class=\"bold\">ZOOM</span> SUR.</h3><i>Un de mes partenaires ...</i>
\t\t\t<div class=\"zoom\">
\t\t\t<img src=\"upload/logoLesCouleursdAnnie.png\"/><p>Un petit zoom sur ma petite maman, Annie Buniet, artiste peintre, sans laquelle je ne serais pas qui je suis. Merci Maman, je t'aime.<br/><br/><strong><i class=\"fa fa-link\"></i> <a href=\"\">www.lescouleursdannie.com</a></strong></p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t<h3><span class=\"bold\">QUESTION|</span>réponse.</h3><i>Parce que vos questions comptent ...</i>
\t\t\t<div class=\"QR\"><br/>
\t\t\t\t<span style=\"text-align:center;\"><i class=\"fa fa-quote-left\"></i>  Pourquoi avoir fait ce blog ?<br/><strong>Camille (62)</strong></span><p><br/>La vidéo d’anniversaire des 100 épisodes d’Enjoy Phoenix m’a ouvert les yeux sur ce que je pouvais faire pour retrouver un semblant de bonne humeur dans ma vie. J’espère que mes conseils et aventures vous plairont et pourront peut être vous aider à votre tour.
\t\t\t<br/><br/>
\t\t\tMerci à Enjoy Phoenix et à vous tous.</p>
\t\t\t\t
\t\t\t</div>
\t\t</div>
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
        // line 123
        $this->displayBlock('javascripts', $context, $blocks);
        // line 131
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645_0") : $this->env->getExtension('assets')->getAssetUrl("css/e8fa645_font-awesome.min_1.css");
            // line 18
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
            // asset "e8fa645_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645_1") : $this->env->getExtension('assets')->getAssetUrl("css/e8fa645_bootstrap.min_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
            // asset "e8fa645_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645_2") : $this->env->getExtension('assets')->getAssetUrl("css/e8fa645_part_3_hover-min_1.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
            // asset "e8fa645_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645_3") : $this->env->getExtension('assets')->getAssetUrl("css/e8fa645_part_3_style_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "e8fa645"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8fa645") : $this->env->getExtension('assets')->getAssetUrl("css/e8fa645.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "  
        ";
    }

    // line 66
    public function block_article($context, array $blocks = array())
    {
    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        // line 124
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "57f8873_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57f8873_0") : $this->env->getExtension('assets')->getAssetUrl("js/57f8873_jquery-1.9.1.min_1.js");
            // line 128
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "57f8873_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57f8873_1") : $this->env->getExtension('assets')->getAssetUrl("js/57f8873_dropdown_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "57f8873"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57f8873") : $this->env->getExtension('assets')->getAssetUrl("js/57f8873.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 130
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
        return array (  262 => 130,  242 => 128,  237 => 124,  234 => 123,  229 => 66,  224 => 19,  192 => 18,  187 => 14,  184 => 13,  178 => 10,  166 => 131,  164 => 123,  106 => 67,  104 => 66,  72 => 37,  68 => 36,  64 => 35,  60 => 34,  51 => 28,  42 => 21,  40 => 13,  34 => 10,  23 => 1,);
    }
}
