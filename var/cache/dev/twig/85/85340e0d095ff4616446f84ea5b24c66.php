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

/* user/index.html.twig */
class __TwigTemplate_6362b86382e625dfae9e305a78d30553 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

</head>
<body>
<center>
  <h2>Liste des Utilisateurs</h2>
</center>

  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

  <br>
  <button class=\"bouton-vert custom-button\" id=\"addUser\">AJOUTER</button>
  <br>
  <br>

<script>
  function togglePasswordVisibility(userId) {
    const passwordInput = document.getElementById(`password-\${userId}`);
    const passwordToggle = document.querySelector(`#password-\${userId} + .password-toggle`);

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
    \$('#addUser').click(function(e) {
      e.preventDefault(); // Prevent the default behavior of the button

      \$.ajax({
        url: '";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
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
              \$('#userForm').submit(function(e) {
                e.preventDefault(); // Empêcher le comportement de soumission par défaut

                // Récupérer les données du formulaire
                var formData = \$(this).serialize();

                // Envoyer les données au serveur pour enregistrement
                \$.ajax({
                  url: '";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', userId),
                  type: 'POST',
                  data: formData,
                  success: function() {
                    Swal.fire('Success', 'User details updated!', 'success');
                    location.reload(); // Recharger la page pour afficher les mises à jour
                  },
                  error: function() {
                    Swal.fire('Error', 'An error occurred while updating user details.', 'error');
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
      var userId = \$(this).data('user-id');
      var url = '";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', userId);
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
          \$('#userForm').submit(function(e) {
            e.preventDefault(); // Empêcher le comportement de soumission par défaut

            // Récupérer les données du formulaire
            var formData = \$(this).serialize();

            // Envoyer les données au serveur pour enregistrement
            \$.ajax({
              url: '";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', userId),
              type: 'POST',
              data: formData,
              success: function() {
                Swal.fire('Success', 'User details updated!', 'success');
                location.reload(); // Recharger la page pour afficher les mises à jour
              },
              error: function() {
                Swal.fire('Error', 'An error occurred while updating user details.', 'error');
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
      <th><a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["sort" => "nom"]);
        echo "\">Nom</a></th>
      <th>Prenom</th>
      <th>Sexe</th>
      <th>Age</th>
      <th>Abonnement (Months)</th>
      <th>date debut</th>
      <th>date fin</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 210, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 211
            echo "    <tr>
      <td>";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 212), "html", null, true);
            echo "</td>
      <td>";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 213), "html", null, true);
            echo "</td>
      <td>";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 214), "html", null, true);
            echo "</td>
      <td>";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 215), "html", null, true);
            echo "</td>
      <td>";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "age", [], "any", false, false, false, 216), "html", null, true);
            echo "</td>
      <td>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "abonnement", [], "any", false, false, false, 217), "html", null, true);
            echo "</td>
      <td>";
            // line 218
            ((twig_get_attribute($this->env, $this->source, $context["user"], "datedebut", [], "any", false, false, false, 218)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datedebut", [], "any", false, false, false, 218), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
      <td>";
            // line 219
            ((twig_get_attribute($this->env, $this->source, $context["user"], "datefin", [], "any", false, false, false, 219)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datefin", [], "any", false, false, false, 219), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
      <td>";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 220), "html", null, true);
            echo "</td>
        
        <td>
          <button style=\"background-color: #87CCEE; color: white; padding: 5px 10px; text-decoration: none;\" class=\"edit-button\" data-user-id=\"";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 223), "html", null, true);
            echo "\">Modifier</button>
        </td>
        <td>
          ";
            // line 226
            echo twig_include($this->env, $context, "user/_delete_form.html.twig");
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
            // line 230
            echo "      <tr>
        <td colspan=\"5\">no records found</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "      </tbody>
</table>

<center>
  <div class=\"pagination\">
    ";
        // line 239
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 239, $this->source); })()));
        echo "
  </div>
</center>

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 239,  422 => 234,  413 => 230,  396 => 226,  390 => 223,  384 => 220,  380 => 219,  376 => 218,  372 => 217,  368 => 216,  364 => 215,  360 => 214,  356 => 213,  352 => 212,  349 => 211,  331 => 210,  315 => 197,  284 => 169,  256 => 144,  230 => 121,  208 => 102,  166 => 63,  159 => 58,  149 => 57,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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

</head>
<body>
<center>
  <h2>Liste des Utilisateurs</h2>
</center>

  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

  <br>
  <button class=\"bouton-vert custom-button\" id=\"addUser\">AJOUTER</button>
  <br>
  <br>

<script>
  function togglePasswordVisibility(userId) {
    const passwordInput = document.getElementById(`password-\${userId}`);
    const passwordToggle = document.querySelector(`#password-\${userId} + .password-toggle`);

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
    \$('#addUser').click(function(e) {
      e.preventDefault(); // Prevent the default behavior of the button

      \$.ajax({
        url: '{{ path('app_user_new') }}', // URL of your Symfony action to display the add form
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
              \$('#userForm').submit(function(e) {
                e.preventDefault(); // Empêcher le comportement de soumission par défaut

                // Récupérer les données du formulaire
                var formData = \$(this).serialize();

                // Envoyer les données au serveur pour enregistrement
                \$.ajax({
                  url: '{{ path('app_user_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', userId),
                  type: 'POST',
                  data: formData,
                  success: function() {
                    Swal.fire('Success', 'User details updated!', 'success');
                    location.reload(); // Recharger la page pour afficher les mises à jour
                  },
                  error: function() {
                    Swal.fire('Error', 'An error occurred while updating user details.', 'error');
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
      var userId = \$(this).data('user-id');
      var url = '{{ path('app_user_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', userId);
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
          \$('#userForm').submit(function(e) {
            e.preventDefault(); // Empêcher le comportement de soumission par défaut

            // Récupérer les données du formulaire
            var formData = \$(this).serialize();

            // Envoyer les données au serveur pour enregistrement
            \$.ajax({
              url: '{{ path('app_user_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', userId),
              type: 'POST',
              data: formData,
              success: function() {
                Swal.fire('Success', 'User details updated!', 'success');
                location.reload(); // Recharger la page pour afficher les mises à jour
              },
              error: function() {
                Swal.fire('Error', 'An error occurred while updating user details.', 'error');
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
      <th><a href=\"{{ path('app_user_index', {'sort': 'nom'}) }}\">Nom</a></th>
      <th>Prenom</th>
      <th>Sexe</th>
      <th>Age</th>
      <th>Abonnement (Months)</th>
      <th>date debut</th>
      <th>date fin</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    {% for user in users %}
    <tr>
      <td>{{ user.id }}</td>
      <td>{{ user.nom }}</td>
      <td>{{ user.prenom }}</td>
      <td>{{ user.sexe }}</td>
      <td>{{ user.age }}</td>
      <td>{{ user.abonnement }}</td>
      <td>{{ user.datedebut ? user.datedebut|date('d-m-Y') : '' }}</td>
      <td>{{ user.datefin ? user.datefin|date('d-m-Y') : '' }}</td>
      <td>{{ user.email }}</td>
        
        <td>
          <button style=\"background-color: #87CCEE; color: white; padding: 5px 10px; text-decoration: none;\" class=\"edit-button\" data-user-id=\"{{ user.id }}\">Modifier</button>
        </td>
        <td>
          {{ include('user/_delete_form.html.twig') }}
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
  <div class=\"pagination\">
    {{ knp_pagination_render(users) }}
  </div>
</center>

</body>
</html>
{% endblock %}
", "user/index.html.twig", "C:\\Users\\octanet\\Desktop\\test1\\test1\\templates\\user\\index.html.twig");
    }
}
