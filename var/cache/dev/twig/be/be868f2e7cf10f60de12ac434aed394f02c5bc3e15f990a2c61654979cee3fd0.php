<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_52b9769ace9b24f266c9b8209dae3bfa573828d5d77d597663398c17ca844ce8 extends Twig_Template
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
        $__internal_dd6cc45283c0158c71413dc923fa072c89d35f2776ce29aa1f9dd20326a4fed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6cc45283c0158c71413dc923fa072c89d35f2776ce29aa1f9dd20326a4fed4->enter($__internal_dd6cc45283c0158c71413dc923fa072c89d35f2776ce29aa1f9dd20326a4fed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ea45810d935cb6274f8342c70485823b0763d9ddf256e9a3a46e79fd1a69519f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea45810d935cb6274f8342c70485823b0763d9ddf256e9a3a46e79fd1a69519f->enter($__internal_ea45810d935cb6274f8342c70485823b0763d9ddf256e9a3a46e79fd1a69519f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_dd6cc45283c0158c71413dc923fa072c89d35f2776ce29aa1f9dd20326a4fed4->leave($__internal_dd6cc45283c0158c71413dc923fa072c89d35f2776ce29aa1f9dd20326a4fed4_prof);

        
        $__internal_ea45810d935cb6274f8342c70485823b0763d9ddf256e9a3a46e79fd1a69519f->leave($__internal_ea45810d935cb6274f8342c70485823b0763d9ddf256e9a3a46e79fd1a69519f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
