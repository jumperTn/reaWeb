<?php

/* PidevReaBundle:Stat:nbrRdvClientAgence.html.twig */
class __TwigTemplate_019478a829d47e5140b1f23748c26aba8bb602b2c8fd90b2e4db5cae47500249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle:Stat/chart:SVG_filters.html.twig");
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
        return "PidevReaBundle:Stat/chart:SVG_filters.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stat($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 35
        echo "        ";
        $context["test"] = 1;
        // line 36
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 37
            echo "        ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
                // line 38
                echo "            {   
            \"client\": \"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                echo "\",
            \"nbrRdv\": ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo ",
            \"nbrRdv1\": ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo "
            }
            ";
                // line 43
                $context["test"] = 2;
                // line 44
                echo "        ";
            } else {
                echo "   
            ,{   
            \"client\": \"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                echo "\",
            \"nbrRdv\": ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo ",
            \"nbrRdv1\": ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo "
            }
        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "             ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat:nbrRdvClientAgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 52,  90 => 51,  84 => 48,  80 => 47,  76 => 46,  70 => 44,  68 => 43,  63 => 41,  59 => 40,  55 => 39,  52 => 38,  49 => 37,  44 => 36,  41 => 35,  39 => 4,  36 => 3,  11 => 1,);
    }
}
