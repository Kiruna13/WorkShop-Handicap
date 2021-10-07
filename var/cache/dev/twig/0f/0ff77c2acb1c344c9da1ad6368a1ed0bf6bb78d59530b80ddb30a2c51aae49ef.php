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

/* app/index.html.twig */
class __TwigTemplate_72ebf8efc751653892cdeeb200a3470cafe8c900c09fe9e6bd553a78009a21d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!DOCTYPE html>

<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>WorkShop</title>
    <link rel=\"stylesheet\" href=\"app/style.css\" />
  </head>
  <body>
    <div class=\"mobile-container\">

      <!-- DIV HEADER -->
      <div class=\"top-bloc\">
        <img src=\"app/logo.gif\" style=\"width:200px;\">
      </div>

      <!-- Image Centrale -->
      <div class=\"tacheContainer\" id=\"tacheContainer\">

      </div>



      <!-- Boutons de navigations du bas de page -->
      <nav class=\"bottom-nav\">

        <a  class=\"menu-item\" id=\"cross\">
          <img src=\"https://img.icons8.com/material-rounded/24/000000/delete-sign.png\" alt=\"non validé\"/>

        </a>

        <a  class=\"menu-item\" id=\"question\">
          <img src=\"https://img.icons8.com/material-outlined/24/000000/question-mark.png\" alt=\"problème\"/>

        </a>

        <a  class=\"menu-item\" id=\"check\">
          <img src=\"https://img.icons8.com/material-outlined/24/000000/checkmark--v1.png\" alt=\"valider\"/>


        </a>

      </nav>

    </div>



    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <script src=\"app/script.js\"></script>

  </body>

</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<!DOCTYPE html>

<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>WorkShop</title>
    <link rel=\"stylesheet\" href=\"app/style.css\" />
  </head>
  <body>
    <div class=\"mobile-container\">

      <!-- DIV HEADER -->
      <div class=\"top-bloc\">
        <img src=\"app/logo.gif\" style=\"width:200px;\">
      </div>

      <!-- Image Centrale -->
      <div class=\"tacheContainer\" id=\"tacheContainer\">

      </div>



      <!-- Boutons de navigations du bas de page -->
      <nav class=\"bottom-nav\">

        <a  class=\"menu-item\" id=\"cross\">
          <img src=\"https://img.icons8.com/material-rounded/24/000000/delete-sign.png\" alt=\"non validé\"/>

        </a>

        <a  class=\"menu-item\" id=\"question\">
          <img src=\"https://img.icons8.com/material-outlined/24/000000/question-mark.png\" alt=\"problème\"/>

        </a>

        <a  class=\"menu-item\" id=\"check\">
          <img src=\"https://img.icons8.com/material-outlined/24/000000/checkmark--v1.png\" alt=\"valider\"/>


        </a>

      </nav>

    </div>



    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <script src=\"app/script.js\"></script>

  </body>

</html>


{% endblock %}
", "app/index.html.twig", "D:\\wamp64\\www\\Workshop handicap\\WorkShop-Handicap\\templates\\app\\index.html.twig");
    }
}
