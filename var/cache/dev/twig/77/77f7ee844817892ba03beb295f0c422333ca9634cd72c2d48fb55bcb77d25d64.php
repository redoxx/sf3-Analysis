<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_77592cf5c9018a7de15c91df1d85ebd37ab02e8d9875291473e852bc528f869d extends Twig_Template
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
        $__internal_e747064d031648a3a78a8d46460246b308785a8d850b40c5d4579ff8a59d6c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e747064d031648a3a78a8d46460246b308785a8d850b40c5d4579ff8a59d6c6b->enter($__internal_e747064d031648a3a78a8d46460246b308785a8d850b40c5d4579ff8a59d6c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_360ecd2f30a7dff72474a057e71fac0d5426f4687543070b9089ba17b2e22198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360ecd2f30a7dff72474a057e71fac0d5426f4687543070b9089ba17b2e22198->enter($__internal_360ecd2f30a7dff72474a057e71fac0d5426f4687543070b9089ba17b2e22198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e747064d031648a3a78a8d46460246b308785a8d850b40c5d4579ff8a59d6c6b->leave($__internal_e747064d031648a3a78a8d46460246b308785a8d850b40c5d4579ff8a59d6c6b_prof);

        
        $__internal_360ecd2f30a7dff72474a057e71fac0d5426f4687543070b9089ba17b2e22198->leave($__internal_360ecd2f30a7dff72474a057e71fac0d5426f4687543070b9089ba17b2e22198_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
