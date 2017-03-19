<?php

/* index.html.twig */
class __TwigTemplate_ebcdadc4e37fe5a8e15e26a53fd116d056243e6ba657bafff7131d9438f61c51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5082bc8ab746dbef666d2a0b7c7f07e8e1928303768cdec596a3d5538a471cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5082bc8ab746dbef666d2a0b7c7f07e8e1928303768cdec596a3d5538a471cca->enter($__internal_5082bc8ab746dbef666d2a0b7c7f07e8e1928303768cdec596a3d5538a471cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_873279a3c3ad7f54b0aa350357225114ad3f98e6888a84c476cdfc9ddd1fb22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873279a3c3ad7f54b0aa350357225114ad3f98e6888a84c476cdfc9ddd1fb22a->enter($__internal_873279a3c3ad7f54b0aa350357225114ad3f98e6888a84c476cdfc9ddd1fb22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5082bc8ab746dbef666d2a0b7c7f07e8e1928303768cdec596a3d5538a471cca->leave($__internal_5082bc8ab746dbef666d2a0b7c7f07e8e1928303768cdec596a3d5538a471cca_prof);

        
        $__internal_873279a3c3ad7f54b0aa350357225114ad3f98e6888a84c476cdfc9ddd1fb22a->leave($__internal_873279a3c3ad7f54b0aa350357225114ad3f98e6888a84c476cdfc9ddd1fb22a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e277144a9b79a8d8a0cf542632b60d7b5562e17e83ccb6eb81dc14b871329989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e277144a9b79a8d8a0cf542632b60d7b5562e17e83ccb6eb81dc14b871329989->enter($__internal_e277144a9b79a8d8a0cf542632b60d7b5562e17e83ccb6eb81dc14b871329989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7052878ac87ea822a1a9db09730dfbeba5a86fd5314efa81c1d9d8f575d3ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7052878ac87ea822a1a9db09730dfbeba5a86fd5314efa81c1d9d8f575d3ec4->enter($__internal_a7052878ac87ea822a1a9db09730dfbeba5a86fd5314efa81c1d9d8f575d3ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div id=\"wrapper\">
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>Afficher par ... </span> </h1>
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t<br>
\t\t\t<br>

\t\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/showTen/1' role=\"button\">Page de de 10</a> </td> 
\t\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/Arrondissement' role=\"button\">Arrondissement</a> </td> 
\t\t\t</tr>
\t\t</table>
\t</div>
</div>

";
        
        $__internal_a7052878ac87ea822a1a9db09730dfbeba5a86fd5314efa81c1d9d8f575d3ec4->leave($__internal_a7052878ac87ea822a1a9db09730dfbeba5a86fd5314efa81c1d9d8f575d3ec4_prof);

        
        $__internal_e277144a9b79a8d8a0cf542632b60d7b5562e17e83ccb6eb81dc14b871329989->leave($__internal_e277144a9b79a8d8a0cf542632b60d7b5562e17e83ccb6eb81dc14b871329989_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<div id=\"wrapper\">
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>Afficher par ... </span> </h1>
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t<br>
\t\t\t<br>

\t\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/showTen/1' role=\"button\">Page de de 10</a> </td> 
\t\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/Arrondissement' role=\"button\">Arrondissement</a> </td> 
\t\t\t</tr>
\t\t</table>
\t</div>
</div>

{% endblock %}
", "index.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\app\\Resources\\views\\index.html.twig");
    }
}
