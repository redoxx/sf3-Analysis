<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_e86a7ed9277f19b6b0c76fc02c1781eef1337a252a075d240e9f7fad21e69799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d24f25fbda9bc57afb723bedc6155b315a21906bf77343b73892ce2baec19432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24f25fbda9bc57afb723bedc6155b315a21906bf77343b73892ce2baec19432->enter($__internal_d24f25fbda9bc57afb723bedc6155b315a21906bf77343b73892ce2baec19432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:events.html.twig"));

        $__internal_204941d93131b44b97496fc933ed8c1d272967539e68ee1f05ff7a0c55a2c5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204941d93131b44b97496fc933ed8c1d272967539e68ee1f05ff7a0c55a2c5b2->enter($__internal_204941d93131b44b97496fc933ed8c1d272967539e68ee1f05ff7a0c55a2c5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24f25fbda9bc57afb723bedc6155b315a21906bf77343b73892ce2baec19432->leave($__internal_d24f25fbda9bc57afb723bedc6155b315a21906bf77343b73892ce2baec19432_prof);

        
        $__internal_204941d93131b44b97496fc933ed8c1d272967539e68ee1f05ff7a0c55a2c5b2->leave($__internal_204941d93131b44b97496fc933ed8c1d272967539e68ee1f05ff7a0c55a2c5b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5572d7c2123172def8e21290c4c847e69666e04a8ead4ad097c591142efd0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5572d7c2123172def8e21290c4c847e69666e04a8ead4ad097c591142efd0fe->enter($__internal_b5572d7c2123172def8e21290c4c847e69666e04a8ead4ad097c591142efd0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3beb7aae81da020ee7740d67b206c2702e4faac2859ca15edb53923c5382257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3beb7aae81da020ee7740d67b206c2702e4faac2859ca15edb53923c5382257->enter($__internal_c3beb7aae81da020ee7740d67b206c2702e4faac2859ca15edb53923c5382257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_c3beb7aae81da020ee7740d67b206c2702e4faac2859ca15edb53923c5382257->leave($__internal_c3beb7aae81da020ee7740d67b206c2702e4faac2859ca15edb53923c5382257_prof);

        
        $__internal_b5572d7c2123172def8e21290c4c847e69666e04a8ead4ad097c591142efd0fe->leave($__internal_b5572d7c2123172def8e21290c4c847e69666e04a8ead4ad097c591142efd0fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6959275871640233e89e27834eec482b09b5ff2245af8122fc134c90c55f0a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6959275871640233e89e27834eec482b09b5ff2245af8122fc134c90c55f0a83->enter($__internal_6959275871640233e89e27834eec482b09b5ff2245af8122fc134c90c55f0a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0019fb11dea385dd44494144531ab19d4907817fb16795a4663350cd87543c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0019fb11dea385dd44494144531ab19d4907817fb16795a4663350cd87543c6f->enter($__internal_0019fb11dea385dd44494144531ab19d4907817fb16795a4663350cd87543c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_0019fb11dea385dd44494144531ab19d4907817fb16795a4663350cd87543c6f->leave($__internal_0019fb11dea385dd44494144531ab19d4907817fb16795a4663350cd87543c6f_prof);

        
        $__internal_6959275871640233e89e27834eec482b09b5ff2245af8122fc134c90c55f0a83->leave($__internal_6959275871640233e89e27834eec482b09b5ff2245af8122fc134c90c55f0a83_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ccd750c2f2d6754b51bf307eba06225a8aadbf554d19e83b8e9e5f2d74d9efcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ccd750c2f2d6754b51bf307eba06225a8aadbf554d19e83b8e9e5f2d74d9efcb->enter($__internal_ccd750c2f2d6754b51bf307eba06225a8aadbf554d19e83b8e9e5f2d74d9efcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_7db2ceb15034c692d6cae699b0f7f1be52c33561ca8618f1d75875497da5bf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7db2ceb15034c692d6cae699b0f7f1be52c33561ca8618f1d75875497da5bf1a->enter($__internal_7db2ceb15034c692d6cae699b0f7f1be52c33561ca8618f1d75875497da5bf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, (isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners"))), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != (isset($context["previous_event"]) ? $context["previous_event"] : $this->getContext($context, "previous_event"))))) {
                    // line 64
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "data", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_7db2ceb15034c692d6cae699b0f7f1be52c33561ca8618f1d75875497da5bf1a->leave($__internal_7db2ceb15034c692d6cae699b0f7f1be52c33561ca8618f1d75875497da5bf1a_prof);

            
            $__internal_ccd750c2f2d6754b51bf307eba06225a8aadbf554d19e83b8e9e5f2d74d9efcb->leave($__internal_ccd750c2f2d6754b51bf307eba06225a8aadbf554d19e83b8e9e5f2d74d9efcb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.data) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "WebProfilerBundle:Collector:events.html.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}
