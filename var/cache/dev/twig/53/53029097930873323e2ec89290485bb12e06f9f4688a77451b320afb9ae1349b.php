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
        $__internal_578d5723c8cc9696bdb99d8ec8c1d13f3e8d189af9c6359b2db9ec949056d56f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578d5723c8cc9696bdb99d8ec8c1d13f3e8d189af9c6359b2db9ec949056d56f->enter($__internal_578d5723c8cc9696bdb99d8ec8c1d13f3e8d189af9c6359b2db9ec949056d56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $__internal_f9498431ba910856c82d0297e2d1eec616033e68ed9a8f89166486f2bf198a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9498431ba910856c82d0297e2d1eec616033e68ed9a8f89166486f2bf198a0c->enter($__internal_f9498431ba910856c82d0297e2d1eec616033e68ed9a8f89166486f2bf198a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578d5723c8cc9696bdb99d8ec8c1d13f3e8d189af9c6359b2db9ec949056d56f->leave($__internal_578d5723c8cc9696bdb99d8ec8c1d13f3e8d189af9c6359b2db9ec949056d56f_prof);

        
        $__internal_f9498431ba910856c82d0297e2d1eec616033e68ed9a8f89166486f2bf198a0c->leave($__internal_f9498431ba910856c82d0297e2d1eec616033e68ed9a8f89166486f2bf198a0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d88f134606bd44774dc33ed2dab0591d1c0b09fa649680288fabbe343a982eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88f134606bd44774dc33ed2dab0591d1c0b09fa649680288fabbe343a982eba->enter($__internal_d88f134606bd44774dc33ed2dab0591d1c0b09fa649680288fabbe343a982eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f572c60021789b70fa7cc825004451c4818e174d06a8d80d822aa6da525ae157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f572c60021789b70fa7cc825004451c4818e174d06a8d80d822aa6da525ae157->enter($__internal_f572c60021789b70fa7cc825004451c4818e174d06a8d80d822aa6da525ae157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"wrapper\">
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 6, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo " </span> </h1>
\t\t<table class=\"table\">
\t\t\t<th>Nom</th>
\t\t\t<th>Adresse</th>
\t\t\t<th>Site web</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Ouvert ?</th>
\t\t\t<th>Note</th>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 16, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 17, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "  </td> 
\t\t\t\t<td><a href=\"http://";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 18, $this->getSourceContext()); })()), "siteWeb", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 18, $this->getSourceContext()); })()), "siteWeb", array()), "html", null, true);
        echo "</a> </td>
\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 19, $this->getSourceContext()); })()), "ville", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 20, $this->getSourceContext()); })()), "statut", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new Twig_Error_Runtime('Variable "note" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "  </td> 
\t\t\t</tr>
\t\t</table>
\t\t<h1 align=\"center\" ><span>Commentaires </span> </h1>

\t\t<table class=\"table\">

\t\t\t<th>Auteur</th>
\t\t\t<th>Commentaire</th>
\t\t\t<th>Date</th>
\t\t\t<th>Note</th>

\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 33, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["comment"]) {
            // line 34
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "auteur", array()), "html", null, true);
            echo " </td>
\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "contenu", array()), "html", null, true);
            echo "  </td> 
\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "date", array()), "d/m/Y H:i"), "html", null, true);
            echo " </td> 
\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "note", array()), "html", null, true);
            echo " </td> 
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "

\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["retour"]) || array_key_exists("retour", $context) ? $context["retour"] : (function () { throw new Twig_Error_Runtime('Variable "retour" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
        echo "' role=\"button\">Retour</a> </td> 
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t</table>

\t\t<h1 align=\"center\" ><span>Ajouter un commentaire </span> </h1>

\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'form_start');
        echo "
\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), 'widget');
        echo "
\t\t";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), 'form_end');
        echo "

\t\t<!--<div class=\"form-group\">
\t\t\t<label>Auteur</label>
\t\t\t<input type=\"text\" class=\"form-control\"  placeholder=\"";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "auteur", array()), 'widget');
        echo "\">
\t\t\t<label>Commentaire</label>
\t\t\t<input type=\"text\" class=\"form-control\"  placeholder=\"";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "Commentaire", array()), 'widget');
        echo "\">
\t\t\t<label>Note</label>
\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "Note", array()), 'widget');
        echo "
\t\t</div>-->
\t\t
\t</div>
</div>
";
        
        $__internal_f572c60021789b70fa7cc825004451c4818e174d06a8d80d822aa6da525ae157->leave($__internal_f572c60021789b70fa7cc825004451c4818e174d06a8d80d822aa6da525ae157_prof);

        
        $__internal_d88f134606bd44774dc33ed2dab0591d1c0b09fa649680288fabbe343a982eba->leave($__internal_d88f134606bd44774dc33ed2dab0591d1c0b09fa649680288fabbe343a982eba_prof);

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
        return array (  173 => 63,  168 => 61,  163 => 59,  156 => 55,  152 => 54,  148 => 53,  137 => 45,  131 => 41,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  107 => 34,  103 => 33,  88 => 21,  84 => 20,  80 => 19,  74 => 18,  70 => 17,  66 => 16,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div id=\"wrapper\">
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>{{ musee.nom }} </span> </h1>
\t\t<table class=\"table\">
\t\t\t<th>Nom</th>
\t\t\t<th>Adresse</th>
\t\t\t<th>Site web</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Ouvert ?</th>
\t\t\t<th>Note</th>

\t\t\t<tr>
\t\t\t\t<td>{{ musee.nom }} </td>
\t\t\t\t<td>{{ musee.adresse }}  </td> 
\t\t\t\t<td><a href=\"http://{{ musee.siteWeb }}\">{{ musee.siteWeb }}</a> </td>
\t\t\t\t<td>{{ musee.ville }} </td>
\t\t\t\t<td>{{ musee.statut }} </td>
\t\t\t\t<td>{{ note }}  </td> 
\t\t\t</tr>
\t\t</table>
\t\t<h1 align=\"center\" ><span>Commentaires </span> </h1>

\t\t<table class=\"table\">

\t\t\t<th>Auteur</th>
\t\t\t<th>Commentaire</th>
\t\t\t<th>Date</th>
\t\t\t<th>Note</th>

\t\t\t{% for key, comment in comments %}
\t\t\t<tr>
\t\t\t\t<td>{{ comment.auteur }} </td>
\t\t\t\t<td>{{ comment.contenu }}  </td> 
\t\t\t\t<td>{{ comment.date|date('d/m/Y H:i') }} </td> 
\t\t\t\t<td>{{ comment.note}} </td> 
\t\t\t</tr>
\t\t\t{% endfor %}


\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/{{ retour }}' role=\"button\">Retour</a> </td> 
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t</table>

\t\t<h1 align=\"center\" ><span>Ajouter un commentaire </span> </h1>

\t\t{{ form_start(form) }}
\t\t{{ form_widget(form) }}
\t\t{{ form_end(form) }}

\t\t<!--<div class=\"form-group\">
\t\t\t<label>Auteur</label>
\t\t\t<input type=\"text\" class=\"form-control\"  placeholder=\"{{ form_widget(form.auteur) }}\">
\t\t\t<label>Commentaire</label>
\t\t\t<input type=\"text\" class=\"form-control\"  placeholder=\"{{ form_widget(form.Commentaire) }}\">
\t\t\t<label>Note</label>
\t\t\t{{ form_widget(form.Note) }}
\t\t</div>-->
\t\t
\t</div>
</div>
{% endblock %}
", "showMusee.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\app\\Resources\\views\\showMusee.html.twig");
    }
}
