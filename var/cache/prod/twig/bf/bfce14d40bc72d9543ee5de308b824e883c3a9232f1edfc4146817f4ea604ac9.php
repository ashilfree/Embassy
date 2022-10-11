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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_331d065c92238473da5e1d3a8698c6b6268279bc3c9a8cc7e74521cb141c35b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 10
        echo "
<ul id=\"accordion-menu\">
    ";
        // line 12
        $this->displayBlock('main_menu', $context, $blocks);
        // line 33
        echo "</ul>

";
        // line 35
        $this->displayBlock('main_menu_after', $context, $blocks);
    }

    // line 9
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 13), "items", [], "any", false, false, false, 13));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 14
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 31
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    ";
    }

    // line 14
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isMenuSection", [], "any", false, false, false, 15)) ? ("dropdown") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 15)) ? ("dropdown") : (""));
        echo "\">
                    ";
        // line 16
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuItem"] ?? null)], 16, $context, $this->getSourceContext());
        echo "

                    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 18)) {
            // line 19
            echo "                        <ul class=\"submenu\">
                            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "subItems", [], "any", false, false, false, 20));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                // line 21
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 26
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                        </ul>
                    ";
        }
        // line 29
        echo "                </li>
            ";
    }

    // line 21
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                                    <li>
                                        ";
        // line 23
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuSubItem"] ?? null)], 23, $context, $this->getSourceContext());
        echo "
                                    </li>
                                ";
    }

    // line 35
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 2
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "        <a href=\"";
            ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 3)) ? (print ("javascript:;")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkUrl", [], "any", false, false, false, 3), "html", null, true))));
            echo "\" class=\"dropdown-toggle ";
            echo (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 3)) ? ("no-arrow") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 3), "isSelected", [0 => ($context["item"] ?? null)], "method", false, false, false, 3)) ? ("active") : (""));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkTarget", [], "any", false, false, false, 3), "html", null, true);
            echo "\" rel=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkRel", [], "any", false, false, false, 3), "html", null, true);
            echo "\" referrerpolicy=\"origin-when-cross-origin\">
            ";
            // line 4
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 4))) {
                echo "<i class=\"micon dw ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 4), "html", null, true);
                echo "\"></i>";
            }
            // line 5
            echo "            <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>
        </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 5,  221 => 4,  208 => 3,  195 => 2,  189 => 35,  182 => 23,  179 => 22,  175 => 21,  170 => 29,  166 => 27,  152 => 26,  149 => 21,  132 => 20,  129 => 19,  127 => 18,  122 => 16,  115 => 15,  111 => 14,  107 => 32,  93 => 31,  90 => 14,  72 => 13,  68 => 12,  62 => 9,  58 => 35,  54 => 33,  52 => 12,  48 => 10,  46 => 9,  43 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/menu.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/bundles/EasyAdminBundle/menu.html.twig");
    }
}
