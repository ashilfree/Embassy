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
class __TwigTemplate_74ef4e1acb9aaf3700cb32680ca425e899c2d6aa7e9e26d396395d8e569d6dfa extends Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 1), "admin/booking.with.ambassador.info.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  85 => 37,  49 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/booking.with.ambassador.info.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/booking.with.ambassador.info.html.twig");
    }
}
