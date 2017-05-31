<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_39e4bbf522a1387e253091922e9aa913af61dd235e52029e7ab1483d7fcfcf11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58d6504f19de8bcd3cf44a29409eadbb31600a7e0c7d7d3993947f11ed595c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d6504f19de8bcd3cf44a29409eadbb31600a7e0c7d7d3993947f11ed595c45->enter($__internal_58d6504f19de8bcd3cf44a29409eadbb31600a7e0c7d7d3993947f11ed595c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3326a2e741c125cbf262a20c176f2c2419a8d39666e31795114080862d9185f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3326a2e741c125cbf262a20c176f2c2419a8d39666e31795114080862d9185f0->enter($__internal_3326a2e741c125cbf262a20c176f2c2419a8d39666e31795114080862d9185f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d6504f19de8bcd3cf44a29409eadbb31600a7e0c7d7d3993947f11ed595c45->leave($__internal_58d6504f19de8bcd3cf44a29409eadbb31600a7e0c7d7d3993947f11ed595c45_prof);

        
        $__internal_3326a2e741c125cbf262a20c176f2c2419a8d39666e31795114080862d9185f0->leave($__internal_3326a2e741c125cbf262a20c176f2c2419a8d39666e31795114080862d9185f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e918a753592a8f303fe0aad4218ce3cc02cc1160ab9eb9e7f8490e59231d0865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e918a753592a8f303fe0aad4218ce3cc02cc1160ab9eb9e7f8490e59231d0865->enter($__internal_e918a753592a8f303fe0aad4218ce3cc02cc1160ab9eb9e7f8490e59231d0865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2933bb679e6a2974261ea18d46f1166f7c91bdccc65abf1e6d8d554276eb6e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2933bb679e6a2974261ea18d46f1166f7c91bdccc65abf1e6d8d554276eb6e75->enter($__internal_2933bb679e6a2974261ea18d46f1166f7c91bdccc65abf1e6d8d554276eb6e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2933bb679e6a2974261ea18d46f1166f7c91bdccc65abf1e6d8d554276eb6e75->leave($__internal_2933bb679e6a2974261ea18d46f1166f7c91bdccc65abf1e6d8d554276eb6e75_prof);

        
        $__internal_e918a753592a8f303fe0aad4218ce3cc02cc1160ab9eb9e7f8490e59231d0865->leave($__internal_e918a753592a8f303fe0aad4218ce3cc02cc1160ab9eb9e7f8490e59231d0865_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf5cb0aed3ac8610a71ed6a0319c67aa009c60f01123ae5fcec78a582d4d77bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5cb0aed3ac8610a71ed6a0319c67aa009c60f01123ae5fcec78a582d4d77bf->enter($__internal_bf5cb0aed3ac8610a71ed6a0319c67aa009c60f01123ae5fcec78a582d4d77bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_485a8d50a55f62743290139d3e81a12384af879b81840423c52745f5b34f63a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485a8d50a55f62743290139d3e81a12384af879b81840423c52745f5b34f63a4->enter($__internal_485a8d50a55f62743290139d3e81a12384af879b81840423c52745f5b34f63a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_485a8d50a55f62743290139d3e81a12384af879b81840423c52745f5b34f63a4->leave($__internal_485a8d50a55f62743290139d3e81a12384af879b81840423c52745f5b34f63a4_prof);

        
        $__internal_bf5cb0aed3ac8610a71ed6a0319c67aa009c60f01123ae5fcec78a582d4d77bf->leave($__internal_bf5cb0aed3ac8610a71ed6a0319c67aa009c60f01123ae5fcec78a582d4d77bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8bf96dfdfdf6c55b181e7d212b1b556258fd1d9c6b3499e0b2410cba2935c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bf96dfdfdf6c55b181e7d212b1b556258fd1d9c6b3499e0b2410cba2935c40->enter($__internal_b8bf96dfdfdf6c55b181e7d212b1b556258fd1d9c6b3499e0b2410cba2935c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e7f77808c81166032e6fe2fa9266effcc51444889cafaedf02ac40b123e32db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7f77808c81166032e6fe2fa9266effcc51444889cafaedf02ac40b123e32db->enter($__internal_3e7f77808c81166032e6fe2fa9266effcc51444889cafaedf02ac40b123e32db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e7f77808c81166032e6fe2fa9266effcc51444889cafaedf02ac40b123e32db->leave($__internal_3e7f77808c81166032e6fe2fa9266effcc51444889cafaedf02ac40b123e32db_prof);

        
        $__internal_b8bf96dfdfdf6c55b181e7d212b1b556258fd1d9c6b3499e0b2410cba2935c40->leave($__internal_b8bf96dfdfdf6c55b181e7d212b1b556258fd1d9c6b3499e0b2410cba2935c40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
