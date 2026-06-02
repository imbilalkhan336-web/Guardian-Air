<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Admin: list all posts (published and drafts) for management.
     */
    public function index()
    {
        return inertia('Admin/BlogManager', [
            'posts' => Post::latest()->get(),
        ]);
    }

    /**
     * Create a new blog post.
     */
    public function store(Request $request)
    {
        $data = $this->validatePost($request);

        Post::create($data);

        return redirect()->route('admin.blog')->with('status', 'Post published.');
    }

    /**
     * Update an existing post.
     */
    public function update(Request $request, Post $post)
    {
        $data = $this->validatePost($request, $post);

        $post->update($data);

        return redirect()->route('admin.blog')->with('status', 'Post updated.');
    }

    /**
     * Delete a post.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.blog')->with('status', 'Post deleted.');
    }

    /**
     * Validate post input and resolve the slug + uploaded image.
     */
    private function validatePost(Request $request, ?Post $post = null): array
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'alpha_dash', Rule::unique('posts', 'slug')->ignore($post?->id)],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'body' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:500'],
            'image' => ['nullable', 'image', 'max:5120'], // uploaded file, up to 5 MB
            'is_published' => ['boolean'],
        ]);

        // Derive the slug from the title when none was supplied.
        if (empty($validated['slug'])) {
            $validated['slug'] = Post::uniqueSlug($validated['title'], $post?->id);
        }

        // If an image file was uploaded, store it and use its public URL.
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('posts', 'public');
            $validated['image_path'] = '/storage/'.$path;
        }

        unset($validated['image']);

        $validated['is_published'] = $request->boolean('is_published');

        return $validated;
    }
}
