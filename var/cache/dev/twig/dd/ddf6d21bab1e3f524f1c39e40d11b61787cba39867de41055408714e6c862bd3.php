<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ba808f4f42dc4817e0d8269c57f14b3c5979987853106c71eea552e0f7aa8ef6 extends Twig_Template
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
        $__internal_a4cfead3d60a3613000036233adbf05e06f022839bf27343bd3e22c5a4457dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cfead3d60a3613000036233adbf05e06f022839bf27343bd3e22c5a4457dfe->enter($__internal_a4cfead3d60a3613000036233adbf05e06f022839bf27343bd3e22c5a4457dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b0f58637724e86239605ce9aac32063e2e43b8f4a2f72e94e58b4c94827e1ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f58637724e86239605ce9aac32063e2e43b8f4a2f72e94e58b4c94827e1ccf->enter($__internal_b0f58637724e86239605ce9aac32063e2e43b8f4a2f72e94e58b4c94827e1ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a4cfead3d60a3613000036233adbf05e06f022839bf27343bd3e22c5a4457dfe->leave($__internal_a4cfead3d60a3613000036233adbf05e06f022839bf27343bd3e22c5a4457dfe_prof);

        
        $__internal_b0f58637724e86239605ce9aac32063e2e43b8f4a2f72e94e58b4c94827e1ccf->leave($__internal_b0f58637724e86239605ce9aac32063e2e43b8f4a2f72e94e58b4c94827e1ccf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
