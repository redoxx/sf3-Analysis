<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_726f2354af9bd91542d087a30fb0ec82718656bb7b5c1fba4e0ab7c24d769f87 extends Twig_Template
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
        $__internal_8a549acd28aa68ac657303733e397b263a07849b8258d79f3b208ccc3d66ef2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a549acd28aa68ac657303733e397b263a07849b8258d79f3b208ccc3d66ef2c->enter($__internal_8a549acd28aa68ac657303733e397b263a07849b8258d79f3b208ccc3d66ef2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_264217a21d963c931f5b517535f6ee642e43d23221078bd46ebb0651b262a324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264217a21d963c931f5b517535f6ee642e43d23221078bd46ebb0651b262a324->enter($__internal_264217a21d963c931f5b517535f6ee642e43d23221078bd46ebb0651b262a324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8a549acd28aa68ac657303733e397b263a07849b8258d79f3b208ccc3d66ef2c->leave($__internal_8a549acd28aa68ac657303733e397b263a07849b8258d79f3b208ccc3d66ef2c_prof);

        
        $__internal_264217a21d963c931f5b517535f6ee642e43d23221078bd46ebb0651b262a324->leave($__internal_264217a21d963c931f5b517535f6ee642e43d23221078bd46ebb0651b262a324_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
