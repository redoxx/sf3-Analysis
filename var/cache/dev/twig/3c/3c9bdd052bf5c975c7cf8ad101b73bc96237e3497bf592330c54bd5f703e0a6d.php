<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c6a81958f7674fa2cbb99bb3396a4508074077792b58dcfce12578299549ca8d extends Twig_Template
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
        $__internal_0d496a4a4557a1245ea48b81bba9db52de785dff7bfc07515eaeb493b3add1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d496a4a4557a1245ea48b81bba9db52de785dff7bfc07515eaeb493b3add1d7->enter($__internal_0d496a4a4557a1245ea48b81bba9db52de785dff7bfc07515eaeb493b3add1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_634789c4483a7a5a24cb73499a7f9ba05db7d5070fefab84ac6c81fae66b0fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634789c4483a7a5a24cb73499a7f9ba05db7d5070fefab84ac6c81fae66b0fc9->enter($__internal_634789c4483a7a5a24cb73499a7f9ba05db7d5070fefab84ac6c81fae66b0fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0d496a4a4557a1245ea48b81bba9db52de785dff7bfc07515eaeb493b3add1d7->leave($__internal_0d496a4a4557a1245ea48b81bba9db52de785dff7bfc07515eaeb493b3add1d7_prof);

        
        $__internal_634789c4483a7a5a24cb73499a7f9ba05db7d5070fefab84ac6c81fae66b0fc9->leave($__internal_634789c4483a7a5a24cb73499a7f9ba05db7d5070fefab84ac6c81fae66b0fc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
