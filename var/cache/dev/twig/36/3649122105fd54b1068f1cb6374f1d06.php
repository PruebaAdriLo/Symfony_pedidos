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

/* restaurantes/show.html.twig */
class __TwigTemplate_4f1ecc682bc3f0f66b2fb357bde82d8c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurantes/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "restaurantes/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Restaurantes: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 3, $this->source); })()), "correo", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 13, $this->source); })()), "correo", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 13, $this->source); })()), "clave", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 13, $this->source); })()), "rol", [], "any", false, false, false, 13), "html", null, true);
        echo "
                            </h2>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 16, $this->source); })()), "ciudad", [], "any", false, false, false, 16), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 16, $this->source); })()), "cp", [], "any", false, false, false, 16), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 16, $this->source); })()), "direccion", [], "any", false, false, false, 16), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantes"]) || array_key_exists("restaurantes", $context) ? $context["restaurantes"] : (function () { throw new RuntimeError('Variable "restaurantes" does not exist.', 16, $this->source); })()), "pais", [], "any", false, false, false, 16), "html", null, true);
        echo "
                            </h2>
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            ";
        // line 24
        echo "                            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurantes");
        echo "\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver Restaurantes
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
        return "restaurantes/show.html.twig";
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
        return array (  107 => 24,  93 => 16,  83 => 13,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Restaurantes: {{ restaurantes.correo }}{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
            <div class=\"flex flex-col md:flex-row\">
                <div class=\"w-full md:w-1/2 p-4\">
                    <div class=\"flex flex-col justify-between h-full\">
                        <div>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                {{ restaurantes.correo }} - {{ restaurantes.clave }} - {{ restaurantes.rol }}
                            </h2>
                            <h2 class=\"text-lg md:text-2xl font-semibold text-gray-800 leading-tight bg-gray-200 p-2 gap-2\">    
                                {{ restaurantes.ciudad }} - {{ restaurantes.cp }} - {{ restaurantes.direccion }} - {{ restaurantes.pais }}
                            </h2>
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            {# <a href=\"{{ path('app_restaurante_edit', {id: restaurante.id}) }}\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-l text-sm md:text-base\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a> #}
                            <a href=\"{{ path('app_restaurantes') }}\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-r text-sm md:text-base\">
                                <i class=\"fas fa-list\"></i> Ver Restaurantes
                            </a>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "restaurantes/show.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\restaurantes\\show.html.twig");
    }
}
