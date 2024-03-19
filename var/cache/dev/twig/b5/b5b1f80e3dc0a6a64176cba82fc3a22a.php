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

/* categorias/show.html.twig */
class __TwigTemplate_01827162021a936753fa84b2ce624e27 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorias/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorias/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Categoría: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 3, $this->source); })()), "nombre", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 13, $this->source); })()), "descripcion", [], "any", false, false, false, 13), "html", null, true);
        echo "
                            </h2>
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 16
            echo "                            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                                <div class=\"px-4 py-4\">
                                    <div class=\"font-bold text-xl mb-2\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 18), "html", null, true);
            echo "</div> 
                                    <p class=\"text-gray-700 text-base\">
                                        ";
            // line 21
            echo "                                        ";
            // line 22
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "descripcion", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                    </p>
                                    <p class=\"text-gray-700 text-base\">
                                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "peso", [], "any", false, false, false, 25), "html", null, true);
            echo "kg - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 25), "html", null, true);
            echo " unidades
                                    </p>
                                </div>
                            </div>
                            <br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        </div>

                        <div class=\"flex justify-end mt-4\">
                            <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorias");
        echo "\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver categorías
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
        return "categorias/show.html.twig";
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
        return array (  131 => 34,  126 => 31,  112 => 25,  105 => 22,  103 => 21,  98 => 18,  94 => 16,  90 => 15,  83 => 13,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categoría: {{ categoria.nombre }}{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\"> 
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
            <div class=\"flex flex-col md:flex-row\">
                <div class=\"w-full md:w-1/2 p-4\">
                    <div class=\"flex flex-col justify-between h-full\">
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                {{ categoria.nombre }} - {{ categoria.descripcion }}
                            </h2>
                            {% for producto in productos %}
                            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                                <div class=\"px-4 py-4\">
                                    <div class=\"font-bold text-xl mb-2\">{{ producto.nombre }}</div> 
                                    <p class=\"text-gray-700 text-base\">
                                        {# Descripción. Corta las palabras cuando llega a 100 caracteres #}
                                        {# {{ producto.descripcion|slice(0, 100) }}... #}
                                        {{ producto.descripcion }}
                                    </p>
                                    <p class=\"text-gray-700 text-base\">
                                        {{ producto.peso }}kg - {{ producto.stock }} unidades
                                    </p>
                                </div>
                            </div>
                            <br>
                            {% endfor %}
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            <a href=\"{{ path('app_categorias') }}\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver categorías
                            </a>
                        </div>
                    </div>   
                </div> 
            </div> 
        </div>
    </div> 
{% endblock %}
", "categorias/show.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\categorias\\show.html.twig");
    }
}
