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

/* AdminPlugins.html.twig */
class __TwigTemplate_71d560343d7ad76678cca8cdc657735e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AdminPlugins.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 28), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 31
        if (((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 31), "homepage", [], "any", false, false, false, 31))) {
            // line 32
            yield "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
            yield "?defaultPage=FALSE\"
                           title=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            yield "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 37
            yield "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 37), "html", null, true);
            yield "?defaultPage=TRUE\"
                           title=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            yield "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 42
        yield "                </div>
                ";
        // line 43
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 44
            yield "                    <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            yield "</span>
                    </button>
                ";
        }
        // line 50
        yield "                <div class=\"btn-group\">
                    <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 51), "html", null, true);
        yield "?action=rebuild&multireqtoken=";
        yield $this->env->getFunction('formToken')->getCallable()(false);
        yield "\"
                       onclick=\"animateSpinner('add')\" class=\"btn btn-spin-action btn-sm btn-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("rebuild"), "html", null, true);
        yield "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->env->getFunction('trans')->getCallable()((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 60)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null))), "html", null, true);
        yield "
                    <i class=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 61)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["icon"] ?? null) : null), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("installed-plugins"), "html", null, true);
        yield "
                ";
        // line 70
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 70)) > 0)) {
            // line 71
            yield "                    <span class=\"badge badge-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 71)), "html", null, true);
            yield "</span>
                ";
        }
        // line 73
        yield "            </a>
        </li>
        ";
        // line 75
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 76
            yield "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more-plugins"), "html", null, true);
            yield "</span>
                    ";
            // line 80
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 80)) > 0)) {
                // line 81
                yield "                        <span class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 81)), "html", null, true);
                yield "</span>
                    ";
            }
            // line 83
            yield "                </a>
            </li>
        ";
        }
        // line 86
        yield "    </ul>
