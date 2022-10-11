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

/* admin/image.cropper.html.twig */
class __TwigTemplate_56c75b2bba6a800a15069465a09df741b3cd752052041404787047da71203391 extends Template
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
        return "@EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image.cropper.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image.cropper.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/layout.html.twig", "admin/image.cropper.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/cropper.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"min-height-200px\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-12\">
                    <div class=\"title\">
                        <h4>Image Cropper</h4>
                    </div>
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Image Cropper</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class=\"pd-20 card-box mb-30\">
            <div class=\"clearfix mb-20\">
                <div class=\"pull-left\">
                    <h4 class=\"text-blue h4\">Image Cropper</h4>
                </div>
            </div>
            <!-- Content -->
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-9\">
                    <!-- <h3>Demo:</h3> -->
                    <div class=\"img-container\">
                        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/img3.jpg"), "html", null, true);
        echo "\" id=\"image\" alt=\"Picture\">
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-12 col-lg-3\">
                    <!-- <h3>Preview:</h3> -->
                    <div class=\"docs-preview clearfix\">
                        <div class=\"img-preview preview-lg\"></div>
                        <div class=\"img-preview preview-md\"></div>
                        <div class=\"img-preview preview-sm\"></div>
                        <div class=\"img-preview preview-xs\"></div>
                    </div>

                    <!-- <h3>Data:</h3> -->
                    <!-- <h3>Data:</h3> -->
                    <div class=\"docs-data\">
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataX\">X</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataX\" placeholder=\"x\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">px</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataY\">Y</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataY\" placeholder=\"y\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">px</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataWidth\">Width</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataWidth\" placeholder=\"width\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">px</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataHeight\">Height</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataHeight\" placeholder=\"height\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">px</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataRotate\">Rotate</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataRotate\" placeholder=\"rotate\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">deg</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataScaleX\">ScaleX</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataScaleX\" placeholder=\"scaleX\">
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataScaleY\">ScaleY</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataScaleY\" placeholder=\"scaleY\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\" id=\"actions\">
                <div class=\"col-sm-12 col-md-12 col-lg-9 docs-buttons\">
                    <!-- <h3>Toolbar:</h3> -->
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"setDragMode\" data-option=\"move\" title=\"Move\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setDragMode(&quot;move&quot;)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrows\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"setDragMode\" data-option=\"crop\" title=\"Crop\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setDragMode(&quot;crop&quot;)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-crop\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"0.1\" title=\"Zoom In\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.zoom(0.1)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-search-plus\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"-0.1\" title=\"Zoom Out\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.zoom(-0.1)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-search-minus\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"-10\" data-second-option=\"0\" title=\"Move Left\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.move(-10, 0)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrow-left\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"10\" data-second-option=\"0\" title=\"Move Right\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.move(10, 0)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrow-right\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"-10\" title=\"Move Up\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.move(0, -10)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrow-up\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"10\" title=\"Move Down\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.move(0, 10)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrow-down\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-45\" title=\"Rotate Left\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.rotate(-45)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-rotate-left\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"45\" title=\"Rotate Right\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.rotate(45)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-rotate-right\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleX\" data-option=\"-1\" title=\"Flip Horizontal\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.scaleX(-1)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrows-h\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleY\" data-option=\"-1\" title=\"Flip Vertical\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.scaleY(-1)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrows-v\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"crop\" title=\"Crop\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.crop()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-check\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"clear\" title=\"Clear\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.clear()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-remove\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"disable\" title=\"Disable\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.disable()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-lock\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"enable\" title=\"Enable\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.enable()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-unlock\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"reset\" title=\"Reset\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.reset()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-refresh\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <label class=\"btn btn-primary btn-upload\" for=\"inputImage\" title=\"Upload image file\">
                            <input type=\"file\" class=\"sr-only\" id=\"inputImage\" name=\"file\" accept=\".jpg,.jpeg,.png,.gif,.bmp,.tiff\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"Import image with Blob URLs\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-upload\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"destroy\" title=\"Destroy\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.destroy()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-power-off\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group btn-group-crop\">
                        <button type=\"button\" class=\"btn btn-success\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCroppedCanvas({ maxWidth: 4096, maxHeight: 4096 })\">
