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

/* images.html.twig */
class __TwigTemplate_c8c5fd361b5dd806dd46de74273bd2880cfe3a8017695f1dfd2513160e84cb0c extends Template
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
        if ( !(null === ($context["value"] ?? null))) {
            // line 2
            echo "    <div class=\"form-widget\">
        <div class=\"form-control\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"/uploads/files/";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
                </a>

                <div id=\"easyadmin-lightbox-";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
                echo "\" class=\"easyadmin-lightbox\">
                    <img src=\"/uploads/files/";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  62 => 10,  58 => 9,  52 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "images.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/images.html.twig");
    }
}
