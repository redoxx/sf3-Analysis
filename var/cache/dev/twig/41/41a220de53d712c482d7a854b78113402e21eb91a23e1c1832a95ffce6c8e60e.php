<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_18ad350cb2f710d34d5d68be25c589d1f8e65283854879f6adc70761b96164e8 extends Twig_Template
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
        $__internal_6d9126fa1eb216c602f9417e765c21922c59b2e4e00cff4834a4797e67d22640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9126fa1eb216c602f9417e765c21922c59b2e4e00cff4834a4797e67d22640->enter($__internal_6d9126fa1eb216c602f9417e765c21922c59b2e4e00cff4834a4797e67d22640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_a7316301e5ad8f859dc20ee9df3204318e6ee30b4581587a0fce359bb37a8afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7316301e5ad8f859dc20ee9df3204318e6ee30b4581587a0fce359bb37a8afa->enter($__internal_a7316301e5ad8f859dc20ee9df3204318e6ee30b4581587a0fce359bb37a8afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6d9126fa1eb216c602f9417e765c21922c59b2e4e00cff4834a4797e67d22640->leave($__internal_6d9126fa1eb216c602f9417e765c21922c59b2e4e00cff4834a4797e67d22640_prof);

        
        $__internal_a7316301e5ad8f859dc20ee9df3204318e6ee30b4581587a0fce359bb37a8afa->leave($__internal_a7316301e5ad8f859dc20ee9df3204318e6ee30b4581587a0fce359bb37a8afa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
