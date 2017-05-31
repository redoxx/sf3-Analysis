<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_fdeff2dacce9cff86db9bae3ee771699f74c377aa45a50c4967ce1a1b653b545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c28a6555cf22c8c1e2b374df43ab2a89a7b6ad72a81a4a983ae463d8672e56d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28a6555cf22c8c1e2b374df43ab2a89a7b6ad72a81a4a983ae463d8672e56d0->enter($__internal_c28a6555cf22c8c1e2b374df43ab2a89a7b6ad72a81a4a983ae463d8672e56d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $__internal_5555e432f8002f6d268aa98fa1d14df41988663413f641b9f4da6dad3f58505b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5555e432f8002f6d268aa98fa1d14df41988663413f641b9f4da6dad3f58505b->enter($__internal_5555e432f8002f6d268aa98fa1d14df41988663413f641b9f4da6dad3f58505b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28a6555cf22c8c1e2b374df43ab2a89a7b6ad72a81a4a983ae463d8672e56d0->leave($__internal_c28a6555cf22c8c1e2b374df43ab2a89a7b6ad72a81a4a983ae463d8672e56d0_prof);

        
        $__internal_5555e432f8002f6d268aa98fa1d14df41988663413f641b9f4da6dad3f58505b->leave($__internal_5555e432f8002f6d268aa98fa1d14df41988663413f641b9f4da6dad3f58505b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36deb8665cfd7909b7fcb22554769ab11fe62840b16ab27cf05e8de4220a5e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36deb8665cfd7909b7fcb22554769ab11fe62840b16ab27cf05e8de4220a5e55->enter($__internal_36deb8665cfd7909b7fcb22554769ab11fe62840b16ab27cf05e8de4220a5e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b875a845a81087e0cd9f318ce63fe66152686ec3a2721072f219eba8304bb2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b875a845a81087e0cd9f318ce63fe66152686ec3a2721072f219eba8304bb2dc->enter($__internal_b875a845a81087e0cd9f318ce63fe66152686ec3a2721072f219eba8304bb2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
 <h2>Hello World!</h2>
</div>

";
        
        $__internal_b875a845a81087e0cd9f318ce63fe66152686ec3a2721072f219eba8304bb2dc->leave($__internal_b875a845a81087e0cd9f318ce63fe66152686ec3a2721072f219eba8304bb2dc_prof);

        
        $__internal_36deb8665cfd7909b7fcb22554769ab11fe62840b16ab27cf05e8de4220a5e55->leave($__internal_36deb8665cfd7909b7fcb22554769ab11fe62840b16ab27cf05e8de4220a5e55_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
<div class=\"container\">
 <h2>Hello World!</h2>
</div>

{% endblock %}
", "MainBundle:Default:index.html.twig", "/var/www/myprojsf3/src/MyApp/MainBundle/Resources/views/Default/index.html.twig");
    }
}
