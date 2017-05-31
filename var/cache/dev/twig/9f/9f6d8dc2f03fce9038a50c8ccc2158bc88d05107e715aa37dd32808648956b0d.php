<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_885edb56288f90610198e5da70edec9e06bc00983de6f7c405bd278d4f30454d extends Twig_Template
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
        $__internal_7a01fccd2ad5b5aa0cab79818d82951c4b28e4b6cecb61186a1e9d88f27c58c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a01fccd2ad5b5aa0cab79818d82951c4b28e4b6cecb61186a1e9d88f27c58c6->enter($__internal_7a01fccd2ad5b5aa0cab79818d82951c4b28e4b6cecb61186a1e9d88f27c58c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1b70b2722abfde6a9bb5142df1225ea6768c7bca8238b35dfedc336e40643e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b70b2722abfde6a9bb5142df1225ea6768c7bca8238b35dfedc336e40643e87->enter($__internal_1b70b2722abfde6a9bb5142df1225ea6768c7bca8238b35dfedc336e40643e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7a01fccd2ad5b5aa0cab79818d82951c4b28e4b6cecb61186a1e9d88f27c58c6->leave($__internal_7a01fccd2ad5b5aa0cab79818d82951c4b28e4b6cecb61186a1e9d88f27c58c6_prof);

        
        $__internal_1b70b2722abfde6a9bb5142df1225ea6768c7bca8238b35dfedc336e40643e87->leave($__internal_1b70b2722abfde6a9bb5142df1225ea6768c7bca8238b35dfedc336e40643e87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
