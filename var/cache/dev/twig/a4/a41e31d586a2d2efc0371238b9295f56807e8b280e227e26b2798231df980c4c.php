<?php

/* @Framework/Form/choice_widget_collapsed.html.php */
class __TwigTemplate_7a93295c00c74d6111e4717db56e2f1bc40d0eef12fd8707f1c34d7fcf13f520 extends Twig_Template
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
        $__internal_1cc0b964e7c0696fc9ddf60cc0758ba4ddf89c3b80601507aed1a9f114b6ca36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc0b964e7c0696fc9ddf60cc0758ba4ddf89c3b80601507aed1a9f114b6ca36->enter($__internal_1cc0b964e7c0696fc9ddf60cc0758ba4ddf89c3b80601507aed1a9f114b6ca36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        $__internal_325100bb809386a60f4efe92e3907f50d1b229c0dcfdc6902ee32889eca32a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325100bb809386a60f4efe92e3907f50d1b229c0dcfdc6902ee32889eca32a32->enter($__internal_325100bb809386a60f4efe92e3907f50d1b229c0dcfdc6902ee32889eca32a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        // line 1
        echo "<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
";
        
        $__internal_1cc0b964e7c0696fc9ddf60cc0758ba4ddf89c3b80601507aed1a9f114b6ca36->leave($__internal_1cc0b964e7c0696fc9ddf60cc0758ba4ddf89c3b80601507aed1a9f114b6ca36_prof);

        
        $__internal_325100bb809386a60f4efe92e3907f50d1b229c0dcfdc6902ee32889eca32a32->leave($__internal_325100bb809386a60f4efe92e3907f50d1b229c0dcfdc6902ee32889eca32a32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_collapsed.html.php";
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
        return new Twig_Source("<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
", "@Framework/Form/choice_widget_collapsed.html.php", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_collapsed.html.php");
    }
}
