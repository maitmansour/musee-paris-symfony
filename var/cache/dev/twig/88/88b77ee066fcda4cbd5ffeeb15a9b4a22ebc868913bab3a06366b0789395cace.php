<?php

/* showall.html.twig */
class __TwigTemplate_16e374372b6944f320c799a754c4f91feb9e821f51e86b6c655bf7fbac055ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "showall.html.twig", 1);
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
        $__internal_2a9c14f34a2549a467902062a58ecff58cec2832177a8502358ccf3d480fb92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9c14f34a2549a467902062a58ecff58cec2832177a8502358ccf3d480fb92a->enter($__internal_2a9c14f34a2549a467902062a58ecff58cec2832177a8502358ccf3d480fb92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showall.html.twig"));

        $__internal_9000433adef2945f9b0f641993cfbe602d3745aa38d751ed1d87432d6bc8b06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9000433adef2945f9b0f641993cfbe602d3745aa38d751ed1d87432d6bc8b06e->enter($__internal_9000433adef2945f9b0f641993cfbe602d3745aa38d751ed1d87432d6bc8b06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9c14f34a2549a467902062a58ecff58cec2832177a8502358ccf3d480fb92a->leave($__internal_2a9c14f34a2549a467902062a58ecff58cec2832177a8502358ccf3d480fb92a_prof);

        
        $__internal_9000433adef2945f9b0f641993cfbe602d3745aa38d751ed1d87432d6bc8b06e->leave($__internal_9000433adef2945f9b0f641993cfbe602d3745aa38d751ed1d87432d6bc8b06e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_869c06f7c99adb5df04fdea1c62f3f20d7417bca49822b994102779581e6bf5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869c06f7c99adb5df04fdea1c62f3f20d7417bca49822b994102779581e6bf5a->enter($__internal_869c06f7c99adb5df04fdea1c62f3f20d7417bca49822b994102779581e6bf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86121164d15c1ba7427a443b79ce6ef78152640884470c057a8c9f4c4a2fced6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86121164d15c1ba7427a443b79ce6ef78152640884470c057a8c9f4c4a2fced6->enter($__internal_86121164d15c1ba7427a443b79ce6ef78152640884470c057a8c9f4c4a2fced6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"wrapper\">
    <div id=\"container\">
        <table id=\"table\">
            <th>Nom</th>
            <th>Adresse</th>
            <th>Plus d'informations </th>

           ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) ? $context["tableau"] : $this->getContext($context, "tableau")));
        foreach ($context['_seq'] as $context["key"] => $context["musee"]) {
            // line 12
            echo "           <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["musee"], "nom", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["musee"], "adresse", array()), "html", null, true);
            echo "  </td> 
            <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["musee"], "key", array()), "html", null, true);
            echo "\"> OK </a> </td> 
            </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['musee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "



       </table>
   </div>
</div>
";
        
        $__internal_86121164d15c1ba7427a443b79ce6ef78152640884470c057a8c9f4c4a2fced6->leave($__internal_86121164d15c1ba7427a443b79ce6ef78152640884470c057a8c9f4c4a2fced6_prof);

        
        $__internal_869c06f7c99adb5df04fdea1c62f3f20d7417bca49822b994102779581e6bf5a->leave($__internal_869c06f7c99adb5df04fdea1c62f3f20d7417bca49822b994102779581e6bf5a_prof);

    }

    public function getTemplateName()
    {
        return "showall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div id=\"wrapper\">
    <div id=\"container\">
        <table id=\"table\">
            <th>Nom</th>
            <th>Adresse</th>
            <th>Plus d'informations </th>

           {% for key, musee in tableau %}
           <tr>
            <td>{{ musee.nom }} </td>
            <td>{{ musee.adresse }}  </td> 
            <td><a href=\"{{musee.key}}\"> OK </a> </td> 
            </tr>
           {% endfor %}




       </table>
   </div>
</div>
{% endblock %}
    ", "showall.html.twig", "/home/etudiant/bm163251/TP-MUSEE/app/Resources/views/showall.html.twig");
    }
}
