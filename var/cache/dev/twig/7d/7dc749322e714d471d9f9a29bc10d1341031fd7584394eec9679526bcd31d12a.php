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

/* admin/form.html.twig */
class __TwigTemplate_413277cc60a43ee06f88ee8e620678f6ef465a5d02cd06b6a10f9ebe5ab92b26 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form.html.twig"));

        // line 1
        echo "<form>
    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"inputEmail4\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"inputEmail4\" placeholder=\"Email\">
        </div>
        <div class=\"form-group col-md-6\">
            <label for=\"inputPassword4\">Password</label>
            <input type=\"password\" class=\"form-control\" id=\"inputPassword4\" placeholder=\"Password\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"inputAddress\">Address</label>
        <input type=\"text\" class=\"form-control\" id=\"inputAddress\" placeholder=\"1234 Main St\">
    </div>
    <div class=\"form-group\">
        <label for=\"inputAddress2\">Address 2</label>
        <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" placeholder=\"Apartment, studio, or floor\">
    </div>
    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"inputCity\">City</label>
            <input type=\"text\" class=\"form-control\" id=\"inputCity\">
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"inputState\">State</label>
            <select id=\"inputState\" class=\"form-control\">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class=\"form-group col-md-2\">
            <label for=\"inputZip\">Zip</label>
            <input type=\"text\" class=\"form-control\" id=\"inputZip\">
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck\">
            <label class=\"form-check-label\" for=\"gridCheck\">
                Check me out
            </label>
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form>
    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"inputEmail4\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"inputEmail4\" placeholder=\"Email\">
        </div>
        <div class=\"form-group col-md-6\">
            <label for=\"inputPassword4\">Password</label>
            <input type=\"password\" class=\"form-control\" id=\"inputPassword4\" placeholder=\"Password\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"inputAddress\">Address</label>
        <input type=\"text\" class=\"form-control\" id=\"inputAddress\" placeholder=\"1234 Main St\">
    </div>
    <div class=\"form-group\">
        <label for=\"inputAddress2\">Address 2</label>
        <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" placeholder=\"Apartment, studio, or floor\">
    </div>
    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"inputCity\">City</label>
            <input type=\"text\" class=\"form-control\" id=\"inputCity\">
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"inputState\">State</label>
            <select id=\"inputState\" class=\"form-control\">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class=\"form-group col-md-2\">
            <label for=\"inputZip\">Zip</label>
            <input type=\"text\" class=\"form-control\" id=\"inputZip\">
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck\">
            <label class=\"form-check-label\" for=\"gridCheck\">
                Check me out
            </label>
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
</form>", "admin/form.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/admin/form.html.twig");
    }
}
