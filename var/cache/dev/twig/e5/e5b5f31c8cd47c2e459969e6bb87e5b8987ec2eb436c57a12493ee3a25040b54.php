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

/* mail/validationMail.html.twig */
class __TwigTemplate_43da8a127fd9378fd6ad5819990b60c76e1a56894c8c69c41f60cf97953f9920 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/validationMail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/validationMail.html.twig"));

        // line 1
        echo "
<h1>Bievenue !</h1>

<h1>
    Bievenue : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "
</h1>
<br>
<p>Veuillez confirmer votre adresse mail : <code>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</code></p>

<p>
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("validation", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 11, $this->source); })())]), "html", null, true);
        echo "\">Cliquez ici pour activer votre compte</a>

</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mail/validationMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<h1>Bievenue !</h1>

<h1>
    Bievenue : {{ username }}
</h1>
<br>
<p>Veuillez confirmer votre adresse mail : <code>{{ mail }}</code></p>

<p>
    <a href=\"{{ url('validation',{'token':  token } ) }}\">Cliquez ici pour activer votre compte</a>

</p>
", "mail/validationMail.html.twig", "/Applications/MAMP_2019-08-23_09-35-41/htdocs/JVD/JVD/templates/mail/validationMail.html.twig");
    }
}
