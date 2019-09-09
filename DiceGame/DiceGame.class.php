<?php
/**
 * Widget API: WP_Widget_DiceGame class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */

/**
 * Core class used to implement the diceRoller widget.
 *
 * @since 2.8.0
 *
 * @see WP_Widget
 */
include('dice.class.php');
Class DiceGame_widget extends WP_Widget{

	function __construct() {
		parent::__construct(
// widget ID
			'DiceGame_widget',
// widget name
			__('DiceGame Sample Widget', ' DiceGame_widget_domain'),
// widget description
			array( 'description' => __( 'game dice roller', 'DiceGame_widget_domain' ), )
		);
	}



	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) )
			$title = $instance[ 'title' ];
		else
			$title = __( 'Default Title', 'DiceGame_widget_domain' );
		?>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			</p>
		</p>

		<?php
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
//if title is present
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
//output

		include('form.php');
		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	static function createTable(){
		global $wpdb;
		$table_name = $wpdb->prefix . "lancerDes";

			if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
				$sql = "CREATE TABLE `$table_name`
				(
				`id` int(11)PRIMARY KEY NOT NULL AUTO_INCREMENT,
				`date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
				`jet` text COLLATE utf8mb4_unicode_ci NOT NULL,
				`userid` int(11) NOT NULL)
				ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
				require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
				dbDelta( $sql );
			}
	}
	static function deleteTable(){
		global $wpdb;
		$table_name = $wpdb->base_prefix.'lancerDes';
		$sql = "DROP TABLE IF EXISTS `$table_name`;";
		$wpdb->query($sql);
	}

	
	public function jet(){
		

		if(!empty($_POST)){
			$user = get_current_user_id();
			$dice = new dice;

			$result = $dice->rollDice();
			var_dump($result);
			global $wpdb;	

			$table_name = $wpdb->prefix . "lancerDes";

			$data =array('jet' =>$result, 'userid' => $user);
			$wpdb->insert($table_name, $data);
		}
	}


}

