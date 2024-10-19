<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dropdown extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'dropdowns';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const GROUP_SELECT = [
        'preferred_center' => 'Preferred Center',
        'country'          => 'Country',
    ];

    protected $fillable = [
        'site_id',
        'group',
        'sortorder',
        'title',
        'value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }
}
