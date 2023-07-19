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

/* registration/register.html.twig */
class __TwigTemplate_737b9a9f62dfe9e8fae61deda60fd1b9 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>ADO-DOC</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>

<div class=\"left:100px;\" style=\"background-image: url('";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/img/bg.jpg"), "html", null, true);
        echo "');\">
";
        // line 38
        $this->displayBlock('title', $context, $blocks);
        // line 39
        echo "
";
        // line 41
        echo "   
  <div class=\"container-fluid\">
            <div class=\"row h-100 align-items-center justify-content-center\" style=\"min-height: 100vh;\">
                <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4\">
                    <div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
                        <div class=\"d-flex align-items-center justify-content-between mb-3\">
                            <a href=\"index.html\" class=\"\">
                           
                            </a>
                            <h3>Sign Up</h3>
                        </div>
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
                         <div class=\"form-floating mb-3\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'row');
        echo "
          
                        </div>
                         <div class=\"form-floating mb-3\">
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "prenom", [], "any", false, false, false, 58), 'row');
        echo "
          
                        </div>
                         <div class=\"form-floating mb-3\">
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "sexe", [], "any", false, false, false, 62), 'row');
        echo "
          
                        </div>
                         <div class=\"form-floating mb-3\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "age", [], "any", false, false, false, 66), 'row');
        echo "
          
                        </div>
                        
                         <div class=\"form-floating mb-3\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "abonnement", [], "any", false, false, false, 71), 'row');
        echo "
          
                        </div>
                            
                        <div class=\"form-floating mb-3\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'row');
        echo "
                            
                        </div>                
                         <div class=\"form-floating mb-3\">
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "plainPassword", [], "any", false, false, false, 80), 'row', ["label" => "Password"]);
        // line 82
        echo "
        </div>

                         <div class=\"form-floating mb-3\">
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "roles", [], "any", false, false, false, 86), 'row');
        echo "
          
                        </div>
         <div class=\"d-flex align-items-center justify-content-between mb-4\">
         <div class=\"form-check\">
        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "agreeTerms", [], "any", false, false, false, 91), 'row');
        echo "
 </div>
      </div>
            
                        
         <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
        <p class=\"text-center mb-0\">Already have an Account? <a href=\"login\">Sign In</a></p>
    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
      </div>
";
        // line 101
        echo " </div>
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/chart/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 38,  231 => 114,  225 => 111,  221 => 110,  217 => 109,  213 => 108,  209 => 107,  205 => 106,  201 => 105,  195 => 101,  190 => 98,  180 => 91,  172 => 86,  166 => 82,  164 => 80,  157 => 76,  149 => 71,  141 => 66,  134 => 62,  127 => 58,  120 => 54,  115 => 52,  102 => 41,  99 => 39,  97 => 38,  93 => 37,  85 => 32,  79 => 29,  73 => 26,  69 => 25,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'base.html.twig' %}#}
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>ADO-DOC</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{asset('assetsB/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assetsB/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{asset('assetsB/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{asset('assetsB/css/style.css')}}\" rel=\"stylesheet\">
</head>

<body>

<div class=\"left:100px;\" style=\"background-image: url('{{asset('assetsF/img/bg.jpg')}}');\">
{% block title %}{% endblock %}

{#{% block body %}#}
   
  <div class=\"container-fluid\">
            <div class=\"row h-100 align-items-center justify-content-center\" style=\"min-height: 100vh;\">
                <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4\">
                    <div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
                        <div class=\"d-flex align-items-center justify-content-between mb-3\">
                            <a href=\"index.html\" class=\"\">
                           
                            </a>
                            <h3>Sign Up</h3>
                        </div>
    {{ form_start(registrationForm) }}
                         <div class=\"form-floating mb-3\">
        {{ form_row(registrationForm.nom) }}
          
                        </div>
                         <div class=\"form-floating mb-3\">
        {{ form_row(registrationForm.prenom) }}
          
                        </div>
                         <div class=\"form-floating mb-3\">
        {{ form_row(registrationForm.sexe) }}
          
                        </div>
                         <div class=\"form-floating mb-3\">
        {{ form_row(registrationForm.age) }}
          
                        </div>
                        
                         <div class=\"form-floating mb-3\">
        {{ form_row(registrationForm.abonnement) }}
          
                        </div>
                            
                        <div class=\"form-floating mb-3\">
                            {{ form_row(registrationForm.email) }}
                            
                        </div>                
                         <div class=\"form-floating mb-3\">
        {{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
        </div>

                         <div class=\"form-floating mb-3\">
        {{ form_row(registrationForm.roles) }}
          
                        </div>
         <div class=\"d-flex align-items-center justify-content-between mb-4\">
         <div class=\"form-check\">
        {{ form_row(registrationForm.agreeTerms) }}
 </div>
      </div>
            
                        
         <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
        <p class=\"text-center mb-0\">Already have an Account? <a href=\"login\">Sign In</a></p>
    {{ form_end(registrationForm) }}
      </div>
{#{% endblock %}#}
 </div>
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{asset('assetsB/lib/chart/chart.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/lib/owlcarousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/lib/tempusdominus/js/moment.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/lib/tempusdominus/js/moment-timezone.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{asset('assetsB/js/main.js')}}\"></script>
</body>

</html>", "registration/register.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\registration\\register.html.twig");
    }
}
