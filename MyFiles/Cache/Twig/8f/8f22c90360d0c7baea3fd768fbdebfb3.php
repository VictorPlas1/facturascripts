<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Master/ListView.html.twig */
class __TwigTemplate_8713f0d19ed2cebaf52897788809c2e3 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["formName"] = ("form" . CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 21));
        // line 22
        yield "
<script>
    var listViewDeleteCancel = \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        yield "\";
    var listViewDeleteConfirm = \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        yield "\";
    var listViewDeleteMessage = \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        yield "\";
    var listViewDeleteTitle = \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        yield "\";
</script>

<form id=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
        yield "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
    ";
        // line 31
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 33), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"loadfilter\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 34), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"offset\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 35), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"order\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 36), "html", null, true);
        yield "\"/>
    <div class=\"";
        // line 37
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 37), "card", [], "any", false, false, false, 37)) ? ("card shadow") : (""));
        yield "\">
        <div class=\"";
        // line 38
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 38), "card", [], "any", false, false, false, 38)) ? ("container-fluid pt-3") : ("container-fluid"));
        yield "\">
            <div class=\"form-row\">
                ";
        // line 41
        yield "                <div class=\"col-md-auto mb-2\">
                    ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 42), "btnNew", [], "any", false, false, false, 42)) {
            // line 43
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "modalInsert", [], "any", false, false, false, 43)) {
                // line 44
                yield "                            <button type=\"button\" class=\"btn btn-success\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
                yield "\"
                                    data-toggle=\"modal\" data-target=\"#modal";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 45), "modalInsert", [], "any", false, false, false, 45), "html", null, true);
                yield "\">
                                <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 47), "card", [], "any", false, false, false, 47) == false)) {
                    // line 48
                    yield "                                    <span class=\"d-none d-xl-inline-block\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 50
                yield "                            </button>
                        ";
            } else {
                // line 52
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 52)), "html", null, true);
                yield "\" class=\"btn btn-success\"
                               title=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
                yield "\"><i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                ";
                // line 54
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 54), "card", [], "any", false, false, false, 54) == false)) {
                    // line 55
                    yield "                                    <span class=\"d-none d-xl-inline-block\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 57
                yield "                            </a>
                        ";
            }
            // line 59
            yield "                    ";
        }
        // line 60
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 60), "btnDelete", [], "any", false, false, false, 60)) {
            // line 61
            yield "                        <button type=\"button\" class=\"btn btn-danger\"
                                onclick=\"listViewDelete('";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 62), "html", null, true);
            yield "');\"
                                title=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            yield "\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                        </button>
                    ";
        }
        // line 67
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 67), "btnPrint", [], "any", false, false, false, 67)) {
            // line 68
            yield "                        <div class=\"btn-group\">
                            ";
            // line 69
            yield CoreExtension::callMacro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null)], 69, $context, $this->getSourceContext());
            yield "
                        </div>
                    ";
        }
        // line 72
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 72), "clickable", [], "any", false, false, false, 72)) {
            // line 73
            yield "                        <button type=\"button\" class=\"btn btn-light\"
                                onclick=\"listViewOpenTab('";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 74), "html", null, true);
            yield "');\"
                                title=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("open-tab"), "html", null, true);
            yield "\">
                            <i class=\"fas fa-external-link-alt fa-fw\" aria-hidden=\"true\"></i>
                        </button>
                    ";
        }
        // line 79
        yield "                    ";
        // line 80
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 80), "render", [true, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 80)], "method", false, false, false, 80);
        yield "
                    ";
        // line 82
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 82), "render", [($context["fsc"] ?? null)], "method", false, false, false, 82);
        yield "
                </div>
                <div class=\"col-sm mb-2\">
                    ";
        // line 86
        yield "                    ";
        yield CoreExtension::callMacro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null)], 86, $context, $this->getSourceContext());
        yield "
                </div>
                <div class=\"col-sm-auto text-right mb-2\">
                    ";
        // line 90
        yield "                    ";
        yield CoreExtension::callMacro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["fsc"] ?? null)], 90, $context, $this->getSourceContext());
        yield "
                    ";
        // line 92
        yield "                    ";
        yield CoreExtension::callMacro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 92, $context, $this->getSourceContext());
        yield "
                    ";
        // line 94
        yield "                    ";
        yield CoreExtension::callMacro($macros["_self"], "macro_colorsButton", [($context["currentView"] ?? null)], 94, $context, $this->getSourceContext());
        yield "
                </div>
            </div>
            ";
        // line 98
        yield "            ";
        $context["divFiltersStyle"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 98)) ? ("") : ("display: none;"));
        // line 99
        yield "            <div id=\"form";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 99), "html", null, true);
        yield "Filters\" class=\"form-row align-items-center border-bottom mb-3\"
                 style=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["divFiltersStyle"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 102
            yield "                    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 102);
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "            </div>
            ";
        // line 106
        yield "            <div class=\"row\">
                ";
        // line 107
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 107), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 107), "listViewSetAction", ($context["fsc"] ?? null)], "method", false, false, false, 107);
        yield "
            </div>
        </div>
        ";
        // line 111
        yield "        ";
        $context["pages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 111);
        // line 112
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pages"] ?? null)) > 4)) {
            // line 113
            yield "            <div class=\"text-center pb-2\">
                <div class=\"btn-group\">
                    ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 116
                yield "                        ";
                $context["btnClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 116)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 117
                yield "                        <button type=\"button\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btnClass"] ?? null), "html", null, true);
                yield "\"
                                onclick=\"listViewSetOffset('";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 118), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 118), "html", null, true);
                yield "');\">
                            ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 119), "html", null, true);
                yield "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                </div>
            </div>
        ";
        }
        // line 125
        yield "        ";
        // line 126
        yield "        <div class=\"table-responsive\">
            ";
        // line 127
        $context["tableClass"] = ((($this->env->getFunction('settings')->getCallable()("default", "tablesize") == "small")) ? ("table-sm") : (""));
        // line 128
        yield "            <table class=\"table table-hover mb-0 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tableClass"] ?? null), "html", null, true);
        yield "\">
                <thead>
                <tr>
                    ";
        // line 131
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 131)) > 0) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 131), "checkBoxes", [], "any", false, false, false, 131) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 131), "clickable", [], "any", false, false, false, 131)))) {
            // line 132
            yield "                        <th width=\"50\" class=\"text-center\">
                            ";
            // line 133
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 133), "checkBoxes", [], "any", false, false, false, 133)) {
                // line 134
                yield "                                <div class=\"form-check form-check-inline m-0 toggle-ext-link\">
                                    <input class=\"form-check-input listActionCB\" type=\"checkbox\"
                                           onclick=\"listViewCheckboxes('";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 136), "html", null, true);
                yield "');\"/>
                                </div>
                            ";
            }
            // line 139
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 139), "clickable", [], "any", false, false, false, 139)) {
                // line 140
                yield "                                <i class=\"fas fa-external-link-alt toggle-ext-link d-none\"
                                   title=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("open-tab"), "html", null, true);
                yield "\"></i>
                            ";
            }
            // line 143
            yield "                        </th>
                    ";
        }
        // line 145
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 146
            yield "                        ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["column"], "tableHeader", [($context["currentView"] ?? null)], "method", false, false, false, 146);
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "                </tr>
                </thead>
                <tbody>
                ";
        // line 151
        $context["rowStatus"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["status"], "method", false, false, false, 151);
        // line 152
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 152));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 153
            yield "                    ";
            $context["trClass"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 153), "clickable", [], "any", false, false, false, 153)) ? (("clickableListRow " . CoreExtension::getAttribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [$context["model"]], "method", false, false, false, 153))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [$context["model"]], "method", false, false, false, 153)));
            // line 154
            yield "                    ";
            $context["trTitle"] = CoreExtension::getAttribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trTitle", [$context["model"]], "method", false, false, false, 154);
            // line 155
            yield "                    <tr class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trClass"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trTitle"] ?? null), "html", null, true);
            yield "\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 155)), "html", null, true);
            yield "\">
                        ";
            // line 156
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 156), "checkBoxes", [], "any", false, false, false, 156) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 156), "clickable", [], "any", false, false, false, 156))) {
                // line 157
                yield "                            <td class=\"cancelClickable p-0 text-center align-middle\">
                                ";
                // line 158
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 158), "checkBoxes", [], "any", false, false, false, 158)) {
                    // line 159
                    yield "                                    <div class=\"form-check form-check-inline m-0 toggle-ext-link\">
                                        <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\"
                                               value=\"";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 161), "html", null, true);
                    yield "\"/>
                                    </div>
                                ";
                }
                // line 164
                yield "                                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 164), "clickable", [], "any", false, false, false, 164)) {
                    // line 165
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 165)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"toggle-ext-link d-none\"
                                       onauxclick=\"\$(this).addClass('text-dark');\" title=\"";
                    // line 166
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("open-tab"), "html", null, true);
                    yield "\">
                                        <i class=\"fas fa-external-link-alt\"></i>
                                    </a>
                                ";
                }
                // line 170
                yield "                            </td>
                        ";
            }
            // line 172
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 172));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 173
                yield "                            ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["column"], "tableCell", [$context["model"]], "method", false, false, false, 173);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            yield "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 177
            yield "                    <tr class=\"table-warning\">
                        <td colspan=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((1 + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 178))), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "                </tbody>
            </table>
        </div>
        ";
        // line 185
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 185))) {
            // line 186
            yield "            <div class=\"table-responsive\">
                <table class=\"table table-sm table-hover mt-4 mb-0\">
                    <thead>
                    <tr>
                        <th></th>
                        ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 191));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 192
                yield "                            <th class=\"text-right text-capitalize\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 192)), "html", null, true);
                yield "</th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class=\"text-right\">";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("page-total-amount"), "html", null, true);
            yield "</td>
                        ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 199));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 200
                yield "                            <td class=\"text-right\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 200)), "html", null, true);
                yield "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            yield "                    </tr>
                    <tr>
                        <td class=\"text-right\">";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("total-amount"), "html", null, true);
            yield "</td>
                        ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 205));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 206
                yield "                            <td class=\"text-right\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 206)), "html", null, true);
                yield "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            yield "                    </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 213
        yield "        ";
        // line 214
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pages"] ?? null)) > 0)) {
            // line 215
            yield "            <div class=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 215), "card", [], "any", false, false, false, 215)) ? ("card-footer text-center") : ("pt-3 text-center"));
            yield "\">
                <div class=\"btn-group\">
                    ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 217));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 218
                yield "                        ";
                $context["btnClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 218)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 219
                yield "                        <button type=\"button\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btnClass"] ?? null), "html", null, true);
                yield "\"
                                onclick=\"listViewSetOffset('";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 220), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 220), "html", null, true);
                yield "');\">
                            ";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 221), "html", null, true);
                yield "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            yield "                </div>
            </div>
        ";
        }
        // line 227
        yield "    </div>
    <br/>
    ";
        // line 230
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 232
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 232), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 232), "listViewSetAction", ($context["fsc"] ?? null)], "method", false, false, false, 232);
        yield "
        </div>
    </div>
    ";
        // line 236
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 236)) {
            // line 237
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_filterSaveModal", [($context["currentView"] ?? null)], 237, $context, $this->getSourceContext());
            yield "
    ";
        }
        // line 239
        yield "</form>