\t\t\t\t\t\t\t\t\t\tGet Cropped Canvas
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-success\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;width&quot;: 160, &quot;height&quot;: 90 }\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCroppedCanvas({ width: 160, height: 90 })\">
\t\t\t\t\t\t\t\t\t\t160&times;90
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-success\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;width&quot;: 320, &quot;height&quot;: 180 }\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCroppedCanvas({ width: 320, height: 180 })\">
\t\t\t\t\t\t\t\t\t\t320&times;180
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <!-- Show the cropped image in modal -->
                    <div class=\"modal fade docs-cropped\" id=\"getCroppedCanvasModal\" role=\"dialog\" aria-hidden=\"true\" aria-labelledby=\"getCroppedCanvasTitle\" tabindex=\"-1\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"getCroppedCanvasTitle\">Cropped</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\"></div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                    <a class=\"btn btn-primary\" id=\"download\" href=\"javascript:void(0);\" download=\"cropped.jpg\">Download</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal -->

                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getData()\">
\t\t\t\t\t\t\t\t\tGet Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"setData\" data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setData(data)\">
\t\t\t\t\t\t\t\t\tSet Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getContainerData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getContainerData()\">
\t\t\t\t\t\t\t\t\tGet Container Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getImageData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getImageData()\">
\t\t\t\t\t\t\t\t\tGet Image Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getCanvasData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCanvasData()\">
\t\t\t\t\t\t\t\t\tGet Canvas Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"setCanvasData\" data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setCanvasData(data)\">
\t\t\t\t\t\t\t\t\tSet Canvas Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getCropBoxData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCropBoxData()\">
\t\t\t\t\t\t\t\t\tGet Crop Box Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"setCropBoxData\" data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setCropBoxData(data)\">
\t\t\t\t\t\t\t\t\tSet Crop Box Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"moveTo\" data-option=\"0\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.moveTo(0)\">
\t\t\t\t\t\t\t\t\tMove to [0,0]
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"zoomTo\" data-option=\"1\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.zoomTo(1)\">
\t\t\t\t\t\t\t\t\tZoom to 100%
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"rotateTo\" data-option=\"180\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.rotateTo(180)\">
\t\t\t\t\t\t\t\t\tRotate 180°
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"scale\" data-option=\"-2\" data-second-option=\"-1\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.scale(-2, -1)\">
\t\t\t\t\t\t\t\t\tScale (-2, -1)
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <textarea class=\"form-control\" id=\"putData\" rows=\"1\" placeholder=\"Get data to here or set data with this value\"></textarea>

                </div><!-- /.docs-buttons -->

                <div class=\"col-sm-12 col-md-12 col-lg-3 docs-toggles\">
                    <!-- <h3>Toggles:</h3> -->
                    <div class=\"btn-group d-flex flex-wrap\" data-toggle=\"buttons\">
                        <label class=\"btn btn-primary active\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio1\" name=\"aspectRatio\" value=\"1.7777777777777777\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 16 / 9\">
