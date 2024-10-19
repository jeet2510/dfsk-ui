<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use App\Models\SiteInfo;
use App\Models\Site;
use App\Models\Value;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	//     $this->middleware('auth');
	// }

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('website.home');
	}
	public function getSiteInfo()
	{
		$siteinfo = SiteInfo::first();
		return response()->json($siteinfo);
	}
	public function getHeaderMenu()
	{
		$menus = Page::where(['showinheader' => '1'])->orderBy('sortorder', 'asc')->get();
		return response()->json($menus);
	}
	public function getFooterMenu()
	{
		$menus = Page::where(['showinfooter' => '1'])->orderBy('sortorder', 'asc')->get();
		return response()->json($menus);
	}
	public function getPageSections($slug = "home")
	{

		$lang = app()->getLocale();
		// update here for v2: Get the site that the language $lang and is active.
		$activesite = Site::where('language_code', $lang)->first();
		if (!$activesite)
			$activesite = Site::where('isdefault', 1)->first();
		if (!$activesite) {
			abort(404);
		}
		$site_id = $activesite->id;
		// I am getting the newest page that has the same slug and is published, including the sections
		// Get the published page having this slug 
		if ($slug == "" || !$slug)
			$slug = "home";
		$page = Page::where([['slug', '=', $slug], ['published', '=', '1'], ['site_id', '=', $site_id]])
			->with(['pageSections' => function ($query) {
				$query->where([['published', '=', '1'], ['section_id', '=', null]])
					->orderBy('sortorder', 'asc')
					->with('template')
					->with('values')
					->with(['sectionSections' => function ($query) {
						$query->where([['published', '=', '1']])
							->with('values')
							->orderBy('sortorder', 'asc')
							->with(['sectionSections' => function ($query) {
								$query->where([['published', '=', '1']])->with('values')
									->orderBy('sortorder', 'asc');
							}]);
					}]);
			}])
			->orderBy('sortorder', 'asc')
			->first();

		if (!$page) {
			abort(404);
		}
		// I need to get the page link in all other languages available so I can replace it in the header
		// i'll get it using the commonname
		$otherlangpageslinks = $page->getPageOtherLangsLinks();
		return view('website.cms-main', compact('page', 'otherlangpageslinks'));
	}
}
