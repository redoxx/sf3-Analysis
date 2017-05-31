<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_584e00595cc0a346e2756e50ede7bb420d6bf06c7470e32bb846623e74132112 extends Twig_Template
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
        $__internal_4a06674f05f00b5f43529d2094a8b9817e05a92c390febbea50559d29f515930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a06674f05f00b5f43529d2094a8b9817e05a92c390febbea50559d29f515930->enter($__internal_4a06674f05f00b5f43529d2094a8b9817e05a92c390febbea50559d29f515930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5eb76835ef21e9b8ec5afee83f83248e0d53c0bc96a2abe9cb07bc630f73a296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb76835ef21e9b8ec5afee83f83248e0d53c0bc96a2abe9cb07bc630f73a296->enter($__internal_5eb76835ef21e9b8ec5afee83f83248e0d53c0bc96a2abe9cb07bc630f73a296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4a06674f05f00b5f43529d2094a8b9817e05a92c390febbea50559d29f515930->leave($__internal_4a06674f05f00b5f43529d2094a8b9817e05a92c390febbea50559d29f515930_prof);

        
        $__internal_5eb76835ef21e9b8ec5afee83f83248e0d53c0bc96a2abe9cb07bc630f73a296->leave($__internal_5eb76835ef21e9b8ec5afee83f83248e0d53c0bc96a2abe9cb07bc630f73a296_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
