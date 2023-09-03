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

/* _carousel.html.twig */
class __TwigTemplate_cb61e011a90333a7758a51c592349393 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_carousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_carousel.html.twig"));

        // line 1
        echo "<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["header"]) {
            // line 4
            echo "            <li data-target=\"#myCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"";
            echo ((($context["key"] == 0)) ? ("active") : (""));
            echo "\"></li>  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ol>
    <div class=\"carousel-inner\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["header"]) {
            // line 9
            echo "            <div class=\"carousel-item ";
            echo ((($context["key"] == 0)) ? ("active") : (""));
            echo "\" 
                style=\"background: linear-gradient(45deg, rgba(0, 0, 0, 0.8), rgba(54, 54, 54, 0.4) 50%,  rgba(28, 28, 28, 0.3)),
                url(uploads/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "image", [], "any", false, false, false, 11), "html", null, true);
            echo ") center center/ cover no-repeat;\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h2>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</h2>
                        <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                        <p><a class=\"btn btn-lg btn-dark shadow\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 16), "html", null, true);
            echo "\" role=\"button\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></p>
                    </div>
                </div>
            </div>   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
    <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 21,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  70 => 9,  66 => 8,  62 => 6,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        {% for key, header in headers %}
            <li data-target=\"#myCarousel\" data-slide-to=\"{{key}}\" class=\"{{key == 0 ? 'active' : ''}}\"></li>  
        {% endfor %}
    </ol>
    <div class=\"carousel-inner\">
        {% for key, header in headers %}
            <div class=\"carousel-item {{key == 0 ? 'active' : ''}}\" 
                style=\"background: linear-gradient(45deg, rgba(0, 0, 0, 0.8), rgba(54, 54, 54, 0.4) 50%,  rgba(28, 28, 28, 0.3)),
                url(uploads/{{header.image}}) center center/ cover no-repeat;\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h2>{{header.title}}</h2>
                        <p>{{header.content}}</p>
                        <p><a class=\"btn btn-lg btn-dark shadow\" href=\"{{header.btnUrl}}\" role=\"button\">{{header.btnTitle}}</a></p>
                    </div>
                </div>
            </div>   
        {% endfor %}
    </div>
    <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>", "_carousel.html.twig", "C:\\Users\\maher\\OneDrive\\Bureau\\ecommerce-symfony-master\\E_commerce\\templates\\_carousel.html.twig");
    }
}
