<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a111f84f737049f67ec196608ebad284d2c16dd1c51351ac6778a201adf8d06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a111f84f737049f67ec196608ebad284d2c16dd1c51351ac6778a201adf8d06b->enter($__internal_a111f84f737049f67ec196608ebad284d2c16dd1c51351ac6778a201adf8d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_477d92a18799745e0b4f4ae38dd419b249bf6dee00bfe099f6b53ae2954eb3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477d92a18799745e0b4f4ae38dd419b249bf6dee00bfe099f6b53ae2954eb3ec->enter($__internal_477d92a18799745e0b4f4ae38dd419b249bf6dee00bfe099f6b53ae2954eb3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a111f84f737049f67ec196608ebad284d2c16dd1c51351ac6778a201adf8d06b->leave($__internal_a111f84f737049f67ec196608ebad284d2c16dd1c51351ac6778a201adf8d06b_prof);

        
        $__internal_477d92a18799745e0b4f4ae38dd419b249bf6dee00bfe099f6b53ae2954eb3ec->leave($__internal_477d92a18799745e0b4f4ae38dd419b249bf6dee00bfe099f6b53ae2954eb3ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c4de9426fb3aa54680a4ac4d81ff40519a6581f0e0226b60c52038f7bcfeaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4de9426fb3aa54680a4ac4d81ff40519a6581f0e0226b60c52038f7bcfeaab->enter($__internal_6c4de9426fb3aa54680a4ac4d81ff40519a6581f0e0226b60c52038f7bcfeaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a99ba886204095bbcda565040a4def4e451c5f24f64124bb787e3cfa0ef7301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a99ba886204095bbcda565040a4def4e451c5f24f64124bb787e3cfa0ef7301->enter($__internal_5a99ba886204095bbcda565040a4def4e451c5f24f64124bb787e3cfa0ef7301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5a99ba886204095bbcda565040a4def4e451c5f24f64124bb787e3cfa0ef7301->leave($__internal_5a99ba886204095bbcda565040a4def4e451c5f24f64124bb787e3cfa0ef7301_prof);

        
        $__internal_6c4de9426fb3aa54680a4ac4d81ff40519a6581f0e0226b60c52038f7bcfeaab->leave($__internal_6c4de9426fb3aa54680a4ac4d81ff40519a6581f0e0226b60c52038f7bcfeaab_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e73ec1fe909a2ada8e74caeb1cc5de5cbb61d86870a18f550cb7054eac27f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e73ec1fe909a2ada8e74caeb1cc5de5cbb61d86870a18f550cb7054eac27f36->enter($__internal_7e73ec1fe909a2ada8e74caeb1cc5de5cbb61d86870a18f550cb7054eac27f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f380f052d909cbb47dd438c3098fa5c847bc542964daba5a113b7d9a3b56da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f380f052d909cbb47dd438c3098fa5c847bc542964daba5a113b7d9a3b56da0->enter($__internal_0f380f052d909cbb47dd438c3098fa5c847bc542964daba5a113b7d9a3b56da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0f380f052d909cbb47dd438c3098fa5c847bc542964daba5a113b7d9a3b56da0->leave($__internal_0f380f052d909cbb47dd438c3098fa5c847bc542964daba5a113b7d9a3b56da0_prof);

        
        $__internal_7e73ec1fe909a2ada8e74caeb1cc5de5cbb61d86870a18f550cb7054eac27f36->leave($__internal_7e73ec1fe909a2ada8e74caeb1cc5de5cbb61d86870a18f550cb7054eac27f36_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9bac2b3abb6b8f27cbe0779facfab0c683ab046484fb5a7355714dc9d9184c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9bac2b3abb6b8f27cbe0779facfab0c683ab046484fb5a7355714dc9d9184c7->enter($__internal_b9bac2b3abb6b8f27cbe0779facfab0c683ab046484fb5a7355714dc9d9184c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_687981dfd943965dddc75efeb104172ce5c5d6393a179d13c0dae6b923ecfd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687981dfd943965dddc75efeb104172ce5c5d6393a179d13c0dae6b923ecfd7d->enter($__internal_687981dfd943965dddc75efeb104172ce5c5d6393a179d13c0dae6b923ecfd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_687981dfd943965dddc75efeb104172ce5c5d6393a179d13c0dae6b923ecfd7d->leave($__internal_687981dfd943965dddc75efeb104172ce5c5d6393a179d13c0dae6b923ecfd7d_prof);

        
        $__internal_b9bac2b3abb6b8f27cbe0779facfab0c683ab046484fb5a7355714dc9d9184c7->leave($__internal_b9bac2b3abb6b8f27cbe0779facfab0c683ab046484fb5a7355714dc9d9184c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
