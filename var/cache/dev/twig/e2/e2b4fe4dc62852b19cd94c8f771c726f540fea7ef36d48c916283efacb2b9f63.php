<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df6ef756d4371ab09de227ee14dff86c21e1115931618690ad5925995aada5cd extends Twig_Template
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
        $__internal_a369f0d979500a716993194189039e5cfc8359a0093279db1b3ef6649cf34de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a369f0d979500a716993194189039e5cfc8359a0093279db1b3ef6649cf34de6->enter($__internal_a369f0d979500a716993194189039e5cfc8359a0093279db1b3ef6649cf34de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dba9382e5b797ebbe64007e8a123eeaa36d4f9a0ec32b601e4ce5514244a22e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba9382e5b797ebbe64007e8a123eeaa36d4f9a0ec32b601e4ce5514244a22e2->enter($__internal_dba9382e5b797ebbe64007e8a123eeaa36d4f9a0ec32b601e4ce5514244a22e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a369f0d979500a716993194189039e5cfc8359a0093279db1b3ef6649cf34de6->leave($__internal_a369f0d979500a716993194189039e5cfc8359a0093279db1b3ef6649cf34de6_prof);

        
        $__internal_dba9382e5b797ebbe64007e8a123eeaa36d4f9a0ec32b601e4ce5514244a22e2->leave($__internal_dba9382e5b797ebbe64007e8a123eeaa36d4f9a0ec32b601e4ce5514244a22e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ef2d5a4f82a2db3c7a77a669643663f615b34d4e0e81692a1520443327d0762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef2d5a4f82a2db3c7a77a669643663f615b34d4e0e81692a1520443327d0762->enter($__internal_6ef2d5a4f82a2db3c7a77a669643663f615b34d4e0e81692a1520443327d0762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_288eefa23ca98c48af3ed6e69bae992bec703e95521bbb36f66d985ceafe4316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288eefa23ca98c48af3ed6e69bae992bec703e95521bbb36f66d985ceafe4316->enter($__internal_288eefa23ca98c48af3ed6e69bae992bec703e95521bbb36f66d985ceafe4316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_288eefa23ca98c48af3ed6e69bae992bec703e95521bbb36f66d985ceafe4316->leave($__internal_288eefa23ca98c48af3ed6e69bae992bec703e95521bbb36f66d985ceafe4316_prof);

        
        $__internal_6ef2d5a4f82a2db3c7a77a669643663f615b34d4e0e81692a1520443327d0762->leave($__internal_6ef2d5a4f82a2db3c7a77a669643663f615b34d4e0e81692a1520443327d0762_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ff45659cfb5bbe4393b96d3346ba797db7dda681bc41554085e0e6a3b21a03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff45659cfb5bbe4393b96d3346ba797db7dda681bc41554085e0e6a3b21a03a->enter($__internal_7ff45659cfb5bbe4393b96d3346ba797db7dda681bc41554085e0e6a3b21a03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_067692cd5576bff1b4bc3a263b8c54fd87a3f277e7dfda87908a192df7d5e6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067692cd5576bff1b4bc3a263b8c54fd87a3f277e7dfda87908a192df7d5e6a4->enter($__internal_067692cd5576bff1b4bc3a263b8c54fd87a3f277e7dfda87908a192df7d5e6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_067692cd5576bff1b4bc3a263b8c54fd87a3f277e7dfda87908a192df7d5e6a4->leave($__internal_067692cd5576bff1b4bc3a263b8c54fd87a3f277e7dfda87908a192df7d5e6a4_prof);

        
        $__internal_7ff45659cfb5bbe4393b96d3346ba797db7dda681bc41554085e0e6a3b21a03a->leave($__internal_7ff45659cfb5bbe4393b96d3346ba797db7dda681bc41554085e0e6a3b21a03a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c023336e7d54f11094702034dab0bc41f37d1333697d61c99cdf72f58a9f792c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c023336e7d54f11094702034dab0bc41f37d1333697d61c99cdf72f58a9f792c->enter($__internal_c023336e7d54f11094702034dab0bc41f37d1333697d61c99cdf72f58a9f792c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfdb208ec3bbd7ec0a49c031bb6e2e9aa042f365f71e2dc3c1e5ecb39920aa28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdb208ec3bbd7ec0a49c031bb6e2e9aa042f365f71e2dc3c1e5ecb39920aa28->enter($__internal_cfdb208ec3bbd7ec0a49c031bb6e2e9aa042f365f71e2dc3c1e5ecb39920aa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cfdb208ec3bbd7ec0a49c031bb6e2e9aa042f365f71e2dc3c1e5ecb39920aa28->leave($__internal_cfdb208ec3bbd7ec0a49c031bb6e2e9aa042f365f71e2dc3c1e5ecb39920aa28_prof);

        
        $__internal_c023336e7d54f11094702034dab0bc41f37d1333697d61c99cdf72f58a9f792c->leave($__internal_c023336e7d54f11094702034dab0bc41f37d1333697d61c99cdf72f58a9f792c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/home/etudiant/bm163251/TP-MUSEE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