\t\t\t\t\t\t\t\t\t\t16:9
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio2\" name=\"aspectRatio\" value=\"1.3333333333333333\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 4 / 3\">
\t\t\t\t\t\t\t\t\t\t4:3
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio3\" name=\"aspectRatio\" value=\"1\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 1 / 1\">
\t\t\t\t\t\t\t\t\t\t1:1
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio4\" name=\"aspectRatio\" value=\"0.6666666666666666\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 2 / 3\">
\t\t\t\t\t\t\t\t\t\t2:3
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio5\" name=\"aspectRatio\" value=\"NaN\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: NaN\">
\t\t\t\t\t\t\t\t\t\tFree
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                    </div>

                    <div class=\"btn-group d-flex flex-wrap\" data-toggle=\"buttons\">
                        <label class=\"btn btn-primary active\">
                            <input type=\"radio\" class=\"sr-only\" id=\"viewMode0\" name=\"viewMode\" value=\"0\" checked>
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 0\">
\t\t\t\t\t\t\t\t\t\tVM0
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"viewMode1\" name=\"viewMode\" value=\"1\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 1\">
\t\t\t\t\t\t\t\t\t\tVM1
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"viewMode2\" name=\"viewMode\" value=\"2\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 2\">
\t\t\t\t\t\t\t\t\t\tVM2
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"viewMode3\" name=\"viewMode\" value=\"3\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 3\">
\t\t\t\t\t\t\t\t\t\tVM3
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                    </div>

                    <div class=\"dropdown dropup docs-options\">
                        <button type=\"button\" class=\"btn btn-primary btn-block dropdown-toggle\" id=\"toggleOptions\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                            Toggle Options
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"toggleOptions\">
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"responsive\" type=\"checkbox\" name=\"responsive\" checked>
                                    <label class=\"form-check-label\" for=\"responsive\">responsive</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"restore\" type=\"checkbox\" name=\"restore\" checked>
                                    <label class=\"form-check-label\" for=\"restore\">restore</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"checkCrossOrigin\" type=\"checkbox\" name=\"checkCrossOrigin\" checked>
                                    <label class=\"form-check-label\" for=\"checkCrossOrigin\">checkCrossOrigin</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"checkOrientation\" type=\"checkbox\" name=\"checkOrientation\" checked>
                                    <label class=\"form-check-label\" for=\"checkOrientation\">checkOrientation</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"modal\" type=\"checkbox\" name=\"modal\" checked>
                                    <label class=\"form-check-label\" for=\"modal\">modal</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"guides\" type=\"checkbox\" name=\"guides\" checked>
                                    <label class=\"form-check-label\" for=\"guides\">guides</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"center\" type=\"checkbox\" name=\"center\" checked>
                                    <label class=\"form-check-label\" for=\"center\">center</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"highlight\" type=\"checkbox\" name=\"highlight\" checked>
                                    <label class=\"form-check-label\" for=\"highlight\">highlight</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"background\" type=\"checkbox\" name=\"background\" checked>
                                    <label class=\"form-check-label\" for=\"background\">background</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"autoCrop\" type=\"checkbox\" name=\"autoCrop\" checked>
                                    <label class=\"form-check-label\" for=\"autoCrop\">autoCrop</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"movable\" type=\"checkbox\" name=\"movable\" checked>
                                    <label class=\"form-check-label\" for=\"movable\">movable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"rotatable\" type=\"checkbox\" name=\"rotatable\" checked>
                                    <label class=\"form-check-label\" for=\"rotatable\">rotatable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"scalable\" type=\"checkbox\" name=\"scalable\" checked>
                                    <label class=\"form-check-label\" for=\"scalable\">scalable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"zoomable\" type=\"checkbox\" name=\"zoomable\" checked>
                                    <label class=\"form-check-label\" for=\"zoomable\">zoomable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"zoomOnTouch\" type=\"checkbox\" name=\"zoomOnTouch\" checked>
                                    <label class=\"form-check-label\" for=\"zoomOnTouch\">zoomOnTouch</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"zoomOnWheel\" type=\"checkbox\" name=\"zoomOnWheel\" checked>
                                    <label class=\"form-check-label\" for=\"zoomOnWheel\">zoomOnWheel</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"cropBoxMovable\" type=\"checkbox\" name=\"cropBoxMovable\" checked>
                                    <label class=\"form-check-label\" for=\"cropBoxMovable\">cropBoxMovable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"cropBoxResizable\" type=\"checkbox\" name=\"cropBoxResizable\" checked>
                                    <label class=\"form-check-label\" for=\"cropBoxResizable\">cropBoxResizable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"toggleDragModeOnDblclick\" type=\"checkbox\" name=\"toggleDragModeOnDblclick\" checked>
                                    <label class=\"form-check-label\" for=\"toggleDragModeOnDblclick\">toggleDragModeOnDblclick</label>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /.dropdown -->

                </div><!-- /.docs-toggles -->
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 525
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 526
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/cropper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/cropper-init.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/image.cropper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 527,  632 => 526,  622 => 525,  123 => 35,  93 => 7,  83 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/layout.html.twig' %}

