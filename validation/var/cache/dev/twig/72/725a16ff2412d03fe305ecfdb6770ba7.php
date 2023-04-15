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

/* movie_quote/show.html.twig */
class __TwigTemplate_8b499bfe4f340f97eb8b90384aab6b15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie_quote/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie_quote/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "movie_quote/show.html.twig", 1);
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

        echo "MovieQuote";
        
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
        echo "    <div class=\"container d-flex flex-column align-items-center\">

        <h1>MovieQuote</h1>

        <table class=\"table w-auto\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie_quote"]) || array_key_exists("movie_quote", $context) ? $context["movie_quote"] : (function () { throw new RuntimeError('Variable "movie_quote" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quote</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie_quote"]) || array_key_exists("movie_quote", $context) ? $context["movie_quote"] : (function () { throw new RuntimeError('Variable "movie_quote" does not exist.', 18, $this->source); })()), "quote", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quoter</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie_quote"]) || array_key_exists("movie_quote", $context) ? $context["movie_quote"] : (function () { throw new RuntimeError('Variable "movie_quote" does not exist.', 22, $this->source); })()), "quoter", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>

        <div class=\"d-flex gap-4 align-items-center\">
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_quote_index");
        echo "\">
                <button class=\"btn btn-secondary\">
                    back to list
                </button>
            </a>

            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_quote_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["movie_quote"]) || array_key_exists("movie_quote", $context) ? $context["movie_quote"] : (function () { throw new RuntimeError('Variable "movie_quote" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">
                <button class=\"btn btn-primary\">
                    edit
                </button>
            </a>

            ";
        // line 40
        echo twig_include($this->env, $context, "movie_quote/_delete_form.html.twig");
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "movie_quote/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  130 => 34,  121 => 28,  112 => 22,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MovieQuote{% endblock %}

{% block body %}
    <div class=\"container d-flex flex-column align-items-center\">

        <h1>MovieQuote</h1>

        <table class=\"table w-auto\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>{{ movie_quote.id }}</td>
            </tr>
            <tr>
                <th>Quote</th>
                <td>{{ movie_quote.quote }}</td>
            </tr>
            <tr>
                <th>Quoter</th>
                <td>{{ movie_quote.quoter }}</td>
            </tr>
            </tbody>
        </table>

        <div class=\"d-flex gap-4 align-items-center\">
            <a href=\"{{ path('app_movie_quote_index') }}\">
                <button class=\"btn btn-secondary\">
                    back to list
                </button>
            </a>

            <a href=\"{{ path('app_movie_quote_edit', {'id': movie_quote.id}) }}\">
                <button class=\"btn btn-primary\">
                    edit
                </button>
            </a>

            {{ include('movie_quote/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}
", "movie_quote/show.html.twig", "/Users/alex/Schule/5bi-2022-23/Medientechnik/Content Management Systeme - Vertiefung/SymfonyORM/templates/movie_quote/show.html.twig");
    }
}
