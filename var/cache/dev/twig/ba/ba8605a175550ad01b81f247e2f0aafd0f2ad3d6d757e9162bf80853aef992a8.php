<?php

/* base.html.twig */
class __TwigTemplate_6f1e416250e2cf8e145f17db61914a8c99c96baa6df5837743b9e9dbfdc2e770 extends Twig_Template
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
        $__internal_3f0cd0d92671723aa4bca490b625fa1c11e9bd7f4768aaf25a7036b6835b7c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0cd0d92671723aa4bca490b625fa1c11e9bd7f4768aaf25a7036b6835b7c00->enter($__internal_3f0cd0d92671723aa4bca490b625fa1c11e9bd7f4768aaf25a7036b6835b7c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d8f41858eb66d9ca4e976c1fbf925cddfe76e9ef68377292d58ab0443f9b2711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f41858eb66d9ca4e976c1fbf925cddfe76e9ef68377292d58ab0443f9b2711->enter($__internal_d8f41858eb66d9ca4e976c1fbf925cddfe76e9ef68377292d58ab0443f9b2711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3f0cd0d92671723aa4bca490b625fa1c11e9bd7f4768aaf25a7036b6835b7c00->leave($__internal_3f0cd0d92671723aa4bca490b625fa1c11e9bd7f4768aaf25a7036b6835b7c00_prof);

        
        $__internal_d8f41858eb66d9ca4e976c1fbf925cddfe76e9ef68377292d58ab0443f9b2711->leave($__internal_d8f41858eb66d9ca4e976c1fbf925cddfe76e9ef68377292d58ab0443f9b2711_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f87c5e51b8048c0991401365b5a2222c9eb3d5f3dcbc25e4fb69bf01f03108b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87c5e51b8048c0991401365b5a2222c9eb3d5f3dcbc25e4fb69bf01f03108b8->enter($__internal_f87c5e51b8048c0991401365b5a2222c9eb3d5f3dcbc25e4fb69bf01f03108b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da14ac518f17fe722bd2099dbfaf91f8af3b0dcb2ce67c075eb5434443d11171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da14ac518f17fe722bd2099dbfaf91f8af3b0dcb2ce67c075eb5434443d11171->enter($__internal_da14ac518f17fe722bd2099dbfaf91f8af3b0dcb2ce67c075eb5434443d11171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da14ac518f17fe722bd2099dbfaf91f8af3b0dcb2ce67c075eb5434443d11171->leave($__internal_da14ac518f17fe722bd2099dbfaf91f8af3b0dcb2ce67c075eb5434443d11171_prof);

        
        $__internal_f87c5e51b8048c0991401365b5a2222c9eb3d5f3dcbc25e4fb69bf01f03108b8->leave($__internal_f87c5e51b8048c0991401365b5a2222c9eb3d5f3dcbc25e4fb69bf01f03108b8_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a88cc4ff3d04cabddeaaf3589c40fd48c4982f984e954addbcbe8cb0aa42edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a88cc4ff3d04cabddeaaf3589c40fd48c4982f984e954addbcbe8cb0aa42edb->enter($__internal_9a88cc4ff3d04cabddeaaf3589c40fd48c4982f984e954addbcbe8cb0aa42edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb9c624862ce0f33e7b571c0bf269cd0b155cd0a6014ed7d5dbd7fc6e372f877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9c624862ce0f33e7b571c0bf269cd0b155cd0a6014ed7d5dbd7fc6e372f877->enter($__internal_fb9c624862ce0f33e7b571c0bf269cd0b155cd0a6014ed7d5dbd7fc6e372f877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb9c624862ce0f33e7b571c0bf269cd0b155cd0a6014ed7d5dbd7fc6e372f877->leave($__internal_fb9c624862ce0f33e7b571c0bf269cd0b155cd0a6014ed7d5dbd7fc6e372f877_prof);

        
        $__internal_9a88cc4ff3d04cabddeaaf3589c40fd48c4982f984e954addbcbe8cb0aa42edb->leave($__internal_9a88cc4ff3d04cabddeaaf3589c40fd48c4982f984e954addbcbe8cb0aa42edb_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ad6f92dacb86807b958ce565fb2f0d5c3e54b3a93ff1f0e4d2a9c7726b13a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad6f92dacb86807b958ce565fb2f0d5c3e54b3a93ff1f0e4d2a9c7726b13a8b->enter($__internal_5ad6f92dacb86807b958ce565fb2f0d5c3e54b3a93ff1f0e4d2a9c7726b13a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b138ebf70b510887525e0eba09971c83ef035d895f4d81ede71f4edd0041200c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b138ebf70b510887525e0eba09971c83ef035d895f4d81ede71f4edd0041200c->enter($__internal_b138ebf70b510887525e0eba09971c83ef035d895f4d81ede71f4edd0041200c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b138ebf70b510887525e0eba09971c83ef035d895f4d81ede71f4edd0041200c->leave($__internal_b138ebf70b510887525e0eba09971c83ef035d895f4d81ede71f4edd0041200c_prof);

        
        $__internal_5ad6f92dacb86807b958ce565fb2f0d5c3e54b3a93ff1f0e4d2a9c7726b13a8b->leave($__internal_5ad6f92dacb86807b958ce565fb2f0d5c3e54b3a93ff1f0e4d2a9c7726b13a8b_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\app\\Resources\\views\\base.html.twig");
    }
}
