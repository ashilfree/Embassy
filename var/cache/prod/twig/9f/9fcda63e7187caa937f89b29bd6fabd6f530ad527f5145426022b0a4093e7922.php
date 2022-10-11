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

/* booking/_form_en.html.twig */
class __TwigTemplate_fb6d7ce0b449ede7f3a3330fed7bf35e6bee13ce11d564a769865b0749938be9 extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "onsubmit" => "setFormSubmitting()"]]);
        echo "
<div class=\"form-row\">
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Full Name</label>
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fullName", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Civil No</label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "civilNumber", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
</div>
<div class=\"form-row\">
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Email</label>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"col-md-6 form-group\">
        <label for=\"\">Phone</label>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
</div>
<div class=\"form-row\">
<div class=\"form-group\">
        <label for=\"\">Reason</label>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visit", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
</div>
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

<script>
    var a, formSubmitting = false;
    var c = \"";
        // line 32
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "uri", [], "any", false, false, false, 32) . "#step-1"), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "booking/_form_en.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 54,  89 => 32,  82 => 28,  76 => 25,  67 => 19,  60 => 15,  51 => 9,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "booking/_form_en.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/booking/_form_en.html.twig");
    }
}
