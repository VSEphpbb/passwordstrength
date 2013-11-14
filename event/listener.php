<?php
/**
*
* @package Show Password Strength
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vse\passwordstrength\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => 'setup_password_strength',
		);
	}

	public function setup_password_strength($event)
	{
		global $user;

		$user->add_lang_ext('vse/passwordstrength', 'passwordstrength');
	}

}