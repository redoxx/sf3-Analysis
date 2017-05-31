<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_dbf232285228e3bd1488edb98372bc330f499d019813e6b542afa5478c15e115 extends Twig_Template
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
        $__internal_1c258e071a43f0e4835aed0d94a96d2f29e7d7176b8937fc93b57585d2ab37fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c258e071a43f0e4835aed0d94a96d2f29e7d7176b8937fc93b57585d2ab37fb->enter($__internal_1c258e071a43f0e4835aed0d94a96d2f29e7d7176b8937fc93b57585d2ab37fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_5849f16a1c60c6d38e20a84c0a6dd28a363664a452c23abd1639ed87242e8438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5849f16a1c60c6d38e20a84c0a6dd28a363664a452c23abd1639ed87242e8438->enter($__internal_5849f16a1c60c6d38e20a84c0a6dd28a363664a452c23abd1639ed87242e8438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1c258e071a43f0e4835aed0d94a96d2f29e7d7176b8937fc93b57585d2ab37fb->leave($__internal_1c258e071a43f0e4835aed0d94a96d2f29e7d7176b8937fc93b57585d2ab37fb_prof);

        
        $__internal_5849f16a1c60c6d38e20a84c0a6dd28a363664a452c23abd1639ed87242e8438->leave($__internal_5849f16a1c60c6d38e20a84c0a6dd28a363664a452c23abd1639ed87242e8438_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
