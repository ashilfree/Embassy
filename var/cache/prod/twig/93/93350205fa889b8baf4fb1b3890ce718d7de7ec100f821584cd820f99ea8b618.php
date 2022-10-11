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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_3eaaa6923497a4baab298154d1597921b0c284b0a2f0d6c1eb6f17d002743161 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'wrapper' => [$this, 'block_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'user_menu' => [$this, 'block_user_menu'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_e1db22c9f3bc307a66a1261c20f521b6d042248067ce710aebaf1300544a830a"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta name=\"generator\" content=\"EasyAdmin\" />

    <title>";
        // line 13
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/core.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/icon-font.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/style.css"), "html", null, true);
        echo "\" />
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-119386393-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
    ";
        // line 28
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 31
        echo "
    ";
        // line 32
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        if ((0 === twig_compare("rtl", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 65), "textDirection", [], "any", false, false, false, 65)))) {
            // line 67
            echo "    ";
        }
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 74
        echo "</head>

";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 285
        echo "</html>
";
    }

    // line 13
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_striptags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 28
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
    }

    // line 32
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "cssFiles", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "cssFiles", [], "any", false, false, false, 33)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "cssFiles", [], "any", false, false, false, 33)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 34
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    ";
    }

    // line 38
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 39)), "html", null, true);
        echo "\">
    ";
    }

    // line 42
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/core.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/script.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/process.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/layout-settings.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/datatable-setting.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <!-- Datatable Setting js -->

    ";
    }

    // line 69
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 70), "headContents", [], "any", true, true, false, 70) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 70), "headContents", [], "any", false, false, false, 70)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 70), "headContents", [], "any", false, false, false, 70)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 71
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    ";
    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    <div class=\"pre-loader\">
        <div class=\"pre-loader-box\">
            <div class=\"loader-logo\"><img src=\"";
        // line 80
        echo "/assets/admin/images/logo-black.png";
        echo "\" alt=\"\"></div>
            <div class='loader-progress' id=\"progress_div\">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class=\"loading-text\">
                Loading...
            </div>
        </div>
    </div>
    <script>
        document.body.classList.add(
            'ea-content-width-' + (localStorage.getItem('ea/content/width') || 'normal'),
            'ea-sidebar-width-' + (localStorage.getItem('ea/sidebar/width') || 'normal')
        );
    </script>

    ";
        // line 97
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 269
        echo "
    ";
        // line 270
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 271
        echo "
    ";
        // line 272
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 277
        echo "
    ";
        // line 278
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 283
        echo "    </body>
";
    }

    // line 77
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 97
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 101
        echo "
        <div class=\"wrapper\">
            ";
        // line 103
        $this->displayBlock('wrapper', $context, $blocks);
        // line 267
        echo "        </div>
    ";
    }

    // line 98
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 99));
        echo "
        ";
    }

    // line 103
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "
                <div class=\"header\">
                    <div class=\"header-left\">
                        ";
        // line 107
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 107), "get", [0 => "sort"], "method", false, false, false, 107)));
        // line 108
        echo "                        ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 108), "get", [0 => "sort"], "method", false, false, false, 108));
        // line 109
        echo "                        ";
        $context["some_results_are_hidden"] = false;
        // line 110
        echo "                        ";
        $context["has_search"] = true;
        // line 111
        echo "                        ";
        $context["has_datagrid_tools"] = (($context["has_search"] ?? null) || ($context["has_filters"] ?? null));
        // line 112
        echo "                        ";
        if (($context["has_datagrid_tools"] ?? null)) {
            // line 113
            echo "                        <div class=\"menu-icon dw dw-menu\"></div>
                        <div class=\"search-toggle-icon dw dw-search2\" data-toggle=\"header_search\"></div>
                            ";
            // line 115
            $this->displayBlock('search', $context, $blocks);
            // line 162
            echo "                        ";
        }
        // line 163
        echo "                    </div>

                    <div class=\"header-right\">
                        <div class=\"user-info-dropdown\">
                            <div class=\"dropdown\">
                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<span class=\"user-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 170
        echo "/assets/admin/images/avatar.png";
        echo "\" alt=\"\">
