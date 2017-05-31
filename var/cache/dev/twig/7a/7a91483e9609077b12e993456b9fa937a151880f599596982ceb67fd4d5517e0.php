<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2fc3256aef5ffd0149496fd446fd7dd184847ea7151be3b6c4c97e2440e55a6c extends Twig_Template
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
        $__internal_a2c5435cc0510e74de1d604fedea10621e8ec8e8322c05023503c3a632349d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c5435cc0510e74de1d604fedea10621e8ec8e8322c05023503c3a632349d0f->enter($__internal_a2c5435cc0510e74de1d604fedea10621e8ec8e8322c05023503c3a632349d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3dc6a8d60fb919bae89766031b47cfd1cece9cbd3bb376520330c6d7916a803a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc6a8d60fb919bae89766031b47cfd1cece9cbd3bb376520330c6d7916a803a->enter($__internal_3dc6a8d60fb919bae89766031b47cfd1cece9cbd3bb376520330c6d7916a803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a2c5435cc0510e74de1d604fedea10621e8ec8e8322c05023503c3a632349d0f->leave($__internal_a2c5435cc0510e74de1d604fedea10621e8ec8e8322c05023503c3a632349d0f_prof);

        
        $__internal_3dc6a8d60fb919bae89766031b47cfd1cece9cbd3bb376520330c6d7916a803a->leave($__internal_3dc6a8d60fb919bae89766031b47cfd1cece9cbd3bb376520330c6d7916a803a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