{% block head_stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin/css/cropper.css') }}\">
{% endblock %}
{% block content %}
    <div class=\"min-height-200px\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-12\">
                    <div class=\"title\">
                        <h4>Image Cropper</h4>
                    </div>
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Image Cropper</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class=\"pd-20 card-box mb-30\">
            <div class=\"clearfix mb-20\">
                <div class=\"pull-left\">
                    <h4 class=\"text-blue h4\">Image Cropper</h4>
                </div>
            </div>
            <!-- Content -->
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-9\">
                    <!-- <h3>Demo:</h3> -->
                    <div class=\"img-container\">
                        <img src=\"{{ asset('assets/admin/images/img3.jpg') }}\" id=\"image\" alt=\"Picture\">
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-12 col-lg-3\">
                    <!-- <h3>Preview:</h3> -->
                    <div class=\"docs-preview clearfix\">
                        <div class=\"img-preview preview-lg\"></div>
                        <div class=\"img-preview preview-md\"></div>
                        <div class=\"img-preview preview-sm\"></div>
                        <div class=\"img-preview preview-xs\"></div>
                    </div>

                    <!-- <h3>Data:</h3> -->
                    <!-- <h3>Data:</h3> -->
                    <div class=\"docs-data\">
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataX\">X</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataX\" placeholder=\"x\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">px</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataY\">Y</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataY\" placeholder=\"y\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">px</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataWidth\">Width</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataWidth\" placeholder=\"width\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">px</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataHeight\">Height</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataHeight\" placeholder=\"height\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">px</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataRotate\">Rotate</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataRotate\" placeholder=\"rotate\">
                            <span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">deg</span>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataScaleX\">ScaleX</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataScaleX\" placeholder=\"scaleX\">
                        </div>
                        <div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-text\" for=\"dataScaleY\">ScaleY</label>
\t\t\t\t\t\t\t\t\t</span>
                            <input type=\"text\" class=\"form-control\" id=\"dataScaleY\" placeholder=\"scaleY\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\" id=\"actions\">
                <div class=\"col-sm-12 col-md-12 col-lg-9 docs-buttons\">
                    <!-- <h3>Toolbar:</h3> -->
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"setDragMode\" data-option=\"move\" title=\"Move\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setDragMode(&quot;move&quot;)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrows\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"setDragMode\" data-option=\"crop\" title=\"Crop\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setDragMode(&quot;crop&quot;)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-crop\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"0.1\" title=\"Zoom In\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.zoom(0.1)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-search-plus\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"-0.1\" title=\"Zoom Out\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.zoom(-0.1)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-search-minus\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"-10\" data-second-option=\"0\" title=\"Move Left\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.move(-10, 0)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrow-left\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"10\" data-second-option=\"0\" title=\"Move Right\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.move(10, 0)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrow-right\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"-10\" title=\"Move Up\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.move(0, -10)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrow-up\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"10\" title=\"Move Down\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.move(0, 10)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrow-down\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-45\" title=\"Rotate Left\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.rotate(-45)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-rotate-left\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"45\" title=\"Rotate Right\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.rotate(45)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-rotate-right\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleX\" data-option=\"-1\" title=\"Flip Horizontal\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.scaleX(-1)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrows-h\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleY\" data-option=\"-1\" title=\"Flip Vertical\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.scaleY(-1)\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-arrows-v\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"crop\" title=\"Crop\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.crop()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-check\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"clear\" title=\"Clear\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.clear()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-remove\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"disable\" title=\"Disable\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.disable()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-lock\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"enable\" title=\"Enable\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.enable()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-unlock\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"reset\" title=\"Reset\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.reset()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-refresh\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <label class=\"btn btn-primary btn-upload\" for=\"inputImage\" title=\"Upload image file\">
                            <input type=\"file\" class=\"sr-only\" id=\"inputImage\" name=\"file\" accept=\".jpg,.jpeg,.png,.gif,.bmp,.tiff\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"Import image with Blob URLs\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-upload\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <button type=\"button\" class=\"btn btn-primary\" data-method=\"destroy\" title=\"Destroy\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.destroy()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-power-off\"></span>
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <div class=\"btn-group btn-group-crop\">
                        <button type=\"button\" class=\"btn btn-success\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCroppedCanvas({ maxWidth: 4096, maxHeight: 4096 })\">
\t\t\t\t\t\t\t\t\t\tGet Cropped Canvas
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-success\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;width&quot;: 160, &quot;height&quot;: 90 }\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCroppedCanvas({ width: 160, height: 90 })\">
\t\t\t\t\t\t\t\t\t\t160&times;90
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                        <button type=\"button\" class=\"btn btn-success\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;width&quot;: 320, &quot;height&quot;: 180 }\">
\t\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCroppedCanvas({ width: 320, height: 180 })\">
\t\t\t\t\t\t\t\t\t\t320&times;180
\t\t\t\t\t\t\t\t\t</span>
                        </button>
                    </div>

                    <!-- Show the cropped image in modal -->
                    <div class=\"modal fade docs-cropped\" id=\"getCroppedCanvasModal\" role=\"dialog\" aria-hidden=\"true\" aria-labelledby=\"getCroppedCanvasTitle\" tabindex=\"-1\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"getCroppedCanvasTitle\">Cropped</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\"></div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                    <a class=\"btn btn-primary\" id=\"download\" href=\"javascript:void(0);\" download=\"cropped.jpg\">Download</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal -->

                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getData()\">
