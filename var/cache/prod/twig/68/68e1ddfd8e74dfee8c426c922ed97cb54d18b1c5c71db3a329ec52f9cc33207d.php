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

/* includes/_document.html.twig */
class __TwigTemplate_4f68ecf3192f40a1660fa1a08eb378617cdfdd79cd8410fc3aa039964e53280b extends Template
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
        echo "<div class=\"wpdm-link-tpl link-btn [color]\">
    <div class=\"media\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ("/uploads/documents/" . twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "brochure", [], "any", false, false, false, 3)), "html", null, true);
        echo "\" class=\"pull-left\">
            <img class=\"wpdm_icon disappear appear\" src=\"";
        // line 4
        echo "/assets/images/pdf.png";
        echo "\" >
        </a>

        <div class=\"media-body\">
            <strong class=\"ptitle\"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "nameAr", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "nameEn", [], "any", false, false, false, 8)), "html", null, true);
        echo " <span class=\"label label-default\" style=\"font-weight: 400;\">";
        echo twig_escape_filter($this->env, $this->extensions['SPE\FilesizeExtensionBundle\Twig\FilesizeExtension']->readableFilesize(twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "size", [], "any", false, false, false, 8)), "html", null, true);
        echo "</span></strong>
            <div><strong><a class=\"wpdm-download-link wpdm-download-locked [btnclass]\" rel=\"noindex nofollow\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ("/uploads/documents/" . twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "brochure", [], "any", false, false, false, 9)), "html", null, true);
        echo "\"><i
                                class=\"\"></i>Download</a></strong></div>
        </div>
    </div>
</div>
<div style=\"clear: both\"></div>";
    }

    public function getTemplateName()
    {
        return "includes/_document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  52 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/_document.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/includes/_document.html.twig");
    }
}
