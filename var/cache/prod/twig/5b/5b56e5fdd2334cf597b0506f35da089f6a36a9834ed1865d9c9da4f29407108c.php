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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_42b4fa96a6912bd83f429707f35c40328c201fb52a3f2f03edceea6db5f8b41c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_widget' => [$this, 'block_collection_entry_widget'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_batch_widget' => [$this, 'block_ea_batch_widget'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('date_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('time_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('file_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_row', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('collection_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('collection_entry_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('button_row', $context, $blocks);
        // line 157
        echo "
";
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('form_label', $context, $blocks);
        // line 184
        echo "
";
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 215
        echo "
";
        // line 216
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 258
        echo "
";
        // line 259
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 335
        echo "
";
        // line 336
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 339
        echo "
";
        // line 341
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 381
        echo "
";
        // line 382
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 421
        echo "
";
        // line 423
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 426
        echo "
";
        // line 427
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 431
        echo "
";
        // line 433
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 450
        echo "
";
        // line 452
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 470
        echo "
";
        // line 472
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 484
        echo "
";
        // line 486
        $this->displayBlock('ea_batch_widget', $context, $blocks);
        // line 500
        echo "
";
        // line 502
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 551
        echo "
";
        // line 552
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 568
        echo "
";
        // line 569
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 572
        echo "
";
        // line 573
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 634
        echo "
";
        // line 635
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)), 0))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <input type=\"hidden\" name=\"referrer\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", [0 => "referrer"], "method", false, false, false, 11), "html", null, true);
        echo "\">
";
    }

    // line 16
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 18
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 18), "")) : ("")))]);
        }
        // line 20
        if ((array_key_exists("type", $context) && ((0 === twig_compare(($context["type"] ?? null), "range")) || (0 === twig_compare(($context["type"] ?? null), "color"))))) {
            // line 21
            echo "        ";
            // line 22
            $context["required"] = false;
        }
        // line 24
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 27
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 29
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 30
        echo "</div>";
    }

    // line 33
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 35
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 36
        echo "</div>";
    }

    // line 39
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 41
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 42
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 44
            $this->displayParentBlock("file_widget", $context, $blocks);
            // line 46
            echo "<script>
            document.querySelector('#";
            // line 47
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').addEventListener('change', function() {
                const fileName = this.value.replace('C:\\\\fakepath\\\\', '');
                const customInputFileLabel = document.querySelector('#";
            // line 49
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " ~ .custom-file-label');
                customInputFileLabel.classList.add('selected');
                customInputFileLabel.innerHTML = fileName;
            });
        </script>
    ";
        }
    }

    // line 59
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 61
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 61), "")) : ("")) . " form-group")]);
        // line 63
        echo "
    <div ";
        // line 64
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 64, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 66
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 66), "prepend_html", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 66), "prepend_html", [], "any", false, false, false, 66), null)) : (null)));
        // line 67
        echo "            ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 67), "append_html", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 67), "append_html", [], "any", false, false, false, 67), null)) : (null)));
        // line 68
        echo "            ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 69
        echo "
            ";
        // line 70
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 71
        echo "                ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 72
            echo "                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">";
            // line 73
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 73), "prepend_html", [], "any", false, false, false, 73);
            echo "</span>
                    </div>
                ";
        }
        // line 76
        echo "
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                ";
        // line 79
        if (($context["has_append_html"] ?? null)) {
            // line 80
            echo "                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\">";
            // line 81
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 81), "append_html", [], "any", false, false, false, 81);
            echo "</span>
                    </div>
                ";
        }
        // line 84
        echo "                ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 85
        echo "
            ";
        // line 86
        $context["nullable_fields_fqcn"] = [0 => "EasyCorpBundleEasyAdminBundleFieldDateTimeField", 1 => "EasyCorpBundleEasyAdminBundleFieldDateField", 2 => "EasyCorpBundleEasyAdminBundleFieldTimeField"];
        // line 91
        echo "            ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 91), "ea_crud_form", [], "any", false, true, false, 91), "ea_field", [], "any", false, true, false, 91), "fieldFqcn", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 91), "ea_crud_form", [], "any", false, true, false, 91), "ea_field", [], "any", false, true, false, 91), "fieldFqcn", [], "any", false, false, false, 91), false)) : (false)), ($context["nullable_fields_fqcn"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 91), "nullable", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 91), "nullable", [], "any", false, false, false, 91), false)) : (false)))) {
            // line 92
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 94
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 99
        echo "
            ";
        // line 100
        if ((0 !== twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 100), "help", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 100), "help", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 100), "help", [], "any", false, false, false, 100))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 100), "help", [], "any", false, false, false, 100))), ""))) {
            // line 101
            echo "                <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", true, true, false, 101)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 101), "help", [], "any", false, false, false, 101))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 101), "help", [], "any", false, false, false, 101))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 101), "translation_domain", [], "any", false, false, false, 101));
            echo "</small>
            ";
        }
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 105
        echo "</div>
