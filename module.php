<?php

class SessionTimeoutClientModule extends AApiModule
{
	public function GetAppData()
	{
		return array(
			'TimeoutSeconds' => 0 // AppData.App.IdleSessionTimeout
		);
	}
}
