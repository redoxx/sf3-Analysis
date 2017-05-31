<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_eab17a1c80bca9ca888cdafb3ef66b94340f32eec1b488ab917439e32d4849c7 extends Twig_Template
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
        $__internal_7c9a05d42e44332fcd8d4920e92751d54097dc25932eb2559072ac2a67529d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9a05d42e44332fcd8d4920e92751d54097dc25932eb2559072ac2a67529d7a->enter($__internal_7c9a05d42e44332fcd8d4920e92751d54097dc25932eb2559072ac2a67529d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_dd068ee8e1e9b60461aebd1eeadcd9faab4f69a8002a9d4c73c35e6c9ce7ea34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd068ee8e1e9b60461aebd1eeadcd9faab4f69a8002a9d4c73c35e6c9ce7ea34->enter($__internal_dd068ee8e1e9b60461aebd1eeadcd9faab4f69a8002a9d4c73c35e6c9ce7ea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7c9a05d42e44332fcd8d4920e92751d54097dc25932eb2559072ac2a67529d7a->leave($__internal_7c9a05d42e44332fcd8d4920e92751d54097dc25932eb2559072ac2a67529d7a_prof);

        
        $__internal_dd068ee8e1e9b60461aebd1eeadcd9faab4f69a8002a9d4c73c35e6c9ce7ea34->leave($__internal_dd068ee8e1e9b60461aebd1eeadcd9faab4f69a8002a9d4c73c35e6c9ce7ea34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
