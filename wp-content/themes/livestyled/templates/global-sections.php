<?php
	
	if( have_rows( 'sections' ) ):
	
		$section = 1;
	
		while ( have_rows( 'sections' ) ): the_row();

			if( get_row_layout() == 'banner_full_bleed' ):

					include( 'pb-banner-full-bleed.php' );
	
				elseif( get_row_layout() == 'copy_only' ):
	
					include( 'pb-copy-only.php' );

				elseif( get_row_layout() == 'copy_image' ):
	
					include( 'pb-copy-image.php' );

				elseif( get_row_layout() == 'copy_image_boxed' ):

					include( 'pb-copy-image-boxed.php' );

				elseif( get_row_layout() == 'copy_gravity_form' ):
				
					include( 'pb-copy-gravity-form.php' );

				elseif( get_row_layout() == 'copy_video' ):
	
					include( 'pb-copy-video.php' );

				elseif( get_row_layout() == 'copy_blocks' ):
	
					include( 'pb-copy-blocks.php' );

				elseif( get_row_layout() == 'compare' ):
	
					include( 'pb-compare.php' );

				elseif( get_row_layout() == 'full_width_video' ):
	
					include( 'pb-full-width-video.php' );

				elseif( get_row_layout() == 'quote' ):
	
					include( 'pb-quote.php' );
				
				elseif( get_row_layout() == 'accordion' ):
	
					include( 'pb-accordion.php' );

				elseif( get_row_layout() == 'gallery' ):
	
					include( 'pb-gallery.php' );
				
				elseif( get_row_layout() == 'google_map' ):
	
					include( 'pb-google-map.php' );

				elseif( get_row_layout() == 'how_we_deliver_section' && get_sub_field('hwd_show_how_we_deliver_section')):

					include( 'pb-how-we-deliver.php' );

				elseif( get_row_layout() == 'our_partners_section' && get_sub_field('op_show_our_partners_section')):

					include( 'pb-our-partners.php' );

				elseif( get_row_layout() == 'our_clients_section' && get_sub_field('oc_show_our_clients_section')):

					include( 'pb-our-clients.php' );

				elseif( get_row_layout() == 'testimonials_section' && get_sub_field('t_show_testimonials_section')):

					include( 'pb-testimonials.php' );
				
				elseif( get_row_layout() == 'job_vacancies_section' && get_sub_field('jv_show_job_vacancies_section')):

					include( 'pb-job-vacancies.php' );

				elseif( get_row_layout() == 'latest_posts_section' && get_sub_field('lp_show_latest_posts')):

					include( 'pb-latest-posts.php' );

				elseif( get_row_layout() == 'request_demo_section' && get_sub_field('rd_show_request_demo') ):

					include( 'pb-request-demo-form.php' );
	
			endif;
	
			$section++;
		
		endwhile;
	
	endif;
