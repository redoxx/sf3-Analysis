<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_020e898b1bc87a24fdb8576dc256f337b27490b8b0ba6428c261eb68df665e58 extends Twig_Template
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
        $__internal_91401ae77a6b646ef92c9f2673668765ffc88ba72e17ac64ae500e578d370846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91401ae77a6b646ef92c9f2673668765ffc88ba72e17ac64ae500e578d370846->enter($__internal_91401ae77a6b646ef92c9f2673668765ffc88ba72e17ac64ae500e578d370846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4b6115b4587b33bcbfed271c123cd6df832abc0601a28a69e71ff176646e8bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6115b4587b33bcbfed271c123cd6df832abc0601a28a69e71ff176646e8bfb->enter($__internal_4b6115b4587b33bcbfed271c123cd6df832abc0601a28a69e71ff176646e8bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_91401ae77a6b646ef92c9f2673668765ffc88ba72e17ac64ae500e578d370846->leave($__internal_91401ae77a6b646ef92c9f2673668765ffc88ba72e17ac64ae500e578d370846_prof);

        
        $__internal_4b6115b4587b33bcbfed271c123cd6df832abc0601a28a69e71ff176646e8bfb->leave($__internal_4b6115b4587b33bcbfed271c123cd6df832abc0601a28a69e71ff176646e8bfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
