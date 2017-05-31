<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_456ea05b6e7197cbd21f03fee2165a3b832ba2875629c5d70257f3db5c246009 extends Twig_Template
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
        $__internal_8b25fd1bfb01ea5c0569c5c0b6085916a96e80e71cf13941e0bf5bc18398d8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b25fd1bfb01ea5c0569c5c0b6085916a96e80e71cf13941e0bf5bc18398d8ca->enter($__internal_8b25fd1bfb01ea5c0569c5c0b6085916a96e80e71cf13941e0bf5bc18398d8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d68da076423baf76dd5adcbcc987d60a169f3524fd331f98e8436239f1b55697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68da076423baf76dd5adcbcc987d60a169f3524fd331f98e8436239f1b55697->enter($__internal_d68da076423baf76dd5adcbcc987d60a169f3524fd331f98e8436239f1b55697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8b25fd1bfb01ea5c0569c5c0b6085916a96e80e71cf13941e0bf5bc18398d8ca->leave($__internal_8b25fd1bfb01ea5c0569c5c0b6085916a96e80e71cf13941e0bf5bc18398d8ca_prof);

        
        $__internal_d68da076423baf76dd5adcbcc987d60a169f3524fd331f98e8436239f1b55697->leave($__internal_d68da076423baf76dd5adcbcc987d60a169f3524fd331f98e8436239f1b55697_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
