<?php

/* PidevReaBundle:Appartement:show.html.twig */
class __TwigTemplate_6acea049a87c2398e5899692216d744a9151308d9ad55377476d7e5e4fe71fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Appartement</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Etage</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbrchambre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrchambre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbrsalledebain</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrsalledebain", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbrcuisine</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrcuisine", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbrsallon</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrsallon", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbrsuite</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrsuite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Balcon</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "balcon", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Meuble</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "meuble", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chauffage</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chauffage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Climatisation</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "climatisation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parking</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parking", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("appartement");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("appartement_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idoffre", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Appartement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 66,  135 => 62,  127 => 57,  117 => 50,  110 => 46,  103 => 42,  96 => 38,  89 => 34,  82 => 30,  75 => 26,  68 => 22,  61 => 18,  54 => 14,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
