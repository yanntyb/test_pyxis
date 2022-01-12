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

/* maquette2.html.twig */
class __TwigTemplate_9a09ba3da2aa18e170ce327f578fa659 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "maquette2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Maquette 1";
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<link rel=\"stylesheet\" href=\"/build/css/maquette2.css\">";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div id=\"main\">
        <img src=\"/build/images/cake.jpg\" alt=\"\">
        <div id=\"info\">
            <p id=\"mail\"><span>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</span></p>
            <p id=\"name\">Bonjour <span>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</span></p>
            <p id=\"thanks\">Nous vous remoercions pour votre message.</p>
            <p id=\"message\"><span>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</span></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda autem, blanditiis cum deserunt eius, fugiat iusto laborum molestiae neque odio pariatur sint veniam! Cum facere nemo placeat unde voluptate.</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "maquette2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  75 => 9,  71 => 8,  66 => 5,  62 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Maquette 1{% endblock %}
{% block css %}<link rel=\"stylesheet\" href=\"/build/css/maquette2.css\">{% endblock %}
{% block body %}
    <div id=\"main\">
        <img src=\"/build/images/cake.jpg\" alt=\"\">
        <div id=\"info\">
            <p id=\"mail\"><span>{{ mail }}</span></p>
            <p id=\"name\">Bonjour <span>{{ name }}</span></p>
            <p id=\"thanks\">Nous vous remoercions pour votre message.</p>
            <p id=\"message\"><span>{{ message }}</span></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda autem, blanditiis cum deserunt eius, fugiat iusto laborum molestiae neque odio pariatur sint veniam! Cum facere nemo placeat unde voluptate.</p>
        </div>
    </div>
{% endblock %}", "maquette2.html.twig", "C:\\Users\\yannt\\Desktop\\+4\\stage\\test_pyxis\\templates\\maquette2.html.twig");
    }
}