";
    }

    // line 108
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 109))) {
            // line 110
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 111
            echo "    ";
        }
        // line 112
        echo "
    ";
        // line 113
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 115
($context["form"] ?? null), "vars", [], "any", false, false, false, 115), "ea_crud_form", [], "any", false, false, false, 115), "ea_field", [], "any", false, false, false, 115), "customOptions", [], "any", false, false, false, 115), "get", [0 => "entryIsComplex"], "method", false, false, false, 115)) ? ("true") : ("false")), "data-allow-add" => ((        // line 116
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 117
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 118
($context["form"] ?? null), "children", [], "any", false, false, false, 118)), "data-form-type-name-placeholder" => ((        // line 119
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119)) : (""))]);
        // line 121
        echo "
    ";
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 125
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "

    ";
        // line 128
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 129
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 136
    public function block_collection_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 137), "ea_crud_form", [], "any", false, true, false, 137), "ea_field", [], "any", false, true, false, 137), "customOptions", [], "any", false, true, false, 137), "get", [0 => "entryIsComplex"], "method", true, true, false, 137) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 137), "ea_crud_form", [], "any", false, true, false, 137), "ea_field", [], "any", false, true, false, 137), "customOptions", [], "any", false, true, false, 137), "get", [0 => "entryIsComplex"], "method", false, false, false, 137)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 137), "ea_crud_form", [], "any", false, true, false, 137), "ea_field", [], "any", false, true, false, 137), "customOptions", [], "any", false, true, false, 137), "get", [0 => "entryIsComplex"], "method", false, false, false, 137)) : (false));
        // line 138
        echo "
    <div class=\"field-collection-item ";
        // line 139
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

        ";
        // line 142
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 142), "allow_delete", [], "any", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 142), "allow_delete", [], "any", false, false, false, 142), false)) : (false))) {
            // line 143
            echo "            <button type=\"button\" class=\"btn btn-link field-collection-delete-button\"
                    title=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\"
                    onclick=\"this.closest('.form-group').remove(); return false;\">
                <i class=\"fas fa-times\"></i>
            </button>
        ";
        }
        // line 149
        echo "    </div>
";
    }

    // line 152
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 153), "css_class", [], "any", true, true, false, 153)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 153), "css_class", [], "any", false, false, false, 153), "")) : ("")), "html", null, true);
        echo "\">";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 155
        echo "</div>";
    }

    // line 160
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        if ( !(($context["label"] ?? null) === false)) {
            // line 162
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 163
                $context["element"] = "legend";
                // line 164
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 164)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 164), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 166
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " form-control-label"))]);
            }
            // line 168
            if (($context["required"] ?? null)) {
                // line 169
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 169)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 169), "")) : ("")) . " required"))]);
            }
            // line 171
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 172
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 173
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 174
($context["name"] ?? null), "%id%" =>                     // line 175
($context["id"] ?? null)]);
                } else {
                    // line 178
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 181
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_2 = $context;
                $__internal_compile_3 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_3)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 181, $this->getSourceContext());
                }
                $__internal_compile_3 = twig_to_array($__internal_compile_3);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_2;
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 187
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 189
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 190
            echo "            ";
            // line 192
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 193
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 194
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 196
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 196), "prototype", [], "any", true, true, false, 196))) {
                // line 197
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 198
                echo "            ";
            }
            // line 199
            echo "        ";
        }
        // line 200
        echo "
        ";
        // line 201
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 205
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 207
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "label/empty"], "method", false, false, false, 207));
        echo "
    </div>
