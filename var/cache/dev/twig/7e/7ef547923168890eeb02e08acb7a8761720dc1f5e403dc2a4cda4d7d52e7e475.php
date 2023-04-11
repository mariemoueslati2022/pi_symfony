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

/* front/index.html.twig */
class __TwigTemplate_72573ec5364851da18b86f5140777d320a50140e145249afefa258a416101904 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/index.html.twig", 1);
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

        echo "Hello FrontController!";
        
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
    <div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "            <div class=\"alert alert-success\" role=\"alert\">
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "            <div class=\"alert alert-warning\" role=\"alert\">
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
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
        echo "

        <section class=\"search-section\">
            <div class=\"container\">
                <div class=\"row subscribe-from\">
                    <div class=\"col-md-12\">
                        <form class=\"form-inline col-md-12 wow fadeInDown animated\">
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control subscribe\" id=\"email\" placeholder=\"Search...\">
                                <button class=\"suscribe-btn\" ><i class=\"pe-7s-search\"></i></button>
                            </div>
                        </form><!-- end /. form -->
                    </div>
                </div><!-- end of/. row -->
            </div><!-- end of /.container -->
        </section><!-- end of /.news letter section -->

        <section class=\"slider-section\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators slider-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src=";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/slider.jpg"), "html", null, true);
        echo " width=\"1648\" height=\"600\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h2>DRESSES <b>&</b> JEANS</h2>
                            <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                            <a href=\"#\">Buy Now</a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/slider.jpg"), "html", null, true);
        echo " width=\"1648\" height=\"600\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h2>DRESSES <b>&</b> JEANS</h2>
                            <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                            <a href=\"#\">Buy Now</a>
                        </div>
                    </div>
                    <div class=\"item \">
                        <img src=";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/slider.jpg"), "html", null, true);
        echo " width=\"1648\" height=\"600\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h2>DRESSES <b>&</b> JEANS</h2>
                            <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                            <a href=\"#\">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"pe-7s-angle-left glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"pe-7s-angle-right glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                </a>
            </div>
        </section>

        <section class=\"service-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\" data-wow-delay=\"0.1s\">
                        <div class=\"service-item\">
                            <i class=\"pe-7s-settings\"></i>
                            <h3>SETTING</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\" data-wow-delay=\"0.2s\">
                        <div class=\"service-item\">
                            <i class=\"pe-7s-safe\"></i>
                            <h3>MONEY BACK</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\" data-wow-delay=\"0.3s\">
                        <div class=\"service-item\">
                            <i class=\"pe-7s-global\"></i>
                            <h3>WORLDWIDE SHIPPING</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\" data-wow-delay=\"0.4s\">
                        <div class=\"service-item\">
                            <i class=\"pe-7s-headphones\"></i>
                            <h3>Online support</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"new-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>NEW COLLECTION</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 wow fadeInLeft animated\" data-wow-delay=\"0.2s\">
                        <div class=\"product-item\">
                            <img src=";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/1.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Blue Tshirt</h3>
                                    <span>\$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInLeft animated\" data-wow-delay=\"0.4s\">
                        <div class=\"product-item\">
                            <img src=";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/2.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>WOMAN shirt</h3>
                                    <span>\$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInLeft animated\" data-wow-delay=\"0.6s\">
                        <div class=\"product-item\">
                            <img src=";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/3.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>YELLOW Tshirt</h3>
                                    <span>\$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInLeft animated\" data-wow-delay=\"0.8s\">
                        <div class=\"product-item\">
                            <img src=";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/4.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"featured-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>FEATURED PRODUCTS</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"filter-menu\">
                            <ul class=\"button-group sort-button-group\">
                                <li class=\"button active\" data-category=\"all\">All<span>8</span></li>
                                <li class=\"button\" data-category=\"cat-1\">Dresses and Suits<span>2</span></li>
                                <li class=\"button\" data-category=\"cat-2\">Accessories<span>2</span></li>
                                <li class=\"button\" data-category=\"cat-3\">Miscellaneous<span>4</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row featured isotope\">
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src=";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/product1.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src=";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/product2.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src=";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/product3.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src=";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/product4.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src=";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/product5.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src=";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/product6.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$36</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src=";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/product7.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src=";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/product8.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$66</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"offer-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 wow fadeInDown animated \">
                        <h1>END OF SEASON SALE</h1>
                        <h2>Up to 35% off Women's Denim</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"best-seller-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>BEST SELLERS</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown animated\" data-wow-delay=\"0.2s\">
                        <div class=\"product-item\">
                            <img src=";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/1.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Blue Tshirt</h3>
                                    <span>\$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown animated\" data-wow-delay=\"0.4s\">
                        <div class=\"product-item\">
                            <img src=";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/2.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>WOMAN shirt</h3>
                                    <span>\$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown animated\" data-wow-delay=\"0.6s\">
                        <div class=\"product-item\">
                            <img src=";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/3.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>YELLOW Tshirt</h3>
                                    <span>\$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown animated\" data-wow-delay=\"0.8s\">
                        <div class=\"product-item\">
                            <img src=";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/4.png"), "html", null, true);
        echo " class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"review-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>customer review</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div id=\"feedback\" class=\"carousel slide feedback\" data-ride=\"feedback\">
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <img src=";
        // line 532
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/member1.png"), "html", null, true);
        echo " width=\"320\" height=\"439\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src=";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/member2.png"), "html", null, true);
        echo " width=\"320\" height=\"439\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src=";
        // line 548
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/member3.png"), "html", null, true);
        echo " width=\"320\" height=\"439\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators review-controlar\">
                            <li data-target=\"#feedback\" data-slide-to=\"0\" class=\"active\">
                                <img src=";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/member1.png"), "html", null, true);
        echo " width=\"320\" height=\"439\" alt=\"\">
                            </li>
                            <li data-target=\"#feedback\" data-slide-to=\"1\">
                                <img src=";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/member2.png"), "html", null, true);
        echo " width=\"320\" height=\"439\" alt=\"\">
                            </li>
                            <li data-target=\"#feedback\" data-slide-to=\"2\">
                                <img src=";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/member3.png"), "html", null, true);
        echo " width=\"320\" height=\"439\" alt=\"\">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"news-letter-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"titie-section white wow fadeInDown animated \">
                            <h1>NEWSLETTER</h1>
                        </div>
                        <p>Follow a collection of news & promotions</p>
                    </div>
                </div>
                <div class=\"row subscribe-from\">
                    <form class=\"form-inline col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1  wow fadeInDown animated\">
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control subscribe\" id=\"email\" placeholder=\"Enter your email\">
                            <button class=\"suscribe-btn\" ><i class=\"pe-7s-next\"></i></button>
                        </div>
                    </form><!-- end /. form -->
                </div><!-- end of/. row -->
            </div><!-- end of /.container -->
        </section><!-- end of /.news letter section -->

        <section class=\"client-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>our partner</h1>
                        </div>
                    </div>
                </div>
                <div id=\"client\" class=\"row owl-carousel owl-theme client-area\">
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src=";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/client_01.jpg"), "html", null, true);
        echo " class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src=";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/client_02.jpg"), "html", null, true);
        echo " class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src=";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/client_03.jpg"), "html", null, true);
        echo " class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src=";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/client_04.jpg"), "html", null, true);
        echo " class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src=";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/client_01.jpg"), "html", null, true);
        echo " class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src=";
        // line 631
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/client_02.jpg"), "html", null, true);
        echo " class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src=";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/client_03.jpg"), "html", null, true);
        echo " class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src=";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/client_04.jpg"), "html", null, true);
        echo " class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"customNavigation works-navigation\">
                    <a class=\"btn-work works-prev\"><i class=\"pe-7s-angle-left\"></i></a>
                    <a class=\"btn-work works-next\"><i class=\"pe-7s-angle-right\"></i></a>
                </div><!-- end of /.client navigation -->
            </div>
        </section>

        <section class=\"news-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>Latest News</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\" >
                    <div class=\"col-sm-4 wow fadeInDown animated\" data-wow-delay=\"0.2s\">
                        <div class=\"blog-item\">
                            <a href=\"#\"><img src=";
        // line 664
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/blog1.jpg"), "html", null, true);
        echo " width=\"350\" height=\"262\" alt=\"\"></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href=\"#\">Read More</a>
                        </div>
                    </div>
                    <div class=\"col-sm-4 wow fadeInDown animated\" data-wow-delay=\"0.4s\">
                        <div class=\"blog-item\">
                            <a href=\"#\"><img src=";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/blog2.jpg"), "html", null, true);
        echo " width=\"350\" height=\"262\" alt=\"\"></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href=\"#\">Read More</a>

                        </div>
                    </div>
                    <div class=\"col-sm-4 wow fadeInDown animated\" data-wow-delay=\"0.6s\">
                        <div class=\"blog-item\">
                            <a href=\"#\"><img src=";
        // line 681
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/blog3.jpg"), "html", null, true);
        echo " width=\"350\" height=\"262\" alt=\"\"></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href=\"#\">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"contact-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>GET IN TOUCH</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 wow fadeInLeft animated\">
                        <div class=\"left-content\">
                            <h1><span>M</span>art</h1>
                            <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nulla sapien. Class aptent tacitiaptent taciti sociosqu ad lit himenaeos. Suspendisse massa urna, luctus ut vestibulum necs et, vulputate quis urna. Donec at commodo erat.</p>
                            <div class=\"contact-info\">
                                <p><b>Main Office:</b> 123 Elm St. New York City, NY</p>
                                <p><b>Phone:</b> 1.555.555.5555</p>
                                <p><b>Email:</b> info@yourdomain.com</p>
                            </div>
                            <div class=\"social-media\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 wow fadeInRight animated\">
                        <form action=\"\" method=\"\" class=\"contact-form\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Email\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Subject\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Website URL\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"input-group\">
                                        <textarea name=\"\" id=\"\" class=\"form-control\" cols=\"30\" rows=\"5\" placeholder=\"Your Message...\"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"input-group\">
                                        <input type=\"submit\" class=\"contact-submit\" value=\"Send\" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  907 => 681,  895 => 672,  884 => 664,  858 => 641,  850 => 636,  842 => 631,  834 => 626,  826 => 621,  818 => 616,  810 => 611,  802 => 606,  758 => 565,  752 => 562,  746 => 559,  732 => 548,  721 => 540,  710 => 532,  672 => 497,  650 => 478,  628 => 459,  606 => 440,  556 => 393,  531 => 371,  505 => 348,  480 => 326,  455 => 304,  429 => 281,  404 => 259,  378 => 236,  330 => 191,  308 => 172,  286 => 153,  264 => 134,  195 => 68,  184 => 60,  173 => 52,  142 => 23,  133 => 20,  130 => 19,  125 => 18,  116 => 15,  113 => 14,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Hello FrontController!{% endblock %}

