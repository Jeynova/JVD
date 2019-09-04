<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/index.html.twig */
class __TwigTemplate_2562ee4d8ae9d43644aac69d1f29dc79d79418435b80600577817310ad773197 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Actu index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Yo !</h1>
    <p><a id=\"chart\" class=\"grey-text text-darken-4\" style=\"cursor: pointer\">Request Charts<i id=\"chart_drop-it-down\" class=\"material-icons right\">keyboard_arrow_right</i></a></p>
    <hr>
    <p><a id=\"request\" class=\"grey-text text-darken-4\" style=\"cursor: pointer\">Request Dashboard<i id=\"request_drop-it-down\" class=\"material-icons right\">keyboard_arrow_right</i></a></p>
    
    <form method=\"POST\" id=\"admin_form\" class=\"hidden\">

        <div class=\"row\">
            <div class=\"input-field col s6\">
                <select id=\"table\" class=\"browser-default\">
                    <option disabled selected value=\"\">-- Choose your Table --</option>
                    <option value=\"\\App\\Entity\\AccountFollow\">AccountFollow</option>
                    <option value=\"\\App\\Entity\\Album\">Album</option>
                    <option value=\"\\App\\Entity\\Comment\">Comment</option>
                    <option value=\"\\App\\Entity\\Jaime\">Like</option>
                    <option value=\"\\App\\Entity\\Picture\">Picture</option>
                    <option value=\"\\App\\Entity\\Tag\">Tag</option>
                    <option value=\"\\App\\Entity\\User\">User</option>


                </select>
            </div>
            <div class=\"input-field col s6 hidden\" id=\"hidden-select\">
                <select id=\"joinTable\" class=\"browser-default\">
        
                </select>
            </div>
        </div>
        
        <div id=\"eRow\" class=\"row\">
            <div class=\"input-field col s6\" id=\"eData\"></div>
            <div class=\"input-field col s6\" id=\"joinEData\"></div>
        </div>
        
        <div class=\"row\">
            
            <div class=\"input-field col s6 hidden\" id=\"hidden-group\">
                <select id='groupBy' class='browser-default'></select>
            </div>
        </div>
        
        </form>


        <button id=\"submit-dql\" class=\"btn hidden\">Search</button>
        
        <form method=\"POST\" id=\"search_form\">
            <div class=\"row\">
                <div class=\"input-field col s6 hidden\" id=\"hidden-order\">
                    <select id=\"orderBy\" class=\"browser-default\"></select>
                </div>
                <div class=\"input-field hidden row\" id=\"hidden-ad\">
                    <div class=\"inline col s3\">
                        <label>
                          <input name=\"ad\" type=\"radio\" value=\"asc\" />
                          <span>ASC</span>
                        </label>
                    </div>
                      <div class=\"inline col s3\">

                        <label>
                          <input name=\"ad\" type=\"radio\" value=\"desc\"/>
                          <span>DESC</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                    <div class=\"input-field col s6 hidden\" id=\"hidden-where\">
                        <select id=\"where\" class=\"browser-default\"></select>
                    </div>
                    <div class=\"input-field col s6 hidden\" id=\"hidden-param\">
                              <input id=\"param\" name=\"param\" type=\"text\"/>
                              <label for=\"param\">Parameter</label>
                    </div>                    
                </div>
        </form>

        <div id=\"search-container\"></div>



    ";
        // line 96
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "            <script>
            
            // ** DROP IT DOWN **//
            \$('#request').click(function() {
                \$('#request_drop-it-down').toggleClass('rotation')
                \$('#admin_form').toggleClass('hidden')
            })

            \$('#chart').click(function() {
                \$('#chart_drop-it-down').toggleClass('rotation')
                
            })
        
            /***** FUNCTION ONSELECT *****/
            \$('#table').change(function () {
                    var entity = \$('#table option:selected').val();
                    
                    var data = {
                    name: \"value\",
                    value: entity
                    };
        
                    \$.post(\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajax");
        echo "\", data, function (string) {

                        \$('#eData').html(\" \")
                        
                        for (let index = 0; index < string[0].length; index++) {
                            const element = string[0][index];
                            if (element == \"id\") {
                                \$('#eData').append('<p><label><input disabled checked class=\"checkData\" type=\"checkbox\" value=\"a.'+element+'\"/><span>'+element+'</span></label></p>')
                            } else {
                                \$('#eData').append('<p><label><input class=\"checkData\" type=\"checkbox\" value=\"a.'+element+'\"/><span>'+element+'</span></label></p>')
                            }
                        }
                        if (string[1].length != 0) {
                            \$('#hidden-select').removeClass(\"hidden\")
                            \$('#joinTable').html(\" \")
                            \$('#joinTable').append(\"<option disabled selected value=''>-- Choose your Join Table --</option>\")
                            
                            for (let index = 0; index < string[1].length; index++) {
                                const mappedElement = string[1][index];
                                console.log(mappedElement)
                                \$('#joinTable').append('<option value=\"'+mappedElement.name+'\">'+mappedElement.name+'</option>');
                            } 
                            } else {
                                \$('#hidden-select').addClass(\"hidden\")
                                \$('#joinTable').html(\" \")
                                \$('#joinEData').html(\" \")
        
                        }

                        \$('#groupBy').html(\" \")
                        \$('#hidden-group').removeClass(\"hidden\")

                        \$('#groupBy').append(\"<option disabled selected value=''>-- Group By --</option><option value='a.id'>\"+\$('#table option:selected').html()+\"</option>\") 
                        
                        \$('#submit-dql').removeClass('hidden')
        
                    })
            })
            
        
            \$('#joinTable').change(function () {
                    var joinEntity = \$('#joinTable option:selected').val();


                var disabled = []
                \$.each(\$('.checkData:disabled'), function() {
                    disabled.push(\$(this).val())
                })
                    var joinData = {
                    name: \"value\",
                    value: joinEntity
                    };
                    \$.post(\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajax_join");
        echo "\", joinData, function (joinString) {
                        console.log(disabled)
                        console.log(joinString)
                        \$('#joinEData').html(\" \");
                        for (let i = 0; i < joinString[0].length; i++) {
                            const joinElement = joinString[0][i];
                            console.log(joinElement)
                            if (joinElement == 'id') {
                                \$('#joinEData').append('<p><label><input disabled checked class=\"checkData\" type=\"checkbox\" value=\"b.'+joinElement+'\"/><span>'+joinElement+'</span></label></p>')
                            } else {
                              \$('#joinEData').append('<p><label><input class=\"checkData\" type=\"checkbox\" value=\"b.'+joinElement+'\"/><span>'+joinElement+'</span></label></p>')  
                            }
                            
                        }

                        \$('#hidden-group').removeClass(\"hidden\")
                        \$('#groupBy').html(\"\")
                        \$('#groupBy').append(\"<option disabled selected value=''>-- Group By --</option><option value='a.id'>\"+\$('#table option:selected').html()+\"</option><option value='b.id'>\"+\$('#joinTable option:selected').html()+\"</option>\")                

                        
                    })
            })
        
            \$('#submit-dql').click(function() {
                var cb = [];
                var entity = \$('#table option:selected').val()
                var joinEntity = \$('#joinTable option:selected').val()
                var groupby = \$('#groupBy option:selected').val()
                cb.push(entity)
                cb.push(joinEntity)
                cb.push(groupby)
                \$.each(\$('.checkData:checked'), function() {
                cb.push(\$(this).val()); 
                });
                
                console.log(cb)
                var checkData = {
                    name: \"value\",
                    value: cb
                };

                \$.post(\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajax_data");
        echo "\", checkData, function(dataString) {
                    \$('#search-container').html(\" \")
                    for (let index = 0; index < dataString.length; index++) {
                        const dataElement = dataString[index];
                        \$('#search-container').append(\"<table class='table' id='tableN\"+index+\"'><tbody>\")
                        \$.each(dataElement, function(k, v){
                            \$('#tableN'+index).append(\"<tr><th>\"+k+\"</th><td>\"+v+\"</td></tr>\")
                        })
                        \$('#search-container').append(\"</tbody></table><hr>\")
                        }

                        \$('#hidden-order').removeClass('hidden')
                        \$('#orderBy').html(\"<option value='' disabled selected>-- ORDER BY --</option>\")
                        for (let i = 3; i < cb.length; i++) {
                            const ordered = cb[i];
                            \$('#orderBy').append(\"<option value='\"+ordered+\"'>\"+ordered+\"</option>\") 
                        }

                        \$('#hidden-where').removeClass('hidden')
                        \$('#where').html(\"<option value='' disabled selected>-- WHERE --</option>\")
                        for (let i = 3; i < cb.length; i++) {
                            const where = cb[i];
                            \$('#where').append(\"<option value='\"+where+\"'>\"+where+\"</option>\") 
                        }
                            
                        
                        
                    })
                    
                })

        \$('#orderBy').on('change', function (){
            \$('#hidden-ad').removeClass('hidden')
            })
            
            \$('input[name=\"ad\"]').click(function() {
                var order = \$('#orderBy option:selected').val()
                var ad = \$(this).val()
                console.log(ad)
                var cb = [];
                var entity = \$('#table option:selected').val()
                var joinEntity = \$('#joinTable option:selected').val()
                var groupby = \$('#groupBy option:selected').val()
                cb.push(entity)
                cb.push(joinEntity)
                cb.push(groupby)
                cb.push(order)
                cb.push(ad)
                \$.each(\$('.checkData:checked'), function() {
                cb.push(\$(this).val()); 
                });
            var orderData = {
                name : \"value\",
                value: cb
            }
            console.log(cb)
            \$.post(\"";
        // line 271
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajax_order");
        echo "\", orderData, function (orderString) {
                \$('#search-container').html(\" \")
                    for (let index = 0; index < orderString.length; index++) {
                        const orderElement = orderString[index];
                        \$('#search-container').append(\"<table class='table' id='tableN\"+index+\"'><tbody>\")
                        \$.each(orderElement, function(k, v){
                            \$('#tableN'+index).append(\"<tr><th>\"+k+\"</th><td>\"+v+\"</td></tr>\")
                        })
                        \$('#search-container').append(\"</tbody></table><hr>\")
                        }


            })


        })

        \$('#where').change(function() {
            \$('#hidden-param').removeClass('hidden')
        })

        \$('#param').keyup(function() {
            var order = \$('#orderBy option:selected').val()
            var where = \$('#where option:selected').val()
            var param = \$(this).val()
                var ad = \$('input[name=\"ad\"]:checked').val()
                console.log(ad)
                var cb = [];
                var entity = \$('#table option:selected').val()
                var joinEntity = \$('#joinTable option:selected').val()
                var groupby = \$('#groupBy option:selected').val()
                cb.push(entity)
                cb.push(joinEntity)
                cb.push(where)
                cb.push(param)
                cb.push(groupby)
                cb.push(order)
                cb.push(ad)
                \$.each(\$('.checkData:checked'), function() {
                cb.push(\$(this).val()); 
                });
            var orderData = {
                name : \"value\",
                value: cb
            }
            if(\$('#param').val() != \"\") {
                \$.post(\"";
        // line 317
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajax_where");
        echo "\", orderData, function (orderString) {
                    \$('#search-container').html(\" \")
                        for (let index = 0; index < orderString.length; index++) {
                            const orderElement = orderString[index];
                            \$('#search-container').append(\"<table class='table' id='tableN\"+index+\"'><tbody>\")
                            \$.each(orderElement, function(k, v){
                            \$('#tableN'+index).append(\"<tr><th>\"+k+\"</th><td>\"+v+\"</td></tr>\")
                        })
                        \$('#search-container').append(\"</tbody></table><hr>\")
                    }
                })
            }
        })

        \$('#orderBy').click(function () {
            console.log(\"yo\")
        })
        
            /***** INIT SELECT MATERIALIZE *****/   
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
            });
        
            </script>
           
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 317,  376 => 271,  317 => 215,  273 => 174,  218 => 122,  194 => 100,  184 => 99,  173 => 96,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Actu index{% endblock %}

{% block body %}
    <h1>Yo !</h1>
    <p><a id=\"chart\" class=\"grey-text text-darken-4\" style=\"cursor: pointer\">Request Charts<i id=\"chart_drop-it-down\" class=\"material-icons right\">keyboard_arrow_right</i></a></p>
    <hr>
    <p><a id=\"request\" class=\"grey-text text-darken-4\" style=\"cursor: pointer\">Request Dashboard<i id=\"request_drop-it-down\" class=\"material-icons right\">keyboard_arrow_right</i></a></p>
    
    <form method=\"POST\" id=\"admin_form\" class=\"hidden\">

        <div class=\"row\">
            <div class=\"input-field col s6\">
                <select id=\"table\" class=\"browser-default\">
                    <option disabled selected value=\"\">-- Choose your Table --</option>
                    <option value=\"\\App\\Entity\\AccountFollow\">AccountFollow</option>
                    <option value=\"\\App\\Entity\\Album\">Album</option>
                    <option value=\"\\App\\Entity\\Comment\">Comment</option>
                    <option value=\"\\App\\Entity\\Jaime\">Like</option>
                    <option value=\"\\App\\Entity\\Picture\">Picture</option>
                    <option value=\"\\App\\Entity\\Tag\">Tag</option>
                    <option value=\"\\App\\Entity\\User\">User</option>


                </select>
            </div>
            <div class=\"input-field col s6 hidden\" id=\"hidden-select\">
                <select id=\"joinTable\" class=\"browser-default\">
        
                </select>
            </div>
        </div>
        
        <div id=\"eRow\" class=\"row\">
            <div class=\"input-field col s6\" id=\"eData\"></div>
            <div class=\"input-field col s6\" id=\"joinEData\"></div>
        </div>
        
        <div class=\"row\">
            
            <div class=\"input-field col s6 hidden\" id=\"hidden-group\">
                <select id='groupBy' class='browser-default'></select>
            </div>
        </div>
        
        </form>


        <button id=\"submit-dql\" class=\"btn hidden\">Search</button>
        
        <form method=\"POST\" id=\"search_form\">
            <div class=\"row\">
                <div class=\"input-field col s6 hidden\" id=\"hidden-order\">
                    <select id=\"orderBy\" class=\"browser-default\"></select>
                </div>
                <div class=\"input-field hidden row\" id=\"hidden-ad\">
                    <div class=\"inline col s3\">
                        <label>
                          <input name=\"ad\" type=\"radio\" value=\"asc\" />
                          <span>ASC</span>
                        </label>
                    </div>
                      <div class=\"inline col s3\">

                        <label>
                          <input name=\"ad\" type=\"radio\" value=\"desc\"/>
                          <span>DESC</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                    <div class=\"input-field col s6 hidden\" id=\"hidden-where\">
                        <select id=\"where\" class=\"browser-default\"></select>
                    </div>
                    <div class=\"input-field col s6 hidden\" id=\"hidden-param\">
                              <input id=\"param\" name=\"param\" type=\"text\"/>
                              <label for=\"param\">Parameter</label>
                    </div>                    
                </div>
        </form>

        <div id=\"search-container\"></div>



    {# {% for a in event_artist %}
        <h2>{{ dump(a) }}</h2>
    {% endfor %}

    {% for b in prod_artist %}
        <h2>{{ dump(b) }}</h2>
        <hr class=\"white-text\">
    {% endfor %} #}

{% endblock %}

{% block javascripts %}
            <script>
            
            // ** DROP IT DOWN **//
            \$('#request').click(function() {
                \$('#request_drop-it-down').toggleClass('rotation')
                \$('#admin_form').toggleClass('hidden')
            })

            \$('#chart').click(function() {
                \$('#chart_drop-it-down').toggleClass('rotation')
                
            })
        
            /***** FUNCTION ONSELECT *****/
            \$('#table').change(function () {
                    var entity = \$('#table option:selected').val();
                    
                    var data = {
                    name: \"value\",
                    value: entity
                    };
        
                    \$.post(\"{{ path('admin_ajax') }}\", data, function (string) {

                        \$('#eData').html(\" \")
                        
                        for (let index = 0; index < string[0].length; index++) {
                            const element = string[0][index];
                            if (element == \"id\") {
                                \$('#eData').append('<p><label><input disabled checked class=\"checkData\" type=\"checkbox\" value=\"a.'+element+'\"/><span>'+element+'</span></label></p>')
                            } else {
                                \$('#eData').append('<p><label><input class=\"checkData\" type=\"checkbox\" value=\"a.'+element+'\"/><span>'+element+'</span></label></p>')
                            }
                        }
                        if (string[1].length != 0) {
                            \$('#hidden-select').removeClass(\"hidden\")
                            \$('#joinTable').html(\" \")
                            \$('#joinTable').append(\"<option disabled selected value=''>-- Choose your Join Table --</option>\")
                            
                            for (let index = 0; index < string[1].length; index++) {
                                const mappedElement = string[1][index];
                                console.log(mappedElement)
                                \$('#joinTable').append('<option value=\"'+mappedElement.name+'\">'+mappedElement.name+'</option>');
                            } 
                            } else {
                                \$('#hidden-select').addClass(\"hidden\")
                                \$('#joinTable').html(\" \")
                                \$('#joinEData').html(\" \")
        
                        }

                        \$('#groupBy').html(\" \")
                        \$('#hidden-group').removeClass(\"hidden\")

                        \$('#groupBy').append(\"<option disabled selected value=''>-- Group By --</option><option value='a.id'>\"+\$('#table option:selected').html()+\"</option>\") 
                        
                        \$('#submit-dql').removeClass('hidden')
        
                    })
            })
            
        
            \$('#joinTable').change(function () {
                    var joinEntity = \$('#joinTable option:selected').val();


                var disabled = []
                \$.each(\$('.checkData:disabled'), function() {
                    disabled.push(\$(this).val())
                })
                    var joinData = {
                    name: \"value\",
                    value: joinEntity
                    };
                    \$.post(\"{{ path('admin_ajax_join') }}\", joinData, function (joinString) {
                        console.log(disabled)
                        console.log(joinString)
                        \$('#joinEData').html(\" \");
                        for (let i = 0; i < joinString[0].length; i++) {
                            const joinElement = joinString[0][i];
                            console.log(joinElement)
                            if (joinElement == 'id') {
                                \$('#joinEData').append('<p><label><input disabled checked class=\"checkData\" type=\"checkbox\" value=\"b.'+joinElement+'\"/><span>'+joinElement+'</span></label></p>')
                            } else {
                              \$('#joinEData').append('<p><label><input class=\"checkData\" type=\"checkbox\" value=\"b.'+joinElement+'\"/><span>'+joinElement+'</span></label></p>')  
                            }
                            
                        }

                        \$('#hidden-group').removeClass(\"hidden\")
                        \$('#groupBy').html(\"\")
                        \$('#groupBy').append(\"<option disabled selected value=''>-- Group By --</option><option value='a.id'>\"+\$('#table option:selected').html()+\"</option><option value='b.id'>\"+\$('#joinTable option:selected').html()+\"</option>\")                

                        
                    })
            })
        
            \$('#submit-dql').click(function() {
                var cb = [];
                var entity = \$('#table option:selected').val()
                var joinEntity = \$('#joinTable option:selected').val()
                var groupby = \$('#groupBy option:selected').val()
                cb.push(entity)
                cb.push(joinEntity)
                cb.push(groupby)
                \$.each(\$('.checkData:checked'), function() {
                cb.push(\$(this).val()); 
                });
                
                console.log(cb)
                var checkData = {
                    name: \"value\",
                    value: cb
                };

                \$.post(\"{{ path('admin_ajax_data') }}\", checkData, function(dataString) {
                    \$('#search-container').html(\" \")
                    for (let index = 0; index < dataString.length; index++) {
                        const dataElement = dataString[index];
                        \$('#search-container').append(\"<table class='table' id='tableN\"+index+\"'><tbody>\")
                        \$.each(dataElement, function(k, v){
                            \$('#tableN'+index).append(\"<tr><th>\"+k+\"</th><td>\"+v+\"</td></tr>\")
                        })
                        \$('#search-container').append(\"</tbody></table><hr>\")
                        }

                        \$('#hidden-order').removeClass('hidden')
                        \$('#orderBy').html(\"<option value='' disabled selected>-- ORDER BY --</option>\")
                        for (let i = 3; i < cb.length; i++) {
                            const ordered = cb[i];
                            \$('#orderBy').append(\"<option value='\"+ordered+\"'>\"+ordered+\"</option>\") 
                        }

                        \$('#hidden-where').removeClass('hidden')
                        \$('#where').html(\"<option value='' disabled selected>-- WHERE --</option>\")
                        for (let i = 3; i < cb.length; i++) {
                            const where = cb[i];
                            \$('#where').append(\"<option value='\"+where+\"'>\"+where+\"</option>\") 
                        }
                            
                        
                        
                    })
                    
                })

        \$('#orderBy').on('change', function (){
            \$('#hidden-ad').removeClass('hidden')
            })
            
            \$('input[name=\"ad\"]').click(function() {
                var order = \$('#orderBy option:selected').val()
                var ad = \$(this).val()
                console.log(ad)
                var cb = [];
                var entity = \$('#table option:selected').val()
                var joinEntity = \$('#joinTable option:selected').val()
                var groupby = \$('#groupBy option:selected').val()
                cb.push(entity)
                cb.push(joinEntity)
                cb.push(groupby)
                cb.push(order)
                cb.push(ad)
                \$.each(\$('.checkData:checked'), function() {
                cb.push(\$(this).val()); 
                });
            var orderData = {
                name : \"value\",
                value: cb
            }
            console.log(cb)
            \$.post(\"{{ path('admin_ajax_order') }}\", orderData, function (orderString) {
                \$('#search-container').html(\" \")
                    for (let index = 0; index < orderString.length; index++) {
                        const orderElement = orderString[index];
                        \$('#search-container').append(\"<table class='table' id='tableN\"+index+\"'><tbody>\")
                        \$.each(orderElement, function(k, v){
                            \$('#tableN'+index).append(\"<tr><th>\"+k+\"</th><td>\"+v+\"</td></tr>\")
                        })
                        \$('#search-container').append(\"</tbody></table><hr>\")
                        }


            })


        })

        \$('#where').change(function() {
            \$('#hidden-param').removeClass('hidden')
        })

        \$('#param').keyup(function() {
            var order = \$('#orderBy option:selected').val()
            var where = \$('#where option:selected').val()
            var param = \$(this).val()
                var ad = \$('input[name=\"ad\"]:checked').val()
                console.log(ad)
                var cb = [];
                var entity = \$('#table option:selected').val()
                var joinEntity = \$('#joinTable option:selected').val()
                var groupby = \$('#groupBy option:selected').val()
                cb.push(entity)
                cb.push(joinEntity)
                cb.push(where)
                cb.push(param)
                cb.push(groupby)
                cb.push(order)
                cb.push(ad)
                \$.each(\$('.checkData:checked'), function() {
                cb.push(\$(this).val()); 
                });
            var orderData = {
                name : \"value\",
                value: cb
            }
            if(\$('#param').val() != \"\") {
                \$.post(\"{{ path('admin_ajax_where') }}\", orderData, function (orderString) {
                    \$('#search-container').html(\" \")
                        for (let index = 0; index < orderString.length; index++) {
                            const orderElement = orderString[index];
                            \$('#search-container').append(\"<table class='table' id='tableN\"+index+\"'><tbody>\")
                            \$.each(orderElement, function(k, v){
                            \$('#tableN'+index).append(\"<tr><th>\"+k+\"</th><td>\"+v+\"</td></tr>\")
                        })
                        \$('#search-container').append(\"</tbody></table><hr>\")
                    }
                })
            }
        })

        \$('#orderBy').click(function () {
            console.log(\"yo\")
        })
        
            /***** INIT SELECT MATERIALIZE *****/   
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
            });
        
            </script>
           
        {% endblock %}", "admin/index.html.twig", "/Applications/MAMP_2019-08-23_09-35-41/htdocs/JVD/JVD/templates/admin/index.html.twig");
    }
}
