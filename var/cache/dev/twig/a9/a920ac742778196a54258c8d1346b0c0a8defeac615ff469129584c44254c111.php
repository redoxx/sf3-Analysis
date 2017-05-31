<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_64e8a1860eb79bdd745b6a9542d1ca9d2a3df570b9f4fddc29c75bdd8c833265 extends Twig_Template
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
        $__internal_82073afbbb02b4ece589a484420e89d9479ce2a100edbd2b6eaae8f8cf46e0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82073afbbb02b4ece589a484420e89d9479ce2a100edbd2b6eaae8f8cf46e0aa->enter($__internal_82073afbbb02b4ece589a484420e89d9479ce2a100edbd2b6eaae8f8cf46e0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_9a58c5ff4009239f3b437f2ec53c26e88d0e5878e73cf51c1f54b6b722920ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a58c5ff4009239f3b437f2ec53c26e88d0e5878e73cf51c1f54b6b722920ab2->enter($__internal_9a58c5ff4009239f3b437f2ec53c26e88d0e5878e73cf51c1f54b6b722920ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_82073afbbb02b4ece589a484420e89d9479ce2a100edbd2b6eaae8f8cf46e0aa->leave($__internal_82073afbbb02b4ece589a484420e89d9479ce2a100edbd2b6eaae8f8cf46e0aa_prof);

        
        $__internal_9a58c5ff4009239f3b437f2ec53c26e88d0e5878e73cf51c1f54b6b722920ab2->leave($__internal_9a58c5ff4009239f3b437f2ec53c26e88d0e5878e73cf51c1f54b6b722920ab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
