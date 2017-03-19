<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_32f86d4d6d47b42beb0b4a8ddd16affd04c5dd749a7a01333b4c8a5466516fbe extends Twig_Template
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
        $__internal_ba1617386fd0ecac9fc0c7df14b0c544a4b9013b2d55cdf903455efa37b106ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1617386fd0ecac9fc0c7df14b0c544a4b9013b2d55cdf903455efa37b106ab->enter($__internal_ba1617386fd0ecac9fc0c7df14b0c544a4b9013b2d55cdf903455efa37b106ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0c0e70978cf72f72a6b697524d13ffd37ab397ab9eca5f58e95e64a9f0cc0505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0e70978cf72f72a6b697524d13ffd37ab397ab9eca5f58e95e64a9f0cc0505->enter($__internal_0c0e70978cf72f72a6b697524d13ffd37ab397ab9eca5f58e95e64a9f0cc0505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1617386fd0ecac9fc0c7df14b0c544a4b9013b2d55cdf903455efa37b106ab->leave($__internal_ba1617386fd0ecac9fc0c7df14b0c544a4b9013b2d55cdf903455efa37b106ab_prof);

        
        $__internal_0c0e70978cf72f72a6b697524d13ffd37ab397ab9eca5f58e95e64a9f0cc0505->leave($__internal_0c0e70978cf72f72a6b697524d13ffd37ab397ab9eca5f58e95e64a9f0cc0505_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6b59403bc931711cfbc663616ec36c49e5c8816d286426f4120bd5dcb775930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b59403bc931711cfbc663616ec36c49e5c8816d286426f4120bd5dcb775930->enter($__internal_d6b59403bc931711cfbc663616ec36c49e5c8816d286426f4120bd5dcb775930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9f0e827fb5b8f10b8f37495f3064f18bec1ec969501709625adfae078890632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f0e827fb5b8f10b8f37495f3064f18bec1ec969501709625adfae078890632->enter($__internal_e9f0e827fb5b8f10b8f37495f3064f18bec1ec969501709625adfae078890632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e9f0e827fb5b8f10b8f37495f3064f18bec1ec969501709625adfae078890632->leave($__internal_e9f0e827fb5b8f10b8f37495f3064f18bec1ec969501709625adfae078890632_prof);

        
        $__internal_d6b59403bc931711cfbc663616ec36c49e5c8816d286426f4120bd5dcb775930->leave($__internal_d6b59403bc931711cfbc663616ec36c49e5c8816d286426f4120bd5dcb775930_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_905c7523ab6b06cd2ff9f04d1e6f83298af6f26ff2c1758c218a6be22f76d0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905c7523ab6b06cd2ff9f04d1e6f83298af6f26ff2c1758c218a6be22f76d0a4->enter($__internal_905c7523ab6b06cd2ff9f04d1e6f83298af6f26ff2c1758c218a6be22f76d0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be0538f16cf6fa5b97f78e34a91bc8fed655a2e71d53b6caeec6cd96a623c8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0538f16cf6fa5b97f78e34a91bc8fed655a2e71d53b6caeec6cd96a623c8d9->enter($__internal_be0538f16cf6fa5b97f78e34a91bc8fed655a2e71d53b6caeec6cd96a623c8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_be0538f16cf6fa5b97f78e34a91bc8fed655a2e71d53b6caeec6cd96a623c8d9->leave($__internal_be0538f16cf6fa5b97f78e34a91bc8fed655a2e71d53b6caeec6cd96a623c8d9_prof);

        
        $__internal_905c7523ab6b06cd2ff9f04d1e6f83298af6f26ff2c1758c218a6be22f76d0a4->leave($__internal_905c7523ab6b06cd2ff9f04d1e6f83298af6f26ff2c1758c218a6be22f76d0a4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2272c53b8cb3af8c56bb8e7b1562540bcca3217511e14351ce7909b317dea5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2272c53b8cb3af8c56bb8e7b1562540bcca3217511e14351ce7909b317dea5dc->enter($__internal_2272c53b8cb3af8c56bb8e7b1562540bcca3217511e14351ce7909b317dea5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94eaa985f3945b23b9a97a5b197de787782213527433857dd6801e40dc11435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94eaa985f3945b23b9a97a5b197de787782213527433857dd6801e40dc11435f->enter($__internal_94eaa985f3945b23b9a97a5b197de787782213527433857dd6801e40dc11435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_94eaa985f3945b23b9a97a5b197de787782213527433857dd6801e40dc11435f->leave($__internal_94eaa985f3945b23b9a97a5b197de787782213527433857dd6801e40dc11435f_prof);

        
        $__internal_2272c53b8cb3af8c56bb8e7b1562540bcca3217511e14351ce7909b317dea5dc->leave($__internal_2272c53b8cb3af8c56bb8e7b1562540bcca3217511e14351ce7909b317dea5dc_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
