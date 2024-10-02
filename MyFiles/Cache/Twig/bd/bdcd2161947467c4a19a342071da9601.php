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

/* Dashboard.html.twig */
class __TwigTemplate_e6e28e43181e905fb5a6dea66518ba68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'sectionLinks' => [$this, 'block_sectionLinks'],
            'sectionStats' => [$this, 'block_sectionStats'],
            'sections' => [$this, 'block_sections'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Dashboard.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    <div class=\"bg-light pt-4 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h4\">
                        ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 28), "name", [], "any", false, false, false, 28) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 28), "homepage", [], "any", false, false, false, 28))) {
            // line 29
            yield "                            <a class=\"btn btn-sm btn-secondary align-bottom active\"
                               href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 30), "html", null, true);
            yield "?defaultPage=FALSE\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            yield "\">
                                <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        } else {
            // line 34
            yield "                            <a class=\"btn btn-sm btn-secondary align-bottom\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 34), "html", null, true);
            yield "?defaultPage=TRUE\"
                               title=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            yield "\">
                                <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        }
        // line 39
        yield "                        <span class=\"ml-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        ";
        // line 46
        yield from $this->unwrap()->yieldBlock('sectionLinks', $context, $blocks);
        // line 53
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "showBackupWarning", [], "method", false, false, false, 53)) {
            // line 54
            yield "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card bg-warning shadow mb-3\">
                        <div class=\"card-body\">
                            <h2 class=\"h3\">
                                <i class=\"fas fa-save\"></i> ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dashboard-backup"), "html", null, true);
            yield "
                            </h2>
                            <p class=\"card-text\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dashboard-backup-p"), "html", null, true);
            yield "</p>
                            <ul class=\"mb-0\">
                                <li>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dasboard-backup-li1"), "html", null, true);
            yield "</li>
                                <li>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dasboard-backup-li2"), "html", null, true);
            yield "</li>
                                <li>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dasboard-backup-li3"), "html", null, true);
            yield "</li>
                            </ul>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"https://facturascripts.com/plugins/backup\" target=\"_blank\" rel=\"nofollow\"
                               class=\"btn btn-secondary\"> Backup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 77
        yield "        ";
        yield from $this->unwrap()->yieldBlock('sectionStats', $context, $blocks);
        // line 80
        yield "        ";
        yield from $this->unwrap()->yieldBlock('sections', $context, $blocks);
        // line 93
        yield "    </div>
