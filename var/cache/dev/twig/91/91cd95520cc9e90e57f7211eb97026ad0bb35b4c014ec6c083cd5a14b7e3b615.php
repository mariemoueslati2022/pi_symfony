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

/* baseFront.html.twig */
class __TwigTemplate_087bf4949c6d7d33635ed098d3011778debd413eb5def65d986b7cc8d5ceada3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "<body>

<!-- PRELOADER -->
<div id=\"preloader\">
    <div class=\"preloader-area\">
        <div class=\"preloader-box\">
            <div class=\"preloader\"></div>
        </div>
    </div>
</div>


<section class=\"header-top-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div  class=\"col-md-6\">
                <div class=\"header-top-content\">
                    <ul class=\"nav nav-pills navbar-left\">
                        <li><a href=\"#\"><i class=\"pe-7s-call\"></i><span>123-123456789</span></a></li>
                        <li><a href=\"#\"><i class=\"pe-7s-mail\"></i><span> info@mart.com</span></a></li>
                    </ul>
                </div>
            </div>
            <div  class=\"col-md-6\">
                <div class=\"header-top-menu\">
                    <ul class=\"nav nav-pills navbar-right\">
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Wishlist</a></li>
                        <li><a href=\"#\">Cart</a></li>
                        <li><a href=\"#\">Checkout</a></li>

                        ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><span>Logout</span></a></li>
                            <li><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><span>Profile</span></a></li>
                        ";
        } else {
            // line 56
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"pe-7s-lock\"></i><span>Login/Register</span></a></li>
                        ";
        }
        // line 58
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<header class=\"header-section\">
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><b>M</b>art</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">About Us</a></li>
                    <li><a href=\"#\">page</a></li>
                    <li><a href=\"#\">shop</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Contact Us</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right cart-menu\">
                    <li><a href=\"#\" class=\"search-btn\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><span> Cart -\$0&nbsp;</span> <span class=\"shoping-cart\">0</span></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('footer', $context, $blocks);
        // line 113
        $this->displayBlock('js', $context, $blocks);
        // line 124
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"icon\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/favicon.png"), "html", null, true);
        echo " >
        ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 15
        echo "        <!--[if lt IE 9]>
        <script src=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//html5shiv.googlecode.com/svn/trunk/html5.js"), "html", null, true);
        echo "></script>
        <script>window.html5 || document.write('<script src=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/html5shiv.js"), "html", null, true);
        echo "><\\/script>')</script>
        <![endif]-->
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Pidev | Accueil ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo ">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 101
        echo "    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p class=\"center\">Shared by <i class=\"fa fa-love\"></i><a href=\"https://bootstrapthemes.co\">BootstrapThemes</a>
                    </p>

                </div>
            </div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 114
        echo "
    <!-- JQUERY -->
    <script src=";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-1.11.2.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/custom.js"), "html", null, true);
        echo "></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 121,  339 => 120,  335 => 119,  331 => 118,  327 => 117,  323 => 116,  319 => 114,  309 => 113,  288 => 101,  278 => 100,  260 => 97,  247 => 13,  237 => 12,  218 => 7,  204 => 17,  200 => 16,  197 => 15,  195 => 12,  191 => 11,  184 => 7,  179 => 4,  169 => 3,  156 => 124,  154 => 113,  152 => 100,  149 => 99,  147 => 97,  106 => 58,  100 => 56,  95 => 54,  90 => 53,  88 => 52,  55 => 21,  53 => 3,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">
{% block head %}
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>{% block title %} Pidev | Accueil {% endblock %}</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"icon\" href={{ asset ('Front/images/favicon.png') }} >
        {% block css %}
            <link rel=\"stylesheet\" href={{ asset ('Front/css/style.css') }}>
        {%  endblock %}
        <!--[if lt IE 9]>
        <script src={{ asset ('//html5shiv.googlecode.com/svn/trunk/html5.js') }}></script>
        <script>window.html5 || document.write('<script src={{ asset ('Front/js/vendor/html5shiv.js') }}><\\/script>')</script>
        <![endif]-->
    </head>
{% endblock head %}
<body>

<!-- PRELOADER -->
<div id=\"preloader\">
    <div class=\"preloader-area\">
        <div class=\"preloader-box\">
            <div class=\"preloader\"></div>
        </div>
    </div>
</div>


<section class=\"header-top-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div  class=\"col-md-6\">
                <div class=\"header-top-content\">
                    <ul class=\"nav nav-pills navbar-left\">
                        <li><a href=\"#\"><i class=\"pe-7s-call\"></i><span>123-123456789</span></a></li>
                        <li><a href=\"#\"><i class=\"pe-7s-mail\"></i><span> info@mart.com</span></a></li>
                    </ul>
                </div>
            </div>
            <div  class=\"col-md-6\">
                <div class=\"header-top-menu\">
                    <ul class=\"nav nav-pills navbar-right\">
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Wishlist</a></li>
                        <li><a href=\"#\">Cart</a></li>
                        <li><a href=\"#\">Checkout</a></li>

                        {% if app.user %}
                            <li><a href=\"{{ path('app_logout') }}\"><span>Logout</span></a></li>
                            <li><a href=\"{{ path('profile',{'id':app.user.id}) }}\"><span>Profile</span></a></li>
                        {% else %}
                            <li><a href=\"{{ path('app_login') }}\"><i class=\"pe-7s-lock\"></i><span>Login/Register</span></a></li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<header class=\"header-section\">
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><b>M</b>art</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">About Us</a></li>
                    <li><a href=\"#\">page</a></li>
                    <li><a href=\"#\">shop</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Contact Us</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right cart-menu\">
                    <li><a href=\"#\" class=\"search-btn\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><span> Cart -\$0&nbsp;</span> <span class=\"shoping-cart\">0</span></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
{% block body %}
{% endblock %}

{% block footer %}
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p class=\"center\">Shared by <i class=\"fa fa-love\"></i><a href=\"https://bootstrapthemes.co\">BootstrapThemes</a>
                    </p>

                </div>
            </div>
        </div>
    </footer>
{% endblock footer %}
{% block js %}

    <!-- JQUERY -->
    <script src={{ asset ('Front/js/vendor/jquery-1.11.2.min.js') }}></script>
    <script src={{ asset ('Front/js/vendor/bootstrap.min.js') }}></script>
    <script src={{ asset ('Front/js/isotope.pkgd.min.js') }}></script>
    <script src={{ asset ('Front/js/owl.carousel.min.js') }}></script>
    <script src={{ asset ('Front/js/wow.min.js') }}></script>
    <script src={{ asset ('Front/js/custom.js') }}></script>

{% endblock %}

</body>
</html>
", "baseFront.html.twig", "C:\\Users\\Mariem OUESLATI\\Downloads\\Pidev\\templates\\baseFront.html.twig");
    }
}
