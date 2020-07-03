<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hosting_category;

class HostingCategoryController extends Controller
{
    public function all()
    {
        return Hosting_category::all();
    }

    public function show($id)
    {
        return Hosting_category::find($id);
    }

    public function store(Request $request)
    {
        return Hosting_category::create($request->all());
    }

    public function update($id, Request $request)
    {
        $hosting = Hosting_category::find($id);
        $hosting->update($request->all());
        return $hosting;
    }

    public function delete($id)
    {
        $hosting = Hosting_category::find($id);
        $hosting->delete();
        return 204;
    }
}
