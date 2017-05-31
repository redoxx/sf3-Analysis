<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_8e313f06fd76fa992832c16749933b9e35527f180c7833fb9aa05308b1d95e4f extends Twig_Template
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
        $__internal_e74424a516c991386eac002d31a04e5923642bac2122b5a7d10432dfe8a05c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74424a516c991386eac002d31a04e5923642bac2122b5a7d10432dfe8a05c04->enter($__internal_e74424a516c991386eac002d31a04e5923642bac2122b5a7d10432dfe8a05c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_b2262244928cb68dddeda46c649562362da3a9e4f56677a3e82ac72c5a0d9374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2262244928cb68dddeda46c649562362da3a9e4f56677a3e82ac72c5a0d9374->enter($__internal_b2262244928cb68dddeda46c649562362da3a9e4f56677a3e82ac72c5a0d9374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "TwigBundle:Exception:exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e74424a516c991386eac002d31a04e5923642bac2122b5a7d10432dfe8a05c04->leave($__internal_e74424a516c991386eac002d31a04e5923642bac2122b5a7d10432dfe8a05c04_prof);

        
        $__internal_b2262244928cb68dddeda46c649562362da3a9e4f56677a3e82ac72c5a0d9374->leave($__internal_b2262244928cb68dddeda46c649562362da3a9e4f56677a3e82ac72c5a0d9374_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
