<?php
$hero_media_type = get_field('hero_media_type');
$hero_image = get_field('hero_image'); 
$hero_image_fallback = get_field('hero_image_fallback'); 

//Size Variables
if($hero_media_type == 'image') 
  $large_hero_url = $hero_image['sizes'][large]; 
if($hero_media_type == 'video_loop') 
  $large_hero_url = $hero_image_fallback['sizes'][large];
if($hero_media_type == 'image') 
  $medium_hero_url = $hero_image['sizes'][medium]; 
if($hero_media_type == 'video_loop') 
  $medium_hero_url = $hero_image_fallback['sizes'][medium];
if($hero_media_type == 'image')  
  $thumbnail_hero_url = $hero_image['sizes'][thumbnail]; 
if($hero_media_type == 'video_loop') 
  $thumbnail_hero_url = $hero_image_fallback['sizes'][thumbnail];

//Fallbacks if custom fallback image was supplied
$fallback_image = get_theme_mod( 'custom_background_image' );
if($fallback_image && !$hero_image && !$hero_image_fallback){
  $large_hero_url = $fallback_image; 
  $medium_hero_url = $fallback_image; 
  $thumbnail_hero_url = $fallback_image;
}elseif(!$hero_image && !$hero_image_fallback){
  //Conditions if no fallback image was supplied
  $large_hero_url = ''; 
  $medium_hero_url = ''; 
  $thumbnail_hero_url = '';
}
?>