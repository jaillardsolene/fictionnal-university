<?php
get_header();
pageBanner(array(
	'title' => 'Past Events',
	'subtitle' => 'Recap of our past events.'
)) ?>

<?php
echo '<div class="container container--narrow page-section">';
$today = date('Ymd');
$pastEvents = new WP_Query(array(
	'paged'=>get_query_var('paged', 1),
	'post_type' => 'event',
	'meta_key' => 'event_date',
	'orderby' => 'meta_value_num',
	'odrer' =>'ASC',
	'meta_query' => array(
		array(
			'key'=> 'event_date',
			'compare'=> '<',
			'value'=> $today,
			'type' => 'numeric'
		)
	)
));


while ($pastEvents->have_posts()) {
	$pastEvents->the_post();
	get_template_part('template-parts/content-event');
}
echo paginate_links(array(
	'total'=> $pastEvents->max_num_pages
));
echo '</div>';
?>


<?get_footer();
?>



