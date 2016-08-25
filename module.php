<?php

class SessionTimeoutWeblientModule extends AApiModule
{
	public function GetAppData()
	{
		\CApi::checkUserRoleIsAtLeast(\EUserRole::Anonymous);
		
		return array(
			'TimeoutSeconds' => 0 // AppData.App.IdleSessionTimeout
		);
	}
}
