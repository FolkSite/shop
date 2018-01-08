<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class SiteSetting extends Model
{
    protected $table = 'site_settings';
    protected $fillable = [
        'name', 'var', 'value', 'description',
    ];
}
