<?php 

class CarsAdmin{
    

    public static function register(){

    }

    public function __construct(){
         add_action('admin_menu', array($this, 'cars_add_admin_pages'));
    }
    
    public function cars_add_admin_pages(){
         add_menu_page('Renta Cars Manager', 'Renta Cars Manager', 'manage_options', 'cars_manager', array($this,'cars_create_page'), '', 1);
         add_action('admin_init', array($this, 'cars_custom_settings'));

    }

    public function cars_create_page(){
      require get_template_directory(). '/inc/templates/cars-tmp/general.php';

    }

    public function cars_custom_settings(){

        register_setting('onepage-settings-group', 'profile_picture');
        
        register_setting('onepage-settings-group', 'first_name');

        add_settings_section('onepage-sidebar-options', 'Side Options', 'onepage_sidebar_options', 'cars_manager');


        add_settings_field('sidebar-picture', 'Profile picture', 'onepage_sidebar_picture', 'cars_manager', 'onepage-sidebar-options');
        add_settings_field('sidebar-name', 'Full Name', array($this,'onepage_sidebar_name'), 'cars_manager', 'onepage-sidebar-options');

    }


    function onepage_sidebar_name() {
        $first_name = esc_attr(get_option('first_name'));
        $last_name = esc_attr(get_option('last_name'));
        echo '<input type="text" name="first_name" placeholder="unesi ime" value="' . $first_name . '">
              <input type="text" name="last_name" placeholder="unesi prezime" value="' . $last_name . '">';
}

}


$admin =  new CarsAdmin;