\t\t\t\t\t\t</span>
                                    <span class=\"user-name\">";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
        echo "</span>
                                </a>
                                ";
        // line 174
        $this->displayBlock('user_menu', $context, $blocks);
        // line 186
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"left-side-bar\">
                    <div class=\"brand-logo\">
                        <a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 193));
        echo "\">
                            <img src=\"";
        // line 194
        echo "/assets/admin/images/deskapp-logo.svg";
        echo "\" alt=\"\" class=\"dark-logo\">
                            <img src=\"";
        // line 195
        echo "/assets/admin/images/logo-white.png";
        echo "\" alt=\"\" class=\"light-logo\">
                        </a>
                        <div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
                            <i class=\"ion-close-round\"></i>
                        </div>
                    </div>
                    <div class=\"menu-block customscroll\">
                        <div class=\"sidebar-menu\">
                            ";
        // line 203
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 206
        echo "                        </div>
                    </div>
                </div>

                <div class=\"mobile-menu-overlay\"></div>
                <div class=\"main-container\">
                    <div class=\"pd-ltr-20 xs-pd-20-10\">
                        ";
        // line 213
        $this->displayBlock('content', $context, $blocks);
        // line 258
        echo "                        <div class=\"footer-wrap pd-20 mb-20 card-box\">
                            Algeria Embassy - Control Panel <a href=\"http://algerianembassy-kuwait.org/\" target=\"_blank\">Main WebSite</a>
                        </div>
                    </div>
                </div>


                </div>
            ";
    }

    // line 115
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                            ";
        if (($context["has_search"] ?? null)) {
            // line 117
            echo "                        <div class=\"header-search\">
                            <form method=\"get\">
                                ";
            // line 119
            $this->displayBlock('search_form', $context, $blocks);
            // line 141
            echo "                            </form>
                        </div>
                            ";
        }
        // line 144
        echo "                            ";
    }

    // line 119
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "                                    ";
        // line 121
        echo "                                    ";
        $context["query_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 121), "query", [], "any", false, false, false, 121), "all", [], "any", false, false, false, 121), ["referrer" => null, "page" => 1]);
        // line 124
        echo "
                                    ";
        // line 127
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray(($context["query_parameters"] ?? null)));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 128
            echo "                                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["paramName"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
                                    <div class=\"form-group mb-0\">
                                        <i class=\"dw dw-search2 search-icon\"></i>
                                            <input class=\"form-control search-input\" type=\"search\" name=\"query\" value=\"";
        // line 133
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 133), "get", [0 => "query"], "method", true, true, false, 133) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 133), "get", [0 => "query"], "method", false, false, false, 133)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 133), "get", [0 => "query"], "method", false, false, false, 133), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 133), "translationParameters", [], "any", false, false, false, 133), "EasyAdminBundle"), "html", null, true);
        echo "\">
                                        <div class=\"dropdown\">
                                            <button class=\"dropdown-toggle no-arrow\" type=\"submit\">
                                                <i class=\"icon-copy ion-search\"></i>
                                            </button>
                                        </div>
                                    </div>
                                ";
    }

    // line 174
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "                                    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 175), "items", [], "any", false, false, false, 175)), 0))) {
            // line 176
            echo "                                        <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
                                            ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 177), "items", [], "any", false, false, false, 177));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 178
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 178), "html", null, true);
                echo "\" class=\"dropdown-item\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 178), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 178), "html", null, true);
                echo "\" referrerpolicy=\"origin-when-cross-origin\">
                                                    ";
                // line 179
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 179))) {
                    echo "<i class=\"dw dw-logout\"></i>";
                }
                // line 180
                echo "                                                    <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 180), "html", null, true);
                echo "</span>
                                                </a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                                        </div>
                                    ";
        }
        // line 185
        echo "                                ";
    }

    // line 203
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 204));
        echo "
                            ";
    }

    // line 213
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "                            <div class=\"min-height-200px\">
                                ";
        // line 215
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 243
        echo "
                                <section id=\"main\" class=\"card-box mb-30\">
                                    ";
        // line 245
        $this->displayBlock('main', $context, $blocks);
        // line 246
        echo "                                </section>

                                ";
        // line 248
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 256
        echo "                            </div>
                        ";
    }

    // line 215
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        echo "                                    ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 216), "helpMessage", [], "any", true, true, false, 216) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 216), "helpMessage", [], "any", false, false, false, 216)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 216), "helpMessage", [], "any", false, false, false, 216)) : ("")));
        // line 217
        echo "                                    <section class=\"page-header\">
                                        ";
        // line 218
        $this->displayBlock('content_header', $context, $blocks);
        // line 241
        echo "                                    </section>
                                ";
    }

    // line 218
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "
                                            <div class=\"row\">
                                                <div class=\"col-md-6 col-sm-12\">
                                                    ";
        // line 222
        ob_start(function () { return ''; });
        // line 223
        echo "                                                        ";
        $this->displayBlock('content_title', $context, $blocks);
        // line 224
        echo "                                                    ";
        $context["foo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 225
        echo "                                                    <div class=\"title\">
                                                        <h4> ";
        // line 226
        echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
        echo "</h4>
                                                    </div>
                                                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                                                        <ol class=\"breadcrumb\">
                                                            <li class=\"breadcrumb-item\"><a href=\"\">Home</a></li>
                                                            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 231
        echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
        echo "</li>
                                                        </ol>
                                                    </nav>
                                                </div>

                                                ";
        // line 236
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 239
        echo "                                            </div>
                                        ";
    }

    // line 223
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 236
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 237
        echo "                                                    <div class=\"col-md-6 col-sm-12 text-right\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                                ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 245
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 248
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        echo "                                    ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 250
        echo "                                    ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 251
            echo "                                        <section class=\"content-footer\">
                                            ";
            // line 252
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                        </section>
                                    ";
        }
        // line 255
        echo "                                ";
    }

    // line 270
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 272
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 273), "jsFiles", [], "any", true, true, false, 273) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 273), "jsFiles", [], "any", false, false, false, 273)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 273), "jsFiles", [], "any", false, false, false, 273)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 274
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "    ";
    }

    // line 278
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 279
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 279), "bodyContents", [], "any", true, true, false, 279) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 279), "bodyContents", [], "any", false, false, false, 279)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 279), "bodyContents", [], "any", false, false, false, 279)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 280
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  811 => 282,  802 => 280,  797 => 279,  793 => 278,  789 => 276,  780 => 274,  775 => 273,  771 => 272,  765 => 270,  761 => 255,  755 => 252,  752 => 251,  749 => 250,  746 => 249,  742 => 248,  736 => 245,  724 => 237,  720 => 236,  714 => 223,  709 => 239,  707 => 236,  699 => 231,  691 => 226,  688 => 225,  685 => 224,  682 => 223,  680 => 222,  675 => 219,  671 => 218,  666 => 241,  664 => 218,  661 => 217,  658 => 216,  654 => 215,  649 => 256,  647 => 248,  643 => 246,  641 => 245,  637 => 243,  635 => 215,  632 => 214,  628 => 213,  621 => 204,  617 => 203,  613 => 185,  609 => 183,  599 => 180,  595 => 179,  586 => 178,  582 => 177,  579 => 176,  576 => 175,  572 => 174,  558 => 133,  553 => 130,  542 => 128,  537 => 127,  534 => 124,  531 => 121,  529 => 120,  525 => 119,  521 => 144,  516 => 141,  514 => 119,  510 => 117,  507 => 116,  503 => 115,  491 => 258,  489 => 213,  480 => 206,  478 => 203,  467 => 195,  463 => 194,  459 => 193,  450 => 186,  448 => 174,  443 => 172,  438 => 170,  429 => 163,  426 => 162,  424 => 115,  420 => 113,  417 => 112,  414 => 111,  411 => 110,  408 => 109,  405 => 108,  403 => 107,  398 => 104,  394 => 103,  387 => 99,  383 => 98,  378 => 267,  376 => 103,  372 => 101,  369 => 98,  365 => 97,  354 => 77,  349 => 283,  347 => 278,  344 => 277,  342 => 272,  339 => 271,  337 => 270,  334 => 269,  332 => 97,  312 => 80,  303 => 77,  299 => 76,  295 => 73,  286 => 71,  281 => 70,  277 => 69,  269 => 60,  265 => 59,  261 => 58,  257 => 57,  253 => 56,  249 => 55,  245 => 54,  241 => 53,  237 => 52,  233 => 51,  229 => 50,  225 => 49,  220 => 47,  216 => 46,  212 => 45,  207 => 44,  203 => 42,  196 => 39,  192 => 38,  188 => 36,  179 => 34,  174 => 33,  170 => 32,  166 => 30,  162 => 28,  155 => 13,  150 => 285,  148 => 76,  144 => 74,  142 => 69,  139 => 68,  136 => 67,  134 => 65,  131 => 64,  129 => 42,  126 => 41,  124 => 38,  121 => 37,  119 => 32,  116 => 31,  114 => 28,  102 => 19,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  81 => 13,  70 => 5,  66 => 3,  64 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/bundles/EasyAdminBundle/layout.html.twig");
    }
}
