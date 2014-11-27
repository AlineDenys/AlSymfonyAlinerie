<?php

/* AlAlinerieBundle:Article:view.html.twig */
class __TwigTemplate_06493bdb9fc774f7a8f3159dce0c8a66425eb6647569e902764d1ac770f11679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.twig.html");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.twig.html";
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
\t\t\t<div class=\"date\">26<span class=\"bold\">02</span><br/>2014</div>
\t\t\t<h2>VOILA UN BEAU GROS TITRE.</h2>
\t\t\t  
\t\t\t<article>
\t\t\t\t
\t\t\t<div class=\"carre\" style=\"background-image:url('../web/bundles/alalinerie/images/carreBypasserie.png');\"><image src=\"../web/bundles/alalinerie/upload/photo.jpg\" class=\"img-circle \"/></div>
\t\t\t
\t\t\t<p>Bonjour,<br/><br/>Je m’appelle Aline, j’ai 26 ans et suis maman d’un petit garçon de 2 ans. J’habite à Téteghem près de Dunkerque dans le nord de la France. Au chômage et me sentant seule, j’ai décidé de partager les activités que j’aime avec vous. Alors, pourquoi faire un blog, me direz-vous ? Vu les dixaines de milliers de blogs sur la toile ! 
\t\t\t<br/><br/>La vidéo d’anniversaire des 100 épisodes d’Enjoy Phoenix m’a ouvert les yeux sur ce que je pouvais faire pour retrouver un semblant de bonne humeur dans ma vie. J’espère que mes conseils et aventures vous plairont et pourront peut être vous aider à votre tour.
\t\t\t<br/><br/>
\t\t\tMerci à Enjoy Phoenix et à vous tous.
\t\t\tA bientôt<br/><br/>
\t\t\tAline
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
        return array (  31 => 4,  28 => 3,);
    }
}
