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

/* search/search_random.html.twig */
class __TwigTemplate_8b676af2663791dadca018cf196251d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/search_random.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/search_random.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/search_random.html.twig", 1);
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

        echo "Search in Repository";
        
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
        echo "    <div class=\"w-100 h-100 p-5 overflow-scroll\">
        <h3 class=\"text-center\"> Search for Movies by their name</h3>
        <div class=\"d-flex w-50 m-4 mx-auto gap-2\">
            <div class=\"input-group\">
                <div class=\"form-floating\">
                    <input type=\"text\" id=\"movieSearchInput\" class=\"form-control\" placeholder=\"Movie Name\" autofocus
                           value=\"";
        // line 12
        ((array_key_exists("term", $context)) ? (print (twig_escape_filter($this->env, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 12, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">
                    <label for=\"movieSearchInput\">Movie Name</label>
                </div>
                <button class=\"btn btn-outline-secondary bg-primary\" disabled type=\"button\" id=\"search\"><i
                            class=\"fas text-white fa-search\"></i>
                </button>
            </div>

            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_random_movie");
        echo "\">
                <button class=\"btn bg-primary text-white rounded h-100\" id=\"randomBtn\"
                        style=\"width: max-content; white-space: nowrap\">
                    Random Movie
                </button>
            </a>

            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_overview");
        echo "\">
                <button class=\"btn btn-secondary h-100\">
                    Home
                </button>
            </a>
        </div>

        <div class=\"w-50 mx-auto mt-4 \">
            ";
        // line 35
        if (array_key_exists("movies", $context)) {
            // line 36
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 36, $this->source); })())) == 0)) {
                // line 37
                echo "                    No movies with the name <i>'";
                echo twig_escape_filter($this->env, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "'</i> found
                ";
            } else {
                // line 39
                echo "                    Suchergebnisse: ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 39, $this->source); })())), "html", null, true);
                echo "

                    <div class=\"d-flex flex-wrap gap-4 mt-2\">
                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 42, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                    // line 43
                    echo "                            <div class=\"card\" style=\"width: calc(50% - 1.5rem)\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"> ";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo " </h5>
                                    <h6 class=\"card-subtitle mb-2 text-muted\"> ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "releaseYear", [], "any", false, false, false, 46), "html", null, true);
                    echo " </h6>

                                    <div class=\"card-text\">
                                        <p>Movie Id: ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "</p>

                                        ";
                    // line 51
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movie"], "movieQuotes", [], "any", false, false, false, 51), "empty", [], "any", false, false, false, 51)) {
                        // line 52
                        echo "                                            No Quotes
                                        ";
                    } else {
                        // line 54
                        echo "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "movieQuotes", [], "any", false, false, false, 54));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            // line 55
                            echo "                                                Movie Quotes:
                                                <div>
                                                    <ul class=\"list-group list-group-flush\">
                                                        <li class=\"list-group-item\">
                                                            <blockquote class=\"blockquote mb-0\">
                                                                <p>";
                            // line 60
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "quote", [], "any", false, false, false, 60), "html", null, true);
                            echo "</p>
                                                                <footer class=\"blockquote-footer\"> ";
                            // line 61
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "quoter", [], "any", false, false, false, 61), "html", null, true);
                            echo " </footer>
                                                            </blockquote>
                                                        </li>
                                                    </ul>
                                                </div>

                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "                                        ";
                    }
                    // line 69
                    echo "                                    </div>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                    </div>
                ";
            }
            // line 75
            echo "            ";
        } elseif (array_key_exists("random_movies", $context)) {
            // line 76
            echo "                <div class=\"d-flex flex-wrap gap-4 mt-2\">
                    ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["random_movies"]) || array_key_exists("random_movies", $context) ? $context["random_movies"] : (function () { throw new RuntimeError('Variable "random_movies" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["random_movie"]) {
                // line 78
                echo "                        <div class=\"card\" style=\"width: calc(50% - 1.5rem)\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\"> ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["random_movie"], "name", [], "any", false, false, false, 80), "html", null, true);
                echo " </h5>
                                <h6 class=\"card-subtitle mb-2 text-muted\"> ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["random_movie"], "release_year", [], "any", false, false, false, 81), "html", null, true);
                echo " </h6>

                                <div class=\"card-text\">
                                    <p>Movie Id: ";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["random_movie"], "id", [], "any", false, false, false, 84), "html", null, true);
                echo " </p>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['random_movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                </div>
            ";
        }
        // line 91
        echo "        </div>
    </div>

    <script>
        let searchButton = document.getElementById('search')
        let searchInput = document.getElementById('movieSearchInput')

        checkInput()

        searchButton.addEventListener(\"click\", search)
        searchInput.addEventListener(\"input\", checkInput)
        searchInput.addEventListener(\"keypress\", function (event) {
            if (event.key === 'Enter') {
                searchButton.click();
            }
        });

        function checkInput() {
            searchButton.disabled = searchInput.value === ''
        }

        function search() {
            console.log('Event fired')
            location.href = `/search/\${searchInput.value}`
        }

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "search/search_random.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 91,  255 => 89,  244 => 84,  238 => 81,  234 => 80,  230 => 78,  226 => 77,  223 => 76,  220 => 75,  216 => 73,  207 => 69,  204 => 68,  191 => 61,  187 => 60,  180 => 55,  175 => 54,  171 => 52,  169 => 51,  164 => 49,  158 => 46,  154 => 45,  150 => 43,  146 => 42,  139 => 39,  133 => 37,  130 => 36,  128 => 35,  117 => 27,  107 => 20,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Search in Repository{% endblock %}

{% block body %}
    <div class=\"w-100 h-100 p-5 overflow-scroll\">
        <h3 class=\"text-center\"> Search for Movies by their name</h3>
        <div class=\"d-flex w-50 m-4 mx-auto gap-2\">
            <div class=\"input-group\">
                <div class=\"form-floating\">
                    <input type=\"text\" id=\"movieSearchInput\" class=\"form-control\" placeholder=\"Movie Name\" autofocus
                           value=\"{{ term is defined ? term : '' }}\">
                    <label for=\"movieSearchInput\">Movie Name</label>
                </div>
                <button class=\"btn btn-outline-secondary bg-primary\" disabled type=\"button\" id=\"search\"><i
                            class=\"fas text-white fa-search\"></i>
                </button>
            </div>

            <a href=\"{{ path('app_random_movie') }}\">
                <button class=\"btn bg-primary text-white rounded h-100\" id=\"randomBtn\"
                        style=\"width: max-content; white-space: nowrap\">
                    Random Movie
                </button>
            </a>

            <a href=\"{{ path('app_overview') }}\">
                <button class=\"btn btn-secondary h-100\">
                    Home
                </button>
            </a>
        </div>

        <div class=\"w-50 mx-auto mt-4 \">
            {% if movies is defined %}
                {% if movies|length == 0 %}
                    No movies with the name <i>'{{ term }}'</i> found
                {% else %}
                    Suchergebnisse: {{ movies|length }}

                    <div class=\"d-flex flex-wrap gap-4 mt-2\">
                        {% for movie in movies %}
                            <div class=\"card\" style=\"width: calc(50% - 1.5rem)\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"> {{ movie.name }} </h5>
                                    <h6 class=\"card-subtitle mb-2 text-muted\"> {{ movie.releaseYear }} </h6>

                                    <div class=\"card-text\">
                                        <p>Movie Id: {{ movie.id }}</p>

                                        {% if movie.movieQuotes.empty %}
                                            No Quotes
                                        {% else %}
                                            {% for quote in movie.movieQuotes %}
                                                Movie Quotes:
                                                <div>
                                                    <ul class=\"list-group list-group-flush\">
                                                        <li class=\"list-group-item\">
                                                            <blockquote class=\"blockquote mb-0\">
                                                                <p>{{ quote.quote }}</p>
                                                                <footer class=\"blockquote-footer\"> {{ quote.quoter }} </footer>
                                                            </blockquote>
                                                        </li>
                                                    </ul>
                                                </div>

                                            {% endfor %}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            {% elseif random_movies is defined %}
                <div class=\"d-flex flex-wrap gap-4 mt-2\">
                    {% for random_movie in random_movies %}
                        <div class=\"card\" style=\"width: calc(50% - 1.5rem)\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\"> {{ random_movie.name }} </h5>
                                <h6 class=\"card-subtitle mb-2 text-muted\"> {{ random_movie.release_year }} </h6>

                                <div class=\"card-text\">
                                    <p>Movie Id: {{ random_movie.id }} </p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>

    <script>
        let searchButton = document.getElementById('search')
        let searchInput = document.getElementById('movieSearchInput')

        checkInput()

        searchButton.addEventListener(\"click\", search)
        searchInput.addEventListener(\"input\", checkInput)
        searchInput.addEventListener(\"keypress\", function (event) {
            if (event.key === 'Enter') {
                searchButton.click();
            }
        });

        function checkInput() {
            searchButton.disabled = searchInput.value === ''
        }

        function search() {
            console.log('Event fired')
            location.href = `/search/\${searchInput.value}`
        }

    </script>
{% endblock %}", "search/search_random.html.twig", "/Users/alex/Schule/5bi-2022-23/Medientechnik/Content Management Systeme - Vertiefung/SymfonyORM/templates/search/search_random.html.twig");
    }
}
