<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resources\Groups\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function get(Request $request)
    {
        $groups = Group::active()->orderBy('name');

        return GroupResource::collection($groups);
    }
}
