<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_bec20cbe2f245c93cbeeabc1b0880864368bd80209d616552b44ad3e0e9bb9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffb4fa446230aba23a4874c4c7a4d95f1c4354b3dc72636fbda885fd93884f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb4fa446230aba23a4874c4c7a4d95f1c4354b3dc72636fbda885fd93884f60->enter($__internal_ffb4fa446230aba23a4874c4c7a4d95f1c4354b3dc72636fbda885fd93884f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_bd518e2db53cc22357d6e58bd2df46cb0b33c7d4d6a2d5d5410d8fe30e990a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd518e2db53cc22357d6e58bd2df46cb0b33c7d4d6a2d5d5410d8fe30e990a2f->enter($__internal_bd518e2db53cc22357d6e58bd2df46cb0b33c7d4d6a2d5d5410d8fe30e990a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ffb4fa446230aba23a4874c4c7a4d95f1c4354b3dc72636fbda885fd93884f60->leave($__internal_ffb4fa446230aba23a4874c4c7a4d95f1c4354b3dc72636fbda885fd93884f60_prof);

        
        $__internal_bd518e2db53cc22357d6e58bd2df46cb0b33c7d4d6a2d5d5410d8fe30e990a2f->leave($__internal_bd518e2db53cc22357d6e58bd2df46cb0b33c7d4d6a2d5d5410d8fe30e990a2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\TP-MUSEE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
