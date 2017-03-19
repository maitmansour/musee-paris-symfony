<?php

/* base.html.twig */
class __TwigTemplate_6f1e416250e2cf8e145f17db61914a8c99c96baa6df5837743b9e9dbfdc2e770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22c477b16a1a3e31910313662de09c0954802b74af05eeea24ae752bad12facb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c477b16a1a3e31910313662de09c0954802b74af05eeea24ae752bad12facb->enter($__internal_22c477b16a1a3e31910313662de09c0954802b74af05eeea24ae752bad12facb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_46ef76007f55c3baa6b4bc888c11a5d2a0e47e227105fad673e843e1107d0c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ef76007f55c3baa6b4bc888c11a5d2a0e47e227105fad673e843e1107d0c49->enter($__internal_46ef76007f55c3baa6b4bc888c11a5d2a0e47e227105fad673e843e1107d0c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css\" />
<script src=\"http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_22c477b16a1a3e31910313662de09c0954802b74af05eeea24ae752bad12facb->leave($__internal_22c477b16a1a3e31910313662de09c0954802b74af05eeea24ae752bad12facb_prof);

        
        $__internal_46ef76007f55c3baa6b4bc888c11a5d2a0e47e227105fad673e843e1107d0c49->leave($__internal_46ef76007f55c3baa6b4bc888c11a5d2a0e47e227105fad673e843e1107d0c49_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ecfa3566a419edd4837fbe7a0d03cc7e04ad547485cf7fac80daf50c31a3fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecfa3566a419edd4837fbe7a0d03cc7e04ad547485cf7fac80daf50c31a3fc4->enter($__internal_8ecfa3566a419edd4837fbe7a0d03cc7e04ad547485cf7fac80daf50c31a3fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d1eeb86e1d55be650e90034cd668f81d18dc523e80aec38188821bac5cae82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1eeb86e1d55be650e90034cd668f81d18dc523e80aec38188821bac5cae82f->enter($__internal_4d1eeb86e1d55be650e90034cd668f81d18dc523e80aec38188821bac5cae82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d1eeb86e1d55be650e90034cd668f81d18dc523e80aec38188821bac5cae82f->leave($__internal_4d1eeb86e1d55be650e90034cd668f81d18dc523e80aec38188821bac5cae82f_prof);

        
        $__internal_8ecfa3566a419edd4837fbe7a0d03cc7e04ad547485cf7fac80daf50c31a3fc4->leave($__internal_8ecfa3566a419edd4837fbe7a0d03cc7e04ad547485cf7fac80daf50c31a3fc4_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_86dcf2f0a458003a46dd0adb3041b69bb9231d9ead8b12934eac3ac15d4df130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86dcf2f0a458003a46dd0adb3041b69bb9231d9ead8b12934eac3ac15d4df130->enter($__internal_86dcf2f0a458003a46dd0adb3041b69bb9231d9ead8b12934eac3ac15d4df130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb954e20a58acbfa6f33a6da2110d6d194a87e92ef9b18d239413cac0f0b408f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb954e20a58acbfa6f33a6da2110d6d194a87e92ef9b18d239413cac0f0b408f->enter($__internal_bb954e20a58acbfa6f33a6da2110d6d194a87e92ef9b18d239413cac0f0b408f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb954e20a58acbfa6f33a6da2110d6d194a87e92ef9b18d239413cac0f0b408f->leave($__internal_bb954e20a58acbfa6f33a6da2110d6d194a87e92ef9b18d239413cac0f0b408f_prof);

        
        $__internal_86dcf2f0a458003a46dd0adb3041b69bb9231d9ead8b12934eac3ac15d4df130->leave($__internal_86dcf2f0a458003a46dd0adb3041b69bb9231d9ead8b12934eac3ac15d4df130_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0d67e07e9fe881b4d01ba535ab1c7097c06da246cb3b1ee06687d49118653ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d67e07e9fe881b4d01ba535ab1c7097c06da246cb3b1ee06687d49118653ed->enter($__internal_c0d67e07e9fe881b4d01ba535ab1c7097c06da246cb3b1ee06687d49118653ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38dc4d7a91bbf1f7c2c5d84afd3c9a68e293e7fb0c93a92140934712d6f4dbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38dc4d7a91bbf1f7c2c5d84afd3c9a68e293e7fb0c93a92140934712d6f4dbff->enter($__internal_38dc4d7a91bbf1f7c2c5d84afd3c9a68e293e7fb0c93a92140934712d6f4dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38dc4d7a91bbf1f7c2c5d84afd3c9a68e293e7fb0c93a92140934712d6f4dbff->leave($__internal_38dc4d7a91bbf1f7c2c5d84afd3c9a68e293e7fb0c93a92140934712d6f4dbff_prof);

        
        $__internal_c0d67e07e9fe881b4d01ba535ab1c7097c06da246cb3b1ee06687d49118653ed->leave($__internal_c0d67e07e9fe881b4d01ba535ab1c7097c06da246cb3b1ee06687d49118653ed_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 18,  87 => 17,  69 => 11,  57 => 19,  54 => 18,  52 => 17,  46 => 14,  40 => 11,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css\" />
<script src=\"http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <title>{% block title %}Welcome!{% endblock %}</title>
        

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\app\\Resources\\views\\base.html.twig");
    }
}
