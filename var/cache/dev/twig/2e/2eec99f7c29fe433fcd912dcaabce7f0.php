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

/* produit/index.html.twig */
class __TwigTemplate_7110b5286b7a2f5ce18510d0b7dfe7c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
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

        echo "Liste des Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<style>
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.pagination a {
  display: inline-block;
  padding: 5px 10px;
  margin: 0 5px;
  background-color: #e9e9e9;
  color: #333;
  text-decoration: none;
  border-radius: 4px;
}

.pagination a.active {
  background-color: #333;
  color: #fff;
}
</style>

<style>

.inline-field {
    display: inline-block;
    margin-right: 10px;
}

</style>

<style>
.custom-button {  
  background-color: green;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  text-decoration: none;
}
</style>

<style>

.custom-label {
  margin-left: -10px;
}
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "<html lang=\"en\">
<head>
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css\" integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css\" integrity=\"sha512-XXXXX\" crossorigin=\"anonymous\" />
  <link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("path/to/your/css/styles.css"), "html", null, true);
        echo "\">

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css\">
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js\"></script>


<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 100px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>



</head>
<body>
<center>
  <h2>Liste des Utilisateurs</h2>

  <ul>
  <li><a href=\"/coach/\">Coach</a></li>
  <li><a href=\"/user/\">User</a></li>
  <li><a class=\"active\" href=\"/produit/\">Produit</a></li>
</ul>

</center>

  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

  <br>
  <button class=\"bouton-vert custom-button\" id=\"addproduit\">AJOUTER</button>
  <br>
  <br>

<script>
  function togglePasswordVisibility(produitId) {
    const passwordInput = document.getElementById(`password-\${produitId}`);
    const passwordToggle = document.querySelector(`#password-\${produitId} + .password-toggle`);

    if (passwordInput.type === \"password\") {
      passwordInput.type = \"text\";
      passwordToggle.classList.add(\"active\");
    } else {
      passwordInput.type = \"password\";
      passwordToggle.classList.remove(\"active\");
    }
  }
</script>

<script>
  \$(document).ready(function() {
    \$('#addproduit').click(function(e) {
      e.preventDefault(); // Prevent the default behavior of the button

      \$.ajax({
        url: '";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        echo "', // URL of your Symfony action to display the add form
        type: 'GET',
        success: function(response) {
          Swal.fire({
            title: 'Ajouter un utilisateur',
            html: response, // HTML content of the form
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            onOpen: () => {
              // Ajouter un gestionnaire d'événements pour la soumission du formulaire
              \$('#produitForm').submit(function(e) {
                e.preventDefault(); // Empêcher le comportement de soumission par défaut

                // Récupérer les données du formulaire
                var formData = \$(this).serialize();

                // Envoyer les données au serveur pour enregistrement
                \$.ajax({
                  url: '";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', produitId),
                  type: 'POST',
                  data: formData,
                  success: function() {
                    Swal.fire('Success', 'produit details updated!', 'success');
                    location.reload(); // Recharger la page pour afficher les mises à jour
                  },
                  error: function() {
                    Swal.fire('Error', 'An error occurred while updating produit details.', 'error');
                  }
                });
              });
            }
          });
        },
        error: function() {
          Swal.fire('Error', 'An error occurred while loading the form.', 'error');
        }
      });
    });

    \$('.edit-button').click(function() {
      var produitId = \$(this).data('produit-id');
      var url = '";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', produitId);
      openPopup(url);
    });
  });

  function openPopup(url) {
  \$.ajax({
    url: url,
    success: function(response) {
      Swal.fire({
        title: 'Modifier un utilisateur',
        html: response, // HTML content of the form
        showCloseButton: true,
        showCancelButton: false, // Remove the Cancel button
        showConfirmButton: false, // Remove the Save button
        onOpen: () => {
          // Ajouter un gestionnaire d'événements pour la soumission du formulaire
          \$('#produitForm').submit(function(e) {
            e.preventDefault(); // Empêcher le comportement de soumission par défaut

            // Récupérer les données du formulaire
            var formData = \$(this).serialize();

            // Envoyer les données au serveur pour enregistrement
            \$.ajax({
              url: '";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', produitId),
              type: 'POST',
              data: formData,
              success: function() {
                Swal.fire('Success', 'produit details updated!', 'success');
                location.reload(); // Recharger la page pour afficher les mises à jour
              },
              error: function() {
                Swal.fire('Error', 'An error occurred while updating produit details.', 'error');
              }
            });
          });
        }
      });
    },
    error: function() {
      Swal.fire('Error', 'An error occurred while loading the form.', 'error');
    }
  });
}

