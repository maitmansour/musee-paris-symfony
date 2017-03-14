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
        $__internal_bdfa5137d9ab200843a9a912c72ad14f886d6156e18acc7967f8c97d6c596ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfa5137d9ab200843a9a912c72ad14f886d6156e18acc7967f8c97d6c596ee2->enter($__internal_bdfa5137d9ab200843a9a912c72ad14f886d6156e18acc7967f8c97d6c596ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c92f297509f3c813eae5e90702de943ea08435272ebeef14e22d73835aad675f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92f297509f3c813eae5e90702de943ea08435272ebeef14e22d73835aad675f->enter($__internal_c92f297509f3c813eae5e90702de943ea08435272ebeef14e22d73835aad675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdfa5137d9ab200843a9a912c72ad14f886d6156e18acc7967f8c97d6c596ee2->leave($__internal_bdfa5137d9ab200843a9a912c72ad14f886d6156e18acc7967f8c97d6c596ee2_prof);

        
        $__internal_c92f297509f3c813eae5e90702de943ea08435272ebeef14e22d73835aad675f->leave($__internal_c92f297509f3c813eae5e90702de943ea08435272ebeef14e22d73835aad675f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b161e6711fa2d02d031970c4a2bb0479cfe81cc7fadab4948a2ea4f26ec6e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b161e6711fa2d02d031970c4a2bb0479cfe81cc7fadab4948a2ea4f26ec6e85->enter($__internal_3b161e6711fa2d02d031970c4a2bb0479cfe81cc7fadab4948a2ea4f26ec6e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_81ec164445b86d84f64157657ea6b2748a0153266c2e219666c958af73610478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ec164445b86d84f64157657ea6b2748a0153266c2e219666c958af73610478->enter($__internal_81ec164445b86d84f64157657ea6b2748a0153266c2e219666c958af73610478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_81ec164445b86d84f64157657ea6b2748a0153266c2e219666c958af73610478->leave($__internal_81ec164445b86d84f64157657ea6b2748a0153266c2e219666c958af73610478_prof);

        
        $__internal_3b161e6711fa2d02d031970c4a2bb0479cfe81cc7fadab4948a2ea4f26ec6e85->leave($__internal_3b161e6711fa2d02d031970c4a2bb0479cfe81cc7fadab4948a2ea4f26ec6e85_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed09d9db3cb1b72816b7868fc9a4b032946f4d4fdec32302e68f9a9998599df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed09d9db3cb1b72816b7868fc9a4b032946f4d4fdec32302e68f9a9998599df2->enter($__internal_ed09d9db3cb1b72816b7868fc9a4b032946f4d4fdec32302e68f9a9998599df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9010df19e0842d966b271f1d6ea891e3ceb791b5a4b4c949d5e95cf066fc170a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9010df19e0842d966b271f1d6ea891e3ceb791b5a4b4c949d5e95cf066fc170a->enter($__internal_9010df19e0842d966b271f1d6ea891e3ceb791b5a4b4c949d5e95cf066fc170a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9010df19e0842d966b271f1d6ea891e3ceb791b5a4b4c949d5e95cf066fc170a->leave($__internal_9010df19e0842d966b271f1d6ea891e3ceb791b5a4b4c949d5e95cf066fc170a_prof);

        
        $__internal_ed09d9db3cb1b72816b7868fc9a4b032946f4d4fdec32302e68f9a9998599df2->leave($__internal_ed09d9db3cb1b72816b7868fc9a4b032946f4d4fdec32302e68f9a9998599df2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a223974736666dec723c5f71b57189c9a9b686169a09adbf876abd916b05d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a223974736666dec723c5f71b57189c9a9b686169a09adbf876abd916b05d89->enter($__internal_2a223974736666dec723c5f71b57189c9a9b686169a09adbf876abd916b05d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c98be1de091bfd3f2c6195f8ede33894c70f5bbd1be2a1887d422f0dcb4c7562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98be1de091bfd3f2c6195f8ede33894c70f5bbd1be2a1887d422f0dcb4c7562->enter($__internal_c98be1de091bfd3f2c6195f8ede33894c70f5bbd1be2a1887d422f0dcb4c7562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c98be1de091bfd3f2c6195f8ede33894c70f5bbd1be2a1887d422f0dcb4c7562->leave($__internal_c98be1de091bfd3f2c6195f8ede33894c70f5bbd1be2a1887d422f0dcb4c7562_prof);

        
        $__internal_2a223974736666dec723c5f71b57189c9a9b686169a09adbf876abd916b05d89->leave($__internal_2a223974736666dec723c5f71b57189c9a9b686169a09adbf876abd916b05d89_prof);

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
