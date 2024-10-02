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

/* Master/EditView.html.twig */
class __TwigTemplate_2393cefc0206927c3062ae064db8ddf6 extends Template
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
        $context["action"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 21), "exists", [], "method", false, false, false, 21)) ? ("edit") : ("insert"));
        // line 22
        $context["fieldCount"] = 0;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            yield "    ";
            $context["fieldCount"] = (($context["fieldCount"] ?? null) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 24)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
<script>
    function editViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        yield "\",
            message: \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        yield "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        yield "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        yield "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

";
        // line 55
        yield "<div class=\"row\">
    ";
        // line 56
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 56);
        // line 57
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 57), "", ($context["fsc"] ?? null)], "method", false, false, false, 57);
        yield "
</div>

<form id=\"form";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 60), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
    ";
        // line 61
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 63), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 64), "primaryColumnValue", [], "method", false, false, false, 64), "html", null, true);
        yield "\"/>
    <div class=\"";
        // line 65
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 65), "card", [], "any", false, false, false, 65)) ? ("card shadow") : (""));
        yield "\">
        <div class=\"";
        // line 66
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 66), "card", [], "any", false, false, false, 66)) ? ("card-body") : ("container-fluid"));
        yield "\">
            <div class=\"row\">
                <div class=\"col-12 text-right\">
                    ";
        // line 70
        yield "                    ";
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 70);
        // line 71
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 71);
        yield "
                    ";
        // line 72
        if (((($context["fieldCount"] ?? null) > 30) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 72), "btnSave", [], "any", false, false, false, 72))) {
            // line 73
            yield "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "</span>
                        </button>
                    ";
        }
        // line 78
        yield "                </div>
            </div>
            <div class=\"form-row\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 82
            yield "                    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "edit", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 82)], "method", false, false, false, 82);
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "            </div>
        </div>
        <div class=\"";
        // line 86
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 86), "card", [], "any", false, false, false, 86)) ? ("card-footer p-2") : ("container-fluid"));
        yield "\">
            <div class=\"form-row\">
                ";
        // line 88
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 88) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 88), "btnDelete", [], "any", false, false, false, 88))) {
            // line 89
            yield "                    <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 91), "html", null, true);
            yield "');\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            yield "</span>
                        </button>
                    </div>
                ";
        }
        // line 97
        yield "                ";
        $context["extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 97) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 97), "btnDelete", [], "any", false, false, false, 97))) ? ("text-center") : (""));
        // line 98
        yield "                <div class=\"col ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraClass"] ?? null), "html", null, true);
        yield "\">
                    ";
        // line 100
        yield "                    ";
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 100);
        // line 101
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 101)], "method", false, false, false, 101);
        yield "
                </div>
                <div class=\"col-auto\">
                    ";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 104), "btnUndo", [], "any", false, false, false, 104)) {
            // line 105
            yield "                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("undo"), "html", null, true);
            yield "</span>
                        </button>
                    ";
        }
        // line 110
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 110), "btnSave", [], "any", false, false, false, 110)) {
            // line 111
            yield "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "</span>
                        </button>
                    ";
        }
        // line 116
        yield "                </div>
            </div>
        </div>
    </div>
</form>

<br/>

";
        // line 125
        yield "<div class=\"row\">
    ";
        // line 126
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 126);
        // line 127
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 127), "", ($context["fsc"] ?? null)], "method", false, false, false, 127);
        yield "
</div>

";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 131));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 132
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "modal", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 132), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 132)], "method", false, false, false, 132);
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
        return "Master/EditView.html.twig";
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
        return array (  273 => 132,  269 => 131,  262 => 127,  260 => 126,  257 => 125,  247 => 116,  241 => 113,  237 => 111,  234 => 110,  228 => 107,  224 => 105,  222 => 104,  215 => 101,  212 => 100,  207 => 98,  204 => 97,  197 => 93,  192 => 91,  188 => 89,  186 => 88,  181 => 86,  177 => 84,  168 => 82,  164 => 81,  159 => 78,  153 => 75,  149 => 73,  147 => 72,  142 => 71,  139 => 70,  133 => 66,  129 => 65,  125 => 64,  121 => 63,  117 => 62,  113 => 61,  109 => 60,  102 => 57,  100 => 56,  97 => 55,  78 => 38,  72 => 35,  65 => 31,  61 => 30,  55 => 26,  48 => 24,  44 => 23,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditView.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Master\\EditView.html.twig");
    }
}
