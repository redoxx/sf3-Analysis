<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_92d666b60c8b704235799647e3c4332cee32810d8d37c314a74335b2dfe3fb7b extends Twig_Template
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
        $__internal_9b629094971752879c9e82ec531b4c81c58c71803bbbebdd02488dda3ae13646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b629094971752879c9e82ec531b4c81c58c71803bbbebdd02488dda3ae13646->enter($__internal_9b629094971752879c9e82ec531b4c81c58c71803bbbebdd02488dda3ae13646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e58ad632fbb1286777744a8a651153d56af7ad786b1d7cc40821b481d919473c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58ad632fbb1286777744a8a651153d56af7ad786b1d7cc40821b481d919473c->enter($__internal_e58ad632fbb1286777744a8a651153d56af7ad786b1d7cc40821b481d919473c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9b629094971752879c9e82ec531b4c81c58c71803bbbebdd02488dda3ae13646->leave($__internal_9b629094971752879c9e82ec531b4c81c58c71803bbbebdd02488dda3ae13646_prof);

        
        $__internal_e58ad632fbb1286777744a8a651153d56af7ad786b1d7cc40821b481d919473c->leave($__internal_e58ad632fbb1286777744a8a651153d56af7ad786b1d7cc40821b481d919473c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
