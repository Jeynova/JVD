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

/* picture/addPicture.html.twig */
class __TwigTemplate_40303d41f1a0f8b942959dfc96e6520511b189fb72ec26d4f66910cf9ab457fd extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "picture/addPicture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "picture/addPicture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "picture/addPicture.html.twig", 1);
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

        // line 4
        echo "    Ajouter une image
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

    <div class=\"input-field\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'widget', ["attr" => ["id" => "title"]]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), 'label', ["label_attr" => ["for" => "title"], "label" => "Title"]);
        echo "
    </div>

    <div class=\"input-field\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'widget', ["attr" => ["id" => "name"]]);
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'label', ["label_attr" => ["for" => "name"], "label" => "Img name"]);
        echo "
    </div>
    <div class=\"input-field\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'widget', ["attr" => ["id" => "description"]]);
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'label', ["label_attr" => ["for" => "description"], "label" => "Description"]);
        echo "
    </div>
    <div class=\"file-field input-field\">
        <div class=\"btn\">
            <span>Pict</span>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26), 'widget', ["attr" => ["id" => "image"]]);
        echo "
        </div>
       <div class=\"file-path-wrapper\">
               <input class=\"file-path validate\" type=\"text\">
              </div>
    </div>
    <div class=\"chips chips-placeholder\">

    </div>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 34, $this->source); })()), "tempotags", [], "any", false, false, false, 34), 'widget', ["attr" => ["id" => "tags"]]);
        echo "
    <button class=\"btn\" id=\"picture_submit\">
        ";
        // line 36
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "            Modifier
        ";
        } else {
            // line 39
            echo "            Ajouter
        ";
        }
        // line 41
        echo "    </button>

        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 43, $this->source); })()), 'form_end');
        echo "

        <button id=\"chip\">yo</button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.chips');
            var instances = M.Chips.init(elems, {placeholder: \"Enter A Tag\", secondaryPlaceholder: \"+Tag\"});
        });

        \$(\"#picture_submit\").click(function (){
            var chipData = M.Chips.getInstance(\$('.chips')).chipsData
            console.log(chipData)
            var datag = []
            \$.each(chipData, function(k,v) {
                datag.push(v.tag)
            })

            \$('#picture_tempotags').val(datag)
            console.log(\$('#picture_tags').val())
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "picture/addPicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 50,  177 => 49,  163 => 43,  159 => 41,  155 => 39,  151 => 37,  149 => 36,  144 => 34,  133 => 26,  125 => 21,  121 => 20,  115 => 17,  111 => 16,  104 => 12,  100 => 11,  94 => 8,  91 => 7,  81 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Ajouter une image
{% endblock %}
{% block body %}

    {{ form_start(formPicture) }}

    <div class=\"input-field\">
        {{ form_widget(formPicture.title, { 'attr': { 'id': 'title'} }) }}
        {{ form_label(formPicture.title, 'Title', { 'label_attr': {'for': 'title'} }) }}
    </div>

    <div class=\"input-field\">
        {{ form_widget(formPicture.name, { 'attr': { 'id': 'name'} }) }}
        {{ form_label(formPicture.name, 'Img name', { 'label_attr': {'for': 'name'} }) }}
    </div>
    <div class=\"input-field\">
        {{ form_widget(formPicture.description, { 'attr': { 'id': 'description'} }) }}
        {{ form_label(formPicture.description, 'Description', { 'label_attr': {'for': 'description'} }) }}
    </div>
    <div class=\"file-field input-field\">
        <div class=\"btn\">
            <span>Pict</span>
            {{ form_widget(formPicture.image, { 'attr': { 'id': 'image'} }) }}
        </div>
       <div class=\"file-path-wrapper\">
               <input class=\"file-path validate\" type=\"text\">
              </div>
    </div>
    <div class=\"chips chips-placeholder\">

    </div>{{ form_widget(formPicture.tempotags,{'attr':{'id':'tags'}}) }}
    <button class=\"btn\" id=\"picture_submit\">
        {% if editMode %}
            Modifier
        {% else %}
            Ajouter
        {% endif %}
    </button>

        {{ form_end(formPicture) }}

        <button id=\"chip\">yo</button>
{% endblock %}


{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.chips');
            var instances = M.Chips.init(elems, {placeholder: \"Enter A Tag\", secondaryPlaceholder: \"+Tag\"});
        });

        \$(\"#picture_submit\").click(function (){
            var chipData = M.Chips.getInstance(\$('.chips')).chipsData
            console.log(chipData)
            var datag = []
            \$.each(chipData, function(k,v) {
                datag.push(v.tag)
            })

            \$('#picture_tempotags').val(datag)
            console.log(\$('#picture_tags').val())
        })
    </script>
{% endblock %}
", "picture/addPicture.html.twig", "/Applications/MAMP_2019-08-23_09-35-41/htdocs/JVD/JVD/templates/picture/addPicture.html.twig");
    }
}
