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

/* pages/booking.appointments.html.twig */
class __TwigTemplate_5f4b6e84e5f3a6cf016c80db2c19e43237c38446cc28655868bd3df5e5aa1df1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/booking.appointments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/booking.appointments.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/booking.appointments.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>حجز المواعيد</h1>
            </header>
        </div>
    </div>

    <div class=\"container\">
        <div id=\"smartwizard\">

            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#step-1\">
                        الخطوة الاولي
                        <p>اختر يومًا</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#step-2\">
                        الخطوة الثانية
                        <p>حدد خانة زمنية</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#step-3\">
                        الخطوة الثالثة
                        <p>أدخل معلوماتك</p>
                    </a>
                </li>
            </ul>

            <div class=\"tab-content\">
                <div id=\"step-1\" class=\"tab-pane\" role=\"tabpanel\" aria-labelledby=\"step-1\">
                    <div id=\"calendar-holder\"></div>
                </div>
                <div id=\"step-2\" class=\"tab-pane\" role=\"tabpanel\" aria-labelledby=\"step-2\">
                    <div class=\"content\">
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
                </div>
                <div id=\"step-3\" class=\"tab-pane\" role=\"tabpanel\" aria-labelledby=\"step-3\">
                    ";
        // line 134
        echo twig_include($this->env, $context, "booking/_form.html.twig");
        echo "
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html Start -->
    <div class=\"modal fade\" id=\"success-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div id=\"pdf\" class=\"modal-body text-center font-18\">
                    <img class=\"img-responsive\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/header.png"), "html", null, true);
        echo "\" style=\"max-width: 1140px\"
                         alt=\"\">
                    <div>
                        <h1 class=\"text-center mb-5\" style=\"color:red;\">بيانات الحجز</h1>
                        <table class=\"table text-right\" style=\"font-size: 20px\">
                            <tbody>
                            <tr>
                                <td scope=\"row\">الاسم</td>
                                <td id=\"fullName\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">الرقم المدني</td>
                                <td id=\"civilNumber\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">البريد الالكتروني</td>
                                <td id=\"email\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">رقم الهاتف</td>
                                <td id=\"phone\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">تاريخ الحجز</td>
                                <td id=\"date\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">توقيت حجز الموعد</td>
                                <td id=\"time\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">سبب حجز الموعد</td>
                                <td id=\"visit\"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-center\">
                    <button id=\"submit\" type=\"button\" class=\"btn btn-primary\"> تأكيد الحجز</button>
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">رجوع</button>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->

    <!-- success Popup html Start -->
    <div class=\"modal fade\" id=\"success-modal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body text-center font-18\">
                    <h3 class=\"mb-20\">تم الحجز بنجاح!</h3>
                    <div class=\"mb-30 text-center\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/success.png"), "html", null, true);
        echo "\"></div>
                </div>
                <div class=\"modal-footer justify-content-center\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">تم الحجز</button>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->

    <!-- Failed Popup html Start -->
    <div class=\"modal fade\" id=\"failed-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body text-center font-18\">
                    <h3 class=\"mb-20\">فشل الحجز!</h3>
                    <div class=\"mb-30 text-center\"><img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/failed.png"), "html", null, true);
        echo "\"></div>
                </div>
                <div class=\"modal-footer justify-content-center\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">خروج</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Failed Popup html End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 228
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
    <style>
        .schedule-widget {
            border-radius: 4px;
            min-height: 100px;
        }

        .schedule-header h4 {
            font-size: 18px;
            font-weight: 600;
            margin: 3px 0 0;
        }

        .schedule-header {
            border-bottom: 1px solid #f0f0f0;
            border-radius: 4px 4px 0 0;
            padding: 10px 20px;
        }

        .day-slot ul {
            float: left;
            list-style: none;
            margin-bottom: 0;
            margin-left: -5px;
            margin-right: -5px;
            padding: 0;
            position: relative;
            width: 100%;
        }

        .day-slot li {
            float: left;
            padding-left: 5px;
            padding-right: 5px;
            text-align: center;
            width: 14.28%;
        }

        .day-slot li span {
            display: block;
            font-size: 18px;
            text-transform: uppercase;
        }

        .day-slot li span.slot-date {
            display: block;
            color: #757575;
            font-size: 14px;
        }

        .day-slot li small.slot-year {
            color: #757575;
            font-size: 14px;
        }

        .day-slot li.left-arrow {
            left: 0;
            padding: 0;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 20px !important;
            transform: translateY(-50%);
        }

        .day-slot li.right-arrow {
            right: -11px;
            padding: 0;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 20px !important;
            transform: translateY(-50%);
        }

        .schedule-cont {
            padding: 20px;
        }

        .time-slot ul {
            list-style: none;
            margin-right: -5px;
            margin-left: -5px;
            margin-bottom: 0;
            padding: 0;
        }

        .time-slot li {
            float: right;
            padding-left: 5px;
            padding-right: 5px;
            width: 19%;
        }

        .time-slot li .timing {
            background-color: #e9e9e9;
            border: 1px solid #e9e9e9;
            border-radius: 3px;
            color: #757575;
            display: block;
            font-size: 14px;
            margin-bottom: 10px;
            padding: 5px 5px;
            text-align: center;
            position: relative;
        }

        .time-slot li .timing:hover {
            background-color: #fff;
        }

        .time-slot li .timing:last-child {
            margin-bottom: 0;
        }

        .time-slot li .timing.selected {
            background-color: #42c0fb;
            border: 1px solid #42c0fb;
            color: #fff;
        }

        .time-slot li .timing.selected::before {
            color: #fff;
            content: \"\\f00c\";
            font-size: 12px;
            font-weight: 900;
            position: absolute;
            right: 6px;
            top: 6px;
        }

        .schedule-list {
            border-bottom: 1px solid #cfcfcf;
            margin-bottom: 50px;
            padding-bottom: 50px;
        }

        .schedule-list:last-child {
            border-bottom: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .submit-section.proceed-btn {
            margin: 0 0 30px;
        }

        a[disabled] {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
    <style>
        .fc-highli {
            background-color: #30ea5f !important;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 389
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 390
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/calendar/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/calendar/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/calendar/main.min_2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/calendar/main.min_3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/calendar/main.min_4.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js\"></script>

    <script>
        \$(document).ready(function () {
            let calendarEl = document.getElementById('calendar-holder');
            let dat = null;
            let time = null;
            let civilNumber = '';
            let fullName = '';
            let email = '';
            let phone = '';
            let visit = '';
            const smartWizard = \$(\"#smartwizard\")
            const successModal = \$('#success-modal')
            let dataSent = {};
            let calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'timeGrid'], // https://fullcalendar.io/docs/plugin-index
                defaultView: 'dayGridMonth',
                locale: 'ar',
                selectable: true,
                timeZone: 'UTC',
                hiddenDays: [5, 6],
                header: {
                    left: 'prev, next',
                    center: 'title',
                    right: null
                },
                // events: [
                //     {
                //         start: \"2020-08-18\",
                //         end: \"2020-08-18\",
                //         selectable: false,
                //         color: 'red',
                //         rendering: 'background',
                //         //dow: [1],
                //     },
                // ],
                dateClick: function (info) {
                    dat = info.dateStr;
                    let days = document.querySelectorAll(\".fc-highli\");
                    days.forEach(function (day) {
                        day.classList.remove(\"fc-highli\");
                    });
                    if (moment(dat) > moment()) {
                        info.dayEl.classList.add(\"fc-highli\");
                    } else {
                        dat = null;
                    }
                },
                selectConstraint: {
                    start: moment().add(1, 'days').format('YYYY-MM-DD'),
                    end: '2100-01-01', // hard coded goodness unfortunately
                }
            });
            calendar.render();
            let btnFinish = \$('<button id=\"btnFinish\" disabled></button>').text('تأكيد').addClass('btn btn-info btn-fnsh').on('click', function () {
                if (dat === undefined || time === undefined) {
                    return null;
                }
                const form = new FormData(document.querySelector('form'));
                form.forEach((value, key) => {
                    dataSent[key] = value;
                });
                if (!validate_form(dataSent))
                    return;
                successModal.on('show.bs.modal', function (e) {
                    civilNumber = dataSent['booking[civilNumber]']
                    fullName = dataSent['booking[fullName]']
                    email = dataSent['booking[email]']
                    phone = dataSent['booking[phone]']
                    visit = dataSent['booking[visit]']
                    \$('#civilNumber').text(civilNumber)
                    \$('#fullName').text(fullName)
                    \$('#email').text(email)
                    \$('#phone').text(phone)
                    \$('#visit').text(visit)
                    \$('#date').text(dat)
                    \$('#time').text(time)
                })
                successModal.modal('show');
            });
            smartWizard.on(\"leaveStep\", function (e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
                if (nextStepIndex === 1 && stepDirection === 'forward') {
                    if (dat === undefined || dat === null) {
                        alert('اختر يوما من فضلك')
                        return false
                    }
                }

                if (nextStepIndex === 2 && stepDirection === 'forward') {
                    if (time === undefined || time === null) {
                        alert('حدد خانة زمنية من فضلك')
                        return false
                    }
                }

                if (nextStepIndex === 0) {
                    document.querySelectorAll('.timing').forEach(a => {

                        if (a.hasAttribute('disabled')) {
                            a.removeAttribute('disabled');
                        }
                        if (a.classList.contains('selected')) {
                            a.classList.remove('selected')
                        }
                        time = null
                    })
                }
            });
            smartWizard.on(\"stepContent\", function (e, anchorObject, stepIndex, stepDirection) {
                if (stepIndex === 1 && stepDirection === 'forward') {
                    const params = new URLSearchParams();
                    params.append('date', dat.toString())
                    let url = '";
        // line 508
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("check.schedule");
        echo "' + '?' + params.toString()
                    loadUrl(url, 'GET', smartWizard);
                }
            });
            smartWizard.on(\"showStep\", function (e, anchorObject, stepIndex, stepDirection) {
                document.getElementById('btnFinish').disabled = !(stepIndex === 1 && stepDirection === 'forward');
            });
            smartWizard.smartWizard({
                selected: 0, // Initial selected step, 0 = first step
                theme: 'default', // theme for the wizard, related css need to include for other than default theme
                justified: true, // Nav menu justification. true/false
                darkMode: false, // Enable/disable Dark Mode if the theme supports. true/false
                autoAdjustHeight: true, // Automatically adjust content height
                cycleSteps: false, // Allows to cycle the navigation of steps
                backButtonSupport: true, // Enable the back button support
                enableURLhash: true, // Enable selection of the step based on url hash
                transition: {
                    animation: 'none', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                    speed: '400', // Transion animation speed
                    easing: '' // Transition animation easing. Not supported without a jQuery easing plugin
                },
                toolbarSettings: {
                    toolbarPosition: 'bottom', // none, top, bottom, both
                    toolbarButtonPosition: 'left', // left, right, center
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true,
                    toolbarExtraButtons: [btnFinish]
                },
                anchorSettings: {
                    anchorClickable: false, // Enable/Disable anchor navigation
                    enableAllAnchors: false, // Activates all anchors clickable all times
                    markDoneStep: true, // Add done state on navigation
                    markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                    removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                    enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                },
                keyboardSettings: {
                    keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                    keyLeft: [37], // Left key code
                    keyRight: [39] // Right key code
                },
                lang: { // Language variables for button
                    next: 'التالي',
                    previous: 'السابق',
                },
                onFinish: function () {
                    alert('finish');
                },
                enableFinishButton: true,
                disabledSteps: [], // Array Steps disabled
                errorSteps: [], // Highlight step with errors
                hiddenSteps: [] // Hidden steps
            });

            const options = {
                margin: 0.3,
                filename: 'booking.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'portrait'
                }
            }
            \$('#submit').click(function (e) {
                e.preventDefault();
                var objstr = '<img class=\"img-responsive\" src=\"/assets/images/header.png\" style=\"max-width: 1140px\" alt=\"\"><div><h1 class=\"text-center mb-5\" style=\"color:red;\">بيانات الحجز</h1>' +
                    '<table class=\"table text-right\" style=\"font-size: 20px\"><tbody><tr><td scope=\"row\">الاسم</td><td>' + fullName + '</td></tr><tr><td scope=\"row\">الرقم المدني</td><td >' + civilNumber + '</td></tr>' +
                    '<tr><td scope=\"row\">البريد الالكتروني</td><td>' + email + '</td></tr><tr><td scope=\"row\">رقم الهاتف</td><td>' + phone + '</td></tr><tr><td scope=\"row\">تاريخ الحجز</td><td>' + dat + '</td></tr>' +
                    '<tr><td scope=\"row\">توقيت حجز الموعد</td><td>' + time + '</td></tr><tr><td scope=\"row\">سبب حجز الموعد</td><td>' + visit + '</td></tr></tbody></table></div>'
                var strr = '<html><head><title>booking</title>';
                strr += '</head><body>';
                strr += '<div style=\"border:0.1rem solid #ccc!important;padding:0.5rem 1.5rem 0.5rem 1.5rem;margin-top:1.5rem\">' + objstr + '</div>';
                strr += '</body></html>';
                html2pdf().from(strr).set(options).save();
                const params = new URLSearchParams();
                params.append('date', dat.toString());
                params.append('time', time.toString());
                successModal.modal('hide');
                let url = '";
        // line 593
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add.schedule");
        echo "' + '?' + params.toString()
                loadUrl(url, 'POST', smartWizard).then(function (value) {
                    if (value['response']) {
                        \$('#success-modal2').modal('show');
                        // TODO: go back to first step
                    } else {
                        \$('#failed-modal').modal('show');
                    }
                    \$('#success-modal2').on('hidden.bs.modal', function (e) {
                        location.replace(\"/\")
                    })
                });
            });

            document.querySelectorAll('.timing').forEach(a => {
                a.addEventListener('click', e => {
                    e.preventDefault();
                    if (!a.hasAttribute('disabled')) {
                        document.querySelectorAll('.timing').forEach(a => {
                            if (a.classList.contains('selected'))
                                a.classList.remove('selected')
                        })
                        a.classList.toggle('selected')
                        time = a.dataset.time;
                    }
                })
            })

            function validate_form(dataSent) {
                let valid = true;

                if (dataSent['booking[civilNumber]'] === \"\") {
                    alert(\"من فضللك ادخل رقم المدني\");
                    valid = false;
                }
                if (dataSent['booking[fullName]'] === \"\") {
                    alert(\"من فضللك ادخل الاسم و اللقب\");
                    valid = false;
                }

                function isEmail(string) {
                    if (string.search(/^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+\$/) !== -1)
                        return true;
                    else
                        return false;
                }

                if (!isEmail(dataSent['booking[email]'])) {
                    alert(\"من فضللك ادخل ايميل صحيح\");
                    valid = false;
                }
                if (dataSent['booking[phone]'] === \"\") {
                    alert(\"من فضللك ادخل رقم الهاتف\");
                    valid = false;
                }

                if (dataSent['booking[visit]'] === \"\") {
                    alert(\"من فضللك ادخل سبب الزيارة\");
                    valid = false;
                }

                return valid;
            }
        });

        async function loadUrl(url, method = 'GET', smartWizard) {
            let dataSent = {};
            let init = {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            };
            if (method === 'POST') {
                const form = new FormData(document.querySelector('form'));
                form.forEach((value, key) => {
                    dataSent[key] = value;
                });
                init = {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(dataSent)
                };
            }

            smartWizard.smartWizard(\"loader\", \"show\");
            try {
                const request = new Request(url, init);
                const response = await fetch(request);
                if (response.status >= 200 && response.status < 300) {
                    const res = await response.text();
                    const data = JSON.parse(res);

                    if (data != null) {
                        if (data['response'] === 'check') {
                            let arr = data['array']
                            for (let i = 0; i < arr.length; i++) {
                                document.querySelectorAll('.timing').forEach(a => {

                                    if (a.dataset.time === arr[i]) {
                                        a.setAttribute('disabled', '');
                                    }
                                })
                            }
                        } else {
                            return {'response': true, 'data': dataSent}
                        }
                    }
                    smartWizard.smartWizard(\"loader\", \"hide\");
                } else {
                    console.error(response);
                    smartWizard.smartWizard(\"loader\", \"hide\");
                    return {'response': false}
                }
            } catch (err) {
                console.log('err', err)
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/booking.appointments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 593,  637 => 508,  520 => 394,  516 => 393,  512 => 392,  508 => 391,  503 => 390,  493 => 389,  324 => 228,  314 => 227,  293 => 216,  273 => 199,  216 => 145,  202 => 134,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>حجز المواعيد</h1>
            </header>
        </div>
    </div>

    <div class=\"container\">
        <div id=\"smartwizard\">

            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#step-1\">
                        الخطوة الاولي
                        <p>اختر يومًا</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#step-2\">
                        الخطوة الثانية
                        <p>حدد خانة زمنية</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#step-3\">
                        الخطوة الثالثة
                        <p>أدخل معلوماتك</p>
                    </a>
                </li>
            </ul>

            <div class=\"tab-content\">
                <div id=\"step-1\" class=\"tab-pane\" role=\"tabpanel\" aria-labelledby=\"step-1\">
                    <div id=\"calendar-holder\"></div>
                </div>
                <div id=\"step-2\" class=\"tab-pane\" role=\"tabpanel\" aria-labelledby=\"step-2\">
                    <div class=\"content\">
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
                </div>
                <div id=\"step-3\" class=\"tab-pane\" role=\"tabpanel\" aria-labelledby=\"step-3\">
                    {{ include('booking/_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html Start -->
    <div class=\"modal fade\" id=\"success-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div id=\"pdf\" class=\"modal-body text-center font-18\">
                    <img class=\"img-responsive\" src=\"{{ asset('assets/images/header.png') }}\" style=\"max-width: 1140px\"
                         alt=\"\">
                    <div>
                        <h1 class=\"text-center mb-5\" style=\"color:red;\">بيانات الحجز</h1>
                        <table class=\"table text-right\" style=\"font-size: 20px\">
                            <tbody>
                            <tr>
                                <td scope=\"row\">الاسم</td>
                                <td id=\"fullName\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">الرقم المدني</td>
                                <td id=\"civilNumber\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">البريد الالكتروني</td>
                                <td id=\"email\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">رقم الهاتف</td>
                                <td id=\"phone\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">تاريخ الحجز</td>
                                <td id=\"date\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">توقيت حجز الموعد</td>
                                <td id=\"time\"></td>
                            </tr>
                            <tr>
                                <td scope=\"row\">سبب حجز الموعد</td>
                                <td id=\"visit\"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-center\">
                    <button id=\"submit\" type=\"button\" class=\"btn btn-primary\"> تأكيد الحجز</button>
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">رجوع</button>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->

    <!-- success Popup html Start -->
    <div class=\"modal fade\" id=\"success-modal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body text-center font-18\">
                    <h3 class=\"mb-20\">تم الحجز بنجاح!</h3>
                    <div class=\"mb-30 text-center\"><img src=\"{{ asset('assets/admin/images/success.png') }}\"></div>
                </div>
                <div class=\"modal-footer justify-content-center\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">تم الحجز</button>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->

    <!-- Failed Popup html Start -->
    <div class=\"modal fade\" id=\"failed-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body text-center font-18\">
                    <h3 class=\"mb-20\">فشل الحجز!</h3>
                    <div class=\"mb-30 text-center\"><img src=\"{{ asset('assets/admin/images/failed.png') }}\"></div>
                </div>
                <div class=\"modal-footer justify-content-center\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">خروج</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Failed Popup html End -->

{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
    <style>
        .schedule-widget {
            border-radius: 4px;
            min-height: 100px;
        }

        .schedule-header h4 {
            font-size: 18px;
            font-weight: 600;
            margin: 3px 0 0;
        }

        .schedule-header {
            border-bottom: 1px solid #f0f0f0;
            border-radius: 4px 4px 0 0;
            padding: 10px 20px;
        }

        .day-slot ul {
            float: left;
            list-style: none;
            margin-bottom: 0;
            margin-left: -5px;
            margin-right: -5px;
            padding: 0;
            position: relative;
            width: 100%;
        }

        .day-slot li {
            float: left;
            padding-left: 5px;
            padding-right: 5px;
            text-align: center;
            width: 14.28%;
        }

        .day-slot li span {
            display: block;
            font-size: 18px;
            text-transform: uppercase;
        }

        .day-slot li span.slot-date {
            display: block;
            color: #757575;
            font-size: 14px;
        }

        .day-slot li small.slot-year {
            color: #757575;
            font-size: 14px;
        }

        .day-slot li.left-arrow {
            left: 0;
            padding: 0;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 20px !important;
            transform: translateY(-50%);
        }

        .day-slot li.right-arrow {
            right: -11px;
            padding: 0;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 20px !important;
            transform: translateY(-50%);
        }

        .schedule-cont {
            padding: 20px;
        }

        .time-slot ul {
            list-style: none;
            margin-right: -5px;
            margin-left: -5px;
            margin-bottom: 0;
            padding: 0;
        }

        .time-slot li {
            float: right;
            padding-left: 5px;
            padding-right: 5px;
            width: 19%;
        }

        .time-slot li .timing {
            background-color: #e9e9e9;
            border: 1px solid #e9e9e9;
            border-radius: 3px;
            color: #757575;
            display: block;
            font-size: 14px;
            margin-bottom: 10px;
            padding: 5px 5px;
            text-align: center;
            position: relative;
        }

        .time-slot li .timing:hover {
            background-color: #fff;
        }

        .time-slot li .timing:last-child {
            margin-bottom: 0;
        }

        .time-slot li .timing.selected {
            background-color: #42c0fb;
            border: 1px solid #42c0fb;
            color: #fff;
        }

        .time-slot li .timing.selected::before {
            color: #fff;
            content: \"\\f00c\";
            font-size: 12px;
            font-weight: 900;
            position: absolute;
            right: 6px;
            top: 6px;
        }

        .schedule-list {
            border-bottom: 1px solid #cfcfcf;
            margin-bottom: 50px;
            padding-bottom: 50px;
        }

        .schedule-list:last-child {
            border-bottom: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .submit-section.proceed-btn {
            margin: 0 0 30px;
        }

        a[disabled] {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
    <style>
        .fc-highli {
            background-color: #30ea5f !important;
        }
    </style>
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/calendar/moment.js') }}\"></script>
    <script src=\"{{ asset('assets/js/calendar/main.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/calendar/main.min_2.js') }}\"></script>
    <script src=\"{{ asset('assets/js/calendar/main.min_3.js') }}\"></script>
    <script src=\"{{ asset('assets/js/calendar/main.min_4.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js\"></script>

    <script>
        \$(document).ready(function () {
            let calendarEl = document.getElementById('calendar-holder');
            let dat = null;
            let time = null;
            let civilNumber = '';
            let fullName = '';
            let email = '';
            let phone = '';
            let visit = '';
            const smartWizard = \$(\"#smartwizard\")
            const successModal = \$('#success-modal')
            let dataSent = {};
            let calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'timeGrid'], // https://fullcalendar.io/docs/plugin-index
                defaultView: 'dayGridMonth',
                locale: 'ar',
                selectable: true,
                timeZone: 'UTC',
                hiddenDays: [5, 6],
                header: {
                    left: 'prev, next',
                    center: 'title',
                    right: null
                },
                // events: [
                //     {
                //         start: \"2020-08-18\",
                //         end: \"2020-08-18\",
                //         selectable: false,
                //         color: 'red',
                //         rendering: 'background',
                //         //dow: [1],
                //     },
                // ],
                dateClick: function (info) {
                    dat = info.dateStr;
                    let days = document.querySelectorAll(\".fc-highli\");
                    days.forEach(function (day) {
                        day.classList.remove(\"fc-highli\");
                    });
                    if (moment(dat) > moment()) {
                        info.dayEl.classList.add(\"fc-highli\");
                    } else {
                        dat = null;
                    }
                },
                selectConstraint: {
                    start: moment().add(1, 'days').format('YYYY-MM-DD'),
                    end: '2100-01-01', // hard coded goodness unfortunately
                }
            });
            calendar.render();
            let btnFinish = \$('<button id=\"btnFinish\" disabled></button>').text('تأكيد').addClass('btn btn-info btn-fnsh').on('click', function () {
                if (dat === undefined || time === undefined) {
                    return null;
                }
                const form = new FormData(document.querySelector('form'));
                form.forEach((value, key) => {
                    dataSent[key] = value;
                });
                if (!validate_form(dataSent))
                    return;
                successModal.on('show.bs.modal', function (e) {
                    civilNumber = dataSent['booking[civilNumber]']
                    fullName = dataSent['booking[fullName]']
                    email = dataSent['booking[email]']
                    phone = dataSent['booking[phone]']
                    visit = dataSent['booking[visit]']
                    \$('#civilNumber').text(civilNumber)
                    \$('#fullName').text(fullName)
                    \$('#email').text(email)
                    \$('#phone').text(phone)
                    \$('#visit').text(visit)
                    \$('#date').text(dat)
                    \$('#time').text(time)
                })
                successModal.modal('show');
            });
            smartWizard.on(\"leaveStep\", function (e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
                if (nextStepIndex === 1 && stepDirection === 'forward') {
                    if (dat === undefined || dat === null) {
                        alert('اختر يوما من فضلك')
                        return false
                    }
                }

                if (nextStepIndex === 2 && stepDirection === 'forward') {
                    if (time === undefined || time === null) {
                        alert('حدد خانة زمنية من فضلك')
                        return false
                    }
                }

                if (nextStepIndex === 0) {
                    document.querySelectorAll('.timing').forEach(a => {

                        if (a.hasAttribute('disabled')) {
                            a.removeAttribute('disabled');
                        }
                        if (a.classList.contains('selected')) {
                            a.classList.remove('selected')
                        }
                        time = null
                    })
                }
            });
            smartWizard.on(\"stepContent\", function (e, anchorObject, stepIndex, stepDirection) {
                if (stepIndex === 1 && stepDirection === 'forward') {
                    const params = new URLSearchParams();
                    params.append('date', dat.toString())
                    let url = '{{ path('check.schedule') }}' + '?' + params.toString()
                    loadUrl(url, 'GET', smartWizard);
                }
            });
            smartWizard.on(\"showStep\", function (e, anchorObject, stepIndex, stepDirection) {
                document.getElementById('btnFinish').disabled = !(stepIndex === 1 && stepDirection === 'forward');
            });
            smartWizard.smartWizard({
                selected: 0, // Initial selected step, 0 = first step
                theme: 'default', // theme for the wizard, related css need to include for other than default theme
                justified: true, // Nav menu justification. true/false
                darkMode: false, // Enable/disable Dark Mode if the theme supports. true/false
                autoAdjustHeight: true, // Automatically adjust content height
                cycleSteps: false, // Allows to cycle the navigation of steps
                backButtonSupport: true, // Enable the back button support
                enableURLhash: true, // Enable selection of the step based on url hash
                transition: {
                    animation: 'none', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                    speed: '400', // Transion animation speed
                    easing: '' // Transition animation easing. Not supported without a jQuery easing plugin
                },
                toolbarSettings: {
                    toolbarPosition: 'bottom', // none, top, bottom, both
                    toolbarButtonPosition: 'left', // left, right, center
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true,
                    toolbarExtraButtons: [btnFinish]
                },
                anchorSettings: {
                    anchorClickable: false, // Enable/Disable anchor navigation
                    enableAllAnchors: false, // Activates all anchors clickable all times
                    markDoneStep: true, // Add done state on navigation
                    markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                    removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                    enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                },
                keyboardSettings: {
                    keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                    keyLeft: [37], // Left key code
                    keyRight: [39] // Right key code
                },
                lang: { // Language variables for button
                    next: 'التالي',
                    previous: 'السابق',
                },
                onFinish: function () {
                    alert('finish');
                },
                enableFinishButton: true,
                disabledSteps: [], // Array Steps disabled
                errorSteps: [], // Highlight step with errors
                hiddenSteps: [] // Hidden steps
            });

            const options = {
                margin: 0.3,
                filename: 'booking.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'portrait'
                }
            }
            \$('#submit').click(function (e) {
                e.preventDefault();
                var objstr = '<img class=\"img-responsive\" src=\"/assets/images/header.png\" style=\"max-width: 1140px\" alt=\"\"><div><h1 class=\"text-center mb-5\" style=\"color:red;\">بيانات الحجز</h1>' +
                    '<table class=\"table text-right\" style=\"font-size: 20px\"><tbody><tr><td scope=\"row\">الاسم</td><td>' + fullName + '</td></tr><tr><td scope=\"row\">الرقم المدني</td><td >' + civilNumber + '</td></tr>' +
                    '<tr><td scope=\"row\">البريد الالكتروني</td><td>' + email + '</td></tr><tr><td scope=\"row\">رقم الهاتف</td><td>' + phone + '</td></tr><tr><td scope=\"row\">تاريخ الحجز</td><td>' + dat + '</td></tr>' +
                    '<tr><td scope=\"row\">توقيت حجز الموعد</td><td>' + time + '</td></tr><tr><td scope=\"row\">سبب حجز الموعد</td><td>' + visit + '</td></tr></tbody></table></div>'
                var strr = '<html><head><title>booking</title>';
                strr += '</head><body>';
                strr += '<div style=\"border:0.1rem solid #ccc!important;padding:0.5rem 1.5rem 0.5rem 1.5rem;margin-top:1.5rem\">' + objstr + '</div>';
                strr += '</body></html>';
                html2pdf().from(strr).set(options).save();
                const params = new URLSearchParams();
                params.append('date', dat.toString());
                params.append('time', time.toString());
                successModal.modal('hide');
                let url = '{{ path('add.schedule') }}' + '?' + params.toString()
                loadUrl(url, 'POST', smartWizard).then(function (value) {
                    if (value['response']) {
                        \$('#success-modal2').modal('show');
                        // TODO: go back to first step
                    } else {
                        \$('#failed-modal').modal('show');
                    }
                    \$('#success-modal2').on('hidden.bs.modal', function (e) {
                        location.replace(\"/\")
                    })
                });
            });

            document.querySelectorAll('.timing').forEach(a => {
                a.addEventListener('click', e => {
                    e.preventDefault();
                    if (!a.hasAttribute('disabled')) {
                        document.querySelectorAll('.timing').forEach(a => {
                            if (a.classList.contains('selected'))
                                a.classList.remove('selected')
                        })
                        a.classList.toggle('selected')
                        time = a.dataset.time;
                    }
                })
            })

            function validate_form(dataSent) {
                let valid = true;

                if (dataSent['booking[civilNumber]'] === \"\") {
                    alert(\"من فضللك ادخل رقم المدني\");
                    valid = false;
                }
                if (dataSent['booking[fullName]'] === \"\") {
                    alert(\"من فضللك ادخل الاسم و اللقب\");
                    valid = false;
                }

                function isEmail(string) {
                    if (string.search(/^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+\$/) !== -1)
                        return true;
                    else
                        return false;
                }

                if (!isEmail(dataSent['booking[email]'])) {
                    alert(\"من فضللك ادخل ايميل صحيح\");
                    valid = false;
                }
                if (dataSent['booking[phone]'] === \"\") {
                    alert(\"من فضللك ادخل رقم الهاتف\");
                    valid = false;
                }

                if (dataSent['booking[visit]'] === \"\") {
                    alert(\"من فضللك ادخل سبب الزيارة\");
                    valid = false;
                }

                return valid;
            }
        });

        async function loadUrl(url, method = 'GET', smartWizard) {
            let dataSent = {};
            let init = {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            };
            if (method === 'POST') {
                const form = new FormData(document.querySelector('form'));
                form.forEach((value, key) => {
                    dataSent[key] = value;
                });
                init = {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(dataSent)
                };
            }

            smartWizard.smartWizard(\"loader\", \"show\");
            try {
                const request = new Request(url, init);
                const response = await fetch(request);
                if (response.status >= 200 && response.status < 300) {
                    const res = await response.text();
                    const data = JSON.parse(res);

                    if (data != null) {
                        if (data['response'] === 'check') {
                            let arr = data['array']
                            for (let i = 0; i < arr.length; i++) {
                                document.querySelectorAll('.timing').forEach(a => {

                                    if (a.dataset.time === arr[i]) {
                                        a.setAttribute('disabled', '');
                                    }
                                })
                            }
                        } else {
                            return {'response': true, 'data': dataSent}
                        }
                    }
                    smartWizard.smartWizard(\"loader\", \"hide\");
                } else {
                    console.error(response);
                    smartWizard.smartWizard(\"loader\", \"hide\");
                    return {'response': false}
                }
            } catch (err) {
                console.log('err', err)
            }
        }
    </script>
{% endblock %}
", "pages/booking.appointments.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/booking.appointments.html.twig");
    }
}
