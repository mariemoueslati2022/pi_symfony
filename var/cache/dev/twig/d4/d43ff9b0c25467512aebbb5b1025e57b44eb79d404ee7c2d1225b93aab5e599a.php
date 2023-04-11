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

/* base.html.twig */
class __TwigTemplate_f840550a4019df95360e04c86c920e32ec086e768be194b22a8dc5a5761072c2 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "<body>
<div class=\"container-scroller d-flex\">
    <!-- partial:./partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
            <li class=\"nav-item sidebar-category\">
                <p>Navigation</p>
                <span></span>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"index.html\">
                    <i class=\"mdi mdi-view-quilt menu-icon\"></i>
                    <span class=\"menu-title\">Dashboard</span>
                    <div class=\"badge badge-info badge-pill\">2</div>
                </a>
            </li>

                <div class=\"collapse\" id=\"ui-basic\">
                    <ul class=\"nav flex-column sub-menu\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Buttons</a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class=\"nav-item\">

            </li>


            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                    <i class=\"mdi mdi-account menu-icon\"></i>
                    <span class=\"menu-title\">Tables</span>
                    <i class=\"menu-arrow\"></i>
                </a>
                <div class=\"collapse\" id=\"auth\">
                    <ul class=\"nav flex-column sub-menu\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Admin </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login-2.html\"> Login 2 </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register.html\"> Register </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register-2.html\"> Register 2 </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/lock-screen.html\"> Lockscreen </a></li>
                    </ul>
                </div>
            </li>

        </ul>
        <div class=\"header__menu__right\">
            ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71)) {
            // line 72
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-danger justify-content-center\">Logout</a>
            ";
        }
        // line 74
        echo "        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:./partials/_navbar.html -->
        <nav class=\"navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row\">
            <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>

                <h4 class=\"font-weight-bold mb-0 d-none d-md-block mt-1\">Welcome TapToTrip </h4>

                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item\">
                        <h4 class=\"mb-0 font-weight-bold d-none d-xl-block\">2021-2022</h4>
                    </li>
                    <li class=\"nav-item dropdown mr-1\">
                        <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
                            <i class=\"mdi mdi-calendar mx-0\"></i>
                            <span class=\"count bg-info\">2</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                            <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow\">
                                    <h6 class=\"preview-subject ellipsis font-weight-normal\">David Grey
                                    </h6>
                                    <p class=\"font-weight-light small-text text-muted mb-0\">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow\">
                                    <h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
                                    </h6>
                                    <p class=\"font-weight-light small-text text-muted mb-0\">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow\">
                                    <h6 class=\"preview-subject ellipsis font-weight-normal\"> Johnson
                                    </h6>
                                    <p class=\"font-weight-light small-text text-muted mb-0\">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown mr-2\">
                        <a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                            <i class=\"mdi mdi-email-open mx-0\"></i>
                            <span class=\"count bg-danger\">1</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-success\">
                                        <i class=\"mdi mdi-information mx-0\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                                    <p class=\"font-weight-light small-text mb-0 text-muted\">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-warning\">
                                        <i class=\"mdi mdi-settings mx-0\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                                    <p class=\"font-weight-light small-text mb-0 text-muted\">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-info\">
                                        <i class=\"mdi mdi-account-box mx-0\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                                    <p class=\"font-weight-light small-text mb-0 text-muted\">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
            </div>
            <div class=\"navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center\">
                <ul class=\"navbar-nav mr-lg-2\">
                    <li class=\"nav-item nav-search d-none d-lg-block\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search Here...\" aria-label=\"search\" aria-describedby=\"search\">
                        </div>
                    </li>
                </ul>

                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                    <a class=\"dropdown-item\">
                        <i class=\"mdi mdi-settings text-primary\"></i>
                        Settings
                    </a>
                    <a class=\"dropdown-item\">
                        <i class=\"mdi mdi-logout text-primary\"></i>
                        Logout
                    </a>
                </div>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link icon-link\">
                        <i class=\"mdi mdi-plus-circle-outline\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link icon-link\">
                        <i class=\"mdi mdi-web\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link icon-link\">
                        <i class=\"mdi mdi-clock-outline\"></i>
                    </a>
                </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">

                <div class=\"row\">
                    <div class=\"col-lg-12 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
        // line 235
        $this->displayBlock('body', $context, $blocks);
        // line 289
        echo "                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:./partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                            <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © bootstrapdash.com 2020</span>
                            <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Distributed By: <a href=\"https://www.themewagon.com/\" target=\"_blank\">ThemeWagon</a></span>
                            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\"> Free <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/template.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- End custom js for this page-->
</body>

