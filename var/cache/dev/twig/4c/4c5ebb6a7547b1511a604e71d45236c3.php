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

/* categorias/index.html.twig */
class __TwigTemplate_9cec2c09b0311d1ed42612f705d67f3c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorias/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorias/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "categorias";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"bg-gray-900 py-16\">
        <div class=\"container mx-auto px-4\">
            <h1 class=\"text-6xl text-white text-center\">
                 Categorías
            </h1>
        </div>
    </div>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            echo "        <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
            <strong class=\"font-bold\">¡Error!</strong>
            <span class=\"block sm:inline\">";
            // line 18
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
        // line 27
        echo "
\t<div class=\"container mx-auto px-4 py-8\">
        ";
        // line 29
        if (twig_test_empty((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                <div class=\"px-6 py-4\">
                    <div class=\"font-bold text-xl mb-2\">No category found</div>
                    <p class=\"text-gray-700 text-base\">
                        There are no category in the database. <a href=\"#\" class=\"text-blue-500\">Add one</a>!
                    </p>
            </div>
        ";
        } else {
            // line 38
            echo "\t\t\t<div class=\"grid grid-cols-3 gap-4\">
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 40
                echo "                <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">

\t\t\t\t\t<div class=\"px-4 py-4\">
                        <div class=\"font-bold text-xl mb-2\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nombre", [], "any", false, false, false, 43), "html", null, true);
                echo "</div>
                        <p class=\"mb-2\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "descripcion", [], "any", false, false, false, 44), "html", null, true);
                echo "</p>
                    </div>
\t\t\t\t\t<div class=\"flex justify-center my-3\">
                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoria_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-l\">
                            <i class=\"fas fa-edit\"></i> Editar
                        </a>
\t\t\t\t\t\t<a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoria", ["id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4\">
\t\t\t\t\t\t    <i class=\"fas fa-eye\"></i> Ver
                        </a>
\t\t\t\t\t\t<a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoria_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"bg-red-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-r\">
                            <i class=\"fas fa-trahs\"></i> Borrar No seguro
                        </a>
\t\t\t\t\t\t<form action=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoria_deleteSeguro", ["id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" method=\"POST\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"valorToken\" value=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-categoriasSeguro"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"bg-red-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-r\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i> Borrar Seguro
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </div>
\t\t";
        }
        // line 67
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "categorias/index.html.twig";
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
        return array (  185 => 67,  181 => 65,  167 => 57,  163 => 56,  157 => 53,  151 => 50,  145 => 47,  139 => 44,  135 => 43,  130 => 40,  126 => 39,  123 => 38,  113 => 30,  111 => 29,  107 => 27,  92 => 18,  88 => 16,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}categorias{% endblock %}

{% block body %}

\t<div class=\"bg-gray-900 py-16\">
        <div class=\"container mx-auto px-4\">
            <h1 class=\"text-6xl text-white text-center\">
                 Categorías
            </h1>
        </div>
    </div>

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

\t<div class=\"container mx-auto px-4 py-8\">
        {% if categorias is empty %}
            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                <div class=\"px-6 py-4\">
                    <div class=\"font-bold text-xl mb-2\">No category found</div>
                    <p class=\"text-gray-700 text-base\">
                        There are no category in the database. <a href=\"#\" class=\"text-blue-500\">Add one</a>!
                    </p>
            </div>
        {% else %}
\t\t\t<div class=\"grid grid-cols-3 gap-4\">
                {% for categoria in categorias %}
                <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">

\t\t\t\t\t<div class=\"px-4 py-4\">
                        <div class=\"font-bold text-xl mb-2\">{{ categoria.nombre }}</div>
                        <p class=\"mb-2\">{{ categoria.descripcion }}</p>
                    </div>
\t\t\t\t\t<div class=\"flex justify-center my-3\">
                        <a href=\"{{ path('app_categoria_edit', {id: categoria.id}) }}\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-l\">
                            <i class=\"fas fa-edit\"></i> Editar
                        </a>
\t\t\t\t\t\t<a href=\"{{ path('app_categoria', {id: categoria.id}) }}\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4\">
\t\t\t\t\t\t    <i class=\"fas fa-eye\"></i> Ver
                        </a>
\t\t\t\t\t\t<a href=\"{{ path('app_categoria_delete', {id: categoria.id}) }}\" class=\"bg-red-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-r\">
                            <i class=\"fas fa-trahs\"></i> Borrar No seguro
                        </a>
\t\t\t\t\t\t<form action=\"{{ path('app_categoria_deleteSeguro', {id: categoria.id}) }}\" method=\"POST\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"valorToken\" value=\"{{ csrf_token('delete-categoriasSeguro') }}\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"bg-red-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-r\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i> Borrar Seguro
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>

                {% endfor %}
            </div>
\t\t{% endif %}
\t</div>
{% endblock %}", "categorias/index.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\categorias\\index.html.twig");
    }
}
