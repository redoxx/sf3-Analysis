<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_32e10c3c0c6af847cde76d763288d2260c2b4a0588c57e16ed549ca2208649f4 extends Twig_Template
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
        $__internal_5f4bb0efc603d7ba54d51cfa1e13bc85205648e68ee3aa9b8fb90a25f37fbd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4bb0efc603d7ba54d51cfa1e13bc85205648e68ee3aa9b8fb90a25f37fbd2a->enter($__internal_5f4bb0efc603d7ba54d51cfa1e13bc85205648e68ee3aa9b8fb90a25f37fbd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_537507fe3be3d79e9fdfe1416d05b69e8b72cbd053cdaa59f0558edb92fac27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537507fe3be3d79e9fdfe1416d05b69e8b72cbd053cdaa59f0558edb92fac27a->enter($__internal_537507fe3be3d79e9fdfe1416d05b69e8b72cbd053cdaa59f0558edb92fac27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5f4bb0efc603d7ba54d51cfa1e13bc85205648e68ee3aa9b8fb90a25f37fbd2a->leave($__internal_5f4bb0efc603d7ba54d51cfa1e13bc85205648e68ee3aa9b8fb90a25f37fbd2a_prof);

        
        $__internal_537507fe3be3d79e9fdfe1416d05b69e8b72cbd053cdaa59f0558edb92fac27a->leave($__internal_537507fe3be3d79e9fdfe1416d05b69e8b72cbd053cdaa59f0558edb92fac27a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
