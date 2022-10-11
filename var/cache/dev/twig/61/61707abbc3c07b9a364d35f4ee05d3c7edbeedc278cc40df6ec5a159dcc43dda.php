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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_be5d2b64c75574a7cf989ad2520db1265a283358d912282ca78ddc593340f031 extends Template
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
            'global_actions' => [$this, 'block_global_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        // line 5
        $context["__internal_ecc06ea8e2d9309ebdcc51448914b80acf4ed82fe6991a0814cac94bead79c30"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 8
        $context["has_batch_actions"] = ((false && array_key_exists("batch_form", $context)) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 8, $this->source); })()), "crud", [], "any", false, false, false, 8), "actions", [], "any", false, false, false, 8), "batchActions", [], "any", false, false, false, 8)), 0)));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        (((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 10, $this->source); })())), 0))) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 10, $this->source); })())), "name", [], "any", false, false, false, 10)), "html", null, true))) : (print ("")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("index" . (((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 11, $this->source); })())), 0))) ? ((" index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 11, $this->source); })())), "name", [], "any", false, false, false, 11))) : (""))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 15, $this->source); })()), "crud", [], "any", false, false, false, 15), "defaultPageTitle", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 15, $this->source); })()), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15), "EasyAdminBundle");
        // line 16
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16))) ? ((isset($context["default_title"]) || array_key_exists("default_title", $context) ? $context["default_title"] : (function () { throw new RuntimeError('Variable "default_title" does not exist.', 16, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "i18n", [], "any", false, false, false, 16), "translationParameters", [], "any", false, false, false, 16),         // line 5
(isset($context["__internal_ecc06ea8e2d9309ebdcc51448914b80acf4ed82fe6991a0814cac94bead79c30"]) || array_key_exists("__internal_ecc06ea8e2d9309ebdcc51448914b80acf4ed82fe6991a0814cac94bead79c30", $context) ? $context["__internal_ecc06ea8e2d9309ebdcc51448914b80acf4ed82fe6991a0814cac94bead79c30"] : (function () { throw new RuntimeError('Variable "__internal_ecc06ea8e2d9309ebdcc51448914b80acf4ed82fe6991a0814cac94bead79c30" does not exist.', 5, $this->source); })()))));
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 21
        echo "    ";
        $this->displayBlock('global_actions', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["global_actions"]) || array_key_exists("global_actions", $context) ? $context["global_actions"] : (function () { throw new RuntimeError('Variable "global_actions" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 23
            echo "            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 23), ["action" => $context["action"]], false);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 29
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 43
        echo "    ";
        // line 44
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", [0 => "sort"], "method", false, false, false, 44)));
        // line 45
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", [0 => "sort"], "method", false, false, false, 45));
        // line 46
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 47
        echo "    ";
        $context["has_footer"] = (0 !== twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 47, $this->source); })())), 0));
        // line 48
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 48, $this->source); })()), "crud", [], "any", false, false, false, 48), "isSearchEnabled", [], "any", false, false, false, 48);
        // line 49
        echo "    ";
        $context["has_filters"] = (1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })())), 0));
        // line 50
        echo "    ";
        $context["has_datagrid_tools"] = ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 50, $this->source); })()) || (isset($context["has_filters"]) || array_key_exists("has_filters", $context) ? $context["has_filters"] : (function () { throw new RuntimeError('Variable "has_filters" does not exist.', 50, $this->source); })()));
        // line 51
        echo "    ";
        $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 51, $this->source); })()), "crud", [], "any", false, false, false, 51), "entityFqcn", [], "any", false, false, false, 51);
        // line 52
        echo "
    <div class=\"pt-20 pb-20\">
        <table class=\"table hover stripe data-table nowrap\">
            <thead>
            ";
        // line 56
        $this->displayBlock('table_head', $context, $blocks);
        // line 76
        echo "            </thead>

            <tbody>
            ";
        // line 79
        $this->displayBlock('table_body', $context, $blocks);
        // line 143
        echo "            </tbody>
        </table>

    </div>

    ";
        // line 148
        $this->displayBlock('delete_form', $context, $blocks);
        // line 151
        echo "
    ";
        // line 152
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 152, $this->source); })())), 0))) {
            // line 153
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 57
        echo "                <tr>
                    ";
        // line 58
        if (((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 58, $this->source); })())), 0)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 58, $this->source); })())), "actions", [], "any", false, false, false, 58)))) {
            // line 59
            echo "                        <th class=\"datatable-nosort\">
                            Action
                        </th>
                    ";
        }
        // line 63
        echo "                    ";
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "                        <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                    ";
        }
        // line 66
        echo "
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 67, $this->source); })())), "fields", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 67, $this->source); })())), "fields", [], "any", false, false, false, 67)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 67, $this->source); })())), "fields", [], "any", false, false, false, 67)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 68
            echo "                        <th>
                            ";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 69);
            echo "
                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "

                </tr>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 80
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 81
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 81)) {
                // line 82
                echo "                        ";
                $context["some_results_are_hidden"] = true;
                // line 83
                echo "                    ";
            } else {
                // line 84
                echo "                        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 84), "html", null, true);
                echo "\">
                            ";
                // line 85
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 110
                echo "                            ";
                if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 110, $this->source); })())) {
                    // line 111
                    echo "                                <td><input type=\"checkbox\" class=\"form-batch-checkbox\"
                                           value=\"";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 112), "html", null, true);
                    echo "\"></td>
                            ";
                }
                // line 114
                echo "
                            ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 115));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 116
                    echo "                                <td class=\"";
                    echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 116), (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 116, $this->source); })())))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 116), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 116), "html", null, true);
                    echo "\"
                                    dir=\"";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 117, $this->source); })()), "i18n", [], "any", false, false, false, 117), "textDirection", [], "any", false, false, false, 117), "html", null, true);
                    echo "\">
                                    ";
                    // line 118
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 118), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                                </td>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "

                        </tr>

                    ";
            }
            // line 126
            echo "                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 127
            echo "                    <tr>
                        <td class=\"no-results\" colspan=\"100\">
                            ";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 129, $this->source); })()), "i18n", [], "any", false, false, false, 129), "translationParameters", [], "any", false, false, false, 129), "EasyAdminBundle"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
                ";
        // line 134
        if ((isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 134, $this->source); })())) {
            // line 135
            echo "                    <tr class=\"datagrid-row-empty\">
                        <td class=\"text-center\" colspan=\"";
            // line 136
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 136, $this->source); })())), "fields", [], "any", false, false, false, 136)) + 1), "html", null, true);
            echo "\">
                            <span class=\"datagrid-row-empty-message\"><i
                                        class=\"fa fa-lock mr-1\"></i> ";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                        </td>
                    </tr>
                ";
        }
        // line 142
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        // line 86
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "actions", [], "any", false, false, false, 86))) {
            // line 87
            echo "                                    <td class=\"actions\">
                                        ";
            // line 88
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 88, $this->source); })()), "crud", [], "any", false, false, false, 88), "showEntityActionsAsDropdown", [], "any", false, false, false, 88)) {
                // line 89
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 89, $this->source); })()), "actions", [], "any", false, false, false, 89));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 90
                    echo "                                                ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 90), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 90, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 90, $this->source); })()), "crud", [], "any", false, false, false, 90), "showEntityActionsAsDropdown", [], "any", false, false, false, 90)], false);
                    echo "
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                                        ";
            } else {
                // line 93
                echo "                                            <div class=\"dropdown dropdown-actions\">
                                                <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\"
                                                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                                   aria-expanded=\"false\">
                                                    <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                </a>

                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                    ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 101, $this->source); })()), "actions", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 102
                    echo "                                                        ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 102), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 102, $this->source); })()), "crud", [], "any", false, false, false, 102), "showEntityActionsAsDropdown", [], "any", false, false, false, 102)], false);
                    echo "
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                                                </div>
                                            </div>
                                        ";
            }
            // line 107
            echo "                                    </td>
                                ";
        }
        // line 109
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 149
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 158
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const fieldName = this.closest('.custom-switch').dataset.fieldname;

                    const toggleUrl = \"";
        // line 170
        echo twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(), "setAction", [0 => "edit"], "method", false, false, false, 170);
        echo "\"
                        + \"&entityId=\" + this.closest('tr').dataset.id
                        + \"&fieldName=\" + fieldName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({type: \"GET\", url: toggleUrl, data: {}});

                    toggleRequest.done(function (result) {
                    });

                    toggleRequest.fail(function () {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function (e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({backdrop: true, keyboard: true})
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__entityId_placeholder__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 202
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 202, $this->source); })())), 0))) {
            // line 203
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function (element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function (event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({backdrop: true, keyboard: true});
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 233
        echo "

            ";
        // line 235
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 235, $this->source); })())) {
            // line 236
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function (value) {
                        return value !== id
                    });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({backdrop: true, keyboard: true})
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            ";
        }
        // line 287
        echo "        });
    </script>

    ";
        // line 290
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "request", [], "any", false, false, false, 290), "get", [0 => "query"], "method", false, false, false, 290))) {
            // line 291
            echo "        <script type=\"text/javascript\">
            const search_query = \"";
            // line 292
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 292), "query", [], "any", true, true, false, 292)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 292), "query", [], "any", false, false, false, 292), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  770 => 292,  767 => 291,  765 => 290,  760 => 287,  707 => 236,  705 => 235,  701 => 233,  669 => 203,  667 => 202,  632 => 170,  616 => 158,  606 => 157,  593 => 149,  583 => 148,  573 => 109,  569 => 107,  564 => 104,  555 => 102,  551 => 101,  541 => 93,  538 => 92,  529 => 90,  524 => 89,  522 => 88,  519 => 87,  516 => 86,  506 => 85,  496 => 142,  489 => 138,  484 => 136,  481 => 135,  479 => 134,  476 => 133,  466 => 129,  462 => 127,  449 => 126,  442 => 121,  433 => 118,  429 => 117,  420 => 116,  416 => 115,  413 => 114,  408 => 112,  405 => 111,  402 => 110,  400 => 85,  395 => 84,  392 => 83,  389 => 82,  386 => 81,  367 => 80,  357 => 79,  344 => 72,  335 => 69,  332 => 68,  328 => 67,  325 => 66,  321 => 64,  318 => 63,  312 => 59,  310 => 58,  307 => 57,  297 => 56,  283 => 153,  281 => 152,  278 => 151,  276 => 148,  269 => 143,  267 => 79,  262 => 76,  260 => 56,  254 => 52,  251 => 51,  248 => 50,  245 => 49,  242 => 48,  239 => 47,  236 => 46,  233 => 45,  230 => 44,  228 => 43,  218 => 42,  204 => 29,  194 => 28,  184 => 25,  175 => 23,  170 => 22,  150 => 21,  140 => 20,  130 => 14,  127 => 5,  125 => 16,  123 => 15,  121 => 14,  111 => 13,  92 => 11,  73 => 10,  63 => 4,  61 => 8,  59 => 5,  46 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityDtoCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{# TODO: change this when reenabling batch actions #}
{% set has_batch_actions = false and batch_form is defined and ea.crud.actions.batchActions|length > 0 %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'index' ~ (entities|length > 0 ? ' index-' ~ entities|first.name : '') %}

{% block content_title %}
    {%- apply spaceless -%}
        {% set default_title = ea.crud.defaultPageTitle|trans(ea.i18n.translationParameters, 'EasyAdminBundle') %}
        {{ ea.crud.customPageTitle is null ? default_title|raw : ea.crud.customPageTitle|trans(ea.i18n.translationParameters)|raw }}
    {%- endapply -%}
{% endblock %}

{% block page_actions %}
    {% block global_actions %}
        {% for action in global_actions %}
            {{ include(action.templatePath, { action: action }, with_context = false) }}
        {% endfor %}
    {% endblock global_actions %}
{% endblock page_actions %}

{% block content_header %}
    {{ parent() }}

    {# TODO:
    {% block batch_actions %}
        {% for batchAction in ea.crud.actions.batchActions %}
            {{ include(batchAction.templatePath, { action: batchAction }, with_context = false) }}
        {% endfor %}

        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context = false) }}
    {% endblock %}
    #}
{% endblock content_header %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_field_name = app.request.get('sort')|keys|first %}
    {% set sort_order = app.request.get('sort')|first %}
    {% set some_results_are_hidden = false %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set has_datagrid_tools = has_search or has_filters %}
    {% set title = ea.crud.entityFqcn %}

    <div class=\"pt-20 pb-20\">
        <table class=\"table hover stripe data-table nowrap\">
            <thead>
            {% block table_head %}
                <tr>
                    {% if entities|length > 0 and entities|first.actions is not empty %}
                        <th class=\"datatable-nosort\">
                            Action
                        </th>
                    {% endif %}
                    {% if has_batch_actions %}
                        <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                    {% endif %}

                    {% for field in entities|first.fields ?? [] %}
                        <th>
                            {{ field.label|raw }}
                        </th>
                    {% endfor %}


                </tr>
            {% endblock table_head %}
            </thead>

            <tbody>
            {% block table_body %}
                {% for entity in entities %}
                    {% if not entity.isAccessible %}
                        {% set some_results_are_hidden = true %}
                    {% else %}
                        <tr data-id=\"{{ entity.primaryKeyValueAsString }}\">
                            {% block entity_actions %}
                                {% if entity.actions is not empty %}
                                    <td class=\"actions\">
                                        {% if not ea.crud.showEntityActionsAsDropdown %}
                                            {% for action in entity.actions %}
                                                {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                            {% endfor %}
                                        {% else %}
                                            <div class=\"dropdown dropdown-actions\">
                                                <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\"
                                                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                                   aria-expanded=\"false\">
                                                    <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                </a>

                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                    {% for action in entity.actions %}
                                                        {{ include(action.templatePath, { action: action, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        {% endif %}
                                    </td>
                                {% endif %}
                            {% endblock entity_actions %}
                            {% if has_batch_actions %}
                                <td><input type=\"checkbox\" class=\"form-batch-checkbox\"
                                           value=\"{{ entity.primaryKeyValue }}\"></td>
                            {% endif %}

                            {% for field in entity.fields %}
                                <td class=\"{{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\"
                                    dir=\"{{ ea.i18n.textDirection }}\">
                                    {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
                                </td>
                            {% endfor %}


                        </tr>

                    {% endif %}
                {% else %}
                    <tr>
                        <td class=\"no-results\" colspan=\"100\">
                            {{ 'datagrid.no_results'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}
                        </td>
                    </tr>
                {% endfor %}

                {% if some_results_are_hidden %}
                    <tr class=\"datagrid-row-empty\">
                        <td class=\"text-center\" colspan=\"{{ entities|first.fields|length + 1 }}\">
                            <span class=\"datagrid-row-empty-message\"><i
                                        class=\"fa fa-lock mr-1\"></i> {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                        </td>
                    </tr>
                {% endif %}
            {% endblock table_body %}
            </tbody>
        </table>

    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context = false) }}
    {% endblock delete_form %}

    {% if filters|length > 0 %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const fieldName = this.closest('.custom-switch').dataset.fieldname;

                    const toggleUrl = \"{{ ea_url().setAction('edit')|raw }}\"
                        + \"&entityId=\" + this.closest('tr').dataset.id
                        + \"&fieldName=\" + fieldName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({type: \"GET\", url: toggleUrl, data: {}});

                    toggleRequest.done(function (result) {
                    });

                    toggleRequest.fail(function () {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function (e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({backdrop: true, keyboard: true})
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__entityId_placeholder__', id));
                        deleteForm.trigger('submit');
                    });
            });

            {% if filters|length > 0 %}
            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function (element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function (event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({backdrop: true, keyboard: true});
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            {% endif %}


            {% if has_batch_actions %}
            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function (value) {
                        return value !== id
                    });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({backdrop: true, keyboard: true})
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            {% endif %}
        });
    </script>

    {% if app.request.get('query') is not empty %}
        <script type=\"text/javascript\">
            const search_query = \"{{ ea.search.query|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/crud/index.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/bundles/EasyAdminBundle/crud/index.html.twig");
    }
}
