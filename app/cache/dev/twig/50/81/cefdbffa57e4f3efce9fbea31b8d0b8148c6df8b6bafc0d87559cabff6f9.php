<?php

/* PidevReaBundle:Stat:nbrOperationClientAgence.html.twig */
class __TwigTemplate_5081cefdbffa57e4f3efce9fbea31b8d0b8148c6df8b6bafc0d87559cabff6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle:Stat/chart:pyramidChart3D.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stat' => array($this, 'block_stat'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevReaBundle:Stat/chart:pyramidChart3D.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stat($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 33
        echo "        ";
        $context["test"] = 1;
        // line 34
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 35
            echo "        ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
                // line 36
                echo "            {   
            \"client\": \"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                echo "\",
            \"value\": ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo "
            }
            ";
                // line 40
                $context["test"] = 2;
                // line 41
                echo "        ";
            } else {
                echo "   
            ,{   
            \"client\": \"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                echo "\",
            \"value\": ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo "
            }
        ";
            }
            // line 47
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat:nbrOperationClientAgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 48,  82 => 47,  76 => 44,  72 => 43,  66 => 41,  64 => 40,  59 => 38,  55 => 37,  52 => 36,  49 => 35,  44 => 34,  41 => 33,  39 => 3,  36 => 2,  11 => 1,);
    }
}
