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
class __TwigTemplate_095eb2795efc056711b83caa48c90dd0 extends Template
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actor_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Actors
                    </button>
                </a>

                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_quote_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Quotes
                    </button>
                </a>
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
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 48
            echo "
                ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movie"], "movieQuotes", [], "any", false, false, false, 49), "empty", [], "any", false, false, false, 49)) {
                // line 50
                echo "                    <tr>
                    <th scope=\"row\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "</th>
                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "releaseYear", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>

                    <td>
                        No Quote
                    </td>
                    <td>
                        No Quoter
                    </td>
                ";
            } else {
                // line 62
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "movieQuotes", [], "any", false, false, false, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["movieQuote"]) {
                    // line 63
                    echo "                        <tr>
                            <th scope=\"row\">";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 64), "html", null, true);
                    echo "</th>
                            <td>";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 65), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "releaseYear", [], "any", false, false, false, 66), "html", null, true);
                    echo "</td>


                            <td>
                                <q>";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movieQuote"], "quote", [], "any", false, false, false, 70), "html", null, true);
                    echo "</q>
                            </td>
                            <td>
                                ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movieQuote"], "quoter", [], "any", false, false, false, 73), "html", null, true);
                    echo "
                            </td>

                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movieQuote'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                ";
            }
            // line 79
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        return array (  224 => 80,  218 => 79,  215 => 78,  204 => 73,  198 => 70,  191 => 66,  187 => 65,  183 => 64,  180 => 63,  175 => 62,  163 => 53,  159 => 52,  155 => 51,  152 => 50,  150 => 49,  147 => 48,  143 => 47,  121 => 28,  112 => 22,  103 => 16,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

                <a href=\"{{ path('app_actor_index') }}\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Actors
                    </button>
                </a>

                <a href=\"{{ path('app_movie_quote_index') }}\">
                    <button type=\"button\" class=\"btn btn-primary\">
                        Quotes
                    </button>
                </a>
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
