<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_53026bc36df2d2ef2e8aa2a4434dfeea6891b1ea72712b344ca66d2813e1aab7 extends Twig_Template
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
        $__internal_a406f7c54a3e7f4c944d9b04d62b81ba306596fee79b8ccc3ea118199e8c5312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a406f7c54a3e7f4c944d9b04d62b81ba306596fee79b8ccc3ea118199e8c5312->enter($__internal_a406f7c54a3e7f4c944d9b04d62b81ba306596fee79b8ccc3ea118199e8c5312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dd94ab5ceef4cf4e7e1cc67aa064775fcae95464c91be2b1162a4bdfc01cfc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd94ab5ceef4cf4e7e1cc67aa064775fcae95464c91be2b1162a4bdfc01cfc9d->enter($__internal_dd94ab5ceef4cf4e7e1cc67aa064775fcae95464c91be2b1162a4bdfc01cfc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a406f7c54a3e7f4c944d9b04d62b81ba306596fee79b8ccc3ea118199e8c5312->leave($__internal_a406f7c54a3e7f4c944d9b04d62b81ba306596fee79b8ccc3ea118199e8c5312_prof);

        
        $__internal_dd94ab5ceef4cf4e7e1cc67aa064775fcae95464c91be2b1162a4bdfc01cfc9d->leave($__internal_dd94ab5ceef4cf4e7e1cc67aa064775fcae95464c91be2b1162a4bdfc01cfc9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
