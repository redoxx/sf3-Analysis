<?php

/* MainBundle:Default:navigation.html.twig */
class __TwigTemplate_5f86fd879522d100afbe6b0e74a94f1b13d19df978cdf25a6efe2743c41a9e2a extends Twig_Template
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
        $__internal_ec9854fb4f9fd4af18d95fa4c038a831580d4f455f91bb81ec6c6bc83eb688b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9854fb4f9fd4af18d95fa4c038a831580d4f455f91bb81ec6c6bc83eb688b1->enter($__internal_ec9854fb4f9fd4af18d95fa4c038a831580d4f455f91bb81ec6c6bc83eb688b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:navigation.html.twig"));

        $__internal_ee3df5a40dfe7445850acba5c81884bdceff56e76e9c682f983e74e4fc33a086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3df5a40dfe7445850acba5c81884bdceff56e76e9c682f983e74e4fc33a086->enter($__internal_ee3df5a40dfe7445850acba5c81884bdceff56e76e9c682f983e74e4fc33a086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:navigation.html.twig"));

        // line 1
        echo "<div id=\"navbar\" class=\"navbar-collapse collapse\">
  <ul class=\"nav navbar-nav\">
    <li ";
        // line 3
        if (((isset($context["currentRoute"]) ? $context["currentRoute"] : $this->getContext($context, "currentRoute")) == "home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\">Home</a></li>
    <li ";
        // line 4
        if (((isset($context["currentRoute"]) ? $context["currentRoute"] : $this->getContext($context, "currentRoute")) == "movies")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_contact");
        echo "\">Contact</a></li>
    <li class=\"dropdown\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#\">Action</a></li>
        <li><a href=\"#\">Another action</a></li>
        <li><a href=\"#\">Something else here</a></li>
        <li role=\"separator\" class=\"divider\"></li>
        <li class=\"dropdown-header\">Nav header</li>
        <li><a href=\"#\">Separated link</a></li>
        <li><a href=\"#\">One more separated link</a></li>
      </ul>
    </li>
  </ul>
  <ul class=\"nav navbar-nav navbar-right\">
    <li><a href=\"\">Future feature</a></li>
  </ul>
</div>";
        
        $__internal_ec9854fb4f9fd4af18d95fa4c038a831580d4f455f91bb81ec6c6bc83eb688b1->leave($__internal_ec9854fb4f9fd4af18d95fa4c038a831580d4f455f91bb81ec6c6bc83eb688b1_prof);

        
        $__internal_ee3df5a40dfe7445850acba5c81884bdceff56e76e9c682f983e74e4fc33a086->leave($__internal_ee3df5a40dfe7445850acba5c81884bdceff56e76e9c682f983e74e4fc33a086_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"navbar\" class=\"navbar-collapse collapse\">
  <ul class=\"nav navbar-nav\">
    <li {% if currentRoute == \"home\" %} class=\"active\"{% endif %}><a href=\"{{ path('main_homepage') }}\">Home</a></li>
    <li {% if currentRoute == \"movies\" %} class=\"active\"{% endif %}><a href=\"{{ path('main_contact') }}\">Contact</a></li>
    <li class=\"dropdown\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#\">Action</a></li>
        <li><a href=\"#\">Another action</a></li>
        <li><a href=\"#\">Something else here</a></li>
        <li role=\"separator\" class=\"divider\"></li>
        <li class=\"dropdown-header\">Nav header</li>
        <li><a href=\"#\">Separated link</a></li>
        <li><a href=\"#\">One more separated link</a></li>
      </ul>
    </li>
  </ul>
  <ul class=\"nav navbar-nav navbar-right\">
    <li><a href=\"\">Future feature</a></li>
  </ul>
</div>", "MainBundle:Default:navigation.html.twig", "/var/www/myprojsf3/src/MyApp/MainBundle/Resources/views/Default/navigation.html.twig");
    }
}
