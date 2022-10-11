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

/* includes/_slider.html.twig */
class __TwigTemplate_78c01d400c869372121ab44b751f8bd7de7d9b76b30dd4422946cf7b11099627 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_slider.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) || array_key_exists("sliders", $context) ? $context["sliders"] : (function () { throw new RuntimeError('Variable "sliders" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 2
            echo "    <div class=\"item ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["slider"], "id", [], "any", false, false, false, 2), 1))) {
                echo " one active ";
            }
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["slider"], "id", [], "any", false, false, false, 2), 2))) {
                echo " two ";
            }
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["slider"], "id", [], "any", false, false, false, 2), 3))) {
                echo " three ";
            }
            echo "\">
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["slider"], "imageFile"), "html", null, true);
            echo "\" alt=\"Global Level 4 Health Advisory – Do Not Travel\" title=\"covid-19\">
        <div class=\"carousel-caption\">
            <h3 class=\"text-center\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "caption", [], "any", false, false, false, 5), "html", null, true);
            echo "</h3>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 5,  62 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for slider in sliders  %}
    <div class=\"item {% if (slider.id == 1 ) %} one active {% endif %} {% if (slider.id == 2 ) %} two {% endif %} {% if (slider.id == 3 ) %} three {% endif %}\">
        <img src=\"{{ vich_uploader_asset(slider, 'imageFile') }}\" alt=\"Global Level 4 Health Advisory – Do Not Travel\" title=\"covid-19\">
        <div class=\"carousel-caption\">
            <h3 class=\"text-center\">{{ slider.caption }}</h3>
        </div>
    </div>
{% endfor %}", "includes/_slider.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/includes/_slider.html.twig");
    }
}
