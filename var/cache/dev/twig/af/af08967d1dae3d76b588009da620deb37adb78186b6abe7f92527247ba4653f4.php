<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a8fedd004fec4b578fe7e6e658f8512d5bca43ccaf38751fc1c8fdf30f2865f2 extends Twig_Template
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
        $__internal_83e61127d7acaf05ff3eff10096ce181c7be70631f6ffa311678179c391778fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e61127d7acaf05ff3eff10096ce181c7be70631f6ffa311678179c391778fd->enter($__internal_83e61127d7acaf05ff3eff10096ce181c7be70631f6ffa311678179c391778fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_31abba49f1a8052dd102f78e9ddc02f0bce8154d768589a2bf216aa13bffbab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31abba49f1a8052dd102f78e9ddc02f0bce8154d768589a2bf216aa13bffbab3->enter($__internal_31abba49f1a8052dd102f78e9ddc02f0bce8154d768589a2bf216aa13bffbab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_83e61127d7acaf05ff3eff10096ce181c7be70631f6ffa311678179c391778fd->leave($__internal_83e61127d7acaf05ff3eff10096ce181c7be70631f6ffa311678179c391778fd_prof);

        
        $__internal_31abba49f1a8052dd102f78e9ddc02f0bce8154d768589a2bf216aa13bffbab3->leave($__internal_31abba49f1a8052dd102f78e9ddc02f0bce8154d768589a2bf216aa13bffbab3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
