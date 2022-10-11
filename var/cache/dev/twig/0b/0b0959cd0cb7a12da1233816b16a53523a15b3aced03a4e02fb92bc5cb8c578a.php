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

/* includes/menu_item_en.html.twig */
class __TwigTemplate_f5f871df3aab3c6034911dafeea2a70d2909635f7c2a6278d68d7114771692de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/menu_item_en.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/menu_item_en.html.twig"));

        // line 1
        echo "<li
    class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-289 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega\">
    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only ";
        // line 3
        echo (((isset($context["hover"]) || array_key_exists("hover", $context) ? $context["hover"] : (function () { throw new RuntimeError('Variable "hover" does not exist.', 3, $this->source); })())) ? ("ubermenu-hovered") : (""));
        echo " \"
       href=\"";
        // line 4
        (((0 === twig_compare(twig_length_filter($this->env, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 4, $this->source); })())), 1))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page.en", ["id" => twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 4, $this->source); })())), "id", [], "any", false, false, false, 4), "class" => twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 4, $this->source); })())), "getEntityName", [], "method", false, false, false, 4)]), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"0\"><span
                class=\"ubermenu-target-title ubermenu-target-text\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["sub_menu_name"]) || array_key_exists("sub_menu_name", $context) ? $context["sub_menu_name"] : (function () { throw new RuntimeError('Variable "sub_menu_name" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</span>
        ";
        // line 6
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 6, $this->source); })())), 1))) {
            // line 7
            echo "        <i class=\"ubermenu-sub-indicator fa fa-angle-down\"></i>
        <span class=\"ubermenu-sub-indicator-close\"><i class=\"fa fa-times\"></i></span>
        ";
        }
        // line 10
        echo "    </a>
    ";
        // line 11
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 11, $this->source); })())), 1))) {
            // line 12
            echo "    <ul class=\"ubermenu-submenu ubermenu-submenu-id-285 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-left_edge_item ubermenu-autoclear ubermenu-submenu-retractor-top\">
        <li class=\"ubermenu-retractor ubermenu-retractor-desktop\"><i
                    class=\"fas fa-times\"></i></li>
        <li class=\"ubermenu-item ubermenu-item-type-custom ubermenu-item-object-ubermenu-custom ubermenu-item-has-children ubermenu-item-326 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-full ubermenu-has-submenu-stack\">
            <ul class=\"ubermenu-submenu ubermenu-submenu-id-326 ubermenu-submenu-type-auto ubermenu-submenu-type-stack\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "                <li class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-471 ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto\">
                    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only\"
                       href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page.en", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 20), "class" => twig_get_attribute($this->env, $this->source, $context["p"], "getEntityName", [], "method", false, false, false, 20)]), "html", null, true);
                echo "\">
                        <span class=\"ubermenu-target-title ubermenu-target-text\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titleEn", [], "any", false, false, false, 21), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/menu_item_en.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  99 => 24,  90 => 21,  86 => 20,  82 => 18,  78 => 17,  71 => 12,  69 => 11,  66 => 10,  61 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li
    class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-289 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega\">
    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only {{ hover? 'ubermenu-hovered' }} \"
       href=\"{{ pages|length == 1 ? path('page.en', {id: (pages|first).id, class: (pages|first).getEntityName()}) }}\" tabindex=\"0\"><span
                class=\"ubermenu-target-title ubermenu-target-text\">{{ sub_menu_name }}</span>
        {%  if pages|length > 1 %}
        <i class=\"ubermenu-sub-indicator fa fa-angle-down\"></i>
        <span class=\"ubermenu-sub-indicator-close\"><i class=\"fa fa-times\"></i></span>
        {% endif %}
    </a>
    {%  if pages|length > 1 %}
    <ul class=\"ubermenu-submenu ubermenu-submenu-id-285 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-left_edge_item ubermenu-autoclear ubermenu-submenu-retractor-top\">
        <li class=\"ubermenu-retractor ubermenu-retractor-desktop\"><i
                    class=\"fas fa-times\"></i></li>
        <li class=\"ubermenu-item ubermenu-item-type-custom ubermenu-item-object-ubermenu-custom ubermenu-item-has-children ubermenu-item-326 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-full ubermenu-has-submenu-stack\">
            <ul class=\"ubermenu-submenu ubermenu-submenu-id-326 ubermenu-submenu-type-auto ubermenu-submenu-type-stack\">
                {% for p in pages  %}
                <li class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-471 ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto\">
                    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only\"
                       href=\"{{ path('page.en', {id: p.id, class: p.getEntityName()}) }}\">
                        <span class=\"ubermenu-target-title ubermenu-target-text\">{{ p.titleEn }}</span></a>
                </li>
                {% endfor %}
            </ul>
        </li>
    </ul>
    {% endif %}
</li>", "includes/menu_item_en.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/includes/menu_item_en.html.twig");
    }
}
