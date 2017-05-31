<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8c69081d4aecd181230f51681a73f018891f7707ad05c03e646340911687dfdb extends Twig_Template
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
        $__internal_bb586f28cef3f3406efdf78d2ed3c6b7067ec371ddd4bf93679af8dbb2095a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb586f28cef3f3406efdf78d2ed3c6b7067ec371ddd4bf93679af8dbb2095a3e->enter($__internal_bb586f28cef3f3406efdf78d2ed3c6b7067ec371ddd4bf93679af8dbb2095a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e4eeced2c92a41c05bb524980e0ba7c4c957809df1c5a62cf913bd790d3d665c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4eeced2c92a41c05bb524980e0ba7c4c957809df1c5a62cf913bd790d3d665c->enter($__internal_e4eeced2c92a41c05bb524980e0ba7c4c957809df1c5a62cf913bd790d3d665c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bb586f28cef3f3406efdf78d2ed3c6b7067ec371ddd4bf93679af8dbb2095a3e->leave($__internal_bb586f28cef3f3406efdf78d2ed3c6b7067ec371ddd4bf93679af8dbb2095a3e_prof);

        
        $__internal_e4eeced2c92a41c05bb524980e0ba7c4c957809df1c5a62cf913bd790d3d665c->leave($__internal_e4eeced2c92a41c05bb524980e0ba7c4c957809df1c5a62cf913bd790d3d665c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
