<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5eff8d37f07e20cb5ce5caa6455e6e49a704500657efa9dd3e3ec43f55d40be2 extends Twig_Template
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
        $__internal_93f415bc539be0543626c03c11ca044e992dc959a7fc9722f52c75cb3effd325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f415bc539be0543626c03c11ca044e992dc959a7fc9722f52c75cb3effd325->enter($__internal_93f415bc539be0543626c03c11ca044e992dc959a7fc9722f52c75cb3effd325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_931dc38b48052485534aaf448e2436d3a073580733b1858aeee43c92d7c7f1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931dc38b48052485534aaf448e2436d3a073580733b1858aeee43c92d7c7f1e5->enter($__internal_931dc38b48052485534aaf448e2436d3a073580733b1858aeee43c92d7c7f1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_93f415bc539be0543626c03c11ca044e992dc959a7fc9722f52c75cb3effd325->leave($__internal_93f415bc539be0543626c03c11ca044e992dc959a7fc9722f52c75cb3effd325_prof);

        
        $__internal_931dc38b48052485534aaf448e2436d3a073580733b1858aeee43c92d7c7f1e5->leave($__internal_931dc38b48052485534aaf448e2436d3a073580733b1858aeee43c92d7c7f1e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
