<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4d0e3a80731c4fc47e65dfae60c16ac8a2354fe14b314c043d84e0c9bfc3ce71 extends Twig_Template
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
        $__internal_e809a6a50e2b67aac66e85c6aa79a029cc189728ba0c39d04dc0b47d5346c6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e809a6a50e2b67aac66e85c6aa79a029cc189728ba0c39d04dc0b47d5346c6ce->enter($__internal_e809a6a50e2b67aac66e85c6aa79a029cc189728ba0c39d04dc0b47d5346c6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_70c4adf854189db07b5c6018b4fdfb37f5388f65bed7ea4c5c47cdb53ac11746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c4adf854189db07b5c6018b4fdfb37f5388f65bed7ea4c5c47cdb53ac11746->enter($__internal_70c4adf854189db07b5c6018b4fdfb37f5388f65bed7ea4c5c47cdb53ac11746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e809a6a50e2b67aac66e85c6aa79a029cc189728ba0c39d04dc0b47d5346c6ce->leave($__internal_e809a6a50e2b67aac66e85c6aa79a029cc189728ba0c39d04dc0b47d5346c6ce_prof);

        
        $__internal_70c4adf854189db07b5c6018b4fdfb37f5388f65bed7ea4c5c47cdb53ac11746->leave($__internal_70c4adf854189db07b5c6018b4fdfb37f5388f65bed7ea4c5c47cdb53ac11746_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
