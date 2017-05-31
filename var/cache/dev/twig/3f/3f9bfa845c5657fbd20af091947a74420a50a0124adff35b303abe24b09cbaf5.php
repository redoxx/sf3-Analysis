<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cf41f973d019af04db3aa6a6c0ff89b93e8bd4e95e1ab9b7c1785d61eaa63591 extends Twig_Template
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
        $__internal_792c8f463cadd554183ae47cc39c60148fdb8cbb2145644665bad3de0b3e1fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792c8f463cadd554183ae47cc39c60148fdb8cbb2145644665bad3de0b3e1fdb->enter($__internal_792c8f463cadd554183ae47cc39c60148fdb8cbb2145644665bad3de0b3e1fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d4335ba5b56576f933f7ebe5aa2d4b4b85b72cdbb5d4bc0dd71fb2470f8f08cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4335ba5b56576f933f7ebe5aa2d4b4b85b72cdbb5d4bc0dd71fb2470f8f08cb->enter($__internal_d4335ba5b56576f933f7ebe5aa2d4b4b85b72cdbb5d4bc0dd71fb2470f8f08cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_792c8f463cadd554183ae47cc39c60148fdb8cbb2145644665bad3de0b3e1fdb->leave($__internal_792c8f463cadd554183ae47cc39c60148fdb8cbb2145644665bad3de0b3e1fdb_prof);

        
        $__internal_d4335ba5b56576f933f7ebe5aa2d4b4b85b72cdbb5d4bc0dd71fb2470f8f08cb->leave($__internal_d4335ba5b56576f933f7ebe5aa2d4b4b85b72cdbb5d4bc0dd71fb2470f8f08cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
