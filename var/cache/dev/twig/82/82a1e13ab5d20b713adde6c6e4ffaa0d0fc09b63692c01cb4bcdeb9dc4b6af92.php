<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
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
        $__internal_1feca5c56e1927223754336c08021e90f325d1615f89120c1cc95c51060c73e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1feca5c56e1927223754336c08021e90f325d1615f89120c1cc95c51060c73e3->enter($__internal_1feca5c56e1927223754336c08021e90f325d1615f89120c1cc95c51060c73e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6b882d5d1ae21592dd35b379daf8e79e268adbd0508ea08764f4b10d064b53af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b882d5d1ae21592dd35b379daf8e79e268adbd0508ea08764f4b10d064b53af->enter($__internal_6b882d5d1ae21592dd35b379daf8e79e268adbd0508ea08764f4b10d064b53af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1feca5c56e1927223754336c08021e90f325d1615f89120c1cc95c51060c73e3->leave($__internal_1feca5c56e1927223754336c08021e90f325d1615f89120c1cc95c51060c73e3_prof);

        
        $__internal_6b882d5d1ae21592dd35b379daf8e79e268adbd0508ea08764f4b10d064b53af->leave($__internal_6b882d5d1ae21592dd35b379daf8e79e268adbd0508ea08764f4b10d064b53af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed3f7353fe44ad0721aa16e6d02d8e934a1b82aaa1bff626ad2e00c35e9432ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3f7353fe44ad0721aa16e6d02d8e934a1b82aaa1bff626ad2e00c35e9432ca->enter($__internal_ed3f7353fe44ad0721aa16e6d02d8e934a1b82aaa1bff626ad2e00c35e9432ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_01cf14d66cbbd153d816a4ee8a5538a89000ed74610da2b7d5e4c1ba120ba905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cf14d66cbbd153d816a4ee8a5538a89000ed74610da2b7d5e4c1ba120ba905->enter($__internal_01cf14d66cbbd153d816a4ee8a5538a89000ed74610da2b7d5e4c1ba120ba905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_01cf14d66cbbd153d816a4ee8a5538a89000ed74610da2b7d5e4c1ba120ba905->leave($__internal_01cf14d66cbbd153d816a4ee8a5538a89000ed74610da2b7d5e4c1ba120ba905_prof);

        
        $__internal_ed3f7353fe44ad0721aa16e6d02d8e934a1b82aaa1bff626ad2e00c35e9432ca->leave($__internal_ed3f7353fe44ad0721aa16e6d02d8e934a1b82aaa1bff626ad2e00c35e9432ca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3635f44993b79a0a093df41df7bb89d6dff5b8c7d167c82d40ca1ad748b7a7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3635f44993b79a0a093df41df7bb89d6dff5b8c7d167c82d40ca1ad748b7a7e6->enter($__internal_3635f44993b79a0a093df41df7bb89d6dff5b8c7d167c82d40ca1ad748b7a7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54c37c9a9be898fb7395f08be5c4d9d3179e0363847f9109ac7ee258eb35b8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c37c9a9be898fb7395f08be5c4d9d3179e0363847f9109ac7ee258eb35b8dd->enter($__internal_54c37c9a9be898fb7395f08be5c4d9d3179e0363847f9109ac7ee258eb35b8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_54c37c9a9be898fb7395f08be5c4d9d3179e0363847f9109ac7ee258eb35b8dd->leave($__internal_54c37c9a9be898fb7395f08be5c4d9d3179e0363847f9109ac7ee258eb35b8dd_prof);

        
        $__internal_3635f44993b79a0a093df41df7bb89d6dff5b8c7d167c82d40ca1ad748b7a7e6->leave($__internal_3635f44993b79a0a093df41df7bb89d6dff5b8c7d167c82d40ca1ad748b7a7e6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_558ffd9bd5266a5fa40059e890d4e0b26289350e85d46c5adbbf669e4e441b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558ffd9bd5266a5fa40059e890d4e0b26289350e85d46c5adbbf669e4e441b8e->enter($__internal_558ffd9bd5266a5fa40059e890d4e0b26289350e85d46c5adbbf669e4e441b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf4c98d8bc29de25687d6148457ef0d98ff9bc28f5f5ace4ab2471a6d1d99286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4c98d8bc29de25687d6148457ef0d98ff9bc28f5f5ace4ab2471a6d1d99286->enter($__internal_bf4c98d8bc29de25687d6148457ef0d98ff9bc28f5f5ace4ab2471a6d1d99286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bf4c98d8bc29de25687d6148457ef0d98ff9bc28f5f5ace4ab2471a6d1d99286->leave($__internal_bf4c98d8bc29de25687d6148457ef0d98ff9bc28f5f5ace4ab2471a6d1d99286_prof);

        
        $__internal_558ffd9bd5266a5fa40059e890d4e0b26289350e85d46c5adbbf669e4e441b8e->leave($__internal_558ffd9bd5266a5fa40059e890d4e0b26289350e85d46c5adbbf669e4e441b8e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\sym_bell_counter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
