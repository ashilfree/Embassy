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

/* includes/menu_item_fr.html.twig */
class __TwigTemplate_7e1f513836415ee18be39b0b0749f47e77243c07f430905ed774544701ee3bbc extends Template
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
        echo "<li
    class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-289 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega\">
    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only ";
        // line 3
        echo ((($context["hover"] ?? null)) ? ("ubermenu-hovered") : (""));
        echo " \"
       href=\"";
        // line 4
        (((0 === twig_compare(twig_length_filter($this->env, ($context["pages"] ?? null)), 1))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page.fr", ["id" => twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["pages"] ?? null)), "id", [], "any", false, false, false, 4), "class" => twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["pages"] ?? null)), "getEntityName", [], "method", false, false, false, 4)]), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"0\"><span
                class=\"ubermenu-target-title ubermenu-target-text\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["sub_menu_name"] ?? null), "html", null, true);
        echo "</span>
        ";
        // line 6
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["pages"] ?? null)), 1))) {
            // line 7
            echo "        <i class=\"ubermenu-sub-indicator fa fa-angle-down\"></i>
        <span class=\"ubermenu-sub-indicator-close\"><i class=\"fa fa-times\"></i></span>
        ";
        }
        // line 10
        echo "    </a>
    ";
        // line 11
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["pages"] ?? null)), 1))) {
            // line 12
            echo "    <ul class=\"ubermenu-submenu ubermenu-submenu-id-285 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-left_edge_item ubermenu-autoclear ubermenu-submenu-retractor-top\">
        <li class=\"ubermenu-retractor ubermenu-retractor-desktop\"><i
                    class=\"fas fa-times\"></i></li>
        <li class=\"ubermenu-item ubermenu-item-type-custom ubermenu-item-object-ubermenu-custom ubermenu-item-has-children ubermenu-item-326 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-full ubermenu-has-submenu-stack\">
            <ul class=\"ubermenu-submenu ubermenu-submenu-id-326 ubermenu-submenu-type-auto ubermenu-submenu-type-stack\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "                <li class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-471 ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto\">
                    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only\"
                       href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page.fr", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 20), "class" => twig_get_attribute($this->env, $this->source, $context["p"], "getEntityName", [], "method", false, false, false, 20)]), "html", null, true);
                echo "\">
                        <span class=\"ubermenu-target-title ubermenu-target-text\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titleFr", [], "any", false, false, false, 21), "html", null, true);
                echo "</span></a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </ul>
        </li>
    </ul>
    ";
        }
        // line 28
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "includes/menu_item_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  93 => 24,  84 => 21,  80 => 20,  76 => 18,  72 => 17,  65 => 12,  63 => 11,  60 => 10,  55 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/menu_item_fr.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/includes/menu_item_fr.html.twig");
    }
}
