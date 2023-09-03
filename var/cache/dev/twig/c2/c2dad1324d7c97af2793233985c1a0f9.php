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

/* home/index.html.twig */
class __TwigTemplate_b633c6c2d9eb3b42734dfe2208ea61dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <style>
    .product-item {
        height: 350px; /* Set a fixed height for the product items */
        margin-bottom: 150px; /* Add some margin at the bottom of each product item */

    }
</style>

<h3>Top ventes du moment</h3>
<p>Découvrez nos articles les plus vendus du mois dernier</p>
<div class=\"row\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top_products"]) || array_key_exists("top_products", $context) ? $context["top_products"] : (function () { throw new RuntimeError('Variable "top_products" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "        <div class=\"col-md-4\">
            <div class=\"product-item\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\"><img class=\"img-fluid\" src=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\"></a>
                <h5 class=\"mt-2\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
                <span class=\"product-subtitle text-center\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
                <span class=\"product-price text-center\">";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21) / 100), 2, ",", "."), "html", null, true);
            echo " TND </span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  105 => 21,  101 => 20,  97 => 19,  89 => 18,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
 <style>
    .product-item {
        height: 350px; /* Set a fixed height for the product items */
        margin-bottom: 150px; /* Add some margin at the bottom of each product item */

    }
</style>

<h3>Top ventes du moment</h3>
<p>Découvrez nos articles les plus vendus du mois dernier</p>
<div class=\"row\">
    {% for product in top_products %}
        <div class=\"col-md-4\">
            <div class=\"product-item\">
                <a href=\"{{ path('product_show', {slug: product.slug}) }}\"><img class=\"img-fluid\" src=\"/uploads/{{product.image}}\" alt=\"{{product.name}}\"></a>
                <h5 class=\"mt-2\">{{ product.name}}</h5>
                <span class=\"product-subtitle text-center\">{{product.subtitle}}</span>
                <span class=\"product-price text-center\">{{(product.price / 100 )|number_format(2,',', '.')}} TND </span>
            </div>
        </div>
    {% endfor %}
</div>


{% endblock %}
", "home/index.html.twig", "C:\\Users\\maher\\OneDrive\\Bureau\\ecommerce-symfony-master\\E_commerce\\templates\\home\\index.html.twig");
    }
}
