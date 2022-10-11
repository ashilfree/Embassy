<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/articleFr.html.twig */
class __TwigTemplate_ea01b476c29354e3d9008f3d6a466e49e44d49896aad4ee877725e1f5bf90446 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/articleFr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/articleFr.html.twig"));

        $this->parent = $this->loadTemplate("baseFr.html.twig", "pages/articleFr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container fp-slider\">
        <div id=\"carousel-example-generic\" class=\"carousel slide fp-slider\" data-ride=\"carousel\" data-wrap=\"false\"
             data-pause=\"hover\">
            <div class=\"carousel-inner\">
                ";
        // line 7
        echo twig_include($this->env, $context, "includes/_slider_fr.html.twig");
        echo "
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"prev\">&nbsp;<span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"next\">&nbsp;<span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
    </div>
    <div id=\"main\" class=\"wrap container mo-background\" role=\"document\">

        <div class=\"content row\">
            <main class=\"main article\">
                <div class=\"mo-page-content homepage-tp\">
                    <div class=\"mo-front-page\">
                        <div class=\"mo-home-widgets\">
                            <div class=\"mo-frontpage-widgets widget text-5 widget_text\">
                                <div class=\"textwidget\">
                                    <div class=\"mo-flipbox\">
                                        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document");
        echo "\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\">
                                                <i class=\"fa fa-file-o fa-lg\"></i>
                                                <p>Documents importants</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-calendar fa-lg\"></i>
                                                <p>Prendre rendez-vous</p>
                                            </div>
                                        </a></div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-map-signs fa-lg\"></i>
                                                <p>Trucs et astuces utiles</p>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div style=\"background-color: #E6E6E6;padding:10px\">
                            <h1 class=\"text-center\">Nouvelles</h1>
                            <div class=\"blogrollcontent mainroll\">
                                <article
                                        class=\"post type-post status-publish format-standard has-post-thumbnail hentry\">
                                    <div class=\"blogrollbox\"><a class=\"darken\"><img
                                                    src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 51, $this->source); })()), "imageFile"), "html", null, true);
        echo "\"
                                                    class=\"img-responsive wp-post-image default-home-seal\"
                                                    alt=\"Independence and Youth Day\" title=\"Independence and Youth Day\"
                                                    style=\"opacity: 1;\"></a></div>
                                    <h2 class=\"entry-title\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 55, $this->source); })()), "titleFr", [], "any", false, false, false, 55), "html", null, true);
        echo "</h2>
                                    <p class=\"blog-meta\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 56, $this->source); })()), "stringPublishedAt", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                                    <div class=\"entry-summary\">
                                        <p>";
        // line 58
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "descriptionFr", [], "any", false, false, false, 58);
        echo "</p>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div><!-- /.content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/articleFr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 58,  135 => 56,  131 => 55,  124 => 51,  95 => 25,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFr.html.twig' %}
{% block body %}
    <div class=\"container fp-slider\">
        <div id=\"carousel-example-generic\" class=\"carousel slide fp-slider\" data-ride=\"carousel\" data-wrap=\"false\"
             data-pause=\"hover\">
            <div class=\"carousel-inner\">
                {{ include('includes/_slider_fr.html.twig') }}
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"prev\">&nbsp;<span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"next\">&nbsp;<span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
    </div>
    <div id=\"main\" class=\"wrap container mo-background\" role=\"document\">

        <div class=\"content row\">
            <main class=\"main article\">
                <div class=\"mo-page-content homepage-tp\">
                    <div class=\"mo-front-page\">
                        <div class=\"mo-home-widgets\">
                            <div class=\"mo-frontpage-widgets widget text-5 widget_text\">
                                <div class=\"textwidget\">
                                    <div class=\"mo-flipbox\">
                                        <a href=\"{{ path('document') }}\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\">
                                                <i class=\"fa fa-file-o fa-lg\"></i>
                                                <p>Documents importants</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-calendar fa-lg\"></i>
                                                <p>Prendre rendez-vous</p>
                                            </div>
                                        </a></div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-map-signs fa-lg\"></i>
                                                <p>Trucs et astuces utiles</p>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div style=\"background-color: #E6E6E6;padding:10px\">
                            <h1 class=\"text-center\">Nouvelles</h1>
                            <div class=\"blogrollcontent mainroll\">
                                <article
                                        class=\"post type-post status-publish format-standard has-post-thumbnail hentry\">
                                    <div class=\"blogrollbox\"><a class=\"darken\"><img
                                                    src=\"{{ vich_uploader_asset(article, 'imageFile') }}\"
                                                    class=\"img-responsive wp-post-image default-home-seal\"
                                                    alt=\"Independence and Youth Day\" title=\"Independence and Youth Day\"
                                                    style=\"opacity: 1;\"></a></div>
                                    <h2 class=\"entry-title\">{{ article.titleFr }}</h2>
                                    <p class=\"blog-meta\">{{ article.stringPublishedAt }}</p>
                                    <div class=\"entry-summary\">
                                        <p>{{ article.descriptionFr|raw }}</p>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div><!-- /.content -->
{% endblock %}

", "pages/articleFr.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/articleFr.html.twig");
    }
}
