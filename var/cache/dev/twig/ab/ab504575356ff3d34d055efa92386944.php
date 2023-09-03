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

/* account/order.html.twig */
class __TwigTemplate_f379fae5b7c8672533b2d1d113c29204 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
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

        echo "Ma commande - E_Commerce'";
        
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
        echo "    <h2>Commande n° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
    <hr>
    <p>
        <b>Commande passée le :</b> ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo " <br>
        <b>Statut:</b> ";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "state", [], "any", false, false, false, 11) == 1)) ? ("Paiment accepté") : ((((twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "state", [], "any", false, false, false, 12) == 2)) ? ("En préparation") : ("Expédiée"))));
        // line 13
        echo "<br>
        <b>Référence : </b><span>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "reference", [], "any", false, false, false, 14), "html", null, true);
        echo "</span><br>
        <b>Transporteur:</b> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "carrierName", [], "any", false, false, false, 15), "html", null, true);
        echo "<br>
    </p>
    <table class=\"table mt-4\">
    <thead>
        <tr>
            <th scope=\"col\">Article</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire </th>
            <th scope=\"col\">Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "orderDetails", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>x";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32) / 100), 2, ",", "."), "html", null, true);
            echo " TND</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 33) / 100), 2, ",", "."), "html", null, true);
            echo " TND</td>
            </tr>  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            <tr>
                <th>Sous-total</th>
                <td></td>
                <td></td>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "total", [], "any", false, false, false, 40) / 100), 2, ",", "."), "html", null, true);
        echo " TND</td>
            </tr>
    </tbody>
</table>
    <div class=\"text-right\">
        <b>Livraison :</b> ";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "carrierPrice", [], "any", false, false, false, 45) / 100), 2, ",", "."), "html", null, true);
        echo " TND<br>
        <b>Total : </b> ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "carrierPrice", [], "any", false, false, false, 46) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "total", [], "any", false, false, false, 46)) / 100), 2, ",", "."), "html", null, true);
        echo " TND
    </div>
    <a title=\"Retour vers votre espace membres\"href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retourner à mon compte</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 48,  172 => 46,  168 => 45,  160 => 40,  154 => 36,  145 => 33,  141 => 32,  137 => 31,  133 => 30,  130 => 29,  126 => 28,  110 => 15,  106 => 14,  103 => 13,  101 => 12,  100 => 11,  99 => 10,  95 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande - E_Commerce'{% endblock %}

{% block body %}
    <h2>Commande n° {{order.reference}}</h2>
    <hr>
    <p>
        <b>Commande passée le :</b> {{order.createdAt|date('d/m/Y')}} <br>
        <b>Statut:</b> {{
            order.state == 1 ? 'Paiment accepté' :
            order.state == 2 ? 'En préparation' : 'Expédiée'
        }}<br>
        <b>Référence : </b><span>{{order.reference}}</span><br>
        <b>Transporteur:</b> {{order.carrierName}}<br>
    </p>
    <table class=\"table mt-4\">
    <thead>
        <tr>
            <th scope=\"col\">Article</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire </th>
            <th scope=\"col\">Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {% for product in order.orderDetails %}
            <tr>
                <td>{{product.product}}</td>
                <td>x{{product.quantity}}</td>
                <td>{{(product.price / 100)|number_format(2,',','.') }} TND</td>
                <td>{{(product.total / 100)|number_format(2,',','.') }} TND</td>
            </tr>  
        {% endfor %}
            <tr>
                <th>Sous-total</th>
                <td></td>
                <td></td>
                <td>{{(order.total / 100)|number_format(2,',','.') }} TND</td>
            </tr>
    </tbody>
</table>
    <div class=\"text-right\">
        <b>Livraison :</b> {{(order.carrierPrice / 100)|number_format(2,',','.') }} TND<br>
        <b>Total : </b> {{((order.carrierPrice + order.total) / 100)|number_format(2,',','.') }} TND
    </div>
    <a title=\"Retour vers votre espace membres\"href=\"{{ path('account') }}\">Retourner à mon compte</a>
{% endblock %}
", "account/order.html.twig", "C:\\Users\\maher\\OneDrive\\Bureau\\ecommerce-symfony-master\\E_commerce\\templates\\account\\order.html.twig");
    }
}
