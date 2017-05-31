<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_76fb9b375007536ebf50121e6c858e2c6a729e170a9aab4a5f3053a694bd9151 extends Twig_Template
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
        $__internal_786de6839013173254c8928c80562d337258d3d1d22336b33adc297c32d60990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786de6839013173254c8928c80562d337258d3d1d22336b33adc297c32d60990->enter($__internal_786de6839013173254c8928c80562d337258d3d1d22336b33adc297c32d60990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6405a63ae5079569c286b5685af0bf316ce16327b6ce72ec30fe0b375cb872e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6405a63ae5079569c286b5685af0bf316ce16327b6ce72ec30fe0b375cb872e6->enter($__internal_6405a63ae5079569c286b5685af0bf316ce16327b6ce72ec30fe0b375cb872e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_786de6839013173254c8928c80562d337258d3d1d22336b33adc297c32d60990->leave($__internal_786de6839013173254c8928c80562d337258d3d1d22336b33adc297c32d60990_prof);

        
        $__internal_6405a63ae5079569c286b5685af0bf316ce16327b6ce72ec30fe0b375cb872e6->leave($__internal_6405a63ae5079569c286b5685af0bf316ce16327b6ce72ec30fe0b375cb872e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
