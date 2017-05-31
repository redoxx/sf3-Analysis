<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_612cbed508ed47928b5f8dd10f7a384eacc852ee651c576f2b824f634f51a23e extends Twig_Template
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
        $__internal_3828982eaf35f2c3bd2d6c879fff77c216c1d64c615b46455975343a6678a8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3828982eaf35f2c3bd2d6c879fff77c216c1d64c615b46455975343a6678a8cc->enter($__internal_3828982eaf35f2c3bd2d6c879fff77c216c1d64c615b46455975343a6678a8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_73c0b5ea14abc85ff56851f1b90ae0c2409b117d7d724ed7caf42e81e805451f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c0b5ea14abc85ff56851f1b90ae0c2409b117d7d724ed7caf42e81e805451f->enter($__internal_73c0b5ea14abc85ff56851f1b90ae0c2409b117d7d724ed7caf42e81e805451f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3828982eaf35f2c3bd2d6c879fff77c216c1d64c615b46455975343a6678a8cc->leave($__internal_3828982eaf35f2c3bd2d6c879fff77c216c1d64c615b46455975343a6678a8cc_prof);

        
        $__internal_73c0b5ea14abc85ff56851f1b90ae0c2409b117d7d724ed7caf42e81e805451f->leave($__internal_73c0b5ea14abc85ff56851f1b90ae0c2409b117d7d724ed7caf42e81e805451f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
