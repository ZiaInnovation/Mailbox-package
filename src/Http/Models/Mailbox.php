<?php

namespace Ziainnovation\Mailbox\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Ziainnovation\Mailbox\Http\Models\attachment;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mailbox extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $table = 'emails';

    public function attachment()
    {
        return $this->belongsTo(attachment::class);
    }
}
