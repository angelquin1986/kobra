<?php

/* APYDataGridBundle::blocks.html.twig */
class __TwigTemplate_470bfd0387a456ca85289d318363c016d29f7b5bf82e56de37a9aaae8e0924e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'grid' => array($this, 'block_grid'),
            'grid_no_data' => array($this, 'block_grid_no_data'),
            'grid_no_result' => array($this, 'block_grid_no_result'),
            'grid_titles' => array($this, 'block_grid_titles'),
            'grid_filters' => array($this, 'block_grid_filters'),
            'grid_search' => array($this, 'block_grid_search'),
            'grid_rows' => array($this, 'block_grid_rows'),
            'grid_pager' => array($this, 'block_grid_pager'),
            'grid_pager_selectpage' => array($this, 'block_grid_pager_selectpage'),
            'grid_pager_totalcount' => array($this, 'block_grid_pager_totalcount'),
            'grid_pager_results_perpage' => array($this, 'block_grid_pager_results_perpage'),
            'grid_exports' => array($this, 'block_grid_exports'),
            'grid_actions' => array($this, 'block_grid_actions'),
            'grid_tweaks' => array($this, 'block_grid_tweaks'),
            'grid_column_actions_cell' => array($this, 'block_grid_column_actions_cell'),
            'grid_column_massaction_cell' => array($this, 'block_grid_column_massaction_cell'),
            'grid_column_boolean_cell' => array($this, 'block_grid_column_boolean_cell'),
            'grid_column_type_boolean_cell' => array($this, 'block_grid_column_type_boolean_cell'),
            'grid_column_rank_cell' => array($this, 'block_grid_column_rank_cell'),
            'grid_column_type_rank_cell' => array($this, 'block_grid_column_type_rank_cell'),
            'grid_column_array_cell' => array($this, 'block_grid_column_array_cell'),
            'grid_column_type_array_cell' => array($this, 'block_grid_column_type_array_cell'),
            'grid_column_join_cell' => array($this, 'block_grid_column_join_cell'),
            'grid_column_type_join_cell' => array($this, 'block_grid_column_type_join_cell'),
            'grid_column_cell' => array($this, 'block_grid_column_cell'),
            'grid_column_operator' => array($this, 'block_grid_column_operator'),
            'grid_column_filter_type_input' => array($this, 'block_grid_column_filter_type_input'),
            'grid_column_filter_type_select' => array($this, 'block_grid_column_filter_type_select'),
            'grid_column_filter_type_massaction' => array($this, 'block_grid_column_filter_type_massaction'),
            'grid_column_filter_type_actions' => array($this, 'block_grid_column_filter_type_actions'),
            'grid_scripts' => array($this, 'block_grid_scripts'),
            'grid_scripts_goto' => array($this, 'block_grid_scripts_goto'),
            'grid_scripts_reset' => array($this, 'block_grid_scripts_reset'),
            'grid_scripts_previous_page' => array($this, 'block_grid_scripts_previous_page'),
            'grid_scripts_next_page' => array($this, 'block_grid_scripts_next_page'),
            'grid_scripts_enter_page' => array($this, 'block_grid_scripts_enter_page'),
            'grid_scripts_results_per_page' => array($this, 'block_grid_scripts_results_per_page'),
            'grid_scripts_mark_visible' => array($this, 'block_grid_scripts_mark_visible'),
            'grid_scripts_mark_all' => array($this, 'block_grid_scripts_mark_all'),
            'grid_scripts_switch_operator' => array($this, 'block_grid_scripts_switch_operator'),
            'grid_scripts_submit_form' => array($this, 'block_grid_scripts_submit_form'),
            'grid_scripts_ajax' => array($this, 'block_grid_scripts_ajax'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('grid', $context, $blocks);
        // line 43
        $this->displayBlock('grid_no_data', $context, $blocks);
        // line 45
        $this->displayBlock('grid_no_result', $context, $blocks);
        // line 59
        $this->displayBlock('grid_titles', $context, $blocks);
        // line 94
        $this->displayBlock('grid_filters', $context, $blocks);
        // line 118
        $this->displayBlock('grid_search', $context, $blocks);
        // line 154
        $this->displayBlock('grid_rows', $context, $blocks);
        // line 174
        $this->displayBlock('grid_pager', $context, $blocks);
        // line 185
        echo "
";
        // line 187
        $this->displayBlock('grid_pager_selectpage', $context, $blocks);
        // line 204
        echo "        
        ";
        // line 206
        echo "        ";
        $this->displayBlock('grid_pager_results_perpage', $context, $blocks);
        // line 214
        echo "

 ";
        // line 217
        $this->displayBlock('grid_exports', $context, $blocks);
        // line 231
        echo "      

    
  
";
        // line 236
        $this->displayBlock('grid_actions', $context, $blocks);
        // line 260
        echo "
";
        // line 262
        $this->displayBlock('grid_tweaks', $context, $blocks);
        // line 277
        $this->displayBlock('grid_column_actions_cell', $context, $blocks);
        // line 286
        $this->displayBlock('grid_column_massaction_cell', $context, $blocks);
        // line 290
        $this->displayBlock('grid_column_boolean_cell', $context, $blocks);
        // line 293
        $this->displayBlock('grid_column_type_boolean_cell', $context, $blocks);
        // line 297
        $this->displayBlock('grid_column_rank_cell', $context, $blocks);
        // line 300
        $this->displayBlock('grid_column_type_rank_cell', $context, $blocks);
        // line 304
        $this->displayBlock('grid_column_array_cell', $context, $blocks);
        // line 313
        $this->displayBlock('grid_column_type_array_cell', $context, $blocks);
        // line 317
        $this->displayBlock('grid_column_join_cell', $context, $blocks);
        // line 324
        $this->displayBlock('grid_column_type_join_cell', $context, $blocks);
        // line 328
        $this->displayBlock('grid_column_cell', $context, $blocks);
        // line 341
        $this->displayBlock('grid_column_operator', $context, $blocks);
        // line 364
        $this->displayBlock('grid_column_filter_type_input', $context, $blocks);
        // line 381
        $this->displayBlock('grid_column_filter_type_select', $context, $blocks);
        // line 427
        $this->displayBlock('grid_column_filter_type_massaction', $context, $blocks);
        // line 431
        $this->displayBlock('grid_column_filter_type_actions', $context, $blocks);
        // line 435
        echo "


";
        // line 439
        $this->displayBlock('grid_scripts', $context, $blocks);
        // line 455
        echo "
";
        // line 456
        $this->displayBlock('grid_scripts_goto', $context, $blocks);
        // line 464
        echo "
";
        // line 465
        $this->displayBlock('grid_scripts_reset', $context, $blocks);
        // line 473
        echo "
";
        // line 474
        $this->displayBlock('grid_scripts_previous_page', $context, $blocks);
        // line 482
        echo "
";
        // line 483
        $this->displayBlock('grid_scripts_next_page', $context, $blocks);
        // line 491
        echo "
";
        // line 492
        $this->displayBlock('grid_scripts_enter_page', $context, $blocks);
        // line 508
        echo "
";
        // line 509
        $this->displayBlock('grid_scripts_results_per_page', $context, $blocks);
        // line 517
        echo "
";
        // line 518
        $this->displayBlock('grid_scripts_mark_visible', $context, $blocks);
        // line 547
        echo "
";
        // line 548
        $this->displayBlock('grid_scripts_mark_all', $context, $blocks);
        // line 572
        echo "
";
        // line 573
        $this->displayBlock('grid_scripts_switch_operator', $context, $blocks);
        // line 604
        echo "
";
        // line 605
        $this->displayBlock('grid_scripts_submit_form', $context, $blocks);
        // line 621
        echo "
";
        // line 622
        $this->displayBlock('grid_scripts_ajax', $context, $blocks);
    }

    // line 2
    public function block_grid($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"grid \">
";
        // line 4
        if (((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "totalCount") > 0) || $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isFiltered")) || ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage") === false))) {
            // line 5
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "routeUrl"), "html", null, true);
            echo "\" method=\"post\">
        <div class=\"grid_header\">
        ";
            // line 7
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "massActions")) > 0)) {
                // line 8
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("actions", (isset($context["grid"]) ? $context["grid"] : null));
                echo "
        ";
            }
            // line 10
            echo "        </div>
        <div class=\"grid_body box box-primary\">
            <table class=\"table table-condensed table-hover \">
        ";
            // line 13
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isTitleSectionVisible")) {
                // line 14
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("titles", (isset($context["grid"]) ? $context["grid"] : null));
                echo "
        ";
            }
            // line 16
            echo "        ";
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isFilterSectionVisible")) {
                // line 17
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("filters", (isset($context["grid"]) ? $context["grid"] : null));
                echo " 
        ";
            }
            // line 19
            echo "        ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("rows", (isset($context["grid"]) ? $context["grid"] : null));
            echo "
        </table>
        </div>
        <div class=\"grid_footer\">
        ";
            // line 23
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isPagerSectionVisible")) {
                // line 24
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGridPager((isset($context["grid"]) ? $context["grid"] : null));
                echo "
        ";
            }
            // line 26
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "exports")) > 0)) {
                // line 27
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("exports", (isset($context["grid"]) ? $context["grid"] : null));
                echo "
        ";
            }
            // line 29
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "tweaks")) > 0)) {
                // line 30
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("tweaks", (isset($context["grid"]) ? $context["grid"] : null));
                echo "
        ";
            }
            // line 32
            echo "        </div>
        ";
            // line 33
            if ((isset($context["withjs"]) ? $context["withjs"] : null)) {
                // line 34
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts", (isset($context["grid"]) ? $context["grid"] : null));
                echo "
        ";
            }
            // line 36
            echo "    </form>
