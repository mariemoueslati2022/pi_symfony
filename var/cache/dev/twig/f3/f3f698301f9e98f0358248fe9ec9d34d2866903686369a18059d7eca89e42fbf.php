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

/* admin/listaffiche.html.twig */
class __TwigTemplate_ddb05cd72710f769ebb76641b7f3db68f9d48816e4c3ce0485d4ad2558c5aaa2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listaffiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listaffiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/listaffiche.html.twig", 1);
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
        echo "<h4 class=\"card-title\"> User's List  </h4>
    <div>

    </div>
    <div class=\"card-header\">
        <a class=\"btn btn-success\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser");
        echo "\">Add User</a>

    </div>

    <input type=\"text\" id=\"search\" class=\"form-control fas fa-search\" placeholder=\"Search\">

<div class=\"table-responsive\">
    <table id=\"t\" class=\"table table-striped\">
    <tr>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">ID</td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Name</td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Last Name</td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Phone N°</td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Email </td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Status </td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Edit </td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Delete </td>
    </tr>
        <tbody id=\"all\">
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabadmin"]) || array_key_exists("tabadmin", $context) ? $context["tabadmin"] : (function () { throw new RuntimeError('Variable "tabadmin" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "        <tr>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Nom", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Prenom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Numtel", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Email", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "state", [], "any", false, false, false, 52) == 0)) {
                // line 53
                echo "            <td>
                <form action=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("diableUser", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\">
                    <button class=\"btn btn-outline-danger btn-fw\">
                        Diable
                    </button>
                </form>
            </td>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 60
$context["i"], "state", [], "any", false, false, false, 60) == 1)) {
                // line 61
                echo "                <td>
                    <form action=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enableUser", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\">
                        <button class=\"btn btn-outline-success btn-fw\">
                            Enable
                        </button>
                    </form>
                </td>
            ";
            }
            // line 69
            echo "            <td>
                <a class=\"btn btn-primary\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "Id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" >Update</a>
            </td>
            <td>

                <form method=\"post\" action=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "Id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes vous sur de vouloir supprimer le user ?');\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 76))), "html", null, true);
            echo "\">
                    <button class=\"btn btn-danger \">Remove</button>
                </form>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
        ";
        // line 83
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["tabadmin"]) || array_key_exists("tabadmin", $context) ? $context["tabadmin"] : (function () { throw new RuntimeError('Variable "tabadmin" does not exist.', 83, $this->source); })()));
        echo "
        <tbody id=\"search\">
        </tbody>
    </table>

</div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$(document).ready(function () {
            \$(\"#search\").keyup(function (e) {
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url: \"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_user");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type: 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue': value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success: function (retour) {
                        //console.log(retour);
                        if (retour) {
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function (i, obj) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append(
                                    ' <tr></td><td>    ' + obj.id + '' +
                                    '  </td><td>' + obj.Nom + '' +
                                    '  </td><td>' + obj.Prenom + '' +
                                    '  </td><td>' + obj.Numtel + '' +
                                    '  </td><td>' + obj.email + '' +
                                    '  </td></tr>');
                            });
                        } else {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listaffiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 99,  248 => 83,  245 => 82,  233 => 76,  228 => 74,  221 => 70,  218 => 69,  208 => 62,  205 => 61,  203 => 60,  194 => 54,  191 => 53,  189 => 52,  185 => 51,  181 => 50,  177 => 49,  173 => 48,  169 => 47,  166 => 46,  162 => 45,  140 => 26,  133 => 21,  124 => 19,  119 => 18,  110 => 15,  107 => 14,  102 => 13,  93 => 10,  90 => 9,  85 => 8,  76 => 5,  73 => 4,  68 => 3,  58 => 2,  35 => 1,);
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
<h4 class=\"card-title\"> User's List  </h4>
    <div>

    </div>
    <div class=\"card-header\">
        <a class=\"btn btn-success\" href=\"{{ path('addUser') }}\">Add User</a>

    </div>

    <input type=\"text\" id=\"search\" class=\"form-control fas fa-search\" placeholder=\"Search\">

<div class=\"table-responsive\">
    <table id=\"t\" class=\"table table-striped\">
    <tr>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">ID</td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Name</td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Last Name</td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Phone N°</td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Email </td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Status </td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Edit </td>
        <td class=\"sorting_asc\" tabindex=\"0\" scope=\"col\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\">Delete </td>
    </tr>
        <tbody id=\"all\">
    {% for i in tabadmin %}
        <tr>
            <td>{{ i.Id }}</td>
            <td>{{ i.Nom }}</td>
            <td>{{ i.Prenom }}</td>
            <td>{{ i.Numtel}}</td>
            <td>{{ i.Email }}</td>
                {% if i.state == 0 %}
            <td>
                <form action=\"{{ path('diableUser',{'id':i.id}) }}\">
                    <button class=\"btn btn-outline-danger btn-fw\">
                        Diable
                    </button>
                </form>
            </td>
            {% elseif i.state == 1 %}
                <td>
                    <form action=\"{{ path('enableUser',{'id':i.id}) }}\">
                        <button class=\"btn btn-outline-success btn-fw\">
                            Enable
                        </button>
                    </form>
                </td>
            {% endif %}
            <td>
                <a class=\"btn btn-primary\" href=\"{{ path('update',{'id':i.Id}) }}\" >Update</a>
            </td>
            <td>

                <form method=\"post\" action=\"{{ path('remove', {'id':i.Id}) }}\" onsubmit=\"return confirm('Etes vous sur de vouloir supprimer le user ?');\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ i.id) }}\">
                    <button class=\"btn btn-danger \">Remove</button>
                </form>
            </td>
        </tr>
    {% endfor %}
        </tbody>
        {{ knp_pagination_render(tabadmin) }}
        <tbody id=\"search\">
        </tbody>
    </table>

</div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$(document).ready(function () {
            \$(\"#search\").keyup(function (e) {
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url: \"{{ path('search_user') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type: 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue': value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success: function (retour) {
                        //console.log(retour);
                        if (retour) {
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function (i, obj) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append(
                                    ' <tr></td><td>    ' + obj.id + '' +
                                    '  </td><td>' + obj.Nom + '' +
                                    '  </td><td>' + obj.Prenom + '' +
                                    '  </td><td>' + obj.Numtel + '' +
                                    '  </td><td>' + obj.email + '' +
                                    '  </td></tr>');
                            });
                        } else {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>
        {% endblock %}", "admin/listaffiche.html.twig", "C:\\Users\\Mariem OUESLATI\\Downloads\\Pidev\\templates\\admin\\listaffiche.html.twig");
    }
}
