<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_8fae7b8038264efb9cc2d8216b55f2cdf05df4d68c3e7d633e5537d1c615fe26 extends Twig_Template
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
        $__internal_8edf9cec224e1a965f5b8dc523de5a48496bc4324c6eb86fc17de16f65cbca35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edf9cec224e1a965f5b8dc523de5a48496bc4324c6eb86fc17de16f65cbca35->enter($__internal_8edf9cec224e1a965f5b8dc523de5a48496bc4324c6eb86fc17de16f65cbca35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_1619e8eab840d2bec98d298cedf8e40c1b327a1f5a89f1a4f5b6b756f561eae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1619e8eab840d2bec98d298cedf8e40c1b327a1f5a89f1a4f5b6b756f561eae0->enter($__internal_1619e8eab840d2bec98d298cedf8e40c1b327a1f5a89f1a4f5b6b756f561eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_8edf9cec224e1a965f5b8dc523de5a48496bc4324c6eb86fc17de16f65cbca35->leave($__internal_8edf9cec224e1a965f5b8dc523de5a48496bc4324c6eb86fc17de16f65cbca35_prof);

        
        $__internal_1619e8eab840d2bec98d298cedf8e40c1b327a1f5a89f1a4f5b6b756f561eae0->leave($__internal_1619e8eab840d2bec98d298cedf8e40c1b327a1f5a89f1a4f5b6b756f561eae0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