";
        } else {
            // line 38
            echo "    ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("no_data", (isset($context["grid"]) ? $context["grid"] : null));
            echo "
";
        }
        // line 40
        echo "</div>
";
    }

    // line 43
    public function block_grid_no_data($context, array $blocks = array())
    {
        echo "<p class=\"no_data\">";
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage"), "No data")) : ("No data")));
        echo "</p>";
    }

    // line 45
    public function block_grid_no_result($context, array $blocks = array())
    {
        // line 46
        ob_start();
        // line 47
        $context["nbColumns"] = 0;
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "columns"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 49
            echo "    ";
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isReadyForExport")), "method")) {
                // line 50
                echo "        ";
                $context["nbColumns"] = ((isset($context["nbColumns"]) ? $context["nbColumns"] : null) + 1);
                // line 51
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "<tr class=\"grid-row-cells\">
    <td class=\"last-column last-row\" colspan=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["nbColumns"]) ? $context["nbColumns"] : null), "html", null, true);
        echo "\" style=\"text-align: center;\">";
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noResultMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noResultMessage"), "No result")) : ("No result")));
        echo "</td>
</tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_grid_titles($context, array $blocks = array())
    {
        // line 60
        echo "    <tr class=\"grid-row-titles\">
    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "columns"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 62
            echo "        ";
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isReadyForExport")), "method")) {
                // line 63
                echo "            <th class=\"";
                if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "align") != "left")) {
                    echo "align-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "align"), "html", null, true);
                }
                if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class"), "html", null, true);
                }
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                    echo " last-column";
                }
                echo "\"";
                if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "size") > (-1))) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "size") . "%"), "html", null, true);
                    echo ";\"";
                }
                echo ">";
                // line 64
                ob_start();
                // line 65
                echo "            ";
                if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "type") == "massaction")) {
                    // line 66
                    echo "                <input type=\"checkbox\" class=\"grid-mass-selector\" onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
                    echo "_markVisible(this.checked);\"/>
            ";
                } else {
                    // line 67
                    echo " 
              ";
                    // line 74
                    echo "                    ";
                    $context["columnTitle"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "title");
                    // line 75
                    echo "               ";
                    // line 76
                    echo "                ";
                    if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "sortable")) {
                        // line 77
                        echo "                    <a class=\"order\" href=\"";
                        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("order", (isset($context["grid"]) ? $context["grid"] : null), (isset($context["column"]) ? $context["column"] : null));
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order by"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : null)), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : null)), "html", null, true);
                        echo "</a>
                    ";
                        // line 78
                        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "order") == "asc")) {
                            // line 79
                            echo "                        <div class=\"sort_up\"></div>
                    ";
                        } elseif (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "order") == "desc")) {
                            // line 81
                            echo "                        <div class=\"sort_down\"></div>
                    ";
                        }
                        // line 83
                        echo "                ";
                    } else {
                        // line 84
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : null)), "html", null, true);
                        echo "
                ";
                    }
                    // line 86
                    echo "            ";
                }
                // line 87
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 88
                echo "</th>
        ";
            }
            // line 90
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </tr>
";
    }

    // line 94
    public function block_grid_filters($context, array $blocks = array())
    {
        // line 95
        echo "    <tr class=\"grid-row-filters\">
    ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "columns"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 97
            echo "        ";
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isReadyForExport")), "method")) {
                // line 98
                echo "        <th class=\"
            ";
                // line 99
                if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class")) {
                    // line 100
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class"), "html", null, true);
                    echo "
            ";
                }
                // line 102
                echo "            ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                    echo " 
                last-column
            ";
                }
                // line 104
                echo "\"

            ";
                // line 106
                if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "size") > (-1))) {
                    echo " 
                style=\"width:";
                    // line 107
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "size") . "%"), "html", null, true);
                    echo ";\"
            ";
                }
                // line 108
                echo ">
            ";
                // line 109
                if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "filterable")) {
                    // line 110
                    echo "                ";
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridFilter((isset($context["column"]) ? $context["column"] : null), (isset($context["grid"]) ? $context["grid"] : null));
                    echo "
            ";
                }
                // line 112
                echo "         </th>
        ";
            }
            // line 114
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "    </tr>
";
    }

    // line 118
    public function block_grid_search($context, array $blocks = array())
    {
        // line 119
        echo "    <div class=\"box box-success box-tools\">
        <form id=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_search\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "routeUrl"), "html", null, true);
        echo "\" method=\"post\"> 
        <div class=\"box-header\">
            <h3 class=\"box-title\">Filtros de b&uacute;squeda</h3>
            <div class=\"pull-right box-tools\">
                <button type=\"submit\" data-toggle=\"tooltip\" data-original-title=\"Buscar\" class=\"grid-search-submit btn btn-success btn-circle\" value=\"\"><i class=\"fa fa-search\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" data-original-title=\"Quitar Filtros\"  class=\"grid-search-reset btn btn-danger btn-circle\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
        echo "\" onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_reset();\"><i class=\"fa fa-times\"></i></button>
            </div>
        </div>
        <div class=\"box-body row\">
                ";
        // line 129
        if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isFilterSectionVisible")) {
            // line 130
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "columns"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 131
                echo "                            ";
                if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "isFilterable") && !twig_in_filter($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "type"), array(0 => "actions", 1 => "massaction")))) {
                    // line 132
                    echo "                                ";
                    if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "usePrefixTitle") == true)) {
                        // line 133
                        echo "                                    ";
                        $context["columnTitle"] = ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "prefixTitle") . $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "title"));
                        // line 134
                        echo "                                ";
                    } else {
                        // line 135
                        echo "                                    ";
                        $context["columnTitle"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "title");
                        // line 136
                        echo "                                ";
                    }
                    // line 137
                    echo "                                <div class=\"form-group col-md-3 ";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index")), "html", null, true);
                    echo "\">
                                    <label>";
                    // line 138
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : null)), "html", null, true);
                    echo "</label>
                                            ";
                    // line 139
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridFilter((isset($context["column"]) ? $context["column"] : null), (isset($context["grid"]) ? $context["grid"] : null), false);
                    echo "
                                   ";
                    // line 143
                    echo "                                </div>
                            ";
                }
                // line 145
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                     
                ";
        }
        // line 148
        echo "        </div><!-- /.box-body -->
        </form>
    </div>

