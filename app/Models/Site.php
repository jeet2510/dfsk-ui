<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use SoftDeletes;

    public $table = 'sites';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'language_code',
        'url',
        'isdefault',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function sitePages()
    {
        return $this->hasMany(Page::class, 'site_id', 'id');
    }

    public function siteSiteInfos()
    {
        return $this->hasMany(SiteInfo::class, 'site_id', 'id');
    }

    public function siteDropdowns()
    {
        return $this->hasMany(Dropdown::class, 'site_id', 'id');
    }

    public function siteConfigValues()
    {
        return $this->hasMany(ConfigValue::class, 'site_id', 'id');
    }
}
