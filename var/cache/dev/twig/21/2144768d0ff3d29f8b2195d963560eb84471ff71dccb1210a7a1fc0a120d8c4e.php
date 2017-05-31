<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0089d6df3477f4ca772762baeeae15d4740844e99411946ef9a2783f9137712a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_037b91f6b810e65bb04a10454ac5c092c3032ac7aa01994d7107492fdbf87c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037b91f6b810e65bb04a10454ac5c092c3032ac7aa01994d7107492fdbf87c21->enter($__internal_037b91f6b810e65bb04a10454ac5c092c3032ac7aa01994d7107492fdbf87c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4599415eac3ae7e28e7f5a808995f8c7b75144f26104403f336febacd5390134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4599415eac3ae7e28e7f5a808995f8c7b75144f26104403f336febacd5390134->enter($__internal_4599415eac3ae7e28e7f5a808995f8c7b75144f26104403f336febacd5390134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037b91f6b810e65bb04a10454ac5c092c3032ac7aa01994d7107492fdbf87c21->leave($__internal_037b91f6b810e65bb04a10454ac5c092c3032ac7aa01994d7107492fdbf87c21_prof);

        
        $__internal_4599415eac3ae7e28e7f5a808995f8c7b75144f26104403f336febacd5390134->leave($__internal_4599415eac3ae7e28e7f5a808995f8c7b75144f26104403f336febacd5390134_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97eb28953a43c894f0342d4550b48dc1de4e52011212233a6f0b41cd331bb41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97eb28953a43c894f0342d4550b48dc1de4e52011212233a6f0b41cd331bb41c->enter($__internal_97eb28953a43c894f0342d4550b48dc1de4e52011212233a6f0b41cd331bb41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bda8a1c3ee32e3ac946760869aac201a8ae45b2b43306f7db9ac57d5ae626f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda8a1c3ee32e3ac946760869aac201a8ae45b2b43306f7db9ac57d5ae626f53->enter($__internal_bda8a1c3ee32e3ac946760869aac201a8ae45b2b43306f7db9ac57d5ae626f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bda8a1c3ee32e3ac946760869aac201a8ae45b2b43306f7db9ac57d5ae626f53->leave($__internal_bda8a1c3ee32e3ac946760869aac201a8ae45b2b43306f7db9ac57d5ae626f53_prof);

        
        $__internal_97eb28953a43c894f0342d4550b48dc1de4e52011212233a6f0b41cd331bb41c->leave($__internal_97eb28953a43c894f0342d4550b48dc1de4e52011212233a6f0b41cd331bb41c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bed6f0f112fe12e0d1d820365fdad8a6afc6a83019afa6dddbcbbb41ade04a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bed6f0f112fe12e0d1d820365fdad8a6afc6a83019afa6dddbcbbb41ade04a6->enter($__internal_0bed6f0f112fe12e0d1d820365fdad8a6afc6a83019afa6dddbcbbb41ade04a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cc548b342cc214ccaeeb0e3ff4d20a97094c63af2628f22fa75c61c73b5d41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc548b342cc214ccaeeb0e3ff4d20a97094c63af2628f22fa75c61c73b5d41f->enter($__internal_0cc548b342cc214ccaeeb0e3ff4d20a97094c63af2628f22fa75c61c73b5d41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0cc548b342cc214ccaeeb0e3ff4d20a97094c63af2628f22fa75c61c73b5d41f->leave($__internal_0cc548b342cc214ccaeeb0e3ff4d20a97094c63af2628f22fa75c61c73b5d41f_prof);

        
        $__internal_0bed6f0f112fe12e0d1d820365fdad8a6afc6a83019afa6dddbcbbb41ade04a6->leave($__internal_0bed6f0f112fe12e0d1d820365fdad8a6afc6a83019afa6dddbcbbb41ade04a6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
