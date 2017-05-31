<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_015b6f714eaad4dba6d91fdafc520da10aecea24dbc4bf3a1409c547f8b1a8e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb59419207898cb8f68e2b28f6686f32980e785d9e690999e40545076efb4f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb59419207898cb8f68e2b28f6686f32980e785d9e690999e40545076efb4f23->enter($__internal_cb59419207898cb8f68e2b28f6686f32980e785d9e690999e40545076efb4f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_37424d30f7b6708ba94bc2c223142a2c144fdd2cafb617aea41648e54d33b57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37424d30f7b6708ba94bc2c223142a2c144fdd2cafb617aea41648e54d33b57f->enter($__internal_37424d30f7b6708ba94bc2c223142a2c144fdd2cafb617aea41648e54d33b57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb59419207898cb8f68e2b28f6686f32980e785d9e690999e40545076efb4f23->leave($__internal_cb59419207898cb8f68e2b28f6686f32980e785d9e690999e40545076efb4f23_prof);

        
        $__internal_37424d30f7b6708ba94bc2c223142a2c144fdd2cafb617aea41648e54d33b57f->leave($__internal_37424d30f7b6708ba94bc2c223142a2c144fdd2cafb617aea41648e54d33b57f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c798332e1389ae0995894c16b3800a9d2bfd851c929b204a57e63077031b735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c798332e1389ae0995894c16b3800a9d2bfd851c929b204a57e63077031b735->enter($__internal_8c798332e1389ae0995894c16b3800a9d2bfd851c929b204a57e63077031b735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2a9a0b505534eaae27a5f134e7eff0f6b5dd35d12f2c54a1861f321e161bf603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9a0b505534eaae27a5f134e7eff0f6b5dd35d12f2c54a1861f321e161bf603->enter($__internal_2a9a0b505534eaae27a5f134e7eff0f6b5dd35d12f2c54a1861f321e161bf603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2a9a0b505534eaae27a5f134e7eff0f6b5dd35d12f2c54a1861f321e161bf603->leave($__internal_2a9a0b505534eaae27a5f134e7eff0f6b5dd35d12f2c54a1861f321e161bf603_prof);

        
        $__internal_8c798332e1389ae0995894c16b3800a9d2bfd851c929b204a57e63077031b735->leave($__internal_8c798332e1389ae0995894c16b3800a9d2bfd851c929b204a57e63077031b735_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