</script>


<table class=\"table\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Image</th>
      <th><a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["sort" => "nom"]);
        echo "\">Nom</a></th>
      <th>prix</th>
      <th>datepost</th>
      <th>detail</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 247, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 248
            echo "    <tr>
      <td>";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 249), "html", null, true);
            echo "</td>
      <td>";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 250), "html", null, true);
            echo "</td>
      <td>";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 251), "html", null, true);
            echo "</td>
      <td>";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 252), "html", null, true);
            echo "</td>
      <td>";
            // line 253
            ((twig_get_attribute($this->env, $this->source, $context["produit"], "datepost", [], "any", false, false, false, 253)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "datepost", [], "any", false, false, false, 253), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
      <td>";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "detail", [], "any", false, false, false, 254), "html", null, true);
            echo "</td>
        
        <td>
          <button style=\"background-color: #87CCEE; color: white; padding: 5px 10px; text-decoration: none;\" class=\"edit-button\" data-produit-id=\"";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 257), "html", null, true);
            echo "\">Modifier</button>
        </td>
        <td>
          ";
            // line 260
            echo twig_include($this->env, $context, "produit/_delete_form.html.twig");
            echo "
        </td>
      </tr>
      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 264
            echo "      <tr>
        <td colspan=\"5\">no records found</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "      </tbody>
</table>

<center>
</center>

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 268,  438 => 264,  421 => 260,  415 => 257,  409 => 254,  405 => 253,  401 => 252,  397 => 251,  393 => 250,  389 => 249,  386 => 248,  368 => 247,  356 => 238,  324 => 209,  296 => 184,  270 => 161,  248 => 142,  166 => 63,  159 => 58,  149 => 57,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Utilisateurs{% endblock %}
{% block stylesheets %}
<style>
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.pagination a {
  display: inline-block;
  padding: 5px 10px;
  margin: 0 5px;
  background-color: #e9e9e9;
  color: #333;
  text-decoration: none;
  border-radius: 4px;
}

.pagination a.active {
  background-color: #333;
  color: #fff;
}
</style>

<style>

.inline-field {
    display: inline-block;
    margin-right: 10px;
}

</style>

<style>
.custom-button {  
  background-color: green;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  text-decoration: none;
}
</style>

<style>

.custom-label {
  margin-left: -10px;
}
</style>

{% endblock %}

{% block body %}
<html lang=\"en\">
<head>
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css\" integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css\" integrity=\"sha512-XXXXX\" crossorigin=\"anonymous\" />
  <link rel=\"stylesheet\" href=\"{{ asset('path/to/your/css/styles.css') }}\">

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css\">
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js\"></script>


<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 100px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>



</head>
<body>
<center>
  <h2>Liste des Utilisateurs</h2>

  <ul>
  <li><a href=\"/coach/\">Coach</a></li>
  <li><a href=\"/user/\">User</a></li>
  <li><a class=\"active\" href=\"/produit/\">Produit</a></li>
</ul>

</center>

  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

  <br>
  <button class=\"bouton-vert custom-button\" id=\"addproduit\">AJOUTER</button>
  <br>
  <br>

