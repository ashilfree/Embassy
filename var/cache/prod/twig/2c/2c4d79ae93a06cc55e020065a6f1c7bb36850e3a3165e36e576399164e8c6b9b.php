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

/* includes/_article.html.twig */
class __TwigTemplate_90aa8533c74528ade021bf2c48b15fe2b17119443912c1609076657d62c54382 extends Template
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
        echo "<article
        class=\"post type-post status-publish format-standard has-post-thumbnail hentry\">
    <div class=\"blogrollbox\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 3), "id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\" class=\"darken\"><img
                    src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["article"] ?? null), "imageFile"), "medium"), "html", null, true);
        echo "\"
                    class=\"img-responsive wp-post-image default-home-seal\"
                    alt=\"Independence and Youth Day\" title=\"Independence and Youth Day\"
                    style=\"opacity: 1;\"></a></div>
    <h2 class=\"entry-title\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 8), "id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</a></h2>
    <p class=\"blog-meta\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "stringPublishedAt", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
    <div class=\"entry-summary\">
        <p>";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 11);
        echo "</p>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "includes/_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  58 => 9,  52 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/_article.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/includes/_article.html.twig");
    }
}
