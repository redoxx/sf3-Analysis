<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3f265eb0eeef31dc4cc34bb4ea3d11900cc4a55dbd2702001096bcc14825701c extends Twig_Template
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
        $__internal_913e239c34dd0676699997e97d4fd753c1b905a74a91a4f5b9ad0e05dad7efb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913e239c34dd0676699997e97d4fd753c1b905a74a91a4f5b9ad0e05dad7efb3->enter($__internal_913e239c34dd0676699997e97d4fd753c1b905a74a91a4f5b9ad0e05dad7efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_72ebf257bb1a8a60642bcf7b982f4dec1c9c3ff5cb53f8441d2b488122d505e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ebf257bb1a8a60642bcf7b982f4dec1c9c3ff5cb53f8441d2b488122d505e0->enter($__internal_72ebf257bb1a8a60642bcf7b982f4dec1c9c3ff5cb53f8441d2b488122d505e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_913e239c34dd0676699997e97d4fd753c1b905a74a91a4f5b9ad0e05dad7efb3->leave($__internal_913e239c34dd0676699997e97d4fd753c1b905a74a91a4f5b9ad0e05dad7efb3_prof);

        
        $__internal_72ebf257bb1a8a60642bcf7b982f4dec1c9c3ff5cb53f8441d2b488122d505e0->leave($__internal_72ebf257bb1a8a60642bcf7b982f4dec1c9c3ff5cb53f8441d2b488122d505e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
