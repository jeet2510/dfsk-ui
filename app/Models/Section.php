<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use SoftDeletes;

    public $table = 'sections';

    public const PUBLISHED_RADIO = [
        '1' => 'Yes',
        '0' => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'sortorder',
        'page_id',
        'template_id',
        'section_id',
        'published',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function sectionSections()
    {
        return $this->hasMany(self::class, 'section_id', 'id');
    }
		public function Values()
    {
        return $this->hasMany(Value::class, 'section_id', 'id');
    }
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id');
    }

    public function section()
    {
        return $this->belongsTo(self::class, 'section_id');
    }
}
