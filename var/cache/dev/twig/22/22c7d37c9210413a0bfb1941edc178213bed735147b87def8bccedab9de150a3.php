<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_21f74a6c071c98512382758407e33464079b41bb7fae9cfdc8a49f95c7412eaf extends Twig_Template
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
        $__internal_ede16905e9ca3468c16e82a79e2db0207ff59c2aa44602d9959fb033c033ef1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede16905e9ca3468c16e82a79e2db0207ff59c2aa44602d9959fb033c033ef1a->enter($__internal_ede16905e9ca3468c16e82a79e2db0207ff59c2aa44602d9959fb033c033ef1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_28b72b303b090123f867afd5b8150a15ed1d4f1fe3b0e575676c6b72e1f121c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b72b303b090123f867afd5b8150a15ed1d4f1fe3b0e575676c6b72e1f121c6->enter($__internal_28b72b303b090123f867afd5b8150a15ed1d4f1fe3b0e575676c6b72e1f121c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ede16905e9ca3468c16e82a79e2db0207ff59c2aa44602d9959fb033c033ef1a->leave($__internal_ede16905e9ca3468c16e82a79e2db0207ff59c2aa44602d9959fb033c033ef1a_prof);

        
        $__internal_28b72b303b090123f867afd5b8150a15ed1d4f1fe3b0e575676c6b72e1f121c6->leave($__internal_28b72b303b090123f867afd5b8150a15ed1d4f1fe3b0e575676c6b72e1f121c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
