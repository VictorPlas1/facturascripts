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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_8d2749a47cd75f63cf85e00861c6d504 extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'navbarMenuIcon' => [$this, 'block_navbarMenuIcon'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $macros["GoogleTagManager"] = $this->macros["GoogleTagManager"] = $this->loadTemplate("Macro/GoogleTagManager.html.twig", "Master/MenuTemplate.html.twig", 20)->unwrap();
        // line 21
        yield "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\"
      xml:lang=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\">
<head>
    ";
        // line 25
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_head", [], 25, $context, $this->getSourceContext());
        yield "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "HeadFirst"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 27)->unwrap()->yield($context);
            // line 28
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "    ";
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 37
        yield "    ";
        yield from $this->unwrap()->yieldBlock('icons', $context, $blocks);
        // line 42
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "CssBefore"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 43)->unwrap()->yield($context);
            // line 44
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    ";
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 50
        yield "    ";
        // line 51
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["css"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 52
            yield "        <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css"], "html", null, true);
            yield "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "CssAfter"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 55)->unwrap()->yield($context);
            // line 56
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsHeadBefore"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 58)->unwrap()->yield($context);
            // line 59
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 69
        yield "    ";
        // line 70
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["js"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 71
            yield "        <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js"], "html", null, true);
            yield "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsHeadAfter"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 74
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_4 = $context["item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 74)->unwrap()->yield($context);
            // line 75
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "    ";
        if (($context["debugBarRender"] ?? null)) {
            // line 77
            yield "        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 77);
            yield "
    ";
        }
        // line 79
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "HeadEnd"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_5 = $context["item"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 80)->unwrap()->yield($context);
            // line 81
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "</head>
";
        // line 83
        yield from $this->unwrap()->yieldBlock('fullBody', $context, $blocks);
        // line 188
        yield "</html>";
        return; yield '';
    }

    // line 29
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <title>";
        // line 31
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 31);
        yield "</title>
        <meta name=\"description\" content=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("meta-description"), "html", null, true);
        yield "\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"generator\" content=\"FacturaScripts\"/>
        <meta name=\"robots\" content=\"noindex\"/>
    ";
        return; yield '';
    }

    // line 37
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        yield "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"180x180\"
              href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        yield "\"/>
    ";
        return; yield '';
    }

    // line 45
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        yield "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        yield "?v=6\"/>
    ";
        return; yield '';
    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.locales.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/js/all.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        yield "?v=6\"></script>
    ";
        return; yield '';
    }

    // line 83
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        yield "    <body>
    ";
        // line 85
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_body", [], 85, $context, $this->getSourceContext());
        yield "
    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "BodyFirst"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_6 = $context["item"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 87)->unwrap()->yield($context);
            // line 88
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "    ";
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 153
        yield "    <div class=\"pt-3\">
        ";
        // line 154
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 168
        yield "        ";
        yield from $this->unwrap()->yieldBlock('bodyHeaderOptions', $context, $blocks);
        // line 170
        yield "    </div>
    ";
        // line 171
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 173
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsFooter"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 174
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_7 = $context["item"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 174)->unwrap()->yield($context);
            // line 175
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "BodyEnd"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 177
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_8 = $context["item"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 177)->unwrap()->yield($context);
            // line 178
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "    ";
        if (($context["debugBarRender"] ?? null)) {
            // line 180
            yield "        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 180);
            yield "
    ";
        }
        // line 182
        yield "    <br/>
    <br/>
    <br/>
    <!-- execution time: ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        yield " s -->
    </body>
