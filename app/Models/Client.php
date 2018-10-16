<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class Client extends Model
{
    /**
     * @var array elements you can mass fill
     */
    protected $fillable = [
        'name',
        'domain'
    ];
}
