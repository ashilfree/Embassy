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

/* security/login.html.twig */
class __TwigTemplate_52967e9a5b5869f409b5dfa5bf020d7773c4159a6bca7a327915d23190694b49 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Embassy Login</title>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo "/assets/css/bootstrap.min.css";
        echo "\" >
    <style>
        body
        {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url(";
        // line 19
        echo "/assets/admin/images/Layer43@1X.png";
        echo ");
            background-repeat: no-repeat;
            background-size: auto;
        }
        .box
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 40px;
            background: rgba(254,254,254,.8);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.5);
            border-radius: 10px;
        }

        .box h3
        {
            margin: 0 0 30px;
            padding: 0;
            color: #000;
            text-align: center;
            font-weight: bold;
        }
        .box .inputBox
        {
            position: relative;
            background-color: #ffffff;
            margin-bottom: 40px;
        }
        .box .inputBox input
        {
            width: 100%;
            padding: 20px 10px;
            color: #5F441F;
            letter-spacing: 1px;
            border: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .box .inputBox label
        {
            position: absolute;
            top: 0;
            left: 15px;
            letter-spacing: 1px;
            padding: 20px 0;
            color: #5F441F;
            pointer-events: none;
            transition: .5s;

        }
        .box .inputBox input:focus ~ label,
        .box .inputBox input:valid ~ label
        {
            top: -18px;
            left: 0;
            color: #03a9f4;
        }
        .box input[type=\"submit\"]
        {
            width: 100%;
            border: none;
            outline: none;
            color: #fff;
            background: #65BC46;
            padding: 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* On screens that are 992px or less, set the background color to blue */
        @media screen and (min-width: 601px) {
            .box{
                width: 500px;
            }
            .box img{
                width: 175px;
            }
            .box h3{
                font-size: 26px;
            }
            .box .inputBox input{
                font-size: 20px;
            }
            .box .inputBox label{
                font-size: 20px;
            }
            .box .inputBox input:focus ~ label,
            .box .inputBox input:valid ~ label
            {
                font-size: 12px;
            }
            .box input[type=\"submit\"]{
                font-size:20px;
            }
        }

        /* On screens that are 600px or less, set the background color to olive */
        @media screen and (max-width: 600px) {
            .box{
                width: 320px;
            }
            .box img{
                width: 100px;
            }
            .box h3{
                font-size: 17px;
            }
            .box .inputBox input{
                font-size: 15px;
            }
            .box .inputBox label{
                font-size: 15px;
            }
            .box .inputBox input:focus ~ label,
            .box .inputBox input:valid ~ label
            {
                font-size: 10px;
            }
            .box input[type=\"submit\"]{
                font-size:17px;
            }
        }
    </style>
</head>

<body>
<div class=\"box text-center\">
    <img src=\"";
        // line 149
        echo "/assets/admin/images/Layer35@1X.png";
        echo "\" alt=\"\">
    <h3>Algerian  Embassy  in Kuwait</h3>
    ";
        // line 151
        if (($context["error"] ?? null)) {
            // line 152
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "message", [], "any", false, false, false, 153), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 153), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 156
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.login");
        echo "\" method=\"post\">
        <div class=\"inputBox\">
            <input id=\"uname\" type=\"text\" name=\"_username\"  value=\"";
        // line 158
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required>
            <label>Username</label>
        </div>
        <div class=\"inputBox\">
            <input id=\"pwd\" type=\"password\" name=\"_password\" required>
            <label>Password</label>
        </div>
        <input type=\"submit\" name=\"\" value=\"Login\">
    </form>
</div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 158,  209 => 156,  203 => 153,  200 => 152,  198 => 151,  193 => 149,  60 => 19,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/security/login.html.twig");
    }
}
