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
        $__internal_3f49638491e6ed694a894d52000ee355c33b743ea27461a40e067c822d436a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f49638491e6ed694a894d52000ee355c33b743ea27461a40e067c822d436a36->enter($__internal_3f49638491e6ed694a894d52000ee355c33b743ea27461a40e067c822d436a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c2b080f8d5127dd827ea8fffba8b4fb8da19e9ab319e36ceae4c212774b39a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b080f8d5127dd827ea8fffba8b4fb8da19e9ab319e36ceae4c212774b39a9e->enter($__internal_c2b080f8d5127dd827ea8fffba8b4fb8da19e9ab319e36ceae4c212774b39a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f49638491e6ed694a894d52000ee355c33b743ea27461a40e067c822d436a36->leave($__internal_3f49638491e6ed694a894d52000ee355c33b743ea27461a40e067c822d436a36_prof);

        
        $__internal_c2b080f8d5127dd827ea8fffba8b4fb8da19e9ab319e36ceae4c212774b39a9e->leave($__internal_c2b080f8d5127dd827ea8fffba8b4fb8da19e9ab319e36ceae4c212774b39a9e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c24feb7cfbcc18ac82d2a9fa10287570f699ff5a4fd453ff1357458d984fa9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24feb7cfbcc18ac82d2a9fa10287570f699ff5a4fd453ff1357458d984fa9a4->enter($__internal_c24feb7cfbcc18ac82d2a9fa10287570f699ff5a4fd453ff1357458d984fa9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_90d8d582583b8916f87ba2d3e1c367696ae9b110e177041a51b91a5fd769dcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d8d582583b8916f87ba2d3e1c367696ae9b110e177041a51b91a5fd769dcf1->enter($__internal_90d8d582583b8916f87ba2d3e1c367696ae9b110e177041a51b91a5fd769dcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_90d8d582583b8916f87ba2d3e1c367696ae9b110e177041a51b91a5fd769dcf1->leave($__internal_90d8d582583b8916f87ba2d3e1c367696ae9b110e177041a51b91a5fd769dcf1_prof);

        
        $__internal_c24feb7cfbcc18ac82d2a9fa10287570f699ff5a4fd453ff1357458d984fa9a4->leave($__internal_c24feb7cfbcc18ac82d2a9fa10287570f699ff5a4fd453ff1357458d984fa9a4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b185ccea9d673dd9039cb88aa52d4466b8531c0d901540584d0b7ce70090aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b185ccea9d673dd9039cb88aa52d4466b8531c0d901540584d0b7ce70090aa2->enter($__internal_3b185ccea9d673dd9039cb88aa52d4466b8531c0d901540584d0b7ce70090aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37083736610ed78152cd9a1afad8d2cf0d853b8a53e674f67c97fea6ae9841de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37083736610ed78152cd9a1afad8d2cf0d853b8a53e674f67c97fea6ae9841de->enter($__internal_37083736610ed78152cd9a1afad8d2cf0d853b8a53e674f67c97fea6ae9841de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_37083736610ed78152cd9a1afad8d2cf0d853b8a53e674f67c97fea6ae9841de->leave($__internal_37083736610ed78152cd9a1afad8d2cf0d853b8a53e674f67c97fea6ae9841de_prof);

        
        $__internal_3b185ccea9d673dd9039cb88aa52d4466b8531c0d901540584d0b7ce70090aa2->leave($__internal_3b185ccea9d673dd9039cb88aa52d4466b8531c0d901540584d0b7ce70090aa2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02907df2bb9afd836a1df93cbfd5777b35aec3aa440074d246a72ee37c97c9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02907df2bb9afd836a1df93cbfd5777b35aec3aa440074d246a72ee37c97c9dd->enter($__internal_02907df2bb9afd836a1df93cbfd5777b35aec3aa440074d246a72ee37c97c9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6183f7b5f6fd38e18f751bf2917f2ca6f26d0dfb5cd94be9423759876cf41548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6183f7b5f6fd38e18f751bf2917f2ca6f26d0dfb5cd94be9423759876cf41548->enter($__internal_6183f7b5f6fd38e18f751bf2917f2ca6f26d0dfb5cd94be9423759876cf41548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6183f7b5f6fd38e18f751bf2917f2ca6f26d0dfb5cd94be9423759876cf41548->leave($__internal_6183f7b5f6fd38e18f751bf2917f2ca6f26d0dfb5cd94be9423759876cf41548_prof);

        
        $__internal_02907df2bb9afd836a1df93cbfd5777b35aec3aa440074d246a72ee37c97c9dd->leave($__internal_02907df2bb9afd836a1df93cbfd5777b35aec3aa440074d246a72ee37c97c9dd_prof);

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
