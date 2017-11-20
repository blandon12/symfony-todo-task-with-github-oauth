<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a782de23b5ec41761182fe3240cbe60846f185404f114490ab6af64ea42ae99a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a782de23b5ec41761182fe3240cbe60846f185404f114490ab6af64ea42ae99a->enter($__internal_a782de23b5ec41761182fe3240cbe60846f185404f114490ab6af64ea42ae99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e934918df53988484256a3bf6fcf9ea2e0b34948ff852c23e072d648be78427d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e934918df53988484256a3bf6fcf9ea2e0b34948ff852c23e072d648be78427d->enter($__internal_e934918df53988484256a3bf6fcf9ea2e0b34948ff852c23e072d648be78427d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a782de23b5ec41761182fe3240cbe60846f185404f114490ab6af64ea42ae99a->leave($__internal_a782de23b5ec41761182fe3240cbe60846f185404f114490ab6af64ea42ae99a_prof);

        
        $__internal_e934918df53988484256a3bf6fcf9ea2e0b34948ff852c23e072d648be78427d->leave($__internal_e934918df53988484256a3bf6fcf9ea2e0b34948ff852c23e072d648be78427d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd37a1b692dd71e086f16a3641907612984c9784175ee0e211912e2293e03567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd37a1b692dd71e086f16a3641907612984c9784175ee0e211912e2293e03567->enter($__internal_dd37a1b692dd71e086f16a3641907612984c9784175ee0e211912e2293e03567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31e097737dfa3251a22ef0402860eef4e8108e223d909094dfa1cf21466dab88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e097737dfa3251a22ef0402860eef4e8108e223d909094dfa1cf21466dab88->enter($__internal_31e097737dfa3251a22ef0402860eef4e8108e223d909094dfa1cf21466dab88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_31e097737dfa3251a22ef0402860eef4e8108e223d909094dfa1cf21466dab88->leave($__internal_31e097737dfa3251a22ef0402860eef4e8108e223d909094dfa1cf21466dab88_prof);

        
        $__internal_dd37a1b692dd71e086f16a3641907612984c9784175ee0e211912e2293e03567->leave($__internal_dd37a1b692dd71e086f16a3641907612984c9784175ee0e211912e2293e03567_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0be151037c20db1ddf324c030292dc1eaab3288b7a34b41c8cb5037bd4ba0db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be151037c20db1ddf324c030292dc1eaab3288b7a34b41c8cb5037bd4ba0db8->enter($__internal_0be151037c20db1ddf324c030292dc1eaab3288b7a34b41c8cb5037bd4ba0db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_873523ed8b416221a900ec46c36d96c8dae396554eb511dd9f129f0a6a18fc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873523ed8b416221a900ec46c36d96c8dae396554eb511dd9f129f0a6a18fc93->enter($__internal_873523ed8b416221a900ec46c36d96c8dae396554eb511dd9f129f0a6a18fc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_873523ed8b416221a900ec46c36d96c8dae396554eb511dd9f129f0a6a18fc93->leave($__internal_873523ed8b416221a900ec46c36d96c8dae396554eb511dd9f129f0a6a18fc93_prof);

        
        $__internal_0be151037c20db1ddf324c030292dc1eaab3288b7a34b41c8cb5037bd4ba0db8->leave($__internal_0be151037c20db1ddf324c030292dc1eaab3288b7a34b41c8cb5037bd4ba0db8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_24ac21b6a3b39253943b94aaff5781deb96129975be6d495e9fac7d75f5b5351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ac21b6a3b39253943b94aaff5781deb96129975be6d495e9fac7d75f5b5351->enter($__internal_24ac21b6a3b39253943b94aaff5781deb96129975be6d495e9fac7d75f5b5351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6325e79a5337d2d6b935296df1bb597e0a458922a7b67e66665165c346a49f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6325e79a5337d2d6b935296df1bb597e0a458922a7b67e66665165c346a49f61->enter($__internal_6325e79a5337d2d6b935296df1bb597e0a458922a7b67e66665165c346a49f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6325e79a5337d2d6b935296df1bb597e0a458922a7b67e66665165c346a49f61->leave($__internal_6325e79a5337d2d6b935296df1bb597e0a458922a7b67e66665165c346a49f61_prof);

        
        $__internal_24ac21b6a3b39253943b94aaff5781deb96129975be6d495e9fac7d75f5b5351->leave($__internal_24ac21b6a3b39253943b94aaff5781deb96129975be6d495e9fac7d75f5b5351_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5de2ed8443f993dae9e2b94696b16f00dd62333e48fcaa3d9bc2b13b72ee83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5de2ed8443f993dae9e2b94696b16f00dd62333e48fcaa3d9bc2b13b72ee83e->enter($__internal_c5de2ed8443f993dae9e2b94696b16f00dd62333e48fcaa3d9bc2b13b72ee83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_69e502838dee496cab83b1f7ae6fabdd9dfb1703f4e9fb2e3c6e5893aeb90e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e502838dee496cab83b1f7ae6fabdd9dfb1703f4e9fb2e3c6e5893aeb90e28->enter($__internal_69e502838dee496cab83b1f7ae6fabdd9dfb1703f4e9fb2e3c6e5893aeb90e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69e502838dee496cab83b1f7ae6fabdd9dfb1703f4e9fb2e3c6e5893aeb90e28->leave($__internal_69e502838dee496cab83b1f7ae6fabdd9dfb1703f4e9fb2e3c6e5893aeb90e28_prof);

        
        $__internal_c5de2ed8443f993dae9e2b94696b16f00dd62333e48fcaa3d9bc2b13b72ee83e->leave($__internal_c5de2ed8443f993dae9e2b94696b16f00dd62333e48fcaa3d9bc2b13b72ee83e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/task/app/Resources/views/base.html.twig");
    }
}
