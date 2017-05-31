<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_11ff0e25a2dacd52d67c35b547044df8957b3854d063ef3f088d84a09a95df81 extends Twig_Template
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
        $__internal_0ad9ee3ac4f872a462c4b38d1f05b057ac8075628becfba908e18f7e35a0769c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad9ee3ac4f872a462c4b38d1f05b057ac8075628becfba908e18f7e35a0769c->enter($__internal_0ad9ee3ac4f872a462c4b38d1f05b057ac8075628becfba908e18f7e35a0769c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_88d479a983d2f5e7392ddd709c671c23384641942d9a52af646b9e7a43f3840f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d479a983d2f5e7392ddd709c671c23384641942d9a52af646b9e7a43f3840f->enter($__internal_88d479a983d2f5e7392ddd709c671c23384641942d9a52af646b9e7a43f3840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0ad9ee3ac4f872a462c4b38d1f05b057ac8075628becfba908e18f7e35a0769c->leave($__internal_0ad9ee3ac4f872a462c4b38d1f05b057ac8075628becfba908e18f7e35a0769c_prof);

        
        $__internal_88d479a983d2f5e7392ddd709c671c23384641942d9a52af646b9e7a43f3840f->leave($__internal_88d479a983d2f5e7392ddd709c671c23384641942d9a52af646b9e7a43f3840f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
