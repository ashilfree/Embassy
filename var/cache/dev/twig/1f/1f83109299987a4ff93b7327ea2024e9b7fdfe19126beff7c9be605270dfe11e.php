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

/* pages/bookingFr.html.twig */
class __TwigTemplate_dc5210d20addeb6d07b591482a5c7bce236eb01fdcf38c5af5404c699cf8f7a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/bookingFr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/bookingFr.html.twig"));

        $this->parent = $this->loadTemplate("baseFr.html.twig", "pages/bookingFr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>Prendre rendez-vous</h1>
            </header>
        </div>
    </div>

    <div class=\"container\">
        <div style=\"margin-top:40px\" class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"content m-5\">
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking.appointments.fr");
        echo "\">
                        <div class=\"content-overlay\"></div>
                        <img class=\"content-image\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/makebookings.jpg"), "html", null, true);
        echo "\">
                        <div class=\"content-details\">
                            <h3 class=\"content-title\">Rendez-vous normal<i class=\"fa fa-arrow-right arrow\"></i></h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"content m-5\">
                    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking.appointments.with.ambassador.fr");
        echo "\">
                        <div class=\"content-overlay\"></div>
                        <img class=\"content-image\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/handshake.jpg"), "html", null, true);
        echo "\">
                        <div class=\"content-details\">
                            <h3 class=\"content-title\">Rendez-vous avec l'ambassadeur<i class=\"fa fa-arrow-right arrow\"></i></h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .content {
            position: relative;
            width: 90%;
            max-width: 400px;
            margin: auto;
            overflow: hidden;
        }

        .content .content-overlay {
            background: rgba(00,45,114,0.8);
            position: absolute;
            height: 99%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .content:hover .content-overlay{
            opacity: 1;
        }

        .content-image{
            width: 100%;
        }

        .content-details {
            position: absolute;
            text-align: center;
            width: 100%;
            top: 50%;
        }

        .content-details h3{
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .arrow {
            margin-left: 8px;
        }

        .content h3 {
            display: inline-block;
            position: relative;
            transition: all 300ms ease-out;
            will-change: transform;
        }

        .content:hover h3 {
            -webkit-transform: translate3d(-1rem, 0, 0);
            transform: translate3d(-1rem, 0, 0);
        }
        .content i {
            position: absolute;
            width: 1.1em;
            right: -1.4rem;
            opacity: 1;
            top: 38%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            transition: all 300ms ease-out;
            will-change: right, opacity;
        }

        .content:hover i {
            opacity: 1;
            right: -3rem;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/bookingFr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  99 => 27,  87 => 18,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFr.html.twig' %}

{% block body %}
    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>Prendre rendez-vous</h1>
            </header>
        </div>
    </div>

    <div class=\"container\">
        <div style=\"margin-top:40px\" class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"content m-5\">
                    <a href=\"{{ path('booking.appointments.fr') }}\">
                        <div class=\"content-overlay\"></div>
                        <img class=\"content-image\" src=\"{{ asset('assets/images/makebookings.jpg') }}\">
                        <div class=\"content-details\">
                            <h3 class=\"content-title\">Rendez-vous normal<i class=\"fa fa-arrow-right arrow\"></i></h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"content m-5\">
                    <a href=\"{{ path('booking.appointments.with.ambassador.fr') }}\">
                        <div class=\"content-overlay\"></div>
                        <img class=\"content-image\" src=\"{{ asset('assets/images/handshake.jpg') }}\">
                        <div class=\"content-details\">
                            <h3 class=\"content-title\">Rendez-vous avec l'ambassadeur<i class=\"fa fa-arrow-right arrow\"></i></h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .content {
            position: relative;
            width: 90%;
            max-width: 400px;
            margin: auto;
            overflow: hidden;
        }

        .content .content-overlay {
            background: rgba(00,45,114,0.8);
            position: absolute;
            height: 99%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .content:hover .content-overlay{
            opacity: 1;
        }

        .content-image{
            width: 100%;
        }

        .content-details {
            position: absolute;
            text-align: center;
            width: 100%;
            top: 50%;
        }

        .content-details h3{
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .arrow {
            margin-left: 8px;
        }

        .content h3 {
            display: inline-block;
            position: relative;
            transition: all 300ms ease-out;
            will-change: transform;
        }

        .content:hover h3 {
            -webkit-transform: translate3d(-1rem, 0, 0);
            transform: translate3d(-1rem, 0, 0);
        }
        .content i {
            position: absolute;
            width: 1.1em;
            right: -1.4rem;
            opacity: 1;
            top: 38%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            transition: all 300ms ease-out;
            will-change: right, opacity;
        }

        .content:hover i {
            opacity: 1;
            right: -3rem;
        }
    </style>
{% endblock %}
", "pages/bookingFr.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/bookingFr.html.twig");
    }
}
