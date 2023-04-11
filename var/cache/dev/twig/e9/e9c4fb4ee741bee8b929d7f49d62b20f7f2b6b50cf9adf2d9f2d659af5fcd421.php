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

/* registration/register.html.twig */
class __TwigTemplate_b010794df89c59999ef3e4eb5ab01da9bc575cfde9e1d35328cf11c606f287cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"news-letter-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titie-section wow fadeInDown animated \">
                    <h1>Register</h1>
                </div>
            </div>
        </div>
                                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "                                            <div class=\"alert alert-success\" role=\"alert\">
                                                ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "                                            <div class=\"alert alert-warning\" role=\"alert\">
                                                ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 32
            echo "                                            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
                                        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                        <form  method=\"post\"  class=\"contact-form\">
                                                <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
                                                    <h4 style=\"color:white\">Sign Up in Seconds!</h4>
                                                </div>
                                                <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
                                                    <h4 style=\"color:white\">Signup using your Email address</h4>
                                                </div>
                                                <div class=\"col-lg-6  col-md-8 p-6 m-12\">
                                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), 'errors');
        echo "
                                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), 'label', ["label" => "Name"]);
        echo "
                                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-contact"]]);
        echo "
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-6 m-6\">
                                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), 'errors');
        echo "
                                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "prenom", [], "any", false, false, false, 50), 'label', ["label" => "Last Name"]);
        echo "
                                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "prenom", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-contact"]]);
        echo "
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "numtel", [], "any", false, false, false, 54), 'errors');
        echo "
                                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "numtel", [], "any", false, false, false, 55), 'label', ["label" => "Phone N°"]);
        echo "
                                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "numtel", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-contact"]]);
        echo "
                                                </div>

                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\" >
                                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'errors');
        echo "
                                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'label', ["label" => "Email Adress"]);
        echo "
                                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>

                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "password", [], "any", false, false, false, 66), 'errors');
        echo "
                                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "password", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "", "placeholder" => "Password", "id" => ""]]);
        echo "
                                                </div>



                                            <div >
                                                <div class=\"p-3 m-3\">
                                                    <h4 style=\"color:white\">Your already have an account? <b><a style=\"color:forestgreen\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" >Login here</a></b></h4>
                                                </div>

                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"titie-section wow fadeInDown animated \">
                                                        <h1>-*-</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <input type=\"submit\" class=\"center-block bottom btn btn-success\" value=\"Sign UP\">

                                                </div>
                                            </div>
                                        </form>
                                        ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), 'form_end');
        echo "

    </div>


</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 92,  251 => 74,  241 => 67,  237 => 66,  230 => 62,  226 => 61,  222 => 60,  215 => 56,  211 => 55,  207 => 54,  201 => 51,  197 => 50,  193 => 49,  187 => 46,  183 => 45,  179 => 44,  167 => 35,  164 => 34,  155 => 32,  150 => 31,  141 => 28,  138 => 27,  133 => 26,  124 => 23,  121 => 22,  116 => 21,  107 => 18,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}

<section class=\"news-letter-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titie-section wow fadeInDown animated \">
                    <h1>Register</h1>
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

                                        {{ form_start(registrationForm,{'attr':{'novalidate': 'novalidate'}}) }}
                                        <form  method=\"post\"  class=\"contact-form\">
                                                <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
                                                    <h4 style=\"color:white\">Sign Up in Seconds!</h4>
                                                </div>
                                                <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
                                                    <h4 style=\"color:white\">Signup using your Email address</h4>
                                                </div>
                                                <div class=\"col-lg-6  col-md-8 p-6 m-12\">
                                                    {{ form_errors(registrationForm.nom)}}
                                                    {{ form_label(registrationForm.nom, 'Name')}}
                                                    {{ form_widget(registrationForm.nom,{ 'attr': {'class': 'form-contact'}}) }}
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-6 m-6\">
                                                    {{ form_errors(registrationForm.prenom)}}
                                                    {{ form_label(registrationForm.prenom, 'Last Name')}}
                                                    {{ form_widget(registrationForm.prenom,{ 'attr': {'class': 'form-contact'}}) }}
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    {{ form_errors(registrationForm.numtel)}}
                                                    {{ form_label(registrationForm.numtel, 'Phone N°')}}
                                                    {{ form_widget(registrationForm.numtel,{ 'attr': {'class': 'form-contact'}}) }}
                                                </div>

                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\" >
                                                    {{ form_errors(registrationForm.email)}}
                                                    {{ form_label(registrationForm.email, 'Email Adress')}}
                                                    {{ form_widget(registrationForm.email,{ 'attr': {'class': 'form-control'}}) }}
                                                </div>

                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    {{ form_errors(registrationForm.password)}}
                                                    {{ form_widget(registrationForm.password,{ 'attr': {'class': '', 'placeholder' : 'Password', 'id' : ''}}) }}
                                                </div>



                                            <div >
                                                <div class=\"p-3 m-3\">
                                                    <h4 style=\"color:white\">Your already have an account? <b><a style=\"color:forestgreen\" href=\"{{ path('app_login') }}\" >Login here</a></b></h4>
                                                </div>

                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"titie-section wow fadeInDown animated \">
                                                        <h1>-*-</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <input type=\"submit\" class=\"center-block bottom btn btn-success\" value=\"Sign UP\">

                                                </div>
                                            </div>
                                        </form>
                                        {{ form_end(registrationForm) }}

    </div>


</section>

{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Mariem OUESLATI\\Downloads\\Pidev\\templates\\registration\\register.html.twig");
    }
}
