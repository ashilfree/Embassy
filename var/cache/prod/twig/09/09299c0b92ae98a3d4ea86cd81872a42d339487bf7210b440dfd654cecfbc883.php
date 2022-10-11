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

/* admin/brochure.html.twig */
class __TwigTemplate_cca6bf632fc195a1d1a3d2234f7a1a79abf710b8ba64bd05b6b67035430399ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 1), "get", [0 => "base_path"], "method", false, false, false, 1) . "/") . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 1)), "html", null, true);
        echo "\" class=\"pull-left\">
    <img class=\"wpdm_icon disappear appear\" src=\"";
        // line 2
        echo "/assets/images/pdf.png";
        echo "\" >
</a>";
    }

    public function getTemplateName()
    {
        return "admin/brochure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/brochure.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/brochure.html.twig");
    }
}