{% block body %}

    <div>
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


        <section class=\"search-section\">
            <div class=\"container\">
                <div class=\"row subscribe-from\">
                    <div class=\"col-md-12\">
                        <form class=\"form-inline col-md-12 wow fadeInDown animated\">
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control subscribe\" id=\"email\" placeholder=\"Search...\">
                                <button class=\"suscribe-btn\" ><i class=\"pe-7s-search\"></i></button>
                            </div>
                        </form><!-- end /. form -->
                    </div>
                </div><!-- end of/. row -->
            </div><!-- end of /.container -->
        </section><!-- end of /.news letter section -->

        <section class=\"slider-section\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators slider-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src={{ asset ('Front/images/slider.jpg') }} width=\"1648\" height=\"600\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h2>DRESSES <b>&</b> JEANS</h2>
                            <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                            <a href=\"#\">Buy Now</a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src={{ asset ('Front/images/slider.jpg') }} width=\"1648\" height=\"600\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h2>DRESSES <b>&</b> JEANS</h2>
                            <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                            <a href=\"#\">Buy Now</a>
                        </div>
                    </div>
                    <div class=\"item \">
                        <img src={{ asset ('Front/images/slider.jpg') }} width=\"1648\" height=\"600\" alt=\"\">
                        <div class=\"carousel-caption\">
                            <h2>DRESSES <b>&</b> JEANS</h2>
                            <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                            <a href=\"#\">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"pe-7s-angle-left glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"pe-7s-angle-right glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                </a>
            </div>
        </section>

        <section class=\"service-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\" data-wow-delay=\"0.1s\">
                        <div class=\"service-item\">
                            <i class=\"pe-7s-settings\"></i>
                            <h3>SETTING</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\" data-wow-delay=\"0.2s\">
                        <div class=\"service-item\">
                            <i class=\"pe-7s-safe\"></i>
                            <h3>MONEY BACK</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\" data-wow-delay=\"0.3s\">
                        <div class=\"service-item\">
                            <i class=\"pe-7s-global\"></i>
                            <h3>WORLDWIDE SHIPPING</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\" data-wow-delay=\"0.4s\">
                        <div class=\"service-item\">
                            <i class=\"pe-7s-headphones\"></i>
                            <h3>Online support</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"new-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>NEW COLLECTION</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 wow fadeInLeft animated\" data-wow-delay=\"0.2s\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/1.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Blue Tshirt</h3>
                                    <span>\$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInLeft animated\" data-wow-delay=\"0.4s\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/2.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>WOMAN shirt</h3>
                                    <span>\$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInLeft animated\" data-wow-delay=\"0.6s\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/3.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>YELLOW Tshirt</h3>
                                    <span>\$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInLeft animated\" data-wow-delay=\"0.8s\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/4.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"featured-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>FEATURED PRODUCTS</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"filter-menu\">
                            <ul class=\"button-group sort-button-group\">
                                <li class=\"button active\" data-category=\"all\">All<span>8</span></li>
                                <li class=\"button\" data-category=\"cat-1\">Dresses and Suits<span>2</span></li>
                                <li class=\"button\" data-category=\"cat-2\">Accessories<span>2</span></li>
                                <li class=\"button\" data-category=\"cat-3\">Miscellaneous<span>4</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row featured isotope\">
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/product1.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/product2.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/product3.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/product4.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/product5.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/product6.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$36</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/product7.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"new-item\">New</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/product8.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"sell-meta\">
                                <a href=\"#\" class=\"sell-item\">Sell</a>
                            </div>
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$66</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"offer-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 wow fadeInDown animated \">
                        <h1>END OF SEASON SALE</h1>
                        <h2>Up to 35% off Women's Denim</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"best-seller-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>BEST SELLERS</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown animated\" data-wow-delay=\"0.2s\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/1.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Blue Tshirt</h3>
                                    <span>\$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown animated\" data-wow-delay=\"0.4s\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/2.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>WOMAN shirt</h3>
                                    <span>\$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown animated\" data-wow-delay=\"0.6s\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/3.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>YELLOW Tshirt</h3>
                                    <span>\$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown animated\" data-wow-delay=\"0.8s\">
                        <div class=\"product-item\">
                            <img src={{ asset ('Front/images/4.png') }} class=\"img-responsive\" width=\"255\" height=\"322\" alt=\"\">
                            <div class=\"product-hover\">
                                <div class=\"product-meta\">
                                    <a href=\"#\"><i class=\"pe-7s-like\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-shuffle\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-clock\"></i></a>
                                    <a href=\"#\"><i class=\"pe-7s-cart\"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class=\"product-title\">
                                <a href=\"#\">
                                    <h3>Cool lingerie</h3>
                                    <span>\$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"review-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>customer review</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div id=\"feedback\" class=\"carousel slide feedback\" data-ride=\"feedback\">
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <img src={{ asset ('Front/images/member1.png') }} width=\"320\" height=\"439\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src={{ asset ('Front/images/member2.png') }} width=\"320\" height=\"439\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src={{ asset ('Front/images/member3.png') }} width=\"320\" height=\"439\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators review-controlar\">
                            <li data-target=\"#feedback\" data-slide-to=\"0\" class=\"active\">
                                <img src={{ asset ('Front/images/member1.png') }} width=\"320\" height=\"439\" alt=\"\">
                            </li>
                            <li data-target=\"#feedback\" data-slide-to=\"1\">
                                <img src={{ asset ('Front/images/member2.png') }} width=\"320\" height=\"439\" alt=\"\">
                            </li>
                            <li data-target=\"#feedback\" data-slide-to=\"2\">
                                <img src={{ asset ('Front/images/member3.png') }} width=\"320\" height=\"439\" alt=\"\">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"news-letter-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"titie-section white wow fadeInDown animated \">
                            <h1>NEWSLETTER</h1>
                        </div>
                        <p>Follow a collection of news & promotions</p>
                    </div>
                </div>
                <div class=\"row subscribe-from\">
                    <form class=\"form-inline col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1  wow fadeInDown animated\">
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control subscribe\" id=\"email\" placeholder=\"Enter your email\">
                            <button class=\"suscribe-btn\" ><i class=\"pe-7s-next\"></i></button>
                        </div>
                    </form><!-- end /. form -->
                </div><!-- end of/. row -->
            </div><!-- end of /.container -->
        </section><!-- end of /.news letter section -->

        <section class=\"client-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>our partner</h1>
                        </div>
                    </div>
                </div>
                <div id=\"client\" class=\"row owl-carousel owl-theme client-area\">
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src={{ asset ('Front/images/client_01.jpg') }} class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src={{ asset ('Front/images/client_02.jpg') }} class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src={{ asset ('Front/images/client_03.jpg') }} class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src={{ asset ('Front/images/client_04.jpg') }} class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src={{ asset ('Front/images/client_01.jpg') }} class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src={{ asset ('Front/images/client_02.jpg') }} class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src={{ asset ('Front/images/client_03.jpg') }} class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-12 item\">
                        <a href=\"#\">
                            <img src={{ asset ('Front/images/client_04.jpg') }} class=\"img-responsive\" width=\"300\" height=\"200\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"customNavigation works-navigation\">
                    <a class=\"btn-work works-prev\"><i class=\"pe-7s-angle-left\"></i></a>
                    <a class=\"btn-work works-next\"><i class=\"pe-7s-angle-right\"></i></a>
                </div><!-- end of /.client navigation -->
            </div>
        </section>

        <section class=\"news-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>Latest News</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\" >
                    <div class=\"col-sm-4 wow fadeInDown animated\" data-wow-delay=\"0.2s\">
                        <div class=\"blog-item\">
                            <a href=\"#\"><img src={{ asset ('Front/images/blog1.jpg') }} width=\"350\" height=\"262\" alt=\"\"></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href=\"#\">Read More</a>
                        </div>
                    </div>
                    <div class=\"col-sm-4 wow fadeInDown animated\" data-wow-delay=\"0.4s\">
                        <div class=\"blog-item\">
                            <a href=\"#\"><img src={{ asset ('Front/images/blog2.jpg') }} width=\"350\" height=\"262\" alt=\"\"></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href=\"#\">Read More</a>

                        </div>
                    </div>
                    <div class=\"col-sm-4 wow fadeInDown animated\" data-wow-delay=\"0.6s\">
                        <div class=\"blog-item\">
                            <a href=\"#\"><img src={{ asset ('Front/images/blog3.jpg') }} width=\"350\" height=\"262\" alt=\"\"></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href=\"#\">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"contact-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"titie-section wow fadeInDown animated \">
                            <h1>GET IN TOUCH</h1>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 wow fadeInLeft animated\">
                        <div class=\"left-content\">
                            <h1><span>M</span>art</h1>
                            <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nulla sapien. Class aptent tacitiaptent taciti sociosqu ad lit himenaeos. Suspendisse massa urna, luctus ut vestibulum necs et, vulputate quis urna. Donec at commodo erat.</p>
                            <div class=\"contact-info\">
                                <p><b>Main Office:</b> 123 Elm St. New York City, NY</p>
                                <p><b>Phone:</b> 1.555.555.5555</p>
                                <p><b>Email:</b> info@yourdomain.com</p>
                            </div>
                            <div class=\"social-media\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 wow fadeInRight animated\">
                        <form action=\"\" method=\"\" class=\"contact-form\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Email\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Subject\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Website URL\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"input-group\">
                                        <textarea name=\"\" id=\"\" class=\"form-control\" cols=\"30\" rows=\"5\" placeholder=\"Your Message...\"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"input-group\">
                                        <input type=\"submit\" class=\"contact-submit\" value=\"Send\" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
{% endblock %}
", "front/index.html.twig", "C:\\Users\\21628\\Desktop\\Random\\emna\\Pidev\\templates\\front\\index.html.twig");
    }
}
