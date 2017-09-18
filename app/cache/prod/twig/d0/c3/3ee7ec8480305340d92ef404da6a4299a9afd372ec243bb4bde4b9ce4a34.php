<?php

/* BaseBundle:Masters:master.html.twig */
class __TwigTemplate_d0c33ee7ec8480305340d92ef404da6a4299a9afd372ec243bb4bde4b9ce4a34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'logo' => array($this, 'block_logo'),
            'projectname' => array($this, 'block_projectname'),
            'sidebar' => array($this, 'block_sidebar'),
            'portal' => array($this, 'block_portal'),
            'ordenes' => array($this, 'block_ordenes'),
            'svi' => array($this, 'block_svi'),
            'sysaid' => array($this, 'block_sysaid'),
            'salas' => array($this, 'block_salas'),
            'dashboard' => array($this, 'block_dashboard'),
            'directorio' => array($this, 'block_directorio'),
            'videoteca' => array($this, 'block_videoteca'),
            'solicitudes' => array($this, 'block_solicitudes'),
            'titlepage' => array($this, 'block_titlepage'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'area' => array($this, 'block_area'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "        
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"logo\">
                ";
        // line 5
        $this->displayBlock('logo', $context, $blocks);
        // line 8
        echo "        
                ";
        // line 9
        $this->displayBlock('projectname', $context, $blocks);
        // line 15
        echo "                
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <div class=\"navbar-right\">
                    ";
        // line 27
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")) {
            // line 28
            echo "                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                       ";
            // line 105
            echo "                        <!-- Notifications: style can be found in dropdown.less -->
                       ";
            // line 147
            echo "                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class=\"\">
                            <a href=\"";
            // line 149
            echo $this->env->getExtension('routing')->getPath("lock_screen");
            echo "\" >
                                <i class=\"fa fa-lock\"></i> Bloquear
                            </a>
                        </li>
                        <li class=\"\">
                            <a href=\"#\" data-target=\"#acercade\" data-toggle=\"modal\">
                                <i class=\"fa fa-anchor\"></i> Acerca de
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-user\"></i>
                                <span>
                                    ";
            // line 163
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 164
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
                echo "
                                    ";
            }
            // line 166
            echo "                                    <i class=\"caret\"></i></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header bg-light-blue\">
                                    ";
            // line 171
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "foto")) {
                // line 172
                echo "                                      <img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/usuarios/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "foto")), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\" />
                                    ";
            }
            // line 174
            echo "                                    <p>
                                        ";
            // line 175
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 176
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "html", null, true);
                echo "
                                        ";
            }
            // line 177
            echo " 
                                        <small>";
            // line 178
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 179
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "email"), "html", null, true);
                echo "
                                        ";
            }
            // line 180
            echo "</small>
                                    </p>
                                    
                                </li>
                                <!-- Menu Body 
                                <li class=\"user-body\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </li>-->
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        
                                        <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "tipo") . "_show"), array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i>  Perfil</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"";
            // line 203
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-power-off\"></i> Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    ";
        }
        // line 210
        echo "                </div>
            </nav>