";
    }

    // line 154
    public function block_grid_rows($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "rows"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 156
            echo "    ";
            $context["last_row"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last");
            // line 157
            echo "    ";
            ob_start();
            // line 158
            echo "        ";
            ob_start();
            // line 159
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "columns"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 160
                echo "                ";
                if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isReadyForExport")), "method")) {
                    // line 161
                    echo "                    <td class=\"grid-column-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "renderBlockId"), "html", null, true);
                    if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "class"), "html", null, true);
                    }
                    if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "align") != "left")) {
                        echo " align-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "align"), "html", null, true);
                    }
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                        echo " last-column";
                    }
                    if ((isset($context["last_row"]) ? $context["last_row"] : null)) {
                        echo " last-row";
                    }
                    echo "\">";
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridCell((isset($context["column"]) ? $context["column"] : null), (isset($context["row"]) ? $context["row"] : null), (isset($context["grid"]) ? $context["grid"] : null));
                    echo "</td>
                ";
                }
                // line 163
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "        ";
            $context["gridColumns"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 165
            echo "        <tr";
            if (($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "color") != "")) {
                echo " style=\"background-color:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "color"), "html", null, true);
                echo ";\"";
            }
            echo " class=\"grid-row-cells ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index")), "html", null, true);
            if (($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "class") != "")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "class"), "html", null, true);
            }
            echo "\">
        ";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["gridColumns"]) ? $context["gridColumns"] : null), "html", null, true);
            echo "
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 168
            echo "    </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 170
            echo "        ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("no_result", (isset($context["grid"]) ? $context["grid"] : null));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 174
    public function block_grid_pager($context, array $blocks = array())
    {
        // line 175
        echo "    ";
        if ((isset($context["pagerfanta"]) ? $context["pagerfanta"] : null)) {
            // line 176
            echo "        ";
            echo $this->env->getExtension('datagrid_twig_extension')->getPagerfanta((isset($context["grid"]) ? $context["grid"] : null));
            echo "
    ";
        } else {
            // line 178
            echo "        <div class=\"pager\" style=\"float:left\">
            ";
            // line 180
            echo "            ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_selectpage", (isset($context["grid"]) ? $context["grid"] : null));
            echo "
            ";
            // line 181
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_results_perpage", (isset($context["grid"]) ? $context["grid"] : null));
            echo "
        </div>
    ";
        }
    }

    // line 187
    public function block_grid_pager_selectpage($context, array $blocks = array())
    {
        // line 188
        echo "
";
        // line 189
        ob_start();
        // line 190
        echo "

        ";
        // line 193
        echo "        ";
        $this->displayBlock('grid_pager_totalcount', $context, $blocks);
        // line 196
        echo "
        ";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page"), "html", null, true);
        echo "
        <button type=\"button\" class=\"btn btn-sm btn-primary btn-circle prev\" ";
        // line 198
        if (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "page") <= 0)) {
            echo "disabled=\"disabled\"";
        }
        echo " value=\"<\" onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_previousPage();\"><i class=\"fa  fa-arrow-left\"></i></button>
        <input style=\"width: 50px;\" type=\"text\" class=\"current\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "page") + 1), "html", null, true);
        echo "\" size=\"2\" onkeypress=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_enterPage(event, parseInt(this.value)-1);\"/>
        <button type=\"button\" value=\">\" class=\"btn btn-sm btn-primary btn-circle  next\" ";
        // line 200
        if (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "page") >= ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "pageCount") - 1))) {
            echo "disabled=\"disabled\"";
        }
        echo " onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_nextPage();\"><i class=\"fa  fa-arrow-right\"></i></button> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("of %count%", array("%count%" => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "pageCount"))), "html", null, true);
        echo "

        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 203
        echo "        ";
    }

    // line 193
    public function block_grid_pager_totalcount($context, array $blocks = array())
    {
        // line 194
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("%count% Results, ", $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "totalCount"), array("%count%" => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "totalCount"))), "html", null, true);
        echo "
        ";
    }

    // line 206
    public function block_grid_pager_results_perpage($context, array $blocks = array())
    {
        // line 207
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(", Display"), "html", null, true);
        echo "
        <select style=\"width:70px;\" onchange=\"return ";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_resultsPerPage(this.value);\">
        ";
        // line 209
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "limits"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 210
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["key"]) ? $context["key"] : null) == $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "limit"))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "        </select> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Items per page"), "html", null, true);
        echo "
        ";
    }

    // line 217
    public function block_grid_exports($context, array $blocks = array())
    {
        // line 218
        echo "<div class=\"exports\" style=\"float:right\">
    ";
        // line 219
        ob_start();
        // line 220
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Export"), "html", null, true);
        echo "
            <select name=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_EXPORT"), "html", null, true);
        echo "]\">
            <option value=\"-1\">Seleccione</option>
            ";
        // line 223
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "exports"));
        foreach ($context['_seq'] as $context["key"] => $context["export"]) {
            // line 224
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["export"]) ? $context["export"] : null), "title")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['export'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "        </select>
        <input type=\"submit\" value=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Export"), "html", null, true);
        echo "\"/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 229
        echo "</div>
