<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::paginate();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        $isUpdate = true;
        $title = __('Create');

        return view('tags.form', compact('isUpdate', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);

        $tag = Tag::create(['name' => $request->name]);

        return redirect(route('tags.index'))->with('message', "Tag $tag->name successfully created");
    }

    public function edit(Tag $tag)
    {
        $isUpdate = true;
        $title = __('Update');

        return view('tags.form', compact('isUpdate', 'title', 'tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate(['name' => 'required']);

        $tag->update(['name' => $request->name]);

        return redirect(route('tags.edit', $tag))->with('message', "Tag successfully updated");
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect(route('tags.index'))->with('message', "Tag successfully deleted");
    }
}
