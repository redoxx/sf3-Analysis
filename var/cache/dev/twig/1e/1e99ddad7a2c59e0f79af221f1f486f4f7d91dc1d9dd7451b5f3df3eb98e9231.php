<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_d9ab38dd55c7d31ae8b59688679159f10784009744538e06954fdad5aaba75a9 extends Twig_Template
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
        $__internal_e6ba1d5c45252e5eccf6ead07cb5e8f9fdb08d308b266bff3e816b593e22d487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ba1d5c45252e5eccf6ead07cb5e8f9fdb08d308b266bff3e816b593e22d487->enter($__internal_e6ba1d5c45252e5eccf6ead07cb5e8f9fdb08d308b266bff3e816b593e22d487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_cd1517f45d14c9559c1ac975d4e543d9195ff5f997202a4312589506d660bf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1517f45d14c9559c1ac975d4e543d9195ff5f997202a4312589506d660bf12->enter($__internal_cd1517f45d14c9559c1ac975d4e543d9195ff5f997202a4312589506d660bf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_e6ba1d5c45252e5eccf6ead07cb5e8f9fdb08d308b266bff3e816b593e22d487->leave($__internal_e6ba1d5c45252e5eccf6ead07cb5e8f9fdb08d308b266bff3e816b593e22d487_prof);

        
        $__internal_cd1517f45d14c9559c1ac975d4e543d9195ff5f997202a4312589506d660bf12->leave($__internal_cd1517f45d14c9559c1ac975d4e543d9195ff5f997202a4312589506d660bf12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
