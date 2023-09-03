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

/* _nav.html.twig */
class __TwigTemplate_6db3bbd979f46d447e179adc966ba82c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">E_Commerce</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Produits</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">Qui sommes-nous ?</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
            </li>

        </ul>
        <ul class=\"navbar-nav\">
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "                <li class=\"nav-item active\">
                    <a class=\"nav-link fs-2\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte <small class=\"text-secondary\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
            echo ")</small></a>
                </li>
                
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                </li>                
            ";
        } else {
            // line 29
            echo "                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
                </li> 
                
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                </li>                   
            ";
        }
        // line 37
        echo "            <li class=\"nav-item active\">
                <a title=\"Panier\" class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\"><i class=\"bi bi-cart3\"></i></a>
            </li>
        </ul>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  112 => 37,  106 => 34,  99 => 30,  96 => 29,  90 => 26,  81 => 22,  78 => 21,  76 => 20,  68 => 15,  62 => 12,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">E_Commerce</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('product') }}\">Produits</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('about') }}\">Qui sommes-nous ?</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
            </li>

        </ul>
        <ul class=\"navbar-nav\">
            {% if app.user %}
                <li class=\"nav-item active\">
                    <a class=\"nav-link fs-2\" href=\"{{ path('account') }}\">Mon compte <small class=\"text-secondary\">({{ app.user.firstname}})</small></a>
                </li>
                
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                </li>                
            {% else %}
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('register') }}\">Inscription</a>
                </li> 
                
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                </li>                   
            {% endif %}
            <li class=\"nav-item active\">
                <a title=\"Panier\" class=\"nav-link\" href=\"{{ path('cart') }}\"><i class=\"bi bi-cart3\"></i></a>
            </li>
        </ul>
    </div>
</nav>
", "_nav.html.twig", "C:\\Users\\maher\\OneDrive\\Bureau\\ecommerce-symfony-master\\E_commerce\\templates\\_nav.html.twig");
    }
}