";
    }

    // line 5
    public function block_logo($context, array $blocks = array())
    {
        // line 6
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/img/logos/logo.png"), "html", null, true);
        echo "\"   alt=\"cross\"/>
                ";
    }

    // line 9
    public function block_projectname($context, array $blocks = array())
    {
        // line 10
        echo "                   
                    <span style=\"margin-top: -20%;font-size: 30px;\"> KOBRA 
                      
                </span>
               ";
    }

    // line 215
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
                        <li class=\"";
        // line 216
        $this->displayBlock('portal', $context, $blocks);
        echo " \">
                            <a href=\"\">
                                <i class=\"fa fa-dashboard\"></i> <span>Portal</span>
                            </a>
                        </li>
                        <li class=\"";
        // line 221
        $this->displayBlock('ordenes', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 222
        echo $this->env->getExtension('routing')->getPath("ordenes");
        echo "\">
                                <i class=\"fa fa-plane\"></i> <span>Emisiones</span> 
                            </a>
                        </li>
                        <li class=\"";
        // line 226
        $this->displayBlock('svi', $context, $blocks);
        echo "\">
                            <a href=\"http://200.90.157.236/hotelintegrator/index.php?r=site/login\">
                                <i class=\"fa fa-globe\"></i> <span>SVI</span> 
                            </a>
                        </li>
                        <li class=\"";
        // line 231
        $this->displayBlock('sysaid', $context, $blocks);
        echo "\">
                            <a href=\"http://mym2013.sysaidit.com/\">
                                <i class=\"fa fa-wrench\"></i> <span>Sysaid</span> 
                            </a>
                        </li>
                        
                        <li class=\"";
        // line 237
        $this->displayBlock('salas', $context, $blocks);
        echo "\">
                            <a href=\"http://mym2013.sysaidit.com/\">
                                <i class=\"fa fa-users\"></i> <span>Reservar Sal&oacute;n</span> 
                            </a>
                        </li>
                        
                        <li class=\"treeview ";
        // line 243
        $this->displayBlock('dashboard', $context, $blocks);
        echo "\" >
                            <a href=\"#\">
                                <i class=\"fa fa-sitemap\"></i> <span>Organigrama</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"treeview\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-sitemap\"></i> <span>M&M</span>
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-bookmark\"></i>Areas</a></li>
                                        <li><a href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("organigrama", array("empresa" => 1, "tipo" => "empleado")), "html", null, true);
        echo "\"><i class=\"fa fa-user\"></i> Empleados</a></li>
                                        
                                    </ul>
                                </li> 
                                <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-archive\"></i> M&M</a></li>
                                <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-archive\"></i> Lujor</a></li>
                                <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-archive\"></i> HRG</a></li>
                            </ul>
                        </li> 
                        <li class=\"";
        // line 265
        $this->displayBlock('directorio', $context, $blocks);
        echo "\">
                            <a href=\"pages/widgets.html\">
                                <i class=\"fa fa-phone-square\"></i> <span>Directorio</span> 
                            </a>
                        </li>
                        <li class=\"";
        // line 270
        $this->displayBlock('videoteca', $context, $blocks);
        echo "\">
                            <a href=\"pages/widgets.html\">
                                <i class=\"fa fa-film\"></i> <span>Videoteca</span> 
                            </a>
                        </li>
                      
                        <li class=\"treeview ";
        // line 276
        $this->displayBlock('solicitudes', $context, $blocks);
        echo "\" >
                            <a href=\"#\">
                                <i class=\"fa fa-pencil-square-o\"></i> <span>Solicitudes</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"\"><i class=\"fa fa-calendar\"></i> Vacaciones</a></li>
                                <li><a href=\"\"><i class=\"fa fa-cutlery\"></i> Vi&aacute;ticos</a></li>
                                <li><a href=\"\"><i class=\"fa fa-plane\"></i> Emisiones</a></li>
                            </ul>
                        </li> 
                         <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-shield\"></i> <span>Seguridad</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"";
        // line 293
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\"><i class=\"fa fa-unlock-alt\"></i> Cambiar Contrase&ntilde;a</a></li>
                                <li><a href=\"";
        // line 294
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"fa fa-user\"></i> Editar Perfil</a></li>
                            </ul>
                        </li> 
 ";
    }

    // line 216
    public function block_portal($context, array $blocks = array())
    {
        echo "";
    }

    // line 221
    public function block_ordenes($context, array $blocks = array())
    {
        echo "";
    }

    // line 226
    public function block_svi($context, array $blocks = array())
    {
        echo "";
    }

    // line 231
    public function block_sysaid($context, array $blocks = array())
    {
        echo "";
    }

    // line 237
    public function block_salas($context, array $blocks = array())
    {
        echo "";
    }

    // line 243
    public function block_dashboard($context, array $blocks = array())
    {
        echo "";
    }

    // line 265
    public function block_directorio($context, array $blocks = array())
    {
        echo "";
    }

    // line 270
    public function block_videoteca($context, array $blocks = array())
    {
        echo "";
    }

    // line 276
    public function block_solicitudes($context, array $blocks = array())
    {
        echo "";
    }

    // line 299
    public function block_titlepage($context, array $blocks = array())
    {
        // line 300
        echo "     <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
 ";
    }

    // line 306
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 307
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"active\">Dashboard</li>
 ";
    }

    // line 311
    public function block_area($context, array $blocks = array())
    {
        // line 312
        echo "     <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-aqua\">
                                <div class=\"inner\">
                                    <h3>
                                        150
                                    </h3>
                                    <p>
                                        New Orders
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-bag\"></i>
                                </div>
                                <a href=\"#\" class=\"small-box-footer\">
                                    More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-green\">
                                <div class=\"inner\">
                                    <h3>
                                        53<sup style=\"font-size: 20px\">%</sup>
                                    </h3>
                                    <p>
                                        Bounce Rate
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-stats-bars\"></i>
                                </div>
                                <a href=\"#\" class=\"small-box-footer\">
                                    More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-yellow\">
                                <div class=\"inner\">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-person-add\"></i>
                                </div>
                                <a href=\"#\" class=\"small-box-footer\">
                                    More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-red\">
                                <div class=\"inner\">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Unique Visitors
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-pie-graph\"></i>
                                </div>
                                <a href=\"#\" class=\"small-box-footer\">
                                    More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class=\"row\">
                        <!-- Left col -->
                        <section class=\"col-lg-7 connectedSortable\">                            


                            <!-- Custom tabs (Charts with tabs)-->
                            <div class=\"nav-tabs-custom\">
                                <!-- Tabs within a box -->
                                <ul class=\"nav nav-tabs pull-right\">
                                    <li class=\"active\"><a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a></li>
                                    <li><a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a></li>
                                    <li class=\"pull-left header\"><i class=\"fa fa-inbox\"></i> Sales</li>
                                </ul>
                                <div class=\"tab-content no-padding\">
                                    <!-- Morris chart - Sales -->
                                    <div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
                                    <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
                                </div>
                            </div><!-- /.nav-tabs-custom -->

                            <!-- Chat box -->
                            <div class=\"box box-success\">
                                <div class=\"box-header\">
                                    <i class=\"fa fa-comments-o\"></i>
                                    <h3 class=\"box-title\">Chat</h3>
                                    <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                                        <div class=\"btn-group\" data-toggle=\"btn-toggle\" >
                                            <button type=\"button\" class=\"btn btn-default btn-sm active\"><i class=\"fa fa-square text-green\"></i></button>
                                            <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-square text-red\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"box-body chat\" id=\"chat-box\">
                                    <!-- chat item -->
                                    <div class=\"item\">
                                        <img src=\"";
        // line 426
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/usuarios/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "foto")), "html", null, true);
        echo "\" alt=\"user image\" class=\"online\"/>
                                        <p class=\"message\">
                                            <a href=\"#\" class=\"name\">
                                                <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 2:15</small>
                                                Mike Doe
                                            </a>
                                            I would like to meet you to discuss the latest news about
                                            the arrival of the new theme. They say it is going to be one the
                                            best themes on the market
                                        </p>
                                        <div class=\"attachment\">
                                            <h4>Attachments:</h4>
                                            <p class=\"filename\">
                                                Theme-thumbnail-image.jpg
                                            </p>
                                            <div class=\"pull-right\">
                                                <button class=\"btn btn-primary btn-sm btn-flat\">Open</button>
                                            </div>
                                        </div><!-- /.attachment -->
                                    </div><!-- /.item -->
                                    <!-- chat item -->
                                    <div class=\"item\">
                                        <img src=\"\" alt=\"user image\" class=\"offline\"/>
                                        <p class=\"message\">
                                            <a href=\"#\" class=\"name\">
                                                <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                                                Jane Doe
                                            </a>
                                            I would like to meet you to discuss the latest news about
                                            the arrival of the new theme. They say it is going to be one the
                                            best themes on the market
                                        </p>
                                    </div><!-- /.item -->
                                    <!-- chat item -->
                                    <div class=\"item\">
                                        <img src=\"\" alt=\"user image\" class=\"offline\"/>
                                        <p class=\"message\">
                                            <a href=\"#\" class=\"name\">
                                                <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:30</small>
                                                Susan Doe
                                            </a>
                                            I would like to meet you to discuss the latest news about
                                            the arrival of the new theme. They say it is going to be one the
                                            best themes on the market
                                        </p>
                                    </div><!-- /.item -->
                                </div><!-- /.chat -->
                                <div class=\"box-footer\">
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" placeholder=\"Type message...\"/>
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-success\"><i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box (chat box) -->                                                        

                            <!-- TO DO List -->
                            <div class=\"box box-primary\">
                                <div class=\"box-header\">
                                    <i class=\"ion ion-clipboard\"></i>
                                    <h3 class=\"box-title\">To Do List</h3>
                                    <div class=\"box-tools pull-right\">
                                        <ul class=\"pagination pagination-sm inline\">
                                            <li><a href=\"#\">&laquo;</a></li>
                                            <li><a href=\"#\">1</a></li>
                                            <li><a href=\"#\">2</a></li>
                                            <li><a href=\"#\">3</a></li>
                                            <li><a href=\"#\">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    <ul class=\"todo-list\">
                                        <li>
                                            <!-- drag handle -->
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <!-- checkbox -->
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <!-- todo text -->
                                            <span class=\"text\">Design a nice theme</span>
                                            <!-- Emphasis label -->
                                            <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                                            <!-- General tools such as edit or delete-->
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Make the theme responsive</span>
                                            <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Let theme shine like a star</span>
                                            <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Let theme shine like a star</span>
                                            <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Check your messages and notifications</span>
                                            <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Let theme shine like a star</span>
                                            <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- /.box-body -->
                                <div class=\"box-footer clearfix no-border\">
                                    <button class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
                                </div>
                            </div><!-- /.box -->

                            <!-- quick email widget -->
                            <div class=\"box box-info\">
                                <div class=\"box-header\">
                                    <i class=\"fa fa-envelope\"></i>
                                    <h3 class=\"box-title\">Quick Email</h3>
                                    <!-- tools box -->
                                    <div class=\"pull-right box-tools\">
                                        <button class=\"btn btn-info btn-sm\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                                    </div><!-- /. tools -->
                                </div>
                                <div class=\"box-body\">
                                    <form action=\"#\" method=\"post\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" name=\"emailto\" placeholder=\"Email to:\"/>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\"/>
                                        </div>
                                        <div>
                                            <textarea class=\"textarea\" placeholder=\"Message\" style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"box-footer clearfix\">
                                    <button class=\"pull-right btn btn-default\" id=\"sendEmail\">Send <i class=\"fa fa-arrow-circle-right\"></i></button>
                                </div>
                            </div>

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class=\"col-lg-5 connectedSortable\"> 

                            <!-- Map box -->
                            <div class=\"box box-solid bg-light-blue-gradient\">
                                <div class=\"box-header\">
                                    <!-- tools box -->
                                    <div class=\"pull-right box-tools\">
                                        <button class=\"btn btn-primary btn-sm daterange pull-right\" data-toggle=\"tooltip\" title=\"Date range\"><i class=\"fa fa-calendar\"></i></button>
                                        <button class=\"btn btn-primary btn-sm pull-right\" data-widget='collapse' data-toggle=\"tooltip\" title=\"Collapse\" style=\"margin-right: 5px;\"><i class=\"fa fa-minus\"></i></button>
                                    </div><!-- /. tools -->

                                    <i class=\"fa fa-map-marker\"></i>
                                    <h3 class=\"box-title\">
                                        Visitors
                                    </h3>
                                </div>
                                <div class=\"box-body\">
                                    <div id=\"world-map\" style=\"height: 250px;\"></div>
                                </div><!-- /.box-body-->
                                <div class=\"box-footer no-border\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                                            <div id=\"sparkline-1\"></div>
                                            <div class=\"knob-label\">Visitors</div>
                                        </div><!-- ./col -->
                                        <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                                           <div id=\"sparkline-2\"></div>
                                            <div class=\"knob-label\">Online</div>
                                        </div><!-- ./col -->
                                        <div class=\"col-xs-4 text-center\">
                                            <div id=\"sparkline-3\"></div>
                                            <div class=\"knob-label\">Exists</div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->
                                </div>
                            </div>
                            <!-- /.box -->

                            <!-- solid sales graph -->
                            <div class=\"box box-solid bg-teal-gradient\">
                                <div class=\"box-header\">
                                    <i class=\"fa fa-th\"></i>
                                    <h3 class=\"box-title\">Sales Graph</h3>
                                    <div class=\"box-tools pull-right\">
                                        <button class=\"btn bg-teal btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                                        <button class=\"btn bg-teal btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                                <div class=\"box-body border-radius-none\">
                                    <div class=\"chart\" id=\"line-chart\" style=\"height: 250px;\"></div>                                    
                                </div><!-- /.box-body -->
                                <div class=\"box-footer no-border\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                                            <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\"/>
                                            <div class=\"knob-label\">Mail-Orders</div>
                                        </div><!-- ./col -->
                                        <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                                            <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\"/>
                                            <div class=\"knob-label\">Online</div>
                                        </div><!-- ./col -->
                                        <div class=\"col-xs-4 text-center\">
                                            <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\"/>
                                            <div class=\"knob-label\">In-Store</div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-footer -->
                            </div><!-- /.box -->                            

                            <!-- Calendar -->
                            <div class=\"box box-solid bg-green-gradient\">
                                <div class=\"box-header\">
                                    <i class=\"fa fa-calendar\"></i>
                                    <h3 class=\"box-title\">Calendar</h3>
                                    <!-- tools box -->
                                    <div class=\"pull-right box-tools\">
                                        <!-- button with a dropdown -->
                                        <div class=\"btn-group\">
                                            <button class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></button>
                                            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                <li><a href=\"#\">Add new event</a></li>
                                                <li><a href=\"#\">Clear events</a></li>
                                                <li class=\"divider\"></li>
                                                <li><a href=\"#\">View calendar</a></li>
                                            </ul>
                                        </div>
                                        <button class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                                        <button class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>                                        
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class=\"box-body no-padding\">
                                    <!--The calendar -->
                                    <div id=\"calendar\" style=\"width: 100%\"></div>
                                </div><!-- /.box-body -->  
                                <div class=\"box-footer text-black\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <!-- Progress bars -->
                                            <div class=\"clearfix\">
                                                <span class=\"pull-left\">Task #1</span>
                                                <small class=\"pull-right\">90%</small>
                                            </div>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <span class=\"pull-left\">Task #2</span>
                                                <small class=\"pull-right\">70%</small>
                                            </div>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class=\"col-sm-6\">
                                            <div class=\"clearfix\">
                                                <span class=\"pull-left\">Task #3</span>
                                                <small class=\"pull-right\">60%</small>
                                            </div>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <span class=\"pull-left\">Task #4</span>
                                                <small class=\"pull-right\">40%</small>
                                            </div>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                                            </div>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->                                                                        
                                </div>
 ";
    }

    public function getTemplateName()
    {
        return "BaseBundle:Masters:master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 426,  418 => 312,  415 => 311,  409 => 307,  406 => 306,  398 => 300,  395 => 299,  389 => 276,  383 => 270,  377 => 265,  371 => 243,  365 => 237,  359 => 231,  353 => 226,  347 => 221,  341 => 216,  333 => 294,  329 => 293,  309 => 276,  300 => 270,  292 => 265,  280 => 256,  264 => 243,  255 => 237,  246 => 231,  238 => 226,  231 => 222,  227 => 221,  219 => 216,  214 => 215,  196 => 6,  193 => 5,  186 => 210,  176 => 203,  170 => 200,  148 => 180,  142 => 179,  129 => 175,  126 => 174,  120 => 172,  118 => 171,  105 => 164,  82 => 147,  75 => 28,  73 => 27,  59 => 15,  57 => 9,  54 => 8,  48 => 4,  166 => 110,  163 => 109,  157 => 105,  154 => 104,  146 => 98,  143 => 97,  139 => 95,  103 => 163,  52 => 5,  46 => 9,  43 => 3,  40 => 7,  38 => 6,  31 => 3,  279 => 141,  277 => 140,  271 => 138,  268 => 137,  228 => 100,  221 => 84,  217 => 83,  210 => 80,  206 => 10,  203 => 9,  200 => 76,  197 => 75,  194 => 74,  191 => 73,  188 => 72,  185 => 71,  182 => 70,  179 => 69,  177 => 68,  174 => 67,  172 => 66,  164 => 65,  161 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 60,  147 => 59,  140 => 178,  137 => 177,  134 => 56,  131 => 176,  128 => 54,  125 => 53,  122 => 52,  119 => 51,  116 => 50,  114 => 49,  111 => 166,  109 => 47,  106 => 46,  102 => 45,  86 => 149,  81 => 29,  79 => 105,  76 => 27,  69 => 22,  66 => 19,  58 => 13,  55 => 12,  49 => 10,  44 => 10,  36 => 5,  33 => 4,);
    }
}
