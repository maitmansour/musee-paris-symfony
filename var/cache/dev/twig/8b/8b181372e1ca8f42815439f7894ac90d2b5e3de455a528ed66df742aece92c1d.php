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
        $__internal_da27de688f0a915d21c48cc6ce3f6a6d1b1c01826bf0ad2b02cc36de1696fcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da27de688f0a915d21c48cc6ce3f6a6d1b1c01826bf0ad2b02cc36de1696fcd9->enter($__internal_da27de688f0a915d21c48cc6ce3f6a6d1b1c01826bf0ad2b02cc36de1696fcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8849e257b63895dd7becb7c46b11c69891095dfcf33d5a3249975839c7b5d103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8849e257b63895dd7becb7c46b11c69891095dfcf33d5a3249975839c7b5d103->enter($__internal_8849e257b63895dd7becb7c46b11c69891095dfcf33d5a3249975839c7b5d103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_da27de688f0a915d21c48cc6ce3f6a6d1b1c01826bf0ad2b02cc36de1696fcd9->leave($__internal_da27de688f0a915d21c48cc6ce3f6a6d1b1c01826bf0ad2b02cc36de1696fcd9_prof);

        
        $__internal_8849e257b63895dd7becb7c46b11c69891095dfcf33d5a3249975839c7b5d103->leave($__internal_8849e257b63895dd7becb7c46b11c69891095dfcf33d5a3249975839c7b5d103_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_70d6c93b19fb6c6588c5bc666ff29e92237886141368ae68f5ba51f5970cb983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d6c93b19fb6c6588c5bc666ff29e92237886141368ae68f5ba51f5970cb983->enter($__internal_70d6c93b19fb6c6588c5bc666ff29e92237886141368ae68f5ba51f5970cb983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1070b4c5647d1663262cef9cdca36620f04e5cbc1dfd3631a48f35acd6e25ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1070b4c5647d1663262cef9cdca36620f04e5cbc1dfd3631a48f35acd6e25ab->enter($__internal_a1070b4c5647d1663262cef9cdca36620f04e5cbc1dfd3631a48f35acd6e25ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1070b4c5647d1663262cef9cdca36620f04e5cbc1dfd3631a48f35acd6e25ab->leave($__internal_a1070b4c5647d1663262cef9cdca36620f04e5cbc1dfd3631a48f35acd6e25ab_prof);

        
        $__internal_70d6c93b19fb6c6588c5bc666ff29e92237886141368ae68f5ba51f5970cb983->leave($__internal_70d6c93b19fb6c6588c5bc666ff29e92237886141368ae68f5ba51f5970cb983_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e720d768337450a98d1968e965662a7444dd1c7a2d52732ca199960e31ed44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e720d768337450a98d1968e965662a7444dd1c7a2d52732ca199960e31ed44b->enter($__internal_4e720d768337450a98d1968e965662a7444dd1c7a2d52732ca199960e31ed44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b0134054e1e6d703094da7e5d4cea76e39c379c24d02e73f19c0e61b795bc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0134054e1e6d703094da7e5d4cea76e39c379c24d02e73f19c0e61b795bc40->enter($__internal_1b0134054e1e6d703094da7e5d4cea76e39c379c24d02e73f19c0e61b795bc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1b0134054e1e6d703094da7e5d4cea76e39c379c24d02e73f19c0e61b795bc40->leave($__internal_1b0134054e1e6d703094da7e5d4cea76e39c379c24d02e73f19c0e61b795bc40_prof);

        
        $__internal_4e720d768337450a98d1968e965662a7444dd1c7a2d52732ca199960e31ed44b->leave($__internal_4e720d768337450a98d1968e965662a7444dd1c7a2d52732ca199960e31ed44b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7423a36721cdb2c83c66249028cccee9024592e4c7c743979e31aea739615a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7423a36721cdb2c83c66249028cccee9024592e4c7c743979e31aea739615a3d->enter($__internal_7423a36721cdb2c83c66249028cccee9024592e4c7c743979e31aea739615a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d606c8ba2c9fdba1e4ac2083e0485043c507746fcd37954fbb60cc65200e8af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d606c8ba2c9fdba1e4ac2083e0485043c507746fcd37954fbb60cc65200e8af4->enter($__internal_d606c8ba2c9fdba1e4ac2083e0485043c507746fcd37954fbb60cc65200e8af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d606c8ba2c9fdba1e4ac2083e0485043c507746fcd37954fbb60cc65200e8af4->leave($__internal_d606c8ba2c9fdba1e4ac2083e0485043c507746fcd37954fbb60cc65200e8af4_prof);

        
        $__internal_7423a36721cdb2c83c66249028cccee9024592e4c7c743979e31aea739615a3d->leave($__internal_7423a36721cdb2c83c66249028cccee9024592e4c7c743979e31aea739615a3d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68358cc9bac557ad10c7af9c6595cc3753fff0653978be1ec7702d8da2b8c450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68358cc9bac557ad10c7af9c6595cc3753fff0653978be1ec7702d8da2b8c450->enter($__internal_68358cc9bac557ad10c7af9c6595cc3753fff0653978be1ec7702d8da2b8c450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b9717a8c10a441829a9cbd28757fc409ee730c7ebee69ff20c5ea0ddf48e59d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9717a8c10a441829a9cbd28757fc409ee730c7ebee69ff20c5ea0ddf48e59d4->enter($__internal_b9717a8c10a441829a9cbd28757fc409ee730c7ebee69ff20c5ea0ddf48e59d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b9717a8c10a441829a9cbd28757fc409ee730c7ebee69ff20c5ea0ddf48e59d4->leave($__internal_b9717a8c10a441829a9cbd28757fc409ee730c7ebee69ff20c5ea0ddf48e59d4_prof);

        
        $__internal_68358cc9bac557ad10c7af9c6595cc3753fff0653978be1ec7702d8da2b8c450->leave($__internal_68358cc9bac557ad10c7af9c6595cc3753fff0653978be1ec7702d8da2b8c450_prof);

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
