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

/* baseFr.html.twig */
class __TwigTemplate_e1e1680d6ee824738f6029af64e6a06c20aa8bcd2ff6cb732850e06d89d8f512 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html class=\" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths\"
      lang=\"fr-FR\">
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/my-style-en-fr.css"), "html", null, true);
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
    <body class=\"home page-template page-template-template-home page-template-template-home-php page page-id-482 tax-template-\">

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">العربية</a></li>
                            <li><a href=\"";
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.en");
        echo "\">ENGLISH</a></li>
                            <li class=\"active\"><a href=\"#\">FRANCAIS</a></li>
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
                               placeholder=\"Chercher\">
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
                                <span class=\"head-title-1\">Ambassade de la République algérienne démocratique et populaire<br></span>
                                <span class=\"head-title-2\">Koweit</span><span class=\"head-title-3\"></span>
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
        if ((array_key_exists("page", $context) && (0 === twig_compare(($context["page"] ?? null), "home")))) {
            echo " ubermenu-hovered ";
        }
        echo "\"
                                       href=\"";
        // line 355
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.fr");
        echo "\" tabindex=\"0\"><span
                                                class=\"ubermenu-target-title ubermenu-target-text\">Accueil</span>
                                    </a>

                                </li>
                                ";
        // line 360
        $this->loadTemplate("includes/menu_item_fr.html.twig", "baseFr.html.twig", 360)->display(twig_to_array(["pages" => ($context["ambassador"] ?? null), "hover" => (0 === twig_compare(($context["page"] ?? null), "ambassador")), "sub_menu_name" => "Ambassadeur"]));
        // line 361
        echo "                                ";
        $this->loadTemplate("includes/menu_item_fr.html.twig", "baseFr.html.twig", 361)->display(twig_to_array(["pages" => ($context["section"] ?? null), "hover" => (0 === twig_compare(($context["page"] ?? null), "section")), "sub_menu_name" => "Sections"]));
        // line 362
        echo "                                ";
        $this->loadTemplate("includes/menu_item_fr.html.twig", "baseFr.html.twig", 362)->display(twig_to_array(["pages" => ($context["relation"] ?? null), "hover" => (0 === twig_compare(($context["page"] ?? null), "relation")), "sub_menu_name" => "Relations bilatérales"]));
        // line 363
        echo "                                ";
        $this->loadTemplate("includes/menu_item_fr.html.twig", "baseFr.html.twig", 363)->display(twig_to_array(["pages" => ($context["affair"] ?? null), "hover" => (0 === twig_compare(($context["page"] ?? null), "affair")), "sub_menu_name" => "Affaires consulaires"]));
        // line 364
        echo "                                ";
        $this->loadTemplate("includes/menu_item_fr.html.twig", "baseFr.html.twig", 364)->display(twig_to_array(["pages" => ($context["visa"] ?? null), "hover" => (0 === twig_compare(($context["page"] ?? null), "visa")), "sub_menu_name" => "Visas"]));
        // line 365
        echo "                                <li id=\"menu-item-284\"
                                    class=\"ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-284 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega\">
                                    <a class=\"ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only ";
        // line 367
        if ((array_key_exists("page", $context) && (0 === twig_compare(($context["page"] ?? null), "contact")))) {
            echo " ubermenu-hovered ";
        }
        echo "\"
                                       href=\"";
        // line 368
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact.fr");
        echo "\" tabindex=\"0\"><span
                                                class=\"ubermenu-target-title ubermenu-target-text\">Contact</span></a>

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
                            <h3>Ambassade d'Algérie au Koweït
                            </h3>
                        </div>
                        <div class=\"menu-footer-menu-container\">
                            <ul id=\"menu-footer-menu\" class=\"menu\">
                                <li id=\"menu-item-8710\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-8710\">
                                    <a href=\"#\">Accueil</a></li>
                                <li id=\"menu-item-274\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-274\"><a
                                            href=\"#\">Ambassadeur</a></li>
                                <li id=\"menu-item-277\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-277\"><a
                                            href=\"#\">Sections</a></li>
                                <li id=\"menu-item-275\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-275\"><a
                                            href=\"#\">Relations bilatérales</a></li>
                                <li id=\"menu-item-8697\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-8697\">
                                    <a href=\"#\">Affaires consulaires</a></li>
                                <li id=\"menu-item-278\"
                                    class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-278\"><a
                                            href=\"#\">Visas</a></li>
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
                                <h3>Contactez-nous
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
                <div class=\"textwidget\">Tous droits réservés &#9400; Le site officiel de l'ambassade d'Algérie au Koweït
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
    }

    // line 238
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 239
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 388
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 529
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "baseFr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 529,  712 => 388,  706 => 239,  699 => 238,  693 => 530,  691 => 529,  687 => 528,  649 => 493,  644 => 491,  640 => 490,  636 => 489,  586 => 442,  566 => 425,  533 => 395,  525 => 389,  523 => 388,  500 => 368,  494 => 367,  490 => 365,  487 => 364,  484 => 363,  481 => 362,  478 => 361,  476 => 360,  468 => 355,  462 => 354,  447 => 342,  388 => 286,  356 => 257,  352 => 256,  334 => 240,  332 => 239,  328 => 238,  323 => 236,  112 => 28,  108 => 27,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "baseFr.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/baseFr.html.twig");
    }
}
