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

/* productos/show.html.twig */
class __TwigTemplate_33ffd2f9a00d242c22e3c656c7cb0c1c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "productos/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "productos/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Productos: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 3, $this->source); })()), "nombre", [], "any", false, false, false, 3), "html", null, true);
        
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
            <div class=\"flex flex-col md:flex-row\">
                <div class=\"w-full md:w-1/2 p-4\">
                    <div class=\"flex flex-col justify-between h-full\">
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 13, $this->source); })()), "descripcion", [], "any", false, false, false, 13), "html", null, true);
        echo "
                            </h2>
                        </div>
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 18, $this->source); })()), "peso", [], "any", false, false, false, 18), "html", null, true);
        echo "kg - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 18, $this->source); })()), "stock", [], "any", false, false, false, 18), "html", null, true);
        echo " unidades
                            </h2>
                        </div>
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                ";
        // line 24
        echo "                                <a href=\"#\">Categoría: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 24, $this->source); })()), "categoria", [], "any", false, false, false, 24), "nombre", [], "any", false, false, false, 24), "html", null, true);
        echo "</a>
                            </h2>
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            ";
        // line 32
        echo "                            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_productos");
        echo "\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver Productos
                            </a>
                        </div>
                    </div>   
                </div>
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
        return "productos/show.html.twig";
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
        return array (  112 => 32,  103 => 24,  93 => 18,  83 => 13,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Productos: {{ producto.nombre }}{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
            <div class=\"flex flex-col md:flex-row\">
                <div class=\"w-full md:w-1/2 p-4\">
                    <div class=\"flex flex-col justify-between h-full\">
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                {{ producto.nombre }} - {{ producto.descripcion }}
                            </h2>
                        </div>
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                {{ producto.peso }}kg - {{ producto.stock }} unidades
                            </h2>
                        </div>
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                {# <a href=\"{{ path('app_productos_edit', {id: producto.id}) }}\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-l\"> #}
                                <a href=\"#\">Categoría: {{ producto.categoria.nombre }}</a>
                            </h2>
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            {# <a href=\"{{ path('app_producto_edit', {id: producto.id}) }}\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-l text-sm md:text-base\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a> #}
                            <a href=\"{{ path('app_productos') }}\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver Productos
                            </a>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "productos/show.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\productos\\show.html.twig");
    }
}
