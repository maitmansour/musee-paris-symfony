<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9474c9138fac4ec7532c6877b35a8e24b6f49314c11233379c5a89491a85e6fb extends Twig_Template
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
        $__internal_1cf53d06a1b7ea1767129c78d2dcd239eeeb2220e081db0ee4fbdfe6e9b8c6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf53d06a1b7ea1767129c78d2dcd239eeeb2220e081db0ee4fbdfe6e9b8c6b6->enter($__internal_1cf53d06a1b7ea1767129c78d2dcd239eeeb2220e081db0ee4fbdfe6e9b8c6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_cc3dad46563a877acf590aa1777dd790143e5b6e50aeb4849d8bd55aba8a3625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3dad46563a877acf590aa1777dd790143e5b6e50aeb4849d8bd55aba8a3625->enter($__internal_cc3dad46563a877acf590aa1777dd790143e5b6e50aeb4849d8bd55aba8a3625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf53d06a1b7ea1767129c78d2dcd239eeeb2220e081db0ee4fbdfe6e9b8c6b6->leave($__internal_1cf53d06a1b7ea1767129c78d2dcd239eeeb2220e081db0ee4fbdfe6e9b8c6b6_prof);

        
        $__internal_cc3dad46563a877acf590aa1777dd790143e5b6e50aeb4849d8bd55aba8a3625->leave($__internal_cc3dad46563a877acf590aa1777dd790143e5b6e50aeb4849d8bd55aba8a3625_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_daebd95093874474e6b92fe1a07a01be5a399f8a71019f9a503d47d10e349283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daebd95093874474e6b92fe1a07a01be5a399f8a71019f9a503d47d10e349283->enter($__internal_daebd95093874474e6b92fe1a07a01be5a399f8a71019f9a503d47d10e349283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d9b205e2e0455e4f2e15dd81e2b30dfb0744806659dc7d7cfc218f398b7de74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9b205e2e0455e4f2e15dd81e2b30dfb0744806659dc7d7cfc218f398b7de74->enter($__internal_7d9b205e2e0455e4f2e15dd81e2b30dfb0744806659dc7d7cfc218f398b7de74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7d9b205e2e0455e4f2e15dd81e2b30dfb0744806659dc7d7cfc218f398b7de74->leave($__internal_7d9b205e2e0455e4f2e15dd81e2b30dfb0744806659dc7d7cfc218f398b7de74_prof);

        
        $__internal_daebd95093874474e6b92fe1a07a01be5a399f8a71019f9a503d47d10e349283->leave($__internal_daebd95093874474e6b92fe1a07a01be5a399f8a71019f9a503d47d10e349283_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
