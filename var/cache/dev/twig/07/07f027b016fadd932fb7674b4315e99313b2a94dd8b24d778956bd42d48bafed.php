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

/* booking/_form_fr.html.twig */
class __TwigTemplate_aa73b6f9da13b52841fe29e036bc163110326d5fdcafa377705447d912a2f99b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/_form_fr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/_form_fr.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "onsubmit" => "setFormSubmitting()"]]);
        echo "
<div class=\"form-row\">
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Nom et Prenom</label>
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "fullName", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"col-md-6 form-group\">
        <label for=\"\">No Civil</label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "civilNumber", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
</div>
<div class=\"form-row\">
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Email</label>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Telephone</label>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "phone", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
</div>
<div class=\"form-row\">
<div class=\"form-group\">
        <label for=\"\">Cause</label>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "visit", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
</div>
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "

<script>
    var a, formSubmitting = false;
    var c = \"";
        // line 32
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "uri", [], "any", false, false, false, 32) . "#step-1"), "html", null, true);
        echo "\"
    var setFormSubmitting = function() { formSubmitting = true; };

    window.onload = function() {
        window.addEventListener(\"beforeunload\", function (e) {
            if (formSubmitting) {
                return undefined;
            }
                debugger
            var confirmationMessage = 'It looks like you have been editing something. '
                + 'If you leave before saving, your changes will be lost.';
            (e || window.event).returnValue = confirmationMessage;

            return confirmationMessage;
        });
        window.location.replace(c);
    };
</script>
";
        // line 54
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "booking/_form_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 54,  95 => 32,  88 => 28,  82 => 25,  73 => 19,  66 => 15,  57 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr':{'class': 'needs-validation', 'onsubmit': 'setFormSubmitting()'}}) }}
<div class=\"form-row\">
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Nom et Prenom</label>
        {{ form_widget(form.fullName, {'attr':{'class': 'form-control'}}) }}
    </div>
    <div class=\"col-md-6 form-group\">
        <label for=\"\">No Civil</label>
        {{ form_widget(form.civilNumber, {'attr':{'class': 'form-control'}}) }}
    </div>
</div>
<div class=\"form-row\">
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Email</label>
        {{ form_widget(form.email, {'attr':{'class': 'form-control'}}) }}
    </div>
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Telephone</label>
        {{ form_widget(form.phone, {'attr':{'class': 'form-control'}}) }}
    </div>
</div>
<div class=\"form-row\">
<div class=\"form-group\">
        <label for=\"\">Cause</label>
        {{ form_widget(form.visit, {'attr':{'class': 'form-control'}}) }}
</div>
</div>
{{ form_end(form) }}

<script>
    var a, formSubmitting = false;
    var c = \"{{ app.request.uri ~ '#step-1' }}\"
    var setFormSubmitting = function() { formSubmitting = true; };

    window.onload = function() {
        window.addEventListener(\"beforeunload\", function (e) {
            if (formSubmitting) {
                return undefined;
            }
                debugger
            var confirmationMessage = 'It looks like you have been editing something. '
                + 'If you leave before saving, your changes will be lost.';
            (e || window.event).returnValue = confirmationMessage;

            return confirmationMessage;
        });
        window.location.replace(c);
    };
</script>
{#<script>#}
{#    var a, formSubmitting = false;#}
{#    var c = \"https://localhost:8000/booking-appointments#step-1\"#}
{#    var setFormSubmitting = function() { formSubmitting = true; };#}

{#    window.onload = function() {#}
{#        window.addEventListener(\"beforeunload\", function (e) {#}
{#            if (formSubmitting) {#}
{#                return undefined;#}
{#            }#}
{#            a = setTimeout(function () {#}
{#                formSubmitting = true;#}
{#                window.location.href = c;#}
{#                c = \"https://localhost:8000/booking-appointments#step-1\";#}
{#                console.log(c);#}
{#            }, 500);#}
{#            return \"Do you really want to leave now?\";#}
{#        });#}
{#    };#}
{#    window.onunload = function () {#}
{#        clearTimeout(a);#}
{#    }#}
{#</script>#}
", "booking/_form_fr.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/booking/_form_fr.html.twig");
    }
}
