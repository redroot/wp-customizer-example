<?php

add_action("customize_register",function ($wpc){
  
  $wpc->add_section("heading_section",array(
    "title"     => "My Heading Section",
    "priority"  => 0
  ));

  $wpc->add_setting("mytheme_options[heading]",array(
    "default"    => "Default Heading",
    "type"       => "option",
    "capability" => "edit_theme_options",
    "transport"  => "postMessage"
  ));
  
  $wpc->add_setting("mytheme_options[blue]",array(
    "default"    => "false",
    "type"       => "option",
    "capability" => "edit_theme_options"
  ));
  
  $wpc->add_setting("mytheme_options[subheading]",array(
    "default"    => "Hot Fuzz",
    "type"       => "option",
    "capability" => "edit_theme_options"
  ));


  $wpc->add_control("mytheme_options[heading]",array(
    "label"       => "Custom Heading",
    "section"     => "heading_section",
    "setting"     => "mytheme_options[heading]",
    "type"        => "text"
  ));
  
  $wpc->add_control("mytheme_options[blue]",array(
    "label"       => "Make It Blue?",
    "section"     => "heading_section",
    "setting"     => "mytheme_options[blue]",
    "type"        => "checkbox"
  ));
  
  $wpc->add_control("mytheme_options[subheading]",array(
    "label"       => "subheading?",
    "section"     => "heading_section",
    "setting"     => "mytheme_options[subheading]",
    "type"        => "select",
    "choices"     => array(
      "Hot Fuzz"          => "Hot Fuzz",
      "Shaun of the Dead" => "Shaun of the Dead",
      "The World Ends"    => "The World Ends"
    )
  ));

  # Remove default sections
  $wpc->remove_section("title_tagline");
  $wpc->remove_section("static_front_page");

  
});

?>