<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0f60a182e96095f82f26c78cc8609b0510304d3aae8c3f4236caec4a84dc0f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f454d3e1e276b2e841ee6e71d524b9c58da7edb1b2685db25fa7804921033b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f454d3e1e276b2e841ee6e71d524b9c58da7edb1b2685db25fa7804921033b83->enter($__internal_f454d3e1e276b2e841ee6e71d524b9c58da7edb1b2685db25fa7804921033b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a12a17a99fea533a40cb9c9a64b79ec2face3290e74f3de5e10be56115f1201d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12a17a99fea533a40cb9c9a64b79ec2face3290e74f3de5e10be56115f1201d->enter($__internal_a12a17a99fea533a40cb9c9a64b79ec2face3290e74f3de5e10be56115f1201d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f454d3e1e276b2e841ee6e71d524b9c58da7edb1b2685db25fa7804921033b83->leave($__internal_f454d3e1e276b2e841ee6e71d524b9c58da7edb1b2685db25fa7804921033b83_prof);

        
        $__internal_a12a17a99fea533a40cb9c9a64b79ec2face3290e74f3de5e10be56115f1201d->leave($__internal_a12a17a99fea533a40cb9c9a64b79ec2face3290e74f3de5e10be56115f1201d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e1ae38ad9e542dc8e74a11c1139244ea035b9a317930f548002de7401c03eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1ae38ad9e542dc8e74a11c1139244ea035b9a317930f548002de7401c03eb2->enter($__internal_4e1ae38ad9e542dc8e74a11c1139244ea035b9a317930f548002de7401c03eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0612656a08723216012f30dc4178e664e3c8b6134008c13f6dc8e4485b692488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0612656a08723216012f30dc4178e664e3c8b6134008c13f6dc8e4485b692488->enter($__internal_0612656a08723216012f30dc4178e664e3c8b6134008c13f6dc8e4485b692488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0612656a08723216012f30dc4178e664e3c8b6134008c13f6dc8e4485b692488->leave($__internal_0612656a08723216012f30dc4178e664e3c8b6134008c13f6dc8e4485b692488_prof);

        
        $__internal_4e1ae38ad9e542dc8e74a11c1139244ea035b9a317930f548002de7401c03eb2->leave($__internal_4e1ae38ad9e542dc8e74a11c1139244ea035b9a317930f548002de7401c03eb2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_81b92a9c753cdbe80e5b0bf549c5ce9375356f007abc98af6d40cb15975f64d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b92a9c753cdbe80e5b0bf549c5ce9375356f007abc98af6d40cb15975f64d7->enter($__internal_81b92a9c753cdbe80e5b0bf549c5ce9375356f007abc98af6d40cb15975f64d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d635e397462f6358678a1f308872962e010d31de7264d95a9fbbbc0069365cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d635e397462f6358678a1f308872962e010d31de7264d95a9fbbbc0069365cb7->enter($__internal_d635e397462f6358678a1f308872962e010d31de7264d95a9fbbbc0069365cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d635e397462f6358678a1f308872962e010d31de7264d95a9fbbbc0069365cb7->leave($__internal_d635e397462f6358678a1f308872962e010d31de7264d95a9fbbbc0069365cb7_prof);

        
        $__internal_81b92a9c753cdbe80e5b0bf549c5ce9375356f007abc98af6d40cb15975f64d7->leave($__internal_81b92a9c753cdbe80e5b0bf549c5ce9375356f007abc98af6d40cb15975f64d7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_03e186609bd61d896476ac5e2a2d21ba71a920e64727d15aaad611ac8323dd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e186609bd61d896476ac5e2a2d21ba71a920e64727d15aaad611ac8323dd97->enter($__internal_03e186609bd61d896476ac5e2a2d21ba71a920e64727d15aaad611ac8323dd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e300123e0484a6af87ba4631c9e2edaef753f545fc8652c2a5c61b91827f262e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e300123e0484a6af87ba4631c9e2edaef753f545fc8652c2a5c61b91827f262e->enter($__internal_e300123e0484a6af87ba4631c9e2edaef753f545fc8652c2a5c61b91827f262e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e300123e0484a6af87ba4631c9e2edaef753f545fc8652c2a5c61b91827f262e->leave($__internal_e300123e0484a6af87ba4631c9e2edaef753f545fc8652c2a5c61b91827f262e_prof);

        
        $__internal_03e186609bd61d896476ac5e2a2d21ba71a920e64727d15aaad611ac8323dd97->leave($__internal_03e186609bd61d896476ac5e2a2d21ba71a920e64727d15aaad611ac8323dd97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/myprojsf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