";
        return; yield '';
    }

    // line 89
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        yield "        <nav class=\"navbar navbar-expand navbar-dark bg-primary sticky-top d-print-none\">
            ";
        // line 91
        yield from $this->unwrap()->yieldBlock('navbarContent', $context, $blocks);
        // line 151
        yield "        </nav>
    ";
        return; yield '';
    }

    // line 91
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        yield "                <a class=\"navbar-brand d-none d-sm-inline\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 92), "homepage", [], "any", false, false, false, 92)), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("homepage"), "html", null, true);
        yield "\">
                    <img src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/logo-white.png"), "html", null, true);
        yield "\" width=\"30\" height=\"30\"
                         class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                    <span class=\"d-none d-xl-inline-block\">";
        // line 95
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 95), "nombrecorto", [], "any", false, false, false, 95);
        yield "</span>
                </a>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"navbar-nav pt-1\">
                        ";
        // line 99
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 99)->unwrap();
        // line 100
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 101
            yield "                            ";
            yield CoreExtension::callMacro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 101, $context, $this->getSourceContext());
            yield "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                    </ul>
                    <ul class=\"navbar-nav flex-row ml-auto\">
                        ";
        // line 105
        yield from $this->unwrap()->yieldBlock('navbarMenuIcon', $context, $blocks);
        // line 148
        yield "                    </ul>
                </div>
            ";
        return; yield '';
    }

    // line 105
    public function block_navbarMenuIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "MenuIconBefore"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 107
            yield "                                ";
            yield from             $this->loadTemplate((($__internal_compile_9 = $context["item"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 107)->unwrap()->yield($context);
            // line 108
            yield "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "                            <li class=\"nav-item";
        yield (((($context["template"] ?? null) == "MegaSearch.html.twig")) ? (" active") : (""));
        yield "\"
                                title=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
        yield "\">
                                <a class=\"nav-link\" href=\"MegaSearch\" id=\"menuIconSearch\">
                                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"nav-item\" title=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help"), "html", null, true);
        yield "\">
                                <a class=\"nav-link\" href=\"https://facturascripts.com/ayuda\" rel=\"nofollow\"
                                   target=\"_blank\" id=\"menuIconHelp\">
                                    <i class=\"fas fa-question-circle\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\" id=\"menuIconUser\"
                                   title=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        yield "\">
                                    <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 128), "url", [], "method", false, false, false, 128), "html", null, true);
        yield "\">
                                        <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 129), "nick", [], "any", false, false, false, 129), "html", null, true);
        yield "
                                    </a>
                                    <a class=\"dropdown-item send-email\" href=\"SendMail\">
                                        <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i>
                                        ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("send-mail"), "html", null, true);
        yield "
                                    </a>
                                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "MenuIconUser"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            yield "                                        ";
            yield from             $this->loadTemplate((($__internal_compile_10 = $context["item"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 136)->unwrap()->yield($context);
            // line 137
            yield "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        yield "?action=logout&multireqtoken=";
        yield $this->env->getFunction('formToken')->getCallable()(false);
        yield "\">
                                        <i class=\"fas fa-door-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("logout"), "html", null, true);
        yield "
                                    </a>
                                </div>
                            </li>
                            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "MenuIconAfter"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 145
            yield "                                ";
            yield from             $this->loadTemplate((($__internal_compile_11 = $context["item"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 145)->unwrap()->yield($context);
            // line 146
            yield "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "                        ";
        return; yield '';
    }

    // line 154
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        yield "            ";
        yield from         $this->loadTemplate("Macro/Toasts.html.twig", "Master/MenuTemplate.html.twig", 155)->unwrap()->yield($context);
        // line 156
        yield "            ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 156)->unwrap();
        // line 157
        yield "            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 160
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["error", "critical"], "danger"], 160, $context, $this->getSourceContext());
        yield "
                        ";
        // line 161
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["warning"], "warning"], 161, $context, $this->getSourceContext());
        yield "
                        ";
        // line 162
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["notice"], "success"], 162, $context, $this->getSourceContext());
        yield "
                        ";
        // line 163
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["info"], "info"], 163, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>
            </div>
        ";
        return; yield '';
    }

    // line 168
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 171
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
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
        return array (  874 => 171,  866 => 168,  856 => 163,  852 => 162,  848 => 161,  844 => 160,  839 => 157,  836 => 156,  833 => 155,  829 => 154,  824 => 147,  810 => 146,  807 => 145,  790 => 144,  783 => 140,  777 => 139,  774 => 138,  760 => 137,  757 => 136,  740 => 135,  735 => 133,  728 => 129,  724 => 128,  717 => 124,  705 => 115,  697 => 110,  692 => 109,  678 => 108,  675 => 107,  657 => 106,  653 => 105,  646 => 148,  644 => 105,  640 => 103,  631 => 101,  626 => 100,  624 => 99,  617 => 95,  612 => 93,  605 => 92,  601 => 91,  595 => 151,  593 => 91,  590 => 90,  586 => 89,  578 => 185,  573 => 182,  567 => 180,  564 => 179,  550 => 178,  547 => 177,  529 => 176,  515 => 175,  512 => 174,  494 => 173,  492 => 171,  489 => 170,  486 => 168,  484 => 154,  481 => 153,  478 => 89,  464 => 88,  461 => 87,  444 => 86,  440 => 85,  437 => 84,  433 => 83,  426 => 67,  422 => 66,  418 => 65,  414 => 64,  410 => 63,  406 => 62,  401 => 61,  397 => 60,  390 => 48,  386 => 47,  381 => 46,  377 => 45,  370 => 40,  364 => 38,  360 => 37,  350 => 32,  346 => 31,  343 => 30,  339 => 29,  334 => 188,  332 => 83,  329 => 82,  315 => 81,  312 => 80,  294 => 79,  288 => 77,  285 => 76,  271 => 75,  268 => 74,  250 => 73,  241 => 71,  236 => 70,  234 => 69,  231 => 60,  217 => 59,  214 => 58,  196 => 57,  182 => 56,  179 => 55,  161 => 54,  152 => 52,  147 => 51,  145 => 50,  142 => 45,  128 => 44,  125 => 43,  107 => 42,  104 => 37,  101 => 29,  87 => 28,  84 => 27,  67 => 26,  63 => 25,  58 => 23,  54 => 22,  51 => 21,  49 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuTemplate.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Master\\MenuTemplate.html.twig");
    }
}
