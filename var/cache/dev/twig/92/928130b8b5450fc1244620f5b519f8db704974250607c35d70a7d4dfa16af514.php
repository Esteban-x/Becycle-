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
class __TwigTemplate_35a463bfd0fa89fc7fe6e658843228176c4fa96a2be828b9acaa2bb98032f8e2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/favicon.png"), "html", null, true);
        echo "\"/>
        <link href=\"https://fonts.googleapis.com/css?family=Amatic+SC|Comfortaa|Ubuntu\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Acme|Francois+One\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Acme\" rel=\"stylesheet\">
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/typeahead.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
    ";
        // line 19
        echo twig_include($this->env, $context, "_navbar.html.twig");
        echo "

            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                    <div class=\"mt-4 alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "

                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "   
        <footer class=\"py-5 bg-dark\">
            <div class=\"container\">
                <p class=\"text-white text-center m-0\">Copyright &copy; ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
            </div>       
        </footer>
        <button onclick=\"topFunction()\" id=\"myBtn\" title=\"Go to top\"><i class=\"far fa-arrow-alt-circle-up\"></i>&nbsp;&nbsp;Haut de page &nbsp;</button>


    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/payment.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 46
        $this->displayBlock('javascript', $context, $blocks);
        // line 58
        echo "    </body>
</html>
            
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Becycle.com";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 47
        echo "

       <script src=\"https://code.jquery.com/jquery-3.4.0.js\" type=\"text/javascript\"></script>
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.2.1/typeahead.jquery.min.js\" type=\"text/javascript\"></script>
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.2.1/bloodhound.min.js\" type=\"text/javascript\"></script>
       
       <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/base.js"), "html", null, true);
        echo "\"></script>

       <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  228 => 53,  220 => 47,  211 => 46,  201 => 34,  192 => 33,  175 => 16,  157 => 6,  144 => 58,  142 => 46,  138 => 45,  128 => 38,  123 => 35,  121 => 33,  118 => 32,  112 => 31,  99 => 24,  94 => 23,  89 => 22,  85 => 21,  80 => 19,  76 => 17,  74 => 16,  70 => 15,  65 => 13,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}Becycle.com{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/image/favicon.png') }}\"/>
        <link href=\"https://fonts.googleapis.com/css?family=Amatic+SC|Comfortaa|Ubuntu\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Acme|Francois+One\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Acme\" rel=\"stylesheet\">
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/app.css') }}\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/typeahead.css') }}\" rel=\"stylesheet\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
    {{  include('_navbar.html.twig') }}

            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"mt-4 alert alert-{{ label }} alert-dismissible fade show\">
                        {{ message }}

                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
            {% endfor %}

        {% block body %}
        {% endblock %}
   
        <footer class=\"py-5 bg-dark\">
            <div class=\"container\">
                <p class=\"text-white text-center m-0\">Copyright &copy; {{ 'now' | date('Y') }}</p>
            </div>       
        </footer>
        <button onclick=\"topFunction()\" id=\"myBtn\" title=\"Go to top\"><i class=\"far fa-arrow-alt-circle-up\"></i>&nbsp;&nbsp;Haut de page &nbsp;</button>


    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"{{asset('assets/js/payment.js')}}\"></script>
        {% block javascript %}


       <script src=\"https://code.jquery.com/jquery-3.4.0.js\" type=\"text/javascript\"></script>
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.2.1/typeahead.jquery.min.js\" type=\"text/javascript\"></script>
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.2.1/bloodhound.min.js\" type=\"text/javascript\"></script>
       
       <script src=\"{{asset('assets/js/base.js')}}\"></script>

       <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        
        {% endblock %}
    </body>
</html>
            
", "base.html.twig", "/home/esteban/Becycle/templates/base.html.twig");
    }
}
