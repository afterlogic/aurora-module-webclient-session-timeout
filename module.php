<?php

class SessionTimeoutWeblientModule extends AApiModule
{
	public function GetAppData()
	{
		return array(
			'TimeoutSeconds' => 0 // AppData.App.IdleSessionTimeout
		);
	}
}
