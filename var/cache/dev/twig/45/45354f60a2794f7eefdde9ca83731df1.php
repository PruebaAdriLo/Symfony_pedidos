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

/* pedidos_productos/index.html.twig */
class __TwigTemplate_ea249d099ba350e9b148f4963f3a0b18 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedidos_productos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedidos_productos/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pedidos Productos";
        
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
    <div class=\"bg-gray-900 py-16\">
        <div class=\"container mx-auto px-4\">
            <h1 class=\"text-6xl text-white text-center\">
                 Pedidos Productos
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
    <div class=\"container mx-auto px-4 py-8\">
        ";
        // line 29
        $context["currentPedidoProductosId"] = null;
        // line 30
        echo "        ";
        if (twig_test_empty((isset($context["pedidosProductos"]) || array_key_exists("pedidosProductos", $context) ? $context["pedidosProductos"] : (function () { throw new RuntimeError('Variable "pedidosProductos" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                <div class=\"px-6 py-4\">
                    <div class=\"font-bold text-xl mb-2\">No category found</div>
                    <p class=\"text-gray-700 text-base\">
                        There are no category in the database. <a href=\"#\" class=\"text-blue-500\">Add one</a>!
                    </p>
                </div>
            </div>
        ";
        } else {
            // line 40
            echo "            <div class=\"grid grid-cols-3 gap-4\">
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pedidosProductos"]) || array_key_exists("pedidosProductos", $context) ? $context["pedidosProductos"] : (function () { throw new RuntimeError('Variable "pedidosProductos" does not exist.', 41, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["proPed"]) {
                // line 42
                echo "                    ";
                if (((null === (isset($context["currentPedidoProductosId"]) || array_key_exists("currentPedidoProductosId", $context) ? $context["currentPedidoProductosId"] : (function () { throw new RuntimeError('Variable "currentPedidoProductosId" does not exist.', 42, $this->source); })())) || ((isset($context["currentPedidoProductosId"]) || array_key_exists("currentPedidoProductosId", $context) ? $context["currentPedidoProductosId"] : (function () { throw new RuntimeError('Variable "currentPedidoProductosId" does not exist.', 42, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proPed"], "pedido", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)))) {
                    // line 43
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 43)) {
                        echo "</div>";
                    }
                    echo " 
                        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                            <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidosProducto", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proPed"], "pedido", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
                    echo "\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4\">
                                <i class=\"fas fa-eye\"></i> Ver
                            </a>
                            <div class=\"px-4 py-4\">
                                <p class=\"mb-2\">Pedido: ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proPed"], "pedido", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "</p>
                                <p class=\"mb-2\">Pedido productos: ";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proPed"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "</p>
                                <p class=\"mb-2\">Restaurante: ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proPed"], "pedido", [], "any", false, false, false, 51), "restaurante", [], "any", false, false, false, 51), "html", null, true);
                    echo "</p>
                            </div>
                    ";
                }
                // line 54
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidosProducto_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["proPed"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-l\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a>
                            <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidosProducto_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["proPed"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" class=\"bg-red-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-r\">
                                <i class=\"fas fa-trahs\"></i> Borrar No seguro
                            </a>
                            <form action=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidosProducto_deleteSeguro", ["id" => twig_get_attribute($this->env, $this->source, $context["proPed"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" method=\"POST\">
                                <input type=\"hidden\" name=\"valorToken\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-pedidosProductoSeguro"), "html", null, true);
                echo "\">
                                <button type=\"submit\" class=\"bg-red-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-r\">
                                <i class=\"fas fa-trash\"></i> Borrar Seguro</button>
                            </form>
                            <div class=\"px-4 py-4\">
                                <div class=\"font-bold text-xl mb-2\">";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proPed"], "productos", [], "any", false, false, false, 66), "nombre", [], "any", false, false, false, 66), "html", null, true);
                echo "</div>
                                <p class=\"mb-2\">";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proPed"], "unidades", [], "any", false, false, false, 67), "html", null, true);
                echo " unidades</p>
                            </div>
                            
                    ";
                // line 70
                $context["currentPedidoProductosId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proPed"], "pedido", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70);
                // line 71
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proPed'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </div>
            </div>
        ";
        }
        // line 75
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pedidos_productos/index.html.twig";
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
        return array (  235 => 75,  230 => 72,  216 => 71,  214 => 70,  208 => 67,  204 => 66,  196 => 61,  192 => 60,  186 => 57,  179 => 54,  173 => 51,  169 => 50,  165 => 49,  158 => 45,  150 => 43,  147 => 42,  130 => 41,  127 => 40,  116 => 31,  113 => 30,  111 => 29,  107 => 27,  92 => 18,  88 => 16,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pedidos Productos{% endblock %}

{% block body %}

    <div class=\"bg-gray-900 py-16\">
        <div class=\"container mx-auto px-4\">
            <h1 class=\"text-6xl text-white text-center\">
                 Pedidos Productos
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

    <div class=\"container mx-auto px-4 py-8\">
        {% set currentPedidoProductosId = null %}
        {% if pedidosProductos is empty %}
            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                <div class=\"px-6 py-4\">
                    <div class=\"font-bold text-xl mb-2\">No category found</div>
                    <p class=\"text-gray-700 text-base\">
                        There are no category in the database. <a href=\"#\" class=\"text-blue-500\">Add one</a>!
                    </p>
                </div>
            </div>
        {% else %}
            <div class=\"grid grid-cols-3 gap-4\">
                {% for proPed in pedidosProductos %}
                    {% if currentPedidoProductosId is null or currentPedidoProductosId != proPed.pedido.id %}
                        {% if not loop.first %}</div>{% endif %} 
                        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden relative\">
                            <a href=\"{{ path('app_pedidosProducto', {id: proPed.pedido.id}) }}\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4\">
                                <i class=\"fas fa-eye\"></i> Ver
                            </a>
                            <div class=\"px-4 py-4\">
                                <p class=\"mb-2\">Pedido: {{ proPed.pedido.id }}</p>
                                <p class=\"mb-2\">Pedido productos: {{ proPed.id }}</p>
                                <p class=\"mb-2\">Restaurante: {{ proPed.pedido.restaurante }}</p>
                            </div>
                    {% endif %}
                            <a href=\"{{ path('app_pedidosProducto_edit', {id: proPed.id}) }}\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-l\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a>
                            <a href=\"{{ path('app_pedidosProducto_delete', {id: proPed.id}) }}\" class=\"bg-red-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-r\">
                                <i class=\"fas fa-trahs\"></i> Borrar No seguro
                            </a>
                            <form action=\"{{ path('app_pedidosProducto_deleteSeguro', {id: proPed.id}) }}\" method=\"POST\">
                                <input type=\"hidden\" name=\"valorToken\" value=\"{{ csrf_token('delete-pedidosProductoSeguro') }}\">
                                <button type=\"submit\" class=\"bg-red-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-r\">
                                <i class=\"fas fa-trash\"></i> Borrar Seguro</button>
                            </form>
                            <div class=\"px-4 py-4\">
                                <div class=\"font-bold text-xl mb-2\">{{ proPed.productos.nombre }}</div>
                                <p class=\"mb-2\">{{ proPed.unidades }} unidades</p>
                            </div>
                            
                    {% set currentPedidoProductosId = proPed.pedido.id %}
                {% endfor %}
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "pedidos_productos/index.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\pedidos_productos\\index.html.twig");
    }
}