";
    }

    // line 236
    public function block_grid_actions($context, array $blocks = array())
    {
        // line 237
        echo "<div class=\"mass-actions\">
    <span class=\"grid_massactions_helper\">
        <a href=\"#\" onclick=\"return ";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_markVisible(true);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select visible"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_markVisible(false);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deselect visible"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_markAll(true);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select all"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_markAll(false);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deselect all"), "html", null, true);
        echo "</a>
        <span class=\"mass-actions-selected\" id=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_mass_action_selected\"></span>
    </span>
    ";
        // line 245
        ob_start();
        // line 246
        echo "    <div style=\"float:right;\" class=\"grid_massactions\">
        ";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action"), "html", null, true);
        echo "
        <input type=\"hidden\" id=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_mass_action_all\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION_ALL_KEYS_SELECTED"), "html", null, true);
        echo "]\" value=\"0\"/>
        <select  name=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION"), "html", null, true);
        echo "]\">
            <option value=\"-1\"></option>
            ";
        // line 251
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "massActions"));
        foreach ($context['_seq'] as $context["key"] => $context["massAction"]) {
            // line 252
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["massAction"]) ? $context["massAction"] : null), "title")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['massAction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "        </select>
        <input type=\"submit\"  value=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Submit Action"), "html", null, true);
        echo "\"/>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 258
        echo "</div>
";
    }

    // line 262
    public function block_grid_tweaks($context, array $blocks = array())
    {
        // line 263
        echo "<div class=\"tweaks\" style=\"float:right\">
    ";
        // line 264
        ob_start();
        // line 265
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tweaks"), "html", null, true);
        echo "
            <select name=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_TWEAK"), "html", null, true);
        echo "]\">
            <option value=\"\"></option>
            ";
        // line 268
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "tweaks"));
        foreach ($context['_seq'] as $context["key"] => $context["tweak"]) {
            // line 269
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["tweak"]) ? $context["tweak"] : null), "title")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tweak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "        </select>
        <input type=\"submit\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tweak"), "html", null, true);
        echo "\"/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 274
        echo "</div>
";
    }

    // line 277
    public function block_grid_column_actions_cell($context, array $blocks = array())
    {
        // line 278
        echo "    ";
        $context["actions"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "getActionsToRender", array(0 => (isset($context["row"]) ? $context["row"] : null)), "method");
        // line 279
        echo "    <div class=\"grid-row-actions\">
    ";
        // line 280
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 281
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "route"), $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "routeParameters", array(0 => (isset($context["row"]) ? $context["row"] : null), 1 => (isset($context["action"]) ? $context["action"] : null)), "method"), false), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "target"), "html", null, true);
            echo "\"";
            if ($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "confirm")) {
                echo " onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "confirmMessage"), "html", null, true);
                echo "')\"";
            }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "attributes"));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "title");
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "    </div>
";
    }

    // line 286
    public function block_grid_column_massaction_cell($context, array $blocks = array())
    {
        // line 287
        echo "    <input type=\"checkbox\" class=\"action\" value=\"1\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "primaryFieldValue"), "html", null, true);
        echo "]\"/>
";
    }

    // line 290
    public function block_grid_column_boolean_cell($context, array $blocks = array())
    {
        // line 291
        echo "    <span class=\"grid_boolean_";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">";
        $this->displayBlock("grid_column_cell", $context, $blocks);
        echo "</span>
";
    }

    // line 293
    public function block_grid_column_type_boolean_cell($context, array $blocks = array())
    {
        // line 294
        echo "\t";
        $this->displayBlock("grid_column_boolean_cell", $context, $blocks);
        echo "
";
    }

    // line 297
    public function block_grid_column_rank_cell($context, array $blocks = array())
    {
        // line 298
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "page") * $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "limit")) + (isset($context["value"]) ? $context["value"] : null)), "html", null, true);
        echo "
