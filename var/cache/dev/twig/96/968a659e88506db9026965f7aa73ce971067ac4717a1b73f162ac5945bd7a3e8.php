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

/* _navbar.html.twig */
class __TwigTemplate_4ada2078ca43443a7e38480acde2e6227fbd89125e2ddcf9d6d477489c70dc2b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<header>
     <nav onscroll=\"scrollFuncNav()\" id=\"scrollbar\"  class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                        <div class=\"container\">
                            <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                                <span id=\"brand\">&nbsp;<img class=\"main-logo\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/logos/becycle.png"), "html", null, true);
        echo "\" alt=\"\">&nbsp;Becycle</span>
                            </a>
                
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>
                
                            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            ";
        // line 14
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method");
        // line 15
        echo "                               <ul class=\"navbar-nav mr-auto ml-auto\">
                                    <li class=\"nav-item ";
        // line 16
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()) == "home")) ? ("active") : (""));
        echo "\">
                                        <a class=\"nav-link\" title=\"Acceuil\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Acceuil</a>
                                    </li>
                                    <li class=\"nav-item ";
        // line 19
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()) == "bikes")) ? ("active") : (""));
        echo "\">
                                        <a class=\"nav-link \" title=\"Nos vélos\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bikes");
        echo "\">Nos vélos</a>
                                    </li>
                                    <li class=\"nav-item ";
        // line 22
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 22, $this->source); })()) == "accessories")) ? ("active") : (""));
        echo "\">
                                        <a class=\"nav-link \" title=\"Accessoires\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accessories");
        echo "\">Accessoires</a>
                                    </li>
                                    <li class=\"nav-item ";
        // line 25
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 25, $this->source); })()) == "#")) ? ("active") : (""));
        echo "\">
                                        <a class=\"nav-link \" title=\"\" href=\"\">Choisir ma Gamme</a>
                                    </li>
                                    
                                </ul>
                
                                <ul class=\"navbar-nav\">

                                    ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 34
            echo "                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" title=\"Déconnexion\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
                                        </li>
                                        <li class=\"nav-item ";
            // line 37
            echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 37, $this->source); })()) == "login")) ? ("active") : (""));
            echo "\">
                                            <a class=\"nav-link\" title=\"Mon compte\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon Compte</a>
                                        </li>
                                    ";
        } else {
            // line 41
            echo "                                        <li class=\"nav-item ";
            if ((isset($context["mainNavLogin"]) || array_key_exists("mainNavLogin", $context))) {
                echo "active";
            }
            echo "\">
                                            <a class=\"nav-link\" title=\"Connexion\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
                                        </li>
                                        <li class=\"nav-item ";
            // line 44
            if ((isset($context["mainNavRegistration"]) || array_key_exists("mainNavRegistration", $context))) {
                echo "active";
            }
            echo "\">
                                            <a class=\"nav-link\" title=\"Inscription\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
            echo "\">Inscription</a>
                                        </li>
                                    ";
        }
        // line 48
        echo "
                                     <li class=\"nav-item\">
                                         <a class=\"nav-link cart\" title=\"Panier\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">Panier</a>
                                     </li>
                                </ul>
                                <form class=\"navbar-form navbar-right\" title=\"Rechercher un modèle \" action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"post\">
                                        <div id=\"prefetch\">
                                                <input class=\"typeahead\" id=\"form_query\" name='motcle' type=\"text\" placeholder=\"Rechercher un modèle...\" aria-label=\"rechercher\">
                                        </div>
                              
                                </form>
                            </div>
                        </div>
    </nav>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  182 => 53,  176 => 50,  172 => 48,  166 => 45,  160 => 44,  155 => 42,  148 => 41,  142 => 38,  138 => 37,  133 => 35,  130 => 34,  128 => 33,  117 => 25,  112 => 23,  108 => 22,  103 => 20,  99 => 19,  94 => 17,  90 => 16,  87 => 15,  85 => 14,  74 => 6,  70 => 5,  65 => 2,  56 => 1,  44 => 64,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<header>
     <nav onscroll=\"scrollFuncNav()\" id=\"scrollbar\"  class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                        <div class=\"container\">
                            <a class=\"navbar-brand\" href=\"{{path('home')}}\">
                                <span id=\"brand\">&nbsp;<img class=\"main-logo\" src=\"{{asset('assets/image/logos/becycle.png')}}\" alt=\"\">&nbsp;Becycle</span>
                            </a>
                
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>
                
                            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            {% set route = app.request.attributes.get('_route')%}
                               <ul class=\"navbar-nav mr-auto ml-auto\">
                                    <li class=\"nav-item {{route == 'home' ? \"active\"}}\">
                                        <a class=\"nav-link\" title=\"Acceuil\" href=\"{{path('home')}}\">Acceuil</a>
                                    </li>
                                    <li class=\"nav-item {{route == 'bikes' ? \"active\"}}\">
                                        <a class=\"nav-link \" title=\"Nos vélos\" href=\"{{path('bikes')}}\">Nos vélos</a>
                                    </li>
                                    <li class=\"nav-item {{route == 'accessories' ? \"active\"}}\">
                                        <a class=\"nav-link \" title=\"Accessoires\" href=\"{{path('accessories')}}\">Accessoires</a>
                                    </li>
                                    <li class=\"nav-item {{route == '#' ? \"active\"}}\">
                                        <a class=\"nav-link \" title=\"\" href=\"\">Choisir ma Gamme</a>
                                    </li>
                                    
                                </ul>
                
                                <ul class=\"navbar-nav\">

                                    {% if is_granted('ROLE_USER') %}
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" title=\"Déconnexion\" href=\"{{path('logout')}}\">Déconnexion</a>
                                        </li>
                                        <li class=\"nav-item {{route == 'login' ? \"active\"}}\">
                                            <a class=\"nav-link\" title=\"Mon compte\" href=\"{{path('account')}}\">Mon Compte</a>
                                        </li>
                                    {% else %}
                                        <li class=\"nav-item {% if mainNavLogin is defined %}active{% endif %}\">
                                            <a class=\"nav-link\" title=\"Connexion\" href=\"{{path('login')}}\">Connexion</a>
                                        </li>
                                        <li class=\"nav-item {% if mainNavRegistration is defined %}active{% endif %}\">
                                            <a class=\"nav-link\" title=\"Inscription\" href=\"{{path('signup')}}\">Inscription</a>
                                        </li>
                                    {% endif %}

                                     <li class=\"nav-item\">
                                         <a class=\"nav-link cart\" title=\"Panier\" href=\"{{path('cart')}}\">Panier</a>
                                     </li>
                                </ul>
                                <form class=\"navbar-form navbar-right\" title=\"Rechercher un modèle \" action=\"{{path('search')}}\" method=\"post\">
                                        <div id=\"prefetch\">
                                                <input class=\"typeahead\" id=\"form_query\" name='motcle' type=\"text\" placeholder=\"Rechercher un modèle...\" aria-label=\"rechercher\">
                                        </div>
                              
                                </form>
                            </div>
                        </div>
    </nav>
</header>
{% endblock body %}


", "_navbar.html.twig", "/home/esteban/Becycle/templates/_navbar.html.twig");
    }
}
