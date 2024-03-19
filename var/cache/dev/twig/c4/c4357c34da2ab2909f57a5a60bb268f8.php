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

/* pedidos/show.html.twig */
class __TwigTemplate_9fb63a57d99d67833288903d7765046f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedidos/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedidos/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pedidos: ";
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 13, $this->source); })()), "restaurante", [], "any", false, false, false, 13), "html", null, true);
        echo "
                            </h2>
                            <p class=\"mb-2\">Fecha: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 15, $this->source); })()), "fecha", [], "any", false, false, false, 15), "d/m/Y H:i:s"), "html", null, true);
        echo "</p>
                            <p class=\"mb-2\">Enviado: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 16, $this->source); })()), "enviado", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            ";
        // line 23
        echo "                            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidos");
        echo "\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver Pedidos
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
        return "pedidos/show.html.twig";
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
        return array (  99 => 23,  92 => 16,  88 => 15,  83 => 13,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pedidos: {{ pedido.id }}{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
            <div class=\"flex flex-col md:flex-row\">
                <div class=\"w-full md:w-1/2 p-4\">
                    <div class=\"flex flex-col justify-between h-full\">
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                {{ pedido.restaurante }}
                            </h2>
                            <p class=\"mb-2\">Fecha: {{ pedido.fecha|date('d/m/Y H:i:s') }}</p>
                            <p class=\"mb-2\">Enviado: {{ pedido.enviado }}</p>
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            {# <a href=\"{{ path('app_pedido_edit', {id: pedido.id}) }}\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-l text-sm md:text-base\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a> #}
                            <a href=\"{{ path('app_pedidos') }}\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver Pedidos
                            </a>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "pedidos/show.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\pedidos\\show.html.twig");
    }
}
