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

/* taches/index.html.twig */
class __TwigTemplate_59f7280bfab0eb4088fbf2b8ce058ef0115965f3f9cdeff207667eb06b914b40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "taches/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TachesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <nav class=\"navbar navbar-light bg-light\">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"><span class=\"navbar-brand mb-0 h1\">Navbar</span></a>
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "            <h1>Hello ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "prenom", [], "any", false, false, false, 10), "html", null, true);
            echo "! </h1>
            <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>

        ";
        } else {
            // line 14
            echo "
            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" >Login </a>
        ";
        }
        // line 17
        echo "

    </nav>

<div class=\"containertaches\">

    <div class=\"taches\">
        ";
        // line 24
        if ( !twig_test_empty((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
                // line 27
                echo "
               <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateTaches", ["id" => twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "tache", [], "any", false, false, false, 28), "html", null, true);
                echo "</a>


                    ";
                // line 31
                if ( !twig_get_attribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "
                        <input type=\"checkbox\" id=\"horns\" name=\"horns\">

                    ";
                } else {
                    // line 36
                    echo "
                        <input type=\"checkbox\" id=\"scales\" name=\"scales\"
                               checked>

                    ";
                }
                // line 41
                echo "


            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
        ";
        } else {
            // line 47
            echo "            <p>Vous n'avez pas encore de taches</p>

        ";
        }
        // line 50
        echo "    </div>


<div class=\"formulaire\">
    <div class=\"container mt-5\">
        ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tachesForm"]) || array_key_exists("tachesForm", $context) ? $context["tachesForm"] : (function () { throw new RuntimeError('Variable "tachesForm" does not exist.', 55, $this->source); })()), 'form_start');
        echo "
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tachesForm"]) || array_key_exists("tachesForm", $context) ? $context["tachesForm"] : (function () { throw new RuntimeError('Variable "tachesForm" does not exist.', 56, $this->source); })()), "tache", [], "any", false, false, false, 56), 'row');
        echo "
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tachesForm"]) || array_key_exists("tachesForm", $context) ? $context["tachesForm"] : (function () { throw new RuntimeError('Variable "tachesForm" does not exist.', 57, $this->source); })()), 'widget');
        echo "
        ";
        // line 59
        echo "        <button type=\"submit\">Envoyer</button>
        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tachesForm"]) || array_key_exists("tachesForm", $context) ? $context["tachesForm"] : (function () { throw new RuntimeError('Variable "tachesForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
    </div>
</div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "taches/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 60,  198 => 59,  194 => 57,  190 => 56,  186 => 55,  179 => 50,  174 => 47,  170 => 45,  161 => 41,  154 => 36,  148 => 32,  146 => 31,  138 => 28,  135 => 27,  131 => 26,  128 => 25,  126 => 24,  117 => 17,  112 => 15,  109 => 14,  103 => 11,  98 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TachesController!{% endblock %}

{% block body %}

    <nav class=\"navbar navbar-light bg-light\">
        <a href=\"{{ path('accueil') }}\"><span class=\"navbar-brand mb-0 h1\">Navbar</span></a>
        {% if app.user %}
            <h1>Hello {{ app.user.prenom }}! </h1>
            <a href=\"{{ path('app_logout') }}\">Logout</a>

        {% else %}

            <a href=\"{{ path('app_login') }}\" >Login </a>
        {% endif %}


    </nav>

<div class=\"containertaches\">

    <div class=\"taches\">
        {%  if taches is not empty %}

            {% for tache in taches %}

               <a href=\"{{ path('updateTaches',{'id':tache.id}) }}\">{{ tache.tache }}</a>


                    {% if not tache.etat %}

                        <input type=\"checkbox\" id=\"horns\" name=\"horns\">

                    {% else %}

                        <input type=\"checkbox\" id=\"scales\" name=\"scales\"
                               checked>

                    {% endif %}



            {% endfor %}

        {% else %}
            <p>Vous n'avez pas encore de taches</p>

        {% endif %}
    </div>


<div class=\"formulaire\">
    <div class=\"container mt-5\">
        {{ form_start(tachesForm) }}
        {{form_row(tachesForm.tache)}}
        {{ form_widget(tachesForm) }}
        {# {{ form_rest(form) }} #}
        <button type=\"submit\">Envoyer</button>
        {{ form_end(tachesForm) }}
    </div>
</div>


</div>
{% endblock %}
", "taches/index.html.twig", "/Users/kerenndongala/microsite/templates/taches/index.html.twig");
    }
}
