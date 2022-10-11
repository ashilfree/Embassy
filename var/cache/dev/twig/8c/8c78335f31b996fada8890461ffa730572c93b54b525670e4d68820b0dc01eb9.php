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

/* includes/_documentEn.html.twig */
class __TwigTemplate_8ee0c61e5f65abfef46b7eae5e81b01f2097c38528f9117ec6a5fc4e6ddd62ec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_documentEn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_documentEn.html.twig"));

        // line 1
        echo "<div class=\"wpdm-link-tpl link-btn [color]\">
    <div class=\"media\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ("/uploads/documents/" . twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 3, $this->source); })()), "brochure", [], "any", false, false, false, 3)), "html", null, true);
        echo "\" class=\"pull-right\">
            <img class=\"wpdm_icon disappear appear\" src=\"";
        // line 4
        echo "/assets/images/pdf.png";
        echo "\" >
        </a>

        <div class=\"media-body\">
            <strong class=\"ptitle\">";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 8, $this->source); })()), "nameEn", [], "any", false, false, false, 8)), "html", null, true);
        echo " <span class=\"label label-default\" style=\"font-weight: 400;\">";
        echo twig_escape_filter($this->env, $this->extensions['SPE\FilesizeExtensionBundle\Twig\FilesizeExtension']->readableFilesize(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 8, $this->source); })()), "size", [], "any", false, false, false, 8)), "html", null, true);
        echo "</span>  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 8, $this->source); })()), "nameAr", [], "any", false, false, false, 8), "html", null, true);
        echo " </strong>
            <div><strong><a class=\"wpdm-download-link wpdm-download-locked [btnclass]\" rel=\"noindex nofollow\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ("/uploads/documents/" . twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 9, $this->source); })()), "brochure", [], "any", false, false, false, 9)), "html", null, true);
        echo "\"><i
                                class=\"\"></i>Download</a></strong></div>
        </div>
    </div>
</div>
<div style=\"clear: both\"></div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/_documentEn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wpdm-link-tpl link-btn [color]\">
    <div class=\"media\">
        <a href=\"{{ '/uploads/documents/' ~ document.brochure }}\" class=\"pull-right\">
            <img class=\"wpdm_icon disappear appear\" src=\"{{ '/assets/images/pdf.png' }}\" >
        </a>

        <div class=\"media-body\">
            <strong class=\"ptitle\">{{ document.nameEn|capitalize }} <span class=\"label label-default\" style=\"font-weight: 400;\">{{ document.size|readable_filesize }}</span>  {{ document.nameAr }} </strong>
            <div><strong><a class=\"wpdm-download-link wpdm-download-locked [btnclass]\" rel=\"noindex nofollow\" href=\"{{ '/uploads/documents/' ~ document.brochure }}\"><i
                                class=\"\"></i>Download</a></strong></div>
        </div>
    </div>
</div>
<div style=\"clear: both\"></div>", "includes/_documentEn.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/includes/_documentEn.html.twig");
    }
}