\t\t\t\t\t\t\t\t\tGet Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"setData\" data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setData(data)\">
\t\t\t\t\t\t\t\t\tSet Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getContainerData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getContainerData()\">
\t\t\t\t\t\t\t\t\tGet Container Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getImageData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getImageData()\">
\t\t\t\t\t\t\t\t\tGet Image Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getCanvasData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCanvasData()\">
\t\t\t\t\t\t\t\t\tGet Canvas Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"setCanvasData\" data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setCanvasData(data)\">
\t\t\t\t\t\t\t\t\tSet Canvas Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"getCropBoxData\" data-option data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.getCropBoxData()\">
\t\t\t\t\t\t\t\t\tGet Crop Box Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"setCropBoxData\" data-target=\"#putData\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.setCropBoxData(data)\">
\t\t\t\t\t\t\t\t\tSet Crop Box Data
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"moveTo\" data-option=\"0\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.moveTo(0)\">
\t\t\t\t\t\t\t\t\tMove to [0,0]
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"zoomTo\" data-option=\"1\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.zoomTo(1)\">
\t\t\t\t\t\t\t\t\tZoom to 100%
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"rotateTo\" data-option=\"180\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.rotateTo(180)\">
\t\t\t\t\t\t\t\t\tRotate 180°
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-method=\"scale\" data-option=\"-2\" data-second-option=\"-1\">
\t\t\t\t\t\t\t\t<span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"cropper.scale(-2, -1)\">
\t\t\t\t\t\t\t\t\tScale (-2, -1)
\t\t\t\t\t\t\t\t</span>
                    </button>
                    <textarea class=\"form-control\" id=\"putData\" rows=\"1\" placeholder=\"Get data to here or set data with this value\"></textarea>

                </div><!-- /.docs-buttons -->

                <div class=\"col-sm-12 col-md-12 col-lg-3 docs-toggles\">
                    <!-- <h3>Toggles:</h3> -->
                    <div class=\"btn-group d-flex flex-wrap\" data-toggle=\"buttons\">
                        <label class=\"btn btn-primary active\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio1\" name=\"aspectRatio\" value=\"1.7777777777777777\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 16 / 9\">
\t\t\t\t\t\t\t\t\t\t16:9
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio2\" name=\"aspectRatio\" value=\"1.3333333333333333\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 4 / 3\">
\t\t\t\t\t\t\t\t\t\t4:3
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio3\" name=\"aspectRatio\" value=\"1\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 1 / 1\">
\t\t\t\t\t\t\t\t\t\t1:1
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio4\" name=\"aspectRatio\" value=\"0.6666666666666666\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: 2 / 3\">
\t\t\t\t\t\t\t\t\t\t2:3
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"aspectRatio5\" name=\"aspectRatio\" value=\"NaN\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"aspectRatio: NaN\">
\t\t\t\t\t\t\t\t\t\tFree
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                    </div>

                    <div class=\"btn-group d-flex flex-wrap\" data-toggle=\"buttons\">
                        <label class=\"btn btn-primary active\">
                            <input type=\"radio\" class=\"sr-only\" id=\"viewMode0\" name=\"viewMode\" value=\"0\" checked>
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 0\">
\t\t\t\t\t\t\t\t\t\tVM0
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"viewMode1\" name=\"viewMode\" value=\"1\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 1\">
\t\t\t\t\t\t\t\t\t\tVM1
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"viewMode2\" name=\"viewMode\" value=\"2\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 2\">
\t\t\t\t\t\t\t\t\t\tVM2
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                        <label class=\"btn btn-primary\">
                            <input type=\"radio\" class=\"sr-only\" id=\"viewMode3\" name=\"viewMode\" value=\"3\">
                            <span class=\"docs-tooltip\" data-toggle=\"tooltip\" title=\"View Mode 3\">
