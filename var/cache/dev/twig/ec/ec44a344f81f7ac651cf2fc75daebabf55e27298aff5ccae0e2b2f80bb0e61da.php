<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_20a6746e4e43f2908c926177e2c82ffd6829ec31138f52f55c2da02adf3762f9 extends Twig_Template
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
        $__internal_f2b59348ad7998b5f8ffa5617e6a135f76f2599adea183985fa581774ea9d77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b59348ad7998b5f8ffa5617e6a135f76f2599adea183985fa581774ea9d77e->enter($__internal_f2b59348ad7998b5f8ffa5617e6a135f76f2599adea183985fa581774ea9d77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_503d07bc1513c9eb84455e25bde76bc85dc722a317c7c807226e650083d44860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503d07bc1513c9eb84455e25bde76bc85dc722a317c7c807226e650083d44860->enter($__internal_503d07bc1513c9eb84455e25bde76bc85dc722a317c7c807226e650083d44860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f2b59348ad7998b5f8ffa5617e6a135f76f2599adea183985fa581774ea9d77e->leave($__internal_f2b59348ad7998b5f8ffa5617e6a135f76f2599adea183985fa581774ea9d77e_prof);

        
        $__internal_503d07bc1513c9eb84455e25bde76bc85dc722a317c7c807226e650083d44860->leave($__internal_503d07bc1513c9eb84455e25bde76bc85dc722a317c7c807226e650083d44860_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
