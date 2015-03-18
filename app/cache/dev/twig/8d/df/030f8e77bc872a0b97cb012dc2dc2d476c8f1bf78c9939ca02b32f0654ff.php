<?php

/* PidevReaBundle:Zone:show.html.twig */
class __TwigTemplate_8ddf030f8e77bc872a0b97cb012dc2dc2d476c8f1bf78c9939ca02b32f0654ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle::Layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevReaBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "
    <script>\$(function () { // wait for document to load

            \$('input[type=radio]', '#educ').rating('select', \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "education", array()), "html", null, true);
        echo "\");
            \$('input[type=radio]', '#env').rating('select', \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "environement", array()), "html", null, true);
        echo "\");
            \$('input[type=radio]', '#sant').rating('select', \"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sante", array()), "html", null, true);
        echo "\");
            \$('input[type=radio]', '#lois').rating('select', \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "loisirs", array()), "html", null, true);
        echo "\");
            \$('input[type=radio]', '#sec').rating('select', \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "securite", array()), "html", null, true);
        echo "\");
            \$('input[type=radio]', '#secours').rating('select', \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secoursetinterventionurgence", array()), "html", null, true);
        echo "\");
            \$('input[type=radio]', '#tr').rating('select', \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transport", array()), "html", null, true);
        echo "\");
            \$('input[type=radio]', '#onas').rating('select', \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eauxusees", array()), "html", null, true);
        echo "\");
            \$('input[type=radio]').rating('disable');
        });</script>
    ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "    <h1>Zone: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</h1>

    <table class=\"record_properties\" border=\"2\">
        <tbody>
            <tr>
                <th>Education</th>
                <td><form name=\"api-select\" id=\"educ\">
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"1\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"2\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"3\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"4\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"5\"/>
                    </form> </td>
            </tr>
            <tr>
                <th>Environement</th>
                <td><form name=\"api-select\" id=\"env\">
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"1\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"2\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"3\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"4\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"5\"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Secours</th>
                <td><form name=\"api-select\" id=\"secours\">
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"1\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"2\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"3\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"4\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"5\"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Sante</th>
                <td><form name=\"api-select\" id=\"sant\">
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"1\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"2\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"3\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"4\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"5\"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Loisirs</th>
                <td><form name=\"api-select\" id=\"lois\">
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"1\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"2\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"3\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"4\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"5\"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Sécurite</th>
                <td><form name=\"api-select\" id=\"sec\">
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"1\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"2\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"3\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"4\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"5\"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Transport</th>
                <td><form name=\"api-select\" id=\"tr\">
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"1\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"2\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"3\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"4\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"5\"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Eaux usées</th>
                <td><form name=\"api-select\" id=\"onas\">
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"1\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"2\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"3\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"4\"/>
                        <input type=\"radio\" class=\"star\" name=\"api-select-test\" value=\"5\"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>Nombre de votes</th>
                <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrvote", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("zone");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zone_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 128
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>


";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Zone:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 128,  199 => 124,  191 => 119,  181 => 112,  84 => 19,  81 => 18,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
