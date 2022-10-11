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

/* pages/booking.with.ambassador.html.twig */
class __TwigTemplate_536c96907d5da039e289cc34b9e98783e6b6c9099e6f80074f23cb220b70a68b extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/booking.with.ambassador.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/booking.with.ambassador.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/booking.with.ambassador.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>حجز موعد مع السفير</h1>
            </header>
        </div>
    </div>
    <div class=\"container\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "form-group", "onsubmit" => "setFormSubmitting()"]]);
        echo "
        <h3 style=\"margin: 20px 0\">لاخد موعد مع سعادة السفير املا الاستمارة ادناه</h3>
        <div class=\"form-group\">
            <label for=\"first_name\">الاسم و اللقب</label>
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "on", "autofocus" => ""]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"last_name\">الرقم المدني</label>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "civilNumber", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "on", "autofocus" => ""]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"email_address\">ايميل</label>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"phone_number\">الهاتف</label>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "phone", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"age\">سبب الزيارة</label>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "reason", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"dob\">اليوم المرغوب فيه</label>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"help-block\"></span>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">طلب موعد</button>
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
    </div>
    <script>
        var a, formSubmitting = false;
        var c = \"";
        // line 49
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "uri", [], "any", false, false, false, 49) . "#step-1"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/booking.with.ambassador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 71,  171 => 70,  140 => 49,  133 => 45,  126 => 41,  118 => 36,  110 => 31,  102 => 26,  94 => 21,  86 => 16,  79 => 12,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>حجز موعد مع السفير</h1>
            </header>
        </div>
    </div>
    <div class=\"container\">
        {{ form_start(form, {'attr':{'class': 'form-group', 'onsubmit': 'setFormSubmitting()'}}) }}
        <h3 style=\"margin: 20px 0\">لاخد موعد مع سعادة السفير املا الاستمارة ادناه</h3>
        <div class=\"form-group\">
            <label for=\"first_name\">الاسم و اللقب</label>
            {{ form_widget(form.name, {'attr':{'class': 'form-control', 'autocomplete': 'on', 'autofocus':''}}) }}
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"last_name\">الرقم المدني</label>
            {{ form_widget(form.civilNumber, {'attr':{'class': 'form-control', 'autocomplete': 'on', 'autofocus':''}}) }}
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"email_address\">ايميل</label>
            {{ form_widget(form.email, {'attr':{'class': 'form-control'}}) }}
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"phone_number\">الهاتف</label>
            {{ form_widget(form.phone, {'attr':{'class': 'form-control'}}) }}
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"age\">سبب الزيارة</label>
            {{ form_widget(form.reason, {'attr':{'class': 'form-control'}}) }}
            <span class=\"help-block\"></span>
        </div>
        <div class=\"form-group\">
            <label for=\"dob\">اليوم المرغوب فيه</label>
            {{ form_widget(form.date, {'attr':{'class': 'form-control'}}) }}
            <span class=\"help-block\"></span>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">طلب موعد</button>
        {{ form_end(form) }}
    </div>
    <script>
        var a, formSubmitting = false;
        var c = \"{{ app.request.uri ~ '#step-1' }}\"
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
{% endblock %}
{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$(function () {
            \$(\"#booking_with_ambassador_date\").datepicker();
        });
    </script>
{% endblock %}
", "pages/booking.with.ambassador.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/booking.with.ambassador.html.twig");
    }
}
