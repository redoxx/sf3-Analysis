<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e3771d933f278604a4e17a7cdbe6977c160036790aecd7af299952fb33542b58 extends Twig_Template
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
        $__internal_b9f5a469e98ff1f7b94f5ec5666f6c4262488cd04e81386bb3ba9865e1f48d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f5a469e98ff1f7b94f5ec5666f6c4262488cd04e81386bb3ba9865e1f48d3c->enter($__internal_b9f5a469e98ff1f7b94f5ec5666f6c4262488cd04e81386bb3ba9865e1f48d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_20cc3950ce75dcaba8a8c7e557c16e0a85c708495b6f7ae88530e792af7fff22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cc3950ce75dcaba8a8c7e557c16e0a85c708495b6f7ae88530e792af7fff22->enter($__internal_20cc3950ce75dcaba8a8c7e557c16e0a85c708495b6f7ae88530e792af7fff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b9f5a469e98ff1f7b94f5ec5666f6c4262488cd04e81386bb3ba9865e1f48d3c->leave($__internal_b9f5a469e98ff1f7b94f5ec5666f6c4262488cd04e81386bb3ba9865e1f48d3c_prof);

        
        $__internal_20cc3950ce75dcaba8a8c7e557c16e0a85c708495b6f7ae88530e792af7fff22->leave($__internal_20cc3950ce75dcaba8a8c7e557c16e0a85c708495b6f7ae88530e792af7fff22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
