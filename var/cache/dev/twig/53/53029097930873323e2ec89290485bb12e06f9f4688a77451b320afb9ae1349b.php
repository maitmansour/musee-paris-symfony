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
        $__internal_04ded7eec21403ff3ce609f2f5ed14de20da16982db97da1544ad3c2a0d3e33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ded7eec21403ff3ce609f2f5ed14de20da16982db97da1544ad3c2a0d3e33c->enter($__internal_04ded7eec21403ff3ce609f2f5ed14de20da16982db97da1544ad3c2a0d3e33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $__internal_1c027aef9fcb59b60c2510a6d0ad0884c112ee9d67c8833a56c5580076859d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c027aef9fcb59b60c2510a6d0ad0884c112ee9d67c8833a56c5580076859d4f->enter($__internal_1c027aef9fcb59b60c2510a6d0ad0884c112ee9d67c8833a56c5580076859d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showMusee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ded7eec21403ff3ce609f2f5ed14de20da16982db97da1544ad3c2a0d3e33c->leave($__internal_04ded7eec21403ff3ce609f2f5ed14de20da16982db97da1544ad3c2a0d3e33c_prof);

        
        $__internal_1c027aef9fcb59b60c2510a6d0ad0884c112ee9d67c8833a56c5580076859d4f->leave($__internal_1c027aef9fcb59b60c2510a6d0ad0884c112ee9d67c8833a56c5580076859d4f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cdf32b4d3649348702600e47d26dabf12145d3f1cfc41a5f55234211802bd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdf32b4d3649348702600e47d26dabf12145d3f1cfc41a5f55234211802bd8d->enter($__internal_5cdf32b4d3649348702600e47d26dabf12145d3f1cfc41a5f55234211802bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce47de52f16b380a6f5c4ba1371fc801f6c7d330b1c6904e69a7dce6829f790b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce47de52f16b380a6f5c4ba1371fc801f6c7d330b1c6904e69a7dce6829f790b->enter($__internal_ce47de52f16b380a6f5c4ba1371fc801f6c7d330b1c6904e69a7dce6829f790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div id=\"wrapper\">
\t<div class=\"container\">
\t\t<h1 align=\"center\" ><span>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 7, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
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
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 17, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 18, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "  </td> 
\t\t\t\t<td><a href=\"http://";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 19, $this->getSourceContext()); })()), "siteWeb", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 19, $this->getSourceContext()); })()), "siteWeb", array()), "html", null, true);
        echo "</a> </td>
\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 20, $this->getSourceContext()); })()), "ville", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 21, $this->getSourceContext()); })()), "statut", array()), "html", null, true);
        echo " </td>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new Twig_Error_Runtime('Variable "note" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 34, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["comment"]) {
            // line 35
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "auteur", array()), "html", null, true);
            echo " </td>
\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "contenu", array()), "html", null, true);
            echo "  </td> 
\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "date", array()), "d/m/Y H:i"), "html", null, true);
            echo " </td> 
\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "note", array()), "html", null, true);
            echo " </td> 
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td align=\"center\"><a class=\"btn btn-info\" href='/";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["retour"]) || array_key_exists("retour", $context) ? $context["retour"] : (function () { throw new Twig_Error_Runtime('Variable "retour" does not exist.', 46, $this->getSourceContext()); })()), "html", null, true);
        echo "' role=\"button\">Retour</a> </td> 
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t</table>

\t\t<h1 align=\"center\" ><span>MAP </span> </h1>
\t\t<div id=\"map\" style=\"height: 500px;\"></div>

\t\t<h1 align=\"center\" ><span>Ajouter un commentaire </span> </h1>

\t\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), 'form_start');
        echo "
\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), 'widget');
        echo "
\t\t";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), 'form_end');
        echo "

\t\t<!--<div class=\"form-group\">
\t\t\t<label>Auteur</label>
\t\t\t<input type=\"text\" class=\"form-control\"  placeholder=\"";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "auteur", array()), 'widget');
        echo "\">
\t\t\t<label>Commentaire</label>
\t\t\t<input type=\"text\" class=\"form-control\"  placeholder=\"";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "Commentaire", array()), 'widget');
        echo "\">
\t\t\t<label>Note</label>
\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "Note", array()), 'widget');
        echo "
\t\t</div>-->\t



<script>
function draw_map(data) {  
  var map = L.map('map');
  var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
  var osmAttrib='Map data © <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors';
  var osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 14, attribution: osmAttrib});\t\t
  map.setView(new L.LatLng(48.86, 2.34),12);
  map.addLayer(osm);
  var marker;
  data.forEach(function(musee){
    marker = L.marker([musee.lat, musee.lon]).addTo(map);
    marker.bindPopup(\"<b>\"+musee.nom+\"</b>\").openPopup();
  });
  marker.openPopup();
}

var data = [
  {
    nom:'";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["musee"]) || array_key_exists("musee", $context) ? $context["musee"] : (function () { throw new Twig_Error_Runtime('Variable "musee" does not exist.', 90, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo " ',
    lat:'";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["lat"]) || array_key_exists("lat", $context) ? $context["lat"] : (function () { throw new Twig_Error_Runtime('Variable "lat" does not exist.', 91, $this->getSourceContext()); })()), "html", null, true);
        echo "',
    lon:'";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["lon"]) || array_key_exists("lon", $context) ? $context["lon"] : (function () { throw new Twig_Error_Runtime('Variable "lon" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
        echo "'
  }
];

draw_map(data);

</script>
\t
\t</div>
</div>
";
        
        $__internal_ce47de52f16b380a6f5c4ba1371fc801f6c7d330b1c6904e69a7dce6829f790b->leave($__internal_ce47de52f16b380a6f5c4ba1371fc801f6c7d330b1c6904e69a7dce6829f790b_prof);

        
        $__internal_5cdf32b4d3649348702600e47d26dabf12145d3f1cfc41a5f55234211802bd8d->leave($__internal_5cdf32b4d3649348702600e47d26dabf12145d3f1cfc41a5f55234211802bd8d_prof);

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
        return array (  210 => 92,  206 => 91,  202 => 90,  176 => 67,  171 => 65,  166 => 63,  159 => 59,  155 => 58,  151 => 57,  137 => 46,  131 => 42,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  107 => 35,  103 => 34,  88 => 22,  84 => 21,  80 => 20,  74 => 19,  70 => 18,  66 => 17,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
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

\t\t<h1 align=\"center\" ><span>MAP </span> </h1>
\t\t<div id=\"map\" style=\"height: 500px;\"></div>

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
\t\t</div>-->\t



<script>
function draw_map(data) {  
  var map = L.map('map');
  var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
  var osmAttrib='Map data © <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors';
  var osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 14, attribution: osmAttrib});\t\t
  map.setView(new L.LatLng(48.86, 2.34),12);
  map.addLayer(osm);
  var marker;
  data.forEach(function(musee){
    marker = L.marker([musee.lat, musee.lon]).addTo(map);
    marker.bindPopup(\"<b>\"+musee.nom+\"</b>\").openPopup();
  });
  marker.openPopup();
}

var data = [
  {
    nom:'{{ musee.nom }} ',
    lat:'{{ lat }}',
    lon:'{{ lon }}'
  }
];

draw_map(data);

</script>
\t
\t</div>
</div>
{% endblock %}
", "showMusee.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\app\\Resources\\views\\showMusee.html.twig");
    }
}
