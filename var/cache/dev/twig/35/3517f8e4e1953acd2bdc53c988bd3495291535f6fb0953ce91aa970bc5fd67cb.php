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

/* admin/_booking.html.twig */
class __TwigTemplate_cef3d39bb7abb507f92cffa799b11e535ffe94b0f0907c2dab80565dbd8de234 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_booking.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 2
            echo "    <tr>
        <td class=\"table-plus\">";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "</td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "civilNumber", [], "any", false, false, false, 4), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "fullName", [], "any", false, false, false, 5), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "email", [], "any", false, false, false, 6), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 7), "html", null, true);
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "visit", [], "any", false, false, false, 8), "html", null, true);
            echo "</td>
        <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "schedule", [], "any", false, false, false, 9), "date", [], "any", false, false, false, 9), "m/d/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "schedule", [], "any", false, false, false, 10), "startTime", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/_booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for booking in bookings  %}
    <tr>
        <td class=\"table-plus\">{{ booking.id }}</td>
        <td>{{ booking.civilNumber }}</td>
        <td>{{ booking.fullName }}</td>
        <td>{{ booking.email }}</td>
        <td>{{ booking.phone }}</td>
        <td>{{ booking.visit }}</td>
        <td>{{ booking.schedule.date|date(\"m/d/Y\") }}</td>
        <td>{{ booking.schedule.startTime }}</td>
    </tr>
{% endfor %}", "admin/_booking.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/_booking.html.twig");
    }
}
