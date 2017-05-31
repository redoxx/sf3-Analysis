<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e3d5515db61cb50a08468aba1e1cf75028d4031d98ad83f3461793d8382f74be extends Twig_Template
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
        $__internal_5251eef5e5cf6c9597e5940454bc2922ef0d5e323f10ff09589678fdd9567ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5251eef5e5cf6c9597e5940454bc2922ef0d5e323f10ff09589678fdd9567ebf->enter($__internal_5251eef5e5cf6c9597e5940454bc2922ef0d5e323f10ff09589678fdd9567ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_997afc963fd58c062ab2051b9273966b1c95904ec1fb0d6020d466c85933a635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997afc963fd58c062ab2051b9273966b1c95904ec1fb0d6020d466c85933a635->enter($__internal_997afc963fd58c062ab2051b9273966b1c95904ec1fb0d6020d466c85933a635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5251eef5e5cf6c9597e5940454bc2922ef0d5e323f10ff09589678fdd9567ebf->leave($__internal_5251eef5e5cf6c9597e5940454bc2922ef0d5e323f10ff09589678fdd9567ebf_prof);

        
        $__internal_997afc963fd58c062ab2051b9273966b1c95904ec1fb0d6020d466c85933a635->leave($__internal_997afc963fd58c062ab2051b9273966b1c95904ec1fb0d6020d466c85933a635_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
