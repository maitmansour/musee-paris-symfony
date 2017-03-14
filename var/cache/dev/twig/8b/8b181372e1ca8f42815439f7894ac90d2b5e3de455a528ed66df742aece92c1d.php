<?php

/* base.html.twig */
class __TwigTemplate_6b9f7a89e350cfa3ec3df934371d46f5d544de1bf33a121a9b6a643781f848f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a31b2b55b8e62cb34a7775b33bf8f385876828c8356ba3552e39fa4f3e266538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31b2b55b8e62cb34a7775b33bf8f385876828c8356ba3552e39fa4f3e266538->enter($__internal_a31b2b55b8e62cb34a7775b33bf8f385876828c8356ba3552e39fa4f3e266538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ddf2a787a9b0fa92f529e8f77e0c2e27143c0c79a70698526c31dc80a0f73003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf2a787a9b0fa92f529e8f77e0c2e27143c0c79a70698526c31dc80a0f73003->enter($__internal_ddf2a787a9b0fa92f529e8f77e0c2e27143c0c79a70698526c31dc80a0f73003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a31b2b55b8e62cb34a7775b33bf8f385876828c8356ba3552e39fa4f3e266538->leave($__internal_a31b2b55b8e62cb34a7775b33bf8f385876828c8356ba3552e39fa4f3e266538_prof);

        
        $__internal_ddf2a787a9b0fa92f529e8f77e0c2e27143c0c79a70698526c31dc80a0f73003->leave($__internal_ddf2a787a9b0fa92f529e8f77e0c2e27143c0c79a70698526c31dc80a0f73003_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_437e1cdd8e03fc223efad3dcc0ac5ff5ee8b1012e72998217abcb170930f5989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437e1cdd8e03fc223efad3dcc0ac5ff5ee8b1012e72998217abcb170930f5989->enter($__internal_437e1cdd8e03fc223efad3dcc0ac5ff5ee8b1012e72998217abcb170930f5989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_327e35c5d80667926a57241df6c9650ecfb83e731743bd5307df4d88d33d0e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327e35c5d80667926a57241df6c9650ecfb83e731743bd5307df4d88d33d0e3f->enter($__internal_327e35c5d80667926a57241df6c9650ecfb83e731743bd5307df4d88d33d0e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_327e35c5d80667926a57241df6c9650ecfb83e731743bd5307df4d88d33d0e3f->leave($__internal_327e35c5d80667926a57241df6c9650ecfb83e731743bd5307df4d88d33d0e3f_prof);

        
        $__internal_437e1cdd8e03fc223efad3dcc0ac5ff5ee8b1012e72998217abcb170930f5989->leave($__internal_437e1cdd8e03fc223efad3dcc0ac5ff5ee8b1012e72998217abcb170930f5989_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_515595d706f3020b800b61a3cc0da67e996195bc66b4f46df6f8679ce2025684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515595d706f3020b800b61a3cc0da67e996195bc66b4f46df6f8679ce2025684->enter($__internal_515595d706f3020b800b61a3cc0da67e996195bc66b4f46df6f8679ce2025684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_93b9a558ea1ffe218ae550cddfbfd82567e34bfc1e53b3352ae516dabc002690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b9a558ea1ffe218ae550cddfbfd82567e34bfc1e53b3352ae516dabc002690->enter($__internal_93b9a558ea1ffe218ae550cddfbfd82567e34bfc1e53b3352ae516dabc002690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_93b9a558ea1ffe218ae550cddfbfd82567e34bfc1e53b3352ae516dabc002690->leave($__internal_93b9a558ea1ffe218ae550cddfbfd82567e34bfc1e53b3352ae516dabc002690_prof);

        
        $__internal_515595d706f3020b800b61a3cc0da67e996195bc66b4f46df6f8679ce2025684->leave($__internal_515595d706f3020b800b61a3cc0da67e996195bc66b4f46df6f8679ce2025684_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dda2dd9ed2c71ef45058ae092b11afde0a1d4e060951f16309980fc171b0894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dda2dd9ed2c71ef45058ae092b11afde0a1d4e060951f16309980fc171b0894->enter($__internal_1dda2dd9ed2c71ef45058ae092b11afde0a1d4e060951f16309980fc171b0894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be27b9ec69ae47b078ed624086cc80c636ab5f312e3b392b499890f83ef36c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be27b9ec69ae47b078ed624086cc80c636ab5f312e3b392b499890f83ef36c54->enter($__internal_be27b9ec69ae47b078ed624086cc80c636ab5f312e3b392b499890f83ef36c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be27b9ec69ae47b078ed624086cc80c636ab5f312e3b392b499890f83ef36c54->leave($__internal_be27b9ec69ae47b078ed624086cc80c636ab5f312e3b392b499890f83ef36c54_prof);

        
        $__internal_1dda2dd9ed2c71ef45058ae092b11afde0a1d4e060951f16309980fc171b0894->leave($__internal_1dda2dd9ed2c71ef45058ae092b11afde0a1d4e060951f16309980fc171b0894_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a611329af3e5cd33998f83fa42beb0c76becf9f9743b7079421dc39af57494a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a611329af3e5cd33998f83fa42beb0c76becf9f9743b7079421dc39af57494a->enter($__internal_1a611329af3e5cd33998f83fa42beb0c76becf9f9743b7079421dc39af57494a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_887b6250e8c98595569bd854ca577ac0bb5809192aa61c436b768626ce492232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887b6250e8c98595569bd854ca577ac0bb5809192aa61c436b768626ce492232->enter($__internal_887b6250e8c98595569bd854ca577ac0bb5809192aa61c436b768626ce492232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_887b6250e8c98595569bd854ca577ac0bb5809192aa61c436b768626ce492232->leave($__internal_887b6250e8c98595569bd854ca577ac0bb5809192aa61c436b768626ce492232_prof);

        
        $__internal_1a611329af3e5cd33998f83fa42beb0c76becf9f9743b7079421dc39af57494a->leave($__internal_1a611329af3e5cd33998f83fa42beb0c76becf9f9743b7079421dc39af57494a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/etudiant/bm163251/TP-MUSEE/app/Resources/views/base.html.twig");
    }
}
