<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_31ebcc5e149ea889a457c2787687fe9c09b5a7c17577718ebab591a584acd1e9 extends Twig_Template
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
        $__internal_4ef27591ec22caf28bdb2a6489d79b0e7247b28c46b9dc4af0a38f2848ea7903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef27591ec22caf28bdb2a6489d79b0e7247b28c46b9dc4af0a38f2848ea7903->enter($__internal_4ef27591ec22caf28bdb2a6489d79b0e7247b28c46b9dc4af0a38f2848ea7903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9da759c6fcb433229d1100c6cf887ff1615a0fb9fe96d53b629930d8d416b213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da759c6fcb433229d1100c6cf887ff1615a0fb9fe96d53b629930d8d416b213->enter($__internal_9da759c6fcb433229d1100c6cf887ff1615a0fb9fe96d53b629930d8d416b213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4ef27591ec22caf28bdb2a6489d79b0e7247b28c46b9dc4af0a38f2848ea7903->leave($__internal_4ef27591ec22caf28bdb2a6489d79b0e7247b28c46b9dc4af0a38f2848ea7903_prof);

        
        $__internal_9da759c6fcb433229d1100c6cf887ff1615a0fb9fe96d53b629930d8d416b213->leave($__internal_9da759c6fcb433229d1100c6cf887ff1615a0fb9fe96d53b629930d8d416b213_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
