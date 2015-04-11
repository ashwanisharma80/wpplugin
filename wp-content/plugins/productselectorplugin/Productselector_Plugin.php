<?php
/**
 * @package Productselector
 * @version 1.0
 */
/*
  Plugin Name: Productselector_Plugin
  Plugin URI: http://agilewebrtc.com/
  Description: This plugin is used for selecting product
  Author: Ashwani Sharma
  Version: 1.0
  Author URI: http://agilewebrtc.com/
 */

if (!class_exists ('Productselector_Plugin')) {

    class Productselector_Plugin {

        public $_name;
        public $page_title;
        public $page_name;
        public $page_id;

        public function __construct () {
            register_activation_hook( __FILE__, array($this,'Productselector_install') );
            add_action ('admin_menu', array ($this, 'ProductSelector_Form'));
            add_shortcode ('steps', array ($this, 'step1'));
        }

        function step1 () {
            return '
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                <script>
                var cntr=1;
                function submitother(){
                    cntr++;
                    $("#stepcntr").val(cntr);
                    for(var i=1;i<8;i++){
                        $("#step"+i).hide();
                        $("#tabstep"+i).hide();
                    }
                    $("#step"+cntr).show();
                    $("#tabstep"+cntr).show();
                    if(cntr>7){
                        window.location.href="index.php"
                    }
                    
                }
               $(document).ready(function(){
                    $("#nextbutton").click(function(){
                        var stepcntrs=$("#stepcntr").val();
                        var obj1=document.getElementsByName("find-option"+stepcntrs);
                            var flg=true;
                            for(var j=0;j<obj1.length;j++){
                                if(obj1[j].checked){
                                    flg=false;
                                    break;
                                }
                            }
                            
                        
                        if(flg){
                                alert("select atleast one option");
                                return false;
                        }else{
                         submitother();
                        }
                    });
                    $("#step1").show();
                    $("#tabstep1").show();
                    $("#step2").hide();
                    $("#tabstep2").hide();
                    $("#step3").hide();
                     $("#tabstep3").hide();
                    $("#step4").hide();
                    $("#tabstep4").hide();
                    $("#step5").hide();
                     $("#tabstep5").hide();
                    $("#step6").hide();
                    $("#tabstep6").hide();
                    $("#step7").hide();
                   $("#tabstep7").hide();
                    
                });
                 </script>
                <div role="tabpanel">
                  <input type="hidden" name="stepcntr" id="stepcntr" value="1" />
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">
                      
                        <section class="container">
        <section class="row">
            <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <div class="content-holder product-finder-content" id="step_0" data-index="0" style="display: block;">
                    <div id="step-one" class="step-one">
        	<section>
                         <ul id="tabstep1" class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"> I. What do you need? </a></li>
                     </ul>
                       <ul id="tabstep2" class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"> II. Where do you need it?</a></li>
                     </ul>
                       <ul id="tabstep3" class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"> III. Which picture most closely resembles your current system</a></li>
                     </ul>
                       <ul id="tabstep4" class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"> IV. What type of system do you want?</a></li>
                     </ul>
                       <ul id="tabstep5" class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"> V. Choose an efficiency level</a> A. Air Conditioning</li>
                     </ul>
                       <ul id="tabstep6" class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab">V. Choose an efficiency level</a> B. Heating</li>
                     </ul>
                       <ul id="tabstep7" class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"> VI. I’d like to optimize for: </a></li>
                     </ul>
                            <ul id="step1" class="options find-options clearfix list-unstyled">
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">Aircondition</span></label>
                                                <input type="radio" value="aircondition" id="find-options1" name="find-option1" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">Heating</label>
                                                <input type="radio" value="heating" id="find-options1" name="find-option1" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                     <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">both</span></label>
                                                <input type="radio" value="both" id="find-options1" name="find-option1" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                    <ul id="step2" class="options find-options clearfix list-unstyled">
                                   
                                    
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">My whole house</label>
                                                <input type="radio" value="wholehouse" id="find-options2" name="find-option2" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                     <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm"> Specific Rooms</label>
                                                <input type="radio" value="specificrooms" id="find-options2" name="find-option2" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                    <ul id="step3" class="options find-options clearfix list-unstyled">
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">Attic</span></label>
                                                <input type="radio" value="Attic" id="find-options3" name="find-option3" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">Closet</span></label>
                                                <input type="radio" value="Closet" id="find-options3" name="find-option3" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">Garage</span></label>
                                                <input type="radio" value="Garage" id="find-options3" name="find-option3" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    </ul>
                                    <ul id="step4" class="options find-options clearfix list-unstyled">
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">Split System</span></label>
                                                <input type="radio" value="split system" id="find-options4" name="find-option4" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">Complete System</span></label>
                                                <input type="radio" value="Complete System" id="find-options4" name="find-option4" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                     <ul id="step5" class="options find-options clearfix list-unstyled">
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">14 SEER</span></label>
                                                <input type="radio" value="14 SEER" id="find-options5a" name="find-option5a" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">15 SEER</span></label>
                                                <input type="radio" value="15 SEER" id="find-options5a" name="find-option5a" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                     <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">16 SEER</span></label>
                                                <input type="radio" value="16 SEER" id="find-options5a" name="find-option5a" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">17 SEER</span></label>
                                                <input type="radio" value="17 SEER" id="find-options5a" name="find-option5a" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                     <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_coolingheating_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-coolheat"><span class="light-blue ftm">17+ SEER</span></label>
                                                <input type="radio" value="17+ SEER" id="find-options5a" name="find-option5a" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                     <ul id="step6" class="options find-options clearfix list-unstyled">
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">Mid-efficiency (78-84% AFUE)</span></label>
                                                <input type="radio" value="Mid-efficiency (78-84% AFUE)" id="find-options5b" name="find-option5b" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">High-efficiency (90-97% AFUE)</span></label>
                                                <input type="radio" value="High-efficiency (90-97% AFUE)" id="find-options5b" name="find-option5b" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                    <ul id="step7" class="options find-options clearfix list-unstyled">
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">Air quality</span></label>
                                                <input type="radio" value="Air quality" id="find-options6" name="find-option6" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">Humidity control</span></label>
                                                <input type="radio" value="Humidity control" id="find-options6" name="find-option6" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="find-option">
                                            <img class="img-responsive hidden-xs li-image-tag" src="Product%20Finder_files/pf_bg_step1_cooling_on-original-unshaded.png">
                                            <div class="label-holder">
                                                <label for="find-options-cooling"><span class="light-blue ftm">Fresh air</span></label>
                                                <input type="radio" value="Fresh air" id="find-options6" name="find-option6" class="find-option visuallyhidden">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    </ul>
                                </div>
                                
                            </fieldset>
                            <input type="button" value="next" id="nextbutton" />
                           
                                </section>
                            </section>
                        </section>
                       </div>
                    </div>

                  </div>

           ';
        }

        function ProductSelector_Form () {
            add_options_page ("Product Finder", "Product Finder", 1, "productfinder", array ($this, "productselector_form_view"));
        }

        function productselector_form_view () {
            if ($_POST['productfinder_hidden'] == 'Y') {
                //Form data sent
                $dbhost = $_POST['productfinder_dbhost'];
                update_option ('productfinder_dbhost', $dbhost);

                $dbname = $_POST['productfinder_dbname'];
                update_option ('productfinder_dbname', $dbname);

                $dbuser = $_POST['productfinder_dbuser'];
                update_option ('productfinder_dbuser', $dbuser);

                $dbpwd = $_POST['productfinder_dbpwd'];
                update_option ('productfinder_dbpwd', $dbpwd);

                $prod_img_folder = $_POST['productfinder_prod_img_folder'];
                update_option ('productfinder_prod_img_folder', $prod_img_folder);

                $store_url = $_POST['productfinder_store_url'];
                update_option ('productfinder_store_url', $store_url);
                ?>
                <div class="updated"><p><strong><?php _e ('Options saved.'); ?></strong></p></div>
                <?php
            } else {
                //Normal page display
            }
            ?>
            <style>
                * {
                    .border-radius(0) !important;
                }

                #field {
                    margin-bottom:20px;
                }
            </style>
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

            <div class="wrap">
                <?php echo "<h2>" . __ ('Product Finder Steps', 'productfinder_trdom') . "</h2>"; ?>

                <form name="product_finder_form" method="post" action="<?php echo str_replace ('%7E', '~', $_SERVER['REQUEST_URI']); ?>">
                    <input type="hidden" name="productfinder_hidden" value="Y">
                    <?php echo "<h4>" . __ ('Product Finder Steps', 'productfinder_trdom') . "</h4>"; ?>
                    <div class="container">
                        <div class="row">
                            <input type="hidden" name="count" value="1" />
                            <div class="control-group" id="fields">
                                <div class="controls" id="step1">
                                    <div> I. What do you need? </div>
                                    <div id="field">Option:<br /><input autocomplete="off" class="input" id="step1field1" name="step1fields[]" type="text" placeholder="Type something" data-items="8"/><button id="b1" class="btn add-more-step1" type="button">+</button></div>
                                    <br>
                                    <small>Press + to add another form field :)</small>
                                </div>
                                <div class="controls" id="step2">
                                    <div>II. Where do you need it? </div>
                                    <div id="field">Option:<br /><input autocomplete="off" class="input" id="step2field1" name="step2fields[]" type="text" placeholder="Type something" data-items="9"/><button id="b1" class="btn add-more-step2" type="button">+</button></div>
                                    <br>
                                    <small>Press + to add another form field :)</small>
                                </div>
                                <div class="controls" id="step3">
                                    <div> III. Which picture most closely resembles your current system </div>
                                    <div id="field">Option:<br /><input autocomplete="off" class="input" id="step3field1" name="step3fields[]" type="text" placeholder="Type something" data-items="10"/><button id="b1" class="btn add-more-step3" type="button">+</button></div>
                                    <br>
                                    <small>Press + to add another form field :)</small>
                                </div>
                                <div class="controls" id="step4">
                                    <div> IV. What type of system do you want?</div>
                                    <div id="field">Option:<br /><input autocomplete="off" class="input" id="step4field1" name="step4fields[]" type="text" placeholder="Type something" data-items="11"/><button id="b1" class="btn add-more-step4" type="button">+</button></div>
                                    <br>
                                    <small>Press + to add another form field :)</small>
                                </div>
                                <div class="controls" id="step5">
                                    <div>  V. Choose an efficiency level</div>
                                    <div> A. Air Conditioning</div>
                                    <div id="field">Option:<br /><input autocomplete="off" class="input" id="step5fieldA1" name="step5Afields[]" type="text" placeholder="Type something" data-items="12"/><button id="b1" class="btn add-more-step5A" type="button">+</button></div>
                                    <br>
                                    <small>Press + to add another form field :)</small>
                                    <div>  B. Heating</div>
                                    <div id="field">Option:<br /><input autocomplete="off" class="input" id="step5fieldB1" name="step5Bfields[]" type="text" placeholder="Type something" data-items="13"/><button id="b1" class="btn add-more-step5B" type="button">+</button></div>
                                    <br>
                                    <small>Press + to add another form field :)</small>
                                </div>
                                <div class="controls" id="step6">
                                    <div>  VI. I’d like to optimize for:</div>
                                    <div id="field">Option:<br /><input autocomplete="off" class="input" id="step6field1" name="step6fields[]" type="text" placeholder="Type something" data-items="14"/><button id="b1" class="btn add-more-step6" type="button">+</button></div>
                                    <br>
                                    <small>Press + to add another form field :)</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="submit">
                        <input type="submit" name="Submit" value="<?php _e ('Update Options', 'productfinder_trdom') ?>" />
                    </p>
                </form>
            </div>
            <?php
        }

    }

    function Productselector_install () {
        global $wpdb;
        $table_name = $wpdb->prefix . "productselector_question_option";

        $charset_collate = $wpdb->get_charset_collate ();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id int(11) NOT NULL AUTO_INCREMENT,
            q_id int(11) DEFAULT '0' NOT NULL,
            time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            question text NULL, 
            option text NULL,
            option_image varchar(255) NULL,
            PRIMARY KEY(id)
          ) $charset_collate;";
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta ($sql);
        add_option( "productselector_db_version", "1.0" );
    }

}
$Productselector_Plugin_obj = new Productselector_Plugin();
