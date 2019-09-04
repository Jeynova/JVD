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

/* picture/pictureShow.html.twig */
class __TwigTemplate_a425ed716109ea4dfc56b6f4af6a8b56e506c4ed6b239a2a1c4d927c26009012 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "picture/pictureShow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "picture/pictureShow.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "picture/pictureShow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style media=\"screen\">


        canvas {
            max-width: 100% !important;
            height: auto !important;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "

    <div class=\"row divShow\">
        <div class=\"col s12 m12 l8 showImage \">
            <img class=\"responsive-img\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">Ajouter tag</a>
        </div>
        <div class=\"col s12 m12 l4 showInfo\">
            <div class=\"userInfo\">
                <div class=\"row valign-wrapper\">
                    <div class=\"col s3\">
                        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "avatar", [], "any", false, false, false, 26))), "html", null, true);
        echo "\" alt=\"\"
                             class=\" circle responsive-img\">
                        <!-- notice the \"circle\" class -->
                    </div>
                    <div class=\"col s9\">
                    <div class=\"col s9\">
              <span class=\"black-text\">
                  <strong> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
        echo "</strong> a posté l'image <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</strong>
                  <div class=\"postInfo\">
                <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
                      <p>";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 36, $this->source); })()), "tags", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 37
            echo "                        <div class=\"chip\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</p>
            </div>
              </span>
                    </div>
                </div>
            </div>

            <div class=\"formComment\">
                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 46, $this->source); })()), 'form_start');
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 47, $this->source); })()), 'widget', ["attr" => ["label" => "Votre commentaire"]]);
        echo "
                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"comment\">
                ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 51, $this->source); })()), "comments", [], "any", false, false, false, 51)) {
            // line 52
            echo "                    <ul class=\"collection\">
                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 53, $this->source); })()), "comments", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 54
                echo "                            <li class=\"collection-item avatar\">
                                ";
                // line 55
                if ((null === twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 55))) {
                    // line 56
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/avatarVisiteur.jpg"), "html", null, true);
                    echo "\" alt=\"\" class=\"circle\">
                                    <span class=\"title\">Visiteur</span>
                                ";
                } else {
                    // line 59
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 59), "avatar", [], "any", false, false, false, 59))), "html", null, true);
                    echo "\" alt=\"\"
                                         class=\"circle\">
                                    <span class=\"title\">";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 63
                echo "                                <p> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 63), "html", null, true);
                echo "<br>
                                    <em style=\"font-size: .7em\">";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 64), "d-m-y"), "html", null, true);
                echo " </em>
                                </p>
                                <a href=\"#\" class=\"secondary-content\"><i class=\"material-icons\">favorite</i></a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    </ul>
                ";
        }
        // line 71
        echo "            </div>
        </div>

    </div>



    <canvas id=\"canvas\" width=\"500\" height=\"500\"></canvas>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script type=\"text/javascript\">


        var src = ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 87, $this->source); })()), "image", [], "any", false, false, false, 87), "html", null, true);
        echo ";
        var photo = new Image();
        var canvas = document.getElementById('canvas');
        var ctx = canvas.getContext('2d');

        function render() {
            // Scale so that the image fills the container
            var width = window.innerWidth;
            var scale = width / photo.naturalWidth;
            var height = photo.naturalHeight * scale;
            ;

            canvas.width = width;
            canvas.height = height;

            ctx.drawImage(photo, 0, 0);
        }

        photo.onload = render;
        photo.crossOrigin = \"Anonymous\";
        photo.src = \"\" + src + \"\";

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "picture/pictureShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 87,  261 => 84,  251 => 83,  230 => 71,  226 => 69,  215 => 64,  210 => 63,  205 => 61,  199 => 59,  192 => 56,  190 => 55,  187 => 54,  183 => 53,  180 => 52,  178 => 51,  172 => 48,  168 => 47,  164 => 46,  154 => 38,  145 => 37,  141 => 36,  137 => 35,  130 => 33,  120 => 26,  111 => 20,  105 => 19,  99 => 15,  89 => 14,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <style media=\"screen\">


        canvas {
            max-width: 100% !important;
            height: auto !important;
        }
    </style>

{% endblock %}
{% block body %}


    <div class=\"row divShow\">
        <div class=\"col s12 m12 l8 showImage \">
            <img class=\"responsive-img\" src=\"{{ picture.image }}\" alt=\"{{ picture.name }}\">
            <a href=\"{{ path('tag_new', {'id': picture.id}) }}\">Ajouter tag</a>
        </div>
        <div class=\"col s12 m12 l4 showInfo\">
            <div class=\"userInfo\">
                <div class=\"row valign-wrapper\">
                    <div class=\"col s3\">
                        <img src=\"{{ asset('uploads/images/'~ picture.user.avatar) }}\" alt=\"\"
                             class=\" circle responsive-img\">
                        <!-- notice the \"circle\" class -->
                    </div>
                    <div class=\"col s9\">
                    <div class=\"col s9\">
              <span class=\"black-text\">
                  <strong> {{ picture.user.username }}</strong> a posté l'image <strong>{{ picture.title }}</strong>
                  <div class=\"postInfo\">
                <p>{{ picture.description }}</p>
                      <p>{% for tag in picture.tags %}
                        <div class=\"chip\">{{ tag }}</div>
                      {% endfor %}</p>
            </div>
              </span>
                    </div>
                </div>
            </div>

            <div class=\"formComment\">
                {{ form_start(formComment) }}
                {{ form_widget(formComment,{'attr':{'label':'Votre commentaire'}}) }}
                {{ form_end(formComment) }}
            </div>
            <div class=\"comment\">
                {% if picture.comments %}
                    <ul class=\"collection\">
                        {% for comment in picture.comments %}
                            <li class=\"collection-item avatar\">
                                {% if comment.user is null %}
                                    <img src=\"{{ asset('uploads/images/avatarVisiteur.jpg') }}\" alt=\"\" class=\"circle\">
                                    <span class=\"title\">Visiteur</span>
                                {% else %}
                                    <img src=\"{{ asset('uploads/images/'~ comment.user.avatar) }}\" alt=\"\"
                                         class=\"circle\">
                                    <span class=\"title\">{{ comment.user.username }}</span>
                                {% endif %}
                                <p> {{ comment.content }}<br>
                                    <em style=\"font-size: .7em\">{{ comment.date | date('d-m-y') }} </em>
                                </p>
                                <a href=\"#\" class=\"secondary-content\"><i class=\"material-icons\">favorite</i></a>
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>

    </div>



    <canvas id=\"canvas\" width=\"500\" height=\"500\"></canvas>



{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\">


        var src = {{ picture.image }};
        var photo = new Image();
        var canvas = document.getElementById('canvas');
        var ctx = canvas.getContext('2d');

        function render() {
            // Scale so that the image fills the container
            var width = window.innerWidth;
            var scale = width / photo.naturalWidth;
            var height = photo.naturalHeight * scale;
            ;

            canvas.width = width;
            canvas.height = height;

            ctx.drawImage(photo, 0, 0);
        }

        photo.onload = render;
        photo.crossOrigin = \"Anonymous\";
        photo.src = \"\" + src + \"\";

    </script>

{% endblock %}
", "picture/pictureShow.html.twig", "/Applications/MAMP_2019-08-23_09-35-41/htdocs/JVD/JVD/templates/picture/pictureShow.html.twig");
    }
}
