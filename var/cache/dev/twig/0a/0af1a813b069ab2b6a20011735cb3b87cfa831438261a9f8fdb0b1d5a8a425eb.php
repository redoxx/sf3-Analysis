<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ef0a0bf5dbbed68be19487244b9ebcc2933080ad644446b12bd95f8d75e0c133 extends Twig_Template
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
        $__internal_8b49beb20c9664641bc243ebe2e71743c0db26da44ad3d95a88a86b31ed7f166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b49beb20c9664641bc243ebe2e71743c0db26da44ad3d95a88a86b31ed7f166->enter($__internal_8b49beb20c9664641bc243ebe2e71743c0db26da44ad3d95a88a86b31ed7f166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_77e0979b4e6d84d3517715ca6d1cd3e44139049ae9e2f7222676694bac37d32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e0979b4e6d84d3517715ca6d1cd3e44139049ae9e2f7222676694bac37d32a->enter($__internal_77e0979b4e6d84d3517715ca6d1cd3e44139049ae9e2f7222676694bac37d32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8b49beb20c9664641bc243ebe2e71743c0db26da44ad3d95a88a86b31ed7f166->leave($__internal_8b49beb20c9664641bc243ebe2e71743c0db26da44ad3d95a88a86b31ed7f166_prof);

        
        $__internal_77e0979b4e6d84d3517715ca6d1cd3e44139049ae9e2f7222676694bac37d32a->leave($__internal_77e0979b4e6d84d3517715ca6d1cd3e44139049ae9e2f7222676694bac37d32a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
