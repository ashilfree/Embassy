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

/* base.html.twig */
class __TwigTemplate_e9e1aab5810210e47e2ead3d89d8d2b8bffde2c65bedc8d755378fc9ef19659b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths\"
      lang=\"ar-AL\" dir=\"rtl\" lang=\"ar\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Algeria Embassy in Kuwait</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/leaflet.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/leaflet.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" id=\"wp-block-library-css\" href=\"./";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-rtl.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"contact-form-7-css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles-rtl.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"ubermenu-css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ubermenu.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"ubermenu-white-css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/white.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"sage_css-css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main-35cbf851.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"sage_css-s\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/my-style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"
              integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" id=\"jquery-ui-style-css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"flipbox_css-css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flipbox-160aa2f6.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"pcs-styles-css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default-styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/smart_wizard_all.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\">
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\">
        </script>
        <style id=\"ubermenu-custom-generated-css\">
            /** Font Awesome 4 Compatibility **/
            .fa {
                font-style: normal;
                font-variant: normal;
                font-weight: normal;
            }

            /** UberMenu Custom Menu Styles (Customizer) **/
            /* main */
            .ubermenu-main .ubermenu-item .ubermenu-submenu-drop {
                -ms-transition-duration: .5s;
                -webkit-transition-duration: .5s;
                transition-duration: .5s;
            }

            .ubermenu-main .ubermenu-item-level-0>.ubermenu-target {
                color: #000000;
            }

            .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-item>.ubermenu-target,
            .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-parent>.ubermenu-target,
            .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-ancestor>.ubermenu-target {
                color: #cc3333;
            }

            .ubermenu-main .ubermenu-nav .ubermenu-item.ubermenu-item-level-0>.ubermenu-target {
                font-weight: normal;
            }

            .ubermenu-main .ubermenu-submenu .ubermenu-item-header>.ubermenu-target,
            .ubermenu-main .ubermenu-tab>.ubermenu-target,
            .ubermenu-main .ubermenu-item-normal>.ubermenu-target,
            .ubermenu-main,
            .ubermenu-main .ubermenu-target,
            .ubermenu-main .ubermenu-nav .ubermenu-item-level-0 .ubermenu-target,
            .ubermenu-main div,
            .ubermenu-main p,
            .ubermenu-main input {
                font-family: 'Roboto Condensed', sans-serif;
            }

            .ubermenu-main .ubermenu-submenu.ubermenu-submenu-drop {
                background-color: #f2efef;
            }

            .ubermenu.ubermenu-main {
                background: none;
                border: none;
                box-shadow: none;
            }

            .ubermenu.ubermenu-main .ubermenu-item-level-0>.ubermenu-target {
                border: none;
                box-shadow: none;
            }

            .ubermenu.ubermenu-main .ubermenu-item-level-0:hover>.ubermenu-target,
            .ubermenu-main .ubermenu-item-level-0.ubermenu-active>.ubermenu-target {
                color: #EFC77D;
            }

            .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-item-level-0.ubermenu-active>.ubermenu-submenu-drop,
            .ubermenu.ubermenu-main.ubermenu-horizontal:not(.ubermenu-transition-shift) .ubermenu-item-level-0>.ubermenu-submenu-drop {
                margin-top: 0;
            }

            .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-submenu-drop.ubermenu-submenu-align-left_edge_bar,
            .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-submenu-drop.ubermenu-submenu-align-full_width {
                left: 0;
            }


            /** UberMenu Custom Menu Item Styles (Menu Item Settings) **/
            /* 6525 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-6525 {
                width: 75%;
                min-width: 75%;
            }

            /* 9006 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-9006 {
                width: 50%;
                min-width: 50%;
            }

            /* 8711 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-8711 {
                width: 75%;
                min-width: 75%;
            }

            /* 288 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-288 {
                width: 75%;
                min-width: 75%;
            }

            /* 8680 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-8680 {
                width: 75%;
                min-width: 75%;
            }

            /* 6510 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-6510 {
                width: 75%;
                min-width: 75%;
            }

            /* 9828 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-9828 {
                width: 50%;
                min-width: 50%;
            }

            /* 285 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-285 {
                width: 20%;
                min-width: 20%;
            }

            /* 287 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-287 {
                width: 75%;
                min-width: 75%;
            }


            /** UberMenu Custom Tweaks (General Settings) **/
            html[dir=\"rtl\"] .home .blogrollcontent.mainroll {
                margin: 0;
            }

            html[dir=\"rtl\"] .ubermenu-items-align-left.ubermenu-horizontal .ubermenu-item.ubermenu-item-level-0 {
                float: right !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-tab .ubermenu-content-align-right {
                text-align: left !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-tabs-group.ubermenu-column.ubermenu-column-1-4.ubermenu-submenu.ubermenu-submenu-type-auto.ubermenu-submenu-type-tabs-group {
                float: right !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-target-title.ubermenu-target-text {
                text-align: right !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-nav .ubermenu-tab-content-panel .ubermenu-column-1-4 {
                border-left: 0px solid #ddd !important;
                border-right: 0px solid #ddd !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-nav .ubermenu-tab-content-panel .ubermenu-column-1-4 {
                border-left: 0px solid #ddd !important;
                border-right: 0px solid #ddd !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-tab-content-panel.ubermenu-column.ubermenu-column-3-4.ubermenu-submenu.ubermenu-submenu-type-tab-content-panel.ubermenu-submenu-retractor-top {
                left: 0px !important;
                right: auto !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-tabs-group.ubermenu-column.ubermenu-column-1-4.ubermenu-submenu.ubermenu-submenu-type-auto.ubermenu-submenu-type-tabs-group {
                border-left: 1px solid #ddd !important;
                border-right: 0px solid #ddd !important;
            }

            /* Status: Loaded from Transient */

            .wvu-breadcrumbs {
                font-size: 1em;
                color: #ccc;
                line-height: 1.5;
                margin: 8px;
                padding-left: 0;
            }

            .wvu-breadcrumbs li {
                display: inline;
                list-style-type: none;
                margin-left: 0;
            }

            .wvu-breadcrumbs li.active a {
                color: #EFC77D;
            }

            .wvu-breadcrumbs li:before {
                content: \"|\";
                padding-right: 3px;
            }

            .wvu-breadcrumbs li.active:before {
                color: #EFC77D;
            }

            .wvu-breadcrumbs li:first-child:before {
                content: \"\";
                padding-right: 0;
            }
        </style>
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        <script type=\"text/javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/remote.loader.js"), "html", null, true);
        echo "\"></script>
        <meta id=\"Reverso_extension___elForCheckedInstallExtension\" name=\"Reverso extension\" content=\"2.2.202\">
        <title>";
        // line 238
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 239
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 240
        echo "    </head>
    <body class=\"rtl home page-template page-template-template-home page-template-template-home-php page page-id-482 tax-template-\">

    <div id=\"fb-root\" class=\" fb_reset\">
        <div style=\"position: absolute; top: -10000px; width: 0px; height: 0px;\">
            <div></div>
        </div>
    </div>

    <header class=\"banner\">

        <div class=\"mo-language\">
            <div class=\"container\">
                <ul class=\"row\">
                    <li  class=\"col-xs-5 language\">
                        <ul class=\"wvu-breadcrumbs\" id=\"language-switch\">
                            <li><a href=\"";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.en");
        echo "\">ENGLISH</a></li>
                            <li><a href=\"";
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.fr");
        echo "\">FRANCAIS</a></li>
                            <li class=\"active\"><a href=\"#\">العربية</a></li>
                        </ul>
                    </li>
                    <li class=\"col-xs-3 login\">
                        <h4 style=\"display: none\" class=\"text-right\" style=\"color: black;\">
                            <span class=\"fa fa-user\" style=\"color:#EFC77D;\"> </span>
                            <a href=\"#\">تسجيل الدخول</a>
                        </h4>

                    </li>
                    <li class=\"col-xs-4 language\">
                        <input type=\"text\"
                               style=\"background: transparent;border: none;border-bottom: 1px solid #EFC77D;width:90%\"
                               placeholder=\"بحث\">
                        <span class=\"fa fa-search\" style=\"color:#EFC77D; margin-left:-15px\"></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"mo-header\">

            <div class=\"container\">

                <div class=\"mo-header-wrap\">

                    <div class=\"mo-logo text-center\">

                        <a class=\"brand-logo\" href=\"#\">
                            <img alt=\"Algeria Embassy\" title=\"Algeria Embassy\" src=\"";
        // line 286
        echo "/assets/images/dos-logo-light.png";
        echo "\">
                        </a>
                        <h1>
                            <a class=\"brand\" href=\"#\" title=\"ALgeria Embassy &amp; Consulates in kuwait\">
                                <span class=\"head-title-1\">سفارة الجمهورية الجزائرية الديمقراطية الشعبية<br></span>
                                <span class=\"head-title-2\"> دولة الكويت</span><span class=\"head-title-3\"></span>
                            </a>
                        </h1>

                    </div>

                    <div class=\"mo-header-social-search\">
                        <section class=\"mo-footer-subscription widget text-40 widget_text\">
                            <h3>Social / Search</h3>
                            <div class=\"textwidget\">
                                <div class=\"mo-social-links\">
                                    <a class=\"fa fa-twitter\" href=\"#\" style=\"color:#ffffff;background:transparent;\"
                                       title=\"Twitter\">
                                        <span>Twitter</span>
                                    </a>
                                    <a class=\"fa fa-facebook\" href=\"#\" style=\"color:#ffffff;background:transparent;\"
                                       title=\"Facebook\">
                                        <span>Facebook</span>
                                    </a>
                                    <a class=\"fa fa-youtube\" href=\"#\" style=\"color:#ffffff;background:transparent;\"
                                       title=\"YouTube\">
                                        <span>YouTube</span>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>

            </div>

        </div>

        <small>
            <div class=\"mo-nav\">
                <div class=\"container\">
                    <nav>
                        <div class=\"ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-white ubermenu-loc- ubermenu-responsive-toggle-content-align-left ubermenu-responsive-toggle-align-full ubermenu-responsive-toggle-icon-only\"
                             tabindex=\"0\" data-ubermenu-target=\"ubermenu-main-Main-Navigation\">
                            <i class=\"fa fa-bars\"></i>
                        </div>
                        <nav id=\"ubermenu-main-Main-Navigation\"
                             class=\"ubermenu ubermenu-main ubermenu-menu-Main-Navigation ubermenu-responsive ubermenu-responsive-default ubermenu-horizontal ubermenu-transition-fade ubermenu-trigger-hover_intent ubermenu-skin-white  ubermenu-bar-align-full ubermenu-items-align-left ubermenu-bound ubermenu-disable-submenu-scroll ubermenu-sub-indicators ubermenu-icons-inline ubermenu-submenu-indicator-closes ubermenu-notouch ubermenu-responsive-collapse\">
                            <ul class=\"ubermenu-nav\" data-title=\"Main Navigation\">
                                <li
                                        class=\"ubermenu-item ubermenu-item-type-custom ubermenu-item-object-ubermenu-custom ubermenu-item-2232 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto\">
                                    <div
                                            class=\"ubermenu-content-block ubermenu-custom-content ubermenu-custom-content-padded\">
                                        <a href=\"#\">
                                            <img style=\"width: 32px;\" alt=\"United States Seal\"
                                                 src=\"";
        // line 342
        echo "/assets/images/dos-logo-light.png";
        echo "\">
                                        </a>
                                    </div>
                                </li>
                                <li
                                        class=\"ubermenu-item ubermenu-item-type-custom ubermenu-item-object-ubermenu-custom ubermenu-item-2231 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto\">
                                    <div class=\"ubermenu-content-block ubermenu-custom-content\">
                                        <!-- this is a hidden (li) that allows the Mobile Nav to work with the sticky nav -->
                                    </div>
                                </li>
                                <li id=\"menu-item-8711\"
                                    class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-8711 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega\">
                                    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only ";
        // line 354
        if ((array_key_exists("page", $context) && (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 354, $this->source); })()), "home")))) {
            echo " ubermenu-hovered ";
        }
        echo "\"
                                       href=\"";
        // line 355
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" tabindex=\"0\"><span
                                                class=\"ubermenu-target-title ubermenu-target-text\">الرئيسية</span>
                                    </a>

                                </li>
                                ";
        // line 360
        $this->loadTemplate("includes/menu_item.html.twig", "base.html.twig", 360)->display(twig_to_array(["pages" => (isset($context["ambassador"]) || array_key_exists("ambassador", $context) ? $context["ambassador"] : (function () { throw new RuntimeError('Variable "ambassador" does not exist.', 360, $this->source); })()), "hover" => (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 360, $this->source); })()), "ambassador")), "sub_menu_name" => "السفير"]));
        // line 361
        echo "                                ";
        $this->loadTemplate("includes/menu_item.html.twig", "base.html.twig", 361)->display(twig_to_array(["pages" => (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 361, $this->source); })()), "hover" => (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 361, $this->source); })()), "section")), "sub_menu_name" => "الأقسام"]));
        // line 362
        echo "                                ";
        $this->loadTemplate("includes/menu_item.html.twig", "base.html.twig", 362)->display(twig_to_array(["pages" => (isset($context["relation"]) || array_key_exists("relation", $context) ? $context["relation"] : (function () { throw new RuntimeError('Variable "relation" does not exist.', 362, $this->source); })()), "hover" => (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 362, $this->source); })()), "relation")), "sub_menu_name" => "العلاقات الثنائية"]));
        // line 363
        echo "                                ";
        $this->loadTemplate("includes/menu_item.html.twig", "base.html.twig", 363)->display(twig_to_array(["pages" => (isset($context["affair"]) || array_key_exists("affair", $context) ? $context["affair"] : (function () { throw new RuntimeError('Variable "affair" does not exist.', 363, $this->source); })()), "hover" => (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 363, $this->source); })()), "affair")), "sub_menu_name" => "الشؤون القنصلية"]));
        // line 364
        echo "                                ";
        $this->loadTemplate("includes/menu_item.html.twig", "base.html.twig", 364)->display(twig_to_array(["pages" => (isset($context["visa"]) || array_key_exists("visa", $context) ? $context["visa"] : (function () { throw new RuntimeError('Variable "visa" does not exist.', 364, $this->source); })()), "hover" => (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 364, $this->source); })()), "visa")), "sub_menu_name" => "التأشيرات"]));
        // line 365
        echo "                                <li id=\"menu-item-284\"
                                    class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-284 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega\">
                                    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only ";
        // line 367
        if ((array_key_exists("page", $context) && (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 367, $this->source); })()), "contact")))) {
            echo " ubermenu-hovered ";
        }
        echo "\"
                                       href=\"";
        // line 368
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" tabindex=\"0\"><span
                                                class=\"ubermenu-target-title ubermenu-target-text\">إتصل بنا</span></a>

                                </li>
                            </ul>
                        </nav>
                        <!-- End UberMenu -->

                    </nav>

                </div>


            </div>

        </small>
    </header>
    <small>


        ";
        // line 388
        $this->displayBlock('body', $context, $blocks);
        // line 389
        echo "
        <div class=\"mo-footer\">
            <footer class=\"content-info\">
                <div class=\"container\">
                    <section class=\"mo-footer-menu widget nav_menu-2 widget_nav_menu\">
                        <div style=\"display: flex;margin-bottom:20px;\">
                            <img src=\"";
        // line 395
        echo "/assets/images/Layer51@1X.png";
        echo "\">
                            <h3>سفارة الجزائر في دولة الكويت
                            </h3>
                        </div>
                        <div class=\"menu-footer-menu-container\">
                            <ul id=\"menu-footer-menu\" class=\"menu\">
                                <li id=\"menu-item-8710\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-8710\">
                                    <a href=\"#\">الرئيسية</a></li>
                                <li id=\"menu-item-274\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-274\"><a
                                            href=\"#\">السفير</a></li>
                                <li id=\"menu-item-277\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-277\"><a
                                            href=\"#\">الأقسام</a></li>
                                <li id=\"menu-item-275\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-275\"><a
                                            href=\"#\">العلاقات الثنائية</a></li>
                                <li id=\"menu-item-8697\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-8697\">
                                    <a href=\"#\">الشئون القنصلية</a></li>
                                <li id=\"menu-item-278\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-278\"><a
                                            href=\"#\">التأشيرات</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class=\"footer-middle\">
                        <section class=\"mo-footer-embassy widget text-26 widget_text\">
                            <div style=\"display: flex; margin-bottom:20px;\">
                                <img src=\"";
        // line 425
        echo "/assets/images/Layer52@1X.png";
        echo "\" alt=\"\" srcset=\"\">
                                <h3>إتصل بنا
                                </h3>
                            </div>
                            <div class=\"textwidget\">
                                <a href=\"#\">P.Box:578 safat 13006- kuwait</a>
                                <br>
                                22519987 - 22519984
                                <br>
                                ambalg.kw@gmail.com
                                <br>
                                www.algerianembassy-kuwait.org
                                <br>
                            </div>
                        </section>
                    </div>
                    <div class=\"footer-end\">
                        <img class=\"img-responsive\" src=\"";
        // line 442
        echo "/assets/images/Layer35copy@1X.png";
        echo "\"
                             style=\"opacity: 0.07058823529411765;\" alt=\"\">
                    </div>
                </div>
            </footer>
        </div>
        <div class=\"mo-copyright\">
            <div class=\"container\" style=\"text-align:center;\">
                <p><span class=\"sr-only\">Footer Disclaimer</span></p>
                <div class=\"textwidget\">الموقع الرسمي للسفارة الجزائرية في دولة الكويت &#9400; جميع الحقوق محفوظة
                </div>
                <p></p>
            </div>
        </div>
        <script type=\"text/javascript\">
            /* <![CDATA[ */
            var ubermenu_data = {
                \"remove_conflicts\": \"on\",
                \"reposition_on_load\": \"off\",
                \"intent_delay\": \"300\",
                \"intent_interval\": \"100\",
                \"intent_threshold\": \"7\",
                \"scrollto_offset\": \"50\",
                \"scrollto_duration\": \"1000\",
                \"responsive_breakpoint\": \"959\",
                \"accessible\": \"on\",
                \"retractor_display_strategy\": \"mobile\",
                \"touch_off_close\": \"on\",
                \"submenu_indicator_close_mobile\": \"on\",
                \"collapse_after_scroll\": \"on\",
                \"v\": \"3.6.1\",
                \"configurations\": [\"main\"],
                \"disable_mobile\": \"off\",
                \"prefix_boost\": \"\",
                \"aria_role_navigation\": \"off\",
                \"aria_nav_label\": \"off\",
                \"aria_expanded\": \"off\",
                \"aria_hidden\": \"off\",
                \"aria_controls\": \"\",
                \"aria_responsive_toggle\": \"off\",
                \"icon_tag\": \"i\",
                \"theme_locations\": {
                    \"primary_navigation\": \"Primary Navigation\"
                }
            };
            /* ]]> */
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ubermenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main-495a938c.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core.min.js"), "html", null, true);
        echo "\">
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            jQuery(document).ready(function (jQuery) {
                jQuery.datepicker.setDefaults({
                    \"closeText\": \"Close\",
                    \"currentText\": \"Today\",
                    \"monthNames\": [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\",
                        \"August\", \"September\",
                        \"October\", \"November\", \"December\"
                    ],
                    \"monthNamesShort\": [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\",
                        \"Oct\", \"Nov\",
                        \"Dec\"
                    ],
                    \"nextText\": \"Next\",
                    \"prevText\": \"Previous\",
                    \"dayNames\": [\"Sunday\", \"Monday\", \"Tuesday\", \"Wednesday\", \"Thursday\", \"Friday\",
                        \"Saturday\"
                    ],
                    \"dayNamesShort\": [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"],
                    \"dayNamesMin\": [\"S\", \"M\", \"T\", \"W\", \"T\", \"F\", \"S\"],
                    \"dateFormat\": \"d MM, yy\",
                    \"firstDay\": 1,
                    \"isRTL\": false
                });
            });
        </script>
        <script type=\"text/javascript\">
            /* <![CDATA[ */
            jQuery(document).ready(function (\$) {
                \$(\"ul.nav-menu\").not(\":has(li)\").hide().closest('div').hide();
            });
            /* ]]> */
        </script>
    </small>
    <script type=\"text/javascript\" id=\"\" src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.smartWizard.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 529
        $this->displayBlock('javascripts', $context, $blocks);
        // line 530
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 238
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 239
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 388
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 529
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 529,  748 => 388,  730 => 239,  711 => 238,  699 => 530,  697 => 529,  693 => 528,  655 => 493,  650 => 491,  646 => 490,  642 => 489,  592 => 442,  572 => 425,  539 => 395,  531 => 389,  529 => 388,  506 => 368,  500 => 367,  496 => 365,  493 => 364,  490 => 363,  487 => 362,  484 => 361,  482 => 360,  474 => 355,  468 => 354,  453 => 342,  394 => 286,  362 => 257,  358 => 256,  340 => 240,  338 => 239,  334 => 238,  329 => 236,  118 => 28,  114 => 27,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths\"
      lang=\"ar-AL\" dir=\"rtl\" lang=\"ar\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Algeria Embassy in Kuwait</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/leaflet.css') }}\" />
        <script src=\"{{ asset('assets/js/leaflet.js') }}\"></script>
        <link rel=\"stylesheet\" id=\"wp-block-library-css\" href=\"./{{ asset('assets/css/style-rtl.min.css') }}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"contact-form-7-css\" href=\"{{ asset('assets/css/styles-rtl.css') }}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"ubermenu-css\" href=\"{{ asset('assets/css/ubermenu.min.css') }}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"ubermenu-white-css\" href=\"{{ asset('assets/css/white.css') }}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"sage_css-css\" href=\"{{ asset('assets/css/main-35cbf851.css') }}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"sage_css-s\" href=\"{{ asset('assets/css/my-style.css') }}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"
              integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" id=\"jquery-ui-style-css\" href=\"{{ asset('assets/css/jquery-ui.css') }}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"flipbox_css-css\" href=\"{{ asset('assets/css/flipbox-160aa2f6.css') }}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"pcs-styles-css\" href=\"{{ asset('assets/css/default-styles.css') }}\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/smart_wizard_all.min.css') }}\" type=\"text/css\" media=\"screen\">
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery.js') }}\">
        </script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery-migrate.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/scripts.js') }}\">
        </script>
        <style id=\"ubermenu-custom-generated-css\">
            /** Font Awesome 4 Compatibility **/
            .fa {
                font-style: normal;
                font-variant: normal;
                font-weight: normal;
            }

            /** UberMenu Custom Menu Styles (Customizer) **/
            /* main */
            .ubermenu-main .ubermenu-item .ubermenu-submenu-drop {
                -ms-transition-duration: .5s;
                -webkit-transition-duration: .5s;
                transition-duration: .5s;
            }

            .ubermenu-main .ubermenu-item-level-0>.ubermenu-target {
                color: #000000;
            }

            .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-item>.ubermenu-target,
            .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-parent>.ubermenu-target,
            .ubermenu-main .ubermenu-item-level-0.ubermenu-current-menu-ancestor>.ubermenu-target {
                color: #cc3333;
            }

            .ubermenu-main .ubermenu-nav .ubermenu-item.ubermenu-item-level-0>.ubermenu-target {
                font-weight: normal;
            }

            .ubermenu-main .ubermenu-submenu .ubermenu-item-header>.ubermenu-target,
            .ubermenu-main .ubermenu-tab>.ubermenu-target,
            .ubermenu-main .ubermenu-item-normal>.ubermenu-target,
            .ubermenu-main,
            .ubermenu-main .ubermenu-target,
            .ubermenu-main .ubermenu-nav .ubermenu-item-level-0 .ubermenu-target,
            .ubermenu-main div,
            .ubermenu-main p,
            .ubermenu-main input {
                font-family: 'Roboto Condensed', sans-serif;
            }

            .ubermenu-main .ubermenu-submenu.ubermenu-submenu-drop {
                background-color: #f2efef;
            }

            .ubermenu.ubermenu-main {
                background: none;
                border: none;
                box-shadow: none;
            }

            .ubermenu.ubermenu-main .ubermenu-item-level-0>.ubermenu-target {
                border: none;
                box-shadow: none;
            }

            .ubermenu.ubermenu-main .ubermenu-item-level-0:hover>.ubermenu-target,
            .ubermenu-main .ubermenu-item-level-0.ubermenu-active>.ubermenu-target {
                color: #EFC77D;
            }

            .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-item-level-0.ubermenu-active>.ubermenu-submenu-drop,
            .ubermenu.ubermenu-main.ubermenu-horizontal:not(.ubermenu-transition-shift) .ubermenu-item-level-0>.ubermenu-submenu-drop {
                margin-top: 0;
            }

            .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-submenu-drop.ubermenu-submenu-align-left_edge_bar,
            .ubermenu.ubermenu-main.ubermenu-horizontal .ubermenu-submenu-drop.ubermenu-submenu-align-full_width {
                left: 0;
            }


            /** UberMenu Custom Menu Item Styles (Menu Item Settings) **/
            /* 6525 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-6525 {
                width: 75%;
                min-width: 75%;
            }

            /* 9006 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-9006 {
                width: 50%;
                min-width: 50%;
            }

            /* 8711 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-8711 {
                width: 75%;
                min-width: 75%;
            }

            /* 288 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-288 {
                width: 75%;
                min-width: 75%;
            }

            /* 8680 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-8680 {
                width: 75%;
                min-width: 75%;
            }

            /* 6510 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-6510 {
                width: 75%;
                min-width: 75%;
            }

            /* 9828 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-9828 {
                width: 50%;
                min-width: 50%;
            }

            /* 285 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-285 {
                width: 20%;
                min-width: 20%;
            }

            /* 287 */
            .ubermenu .ubermenu-submenu.ubermenu-submenu-id-287 {
                width: 75%;
                min-width: 75%;
            }


            /** UberMenu Custom Tweaks (General Settings) **/
            html[dir=\"rtl\"] .home .blogrollcontent.mainroll {
                margin: 0;
            }

            html[dir=\"rtl\"] .ubermenu-items-align-left.ubermenu-horizontal .ubermenu-item.ubermenu-item-level-0 {
                float: right !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-tab .ubermenu-content-align-right {
                text-align: left !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-tabs-group.ubermenu-column.ubermenu-column-1-4.ubermenu-submenu.ubermenu-submenu-type-auto.ubermenu-submenu-type-tabs-group {
                float: right !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-target-title.ubermenu-target-text {
                text-align: right !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-nav .ubermenu-tab-content-panel .ubermenu-column-1-4 {
                border-left: 0px solid #ddd !important;
                border-right: 0px solid #ddd !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-nav .ubermenu-tab-content-panel .ubermenu-column-1-4 {
                border-left: 0px solid #ddd !important;
                border-right: 0px solid #ddd !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-tab-content-panel.ubermenu-column.ubermenu-column-3-4.ubermenu-submenu.ubermenu-submenu-type-tab-content-panel.ubermenu-submenu-retractor-top {
                left: 0px !important;
                right: auto !important;
            }

            html[dir=\"rtl\"] .ubermenu .ubermenu-tabs-group.ubermenu-column.ubermenu-column-1-4.ubermenu-submenu.ubermenu-submenu-type-auto.ubermenu-submenu-type-tabs-group {
                border-left: 1px solid #ddd !important;
                border-right: 0px solid #ddd !important;
            }

            /* Status: Loaded from Transient */

            .wvu-breadcrumbs {
                font-size: 1em;
                color: #ccc;
                line-height: 1.5;
                margin: 8px;
                padding-left: 0;
            }

            .wvu-breadcrumbs li {
                display: inline;
                list-style-type: none;
                margin-left: 0;
            }

            .wvu-breadcrumbs li.active a {
                color: #EFC77D;
            }

            .wvu-breadcrumbs li:before {
                content: \"|\";
                padding-right: 3px;
            }

            .wvu-breadcrumbs li.active:before {
                color: #EFC77D;
            }

            .wvu-breadcrumbs li:first-child:before {
                content: \"\";
                padding-right: 0;
            }
        </style>
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/remote.loader.js') }}\"></script>
        <meta id=\"Reverso_extension___elForCheckedInstallExtension\" name=\"Reverso extension\" content=\"2.2.202\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body class=\"rtl home page-template page-template-template-home page-template-template-home-php page page-id-482 tax-template-\">

    <div id=\"fb-root\" class=\" fb_reset\">
        <div style=\"position: absolute; top: -10000px; width: 0px; height: 0px;\">
            <div></div>
        </div>
    </div>

    <header class=\"banner\">

        <div class=\"mo-language\">
            <div class=\"container\">
                <ul class=\"row\">
                    <li  class=\"col-xs-5 language\">
                        <ul class=\"wvu-breadcrumbs\" id=\"language-switch\">
                            <li><a href=\"{{ path('home.en') }}\">ENGLISH</a></li>
                            <li><a href=\"{{ path('home.fr') }}\">FRANCAIS</a></li>
                            <li class=\"active\"><a href=\"#\">العربية</a></li>
                        </ul>
                    </li>
                    <li class=\"col-xs-3 login\">
                        <h4 style=\"display: none\" class=\"text-right\" style=\"color: black;\">
                            <span class=\"fa fa-user\" style=\"color:#EFC77D;\"> </span>
                            <a href=\"#\">تسجيل الدخول</a>
                        </h4>

                    </li>
                    <li class=\"col-xs-4 language\">
                        <input type=\"text\"
                               style=\"background: transparent;border: none;border-bottom: 1px solid #EFC77D;width:90%\"
                               placeholder=\"بحث\">
                        <span class=\"fa fa-search\" style=\"color:#EFC77D; margin-left:-15px\"></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"mo-header\">

            <div class=\"container\">

                <div class=\"mo-header-wrap\">

                    <div class=\"mo-logo text-center\">

                        <a class=\"brand-logo\" href=\"#\">
                            <img alt=\"Algeria Embassy\" title=\"Algeria Embassy\" src=\"{{ '/assets/images/dos-logo-light.png' }}\">
                        </a>
                        <h1>
                            <a class=\"brand\" href=\"#\" title=\"ALgeria Embassy &amp; Consulates in kuwait\">
                                <span class=\"head-title-1\">سفارة الجمهورية الجزائرية الديمقراطية الشعبية<br></span>
                                <span class=\"head-title-2\"> دولة الكويت</span><span class=\"head-title-3\"></span>
                            </a>
                        </h1>

                    </div>

                    <div class=\"mo-header-social-search\">
                        <section class=\"mo-footer-subscription widget text-40 widget_text\">
                            <h3>Social / Search</h3>
                            <div class=\"textwidget\">
                                <div class=\"mo-social-links\">
                                    <a class=\"fa fa-twitter\" href=\"#\" style=\"color:#ffffff;background:transparent;\"
                                       title=\"Twitter\">
                                        <span>Twitter</span>
                                    </a>
                                    <a class=\"fa fa-facebook\" href=\"#\" style=\"color:#ffffff;background:transparent;\"
                                       title=\"Facebook\">
                                        <span>Facebook</span>
                                    </a>
                                    <a class=\"fa fa-youtube\" href=\"#\" style=\"color:#ffffff;background:transparent;\"
                                       title=\"YouTube\">
                                        <span>YouTube</span>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>

            </div>

        </div>

        <small>
            <div class=\"mo-nav\">
                <div class=\"container\">
                    <nav>
                        <div class=\"ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-white ubermenu-loc- ubermenu-responsive-toggle-content-align-left ubermenu-responsive-toggle-align-full ubermenu-responsive-toggle-icon-only\"
                             tabindex=\"0\" data-ubermenu-target=\"ubermenu-main-Main-Navigation\">
                            <i class=\"fa fa-bars\"></i>
                        </div>
                        <nav id=\"ubermenu-main-Main-Navigation\"
                             class=\"ubermenu ubermenu-main ubermenu-menu-Main-Navigation ubermenu-responsive ubermenu-responsive-default ubermenu-horizontal ubermenu-transition-fade ubermenu-trigger-hover_intent ubermenu-skin-white  ubermenu-bar-align-full ubermenu-items-align-left ubermenu-bound ubermenu-disable-submenu-scroll ubermenu-sub-indicators ubermenu-icons-inline ubermenu-submenu-indicator-closes ubermenu-notouch ubermenu-responsive-collapse\">
                            <ul class=\"ubermenu-nav\" data-title=\"Main Navigation\">
                                <li
                                        class=\"ubermenu-item ubermenu-item-type-custom ubermenu-item-object-ubermenu-custom ubermenu-item-2232 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto\">
                                    <div
                                            class=\"ubermenu-content-block ubermenu-custom-content ubermenu-custom-content-padded\">
                                        <a href=\"#\">
                                            <img style=\"width: 32px;\" alt=\"United States Seal\"
                                                 src=\"{{ '/assets/images/dos-logo-light.png' }}\">
                                        </a>
                                    </div>
                                </li>
                                <li
                                        class=\"ubermenu-item ubermenu-item-type-custom ubermenu-item-object-ubermenu-custom ubermenu-item-2231 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto\">
                                    <div class=\"ubermenu-content-block ubermenu-custom-content\">
                                        <!-- this is a hidden (li) that allows the Mobile Nav to work with the sticky nav -->
                                    </div>
                                </li>
                                <li id=\"menu-item-8711\"
                                    class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-8711 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega\">
                                    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only {% if page is defined and page == 'home' %} ubermenu-hovered {% endif %}\"
                                       href=\"{{ path('home')}}\" tabindex=\"0\"><span
                                                class=\"ubermenu-target-title ubermenu-target-text\">الرئيسية</span>
                                    </a>

                                </li>
                                {%  include('includes/menu_item.html.twig') with {pages: ambassador, hover: (page == 'ambassador'), sub_menu_name:'السفير'} only %}
                                {%  include('includes/menu_item.html.twig') with {pages: section, hover:(page == 'section'), sub_menu_name:'الأقسام'} only %}
                                {%  include('includes/menu_item.html.twig') with {pages: relation, hover:(page == \"relation\"), sub_menu_name:'العلاقات الثنائية'} only %}
                                {%  include('includes/menu_item.html.twig') with {pages: affair, hover:(page == 'affair'), sub_menu_name:'الشؤون القنصلية'} only %}
                                {%  include('includes/menu_item.html.twig') with {pages: visa, hover:(page == 'visa'), sub_menu_name:'التأشيرات'} only %}
                                <li id=\"menu-item-284\"
                                    class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-284 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega\">
                                    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only {% if page is defined and page == 'contact' %} ubermenu-hovered {% endif %}\"
                                       href=\"{{ path('contact') }}\" tabindex=\"0\"><span
                                                class=\"ubermenu-target-title ubermenu-target-text\">إتصل بنا</span></a>

                                </li>
                            </ul>
                        </nav>
                        <!-- End UberMenu -->

                    </nav>

                </div>


            </div>

        </small>
    </header>
    <small>


        {% block body %}{% endblock %}

        <div class=\"mo-footer\">
            <footer class=\"content-info\">
                <div class=\"container\">
                    <section class=\"mo-footer-menu widget nav_menu-2 widget_nav_menu\">
                        <div style=\"display: flex;margin-bottom:20px;\">
                            <img src=\"{{ '/assets/images/Layer51@1X.png' }}\">
                            <h3>سفارة الجزائر في دولة الكويت
                            </h3>
                        </div>
                        <div class=\"menu-footer-menu-container\">
                            <ul id=\"menu-footer-menu\" class=\"menu\">
                                <li id=\"menu-item-8710\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-8710\">
                                    <a href=\"#\">الرئيسية</a></li>
                                <li id=\"menu-item-274\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-274\"><a
                                            href=\"#\">السفير</a></li>
                                <li id=\"menu-item-277\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-277\"><a
                                            href=\"#\">الأقسام</a></li>
                                <li id=\"menu-item-275\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-275\"><a
                                            href=\"#\">العلاقات الثنائية</a></li>
                                <li id=\"menu-item-8697\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-8697\">
                                    <a href=\"#\">الشئون القنصلية</a></li>
                                <li id=\"menu-item-278\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-278\"><a
                                            href=\"#\">التأشيرات</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class=\"footer-middle\">
                        <section class=\"mo-footer-embassy widget text-26 widget_text\">
                            <div style=\"display: flex; margin-bottom:20px;\">
                                <img src=\"{{ '/assets/images/Layer52@1X.png' }}\" alt=\"\" srcset=\"\">
                                <h3>إتصل بنا
                                </h3>
                            </div>
                            <div class=\"textwidget\">
                                <a href=\"#\">P.Box:578 safat 13006- kuwait</a>
                                <br>
                                22519987 - 22519984
                                <br>
                                ambalg.kw@gmail.com
                                <br>
                                www.algerianembassy-kuwait.org
                                <br>
                            </div>
                        </section>
                    </div>
                    <div class=\"footer-end\">
                        <img class=\"img-responsive\" src=\"{{ '/assets/images/Layer35copy@1X.png' }}\"
                             style=\"opacity: 0.07058823529411765;\" alt=\"\">
                    </div>
                </div>
            </footer>
        </div>
        <div class=\"mo-copyright\">
            <div class=\"container\" style=\"text-align:center;\">
                <p><span class=\"sr-only\">Footer Disclaimer</span></p>
                <div class=\"textwidget\">الموقع الرسمي للسفارة الجزائرية في دولة الكويت &#9400; جميع الحقوق محفوظة
                </div>
                <p></p>
            </div>
        </div>
        <script type=\"text/javascript\">
            /* <![CDATA[ */
            var ubermenu_data = {
                \"remove_conflicts\": \"on\",
                \"reposition_on_load\": \"off\",
                \"intent_delay\": \"300\",
                \"intent_interval\": \"100\",
                \"intent_threshold\": \"7\",
                \"scrollto_offset\": \"50\",
                \"scrollto_duration\": \"1000\",
                \"responsive_breakpoint\": \"959\",
                \"accessible\": \"on\",
                \"retractor_display_strategy\": \"mobile\",
                \"touch_off_close\": \"on\",
                \"submenu_indicator_close_mobile\": \"on\",
                \"collapse_after_scroll\": \"on\",
                \"v\": \"3.6.1\",
                \"configurations\": [\"main\"],
                \"disable_mobile\": \"off\",
                \"prefix_boost\": \"\",
                \"aria_role_navigation\": \"off\",
                \"aria_nav_label\": \"off\",
                \"aria_expanded\": \"off\",
                \"aria_hidden\": \"off\",
                \"aria_controls\": \"\",
                \"aria_responsive_toggle\": \"off\",
                \"icon_tag\": \"i\",
                \"theme_locations\": {
                    \"primary_navigation\": \"Primary Navigation\"
                }
            };
            /* ]]> */
        </script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/ubermenu.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/main-495a938c.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/core.min.js') }}\">
        </script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/js/datepicker.min.js') }}\"></script>
        <script type=\"text/javascript\">
            jQuery(document).ready(function (jQuery) {
                jQuery.datepicker.setDefaults({
                    \"closeText\": \"Close\",
                    \"currentText\": \"Today\",
                    \"monthNames\": [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\",
                        \"August\", \"September\",
                        \"October\", \"November\", \"December\"
                    ],
                    \"monthNamesShort\": [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\",
                        \"Oct\", \"Nov\",
                        \"Dec\"
                    ],
                    \"nextText\": \"Next\",
                    \"prevText\": \"Previous\",
                    \"dayNames\": [\"Sunday\", \"Monday\", \"Tuesday\", \"Wednesday\", \"Thursday\", \"Friday\",
                        \"Saturday\"
                    ],
                    \"dayNamesShort\": [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"],
                    \"dayNamesMin\": [\"S\", \"M\", \"T\", \"W\", \"T\", \"F\", \"S\"],
                    \"dateFormat\": \"d MM, yy\",
                    \"firstDay\": 1,
                    \"isRTL\": false
                });
            });
        </script>
        <script type=\"text/javascript\">
            /* <![CDATA[ */
            jQuery(document).ready(function (\$) {
                \$(\"ul.nav-menu\").not(\":has(li)\").hide().closest('div').hide();
            });
            /* ]]> */
        </script>
    </small>
    <script type=\"text/javascript\" id=\"\" src=\"{{ asset('assets/js/jquery.smartWizard.min.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/base.html.twig");
    }
}
