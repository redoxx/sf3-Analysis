<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c304fc0e783b3328897ebab1ed289064ff2e3fd4cc9f479c9bd98827ffb4768c extends Twig_Template
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
        $__internal_c6eddb87381106aa7d3de2943849276376019da64ed8c31c423eb22f65626cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6eddb87381106aa7d3de2943849276376019da64ed8c31c423eb22f65626cf5->enter($__internal_c6eddb87381106aa7d3de2943849276376019da64ed8c31c423eb22f65626cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_103e1d36a106418af3a55802a6fc4ca520d8b7707d3d65a58fcc01cfae69c76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103e1d36a106418af3a55802a6fc4ca520d8b7707d3d65a58fcc01cfae69c76a->enter($__internal_103e1d36a106418af3a55802a6fc4ca520d8b7707d3d65a58fcc01cfae69c76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c6eddb87381106aa7d3de2943849276376019da64ed8c31c423eb22f65626cf5->leave($__internal_c6eddb87381106aa7d3de2943849276376019da64ed8c31c423eb22f65626cf5_prof);

        
        $__internal_103e1d36a106418af3a55802a6fc4ca520d8b7707d3d65a58fcc01cfae69c76a->leave($__internal_103e1d36a106418af3a55802a6fc4ca520d8b7707d3d65a58fcc01cfae69c76a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
