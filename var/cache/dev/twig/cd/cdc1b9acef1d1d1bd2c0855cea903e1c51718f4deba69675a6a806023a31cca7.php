<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9658f4dcca635c1f0aff318d7790c71f65986643a65af662f7aa8c58d82eb381 extends Twig_Template
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
        $__internal_f319d52e5259a3778cd48ca9d0057d7f20de6740143c1276bc479d1351558ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f319d52e5259a3778cd48ca9d0057d7f20de6740143c1276bc479d1351558ff4->enter($__internal_f319d52e5259a3778cd48ca9d0057d7f20de6740143c1276bc479d1351558ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_aac6a5b5c5d9d6ffb6fe73cf060263916f74945ab9c2ce08e14ed5f1dd131dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac6a5b5c5d9d6ffb6fe73cf060263916f74945ab9c2ce08e14ed5f1dd131dea->enter($__internal_aac6a5b5c5d9d6ffb6fe73cf060263916f74945ab9c2ce08e14ed5f1dd131dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f319d52e5259a3778cd48ca9d0057d7f20de6740143c1276bc479d1351558ff4->leave($__internal_f319d52e5259a3778cd48ca9d0057d7f20de6740143c1276bc479d1351558ff4_prof);

        
        $__internal_aac6a5b5c5d9d6ffb6fe73cf060263916f74945ab9c2ce08e14ed5f1dd131dea->leave($__internal_aac6a5b5c5d9d6ffb6fe73cf060263916f74945ab9c2ce08e14ed5f1dd131dea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
