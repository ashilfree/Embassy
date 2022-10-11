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

/* @EasyAdmin/crud/field/image.html.twig */
class __TwigTemplate_38f781c017aeab021e8be4dbc8f163189fd56c49f088a75d2339b800d42751b1 extends Template
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
        // line 4
        $context["html_id"] = ("ea-lightbox-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 4));
        // line 5
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 5)), "html", null, true);
        echo "\" data-toggle=\"lightbox\" >
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 6)), "html", null, true);
        echo "\" width=\"100\" class=\"img-fluid img-thumbnail\">
</a>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  39 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/image.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/bundles/EasyAdminBundle/crud/field/image.html.twig");
    }
}
