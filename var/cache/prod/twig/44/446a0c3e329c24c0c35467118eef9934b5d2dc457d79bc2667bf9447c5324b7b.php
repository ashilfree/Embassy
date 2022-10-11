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

/* pages/booking.with.ambassadorEn.html.twig */
class __TwigTemplate_e232bc525909eef692b4f67589b2b65db4f19b515c976e81efdf1b7dcbe9e5d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseEn.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseEn.html.twig", "pages/booking.with.ambassadorEn.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>Book an appointment with the ambassador</h1>
            </header>
        </div>
    </div>
    <div class=\"container\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-group", "onsubmit" => "setFormSubmitting()"]]);
        echo "
        <h3 style=\"margin: 20px 0\">To make an appointment with His Excellency the Ambassador, fill out the form below</h3>
        <div class=\"form-group\">
            <label for=\"first_name\">Full name</label>
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "on", "autofocus" => ""]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"last_name\">Civil number</label>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "civilNumber", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "on", "autofocus" => ""]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"email_address\">Email</label>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"phone_number\">Phone</label>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"age\">Reason</label>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reason", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"dob\">Desired day</label>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Ask for appointment</button>
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    <script>
        var a, formSubmitting = false;
        var c = \"";
        // line 49
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "uri", [], "any", false, false, false, 49) . "#step-1"), "html", null, true);
        echo "\"
        var setFormSubmitting = function () {
            formSubmitting = true;
        };

        window.onload = function () {
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
    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$(function () {
            \$(\"#booking_with_ambassador_date\").datepicker();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "pages/booking.with.ambassadorEn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 71,  147 => 70,  122 => 49,  115 => 45,  108 => 41,  100 => 36,  92 => 31,  84 => 26,  76 => 21,  68 => 16,  61 => 12,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/booking.with.ambassadorEn.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/booking.with.ambassadorEn.html.twig");
    }
}
