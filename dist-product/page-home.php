<?php
/*
    Template Name: Home Page
*/

//CUSTOM FIELDS VARIABLES
// $value = get_field( "text_field" );

$homepage_title = get_field( 'home_page_title' );
$homepage_slogan = get_field( 'home_page_slogan' );
$card_1_title = get_field( 'card_1_title' );
$card_1_image = get_field( 'card_1_image' );
$card_1_text = get_field( 'card_1_text' );
$card_2_title = get_field( 'card_2_title' );
$card_2_image = get_field( 'card_2_image' );
$card_2_text = get_field( 'card_2_text' );
$card_3_title = get_field( 'card_3_title' );
$card_3_image = get_field( 'card_3_image' );
$card_3_text = get_field( 'card_3_text' );
$program_and_events = get_field( 'program_and_events' );
$program_and_events_calender = get_field( 'program_and_events_calender' );

get_header();
?>

<?php include get_template_directory() . './pages/home.php'; ?>
	
<?php
get_footer();
