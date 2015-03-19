<?php

/* PidevReaBundle:Stat:testStat.html.twig */
class __TwigTemplate_2cb1397f4c3e4700ba34fd83995018f4f0f46360fed7ce007c5a004428dfea96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle:Stat/chart:chart.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(7);

            throw $e;
        }

        $this->blocks = array(
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevReaBundle:Stat/chart:chart.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_test($context, array $blocks = array())
    {
        // line 9
        echo "     ";
        $context["test"] = 1;
        // line 10
        echo "     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 11
            echo "    ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
                // line 12
                echo "         {   
     \"nomAgence\": \"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "secteur", array()), "html", null, true);
                echo "\",
         \"nbrAgence\": ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                echo "
         }
    ";
                // line 16
                $context["test"] = 2;
                // line 17
                echo "      ";
            } else {
                echo "   
         ,{   
     \"nomAgence\": \"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "secteur", array()), "html", null, true);
                echo "\",
         \"nbrAgence\": ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                echo "
         }
         ";
            }
            // line 23
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "     ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat:testStat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  80 => 23,  74 => 20,  70 => 19,  64 => 17,  62 => 16,  57 => 14,  53 => 13,  50 => 12,  47 => 11,  42 => 10,  39 => 9,  36 => 8,  11 => 7,);
    }
}
