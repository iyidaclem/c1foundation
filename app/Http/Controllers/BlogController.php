<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function createBlog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "title" => "string|required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = new Post();
        $blog->user_id = auth()->user()->id;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');

        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');

            if ($pdfFile->getClientOriginalExtension() === 'pdf') {
                $filename = uniqid() . '.' . $pdfFile->getClientOriginalExtension();
                $pdfFile->storeAs('pdfs', $filename, 'public');
                $blog->pdf = $filename;
            } else {
                return redirect()->back()->with(['failure' => 'The uploaded file must be a PDF.']);
            }
        }

        $blog->save();
        return redirect()->back()->with("success", "Post created successfully");
    }

    public function updateBlog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "post_id" => "required",
            "title" => "string|required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = Post::find($request->post_id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');

        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');

            if ($pdfFile->getClientOriginalExtension() === 'pdf') {
                $filename = uniqid() . '.' . $pdfFile->getClientOriginalExtension();
                $pdfFile->storeAs('pdfs', $filename, 'public');
                $blog->pdf = $filename;
            } else {
                return redirect()->back()->with(['failure' => 'The uploaded file must be a PDF.']);
            }
        }

        $blog->save();
        return redirect()->back()->with("success", "Post updated successfully");
    }

    public function deleteBlog(Request $request)
    {
        if ($request->id) {
            $post = Post::find($request->id);
            if ($post) {
                $post->delete();
            }
        }

        return redirect()->back();
    }
    
}
