<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1943d429a9f4b65ca28df1a05cba9fef72626de65d41f628cd57799b46901131 extends Twig_Template
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
        $__internal_93e58570ac82935c9c8309453ecf800b4a4a3caee7ac5a33439e9c9be547b710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e58570ac82935c9c8309453ecf800b4a4a3caee7ac5a33439e9c9be547b710->enter($__internal_93e58570ac82935c9c8309453ecf800b4a4a3caee7ac5a33439e9c9be547b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1a45ffe783ec74a18794819c610907fc37754a6778cfe24ffe6c2bed1c2a31b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a45ffe783ec74a18794819c610907fc37754a6778cfe24ffe6c2bed1c2a31b3->enter($__internal_1a45ffe783ec74a18794819c610907fc37754a6778cfe24ffe6c2bed1c2a31b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_93e58570ac82935c9c8309453ecf800b4a4a3caee7ac5a33439e9c9be547b710->leave($__internal_93e58570ac82935c9c8309453ecf800b4a4a3caee7ac5a33439e9c9be547b710_prof);

        
        $__internal_1a45ffe783ec74a18794819c610907fc37754a6778cfe24ffe6c2bed1c2a31b3->leave($__internal_1a45ffe783ec74a18794819c610907fc37754a6778cfe24ffe6c2bed1c2a31b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
