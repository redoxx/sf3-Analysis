<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_5a6b9ce29047139adc7d9ac38383694b806fdacdfc1b8eb32c81242dee1b00ff extends Twig_Template
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
        $__internal_297cce02f3c5f4eb3ae366b13915722f0c5ff188de59a7dc5e7344c6b6b177e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297cce02f3c5f4eb3ae366b13915722f0c5ff188de59a7dc5e7344c6b6b177e5->enter($__internal_297cce02f3c5f4eb3ae366b13915722f0c5ff188de59a7dc5e7344c6b6b177e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2b30c1be7916e2a8858df027f3c01cc07a2c5212d8267951755f1c2451169c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b30c1be7916e2a8858df027f3c01cc07a2c5212d8267951755f1c2451169c12->enter($__internal_2b30c1be7916e2a8858df027f3c01cc07a2c5212d8267951755f1c2451169c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_297cce02f3c5f4eb3ae366b13915722f0c5ff188de59a7dc5e7344c6b6b177e5->leave($__internal_297cce02f3c5f4eb3ae366b13915722f0c5ff188de59a7dc5e7344c6b6b177e5_prof);

        
        $__internal_2b30c1be7916e2a8858df027f3c01cc07a2c5212d8267951755f1c2451169c12->leave($__internal_2b30c1be7916e2a8858df027f3c01cc07a2c5212d8267951755f1c2451169c12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