<script>
  function togglePasswordVisibility(produitId) {
    const passwordInput = document.getElementById(`password-\${produitId}`);
    const passwordToggle = document.querySelector(`#password-\${produitId} + .password-toggle`);

    if (passwordInput.type === \"password\") {
      passwordInput.type = \"text\";
      passwordToggle.classList.add(\"active\");
    } else {
      passwordInput.type = \"password\";
      passwordToggle.classList.remove(\"active\");
    }
  }
</script>

<script>
  \$(document).ready(function() {
    \$('#addproduit').click(function(e) {
      e.preventDefault(); // Prevent the default behavior of the button

      \$.ajax({
        url: '{{ path('app_produit_new') }}', // URL of your Symfony action to display the add form
        type: 'GET',
        success: function(response) {
          Swal.fire({
            title: 'Ajouter un utilisateur',
            html: response, // HTML content of the form
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            onOpen: () => {
              // Ajouter un gestionnaire d'événements pour la soumission du formulaire
              \$('#produitForm').submit(function(e) {
                e.preventDefault(); // Empêcher le comportement de soumission par défaut

                // Récupérer les données du formulaire
                var formData = \$(this).serialize();

                // Envoyer les données au serveur pour enregistrement
                \$.ajax({
                  url: '{{ path('app_produit_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', produitId),
                  type: 'POST',
                  data: formData,
                  success: function() {
                    Swal.fire('Success', 'produit details updated!', 'success');
                    location.reload(); // Recharger la page pour afficher les mises à jour
                  },
                  error: function() {
                    Swal.fire('Error', 'An error occurred while updating produit details.', 'error');
                  }
                });
              });
            }
          });
        },
        error: function() {
          Swal.fire('Error', 'An error occurred while loading the form.', 'error');
        }
      });
    });

    \$('.edit-button').click(function() {
      var produitId = \$(this).data('produit-id');
      var url = '{{ path('app_produit_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', produitId);
      openPopup(url);
    });
  });

  function openPopup(url) {
  \$.ajax({
    url: url,
    success: function(response) {
      Swal.fire({
        title: 'Modifier un utilisateur',
        html: response, // HTML content of the form
        showCloseButton: true,
        showCancelButton: false, // Remove the Cancel button
        showConfirmButton: false, // Remove the Save button
        onOpen: () => {
          // Ajouter un gestionnaire d'événements pour la soumission du formulaire
          \$('#produitForm').submit(function(e) {
            e.preventDefault(); // Empêcher le comportement de soumission par défaut

            // Récupérer les données du formulaire
            var formData = \$(this).serialize();

            // Envoyer les données au serveur pour enregistrement
            \$.ajax({
              url: '{{ path('app_produit_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', produitId),
              type: 'POST',
              data: formData,
              success: function() {
                Swal.fire('Success', 'produit details updated!', 'success');
                location.reload(); // Recharger la page pour afficher les mises à jour
              },
              error: function() {
                Swal.fire('Error', 'An error occurred while updating produit details.', 'error');
              }
            });
          });
        }
      });
    },
    error: function() {
      Swal.fire('Error', 'An error occurred while loading the form.', 'error');
    }
  });
}

</script>


<table class=\"table\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Image</th>
      <th><a href=\"{{ path('app_produit_index', {'sort': 'nom'}) }}\">Nom</a></th>
      <th>prix</th>
      <th>datepost</th>
      <th>detail</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    {% for produit in produits %}
    <tr>
      <td>{{ produit.id }}</td>
      <td>{{ produit.image }}</td>
      <td>{{ produit.nom }}</td>
      <td>{{ produit.prix }}</td>
      <td>{{ produit.datepost ? produit.datepost|date('d-m-Y') : '' }}</td>
      <td>{{ produit.detail }}</td>
        
        <td>
          <button style=\"background-color: #87CCEE; color: white; padding: 5px 10px; text-decoration: none;\" class=\"edit-button\" data-produit-id=\"{{ produit.id }}\">Modifier</button>
        </td>
        <td>
          {{ include('produit/_delete_form.html.twig') }}
        </td>
      </tr>
      {% else %}
      <tr>
        <td colspan=\"5\">no records found</td>
      </tr>
      {% endfor %}
      </tbody>
</table>

<center>
</center>

</body>
</html>
{% endblock %}
", "produit/index.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\produit\\index.html.twig");
    }
}
