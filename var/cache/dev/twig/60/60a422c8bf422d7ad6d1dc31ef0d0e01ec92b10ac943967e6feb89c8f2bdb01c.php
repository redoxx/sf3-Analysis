<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e9fb153f3a8ee3ec00121057de53e62047965a1fcde722d65ad3eaa97342487c extends Twig_Template
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
        $__internal_79be5ea42daa52e7464ce4d8d197a4908a20b755b941f0d0b71905bba5b991ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79be5ea42daa52e7464ce4d8d197a4908a20b755b941f0d0b71905bba5b991ab->enter($__internal_79be5ea42daa52e7464ce4d8d197a4908a20b755b941f0d0b71905bba5b991ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2d3d12d5144718c2d403ce75a485e9cd5515e8f1b970d61f268507d73f1cf6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3d12d5144718c2d403ce75a485e9cd5515e8f1b970d61f268507d73f1cf6b2->enter($__internal_2d3d12d5144718c2d403ce75a485e9cd5515e8f1b970d61f268507d73f1cf6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_79be5ea42daa52e7464ce4d8d197a4908a20b755b941f0d0b71905bba5b991ab->leave($__internal_79be5ea42daa52e7464ce4d8d197a4908a20b755b941f0d0b71905bba5b991ab_prof);

        
        $__internal_2d3d12d5144718c2d403ce75a485e9cd5515e8f1b970d61f268507d73f1cf6b2->leave($__internal_2d3d12d5144718c2d403ce75a485e9cd5515e8f1b970d61f268507d73f1cf6b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
