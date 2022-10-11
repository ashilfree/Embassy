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
class __TwigTemplate_0e840f0325196b29787c888b506f22d4399305f6c97282f761db5e5a98287cdb extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sliders"] ?? null));
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
        return array (  61 => 5,  56 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/_slider.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/includes/_slider.html.twig");
    }
}
