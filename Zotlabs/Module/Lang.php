<?php
namespace Zotlabs\Module;

use App;
use Zotlabs\Lib\Apps;
use Zotlabs\Web\Controller;

class Lang extends Controller {

	function get() {

		if(local_channel()) {
			if(! Apps::system_app_installed(local_channel(), 'Language')) {
				//Do not display any associated widgets at this point
				App::$pdl = '';

				$o = '<b>' . t('Language App') . ' (' . t('Not Installed') . '):</b><br>';
				$o .= t('Change UI language');
				return $o;
			}
		}

		nav_set_selected('Language');
		return lang_selector();

	}
	
}
