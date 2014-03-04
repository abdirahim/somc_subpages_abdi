<?php
/**
* SOMC_widget extends WP_Widget
*
* This implements a WordPress widget for displaying all subpages of the page it is placed on
*/

class SOMC_widget extends WP_Widget {
    
    public $name = 'SOMC Subpages';

    public $description = 'Displays all subpages of the page it is placed on';
    /* List all controllable options here along with a
    default value.
    The values can be distinct for each instance of the
    widget. */
    public $control_options = array();
    //!!! Magic Functions
    // The constructor.
    function __construct() {
        $widget_options = array('classname' => __CLASS__,'description' => $this->widget_desc,);
        
        parent::__construct( __CLASS__, $this->name, $widget_options, $this->control_options);
    }
    
      /*** Displays content to the front-end.*/
 function widget($args, $instance){
     
    echo  "show/hide Subpages";
    $this->wpb_list_child_pages();
}
    //!!! Static Functions
    static function register_this_widget() {
        register_widget(__CLASS__);
    }
    
    function wpb_list_child_pages() { 
        
       //wp_list_pages( $args ); 
         
      $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&post_author=DESC');
  
      ?>
<div class='FAQ'>
    <a href="#hide1" class="hide" id="hide1">+ </a>  
    <a href="#show1" class="show" id="show1">-</a>
    
       <?php
       
       if ($children) {   ?>
<!--            <ul>-->
 <div class="list">
            <?php  echo $children; ?>
     </div>
<!--            </ul>-->
            <?php 
  
        } 
  ?>
</div>
  
  
<?php 
    
       } //end of wpb_list_child_pages

   

} //end of class
/* EOF */