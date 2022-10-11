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
class __TwigTemplate_cdfd9828260830051e6ca907c64c3b00020eae77a88c9406eee2648c8f131093 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/sortable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/sortable.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), ["class" => "btn btn-default m-l-10 "]));
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "get", [0 => "sort"], "method", false, false, false, 3), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 3, $this->source); })())))) {
            // line 4
            echo "          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "direction"], "method", false, false, false, 4), "desc"))) {
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
        if ((0 === twig_compare((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()), "Price"))) {
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "direction"], "method", false, false, false, 13), "desc"))) {
                echo " ";
                echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()) . ":") . "High to Low"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()) . ":") . "Low to High"), "html", null, true);
                echo " ";
            }
        } else {
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()), "html", null, true);
        }
        // line 14
        echo "</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  97 => 14,  83 => 13,  80 => 12,  76 => 10,  73 => 9,  69 => 7,  65 => 5,  62 => 4,  60 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a{% for attr, value  in options | merge({class: 'btn btn-default m-l-10 '}) %} {{ attr }}=\"{{ value }}\"{% endfor %}>
<span class=\"float-right m-r-5\">
        {% if app.request.get('sort') == key %}
          {% if app.request.get('direction') == 'desc' %}
            <i class=\"fa fa-sort-down\"></i>
            {% else %}
            <i class=\"fa fa-sort-up\"></i>
          {% endif %}
        {% else %}
          <i class=\"fa fa-sort\"></i>
        {% endif %}
    </span>
{% if title == 'Price' %}{% if app.request.get('direction') == 'desc' %} {{title~\":\" ~ \"High to Low\" }} {% else %} {{ title~\":\" ~ \"Low to High\"  }} {% endif %}{% else %}{{ title }}{% endif %}
</a>
", "pagination/sortable.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pagination/sortable.html.twig");
    }
}