\t\t\t\t\t\t\t\t\t\tVM3
\t\t\t\t\t\t\t\t\t</span>
                        </label>
                    </div>

                    <div class=\"dropdown dropup docs-options\">
                        <button type=\"button\" class=\"btn btn-primary btn-block dropdown-toggle\" id=\"toggleOptions\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                            Toggle Options
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"toggleOptions\">
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"responsive\" type=\"checkbox\" name=\"responsive\" checked>
                                    <label class=\"form-check-label\" for=\"responsive\">responsive</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"restore\" type=\"checkbox\" name=\"restore\" checked>
                                    <label class=\"form-check-label\" for=\"restore\">restore</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"checkCrossOrigin\" type=\"checkbox\" name=\"checkCrossOrigin\" checked>
                                    <label class=\"form-check-label\" for=\"checkCrossOrigin\">checkCrossOrigin</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"checkOrientation\" type=\"checkbox\" name=\"checkOrientation\" checked>
                                    <label class=\"form-check-label\" for=\"checkOrientation\">checkOrientation</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"modal\" type=\"checkbox\" name=\"modal\" checked>
                                    <label class=\"form-check-label\" for=\"modal\">modal</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"guides\" type=\"checkbox\" name=\"guides\" checked>
                                    <label class=\"form-check-label\" for=\"guides\">guides</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"center\" type=\"checkbox\" name=\"center\" checked>
                                    <label class=\"form-check-label\" for=\"center\">center</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"highlight\" type=\"checkbox\" name=\"highlight\" checked>
                                    <label class=\"form-check-label\" for=\"highlight\">highlight</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"background\" type=\"checkbox\" name=\"background\" checked>
                                    <label class=\"form-check-label\" for=\"background\">background</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"autoCrop\" type=\"checkbox\" name=\"autoCrop\" checked>
                                    <label class=\"form-check-label\" for=\"autoCrop\">autoCrop</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"movable\" type=\"checkbox\" name=\"movable\" checked>
                                    <label class=\"form-check-label\" for=\"movable\">movable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"rotatable\" type=\"checkbox\" name=\"rotatable\" checked>
                                    <label class=\"form-check-label\" for=\"rotatable\">rotatable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"scalable\" type=\"checkbox\" name=\"scalable\" checked>
                                    <label class=\"form-check-label\" for=\"scalable\">scalable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"zoomable\" type=\"checkbox\" name=\"zoomable\" checked>
                                    <label class=\"form-check-label\" for=\"zoomable\">zoomable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"zoomOnTouch\" type=\"checkbox\" name=\"zoomOnTouch\" checked>
                                    <label class=\"form-check-label\" for=\"zoomOnTouch\">zoomOnTouch</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"zoomOnWheel\" type=\"checkbox\" name=\"zoomOnWheel\" checked>
                                    <label class=\"form-check-label\" for=\"zoomOnWheel\">zoomOnWheel</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"cropBoxMovable\" type=\"checkbox\" name=\"cropBoxMovable\" checked>
                                    <label class=\"form-check-label\" for=\"cropBoxMovable\">cropBoxMovable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"cropBoxResizable\" type=\"checkbox\" name=\"cropBoxResizable\" checked>
                                    <label class=\"form-check-label\" for=\"cropBoxResizable\">cropBoxResizable</label>
                                </div>
                            </li>
                            <li class=\"dropdown-item\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" id=\"toggleDragModeOnDblclick\" type=\"checkbox\" name=\"toggleDragModeOnDblclick\" checked>
                                    <label class=\"form-check-label\" for=\"toggleDragModeOnDblclick\">toggleDragModeOnDblclick</label>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /.dropdown -->

                </div><!-- /.docs-toggles -->
            </div>
        </div>
    </div>
{% endblock %}

{% block body_javascript %}
    <script src=\"{{ asset('assets/admin/js/cropper.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/js/cropper-init.js') }}\"></script>
{% endblock body_javascript %}

", "admin/image.cropper.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/image.cropper.html.twig");
    }
}
