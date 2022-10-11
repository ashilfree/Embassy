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

/* admin/checkout/new.html.twig */
class __TwigTemplate_8b8dcf864b77e30f1c60078acf430251b6649e849db479ad378e01dce2ad5fb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'entity_form' => [$this, 'block_entity_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/default/new.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@EasyAdmin/default/new.html.twig", "admin/checkout/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
    }

    public function block_entity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        ";
        // line 6
        echo "        <div id=\"smartwizard\">
            <ul>
                <li><a href=\"#step-1\">Billing Address<br/><small>What the hell</small></a></li>
                <li><a href=\"#step-2\">Payment<br/><small>messed up</small></a></li>
                <li><a href=\"#step-3\">Confirmation<br/><small>Step description</small></a></li>
            </ul>

            <div>
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                <div id=\"step-1\" class=\"\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fullname", [], "any", false, false, false, 16), 'row');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 17), 'row');
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adress", [], "any", false, false, false, 18), 'row');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 19), 'row');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", false, false, false, 20), 'row');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zip", [], "any", false, false, false, 21), 'row');
        echo "
                </div>
                <div id=\"step-2\" class=\"\" style=\"display: none\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nameOnCard", [], "any", false, false, false, 24), 'row');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "creditCardNumber", [], "any", false, false, false, 25), 'row');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "expMonth", [], "any", false, false, false, 26), 'row');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "expYear", [], "any", false, false, false, 27), 'row');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "CCV", [], "any", false, false, false, 28), 'row');
        echo "
                </div>
                <div id=\"step-3\" class=\"\" style=\"display: none\">
                    <h3 class=\"text-center\">Please Confirm!</h3>
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                </div>
                ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
            </div>
        </div>
    ";
    }

    // line 40
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$('#smartwizard').smartWizard();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "admin/checkout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  139 => 40,  131 => 34,  126 => 32,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  72 => 14,  62 => 6,  60 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/checkout/new.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/checkout/new.html.twig");
    }
}
