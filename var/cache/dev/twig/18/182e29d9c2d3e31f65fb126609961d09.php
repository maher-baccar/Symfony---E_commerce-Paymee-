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

/* cart/index.html.twig */
class __TwigTemplate_57c3ccc927702fd84b3ca217b080f16c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3>Mon Panier</h3>
";
        // line 7
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 7, $this->source); })()) > 0)) {
            // line 8
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart");
            echo "\" title=\"Supprimer tous les articles\" class=\"btn btn-outline-danger btn-sm float-right\">
        <i class=\"bi bi-x\"></i> 
        Réinitialiser mon panier
    </a>
";
        }
        // line 13
        echo "
<p>Voici les articles que vous avez ajoutés</p>

<table class=\"table mt-5\">
    <thead>
        <tr>
            <th scope=\"col\">Article</th>
            <th scope=\"col\">Prix (unitaire)</th>
            <th class=\"text-center\" scope=\"col\">Quantité</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "        <tr>
            <td class=\"align-middle\">
                <img height=\"60px\" src=\"/uploads/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "
            </td>
            <td class=\"align-middle\">";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "price", [], "any", false, false, false, 33) / 100), 2, ",", "."), "html", null, true);
            echo " TND</td>
            <td class=\"text-center align-middle\">
                <a title=\"Enlever 1 article\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_item", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><i class=\"bi bi-dash\"></i></a>
                ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            echo " 
                <a title=\"Ajouter 1 article\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><i class=\"bi bi-plus\"></i></a>
            </td>
            <td class=\"align-middle\">";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39) * (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "price", [], "any", false, false, false, 39) / 100)), 2, ",", "."), "html", null, true);
            echo " TND</td>
            <td class=\"align-middle\"><a title=\"Supprimer tous les articles de cette ligne\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart_item", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"text-danger\"href=\"\"><i class=\"bi bi-trash\"></i></a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </tbody>
    <tfoot>
        <th>Total</th>
        <td></td>
        <td class=\"text-center\">  <small>x</small> ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "</td>
        <th>";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 48, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " TND</th>
    </tfoot>
</table>
<a class=\"mb-3 d-block\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Continuez mes achats</a>
";
        // line 52
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 52, $this->source); })()) > 0)) {
            // line 53
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\"title=\"Valider puis passer au paiement\" class=\"btn btn-outline-success btn-block\"></i> Valider mon panier</a>
";
        } else {
            // line 55
            echo "        Votre panier est vide, remplissez le depuis la page <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
            echo "\">produits</a>.
";
        }
        // line 57
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 57,  196 => 55,  190 => 53,  188 => 52,  184 => 51,  178 => 48,  174 => 47,  168 => 43,  159 => 40,  155 => 39,  150 => 37,  146 => 36,  142 => 35,  137 => 33,  132 => 31,  126 => 30,  122 => 28,  118 => 27,  102 => 13,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block body %}
<h3>Mon Panier</h3>
{% if totalQuantity > 0 %}
    <a href=\"{{ path('remove_cart') }}\" title=\"Supprimer tous les articles\" class=\"btn btn-outline-danger btn-sm float-right\">
        <i class=\"bi bi-x\"></i> 
        Réinitialiser mon panier
    </a>
{% endif %}

<p>Voici les articles que vous avez ajoutés</p>

<table class=\"table mt-5\">
    <thead>
        <tr>
            <th scope=\"col\">Article</th>
            <th scope=\"col\">Prix (unitaire)</th>
            <th class=\"text-center\" scope=\"col\">Quantité</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
    </thead>
    <tbody>
    {% for item in cart %}
        <tr>
            <td class=\"align-middle\">
                <img height=\"60px\" src=\"/uploads/{{ item.product.image }}\" alt=\"{{ item.product.name }}\">
                {{item.product.name}}
            </td>
            <td class=\"align-middle\">{{(item.product.price / 100)|number_format(2,',','.') }} TND</td>
            <td class=\"text-center align-middle\">
                <a title=\"Enlever 1 article\" href=\"{{ path('decrease_item', {id:item.product.id}) }}\"><i class=\"bi bi-dash\"></i></a>
                {{ item.quantity }} 
                <a title=\"Ajouter 1 article\" href=\"{{ path('add_to_cart', {id:item.product.id}) }}\"><i class=\"bi bi-plus\"></i></a>
            </td>
            <td class=\"align-middle\">{{ (item.quantity * (item.product.price / 100))|number_format(2,',','.') }} TND</td>
            <td class=\"align-middle\"><a title=\"Supprimer tous les articles de cette ligne\" href=\"{{ path('remove_cart_item', {id: item.product.id}) }}\" class=\"text-danger\"href=\"\"><i class=\"bi bi-trash\"></i></a></td>
        </tr>
    {% endfor %}
    </tbody>
    <tfoot>
        <th>Total</th>
        <td></td>
        <td class=\"text-center\">  <small>x</small> {{ totalQuantity }}</td>
        <th>{{ (totalPrice / 100)|number_format(2,',','.') }} TND</th>
    </tfoot>
</table>
<a class=\"mb-3 d-block\" href=\"{{ path('product') }}\">Continuez mes achats</a>
{% if totalQuantity > 0 %}
        <a href=\"{{ path('order')}}\"title=\"Valider puis passer au paiement\" class=\"btn btn-outline-success btn-block\"></i> Valider mon panier</a>
{% else %}
        Votre panier est vide, remplissez le depuis la page <a href=\"{{ path('product') }}\">produits</a>.
{% endif %}


{% endblock %}
", "cart/index.html.twig", "C:\\Users\\maher\\OneDrive\\Bureau\\ecommerce-symfony-master\\E_commerce\\templates\\cart\\index.html.twig");
    }
}
