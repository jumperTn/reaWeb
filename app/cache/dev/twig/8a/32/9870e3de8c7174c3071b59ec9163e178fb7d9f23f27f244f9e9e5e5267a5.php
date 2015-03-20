<?php

/* PidevReaBundle:Stat:nbrRdvAgentAgence.html.twig */
class __TwigTemplate_8a329870e3de8c7174c3071b59ec9163e178fb7d9f23f27f244f9e9e5e5267a5 extends Twig_Template
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
        echo "   
        ";
        // line 5
        $context["test"] = 1;
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 7
            echo "        ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
                // line 8
                echo "            {   
            \"client\": \"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                echo "\",
            \"nbrRdv\": ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo ",
            \"nbrRdv1\": ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo "
            }
            ";
                // line 13
                $context["test"] = 2;
                // line 14
                echo "        ";
            } else {
                echo "   
            ,{   
            \"client\": \"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                echo "\",
            \"nbrRdv\": ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo ",
            \"nbrRdv1\": ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                echo "
            }
        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "             ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat:nbrRdvAgentAgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  90 => 21,  84 => 18,  80 => 17,  76 => 16,  70 => 14,  68 => 13,  63 => 11,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
