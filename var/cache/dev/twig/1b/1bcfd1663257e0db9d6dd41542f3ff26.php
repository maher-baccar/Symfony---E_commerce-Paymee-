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

/* order/add.html.twig */
class __TwigTemplate_ded7e2295e9a15698ef44e3360280841 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
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

        echo "Ma commande - E_Commerce";
        
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
        echo "<h2>Mon récapitulatif</h2>
<div class=\"row\">
    <div class=\"col-md-5\">
        <strong>Mon adresse de livraison</strong><br>
        <p>";
        // line 10
        echo twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "delivery", [], "any", false, false, false, 10);
        echo "</p>

        <strong>Transporteur</strong>
        <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "carrierName", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-md-7\">
        <strong class=\"summary-label\">Vos articles</strong>
        <div class=\"cart-summary\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 18, $this->source); })()), "products", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                <div class=\"row\">
                    <div class=\"col-2 my-auto\"><img height=\"50px\" src=\"/uploads/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 20), "image", [], "any", false, false, false, 20), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\"></div>
                    <div class=\"col-8 my-auto\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
                    <div class=\"col-2 my-auto\">x";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            <hr>
            <div class=\"row\">
                <div class=\"col-9 font-weight-bold\">Total articles</div>
                <div class=\"col-3\">";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 28, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " TND</div>
            </div>
            <div class=\"row\">
                <div class=\"col-9 font-weight-bold\">Livraison</div>
            <div class=\"col-3\">";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "carrierPrice", [], "any", false, false, false, 32) / 100), 2, ",", "."), "html", null, true);
        echo " TND</div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"col-9 font-weight-bold\">Total commande</div>
                <div class=\"col-3 font-weight-bold\">";
        // line 37
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 37, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 37, $this->source); })()), "carrierPrice", [], "any", false, false, false, 37) / 100)), 2, ",", "."), "html", null, true);
        echo " TND</div>
            </div>
        </div>
    </div>
    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "reference", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" class=\"btn btn-outline-success btn-block mt-4\"><i class=\"bi bi-credit-card-2-back\"></i> Payer</a>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 41,  154 => 37,  146 => 32,  139 => 28,  134 => 25,  125 => 22,  121 => 21,  115 => 20,  112 => 19,  108 => 18,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande - E_Commerce{% endblock %}

{% block body %}
<h2>Mon récapitulatif</h2>
<div class=\"row\">
    <div class=\"col-md-5\">
        <strong>Mon adresse de livraison</strong><br>
        <p>{{order.delivery|raw}}</p>

        <strong>Transporteur</strong>
        <p>{{order.carrierName}}</p>
    </div>
    <div class=\"col-md-7\">
        <strong class=\"summary-label\">Vos articles</strong>
        <div class=\"cart-summary\">
            {% for item in cart.products %}
                <div class=\"row\">
                    <div class=\"col-2 my-auto\"><img height=\"50px\" src=\"/uploads/{{ item.product.image }}\" alt=\"{{ item.product.name }}\"></div>
                    <div class=\"col-8 my-auto\">{{ item.product.name }}</div>
                    <div class=\"col-2 my-auto\">x{{ item.quantity }}</div>
                </div>
            {% endfor %}
            <hr>
            <div class=\"row\">
                <div class=\"col-9 font-weight-bold\">Total articles</div>
                <div class=\"col-3\">{{ (totalPrice / 100)|number_format(2,',','.') }} TND</div>
            </div>
            <div class=\"row\">
                <div class=\"col-9 font-weight-bold\">Livraison</div>
            <div class=\"col-3\">{{ (order.carrierPrice/100)|number_format(2,',','.')}} TND</div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"col-9 font-weight-bold\">Total commande</div>
                <div class=\"col-3 font-weight-bold\">{{ ((totalPrice / 100) + order.carrierPrice / 100)|number_format(2,',','.') }} TND</div>
            </div>
        </div>
    </div>
    <a href=\"{{ path('checkout', {reference: order.reference}) }}\" class=\"btn btn-outline-success btn-block mt-4\"><i class=\"bi bi-credit-card-2-back\"></i> Payer</a>
</div>

{% endblock %}
", "order/add.html.twig", "C:\\Users\\maher\\OneDrive\\Bureau\\ecommerce-symfony-master\\E_commerce\\templates\\order\\add.html.twig");
    }
}
