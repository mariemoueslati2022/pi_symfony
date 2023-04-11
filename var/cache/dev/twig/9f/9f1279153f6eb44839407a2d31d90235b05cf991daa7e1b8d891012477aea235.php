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

/* admin/update.html.twig */
class __TwigTemplate_91ac691d97ae4172af236da1d77a4da0f0b25e20ad1e2dd94cfe108286d77b1b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <form>
                <div class=\"form-group\">
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'errors');
        echo "
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Name"]]);
        echo "
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), 'errors');
        echo "
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        echo "
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 18, $this->source); })()), "numtel", [], "any", false, false, false, 18), 'errors');
        echo "
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 19, $this->source); })()), "numtel", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numero de Tel °"]]);
        echo "
                    </div>

                    <div class=\"col-lg-6 col-md-8 p-1 m-1\" >
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'errors');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email Adress"]]);
        echo "
                    </div>

                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 28, $this->source); })()), "password", [], "any", false, false, false, 28), 'errors');
        echo "
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 29, $this->source); })()), "password", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "id" => ""]]);
        echo "
                    </div>
                    <div class=\"col-lg-6 col-md-8 p-1 m-1\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 32, $this->source); })()), "confirm_password", [], "any", false, false, false, 32), 'errors');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 33, $this->source); })()), "confirm_password", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirm password"]]);
        echo "
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 36
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 36, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                <a class=\"btn btn-success\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminlist");
        echo "\">Back to list</a>
            </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 42,  181 => 41,  168 => 38,  163 => 36,  157 => 33,  153 => 32,  147 => 29,  143 => 28,  136 => 24,  132 => 23,  125 => 19,  121 => 18,  115 => 15,  111 => 14,  105 => 11,  101 => 10,  93 => 6,  83 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    {% endblock %}
{% block body %}
    {{ form_start(formuser,{'attr':{'novalidate': 'novalidate'}}) }}
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
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "admin/update.html.twig", "C:\\Users\\Mariem OUESLATI\\Downloads\\Pidev\\templates\\admin\\update.html.twig");
    }
}
