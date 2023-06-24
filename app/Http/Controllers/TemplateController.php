<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    // post method
    public function postTemplate(Request $request)
    {
        $name = $request->template_name;
        $page_details = $request->page_details;
        $category = $request->template_category;
        $directory = $request->directory;
        $index_file = $request->directory . '/index.html';
        $thumbnail = $request->thumbnail;
        $template = \App\Models\Template::create([
            'name' => $name,
            'page_details' => $page_details,
            'category' => $category,
            'directory' => $directory,
            'index_file' => $index_file,
            'thumbnail' => $thumbnail
        ]);
        return response()->json($template);
    }
    // get method
    public function getTemplate(){
        $templates = \App\Models\Template::all();
        return response()->json($templates);
    }
    public function getTemplateById($id){
        $template = \App\Models\Template::where('id', $id)->first();
        return response()->json($template);
    }
}
