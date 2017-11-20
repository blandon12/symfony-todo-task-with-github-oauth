<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_50ab6483f543fac178343d80a13d30c2b733681b4859ea4b75ea971728db567d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ab6483f543fac178343d80a13d30c2b733681b4859ea4b75ea971728db567d->enter($__internal_50ab6483f543fac178343d80a13d30c2b733681b4859ea4b75ea971728db567d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ffd93e88b3fae1429d912e37375ca9f9c982de02ea1fdfe34877dc004f654de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd93e88b3fae1429d912e37375ca9f9c982de02ea1fdfe34877dc004f654de8->enter($__internal_ffd93e88b3fae1429d912e37375ca9f9c982de02ea1fdfe34877dc004f654de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ab6483f543fac178343d80a13d30c2b733681b4859ea4b75ea971728db567d->leave($__internal_50ab6483f543fac178343d80a13d30c2b733681b4859ea4b75ea971728db567d_prof);

        
        $__internal_ffd93e88b3fae1429d912e37375ca9f9c982de02ea1fdfe34877dc004f654de8->leave($__internal_ffd93e88b3fae1429d912e37375ca9f9c982de02ea1fdfe34877dc004f654de8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60f1edacc6beec0656fe53f7c2061ece8f79d3e974a86c8ff01ca79049a9d4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f1edacc6beec0656fe53f7c2061ece8f79d3e974a86c8ff01ca79049a9d4a3->enter($__internal_60f1edacc6beec0656fe53f7c2061ece8f79d3e974a86c8ff01ca79049a9d4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_42d596a7a07c773749243f6b220886c39b3e98b13e45d3bb5a9e4b622956d172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d596a7a07c773749243f6b220886c39b3e98b13e45d3bb5a9e4b622956d172->enter($__internal_42d596a7a07c773749243f6b220886c39b3e98b13e45d3bb5a9e4b622956d172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_42d596a7a07c773749243f6b220886c39b3e98b13e45d3bb5a9e4b622956d172->leave($__internal_42d596a7a07c773749243f6b220886c39b3e98b13e45d3bb5a9e4b622956d172_prof);

        
        $__internal_60f1edacc6beec0656fe53f7c2061ece8f79d3e974a86c8ff01ca79049a9d4a3->leave($__internal_60f1edacc6beec0656fe53f7c2061ece8f79d3e974a86c8ff01ca79049a9d4a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65a121c14940778a37e594b62649e97210611d649ca76d228cacc5d92185c117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a121c14940778a37e594b62649e97210611d649ca76d228cacc5d92185c117->enter($__internal_65a121c14940778a37e594b62649e97210611d649ca76d228cacc5d92185c117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8b073a2beb17b61fc40a3f29492d57c8f85f7db2f9642bd53efa8f386e2f10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b073a2beb17b61fc40a3f29492d57c8f85f7db2f9642bd53efa8f386e2f10b->enter($__internal_f8b073a2beb17b61fc40a3f29492d57c8f85f7db2f9642bd53efa8f386e2f10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8b073a2beb17b61fc40a3f29492d57c8f85f7db2f9642bd53efa8f386e2f10b->leave($__internal_f8b073a2beb17b61fc40a3f29492d57c8f85f7db2f9642bd53efa8f386e2f10b_prof);

        
        $__internal_65a121c14940778a37e594b62649e97210611d649ca76d228cacc5d92185c117->leave($__internal_65a121c14940778a37e594b62649e97210611d649ca76d228cacc5d92185c117_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c231a23846cd10d557615c690a2b50105e114cc32e1990d6ff14a7bb362f11c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c231a23846cd10d557615c690a2b50105e114cc32e1990d6ff14a7bb362f11c9->enter($__internal_c231a23846cd10d557615c690a2b50105e114cc32e1990d6ff14a7bb362f11c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f679f113ee36effd134069e28ec8f53d0782f2475549eed30d74778f188781d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f679f113ee36effd134069e28ec8f53d0782f2475549eed30d74778f188781d6->enter($__internal_f679f113ee36effd134069e28ec8f53d0782f2475549eed30d74778f188781d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f679f113ee36effd134069e28ec8f53d0782f2475549eed30d74778f188781d6->leave($__internal_f679f113ee36effd134069e28ec8f53d0782f2475549eed30d74778f188781d6_prof);

        
        $__internal_c231a23846cd10d557615c690a2b50105e114cc32e1990d6ff14a7bb362f11c9->leave($__internal_c231a23846cd10d557615c690a2b50105e114cc32e1990d6ff14a7bb362f11c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
