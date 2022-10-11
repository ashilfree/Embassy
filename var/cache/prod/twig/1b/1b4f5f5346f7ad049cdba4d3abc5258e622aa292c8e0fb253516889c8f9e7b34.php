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

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_088bc156033e5a42377d2395a1042b5215b9627789d8535796006855c4e1491c extends Template
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
        // line 5
        echo "
";
        // line 6
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 6), "currentAction", [], "any", false, false, false, 6), "detail")) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", [0 => "renderAsSwitch"], "method", false, false, false, 6))) {
            // line 7
            echo "    <span class=\"badge ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 7), true))) ? ("badge-boolean-true") : ("badge-boolean-false"));
            echo "\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 8), true))) ? ("label.true") : ("label.false")), [], "EasyAdminBundle"), "html", null, true);
            echo "
    </span>
";
        } else {
            // line 11
            echo "    <div class=\"custom-control custom-switch custom-switch-lg\" data-fieldname=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "property", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
        <input type=\"checkbox\" class=\"custom-control-input\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 12), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 12), true))) ? ("checked") : (""));
            echo " autocomplete=\"off\">
        <label class=\"custom-control-label\" for=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 13), "html", null, true);
            echo "\"></label>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  58 => 12,  53 => 11,  47 => 8,  42 => 7,  40 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/boolean.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/boolean.html.twig");
    }
}
