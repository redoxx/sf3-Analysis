<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_be1594f187e2e1f0fa022af7efbf75e94e984417d4fcdbea8ed230f04b68175b extends Twig_Template
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
        $__internal_b19a91d2f31ec28e36bb088d9c1232c3157702d5df192be3273f06f2ed127cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19a91d2f31ec28e36bb088d9c1232c3157702d5df192be3273f06f2ed127cc7->enter($__internal_b19a91d2f31ec28e36bb088d9c1232c3157702d5df192be3273f06f2ed127cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_91c6f075323e33c4f94a3683320634a6b078ead7761606e9d285678542643286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c6f075323e33c4f94a3683320634a6b078ead7761606e9d285678542643286->enter($__internal_91c6f075323e33c4f94a3683320634a6b078ead7761606e9d285678542643286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b19a91d2f31ec28e36bb088d9c1232c3157702d5df192be3273f06f2ed127cc7->leave($__internal_b19a91d2f31ec28e36bb088d9c1232c3157702d5df192be3273f06f2ed127cc7_prof);

        
        $__internal_91c6f075323e33c4f94a3683320634a6b078ead7761606e9d285678542643286->leave($__internal_91c6f075323e33c4f94a3683320634a6b078ead7761606e9d285678542643286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
