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

/* pages/documentFr.html.twig */
class __TwigTemplate_c16613721fd6b0e2b68ace67272606a7ba99191027540884702c61ba425385e6 extends Template
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
        return "baseFr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseFr.html.twig", "pages/documentFr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>Documents importants</h1>
            </header>
        </div>
    </div>
    <div class=\"container\">
    <div class=\"widget widget_wpdm_topdls_widget\">
        <div class=\"widget-head\"><h3 class=\"widget-title\"><span> Affaires consulaires: documents importants </span></h3></div>
        <div class=\"w3eden wpdm-category\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["documents"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 16
            echo "                ";
            $this->loadTemplate("includes/_documentFr.html.twig", "pages/documentFr.html.twig", 16)->display($context);
            // line 17
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "pages/documentFr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  84 => 17,  81 => 16,  64 => 15,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/documentFr.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/documentFr.html.twig");
    }
}
