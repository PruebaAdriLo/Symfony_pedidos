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

/* navbar.html.twig */
class __TwigTemplate_ff90a38615a28e516a52701b80b5bd8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"flex items-center justify-between flex-wrap bg-gray-800 p-6\">
\t<div class=\"flex items-center flex-shrink-0 text-white mr-6\">
\t\t<span class=\"font-semibold text-xl tracking-tight\">Categorías Database</span>
\t</div>
\t<div class=\"block lg:hidden\">
\t\t<button class=\"flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white\">
\t\t\t<svg class=\"fill-current h-3 w-3\" viewBox=\"0 0 20 20\" xmlns=\"http://w3.org/2000/svg\"><title>Menu</title><path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"></svg>
\t\t</button>
\t</div>
\t<div class=\"w-full block flex-grow lg:flex lg:items-center lg:w-auto\">
\t\t<div class=\"text-sm lg:flex-grow\">
\t\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorias");
        echo "\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
\t\t\t\tCategorías 
\t\t\t</a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_productos");
        echo "\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
            \tProductos 
\t\t\t</a>
\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurantes");
        echo "\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
\t\t\t\tRestaurantes 
\t\t\t</a>
\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidos");
        echo "\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
\t\t\t\tPedidos
\t\t\t</a>
\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidosProductos");
        echo "\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
\t\t\t\tPedidosProductos
\t\t\t</a>
        </div>
        <div class=\"lg:flex items-center\">
            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoria_create");
        echo "\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
            \tAdd Categoría
            </a>
            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_create");
        echo "\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tAdd Producto
\t\t\t</a>
\t\t\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurante_create");
        echo "\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tAdd Restaurante
\t\t\t</a>
\t\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_create");
        echo "\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tAñadir Pedido
\t\t\t</a>
\t\t\t";
        // line 44
        echo "\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tSalir
\t\t\t</a>
        </div>
    </div>
</nav>    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navbar.html.twig";
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
        return array (  109 => 44,  103 => 38,  97 => 35,  91 => 32,  85 => 29,  77 => 24,  71 => 21,  65 => 18,  59 => 15,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"flex items-center justify-between flex-wrap bg-gray-800 p-6\">
\t<div class=\"flex items-center flex-shrink-0 text-white mr-6\">
\t\t<span class=\"font-semibold text-xl tracking-tight\">Categorías Database</span>
\t</div>
\t<div class=\"block lg:hidden\">
\t\t<button class=\"flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white\">
\t\t\t<svg class=\"fill-current h-3 w-3\" viewBox=\"0 0 20 20\" xmlns=\"http://w3.org/2000/svg\"><title>Menu</title><path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"></svg>
\t\t</button>
\t</div>
\t<div class=\"w-full block flex-grow lg:flex lg:items-center lg:w-auto\">
\t\t<div class=\"text-sm lg:flex-grow\">
\t\t\t<a href=\"{{ path('app_categorias') }}\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
\t\t\t\tCategorías 
\t\t\t</a>
            <a href=\"{{ path('app_productos') }}\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
            \tProductos 
\t\t\t</a>
\t\t\t<a href=\"{{ path('app_restaurantes') }}\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
\t\t\t\tRestaurantes 
\t\t\t</a>
\t\t\t<a href=\"{{ path('app_pedidos') }}\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
\t\t\t\tPedidos
\t\t\t</a>
\t\t\t<a href=\"{{ path('app_pedidosProductos') }}\" class=\"block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4\">
\t\t\t\tPedidosProductos
\t\t\t</a>
        </div>
        <div class=\"lg:flex items-center\">
            <a href=\"{{ path('app_categoria_create') }}\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
            \tAdd Categoría
            </a>
            <a href=\"{{ path('app_producto_create') }}\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tAdd Producto
\t\t\t</a>
\t\t\t<a href=\"{{ path('app_restaurante_create') }}\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tAdd Restaurante
\t\t\t</a>
\t\t\t<a href=\"{{ path('app_pedido_create') }}\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tAñadir Pedido
\t\t\t</a>
\t\t\t{# <a href=\"{{ path('app_pedidosProductos_create') }}\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tAdd PedidosPro
\t\t\t</a> #}
\t\t\t<a href=\"{{ path('app_login') }}\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-white hover:bg-white hover:text-gray-800 mr-4\">
\t\t\t\tSalir
\t\t\t</a>
        </div>
    </div>
</nav>    ", "navbar.html.twig", "C:\\xampp\\htdocs\\symfony_pedidos\\templates\\navbar.html.twig");
    }
}
