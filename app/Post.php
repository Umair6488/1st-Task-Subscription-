<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $primaryKey = 'id';


}
