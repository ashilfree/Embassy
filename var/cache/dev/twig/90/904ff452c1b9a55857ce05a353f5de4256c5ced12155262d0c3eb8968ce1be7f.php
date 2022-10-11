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

/* booking/calendar.html.twig */
class __TwigTemplate_276fec7c0857ed37a9f575bc2a1da0a8a7aa01c5bd67968c25013845fd92c793 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/calendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/calendar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/calendar.html.twig", 1);
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
        echo "    <div class=\"container\">
    <a href=\"\">Create new booking</a>

    <div id=\"calendar-holder\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.js\"></script>

    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar-holder');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                editable: true,
                selectable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: null
                },
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ], // https://fullcalendar.io/docs/plugin-index
                timeZone: 'UTC',
                events: [
                    {
                        start: \"2020-08-18\",
                        end: \"2020-08-18\",
                        color: 'red',
                        rendering: 'background',
                        //dow: [1],
                    },
                ],
                eventOverlap: function(stillEvent, movingEvent) {
                    return stillEvent.allDay && movingEvent.allDay;
                },
                firstDay:0,
                businessHours: {
                    start: '06:00', // a start time (6am in this example)
                    end: '18:00', // an end time (6pm in this example)
                    dow: [ 0, 1, 2, 3, 4, 6] // days of week (here monday till friday)
                },
                selectConstraint: {
                    start: moment().format('YYYY-MM-DD'),
                    end: '2100-01-01',
                    color: 'red',
                    rendering: 'background',
                }
            });
            calendar.render();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  108 => 17,  95 => 12,  85 => 11,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
    <a href=\"\">Create new booking</a>

    <div id=\"calendar-holder\"></div>
    </div>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.js\"></script>

    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar-holder');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                editable: true,
                selectable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: null
                },
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ], // https://fullcalendar.io/docs/plugin-index
                timeZone: 'UTC',
                events: [
                    {
                        start: \"2020-08-18\",
                        end: \"2020-08-18\",
                        color: 'red',
                        rendering: 'background',
                        //dow: [1],
                    },
                ],
                eventOverlap: function(stillEvent, movingEvent) {
                    return stillEvent.allDay && movingEvent.allDay;
                },
                firstDay:0,
                businessHours: {
                    start: '06:00', // a start time (6am in this example)
                    end: '18:00', // an end time (6pm in this example)
                    dow: [ 0, 1, 2, 3, 4, 6] // days of week (here monday till friday)
                },
                selectConstraint: {
                    start: moment().format('YYYY-MM-DD'),
                    end: '2100-01-01',
                    color: 'red',
                    rendering: 'background',
                }
            });
            calendar.render();
        });
    </script>
{% endblock %}", "booking/calendar.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/booking/calendar.html.twig");
    }
}
