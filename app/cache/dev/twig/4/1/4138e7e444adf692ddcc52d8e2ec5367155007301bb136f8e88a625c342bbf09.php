<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9873b44f07deea3d4b11ec0c7a174bba4f858964f65b090d40841dad83dcbb45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5720e7d3fa275a671bf177ffb989c14e6e3e2ab4768a228292936c7c313a941 = $this->env->getExtension("native_profiler");
        $__internal_a5720e7d3fa275a671bf177ffb989c14e6e3e2ab4768a228292936c7c313a941->enter($__internal_a5720e7d3fa275a671bf177ffb989c14e6e3e2ab4768a228292936c7c313a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5720e7d3fa275a671bf177ffb989c14e6e3e2ab4768a228292936c7c313a941->leave($__internal_a5720e7d3fa275a671bf177ffb989c14e6e3e2ab4768a228292936c7c313a941_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd1f280002d4527fde3c162b2cee2d33344e3ee7b0dc9bd2df70e6eb2c246ba1 = $this->env->getExtension("native_profiler");
        $__internal_dd1f280002d4527fde3c162b2cee2d33344e3ee7b0dc9bd2df70e6eb2c246ba1->enter($__internal_dd1f280002d4527fde3c162b2cee2d33344e3ee7b0dc9bd2df70e6eb2c246ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dd1f280002d4527fde3c162b2cee2d33344e3ee7b0dc9bd2df70e6eb2c246ba1->leave($__internal_dd1f280002d4527fde3c162b2cee2d33344e3ee7b0dc9bd2df70e6eb2c246ba1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a0819e26f8a2fae7e2576fdad850958c203837c7a4902c6c1831cb939c2db0e = $this->env->getExtension("native_profiler");
        $__internal_5a0819e26f8a2fae7e2576fdad850958c203837c7a4902c6c1831cb939c2db0e->enter($__internal_5a0819e26f8a2fae7e2576fdad850958c203837c7a4902c6c1831cb939c2db0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5a0819e26f8a2fae7e2576fdad850958c203837c7a4902c6c1831cb939c2db0e->leave($__internal_5a0819e26f8a2fae7e2576fdad850958c203837c7a4902c6c1831cb939c2db0e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b68f679df97c2124e3e9d5e04b7f858da8c4b8a5e588a09be5ecdd2a2b9ef4b6 = $this->env->getExtension("native_profiler");
        $__internal_b68f679df97c2124e3e9d5e04b7f858da8c4b8a5e588a09be5ecdd2a2b9ef4b6->enter($__internal_b68f679df97c2124e3e9d5e04b7f858da8c4b8a5e588a09be5ecdd2a2b9ef4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b68f679df97c2124e3e9d5e04b7f858da8c4b8a5e588a09be5ecdd2a2b9ef4b6->leave($__internal_b68f679df97c2124e3e9d5e04b7f858da8c4b8a5e588a09be5ecdd2a2b9ef4b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
