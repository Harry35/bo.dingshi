<?php

/* resto.twig */
class __TwigTemplate_04759c524518dab0aac9dff308cc3abadadd3007bde2a0e4eaafd7ca2f31f6e0 extends Twig_Template
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
        echo "
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>订食巴黎</title>
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <link rel=\"shortcut icon\" href=\"/favicon.ico\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    
    <link rel=\"stylesheet\" href=\"//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css\">
    <link rel=\"stylesheet\" href=\"//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "/assets/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "/assets/css/resto.css\">

  </head>
  <body>

  <div class=\"page-group\">
      <!-- 你的html代码 -->
      <div class=\"page\">
            <nav class=\"bar bar-tab\">
                <a class=\"tab-item external edit-review\" href=\"#\">
                    <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                    <span class=\"tab-label\">写评论</span>
                </a>
                ";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "tel", array()))) {
            // line 29
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "tel", array())) == 1)) {
                // line 30
                echo "                    <a class=\"tab-item external confirm-call\" href=\"tel:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "tel", array()), 0, array(), "array"), "html", null, true);
                echo "\">
                    ";
            } elseif ((twig_length_filter($this->env, $this->getAttribute(            // line 31
(isset($context["resto"]) ? $context["resto"] : null), "tel", array())) > 1)) {
                echo "    
                    <a class=\"tab-item external open-vertical-modal confirm-call\" href=\"#\">
                    ";
            }
            // line 34
            echo "                    <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                    <span class=\"tab-label\">电话</span>
                </a>
                ";
        }
        // line 38
        echo "                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "wechat", array()))) {
            // line 39
            echo "                <a class=\"tab-item external confirm-wechat\" id=\"confirm-wechat\" href=\"#\">
                    <i class=\"fa fa-wechat\" aria-hidden=\"true\"></i>
                    <span class=\"tab-label\">微信</span>
                </a>
                ";
        }
        // line 44
        echo "            </nav>
            <div class=\"content\">
                <input type=\"hidden\" id=\"resto-id\" name=\"resto-id\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "id", array()), "html", null, true);
        echo "\">
                <input type=\"hidden\" id=\"user-id\" name=\"user-id\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
        echo "\">
                <!-- 这里是页面内容区 -->
                <div class=\"page-index\">
                    <div class=\"card\">
                        <div align=\"bottom\" class=\"card-header color-white row\">
                            <div class=\"col-20 bloc-img\">
                                ";
        // line 53
        if ( !twig_test_empty($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "profil_pic", array()))) {
            // line 54
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "/assets/img/restos/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "profil_pic", array()), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 56
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "/assets/img/restos/default.png\">
                                ";
        }
        // line 58
        echo "                            </div>
                            <h3 class=\"col-80\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "name", array()), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"card-content\">
                            <div class=\"card-content-inner\">
                                ";
        // line 63
        if ( !twig_test_empty($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "info1", array()))) {
            // line 64
            echo "                                    <span class=\"button button-fill\"><span class=\"fa fa-tag\" aria-hidden=\"true\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "info1", array()), "html", null, true);
            echo "</span>
                                ";
        }
        // line 66
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "info2", array()))) {
            // line 67
            echo "                                    <span class=\"button button-fill\"><span class=\"fa fa-tag\" aria-hidden=\"true\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "info2", array()), "html", null, true);
            echo "</span>
                                ";
        }
        // line 69
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "info3", array()))) {
            // line 70
            echo "                                    <span class=\"button button-fill\"><span class=\"fa fa-tag\" aria-hidden=\"true\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "info3", array()), "html", null, true);
            echo "</span>
                                ";
        }
        // line 72
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "info4", array()))) {
            // line 73
            echo "                                    <span class=\"button button-fill\"><span class=\"fa fa-tag\" aria-hidden=\"true\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "info4", array()), "html", null, true);
            echo "</span>
                                ";
        }
        // line 75
        echo "                                <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "presentation", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"content-padded grid-pic\">
                            <div class=\"row\">
                                ";
        // line 81
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "menu_pics", array()), 0, array(), "array"))) {
            // line 82
            echo "                                    ";
            $context["j"] = 0;
            // line 83
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "menu_pics", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["menu_pic"]) {
                // line 84
                echo "                                        <a href=\"#\" class=\"col-33 thumbnail menu-popup\" data-index=\"";
                echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : null), "html", null, true);
                echo "\">
                                            <img class=\"img-thumbnail\" src=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
                echo "/assets/img/menus/";
                echo twig_escape_filter($this->env, $context["menu_pic"], "html", null, true);
                echo "\" alt=\"...\">
                                        </a>
                                    ";
                // line 87
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 88
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                ";
        }
        // line 90
        echo "                            </div>
                        </div>
                    </div>
                    
                    <div class=\"buttons-tab fixed-tab\">
                        <a href=\"#tab1\" class=\"tab-link active button\">特色菜</a>
                        <a href=\"#tab2\" class=\"tab-link button\">评论</a>
                    </div>
                    <div class=\"card\">
                        
                        <div class=\"tabs\">
                            <div id=\"tab1\" class=\"tab active\">
                                <div class=\"content-block\">
                                    <div class=\"list-block media-list\">
                                        ";
        // line 104
        if (($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "foods", array()) != false)) {
            // line 105
            echo "                                        <ul>
                                            ";
            // line 106
            $context["i"] = 0;
            // line 107
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "foods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
                // line 108
                echo "                                                <li class=\"item-content\">
                                                    <div class=\"item-media\">
                                                        <a href=\"#\" data-popup=\".popup-pic-food\" class=\"food-popup\" data-index=\"";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">
                                                        ";
                // line 111
                if (twig_test_empty($this->getAttribute($context["food"], "pic", array()))) {
                    // line 112
                    echo "                                                            <img class=\"img-food\" src=\"";
                    echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
                    echo "/assets/img/foods/default.png\" width=\"40\">
                                                        ";
                } else {
                    // line 114
                    echo "                                                            <img class=\"img-food\" src=\"";
                    echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
                    echo "/assets/img/foods/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["food"], "pic", array()), "html", null, true);
                    echo "\">
                                                        ";
                }
                // line 116
                echo "                                                        </a>
                                                    </div>
                                                    <div class=\"item-inner\">
                                                        <div class=\"item-title-row\">
                                                            <div class=\"item-title\">";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["food"], "name", array()), "html", null, true);
                echo "</div>
                                                            ";
                // line 121
                if (($this->getAttribute($context["food"], "liked", array()) == false)) {
                    // line 122
                    echo "                                                            <span style=\"float:right\">
                                                                <a href=\"#\" id=\"do-like-food-";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute($context["food"], "id", array()), "html", null, true);
                    echo "\" class=\"do-like-food\" data-food=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["food"], "id", array()), "html", null, true);
                    echo "\" data-like=\"0\">
                                                                    <span class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\" >
                                                                        <span id=\"food-likes-";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getAttribute($context["food"], "id", array()), "html", null, true);
                    echo "\" class=\"cpt-likes\">";
                    if (($this->getAttribute($context["food"], "likes", array()) != 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["food"], "likes", array()), "html", null, true);
                    }
                    echo "</span> 
                                                                    </span>
                                                                </a>
                                                            </span>
                                                            ";
                } else {
                    // line 130
                    echo "                                                            <span style=\"float:right\">
                                                                <span class=\"fa fa-thumbs-up\" aria-hidden=\"true\" >
                                                                     <span class=\"cpt-likes\">";
                    // line 132
                    if (($this->getAttribute($context["food"], "likes", array()) != 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["food"], "likes", array()), "html", null, true);
                    }
                    echo "</span> 
                                                                </span>
                                                            </span>
                                                            ";
                }
                // line 136
                echo "                                                        </div>
                                                        <div class=\"list-text\">";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["food"], "price", array()), "html", null, true);
                echo "</div>
                                                    </div>
                                                </li>
                                                ";
                // line 140
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 141
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                                        ";
        } else {
            // line 143
            echo "                                        <li class=\"item-content\">
                                            暂无特色菜实物图，努力添加中
                                        </li>
                                        ";
        }
        // line 147
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id=\"tab2\" class=\"tab\">
                                <div class=\"content-block\" data-distance=\"100\">
                                    <div class=\"list-block media-list\">
                                        <ul id=\"list-reviews\">
                                        ";
        // line 155
        if (($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "reviews", array()) != false)) {
            // line 156
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "reviews", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 157
                echo "                                                <li class=\"item-content\">
                                                    <div class=\"item-media\">
                                                        ";
                // line 159
                if (twig_test_empty($this->getAttribute($context["review"], "pic", array()))) {
                    // line 160
                    echo "                                                            <img class=\"img-review img-circle\" src=\"";
                    echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
                    echo "/assets/img/profils/default.png\" width=\"40\">
                                                        ";
                } else {
                    // line 162
                    echo "                                                            <img class=\"img-review img-circle\" src=\"";
                    echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
                    echo "/assets/img/profils/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "pic", array()), "html", null, true);
                    echo "\" width=\"40\">
                                                        ";
                }
                // line 164
                echo "                                                    </div>
                                                    <div class=\"item-inner\">
                                                        <div class=\"item-title-row\">
                                                            <div class=\"item-title\">";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "username", array()), "html", null, true);
                echo "</div>
                                                            ";
                // line 168
                if (($this->getAttribute($context["review"], "liked", array()) == false)) {
                    // line 169
                    echo "                                                            <span style=\"float:right\">
                                                                <a href=\"#\" id=\"do-like-review-";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
                    echo "\" class=\"do-like-review\" data-review=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
                    echo "\" data-like=\"0\">
                                                                    <span class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\" >
                                                                        <span id=\"review-likes-";
                    // line 172
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
                    echo "\" class=\"cpt-likes\">";
                    if (($this->getAttribute($context["review"], "likes", array()) != 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "likes", array()), "html", null, true);
                    }
                    echo "</span> 
                                                                    </span>
                                                                </a>
                                                            </span>
                                                            ";
                } else {
                    // line 177
                    echo "                                                            <span style=\"float:right\">
                                                                <span class=\"fa fa-thumbs-up\" aria-hidden=\"true\" >
                                                                    <span id=\"review-likes-";
                    // line 179
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
                    echo "\" class=\"cpt-likes\">";
                    if (($this->getAttribute($context["review"], "likes", array()) != 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "likes", array()), "html", null, true);
                    }
                    echo "</span> 
                                                                </span>
                                                            </span>
                                                            ";
                }
                // line 183
                echo "                                                        </div>
                                                        <div class=\"list-text\">";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "text", array()), "html", null, true);
                echo "</div>
                                                        <div class=\"list-text color-gray\">";
                // line 185
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "created", array()), "Y-m-d"), "html", null, true);
                echo "</div>
                                                    </div>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                                        ";
        } else {
            // line 190
            echo "                                        <li class=\"item-content\">
                                            <p class=\"no-review\">暂无评论， 不如来抢个沙发吧</p>
                                        </li>
                                        ";
        }
        // line 194
        echo "                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
      
    <!-- 评论popup -->
    <div class=\"popup popup-edit-review\">
        <div class=\"content-block\">
          <header class=\"bar bar-nav\">
            <a class=\"icon icon-left pull-left photo-browser-close-link close-popup\"></a>
            <h1 class='title'>写评论</h1>
          </header>
          <div class=\"content\">
            
            <div class=\"list-block\">
              <ul>
                <!-- Text inputs -->
                <li>
                  <div class=\"item-content\">
                    <div class=\"item-media\"><i class=\"icon icon-form-name\"></i></div>
                    <div class=\"item-inner\">
                      <div class=\"item-title label\">用户名(随机)</div>
                      <div class=\"item-input\">
                        <input type=\"text\" id=\"username\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "\">
                      </div>
                    </div>
                  </div>
                </li>
                <li class=\"align-top\">
                  <div class=\"item-content\">
                    <div class=\"item-media\"><i class=\"icon icon-form-comment\"></i></div>
                    <div class=\"item-inner\">
                      <div class=\"item-title label\">评论</div>
                      <div class=\"item-input\">
                          <textarea id=\"text\"></textarea>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"content-block\">
              <div class=\"row\">
                <div class=\"col-50\"><a href=\"#\" class=\"button button-big button-fill button-danger close-popup\">取消</a></div>
                <div class=\"col-50\"><a href=\"#\" id=\"valide-review\" class=\"button button-big button-fill button-success\">确认</a></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    
    <script>
        var arrayMenus = ";
        // line 254
        echo twig_jsonencode_filter($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "menu_pics", array()), twig_constant("JSON_PRETTY_PRINT"));
        echo ";
        var arrayTels = ";
        // line 255
        echo twig_jsonencode_filter($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "tel", array()), twig_constant("JSON_PRETTY_PRINT"));
        echo ";
        var foods = ";
        // line 256
        echo twig_jsonencode_filter($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "foods", array()), twig_constant("JSON_PRETTY_PRINT"));
        echo ";
        var wechatQR = ";
        // line 257
        echo twig_jsonencode_filter($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "wechat", array()), twig_constant("JSON_PRETTY_PRINT"));
        echo ";
        var baseUrl = \"";
        // line 258
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\";
        var haveReview = \"";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "haveReview", array()), "html", null, true);
        echo "\";
    </script>
    
    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
