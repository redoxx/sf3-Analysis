<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8cda536b5db5faefb61414e106f555e10c6b5dc6c9da0739b62f1bd8110325f3 extends Twig_Template
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
        $__internal_053a256d9164189e8185a3d8559281d9fc907ad398c8da65f1750e85c33096cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053a256d9164189e8185a3d8559281d9fc907ad398c8da65f1750e85c33096cf->enter($__internal_053a256d9164189e8185a3d8559281d9fc907ad398c8da65f1750e85c33096cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1de264b52dcab8669cfd7d532bff77fd888fae8884edf8166d76365b4c78b395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de264b52dcab8669cfd7d532bff77fd888fae8884edf8166d76365b4c78b395->enter($__internal_1de264b52dcab8669cfd7d532bff77fd888fae8884edf8166d76365b4c78b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_053a256d9164189e8185a3d8559281d9fc907ad398c8da65f1750e85c33096cf->leave($__internal_053a256d9164189e8185a3d8559281d9fc907ad398c8da65f1750e85c33096cf_prof);

        
        $__internal_1de264b52dcab8669cfd7d532bff77fd888fae8884edf8166d76365b4c78b395->leave($__internal_1de264b52dcab8669cfd7d532bff77fd888fae8884edf8166d76365b4c78b395_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
