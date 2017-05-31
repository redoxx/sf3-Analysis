<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_48483138b03a046e09b378ce872765e55d76ace7dfb93a75646e286c5ae85708 extends Twig_Template
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
        $__internal_5312ce58ff20cf52e0278c99dc9b0acb82bedd6c630bac07e70f4271df4135ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5312ce58ff20cf52e0278c99dc9b0acb82bedd6c630bac07e70f4271df4135ec->enter($__internal_5312ce58ff20cf52e0278c99dc9b0acb82bedd6c630bac07e70f4271df4135ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9d0b78926aaf6a0bc8b99fe3caba42d34e001f67246ee75195a3144fcdffbc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0b78926aaf6a0bc8b99fe3caba42d34e001f67246ee75195a3144fcdffbc98->enter($__internal_9d0b78926aaf6a0bc8b99fe3caba42d34e001f67246ee75195a3144fcdffbc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5312ce58ff20cf52e0278c99dc9b0acb82bedd6c630bac07e70f4271df4135ec->leave($__internal_5312ce58ff20cf52e0278c99dc9b0acb82bedd6c630bac07e70f4271df4135ec_prof);

        
        $__internal_9d0b78926aaf6a0bc8b99fe3caba42d34e001f67246ee75195a3144fcdffbc98->leave($__internal_9d0b78926aaf6a0bc8b99fe3caba42d34e001f67246ee75195a3144fcdffbc98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
