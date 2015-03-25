<?php

/* PidevReaBundle::Layout.html.twig */
class __TwigTemplate_d2676bcf6c7c084578497ac89bcd54082b0ff540ac5225df7140c80ba8658e58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Real Estate - free css template</title>
        <meta name=\"keywords\" content=\"free css templates, real estate, blue color, CSS, HTML\" />
        <meta name=\"description\" content=\"Real Estate is a free CSS template provided by templatemo.com\" />
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templatemo_style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/Star/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/Star/jquery.MetaData.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/Star/jquery.rating.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/Star/jquery.rating.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
        ";
        // line 12
        $this->displayBlock('scripts', $context, $blocks);
        // line 15
        echo "    </head>


    <body>

        <div id=\"templatemo_banner_wrapper\">

            <div id=\"templatemo_banner\">

                <div id=\"templatemo_site_title\">

                    <!-- 
                        <h1><a href=\"http://www.templatemo.com\" target=\"_parent\">
                            Site title <span>free website template</span>
                        </a></h1> 
                    -->

                    <h1><a href=\"http://www.templatemo.com\" target=\"_parent\">
                            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/templatemo_logo.png"), "html", null, true);
        echo "\" alt=\"css template\" /> <span>free website template</span>
                        </a></h1>

                </div> <!-- end of site title -->

                <div id=\"templatemo_menu\">
                    <ul>
                        <li><a href=\"#\" class=\"current\"><span></span>Home</a></li>
                        <li><a href=\"#\"><span></span>About</a></li>
                        <li><a href=\"#\"><span></span>Houses</a></li>
                        <li><a href=\"#\"><span></span>Gallery</a></li>
                        <li><a href=\"#\"><span></span>Contact</a></li>
                    </ul>
                </div> <!-- end of menu -->

            </div> <!-- end of banner -->

        </div> <!-- end of banner wrapper -->

        <div id=\"templatemo_content\">

            <div id=\"side_column\">

                <div class=\"section_w290\">
                    <div class=\"news_box\">

                        <h2>Industry News</h2>
                        <div class=\"news_section\">
                            <h3>18th August</h3>
                            <img class=\"image_wrapper fl_image\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/templatemo_image_01.png"), "html", null, true);
        echo "\"/>
                            <p>Etiam et metus quam. Maecenas egestas ipsum tempus mauris sodales non convallis arcu dictum. </p>
                            <a href=\"#\">Read more</a>
                            <div class=\"cleaner\"></div>
                        </div>

                        <div class=\"news_section\">
                            <h3>17th August</h3>
                            <img class=\"image_wrapper fl_image\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/templatemo_image_02.png"), "html", null, true);
        echo "\" alt=\"image\" />
                            <p>DCurabitur id felis id velit luctus fermentum. Curabitur consequat lectus at quam rutrum blandit.</p>
                            <a href=\"#\">Read more</a>

                            <div class=\"cleaner\"></div>
                        </div>

                        <div class=\"news_section\">
                            <h3>16th August</h3>
                            <img class=\"image_wrapper fl_image\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/templatemo_image_03.png"), "html", null, true);
        echo "\" alt=\"image\" />
                            <p>Pellentesque vitae iaculis nisi. Praesent ligula arcu, convallis et pulvinar a, laoreet vel ligula. </p>
                            <a href=\"#\">Read more</a>

                            <div class=\"cleaner\"></div>
                        </div>

                        <a href=\"#\"><strong>View All Posts</strong></a>

                    </div>
                </div>

                <div class=\"section_w290\">
                    <div class=\"find_agent\"><a href=\"\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/teamplatemo_find_agent.png"), "html", null, true);
        echo "\" alt=\"find an agent\" /></a></div>
                </div>

                <div class=\"cleaner\"></div>
            </div> <!-- end of side_column -->

            <div id=\"main_column\">

                <div class=\"section_w470\">

                    ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 105
        echo "                    <h2>Free CSS Template</h2>
                    <p><a href=\"http://www.templatemo.com\" target=\"_parent\">Real Estate Template</a> is a <a href=\"http://www.templatemo.com\" target=\"_parent\">free css layout</a> from TemplateMo website. You may use this template in your websites. Credits go to <a href=\"http://www.photovaco.com\" target=\"_blank\">Free Photos</a> and <a href=\"http://www.publicdomainpictures.net\" target=\"_blank\">Public Domain Pictures</a> for photos used in this template. Validate <a href=\"http://validator.w3.org/check?uri=referer\">XHTML</a> &amp; <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">CSS</a>.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam vitae ipsum vulputate varius vitae semper nunc. Quisque eget elit quis augue pharetra feugiat. Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa. Sed condimentum lectus sed justo laoreet eget malesuada lectus luctus.</p>
                </div>

                <div class=\"section_w470\">
                    <div class=\"latest_properties\">
                        <h2>Latest properties</h2>
                        <ul class=\"img_list\">
                            <li><a href=\"#\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/templatemo_image_01.png"), "html", null, true);
        echo "\" alt=\"house 1\" /><span>Detail</span></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/templatemo_image_02.png"), "html", null, true);
        echo "\" alt=\"house 2\" /><span>Detail</span></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/templatemo_image_03.png"), "html", null, true);
        echo "\" alt=\"house 3\" /><span>Detail</span></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/templatemo_image_04.png"), "html", null, true);
        echo "\" alt=\"house 4\" /><span>Detail</span></a></li>
                        </ul>
                        <div class=\"cleaner\"></div>    
                    </div>
                </div>

                <div class=\"section_w470\">
                    <div class=\"real_estate_search\">

                        <h2>Real Estate Search</h2>
                        <form method=\"get\" action=\"#\">
                            <div class=\"left_column\">
                                <div class=\"form_row\"> <label>City: </label><input name=\"country\" type=\"text\" value=\"\" size=\"20\" maxlength=\"40\" />
                                </div>
                                <div class=\"form_row\"> <label>Sate/Province: </label>
                                    <select name=\"state\"><option>Select one...</option><option>AL</option><option>AK</option><option>AR</option><option>AZ</option><option>CA</option><option>CO</option><option>CT</option><option>DC</option><option>DE</option><option>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IA</option><option>IL</option><option>IN</option><option>KS</option><option>KY</option><option>LA</option><option>MA</option><option>MD</option><option>ME</option><option>MI</option><option>MO</option><option>MN</option><option>MS</option><option>MT</option><option>NC</option><option>ND</option><option>NE</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><option>NV</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><option>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><option>VA</option><option>VT</option><option>WA</option><option>WI</option><option>WV</option><option>WY</option></select>
                                </div>
                                <div class=\"form_row\"> <label>Zip/Postal code </label>
                                    <input name=\"country\" type=\"text\" value=\"\" size=\"20\" maxlength=\"40\" />
                                </div>
                            </div>
                            <div class=\"right_column\">
                                <div class=\"form_row\">
                                    <label>Price from</label>
                                    <select name=\"min_price\">
                                        <option>minimum</option>
                                        <option>\$50,000</option>
                                        <option>\$100,000</option>
                                        <option>\$150,000</option>
                                        <option>\$250,000</option>
                                        <option>\$500,000</option>
                                    </select>
                                    <div class=\"cleaner_h10\"></div>
                                    <label>To: </label>
                                    <select name=\"max-price\">
                                        <option>maximum</option>
                                        <option>\$100,000</option>
                                        <option>\$250,000</option>
                                        <option>\$500,000</option>
                                        <option>\$1,000,000</option>
                                        <option>\$2,000,000</option>
                                    </select>
                                </div>
                                <div class=\"form_row\"> <label>Bedroom:</label>
                                    <select name=\"bedroom\">
                                        <option>select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class=\"form_row\"> <label>Bathroom:</label>
                                    <select name=\"bathroom\">
                                        <option>select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class=\"form_row\">
                                    <input type=\"submit\" value=\"Submit\" name=\"submit2\" class=\"submit_btn_02\" /> 
                                    <input type=\"reset\" value=\"Reset\" name=\"Reset\" class=\"submit_btn_02\" />
                                </div>
                            </div>

                        </form>
                        <div class=\"cleaner\"></div>
                    </div>
                </div>

            </div> <!-- end of main column -->

            <div class=\"cleaner\"></div>
        </div> <!-- end of content -->

        <div id=\"templatemo_footer_wrapper\">

            <div id=\"templatemo_footer\">

                <div class=\"section_w290\">
                    <h4>Office Address</h4>
                    111/222 Vivamus vestibulum<br />
                    Condimentum massa<br />
                    Phasellus<br />
                    info@yourcompany.com

                </div>

                <div class=\"section_w470\">

                    <ul class=\"footer_menu\">
                        <li><a href=\"#\" class=\"current\">Home</a></li>
                        <li><a href=\"#\">About</a></li>
                        <li><a href=\"#\">Industry News</a></li>
                        <li><a href=\"#\">Gallery</a></li>
                        <li class=\"last\"><a href=\"#\">Contact</a></li>
                    </ul>

                    Copyright © 2048 <a href=\"#\">Your Company Name</a><br /><br />

                    <a href=\"http://www.iwebsitetemplate.com\" target=\"_parent\">Website Templates</a> by <a href=\"http://www.templatemo.com\" target=\"_parent\" title=\"CSS Templates\">Free CSS Templates</a><br />
                </div>

                <div class=\"cleaner\"></div>
            </div> <!-- end of footer -->
        </div> <!-- end of footer wrapper -->


    </body>
</html>";
    }

    // line 12
    public function block_scripts($context, array $blocks = array())
    {
        // line 13
        echo "
        ";
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        // line 103
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 103,  306 => 102,  301 => 13,  298 => 12,  180 => 117,  176 => 116,  172 => 115,  168 => 114,  157 => 105,  155 => 102,  142 => 92,  126 => 79,  114 => 70,  103 => 62,  71 => 33,  51 => 15,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  21 => 1,);
    }
}
