<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_644e64edbf2ad088e03bbf3efe8f4661b101dc7d684531cbc1c4f5d26906eef4 extends Twig_Template
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
        $__internal_cef94af4a5e983c1a228e106f45a24b452119143fcee0c61741661687a609f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef94af4a5e983c1a228e106f45a24b452119143fcee0c61741661687a609f73->enter($__internal_cef94af4a5e983c1a228e106f45a24b452119143fcee0c61741661687a609f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_bbff246fc0f83a6ba18170601a886c170b310b5c43b9cf61e2cb8ce9660213a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbff246fc0f83a6ba18170601a886c170b310b5c43b9cf61e2cb8ce9660213a7->enter($__internal_bbff246fc0f83a6ba18170601a886c170b310b5c43b9cf61e2cb8ce9660213a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_cef94af4a5e983c1a228e106f45a24b452119143fcee0c61741661687a609f73->leave($__internal_cef94af4a5e983c1a228e106f45a24b452119143fcee0c61741661687a609f73_prof);

        
        $__internal_bbff246fc0f83a6ba18170601a886c170b310b5c43b9cf61e2cb8ce9660213a7->leave($__internal_bbff246fc0f83a6ba18170601a886c170b310b5c43b9cf61e2cb8ce9660213a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\TP-MUSEE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
