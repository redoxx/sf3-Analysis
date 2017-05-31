<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_529cb97a49d10128d3f4c322deafc373c75ab8d2d4050b1b7db8f427fad29fc2 extends Twig_Template
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
        $__internal_8c5f7a248fda81669a87f2663b71d10f9f5707520423efbea8195bc839785a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5f7a248fda81669a87f2663b71d10f9f5707520423efbea8195bc839785a1b->enter($__internal_8c5f7a248fda81669a87f2663b71d10f9f5707520423efbea8195bc839785a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6715a559ab2d5cc5237a35d5c7f6933dc66bfa2f80fc8c19747b875ab07f88c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6715a559ab2d5cc5237a35d5c7f6933dc66bfa2f80fc8c19747b875ab07f88c1->enter($__internal_6715a559ab2d5cc5237a35d5c7f6933dc66bfa2f80fc8c19747b875ab07f88c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8c5f7a248fda81669a87f2663b71d10f9f5707520423efbea8195bc839785a1b->leave($__internal_8c5f7a248fda81669a87f2663b71d10f9f5707520423efbea8195bc839785a1b_prof);

        
        $__internal_6715a559ab2d5cc5237a35d5c7f6933dc66bfa2f80fc8c19747b875ab07f88c1->leave($__internal_6715a559ab2d5cc5237a35d5c7f6933dc66bfa2f80fc8c19747b875ab07f88c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
