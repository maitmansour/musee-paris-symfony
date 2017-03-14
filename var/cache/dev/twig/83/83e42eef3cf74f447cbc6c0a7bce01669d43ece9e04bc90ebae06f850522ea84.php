<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_232c0d6a8e76b934aa78f12343af1e72a560d38f05385c438eb29092e3925804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34319f05a37d76d7060363cf950c5380d8706a764fd15fbda4e406af031307a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34319f05a37d76d7060363cf950c5380d8706a764fd15fbda4e406af031307a4->enter($__internal_34319f05a37d76d7060363cf950c5380d8706a764fd15fbda4e406af031307a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c092cf8018e5a274e454e14b970849d5c6e757aa3500f98ec0a27d2bafc57ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c092cf8018e5a274e454e14b970849d5c6e757aa3500f98ec0a27d2bafc57ea0->enter($__internal_c092cf8018e5a274e454e14b970849d5c6e757aa3500f98ec0a27d2bafc57ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34319f05a37d76d7060363cf950c5380d8706a764fd15fbda4e406af031307a4->leave($__internal_34319f05a37d76d7060363cf950c5380d8706a764fd15fbda4e406af031307a4_prof);

        
        $__internal_c092cf8018e5a274e454e14b970849d5c6e757aa3500f98ec0a27d2bafc57ea0->leave($__internal_c092cf8018e5a274e454e14b970849d5c6e757aa3500f98ec0a27d2bafc57ea0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aeb6dd7444d234cfe65419becc8c784688f6b776fbdfa42b34987aae8eea347f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb6dd7444d234cfe65419becc8c784688f6b776fbdfa42b34987aae8eea347f->enter($__internal_aeb6dd7444d234cfe65419becc8c784688f6b776fbdfa42b34987aae8eea347f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4aa3e74204302a46830808ebb5468731e334eabd66bafba89b8f7b555609747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4aa3e74204302a46830808ebb5468731e334eabd66bafba89b8f7b555609747->enter($__internal_a4aa3e74204302a46830808ebb5468731e334eabd66bafba89b8f7b555609747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a4aa3e74204302a46830808ebb5468731e334eabd66bafba89b8f7b555609747->leave($__internal_a4aa3e74204302a46830808ebb5468731e334eabd66bafba89b8f7b555609747_prof);

        
        $__internal_aeb6dd7444d234cfe65419becc8c784688f6b776fbdfa42b34987aae8eea347f->leave($__internal_aeb6dd7444d234cfe65419becc8c784688f6b776fbdfa42b34987aae8eea347f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_617d1d2ecec7e044ad7adca76ac49fe35daec454ccb9800e2ef1e375cbee3341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617d1d2ecec7e044ad7adca76ac49fe35daec454ccb9800e2ef1e375cbee3341->enter($__internal_617d1d2ecec7e044ad7adca76ac49fe35daec454ccb9800e2ef1e375cbee3341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c377fbf0d6dd19085d8885ab3c66bd4b1e99f6fbadc7860ac653a22d101079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c377fbf0d6dd19085d8885ab3c66bd4b1e99f6fbadc7860ac653a22d101079d->enter($__internal_2c377fbf0d6dd19085d8885ab3c66bd4b1e99f6fbadc7860ac653a22d101079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c377fbf0d6dd19085d8885ab3c66bd4b1e99f6fbadc7860ac653a22d101079d->leave($__internal_2c377fbf0d6dd19085d8885ab3c66bd4b1e99f6fbadc7860ac653a22d101079d_prof);

        
        $__internal_617d1d2ecec7e044ad7adca76ac49fe35daec454ccb9800e2ef1e375cbee3341->leave($__internal_617d1d2ecec7e044ad7adca76ac49fe35daec454ccb9800e2ef1e375cbee3341_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_140ba7d76632b32b9154ec743995afa07cbb5663a8c712aa9eef19122f09e61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140ba7d76632b32b9154ec743995afa07cbb5663a8c712aa9eef19122f09e61d->enter($__internal_140ba7d76632b32b9154ec743995afa07cbb5663a8c712aa9eef19122f09e61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4362b0f89ab877633ade73a32021f34f5d3d0660d5fe687f785f0ae27b08cbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4362b0f89ab877633ade73a32021f34f5d3d0660d5fe687f785f0ae27b08cbe9->enter($__internal_4362b0f89ab877633ade73a32021f34f5d3d0660d5fe687f785f0ae27b08cbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4362b0f89ab877633ade73a32021f34f5d3d0660d5fe687f785f0ae27b08cbe9->leave($__internal_4362b0f89ab877633ade73a32021f34f5d3d0660d5fe687f785f0ae27b08cbe9_prof);

        
        $__internal_140ba7d76632b32b9154ec743995afa07cbb5663a8c712aa9eef19122f09e61d->leave($__internal_140ba7d76632b32b9154ec743995afa07cbb5663a8c712aa9eef19122f09e61d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/etudiant/bm163251/TP-MUSEE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
