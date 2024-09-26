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

/* Macro/GoogleTagManager.html.twig */
class __TwigTemplate_63bb13c3a186f34cc20b34a6b027f6e2 extends Template
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
        // line 32
        yield "
";
        return; yield '';
    }

    // line 21
    public function macro_body(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 22
            yield "    ";
            $context["googleTagManager"] = (((Twig\Extension\CoreExtension::constantIsDefined("GOOGLE_TAG_MANAGER") &&  !(null === Twig\Extension\CoreExtension::constant("GOOGLE_TAG_MANAGER")))) ? (Twig\Extension\CoreExtension::constant("GOOGLE_TAG_MANAGER")) : (""));
            // line 23
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["googleTagManager"] ?? null))) {
                // line 24
                yield "        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src=\"https://www.googletagmanager.com/ns.html?id=";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["googleTagManager"] ?? null), "html", null, true);
                yield "\" height=\"0\" width=\"0\"
                    style=\"display:none;visibility:hidden\"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function macro_head(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    ";
            $context["googleTagManager"] = (((Twig\Extension\CoreExtension::constantIsDefined("GOOGLE_TAG_MANAGER") &&  !(null === Twig\Extension\CoreExtension::constant("GOOGLE_TAG_MANAGER")))) ? (Twig\Extension\CoreExtension::constant("GOOGLE_TAG_MANAGER")) : (""));
            // line 35
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["googleTagManager"] ?? null))) {
                // line 36
                yield "        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["googleTagManager"] ?? null), "html", null, true);
                yield "');</script>
        <!-- End Google Tag Manager -->
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
        return "Macro/GoogleTagManager.html.twig";
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
        return array (  112 => 49,  97 => 36,  94 => 35,  91 => 34,  80 => 33,  68 => 26,  64 => 24,  61 => 23,  58 => 22,  47 => 21,  41 => 32,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/GoogleTagManager.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Macro\\GoogleTagManager.html.twig");
    }
}
