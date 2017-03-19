<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ed682216ae94058ea0126c914fab0aacb96023f9134a76e03edaf8286edc63fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8096bebd7420b3f1591a2e196417ec308bee23f7dbe0cbd08841ff555fbc099c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8096bebd7420b3f1591a2e196417ec308bee23f7dbe0cbd08841ff555fbc099c->enter($__internal_8096bebd7420b3f1591a2e196417ec308bee23f7dbe0cbd08841ff555fbc099c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e4e1cd2183c48ed703a1685d83a4c275317d7409eed00e680fcb621cfec74255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e1cd2183c48ed703a1685d83a4c275317d7409eed00e680fcb621cfec74255->enter($__internal_e4e1cd2183c48ed703a1685d83a4c275317d7409eed00e680fcb621cfec74255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8096bebd7420b3f1591a2e196417ec308bee23f7dbe0cbd08841ff555fbc099c->leave($__internal_8096bebd7420b3f1591a2e196417ec308bee23f7dbe0cbd08841ff555fbc099c_prof);

        
        $__internal_e4e1cd2183c48ed703a1685d83a4c275317d7409eed00e680fcb621cfec74255->leave($__internal_e4e1cd2183c48ed703a1685d83a4c275317d7409eed00e680fcb621cfec74255_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eecb9df6e6b451380b378b8be3c6ae05a969ed8d95653fd491694a7d241a17e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecb9df6e6b451380b378b8be3c6ae05a969ed8d95653fd491694a7d241a17e2->enter($__internal_eecb9df6e6b451380b378b8be3c6ae05a969ed8d95653fd491694a7d241a17e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ffda74f0f16b88a02e8962e62d14b322f7566542fb624f5f10b9a2b932e8aa0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffda74f0f16b88a02e8962e62d14b322f7566542fb624f5f10b9a2b932e8aa0a->enter($__internal_ffda74f0f16b88a02e8962e62d14b322f7566542fb624f5f10b9a2b932e8aa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffda74f0f16b88a02e8962e62d14b322f7566542fb624f5f10b9a2b932e8aa0a->leave($__internal_ffda74f0f16b88a02e8962e62d14b322f7566542fb624f5f10b9a2b932e8aa0a_prof);

        
        $__internal_eecb9df6e6b451380b378b8be3c6ae05a969ed8d95653fd491694a7d241a17e2->leave($__internal_eecb9df6e6b451380b378b8be3c6ae05a969ed8d95653fd491694a7d241a17e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca6501f29acd2755dd4ccb51cc2e5260a9692586f6fccdace18559ce6078373e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6501f29acd2755dd4ccb51cc2e5260a9692586f6fccdace18559ce6078373e->enter($__internal_ca6501f29acd2755dd4ccb51cc2e5260a9692586f6fccdace18559ce6078373e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad9a3665fda4f6ffb5f811da967b20a9a50e4f4ae2144ee7d5075a7baf871080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9a3665fda4f6ffb5f811da967b20a9a50e4f4ae2144ee7d5075a7baf871080->enter($__internal_ad9a3665fda4f6ffb5f811da967b20a9a50e4f4ae2144ee7d5075a7baf871080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad9a3665fda4f6ffb5f811da967b20a9a50e4f4ae2144ee7d5075a7baf871080->leave($__internal_ad9a3665fda4f6ffb5f811da967b20a9a50e4f4ae2144ee7d5075a7baf871080_prof);

        
        $__internal_ca6501f29acd2755dd4ccb51cc2e5260a9692586f6fccdace18559ce6078373e->leave($__internal_ca6501f29acd2755dd4ccb51cc2e5260a9692586f6fccdace18559ce6078373e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35a74cb55d7235edf04d6ae2aa682b10f7e16f9f0dab2ef86c70cc09c2242c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a74cb55d7235edf04d6ae2aa682b10f7e16f9f0dab2ef86c70cc09c2242c5a->enter($__internal_35a74cb55d7235edf04d6ae2aa682b10f7e16f9f0dab2ef86c70cc09c2242c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6455410a65aa08ff645920c6d2d8407c0b116833726741e45b4e8ded045b696c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6455410a65aa08ff645920c6d2d8407c0b116833726741e45b4e8ded045b696c->enter($__internal_6455410a65aa08ff645920c6d2d8407c0b116833726741e45b4e8ded045b696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6455410a65aa08ff645920c6d2d8407c0b116833726741e45b4e8ded045b696c->leave($__internal_6455410a65aa08ff645920c6d2d8407c0b116833726741e45b4e8ded045b696c_prof);

        
        $__internal_35a74cb55d7235edf04d6ae2aa682b10f7e16f9f0dab2ef86c70cc09c2242c5a->leave($__internal_35a74cb55d7235edf04d6ae2aa682b10f7e16f9f0dab2ef86c70cc09c2242c5a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