";
        return; yield '';
    }

    // line 89
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 93
        yield CoreExtension::callMacro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null)], 93, $context, $this->getSourceContext());
        yield "
        </div>
        ";
        // line 95
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 96
            yield "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 97
            yield CoreExtension::callMacro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null)], 97, $context, $this->getSourceContext());
            yield "
            </div>
        ";
        }
        // line 100
        yield "    </div>

    ";
        // line 103
        yield "    ";
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 104
            yield "        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 104), "html", null, true);
            yield "\" class=\"form\" enctype=\"multipart/form-data\" id=\"f_add_plugins\" method=\"post\"
              name=\"upload-plugins\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 106
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                <i class=\"fa-solid fa-file-zipper mr-2\"></i> ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add-new-plugin"), "html", null, true);
            yield "
                            </h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            yield "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 119) < 99)) {
                // line 120
                yield "                            <div class=\"alert alert-warning mb-0\">
                                ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 121)]), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 124
            yield "                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("select-plugin-zip-file"), "html", null, true);
            yield "<br/>
                                <input type=\"file\" name=\"plugin[]\" accept=\"application/zip\" multiple required/>
                                ";
            // line 128
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 128) >= 99)) {
                // line 129
                yield "                                    <small class=\"form-text text-muted\">
                                        ";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 130)]), "html", null, true);
                yield "
                                    </small>
                                ";
            }
            // line 133
            yield "                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-spin-action btn-secondary\" data-dismiss=\"modal\">
                                    ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            yield "
                                </button>
                                <button type=\"submit\" class=\"btn btn-spin-action btn-success\">
                                    ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("continue"), "html", null, true);
            yield "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        return; yield '';
    }

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 152
        if (($this->env->getFunction('config')->getCallable()("disable_rm_plugins", false) == false)) {
            // line 153
            yield "        <script>
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 156
            yield $this->env->getFunction('trans')->getCallable()("confirm-delete");
            yield "\",
                    message: \"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
            yield "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            yield "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            yield "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            animateSpinner('add');
                            window.location = \"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 171), "html", null, true);
            yield "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName
                                + \"\\u0026\" + \"multireqtoken=";
            // line 172
            yield $this->env->getFunction('formToken')->getCallable()(false);
            yield "\";
                        }
                    }
                });
            }

            \$(document).ready(function () {
                searchList('#querySearchPlugin', '#all-plugins .card', '.card-title');
                searchList('#querySearchInstalledPlugins', '#installed-plugins .item-plugin', '.plugin-name');

                // si los archivos son demasiado grandes, no se pueden subir
                \$(\"#f_add_plugins\").submit(function (e) {
                    let size = 0;
                    let files = document.querySelector('input[type=file]').files;
                    for (let i = 0; i < files.length; i++) {
                        size += files[i].size;
                    }

                    if (size > ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 190), "html", null, true);
            yield " * 1024 * 1024) { // MB
                        e.preventDefault();
                        alert('";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-file-too-big", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 192)]), "html", null, true);
            yield "');
                        animateSpinner('remove');
                    }
                });
            });

            function searchList(querySelectorInput, querySelectorItem, querySelectorPluginName) {
                \$(querySelectorInput).on('keyup', function (e) {
                    const query = this.value.toLowerCase().trim();
                    \$(querySelectorItem).each(function (index, value) {
                        \$(value).toggle(\$(querySelectorPluginName, value).text().toLowerCase().trim().includes(query));
                    });
                });
            }
        </script>
    ";
        }
        return; yield '';
    }

    // line 210
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 211
            yield "    ";
            if ((($context["value"] ?? null) < 1)) {
                // line 212
                yield "        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 217
($context["value"] ?? null) < 2)) {
                // line 218
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 223
($context["value"] ?? null) < 3)) {
                // line 224
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 229
($context["value"] ?? null) < 4)) {
                // line 230
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 235
($context["value"] ?? null) < 5)) {
                // line 236
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } else {
                // line 242
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 250
    public function macro_showAllPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 251
            yield "    <div class=\"p-2\">
        <input type=\"text\" class=\"form-control shadow-sm\" id=\"querySearchPlugin\" placeholder=\"";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
            yield "\"/>
    </div>
    <div class=\"card-columns pl-2 pr-2\" id=\"all-plugins\">
        ";
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 255));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 256
                yield "            ";
                $context["extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 256) > 2)) ? ("border-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 256) == 0)) ? ("border-danger") : ("border-warning"))));
                // line 257
                yield "            <div class=\"card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraClass"] ?? null), "html", null, true);
                yield " shadow-sm\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "idplugin", [], "any", false, false, false, 257), "html", null, true);
                yield "\">
                <div class=\"card-body p-2\">
                    <h5 class=\"card-title\">";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 259), "html", null, true);
                yield " v";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 259), "html", null, true);
                yield "</h5>
                    <p class=\"card-text\">";
                // line 260
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 260), 0, 300), "html", null, true));
                yield "</p>
                </div>
                <div class=\"card-footer p-2\">
                    ";
                // line 263
                $context["extraBtnClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 263) > 2)) ? ("btn-outline-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 263) == 0)) ? ("btn-outline-danger") : ("btn-outline-warning"))));
                // line 264
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 264), "html", null, true);
                yield "\" class=\"btn ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraBtnClass"] ?? null), "html", null, true);
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
                yield "</a>
                    <span class=\"ml-2 text-danger\" title=\"";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("health"), "html", null, true);
                yield "\">
                        ";
                // line 266
                yield CoreExtension::callMacro($macros["_self"], "macro_healthStatus", [CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 266)], 266, $context, $this->getSourceContext());
                yield "
                    </span>
                </div>
            </div>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 271
                yield "            <div class=\"text-center bg-warning rounded\">
                <h2>";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                yield "</h2>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 278
    public function macro_showInstalledPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 279
            yield "    <div class=\"m-2 mb-3\">
        <input type=\"text\" class=\"form-control border-dark\" id=\"querySearchInstalledPlugins\"
               placeholder=\"";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
            yield "\"/>
    </div>

    <div class=\"card border-success m-2 mb-3\">
        <div class=\"card-header border-success\">";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enabled-plugins"), "html", null, true);
            yield "</div>
        ";
            // line 286
            yield CoreExtension::callMacro($macros["_self"], "macro_tablePlugins", [Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 286), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "enabled", [], "any", false, false, false, 286); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "order", [], "any", false, false, false, 286) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "order", [], "any", false, false, false, 286)); }), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 286)], 286, $context, $this->getSourceContext());
            yield "
    </div>

    <div class=\"card border-dark m-2\">
        <div class=\"card-header border-dark\">";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("disabled-plugins"), "html", null, true);
            yield "</div>
        ";
            // line 291
            yield CoreExtension::callMacro($macros["_self"], "macro_tablePlugins", [Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 291), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "enabled", [], "any", false, false, false, 291) == false); }), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 291)], 291, $context, $this->getSourceContext());
            yield "
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 295
    public function macro_tablePlugins($__pluginList__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pluginList" => $__pluginList__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 296
            yield "    <div class=\"table-responsive\" id=\"installed-plugins\">
        <table class=\"table table-striped table-hover mb-0\">
            <thead>
            <tr>
                <th>";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("name"), "html", null, true);
            yield "</th>
                <th class=\"text-right\">";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("version"), "html", null, true);
            yield "</th>
                <th>";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
            yield "</th>
                <th class=\"text-right pr-3\">";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("actions"), "html", null, true);
            yield "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 307
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pluginList"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 308
                yield "                ";
                $context["trClass"] = "table-danger";
                // line 309
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 309)) {
                    // line 310
                    yield "                    ";
                    $context["trClass"] = "table-success";
                    // line 311
                    yield "                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 311)) {
                    // line 312
                    yield "                    ";
                    $context["trClass"] = "";
                    // line 313
                    yield "                ";
                }
                // line 314
                yield "                <tr class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trClass"] ?? null), "html", null, true);
                yield " item-plugin\">
                    <td class=\"plugin-name\">";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 315), "html", null, true);
                yield "</td>
                    <td class=\"text-right\">
                        ";
                // line 317
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 317) == 0)) {
                    // line 318
                    yield "                            <span class=\"text-danger\">v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 318), "html", null, true);
                    yield "</span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 319
$context["plugin"], "version", [], "any", false, false, false, 319) < 1)) {
                    // line 320
                    yield "                            <span class=\"text-warning\">v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 320), "html", null, true);
                    yield "</span>
                        ";
                } else {
                    // line 322
                    yield "                            v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 322), "html", null, true);
                    yield "
                        ";
                }
                // line 324
                yield "                    </td>
                    <td>
                        ";
                // line 326
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 326), "html", null, true));
                yield "
                        ";
                // line 327
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 327)) {
                    // line 328
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 328), "html", null, true);
                    yield "\" target=\"_blank\" class=\"ml-2\">
                                ";
                    // line 329
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
                    yield " <i class=\"fas fa-external-link-alt\"></i>
                            </a>
                        ";
                }
                // line 332
                yield "                        <br/>
                        ";
                // line 333
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "require", [], "any", false, false, false, 333));
                foreach ($context['_seq'] as $context["_key"] => $context["requiredPluginName"]) {
                    // line 334
                    yield "                            <div class=\"badge badge-secondary\">
                                ";
                    // line 335
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-needed", ["%pluginName%" => $context["requiredPluginName"]]), "html", null, true);
                    yield "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requiredPluginName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 338
                yield "                    </td>
                    <td class=\"text-right text-nowrap\">
                        ";
                // line 340
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 340)) {
                    // line 341
                    yield "                            <a href=\"Updater\" class=\"btn btn-spin-action btn-sm btn-info mr-1\"
                               title=\"";
                    // line 342
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
                    yield "\">
                                <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                }
                // line 346
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 346)) {
                    // line 347
                    yield "                            <a class=\"btn btn-sm btn-secondary btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"";
                    // line 348
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                    yield "?action=disable&amp;plugin=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 348), "html", null, true);
                    yield "&amp;multireqtoken=";
                    yield $this->env->getFunction('formToken')->getCallable()(false);
                    yield "\">
                                <i class=\"fa-solid fa-toggle-off mr-1\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 350
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("disable"), "html", null, true);
                    yield "</span>
                            </a>
                            <br/>
                            <small>";
                    // line 353
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-order", ["%num%" => CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "order", [], "any", false, false, false, 353)]), "html", null, true);
                    yield "</small>
                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 354