";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 242));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 243
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "modal", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 243), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 243)], "method", false, false, false, 243);
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        yield "
";
        // line 297
        yield "
";
        // line 335
        yield "
";
        // line 356
        yield "
";
        // line 383
        yield "
";
        // line 399
        yield "
";
        return; yield '';
    }

    // line 247
    public function macro_filterButton($__currentView__ = null, $__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 248
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 248))) {
                // line 249
                yield "        ";
                $context["viewName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 249);
                // line 250
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 250)) {
                    // line 251
                    yield "            ";
                    // line 252
                    yield "            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 252), "html", null, true);
                    yield "?activetab=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["viewName"] ?? null), "html", null, true);
                    yield "\" class=\"btn btn-light\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
                    yield "\">
                <i class=\"fas fa-filter fa-fw\"></i> ";
                    // line 253
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
                    yield "
            </a>
        ";
                } else {
                    // line 256
                    yield "            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewShowFilters('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["viewName"] ?? null), "html", null, true);
                    yield "');\">
                <i class=\"fas fa-filter fa-fw\"></i> ";
                    // line 257
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("filters"), "html", null, true);
                    yield "
            </button>
            ";
                    // line 259
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 259) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 259), "saveFilters", [], "any", false, false, false, 259))) {
                        // line 260
                        yield "                ";
                        // line 261
                        yield "                <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\"
                        data-target=\"#savefilter";
                        // line 262
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["viewName"] ?? null), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save-filter"), "html", null, true);
                        yield "\">
                    <i class=\"fas fa-save fa-fw\"></i> ";
                        // line 263
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
                        yield "
                </button>
            ";
                    }
                    // line 266
                    yield "        ";
                }
                // line 267
                yield "        ";
                $context["saveFilters"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilters", [], "any", false, false, false, 267);
                // line 268
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["saveFilters"] ?? null))) {
                    // line 269
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["saveFilters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pageFilter"]) {
                        // line 270
                        yield "                ";
                        $context["icon"] = ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "nick", [], "any", false, false, false, 270))) ? ("fa-users") : ("fa-user"));
                        // line 271
                        yield "                ";
                        $context["filterDesc"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 271)) > 10)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 271), 0, 10) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 271)));
                        // line 272
                        yield "                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 272) == CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 272))) {
                            // line 273
                            yield "                    <div class=\"btn-group\">
                        ";
                            // line 275
                            yield "                        <button title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 275), "html", null, true);
                            yield "\" class=\"btn btn-light active\"
                                onclick=\"listViewSetLoadFilter('";
                            // line 276
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["viewName"] ?? null), "html", null, true);
                            yield "', '";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 276), "html", null, true);
                            yield "');\">
                            <i class=\"fas fa-filter fa-fw\"></i> ";
                            // line 277
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filterDesc"] ?? null), "html", null, true);
                            yield "
                        </button>
                        ";
                            // line 280
                            yield "                        <button type=\"button\" class=\"btn btn-light text-danger\"
                                title=\"";
                            // line 281
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("remove-filter"), "html", null, true);
                            yield "\"
                                onclick=\"listViewSetAction('";
                            // line 282
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["viewName"] ?? null), "html", null, true);
                            yield "', 'delete-filter');\">
                            <i class=\"fas fa-trash-alt fa-fw\"></i>
                        </button>
                    </div>
                ";
                        } else {
                            // line 287
                            yield "                    ";
                            // line 288
                            yield "                    <button title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 288), "html", null, true);
                            yield "\" class=\"btn btn-light\"
                            onclick=\"listViewSetLoadFilter('";
                            // line 289
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["viewName"] ?? null), "html", null, true);
                            yield "', '";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 289), "html", null, true);
                            yield "');\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
                            // line 290
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filterDesc"] ?? null), "html", null, true);
                            yield "
                    </button>
                ";
                        }
                        // line 293
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 294
                    yield "        ";
                }
                // line 295
                yield "    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 298
    public function macro_filterSaveModal($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 299
            yield "    ";
            $context["viewName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 299);
            // line 300
            yield "    <div class=\"modal\" id=\"savefilter";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["viewName"] ?? null), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save-filter"), "html", null, true);
            yield "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
            yield "</label>
                                <input type=\"text\" name=\"filter-description\" class=\"form-control noEnterKey\"
                                       autofocus=\"\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                        ";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            yield "
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\"
                            onclick=\"listViewSetAction('";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["viewName"] ?? null), "html", null, true);
            yield "', 'save-filter');\">
                        ";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("accept"), "html", null, true);
            yield "
                    </button>
                </div>
            </div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 336
    public function macro_colorsButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 337
            yield "    ";
            $context["legend"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["status"], "method", false, false, false, 337), "legend", [], "method", false, false, false, 337);
            // line 338
            yield "    ";
            if (($context["legend"] ?? null)) {
                // line 339
                yield "        ";
                $context["viewName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 339);
                // line 340
                yield "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                        aria-expanded=\"false\">
                    <i class=\"fas fa-fill-drip fa-fw\" aria-hidden=\"true\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right pb-0\">
                    <h6 class=\"dropdown-header\">
                        ";
                // line 348
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("colors"), "html", null, true);
                yield "
                    </h6>
                    ";
                // line 350
                yield ($context["legend"] ?? null);
                yield "
                </div>
            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 357
    public function macro_printButton($__fsc__ = null, $__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 358
            yield "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 364
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 364), "options", [], "method", false, false, false, 364));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 365
                yield "                <a href=\"#\" class=\"dropdown-item\"
                   onclick=\"listViewPrintAction('";
                // line 366
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 366), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "');\">
                    <i class=\"";
                // line 367
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 367), "html", null, true);
                yield " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 368
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 368)), "html", null, true);
                yield "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 371
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 371), "tools", [], "any", false, false, false, 371))) {
                // line 372
                yield "                <div class=\"dropdown-divider\"></div>
                ";
                // line 373
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 373), "tools", [], "method", false, false, false, 373));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 374
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 374)), "html", null, true);
                    yield "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 375
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 375), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 376
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 376)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 379
                yield "            ";
            }
            // line 380
            yield "        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 384
    public function macro_searchControl($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 385
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 385))) {
                // line 386
                yield "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 388), "html", null, true);
                yield "\" autocomplete=\"off\"
                       placeholder=\"";
                // line 389
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
                yield "\"/>
                <span class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 400
    public function macro_sortButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 401
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 401))) {
                // line 402
                yield "        <div class=\"btn-group\">
            <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"true\">
                ";
                // line 405
                $context["icon"] = ((((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 405)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 405)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == "ASC")) ? ("fas fa-sort-amount-up") : ("fas fa-sort-amount-down"));
                // line 406
                yield "                <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield " fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-lg-inline\">";
                // line 407
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 407)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 407)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["label"] ?? null) : null), "html", null, true);
                yield "</span>
                <span class=\"caret\"></span>
            </button>
            <div class=\"dropdown-menu dropdown-menu-right\">
                ";
                // line 411
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 411));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 412
                    yield "                    ";
                    $context["activeClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 412) == $context["key"])) ? (" active") : (""));
                    // line 413
                    yield "                    ";
                    $context["icon"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 413) == "ASC")) ? ("fa-solid fa-angles-up") : ("fa-solid fa-angles-down"));
                    // line 414
                    yield "                    <a class=\"dropdown-item";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeClass"] ?? null), "html", null, true);
                    yield "\" href=\"#\"
                       onclick=\"listViewSetOrder('";
                    // line 415
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 415), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "');\">
                        <i class=\"";
                    // line 416
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 416), "html", null, true);
                    yield "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 419
                yield "            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/ListView.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1128 => 419,  1117 => 416,  1111 => 415,  1106 => 414,  1103 => 413,  1100 => 412,  1096 => 411,  1089 => 407,  1084 => 406,  1082 => 405,  1077 => 402,  1074 => 401,  1062 => 400,  1046 => 389,  1042 => 388,  1038 => 386,  1035 => 385,  1023 => 384,  1015 => 380,  1012 => 379,  1003 => 376,  999 => 375,  994 => 374,  990 => 373,  987 => 372,  984 => 371,  975 => 368,  971 => 367,  965 => 366,  962 => 365,  958 => 364,  950 => 358,  937 => 357,  925 => 350,  920 => 348,  910 => 340,  907 => 339,  904 => 338,  901 => 337,  889 => 336,  876 => 328,  872 => 327,  866 => 324,  854 => 315,  841 => 305,  832 => 300,  829 => 299,  817 => 298,  810 => 295,  807 => 294,  801 => 293,  795 => 290,  789 => 289,  784 => 288,  782 => 287,  774 => 282,  770 => 281,  767 => 280,  762 => 277,  756 => 276,  751 => 275,  748 => 273,  745 => 272,  742 => 271,  739 => 270,  734 => 269,  731 => 268,  728 => 267,  725 => 266,  719 => 263,  713 => 262,  710 => 261,  708 => 260,  706 => 259,  701 => 257,  696 => 256,  690 => 253,  681 => 252,  679 => 251,  676 => 250,  673 => 249,  670 => 248,  657 => 247,  651 => 399,  648 => 383,  645 => 356,  642 => 335,  639 => 297,  636 => 245,  627 => 243,  623 => 242,  619 => 239,  613 => 237,  610 => 236,  604 => 232,  600 => 230,  596 => 227,  591 => 224,  582 => 221,  576 => 220,  571 => 219,  568 => 218,  564 => 217,  558 => 215,  555 => 214,  553 => 213,  546 => 208,  537 => 206,  533 => 205,  529 => 204,  525 => 202,  516 => 200,  512 => 199,  508 => 198,  502 => 194,  493 => 192,  489 => 191,  482 => 186,  479 => 185,  474 => 181,  463 => 178,  460 => 177,  454 => 175,  445 => 173,  440 => 172,  436 => 170,  429 => 166,  424 => 165,  421 => 164,  415 => 161,  411 => 159,  409 => 158,  406 => 157,  404 => 156,  395 => 155,  392 => 154,  389 => 153,  383 => 152,  381 => 151,  376 => 148,  367 => 146,  362 => 145,  358 => 143,  353 => 141,  350 => 140,  347 => 139,  341 => 136,  337 => 134,  335 => 133,  332 => 132,  330 => 131,  323 => 128,  321 => 127,  318 => 126,  316 => 125,  311 => 122,  302 => 119,  296 => 118,  291 => 117,  288 => 116,  284 => 115,  280 => 113,  277 => 112,  274 => 111,  268 => 107,  265 => 106,  262 => 104,  253 => 102,  249 => 101,  245 => 100,  240 => 99,  237 => 98,  230 => 94,  225 => 92,  220 => 90,  213 => 86,  206 => 82,  201 => 80,  199 => 79,  192 => 75,  188 => 74,  185 => 73,  182 => 72,  176 => 69,  173 => 68,  170 => 67,  163 => 63,  159 => 62,  156 => 61,  153 => 60,  150 => 59,  146 => 57,  140 => 55,  138 => 54,  134 => 53,  129 => 52,  125 => 50,  119 => 48,  117 => 47,  112 => 45,  107 => 44,  104 => 43,  102 => 42,  99 => 41,  94 => 38,  90 => 37,  86 => 36,  82 => 35,  78 => 34,  74 => 33,  69 => 31,  65 => 30,  59 => 27,  55 => 26,  51 => 25,  47 => 24,  43 => 22,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListView.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Master\\ListView.html.twig");
    }
}
