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

/* admin/image.html.twig */
class __TwigTemplate_51edd6b4bc8dc9ec63cff7c40c8b66ab589674dc2f941d38f2c6f2dd54487f93 extends Template
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
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 1))) {
            // line 2
            echo "             <img src=\"";
            echo twig_escape_filter($this->env, ("media/images/" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 2)), "html", null, true);
            echo "\" width=\"100\" alt=\"empty\" class=\"img-responsive img-thumbnail\">
";
        }
    }

    public function getTemplateName()
    {
        return "admin/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/image.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/image.html.twig");
    }
}
