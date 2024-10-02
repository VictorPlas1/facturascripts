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

/* Master/MicroTemplate.html.twig */
class __TwigTemplate_69b8f0595613c70c676c3ff1a049a715 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["GoogleTagManager"] = $this->macros["GoogleTagManager"] = $this->loadTemplate("Macro/GoogleTagManager.html.twig", "Master/MicroTemplate.html.twig", 21)->unwrap();
        // line 22
        yield "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\" xml:lang=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\" >
    <head>
        ";
        // line 25
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_head", [], 25, $context, $this->getSourceContext());
        yield "
        ";
        // line 26
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 34
        yield "        ";
        yield from $this->unwrap()->yieldBlock('icons', $context, $blocks);
        // line 38
        yield "        ";
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 42
        yield "        ";
        // line 43
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["css"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 44
            yield "            <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css"], "html", null, true);
            yield "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 51
        yield "        ";
        // line 52
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["js"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 53
            yield "            <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js"], "html", null, true);
            yield "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        ";
        if (($context["debugBarRender"] ?? null)) {
            // line 56
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 56);
            yield "
        ";
        }
        // line 58
        yield "    </head>
    ";
        // line 59
        yield from $this->unwrap()->yieldBlock('fullBody', $context, $blocks);
        // line 78
        yield "</html>";
        return; yield '';
    }

    // line 26
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
        yield "</title>
            <meta name=\"description\" content=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("meta-description"), "html", null, true);
        yield "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        ";
        return; yield '';
    }

    // line 34
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "            <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        yield "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        yield "\" />
        ";
        return; yield '';
    }

    // line 38
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        yield "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\"/>
        ";
        return; yield '';
    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/js/all.min.js"), "html", null, true);
        yield "\"></script>
        ";
        return; yield '';
    }

    // line 59
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        yield "        <body>
            ";
        // line 61
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_body", [], 61, $context, $this->getSourceContext());
        yield "
            ";
        // line 62
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 70
        yield "            ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 72
        yield "            ";
        if (($context["debugBarRender"] ?? null)) {
            // line 73
            yield "                ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 73);
            yield "
            ";
        }
        // line 75
        yield "            <!-- execution time: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        yield " s -->
        </body>
    ";
        return; yield '';
    }

    // line 62
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        yield "                ";
        yield from         $this->loadTemplate("Macro/Toasts.html.twig", "Master/MicroTemplate.html.twig", 63)->unwrap()->yield($context);
        // line 64
        yield "                ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MicroTemplate.html.twig", 64)->unwrap();
        // line 65
        yield "                ";
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["error", "critical"], "danger"], 65, $context, $this->getSourceContext());
        yield "
                ";
        // line 66
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["warning"], "warning"], 66, $context, $this->getSourceContext());
        yield "
                ";
        // line 67
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["notice"], "success"], 67, $context, $this->getSourceContext());
        yield "
                ";
        // line 68
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["info"], "info"], 68, $context, $this->getSourceContext());
        yield "
            ";
        return; yield '';
    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MicroTemplate.html.twig";
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
        return array (  260 => 70,  253 => 68,  249 => 67,  245 => 66,  240 => 65,  237 => 64,  234 => 63,  230 => 62,  221 => 75,  215 => 73,  212 => 72,  209 => 70,  207 => 62,  203 => 61,  200 => 60,  196 => 59,  189 => 49,  185 => 48,  180 => 47,  176 => 46,  169 => 40,  164 => 39,  160 => 38,  153 => 36,  148 => 35,  144 => 34,  134 => 29,  130 => 28,  127 => 27,  123 => 26,  118 => 78,  116 => 59,  113 => 58,  107 => 56,  104 => 55,  95 => 53,  90 => 52,  88 => 51,  85 => 46,  76 => 44,  71 => 43,  69 => 42,  66 => 38,  63 => 34,  61 => 26,  57 => 25,  50 => 23,  47 => 22,  45 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MicroTemplate.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Master\\MicroTemplate.html.twig");
    }
}
