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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_ca56c0a904aa73632f17329e35acb1142d82c751fcb946bae2e9aebc266c20ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'detail_field' => [$this, 'block_detail_field'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_19ade6f6a7436c9778ffffd79e95fbf9badacb62f858c839c5b7c7fccaf24a1f"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 7)), "html", null, true);
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "defaultPageTitle", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 12), "translationParameters", [], "any", false, false, false, 12), "EasyAdminBundle");
        // line 13
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 13), "customPageTitle", [], "any", false, false, false, 13))) ? (($context["default_title"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 13), "customPageTitle", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 13), "translationParameters", [], "any", false, false, false, 13),         // line 5
($context["__internal_19ade6f6a7436c9778ffffd79e95fbf9badacb62f858c839c5b7c7fccaf24a1f"] ?? null))));
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_parse_3_);
    }

    // line 17
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 19
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 19), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 23
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 26
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "        ";
        $context["row_number"] = 0;
        // line 28
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 28));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 29
            echo "            ";
            $context["is_decoration_field"] = twig_in_filter("field-form_panel", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 29));
            // line 30
            echo "
            ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 31) &&  !($context["is_decoration_field"] ?? null))) {
                // line 32
                echo "                ";
                $context["row_number"] = 0;
                // line 33
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_open_empty_content_panel", [$context["field"]], 33, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 35
            echo "
            ";
            // line 36
            if (($context["is_decoration_field"] ?? null)) {
                // line 37
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_close_content_panel", [], 38, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 40
                echo "
                ";
                // line 41
                $context["row_number"] = 0;
                // line 42
                echo "                ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 42)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "help", [], "any", false, false, false, 42)))) {
                    // line 43
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_open_empty_content_panel", [$context["field"]], 43, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 45
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_open_content_panel_with_header", [$context["field"]], 45, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 47
                echo "            ";
            }
            // line 48
            echo "
            ";
            // line 49
            $this->displayBlock('detail_field', $context, $blocks);
            // line 54
            echo "
            ";
            // line 55
            $context["row_number"] = ((($context["is_decoration_field"] ?? null)) ? (($context["row_number"] ?? null)) : ((($context["row_number"] ?? null) + 1)));
            // line 56
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        ";
        // line 58
        echo twig_call_macro($macros["_self"], "macro_close_content_panel", [], 58, $context, $this->getSourceContext());
        echo "
    ";
    }

    // line 49
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                ";
        if ( !($context["is_decoration_field"] ?? null)) {
            // line 51
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null), ($context["row_number"] ?? null)], 51, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 53
        echo "            ";
    }

    // line 61
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 62)], false);
        echo "
    ";
    }

    // line 66
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
    }

    // line 84
    public function macro_open_empty_content_panel($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 85
            echo "
<div class=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 86), "html", null, true);
            echo "\">
    <div class=\"content-panel\">
        <div class=\"content-panel-body without-header without-footer without-padding\">
            <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 92
    public function macro_close_content_panel(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 93
            echo "            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 99
    public function macro_open_content_panel_with_header($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 100
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 100), "html", null, true);
            echo "\">
        <div class=\"content-panel\">
            <div class=\"content-panel-header\">
                ";
            // line 103
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 103);
            echo "

                ";
            // line 105
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 105))) {
                // line 106
                echo "                    <div class=\"content-panel-header-help\">";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 106);
                echo "</div>
                ";
            }
            // line 108
            echo "            </div>

            <div class=\"content-panel-body without-footer without-padding\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 114
    public function macro_render_field($__entity__ = null, $__field__ = null, $__row_number__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "row_number" => $__row_number__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 115
            echo "    <div class=\"data-row ";
            echo (((($context["row_number"] ?? null) % 2 == 0)) ? ("with-background") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
        <dd>
            ";
            // line 117
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 117);
            echo "

            ";
            // line 119
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 119))) {
                // line 120
                echo "                <span class=\"data-help\">
                    <i class=\"far fa-question-circle\" data-toggle=\"tooltip\" title=\"";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 121), "html_attr");
                echo "\"></i>
                </span>
            ";
            }
            // line 124
            echo "        </dd>
        <dt>
            ";
            // line 126
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 126), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dt>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 126,  435 => 124,  429 => 121,  426 => 120,  424 => 119,  419 => 117,  411 => 115,  396 => 114,  383 => 108,  377 => 106,  375 => 105,  370 => 103,  363 => 100,  350 => 99,  337 => 93,  325 => 92,  311 => 86,  308 => 85,  295 => 84,  274 => 67,  270 => 66,  263 => 62,  259 => 61,  255 => 53,  249 => 51,  246 => 50,  242 => 49,  236 => 58,  233 => 57,  219 => 56,  217 => 55,  214 => 54,  212 => 49,  209 => 48,  206 => 47,  200 => 45,  194 => 43,  191 => 42,  189 => 41,  186 => 40,  180 => 38,  177 => 37,  175 => 36,  172 => 35,  166 => 33,  163 => 32,  161 => 31,  158 => 30,  155 => 29,  137 => 28,  134 => 27,  130 => 26,  126 => 61,  123 => 60,  120 => 26,  116 => 25,  109 => 23,  98 => 19,  93 => 18,  89 => 17,  85 => 11,  82 => 5,  80 => 13,  78 => 12,  76 => 11,  72 => 10,  65 => 8,  58 => 7,  54 => 3,  52 => 5,  45 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/detail.html.twig");
    }
}