";
    }

    // line 211
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "    ";
        $context["force_error"] = true;
        // line 213
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 216
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 217
        echo "    <div class=\"file-upload\">
        ";
        // line 218
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 219
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 220
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 221
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 228
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 229
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 229) &&  !(null === (($__internal_compile_4 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_5 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 230
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 233
        echo "
        ";
        // line 234
        ob_start(function () { return ''; });
        // line 235
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 235), "vars", [], "any", false, false, false, 235), "id", [], "any", false, false, false, 235), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "id", [], "any", false, false, false, 238), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 240
        echo "        <div class=\"image-upload-wrap\">
             the container element is needed to allow customizing the <input type=\"file\" />
            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 243), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 246)) {
            // line 247
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 247), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 249
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 250), "vars", [], "any", false, false, false, 250), "id", [], "any", false, false, false, 250), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 254
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "    ";
        $context["force_error"] = true;
        // line 256
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 259
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 260
        echo "    <div class=\"file-upload\">
        ";
        // line 261
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 262
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 263
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            } else {
                // line 267
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 268
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#";
                // line 269
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"";
                // line 270
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </a>

";
                // line 276
                echo "            ";
            }
            // line 277
            echo "        ";
        }
        // line 278
        echo "        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        \$('.image-upload-wrap').hide();

                        \$('.file-upload-image').attr('src', e.target.result);
                        \$('.file-upload-content').show();

                        \$('.image-title').html(input.files[0].name);
                    };

                    reader.readAsDataURL(input.files[0]);

                } else {
                    removeUpload();
                }
            }

            function removeUpload() {
                \$('.custom-file-input').replaceWith(\$('.custom-file-input').clone());
                \$('.file-upload-content').hide();
                \$('.image-upload-wrap').show();
            }
            \$('.image-upload-wrap').bind('dragover', function () {
                \$('.image-upload-wrap').addClass('image-dropping');
            });
            \$('.image-upload-wrap').bind('dragleave', function () {
                \$('.image-upload-wrap').removeClass('image-dropping');
            });
        </script>
        ";
        // line 312
        $context["file_upload_js"] = ('' === $tmp = "            readURL(this);
        ") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 315
        echo "        <button class=\"file-upload-btn\" type=\"button\" onclick=\"\$('.custom-file-input').trigger( 'click' )\">";
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            echo "Change Image";
        } else {
            echo "Add Image";
        }
        echo "</button>
        <div class=\"image-upload-wrap\">
            ";
        // line 318
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 318), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            <div class=\"drag-text\">
                <h3>Drag and drop a file or select add Image</h3>
            </div>
