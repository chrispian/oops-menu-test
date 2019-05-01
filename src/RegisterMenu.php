<?php
/**
 * User: Chrispian H. Burks
 * @since: 2019-05-01
 */

namespace CHB\MenuTest;

use WebDevStudios\OopsWP\Structure\Content\Menu;

/**
 * Class Menu
 *
 * @author Chrispian H. Burks <chrispian.burks@webdevstudios.com>
 * @since 2019-05-01
 * @package CHB\MenuTest
 */

class RegisterMenu extends Menu {

	protected $location    = 'test-loc';
	protected $description = 'Test Menu Description';


	/**
	 * Callback to register the menu with WordPress.
	 *
	 * @since 2019-05-01
	 */
	public function register() {
		parent::register();
	}

}
