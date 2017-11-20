<?php

/* default/new.html.twig */
class __TwigTemplate_adab6a60ce6da3bfd8ae8705ee8475dc0e225d35cafb024d087da0a658c37ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/new.html.twig", 2);
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
        $__internal_6f9f6a7c0d47ea8fc2c35295c502b32fd3103c483e68e580ac55a7bc3e742c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9f6a7c0d47ea8fc2c35295c502b32fd3103c483e68e580ac55a7bc3e742c2b->enter($__internal_6f9f6a7c0d47ea8fc2c35295c502b32fd3103c483e68e580ac55a7bc3e742c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $__internal_2b7760f225154e0759534439c70ff968fb4d588fb0f94aca013d7ecf313053e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7760f225154e0759534439c70ff968fb4d588fb0f94aca013d7ecf313053e3->enter($__internal_2b7760f225154e0759534439c70ff968fb4d588fb0f94aca013d7ecf313053e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f9f6a7c0d47ea8fc2c35295c502b32fd3103c483e68e580ac55a7bc3e742c2b->leave($__internal_6f9f6a7c0d47ea8fc2c35295c502b32fd3103c483e68e580ac55a7bc3e742c2b_prof);

        
        $__internal_2b7760f225154e0759534439c70ff968fb4d588fb0f94aca013d7ecf313053e3->leave($__internal_2b7760f225154e0759534439c70ff968fb4d588fb0f94aca013d7ecf313053e3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e21f18cafe5471b1e261bf31a385ff41cd045e654322de21dbccda100c017d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21f18cafe5471b1e261bf31a385ff41cd045e654322de21dbccda100c017d72->enter($__internal_e21f18cafe5471b1e261bf31a385ff41cd045e654322de21dbccda100c017d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c89eeac1466302405935da24235b7b20d591f962abf125849cd01841abfb8900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89eeac1466302405935da24235b7b20d591f962abf125849cd01841abfb8900->enter($__internal_c89eeac1466302405935da24235b7b20d591f962abf125849cd01841abfb8900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c89eeac1466302405935da24235b7b20d591f962abf125849cd01841abfb8900->leave($__internal_c89eeac1466302405935da24235b7b20d591f962abf125849cd01841abfb8900_prof);

        
        $__internal_e21f18cafe5471b1e261bf31a385ff41cd045e654322de21dbccda100c017d72->leave($__internal_e21f18cafe5471b1e261bf31a385ff41cd045e654322de21dbccda100c017d72_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/default/new.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
{% endblock %}
", "default/new.html.twig", "/var/www/task/app/Resources/views/default/new.html.twig");
    }
}
