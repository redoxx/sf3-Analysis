<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b38dceaff95c6a2d8d2e8c98d618e27a94b4966f43627576326b875229a10011 extends Twig_Template
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
        $__internal_d84190052ae41529a8e76df8366136ef1620dd5b9606129ab6c1a6057e4fb80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84190052ae41529a8e76df8366136ef1620dd5b9606129ab6c1a6057e4fb80c->enter($__internal_d84190052ae41529a8e76df8366136ef1620dd5b9606129ab6c1a6057e4fb80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5b4462b23c6176dd38715e8286b615159d794b849ce3890be47111790f728a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4462b23c6176dd38715e8286b615159d794b849ce3890be47111790f728a4a->enter($__internal_5b4462b23c6176dd38715e8286b615159d794b849ce3890be47111790f728a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d84190052ae41529a8e76df8366136ef1620dd5b9606129ab6c1a6057e4fb80c->leave($__internal_d84190052ae41529a8e76df8366136ef1620dd5b9606129ab6c1a6057e4fb80c_prof);

        
        $__internal_5b4462b23c6176dd38715e8286b615159d794b849ce3890be47111790f728a4a->leave($__internal_5b4462b23c6176dd38715e8286b615159d794b849ce3890be47111790f728a4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
