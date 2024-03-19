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

/* productos/create.html.twig */
class __TwigTemplate_aa4506b56006bc58ca8ce749f0961e8a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "productos/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "productos/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Producto";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div class=\"container mx-auto px-4 py-8\">
\t\t<div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
\t\t\t<div class=\"px-4 py-8\">

\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t<h1 class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t<i class=\"fas fa-film\"></i> Nuevo Producto
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo " 

\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'widget');
        echo " 

\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
\t\t\t\t\t\t<i class=\"fas fa-save\"></i> Guardar
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_productos");
        echo "\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded\"
>
\t\t\t\t\t\t<i class=\"fas fa-arrow-left\"></i> Atrás
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
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
        return "productos/create.html.twig";
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
        return array (  108 => 30,  99 => 24,  90 => 18,  85 => 16,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nuevo Producto{% endblock %}

{% block body %}
\t<div class=\"container mx-auto px-4 py-8\">
\t\t<div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
\t\t\t<div class=\"px-4 py-8\">

\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t<h1 class=\"text-2xl font-bold text-gray-800\">
\t\t\t\t\t\t<i class=\"fas fa-film\"></i> Nuevo Producto
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t{{ form_start(form) }} 

\t\t\t\t{{ form_widget(form) }} 

\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
\t\t\t\t\t\t<i class=\"fas fa-save\"></i> Guardar
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"{{ path('app_productos') }}\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded\"
>
\t\t\t\t\t\t<i class=\"fas fa-arrow-left\"></i> Atrás
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t{{ form_end(form) }} 
\t\t\t</div>
        </div>
    </div>
{% endblock %}", "productos/create.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\productos\\create.html.twig");
    }
}
