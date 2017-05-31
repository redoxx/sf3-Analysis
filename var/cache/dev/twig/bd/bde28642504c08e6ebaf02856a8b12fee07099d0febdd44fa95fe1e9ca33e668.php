<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4131d415116766d4e2b41ebb54c0f9544a0ad166b25b4d93f4aad0075a9c66b9 extends Twig_Template
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
        $__internal_9b52cb2ae983b08c98ad281993cb8d56fb8df1f7c8bebc39e58e10cf8266e810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b52cb2ae983b08c98ad281993cb8d56fb8df1f7c8bebc39e58e10cf8266e810->enter($__internal_9b52cb2ae983b08c98ad281993cb8d56fb8df1f7c8bebc39e58e10cf8266e810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f0404406b5a1da78b60eb48213fefba3d67adc4c5f148d540f38d6ed3d1edd1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0404406b5a1da78b60eb48213fefba3d67adc4c5f148d540f38d6ed3d1edd1f->enter($__internal_f0404406b5a1da78b60eb48213fefba3d67adc4c5f148d540f38d6ed3d1edd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9b52cb2ae983b08c98ad281993cb8d56fb8df1f7c8bebc39e58e10cf8266e810->leave($__internal_9b52cb2ae983b08c98ad281993cb8d56fb8df1f7c8bebc39e58e10cf8266e810_prof);

        
        $__internal_f0404406b5a1da78b60eb48213fefba3d67adc4c5f148d540f38d6ed3d1edd1f->leave($__internal_f0404406b5a1da78b60eb48213fefba3d67adc4c5f148d540f38d6ed3d1edd1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
