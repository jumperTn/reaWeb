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

    // line 3
    public function block_stat($context, array $blocks = array())
    {
        // line 4
        $context["year"] = "";
        // line 5
        $context["test"] = 1;
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 7
            echo "     ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) != 1)) {
                // line 8
                echo "    ";
                if (((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")) != $this->getAttribute($context["stat"], "year", array()))) {
                    // line 9
                    echo "        },{
        \"year\":";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "year", array()), "html", null, true);
                    echo " ,
        \"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "mois", array()), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                    echo ",
    ";
                    // line 12
                    $context["year"] = $this->getAttribute($context["stat"], "year", array());
                    // line 13
                    echo "    ";
                } else {
                    // line 14
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "mois", array()), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                    echo ",
    ";
                }
                // line 16
                echo "    ";
            } else {
                // line 17
                echo "        ";
                $context["test"] = 2;
                // line 18
                echo "            ";
                if (((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")) != $this->getAttribute($context["stat"], "year", array()))) {
                    // line 19
                    echo "        {
        \"year\":";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "year", array()), "html", null, true);
                    echo " ,
        \"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "mois", array()), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                    echo "
    ";
                    // line 22
                    $context["year"] = $this->getAttribute($context["stat"], "year", array());
                    // line 23
                    echo "    ";
                } else {
                    // line 24
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "mois", array()), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                    echo ",
    ";
                }
                // line 26
                echo "    ";
            }
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        return array (  123 => 28,  117 => 27,  114 => 26,  106 => 24,  103 => 23,  101 => 22,  95 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  71 => 14,  68 => 13,  66 => 12,  60 => 11,  56 => 10,  53 => 9,  50 => 8,  47 => 7,  43 => 6,  41 => 5,  39 => 4,  36 => 3,  11 => 2,);
    }
}
