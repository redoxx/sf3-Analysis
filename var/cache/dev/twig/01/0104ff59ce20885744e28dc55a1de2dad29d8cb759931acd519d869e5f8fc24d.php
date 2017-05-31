<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6445ee2b6482f9e45d53b4bd4081da2831fa3b0f70009113e2ccde1cdd3bea87 extends Twig_Template
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
        $__internal_2eba8aac48be8a55c47bfa1d5ec6b74b93affe4d13368192c4143f8896496590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eba8aac48be8a55c47bfa1d5ec6b74b93affe4d13368192c4143f8896496590->enter($__internal_2eba8aac48be8a55c47bfa1d5ec6b74b93affe4d13368192c4143f8896496590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_49a80953042fa2adcc12c47910b2bf397247dfe311f5779249d7ba2a4970935f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a80953042fa2adcc12c47910b2bf397247dfe311f5779249d7ba2a4970935f->enter($__internal_49a80953042fa2adcc12c47910b2bf397247dfe311f5779249d7ba2a4970935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2eba8aac48be8a55c47bfa1d5ec6b74b93affe4d13368192c4143f8896496590->leave($__internal_2eba8aac48be8a55c47bfa1d5ec6b74b93affe4d13368192c4143f8896496590_prof);

        
        $__internal_49a80953042fa2adcc12c47910b2bf397247dfe311f5779249d7ba2a4970935f->leave($__internal_49a80953042fa2adcc12c47910b2bf397247dfe311f5779249d7ba2a4970935f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
