<?php

/* showTen.html.twig */
class __TwigTemplate_dad7fc4261014bb5d7c979658fe9f0d760ee4ff4bb0d5a9287b251bc3c4ed13d extends Twig_Template
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
        $__internal_d32f7a94b6ad343300cef6e2d3d60319c29a40065c6c1d23ea0f973edbf40d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32f7a94b6ad343300cef6e2d3d60319c29a40065c6c1d23ea0f973edbf40d16->enter($__internal_d32f7a94b6ad343300cef6e2d3d60319c29a40065c6c1d23ea0f973edbf40d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showTen.html.twig"));

        $__internal_b0d34f1fb9294c6245ed479de06e6753e58027e3e223ea880fb3215ce82242c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d34f1fb9294c6245ed479de06e6753e58027e3e223ea880fb3215ce82242c7->enter($__internal_b0d34f1fb9294c6245ed479de06e6753e58027e3e223ea880fb3215ce82242c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showTen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32f7a94b6ad343300cef6e2d3d60319c29a40065c6c1d23ea0f973edbf40d16->leave($__internal_d32f7a94b6ad343300cef6e2d3d60319c29a40065c6c1d23ea0f973edbf40d16_prof);

        
        $__internal_b0d34f1fb9294c6245ed479de06e6753e58027e3e223ea880fb3215ce82242c7->leave($__internal_b0d34f1fb9294c6245ed479de06e6753e58027e3e223ea880fb3215ce82242c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45c8bccadba1ea628a0322f542e2d924f41ce371ad49cc6b19f56174cfc2feeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c8bccadba1ea628a0322f542e2d924f41ce371ad49cc6b19f56174cfc2feeb->enter($__internal_45c8bccadba1ea628a0322f542e2d924f41ce371ad49cc6b19f56174cfc2feeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f5ac5f7fcc64d6873ecdadc879d8f1826d1d37e6d55457e684219ffc276a50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5ac5f7fcc64d6873ecdadc879d8f1826d1d37e6d55457e684219ffc276a50e->enter($__internal_2f5ac5f7fcc64d6873ecdadc879d8f1826d1d37e6d55457e684219ffc276a50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new Twig_Error_Runtime('Variable "tableau" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["musee"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["musee"], "id", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["musee"], "nom", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["musee"], "adresse", array()), "html", null, true);
            echo "  </td> 
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["musee"], "key", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["debut"]) || array_key_exists("debut", $context) ? $context["debut"] : (function () { throw new Twig_Error_Runtime('Variable "debut" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        echo "' role=\"button\">Début</a> </td> 
            <td align=\"center\"><a class=\"btn btn-success\" href='";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["precedent"]) || array_key_exists("precedent", $context) ? $context["precedent"] : (function () { throw new Twig_Error_Runtime('Variable "precedent" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "' role=\"button\"> Précédent</a> </td> 
            <td align=\"center\"><a class=\"btn btn-success\" href='";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["suivant"]) || array_key_exists("suivant", $context) ? $context["suivant"] : (function () { throw new Twig_Error_Runtime('Variable "suivant" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "' role=\"button\">Suivant</a> </td>
            <td align=\"center\"><a class=\"btn btn-info\" href='";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["dernier"]) || array_key_exists("dernier", $context) ? $context["dernier"] : (function () { throw new Twig_Error_Runtime('Variable "dernier" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "' role=\"button\">Dernier </a> </td>

        </tr>
    </table>

</div>
</div>
";
        
        $__internal_2f5ac5f7fcc64d6873ecdadc879d8f1826d1d37e6d55457e684219ffc276a50e->leave($__internal_2f5ac5f7fcc64d6873ecdadc879d8f1826d1d37e6d55457e684219ffc276a50e_prof);

        
        $__internal_45c8bccadba1ea628a0322f542e2d924f41ce371ad49cc6b19f56174cfc2feeb->leave($__internal_45c8bccadba1ea628a0322f542e2d924f41ce371ad49cc6b19f56174cfc2feeb_prof);

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
", "showTen.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\app\\Resources\\views\\showTen.html.twig");
    }
}