";
    }

    // line 300
    public function block_grid_column_type_rank_cell($context, array $blocks = array())
    {
        // line 301
        echo "\t";
        $this->displayBlock("grid_column_rank_cell", $context, $blocks);
        echo "
";
    }

    // line 304
    public function block_grid_column_array_cell($context, array $blocks = array())
    {
        // line 305
        $context["sourceValues"] = $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "field", array(0 => $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id")), "method");
        // line 306
        $context["values"] = (isset($context["value"]) ? $context["value"] : null);
        // line 307
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["index"]) {
            // line 308
            $context["value"] = (isset($context["index"]) ? $context["index"] : null);
            // line 309
            echo "    ";
            $context["sourceValue"] = $this->getAttribute((isset($context["sourceValues"]) ? $context["sourceValues"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array");
            // line 310
            echo "    ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "separator");
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 313
    public function block_grid_column_type_array_cell($context, array $blocks = array())
    {
        // line 314
        echo "\t";
        $this->displayBlock("grid_column_array_cell", $context, $blocks);
        echo "
";
    }

    // line 317
    public function block_grid_column_join_cell($context, array $blocks = array())
    {
        // line 318
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "joinColumns"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["index"]) {
            // line 319
            $context["value"] = $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "field", array(0 => (isset($context["index"]) ? $context["index"] : null)), "method");
            // line 320
            echo "    ";
            $context["sourceValue"] = (isset($context["value"]) ? $context["value"] : null);
            // line 321
            echo "    ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "separator");
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 324
    public function block_grid_column_type_join_cell($context, array $blocks = array())
    {
        // line 325
        echo "\t";
        $this->displayBlock("grid_column_join_cell", $context, $blocks);
        echo "
";
    }

    // line 328
    public function block_grid_column_cell($context, array $blocks = array())
    {
        // line 329
        ob_start();
        // line 330
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "filterable") && $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "searchOnClick"))) {
            // line 331
            echo "    ";
            $context["sourceValue"] = ((array_key_exists("sourceValue", $context)) ? ((isset($context["sourceValue"]) ? $context["sourceValue"] : null)) : ($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "field", array(0 => $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id")), "method")));
            // line 332
            echo "    <a href=\"?";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "][from]=";
            echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["sourceValue"]) ? $context["sourceValue"] : null)), "html", null, true);
            echo "\" class=\"searchOnClick\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</a>
";
        } elseif (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "safe") === false)) {
            // line 334
            echo "    ";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "
";
        } else {
            // line 336
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "safe"));
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 341
    public function block_grid_column_operator($context, array $blocks = array())
    {
        // line 342
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "operatorsVisible")) {
            // line 343
            echo "<span class=\"grid-filter-operator\">
    <select style=\"width: 100%;\"  name=\"";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "][operator]\" onchange=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "_switchOperator(this, '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "__query__'";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : null) === false)) {
                echo ", false";
            }
            echo ");\">
    ";
            // line 345
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "operators"));
            foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
                // line 346
                echo "            ";
                if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id") == "usuario.username")) {
                    // line 347
                    echo "                ";
                    if (((isset($context["operator"]) ? $context["operator"] : null) == twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL"))) {
                        // line 348
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["operator"]) ? $context["operator"] : null), "html", null, true);
                        echo "\"";
                        if (((isset($context["op"]) ? $context["op"] : null) == (isset($context["operator"]) ? $context["operator"] : null))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">Todos";
                        echo "</option>
                ";
                    } elseif (((isset($context["operator"]) ? $context["operator"] : null) == twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL"))) {
                        // line 350
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["operator"]) ? $context["operator"] : null), "html", null, true);
                        echo "\"";
                        if (((isset($context["op"]) ? $context["op"] : null) == (isset($context["operator"]) ? $context["operator"] : null))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">No Asignadas";
                        echo "</option>
                ";
                    } else {
                        // line 352
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["operator"]) ? $context["operator"] : null), "html", null, true);
                        echo "\"";
                        if (((isset($context["op"]) ? $context["op"] : null) == (isset($context["operator"]) ? $context["operator"] : null))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["operator"]) ? $context["operator"] : null)), "html", null, true);
                        echo "</option>
                ";
                    }
                    // line 354
                    echo "            ";
                } else {
                    // line 355
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["operator"]) ? $context["operator"] : null), "html", null, true);
                    echo "\"";
                    if (((isset($context["op"]) ? $context["op"] : null) == (isset($context["operator"]) ? $context["operator"] : null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["operator"]) ? $context["operator"] : null)), "html", null, true);
                    echo "</option>
            ";
                }
                // line 357
                echo "        ";
                // line 358
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 359
            echo "    </select>
