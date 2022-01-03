<?php

	class Social_Widget extends WP_Widget {
		public function __construct() {
			parent::__construct( 'social_widget', __( 'Social Widget', 'simple' ), array( 'description' =>__( 'Footer social widget', 'simple' ) ) );
		}

		public function widget( $args, $instance ) {
			echo $args['before_widget'];

			if ( ! empty( $instance['facebook'] ) ) {
			?>
				<li>
					<a href="<?php echo $instance['facebook']; ?>"><i class="fab fa-facebook"></i></a>
				</li>
			<?php
				}
				if ( ! empty( $instance['twitter'] ) ) {
			?>
				<li>
					<a href="<?php echo $instance['twitter']; ?>"><i class="fab fa-twitter"></i></a>
				</li>
			<?php
				}
				if ( ! empty( $instance['youtube'] ) ) {
				?>
				<li>
					<a href="<?php echo $instance['youtube']; ?>"><i class="fab fa-youtube"></i></a>
				</li>
			<?php
				}
						if ( ! empty( $instance['instagram'] ) ) {
						?>
				<li>
					<a href="<?php echo $instance['instagram']; ?>"><i class="fab fa-instagram"></i></a>
				</li>
			<?php
				}
						if ( ! empty( $instance['linkedin'] ) ) {
						?>
				<li>
					<a href="<?php echo $instance['linkedin']; ?>"><i class="fab fa-linkedin"></i></a>
				</li>
			<?php
				}
						if ( ! empty( $instance['pinterest'] ) ) {
						?>
				<li>
					<a href="<?php echo $instance['pinterest']; ?>"><i class="fab fa-pinterest"></i></a>
				</li>
			<?php
				}

						echo $args['after_widget'];
					}

					public function form( $instance ) {
						$facebook = isset( $instance['facebook'] ) ? $instance['facebook'] : '';
						$twitter = isset( $instance['twitter'] ) ? $instance['twitter'] : '';
						$youtube = isset( $instance['youtube'] ) ? $instance['youtube'] : '';
						$instagram = isset( $instance['instagram'] ) ? $instance['instagram'] : '';
						$linkedin = isset( $instance['linkedin'] ) ? $instance['linkedin'] : '';
						$pinterest = isset( $instance['pinterest'] ) ? $instance['pinterest'] : '';
					?>
		<p>
			<label for="<?php echo $this->get_field_name( 'facebook' ); ?>"><?php _e( 'Facebook' );?></label>
			<input value="<?php echo esc_attr( $facebook ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'facebook' ); ?>" id="<?php echo $this->get_field_id( 'facebook' ); ?>" type="text" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'twitter' ); ?>"><?php _e( 'Twitter' );?></label>
			<input value="<?php echo esc_attr( $twitter ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'twitter' ); ?>" id="<?php echo $this->get_field_id( 'twitter' ); ?>" type="text" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'instagram' ); ?>"><?php _e( 'Instagram' );?></label>
			<input value="<?php echo esc_attr( $instagram ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'instagram' ); ?>" id="<?php echo $this->get_field_id( 'instagram' ); ?>" type="text" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'youtube' ); ?>"><?php _e( 'Youtube' );?></label>
			<input value="<?php echo esc_attr( $youtube ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'youtube' ); ?>" id="<?php echo $this->get_field_id( 'youtube' ); ?>" type="text" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_name( 'linkedin' ); ?>"><?php _e( 'linkedIn' );?></label>
			<input value="<?php echo esc_attr( $linkedin ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" type="text" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'pinterest' ); ?>"><?php _e( 'Pinterest' );?></label>
			<input value="<?php echo esc_attr( $pinterest ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" type="text" />
		</p>
		<?php
			}

			public function update( $new_instance, $old_instance ) {
				$instance = array();
				$instance['facebook'] = ( !empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
				$instance['twitter'] = ( !empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
				$instance['youtube'] = ( !empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';
				$instance['instagram'] = ( !empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
				$instance['linkedin'] = ( !empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';
				$instance['pinterest'] = ( !empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';

				return $instance;
		  }

			}
			new Social_Widget();

			function simple_social_widget() {
				register_widget( 'Social_Widget' );
		}
		add_action( 'widgets_init', 'simple_social_widget' );