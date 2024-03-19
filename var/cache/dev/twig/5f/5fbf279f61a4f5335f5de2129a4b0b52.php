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

/* categorias/edit.html.twig */
class __TwigTemplate_a1e76aac71dfec6e3bfc752bd7ce4382 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorias/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorias/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Editar
";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 4, $this->source); })()), "nombre", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container mx-auto px-4 py-8\">
\t\t<div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
\t\t\t<div class=\"px-4 py-8\">

\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t<h1 class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t<i class=\"fas fa-film\"></i> Editar categoría: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo " 

\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'widget');
        echo " 
\t\t\t\t
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
\t\t\t\t\t\t<i class=\"fas fa-save\"></i> Guardar
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorias");
        echo "\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded\"
>
\t\t\t\t\t\t<i class=\"fas fa-arrow-left\"></i> Atrás
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo " 
\t\t\t</div>
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
        return "categorias/edit.html.twig";
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
        return array (  115 => 31,  106 => 25,  97 => 19,  92 => 17,  85 => 13,  77 => 7,  70 => 6,  62 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar
{{ categoria.nombre }} {% endblock %}

{% block body %}
\t<div class=\"container mx-auto px-4 py-8\">
\t\t<div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
\t\t\t<div class=\"px-4 py-8\">

\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t<h1 class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t<i class=\"fas fa-film\"></i> Editar categoría: {{ categoria.nombre }}
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t{{ form_start(form) }} 

\t\t\t\t{{ form_widget(form) }} 
\t\t\t\t
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
\t\t\t\t\t\t<i class=\"fas fa-save\"></i> Guardar
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"{{ path('app_categorias') }}\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded\"
>
\t\t\t\t\t\t<i class=\"fas fa-arrow-left\"></i> Atrás
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t{{ form_end(form) }} 
\t\t\t</div>
        </div>
    </div>
{% endblock %}", "categorias/edit.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\categorias\\edit.html.twig");
    }
}