</span>
";
        }
    }

    // line 364
    public function block_grid_column_filter_type_input($context, array $blocks = array())
    {
        // line 365
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 366
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 367
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 368
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 369
        $context["op"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data"), "operator")) : ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "defaultOperator")));
        // line 370
        $context["from"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data"), "from")) : (null));
        // line 371
        $context["to"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data"), "to")) : (null));
        // line 372
        echo "<span class=\"grid-filter-input\">
    ";
        // line 373
        echo $this->env->getExtension('datagrid_twig_extension')->getGridColumnOperator((isset($context["column"]) ? $context["column"] : null), (isset($context["grid"]) ? $context["grid"] : null), (isset($context["op"]) ? $context["op"] : null), (isset($context["submitOnChange"]) ? $context["submitOnChange"] : null));
        echo "
    <span class=\"grid-filter-input-query\">
        <input style=\"width: 100%;\" class=\"form-control input-sm ";
        // line 375
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "type"), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "inputType"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["from"]) ? $context["from"] : null), "html", null, true);
        echo "\" class=\"grid-filter-input-query-from\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
        echo "][from]\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
        echo "__query__from\" ";
        if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : null) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo (((((isset($context["op"]) ? $context["op"] : null) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : null)) || ((isset($context["op"]) ? $context["op"] : null) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : null)))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
        echo " />
        <input ";
        // line 376
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id") == "fecha")) {
            echo "style=\"width: 100%;\"";
        }
        echo "class=\"form-control input-sm ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "type"), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "inputType"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["to"]) ? $context["to"] : null), "html", null, true);
        echo "\" class=\"grid-filter-input-query-to\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
        echo "][to]\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
        echo "__query__to\" ";
        if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : null) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo (((((isset($context["op"]) ? $context["op"] : null) == (isset($context["btwOperator"]) ? $context["btwOperator"] : null)) || ((isset($context["op"]) ? $context["op"] : null) == (isset($context["btweOperator"]) ? $context["btweOperator"] : null)))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
        echo " />
    </span>
</span>
";
    }

    // line 381
    public function block_grid_column_filter_type_select($context, array $blocks = array())
    {
        // line 382
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 383
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 384
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 385
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 386
        $context["op"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data"), "operator")) : ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "defaultOperator")));
        // line 387
        $context["from"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data"), "from")) : (null));
        // line 388
        $context["to"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data"), "to")) : (null));
        // line 389
        $context["multiple"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "selectMulti");
        // line 390
        $context["expanded"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "selectExpanded");
        // line 391
        echo "<span class=\"grid-filter-select\">
    ";
        // line 392
        echo $this->env->getExtension('datagrid_twig_extension')->getGridColumnOperator((isset($context["column"]) ? $context["column"] : null), (isset($context["grid"]) ? $context["grid"] : null), (isset($context["op"]) ? $context["op"] : null), (isset($context["submitOnChange"]) ? $context["submitOnChange"] : null));
        echo "
    <span class=\"grid-filter-select-query\">
    ";
        // line 394
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 395
            echo "        <span class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "__query__from\" ";
            echo (((((isset($context["op"]) ? $context["op"] : null) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : null)) || ((isset($context["op"]) ? $context["op"] : null) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : null)))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
        ";
            // line 396
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "values"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 397
                echo "            <span><input type=\"";
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
                echo "][from][]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" ";
                if (twig_in_filter((isset($context["key"]) ? $context["key"] : null), (isset($context["from"]) ? $context["from"] : null))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : null) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
                    echo "_submitForm(event, this.form);\"";
                }
                echo "/><label>";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</label></span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 399
            echo "        </span>
        <span class=\"grid-filter-select-query-to\" id=\"";
            // line 400
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "__query__to\" ";
            echo (((((isset($context["op"]) ? $context["op"] : null) == (isset($context["btwOperator"]) ? $context["btwOperator"] : null)) || ((isset($context["op"]) ? $context["op"] : null) == (isset($context["btweOperator"]) ? $context["btweOperator"] : null)))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
        ";
            // line 401
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "values"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 402
                echo "            <span><input type=\"";
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
                echo "][to]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" ";
                if (((!(null === (isset($context["to"]) ? $context["to"] : null))) && ((isset($context["to"]) ? $context["to"] : null) == (isset($context["key"]) ? $context["key"] : null)))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : null) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
                    echo "_submitForm(event, this.form);\"";
                }
                echo "/><label>";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</label></span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "        </span>
        ";
            // line 405
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo "<input type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 406
            echo "    ";
        } else {
            // line 407
            echo "        <select style=\"width: 100%;\" ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo "  multiple=\"multiple\"";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "][from][]\" class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "__query__from\" ";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : null) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo (((((isset($context["op"]) ? $context["op"] : null) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : null)) || ((isset($context["op"]) ? $context["op"] : null) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : null)))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
            ";
            // line 408
            if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id") == "usuario.username")) {
                // line 409
                echo "                <option value=\"\">&nbsp;</option>
            ";
            }
            // line 411
            echo "            
            ";
            // line 412
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "values"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 413
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"";
                if (twig_in_filter((isset($context["key"]) ? $context["key"] : null), (isset($context["from"]) ? $context["from"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 415
            echo "        </select>
        <select  name=\"";
            // line 416
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "][to]\" class=\"grid-filter-select-query-to\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id"), "html", null, true);
            echo "__query__to\" ";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : null) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo (((((isset($context["op"]) ? $context["op"] : null) == (isset($context["btwOperator"]) ? $context["btwOperator"] : null)) || ((isset($context["op"]) ? $context["op"] : null) == (isset($context["btweOperator"]) ? $context["btweOperator"] : null)))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
            ";
            // line 417
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "values"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 418
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"";
                if (((!(null === (isset($context["to"]) ? $context["to"] : null))) && ((isset($context["to"]) ? $context["to"] : null) == (isset($context["key"]) ? $context["key"] : null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            echo "        </select>
        ";
            // line 421
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo "<input class=\"form-control input-sm\" type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 422
            echo "    ";
        }
        // line 423
        echo "    </span>
</span>
";
    }

    // line 427
    public function block_grid_column_filter_type_massaction($context, array $blocks = array())
    {
        // line 428
        echo "    <input type=\"button\" class=\"grid-search-reset\" value=\"R\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
        echo "\" onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_reset();\"/>
";
    }

    // line 431
    public function block_grid_column_filter_type_actions($context, array $blocks = array())
    {
        // line 432
        echo "    <a class=\"btn btn-xs bg-green pull-left\" href=\"#\" onclick=\" \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "').submit();\"><i class=\"fa fa-search\"></i></a>
    <a class=\"btn btn-xs bg-red grid-reset pull-right\" href=\"";
        // line 433
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("reset", (isset($context["grid"]) ? $context["grid"] : null));
        echo "\"><i class=\"fa fa-trash-o\"></i></a>
";
    }

    // line 439
    public function block_grid_scripts($context, array $blocks = array())
    {
        // line 440
        echo "<script type=\"text/javascript\">
";
        // line 441
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_goto", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 442
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_reset", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 443
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_previous_page", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 444
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_next_page", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 445
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_enter_page", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 446
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_results_per_page", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 447
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_mark_visible", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 448
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_mark_all", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 449
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_switch_operator", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 450
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_submit_form", (isset($context["grid"]) ? $context["grid"] : null));
        echo "
";
        // line 451
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_ajax", (isset($context["grid"]) ? $context["grid"] : null));
        echo "

</script>
";
    }

    // line 456
    public function block_grid_scripts_goto($context, array $blocks = array())
    {
        // line 457
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_goto(url)
{
    window.location.href = url;

    return false;
}
";
    }

    // line 465
    public function block_grid_scripts_reset($context, array $blocks = array())
    {
        // line 466
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_reset()
{
    ";
        // line 468
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("reset", (isset($context["grid"]) ? $context["grid"] : null));
        echo "');

    return false;
}
";
    }

    // line 474
    public function block_grid_scripts_previous_page($context, array $blocks = array())
    {
        // line 475
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_previousPage()
{
    ";
        // line 477
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : null), ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "page") - 1));
        echo "');

    return false;
}
";
    }

    // line 483
    public function block_grid_scripts_next_page($context, array $blocks = array())
    {
        // line 484
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_nextPage()
{
    ";
        // line 486
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : null), ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "page") + 1));
        echo "');

    return false;
}
";
    }

    // line 492
    public function block_grid_scripts_enter_page($context, array $blocks = array())
    {
        // line 493
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_enterPage(event, page)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (key == 13) {
        ";
        // line 502
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : null));
        echo "' + page);

        return false;
    }
}
";
    }

    // line 509
    public function block_grid_scripts_results_per_page($context, array $blocks = array())
    {
        // line 510
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_resultsPerPage(limit)
{
    ";
        // line 512
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("limit", (isset($context["grid"]) ? $context["grid"] : null));
        echo "' + limit);

    return true;
}
";
    }

    // line 518
    public function block_grid_scripts_mark_visible($context, array $blocks = array())
    {
        // line 519
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_markVisible(select)
{
    var form = document.getElementById('";
        // line 521
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "');

    var counter = 0;

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;

            if (form.elements[i].checked){
               counter++;
            }
        }
    }

    ";
        // line 535
        if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "isFilterSectionVisible")) {
            // line 536
            echo "    counter--;
    ";
        }
        // line 538
        echo "
    var selected = document.getElementById('";
        // line 539
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_mass_action_selected');
    selected.innerHTML = counter > 0 ? '";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Selected _s_ rows"), "html", null, true);
        echo "'.replace('_s_', counter) : '';

    document.getElementById('";
        // line 542
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_mass_action_all').value = '0';

    return false;
}
";
    }

    // line 548
    public function block_grid_scripts_mark_all($context, array $blocks = array())
    {
        // line 549
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_markAll(select)
{
    var form = document.getElementById('";
        // line 551
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "');

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;
        }
    }

    var selected = document.getElementById('";
        // line 559
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_mass_action_selected');

    if (select) {
        document.getElementById('";
        // line 562
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_mass_action_all').value = '1';
        selected.innerHTML = '";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Selected _s_ rows"), "html", null, true);
        echo "'.replace('_s_', '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "totalCount"), "html", null, true);
        echo "');
    } else {
        document.getElementById('";
        // line 565
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_mass_action_all').value = '0';
        selected.innerHTML = '';
    }

    return false;
}
";
    }

    // line 573
    public function block_grid_scripts_switch_operator($context, array $blocks = array())
    {
        // line 574
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 575
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 576
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 577
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 578
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_switchOperator(elt, query_, submitOnChange)
{
\tsubmitOnChange = (typeof submitOnChange == 'undefined') ? true : submitOnChange;
    var inputFrom = document.getElementById(query_+'from');
    var inputTo = document.getElementById(query_+'to');
    if ((elt.options[elt.selectedIndex].value == '";
        // line 583
        echo twig_escape_filter($this->env, (isset($context["btwOperator"]) ? $context["btwOperator"] : null), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, (isset($context["btweOperator"]) ? $context["btweOperator"] : null), "html", null, true);
        echo "')) {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = '';
        inputTo.disabled=false;
    } else if ((elt.options[elt.selectedIndex].value == '";
        // line 588
        echo twig_escape_filter($this->env, (isset($context["isNullOperator"]) ? $context["isNullOperator"] : null), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : null), "html", null, true);
        echo "')) {
        inputFrom.style.display = 'none';
        inputFrom.disabled=true;
        inputTo.style.display = 'none';
        inputTo.disabled=true;
        if (submitOnChange) {
            elt.form.submit();
        }
    } else {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = 'none';
        inputTo.disabled=true;
    }
}
";
    }

    // line 605
    public function block_grid_scripts_submit_form($context, array $blocks = array())
    {
        // line 606
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "_submitForm(event, form)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (event.type != 'keypress' || key == 13) {
        form.submit();
    }

    return true;
}
";
    }

    // line 622
    public function block_grid_scripts_ajax($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2180 => 622,  2160 => 606,  2157 => 605,  2135 => 588,  2125 => 583,  2116 => 578,  2114 => 577,  2112 => 576,  2110 => 575,  2108 => 574,  2105 => 573,  2094 => 565,  2087 => 563,  2083 => 562,  2077 => 559,  2066 => 551,  2060 => 549,  2057 => 548,  2048 => 542,  2043 => 540,  2039 => 539,  2036 => 538,  2032 => 536,  2030 => 535,  2013 => 521,  2007 => 519,  2004 => 518,  1993 => 512,  1987 => 510,  1984 => 509,  1972 => 502,  1959 => 493,  1956 => 492,  1945 => 486,  1939 => 484,  1936 => 483,  1925 => 477,  1919 => 475,  1916 => 474,  1905 => 468,  1899 => 466,  1896 => 465,  1884 => 457,  1881 => 456,  1873 => 451,  1869 => 450,  1865 => 449,  1861 => 448,  1857 => 447,  1853 => 446,  1849 => 445,  1845 => 444,  1841 => 443,  1837 => 442,  1833 => 441,  1830 => 440,  1827 => 439,  1821 => 433,  1816 => 432,  1813 => 431,  1804 => 428,  1801 => 427,  1795 => 423,  1792 => 422,  1786 => 421,  1783 => 420,  1768 => 418,  1764 => 417,  1746 => 416,  1743 => 415,  1728 => 413,  1724 => 412,  1721 => 411,  1717 => 409,  1715 => 408,  1692 => 407,  1689 => 406,  1683 => 405,  1680 => 404,  1649 => 402,  1645 => 401,  1637 => 400,  1634 => 399,  1603 => 397,  1599 => 396,  1590 => 395,  1588 => 394,  1583 => 392,  1580 => 391,  1578 => 390,  1576 => 389,  1574 => 388,  1572 => 387,  1570 => 386,  1568 => 385,  1566 => 384,  1564 => 383,  1562 => 382,  1559 => 381,  1527 => 376,  1503 => 375,  1498 => 373,  1495 => 372,  1493 => 371,  1491 => 370,  1489 => 369,  1487 => 368,  1485 => 367,  1483 => 366,  1481 => 365,  1478 => 364,  1471 => 359,  1465 => 358,  1463 => 357,  1451 => 355,  1448 => 354,  1436 => 352,  1425 => 350,  1414 => 348,  1411 => 347,  1408 => 346,  1404 => 345,  1388 => 344,  1385 => 343,  1383 => 342,  1380 => 341,  1371 => 336,  1365 => 334,  1353 => 332,  1350 => 331,  1348 => 330,  1346 => 329,  1343 => 328,  1336 => 325,  1333 => 324,  1315 => 321,  1312 => 320,  1310 => 319,  1293 => 318,  1290 => 317,  1283 => 314,  1280 => 313,  1262 => 310,  1259 => 309,  1257 => 308,  1240 => 307,  1238 => 306,  1236 => 305,  1233 => 304,  1226 => 301,  1223 => 300,  1217 => 298,  1214 => 297,  1207 => 294,  1204 => 293,  1193 => 291,  1190 => 290,  1179 => 287,  1176 => 286,  1171 => 283,  1140 => 281,  1136 => 280,  1133 => 279,  1130 => 278,  1127 => 277,  1122 => 274,  1117 => 272,  1114 => 271,  1103 => 269,  1099 => 268,  1092 => 266,  1087 => 265,  1085 => 264,  1082 => 263,  1079 => 262,  1074 => 258,  1068 => 255,  1065 => 254,  1054 => 252,  1050 => 251,  1043 => 249,  1035 => 248,  1031 => 247,  1028 => 246,  1026 => 245,  1021 => 243,  1015 => 242,  1009 => 241,  1003 => 240,  997 => 239,  993 => 237,  990 => 236,  985 => 229,  980 => 227,  977 => 226,  966 => 224,  962 => 223,  955 => 221,  950 => 220,  948 => 219,  945 => 218,  942 => 217,  935 => 212,  920 => 210,  916 => 209,  912 => 208,  907 => 207,  904 => 206,  897 => 194,  894 => 193,  890 => 203,  878 => 200,  872 => 199,  864 => 198,  860 => 197,  857 => 196,  854 => 193,  850 => 190,  848 => 189,  845 => 188,  842 => 187,  834 => 181,  829 => 180,  826 => 178,  820 => 176,  817 => 175,  814 => 174,  803 => 170,  789 => 168,  784 => 166,  769 => 165,  766 => 164,  752 => 163,  730 => 161,  727 => 160,  709 => 159,  706 => 158,  703 => 157,  700 => 156,  681 => 155,  678 => 154,  670 => 148,  666 => 146,  652 => 145,  648 => 143,  644 => 139,  640 => 138,  635 => 137,  632 => 136,  629 => 135,  626 => 134,  623 => 133,  620 => 132,  617 => 131,  599 => 130,  597 => 129,  588 => 125,  578 => 120,  575 => 119,  572 => 118,  567 => 115,  553 => 114,  549 => 112,  543 => 110,  541 => 109,  538 => 108,  533 => 107,  529 => 106,  525 => 104,  518 => 102,  512 => 100,  510 => 99,  507 => 98,  504 => 97,  487 => 96,  484 => 95,  481 => 94,  476 => 91,  462 => 90,  458 => 88,  455 => 87,  452 => 86,  446 => 84,  443 => 83,  439 => 81,  435 => 79,  433 => 78,  422 => 77,  419 => 76,  417 => 75,  414 => 74,  411 => 67,  405 => 66,  402 => 65,  400 => 64,  380 => 63,  377 => 62,  360 => 61,  357 => 60,  354 => 59,  344 => 54,  341 => 53,  334 => 51,  331 => 50,  328 => 49,  324 => 48,  322 => 47,  320 => 46,  317 => 45,  309 => 43,  304 => 40,  298 => 38,  294 => 36,  288 => 34,  286 => 33,  283 => 32,  277 => 30,  274 => 29,  268 => 27,  265 => 26,  259 => 24,  249 => 19,  240 => 16,  227 => 10,  221 => 8,  219 => 7,  211 => 5,  203 => 2,  196 => 621,  194 => 605,  191 => 604,  189 => 573,  186 => 572,  184 => 548,  181 => 547,  179 => 518,  174 => 509,  171 => 508,  169 => 492,  164 => 483,  161 => 482,  159 => 474,  156 => 473,  154 => 465,  151 => 464,  149 => 456,  144 => 439,  139 => 435,  137 => 431,  135 => 427,  133 => 381,  131 => 364,  129 => 341,  127 => 328,  125 => 324,  123 => 317,  121 => 313,  119 => 304,  115 => 297,  111 => 290,  109 => 286,  107 => 277,  105 => 262,  102 => 260,  100 => 236,  92 => 217,  88 => 214,  85 => 206,  82 => 204,  80 => 187,  77 => 185,  73 => 154,  71 => 118,  69 => 94,  67 => 59,  65 => 45,  63 => 43,  166 => 491,  162 => 88,  150 => 79,  146 => 455,  142 => 77,  138 => 76,  126 => 67,  117 => 300,  113 => 293,  98 => 48,  94 => 231,  79 => 35,  75 => 174,  61 => 2,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  31 => 8,  22 => 2,  19 => 1,  307 => 203,  291 => 190,  287 => 189,  281 => 187,  278 => 186,  269 => 180,  261 => 175,  257 => 23,  251 => 170,  248 => 169,  243 => 17,  238 => 163,  234 => 14,  232 => 13,  228 => 159,  225 => 158,  217 => 152,  214 => 151,  209 => 4,  206 => 3,  204 => 146,  199 => 622,  197 => 144,  192 => 143,  190 => 142,  185 => 141,  182 => 140,  180 => 139,  176 => 517,  173 => 136,  41 => 6,  36 => 5,  33 => 4,);
    }
}
