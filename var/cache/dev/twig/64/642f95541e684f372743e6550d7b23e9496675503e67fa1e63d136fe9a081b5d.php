<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_439741f7331cf652fb072ff1c05cfe866fa5c95522ca5d4fb23c11adc46791a0 extends Twig_Template
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
        $__internal_7258c459d78db3a32ec27e3f6761504ed900268adea598c6544abb009a32d9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7258c459d78db3a32ec27e3f6761504ed900268adea598c6544abb009a32d9e1->enter($__internal_7258c459d78db3a32ec27e3f6761504ed900268adea598c6544abb009a32d9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8d262d7b89b1902e88937bec2c0df6b1f55b65801bda6fb4554f158e13aaa78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d262d7b89b1902e88937bec2c0df6b1f55b65801bda6fb4554f158e13aaa78a->enter($__internal_8d262d7b89b1902e88937bec2c0df6b1f55b65801bda6fb4554f158e13aaa78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7258c459d78db3a32ec27e3f6761504ed900268adea598c6544abb009a32d9e1->leave($__internal_7258c459d78db3a32ec27e3f6761504ed900268adea598c6544abb009a32d9e1_prof);

        
        $__internal_8d262d7b89b1902e88937bec2c0df6b1f55b65801bda6fb4554f158e13aaa78a->leave($__internal_8d262d7b89b1902e88937bec2c0df6b1f55b65801bda6fb4554f158e13aaa78a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
