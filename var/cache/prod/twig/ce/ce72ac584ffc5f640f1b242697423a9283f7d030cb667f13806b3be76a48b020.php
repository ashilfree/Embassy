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

/* pagination/sortable.html.twig */
class __TwigTemplate_5dbddbab487240c9b88102c38e549675dd7622da940502c5855b77b3205e72db extends Template
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
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_merge(($context["options"] ?? null), ["class" => "btn btn-default m-l-10 "]));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
<span class=\"float-right m-r-5\">
        ";
        // line 3
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "get", [0 => "sort"], "method", false, false, false, 3), ($context["key"] ?? null)))) {
            // line 4
            echo "          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "get", [0 => "direction"], "method", false, false, false, 4), "desc"))) {
                // line 5
                echo "            <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 7
                echo "            <i class=\"fa fa-sort-up\"></i>
          ";
            }
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "          <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 12
        echo "    </span>
";
        // line 13
        if ((0 === twig_compare(($context["title"] ?? null), "Price"))) {
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "get", [0 => "direction"], "method", false, false, false, 13), "desc"))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($context["title"] ?? null) . ":") . "High to Low"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, ((($context["title"] ?? null) . ":") . "Low to High"), "html", null, true);
                echo " ";
            }
        } else {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        // line 14
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "pagination/sortable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 14,  77 => 13,  74 => 12,  70 => 10,  67 => 9,  63 => 7,  59 => 5,  56 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pagination/sortable.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pagination/sortable.html.twig");
    }
}
