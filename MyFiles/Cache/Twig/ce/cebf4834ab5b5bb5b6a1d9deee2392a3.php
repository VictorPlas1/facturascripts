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

/* Login/Login.html.twig */
class __TwigTemplate_c4423429d1435386576e35fd67dd9389 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        yield "\" method=\"post\" class=\"form\">
                    ";
        // line 9
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
                    <input type=\"hidden\" name=\"action\" value=\"login\">
                    <div class=\"card mt-4\">
                        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        yield "\">
                            ";
        // line 13
        $context["idfile"] = $this->env->getFunction('settings')->getCallable()("default", "idloginimage", 0);
        // line 14
        yield "                            ";
        yield CoreExtension::callMacro($macros["_self"], "macro_loadLogo", [($context["idfile"] ?? null)], 14, $context, $this->getSourceContext());
        yield "
                        </a>
                        <div class=\"card-body\">
                            <p class=\"card-text text-center\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("login-text"), "html", null, true);
        yield "</p>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        yield "\" required autocomplete=\"off\"
                                           autofocus/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("password"), "html", null, true);
        yield "\" required autocomplete=\"off\"/>
                                </div>
                                <a href=\"#\" class=\"btn btn-block btn-link\" data-toggle=\"modal\"
                                   data-target=\"#newPasswordModal\">
                                    ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("i-forgot-password"), "html", null, true);
        yield "
                                </a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-block btn-primary mb-4\">
                                ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("login"), "html", null, true);
        yield "
                            </button>
                        </div>
                        <div class=\"card-footer text-center\">
                            <p>
                                FacturaScripts es un software libre de contabilidad, facturación y CRM.
                                No dude en consultar la web oficial o las cuentas de facebook, twitter o youtube.
                            </p>
                            <a href=\"https://facturascripts.com\" rel=\"nofollow\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-question-circle mr-1\"></i> facturascripts.com
                            </a>
                            <a href=\"https://www.facebook.com/facturascripts/\" rel=\"nofollow\" class=\"btn btn-primary\"
                               title=\"facebook\"> <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"https://twitter.com/facturascripts\" rel=\"nofollow\" class=\"btn btn-info\"
                               title=\"twitter\"> <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"https://www.youtube.com/channel/UCtsptMQYpW2wJZkvak6NYng\" rel=\"nofollow\"
                               class=\"btn btn-danger\" title=\"youtube\"> <i class=\"fab fa-youtube\"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form action=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        yield "\" method=\"post\" class=\"form\">
        ";
        // line 73
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
        <input type=\"hidden\" name=\"action\" value=\"change-password\">
        <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-user-lock mr-2\"></i> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new-password"), "html", null, true);
        yield "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <a href=\"https://facturascripts.com/publicaciones/he-olvidado-mi-contrasena\" rel=\"nofollow\"
                           target=\"_blank\" class=\"btn btn-block btn-link mb-3\">
                            ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("need-help-password"), "html", null, true);
        yield "
                        </a>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        yield "\" required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new-password"), "html", null, true);
        yield "\" required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("repeat-new-password"), "html", null, true);
        yield "\"
                                       required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("database"), "html", null, true);
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\"
                                       placeholder=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("db-password"), "html", null, true);
        yield "\" autocomplete=\"off\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
        yield "</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        return; yield '';
    }

    // line 147
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <style>
        body {
            background-color: #333A40;
        }
    </style>
";
        return; yield '';
    }

    // line 156
    public function macro_loadLogo($__idfile__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "idfile" => $__idfile__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 157
            yield "    ";
            $context["url"] = "Dinamic/Assets/Images/horizontal-logo.png";
            // line 158
            yield "    ";
            if ((($context["idfile"] ?? null) > 0)) {
                // line 159
                yield "        ";
                $context["attached"] = $this->env->getFunction('attachedFile')->getCallable()(($context["idfile"] ?? null));
                // line 160
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["attached"] ?? null), "filename", [], "any", false, false, false, 160))) {
                    // line 161
                    yield "            ";
                    $context["url"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attached"] ?? null), "url", ["download-permanent"], "method", false, false, false, 161);
                    // line 162
                    yield "        ";
                }
                // line 163
                yield "    ";
            }
            // line 164
            yield "    <img class=\"card-img-top\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(($context["url"] ?? null)), "html", null, true);
            yield "\" alt=\"FacturaScripts\"/>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Login/Login.html.twig";
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
        return array (  310 => 164,  307 => 163,  304 => 162,  301 => 161,  298 => 160,  295 => 159,  292 => 158,  289 => 157,  277 => 156,  264 => 148,  260 => 147,  248 => 139,  240 => 134,  229 => 126,  221 => 121,  207 => 110,  193 => 99,  180 => 89,  168 => 80,  158 => 73,  154 => 72,  125 => 46,  118 => 42,  111 => 38,  96 => 26,  84 => 17,  77 => 14,  75 => 13,  71 => 12,  65 => 9,  61 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login/Login.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Login\\Login.html.twig");
    }
}
