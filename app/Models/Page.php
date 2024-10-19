<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
	use SoftDeletes;

	public $table = 'pages';

	public const PUBLISHED_RADIO = [
		'1' => 'Yes',
		'0' => 'No',
	];

	public const SHOWINHEADER_RADIO = [
		'0' => 'No',
		'1' => 'Yes',
	];

	public const SHOWINFOOTER_RADIO = [
		'0' => 'No',
		'1' => 'Yes',
	];

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $fillable = [
		'site_id',
		'commonname',
		'title',
		'slug',
		'sortorder',
		'is_page',
		'page_id',
		'showinheader',
		'showinfooter',
		'page_url',
		'published',
		'metatitle',
		'metadescription',
		'metakeywords',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected function serializeDate(DateTimeInterface $date)
	{
		return $date->format('Y-m-d H:i:s');
	}

	public function pageSections()
	{
		return $this->hasMany(Section::class, 'page_id', 'id');
	}

	public function pages()
	{
		return $this->hasMany(self::class, 'page_id', 'id');
	}

	public function site()
	{
		return $this->belongsTo(Site::class, 'site_id');
	}

	public function page()
	{
		return $this->belongsTo(self::class, 'page_id');
	}

	public function getOtherLangPages()
	{
		$otherlangpages = Page::where([['commonname', '=', $this->commonname], ['published', '=', '1'], ['site_id', '<>', $this->site_id]])->get();
		return $otherlangpages;
	}
	public function OtherLanguagePageLink()
	{
		if (!$this->is_page)
			return 'javascript:void(0);';
		$site = $this->site()->first(); // Retrieve the related site
		if ($site) {
			if ($this->page_url)
				return $this->page_url;
			return $site->language_code . '/' . $this->slug;
		} else {
			return 'javascript:void(0);';
		}
	}

	public function PageLink()
	{
		if (!$this->is_page)
			return 'javascript:void(0);';
		$site = $this->site()->first(); // Retrieve the related site
		if ($site) {
			if ($this->page_url)
				return $this->page_url;
			return $this->slug;
		} else {
			return 'javascript:void(0);';
		}
	}
	public function getPageOtherLangsLinks()
	{
		$otherlangpages = $this->getOtherLangPages();
		$otherlangs = [];
		foreach ($otherlangpages as $p) {
			$otherlangs[$p->site->title] = $p->OtherLanguagePageLink();
		}
		return $otherlangs;
	}
}
