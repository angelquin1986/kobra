<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_27b83999d6c01e68dc695c3da6bbdf3af14102b03cce5158e6beda4264363d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("baselogin.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baselogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
            

";
        // line 24
        echo "    <div class=\"form-box \" id=\"login-box\">
            <div class=\"header bg-blue-gradient\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>
            <form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                
                <div class=\"body bg-gray\">
                    ";
        // line 29
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 30
            echo "                        <div style=\"margin-top: 2%\" class=\"alert alert-info alert-dismissable\">
                            <i class=\"fa fa-info\"></i> <b>Informaci&oacute;n!</b> 
                            <button class=\"close\" aria-hidden=\"true\" data-dismiss=\"alert\" type=\"button\">×</button>
                            <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData"), "security"), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        // line 36
        echo "                    
                    
                    ";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method")) {
            // line 39
            echo "            <div style=\"margin-top: 2%\" class=\"alert alert-info alert-dismissable\">
                    <i class=\"fa fa-info\"></i>
                    
                    <b>Informaci&oacute;n!</b> 
                    <p>
                            ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 45
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 46
                    echo "
                                        ";
                    // line 47
                    echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                    echo "

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            <hr>
                        
                    </p>
                    ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 55
                echo "                            <div class=\"alert alert-success alert-dismissable\" style=\"width: 95%; margin-left: 2%;\">
                                        <i class=\"fa fa-check\"></i>
                                        <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                                        <b>Informaci&oacute;n!</b> ";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
                echo "
                         </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            </div>
            ";
        }
        // line 63
        echo "                    
                    
                    <div class=\"form-group\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                    </div>          
                    <div class=\"form-group\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"footer\">                                                               
                    <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn bg-blue-gradient btn-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>  
                   
                    <p><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.forgot_my_password", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></p>
                   ";
        // line 85
        echo "                    
                    
                    <div class=\"slider slider-horizontal\" id=\"blue\" >
                        </div>
                </div>
            </form>

            <div class=\"margin text-center\">
                <span>Sign in using social networks</span>
                <br/>
                <button class=\"btn bg-light-blue btn-circle\"><i class=\"fa fa-facebook\"></i></button>
                <button class=\"btn bg-aqua btn-circle\"><i class=\"fa fa-twitter\"></i></button>
                <button class=\"btn bg-red btn-circle\"><i class=\"fa fa-google-plus\"></i></button>

            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 85,  166 => 79,  159 => 77,  152 => 73,  146 => 70,  138 => 67,  134 => 66,  129 => 63,  125 => 61,  116 => 58,  111 => 55,  107 => 54,  102 => 51,  96 => 50,  87 => 47,  84 => 46,  79 => 45,  75 => 44,  68 => 39,  66 => 38,  62 => 36,  56 => 33,  51 => 30,  49 => 29,  43 => 26,  39 => 25,  36 => 24,  31 => 7,  28 => 6,);
    }
}