</html>";
        
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
        echo "<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    <!-- base:css -->
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " TapToTrip | Spica Admin ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 235
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 236
        echo "                                    <h4 class=\"card-title\">Financial management review</h4>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>
                                                    User
                                                </th>
                                                <th>
                                                    First name
                                                </th>
                                                <th>
                                                    Progress
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
                                                <th>
                                                    Deadline
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class=\"py-1\">
                                                    <img src=\"images/faces/face1.jpg\" alt=\"image\"/>
                                                </td>
                                                <td>
                                                    Herman Beck
                                                </td>
                                                <td>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    \$ 77.99
                                                </td>
                                                <td>
                                                    May 15, 2015
                                                </td>
                                            </tr>






                                            </tbody>
                                        </table>

                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 236,  443 => 235,  431 => 19,  426 => 17,  418 => 12,  413 => 11,  403 => 10,  384 => 8,  373 => 21,  371 => 10,  366 => 8,  360 => 4,  350 => 3,  335 => 331,  327 => 326,  323 => 325,  319 => 324,  313 => 321,  307 => 318,  276 => 289,  274 => 235,  111 => 74,  105 => 72,  103 => 71,  53 => 23,  51 => 3,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
{% block head %}
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %} TapToTrip | Spica Admin {% endblock %} </title>
    <!-- base:css -->
    {% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset ('vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\" {{ asset ('vendors/css/vendor.bundle.base.css') }}\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ asset ('css/style.css') }}\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"{{ asset ('images/favicon.png') }}\" />
    {%  endblock %}
</head>
{% endblock head %}
<body>
<div class=\"container-scroller d-flex\">
    <!-- partial:./partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
            <li class=\"nav-item sidebar-category\">
                <p>Navigation</p>
                <span></span>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"index.html\">
                    <i class=\"mdi mdi-view-quilt menu-icon\"></i>
                    <span class=\"menu-title\">Dashboard</span>
                    <div class=\"badge badge-info badge-pill\">2</div>
                </a>
            </li>

                <div class=\"collapse\" id=\"ui-basic\">
                    <ul class=\"nav flex-column sub-menu\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Buttons</a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class=\"nav-item\">

            </li>


            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                    <i class=\"mdi mdi-account menu-icon\"></i>
                    <span class=\"menu-title\">Tables</span>
                    <i class=\"menu-arrow\"></i>
                </a>
                <div class=\"collapse\" id=\"auth\">
                    <ul class=\"nav flex-column sub-menu\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Admin </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login-2.html\"> Login 2 </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register.html\"> Register </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register-2.html\"> Register 2 </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/lock-screen.html\"> Lockscreen </a></li>
                    </ul>
                </div>
            </li>

        </ul>
        <div class=\"header__menu__right\">
            {% if app.user %}
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger justify-content-center\">Logout</a>
            {% endif %}
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:./partials/_navbar.html -->
        <nav class=\"navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row\">
            <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>

                <h4 class=\"font-weight-bold mb-0 d-none d-md-block mt-1\">Welcome TapToTrip </h4>

                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item\">
                        <h4 class=\"mb-0 font-weight-bold d-none d-xl-block\">2021-2022</h4>
                    </li>
                    <li class=\"nav-item dropdown mr-1\">
                        <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
                            <i class=\"mdi mdi-calendar mx-0\"></i>
                            <span class=\"count bg-info\">2</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                            <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow\">
                                    <h6 class=\"preview-subject ellipsis font-weight-normal\">David Grey
                                    </h6>
                                    <p class=\"font-weight-light small-text text-muted mb-0\">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow\">
                                    <h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
                                    </h6>
                                    <p class=\"font-weight-light small-text text-muted mb-0\">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow\">
                                    <h6 class=\"preview-subject ellipsis font-weight-normal\"> Johnson
                                    </h6>
                                    <p class=\"font-weight-light small-text text-muted mb-0\">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown mr-2\">
                        <a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                            <i class=\"mdi mdi-email-open mx-0\"></i>
                            <span class=\"count bg-danger\">1</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-success\">
                                        <i class=\"mdi mdi-information mx-0\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                                    <p class=\"font-weight-light small-text mb-0 text-muted\">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-warning\">
                                        <i class=\"mdi mdi-settings mx-0\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                                    <p class=\"font-weight-light small-text mb-0 text-muted\">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-info\">
                                        <i class=\"mdi mdi-account-box mx-0\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                                    <p class=\"font-weight-light small-text mb-0 text-muted\">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
            </div>
            <div class=\"navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center\">
                <ul class=\"navbar-nav mr-lg-2\">
                    <li class=\"nav-item nav-search d-none d-lg-block\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search Here...\" aria-label=\"search\" aria-describedby=\"search\">
                        </div>
                    </li>
                </ul>

                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                    <a class=\"dropdown-item\">
                        <i class=\"mdi mdi-settings text-primary\"></i>
                        Settings
                    </a>
                    <a class=\"dropdown-item\">
                        <i class=\"mdi mdi-logout text-primary\"></i>
                        Logout
                    </a>
                </div>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link icon-link\">
                        <i class=\"mdi mdi-plus-circle-outline\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link icon-link\">
                        <i class=\"mdi mdi-web\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link icon-link\">
                        <i class=\"mdi mdi-clock-outline\"></i>
                    </a>
                </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">

                <div class=\"row\">
                    <div class=\"col-lg-12 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {% block body %}
                                    <h4 class=\"card-title\">Financial management review</h4>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>
                                                    User
                                                </th>
                                                <th>
                                                    First name
                                                </th>
                                                <th>
                                                    Progress
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
                                                <th>
                                                    Deadline
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class=\"py-1\">
                                                    <img src=\"images/faces/face1.jpg\" alt=\"image\"/>
                                                </td>
                                                <td>
                                                    Herman Beck
                                                </td>
                                                <td>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    \$ 77.99
                                                </td>
                                                <td>
                                                    May 15, 2015
                                                </td>
                                            </tr>






                                            </tbody>
                                        </table>

                                    </div>
                                {% endblock %}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:./partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                            <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © bootstrapdash.com 2020</span>
                            <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Distributed By: <a href=\"https://www.themewagon.com/\" target=\"_blank\">ThemeWagon</a></span>
                            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\"> Free <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src=\"{{ asset ('vendors/js/vendor.bundle.base.js') }}\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src=\"{{ asset ('vendors/chart.js/Chart.min.js') }}\"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"{{ asset ('js/off-canvas.js') }}\"></script>
<script src=\"{{ asset ('js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset ('js/template.js') }}\"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src=\"{{ asset ('js/dashboard.js') }}\"></script>
<!-- End custom js for this page-->
</body>

</html>", "base.html.twig", "C:\\Users\\21628\\Desktop\\Random\\emna\\Pidev\\templates\\base.html.twig");
    }
}
