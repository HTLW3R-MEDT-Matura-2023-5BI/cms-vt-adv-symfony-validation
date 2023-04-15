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

/* movie_quote/_delete_form.html.twig */
class __TwigTemplate_f4527f83a937cd29f7466e41f5939a7f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie_quote/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie_quote/_delete_form.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_quote_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["movie_quote"]) || array_key_exists("movie_quote", $context) ? $context["movie_quote"] : (function () { throw new RuntimeError('Variable "movie_quote" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
            echo "\"
          onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["movie_quote"]) || array_key_exists("movie_quote", $context) ? $context["movie_quote"] : (function () { throw new RuntimeError('Variable "movie_quote" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))), "html", null, true);
            echo "\">
        <button class=\"btn btn-danger\">Delete</button>
    </form>
";
        } else {
            // line 8
            echo "    <div class=\"alert alert-danger mb-0\"> Not allowed to delete</div>
";
        }
        // line 10
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "movie_quote/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  58 => 8,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <form method=\"post\" action=\"{{ path('app_movie_quote_delete', {'id': movie_quote.id}) }}\"
          onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ movie_quote.id) }}\">
        <button class=\"btn btn-danger\">Delete</button>
    </form>
{% else %}
    <div class=\"alert alert-danger mb-0\"> Not allowed to delete</div>
{% endif %}

", "movie_quote/_delete_form.html.twig", "/Users/alex/Schule/5bi-2022-23/Medientechnik/Content Management Systeme - Vertiefung/SymfonyORM/templates/movie_quote/_delete_form.html.twig");
    }
}
