<?php

/* PidevReaBundle:Rss:index.xml.twig */
class __TwigTemplate_97d4a3a9db3b2701f9617876c45c1456a3ffc626b137c0c8db4e13f2641f1326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\">

<channel>
    <title>nos offres</title>
    <description>ici vous trouvrez nos offres</description>
    <link>http://localhost/REA/reaWeb/web/app_dev.php</link>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrains"]) ? $context["terrains"] : $this->getContext($context, "terrains")));
        foreach ($context['_seq'] as $context["_key"] => $context["terrain"]) {
            // line 9
            echo "    <item>
        <title>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "type", array()), "html", null, true);
            echo "</title>
        <description>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "description", array()), "html", null, true);
            echo " surface:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "surface", array()), "html", null, true);
            echo " m² adresse: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "adresse", array()), "html", null, true);
            echo "</description>
        ";
            // line 12
            if (($this->getAttribute($context["terrain"], "type", array()) == "terrain")) {
                // line 13
                echo "        <link>http://localhost/REA/reaWeb/web/app_dev.php/offre/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "id", array()), "html", null, true);
                echo "/show</link>
        ";
            } elseif (($this->getAttribute(            // line 14
$context["terrain"], "type", array()) == "immeuble")) {
                // line 15
                echo "        <link>http://localhost/REA/reaWeb/web/app_dev.php/immeuble/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "id", array()), "html", null, true);
                echo "/show</link>
        ";
            } elseif (($this->getAttribute(            // line 16
$context["terrain"], "type", array()) == "appartement")) {
                // line 17
                echo "            <link>http://localhost/REA/reaWeb/web/app_dev.php/appartement/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "id", array()), "html", null, true);
                echo "/show</link>
            ";
            } else {
                // line 19
                echo "              <link>http://localhost/REA/reaWeb/web/app_dev.php/maison/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "id", array()), "html", null, true);
                echo "/show</link>  
              ";
            }
            // line 21
            echo "    </item>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terrain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Rss:index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  75 => 21,  69 => 19,  63 => 17,  61 => 16,  56 => 15,  54 => 14,  49 => 13,  47 => 12,  39 => 11,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
