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

/* security/reset_password.html.twig */
class __TwigTemplate_fa8a0fafc025694687933d1c985a57ec3cca9d9ee313bdec21863e0a14f6d4f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "security/reset_password.html.twig", 1);
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

        echo "Nouveau mot de passe";
        
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
        echo "<div class=\"hero-wrap js-fullheight\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/bg_2.jpg"), "html", null, true);
        echo ");\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
    <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\">
    <div class=\"col-md-9 ftco-animate text-center\" data-scrollax=\" properties: { translateY: '70%' }\">
    <p class=\"breadcrumbs\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\"><span class=\"mr-2\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a></span> <span>Contact</span></p>
    <h1 class=\"mb-3 bread\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Login</h1>
    <section class=\"pt-4\">
    <div class=\"row\">

    <div class=\"container centered\">
        <form method=\"post\" class=\"contact__form\">
    <h1>Réinitialisation du mot de passe</h1>
    <p>Veuillez entrer votre nouveau mot de passe ci-dessous.</p>
            <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
        <label for=\"inputPassword\">Password</label>
            </div>
            <div>
        <input type=\"password\" name=\"password\" class=\"form-control bg-transparent justify-content-center\" id=\"inputPassword\" placeholder=\"Mot de passe\" required>
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\">
            </div>
                <div>
        <button type=\"submit\" class=\"btn btn-primary justify-content-center\" id=\"valider\">
            Valider le mot de passe
        </button>
                </div>
            </div>
    </form>
    </div>
    </div>
    </section>
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
        return "security/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Nouveau mot de passe{% endblock %}

{% block body %}
<div class=\"hero-wrap js-fullheight\" style=\"background-image: url({{ asset('Front/images/bg_2.jpg') }});\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
    <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\">
    <div class=\"col-md-9 ftco-animate text-center\" data-scrollax=\" properties: { translateY: '70%' }\">
    <p class=\"breadcrumbs\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\"><span class=\"mr-2\"><a href=\"{{ path('index') }}\">Home</a></span> <span>Contact</span></p>
    <h1 class=\"mb-3 bread\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Login</h1>
    <section class=\"pt-4\">
    <div class=\"row\">

    <div class=\"container centered\">
        <form method=\"post\" class=\"contact__form\">
    <h1>Réinitialisation du mot de passe</h1>
    <p>Veuillez entrer votre nouveau mot de passe ci-dessous.</p>
            <div class=\"col-lg-8 col-md-8 d-flex justify-content-center\">
        <label for=\"inputPassword\">Password</label>
            </div>
            <div>
        <input type=\"password\" name=\"password\" class=\"form-control bg-transparent justify-content-center\" id=\"inputPassword\" placeholder=\"Mot de passe\" required>
        <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            </div>
                <div>
        <button type=\"submit\" class=\"btn btn-primary justify-content-center\" id=\"valider\">
            Valider le mot de passe
        </button>
                </div>
            </div>
    </form>
    </div>
    </div>
    </section>
    </div>
    </div>
    </div>
</div>
{% endblock %}", "security/reset_password.html.twig", "C:\\Users\\Mariem OUESLATI\\Downloads\\Pidev\\templates\\security\\reset_password.html.twig");
    }
}
