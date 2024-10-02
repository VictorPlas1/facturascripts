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

/* Master/EditListViewInLine.html.twig */
class __TwigTemplate_c4fdcfc3947eb76a5e068b05e2f7b08b extends Template
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
        // line 20
        $context["currentView"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        yield "
<script>
    var editListViewDeleteCancel = \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        yield "\";
    var editListViewDeleteConfirm = \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        yield "\";
    var editListViewDeleteMessage = \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        yield "\";
    var editListViewDeleteTitle = \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        yield "\";
</script>

<div class=\"";
        // line 29
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 29), "card", [], "any", false, false, false, 29)) ? ("") : ("container-fluid"));
        yield "\">
    ";
        // line 31
        yield "    <div class=\"row\">
        ";
        // line 32
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 32);
        // line 33
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 33), "", ($context["fsc"] ?? null)], "method", false, false, false, 33);
        yield "
    </div>

    ";
        // line 37
        yield "    <div>
        ";
        // line 38
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 38);
        // line 39
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 39);
        yield "
    </div>

    ";
        // line 43
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "btnNew", [], "any", false, false, false, 43)) {
            // line 44
            yield "        ";
            $context["formName"] = (("form" . CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44)) . "New");
            // line 45
            yield "        <form id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 46
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 48), "html", null, true);
            yield "\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-spin-action btn-sm btn-outline-success\" type=\"button\" data-toggle=\"collapse\" data-target=\"#";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "Collapse\" aria-expanded=\"false\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            yield "
                    </button>
                    &nbsp;
                    ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "title", [], "any", false, false, false, 56), "html", null, true);
            yield "
                </div>
                <div class=\"collapse\" id=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row align-items-end\">
                            <div class=\"col\">
                                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 63
                yield "                                    ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "edit", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 63)], "method", false, false, false, 63);
                yield "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                            </div>
                            <div class=\"col-sm-2 text-right\">
                                <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        // line 78
        yield "
    ";
        // line 80
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 81
            yield "        ";
            $context["formName"] = (("form" . CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 81)) . $context["counter"]);
            // line 82
            yield "        <form id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 83
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 85), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"code\" value=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 86), "html", null, true);
            yield "\"/>
            <div class=\"card shadow mb-2\"";
            // line 87
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "selected", [], "any", false, false, false, 87) == CoreExtension::getAttribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 87))) {
                yield " id=\"EditListViewSelected\"";
            }
            yield ">
                <div class=\"form-row align-items-end\">
                    <div class=\"col pt-2\">
                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 91
                yield "                            ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "edit", [$context["model"]], "method", false, false, false, 91);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                    </div>
                    <div class=\"col-sm-2 text-right pb-2 pr-3\">
                        ";
            // line 95
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 95), "btnDelete", [], "any", false, false, false, 95)) {
                // line 96
                yield "                            <button type=\"button\" class=\"btn btn-spin-action btn-sm btn-danger\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
                yield "\"
                                    onclick=\"editListViewDelete('";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 97) . $context["counter"]), "html", null, true);
                yield "');\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 101
            yield "                        ";
            // line 102
            yield "                        ";
            $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 102);
            // line 103
            yield "                        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, (CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 103) . $context["counter"])], "method", false, false, false, 103);
            yield "
                        ";
            // line 104
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 104), "btnUndo", [], "any", false, false, false, 104)) {
                // line 105
                yield "                            <button class=\"btn btn-spin-action btn-sm btn-secondary\" type=\"reset\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("undo"), "html", null, true);
                yield "\">
                                <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 109
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 109), "btnSave", [], "any", false, false, false, 109)) {
                // line 110
                yield "                            <button class=\"btn btn-spin-action btn-sm btn-primary\" type=\"submit\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
                yield "\">
                                <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 114
            yield "                    </div>
                </div>
            </div>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "
    ";
        // line 121
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 121)) > 0)) {
            // line 122
            yield "        ";
            $context["formName"] = (("form" . CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 122)) . "Offset");
            // line 123
            yield "        <form id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 124), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"offset\" value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 125), "html", null, true);
            yield "\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group\">
                    ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 129
                yield "                        ";
                $context["btnClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 129)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 130
                yield "                        <button type=\"button\" class=\"btn-spin-action ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btnClass"] ?? null), "html", null, true);
                yield "\" onclick=\"editListViewSetOffset('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 130), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 130), "html", null, true);
                yield "');\">
                            ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 131), "html", null, true);
                yield "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "                </div>
            </div>
        </form>
    ";
        }
        // line 138
        yield "
    ";
        // line 140
        yield "    <div class=\"row\">
        ";
        // line 141
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 141);
        // line 142
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 142), "", ($context["fsc"] ?? null)], "method", false, false, false, 142);
        yield "
    </div>
</div>

";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 148
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "modal", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 148), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 148)], "method", false, false, false, 148);
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/EditListViewInLine.html.twig";
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
        return array (  350 => 148,  346 => 147,  338 => 142,  336 => 141,  333 => 140,  330 => 138,  324 => 134,  315 => 131,  306 => 130,  303 => 129,  299 => 128,  293 => 125,  289 => 124,  284 => 123,  281 => 122,  278 => 121,  275 => 119,  265 => 114,  257 => 110,  254 => 109,  246 => 105,  244 => 104,  239 => 103,  236 => 102,  234 => 101,  227 => 97,  222 => 96,  220 => 95,  216 => 93,  207 => 91,  203 => 90,  195 => 87,  191 => 86,  187 => 85,  182 => 83,  177 => 82,  174 => 81,  169 => 80,  166 => 78,  154 => 69,  148 => 65,  139 => 63,  135 => 62,  128 => 58,  123 => 56,  117 => 53,  112 => 51,  106 => 48,  101 => 46,  96 => 45,  93 => 44,  90 => 43,  83 => 39,  81 => 38,  78 => 37,  71 => 33,  69 => 32,  66 => 31,  62 => 29,  56 => 26,  52 => 25,  48 => 24,  44 => 23,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditListViewInLine.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Master\\EditListViewInLine.html.twig");
    }
}
