<?php

/* showMusee.html.twig */
class __TwigTemplate_a028176052d2bab6a8913de781b8cc1fc9f791d3a6876cefb28386236c46189c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "showMusee.html.twig", 1);
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
        $__internal_0bf31b4ae8fcd92be101976e73fbdde325e69b8fb30b78fe7a15166430a954e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf31b4ae8fcd92be101976e73fbdde325e69b8fb30b78fe7a15166430a954e4->enter($__internal_0bf31b4ae8fcd92be101976e73fbdde325e69b8fb30b78fe7a15166430a954e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $__internal_534104f4ca12ccb0b95f336479023f1c405b6f0a2863f245c3b16548f2a4fd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534104f4ca12ccb0b95f336479023f1c405b6f0a2863f245c3b16548f2a4fd14->enter($__internal_534104f4ca12ccb0b95f336479023f1c405b6f0a2863f245c3b16548f2a4fd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf31b4ae8fcd92be101976e73fbdde325e69b8fb30b78fe7a15166430a954e4->leave($__internal_0bf31b4ae8fcd92be101976e73fbdde325e69b8fb30b78fe7a15166430a954e4_prof);

        
        $__internal_534104f4ca12ccb0b95f336479023f1c405b6f0a2863f245c3b16548f2a4fd14->leave($__internal_534104f4ca12ccb0b95f336479023f1c405b6f0a2863f245c3b16548f2a4fd14_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1142245a1e3509f74a41be6c64b3d9e3656e02f557dd1b1691057d70d139bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1142245a1e3509f74a41be6c64b3d9e3656e02f557dd1b1691057d70d139bf5->enter($__internal_e1142245a1e3509f74a41be6c64b3d9e3656e02f557dd1b1691057d70d139bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ca02d7c3c7f56ed2ef94ff624f861dd1897eb69b7aa13baafdc235a5762dac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca02d7c3c7f56ed2ef94ff624f861dd1897eb69b7aa13baafdc235a5762dac5->enter($__internal_8ca02d7c3c7f56ed2ef94ff624f861dd1897eb69b7aa13baafdc235a5762dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"wrapper\">
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["musee"]) ? $context["musee"] : $this->getContext($context, "musee")), "nom", array()), "html", null, true);
        echo " </span> par 10 </h1>
\t\t<table class=\"table\">
\t\t\t<th>Id</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Adresse</th>
\t\t\t<th>Site web</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Ouvert ?</th>
\t\t\t<th>Periodes ouvertures</th>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["musee"]) ? $context["musee"] : $this->getContext($context, "musee")), "id", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["musee"]) ? $context["musee"] : $this->getContext($context, "musee")), "nom", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["musee"]) ? $context["musee"] : $this->getContext($context, "musee")), "adresse", array()), "html", null, true);
        echo "  </td> 
\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["musee"]) ? $context["musee"] : $this->getContext($context, "musee")), "siteWeb", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["musee"]) ? $context["musee"] : $this->getContext($context, "musee")), "ville", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["musee"]) ? $context["musee"] : $this->getContext($context, "musee")), "statut", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["musee"]) ? $context["musee"] : $this->getContext($context, "musee")), "periodesOuverture", array()), "html", null, true);
        echo "  </td> 

\t\t\t</tr>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["retour"]) ? $context["retour"] : $this->getContext($context, "retour")), "html", null, true);
        echo "' role=\"button\">Retour</a> </td> 
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<tr>

\t\t\t</tr>
\t\t</table>
\t\t
";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>
";
        
        $__internal_8ca02d7c3c7f56ed2ef94ff624f861dd1897eb69b7aa13baafdc235a5762dac5->leave($__internal_8ca02d7c3c7f56ed2ef94ff624f861dd1897eb69b7aa13baafdc235a5762dac5_prof);

        
        $__internal_e1142245a1e3509f74a41be6c64b3d9e3656e02f557dd1b1691057d70d139bf5->leave($__internal_e1142245a1e3509f74a41be6c64b3d9e3656e02f557dd1b1691057d70d139bf5_prof);

    }

    public function getTemplateName()
    {
        return "showMusee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  116 => 39,  112 => 38,  100 => 29,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>{{ musee.nom }} </span> par 10 </h1>
\t\t<table class=\"table\">
\t\t\t<th>Id</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Adresse</th>
\t\t\t<th>Site web</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Ouvert ?</th>
\t\t\t<th>Periodes ouvertures</th>

\t\t\t<tr>
\t\t\t\t<td>{{ musee.id }} </td>
\t\t\t\t<td>{{ musee.nom }} </td>
\t\t\t\t<td>{{ musee.adresse }}  </td> 
\t\t\t\t<td>{{ musee.siteWeb }} </td>
\t\t\t\t<td>{{ musee.ville }} </td>
\t\t\t\t<td>{{ musee.statut }} </td>
\t\t\t\t<td>{{ musee.periodesOuverture }}  </td> 

\t\t\t</tr>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/{{ retour }}' role=\"button\">Retour</a> </td> 
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<tr>

\t\t\t</tr>
\t\t</table>
\t\t
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
\t</div>
</div>
{% endblock %}
", "showMusee.html.twig", "/home/etudiant/bm163251/TP-MUSEE/app/Resources/views/showMusee.html.twig");
    }
}
