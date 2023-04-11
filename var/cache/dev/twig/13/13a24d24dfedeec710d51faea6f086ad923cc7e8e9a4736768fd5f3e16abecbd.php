<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_235ad6f5628eec36b6793985c6c66b32eccfd9134ad5ced6e02dc80345896103 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<section class=\"review-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titie-section wow fadeInDown animated \">
                    <h1>Login</h1>
                </div>
            </div>
        </div>

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "                <div class=\"alert alert-warning\" role=\"alert\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 31
            echo "                <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\"  class=\"center-block contact-form\">
                                        <h2 class=\"center-block justify-content-center\">You already have an account? Great! Login here.</h2>
                                        ";
        // line 35
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "                                            <div class=\"col-lg-6 col-md-8 p-1 m-1 alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
            echo "</div>
                                        ";
        }
        // line 38
        echo "                                        <div  class=\"center-block input-group\">

                                            <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"center-block form-control\" placeholder=\"Email address\" required autofocus>
                                        </div>
                                        <div class=\"center-block input-group\">

                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control col-md-6 justify-content-center\" placeholder=\"Password\" required>
                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                            >
                                        </div>

                                    <div class=\"input-group\">

                                        <div>
                                            <input type=\"submit\" class=\"pull-right contact-submit\"value=\"Sign IN\"/>

                                        </div>

                                    </div>
                                    <div class=\"input-group\">


                                    </div>
                                    <div class=\"d-flex col-md-6 justify-content-center\">
                                        <div class=\"p-3 m-3\">
                                            <h4>Don't have an account? <b><a style=\"color:darkslategrey\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" >Register Now</a></b></h4>
                                            <h4>Forget password? It's ok.<b><a style=\"color:darkslategrey\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgotten_password");
        echo "\" >Recover here</a></b></h4>
                                        </div>

                                    </div>
                                </form>



    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 65,  209 => 64,  188 => 46,  178 => 38,  172 => 36,  170 => 35,  164 => 33,  155 => 31,  150 => 30,  141 => 27,  138 => 26,  133 => 25,  124 => 22,  121 => 21,  116 => 20,  107 => 17,  104 => 16,  100 => 15,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Log in!{% endblock %}
{% block body %}
<section class=\"review-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titie-section wow fadeInDown animated \">
                    <h1>Login</h1>
                </div>
            </div>
        </div>

            {% for message in app.flashes('message') %}
                <div class=\"alert alert-success\" role=\"alert\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('warning') %}
                <div class=\"alert alert-warning\" role=\"alert\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('danger') %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for flashError in app.flashes('verify_email_error') %}
                <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
            {% endfor %}
                                <form action=\"{{ path('app_login') }}\" method=\"post\"  class=\"center-block contact-form\">
                                        <h2 class=\"center-block justify-content-center\">You already have an account? Great! Login here.</h2>
                                        {% if error %}
                                            <div class=\"col-lg-6 col-md-8 p-1 m-1 alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                        {% endif %}
                                        <div  class=\"center-block input-group\">

                                            <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"center-block form-control\" placeholder=\"Email address\" required autofocus>
                                        </div>
                                        <div class=\"center-block input-group\">

                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control col-md-6 justify-content-center\" placeholder=\"Password\" required>
                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   value=\"{{ csrf_token('authenticate') }}\"
                                            >
                                        </div>

                                    <div class=\"input-group\">

                                        <div>
                                            <input type=\"submit\" class=\"pull-right contact-submit\"value=\"Sign IN\"/>

                                        </div>

                                    </div>
                                    <div class=\"input-group\">


                                    </div>
                                    <div class=\"d-flex col-md-6 justify-content-center\">
                                        <div class=\"p-3 m-3\">
                                            <h4>Don't have an account? <b><a style=\"color:darkslategrey\" href=\"{{ path('app_register') }}\" >Register Now</a></b></h4>
                                            <h4>Forget password? It's ok.<b><a style=\"color:darkslategrey\" href=\"{{ path('app_forgotten_password') }}\" >Recover here</a></b></h4>
                                        </div>

                                    </div>
                                </form>



    </div>
</section>

{% endblock %}
", "security/login.html.twig", "C:\\Users\\21628\\Desktop\\Random\\emna\\Pidev\\templates\\security\\login.html.twig");
    }
}
