<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4518fdb2eff00c5446146901612372b44f9f7b414af26a616d0ba76502129938 extends Twig_Template
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
        $__internal_d63a98d47a28590d8f895c5ab8509331d621eb768d5ebb1c8b93898b625c9692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63a98d47a28590d8f895c5ab8509331d621eb768d5ebb1c8b93898b625c9692->enter($__internal_d63a98d47a28590d8f895c5ab8509331d621eb768d5ebb1c8b93898b625c9692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9eafb5342a20adb3ce875a8034e84e7c5cec6b3eb13b75d7e3daf0c4423e7316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eafb5342a20adb3ce875a8034e84e7c5cec6b3eb13b75d7e3daf0c4423e7316->enter($__internal_9eafb5342a20adb3ce875a8034e84e7c5cec6b3eb13b75d7e3daf0c4423e7316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d63a98d47a28590d8f895c5ab8509331d621eb768d5ebb1c8b93898b625c9692->leave($__internal_d63a98d47a28590d8f895c5ab8509331d621eb768d5ebb1c8b93898b625c9692_prof);

        
        $__internal_9eafb5342a20adb3ce875a8034e84e7c5cec6b3eb13b75d7e3daf0c4423e7316->leave($__internal_9eafb5342a20adb3ce875a8034e84e7c5cec6b3eb13b75d7e3daf0c4423e7316_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
