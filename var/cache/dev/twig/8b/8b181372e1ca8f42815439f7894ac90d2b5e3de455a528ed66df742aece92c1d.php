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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e923f9d3ed58316ad180f916f830daf6d3c4a129105d2593be4d8696af6cb7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e923f9d3ed58316ad180f916f830daf6d3c4a129105d2593be4d8696af6cb7a8->enter($__internal_e923f9d3ed58316ad180f916f830daf6d3c4a129105d2593be4d8696af6cb7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8ef530871632b573101cb9d23635b139e3a6191cc45995ab06dbff6a360a9f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef530871632b573101cb9d23635b139e3a6191cc45995ab06dbff6a360a9f69->enter($__internal_8ef530871632b573101cb9d23635b139e3a6191cc45995ab06dbff6a360a9f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_e923f9d3ed58316ad180f916f830daf6d3c4a129105d2593be4d8696af6cb7a8->leave($__internal_e923f9d3ed58316ad180f916f830daf6d3c4a129105d2593be4d8696af6cb7a8_prof);

        
        $__internal_8ef530871632b573101cb9d23635b139e3a6191cc45995ab06dbff6a360a9f69->leave($__internal_8ef530871632b573101cb9d23635b139e3a6191cc45995ab06dbff6a360a9f69_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_44ffa9deb3e11e87b61d16943ae92116955532ff3884dcc70cf84797d39e4781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ffa9deb3e11e87b61d16943ae92116955532ff3884dcc70cf84797d39e4781->enter($__internal_44ffa9deb3e11e87b61d16943ae92116955532ff3884dcc70cf84797d39e4781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa1f70207511ed44b3b2b7c12f0fdc51550ab49379efdf9cae99e8897d42a88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1f70207511ed44b3b2b7c12f0fdc51550ab49379efdf9cae99e8897d42a88e->enter($__internal_fa1f70207511ed44b3b2b7c12f0fdc51550ab49379efdf9cae99e8897d42a88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fa1f70207511ed44b3b2b7c12f0fdc51550ab49379efdf9cae99e8897d42a88e->leave($__internal_fa1f70207511ed44b3b2b7c12f0fdc51550ab49379efdf9cae99e8897d42a88e_prof);

        
        $__internal_44ffa9deb3e11e87b61d16943ae92116955532ff3884dcc70cf84797d39e4781->leave($__internal_44ffa9deb3e11e87b61d16943ae92116955532ff3884dcc70cf84797d39e4781_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_636caa33a12c404485ba6e0972724638f6608cf33758d1d75e60efc9b8487697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636caa33a12c404485ba6e0972724638f6608cf33758d1d75e60efc9b8487697->enter($__internal_636caa33a12c404485ba6e0972724638f6608cf33758d1d75e60efc9b8487697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d3e32e2b14e43c845181b9d6fb03b1719aba72efd645d4add0d0b414394a522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3e32e2b14e43c845181b9d6fb03b1719aba72efd645d4add0d0b414394a522->enter($__internal_8d3e32e2b14e43c845181b9d6fb03b1719aba72efd645d4add0d0b414394a522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8d3e32e2b14e43c845181b9d6fb03b1719aba72efd645d4add0d0b414394a522->leave($__internal_8d3e32e2b14e43c845181b9d6fb03b1719aba72efd645d4add0d0b414394a522_prof);

        
        $__internal_636caa33a12c404485ba6e0972724638f6608cf33758d1d75e60efc9b8487697->leave($__internal_636caa33a12c404485ba6e0972724638f6608cf33758d1d75e60efc9b8487697_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f012c3cf1555237d4b7b0ab3d98d9b9c23e3361cb0bf5ed7ef6861eb93eb989a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f012c3cf1555237d4b7b0ab3d98d9b9c23e3361cb0bf5ed7ef6861eb93eb989a->enter($__internal_f012c3cf1555237d4b7b0ab3d98d9b9c23e3361cb0bf5ed7ef6861eb93eb989a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6049d3aaa5f8c67f20af263373ed2a17248bf30dff68429510d1c157c1b33537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6049d3aaa5f8c67f20af263373ed2a17248bf30dff68429510d1c157c1b33537->enter($__internal_6049d3aaa5f8c67f20af263373ed2a17248bf30dff68429510d1c157c1b33537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6049d3aaa5f8c67f20af263373ed2a17248bf30dff68429510d1c157c1b33537->leave($__internal_6049d3aaa5f8c67f20af263373ed2a17248bf30dff68429510d1c157c1b33537_prof);

        
        $__internal_f012c3cf1555237d4b7b0ab3d98d9b9c23e3361cb0bf5ed7ef6861eb93eb989a->leave($__internal_f012c3cf1555237d4b7b0ab3d98d9b9c23e3361cb0bf5ed7ef6861eb93eb989a_prof);

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
        return array (  102 => 16,  85 => 15,  67 => 9,  55 => 17,  52 => 16,  50 => 15,  44 => 12,  38 => 9,  28 => 1,);
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
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <title>{% block title %}Welcome!{% endblock %}</title>
        

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
