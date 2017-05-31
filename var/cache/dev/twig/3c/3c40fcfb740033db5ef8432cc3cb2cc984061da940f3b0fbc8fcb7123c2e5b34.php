<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_015bc832eaf47ddb8a024fbbb2ff6f06e548fe433c554adb71ec96c154b46c22 extends Twig_Template
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
        $__internal_989388a81c837f08f8ae99a4dccea7005e7f27dd3873b726181cefcf60a44a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989388a81c837f08f8ae99a4dccea7005e7f27dd3873b726181cefcf60a44a8d->enter($__internal_989388a81c837f08f8ae99a4dccea7005e7f27dd3873b726181cefcf60a44a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3858cf958b3ceff6f02a5d6da6a4043c546b549e87a71cfcab73eedad68e142a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3858cf958b3ceff6f02a5d6da6a4043c546b549e87a71cfcab73eedad68e142a->enter($__internal_3858cf958b3ceff6f02a5d6da6a4043c546b549e87a71cfcab73eedad68e142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_989388a81c837f08f8ae99a4dccea7005e7f27dd3873b726181cefcf60a44a8d->leave($__internal_989388a81c837f08f8ae99a4dccea7005e7f27dd3873b726181cefcf60a44a8d_prof);

        
        $__internal_3858cf958b3ceff6f02a5d6da6a4043c546b549e87a71cfcab73eedad68e142a->leave($__internal_3858cf958b3ceff6f02a5d6da6a4043c546b549e87a71cfcab73eedad68e142a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
