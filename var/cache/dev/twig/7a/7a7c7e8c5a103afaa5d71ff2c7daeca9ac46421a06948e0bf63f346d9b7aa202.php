<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ed7ff168de9a91f4b626e25df70442d6df858fcf6b536a9abc8fdd0bac8e162e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cb8017501a0243a50b19cc917853aba68d9bfd2fded81a6927a050251ffae7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb8017501a0243a50b19cc917853aba68d9bfd2fded81a6927a050251ffae7b->enter($__internal_0cb8017501a0243a50b19cc917853aba68d9bfd2fded81a6927a050251ffae7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b8bd58d8127163e4506021dccc3bf4b1b69a0c587c0df36cd52dc0c05a775b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bd58d8127163e4506021dccc3bf4b1b69a0c587c0df36cd52dc0c05a775b55->enter($__internal_b8bd58d8127163e4506021dccc3bf4b1b69a0c587c0df36cd52dc0c05a775b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb8017501a0243a50b19cc917853aba68d9bfd2fded81a6927a050251ffae7b->leave($__internal_0cb8017501a0243a50b19cc917853aba68d9bfd2fded81a6927a050251ffae7b_prof);

        
        $__internal_b8bd58d8127163e4506021dccc3bf4b1b69a0c587c0df36cd52dc0c05a775b55->leave($__internal_b8bd58d8127163e4506021dccc3bf4b1b69a0c587c0df36cd52dc0c05a775b55_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cdcaeddcc4f13f6a2828ecb7c0e336bf7aef8e0e2cb3d832da350b6b7ce7195e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcaeddcc4f13f6a2828ecb7c0e336bf7aef8e0e2cb3d832da350b6b7ce7195e->enter($__internal_cdcaeddcc4f13f6a2828ecb7c0e336bf7aef8e0e2cb3d832da350b6b7ce7195e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1d5ec18bd671dd9a80c2a082689e07c69f74608497c4cf31243f4560aa97de57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5ec18bd671dd9a80c2a082689e07c69f74608497c4cf31243f4560aa97de57->enter($__internal_1d5ec18bd671dd9a80c2a082689e07c69f74608497c4cf31243f4560aa97de57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1d5ec18bd671dd9a80c2a082689e07c69f74608497c4cf31243f4560aa97de57->leave($__internal_1d5ec18bd671dd9a80c2a082689e07c69f74608497c4cf31243f4560aa97de57_prof);

        
        $__internal_cdcaeddcc4f13f6a2828ecb7c0e336bf7aef8e0e2cb3d832da350b6b7ce7195e->leave($__internal_cdcaeddcc4f13f6a2828ecb7c0e336bf7aef8e0e2cb3d832da350b6b7ce7195e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53407d37cf19f12a5803f0be7b979bfcccb86ebd2740e00868693f6e67ecaace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53407d37cf19f12a5803f0be7b979bfcccb86ebd2740e00868693f6e67ecaace->enter($__internal_53407d37cf19f12a5803f0be7b979bfcccb86ebd2740e00868693f6e67ecaace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa62175196179a029e9bc8d55dfb4b9205fe75cd5c448090974c3c55254a03be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa62175196179a029e9bc8d55dfb4b9205fe75cd5c448090974c3c55254a03be->enter($__internal_aa62175196179a029e9bc8d55dfb4b9205fe75cd5c448090974c3c55254a03be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_aa62175196179a029e9bc8d55dfb4b9205fe75cd5c448090974c3c55254a03be->leave($__internal_aa62175196179a029e9bc8d55dfb4b9205fe75cd5c448090974c3c55254a03be_prof);

        
        $__internal_53407d37cf19f12a5803f0be7b979bfcccb86ebd2740e00868693f6e67ecaace->leave($__internal_53407d37cf19f12a5803f0be7b979bfcccb86ebd2740e00868693f6e67ecaace_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
