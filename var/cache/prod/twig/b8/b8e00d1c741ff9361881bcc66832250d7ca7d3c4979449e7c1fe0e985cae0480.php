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

/* admin/scheduler.html.twig */
class __TwigTemplate_eca66b021d2002cacd6a938d5ca6d9ae19f15d1e1332548a33ae7bc61483afa0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'content' => [$this, 'block_content'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 1), "admin/scheduler.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/jquery.steps.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/fullcalendar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/slots.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"min-height-200px\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-12\">
                    <div class=\"title\">
                        <h4>Scheduling</h4>
                    </div>
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a>Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Scheduling</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class=\"pd-20 card-box mb-30\">
            <div class=\"clearfix\">
                <h4 class=\"text-blue h4\">Scheduling Steps</h4>
            </div>
            <div class=\"wizard-content\">
                <form class=\"tab-wizard wizard-circle wizard\">
                    <h5>Select a Day</h5>
                    <section>
                        <div class=\"calendar-wrap mb-10\">
                            <div id='calendar'></div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Time Slot</h5>
                    <section>
                        <div class=\"content mb-10\">
                            <div class=\"container\">

                                <div class=\"row\">
                                    <div class=\"col-12\">


                                        <!-- Schedule Widget -->
                                        <div class=\"card booking-schedule schedule-widget\">

                                            <!-- Schedule Content -->
                                            <div class=\"schedule-cont\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12\">

                                                        <!-- Time Slot -->
                                                        <div class=\"time-slot\">
                                                            <ul class=\"clearfix\">
                                                                <li>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"08:00:00\">
                                                                        <span>08:00</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"10:30:00\">
                                                                        <span>10:30</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"14:00:00\">
                                                                        <span>14:00</span> <span>AM</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"08:30:00\">
                                                                        <span>08:30</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"11:00:00\">
                                                                        <span>11:00</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"14:30:00\">
                                                                        <span>14:30</span> <span>AM</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"09:00:00\">
                                                                        <span>9:00</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"11:30:00\">
                                                                        <span>11:30</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"15:00:00\">
                                                                        <span>15:00</span> <span>AM</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"09:30:00\">
                                                                        <span>9:30</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"13:00:00\">
                                                                        <span>13:00</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"15:30:00\">
                                                                        <span>15:30</span> <span>AM</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class=\"timing\" href=\"#\" data-time=\"10:00:00\">
                                                                        <span>10:00</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"\" data-time=\"13:30:00\">
                                                                        <span>13:30</span> <span>AM</span>
                                                                    </a>
                                                                    <a class=\"timing\" href=\"\" data-time=\"16:00:00\">
                                                                        <span>16:00</span> <span>AM</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- /Time Slot -->

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Schedule Content -->

                                        </div>
                                        <!-- /Schedule Widget -->
                                        <!-- /Submit Section -->

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </form>
            </div>
        </div>


        <!-- success Popup html Start -->
        <div class=\"modal fade\" id=\"success-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body text-center font-18\">
                        <h3 class=\"mb-20\">Data Updated!</h3>
                        <div class=\"mb-30 text-center\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/success.png"), "html", null, true);
        echo "\"></div>
                    </div>
                    <div class=\"modal-footer justify-content-center\">
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Done</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- success Popup html End -->

        <!-- Failed Popup html Start -->
        <div class=\"modal fade\" id=\"failed-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body text-center font-18\">
                        <h3 class=\"mb-20\">Updated Failed!</h3>
                        <div class=\"mb-30 text-center\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/failed.png"), "html", null, true);
        echo "\"></div>
                    </div>
                    <div class=\"modal-footer justify-content-center\">
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Failed Popup html End -->
    </div>
    <style>
        .fc-highli {
            background-color: #30ea5f !important;
        }
    </style>
";
    }

    // line 176
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/jquery.steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/steps-setting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/calendar-setting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/slots.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "admin/scheduler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 181,  263 => 180,  259 => 179,  255 => 178,  250 => 177,  246 => 176,  226 => 160,  207 => 144,  70 => 9,  66 => 8,  60 => 6,  56 => 5,  51 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/scheduler.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/scheduler.html.twig");
    }
}
