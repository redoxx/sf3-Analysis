<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4a25283b267ae7b900bdcf722bfb7408bf3cc8c1e3dde0a193ef2c222a03cb20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5864817ab67edefdc2908c6cd8e9f95951843e56dbc9a2c56b57a58e0f60b01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5864817ab67edefdc2908c6cd8e9f95951843e56dbc9a2c56b57a58e0f60b01c->enter($__internal_5864817ab67edefdc2908c6cd8e9f95951843e56dbc9a2c56b57a58e0f60b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f3629889375d29788636b77e7d2fbf5f7ec03e907ec9900e4fce14b2d443a7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3629889375d29788636b77e7d2fbf5f7ec03e907ec9900e4fce14b2d443a7c8->enter($__internal_f3629889375d29788636b77e7d2fbf5f7ec03e907ec9900e4fce14b2d443a7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5864817ab67edefdc2908c6cd8e9f95951843e56dbc9a2c56b57a58e0f60b01c->leave($__internal_5864817ab67edefdc2908c6cd8e9f95951843e56dbc9a2c56b57a58e0f60b01c_prof);

        
        $__internal_f3629889375d29788636b77e7d2fbf5f7ec03e907ec9900e4fce14b2d443a7c8->leave($__internal_f3629889375d29788636b77e7d2fbf5f7ec03e907ec9900e4fce14b2d443a7c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca5a9392aca82549ae98800a803cd46e0f932ceb3b5159cb857c0be6bda3c3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5a9392aca82549ae98800a803cd46e0f932ceb3b5159cb857c0be6bda3c3e4->enter($__internal_ca5a9392aca82549ae98800a803cd46e0f932ceb3b5159cb857c0be6bda3c3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c16b16791b4add2b9fe74cec9819b7110080e7d50a051ce6f22ff087f211e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c16b16791b4add2b9fe74cec9819b7110080e7d50a051ce6f22ff087f211e91->enter($__internal_7c16b16791b4add2b9fe74cec9819b7110080e7d50a051ce6f22ff087f211e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7c16b16791b4add2b9fe74cec9819b7110080e7d50a051ce6f22ff087f211e91->leave($__internal_7c16b16791b4add2b9fe74cec9819b7110080e7d50a051ce6f22ff087f211e91_prof);

        
        $__internal_ca5a9392aca82549ae98800a803cd46e0f932ceb3b5159cb857c0be6bda3c3e4->leave($__internal_ca5a9392aca82549ae98800a803cd46e0f932ceb3b5159cb857c0be6bda3c3e4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e57637a03387687b13ae4708d01fbd6dcdf8058edd5456b8690ae3c4b1d3bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e57637a03387687b13ae4708d01fbd6dcdf8058edd5456b8690ae3c4b1d3bb1->enter($__internal_9e57637a03387687b13ae4708d01fbd6dcdf8058edd5456b8690ae3c4b1d3bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4f298c5690dc2ef2891759aa42e5bff2e4b4c81ae90defdd5f073c7fae6d8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f298c5690dc2ef2891759aa42e5bff2e4b4c81ae90defdd5f073c7fae6d8b7->enter($__internal_d4f298c5690dc2ef2891759aa42e5bff2e4b4c81ae90defdd5f073c7fae6d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d4f298c5690dc2ef2891759aa42e5bff2e4b4c81ae90defdd5f073c7fae6d8b7->leave($__internal_d4f298c5690dc2ef2891759aa42e5bff2e4b4c81ae90defdd5f073c7fae6d8b7_prof);

        
        $__internal_9e57637a03387687b13ae4708d01fbd6dcdf8058edd5456b8690ae3c4b1d3bb1->leave($__internal_9e57637a03387687b13ae4708d01fbd6dcdf8058edd5456b8690ae3c4b1d3bb1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}