";
        // line 325
        echo "        </div>
        <div class=\"file-upload-content\">
            <img class=\"file-upload-image\" src=\"#\" alt=\"your image\" />
            <div class=\"image-title-wrap\">
                <button type=\"button\" onclick=\"removeUpload()\" class=\"remove-image\">Remove <span class=\"image-title\">Uploaded Image</span></button>
            </div>
        </div>
        <div class=\"small\" id=\"";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 332), "vars", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 336
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 337
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 341
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 342
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 342)), 0))) {
            // line 343
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 347
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 348
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 348)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["tab_config"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["tab_config"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">";
                // line 349
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 349)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 349), false)) : (false))) {
                    // line 350
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 350), "html", null, true);
                    echo "\"></i>";
                }
                // line 352
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_compile_8 = $context["tab_config"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["label"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 352), "translationDomain", [], "any", false, false, false, 352)), "html", null, true);
                // line 353
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 353), 0))) {
                    // line 354
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 354), [], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 355
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 355), "html", null, true);
                    // line 356
                    echo "</span>";
                }
                // line 358
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 364
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_9 = $context["tab_config"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 364)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 364)) ? (_twig_default_filter((($__internal_compile_10 = $context["tab_config"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 365
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 365)) ? (_twig_default_filter((($__internal_compile_11 = $context["tab_config"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["help"] ?? null) : null), false)) : (false))) {
                    // line 366
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 367
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_compile_12 = $context["tab_config"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 367), "translationDomain", [], "any", false, false, false, 367));
                    echo "
                                </div>
                            ";
                }
                // line 370
                echo "
                            ";
                // line 371
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 378
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
    }

    // line 382
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 383
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 383), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 383) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 383), ($context["tab_name"] ?? null)))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 384
            echo "        ";
            $context["panel_has_header"] = (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 384)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 384), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 384)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 384), false)) : (false)));
            // line 385
            echo "
        <div class=\"";
            // line 386
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 386) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 386)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 386), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"content-panel\">
                ";
            // line 388
            if (($context["panel_has_header"] ?? null)) {
                // line 389
                echo "                    <div class=\"content-panel-header\">
                        ";
                // line 390
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 390)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 390), false)) : (false))) {
                    // line 391
                    echo "                            <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 391), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 393
                echo "                        ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 393);
                echo "

                        ";
                // line 395
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 395)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 395), false)) : (false))) {
                    // line 396
                    echo "                            <div class=\"content-panel-header-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 396);
                    echo "</div>
                        ";
                }
                // line 398
                echo "                    </div>
                ";
            }
            // line 400
            echo "
                <div class=\"content-panel-body with-background ";
            // line 401
            echo (( !($context["panel_has_header"] ?? null)) ? ("without-header") : (""));
            echo " without-footer\">
                    ";
            // line 402
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 402), "block_prefixes", [], "any", false, false, false, 402)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 402), "ea_crud_form", [], "any", false, false, false, 402), "form_panel", [], "any", false, false, false, 402), $context["panel_name"]))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 403
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 403), "ea_crud_form", [], "any", false, false, false, 403), "form_tab", [], "any", false, false, false, 403) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 403), "ea_crud_form", [], "any", false, false, false, 403), "form_tab", [], "any", false, false, false, 403), ($context["tab_name"] ?? null))))) {
                    // line 404
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                        ";
                }
                // line 406
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 407
            echo "                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 411
            echo "        <div class=\"content-panel\">
            <div class=\"content-panel-body with-background without-header without-footer\">

                ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 414), "block_prefixes", [], "any", false, false, false, 414)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 414), "ea_crud_form", [], "any", false, false, false, 414), "form_tab", [], "any", false, false, false, 414) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 414), "ea_crud_form", [], "any", false, false, false, 414), "form_tab", [], "any", false, false, false, 414), ($context["tab_name"] ?? null))))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 415
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 423
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 424
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 424), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 427
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 428
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 428), "name", [], "any", false, false, false, 428);
        // line 429
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 433
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 434
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 436
($context["form"] ?? null), "vars", [], "any", false, false, false, 436), "ea_crud_form", [], "any", false, false, false, 436), "ea_field", [], "any", false, false, false, 436), "customOptions", [], "any", false, false, false, 436), "get", [0 => "language"], "method", false, false, false, 436), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 437
($context["form"] ?? null), "vars", [], "any", false, false, false, 437), "ea_crud_form", [], "any", false, false, false, 437), "ea_field", [], "any", false, false, false, 437), "customOptions", [], "any", false, false, false, 437), "get", [0 => "tabSize"], "method", false, false, false, 437), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 438
($context["form"] ?? null), "vars", [], "any", false, false, false, 438), "ea_crud_form", [], "any", false, false, false, 438), "ea_field", [], "any", false, false, false, 438), "customOptions", [], "any", false, false, false, 438), "get", [0 => "indentWithTabs"], "method", false, false, false, 438)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 439
($context["form"] ?? null), "vars", [], "any", false, false, false, 439), "ea_crud_form", [], "any", false, false, false, 439), "ea_field", [], "any", false, false, false, 439), "customOptions", [], "any", false, false, false, 439), "get", [0 => "showLineNumbers"], "method", false, false, false, 439)) ? ("true") : ("false"))])]);
        // line 440
        echo "

    ";
        // line 442
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 442), "ea_crud_form", [], "any", false, false, false, 442), "ea_field", [], "any", false, false, false, 442), "customOptions", [], "any", false, false, false, 442), "get", [0 => "numOfRows"], "method", false, false, false, 442);
        // line 443
        echo "    ";
        if ( !(null === ($context["numOfRows"] ?? null))) {
            // line 444
            echo "        <style type=\"text/css\">
            ";
            // line 446
            echo "            #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, twig_round((21 * ($context["numOfRows"] ?? null))), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
    }

    // line 452
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 453
        echo "    ";
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 453), "ea_crud_form", [], "any", false, false, false, 453), "ea_field", [], "any", false, false, false, 453), "customOptions", [], "any", false, false, false, 453), "get", [0 => "numOfRows"], "method", false, false, false, 453);
        // line 454
        echo "
    ";
        // line 455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none"])]);
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 458
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>

    ";
        // line 461
        if (($context["numOfRows"] ?? null)) {
            // line 462
            echo "        <style type=\"text/css\">
            trix-editor[input=";
            // line 463
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "].trix-content {
                ";
            // line 465
            echo "                min-height: ";
            echo twig_escape_filter($this->env, twig_round((($context["numOfRows"] ?? null) * 21)), "html", null, true);
            echo "px;
            }
        </style>
    ";
        }
    }

    // line 472
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 473
        echo "    <div class=\"form-section ";
        echo ((((0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 473), "icon", [], "any", true, true, false, 473)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 473), "icon", [], "any", false, false, false, 473), false)) : (false)), false)) && (0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 473), "label", [], "any", true, true, false, 473)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 473), "label", [], "any", false, false, false, 473), false)) : (false)), false)))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 473), "css_class", [], "any", true, true, false, 473)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 473), "css_class", [], "any", false, false, false, 473), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 475
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 475), "icon", [], "any", true, true, false, 475)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 475), "icon", [], "any", false, false, false, 475), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 475), "icon", [], "any", false, false, false, 475), "html", null, true);
            echo "\"></i>";
        }
        // line 476
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 476), "label", [], "any", true, true, false, 476)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 476), "label", [], "any", false, false, false, 476), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 476), "label", [], "any", true, true, false, 476)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 476), "label", [], "any", false, false, false, 476), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 476), "translationDomain", [], "any", false, false, false, 476));
        }
        echo "</span>
        </h2>

        ";
        // line 479
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 479), "help", [], "any", true, true, false, 479)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 479), "help", [], "any", false, false, false, 479), false)) : (false))) {
            // line 480
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 480), "help", [], "any", false, false, false, 480), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 480), "translationDomain", [], "any", false, false, false, 480));
            echo "</p>
        ";
        }
        // line 482
        echo "    </div>
