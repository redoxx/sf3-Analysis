<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_f7c734c64a325389e11a45b4172e06d5a3ff43b44eb7b1b4ba1b625882cd30f2 extends Twig_Template
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
        $__internal_d5363a43fd8a2c98b89f3a3b80626cb808819879b4e08adacc798ae33574aa49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5363a43fd8a2c98b89f3a3b80626cb808819879b4e08adacc798ae33574aa49->enter($__internal_d5363a43fd8a2c98b89f3a3b80626cb808819879b4e08adacc798ae33574aa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_64d08acb221974ac2ea209b5591a95d1a409d6e5d66301c3e96efe4ba360f4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d08acb221974ac2ea209b5591a95d1a409d6e5d66301c3e96efe4ba360f4d8->enter($__internal_64d08acb221974ac2ea209b5591a95d1a409d6e5d66301c3e96efe4ba360f4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d5363a43fd8a2c98b89f3a3b80626cb808819879b4e08adacc798ae33574aa49->leave($__internal_d5363a43fd8a2c98b89f3a3b80626cb808819879b4e08adacc798ae33574aa49_prof);

        
        $__internal_64d08acb221974ac2ea209b5591a95d1a409d6e5d66301c3e96efe4ba360f4d8->leave($__internal_64d08acb221974ac2ea209b5591a95d1a409d6e5d66301c3e96efe4ba360f4d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
