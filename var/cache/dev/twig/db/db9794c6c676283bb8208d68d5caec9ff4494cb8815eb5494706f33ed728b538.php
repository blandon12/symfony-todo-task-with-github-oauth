<?php

/* default/index.html.twig */
class __TwigTemplate_eb06cea6897fcd0190b5b480f9660ee60e7cc875ac6347494ee121194322dc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ecb20bec931f040209d0792cc3e9c3dff6e1f66d054e825a67acd8635935c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ecb20bec931f040209d0792cc3e9c3dff6e1f66d054e825a67acd8635935c39->enter($__internal_0ecb20bec931f040209d0792cc3e9c3dff6e1f66d054e825a67acd8635935c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_31d2da87c46795513ae451f88d19e98fe762c19c9b593d188030e02d76b9221b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d2da87c46795513ae451f88d19e98fe762c19c9b593d188030e02d76b9221b->enter($__internal_31d2da87c46795513ae451f88d19e98fe762c19c9b593d188030e02d76b9221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ecb20bec931f040209d0792cc3e9c3dff6e1f66d054e825a67acd8635935c39->leave($__internal_0ecb20bec931f040209d0792cc3e9c3dff6e1f66d054e825a67acd8635935c39_prof);

        
        $__internal_31d2da87c46795513ae451f88d19e98fe762c19c9b593d188030e02d76b9221b->leave($__internal_31d2da87c46795513ae451f88d19e98fe762c19c9b593d188030e02d76b9221b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7498428481bdbf4a31e49001e7702a310d730cc00658e66e6c1a979e69ddc457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7498428481bdbf4a31e49001e7702a310d730cc00658e66e6c1a979e69ddc457->enter($__internal_7498428481bdbf4a31e49001e7702a310d730cc00658e66e6c1a979e69ddc457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c55d62f7d8893360d8f160cfb05f6f70a02793cc6ffab781b3e01c65fd552e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55d62f7d8893360d8f160cfb05f6f70a02793cc6ffab781b3e01c65fd552e72->enter($__internal_c55d62f7d8893360d8f160cfb05f6f70a02793cc6ffab781b3e01c65fd552e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h2>Todo Tasks</h2>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addTask");
        echo "\">add task</a>
                <table>
                    <thead><tr><td>Title</td><td>Due Date</td></tr></thead>
                    <tbody>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 13
            echo "                        <tr>
                            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "task", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dueDate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>


";
        
        $__internal_c55d62f7d8893360d8f160cfb05f6f70a02793cc6ffab781b3e01c65fd552e72->leave($__internal_c55d62f7d8893360d8f160cfb05f6f70a02793cc6ffab781b3e01c65fd552e72_prof);

        
        $__internal_7498428481bdbf4a31e49001e7702a310d730cc00658e66e6c1a979e69ddc457->leave($__internal_7498428481bdbf4a31e49001e7702a310d730cc00658e66e6c1a979e69ddc457_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96cdc0864cb0cef9b6a23cc05cc3e2b2be138a39d5b1d0712c83d1f3d4da8878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cdc0864cb0cef9b6a23cc05cc3e2b2be138a39d5b1d0712c83d1f3d4da8878->enter($__internal_96cdc0864cb0cef9b6a23cc05cc3e2b2be138a39d5b1d0712c83d1f3d4da8878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bfda719d631009ddbe2e194b866ac5cd2aa2f22efc0f8e15eb3327dc80fdbaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfda719d631009ddbe2e194b866ac5cd2aa2f22efc0f8e15eb3327dc80fdbaf9->enter($__internal_bfda719d631009ddbe2e194b866ac5cd2aa2f22efc0f8e15eb3327dc80fdbaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #welcome table td { border: 1px solid; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_bfda719d631009ddbe2e194b866ac5cd2aa2f22efc0f8e15eb3327dc80fdbaf9->leave($__internal_bfda719d631009ddbe2e194b866ac5cd2aa2f22efc0f8e15eb3327dc80fdbaf9_prof);

        
        $__internal_96cdc0864cb0cef9b6a23cc05cc3e2b2be138a39d5b1d0712c83d1f3d4da8878->leave($__internal_96cdc0864cb0cef9b6a23cc05cc3e2b2be138a39d5b1d0712c83d1f3d4da8878_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  100 => 27,  83 => 18,  74 => 15,  70 => 14,  67 => 13,  63 => 12,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h2>Todo Tasks</h2>
                <a href=\"{{ path('addTask') }}\">add task</a>
                <table>
                    <thead><tr><td>Title</td><td>Due Date</td></tr></thead>
                    <tbody>
                    {% for task in tasks %}
                        <tr>
                            <td>{{ task.task }}</td>
                            <td>{{ task.dueDate|date('Y-m-d') }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>


{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #welcome table td { border: 1px solid; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/var/www/task/app/Resources/views/default/index.html.twig");
    }
}
