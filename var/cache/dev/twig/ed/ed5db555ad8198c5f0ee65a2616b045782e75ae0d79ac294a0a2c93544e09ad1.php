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

/* emails/contact.html.twig */
class __TwigTemplate_478e06be1411ebacef92e03cf501055681b079ac8c160c2e550df34fbdf443b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
    <title></title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table, td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,500,700\" rel=\"stylesheet\" type=\"text/css\">
    <style type=\"text/css\">@import url(https://fonts.googleapis.com/css?family=Lato:300,400,500,700);</style>
    <!--<![endif]-->
    <style type=\"text/css\">@media only screen and (min-width: 480px) {
            .mj-column-per-33 {
                width: 33% !important;
                max-width: 33%;
            }

            .mj-column-per-66 {
                width: 66% !important;
                max-width: 66%;
            }

            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }

            .mj-column-per-33-333333333333336 {
                width: 33.333333333333336% !important;
                max-width: 33.333333333333336%;
            }
        }</style>
    <style type=\"text/css\">@media only screen and (max-width: 480px) {
            table.mj-full-width-mobile {
                width: 100% !important;
            }

            td.mj-full-width-mobile {
                width: auto !important;
            }
        }</style>
</head>
<body style=\"background-color:#e0f2ff;\">
<div style=\"background-color:#e0f2ff;\">
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\">
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
                <div style=\"margin:0px auto;max-width:600px;\">
                    <img style=\"max-width:600px;\" src=\"http://mohammed.algerianembassy-kuwait.org/assets/images/header.png\" alt=\"\">
                </div>
            </td>
        </tr>
    </table>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;text-align: center;font-size: 24px;line-height: 40px;background-color: white\" width=\"600\">
        <tr>
            <td style=\"color: red;font-size: 30px;line-height: 50px;text-align: center\" colspan=\"2\">بيانات الحجز</td>
        </tr>
        <tr>
            <td id=\"fullName\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 90, $this->source); })()), "fullName", [], "any", false, false, false, 90), "html", null, true);
        echo "</td>
            <td scope=\"row\">الاسم</td>
        </tr>
        <tr>
            <td id=\"civilNumber\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 94, $this->source); })()), "civilNumber", [], "any", false, false, false, 94), "html", null, true);
        echo "</td>
            <td scope=\"row\">الرقم المدني</td>
        </tr>
        <tr>
            <td id=\"email\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), "html", null, true);
        echo "</td>
            <td scope=\"row\">البريد الالكتروني</td>
        </tr>
        <tr>
            <td id=\"phone\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 102, $this->source); })()), "phone", [], "any", false, false, false, 102), "html", null, true);
        echo "</td>
            <td scope=\"row\">رقم الهاتف</td>
        </tr>
        <tr>
            <td id=\"date\">";
        // line 106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scheduler"]) || array_key_exists("scheduler", $context) ? $context["scheduler"] : (function () { throw new RuntimeError('Variable "scheduler" does not exist.', 106, $this->source); })()), "date", [], "any", false, false, false, 106), "m/d/Y"), "html", null, true);
        echo "</td>
            <td scope=\"row\">تاريخ الحجز</td>
        </tr>
        <tr>
            <td id=\"time\">";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scheduler"]) || array_key_exists("scheduler", $context) ? $context["scheduler"] : (function () { throw new RuntimeError('Variable "scheduler" does not exist.', 110, $this->source); })()), "startTime", [], "any", false, false, false, 110), "html", null, true);
        echo "</td>
            <td scope=\"row\">توقيت حجز الموعد</td>
        </tr>
        <tr>
            <td id=\"visit\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 114, $this->source); })()), "visit", [], "any", false, false, false, 114), "html", null, true);
        echo "</td>
            <td scope=\"row\">سبب حجز الموعد</td>
        </tr>
    </table>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\">
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
                <div style=\"margin:0px auto;max-width:600px;\">
                    <img style=\"max-width:600px;\" src=\"http://mohammed.algerianembassy-kuwait.org/assets/images/header-background.png\" alt=\"\">
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 114,  169 => 110,  162 => 106,  155 => 102,  148 => 98,  141 => 94,  134 => 90,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <title></title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table, td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,500,700\" rel=\"stylesheet\" type=\"text/css\">
    <style type=\"text/css\">@import url(https://fonts.googleapis.com/css?family=Lato:300,400,500,700);</style>
    <!--<![endif]-->
    <style type=\"text/css\">@media only screen and (min-width: 480px) {
            .mj-column-per-33 {
                width: 33% !important;
                max-width: 33%;
            }

            .mj-column-per-66 {
                width: 66% !important;
                max-width: 66%;
            }

            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }

            .mj-column-per-33-333333333333336 {
                width: 33.333333333333336% !important;
                max-width: 33.333333333333336%;
            }
        }</style>
    <style type=\"text/css\">@media only screen and (max-width: 480px) {
            table.mj-full-width-mobile {
                width: 100% !important;
            }

            td.mj-full-width-mobile {
                width: auto !important;
            }
        }</style>
</head>
<body style=\"background-color:#e0f2ff;\">
<div style=\"background-color:#e0f2ff;\">
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\">
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
                <div style=\"margin:0px auto;max-width:600px;\">
                    <img style=\"max-width:600px;\" src=\"http://mohammed.algerianembassy-kuwait.org/assets/images/header.png\" alt=\"\">
                </div>
            </td>
        </tr>
    </table>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;text-align: center;font-size: 24px;line-height: 40px;background-color: white\" width=\"600\">
        <tr>
            <td style=\"color: red;font-size: 30px;line-height: 50px;text-align: center\" colspan=\"2\">بيانات الحجز</td>
        </tr>
        <tr>
            <td id=\"fullName\">{{ booking.fullName }}</td>
            <td scope=\"row\">الاسم</td>
        </tr>
        <tr>
            <td id=\"civilNumber\">{{ booking.civilNumber }}</td>
            <td scope=\"row\">الرقم المدني</td>
        </tr>
        <tr>
            <td id=\"email\">{{ booking.email }}</td>
            <td scope=\"row\">البريد الالكتروني</td>
        </tr>
        <tr>
            <td id=\"phone\">{{ booking.phone }}</td>
            <td scope=\"row\">رقم الهاتف</td>
        </tr>
        <tr>
            <td id=\"date\">{{ scheduler.date|date(\"m/d/Y\") }}</td>
            <td scope=\"row\">تاريخ الحجز</td>
        </tr>
        <tr>
            <td id=\"time\">{{ scheduler.startTime }}</td>
            <td scope=\"row\">توقيت حجز الموعد</td>
        </tr>
        <tr>
            <td id=\"visit\">{{ booking.visit }}</td>
            <td scope=\"row\">سبب حجز الموعد</td>
        </tr>
    </table>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\">
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
                <div style=\"margin:0px auto;max-width:600px;\">
                    <img style=\"max-width:600px;\" src=\"http://mohammed.algerianembassy-kuwait.org/assets/images/header-background.png\" alt=\"\">
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>

</body>
</html>", "emails/contact.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/emails/contact.html.twig");
    }
}
