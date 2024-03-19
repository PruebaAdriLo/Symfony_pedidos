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

/* pedidos_productos/show.html.twig */
class __TwigTemplate_eb7b9adf7156636aec1fbe9d2490c7e0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedidos_productos/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedidos_productos/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pedidos Productos: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "
                            </h2>
                            <div class=\"grid grid-cols-3 gap-4\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidosProducto"]) || array_key_exists("pedidosProducto", $context) ? $context["pedidosProducto"] : (function () { throw new RuntimeError('Variable "pedidosProducto" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proPed"]) {
            // line 17
            echo "                                <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                                    <div class=\"px-4 py-4\">
                                        <div class=\"font-bold text-xl mb-2\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proPed"], "productos", [], "any", false, false, false, 19), "nombre", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
                                        <p class=\"mb-2\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proPed"], "unidades", [], "any", false, false, false, 20), "html", null, true);
            echo " unidades</p>
                                    </div>
                                        
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proPed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                                </div>
                            <div>

                        <div class=\"flex justify-end mt-4\">
                            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidosProductos");
        echo "\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver Pedidos Productos
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
        return "pedidos_productos/show.html.twig";
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
        return array (  117 => 28,  111 => 24,  101 => 20,  97 => 19,  93 => 17,  89 => 16,  83 => 13,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pedidos Productos: {{ pedido.id }}{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
            <div class=\"flex flex-col md:flex-row\">
                <div class=\"w-full md:w-1/2 p-4\">
                    <div class=\"flex flex-col justify-between h-full\">
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                {{ pedido.id }}
                            </h2>
                            <div class=\"grid grid-cols-3 gap-4\">
                            {% for proPed in pedidosProducto %}
                                <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                                    <div class=\"px-4 py-4\">
                                        <div class=\"font-bold text-xl mb-2\">{{ proPed.productos.nombre }}</div>
                                        <p class=\"mb-2\">{{ proPed.unidades }} unidades</p>
                                    </div>
                                        
                            {% endfor %}
                                </div>
                            <div>

                        <div class=\"flex justify-end mt-4\">
                            <a href=\"{{ path('app_pedidosProductos') }}\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver Pedidos Productos
                            </a>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "pedidos_productos/show.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\pedidos_productos\\show.html.twig");
    }
}
