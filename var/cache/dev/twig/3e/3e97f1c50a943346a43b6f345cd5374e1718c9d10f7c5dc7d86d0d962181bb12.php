<?php

/* default/save.html.twig */
class __TwigTemplate_572e76a98b2ad39ffb9c10c34daf9c881cbaf25f3e3288223a562d5bb397fdaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/save.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e94618f1400bfcee396a4a86bb9664ae7a01a221098ca5c56c3fcda5482f4455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94618f1400bfcee396a4a86bb9664ae7a01a221098ca5c56c3fcda5482f4455->enter($__internal_e94618f1400bfcee396a4a86bb9664ae7a01a221098ca5c56c3fcda5482f4455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/save.html.twig"));

        $__internal_d1bd129b87fdb2e174ed4f61c53e0dcb5933530f28397f42861441454cc70926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bd129b87fdb2e174ed4f61c53e0dcb5933530f28397f42861441454cc70926->enter($__internal_d1bd129b87fdb2e174ed4f61c53e0dcb5933530f28397f42861441454cc70926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/save.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e94618f1400bfcee396a4a86bb9664ae7a01a221098ca5c56c3fcda5482f4455->leave($__internal_e94618f1400bfcee396a4a86bb9664ae7a01a221098ca5c56c3fcda5482f4455_prof);

        
        $__internal_d1bd129b87fdb2e174ed4f61c53e0dcb5933530f28397f42861441454cc70926->leave($__internal_d1bd129b87fdb2e174ed4f61c53e0dcb5933530f28397f42861441454cc70926_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aedf6b15c43292956ae4c20acd26b8341771e38d419e10bb7f4535967b56444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aedf6b15c43292956ae4c20acd26b8341771e38d419e10bb7f4535967b56444->enter($__internal_1aedf6b15c43292956ae4c20acd26b8341771e38d419e10bb7f4535967b56444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04c862adad69caa3361942a9e6dc73aebd9eed991bcba6c993f42199d4d4e275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c862adad69caa3361942a9e6dc73aebd9eed991bcba6c993f42199d4d4e275->enter($__internal_04c862adad69caa3361942a9e6dc73aebd9eed991bcba6c993f42199d4d4e275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<p>Task is submitted!</p>

<p><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addTask");
        echo "\">Add another one</a></p>

<p><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Back to homepage</a></p>

";
        
        $__internal_04c862adad69caa3361942a9e6dc73aebd9eed991bcba6c993f42199d4d4e275->leave($__internal_04c862adad69caa3361942a9e6dc73aebd9eed991bcba6c993f42199d4d4e275_prof);

        
        $__internal_1aedf6b15c43292956ae4c20acd26b8341771e38d419e10bb7f4535967b56444->leave($__internal_1aedf6b15c43292956ae4c20acd26b8341771e38d419e10bb7f4535967b56444_prof);

    }

    public function getTemplateName()
    {
        return "default/save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<p>Task is submitted!</p>

<p><a href=\"{{ path(\"addTask\") }}\">Add another one</a></p>

<p><a href=\"{{ path(\"homepage\") }}\">Back to homepage</a></p>

{% endblock %}", "default/save.html.twig", "/var/www/task/app/Resources/views/default/save.html.twig");
    }
}
