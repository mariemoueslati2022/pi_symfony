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

/* admin/listadmin.html.twig */
class __TwigTemplate_cc588494be52adf9c47e3aec50bd491fc913b2e73a4bf56871a499c55836c970 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listadmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listadmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/listadmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 5
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 19
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"card card-primary\">
        <div class=\"card-body\">
            <form>
                <div class=\"form-group\">
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'errors');
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Name"]]);
        echo "
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'errors');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        echo "
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 35, $this->source); })()), "numtel", [], "any", false, false, false, 35), 'errors');
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 36, $this->source); })()), "numtel", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numero de Tel °"]]);
        echo "
                    </div>

                    <div class=\"col-lg-6 col-md-8 p-1 m-1\" >
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'errors');
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email Adress"]]);
        echo "
                    </div>

                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 45, $this->source); })()), "password", [], "any", false, false, false, 45), 'errors');
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "id" => ""]]);
        echo "
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 49, $this->source); })()), "confirm_password", [], "any", false, false, false, 49), 'errors');
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 50, $this->source); })()), "confirm_password", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirm password"]]);
        echo "
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 53
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 53, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                <a class=\"btn btn-success\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminlist");
        echo "\">Back to list</a>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 55,  205 => 53,  199 => 50,  195 => 49,  189 => 46,  185 => 45,  178 => 41,  174 => 40,  167 => 36,  163 => 35,  157 => 32,  153 => 31,  147 => 28,  143 => 27,  133 => 21,  124 => 19,  119 => 18,  110 => 15,  107 => 14,  102 => 13,  93 => 10,  90 => 9,  85 => 8,  76 => 5,  73 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
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
    <div class=\"card card-primary\">
        <div class=\"card-body\">
            <form>
                <div class=\"form-group\">
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        {{ form_errors(formuser.nom)}}
                        {{ form_widget(formuser.nom,{ 'attr': {'class': 'form-control', 'placeholder' : 'Name'}}) }}
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        {{ form_errors(formuser.prenom)}}
                        {{ form_widget(formuser.prenom,{ 'attr': {'class': 'form-control', 'placeholder' : 'Last Name'}}) }}
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        {{ form_errors(formuser.numtel)}}
                        {{ form_widget(formuser.numtel,{ 'attr': {'class': 'form-control', 'placeholder' : 'Numero de Tel °'}}) }}
                    </div>

                    <div class=\"col-lg-6 col-md-8 p-1 m-1\" >
                        {{ form_errors(formuser.email)}}
                        {{ form_widget(formuser.email,{ 'attr': {'class': 'form-control', 'placeholder' : 'Email Adress'}}) }}
                    </div>

                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        {{ form_errors(formuser.password)}}
                        {{ form_widget(formuser.password,{ 'attr': {'class': 'form-control', 'placeholder' : 'Password', 'id' : ''}}) }}
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        {{ form_errors(formuser.confirm_password)}}
                        {{ form_widget(formuser.confirm_password,{ 'attr': {'class': 'form-control', 'placeholder' : 'Confirm password'}}) }}
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>

                <a class=\"btn btn-success\" href=\"{{ path('adminlist') }}\">Back to list</a>
            </form>
        </div>
    </div>
{% endblock %}", "admin/listadmin.html.twig", "C:\\Users\\Mariem OUESLATI\\Downloads\\Pidev\\templates\\admin\\listadmin.html.twig");
    }
}
