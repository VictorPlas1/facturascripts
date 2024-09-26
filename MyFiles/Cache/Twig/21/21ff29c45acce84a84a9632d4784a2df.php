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

/* Macro/Menu.html.twig */
class __TwigTemplate_920083cc2b2da83e4e2353ce2ece93ae extends Template
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
        return; yield '';
    }

    // line 21
    public function macro_showMenu($__menuItem__ = null, $__parent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menuItem" => $__menuItem__,
            "parent" => $__parent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 22
            yield "    ";
            $macros["macros"] = $this;
            // line 23
            yield "    ";
            $context["active"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "active", [], "any", false, false, false, 23)) ? (" active") : (""));
            // line 24
            yield "    ";
            $context["menuId"] = ((Twig\Extension\CoreExtension::testEmpty(($context["parent"] ?? null))) ? (("menu-" . CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 24))) : ((($context["parent"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "name", [], "any", false, false, false, 24))));
            // line 25
            yield "
    ";
            // line 26
            if (Twig\Extension\CoreExtension::testEmpty(($context["parent"] ?? null))) {
                // line 27
                yield "        ";
                // line 28
                yield "        <li class=\"nav-item dropdown";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                ";
                // line 30
                $context["title"] = CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 30);
                // line 31
                yield "                <span class=\"d-md-none\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["title"] ?? null), 0, 2), "html", null, true);
                yield "</span>
                <span class=\"d-none d-md-inline-block\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</span>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["menuId"] ?? null), "html", null, true);
                yield "\">
    ";
            } else {
                // line 36
                yield "        ";
                // line 37
                yield "        <li class=\"dropdown-submenu\">
            <a class=\"dropdown-item";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\" href=\"#\">
                <i class=\"fas fa-folder-open fa-fw\" aria-hidden=\"true\"></i>
                &nbsp;";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
                yield "
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["menuId"] ?? null), "html", null, true);
                yield "\">
    ";
            }
            // line 44
            yield "
    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "menu", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                yield "        ";
                $context["extraClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 46)) ? (" active") : (""));
                // line 47
                yield "
        ";
                // line 48
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "menu", [], "any", false, false, false, 48))) {
                    // line 49
                    yield "            <li>
                <a class=\"dropdown-item";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraClass"] ?? null), "html", null, true);
                    yield "\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 50), "html", null, true);
                    yield "\">
                    <i class=\"";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 51), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i> &nbsp;";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 51), "html", null, true);
                    yield "
                </a>
            </li>
        ";
                } else {
                    // line 55
                    yield "            ";
                    yield CoreExtension::callMacro($macros["macros"], "macro_showMenu", [$context["item"], ($context["menuId"] ?? null)], 55, $context, $this->getSourceContext());
                    yield "
        ";
                }
                // line 57
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "    </ul>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Macro/Menu.html.twig";
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
        return array (  161 => 58,  155 => 57,  149 => 55,  140 => 51,  134 => 50,  131 => 49,  129 => 48,  126 => 47,  123 => 46,  119 => 45,  116 => 44,  111 => 42,  106 => 40,  101 => 38,  98 => 37,  96 => 36,  91 => 34,  86 => 32,  81 => 31,  79 => 30,  73 => 28,  71 => 27,  69 => 26,  66 => 25,  63 => 24,  60 => 23,  57 => 22,  44 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Menu.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Macro\\Menu.html.twig");
    }
}