";
    }

    // line 486
    public function block_ea_batch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 487
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "entity", [], "any", false, false, false, 487), "name", [], "any", false, false, false, 487), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 487), "translationDomain", [], "any", false, false, false, 487)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "entity", [], "any", false, false, false, 487), "label", [], "any", false, false, false, 487), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 487), "translationDomain", [], "any", false, false, false, 487))];
        // line 488
        echo "
    ";
        // line 489
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ids", [], "any", false, false, false, 489), 'widget');
        echo "
    <button type=\"button\" class=\"btn btn-link deselect-batch-button\">";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.deselect", ($context["_trans_parameters"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 490), "translationDomain", [], "any", false, false, false, 490)), "html", null, true);
        echo "</button>
    ";
        // line 491
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 492
            echo "        <button type=\"submit\" class=\"btn ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", true, true, false, 492)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", false, false, false, 492), "btn-secondary")) : ("btn-secondary")), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["action"], "ask_confirm", [], "any", false, false, false, 492)) {
                echo "ask-confirm-batch-button";
            }
            echo "\" title=\"";
            ((twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", true, true, false, 492)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 492), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 492), ($context["_trans_parameters"] ?? null)), "html", null, true))));
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 492), "vars", [], "any", false, false, false, 492), "full_name", [], "any", false, false, false, 492), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 492), "html", null, true);
            echo "\">";
            // line 493
            if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 493)) {
                echo "<i class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 493), "html", null, true);
                echo "\"></i> ";
            }
            // line 494
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 494) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 494)))) {
                // line 495
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 495), ($context["_trans_parameters"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 495), "translationDomain", [], "any", false, false, false, 495)), "html", null, true);
            }
            // line 497
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 502
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 503
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 503), "query", [], "any", false, true, false, 503), "get", [0 => "filters"], "method", true, true, false, 503)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 503), "query", [], "any", false, true, false, 503), "get", [0 => "filters"], "method", false, false, false, 503), [])) : ([])));
        // line 504
        echo "
    ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 506
            echo "        <div class=\"filter-field ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 506)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 506)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 506), "name", [], "any", false, false, false, 506), "html", null, true);
            echo "\">
            <div class=\"filter-heading\" id=\"filter-heading-";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 507), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 508
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 508), "name", [], "any", false, false, false, 508), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                <a data-toggle=\"collapse\" href=\"#filter-content-";
            // line 509
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 509), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 509), "name", [], "any", false, false, false, 509), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 509), "html", null, true);
            echo "\">
                    ";
            // line 510
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 510), "label", [], "any", true, true, false, 510)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 510), "label", [], "any", false, false, false, 510), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 510), "name", [], "any", false, false, false, 510)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 510), "name", [], "any", false, false, false, 510)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 510), "translationDomain", [], "any", false, false, false, 510)), "html", null, true);
            echo "
                </a>
            </div>
            <div id=\"filter-content-";
            // line 513
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 513), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 513), "name", [], "any", false, false, false, 513), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 513), "html", null, true);
            echo "\">
                <div class=\"form-widget my-2\">
                    ";
            // line 515
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 520
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach(filterCheckbox => {
            filterCheckbox.addEventListener('change', function () {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // we can't use -> \"document.querySelector('form#filters').addEventListener('change', ...);\"
        // because it doesn't work with Select2 elements changes
        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        \$(document).on('change', 'form#";
        // line 537
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 537), "id", [], "any", false, false, false, 537), "html", null, true);
        echo "', function (event) {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            let filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    ";
        // line 549
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
    }

    // line 552
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 553
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 554), 'row');
        echo "
        ";
        // line 555
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 555), 'row');
        echo "
        <div id=\"wrapper_";
        // line 556
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 556), "vars", [], "any", false, false, false, 556), "id", [], "any", false, false, false, 556), "html", null, true);
        echo "\" ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 556), "vars", [], "any", false, false, false, 556), "value", [], "any", false, false, false, 556), "between"))) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 557
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 557), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 560
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 560), "vars", [], "any", false, false, false, 560), "id", [], "any", false, false, false, 560), "html", null, true);
        echo "').addEventListener('change', function(event) {
                const input = document.querySelector('#wrapper_";
        // line 561
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 561), "vars", [], "any", false, false, false, 561), "id", [], "any", false, false, false, 561), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 566
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 569
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 570
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 573
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 574
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 576
        $context["placeholder"] = null;
        // line 577
        echo "            ";
        $context["title"] = null;
        // line 578
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 579
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 580
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 581
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 582
                echo "                ";
            } else {
                // line 583
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 583);
                // line 584
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 584));
                // line 585
                echo "                ";
            }
            // line 586
            echo "            ";
        }
        // line 587
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 587), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 587), "vars", [], "any", false, false, false, 587), "attr", [], "any", false, false, false, 587), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null)])]);
        echo "
            <div class=\"input-group-append\">
                <span class=\"input-group-text\" ";
        // line 589
        if (twig_test_empty(($context["currentFiles"] ?? null))) {
            echo "style=\"display: none\"";
        }
        echo ">";
        // line 590
        if (($context["currentFiles"] ?? null)) {
            // line 591
            if (($context["multiple"] ?? null)) {
                // line 592
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 592)); })), "html", null, true);
                echo "
                        ";
            } else {
                // line 594
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 594)), "html", null, true);
                echo "
                        ";
            }
        }
        // line 597
        echo "</span>
                ";
        // line 598
        if (($context["allow_delete"] ?? null)) {
            // line 599
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 599), "vars", [], "any", false, false, false, 599), "id", [], "any", false, false, false, 599), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 603
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 603), "vars", [], "any", false, false, false, 603), "id", [], "any", false, false, false, 603), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 608
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 609
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 612
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 613
                echo "                        <tr>
                            <td>
                                ";
                // line 615
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 615))), "html", null, true);
                    echo "\">";
                }
                // line 616
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 616)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 617
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 617), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 619
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 620
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 621
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 621)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 624
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 628
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 629
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 629), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 631
        echo "    </div>
    ";
        // line 632
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 632), 'errors');
        echo "
