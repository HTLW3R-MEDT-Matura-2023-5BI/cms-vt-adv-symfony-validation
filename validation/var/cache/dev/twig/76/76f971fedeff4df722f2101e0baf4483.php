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

/* overview/index.html.twig */
class __TwigTemplate_ff949b25e87d1be5656d65bbabfc3c9e extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "overview/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "overview/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "overview/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Overview";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"d-flex justify-content-between\">
            <h1>Movie & Movie Quotes Overview </h1>
            <div class=\"d-flex gap-4\">
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        echo "\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Search
                    </button>
                </a>

                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Movies
                    </button>
                </a>

                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_quote_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Quotes
                    </button>
                </a>

                ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 29
            echo "                    <a class=\"link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        <button type=\"button\" class=\"btn btn-info\">
                            Logout
                        </button>
                    </a>

                ";
        } else {
            // line 36
            echo "                    <a class=\"link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                        <button type=\"button\" class=\"btn btn-info\">
                            Login
                        </button>
                    </a>
                ";
        }
        // line 42
        echo "            </div>
        </div>

        <table class=\"table table-sm table-hover table-striped mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Release Year</th>
                <th scope=\"col\">Movie Quote</th>
                <th scope=\"col\">Quoter</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 57
            echo "
                ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movie"], "movieQuotes", [], "any", false, false, false, 58), "empty", [], "any", false, false, false, 58)) {
                // line 59
                echo "                    <tr>
                    <th scope=\"row\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "</th>
                    <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                    <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "releaseYear", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>

                    <td>
                        No Quote
                    </td>
                    <td>
                        No Quoter
                    </td>
                ";
            } else {
                // line 71
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "movieQuotes", [], "any", false, false, false, 71));
                foreach ($context['_seq'] as $context["_key"] => $context["movieQuote"]) {
                    // line 72
                    echo "                        <tr>
                            <th scope=\"row\">";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 73), "html", null, true);
                    echo "</th>
                            <td>";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 74), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "releaseYear", [], "any", false, false, false, 75), "html", null, true);
                    echo "</td>


                            <td>
                                <q>";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movieQuote"], "quote", [], "any", false, false, false, 79), "html", null, true);
                    echo "</q>
                            </td>
                            <td>
                                ";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movieQuote"], "quoter", [], "any", false, false, false, 82), "html", null, true);
                    echo "
                            </td>

                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movieQuote'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                ";
            }
            // line 88
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "overview/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 89,  235 => 88,  232 => 87,  221 => 82,  215 => 79,  208 => 75,  204 => 74,  200 => 73,  197 => 72,  192 => 71,  180 => 62,  176 => 61,  172 => 60,  169 => 59,  167 => 58,  164 => 57,  160 => 56,  144 => 42,  134 => 36,  123 => 29,  121 => 28,  112 => 22,  103 => 16,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Overview{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"d-flex justify-content-between\">
            <h1>Movie & Movie Quotes Overview </h1>
            <div class=\"d-flex gap-4\">
                <a href=\"{{ path('app_search') }}\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Search
                    </button>
                </a>

                <a href=\"{{ path('app_movie_index') }}\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Movies
                    </button>
                </a>

                <a href=\"{{ path('app_movie_quote_index') }}\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Quotes
                    </button>
                </a>

                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <a class=\"link\" href=\"{{ path('app_logout') }}\">
                        <button type=\"button\" class=\"btn btn-info\">
                            Logout
                        </button>
                    </a>

                {% else %}
                    <a class=\"link\" href=\"{{ path('app_login') }}\">
                        <button type=\"button\" class=\"btn btn-info\">
                            Login
                        </button>
                    </a>
                {% endif %}
            </div>
        </div>

        <table class=\"table table-sm table-hover table-striped mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Release Year</th>
                <th scope=\"col\">Movie Quote</th>
                <th scope=\"col\">Quoter</th>
            </tr>
            </thead>
            <tbody>
            {% for movie in movies %}

                {% if movie.movieQuotes.empty %}
                    <tr>
                    <th scope=\"row\">{{ movie.id }}</th>
                    <td>{{ movie.name }}</td>
                    <td>{{ movie.releaseYear }}</td>

                    <td>
                        No Quote
                    </td>
                    <td>
                        No Quoter
                    </td>
                {% else %}
                    {% for movieQuote in movie.movieQuotes %}
                        <tr>
                            <th scope=\"row\">{{ movie.id }}</th>
                            <td>{{ movie.name }}</td>
                            <td>{{ movie.releaseYear }}</td>


                            <td>
                                <q>{{ movieQuote.quote }}</q>
                            </td>
                            <td>
                                {{ movieQuote.quoter }}
                            </td>

                        </tr>
                    {% endfor %}
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "overview/index.html.twig", "/Users/alex/Schule/5bi-2022-23/Medientechnik/Content Management Systeme - Vertiefung/SymfonyORM/templates/overview/index.html.twig");
    }
}
