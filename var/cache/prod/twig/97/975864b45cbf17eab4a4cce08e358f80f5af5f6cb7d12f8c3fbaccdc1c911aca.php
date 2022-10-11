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

/* admin/customizations/customer_list.html.twig */
class __TwigTemplate_e1a447778317517f0ca157fcea67ff91a6b00eba7375e86689c0e253656d2654 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@EasyAdmin/default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@EasyAdmin/default/layout.html.twig", "admin/customizations/customer_list.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "admin/customizations/customer_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/customizations/customer_list.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/customizations/customer_list.html.twig");
    }
}
