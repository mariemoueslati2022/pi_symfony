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

/* admin/profile.html.twig */
class __TwigTemplate_c7baed86ca092d509894ef8ff932611954fbfe0d0a20a3c447e5aff5d8b817c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "admin/profile.html.twig", 1);
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

        echo "Profile";
        
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
        echo "    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/bg_2.jpg"), "html", null, true);
        echo ");\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center \" data-scrollax-parent=\"true\">
                            <div class=\"row align-items-stretch no-gutters contact-wrap\">
                                <div class=\"col-md-12\">
                                    <div class=\"form h-100\">
                                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "                                            <div class=\"alert alert-success\" role=\"alert\">
                                                ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "                                            <div class=\"alert alert-warning\" role=\"alert\">
                                                ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 29
            echo "                                            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                        <form  method=\"post\"  class=\"contact__form\">
                                            <div class=\"row d-flex justify-content-center\">
                                                <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
                                                    <p>Hello ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
                                                </div>
                                                <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
                                                    <p>You can edit your profile here.</p>
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'errors');
        echo "
                                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Name"]]);
        echo "
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), 'errors');
        echo "
                                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        echo "
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 49, $this->source); })()), "numtel", [], "any", false, false, false, 49), 'errors');
        echo "
                                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 50, $this->source); })()), "numtel", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Num Tel °"]]);
        echo "
                                                </div>

                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\" >
                                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'errors');
        echo "
                                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email Adress"]]);
        echo "
                                                </div>
                                            </div>
                                            <div class=\"d-flex justify-content-center p-1 m-1\">

                                                <div>
                                                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>

                                                </div>

                                            </div>

                                        </form>
                                        ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
                                    </div>
                        </div>
                </div>

            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 68,  215 => 55,  211 => 54,  204 => 50,  200 => 49,  194 => 46,  190 => 45,  184 => 42,  180 => 41,  171 => 35,  163 => 31,  154 => 29,  149 => 28,  140 => 25,  137 => 24,  132 => 23,  123 => 20,  120 => 19,  115 => 18,  106 => 15,  103 => 14,  99 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url({{ asset('Front/images/bg_2.jpg') }});\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center \" data-scrollax-parent=\"true\">
                            <div class=\"row align-items-stretch no-gutters contact-wrap\">
                                <div class=\"col-md-12\">
                                    <div class=\"form h-100\">
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
                                        {{ form_start(formuser,{'attr':{'novalidate': 'novalidate'}}) }}
                                        <form  method=\"post\"  class=\"contact__form\">
                                            <div class=\"row d-flex justify-content-center\">
                                                <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
                                                    <p>Hello {{ app.user.nom }}</p>
                                                </div>
                                                <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
                                                    <p>You can edit your profile here.</p>
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    {{ form_errors(formuser.nom)}}
                                                    {{ form_widget(formuser.nom,{ 'attr': {'class': 'form-control', 'placeholder' : 'Name' }}) }}
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    {{ form_errors(formuser.prenom)}}
                                                    {{ form_widget(formuser.prenom,{ 'attr': {'class': 'form-control', 'placeholder' : 'Last Name'}}) }}
                                                </div>
                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                                                    {{ form_errors(formuser.numtel)}}
                                                    {{ form_widget(formuser.numtel,{ 'attr': {'class': 'form-control', 'placeholder' : 'Num Tel °'}}) }}
                                                </div>

                                                <div class=\"col-lg-6 col-md-8 p-1 m-1\" >
                                                    {{ form_errors(formuser.email)}}
                                                    {{ form_widget(formuser.email,{ 'attr': {'class': 'form-control', 'placeholder' : 'Email Adress'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"d-flex justify-content-center p-1 m-1\">

                                                <div>
                                                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>

                                                </div>

                                            </div>

                                        </form>
                                        {{ form_end(formuser) }}
                                    </div>
                        </div>
                </div>

            </div>
        </div>

    </div>

{% endblock %}
", "admin/profile.html.twig", "C:\\Users\\Mariem OUESLATI\\Downloads\\Pidev\\templates\\admin\\profile.html.twig");
    }
}
