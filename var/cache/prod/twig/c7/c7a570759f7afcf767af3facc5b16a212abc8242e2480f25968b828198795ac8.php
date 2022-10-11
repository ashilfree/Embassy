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

/* pages/indexEn.html.twig */
class __TwigTemplate_cc3ad942a8caba5c50ba20b4776e33e629ff8003433cd38e82109094091a2545 extends Template
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
        return "baseEn.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseEn.html.twig", "pages/indexEn.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"container fp-slider\">
        <div id=\"carousel-example-generic\" class=\"carousel slide fp-slider\" data-ride=\"carousel\" data-wrap=\"false\"
             data-pause=\"hover\">
            <div class=\"carousel-inner\">
                ";
        // line 7
        echo twig_include($this->env, $context, "includes/_slider_en.html.twig");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document.en");
        echo "\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\">
                                                <i class=\"fa fa-file-o fa-lg\"></i>
                                                <p>Important documents</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"mo-flipbox\"><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking.appointments.en");
        echo "\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-calendar fa-lg\"></i>
                                                <p>Book appointments</p>
                                            </div>
                                        </a></div>
                                    <div class=\"mo-flipbox\"><a href=\"#\" class=\"flipbox-href\">
                                            <div class=\"mo-flipbox-front\"><i class=\"fa fa-map-signs fa-lg\"></i>
                                                <p>Helpful hints and tips</p>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div style=\"background-color: #E6E6E6;padding:10px\">
                            <h1 class=\"text-center\">News</h1>
                            <div class=\"blogrollcontent mainroll js-filter-content\">

                                ";
        // line 49
        echo twig_include($this->env, $context, "includes/_articles_en.html.twig");
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
        if ((twig_get_attribute($this->env, $this->source, ($context["popup"] ?? null), "isShow", [], "any", false, false, false, 62) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["popup"] ?? null), "fileName", [], "any", false, false, false, 62), null)))) {
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
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["popup"] ?? null), "imageFile"), "html", null, true);
            echo "\" target=\"_blank\">
                                        <img class=\"aligncenter size-full wp-image-8115\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["popup"] ?? null), "imageFile"), "html", null, true);
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
                pagination.innerHTML = '<button style=\"border:none\" data-page=\"1\">Read More <br>∨</button>';
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
    }

    public function getTemplateName()
    {
        return "pages/indexEn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 87,  156 => 82,  154 => 81,  152 => 80,  145 => 75,  141 => 74,  128 => 63,  126 => 62,  114 => 53,  107 => 49,  87 => 32,  77 => 25,  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/indexEn.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/pages/indexEn.html.twig");
    }
}
