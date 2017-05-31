<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6bc551a78e495db1e529064a356f0196ae4dd476ee82fa78527c168c58418754 extends Twig_Template
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
        $__internal_d76708b6152abbfaaef66060636303fb784957daab5f2131e26f15ebdefee64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76708b6152abbfaaef66060636303fb784957daab5f2131e26f15ebdefee64b->enter($__internal_d76708b6152abbfaaef66060636303fb784957daab5f2131e26f15ebdefee64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_458b02305d2761d1455ebfaff5388765c7074f968179d12da9d23d984dde2a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458b02305d2761d1455ebfaff5388765c7074f968179d12da9d23d984dde2a6c->enter($__internal_458b02305d2761d1455ebfaff5388765c7074f968179d12da9d23d984dde2a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d76708b6152abbfaaef66060636303fb784957daab5f2131e26f15ebdefee64b->leave($__internal_d76708b6152abbfaaef66060636303fb784957daab5f2131e26f15ebdefee64b_prof);

        
        $__internal_458b02305d2761d1455ebfaff5388765c7074f968179d12da9d23d984dde2a6c->leave($__internal_458b02305d2761d1455ebfaff5388765c7074f968179d12da9d23d984dde2a6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
