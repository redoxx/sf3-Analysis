<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9e5b1c57b9cab1a4fe00e56f2bfd8d9d48adff8a49b489e1264ff955b6167834 extends Twig_Template
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
        $__internal_73a1d41847599afc075c9533792f58aaaefaa9d5c49b412ea0577ff148d480e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a1d41847599afc075c9533792f58aaaefaa9d5c49b412ea0577ff148d480e6->enter($__internal_73a1d41847599afc075c9533792f58aaaefaa9d5c49b412ea0577ff148d480e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0514d31a0732c1b95d7dd9758c5370b4a655e1e74938fa9569656870d0622efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0514d31a0732c1b95d7dd9758c5370b4a655e1e74938fa9569656870d0622efd->enter($__internal_0514d31a0732c1b95d7dd9758c5370b4a655e1e74938fa9569656870d0622efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_73a1d41847599afc075c9533792f58aaaefaa9d5c49b412ea0577ff148d480e6->leave($__internal_73a1d41847599afc075c9533792f58aaaefaa9d5c49b412ea0577ff148d480e6_prof);

        
        $__internal_0514d31a0732c1b95d7dd9758c5370b4a655e1e74938fa9569656870d0622efd->leave($__internal_0514d31a0732c1b95d7dd9758c5370b4a655e1e74938fa9569656870d0622efd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
