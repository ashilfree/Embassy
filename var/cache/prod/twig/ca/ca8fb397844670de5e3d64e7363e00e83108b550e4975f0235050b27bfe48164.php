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

/* @EasyAdmin/page/content.html.twig */
class __TwigTemplate_aba51656177d71fe0a97156c85bac13c4695766865be94711719d662fecce39b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'page_title' => [$this, 'block_page_title'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 2), "@EasyAdmin/page/content.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_041abc192137caf664e3f88e71428aa60bc50875f601ba0e0ce5f38bd1ea5a5b"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-content page-content-with-padding";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["has_page_title"] = (        $this->hasBlock("page_title", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_title", $context, $blocks))));
        // line 9
        echo "    ";
        $context["has_page_actions"] = (        $this->hasBlock("page_actions", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_actions", $context, $blocks))));
        // line 10
        echo "    ";
        $context["has_page_footer"] = (        $this->hasBlock("page_footer", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_footer", $context, $blocks))));
        // line 11
        echo "
    <div class=\"content\">
        ";
        // line 13
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 34
        echo "
        <section id=\"main\">
            <div class=\"content-panel\">
                <div class=\"content-panel-body without-header ";
        // line 37
        echo (( !($context["has_page_footer"] ?? null)) ? ("without-footer") : (""));
        echo "\">
                    ";
        // line 38
        $this->displayBlock('page_content', $context, $blocks);
        // line 39
        echo "                </div>

                ";
        // line 41
        if (($context["has_page_footer"] ?? null)) {
            // line 42
            echo "                    <section class=\"content-panel-footer without-padding\">
                        ";
            // line 43
            $this->displayBlock("page_footer", $context, $blocks);
            echo "
                    </section>
                ";
        }
        // line 46
        echo "            </div>
        </section>
    </div>
";
    }

    // line 13
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        if ((($context["has_page_title"] ?? null) || ($context["has_page_actions"] ?? null))) {
            // line 15
            echo "                <section class=\"content-header\">
                    ";
            // line 16
            $this->displayBlock('content_header', $context, $blocks);
            // line 31
            echo "                </section>
            ";
        }
        // line 33
        echo "        ";
    }

    // line 16
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                            <div class=\"content-header-title\">
                                ";
        // line 19
        if (($context["has_page_title"] ?? null)) {
            // line 20
            echo "                                    <h1 class=\"title\">
                                        ";
            // line 21
            $this->displayBlock('page_title', $context, $blocks);
            // line 22
            echo "                                    </h1>
                                ";
        }
        // line 24
        echo "                            </div>

                            ";
        // line 26
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 29
        echo "                        </div>
                    ";
    }

    // line 21
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 38
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 38,  174 => 27,  170 => 26,  164 => 21,  159 => 29,  157 => 26,  153 => 24,  149 => 22,  147 => 21,  144 => 20,  142 => 19,  138 => 17,  134 => 16,  130 => 33,  126 => 31,  124 => 16,  121 => 15,  118 => 14,  114 => 13,  107 => 46,  101 => 43,  98 => 42,  96 => 41,  92 => 39,  90 => 38,  86 => 37,  81 => 34,  79 => 13,  75 => 11,  72 => 10,  69 => 9,  66 => 8,  62 => 7,  55 => 5,  51 => 2,  49 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/content.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/content.html.twig");
    }
}
