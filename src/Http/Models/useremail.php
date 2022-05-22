<?php

namespace Ziainnovation\Mailbox\Http\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class useremail extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $table = 'usersemail';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
