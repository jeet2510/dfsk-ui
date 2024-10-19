<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Page;
use App\Models\SiteInfo;
use App\Models\Site;
use App\Models\ConfigValue;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// $siteinfo = SiteInfo::all();
		// $config_values = ConfigValue::pluck('value', 'name');
		// $headermenu = Page::where('published', '1')
		//     ->where('showinheader', '1')
		//     ->whereNull('page_id')
		//     ->whereNull('deleted_at')
		//     ->orderBy('sortorder', 'ASC')
		//     ->get();
		// $footermenu = Page::where('published', '1')
		//     ->where('showinfooter', '1')
		//     ->whereNull('page_id')
		//     ->whereNull('deleted_at')
		//     ->orderBy('sortorder', 'ASC')
		//     ->get();

		// view()->share([
		//     'siteinfo' => $siteinfo,
		//     'headermenu' => $headermenu,
		//     'footermenu' => $footermenu,
		//     'config_values' => $config_values,
		// ]);
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadSiteInfo();
		$this->loadConfigValues();
		$this->loadHeaderMenu();
		$this->loadFooterMenu();
		$this->loadAdminMenu();
	}
	private function loadSiteInfo()
	{
		$siteinfo = DB::table('site_infos')->get();
		View::share('siteinfo', $siteinfo);
	}

	private function loadConfigValues()
	{
		$config_values = DB::table('config_values')->pluck('value', 'name');
		View::share('config_values', $config_values);
	}

	private function loadHeaderMenu()
	{
		$headermenu = Page::where('published', '1')->with('pages')
			->where('showinheader', '1')
			->whereNull('page_id')
			->whereNull('deleted_at')
			->orderBy('sortorder', 'ASC')
			->get();
		View::share('headermenu', $headermenu);
	}

	private function loadFooterMenu()
	{
		$footermenu = Page::where('published', '1')
			->where('showinfooter', '1')
			->whereNull('page_id')
			->whereNull('deleted_at')
			->orderBy('sortorder', 'ASC')
			->get();
		View::share('footermenu', $footermenu);
	}

	private function loadAdminMenu()
	{
		$adminmenu = Site::with(['sitePages' => function ($query) {
			$query->whereNull('deleted_at')
				->where('published', 1)
				->orderBy('sortorder', 'ASC');
		}])
			->whereNull('deleted_at')
			->orderBy('isdefault', 'DESC')
			->get();
		View::share('adminmenu', $adminmenu);
	}
}
