<?php

/* PidevReaBundle:Stat:nbrAgenceZone.html.twig */
class __TwigTemplate_f78eda764cce3fecaa2068190db5e12cc9596a713a75c03872c2e9ba2f258fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle:Stat/chart:battonetChart.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevReaBundle:Stat/chart:battonetChart.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_test($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context["test"] = 1;
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 5
            echo "        ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
                // line 6
                echo "            {   
            \"nomAgence\": \"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "secteur", array()), "html", null, true);
                echo "\",
            \"nbrAgence\": ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array()), "html", null, true);
                echo "
            }
            ";
                // line 10
                $context["test"] = 2;
                // line 11
                echo "        ";
            } else {
                echo "   
            ,{   
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
            }
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat:nbrAgenceZone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  74 => 14,  70 => 13,  64 => 11,  62 => 10,  57 => 8,  53 => 7,  50 => 6,  47 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
