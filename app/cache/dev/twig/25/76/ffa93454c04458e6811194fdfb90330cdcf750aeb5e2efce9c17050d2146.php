<?php

/* PidevReaBundle:Stat:nbrInscritMois.html.twig */
class __TwigTemplate_2576ffa93454c04458e6811194fdfb90330cdcf750aeb5e2efce9c17050d2146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle:Stat/chart:columnStackedAndClustered.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'stat' => array($this, 'block_stat'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevReaBundle:Stat/chart:columnStackedAndClustered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_stat($context, array $blocks = array())
    {
        // line 33
        $context["year"] = "";
        // line 34
        $context["test"] = 1;
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 36
            echo "     ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) != 1)) {
                // line 37
                echo "    ";
                if (((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")) != $this->getAttribute($context["stat"], "year", array()))) {
                    // line 38
                    echo "        },{
        \"year\":";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "year", array()), "html", null, true);
                    echo " ,
        \"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "mois", array()), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                    echo ",
    ";
                    // line 41
                    $context["year"] = $this->getAttribute($context["stat"], "year", array());
                    // line 42
                    echo "    ";
                } else {
                    // line 43
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "mois", array()), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                    echo ",
    ";
                }
                // line 45
                echo "    ";
            } else {
                // line 46
                echo "        ";
                $context["test"] = 2;
                // line 47
                echo "            ";
                if (((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")) != $this->getAttribute($context["stat"], "year", array()))) {
                    // line 48
                    echo "        {
        \"year\":";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "year", array()), "html", null, true);
                    echo " ,
        \"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "mois", array()), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                    echo "
    ";
                    // line 51
                    $context["year"] = $this->getAttribute($context["stat"], "year", array());
                    // line 52
                    echo "    ";
                } else {
                    // line 53
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "mois", array()), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                    echo ",
    ";
                }
                // line 55
                echo "    ";
            }
            // line 56
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    }
   ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat:nbrInscritMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 57,  117 => 56,  114 => 55,  106 => 53,  103 => 52,  101 => 51,  95 => 50,  91 => 49,  88 => 48,  85 => 47,  82 => 46,  79 => 45,  71 => 43,  68 => 42,  66 => 41,  60 => 40,  56 => 39,  53 => 38,  50 => 37,  47 => 36,  43 => 35,  41 => 34,  39 => 33,  36 => 32,  11 => 2,);
    }
}
