<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3e6417b6593cf1eef069436d54f8bc7b0af0fca7c9fac43236fab5d391c6d37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3c6243f57d0146cbd88098e6fb1fabdbd70ba1a411710c7f990b58ac8d120d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6243f57d0146cbd88098e6fb1fabdbd70ba1a411710c7f990b58ac8d120d23->enter($__internal_3c6243f57d0146cbd88098e6fb1fabdbd70ba1a411710c7f990b58ac8d120d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7ce19a76af2327aedb5d201ecfae1fe5a8faaccc8fb716fdaf8a7010423ba838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce19a76af2327aedb5d201ecfae1fe5a8faaccc8fb716fdaf8a7010423ba838->enter($__internal_7ce19a76af2327aedb5d201ecfae1fe5a8faaccc8fb716fdaf8a7010423ba838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c6243f57d0146cbd88098e6fb1fabdbd70ba1a411710c7f990b58ac8d120d23->leave($__internal_3c6243f57d0146cbd88098e6fb1fabdbd70ba1a411710c7f990b58ac8d120d23_prof);

        
        $__internal_7ce19a76af2327aedb5d201ecfae1fe5a8faaccc8fb716fdaf8a7010423ba838->leave($__internal_7ce19a76af2327aedb5d201ecfae1fe5a8faaccc8fb716fdaf8a7010423ba838_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef7b4a194b7c22e4f70bbb6f3bb714c4f2b4509b1577dc7608e94783a66eb9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7b4a194b7c22e4f70bbb6f3bb714c4f2b4509b1577dc7608e94783a66eb9c6->enter($__internal_ef7b4a194b7c22e4f70bbb6f3bb714c4f2b4509b1577dc7608e94783a66eb9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d5f47e1ffb471182bf21abb5a05f406e7d7b9de430f244128bf16aa019bc86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5f47e1ffb471182bf21abb5a05f406e7d7b9de430f244128bf16aa019bc86e->enter($__internal_4d5f47e1ffb471182bf21abb5a05f406e7d7b9de430f244128bf16aa019bc86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4d5f47e1ffb471182bf21abb5a05f406e7d7b9de430f244128bf16aa019bc86e->leave($__internal_4d5f47e1ffb471182bf21abb5a05f406e7d7b9de430f244128bf16aa019bc86e_prof);

        
        $__internal_ef7b4a194b7c22e4f70bbb6f3bb714c4f2b4509b1577dc7608e94783a66eb9c6->leave($__internal_ef7b4a194b7c22e4f70bbb6f3bb714c4f2b4509b1577dc7608e94783a66eb9c6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c493f03209850547eac620a9bb53c9d7a50caffe3523092f7070f1b26ecd4465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c493f03209850547eac620a9bb53c9d7a50caffe3523092f7070f1b26ecd4465->enter($__internal_c493f03209850547eac620a9bb53c9d7a50caffe3523092f7070f1b26ecd4465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90d2c9be31362fa68cbffcb33189f66e068b020d6aa9d90e27a4973e703615c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d2c9be31362fa68cbffcb33189f66e068b020d6aa9d90e27a4973e703615c1->enter($__internal_90d2c9be31362fa68cbffcb33189f66e068b020d6aa9d90e27a4973e703615c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_90d2c9be31362fa68cbffcb33189f66e068b020d6aa9d90e27a4973e703615c1->leave($__internal_90d2c9be31362fa68cbffcb33189f66e068b020d6aa9d90e27a4973e703615c1_prof);

        
        $__internal_c493f03209850547eac620a9bb53c9d7a50caffe3523092f7070f1b26ecd4465->leave($__internal_c493f03209850547eac620a9bb53c9d7a50caffe3523092f7070f1b26ecd4465_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fd704bc2105cea44150a9870d73a34314c3d7fd94239f441e7e96d614aa2ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd704bc2105cea44150a9870d73a34314c3d7fd94239f441e7e96d614aa2ec7->enter($__internal_0fd704bc2105cea44150a9870d73a34314c3d7fd94239f441e7e96d614aa2ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0dfa789c2cd9e020c8eda20992f66c621b2ebc8cacaf0194ffd189257e271680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfa789c2cd9e020c8eda20992f66c621b2ebc8cacaf0194ffd189257e271680->enter($__internal_0dfa789c2cd9e020c8eda20992f66c621b2ebc8cacaf0194ffd189257e271680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0dfa789c2cd9e020c8eda20992f66c621b2ebc8cacaf0194ffd189257e271680->leave($__internal_0dfa789c2cd9e020c8eda20992f66c621b2ebc8cacaf0194ffd189257e271680_prof);

        
        $__internal_0fd704bc2105cea44150a9870d73a34314c3d7fd94239f441e7e96d614aa2ec7->leave($__internal_0fd704bc2105cea44150a9870d73a34314c3d7fd94239f441e7e96d614aa2ec7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/etudiant/bm163251/TP-MUSEE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
