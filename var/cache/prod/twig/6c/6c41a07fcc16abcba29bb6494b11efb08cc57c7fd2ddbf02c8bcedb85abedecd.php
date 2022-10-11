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

/* pages/article.html.twig */
class __TwigTemplate_0d55a97c0ac12dd04719e38b3c7291bda5c0b2f97637ad00c06e6eade8179b12 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "pages/article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"container fp-slider\">
        <div id=\"carousel-example-generic\" class=\"carousel slide fp-slider\" data-ride=\"carousel\" data-wrap=\"false\"
             data-pause=\"hover\">
            <div class=\"carousel-inner\">
                ";
        // line 7
        echo twig_include($this->env, $context, "includes/_slider.html.twig");
        echo "
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"prev\">&nbsp;<span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"next\">&nbsp;<span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
    </div>
    <div id=\"main\" class=\"wrap container mo-background\" role=\"document\">

        <div class=\"content row\">
            <main class=\"main article\">
                <div class=\"mo-page-content homepage-tp\">
                    <div class=\"mo-front-page\">
                        <div class=\"mo-home-widgets\">
                            <div class=\"mo-frontpage-widgets widget text-5 widget_text\">
                                <div class=\"textwidget\">
                                    <div class=\"mo-flipbox\">
                                        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document");
        echo "\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\">
                                                <i class=\"fa fa-file-o fa-lg\"></i>
                                                <p>وثائق مهمة</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-calendar fa-lg\"></i>
                                                <p>حجز المواعيد</p>
                                            </div>
                                        </a></div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-map-signs fa-lg\"></i>
                                                <p>إرشادات ونصائح مفيدة</p>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div style=\"background-color: #E6E6E6;padding:10px\">
                            <h1 class=\"text-center\">الأخبار</h1>
                            <div class=\"blogrollcontent mainroll\">
                                <article
                                        class=\"post type-post status-publish format-standard has-post-thumbnail hentry\">
                                    <div class=\"blogrollbox\"><a class=\"darken\"><img
                                                    src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["article"] ?? null), "imageFile"), "html", null, true);
        echo "\"
                                                    class=\"img-responsive wp-post-image default-home-seal\"
                                                    alt=\"Independence and Youth Day\" title=\"Independence and Youth Day\"
                                                    style=\"opacity: 1;\"></a></div>
                                    <h2 class=\"entry-title\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 55), "html", null, true);
        echo "</h2>
                                    <p class=\"blog-meta\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "stringPublishedAt", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                                    <div class=\"entry-summary\">
                                        <p>";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 58);
        echo "</p>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div><!-- /.content -->
";
    }

    public function getTemplateName()
    {
        return "pages/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 58,  117 => 56,  113 => 55,  106 => 51,  77 => 25,  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/article.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/article.html.twig");
    }
}
