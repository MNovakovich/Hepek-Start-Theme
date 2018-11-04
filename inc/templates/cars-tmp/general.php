<?php settings_errors();?>
<h1>Onepage general options</h1>
<h3 class="title">Manage options</h3>
<p>Customize the default OnePage Appereance Options</p>
<?php

$first_name = esc_attr(get_option('first_name'));
$last_name = esc_attr(get_option('last_name'));
$description = esc_attr(get_option('description_user'));

$full_name = $first_name." ".$last_name;


?>
<div id="onepage-admin">
   <div class="hepek-sidebar-preview">
       <div class="image-container">
           <div class="profile-picture">
               <img id="slika-profil" src="<?php echo $profile_picture?>">
           </div>
       </div>
       <div class="hepek-sidebar">
           <h1 class="hepek-username"><?php echo $first_name; ?></h1>
           <h2 class="hepek-description"><?php echo $description; ?></h2>
           <div class="icons-wraper">
              
           </div>
       </div>