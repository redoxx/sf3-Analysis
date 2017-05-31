<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_9c56ae3176aca74c57d63340808d684f21bc4d1827a4ff2d62ded2a9704c5778 extends Twig_Template
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
        $__internal_cdcdb721da2b23354efa7b362a8580fc093540062480a7a3abeced04cafb7f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcdb721da2b23354efa7b362a8580fc093540062480a7a3abeced04cafb7f9f->enter($__internal_cdcdb721da2b23354efa7b362a8580fc093540062480a7a3abeced04cafb7f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4327e66355c156e149ae1afb0cc35e0afbfa4e37b4ed43d8a793b8b29da8a7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4327e66355c156e149ae1afb0cc35e0afbfa4e37b4ed43d8a793b8b29da8a7a9->enter($__internal_4327e66355c156e149ae1afb0cc35e0afbfa4e37b4ed43d8a793b8b29da8a7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cdcdb721da2b23354efa7b362a8580fc093540062480a7a3abeced04cafb7f9f->leave($__internal_cdcdb721da2b23354efa7b362a8580fc093540062480a7a3abeced04cafb7f9f_prof);

        
        $__internal_4327e66355c156e149ae1afb0cc35e0afbfa4e37b4ed43d8a793b8b29da8a7a9->leave($__internal_4327e66355c156e149ae1afb0cc35e0afbfa4e37b4ed43d8a793b8b29da8a7a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
