<?php

/* showTen.html.twig */
class __TwigTemplate_5f5e3dbc8e19ff55313c60da5d2810b72bdff4b09487f07b777759f39a7d9855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "showTen.html.twig", 1);
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
        $__internal_22f6598584d75b4f821e9327a41b70d3b85b74f71f814dbcfd56df01374b44f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f6598584d75b4f821e9327a41b70d3b85b74f71f814dbcfd56df01374b44f2->enter($__internal_22f6598584d75b4f821e9327a41b70d3b85b74f71f814dbcfd56df01374b44f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showTen.html.twig"));

        $__internal_6ded84342ebf5f217b50eca8dc13e2299851e0868d457360506a0393b67d41d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ded84342ebf5f217b50eca8dc13e2299851e0868d457360506a0393b67d41d1->enter($__internal_6ded84342ebf5f217b50eca8dc13e2299851e0868d457360506a0393b67d41d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showTen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f6598584d75b4f821e9327a41b70d3b85b74f71f814dbcfd56df01374b44f2->leave($__internal_22f6598584d75b4f821e9327a41b70d3b85b74f71f814dbcfd56df01374b44f2_prof);

        
        $__internal_6ded84342ebf5f217b50eca8dc13e2299851e0868d457360506a0393b67d41d1->leave($__internal_6ded84342ebf5f217b50eca8dc13e2299851e0868d457360506a0393b67d41d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95fd6f376fbb55447979e61ab5fa2fd48a818a23b8eceee5a857a07ee3005bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fd6f376fbb55447979e61ab5fa2fd48a818a23b8eceee5a857a07ee3005bd2->enter($__internal_95fd6f376fbb55447979e61ab5fa2fd48a818a23b8eceee5a857a07ee3005bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a16ed4c51c8a146485f97b2f55c481db2d7904d6c134c4e14faae97d72e9207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a16ed4c51c8a146485f97b2f55c481db2d7904d6c134c4e14faae97d72e9207->enter($__internal_1a16ed4c51c8a146485f97b2f55c481db2d7904d6c134c4e14faae97d72e9207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"wrapper\">
  <div class=\"container\">
    <h1 align=\"center\" ><span>Affichages des musses</span> par 10 </h1>
    <table class=\"table\">
        <th>Id</th>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Plus d'informations </th>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) ? $context["tableau"] : $this->getContext($context, "tableau")));
        foreach ($context['_seq'] as $context["key"] => $context["musee"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["musee"], "id", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["musee"], "nom", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["musee"], "adresse", array()), "html", null, true);
            echo "  </td> 
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["musee"], "key", array()), "html", null, true);
            echo "\"> Plus d'info.. </a> </td> 
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['musee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        <tr>
            <td align=\"center\"><a class=\"btn btn-info\" href='";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["debut"]) ? $context["debut"] : $this->getContext($context, "debut")), "html", null, true);
        echo "' role=\"button\">Début</a> </td> 
            <td align=\"center\"><a class=\"btn btn-success\" href='";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["precedent"]) ? $context["precedent"] : $this->getContext($context, "precedent")), "html", null, true);
        echo "' role=\"button\"> Précédent</a> </td> 
            <td align=\"center\"><a class=\"btn btn-success\" href='";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["suivant"]) ? $context["suivant"] : $this->getContext($context, "suivant")), "html", null, true);
        echo "' role=\"button\">Suivant</a> </td>
            <td align=\"center\"><a class=\"btn btn-info\" href='";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["dernier"]) ? $context["dernier"] : $this->getContext($context, "dernier")), "html", null, true);
        echo "' role=\"button\">Dernier </a> </td>

        </tr>
    </table>

</div>
</div>
";
        
        $__internal_1a16ed4c51c8a146485f97b2f55c481db2d7904d6c134c4e14faae97d72e9207->leave($__internal_1a16ed4c51c8a146485f97b2f55c481db2d7904d6c134c4e14faae97d72e9207_prof);

        
        $__internal_95fd6f376fbb55447979e61ab5fa2fd48a818a23b8eceee5a857a07ee3005bd2->leave($__internal_95fd6f376fbb55447979e61ab5fa2fd48a818a23b8eceee5a857a07ee3005bd2_prof);

    }

    public function getTemplateName()
    {
        return "showTen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 21,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  64 => 14,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
  <div class=\"container\">
    <h1 align=\"center\" ><span>Affichages des musses</span> par 10 </h1>
    <table class=\"table\">
        <th>Id</th>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Plus d'informations </th>

        {% for key, musee in tableau %}
        <tr>
            <td>{{ musee.id }} </td>
            <td>{{ musee.nom }} </td>
            <td>{{ musee.adresse }}  </td> 
            <td><a href=\"{{musee.key}}\"> Plus d'info.. </a> </td> 
        </tr>
        {% endfor %}

        <tr>
            <td align=\"center\"><a class=\"btn btn-info\" href='{{ debut }}' role=\"button\">Début</a> </td> 
            <td align=\"center\"><a class=\"btn btn-success\" href='{{ precedent }}' role=\"button\"> Précédent</a> </td> 
            <td align=\"center\"><a class=\"btn btn-success\" href='{{ suivant }}' role=\"button\">Suivant</a> </td>
            <td align=\"center\"><a class=\"btn btn-info\" href='{{ dernier }}' role=\"button\">Dernier </a> </td>

        </tr>
    </table>

</div>
</div>
{% endblock %}
", "showTen.html.twig", "/home/etudiant/bm163251/TP-MUSEE/app/Resources/views/showTen.html.twig");
    }
}
