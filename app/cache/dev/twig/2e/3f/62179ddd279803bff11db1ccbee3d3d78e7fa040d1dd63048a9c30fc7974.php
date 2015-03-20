<?php

/* PidevReaBundle:Stat/chart:SVG_filters.html.twig */
class __TwigTemplate_2e3f62179ddd279803bff11db1ccbee3d3d78e7fa040d1dd63048a9c30fc7974 extends Twig_Template
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
        <style type=\"text/css\">

        @import url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/test.css"), "html", null, true);
        echo ");

            .amcharts-graph-g1 .amcharts-graph-fill {
                filter: url(#blur);
            }

            .amcharts-graph-g2 .amcharts-graph-fill {
                filter: url(#blur);
            }

            .amcharts-cursor-fill {
                filter: url(#shadow);
            }
        </style>

        <script type=\"text/javascript\">

            var chartData = [
            ";
        // line 30
        $this->displayBlock('stat', $context, $blocks);
        // line 32
        echo "             ];

              var chart =  AmCharts.makeChart(\"chartdiv\", {
                  \"type\": \"serial\",
                  \"fontFamily\": \"Lato\",
                  \"autoMargins\": true,
                  \"addClassNames\": true,
                  \"zoomOutText\": \"\",
                  \"defs\": {
                      \"filter\": [
                          {
                              \"x\": \"-50%\",
                              \"y\": \"-50%\",
                              \"width\": \"200%\",
                              \"height\": \"200%\",
                              \"id\": \"blur\",
                              \"feGaussianBlur\": {
                                  \"in\": \"SourceGraphic\",
                                  \"stdDeviation\": \"50\"
                              }
                          },
                          {
                              \"id\": \"shadow\",
                              \"width\": \"150%\",
                              \"height\": \"150%\",
                              \"feOffset\": {
                                  \"result\": \"offOut\",
                                  \"in\": \"SourceAlpha\",
                                  \"dx\": \"2\",
                                  \"dy\": \"2\"
                              },
                              \"feGaussianBlur\": {
                                  \"result\": \"blurOut\",
                                  \"in\": \"offOut\",
                                  \"stdDeviation\": \"10\"
                              },
                              \"feColorMatrix\": {
                                  \"result\": \"blurOut\",
                                  \"type\": \"matrix\",
                                  \"values\": \"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0\"
                              },
                              \"feBlend\": {
                                  \"in\": \"SourceGraphic\",
                                  \"in2\": \"blurOut\",
                                  \"mode\": \"normal\"
                              }
                          }
                      ]
                  },
                  \"fontSize\": 15,
                  \"pathToImages\": \"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/images/"), "html", null, true);
        echo "\",
                  \"dataProvider\": chartData,
                  \"marginTop\": 0,
                  \"marginRight\": 0,
                  \"marginLeft\": 0,
                  \"autoMarginOffset\": 0,
                  \"categoryField\": \"client\",
                  \"categoryAxis\": {
                      \"gridAlpha\": 0.07,
                      \"axisColor\": \"#DADADA\",
                      \"startOnAxis\": true,
                      \"tickLength\": 0
                  },
                  \"valueAxes\": [
                      {
                          \"stackType\": \"regular\",
                          \"gridAlpha\": 0.07,
                          \"axisAlpha\": 0,
                          \"inside\": true,
                          \"labelFrequency\": 2
                      }
                  ],
                  \"graphs\": [
                      {
                          \"id\": \"g1\",
                          \"type\": \"line\",
                          \"title\": \"nbrRdv\",
                          \"valueField\": \"nbrRdv\",
                          \"fillColors\": [
                              \"#0066e3\",
                              \"#802ea9\"
                          ],
                          \"lineAlpha\": 0,
                          \"fillAlphas\": 0.8,
                          \"showBalloon\": false
                      },
                      
                      {
                          \"id\": \"g3\",
                          \"title\": \"nbrRdv\",
                          \"valueField\": \"nbrRdv1\",
                          \"lineAlpha\": 0.5,
                          \"lineColor\": \"#FFFFFF\",
                          \"bullet\": \"round\",
                          \"dashLength\": 2,
                          \"bulletBorderAlpha\": 1,
                          \"bulletAlpha\": 1,
                          \"bulletSize\": 15,
                          \"stackable\": false,
                          \"bulletColor\": \"#5d7ad9\",
                          \"bulletBorderColor\": \"#FFFFFF\",
                          \"bulletBorderThickness\": 3,
                          \"showBalloon\": true,
                          \"balloonText\": \"<div style='margin-bottom:30px;text-shadow: 2px 2px rgba(0, 0, 0, 0.1); font-weight:200;font-size:30px; color:#ffffff'>[[value]]</div>\"
                      }
                  ],
                  \"chartCursor\": {
                      \"cursorAlpha\": 1,
                      \"zoomable\": false,
                      \"cursorColor\": \"#FFFFFF\",
                      \"categoryBalloonColor\": \"#8d83c8\",
                      \"fullWidth\": true,
                      \"balloonPointerOrientation\": \"vertical\"
                  },
                  \"balloon\": {
                      \"borderAlpha\": 0,
                      \"fillAlpha\": 0,
                      \"shadowAlpha\": 0,
                      \"offsetX\": -50,
                      \"offsetY\": -50
                  }
              });

              // we zoom chart in order to have better blur (form side to side)
              chart.addListener(\"dataUpdated\", zoomChart);

              function zoomChart(){
                  chart.zoomToIndexes(0, chartData.length+1);
              }
            </script>
        </head>

        <body>
            <div id=\"chartdiv\" style=\"width:100%; height:500px;\"></div>
        </body>

</html>";
    }

    // line 30
    public function block_stat($context, array $blocks = array())
    {
        echo "        
                ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat/chart:SVG_filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 30,  114 => 82,  62 => 32,  60 => 30,  39 => 12,  33 => 9,  29 => 8,  20 => 1,);
    }
}
