<?php

/* ::base.html.twig */
class __TwigTemplate_ca371b499a1b84f7d4f609e17b97cca4d5abe5493791f2f600ac1b67aee903e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03d4b775750f5f5d8551bd8c921be1d330b60d6dfcb225f94083a330169dbc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d4b775750f5f5d8551bd8c921be1d330b60d6dfcb225f94083a330169dbc4e->enter($__internal_03d4b775750f5f5d8551bd8c921be1d330b60d6dfcb225f94083a330169dbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_1807ccd0109ed58857160aafd86c27ef63a0714e8c3cba901f13ce86ae8c0257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1807ccd0109ed58857160aafd86c27ef63a0714e8c3cba901f13ce86ae8c0257->enter($__internal_1807ccd0109ed58857160aafd86c27ef63a0714e8c3cba901f13ce86ae8c0257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_03d4b775750f5f5d8551bd8c921be1d330b60d6dfcb225f94083a330169dbc4e->leave($__internal_03d4b775750f5f5d8551bd8c921be1d330b60d6dfcb225f94083a330169dbc4e_prof);

        
        $__internal_1807ccd0109ed58857160aafd86c27ef63a0714e8c3cba901f13ce86ae8c0257->leave($__internal_1807ccd0109ed58857160aafd86c27ef63a0714e8c3cba901f13ce86ae8c0257_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_56b275d4c2a450cda8a4f6d3d60ff1bc19f936b693fe901cae99115d042d492e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b275d4c2a450cda8a4f6d3d60ff1bc19f936b693fe901cae99115d042d492e->enter($__internal_56b275d4c2a450cda8a4f6d3d60ff1bc19f936b693fe901cae99115d042d492e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e684f9127dc94ac606d004728c9bcfb1862fb50c238dd4010690754a974c1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e684f9127dc94ac606d004728c9bcfb1862fb50c238dd4010690754a974c1bd->enter($__internal_5e684f9127dc94ac606d004728c9bcfb1862fb50c238dd4010690754a974c1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5e684f9127dc94ac606d004728c9bcfb1862fb50c238dd4010690754a974c1bd->leave($__internal_5e684f9127dc94ac606d004728c9bcfb1862fb50c238dd4010690754a974c1bd_prof);

        
        $__internal_56b275d4c2a450cda8a4f6d3d60ff1bc19f936b693fe901cae99115d042d492e->leave($__internal_56b275d4c2a450cda8a4f6d3d60ff1bc19f936b693fe901cae99115d042d492e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7448920320f37d5544a08c6b2ccbb5360b1776b1c9d8c6e3822fd407cdd2f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7448920320f37d5544a08c6b2ccbb5360b1776b1c9d8c6e3822fd407cdd2f25->enter($__internal_a7448920320f37d5544a08c6b2ccbb5360b1776b1c9d8c6e3822fd407cdd2f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da01bc04d236081c3e3d896f1f208c6a50b25d35a1b43f0ff8381c79e64e26c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da01bc04d236081c3e3d896f1f208c6a50b25d35a1b43f0ff8381c79e64e26c0->enter($__internal_da01bc04d236081c3e3d896f1f208c6a50b25d35a1b43f0ff8381c79e64e26c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fddb9b6_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fddb9b6.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_da01bc04d236081c3e3d896f1f208c6a50b25d35a1b43f0ff8381c79e64e26c0->leave($__internal_da01bc04d236081c3e3d896f1f208c6a50b25d35a1b43f0ff8381c79e64e26c0_prof);

        
        $__internal_a7448920320f37d5544a08c6b2ccbb5360b1776b1c9d8c6e3822fd407cdd2f25->leave($__internal_a7448920320f37d5544a08c6b2ccbb5360b1776b1c9d8c6e3822fd407cdd2f25_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_563ca7a576df53e49f989ec2f19874b8a4b5f328e0a4a819428669ec313d9c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563ca7a576df53e49f989ec2f19874b8a4b5f328e0a4a819428669ec313d9c36->enter($__internal_563ca7a576df53e49f989ec2f19874b8a4b5f328e0a4a819428669ec313d9c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_857a3f867f34940f9fa14f1614186d39f7d08f198280caea3003f1f7e5370407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857a3f867f34940f9fa14f1614186d39f7d08f198280caea3003f1f7e5370407->enter($__internal_857a3f867f34940f9fa14f1614186d39f7d08f198280caea3003f1f7e5370407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 15
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MainBundle:Default:navigation"));
        echo "
        ";
        
        $__internal_857a3f867f34940f9fa14f1614186d39f7d08f198280caea3003f1f7e5370407->leave($__internal_857a3f867f34940f9fa14f1614186d39f7d08f198280caea3003f1f7e5370407_prof);

        
        $__internal_563ca7a576df53e49f989ec2f19874b8a4b5f328e0a4a819428669ec313d9c36->leave($__internal_563ca7a576df53e49f989ec2f19874b8a4b5f328e0a4a819428669ec313d9c36_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_03337c9645a58661603f41d274622ff46299a8573f4d192326e46e485e206d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03337c9645a58661603f41d274622ff46299a8573f4d192326e46e485e206d8e->enter($__internal_03337c9645a58661603f41d274622ff46299a8573f4d192326e46e485e206d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf9e7306ae5c8dcd7bf1ebd6198be262f28437351c1ae754c6b26eaff664953f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9e7306ae5c8dcd7bf1ebd6198be262f28437351c1ae754c6b26eaff664953f->enter($__internal_cf9e7306ae5c8dcd7bf1ebd6198be262f28437351c1ae754c6b26eaff664953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf9e7306ae5c8dcd7bf1ebd6198be262f28437351c1ae754c6b26eaff664953f->leave($__internal_cf9e7306ae5c8dcd7bf1ebd6198be262f28437351c1ae754c6b26eaff664953f_prof);

        
        $__internal_03337c9645a58661603f41d274622ff46299a8573f4d192326e46e485e206d8e->leave($__internal_03337c9645a58661603f41d274622ff46299a8573f4d192326e46e485e206d8e_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ed8d9eb814e7808b66f8556792bb495807584c00be1d09c898d22ae78c53811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed8d9eb814e7808b66f8556792bb495807584c00be1d09c898d22ae78c53811->enter($__internal_0ed8d9eb814e7808b66f8556792bb495807584c00be1d09c898d22ae78c53811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd279b62f928e92efbbfa090d71a4f0f152b3d095d9f8bca5e80baa146b3cf80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd279b62f928e92efbbfa090d71a4f0f152b3d095d9f8bca5e80baa146b3cf80->enter($__internal_cd279b62f928e92efbbfa090d71a4f0f152b3d095d9f8bca5e80baa146b3cf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/a56fa94_part_1.js");
            // line 20
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/a56fa94_part_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/a56fa94.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        ";
        
        $__internal_cd279b62f928e92efbbfa090d71a4f0f152b3d095d9f8bca5e80baa146b3cf80->leave($__internal_cd279b62f928e92efbbfa090d71a4f0f152b3d095d9f8bca5e80baa146b3cf80_prof);

        
        $__internal_0ed8d9eb814e7808b66f8556792bb495807584c00be1d09c898d22ae78c53811->leave($__internal_0ed8d9eb814e7808b66f8556792bb495807584c00be1d09c898d22ae78c53811_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 22,  178 => 20,  173 => 19,  164 => 18,  147 => 17,  134 => 15,  125 => 14,  115 => 10,  101 => 8,  96 => 7,  87 => 6,  69 => 5,  57 => 23,  54 => 18,  51 => 17,  49 => 14,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            {% stylesheets '@bootstrap_css' %}
                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset_url }}\"/>
            {% endstylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block nav %}
            {{ render(controller('MainBundle:Default:navigation')) }}
        {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
            {% javascripts '@jquery' '@bootstrap_js' %}
                <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/myprojsf3/app/Resources/views/base.html.twig");
    }
}
