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

/* pages/indexFr.html.twig */
class __TwigTemplate_5d2ed27211f57f0b9989df6e648cc1614d54a81e4b80cc1bb6786fee869ef31b extends Template
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
        return "baseFr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/indexFr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/indexFr.html.twig"));

        $this->parent = $this->loadTemplate("baseFr.html.twig", "pages/indexFr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container fp-slider\">
        <div id=\"carousel-example-generic\" class=\"carousel slide fp-slider\" data-ride=\"carousel\" data-wrap=\"false\"
             data-pause=\"hover\">
            <div class=\"carousel-inner\">
                ";
        // line 7
        echo twig_include($this->env, $context, "includes/_slider_fr.html.twig");
        echo "
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"prev\">&nbsp;<span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"next\">&nbsp;<span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
    </div>
    <div id=\"main\" class=\"wrap container mo-background\" role=\"document\">

        <div class=\"content row js-filter\">
            <main class=\"main\">
                <div class=\"mo-page-content homepage-tp\">
                    <div class=\"mo-front-page\">
                        <div class=\"mo-home-widgets\">
                            <div class=\"mo-frontpage-widgets widget text-5 widget_text\">
                                <div class=\"textwidget\">
                                    <div class=\"mo-flipbox\">
                                        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document.fr");
        echo "\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\">
                                                <i class=\"fa fa-file-o fa-lg\"></i>
                                                <p>Documents importants</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"mo-flipbox\"><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking.appointments.fr");
        echo "\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-calendar fa-lg\"></i>
                                                <p>Prendre rendez-vous</p>
                                            </div>
                                        </a></div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-map-signs fa-lg\"></i>
                                                <p>Trucs et astuces utiles</p>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div style=\"background-color: #E6E6E6;padding:10px\">
                            <h1 class=\"text-center\">Nouvelles</h1>
                            <div class=\"blogrollcontent mainroll js-filter-content\">

                                ";
        // line 49
        echo twig_include($this->env, $context, "includes/_articles_fr.html.twig");
        echo "

                            </div>

                            ";
        // line 53
        echo twig_include($this->env, $context, "includes/_more.html.twig");
        echo "

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div><!-- /.content -->
    <!-- /.wrap -->
    ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, (isset($context["popup"]) || array_key_exists("popup", $context) ? $context["popup"] : (function () { throw new RuntimeError('Variable "popup" does not exist.', 62, $this->source); })()), "isShow", [], "any", false, false, false, 62) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["popup"]) || array_key_exists("popup", $context) ? $context["popup"] : (function () { throw new RuntimeError('Variable "popup" does not exist.', 62, $this->source); })()), "fileName", [], "any", false, false, false, 62), null)))) {
            // line 63
            echo "        <div id=\"a45514b7c75ebf9f752e88a6fca5e7f55\" class=\"wdpu-container wdpu-background no-img buttons style-simple rounded wdpu-8112 no-title no-subtitle\">
            <div class=\"resize wdpu-msg move no-move-x\" style=\"display: block; top: 10px;\">
                <a href=\"#\" class=\"wdpu-close\" title=\"Close this box\"></a>
                <div class=\"wdpu-msg-inner resize\">
                    <div class=\"wdpu-text\">
                        <div class=\"wdpu-inner \">
                            <div class=\"wdpu-head\">
                                <div class=\"wdpu-title\"></div>
                                <div class=\"wdpu-subtitle\"></div> </div>
                            <div class=\"wdpu-content\">
                                <p>
                                    <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["popup"]) || array_key_exists("popup", $context) ? $context["popup"] : (function () { throw new RuntimeError('Variable "popup" does not exist.', 74, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" target=\"_blank\">
                                        <img class=\"aligncenter size-full wp-image-8115\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["popup"]) || array_key_exists("popup", $context) ? $context["popup"] : (function () { throw new RuntimeError('Variable "popup" does not exist.', 75, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" alt=\"أعلان\" width=\"906\" height=\"1280\"></a>
                                </p>
                                <span class=\"mpp-after-post-content\"></span>
                            </div> </div>
                        ";
            // line 80
            echo "                        ";
            // line 81
            echo "                        ";
            // line 82
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 87
        echo "    <script>
        document.querySelector('#a45514b7c75ebf9f752e88a6fca5e7f55 .wdpu-close').addEventListener('click', function(e){
            document.querySelector('#a45514b7c75ebf9f752e88a6fca5e7f55').remove();
        });
    </script>
    <script>
        var pagination = document.querySelector('.js-filter-pagination');
        var content = document.querySelector('.js-filter-content');
        var page = parseInt(new URLSearchParams(window.location.search).get('page') || 1);
        var moreNav =  page === 1;
        bindEvents();

        function bindEvents() {
            const aClickListener = e => {
                if (e.target.tagName === 'A') {
                    e.preventDefault()
                    this.loadUrl(e.target.getAttribute('href'))
                }
            };
            if (moreNav) {
                pagination.innerHTML = '<button style=\"border:none\" data-page=\"1\">Lire la suite<br>∨</button>';
                pagination.querySelector('button').addEventListener('click', loadMore.bind())
            } else {
                pagination.addEventListener('click', aClickListener)
            }
        }



        async function loadMore() {
            console.log('moreNav')
            const button = pagination.querySelector('button');
            button.setAttribute('disabled', 'disabled');
            page++;
            const url = new URL(window.location.href);
            const params = new URLSearchParams(url.search);
            params.set('page', page.toString());
            await loadUrl(url.pathname + '?' + params.toString(), true);
            button.removeAttribute('disabled');
        }

        async function loadUrl(url, append = false) {
            const params = new URLSearchParams(url.split('?')[1] || '');
            params.set('ajax', '1');
            const response = await fetch(url.split('?')[0] + '?' + params.toString(), {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            if (response.status >= 200 && response.status < 300) {
                const data = await response.json();

                content.innerHTML += data.content
                if (!moreNav) {
                    pagination.innerHTML = data.pagination;
                } else if (page === data.pages) {
                    pagination.style.display = 'none';
                } else {
                    pagination.style.display = null;
                }
                params.delete('ajax');
                history.replaceState({}, '', url.split('?')[0] + '?' + params.toString());
            } else {
                console.error(response);
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/indexFr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 87,  174 => 82,  172 => 81,  170 => 80,  163 => 75,  159 => 74,  146 => 63,  144 => 62,  132 => 53,  125 => 49,  105 => 32,  95 => 25,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFr.html.twig' %}
{% block body %}
    <div class=\"container fp-slider\">
        <div id=\"carousel-example-generic\" class=\"carousel slide fp-slider\" data-ride=\"carousel\" data-wrap=\"false\"
             data-pause=\"hover\">
            <div class=\"carousel-inner\">
                {{ include('includes/_slider_fr.html.twig') }}
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"prev\">&nbsp;<span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\"
                   data-slide=\"next\">&nbsp;<span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
    </div>
    <div id=\"main\" class=\"wrap container mo-background\" role=\"document\">

        <div class=\"content row js-filter\">
            <main class=\"main\">
                <div class=\"mo-page-content homepage-tp\">
                    <div class=\"mo-front-page\">
                        <div class=\"mo-home-widgets\">
                            <div class=\"mo-frontpage-widgets widget text-5 widget_text\">
                                <div class=\"textwidget\">
                                    <div class=\"mo-flipbox\">
                                        <a href=\"{{ path('document.fr') }}\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\">
                                                <i class=\"fa fa-file-o fa-lg\"></i>
                                                <p>Documents importants</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"mo-flipbox\"><a href=\"{{ path('booking.appointments.fr')}}\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-calendar fa-lg\"></i>
                                                <p>Prendre rendez-vous</p>
                                            </div>
                                        </a></div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-map-signs fa-lg\"></i>
                                                <p>Trucs et astuces utiles</p>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div style=\"background-color: #E6E6E6;padding:10px\">
                            <h1 class=\"text-center\">Nouvelles</h1>
                            <div class=\"blogrollcontent mainroll js-filter-content\">

                                {{ include('includes/_articles_fr.html.twig') }}

                            </div>

                            {{ include('includes/_more.html.twig') }}

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div><!-- /.content -->
    <!-- /.wrap -->
    {% if popup.isShow and popup.fileName != null %}
        <div id=\"a45514b7c75ebf9f752e88a6fca5e7f55\" class=\"wdpu-container wdpu-background no-img buttons style-simple rounded wdpu-8112 no-title no-subtitle\">
            <div class=\"resize wdpu-msg move no-move-x\" style=\"display: block; top: 10px;\">
                <a href=\"#\" class=\"wdpu-close\" title=\"Close this box\"></a>
                <div class=\"wdpu-msg-inner resize\">
                    <div class=\"wdpu-text\">
                        <div class=\"wdpu-inner \">
                            <div class=\"wdpu-head\">
                                <div class=\"wdpu-title\"></div>
                                <div class=\"wdpu-subtitle\"></div> </div>
                            <div class=\"wdpu-content\">
                                <p>
                                    <a href=\"{{ vich_uploader_asset(popup, 'imageFile') }}\" target=\"_blank\">
                                        <img class=\"aligncenter size-full wp-image-8115\" src=\"{{ vich_uploader_asset(popup, 'imageFile') }}\" alt=\"أعلان\" width=\"906\" height=\"1280\"></a>
                                </p>
                                <span class=\"mpp-after-post-content\"></span>
                            </div> </div>
                        {#                    <div class=\"wdpu-buttons\">#}
                        {#                        <a href=\"#\" class=\"wdpu-hide-forever\">Never see this message again.</a>#}
                        {#                    </div>#}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
    <script>
        document.querySelector('#a45514b7c75ebf9f752e88a6fca5e7f55 .wdpu-close').addEventListener('click', function(e){
            document.querySelector('#a45514b7c75ebf9f752e88a6fca5e7f55').remove();
        });
    </script>
    <script>
        var pagination = document.querySelector('.js-filter-pagination');
        var content = document.querySelector('.js-filter-content');
        var page = parseInt(new URLSearchParams(window.location.search).get('page') || 1);
        var moreNav =  page === 1;
        bindEvents();

        function bindEvents() {
            const aClickListener = e => {
                if (e.target.tagName === 'A') {
                    e.preventDefault()
                    this.loadUrl(e.target.getAttribute('href'))
                }
            };
            if (moreNav) {
                pagination.innerHTML = '<button style=\"border:none\" data-page=\"1\">Lire la suite<br>∨</button>';
                pagination.querySelector('button').addEventListener('click', loadMore.bind())
            } else {
                pagination.addEventListener('click', aClickListener)
            }
        }



        async function loadMore() {
            console.log('moreNav')
            const button = pagination.querySelector('button');
            button.setAttribute('disabled', 'disabled');
            page++;
            const url = new URL(window.location.href);
            const params = new URLSearchParams(url.search);
            params.set('page', page.toString());
            await loadUrl(url.pathname + '?' + params.toString(), true);
            button.removeAttribute('disabled');
        }

        async function loadUrl(url, append = false) {
            const params = new URLSearchParams(url.split('?')[1] || '');
            params.set('ajax', '1');
            const response = await fetch(url.split('?')[0] + '?' + params.toString(), {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            if (response.status >= 200 && response.status < 300) {
                const data = await response.json();

                content.innerHTML += data.content
                if (!moreNav) {
                    pagination.innerHTML = data.pagination;
                } else if (page === data.pages) {
                    pagination.style.display = 'none';
                } else {
                    pagination.style.display = null;
                }
                params.delete('ajax');
                history.replaceState({}, '', url.split('?')[0] + '?' + params.toString());
            } else {
                console.error(response);
            }
        }
    </script>
{% endblock %}

", "pages/indexFr.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/indexFr.html.twig");
    }
}
