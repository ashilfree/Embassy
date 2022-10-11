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

/* pages/page.html.twig */
class __TwigTemplate_dec45ae053a31019a2a8359225fcbf07641edcf63f45ad2c05bb5cefe226bfe9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
            </header>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"base-box page-wrap\">

            <div class=\"entry-content\" style=\"padding-top: 30px\">
                ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "content", [], "any", false, false, false, 15);
        echo "
            </div> <!-- entry content -->
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "pages/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/page.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/page.html.twig");
    }
}
