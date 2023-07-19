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

/* produit/_form.html.twig */
class __TwigTemplate_54c9db8cebbc82be385fa10cf22742a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 2
        echo "
<style>
    .custom-label {
        position: relative;
    }

    .custom-label-left {
        left: -200px;
    }

    .custom-label-left2 {
        left: -190px;
    }

    .custom-label-left3 {
        left: -150px;
    }

    .custom-label-left4 {
        left: -165px;
    }

    .custom-label-left5 {
        left: -180px;
    }
    
</style>





";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "


    <div class=\"form-group\">
        <label for=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "image", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\" class=\"custom-label custom-label-left2\">Image</label>
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "image", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Nom</label>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "prix", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\" class=\"custom-label custom-label-left3\">prix</label>
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "prix", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "datepost", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\" class=\"custom-label custom-label-left5\">date post</label>
        <div class=\"custom-inline-checkbox\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "datepost", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 53
            echo "                <div class=\"form-check form-check-inline\">
                    ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input5"]]);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "detail", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">detail</label>
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "detail", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    
    <button type=\"submit\" id=\"saveButton\" class=\"custom-button\">Enregistrer</button>
";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 65,  146 => 61,  142 => 60,  137 => 57,  128 => 54,  125 => 53,  121 => 52,  116 => 50,  110 => 47,  106 => 46,  100 => 43,  96 => 42,  90 => 39,  86 => 38,  79 => 34,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'bootstrap_5_layout.html.twig' %}

<style>
    .custom-label {
        position: relative;
    }

    .custom-label-left {
        left: -200px;
    }

    .custom-label-left2 {
        left: -190px;
    }

    .custom-label-left3 {
        left: -150px;
    }

    .custom-label-left4 {
        left: -165px;
    }

    .custom-label-left5 {
        left: -180px;
    }
    
</style>





{{ form_start(form) }}


    <div class=\"form-group\">
        <label for=\"{{ form.image.vars.id }}\" class=\"custom-label custom-label-left2\">Image</label>
        {{ form_widget(form.image, {'attr': {'class': 'custom-input'}}) }}
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.nom.vars.id }}\" class=\"custom-label custom-label-left\">Nom</label>
        {{ form_widget(form.nom, {'attr': {'class': 'custom-input'}}) }}
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.prix.vars.id }}\" class=\"custom-label custom-label-left3\">prix</label>
        {{ form_widget(form.prix, {'attr': {'class': 'custom-input'}}) }}
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.datepost.vars.id }}\" class=\"custom-label custom-label-left5\">date post</label>
        <div class=\"custom-inline-checkbox\">
            {% for choice in form.datepost %}
                <div class=\"form-check form-check-inline\">
                    {{ form_widget(choice, {'attr': {'class': 'form-check-input5'}}) }}
                </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.detail.vars.id }}\" class=\"custom-label custom-label-left\">detail</label>
        {{ form_widget(form.detail, {'attr': {'class': 'custom-input'}}) }}
    </div>
    
    <button type=\"submit\" id=\"saveButton\" class=\"custom-button\">Enregistrer</button>
{{ form_end(form) }}

", "produit/_form.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\produit\\_form.html.twig");
    }
}