$context["plugin"], "compatible", [], "any", false, false, false, 354)) {
                    // line 355
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 355)) {
                        // line 356
                        yield "                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-sm btn-warning dropdown-toggle\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        ";
                        // line 359
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"Updater\">
                                            <i class=\"fas fa-cloud-download-alt fa-fw mr-1\" aria-hidden=\"true\"></i>
                                            ";
                        // line 364
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
                        yield "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\"
                                           href=\"";
                        // line 368
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                        yield "?action=enable&amp;plugin=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 368), "html", null, true);
                        yield "&amp;multireqtoken=";
                        yield $this->env->getFunction('formToken')->getCallable()(false);
                        yield "\">
                                            <i class=\"fas fa-check fa-fw mr-1\" aria-hidden=\"true\"></i>
                                            ";
                        // line 370
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "
                                        </a>
                                    </div>
                                </div>
                            ";
                    } else {
                        // line 375
                        yield "                                <a class=\"btn btn-sm btn-success btn-spin-action\" onclick=\"animateSpinner('add');\"
                                   href=\"";
                        // line 376
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                        yield "?action=enable&amp;plugin=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 376), "html", null, true);
                        yield "&amp;multireqtoken=";
                        yield $this->env->getFunction('formToken')->getCallable()(false);
                        yield "\">
                                    <i class=\"fa-solid fa-toggle-on mr-1\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                        // line 378
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "</span>
                                </a>
                            ";
                    }
                    // line 381
                    yield "                        ";
                } else {
                    // line 382
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "compatibilityDescription", [], "method", false, false, false, 382), "html", null, true);
                    yield "
                        ";
                }
                // line 384
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 384) == false) && ($this->env->getFunction('config')->getCallable()("disable_rm_plugins", false) == false))) {
                    // line 385
                    yield "                            <a class=\"btn btn-sm btn-danger ml-2 btn-spin-action\" href=\"#\"
                               title=\"";
                    // line 386
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
                    yield "\" onclick=\"deletePlugin('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 386), "html", null, true);
                    yield "');\">
                                <i class=\"fas fa-trash-alt\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                }
                // line 390
                yield "                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 393
                yield "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                yield "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 397
            yield "            </tbody>
        </table>
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
        return "AdminPlugins.html.twig";
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
        return array (  895 => 397,  886 => 394,  883 => 393,  876 => 390,  867 => 386,  864 => 385,  861 => 384,  855 => 382,  852 => 381,  846 => 378,  837 => 376,  834 => 375,  826 => 370,  817 => 368,  810 => 364,  802 => 359,  797 => 356,  794 => 355,  792 => 354,  788 => 353,  782 => 350,  773 => 348,  770 => 347,  767 => 346,  760 => 342,  757 => 341,  755 => 340,  751 => 338,  742 => 335,  739 => 334,  735 => 333,  732 => 332,  726 => 329,  721 => 328,  719 => 327,  715 => 326,  711 => 324,  705 => 322,  699 => 320,  697 => 319,  692 => 318,  690 => 317,  685 => 315,  680 => 314,  677 => 313,  674 => 312,  671 => 311,  668 => 310,  665 => 309,  662 => 308,  657 => 307,  650 => 303,  646 => 302,  642 => 301,  638 => 300,  632 => 296,  619 => 295,  610 => 291,  606 => 290,  599 => 286,  595 => 285,  588 => 281,  584 => 279,  572 => 278,  565 => 275,  556 => 272,  553 => 271,  543 => 266,  539 => 265,  530 => 264,  528 => 263,  522 => 260,  516 => 259,  508 => 257,  505 => 256,  500 => 255,  494 => 252,  491 => 251,  479 => 250,  467 => 242,  459 => 236,  457 => 235,  450 => 230,  448 => 229,  441 => 224,  439 => 223,  432 => 218,  430 => 217,  423 => 212,  420 => 211,  408 => 210,  386 => 192,  381 => 190,  360 => 172,  356 => 171,  346 => 164,  340 => 161,  333 => 157,  329 => 156,  324 => 153,  322 => 152,  317 => 151,  313 => 150,  298 => 139,  292 => 136,  287 => 133,  281 => 130,  278 => 129,  276 => 128,  271 => 126,  267 => 124,  261 => 121,  258 => 120,  256 => 119,  249 => 115,  244 => 113,  234 => 106,  228 => 104,  225 => 103,  221 => 100,  215 => 97,  212 => 96,  210 => 95,  205 => 93,  198 => 90,  194 => 89,  188 => 86,  183 => 83,  177 => 81,  175 => 80,  171 => 79,  166 => 76,  164 => 75,  160 => 73,  154 => 71,  152 => 70,  148 => 69,  137 => 61,  133 => 60,  124 => 54,  116 => 51,  113 => 50,  107 => 47,  102 => 44,  100 => 43,  97 => 42,  90 => 38,  85 => 37,  78 => 33,  73 => 32,  71 => 31,  63 => 28,  54 => 23,  50 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPlugins.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\AdminPlugins.html.twig");
    }
}
