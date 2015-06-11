<?php

Menu::create('sidebar', function ($menu)
{
	$menu->setPresenter('Cms\Core\Presenters\Menus\SidebarPresenter');
	$menu->setPrefixUrl(cms()->prefix());
	$menu->header('MAIN NAVIGATION');
	$menu->url('/', 'Dashboard', 1, ['icon' => 'fa fa-dashboard']);
	$menu->url('/users', 'Users', 1, ['icon' => 'fa fa-users']);
	$menu->dropdown('Settings', function ($sub)
	{
		$sub->url('settings', 'General');
	}, ['icon' => 'fa fa-wrench']);
});

