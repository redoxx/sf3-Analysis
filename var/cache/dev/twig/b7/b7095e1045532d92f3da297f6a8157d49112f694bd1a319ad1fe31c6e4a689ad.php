<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f9a99aa65821e335388e385012d1b35ba0987f870f32fe6e90726f7f473bbc7e extends Twig_Template
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
        $__internal_441a1a533d96777c94e405db771e409d86b8d9798a49750f993ddbf76308df56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441a1a533d96777c94e405db771e409d86b8d9798a49750f993ddbf76308df56->enter($__internal_441a1a533d96777c94e405db771e409d86b8d9798a49750f993ddbf76308df56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_32fd81eb2df965692235186371942e80e11d1d90cea2595edfaf21961e490b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fd81eb2df965692235186371942e80e11d1d90cea2595edfaf21961e490b8b->enter($__internal_32fd81eb2df965692235186371942e80e11d1d90cea2595edfaf21961e490b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_441a1a533d96777c94e405db771e409d86b8d9798a49750f993ddbf76308df56->leave($__internal_441a1a533d96777c94e405db771e409d86b8d9798a49750f993ddbf76308df56_prof);

        
        $__internal_32fd81eb2df965692235186371942e80e11d1d90cea2595edfaf21961e490b8b->leave($__internal_32fd81eb2df965692235186371942e80e11d1d90cea2595edfaf21961e490b8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
