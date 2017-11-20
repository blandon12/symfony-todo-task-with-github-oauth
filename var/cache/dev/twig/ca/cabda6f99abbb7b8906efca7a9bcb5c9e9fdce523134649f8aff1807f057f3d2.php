<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_eb9002fb55cecb947622f193b235c430c53fe3e3ee0b1e38e38b293c77be06a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9002fb55cecb947622f193b235c430c53fe3e3ee0b1e38e38b293c77be06a6->enter($__internal_eb9002fb55cecb947622f193b235c430c53fe3e3ee0b1e38e38b293c77be06a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fd3cb475fb1a1344d285819f8ee9c446be4f893da8266c27ea927d9a36e147f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3cb475fb1a1344d285819f8ee9c446be4f893da8266c27ea927d9a36e147f4->enter($__internal_fd3cb475fb1a1344d285819f8ee9c446be4f893da8266c27ea927d9a36e147f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb9002fb55cecb947622f193b235c430c53fe3e3ee0b1e38e38b293c77be06a6->leave($__internal_eb9002fb55cecb947622f193b235c430c53fe3e3ee0b1e38e38b293c77be06a6_prof);

        
        $__internal_fd3cb475fb1a1344d285819f8ee9c446be4f893da8266c27ea927d9a36e147f4->leave($__internal_fd3cb475fb1a1344d285819f8ee9c446be4f893da8266c27ea927d9a36e147f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d7699d7e74ccaeb1e6d28b1a199d1b6773f52e44a9b39ffc78460f999c80da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7699d7e74ccaeb1e6d28b1a199d1b6773f52e44a9b39ffc78460f999c80da2->enter($__internal_0d7699d7e74ccaeb1e6d28b1a199d1b6773f52e44a9b39ffc78460f999c80da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b79389271b25489c979cbdc9deb4892b3fc395827a61276a74f02893322635c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79389271b25489c979cbdc9deb4892b3fc395827a61276a74f02893322635c8->enter($__internal_b79389271b25489c979cbdc9deb4892b3fc395827a61276a74f02893322635c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b79389271b25489c979cbdc9deb4892b3fc395827a61276a74f02893322635c8->leave($__internal_b79389271b25489c979cbdc9deb4892b3fc395827a61276a74f02893322635c8_prof);

        
        $__internal_0d7699d7e74ccaeb1e6d28b1a199d1b6773f52e44a9b39ffc78460f999c80da2->leave($__internal_0d7699d7e74ccaeb1e6d28b1a199d1b6773f52e44a9b39ffc78460f999c80da2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb8fc2bad3005298a8ba9f1ab847a3cf36513f6f5b75fefd8bb63c82239ab99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8fc2bad3005298a8ba9f1ab847a3cf36513f6f5b75fefd8bb63c82239ab99d->enter($__internal_cb8fc2bad3005298a8ba9f1ab847a3cf36513f6f5b75fefd8bb63c82239ab99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_edc5fcedbd648ce49b5d16d171dd38587aff0fdef8415ee25b78bdb091f2aefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc5fcedbd648ce49b5d16d171dd38587aff0fdef8415ee25b78bdb091f2aefb->enter($__internal_edc5fcedbd648ce49b5d16d171dd38587aff0fdef8415ee25b78bdb091f2aefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_edc5fcedbd648ce49b5d16d171dd38587aff0fdef8415ee25b78bdb091f2aefb->leave($__internal_edc5fcedbd648ce49b5d16d171dd38587aff0fdef8415ee25b78bdb091f2aefb_prof);

        
        $__internal_cb8fc2bad3005298a8ba9f1ab847a3cf36513f6f5b75fefd8bb63c82239ab99d->leave($__internal_cb8fc2bad3005298a8ba9f1ab847a3cf36513f6f5b75fefd8bb63c82239ab99d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c084db79011c3bca92dbcf34fb9531c0580f972202a17381b8e68f20cdd26c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c084db79011c3bca92dbcf34fb9531c0580f972202a17381b8e68f20cdd26c75->enter($__internal_c084db79011c3bca92dbcf34fb9531c0580f972202a17381b8e68f20cdd26c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b070766544e1b947697d02950e9d4c0cdc58dcdcb8762619129642d7af15dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b070766544e1b947697d02950e9d4c0cdc58dcdcb8762619129642d7af15dfe->enter($__internal_0b070766544e1b947697d02950e9d4c0cdc58dcdcb8762619129642d7af15dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0b070766544e1b947697d02950e9d4c0cdc58dcdcb8762619129642d7af15dfe->leave($__internal_0b070766544e1b947697d02950e9d4c0cdc58dcdcb8762619129642d7af15dfe_prof);

        
        $__internal_c084db79011c3bca92dbcf34fb9531c0580f972202a17381b8e68f20cdd26c75->leave($__internal_c084db79011c3bca92dbcf34fb9531c0580f972202a17381b8e68f20cdd26c75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
