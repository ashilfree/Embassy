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

/* admin/booking.with.ambassador.info.html.twig */
class __TwigTemplate_5be36ac77eb1f3369b625cc85842d4f56655164d6435b17ddfd2d6ae5c414018 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 1, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 1), "admin/booking.with.ambassador.info.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/booking.with.ambassador.info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/booking.with.ambassador.info.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"min-height-200px\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-12\">
                    <div class=\"title\">
                        <h4>Form Wizards</h4>
                    </div>
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Form Wizards</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class=\"card-box mb-30\">
            <div class=\"pd-20\">
                <h4 class=\"text-blue h4\">Data Table with Export Buttons</h4>
            </div>
            <div class=\"pb-20\">
                <table class=\"table hover data-table-export nowrap\">
                    <thead>
                    <tr>
                        <th class=\"table-plus datatable-nosort\">ID</th>
                        <th>Civil Number</th>
                        <th >Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>reason</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 37
        echo twig_include($this->env, $context, "admin/_booking..with.ambassador.html.twig");
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/booking.with.ambassador.info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  67 => 3,  57 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ea.templatePath('layout') %}
{% block content %}
    <div class=\"min-height-200px\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-12\">
                    <div class=\"title\">
                        <h4>Form Wizards</h4>
                    </div>
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Form Wizards</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class=\"card-box mb-30\">
            <div class=\"pd-20\">
                <h4 class=\"text-blue h4\">Data Table with Export Buttons</h4>
            </div>
            <div class=\"pb-20\">
                <table class=\"table hover data-table-export nowrap\">
                    <thead>
                    <tr>
                        <th class=\"table-plus datatable-nosort\">ID</th>
                        <th>Civil Number</th>
                        <th >Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>reason</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{ include('admin/_booking..with.ambassador.html.twig') }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}


", "admin/booking.with.ambassador.info.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/booking.with.ambassador.info.html.twig");
    }
}
