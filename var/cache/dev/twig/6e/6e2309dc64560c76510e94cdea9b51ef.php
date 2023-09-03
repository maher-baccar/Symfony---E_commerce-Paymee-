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

/* base.html.twig */
class __TwigTemplate_fad74b273a86137ee42eed65c68fad45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Une boutique géniale, avec pleins d'articles géniaux et beau et tout...\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
</head>
<body>
    <header>
        ";
        // line 18
        $this->loadTemplate("_nav.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "    </header>

    <main class=\"mb-5\" role=\"main\">
        ";
        // line 22
        if (array_key_exists("carousel", $context)) {
            // line 23
            echo "            ";
            $this->loadTemplate("_carousel.html.twig", "base.html.twig", 23)->display($context);
            // line 24
            echo "        ";
        } else {
            // line 25
            echo "            ";
            $context["margin"] = "mt-5";
            // line 26
            echo "        ";
        }
        // line 27
        echo "        <div class=\"container ";
        (((array_key_exists("margin", $context) &&  !(null === (isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 27, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 27, $this->source); })()), "html", null, true))) : (print (0)));
        echo "\">
            ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        </div>
    </main>
        <footer class=\"footer-custom\">
            ";
        // line 32
        $this->loadTemplate("_footer.html.twig", "base.html.twig", 32)->display($context);
        // line 33
        echo "        </footer>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "E_Commerce";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 28,  128 => 9,  115 => 35,  111 => 33,  109 => 32,  104 => 29,  102 => 28,  97 => 27,  94 => 26,  91 => 25,  88 => 24,  85 => 23,  83 => 22,  78 => 19,  76 => 18,  68 => 13,  64 => 12,  60 => 11,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Une boutique géniale, avec pleins d'articles géniaux et beau et tout...\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>{% block title %}E_Commerce{% endblock %}</title>

    <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/css/carousel.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
</head>
<body>
    <header>
        {% include \"_nav.html.twig\" %}
    </header>

    <main class=\"mb-5\" role=\"main\">
        {% if carousel is defined %}
            {% include \"_carousel.html.twig\" %}
        {% else %}
            {% set margin = 'mt-5' %}
        {% endif %}
        <div class=\"container {{margin ?? 0}}\">
            {% block body %}{% endblock %}
        </div>
    </main>
        <footer class=\"footer-custom\">
            {% include \"_footer.html.twig\" %}
        </footer>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"{{asset('assets/js/bootstrap.bundle.js')}}\"></script>
</body>
</html>", "base.html.twig", "C:\\Users\\maher\\OneDrive\\Bureau\\ecommerce-symfony-master\\E_commerce\\templates\\base.html.twig");
    }
}
