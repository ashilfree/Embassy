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

/* pages/booking.with.ambassador.with.success.html.twig */
class __TwigTemplate_30cf6a50832ad700e0597df4b3feb1ac866b23d6a6cccaf0241512470be9997a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/booking.with.ambassador.with.success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <style>
        .success-message {
            text-align: center;
            max-width: 500px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .success-message__icon {
            max-width: 75px;
        }

        .success-message__title {
            color: #3DC480;
            transform: translateY(25px);
            opacity: 0;
            transition: all 200ms ease;
        }
        .active .success-message__title {
            transform: translateY(0);
            opacity: 1;
        }

        .success-message__content {
            color: #B8BABB;
            transform: translateY(25px);
            opacity: 0;
            transition: all 200ms ease;
            transition-delay: 50ms;
        }
        .active .success-message__content {
            transform: translateY(0);
            opacity: 1;
        }

        .icon-checkmark circle {
            fill: #3DC480;
            transform-origin: 50% 50%;
            transform: scale(0);
            transition: transform 200ms cubic-bezier(0.22, 0.96, 0.38, 0.98);
        }
        .icon-checkmark path {
            transition: stroke-dashoffset 350ms ease;
            transition-delay: 100ms;
        }
        .active .icon-checkmark circle {
            transform: scale(1);
        }

    </style>
    <div class=\"mo-breadcrumbs\">
        <div class=\"container\">
            <header>
                <h1>حجز موعد مع السفير</h1>
            </header>
        </div>
    </div>
    <div style=\"position: relative; height: 400px\" class=\"container\">
        <div class=\"success-message\">
            <svg viewBox=\"0 0 76 76\" class=\"success-message__icon icon-checkmark\">
                <circle cx=\"38\" cy=\"38\" r=\"36\"/>
                <path fill=\"none\" stroke=\"#FFFFFF\" stroke-width=\"5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-miterlimit=\"10\" d=\"M17.7,40.9l10.9,10.9l28.7-28.7\"/>
            </svg>
            <h1 class=\"success-message__title\">تم الطلب بنجاح ،سوف يتم تأكيد الموعد من عدمه من طرف الموظف المسؤول وشكرا</h1>
            <div class=\"success-message__content\">
                <p>العودة الى <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> الصفحة الرئيسية </a></p>
            </div>
        </div>
    </div>

    <script>
        function PathLoader(el) {
            this.el = el;
            this.strokeLength = el.getTotalLength();

            // set dash offset to 0
            this.el.style.strokeDasharray =
                this.el.style.strokeDashoffset = this.strokeLength;
        }

        PathLoader.prototype._draw = function (val) {
            this.el.style.strokeDashoffset = this.strokeLength * (1 - val);
        }

        PathLoader.prototype.setProgress = function (val, cb) {
            this._draw(val);
            if(cb && typeof cb === 'function') cb();
        }

        PathLoader.prototype.setProgressFn = function (fn) {
            if(typeof fn === 'function') fn(this);
        }

        var body = document.body,
            svg = document.querySelector('svg path');

        if(svg !== null) {
            svg = new PathLoader(svg);

            setTimeout(function () {
                document.body.classList.add('active');
                svg.setProgress(1);
            }, 200);
        }

        document.addEventListener('click', function () {

            if(document.body.classList.contains('active')) {
                document.body.classList.remove('active');
                svg.setProgress(0);
                return;
            }
            document.body.classList.add('active');
            svg.setProgress(1);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "pages/booking.with.ambassador.with.success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 71,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/booking.with.ambassador.with.success.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/booking.with.ambassador.with.success.html.twig");
    }
}
