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

/* admin/dashboard.html.twig */
class __TwigTemplate_4ffe8abe4112f0ae85523c198a1f5879df8f2d1fe257be12d6199efa74d3d7e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "bundles/EasyAdminBundle/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("bundles/EasyAdminBundle/layout.html.twig", "admin/dashboard.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"card-box pd-20 height-100-p mb-30\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-4\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/banner-img.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-8\">
                <h4 class=\"font-20 weight-500 mb-10 text-capitalize\">
                    Welcome back
                    <div class=\"weight-600 font-30 text-blue\">Embassy Agent!</div>
                </h4>
                <p class=\"font-18 max-width-600\">On this page you will find various statistics (daily, weekly and
                    monthly...) in addition to that you will find below the daily list of appointments</p>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xl-3 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["countToday"]) || array_key_exists("countToday", $context) ? $context["countToday"] : (function () { throw new RuntimeError('Variable "countToday" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</div>
                        <div class=\"weight-600 font-14\">Today</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart2\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["countLastWeek"]) || array_key_exists("countLastWeek", $context) ? $context["countLastWeek"] : (function () { throw new RuntimeError('Variable "countLastWeek" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</div>
                        <div class=\"weight-600 font-14\">This Week</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart3\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["countLastMonth"]) || array_key_exists("countLastMonth", $context) ? $context["countLastMonth"] : (function () { throw new RuntimeError('Variable "countLastMonth" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</div>
                        <div class=\"weight-600 font-14\">This Month</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart4\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["countLastSixMonth"]) || array_key_exists("countLastSixMonth", $context) ? $context["countLastSixMonth"] : (function () { throw new RuntimeError('Variable "countLastSixMonth" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</div>
                        <div class=\"weight-600 font-14\">Last Six Month</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xl-6 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart6\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["connected"]) || array_key_exists("connected", $context) ? $context["connected"] : (function () { throw new RuntimeError('Variable "connected" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "</div>
                        <div class=\"weight-600 font-14\">Connected</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-6 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart7\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["totalVisits"]) || array_key_exists("totalVisits", $context) ? $context["totalVisits"] : (function () { throw new RuntimeError('Variable "totalVisits" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "</div>
                        <div class=\"weight-600 font-14\">Total Visitors</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xl-8 mb-30\">
            <div class=\"card-box height-100-p pd-20\">
                <h2 class=\"h4 mb-20\">Activity</h2>
                <div id=\"chart5\"></div>
            </div>
        </div>
        <div class=\"col-xl-4 mb-30\">
            ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_start', ["attr" => ["class" => "card-box height-100-p pd-20"]]);
        echo "
                <h2 class=\"h4 mb-20\">Pop Up</h2>
                <div class=\"profile-picture-upload\">
                    <img src=\"\" alt=\"Profile picture preview\" class=\"imagePreview\">
                    <div class=\"text-center\">
                        <button class=\"action-button mode-upload btn btn-round btn-file\">Upload PopUp</button>
                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "imageFile", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                </div>
                <div class=\"Container row pt-20\">
                    <div class=\"custom-control custom-checkbox mb-5 col-md-6\">
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "isShow", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "custom-control-input"]]);
        echo "
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "isRemove", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "
                        <label class=\"custom-control-label\" for=\"popup_isShow\">Show Pop-Up </label>
                    </div>
                    <div class=\"Controls col-md-6\" data-js=\"controls\">
                        <button class=\"Controls-primary\" data-js=\"controls-save\">
                            <span class=\"Controls-primary-text\">Save</span>
                            <div class=\"Controls-primary-inner\">
                                <div class=\"Controls-primary-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 33 25.41\">
                                        <polygon points=\"28.42 0 12.18 16.24 4.58 8.64 0 13.22 12.18 25.41 33 4.58 28.42 0\" style=\"fill: #fff\"/>
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    </div>
    <div class=\"card-box mb-30\">
        <h2 class=\"h4 pd-20\">ToDay Appointments</h2>
        <table class=\"table hover data-table-export nowrap\">
            <thead>

            <tr>
                <th class=\"table-plus datatable-nosort\">ID</th>
                <th>Civil Number</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Visit</th>
                <th>Time</th>
                <th class=\"datatable-nosort\">Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 158
            echo "                <tr>
                    <td class=\"table-plus\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 159), "html", null, true);
            echo "</td>
                    <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "civilNumber", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
                    <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "fullName", [], "any", false, false, false, 161), "html", null, true);
            echo "</td>
                    <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "phone", [], "any", false, false, false, 162), "html", null, true);
            echo "</td>
                    <td>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "visit", [], "any", false, false, false, 163), "html", null, true);
            echo "</td>
                    <td>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "schedule", [], "any", false, false, false, 164), "startTime", [], "any", false, false, false, 164), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"dropdown\">
                            <a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\"
                               role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"dw dw-more\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
                            </div>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "            </tbody>
        </table>
    </div>
    <style>
        .profile-picture-upload {
            /*display: inline;*/
        }

        .imagePreview {
            vertical-align: middle;
            width: auto;
            min-width: 326px;
            /*height: 64px;*/
            /*border-radius: 50%;*/
            margin: auto;
            -webkit-box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
            -moz-box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
            box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
        }

        .hidden {
            position: absolute;
            width: 0px;
            height: 0px;
            left: -999999px;
        }

        .action-button {
            margin-top: 10px;
            border: 1px solid black;
            border-radius: 30px;
            background: none;
            padding: 8px;
            cursor: pointer;
            outline: 0;
        }

        .action-button.mode-upload {
            color: #FFFFFF;
            border-color: #b8daff;
            background-color: #999999;
        }

        .action-button.mode-remove {
            color: #FFFFFF;
            border: 1px solid #f5c6cb;
            background-color: #F44336;
        }
    </style>
    <style>
        .Controls {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: end;
            justify-content: flex-end;
        }

        .is-Controls-success .Controls-primary-inner {
            width: 48px;
            background: #5294de;
        }
        .is-Controls-success .Controls-primary-icon {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        .is-Controls-success .Controls-primary-text {
            margin-right: 32px;
        }
        .is-Controls-success .Controls-secondary {
            opacity: 0;
            max-width: 0;
            margin: 0;
        }

        .Controls-primary,
        .Controls-secondary {
            padding: 0;
            border: none;
            background: none;
            font-size: 16px;
            font-weight: bold;
            line-height: 1;
            text-transform: uppercase;
            cursor: pointer;
        }

        .Controls-primary {
            position: relative;
            padding: 16px 26px;
            color: #5294de;
        }

        .Controls-primary-inner {
            position: absolute;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            overflow: hidden;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            border: 3px solid #5294de;
            border-radius: 100px;
            -webkit-transition: 0.3s width ease, 0.3s background ease;
            transition: 0.3s width ease, 0.3s background ease;
        }

        .Controls-primary-icon {
            width: 28px;
            -webkit-transition: 0.3s -webkit-transform ease;
            transition: 0.3s -webkit-transform ease;
            transition: 0.3s transform ease;
            transition: 0.3s transform ease, 0.3s -webkit-transform ease;
            -webkit-transform: translateY(200%);
            transform: translateY(200%);
        }

        .Controls-primary-text {
            margin-right: 0;
            -webkit-transition: 0.3s margin-right ease;
            transition: 0.3s margin-right ease;
        }

        .Controls-secondary {
            max-width: 100px;
            margin-left: 24px;
            overflow: hidden;
            -webkit-transition: 0.3s max-width ease;
            transition: 0.3s max-width ease;
        }

        .Container {
            width: auto;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 319
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 320
        echo "    <script type=\"module\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"module\">
        var options = {
            series: [";
        // line 323
        (((0 !== twig_compare((isset($context["countLastWeek"]) || array_key_exists("countLastWeek", $context) ? $context["countLastWeek"] : (function () { throw new RuntimeError('Variable "countLastWeek" does not exist.', 323, $this->source); })()), 0))) ? (print (twig_escape_filter($this->env, (int) floor((((isset($context["countToday"]) || array_key_exists("countToday", $context) ? $context["countToday"] : (function () { throw new RuntimeError('Variable "countToday" does not exist.', 323, $this->source); })()) * 100) / (isset($context["countLastWeek"]) || array_key_exists("countLastWeek", $context) ? $context["countLastWeek"] : (function () { throw new RuntimeError('Variable "countLastWeek" does not exist.', 323, $this->source); })()))), "html", null, true))) : (print (0)));
        echo "],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 0.8,
                    gradientToColors: ['#1b00ff'],
                    inverseColors: false,
                    opacityFrom: [1, 0.2],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };

        var options2 = {
            series: [";
        // line 393
        (((0 !== twig_compare((isset($context["countLastMonth"]) || array_key_exists("countLastMonth", $context) ? $context["countLastMonth"] : (function () { throw new RuntimeError('Variable "countLastMonth" does not exist.', 393, $this->source); })()), 0))) ? (print (twig_escape_filter($this->env, (int) floor((((isset($context["countLastWeek"]) || array_key_exists("countLastWeek", $context) ? $context["countLastWeek"] : (function () { throw new RuntimeError('Variable "countLastWeek" does not exist.', 393, $this->source); })()) * 100) / (isset($context["countLastMonth"]) || array_key_exists("countLastMonth", $context) ? $context["countLastMonth"] : (function () { throw new RuntimeError('Variable "countLastMonth" does not exist.', 393, $this->source); })()))), "html", null, true))) : (print (0)));
        echo "],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 1,
                    gradientToColors: ['#009688'],
                    inverseColors: false,
                    opacityFrom: [1, 0.2],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };

        var options3 = {
            series: [";
        // line 463
        (((0 !== twig_compare((isset($context["countLastSixMonth"]) || array_key_exists("countLastSixMonth", $context) ? $context["countLastSixMonth"] : (function () { throw new RuntimeError('Variable "countLastSixMonth" does not exist.', 463, $this->source); })()), 0))) ? (print (twig_escape_filter($this->env, (int) floor((((isset($context["countLastMonth"]) || array_key_exists("countLastMonth", $context) ? $context["countLastMonth"] : (function () { throw new RuntimeError('Variable "countLastMonth" does not exist.', 463, $this->source); })()) * 100) / (isset($context["countLastSixMonth"]) || array_key_exists("countLastSixMonth", $context) ? $context["countLastSixMonth"] : (function () { throw new RuntimeError('Variable "countLastSixMonth" does not exist.', 463, $this->source); })()))), "html", null, true))) : (print (0)));
        echo "],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 0.8,
                    gradientToColors: ['#f56767'],
                    inverseColors: false,
                    opacityFrom: [1, 0.2],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };

        var options7 = {
            series: [";
        // line 533
        (((0 !== twig_compare((isset($context["connected"]) || array_key_exists("connected", $context) ? $context["connected"] : (function () { throw new RuntimeError('Variable "connected" does not exist.', 533, $this->source); })()), 0))) ? (print (twig_escape_filter($this->env, (int) floor((((isset($context["connected"]) || array_key_exists("connected", $context) ? $context["connected"] : (function () { throw new RuntimeError('Variable "connected" does not exist.', 533, $this->source); })()) * 100) / (isset($context["totalVisits"]) || array_key_exists("totalVisits", $context) ? $context["totalVisits"] : (function () { throw new RuntimeError('Variable "totalVisits" does not exist.', 533, $this->source); })()))), "html", null, true))) : (print (0)));
        echo "],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 0.8,
                    gradientToColors: ['#f56767'],
                    inverseColors: false,
                    opacityFrom: [1, 0.2],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };

        var options4 = {
            series: [100],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 0.8,
                    gradientToColors: ['#2979ff'],
                    inverseColors: false,
                    opacityFrom: [1, 0.5],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };
        var dataArray = []
        var monthArray = []
        ";
        // line 673
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["byMonth"]) || array_key_exists("byMonth", $context) ? $context["byMonth"] : (function () { throw new RuntimeError('Variable "byMonth" does not exist.', 673, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 674
            echo "            dataArray.push(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], 1, [], "array", false, false, false, 674), "html", null, true);
            echo ")
            monthArray.push(moment.monthsShort('-MMM-', ";
            // line 675
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["row"], 2, [], "array", false, false, false, 675) - 1), "html", null, true);
            echo "))
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 677
        echo "        var options5 = {
            chart: {
                height: 350,
                type: 'bar',
                parentHeightOffset: 0,
                fontFamily: 'Poppins, sans-serif',
                toolbar: {
                    show: false,
                },
            },
            colors: ['#1b00ff'],
            grid: {
                borderColor: '#c7d2dd',
                strokeDashArray: 5,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '25%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'In Progress',
                data: dataArray
            }],
            xaxis: {
                categories: monthArray,
                labels: {
                    style: {
                        colors: ['#353535'],
                        fontSize: '16px',
                    },
                },
                axisBorder: {
                    color: '#8fa6bc',
                }
            },
            yaxis: {
                title: {
                    text: ''
                },
                labels: {
                    style: {
                        colors: '#353535',
                        fontSize: '16px',
                    },
                },
                axisBorder: {
                    color: '#f00',
                }
            },
            legend: {
                horizontalAlign: 'right',
                position: 'top',
                fontSize: '16px',
                offsetY: 0,
                labels: {
                    colors: '#353535',
                },
                markers: {
                    width: 10,
                    height: 10,
                    radius: 15,
                },
                itemMargin: {
                    vertical: 0
                },
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                style: {
                    fontSize: '15px',
                    fontFamily: 'Poppins, sans-serif',
                },
                y: {
                    formatter: function (val) {
                        return val
                    }
                }
            }
        }

        var options6 = {
            series: [73],
            chart: {
                height: 350,
                type: 'radialBar',
                offsetY: 0
            },
            colors: ['#0B132B', '#222222'],
            plotOptions: {
                radialBar: {
                    startAngle: -135,
                    endAngle: 135,
                    dataLabels: {
                        name: {
                            fontSize: '16px',
                            color: undefined,
                            offsetY: 120
                        },
                        value: {
                            offsetY: 76,
                            fontSize: '22px',
                            color: undefined,
                            formatter: function (val) {
                                return val + \"%\";
                            }
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4
            },
            labels: ['Achieve Goals'],
        };

        var chart = new ApexCharts(document.querySelector(\"#chart\"), options);
        chart.render();

        var chart2 = new ApexCharts(document.querySelector(\"#chart2\"), options2);
        chart2.render();

        var chart3 = new ApexCharts(document.querySelector(\"#chart3\"), options3);
        chart3.render();

        var chart4 = new ApexCharts(document.querySelector(\"#chart4\"), options4);
        chart4.render();

        var chart6 = new ApexCharts(document.querySelector(\"#chart6\"), options7);
        chart6.render();

        var chart7 = new ApexCharts(document.querySelector(\"#chart7\"), options4);
        chart7.render();

        var chart5 = new ApexCharts(document.querySelector(\"#chart5\"), options5);
        chart5.render();
    </script>
    <script>


        let picturePreview = document.querySelector(\".imagePreview\");
        let actionButton = document.querySelector(\".action-button\");
        let fileInput = document.querySelector(\"input[name='popup[imageFile]']\");
        let fileReader = new FileReader();

        const DEFAULT_IMAGE_SRC = \"";
        // line 846
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 846, $this->source); })()), "request", [], "any", false, false, false, 846), "scheme", [], "any", false, false, false, 846) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 846, $this->source); })()), "request", [], "any", false, false, false, 846), "httpHost", [], "any", false, false, false, 846)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/image_placeholder.jpg")), "html", null, true);
        echo "\";

            function myFunction() {
              alert('it s done')
            }

        actionButton.addEventListener(\"click\", (e) => {
            e.preventDefault()
            if (picturePreview.src !== DEFAULT_IMAGE_SRC) {
                resetImage();
            } else {
                fileInput.click();
            }
        });

        fileInput.addEventListener(\"change\", () => {
            refreshImagePreview();
        });

        function resetImage() {
            setActionButtonMode(\"upload\");
            picturePreview.src = DEFAULT_IMAGE_SRC;
            fileInput.value = \"\";
            document.querySelector('#popup_isRemove').checked = false
            console.log(document.querySelector('#popup_isRemove').checked)
        }

        function setActionButtonMode(mode) {
            let modes = {
                \"upload\": function () {
                    actionButton.innerText = \"Upload PopUp\";
                    actionButton.classList.remove(\"mode-remove\");
                    actionButton.classList.add(\"mode-upload\");
                },
                \"remove\": function () {
                    actionButton.innerText = \"Remove PopUp\";
                    actionButton.classList.remove(\"mode-upload\");
                    actionButton.classList.add(\"mode-remove\");
                }
            }
            return (modes[mode]) ? modes[mode]() : console.error(\"unknown mode\");
        }

        function refreshImagePreview() {
            if (picturePreview.src !== DEFAULT_IMAGE_SRC) {
                picturePreview.src = DEFAULT_IMAGE_SRC;
            } else {
                if (fileInput.files && fileInput.files.length > 0) {
                    fileReader.readAsDataURL(fileInput.files[0]);
                    fileReader.onload = (e) => {
                        picturePreview.src = e.target.result;
                        setActionButtonMode(\"remove\");
                    }
                }
            }
        }
        ";
        // line 902
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["popup"]) || array_key_exists("popup", $context) ? $context["popup"] : (function () { throw new RuntimeError('Variable "popup" does not exist.', 902, $this->source); })()), "fileName", [], "any", false, false, false, 902), null))) {
            // line 903
            echo "            picturePreview.src =  \"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["popup"]) || array_key_exists("popup", $context) ? $context["popup"] : (function () { throw new RuntimeError('Variable "popup" does not exist.', 903, $this->source); })()), "imageFile"), "html", null, true);
            echo "\"
            setActionButtonMode(\"remove\");
        ";
        } else {
            // line 906
            echo "            picturePreview.src = DEFAULT_IMAGE_SRC;
        ";
        }
        // line 908
        echo "
         // refreshImagePreview();
    </script>
    <script>

        const controlsSuccessClass = 'is-Controls-success';
        const controlsElement = document.querySelector('[data-js=\"controls\"]');
        const controlsSaveButtonElement = document.querySelector('[data-js=\"controls-save\"]');

        controlsSaveButtonElement.addEventListener('click', function () {
            controlsElement.classList.add(controlsSuccessClass);

            window.setTimeout(() => {
                controlsElement.classList.remove(controlsSuccessClass);
            }, 10000);
        });
    </script>
    <script>
        async function loadUrl(url) {
            const form = new FormData(document.querySelector('form'));
            var data = [];
            form.forEach((value, key) => {
                data[key] = value;
            });
                init = {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                };
            const request = new Request(url, init);
            const response = await fetch(request);
            if (response.status >= 200 && response.status < 300)
            {
                const res = await response.text();
                const data = JSON.parse(res);
                // if(data['response'] === 'check') {
                //     arrAdmin = data['arrayAdmin']
                //     arrCitizen = data['arrayCitizen']
                //     if (selectedDate < new Date()) {
                //         for (var i = 0; i < arrAdmin.length; i++) {
                //             document.querySelectorAll('.timing').forEach(a => {
                //                 a.setAttribute('disabled', '');
                //                 if (a.dataset.time === arrAdmin[i]) {
                //                     a.classList.add('selected')
                //                 }
                //             })
                //         }
                //         for (var i = 0; i < arrCitizen.length; i++) {
                //             document.querySelectorAll('.timing').forEach(a => {
                //                 if (a.dataset.time === arrCitizen[i]) {
                //                     a.classList.add('selected2')
                //                 }
                //             })
                //         }
                //     } else {
                //         for (var i = 0; i < arrAdmin.length; i++) {
                //             document.querySelectorAll('.timing').forEach(a => {
                //
                //                 if (a.dataset.time === arrAdmin[i]) {
                //                     a.setAttribute('disabled', '');
                //                 }
                //             })
                //         }
                //         for (var i = 0; i < arrCitizen.length; i++) {
                //             document.querySelectorAll('.timing').forEach(a => {
                //                 if (a.dataset.time === arrCitizen[i]) {
                //                     if (!a.classList.contains('selected'))
                //                         a.classList.add('selected')
                //                 }
                //             })
                //         }
                //     }
                // }else{
                //     return true
                // }
            }else {
                console.error(response);
                return false
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1095 => 908,  1091 => 906,  1084 => 903,  1082 => 902,  1023 => 846,  852 => 677,  844 => 675,  839 => 674,  835 => 673,  692 => 533,  619 => 463,  546 => 393,  473 => 323,  466 => 320,  456 => 319,  306 => 178,  286 => 164,  282 => 163,  278 => 162,  274 => 161,  270 => 160,  266 => 159,  263 => 158,  259 => 157,  236 => 137,  217 => 121,  213 => 120,  206 => 116,  197 => 110,  179 => 95,  163 => 82,  145 => 67,  129 => 54,  113 => 41,  97 => 28,  74 => 8,  69 => 5,  59 => 4,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/bundles/EasyAdminBundle/default/layout.html.twig #}

{% extends 'bundles/EasyAdminBundle/layout.html.twig' %}
{% block content %}
    <div class=\"card-box pd-20 height-100-p mb-30\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-4\">
                <img src=\"{{ asset('assets/admin/images/banner-img.png') }}\" alt=\"\">
            </div>
            <div class=\"col-md-8\">
                <h4 class=\"font-20 weight-500 mb-10 text-capitalize\">
                    Welcome back
                    <div class=\"weight-600 font-30 text-blue\">Embassy Agent!</div>
                </h4>
                <p class=\"font-18 max-width-600\">On this page you will find various statistics (daily, weekly and
                    monthly...) in addition to that you will find below the daily list of appointments</p>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xl-3 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">{{ countToday }}</div>
                        <div class=\"weight-600 font-14\">Today</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart2\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">{{ countLastWeek }}</div>
                        <div class=\"weight-600 font-14\">This Week</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart3\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">{{ countLastMonth }}</div>
                        <div class=\"weight-600 font-14\">This Month</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart4\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">{{ countLastSixMonth }}</div>
                        <div class=\"weight-600 font-14\">Last Six Month</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xl-6 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart6\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">{{ connected }}</div>
                        <div class=\"weight-600 font-14\">Connected</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-6 mb-30\">
            <div class=\"card-box height-100-p widget-style1\">
                <div class=\"d-flex flex-wrap align-items-center\">
                    <div class=\"progress-data\">
                        <div id=\"chart7\"></div>
                    </div>
                    <div class=\"widget-data\">
                        <div class=\"h4 mb-0\">{{ totalVisits }}</div>
                        <div class=\"weight-600 font-14\">Total Visitors</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xl-8 mb-30\">
            <div class=\"card-box height-100-p pd-20\">
                <h2 class=\"h4 mb-20\">Activity</h2>
                <div id=\"chart5\"></div>
            </div>
        </div>
        <div class=\"col-xl-4 mb-30\">
            {{ form_start(form, {'attr':{'class': 'card-box height-100-p pd-20'}}) }}
                <h2 class=\"h4 mb-20\">Pop Up</h2>
                <div class=\"profile-picture-upload\">
                    <img src=\"\" alt=\"Profile picture preview\" class=\"imagePreview\">
                    <div class=\"text-center\">
                        <button class=\"action-button mode-upload btn btn-round btn-file\">Upload PopUp</button>
                        {{ form_widget(form.imageFile, {'attr':{'class': 'hidden'}}) }}
                </div>
                <div class=\"Container row pt-20\">
                    <div class=\"custom-control custom-checkbox mb-5 col-md-6\">
                        {{ form_widget(form.isShow, {'attr':{'class': 'custom-control-input'}}) }}
                        {{ form_widget(form.isRemove, {'attr':{'class': 'hidden'}}) }}
                        <label class=\"custom-control-label\" for=\"popup_isShow\">Show Pop-Up </label>
                    </div>
                    <div class=\"Controls col-md-6\" data-js=\"controls\">
                        <button class=\"Controls-primary\" data-js=\"controls-save\">
                            <span class=\"Controls-primary-text\">Save</span>
                            <div class=\"Controls-primary-inner\">
                                <div class=\"Controls-primary-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 33 25.41\">
                                        <polygon points=\"28.42 0 12.18 16.24 4.58 8.64 0 13.22 12.18 25.41 33 4.58 28.42 0\" style=\"fill: #fff\"/>
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
    </div>
    <div class=\"card-box mb-30\">
        <h2 class=\"h4 pd-20\">ToDay Appointments</h2>
        <table class=\"table hover data-table-export nowrap\">
            <thead>

            <tr>
                <th class=\"table-plus datatable-nosort\">ID</th>
                <th>Civil Number</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Visit</th>
                <th>Time</th>
                <th class=\"datatable-nosort\">Action</th>
            </tr>
            </thead>
            <tbody>
            {% for booking in bookings %}
                <tr>
                    <td class=\"table-plus\">{{ booking.id }}</td>
                    <td>{{ booking.civilNumber }}</td>
                    <td>{{ booking.fullName }}</td>
                    <td>{{ booking.phone }}</td>
                    <td>{{ booking.visit }}</td>
                    <td>{{ booking.schedule.startTime }}</td>
                    <td>
                        <div class=\"dropdown\">
                            <a class=\"btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle\" href=\"#\"
                               role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"dw dw-more\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-icon-list\">
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"dw dw-eye\"></i> View</a>
                            </div>
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <style>
        .profile-picture-upload {
            /*display: inline;*/
        }

        .imagePreview {
            vertical-align: middle;
            width: auto;
            min-width: 326px;
            /*height: 64px;*/
            /*border-radius: 50%;*/
            margin: auto;
            -webkit-box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
            -moz-box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
            box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.35);
        }

        .hidden {
            position: absolute;
            width: 0px;
            height: 0px;
            left: -999999px;
        }

        .action-button {
            margin-top: 10px;
            border: 1px solid black;
            border-radius: 30px;
            background: none;
            padding: 8px;
            cursor: pointer;
            outline: 0;
        }

        .action-button.mode-upload {
            color: #FFFFFF;
            border-color: #b8daff;
            background-color: #999999;
        }

        .action-button.mode-remove {
            color: #FFFFFF;
            border: 1px solid #f5c6cb;
            background-color: #F44336;
        }
    </style>
    <style>
        .Controls {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: end;
            justify-content: flex-end;
        }

        .is-Controls-success .Controls-primary-inner {
            width: 48px;
            background: #5294de;
        }
        .is-Controls-success .Controls-primary-icon {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        .is-Controls-success .Controls-primary-text {
            margin-right: 32px;
        }
        .is-Controls-success .Controls-secondary {
            opacity: 0;
            max-width: 0;
            margin: 0;
        }

        .Controls-primary,
        .Controls-secondary {
            padding: 0;
            border: none;
            background: none;
            font-size: 16px;
            font-weight: bold;
            line-height: 1;
            text-transform: uppercase;
            cursor: pointer;
        }

        .Controls-primary {
            position: relative;
            padding: 16px 26px;
            color: #5294de;
        }

        .Controls-primary-inner {
            position: absolute;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            overflow: hidden;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            border: 3px solid #5294de;
            border-radius: 100px;
            -webkit-transition: 0.3s width ease, 0.3s background ease;
            transition: 0.3s width ease, 0.3s background ease;
        }

        .Controls-primary-icon {
            width: 28px;
            -webkit-transition: 0.3s -webkit-transform ease;
            transition: 0.3s -webkit-transform ease;
            transition: 0.3s transform ease;
            transition: 0.3s transform ease, 0.3s -webkit-transform ease;
            -webkit-transform: translateY(200%);
            transform: translateY(200%);
        }

        .Controls-primary-text {
            margin-right: 0;
            -webkit-transition: 0.3s margin-right ease;
            transition: 0.3s margin-right ease;
        }

        .Controls-secondary {
            max-width: 100px;
            margin-left: 24px;
            overflow: hidden;
            -webkit-transition: 0.3s max-width ease;
            transition: 0.3s max-width ease;
        }

        .Container {
            width: auto;
        }
    </style>

{% endblock %}
{% block body_javascript %}
    <script type=\"module\" src=\"{{ asset('assets/admin/js/apexcharts.min.js') }}\"></script>
    <script type=\"module\">
        var options = {
            series: [{{ countLastWeek != 0 ? (countToday * 100) // countLastWeek : 0  }}],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 0.8,
                    gradientToColors: ['#1b00ff'],
                    inverseColors: false,
                    opacityFrom: [1, 0.2],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };

        var options2 = {
            series: [{{ countLastMonth != 0 ? (countLastWeek * 100) // countLastMonth : 0 }}],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 1,
                    gradientToColors: ['#009688'],
                    inverseColors: false,
                    opacityFrom: [1, 0.2],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };

        var options3 = {
            series: [{{ countLastSixMonth != 0 ? (countLastMonth * 100) // countLastSixMonth : 0  }}],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 0.8,
                    gradientToColors: ['#f56767'],
                    inverseColors: false,
                    opacityFrom: [1, 0.2],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };

        var options7 = {
            series: [{{ connected != 0 ? (connected * 100) // totalVisits : 0  }}],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 0.8,
                    gradientToColors: ['#f56767'],
                    inverseColors: false,
                    opacityFrom: [1, 0.2],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };

        var options4 = {
            series: [100],
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            chart: {
                height: 100,
                width: 70,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 5,
                            fontSize: '15px'
                        }
                    }
                }
            },
            colors: ['#ecf0f4'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'diagonal1',
                    shadeIntensity: 0.8,
                    gradientToColors: ['#2979ff'],
                    inverseColors: false,
                    opacityFrom: [1, 0.5],
                    opacityTo: 1,
                    stops: [0, 100],
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
                active: {
                    filter: {
                        type: 'none',
                        value: 0,
                    }
                },
            }
        };
        var dataArray = []
        var monthArray = []
        {% for row in byMonth  %}
            dataArray.push({{ row[1] }})
            monthArray.push(moment.monthsShort('-MMM-', {{ row[2] - 1 }}))
        {% endfor %}
        var options5 = {
            chart: {
                height: 350,
                type: 'bar',
                parentHeightOffset: 0,
                fontFamily: 'Poppins, sans-serif',
                toolbar: {
                    show: false,
                },
            },
            colors: ['#1b00ff'],
            grid: {
                borderColor: '#c7d2dd',
                strokeDashArray: 5,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '25%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'In Progress',
                data: dataArray
            }],
            xaxis: {
                categories: monthArray,
                labels: {
                    style: {
                        colors: ['#353535'],
                        fontSize: '16px',
                    },
                },
                axisBorder: {
                    color: '#8fa6bc',
                }
            },
            yaxis: {
                title: {
                    text: ''
                },
                labels: {
                    style: {
                        colors: '#353535',
                        fontSize: '16px',
                    },
                },
                axisBorder: {
                    color: '#f00',
                }
            },
            legend: {
                horizontalAlign: 'right',
                position: 'top',
                fontSize: '16px',
                offsetY: 0,
                labels: {
                    colors: '#353535',
                },
                markers: {
                    width: 10,
                    height: 10,
                    radius: 15,
                },
                itemMargin: {
                    vertical: 0
                },
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                style: {
                    fontSize: '15px',
                    fontFamily: 'Poppins, sans-serif',
                },
                y: {
                    formatter: function (val) {
                        return val
                    }
                }
            }
        }

        var options6 = {
            series: [73],
            chart: {
                height: 350,
                type: 'radialBar',
                offsetY: 0
            },
            colors: ['#0B132B', '#222222'],
            plotOptions: {
                radialBar: {
                    startAngle: -135,
                    endAngle: 135,
                    dataLabels: {
                        name: {
                            fontSize: '16px',
                            color: undefined,
                            offsetY: 120
                        },
                        value: {
                            offsetY: 76,
                            fontSize: '22px',
                            color: undefined,
                            formatter: function (val) {
                                return val + \"%\";
                            }
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4
            },
            labels: ['Achieve Goals'],
        };

        var chart = new ApexCharts(document.querySelector(\"#chart\"), options);
        chart.render();

        var chart2 = new ApexCharts(document.querySelector(\"#chart2\"), options2);
        chart2.render();

        var chart3 = new ApexCharts(document.querySelector(\"#chart3\"), options3);
        chart3.render();

        var chart4 = new ApexCharts(document.querySelector(\"#chart4\"), options4);
        chart4.render();

        var chart6 = new ApexCharts(document.querySelector(\"#chart6\"), options7);
        chart6.render();

        var chart7 = new ApexCharts(document.querySelector(\"#chart7\"), options4);
        chart7.render();

        var chart5 = new ApexCharts(document.querySelector(\"#chart5\"), options5);
        chart5.render();
    </script>
    <script>


        let picturePreview = document.querySelector(\".imagePreview\");
        let actionButton = document.querySelector(\".action-button\");
        let fileInput = document.querySelector(\"input[name='popup[imageFile]']\");
        let fileReader = new FileReader();

        const DEFAULT_IMAGE_SRC = \"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('assets/admin/images/image_placeholder.jpg') }}\";

            function myFunction() {
              alert('it s done')
            }

        actionButton.addEventListener(\"click\", (e) => {
            e.preventDefault()
            if (picturePreview.src !== DEFAULT_IMAGE_SRC) {
                resetImage();
            } else {
                fileInput.click();
            }
        });

        fileInput.addEventListener(\"change\", () => {
            refreshImagePreview();
        });

        function resetImage() {
            setActionButtonMode(\"upload\");
            picturePreview.src = DEFAULT_IMAGE_SRC;
            fileInput.value = \"\";
            document.querySelector('#popup_isRemove').checked = false
            console.log(document.querySelector('#popup_isRemove').checked)
        }

        function setActionButtonMode(mode) {
            let modes = {
                \"upload\": function () {
                    actionButton.innerText = \"Upload PopUp\";
                    actionButton.classList.remove(\"mode-remove\");
                    actionButton.classList.add(\"mode-upload\");
                },
                \"remove\": function () {
                    actionButton.innerText = \"Remove PopUp\";
                    actionButton.classList.remove(\"mode-upload\");
                    actionButton.classList.add(\"mode-remove\");
                }
            }
            return (modes[mode]) ? modes[mode]() : console.error(\"unknown mode\");
        }

        function refreshImagePreview() {
            if (picturePreview.src !== DEFAULT_IMAGE_SRC) {
                picturePreview.src = DEFAULT_IMAGE_SRC;
            } else {
                if (fileInput.files && fileInput.files.length > 0) {
                    fileReader.readAsDataURL(fileInput.files[0]);
                    fileReader.onload = (e) => {
                        picturePreview.src = e.target.result;
                        setActionButtonMode(\"remove\");
                    }
                }
            }
        }
        {% if popup.fileName != null %}
            picturePreview.src =  \"{{ vich_uploader_asset(popup, 'imageFile') }}\"
            setActionButtonMode(\"remove\");
        {% else %}
            picturePreview.src = DEFAULT_IMAGE_SRC;
        {% endif %}

         // refreshImagePreview();
    </script>
    <script>

        const controlsSuccessClass = 'is-Controls-success';
        const controlsElement = document.querySelector('[data-js=\"controls\"]');
        const controlsSaveButtonElement = document.querySelector('[data-js=\"controls-save\"]');

        controlsSaveButtonElement.addEventListener('click', function () {
            controlsElement.classList.add(controlsSuccessClass);

            window.setTimeout(() => {
                controlsElement.classList.remove(controlsSuccessClass);
            }, 10000);
        });
    </script>
    <script>
        async function loadUrl(url) {
            const form = new FormData(document.querySelector('form'));
            var data = [];
            form.forEach((value, key) => {
                data[key] = value;
            });
                init = {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                };
            const request = new Request(url, init);
            const response = await fetch(request);
            if (response.status >= 200 && response.status < 300)
            {
                const res = await response.text();
                const data = JSON.parse(res);
                // if(data['response'] === 'check') {
                //     arrAdmin = data['arrayAdmin']
                //     arrCitizen = data['arrayCitizen']
                //     if (selectedDate < new Date()) {
                //         for (var i = 0; i < arrAdmin.length; i++) {
                //             document.querySelectorAll('.timing').forEach(a => {
                //                 a.setAttribute('disabled', '');
                //                 if (a.dataset.time === arrAdmin[i]) {
                //                     a.classList.add('selected')
                //                 }
                //             })
                //         }
                //         for (var i = 0; i < arrCitizen.length; i++) {
                //             document.querySelectorAll('.timing').forEach(a => {
                //                 if (a.dataset.time === arrCitizen[i]) {
                //                     a.classList.add('selected2')
                //                 }
                //             })
                //         }
                //     } else {
                //         for (var i = 0; i < arrAdmin.length; i++) {
                //             document.querySelectorAll('.timing').forEach(a => {
                //
                //                 if (a.dataset.time === arrAdmin[i]) {
                //                     a.setAttribute('disabled', '');
                //                 }
                //             })
                //         }
                //         for (var i = 0; i < arrCitizen.length; i++) {
                //             document.querySelectorAll('.timing').forEach(a => {
                //                 if (a.dataset.time === arrCitizen[i]) {
                //                     if (!a.classList.contains('selected'))
                //                         a.classList.add('selected')
                //                 }
                //             })
                //         }
                //     }
                // }else{
                //     return true
                // }
            }else {
                console.error(response);
                return false
            }
        }
    </script>
{% endblock body_javascript %}", "admin/dashboard.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/dashboard.html.twig");
    }
}
