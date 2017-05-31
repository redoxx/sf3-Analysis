<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6c5a3cf427f1d31e34221b8b87ab03fb3d79c79fbee4ae85624680fe8edc30ba extends Twig_Template
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
        $__internal_16b5a64d2b6639520dee3c3a5ddb1d7af26e7f3befceb169451ef531ca7ddbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b5a64d2b6639520dee3c3a5ddb1d7af26e7f3befceb169451ef531ca7ddbaf->enter($__internal_16b5a64d2b6639520dee3c3a5ddb1d7af26e7f3befceb169451ef531ca7ddbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e6ed096bef1547e5fc9bf66f61f83a36d7b5b6444e344a2143c7c0808552be93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ed096bef1547e5fc9bf66f61f83a36d7b5b6444e344a2143c7c0808552be93->enter($__internal_e6ed096bef1547e5fc9bf66f61f83a36d7b5b6444e344a2143c7c0808552be93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_16b5a64d2b6639520dee3c3a5ddb1d7af26e7f3befceb169451ef531ca7ddbaf->leave($__internal_16b5a64d2b6639520dee3c3a5ddb1d7af26e7f3befceb169451ef531ca7ddbaf_prof);

        
        $__internal_e6ed096bef1547e5fc9bf66f61f83a36d7b5b6444e344a2143c7c0808552be93->leave($__internal_e6ed096bef1547e5fc9bf66f61f83a36d7b5b6444e344a2143c7c0808552be93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
