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

/* order/index.html.twig */
class __TwigTemplate_4d0e5d4ee21cad6da8c968eff8099c87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
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
        echo "<h2>Je valide ma commande</h2>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 9
        ob_start();
        // line 10
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_add")]);
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "addresses", [], "any", false, false, false, 11), 'label', ["label" => "Choisissez votre adresse de livraison"]);
        echo "
            <a class=\"d-block mb-3\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_new");
        echo "\">Ajouter nouvelle adresse</a>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
        ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "        ";
        echo twig_replace_filter((isset($context["formHtml"]) || array_key_exists("formHtml", $context) ? $context["formHtml"] : (function () { throw new RuntimeError('Variable "formHtml" does not exist.', 15, $this->source); })()), ["[br]" => "<br>"]);
        echo "
    </div>
    <div class=\"col-md-6\">
        <strong class=\"summary-label\">Récapitulatif :</strong>
        <div class=\"cart-summary\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 20, $this->source); })()), "products", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                <div class=\"row\">
                    <div class=\"col-2 my-auto\"><img height=\"50px\" src=\"/uploads/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 22), "image", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "\"></div>
                    <div class=\"col-8 my-auto\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
                    <div class=\"col-2 my-auto\">x";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 24), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            <hr>
            <div class=\"row\">
                <div class=\"col-9 font-weight-bold\">Total</div>
                <div class=\"col-3 font-weight-bold\">";
        // line 30
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 30, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " TND</div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 30,  148 => 27,  139 => 24,  135 => 23,  129 => 22,  126 => 21,  122 => 20,  113 => 15,  108 => 13,  104 => 12,  100 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande - E_Commerce{% endblock %}

{% block body %}
<h2>Je valide ma commande</h2>
<div class=\"row\">
    <div class=\"col-md-6\">
        {% set formHtml %}
            {{form_start(form, {action:path('order_add')})}}
            {{ form_label(form.addresses, 'Choisissez votre adresse de livraison')}}
            <a class=\"d-block mb-3\" href=\"{{ path('account_address_new') }}\">Ajouter nouvelle adresse</a>
            {{form_end(form)}}
        {% endset %}
        {{ formHtml|replace({'[br]' : '<br>'})|raw }}
    </div>
    <div class=\"col-md-6\">
        <strong class=\"summary-label\">Récapitulatif :</strong>
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
                <div class=\"col-9 font-weight-bold\">Total</div>
                <div class=\"col-3 font-weight-bold\">{{ (totalPrice / 100)|number_format(2,',','.') }} TND</div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "order/index.html.twig", "C:\\Users\\maher\\OneDrive\\Bureau\\ecommerce-symfony-master\\E_commerce\\templates\\order\\index.html.twig");
    }
}
