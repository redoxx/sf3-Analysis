<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_837e1f9ec2b46d0d1c2701c7886ed5fa85dfd53ddd8e73fe8319be7a20ff435f extends Twig_Template
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
        $__internal_f65f374408244f3256184871e0e9470a4628402a47f5e44f2a0be9d59e22cb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65f374408244f3256184871e0e9470a4628402a47f5e44f2a0be9d59e22cb31->enter($__internal_f65f374408244f3256184871e0e9470a4628402a47f5e44f2a0be9d59e22cb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f0a874ca8b37b596358b796593f9fc812c54bcaefa684763ba2492ed7ae7996f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a874ca8b37b596358b796593f9fc812c54bcaefa684763ba2492ed7ae7996f->enter($__internal_f0a874ca8b37b596358b796593f9fc812c54bcaefa684763ba2492ed7ae7996f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f65f374408244f3256184871e0e9470a4628402a47f5e44f2a0be9d59e22cb31->leave($__internal_f65f374408244f3256184871e0e9470a4628402a47f5e44f2a0be9d59e22cb31_prof);

        
        $__internal_f0a874ca8b37b596358b796593f9fc812c54bcaefa684763ba2492ed7ae7996f->leave($__internal_f0a874ca8b37b596358b796593f9fc812c54bcaefa684763ba2492ed7ae7996f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
