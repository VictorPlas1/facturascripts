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

/* Master/MenuBghTemplate.html.twig */
class __TwigTemplate_12f7253fc0ba0ed6421b47de6941fd8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $macros["GoogleTagManager"] = $this->macros["GoogleTagManager"] = $this->loadTemplate("Macro/GoogleTagManager.html.twig", "Master/MenuBghTemplate.html.twig", 20)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/MenuBghTemplate.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <body>
    ";
        // line 25
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_body", [], 25, $context, $this->getSourceContext());
        yield "
    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 29
        yield "    <div class=\"bg-light pt-3\">
        ";
        // line 30
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 33
        yield "        ";
        yield from $this->unwrap()->yieldBlock('bodyHeaderOptions', $context, $blocks);
        // line 36
        yield "    </div>
    ";
        // line 37
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 40
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
            // line 41
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/MenuBghTemplate.html.twig", 41)->unwrap()->yield($context);
            // line 42
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
        // line 43
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
            // line 44
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["path"] ?? null) : null), "Master/MenuBghTemplate.html.twig", 44)->unwrap()->yield($context);
            // line 45
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
        // line 46
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 46);
        yield "
    <br/>
    <br/>
    <br/>
    <!-- execution time: ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        yield " s -->
    </body>
";
        return; yield '';
    }

    // line 26
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "        ";
        yield from $this->yieldParentBlock("navbar", $context, $blocks);
        yield "
    ";
        return; yield '';
    }

    // line 30
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "            ";
        yield from $this->yieldParentBlock("messages", $context, $blocks);
        yield "
        ";
        return; yield '';
    }

    // line 33
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "            ";
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
        ";
        return; yield '';
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "        ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MenuBghTemplate.html.twig";
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
        return array (  206 => 38,  202 => 37,  194 => 34,  190 => 33,  182 => 31,  178 => 30,  170 => 27,  166 => 26,  158 => 50,  150 => 46,  136 => 45,  133 => 44,  115 => 43,  101 => 42,  98 => 41,  80 => 40,  78 => 37,  75 => 36,  72 => 33,  70 => 30,  67 => 29,  65 => 26,  61 => 25,  58 => 24,  54 => 23,  49 => 21,  47 => 20,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuBghTemplate.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Master\\MenuBghTemplate.html.twig");
    }
}
