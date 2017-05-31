<?php

/* MedicalAnalysisBundle:Default:index.html.twig */
class __TwigTemplate_68c8484e2c036beb9e1b512cee5c7a99eae442276c178f163cc2ab6d896089dc extends Twig_Template
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
        $__internal_9792d111e3a8c2e6afa67a8ad6ad7e8ebe5ea48ee484286eefa9cc3248413f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9792d111e3a8c2e6afa67a8ad6ad7e8ebe5ea48ee484286eefa9cc3248413f92->enter($__internal_9792d111e3a8c2e6afa67a8ad6ad7e8ebe5ea48ee484286eefa9cc3248413f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MedicalAnalysisBundle:Default:index.html.twig"));

        $__internal_5bdf065163acb7dbcd4673ac8a0ff45200bc0f09f57c00e73f2fd3cf0f506cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdf065163acb7dbcd4673ac8a0ff45200bc0f09f57c00e73f2fd3cf0f506cbc->enter($__internal_5bdf065163acb7dbcd4673ac8a0ff45200bc0f09f57c00e73f2fd3cf0f506cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MedicalAnalysisBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9792d111e3a8c2e6afa67a8ad6ad7e8ebe5ea48ee484286eefa9cc3248413f92->leave($__internal_9792d111e3a8c2e6afa67a8ad6ad7e8ebe5ea48ee484286eefa9cc3248413f92_prof);

        
        $__internal_5bdf065163acb7dbcd4673ac8a0ff45200bc0f09f57c00e73f2fd3cf0f506cbc->leave($__internal_5bdf065163acb7dbcd4673ac8a0ff45200bc0f09f57c00e73f2fd3cf0f506cbc_prof);

    }

    public function getTemplateName()
    {
        return "MedicalAnalysisBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "MedicalAnalysisBundle:Default:index.html.twig", "/var/www/myprojsf3/src/Medical/AnalysisBundle/Resources/views/Default/index.html.twig");
    }
}
