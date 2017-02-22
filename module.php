<?php

namespace Aurora\Modules;

class SessionTimeoutWeblientModule extends \AApiModule
{
	/***** public functions might be called with web API *****/
	/**
	 * Obtains list of module settings for authenticated user.
	 * 
	 * @return array
	 */
	public function GetSettings()
	{
		\CApi::checkUserRoleIsAtLeast(\EUserRole::Anonymous);
		
		return array(
			'TimeoutSeconds' => 0 // AppData.App.IdleSessionTimeout
		);
	}
	/***** public functions might be called with web API *****/
}
