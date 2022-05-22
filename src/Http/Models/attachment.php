<?php

namespace Ziainnovation\Mailbox\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Ziainnovation\Mailbox\Http\Models\Mailbox;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class attachment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function email()
    {
        return $this->hasMany(Mailbox::class);
    }
}
