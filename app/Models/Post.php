<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kolossal\Multiplex\HasMeta;
use Kolossal\Multiplex\MetaAttribute;

class Post extends Model
{
    use HasMeta, HasFactory, SoftDeletes;

    protected $table = 'posts';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'appendable_test' => MetaAttribute::class,
    ];

    public function setTestHasMutatorMeta($value)
    {
        return "Test {$value}.";
    }

    public function getTestHasAccessorMeta($value)
    {
        return $value ? "Test {$value}." : 'Empty';
    }
}
