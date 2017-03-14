<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6d61663caf2de9c78e0781257217f448115a512631d9678f11d8c724604a2ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3329ad47f3aa2897e721c7686bac94e6f27e54a1d96d70b93776a97cdd46ed0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3329ad47f3aa2897e721c7686bac94e6f27e54a1d96d70b93776a97cdd46ed0b->enter($__internal_3329ad47f3aa2897e721c7686bac94e6f27e54a1d96d70b93776a97cdd46ed0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_40d207bd4b5370464c9aecc2d3708b928387982123cc047af281b5201e6eafae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d207bd4b5370464c9aecc2d3708b928387982123cc047af281b5201e6eafae->enter($__internal_40d207bd4b5370464c9aecc2d3708b928387982123cc047af281b5201e6eafae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3329ad47f3aa2897e721c7686bac94e6f27e54a1d96d70b93776a97cdd46ed0b->leave($__internal_3329ad47f3aa2897e721c7686bac94e6f27e54a1d96d70b93776a97cdd46ed0b_prof);

        
        $__internal_40d207bd4b5370464c9aecc2d3708b928387982123cc047af281b5201e6eafae->leave($__internal_40d207bd4b5370464c9aecc2d3708b928387982123cc047af281b5201e6eafae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0c5902b522041cfc0257ed09eee8d79ef00911a5c7146adabf405d1e8f99735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c5902b522041cfc0257ed09eee8d79ef00911a5c7146adabf405d1e8f99735->enter($__internal_c0c5902b522041cfc0257ed09eee8d79ef00911a5c7146adabf405d1e8f99735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a740f9abf1bcfd6d6131046a725f14da36cbec39d29b778bb9881d882e9216f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a740f9abf1bcfd6d6131046a725f14da36cbec39d29b778bb9881d882e9216f1->enter($__internal_a740f9abf1bcfd6d6131046a725f14da36cbec39d29b778bb9881d882e9216f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a740f9abf1bcfd6d6131046a725f14da36cbec39d29b778bb9881d882e9216f1->leave($__internal_a740f9abf1bcfd6d6131046a725f14da36cbec39d29b778bb9881d882e9216f1_prof);

        
        $__internal_c0c5902b522041cfc0257ed09eee8d79ef00911a5c7146adabf405d1e8f99735->leave($__internal_c0c5902b522041cfc0257ed09eee8d79ef00911a5c7146adabf405d1e8f99735_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/etudiant/bm163251/TP-MUSEE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
