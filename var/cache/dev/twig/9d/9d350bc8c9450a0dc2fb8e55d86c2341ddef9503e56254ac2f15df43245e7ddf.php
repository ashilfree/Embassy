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

/* pages/contact.html.twig */
class __TwigTemplate_ed9f57925a335252c0c445543f128695ba5ef60556c7d3d250f9ca449f551969 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/contact.html.twig", 1);
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
        echo "    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>                    السفارة\t\t\t\t\t</h1>
            </header>
        </div>
    </div>



    <div id=\"main\" class=\"wrap container\" role=\"document\">

        <div class=\"content row\">

            <div class=\"mo-wrapper\">



                <main class=\"main\">

                    <div class=\"mo-page-content location\">
                        <div class=\"location-box\">
                            <h3>سفارة الجزائر في الكويت</h3>
                            <div class=\"pg-split\">
                                <div class=\"map-container\">
                                    <div id=\"map\" style=\"position: absolute;top: 0;right: 0;bottom: 0;left: 0\"></div>
                                </div>
                            </div>
                            <p>Address: P.Box:578 safat 13006- kuwait<br>
                                22519987 - 22519984<br>
                                ambalg.kw@gmail.com<br>
                                www.algerianembassy-kuwait.org<br>
                            </p>
                        </div>
                    </div>
                </main>

            </div>

        </div><!-- /.content -->
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script>
        var icon = L.icon({
            iconUrl: \"";
        // line 50
        echo "/assets/images//marker-icon.png";
        echo "\",

        });
        var map = L.map('map').setView([29.366907, 48.014658], 15);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiYXNoaWxmcmVlIiwiYSI6ImNrOHZqcThlZTAwd3AzbW50dWV2Znl5bngifQ.fGFQxTQbRbL-UfyJAul9zA'
        }).addTo(map);
         L.marker([29.366907, 48.014658], {icon: icon}).addTo(map);
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  131 => 48,  121 => 47,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>                    السفارة\t\t\t\t\t</h1>
            </header>
        </div>
    </div>



    <div id=\"main\" class=\"wrap container\" role=\"document\">

        <div class=\"content row\">

            <div class=\"mo-wrapper\">



                <main class=\"main\">

                    <div class=\"mo-page-content location\">
                        <div class=\"location-box\">
                            <h3>سفارة الجزائر في الكويت</h3>
                            <div class=\"pg-split\">
                                <div class=\"map-container\">
                                    <div id=\"map\" style=\"position: absolute;top: 0;right: 0;bottom: 0;left: 0\"></div>
                                </div>
                            </div>
                            <p>Address: P.Box:578 safat 13006- kuwait<br>
                                22519987 - 22519984<br>
                                ambalg.kw@gmail.com<br>
                                www.algerianembassy-kuwait.org<br>
                            </p>
                        </div>
                    </div>
                </main>

            </div>

        </div><!-- /.content -->
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        var icon = L.icon({
            iconUrl: \"{{ '/assets/images//marker-icon.png' }}\",

        });
        var map = L.map('map').setView([29.366907, 48.014658], 15);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiYXNoaWxmcmVlIiwiYSI6ImNrOHZqcThlZTAwd3AzbW50dWV2Znl5bngifQ.fGFQxTQbRbL-UfyJAul9zA'
        }).addTo(map);
         L.marker([29.366907, 48.014658], {icon: icon}).addTo(map);
    </script>
{% endblock %}", "pages/contact.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/contact.html.twig");
    }
}
