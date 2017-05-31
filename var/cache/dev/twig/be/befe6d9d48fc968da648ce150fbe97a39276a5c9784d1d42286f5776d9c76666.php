<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4884d74972d7311e23708f1a3871a160e8f3a4c8ae8db85789098b9d404425d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b4eaf7735427b57260b3e8eff8a0ef4974cbbbf8a5e7aa71b4d53cb1fba4aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4eaf7735427b57260b3e8eff8a0ef4974cbbbf8a5e7aa71b4d53cb1fba4aba->enter($__internal_9b4eaf7735427b57260b3e8eff8a0ef4974cbbbf8a5e7aa71b4d53cb1fba4aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_85a5d4c2c3e555a152fde1301f9bb8ffe86b6f540d14e72ab45ed8c68c24c4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a5d4c2c3e555a152fde1301f9bb8ffe86b6f540d14e72ab45ed8c68c24c4e2->enter($__internal_85a5d4c2c3e555a152fde1301f9bb8ffe86b6f540d14e72ab45ed8c68c24c4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b4eaf7735427b57260b3e8eff8a0ef4974cbbbf8a5e7aa71b4d53cb1fba4aba->leave($__internal_9b4eaf7735427b57260b3e8eff8a0ef4974cbbbf8a5e7aa71b4d53cb1fba4aba_prof);

        
        $__internal_85a5d4c2c3e555a152fde1301f9bb8ffe86b6f540d14e72ab45ed8c68c24c4e2->leave($__internal_85a5d4c2c3e555a152fde1301f9bb8ffe86b6f540d14e72ab45ed8c68c24c4e2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a3b11af5c20311d0ed9965617a680ab2715a07d599baf20e5ad448f4e699822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3b11af5c20311d0ed9965617a680ab2715a07d599baf20e5ad448f4e699822->enter($__internal_5a3b11af5c20311d0ed9965617a680ab2715a07d599baf20e5ad448f4e699822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a32d4973a19187b04b172f45b36004d74d683a25028c231f6eb557800daddee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a32d4973a19187b04b172f45b36004d74d683a25028c231f6eb557800daddee->enter($__internal_7a32d4973a19187b04b172f45b36004d74d683a25028c231f6eb557800daddee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7a32d4973a19187b04b172f45b36004d74d683a25028c231f6eb557800daddee->leave($__internal_7a32d4973a19187b04b172f45b36004d74d683a25028c231f6eb557800daddee_prof);

        
        $__internal_5a3b11af5c20311d0ed9965617a680ab2715a07d599baf20e5ad448f4e699822->leave($__internal_5a3b11af5c20311d0ed9965617a680ab2715a07d599baf20e5ad448f4e699822_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
