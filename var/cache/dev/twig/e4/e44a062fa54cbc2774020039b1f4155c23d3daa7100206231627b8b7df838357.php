<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a0904f62da15403d80ddf8b8a1c7b3a8273d4a97662358855cb290ea493bc5d5 extends Twig_Template
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
        $__internal_5efb71400c1a66491930b16fc080ab718c78b63e3ecb50a9367d32d1ecd21b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efb71400c1a66491930b16fc080ab718c78b63e3ecb50a9367d32d1ecd21b7a->enter($__internal_5efb71400c1a66491930b16fc080ab718c78b63e3ecb50a9367d32d1ecd21b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_bdd9cd637dc0fd393fcdd8210e1b8e2e9d82783f61da2cc5d5863695215f985f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd9cd637dc0fd393fcdd8210e1b8e2e9d82783f61da2cc5d5863695215f985f->enter($__internal_bdd9cd637dc0fd393fcdd8210e1b8e2e9d82783f61da2cc5d5863695215f985f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
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
        
        $__internal_5efb71400c1a66491930b16fc080ab718c78b63e3ecb50a9367d32d1ecd21b7a->leave($__internal_5efb71400c1a66491930b16fc080ab718c78b63e3ecb50a9367d32d1ecd21b7a_prof);

        
        $__internal_bdd9cd637dc0fd393fcdd8210e1b8e2e9d82783f61da2cc5d5863695215f985f->leave($__internal_bdd9cd637dc0fd393fcdd8210e1b8e2e9d82783f61da2cc5d5863695215f985f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
