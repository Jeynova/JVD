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

/* navbar.html.twig */
class __TwigTemplate_2e0b07c8f9d9bc41f26d0e55e6718c8644d0b669d950bd62df0ae7849480af01 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<div class=\"navbar-fixed\">
<nav id='bar' class=\"deep-purple\">
    <div class=\"nav-wrapper nav-center\" style=\"width: 98%; margin: auto\">
    <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"brand-logo\"><i class=\"material-icons\">brightness_medium</i>Pict'ur</a>

    <form method=\"post\" id=\"nav-form\">

    </form>

    <ul>

        <li id=\"nav-search\"><a><i class=\"material-icons\">search</i></a></li>
        <li><a href=\"collapsible.html\"><i class=\"material-icons\">favorite</i></a></li>
        <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("picture");
        echo "\"><i class=\"material-icons\">view_module</i></a></li>
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\"><i class=\"material-icons\">face</i></a></li>
        ";
        } else {
            // line 18
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"material-icons\">face</i></a></li>
        ";
        }
        // line 20
        echo "        <!-- Dropdown Trigger -->
        <li><a class=\"dropdown-trigger\" href=\"\" data-target=\"dropdown-set\" style=\"font-size:1.5rem;font-weight: bolder; transform: rotate(90deg); outline: none\"><b>...</b></a></li>

        <!-- Dropdown Structure -->
        <ul id='dropdown-set' class='dropdown-content'>
            <li><a href=\"#!\"><div class=\"switch\">
                <label>
                  Night Mode
                  <input type=\"checkbox\" id=\"night_mode\">
                  <span class=\"lever\"></span>
                </label>
              </div></a></li>
            <li class=\"divider\" tabindex=\"-1\"></li>
            <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"center\"><i class=\"material-icons\" style=\"float: none; margin: auto; display:inline-block\">power_settings_new</i>Logout</a></li>
        </ul>


      </ul>
    </div>
  </nav>
</div>
  ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    <script>
        // ** INIT DROPDOWN **//
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, { coverTrigger: false, hover: true });
        });

        \$('#nav-search').click(function() {
          \$('#nav-search').html(\"\")
          \$('#nav-form').html(\"<div class='input-field'><input id='input-search' type='search' name='search' focus><label class='label-icon' for='search'><i class='material-icons'>search</i></label><a id='close-search'><i class='material-icons'>close</i></a></div>\")
          \$('#input-search').focus()
          \$('input[type=search]').focus(function() {
          \$('#close-search .material-icons').addClass('black-text')
          \$('#close-search').click(function() {
          \$('#nav-search').html(\"<a><i class='material-icons'>search</i></a>\")
          \$('#nav-form').html(\"\")
        })
        })
        })

        // ** NIGHT MODE ** //
        function darkmode(){
    \$('body').addClass('grey darken-4 white-text');
    \$('main a').removeClass('grey-text text-darken-4')
    \$('main a').addClass('white-text')
    \$('input[type=text]').addClass('white-text')
    localStorage.setItem(\"mode\", \"dark\");
    }



function nodark(){
        \$('body').removeClass('grey darken-4 white-text');
        \$('main a').removeClass('white-text')
        \$('main a').addClass('grey-text text-darken-4')
        \$('input[type=text]').removeClass('white-text')
        localStorage.setItem(\"mode\", \"light\");
        }

  if(localStorage.getItem(\"mode\")==\"dark\")
  {
        darkmode();
        \$(\"#night_mode\").prop('checked', true);
  } else {
      nodark();
  }

\$('#night_mode').change(function(){

    if (\$(this).prop('checked'))
    {
        darkmode();
    }
    else
    {
        nodark();
    }

});
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  106 => 41,  95 => 33,  80 => 20,  74 => 18,  68 => 16,  66 => 15,  62 => 14,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-fixed\">
<nav id='bar' class=\"deep-purple\">
    <div class=\"nav-wrapper nav-center\" style=\"width: 98%; margin: auto\">
    <a href=\"{{ path(\"home\") }}\" class=\"brand-logo\"><i class=\"material-icons\">brightness_medium</i>Pict'ur</a>

    <form method=\"post\" id=\"nav-form\">

    </form>

    <ul>

        <li id=\"nav-search\"><a><i class=\"material-icons\">search</i></a></li>
        <li><a href=\"collapsible.html\"><i class=\"material-icons\">favorite</i></a></li>
        <li><a href=\"{{ path(\"picture\") }}\"><i class=\"material-icons\">view_module</i></a></li>
        {% if app.user %}
            <li><a href=\"{{ path(\"user_show\", {id: app.user.id})}}\"><i class=\"material-icons\">face</i></a></li>
        {% else %}
            <li><a href=\"{{ path(\"app_login\") }}\"><i class=\"material-icons\">face</i></a></li>
        {% endif %}
        <!-- Dropdown Trigger -->
        <li><a class=\"dropdown-trigger\" href=\"\" data-target=\"dropdown-set\" style=\"font-size:1.5rem;font-weight: bolder; transform: rotate(90deg); outline: none\"><b>...</b></a></li>

        <!-- Dropdown Structure -->
        <ul id='dropdown-set' class='dropdown-content'>
            <li><a href=\"#!\"><div class=\"switch\">
                <label>
                  Night Mode
                  <input type=\"checkbox\" id=\"night_mode\">
                  <span class=\"lever\"></span>
                </label>
              </div></a></li>
            <li class=\"divider\" tabindex=\"-1\"></li>
            <li><a href=\"{{ path(\"app_logout\") }}\" class=\"center\"><i class=\"material-icons\" style=\"float: none; margin: auto; display:inline-block\">power_settings_new</i>Logout</a></li>
        </ul>


      </ul>
    </div>
  </nav>
</div>
  {% block javascripts %}
    <script>
        // ** INIT DROPDOWN **//
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, { coverTrigger: false, hover: true });
        });

        \$('#nav-search').click(function() {
          \$('#nav-search').html(\"\")
          \$('#nav-form').html(\"<div class='input-field'><input id='input-search' type='search' name='search' focus><label class='label-icon' for='search'><i class='material-icons'>search</i></label><a id='close-search'><i class='material-icons'>close</i></a></div>\")
          \$('#input-search').focus()
          \$('input[type=search]').focus(function() {
          \$('#close-search .material-icons').addClass('black-text')
          \$('#close-search').click(function() {
          \$('#nav-search').html(\"<a><i class='material-icons'>search</i></a>\")
          \$('#nav-form').html(\"\")
        })
        })
        })

        // ** NIGHT MODE ** //
        function darkmode(){
    \$('body').addClass('grey darken-4 white-text');
    \$('main a').removeClass('grey-text text-darken-4')
    \$('main a').addClass('white-text')
    \$('input[type=text]').addClass('white-text')
    localStorage.setItem(\"mode\", \"dark\");
    }



function nodark(){
        \$('body').removeClass('grey darken-4 white-text');
        \$('main a').removeClass('white-text')
        \$('main a').addClass('grey-text text-darken-4')
        \$('input[type=text]').removeClass('white-text')
        localStorage.setItem(\"mode\", \"light\");
        }

  if(localStorage.getItem(\"mode\")==\"dark\")
  {
        darkmode();
        \$(\"#night_mode\").prop('checked', true);
  } else {
      nodark();
  }

\$('#night_mode').change(function(){

    if (\$(this).prop('checked'))
    {
        darkmode();
    }
    else
    {
        nodark();
    }

});
    </script>
  {% endblock %}
", "navbar.html.twig", "/Applications/MAMP_2019-08-23_09-35-41/htdocs/JVD/JVD/templates/navbar.html.twig");
    }
}
