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
        $__internal_ad0779834d333f5a8d6010ce7fd89ba8bfe583c30a178b57ed121f9e0b91b88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0779834d333f5a8d6010ce7fd89ba8bfe583c30a178b57ed121f9e0b91b88f->enter($__internal_ad0779834d333f5a8d6010ce7fd89ba8bfe583c30a178b57ed121f9e0b91b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $__internal_0ce28419ad7047c662bdead6d62d2851766f2e60c421370b8da3f8ca62c3eb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce28419ad7047c662bdead6d62d2851766f2e60c421370b8da3f8ca62c3eb4b->enter($__internal_0ce28419ad7047c662bdead6d62d2851766f2e60c421370b8da3f8ca62c3eb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad0779834d333f5a8d6010ce7fd89ba8bfe583c30a178b57ed121f9e0b91b88f->leave($__internal_ad0779834d333f5a8d6010ce7fd89ba8bfe583c30a178b57ed121f9e0b91b88f_prof);

        
        $__internal_0ce28419ad7047c662bdead6d62d2851766f2e60c421370b8da3f8ca62c3eb4b->leave($__internal_0ce28419ad7047c662bdead6d62d2851766f2e60c421370b8da3f8ca62c3eb4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c776b9c7e3db7088491fd5fc1274f637e66bb653a5759db9bc17b9f11a3311e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c776b9c7e3db7088491fd5fc1274f637e66bb653a5759db9bc17b9f11a3311e->enter($__internal_8c776b9c7e3db7088491fd5fc1274f637e66bb653a5759db9bc17b9f11a3311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96534f303125835242ad8a00081817ed4a7d609c28e80f96686ee858348535cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96534f303125835242ad8a00081817ed4a7d609c28e80f96686ee858348535cd->enter($__internal_96534f303125835242ad8a00081817ed4a7d609c28e80f96686ee858348535cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

\t</div>
</div>
";
        
        $__internal_96534f303125835242ad8a00081817ed4a7d609c28e80f96686ee858348535cd->leave($__internal_96534f303125835242ad8a00081817ed4a7d609c28e80f96686ee858348535cd_prof);

        
        $__internal_8c776b9c7e3db7088491fd5fc1274f637e66bb653a5759db9bc17b9f11a3311e->leave($__internal_8c776b9c7e3db7088491fd5fc1274f637e66bb653a5759db9bc17b9f11a3311e_prof);

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
        return array (  100 => 29,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

\t</div>
</div>
{% endblock %}
", "showMusee.html.twig", "/home/etudiant/bm163251/TP-MUSEE/app/Resources/views/showMusee.html.twig");
    }
}
