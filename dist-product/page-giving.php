<?php
/*
    Template Name: Giving Page
*/

//CUSTOM FIELDS

$slider_one = get_post_meta(8, 'slider_one', true);
$slider_two = get_post_meta(8, 'slider_two', true);
$slider_three = get_post_meta(8, 'slider_three', true);

get_header();

?>


<div class="container-fluid no-gutters">  
  <div class="container">
    <div class="row">
      <div class="col-12 mt-3">
        <h2>Giving</h2>
        <h3 class="mt-3">
          <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Our Vision</footer>
          </blockquote>
        </h3>
      </div>
  </div>
</div>

	

<?php
get_footer();
