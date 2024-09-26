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

/* Macro/Utils.html.twig */
class __TwigTemplate_e448639c48d0e0f0f8eff79d29e83726 extends Template
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
        yield "
";
        // line 35
        yield "
";
        // line 49
        yield "
";
        return; yield '';
    }

    // line 22
    public function macro_message($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 23
            yield "    ";
            $context["messages"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", ["master", ($context["levels"] ?? null)], "method", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", ["database", ($context["levels"] ?? null)], "method", false, false, false, 23));
            // line 24
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)) > 0)) {
                // line 25
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
                yield "\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 30
                    yield "                <div>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 30);
                    yield "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                yield "        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function macro_messageCompat($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", [], "method", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                yield "        ";
                if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "level", [], "any", false, false, false, 39), ($context["levels"] ?? null)) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 39) == "master"))) {
                    // line 40
                    yield "            <div class=\"alert alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
                    yield "\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div>";
                    // line 44
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 44);
                    yield "</div>
            </div>
        ";
                }
                // line 47
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function macro_popoverTitle($__msg__ = null, $__position__ = "auto", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "msg" => $__msg__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["msg"] ?? null)) > 0)) {
                yield "data-toggle=\"popover\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
                yield "\" data-trigger=\"hover\" data-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
                yield "\"";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Macro/Utils.html.twig";
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
        return array (  158 => 52,  145 => 51,  135 => 47,  129 => 44,  121 => 40,  118 => 39,  113 => 38,  99 => 37,  91 => 32,  82 => 30,  78 => 29,  70 => 25,  67 => 24,  64 => 23,  50 => 22,  44 => 49,  41 => 35,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Utils.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Macro\\Utils.html.twig");
    }
}
