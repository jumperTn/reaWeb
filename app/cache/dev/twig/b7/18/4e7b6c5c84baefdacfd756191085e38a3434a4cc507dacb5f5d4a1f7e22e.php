<?php

/* PidevReaBundle:Stat:nbrOffreClientAgence.html.twig */
class __TwigTemplate_b7184e7b6c5c84baefdacfd756191085e38a3434a4cc507dacb5f5d4a1f7e22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle:Stat/chart:column3dStacked.html.twig");
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
        return "PidevReaBundle:Stat/chart:column3dStacked.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stat($context, array $blocks = array())
    {
        // line 3
        echo "   
";
        // line 4
        $context["client"] = "";
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
                if (((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")) != $this->getAttribute($context["stat"], "prenom", array(), "array"))) {
                    // line 9
                    echo "        },{
        \"client\":\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                    echo "\" ,
        \"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                    // line 12
                    $context["client"] = $this->getAttribute($context["stat"], "prenom", array(), "array");
                    // line 13
                    echo "    ";
                } else {
                    // line 14
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
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
                if (((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")) != $this->getAttribute($context["stat"], "prenom", array(), "array"))) {
                    // line 19
                    echo "        {
        \"client\":\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                    echo "\" ,
         \"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                    // line 22
                    $context["client"] = $this->getAttribute($context["stat"], "prenom", array(), "array");
                    // line 23
                    echo "    ";
                } else {
                    // line 24
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
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
        return "PidevReaBundle:Stat:nbrOffreClientAgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 28,  120 => 27,  117 => 26,  109 => 24,  106 => 23,  104 => 22,  98 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  74 => 14,  71 => 13,  69 => 12,  63 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  46 => 6,  44 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
