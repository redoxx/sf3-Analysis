<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a819e1276eb536e3fb5f52e9d9aeb5e7adf3e111d7ec956b78cac15fe51026e4 extends Twig_Template
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
        $__internal_0f1019c58b3daf1bb16580d282fdd9f15767ee606e76d2a3682fab83ed3a20cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1019c58b3daf1bb16580d282fdd9f15767ee606e76d2a3682fab83ed3a20cb->enter($__internal_0f1019c58b3daf1bb16580d282fdd9f15767ee606e76d2a3682fab83ed3a20cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ea4301572947befbe82fb40845b592c2f96ffddacd50a82c3806ff941980e851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4301572947befbe82fb40845b592c2f96ffddacd50a82c3806ff941980e851->enter($__internal_ea4301572947befbe82fb40845b592c2f96ffddacd50a82c3806ff941980e851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0f1019c58b3daf1bb16580d282fdd9f15767ee606e76d2a3682fab83ed3a20cb->leave($__internal_0f1019c58b3daf1bb16580d282fdd9f15767ee606e76d2a3682fab83ed3a20cb_prof);

        
        $__internal_ea4301572947befbe82fb40845b592c2f96ffddacd50a82c3806ff941980e851->leave($__internal_ea4301572947befbe82fb40845b592c2f96ffddacd50a82c3806ff941980e851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
