<?php 
add_action( 'init', 'create_testimonials' );
function create_testimonials() {
  register_post_type( 'testimonials',	
	 array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' ),
		'add_new'            => _( 'Add New Testimonials'),
		'add_new_item'       => __( 'Add New Testimonials'),
		'new_item'           => __( 'New Testimonial'),
		'edit_item'          => __( 'Edit Testimonial'),
		'view_item'          => __( 'View Testimonial'),
		'all_items'          => __( 'All Testimonials'),
		'search_items'       => __( 'Search Testimonial')
      ),		
		'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
	 	'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt'),
		'menu_icon'           => 'dashicons-testimonial',
		'menu_position' => 52
	 )	
  );
}
 ?>
 <!-- post type 1st -->
<?php 
function register_post(){
register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'portfolio' ),
                'singular_name' => __( 'portfolio')
            ),
            'public' => true,
            // 'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail' , 'excerpt'),

            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => true,
            'rewrite' => true, //array( 'slug' => 'brands-page' ),
            'menu_position' => 100,
            'menu_icon' => 'dashicons-download',

        )
    );
}
add_action( 'init', 'register_post' );
 ?>

 <!-- register method -->

 <!-- how to show post type data  -->
    <?php 
                        // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;   
                                               // WP_Query arguments
                        $args = array(
                            'post_type' => array( 'portfolio' ),
                            'post_status' => array( 'publish' ),
                            'posts_per_page' => 6,
                            'paged' => $paged,
                        );

                        // The Query
                        $query = new WP_Query( $args );

                        // The Loop
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
 ?>
                 



                 <!-- how to get page page data -->

                  class="col-lg-5">
                        <?php // WP_Query arguments
                        $args = array(
                        'page_id' => '481',
                        'pagename' => 'portfolio',
                        );

                        // The Query
                        $query = new WP_Query( $args );

                        // The Loop
                        if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                        $query->the_post();
                        // do something
                        ?>
                    <div class="left-content our-service">
                        <h6 class="mgp"><?php the_title(); ?></h6>
                        <?php the_content(); ?>
                    </div>
                    <?php 
                    }
                        } 
                        wp_reset_postdata();  ?>