<!--    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='";
        // line 265
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "/assets/js/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='";
        // line 266
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "/assets/js/sm.min.js' charset='utf-8'></script>-->
    <script type='text/javascript' src='";
        // line 267
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "/assets/js/sm-extend.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='";
        // line 268
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "/assets/js/resto.js' charset='utf-8'></script>

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "resto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 268,  545 => 267,  541 => 266,  537 => 265,  528 => 259,  524 => 258,  520 => 257,  516 => 256,  512 => 255,  508 => 254,  475 => 224,  443 => 194,  437 => 190,  434 => 189,  424 => 185,  420 => 184,  417 => 183,  406 => 179,  402 => 177,  390 => 172,  383 => 170,  380 => 169,  378 => 168,  374 => 167,  369 => 164,  361 => 162,  355 => 160,  353 => 159,  349 => 157,  344 => 156,  342 => 155,  332 => 147,  326 => 143,  323 => 142,  317 => 141,  315 => 140,  309 => 137,  306 => 136,  297 => 132,  293 => 130,  281 => 125,  274 => 123,  271 => 122,  269 => 121,  265 => 120,  259 => 116,  251 => 114,  245 => 112,  243 => 111,  239 => 110,  235 => 108,  230 => 107,  228 => 106,  225 => 105,  223 => 104,  207 => 90,  204 => 89,  198 => 88,  196 => 87,  189 => 85,  184 => 84,  179 => 83,  176 => 82,  174 => 81,  164 => 75,  158 => 73,  155 => 72,  149 => 70,  146 => 69,  140 => 67,  137 => 66,  131 => 64,  129 => 63,  122 => 59,  119 => 58,  113 => 56,  105 => 54,  103 => 53,  94 => 47,  90 => 46,  86 => 44,  79 => 39,  76 => 38,  70 => 34,  64 => 31,  59 => 30,  56 => 29,  54 => 28,  38 => 15,  34 => 14,  19 => 1,);
    }
}
/* */
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>订食巴黎</title>*/
/*     <meta name="viewport" content="initial-scale=1, maximum-scale=1">*/
/*     <link rel="shortcut icon" href="/favicon.ico">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/*     */
/*     <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">*/
/*     <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">*/
/*     <link rel="stylesheet" href="{{ constant('BASE_URL') }}/assets/font-awesome/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="{{ constant('BASE_URL') }}/assets/css/resto.css">*/
/* */
/*   </head>*/
/*   <body>*/
/* */
/*   <div class="page-group">*/
/*       <!-- 你的html代码 -->*/
/*       <div class="page">*/
/*             <nav class="bar bar-tab">*/
/*                 <a class="tab-item external edit-review" href="#">*/
/*                     <i class="fa fa-edit" aria-hidden="true"></i>*/
/*                     <span class="tab-label">写评论</span>*/
/*                 </a>*/
/*                 {% if resto.tel is not empty %}*/
/*                     {% if resto.tel|length == 1%}*/
/*                     <a class="tab-item external confirm-call" href="tel:{{ resto.tel[0] }}">*/
/*                     {% elseif resto.tel|length > 1%}    */
/*                     <a class="tab-item external open-vertical-modal confirm-call" href="#">*/
/*                     {% endif %}*/
/*                     <i class="fa fa-phone" aria-hidden="true"></i>*/
/*                     <span class="tab-label">电话</span>*/
/*                 </a>*/
/*                 {% endif %}*/
/*                 {% if resto.wechat is not empty %}*/
/*                 <a class="tab-item external confirm-wechat" id="confirm-wechat" href="#">*/
/*                     <i class="fa fa-wechat" aria-hidden="true"></i>*/
/*                     <span class="tab-label">微信</span>*/
/*                 </a>*/
/*                 {% endif %}*/
/*             </nav>*/
/*             <div class="content">*/
/*                 <input type="hidden" id="resto-id" name="resto-id" value="{{ resto.id }}">*/
/*                 <input type="hidden" id="user-id" name="user-id" value="{{ user_id }}">*/
/*                 <!-- 这里是页面内容区 -->*/
/*                 <div class="page-index">*/
/*                     <div class="card">*/
/*                         <div align="bottom" class="card-header color-white row">*/
/*                             <div class="col-20 bloc-img">*/
/*                                 {% if resto.profil_pic is not empty %}*/
/*                                 <img class="img-circle" src="{{ constant('BASE_URL') }}/assets/img/restos/{{ resto.profil_pic }}">*/
/*                                 {% else %}*/
/*                                 <img class="img-circle" src="{{ constant('BASE_URL') }}/assets/img/restos/default.png">*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <h3 class="col-80">{{ resto.name }}</h3>*/
/*                         </div>*/
/*                         <div class="card-content">*/
/*                             <div class="card-content-inner">*/
/*                                 {% if resto.info1 is not empty %}*/
/*                                     <span class="button button-fill"><span class="fa fa-tag" aria-hidden="true"></span> {{ resto.info1 }}</span>*/
/*                                 {% endif %}*/
/*                                 {% if resto.info2 is not empty %}*/
/*                                     <span class="button button-fill"><span class="fa fa-tag" aria-hidden="true"></span> {{ resto.info2 }}</span>*/
/*                                 {% endif %}*/
/*                                 {% if resto.info3 is not empty %}*/
/*                                     <span class="button button-fill"><span class="fa fa-tag" aria-hidden="true"></span> {{ resto.info3 }}</span>*/
/*                                 {% endif %}*/
/*                                 {% if resto.info4 is not empty %}*/
/*                                     <span class="button button-fill"><span class="fa fa-tag" aria-hidden="true"></span> {{ resto.info4 }}</span>*/
/*                                 {% endif %}*/
/*                                 <p>{{ resto.presentation }}</p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="content-padded grid-pic">*/
/*                             <div class="row">*/
/*                                 {% if resto.menu_pics[0] is not empty %}*/
/*                                     {% set j = 0 %}*/
/*                                     {% for menu_pic in resto.menu_pics %}*/
/*                                         <a href="#" class="col-33 thumbnail menu-popup" data-index="{{ j }}">*/
/*                                             <img class="img-thumbnail" src="{{ constant('BASE_URL') }}/assets/img/menus/{{ menu_pic }}" alt="...">*/
/*                                         </a>*/
/*                                     {% set j = j + 1 %}*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                     <div class="buttons-tab fixed-tab">*/
/*                         <a href="#tab1" class="tab-link active button">特色菜</a>*/
/*                         <a href="#tab2" class="tab-link button">评论</a>*/
/*                     </div>*/
/*                     <div class="card">*/
/*                         */
/*                         <div class="tabs">*/
/*                             <div id="tab1" class="tab active">*/
/*                                 <div class="content-block">*/
/*                                     <div class="list-block media-list">*/
/*                                         {% if resto.foods != false %}*/
/*                                         <ul>*/
/*                                             {% set i = 0 %}*/
/*                                             {% for food in resto.foods %}*/
/*                                                 <li class="item-content">*/
/*                                                     <div class="item-media">*/
/*                                                         <a href="#" data-popup=".popup-pic-food" class="food-popup" data-index="{{ i }}">*/
/*                                                         {% if food.pic is empty %}*/
/*                                                             <img class="img-food" src="{{ constant('BASE_URL') }}/assets/img/foods/default.png" width="40">*/
/*                                                         {% else %}*/
/*                                                             <img class="img-food" src="{{ constant('BASE_URL') }}/assets/img/foods/{{ food.pic }}">*/
/*                                                         {% endif %}*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                     <div class="item-inner">*/
/*                                                         <div class="item-title-row">*/
/*                                                             <div class="item-title">{{ food.name }}</div>*/
/*                                                             {% if food.liked == false %}*/
/*                                                             <span style="float:right">*/
/*                                                                 <a href="#" id="do-like-food-{{ food.id }}" class="do-like-food" data-food="{{ food.id }}" data-like="0">*/
/*                                                                     <span class="fa fa-thumbs-o-up" aria-hidden="true" >*/
/*                                                                         <span id="food-likes-{{ food.id }}" class="cpt-likes">{% if food.likes != 0%}{{ food.likes }}{% endif %}</span> */
/*                                                                     </span>*/
/*                                                                 </a>*/
/*                                                             </span>*/
/*                                                             {% else %}*/
/*                                                             <span style="float:right">*/
/*                                                                 <span class="fa fa-thumbs-up" aria-hidden="true" >*/
/*                                                                      <span class="cpt-likes">{% if food.likes != 0%}{{ food.likes }}{% endif %}</span> */
/*                                                                 </span>*/
/*                                                             </span>*/
/*                                                             {% endif %}*/
/*                                                         </div>*/
/*                                                         <div class="list-text">{{ food.price }}</div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 {% set i = i + 1 %}*/
/*                                             {% endfor %}*/
/*                                         {% else %}*/
/*                                         <li class="item-content">*/
/*                                             暂无特色菜实物图，努力添加中*/
/*                                         </li>*/
/*                                         {% endif %}*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="tab2" class="tab">*/
/*                                 <div class="content-block" data-distance="100">*/
/*                                     <div class="list-block media-list">*/
/*                                         <ul id="list-reviews">*/
/*                                         {% if resto.reviews != false %}*/
/*                                             {% for review in resto.reviews %}*/
/*                                                 <li class="item-content">*/
/*                                                     <div class="item-media">*/
/*                                                         {% if review.pic is empty %}*/
/*                                                             <img class="img-review img-circle" src="{{ constant('BASE_URL') }}/assets/img/profils/default.png" width="40">*/
/*                                                         {% else %}*/
/*                                                             <img class="img-review img-circle" src="{{ constant('BASE_URL') }}/assets/img/profils/{{ review.pic }}" width="40">*/
/*                                                         {% endif %}*/
/*                                                     </div>*/
/*                                                     <div class="item-inner">*/
/*                                                         <div class="item-title-row">*/
/*                                                             <div class="item-title">{{ review.username }}</div>*/
/*                                                             {% if review.liked == false %}*/
/*                                                             <span style="float:right">*/
/*                                                                 <a href="#" id="do-like-review-{{ review.id }}" class="do-like-review" data-review="{{ review.id }}" data-like="0">*/
/*                                                                     <span class="fa fa-thumbs-o-up" aria-hidden="true" >*/
/*                                                                         <span id="review-likes-{{ review.id }}" class="cpt-likes">{% if review.likes != 0%}{{ review.likes }}{% endif %}</span> */
/*                                                                     </span>*/
/*                                                                 </a>*/
/*                                                             </span>*/
/*                                                             {% else %}*/
/*                                                             <span style="float:right">*/
/*                                                                 <span class="fa fa-thumbs-up" aria-hidden="true" >*/
/*                                                                     <span id="review-likes-{{ review.id }}" class="cpt-likes">{% if review.likes != 0%}{{ review.likes }}{% endif %}</span> */
/*                                                                 </span>*/
/*                                                             </span>*/
/*                                                             {% endif %}*/
/*                                                         </div>*/
/*                                                         <div class="list-text">{{ review.text }}</div>*/
/*                                                         <div class="list-text color-gray">{{ review.created|date("Y-m-d") }}</div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                             {% endfor %}*/
/*                                         {% else %}*/
/*                                         <li class="item-content">*/
/*                                             <p class="no-review">暂无评论， 不如来抢个沙发吧</p>*/
/*                                         </li>*/
/*                                         {% endif %}*/
/*                                         </ul>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*               </div>*/
/*           </div>*/
/*       </div>*/
/*   </div>*/
/*       */
/*     <!-- 评论popup -->*/
/*     <div class="popup popup-edit-review">*/
/*         <div class="content-block">*/
/*           <header class="bar bar-nav">*/
/*             <a class="icon icon-left pull-left photo-browser-close-link close-popup"></a>*/
/*             <h1 class='title'>写评论</h1>*/
/*           </header>*/
/*           <div class="content">*/
/*             */
/*             <div class="list-block">*/
/*               <ul>*/
/*                 <!-- Text inputs -->*/
/*                 <li>*/
/*                   <div class="item-content">*/
/*                     <div class="item-media"><i class="icon icon-form-name"></i></div>*/
/*                     <div class="item-inner">*/
/*                       <div class="item-title label">用户名(随机)</div>*/
/*                       <div class="item-input">*/
/*                         <input type="text" id="username" value="{{ username }}">*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </li>*/
/*                 <li class="align-top">*/
/*                   <div class="item-content">*/
/*                     <div class="item-media"><i class="icon icon-form-comment"></i></div>*/
/*                     <div class="item-inner">*/
/*                       <div class="item-title label">评论</div>*/
/*                       <div class="item-input">*/
/*                           <textarea id="text"></textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </li>*/
/*               </ul>*/
/*             </div>*/
/*             <div class="content-block">*/
/*               <div class="row">*/
/*                 <div class="col-50"><a href="#" class="button button-big button-fill button-danger close-popup">取消</a></div>*/
/*                 <div class="col-50"><a href="#" id="valide-review" class="button button-big button-fill button-success">确认</a></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     */
/*     <script>*/
/*         var arrayMenus = {{ resto.menu_pics|json_encode(constant('JSON_PRETTY_PRINT'))|raw }};*/
/*         var arrayTels = {{ resto.tel|json_encode(constant('JSON_PRETTY_PRINT'))|raw }};*/
/*         var foods = {{ resto.foods|json_encode(constant('JSON_PRETTY_PRINT'))|raw }};*/
/*         var wechatQR = {{ resto.wechat|json_encode(constant('JSON_PRETTY_PRINT'))|raw }};*/
/*         var baseUrl = "{{ constant('BASE_URL') }}";*/
/*         var haveReview = "{{ resto.haveReview }}";*/
/*     </script>*/
/*     */
/*     <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>*/
/*     <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>*/
/* <!--    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>*/
/*     <script type='text/javascript' src='{{ constant('BASE_URL') }}/assets/js/zepto.min.js' charset='utf-8'></script>*/
/*     <script type='text/javascript' src='{{ constant('BASE_URL') }}/assets/js/sm.min.js' charset='utf-8'></script>-->*/
/*     <script type='text/javascript' src='{{ constant('BASE_URL') }}/assets/js/sm-extend.min.js' charset='utf-8'></script>*/
/*     <script type='text/javascript' src='{{ constant('BASE_URL') }}/assets/js/resto.js' charset='utf-8'></script>*/
/* */
/*   </body>*/
/* </html>*/
/* */
