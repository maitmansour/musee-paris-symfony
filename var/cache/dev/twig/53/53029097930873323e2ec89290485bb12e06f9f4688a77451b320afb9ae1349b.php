<?php

/* showMusee.html.twig */
class __TwigTemplate_5d1eb24b0ea0a30659d1e360934a647e5a619d4f9f47828937337c68d630d2ff extends Twig_Template
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
        $__internal_db44e79642012434504e0ba1e356d411f78eea815deb715c057a1f9fa21b36d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db44e79642012434504e0ba1e356d411f78eea815deb715c057a1f9fa21b36d9->enter($__internal_db44e79642012434504e0ba1e356d411f78eea815deb715c057a1f9fa21b36d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $__internal_46d0e3aecac0c7110fefa1d85b6d72e32132e67038d4511b74e2618ee1897dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d0e3aecac0c7110fefa1d85b6d72e32132e67038d4511b74e2618ee1897dfd->enter($__internal_46d0e3aecac0c7110fefa1d85b6d72e32132e67038d4511b74e2618ee1897dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db44e79642012434504e0ba1e356d411f78eea815deb715c057a1f9fa21b36d9->leave($__internal_db44e79642012434504e0ba1e356d411f78eea815deb715c057a1f9fa21b36d9_prof);

        
        $__internal_46d0e3aecac0c7110fefa1d85b6d72e32132e67038d4511b74e2618ee1897dfd->leave($__internal_46d0e3aecac0c7110fefa1d85b6d72e32132e67038d4511b74e2618ee1897dfd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_528c7385979af37e6708281a134cb37a0fafd857a382a5dafdcd61eaf2b8beac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528c7385979af37e6708281a134cb37a0fafd857a382a5dafdcd61eaf2b8beac->enter($__internal_528c7385979af37e6708281a134cb37a0fafd857a382a5dafdcd61eaf2b8beac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e3b28355dc5da1be7bdf380c2048db8f636ae5accb3ef8b1e9a434bf2a47e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3b28355dc5da1be7bdf380c2048db8f636ae5accb3ef8b1e9a434bf2a47e94->enter($__internal_1e3b28355dc5da1be7bdf380c2048db8f636ae5accb3ef8b1e9a434bf2a47e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"wrapper\">
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 6, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo " </span> </h1>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 17, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 18, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 19, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "  </td> 
\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 20, $this->getSourceContext()); })()), "siteWeb", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 21, $this->getSourceContext()); })()), "ville", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 22, $this->getSourceContext()); })()), "statut", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 23, $this->getSourceContext()); })()), "periodesOuverture", array()), "html", null, true);
        echo "  </td> 

\t\t\t</tr>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["retour"]) || array_key_exists("retour", $context) ? $context["retour"] : (function () { throw new Twig_Error_Runtime('Variable "retour" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        echo "
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'form_end');
        echo "
\t</div>
</div>
";
        
        $__internal_1e3b28355dc5da1be7bdf380c2048db8f636ae5accb3ef8b1e9a434bf2a47e94->leave($__internal_1e3b28355dc5da1be7bdf380c2048db8f636ae5accb3ef8b1e9a434bf2a47e94_prof);

        
        $__internal_528c7385979af37e6708281a134cb37a0fafd857a382a5dafdcd61eaf2b8beac->leave($__internal_528c7385979af37e6708281a134cb37a0fafd857a382a5dafdcd61eaf2b8beac_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div id=\"wrapper\">
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>{{ musee.nom }} </span> </h1>
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
", "showMusee.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\app\\Resources\\views\\showMusee.html.twig");
    }
}
