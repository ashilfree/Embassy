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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_47d4953270ca700ac6126839bcda5dc3e673700332550f89a5e165d19ca7f304 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_aa0909bd7326402b0362a2cb13b5d2846f7c1488d5cb01d258abc5017b2cba14"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 8
        $context["has_batch_actions"] = ((false && array_key_exists("batch_form", $context)) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "actions", [], "any", false, false, false, 8), "batchActions", [], "any", false, false, false, 8)), 0)));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 10)), "html", null, true))) : (print ("")));
    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("index" . (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? ((" index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 11))) : (""))), "html", null, true);
    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        ob_start(function () { return ''; });
        // line 15
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 15), "defaultPageTitle", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15), "EasyAdminBundle");
        // line 16
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16))) ? (($context["default_title"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 16), "translationParameters", [], "any", false, false, false, 16),         // line 5
($context["__internal_aa0909bd7326402b0362a2cb13b5d2846f7c1488d5cb01d258abc5017b2cba14"] ?? null))));
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayBlock('global_actions', $context, $blocks);
    }

    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 23
            echo "            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 23), ["action" => $context["action"]], false);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
    }

    // line 28
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "

    ";
    }

    // line 42
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 44), "get", [0 => "sort"], "method", false, false, false, 44)));
        // line 45
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "sort"], "method", false, false, false, 45));
        // line 46
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 47
        echo "    ";
        $context["has_footer"] = (0 !== twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0));
        // line 48
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 48), "isSearchEnabled", [], "any", false, false, false, 48);
        // line 49
        echo "    ";
        $context["has_filters"] = (1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0));
        // line 50
        echo "    ";
        $context["has_datagrid_tools"] = (($context["has_search"] ?? null) || ($context["has_filters"] ?? null));
        // line 51
        echo "    ";
        $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 51), "entityFqcn", [], "any", false, false, false, 51);
        // line 52
        echo "
    <div class=\"pt-20 pb-20\">
        <table class=\"table hover stripe data-table nowrap\">
            <thead>
            ";
        // line 56
        $this->displayBlock('table_head', $context, $blocks);
        // line 76
        echo "            </thead>

            <tbody>
            ";
        // line 79
        $this->displayBlock('table_body', $context, $blocks);
        // line 143
        echo "            </tbody>
        </table>

    </div>

    ";
        // line 148
        $this->displayBlock('delete_form', $context, $blocks);
        // line 151
        echo "
    ";
        // line 152
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 153
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
    }

    // line 56
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                <tr>
                    ";
        // line 58
        if (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "actions", [], "any", false, false, false, 58)))) {
            // line 59
            echo "                        <th class=\"datatable-nosort\">
                            Action
                        </th>
                    ";
        }
        // line 63
        echo "                    ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 64
            echo "                        <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                    ";
        }
        // line 66
        echo "
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 67)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 67)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 68
            echo "                        <th>
                            ";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 69);
            echo "
                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "

                </tr>
            ";
    }

    // line 79
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 81
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 81)) {
                // line 82
                echo "                        ";
                $context["some_results_are_hidden"] = true;
                // line 83
                echo "                    ";
            } else {
                // line 84
                echo "                        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 84), "html", null, true);
                echo "\">
                            ";
                // line 85
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 110
                echo "                            ";
                if (($context["has_batch_actions"] ?? null)) {
                    // line 111
                    echo "                                <td><input type=\"checkbox\" class=\"form-batch-checkbox\"
                                           value=\"";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 112), "html", null, true);
                    echo "\"></td>
                            ";
                }
                // line 114
                echo "
                            ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 115));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 116
                    echo "                                <td class=\"";
                    echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 116), ($context["sort_field_name"] ?? null)))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 116), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 116), "html", null, true);
                    echo "\"
                                    dir=\"";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 117), "textDirection", [], "any", false, false, false, 117), "html", null, true);
                    echo "\">
                                    ";
                    // line 118
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 118), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                                </td>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "

                        </tr>

                    ";
            }
            // line 126
            echo "                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 127
            echo "                    <tr>
                        <td class=\"no-results\" colspan=\"100\">
                            ";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 129), "translationParameters", [], "any", false, false, false, 129), "EasyAdminBundle"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
                ";
        // line 134
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 135
            echo "                    <tr class=\"datagrid-row-empty\">
                        <td class=\"text-center\" colspan=\"";
            // line 136
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 136)) + 1), "html", null, true);
            echo "\">
                            <span class=\"datagrid-row-empty-message\"><i
                                        class=\"fa fa-lock mr-1\"></i> ";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                        </td>
                    </tr>
                ";
        }
        // line 142
        echo "            ";
    }

    // line 85
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 86))) {
            // line 87
            echo "                                    <td class=\"actions\">
                                        ";
            // line 88
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 88), "showEntityActionsAsDropdown", [], "any", false, false, false, 88)) {
                // line 89
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 89));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 90
                    echo "                                                ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 90), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 90), "showEntityActionsAsDropdown", [], "any", false, false, false, 90)], false);
                    echo "
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                                        ";
            } else {
                // line 93
                echo "                                            <div class=\"dropdown dropdown-actions\">
                                                <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\"
                                                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                                   aria-expanded=\"false\">
                                                    <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                </a>

                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                    ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 102
                    echo "                                                        ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 102), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 102), "showEntityActionsAsDropdown", [], "any", false, false, false, 102)], false);
                    echo "
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                                                </div>
                                            </div>
                                        ";
            }
            // line 107
            echo "                                    </td>
                                ";
        }
        // line 109
        echo "                            ";
    }

    // line 148
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
    }

    // line 157
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const fieldName = this.closest('.custom-switch').dataset.fieldname;

                    const toggleUrl = \"";
        // line 170
        echo twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(), "setAction", [0 => "edit"], "method", false, false, false, 170);
        echo "\"
                        + \"&entityId=\" + this.closest('tr').dataset.id
                        + \"&fieldName=\" + fieldName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({type: \"GET\", url: toggleUrl, data: {}});

                    toggleRequest.done(function (result) {
                    });

                    toggleRequest.fail(function () {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function (e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({backdrop: true, keyboard: true})
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__entityId_placeholder__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 202
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 203
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function (element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function (event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({backdrop: true, keyboard: true});
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 233
        echo "

            ";
        // line 235
        if (($context["has_batch_actions"] ?? null)) {
            // line 236
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function (value) {
                        return value !== id
                    });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({backdrop: true, keyboard: true})
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            ";
        }
        // line 287
        echo "        });
    </script>

    ";
        // line 290
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 290), "get", [0 => "query"], "method", false, false, false, 290))) {
            // line 291
            echo "        <script type=\"text/javascript\">
            const search_query = \"";
            // line 292
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 292), "query", [], "any", true, true, false, 292)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 292), "query", [], "any", false, false, false, 292), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 292,  617 => 291,  615 => 290,  610 => 287,  557 => 236,  555 => 235,  551 => 233,  519 => 203,  517 => 202,  482 => 170,  466 => 158,  462 => 157,  455 => 149,  451 => 148,  447 => 109,  443 => 107,  438 => 104,  429 => 102,  425 => 101,  415 => 93,  412 => 92,  403 => 90,  398 => 89,  396 => 88,  393 => 87,  390 => 86,  386 => 85,  382 => 142,  375 => 138,  370 => 136,  367 => 135,  365 => 134,  362 => 133,  352 => 129,  348 => 127,  335 => 126,  328 => 121,  319 => 118,  315 => 117,  306 => 116,  302 => 115,  299 => 114,  294 => 112,  291 => 111,  288 => 110,  286 => 85,  281 => 84,  278 => 83,  275 => 82,  272 => 81,  253 => 80,  249 => 79,  242 => 72,  233 => 69,  230 => 68,  226 => 67,  223 => 66,  219 => 64,  216 => 63,  210 => 59,  208 => 58,  205 => 57,  201 => 56,  193 => 153,  191 => 152,  188 => 151,  186 => 148,  179 => 143,  177 => 79,  172 => 76,  170 => 56,  164 => 52,  161 => 51,  158 => 50,  155 => 49,  152 => 48,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  138 => 43,  134 => 42,  126 => 29,  122 => 28,  118 => 25,  109 => 23,  104 => 22,  96 => 21,  92 => 20,  88 => 14,  85 => 5,  83 => 16,  81 => 15,  79 => 14,  75 => 13,  68 => 11,  61 => 10,  57 => 4,  55 => 8,  53 => 5,  46 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/home/ubuntu/Projects/SymfonyProjects/Embassy/templates/bundles/EasyAdminBundle/crud/index.html.twig");
    }
}
