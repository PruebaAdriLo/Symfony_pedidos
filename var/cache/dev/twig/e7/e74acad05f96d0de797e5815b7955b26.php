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

/* pedidos/create.html.twig */
class __TwigTemplate_0a899f248345a566c5fcc600c4c6030f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedidos/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedidos/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pedidos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
            <div class=\"px-4 py-8\">

                <div class=\"mb-2\">
                    <h1 class=\"text-2xl font-bold text-gray-800\">
                        <i class=\"fas fa-film\"></i> Pedidos
                    </h1>
                </div>

                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'widget');
        echo "

                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 21
            echo "                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                        <strong class=\"font-bold\">¡Error!</strong>
                        <span class=\"block sm:inline\">";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span>
                        <span class=\"absolute top-0 bottom-0 right-0 px-4 py-3\">
                            <svg class=\"fill-current h-6 w-6 text-red-500\" role=\"button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\">
                                <title>Cerrar</title>
                                <path d=\"M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 5.354 4.647a.5.5 0 0 0-.707 0l-1 1a.5.5 0 0 0 0 .707L9.293 10l-4.646 4.646a.5.5 0 0 0 0 .707l1 1a.5.5 0 0 0 .707 0L10 10.707l4.646 4.646a.5.5 0 0 0 .707 0l1-1a.5.5 0 0 0 0-.707L10.707 10l4.647-4.646a.5.5 0 0 0 0-.707l-1-1z\"/>
                            </svg>
                        </span>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                <div class=\"mt-4\">
                    <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                        <i class=\"fas fa-save\"></i> Guardar
                    </button>
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidos");
        echo "\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded\"
>
                        <i class=\"fas fa-arrow-left\"></i> Atrás
                    </a>
                </div>

                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pedidos/create.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  134 => 43,  125 => 37,  118 => 32,  103 => 23,  99 => 21,  95 => 20,  90 => 18,  85 => 16,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pedidos{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
            <div class=\"px-4 py-8\">

                <div class=\"mb-2\">
                    <h1 class=\"text-2xl font-bold text-gray-800\">
                        <i class=\"fas fa-film\"></i> Pedidos
                    </h1>
                </div>

                {{ form_start(form) }}

                {{ form_widget(form) }}

                {% for flash_message in app.flashes('danger') %}
                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                        <strong class=\"font-bold\">¡Error!</strong>
                        <span class=\"block sm:inline\">{{ flash_message }}</span>
                        <span class=\"absolute top-0 bottom-0 right-0 px-4 py-3\">
                            <svg class=\"fill-current h-6 w-6 text-red-500\" role=\"button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\">
                                <title>Cerrar</title>
                                <path d=\"M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 5.354 4.647a.5.5 0 0 0-.707 0l-1 1a.5.5 0 0 0 0 .707L9.293 10l-4.646 4.646a.5.5 0 0 0 0 .707l1 1a.5.5 0 0 0 .707 0L10 10.707l4.646 4.646a.5.5 0 0 0 .707 0l1-1a.5.5 0 0 0 0-.707L10.707 10l4.647-4.646a.5.5 0 0 0 0-.707l-1-1z\"/>
                            </svg>
                        </span>
                    </div>
                {% endfor %}

                <div class=\"mt-4\">
                    <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                        <i class=\"fas fa-save\"></i> Guardar
                    </button>
                    <a href=\"{{ path('app_pedidos') }}\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded\"
>
                        <i class=\"fas fa-arrow-left\"></i> Atrás
                    </a>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "pedidos/create.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\pedidos\\create.html.twig");
    }
}
