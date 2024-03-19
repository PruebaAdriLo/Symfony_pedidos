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

/* pedidos_productos/edit.html.twig */
class __TwigTemplate_8ee5babc00d71e5794adeeaba1e3802c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedidos_productos/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedidos_productos/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Editar pedido nº ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedidosProductos"]) || array_key_exists("pedidosProductos", $context) ? $context["pedidosProductos"] : (function () { throw new RuntimeError('Variable "pedidosProductos" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
                        </i> Editar pedido nº ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedidosProductos"]) || array_key_exists("pedidosProductos", $context) ? $context["pedidosProductos"] : (function () { throw new RuntimeError('Variable "pedidosProductos" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "
                    </h1>
                </div>

                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'widget');
        echo "
\t                <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
\t\t\t\t\t\t<i class=\"fas fa-save\"></i> Guardar
\t\t\t\t\t</button>
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
                    <br>

                <div class=\"mt-4\">
                    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidosProductos");
        echo "\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded\">
                        <i class=\"fas fa-arrow-left\"></i> Atrás
                    </a>
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
        return "pedidos_productos/edit.html.twig";
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
        return array (  107 => 24,  100 => 20,  93 => 16,  89 => 15,  82 => 11,  75 => 6,  68 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar pedido nº {{ pedidosProductos.id }} {% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
            <div class=\"px-4 py-8\">
                <div class=\"mb-2\">
                    <h1 class=\"text-2xl font-bold text-gray-800\">
                        </i> Editar pedido nº {{ pedidosProductos.id }}
                    </h1>
                </div>

                    {{ form_start(form) }}
                    {{ form_widget(form) }}
\t                <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
\t\t\t\t\t\t<i class=\"fas fa-save\"></i> Guardar
\t\t\t\t\t</button>
                    {{ form_end(form) }}
                    <br>

                <div class=\"mt-4\">
                    <a href=\"{{ path('app_pedidosProductos') }}\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded\">
                        <i class=\"fas fa-arrow-left\"></i> Atrás
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "pedidos_productos/edit.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\pedidos_productos\\edit.html.twig");
    }
}