";
    }

    // line 635
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 636
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 638
($context["form"] ?? null), "parent", [], "any", false, false, false, 638), "children", [], "any", false, false, false, 638)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["target"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 638), "id", [], "any", false, false, false, 638)]);
        // line 640
        echo "
    <div class=\"input-group\">
        ";
        // line 642
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <div class=\"input-group-append\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">
                <i class=\"fas fa-lock fa-fw\"></i>
            </button>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1737 => 642,  1733 => 640,  1731 => 638,  1729 => 636,  1725 => 635,  1719 => 632,  1716 => 631,  1710 => 629,  1707 => 628,  1701 => 624,  1692 => 621,  1689 => 620,  1685 => 619,  1680 => 617,  1675 => 616,  1669 => 615,  1665 => 613,  1661 => 612,  1656 => 609,  1654 => 608,  1645 => 603,  1633 => 599,  1631 => 598,  1628 => 597,  1621 => 594,  1615 => 592,  1613 => 591,  1611 => 590,  1606 => 589,  1600 => 587,  1597 => 586,  1594 => 585,  1591 => 584,  1588 => 583,  1585 => 582,  1582 => 581,  1579 => 580,  1576 => 579,  1573 => 578,  1570 => 577,  1568 => 576,  1564 => 574,  1560 => 573,  1553 => 570,  1549 => 569,  1545 => 566,  1538 => 561,  1534 => 560,  1528 => 557,  1520 => 556,  1516 => 555,  1512 => 554,  1509 => 553,  1505 => 552,  1499 => 549,  1484 => 537,  1465 => 520,  1446 => 515,  1435 => 513,  1429 => 510,  1421 => 509,  1415 => 508,  1411 => 507,  1398 => 506,  1381 => 505,  1378 => 504,  1375 => 503,  1371 => 502,  1362 => 497,  1359 => 495,  1357 => 494,  1351 => 493,  1337 => 492,  1333 => 491,  1329 => 490,  1325 => 489,  1322 => 488,  1319 => 487,  1315 => 486,  1310 => 482,  1304 => 480,  1302 => 479,  1293 => 476,  1287 => 475,  1279 => 473,  1275 => 472,  1265 => 465,  1261 => 463,  1258 => 462,  1256 => 461,  1250 => 458,  1244 => 455,  1241 => 454,  1238 => 453,  1234 => 452,  1223 => 446,  1220 => 444,  1217 => 443,  1215 => 442,  1211 => 440,  1209 => 439,  1208 => 438,  1207 => 437,  1206 => 436,  1204 => 434,  1200 => 433,  1193 => 429,  1190 => 428,  1186 => 427,  1179 => 424,  1175 => 423,  1165 => 417,  1156 => 415,  1152 => 414,  1147 => 411,  1139 => 407,  1133 => 406,  1127 => 404,  1124 => 403,  1120 => 402,  1116 => 401,  1113 => 400,  1109 => 398,  1103 => 396,  1101 => 395,  1095 => 393,  1089 => 391,  1087 => 390,  1084 => 389,  1082 => 388,  1077 => 386,  1074 => 385,  1071 => 384,  1065 => 383,  1061 => 382,  1053 => 378,  1047 => 374,  1030 => 371,  1027 => 370,  1021 => 367,  1018 => 366,  1016 => 365,  1005 => 364,  988 => 363,  984 => 361,  976 => 358,  973 => 356,  971 => 355,  967 => 354,  965 => 353,  963 => 352,  958 => 350,  956 => 349,  947 => 348,  944 => 347,  940 => 346,  935 => 343,  932 => 342,  928 => 341,  921 => 337,  917 => 336,  910 => 332,  901 => 325,  893 => 318,  883 => 315,  880 => 312,  844 => 278,  841 => 277,  838 => 276,  832 => 270,  828 => 269,  825 => 268,  822 => 267,  816 => 264,  813 => 263,  810 => 262,  808 => 261,  805 => 260,  801 => 259,  794 => 256,  791 => 255,  787 => 254,  780 => 250,  777 => 249,  771 => 247,  769 => 246,  763 => 243,  758 => 240,  753 => 238,  746 => 235,  744 => 234,  741 => 233,  735 => 230,  731 => 229,  726 => 228,  723 => 221,  720 => 220,  717 => 219,  715 => 218,  712 => 217,  708 => 216,  701 => 213,  698 => 212,  694 => 211,  687 => 207,  684 => 206,  680 => 205,  673 => 201,  670 => 200,  667 => 199,  664 => 198,  661 => 197,  658 => 196,  652 => 194,  649 => 193,  646 => 192,  644 => 190,  642 => 189,  639 => 188,  635 => 187,  613 => 181,  609 => 178,  606 => 175,  605 => 174,  604 => 173,  602 => 172,  600 => 171,  597 => 169,  595 => 168,  592 => 166,  589 => 164,  587 => 163,  585 => 162,  583 => 161,  579 => 160,  575 => 155,  573 => 154,  567 => 153,  563 => 152,  558 => 149,  550 => 144,  547 => 143,  545 => 142,  540 => 140,  536 => 139,  533 => 138,  530 => 137,  526 => 136,  518 => 131,  514 => 129,  512 => 128,  506 => 126,  502 => 125,  496 => 122,  493 => 121,  491 => 119,  490 => 118,  489 => 117,  488 => 116,  487 => 115,  486 => 113,  483 => 112,  480 => 111,  477 => 110,  474 => 109,  470 => 108,  465 => 105,  463 => 104,  457 => 101,  455 => 100,  452 => 99,  445 => 95,  439 => 94,  435 => 92,  432 => 91,  430 => 86,  427 => 85,  422 => 84,  416 => 81,  413 => 80,  411 => 79,  406 => 77,  403 => 76,  397 => 73,  394 => 72,  391 => 71,  387 => 70,  384 => 69,  381 => 68,  378 => 67,  376 => 66,  374 => 65,  363 => 64,  360 => 63,  358 => 61,  356 => 60,  352 => 59,  341 => 49,  336 => 47,  333 => 46,  331 => 44,  328 => 42,  326 => 41,  324 => 40,  320 => 39,  316 => 36,  314 => 35,  312 => 34,  308 => 33,  304 => 30,  302 => 29,  300 => 28,  296 => 27,  292 => 24,  289 => 22,  287 => 21,  285 => 20,  282 => 18,  280 => 17,  276 => 16,  270 => 11,  265 => 9,  262 => 8,  256 => 6,  253 => 5,  249 => 4,  245 => 635,  242 => 634,  240 => 573,  237 => 572,  235 => 569,  232 => 568,  230 => 552,  227 => 551,  225 => 502,  222 => 500,  220 => 486,  217 => 484,  215 => 472,  212 => 470,  210 => 452,  207 => 450,  205 => 433,  202 => 431,  200 => 427,  197 => 426,  195 => 423,  192 => 421,  190 => 382,  187 => 381,  185 => 341,  182 => 339,  180 => 336,  177 => 335,  175 => 259,  172 => 258,  170 => 254,  167 => 253,  165 => 216,  162 => 215,  160 => 211,  157 => 210,  155 => 205,  152 => 204,  150 => 187,  147 => 186,  144 => 184,  142 => 160,  139 => 159,  136 => 157,  134 => 152,  131 => 151,  129 => 136,  126 => 135,  124 => 125,  121 => 124,  119 => 108,  116 => 107,  114 => 59,  111 => 58,  108 => 56,  106 => 39,  103 => 38,  101 => 33,  98 => 32,  96 => 27,  93 => 26,  91 => 16,  88 => 15,  85 => 13,  83 => 4,  80 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/bundles/EasyAdminBundle/crud/form_theme.html.twig");
    }
}
