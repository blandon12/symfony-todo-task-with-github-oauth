<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c462d4df3e7c41527e951fb4433428c1d51d7ebaf9d35f527766af0a3742d4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c462d4df3e7c41527e951fb4433428c1d51d7ebaf9d35f527766af0a3742d4ef->enter($__internal_c462d4df3e7c41527e951fb4433428c1d51d7ebaf9d35f527766af0a3742d4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_aad5a8eea2c567bc73f2d49845b82560bd4699078793dc7d0dfc42f19f3f9b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad5a8eea2c567bc73f2d49845b82560bd4699078793dc7d0dfc42f19f3f9b56->enter($__internal_aad5a8eea2c567bc73f2d49845b82560bd4699078793dc7d0dfc42f19f3f9b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c462d4df3e7c41527e951fb4433428c1d51d7ebaf9d35f527766af0a3742d4ef->leave($__internal_c462d4df3e7c41527e951fb4433428c1d51d7ebaf9d35f527766af0a3742d4ef_prof);

        
        $__internal_aad5a8eea2c567bc73f2d49845b82560bd4699078793dc7d0dfc42f19f3f9b56->leave($__internal_aad5a8eea2c567bc73f2d49845b82560bd4699078793dc7d0dfc42f19f3f9b56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd6e6a7159c265b4a5fa7f2d9978ca4cfb0ba6b5bbfd8ca974423d9a6d0d3822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6e6a7159c265b4a5fa7f2d9978ca4cfb0ba6b5bbfd8ca974423d9a6d0d3822->enter($__internal_bd6e6a7159c265b4a5fa7f2d9978ca4cfb0ba6b5bbfd8ca974423d9a6d0d3822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_560a35d865f7952010cb781a17e88e18a19bba212cf805eb7fc9b9aee16330c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560a35d865f7952010cb781a17e88e18a19bba212cf805eb7fc9b9aee16330c1->enter($__internal_560a35d865f7952010cb781a17e88e18a19bba212cf805eb7fc9b9aee16330c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_560a35d865f7952010cb781a17e88e18a19bba212cf805eb7fc9b9aee16330c1->leave($__internal_560a35d865f7952010cb781a17e88e18a19bba212cf805eb7fc9b9aee16330c1_prof);

        
        $__internal_bd6e6a7159c265b4a5fa7f2d9978ca4cfb0ba6b5bbfd8ca974423d9a6d0d3822->leave($__internal_bd6e6a7159c265b4a5fa7f2d9978ca4cfb0ba6b5bbfd8ca974423d9a6d0d3822_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd173a22bc3b802d63e41de159ef65870444bac056a35f5782c91311232be9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd173a22bc3b802d63e41de159ef65870444bac056a35f5782c91311232be9e8->enter($__internal_dd173a22bc3b802d63e41de159ef65870444bac056a35f5782c91311232be9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8512f0c30a75ce8a6867d0f743b4159d6998e6dc26c1e1a3d6383f00bcb3027e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8512f0c30a75ce8a6867d0f743b4159d6998e6dc26c1e1a3d6383f00bcb3027e->enter($__internal_8512f0c30a75ce8a6867d0f743b4159d6998e6dc26c1e1a3d6383f00bcb3027e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8512f0c30a75ce8a6867d0f743b4159d6998e6dc26c1e1a3d6383f00bcb3027e->leave($__internal_8512f0c30a75ce8a6867d0f743b4159d6998e6dc26c1e1a3d6383f00bcb3027e_prof);

        
        $__internal_dd173a22bc3b802d63e41de159ef65870444bac056a35f5782c91311232be9e8->leave($__internal_dd173a22bc3b802d63e41de159ef65870444bac056a35f5782c91311232be9e8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc9351a99e17e432d0127c5f61b5ad56d336ae01aeb14c97ee1bdba02b42bed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9351a99e17e432d0127c5f61b5ad56d336ae01aeb14c97ee1bdba02b42bed7->enter($__internal_fc9351a99e17e432d0127c5f61b5ad56d336ae01aeb14c97ee1bdba02b42bed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae3d02d949fba5d0d3d700cd0300de75542829ee608fd6dc04da11329d1ff1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3d02d949fba5d0d3d700cd0300de75542829ee608fd6dc04da11329d1ff1e5->enter($__internal_ae3d02d949fba5d0d3d700cd0300de75542829ee608fd6dc04da11329d1ff1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae3d02d949fba5d0d3d700cd0300de75542829ee608fd6dc04da11329d1ff1e5->leave($__internal_ae3d02d949fba5d0d3d700cd0300de75542829ee608fd6dc04da11329d1ff1e5_prof);

        
        $__internal_fc9351a99e17e432d0127c5f61b5ad56d336ae01aeb14c97ee1bdba02b42bed7->leave($__internal_fc9351a99e17e432d0127c5f61b5ad56d336ae01aeb14c97ee1bdba02b42bed7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