";
        return; yield '';
    }

    // line 46
    public function block_sectionLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        yield "            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 49
        yield CoreExtension::callMacro($macros["_self"], "macro_sectionLinks", [($context["fsc"] ?? null)], 49, $context, $this->getSourceContext());
        yield "
                </div>
            </div>
        ";
        return; yield '';
    }

    // line 77
    public function block_sectionStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        yield "            ";
        yield CoreExtension::callMacro($macros["_self"], "macro_sectionStats", [($context["fsc"] ?? null)], 78, $context, $this->getSourceContext());
        yield "
        ";
        return; yield '';
    }

    // line 80
    public function block_sections($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        yield "            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 83
        if (CoreExtension::inFilter("receipts", CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 83))) {
            // line 84
            yield "                        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_sectionReceipts", [($context["fsc"] ?? null)], 84, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 86
        yield "                    ";
        if (CoreExtension::inFilter("low-stock", CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 86))) {
            // line 87
            yield "                        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_sectionLowStock", [($context["fsc"] ?? null)], 87, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 89
        yield "                </div>
            </div>
            ";
        // line 91
        yield CoreExtension::callMacro($macros["_self"], "macro_sectionNews", [($context["fsc"] ?? null)], 91, $context, $this->getSourceContext());
        yield "
        ";
        return; yield '';
    }

    // line 96
    public function macro_drawStatsBox($__fsc__ = null, $__group__ = null, $__color__ = null, $__ismoney__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "group" => $__group__,
            "color" => $__color__,
            "ismoney" => $__ismoney__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 97
            yield "    <div class=\"card shadow mb-3\">
        <div class=\"card-body p-2 text-white ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "\">
            <h2 class=\"h5 text-center mb-0\">
                ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(($context["group"] ?? null)), "html", null, true);
            yield "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table mb-0\">
                ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "stats", [], "any", false, false, false, 105)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["group"] ?? null)] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 106
                yield "                    <tr>
                        <td>";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()($context["key"]), "html", null, true);
                yield "</td>
                        ";
                // line 108
                $context["color"] = ((($context["value"] < 0)) ? (" text-danger") : (""));
                // line 109
                yield "                        ";
                if (($context["ismoney"] ?? null)) {
                    // line 110
                    yield "                            <td class=\"text-right";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('money')->getCallable()($context["value"]), "html", null, true);
                    yield "</td>
                        ";
                } else {
                    // line 112
                    yield "                            <td class=\"text-right\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "</td>
                        ";
                }
                // line 114
                yield "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "            </table>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function macro_sectionLinks($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 122
            yield "    <div class=\"card shadow mb-3\">
        <div class=\"pl-3 pt-1 pr-3 pb-3\">
            <div class=\"form-row\">
                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fas fa-plus fa-fw\"></i> ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("create"), "html", null, true);
            yield "
                    </h2>
                    <ul class=\"mb-1\">
                        ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "createLinks", [], "any", false, false, false, 130));
            foreach ($context['_seq'] as $context["link"] => $context["label"]) {
                // line 131
                yield "                            <li>
                                <a href=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["link"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()($context["label"]), "html", null, true);
                yield "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "                    </ul>
                </div>
                ";
            // line 137
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 137)) {
                // line 138
                yield "                    <div class=\"col-md\">
                        <h2 class=\"h4 mt-3 mb-1\">
                            <i class=\"fas fa-folder-open fa-fw\"></i> ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("open"), "html", null, true);
                yield "
                        </h2>
                        <ul class=\"mb-1\">
                            ";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 143));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 144
                    yield "                                <li>
                                    ";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 145)), "html", null, true);
                    yield "
                                    <a href=\"";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 146), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 146), "html", null, true);
                    yield "</a>
                                    <span class=\"text-muted\">";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "date", [], "any", false, false, false, 147), "html", null, true);
                    yield "</span>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "                        </ul>
                    </div>
                ";
            }
            // line 153
            yield "                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fas fa-question-circle fa-fw\"></i> ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help"), "html", null, true);
            yield "
                    </h2>
                    <ul class=\"mb-1\">
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/configuracion-15\" rel=\"nofollow\"
                               target=\"_blank\">Configuración</a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/primeros-pasos-303\" rel=\"nofollow\"
                               target=\"_blank\">Primeros pasos</a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/problemas-frecuentes-469\" rel=\"nofollow\"
                               target=\"_blank\">Problemas frecuentes</a>
                        </li>
                        <li>
                            <a href=\"https://forms.gle/WhGgWWB6EbWjBNna6\" rel=\"nofollow\"
                               target=\"_blank\">Encuesta de uso 2022/23
                                <i class=\"fas fa-clipboard-check\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/contacto\" rel=\"nofollow\" target=\"_blank\">Soporte
                                <i class=\"far fa-comment-dots\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 187
    public function macro_sectionLowStock($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 188
            yield "    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-pallet fa-fw\"></i> ";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("minimum-stock"), "html", null, true);
            yield "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("reference"), "html", null, true);
            yield "</th>
                    <th>";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("warehouse"), "html", null, true);
            yield "</th>
                    <th class=\"text-right\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("minimum-stock"), "html", null, true);
            yield "</th>
                    <th class=\"text-right\">";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("available"), "html", null, true);
            yield "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "lowStock", [], "any", false, false, false, 205));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 206
                yield "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "url", [], "method", false, false, false, 206), "html", null, true);
                yield "\">
                        <td>";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "referencia", [], "any", false, false, false, 207), "html", null, true);
                yield "</td>
                        <td>";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "codalmacen", [], "any", false, false, false, 208), "html", null, true);
                yield "</td>
                        <td class=\"text-right\">";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "stockmin", [], "any", false, false, false, 209)), "html", null, true);
                yield "</td>
                        <td class=\"text-right\">";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "disponible", [], "any", false, false, false, 210)), "html", null, true);
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "                </tbody>
            </table>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 219
    public function macro_sectionNews($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 220
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "news", [], "any", false, false, false, 220));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 221
                yield "        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow mb-3\">
                    <div class=\"card-header\">
                        <span class=\"float-right\">";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, false, 225), "html", null, true);
                yield "</span>
                        <a href=\"";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "url", [], "any", false, false, false, 226), "html", null, true);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 226);
                yield "</a>
                    </div>
                    <div class=\"card-body p-3\">
                        <div class=\"form-row align-items-center\">
                            <div class=\"col-auto\">
                                <a href=\"";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "url", [], "any", false, false, false, 231), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-outline-secondary\">
                                    <i class=\"far fa-newspaper fa-3x\"></i>
                                </a>
                            </div>
                            <div class=\"col\">";
                // line 235
                yield CoreExtension::getAttribute($this->env, $this->source, $context["news"], "body", [], "any", false, false, false, 235);
                yield "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 244
    public function macro_sectionReceipts($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 245
            yield "    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <span class=\"float-right badge badge-danger\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("unpaid"), "html", null, true);
            yield "</span>
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-dollar-sign fa-fw\"></i>
                ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("receipts"), "html", null, true);
            yield "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("customer"), "html", null, true);
            yield "</th>
                    <th>";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
            yield "</th>
                    <th class=\"text-right\">";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("amount"), "html", null, true);
            yield "</th>
                    <th class=\"text-right\">";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("expiration"), "html", null, true);
            yield "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 264
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "receipts", [], "any", false, false, false, 264));
            foreach ($context['_seq'] as $context["_key"] => $context["receipt"]) {
                // line 265
                yield "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "url", [], "method", false, false, false, 265), "html", null, true);
                yield "\">
                        <td>";
                // line 266
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "getSubject", [], "method", false, false, false, 266), "nombre", [], "any", false, false, false, 266);
                yield "</td>
                        <td>";
                // line 267
                yield CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "observaciones", [], "any", false, false, false, 267);
                yield "</td>
                        <td class=\"text-right text-nowrap\">";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "importe", [], "any", false, false, false, 268)), "html", null, true);
                yield "</td>
                        <td class=\"text-right text-nowrap\">";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "vencimiento", [], "any", false, false, false, 269), "html", null, true);
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receipt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            yield "                </tbody>
            </table>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 278
    public function macro_sectionStats($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 279
            yield "    <div class=\"form-row\">
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 281
            yield CoreExtension::callMacro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "purchases", "bg-danger", true], 281, $context, $this->getSourceContext());
            yield "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 284
            yield CoreExtension::callMacro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "sales", "bg-success", true], 284, $context, $this->getSourceContext());
            yield "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 287
            yield CoreExtension::callMacro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "taxes", "bg-warning", true], 287, $context, $this->getSourceContext());
            yield "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 290
            yield CoreExtension::callMacro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "new-customers", "bg-info", false], 290, $context, $this->getSourceContext());
            yield "
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Dashboard.html.twig";
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
        return array (  701 => 290,  695 => 287,  689 => 284,  683 => 281,  679 => 279,  667 => 278,  657 => 272,  648 => 269,  644 => 268,  640 => 267,  636 => 266,  631 => 265,  627 => 264,  620 => 260,  616 => 259,  612 => 258,  608 => 257,  598 => 250,  592 => 247,  588 => 245,  576 => 244,  559 => 235,  552 => 231,  542 => 226,  538 => 225,  532 => 221,  527 => 220,  515 => 219,  505 => 213,  496 => 210,  492 => 209,  488 => 208,  484 => 207,  479 => 206,  475 => 205,  468 => 201,  464 => 200,  460 => 199,  456 => 198,  446 => 191,  441 => 188,  429 => 187,  392 => 155,  388 => 153,  383 => 150,  374 => 147,  368 => 146,  364 => 145,  361 => 144,  357 => 143,  351 => 140,  347 => 138,  345 => 137,  341 => 135,  330 => 132,  327 => 131,  323 => 130,  317 => 127,  310 => 122,  298 => 121,  289 => 116,  282 => 114,  276 => 112,  268 => 110,  265 => 109,  263 => 108,  259 => 107,  256 => 106,  252 => 105,  244 => 100,  239 => 98,  236 => 97,  221 => 96,  214 => 91,  210 => 89,  204 => 87,  201 => 86,  195 => 84,  193 => 83,  189 => 81,  185 => 80,  177 => 78,  173 => 77,  164 => 49,  160 => 47,  156 => 46,  150 => 93,  147 => 80,  144 => 77,  129 => 65,  125 => 64,  121 => 63,  116 => 61,  111 => 59,  104 => 54,  101 => 53,  99 => 46,  88 => 39,  81 => 35,  76 => 34,  67 => 30,  64 => 29,  62 => 28,  55 => 23,  51 => 22,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Dashboard.html.twig");
    }
}
