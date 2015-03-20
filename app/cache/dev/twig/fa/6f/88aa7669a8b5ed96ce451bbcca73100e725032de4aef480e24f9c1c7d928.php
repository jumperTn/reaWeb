<?php

/* PidevReaBundle:Stat/chart:JSON_areaStacked.html.twig */
class __TwigTemplate_fa6f88aa7669a8b5ed96ce451bbcca73100e725032de4aef480e24f9c1c7d928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stat' => array($this, 'block_stat'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>

    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <title>amCharts examples</title>
        <link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">

            // this chart is exactly the same as in areaStacked.html, only made using JSON except JavaScript API

            var chartData = [
            ";
        // line 15
        $this->displayBlock('stat', $context, $blocks);
        // line 18
        echo "                ];
            
            AmCharts.makeChart(\"chartdiv\", {
                type: \"serial\",
                pathToImages: \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/images/"), "html", null, true);
        echo "\",
                dataProvider: chartData,
                marginTop: 10,
                categoryField: \"zone\",
                categoryAxis: {
                    gridAlpha: 0.07,
                    axisColor: \"#DADADA\",
                    startOnAxis: true
                },
                valueAxes: [{
                        stackType: \"regular\",
                        gridAlpha: 0.07,
                        title: \"Traffic incidents\"
                    }],
                graphs: [{
                        type: \"line\",
                        title: \"immeuble\",
                        // hidden: true,
                        valueField: \"immeuble\",
                        lineAlpha: 0,
                        fillAlphas: 0.6,
                        balloonText: \"<img src='";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/immeuble.jpg"), "html", null, true);
        echo "' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>\"
                    }, {
                        type: \"line\",
                        title: \"terrain\",
                        valueField: \"terrain\",
                        lineAlpha: 0,
                        fillAlphas: 0.6,
                        balloonText: \"<img src='";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/terrain.jpg"), "html", null, true);
        echo "' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>\"
                    }, {
                        type: \"line\",
                        title: \"appartement\",
                        valueField: \"appartement\",
                        lineAlpha: 0,
                        fillAlphas: 0.6,
                        balloonText: \"<img src='";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/appartement.jpg"), "html", null, true);
        echo "' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>\"
                    }, {
                        type: \"line\",
                        title: \"maison\",
                        valueField: \"maison\",
                        lineAlpha: 0,
                        fillAlphas: 0.6,
                        balloonText: \"<img src='";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/maison.png"), "html", null, true);
        echo "' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>\"
                    }],
                legend: {
                    position: \"bottom\",
                    valueText: \"[[value]]\",
                    valueWidth: 100,
                    valueAlign: \"left\",
                    equalWidths: false,
                    periodValueText: \"total: [[value.sum]]\"
                },
                chartCursor: {
                    cursorAlpha: 0
                },
                chartScrollbar: {
                    color: \"FFFFFF\"
                }

            });

        </script>
    </head>

    <body>
        <div id=\"chartdiv\" style=\"width:100%; height:400px;\"></div>
    </body>

</html>";
    }

    // line 15
    public function block_stat($context, array $blocks = array())
    {
        echo "        

            ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat/chart:JSON_areaStacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 15,  104 => 64,  94 => 57,  84 => 50,  74 => 43,  50 => 22,  44 => 18,  42 => 15,  33 => 9,  29 => 8,  20 => 1,);
    }
}
