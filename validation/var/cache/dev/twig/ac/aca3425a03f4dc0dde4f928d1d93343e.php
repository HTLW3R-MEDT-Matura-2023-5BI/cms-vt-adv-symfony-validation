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

/* movie_quote/index.html.twig */
class __TwigTemplate_2c4c5e1bb144788f54a92328719c67a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie_quote/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie_quote/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "movie_quote/index.html.twig", 1);
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

        echo "MovieQuote Overview";
        
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
            <h1>MovieQuote Overview</h1>
            <div class=\"d-flex gap-4\">

                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_overview");
        echo "\">
                    <button type=\"button\" class=\"btn btn-secondary\">
                        Home
                    </button>
                </a>
                ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "                    <a class=\"link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        <button type=\"button\" class=\"btn btn-info\">
                            Logout
                        </button>
                    </a>

                ";
        } else {
            // line 24
            echo "                    <a class=\"link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                        <button type=\"button\" class=\"btn btn-info\">
                            Login
                        </button>
                    </a>
                ";
        }
        // line 30
        echo "            </div>
        </div>

        <table class=\"table table-sm table-hover table-striped mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Quote</th>
                <th scope=\"col\">Quoter</th>
                <th scope=\"col\">actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movie_quotes"]) || array_key_exists("movie_quotes", $context) ? $context["movie_quotes"] : (function () { throw new RuntimeError('Variable "movie_quotes" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie_quote"]) {
            // line 44
            echo "                <tr>
                    <th scope=\"row\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie_quote"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</th>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie_quote"], "quote", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie_quote"], "quoter", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_quote_show", ["id" => twig_get_attribute($this->env, $this->source, $context["movie_quote"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">show</a>
                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_quote_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["movie_quote"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie_quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_quote_new");
        echo "\">
            <button class=\"btn btn-primary\">
                Create new
            </button>
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "movie_quote/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 61,  184 => 58,  175 => 54,  166 => 50,  162 => 49,  157 => 47,  153 => 46,  149 => 45,  146 => 44,  141 => 43,  126 => 30,  116 => 24,  105 => 17,  103 => 16,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MovieQuote Overview{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"d-flex justify-content-between\">
            <h1>MovieQuote Overview</h1>
            <div class=\"d-flex gap-4\">

                <a href=\"{{ path('app_overview') }}\">
                    <button type=\"button\" class=\"btn btn-secondary\">
                        Home
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
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Quote</th>
                <th scope=\"col\">Quoter</th>
                <th scope=\"col\">actions</th>
            </tr>
            </thead>
            <tbody>
            {% for movie_quote in movie_quotes %}
                <tr>
                    <th scope=\"row\">{{ movie_quote.id }}</th>
                    <td>{{ movie_quote.quote }}</td>
                    <td>{{ movie_quote.quoter }}</td>
                    <td>
                        <a href=\"{{ path('app_movie_quote_show', {'id': movie_quote.id}) }}\">show</a>
                        <a href=\"{{ path('app_movie_quote_edit', {'id': movie_quote.id}) }}\">edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_movie_quote_new') }}\">
            <button class=\"btn btn-primary\">
                Create new
            </button>
        </a>
    </div>
{% endblock %}
", "movie_quote/index.html.twig", "/Users/alex/Schule/5bi-2022-23/Medientechnik/Content Management Systeme - Vertiefung/SymfonyORM/templates/movie_quote/index.html.twig");
    }
}
