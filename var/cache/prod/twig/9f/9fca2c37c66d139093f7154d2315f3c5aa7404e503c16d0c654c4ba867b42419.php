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

/* pages/contactEn.html.twig */
class __TwigTemplate_185b1e216d2ba8a78690d023b816f0f86215e1a8e4708dd7814773945f0753c3 extends Template
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
        return "baseEn.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseEn.html.twig", "pages/contactEn.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>Embassy</h1>
            </header>
        </div>
    </div>



    <div id=\"main\" class=\"wrap container\" role=\"document\">

        <div class=\"content row\">

            <div class=\"mo-wrapper\">



                <main class=\"main\">

                    <div class=\"mo-page-content location\">
                        <div class=\"location-box\">
                            <h3>Embassy of Algeria in Kuwait</h3>
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
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    public function getTemplateName()
    {
        return "pages/contactEn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  101 => 48,  97 => 47,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contactEn.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/contactEn.html.twig");
    }
}
