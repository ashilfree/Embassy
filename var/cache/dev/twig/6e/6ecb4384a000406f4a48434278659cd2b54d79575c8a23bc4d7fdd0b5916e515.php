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

/* admin/booking.info.html.twig */
class __TwigTemplate_071e130466a3e27e2bde456d4ddc010819ef4b1699f9b27dec4fd5918350c1d3 extends Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 1, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 1), "admin/booking.info.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/booking.info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/booking.info.html.twig"));

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
                <table class=\"table hover multiple-select-row data-table-export nowrap\">
                    <thead>
                    <tr>
                        <th class=\"table-plus datatable-nosort\">ID</th>
                        <th>Civil Number</th>
                        <th >Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Visit</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 38
        echo twig_include($this->env, $context, "admin/_booking.html.twig");
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
        return "admin/booking.info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  67 => 3,  57 => 2,  35 => 1,);
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
                <table class=\"table hover multiple-select-row data-table-export nowrap\">
                    <thead>
                    <tr>
                        <th class=\"table-plus datatable-nosort\">ID</th>
                        <th>Civil Number</th>
                        <th >Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Visit</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{ include('admin/_booking.html.twig') }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/booking.info.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/booking.info.html.twig");
    }
}
