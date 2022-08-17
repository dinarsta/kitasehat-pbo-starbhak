<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\catatan;
use App\Http\Resources\CatatanResource;

class CatatanController extends Controller
{
    public function index()
    {
        //get posts
        $posts = catatan::latest()->paginate(5);

        //return collection of posts as a resource
        return new CatatanResource(true, 'List Data Catatan', $posts);
    }
}