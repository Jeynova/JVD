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

/* registration/index.html.twig */
class __TwigTemplate_a751f49aff178bda609bb001f06200f177143b12ea53feedc102b9e6a7af0828 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
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

        echo "Register";
        
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
        echo "    <h1>Register</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
    <div class=\"input-field\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 10, $this->source); })()), "username", [], "any", false, false, false, 10), 'widget', ["attr" => ["id" => "username"]]);
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), "username", [], "any", false, false, false, 11), 'label', ["label_attr" => ["for" => "username"], "label" => "Username"]);
        echo "
        </div>
        <div class=\"input-field\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'widget', ["attr" => ["id" => "mail"]]);
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'label', ["label_attr" => ["for" => "mail"], "label" => "Mail"]);
        echo "
            </div>
            <div class=\"input-field\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "country", [], "any", false, false, false, 18), 'widget', ["attr" => ["id" => "country"]]);
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "country", [], "any", false, false, false, 19), 'label', ["label_attr" => ["for" => "country"], "label" => "Country"]);
        echo "
                </div>
            <div class=\"input-field\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "city", [], "any", false, false, false, 22), 'widget', ["attr" => ["id" => "city"]]);
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "city", [], "any", false, false, false, 23), 'label', ["label_attr" => ["for" => "city"], "label" => "city"]);
        echo "
            </div>
            <div class=\"file-field input-field\">
                    <div class=\"btn\">
                      <span>Avatar</span>
                      ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "avatar", [], "any", false, false, false, 28), 'widget', ["attr" => ["id" => "avatar"]]);
        echo " 
                    </div>
                    <div class=\"file-path-wrapper\">
                      <input class=\"file-path validate\" type=\"text\">
                    </div>
                  </div>
        <div class=\"row col s12\" style=\"margin-bottom: 0\">
                <div class=\"input-field col s6\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "plainPassword", [], "any", false, false, false, 36), 'widget', ["attr" => ["id" => "plainPassword"]]);
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'label', ["label_attr" => ["for" => "plainPassword"], "label" => "Plain Password"]);
        echo "
                </div>
                <div class=\"input-field col s6\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPasswordConfirm", [], "any", false, false, false, 40), 'widget', ["attr" => ["id" => "plainPasswordConfirm"]]);
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPasswordConfirm", [], "any", false, false, false, 41), 'label', ["label_attr" => ["for" => "plainPasswordConfirm"], "label" => "Plain Password Confirm"]);
        echo "
                    <span class=\"helper-text\" data-error=\"wrong\" data-success=\"right\">Helper text</span>
                </div>
            </div>

            <div style=\"margin-bottom:  1.5%\">
                    <label>
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "agreeTerms", [], "any", false, false, false, 48), 'widget');
        echo "
                        <span>Agree Terms</span>
                    </label>
                </div>

        <button class=\"btn\">Register</button>
    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <script>
            \$(\"#registration_form_plainPassword\").on(\"focusout\", function (e) {
        if (\$(this).val() != \$(\"#registration_form_plainPasswordConfirm\").val()) {
            \$(\"#registration_form_plainPasswordConfirm\").removeClass(\"valid\").addClass(\"invalid\");
        } else {
            \$(\"#registration_form_plainPasswordConfirm\").removeClass(\"invalid\").addClass(\"valid\");
        }
    });

    \$(\"#registration_form_plainPasswordConfirm\").on(\"keyup\", function (e) {
        if (\$(\"#registration_form_plainPassword\").val() != \$(this).val()) {
            \$(this).removeClass(\"valid\").addClass(\"invalid\");
        } else {
            \$(this).removeClass(\"invalid\").addClass(\"valid\");
        }
    });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 58,  196 => 57,  184 => 54,  175 => 48,  165 => 41,  161 => 40,  155 => 37,  151 => 36,  140 => 28,  132 => 23,  128 => 22,  122 => 19,  118 => 18,  112 => 15,  108 => 14,  102 => 11,  98 => 10,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <h1>Register</h1>

    {{ form_start(registrationForm) }}
    <div class=\"input-field\">
            {{ form_widget(registrationForm.username, { 'attr': { 'id': 'username'} }) }}
            {{ form_label(registrationForm.username, 'Username', { 'label_attr': {'for': 'username'} }) }}
        </div>
        <div class=\"input-field\">
                {{ form_widget(registrationForm.email, { 'attr': { 'id': 'mail'} }) }}
                {{ form_label(registrationForm.email, 'Mail', { 'label_attr': {'for': 'mail'} }) }}
            </div>
            <div class=\"input-field\">
                    {{ form_widget(registrationForm.country, { 'attr': { 'id': 'country'} }) }}
                    {{ form_label(registrationForm.country, 'Country', { 'label_attr': {'for': 'country'} }) }}
                </div>
            <div class=\"input-field\">
                    {{ form_widget(registrationForm.city, { 'attr': { 'id': 'city'} }) }}
                    {{ form_label(registrationForm.city, 'city', { 'label_attr': {'for': 'city'} }) }}
            </div>
            <div class=\"file-field input-field\">
                    <div class=\"btn\">
                      <span>Avatar</span>
                      {{ form_widget(registrationForm.avatar, { 'attr': { 'id': 'avatar'} }) }} 
                    </div>
                    <div class=\"file-path-wrapper\">
                      <input class=\"file-path validate\" type=\"text\">
                    </div>
                  </div>
        <div class=\"row col s12\" style=\"margin-bottom: 0\">
                <div class=\"input-field col s6\">
                    {{ form_widget(registrationForm.plainPassword, { 'attr': { 'id': 'plainPassword'} }) }}
                    {{ form_label(registrationForm.plainPassword, 'Plain Password', { 'label_attr': {'for': 'plainPassword'} }) }}
                </div>
                <div class=\"input-field col s6\">
                    {{ form_widget(registrationForm.plainPasswordConfirm, { 'attr': { 'id': 'plainPasswordConfirm'} }) }}
                    {{ form_label(registrationForm.plainPasswordConfirm, 'Plain Password Confirm', { 'label_attr': {'for': 'plainPasswordConfirm'} }) }}
                    <span class=\"helper-text\" data-error=\"wrong\" data-success=\"right\">Helper text</span>
                </div>
            </div>

            <div style=\"margin-bottom:  1.5%\">
                    <label>
                        {{ form_widget(registrationForm.agreeTerms) }}
                        <span>Agree Terms</span>
                    </label>
                </div>

        <button class=\"btn\">Register</button>
    {{ form_end(registrationForm) }}
{% endblock %}

{% block javascripts %}
    <script>
            \$(\"#registration_form_plainPassword\").on(\"focusout\", function (e) {
        if (\$(this).val() != \$(\"#registration_form_plainPasswordConfirm\").val()) {
            \$(\"#registration_form_plainPasswordConfirm\").removeClass(\"valid\").addClass(\"invalid\");
        } else {
            \$(\"#registration_form_plainPasswordConfirm\").removeClass(\"invalid\").addClass(\"valid\");
        }
    });

    \$(\"#registration_form_plainPasswordConfirm\").on(\"keyup\", function (e) {
        if (\$(\"#registration_form_plainPassword\").val() != \$(this).val()) {
            \$(this).removeClass(\"valid\").addClass(\"invalid\");
        } else {
            \$(this).removeClass(\"invalid\").addClass(\"valid\");
        }
    });
    </script>
{% endblock %}
", "registration/index.html.twig", "/Applications/MAMP_2019-08-23_09-35-41/htdocs/JVD/JVD/templates/registration/index.html.twig");
    }
}
