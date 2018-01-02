<?php

/* default/index.html.twig */
class __TwigTemplate_c2ac62140443d763b5eeaadac6da4e58bd2b22f00ba0e1eab06c53bf7c520b3a extends Twig_Template
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
        $__internal_594527b0970859d4c07640de4e8454649fc470bc2db509855cc20b0b01fe4df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594527b0970859d4c07640de4e8454649fc470bc2db509855cc20b0b01fe4df7->enter($__internal_594527b0970859d4c07640de4e8454649fc470bc2db509855cc20b0b01fe4df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_f7045b27c1aa960edd122c432e2dac05bd6ce139b440a305190ced3257567cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7045b27c1aa960edd122c432e2dac05bd6ce139b440a305190ced3257567cba->enter($__internal_f7045b27c1aa960edd122c432e2dac05bd6ce139b440a305190ced3257567cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594527b0970859d4c07640de4e8454649fc470bc2db509855cc20b0b01fe4df7->leave($__internal_594527b0970859d4c07640de4e8454649fc470bc2db509855cc20b0b01fe4df7_prof);

        
        $__internal_f7045b27c1aa960edd122c432e2dac05bd6ce139b440a305190ced3257567cba->leave($__internal_f7045b27c1aa960edd122c432e2dac05bd6ce139b440a305190ced3257567cba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24d9108fc6b5d9e9ef0132baed2e6d5f5aeb9d75d1b78a340f08db6d5dda3dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d9108fc6b5d9e9ef0132baed2e6d5f5aeb9d75d1b78a340f08db6d5dda3dd7->enter($__internal_24d9108fc6b5d9e9ef0132baed2e6d5f5aeb9d75d1b78a340f08db6d5dda3dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e95afd98cb41093aa693506aea159f8b478cef498df20ef2eb03b2c19874893d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95afd98cb41093aa693506aea159f8b478cef498df20ef2eb03b2c19874893d->enter($__internal_e95afd98cb41093aa693506aea159f8b478cef498df20ef2eb03b2c19874893d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-sm-4\">
</div>
<div class=\"col-sm-4\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t    <!-- Input Form -->
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "timeForm")));
        echo "
\t\t\t    <label for=\"form_strTime\">Start Time</label>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startTime", array()), 'widget', array("attr" => array("class" => "form-control input-small")));
        echo "
                <label for=\"form_endTime\">End Time</label>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endTime", array()), 'widget', array("attr" => array("class" => "form-control input-small")));
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "\t\t\t\t\t
\t\t</div>
\t\t<!-- Result -->
        <div class=\"row\">
\t\t\t";
        // line 18
        if ((($context["count"] ?? $this->getContext($context, "count")) != "")) {
            // line 19
            echo "\t\t        <div class=\"col-sm-12 alert alert-info\" id=\"message\">
\t\t\t\t    <h4> Bell count = ";
            // line 20
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo " </h4>
                </div>
            ";
        }
        // line 22
        echo "\t\t\t\t\t
\t\t</div>
\t</div>
</div>
<div class=\"col-sm-4\">
</div>
";
        
        $__internal_e95afd98cb41093aa693506aea159f8b478cef498df20ef2eb03b2c19874893d->leave($__internal_e95afd98cb41093aa693506aea159f8b478cef498df20ef2eb03b2c19874893d_prof);

        
        $__internal_24d9108fc6b5d9e9ef0132baed2e6d5f5aeb9d75d1b78a340f08db6d5dda3dd7->leave($__internal_24d9108fc6b5d9e9ef0132baed2e6d5f5aeb9d75d1b78a340f08db6d5dda3dd7_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d116d1e5cd472000c40d3aadff4ae874b880334f9efba1939dbd012e520ba045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d116d1e5cd472000c40d3aadff4ae874b880334f9efba1939dbd012e520ba045->enter($__internal_d116d1e5cd472000c40d3aadff4ae874b880334f9efba1939dbd012e520ba045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7c50cd451ec69651529cce687b9a9491f65e98722ce2b614174de31236a9bbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c50cd451ec69651529cce687b9a9491f65e98722ce2b614174de31236a9bbf8->enter($__internal_7c50cd451ec69651529cce687b9a9491f65e98722ce2b614174de31236a9bbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
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
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

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
        
        $__internal_7c50cd451ec69651529cce687b9a9491f65e98722ce2b614174de31236a9bbf8->leave($__internal_7c50cd451ec69651529cce687b9a9491f65e98722ce2b614174de31236a9bbf8_prof);

        
        $__internal_d116d1e5cd472000c40d3aadff4ae874b880334f9efba1939dbd012e520ba045->leave($__internal_d116d1e5cd472000c40d3aadff4ae874b880334f9efba1939dbd012e520ba045_prof);

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
        return array (  117 => 31,  108 => 30,  92 => 22,  86 => 20,  83 => 19,  81 => 18,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
<div class=\"col-sm-4\">
</div>
<div class=\"col-sm-4\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t    <!-- Input Form -->
            {{ form_start(form, {'attr': {'id': 'timeForm'}}) }}
\t\t\t    <label for=\"form_strTime\">Start Time</label>{{ form_widget(form.startTime, { 'attr': {'class': 'form-control input-small'} }) }}
                <label for=\"form_endTime\">End Time</label>{{ form_widget(form.endTime, { 'attr': {'class': 'form-control input-small'} }) }}
\t\t\t\t{{ form_widget(form.save, { 'attr': {'class': 'btn btn-primary'} }) }}
            {{ form_end(form) }}\t\t\t\t\t
\t\t</div>
\t\t<!-- Result -->
        <div class=\"row\">
\t\t\t{% if count != '' %}
\t\t        <div class=\"col-sm-12 alert alert-info\" id=\"message\">
\t\t\t\t    <h4> Bell count = {{ count }} </h4>
                </div>
            {% endif %}\t\t\t\t\t
\t\t</div>
\t</div>
</div>
<div class=\"col-sm-4\">
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
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

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
", "default/index.html.twig", "C:\\xampp\\htdocs\\sym_bell_counter\\app\\Resources\\views\\default\\index.html.twig");
    }
}
