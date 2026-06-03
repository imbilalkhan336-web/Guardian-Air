<?php

use App\Http\Controllers\ContentBlockController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubmissionController;
use App\Models\ContentBlock;
use App\Models\Post;
use App\Models\Review;
use App\Models\Tag;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

$getReviews = fn () => Review::published()->latest()->get();

Route::get('/', function () use ($getReviews) {
    return Inertia::render('Home', ['reviews' => $getReviews()]);
});

Route::get('/about', function () use ($getReviews) {
    return Inertia::render('About', ['reviews' => $getReviews()]);
})->name('about');

Route::get('/services', function () use ($getReviews) {
    return Inertia::render('Services', ['reviews' => $getReviews()]);
})->name('services');

Route::get('/test', function () use ($getReviews) {
    return Inertia::render('Test', ['reviews' => $getReviews()]);
})->name('test');

Route::get('/contact', function () use ($getReviews) {
    return Inertia::render('Contact', ['reviews' => $getReviews()]);
})->name('contact');

Route::post('/submissions', [SubmissionController::class, 'store'])->name('submissions.store');

Route::get('/heating', function () use ($getReviews) {
    return Inertia::render('Heating', [
        'blocks' => ContentBlock::forPage('heating')->with('tags')->get(),
        'tags' => Tag::orderBy('name')->get(),
        'reviews' => $getReviews(),
    ]);
})->name('heating');

Route::get('/cooling', function () use ($getReviews) {
    return Inertia::render('Cooling', [
        'blocks' => ContentBlock::forPage('cooling')->with('tags')->get(),
        'tags' => Tag::orderBy('name')->get(),
        'reviews' => $getReviews(),
    ]);
})->name('cooling');

Route::get('/plumbing', function () use ($getReviews) {
    return Inertia::render('Plumbing', [
        'blocks' => ContentBlock::forPage('plumbing')->with('tags')->get(),
        'tags' => Tag::orderBy('name')->get(),
        'reviews' => $getReviews(),
    ]);
})->name('plumbing');

Route::get('/indoor-air-quality', function () use ($getReviews) {
    return Inertia::render('AirQuality', [
        'blocks' => ContentBlock::forPage('indoor-air-quality')->with('tags')->get(),
        'tags' => Tag::orderBy('name')->get(),
        'reviews' => $getReviews(),
    ]);
})->name('air-quality');

Route::get('/drains', function () use ($getReviews) {
    return Inertia::render('Drains', [
        'blocks' => ContentBlock::forPage('drains')->with('tags')->get(),
        'tags' => Tag::orderBy('name')->get(),
        'reviews' => $getReviews(),
    ]);
})->name('drains');

Route::get('/commercial', function () use ($getReviews) {
    return Inertia::render('Commercial', [
        'blocks' => ContentBlock::forPage('commercial')->with('tags')->get(),
        'tags' => Tag::orderBy('name')->get(),
        'reviews' => $getReviews(),
    ]);
})->name('commercial');

Route::get('/blog', function () {
    return Inertia::render('Blog', [
        'posts' => Post::published()->with('tags')->get(),
    ]);
})->name('blog');

Route::get('/blog/{post:slug}', function (Post $post) {
    abort_unless($post->is_published, 404);

    return Inertia::render('BlogShow', [
        'post' => $post->load('tags'),
        'related' => Post::published()->where('id', '!=', $post->id)->with('tags')->take(3)->get(),
    ]);
})->name('blog.show');

Route::get('/service-areas/{area}', function (string $area) {
    $areas = [
        'monmouth-county' => [
            'slug' => 'monmouth-county',
            'name' => 'Monmouth County',
            'title' => 'Monmouth County HVAC Services',
            'description' => 'Trusted heating, cooling, and plumbing service across Monmouth County, NJ — licensed technicians, upfront pricing, and same-day response.',
            'towns' => ['Freehold', 'Howell', 'Marlboro', 'Manalapan', 'Middletown', 'Red Bank', 'Wall', 'Holmdel'],
        ],
        'middlesex-county' => [
            'slug' => 'middlesex-county',
            'name' => 'Middlesex County',
            'title' => 'Middlesex County HVAC Services',
            'description' => 'Full-service HVAC, plumbing, and indoor air quality solutions for homes and businesses throughout Middlesex County, NJ.',
            'towns' => ['Edison', 'Old Bridge', 'East Brunswick', 'Sayreville', 'Woodbridge', 'Piscataway', 'Monroe', 'South Brunswick'],
        ],
        'ocean-county' => [
            'slug' => 'ocean-county',
            'name' => 'Ocean County, NJ',
            'title' => 'Ocean County HVAC Services',
            'description' => 'Dependable heating and air conditioning service across Ocean County, NJ — from the shore to inland towns, we keep your home comfortable year-round.',
            'towns' => ['Toms River', 'Brick', 'Jackson', 'Lakewood', 'Manchester', 'Point Pleasant', 'Lacey', 'Berkeley'],
        ],
    ];

    abort_unless(isset($areas[$area]), 404);

    return Inertia::render('ServiceArea', ['area' => $areas[$area], 'reviews' => $getReviews()]);
})->name('service-area');

Route::get('/resources', function () use ($getReviews) {
    return Inertia::render('Resources', ['reviews' => $getReviews()]);
})->name('resources');

Route::get('/offers', function () use ($getReviews) {
    return Inertia::render('Offers', ['reviews' => $getReviews()]);
})->name('offers');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Private pages — noindex for search engines
Route::middleware(function ($request, $next) {
    return $next($request)->header('X-Robots-Tag', 'noindex, nofollow');
})->group(function () {

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
});

// Admin-only content management
Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('/content-blocks', [ContentBlockController::class, 'store'])->name('content-blocks.store');
    Route::put('/content-blocks/{contentBlock}', [ContentBlockController::class, 'update'])->name('content-blocks.update');
    Route::delete('/content-blocks/{contentBlock}', [ContentBlockController::class, 'destroy'])->name('content-blocks.destroy');
    Route::post('/content-blocks/reorder', [ContentBlockController::class, 'reorder'])->name('content-blocks.reorder');

    // Blog posts
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::put('/posts/{post:id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post:id}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// Admin panel
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        $pages = collect(ContentBlock::PAGES)->map(fn ($label, $slug) => [
            'slug' => $slug,
            'label' => $label,
            'count' => ContentBlock::where('page', $slug)->count(),
        ])->values();

        return Inertia::render('Admin/Dashboard', ['pages' => $pages]);
    })->name('dashboard');

    Route::get('/pages/{page}', function (string $page) {
        abort_unless(array_key_exists($page, ContentBlock::PAGES), 404);

        return Inertia::render('Admin/PageEditor', [
            'page' => $page,
            'label' => ContentBlock::PAGES[$page],
            'blocks' => ContentBlock::forPage($page)->with('tags')->get(),
            'tags' => Tag::orderBy('name')->get(),
        ]);
    })->name('pages.edit');

    // Blog manager — list, create, edit, and delete posts.
    Route::get('/blog', [PostController::class, 'index'])->name('blog');
    Route::get('/blog/create', [PostController::class, 'create'])->name('blog.create');
    Route::get('/blog/{post:id}/edit', [PostController::class, 'edit'])->name('blog.edit');

    // FAQ manager — lists all FAQ blocks for a page with add/edit/delete.
    Route::get('/pages/{page}/faqs', function (string $page) {
        abort_unless(array_key_exists($page, ContentBlock::PAGES), 404);

        return Inertia::render('Admin/FaqManager', [
            'page' => $page,
            'label' => ContentBlock::PAGES[$page],
            'faqs' => ContentBlock::forPage($page)->where('type', 'faq')->get(),
        ]);
    })->name('faqs');

    // Dedicated full-page editor for a single block (section / faq / image).
    Route::get('/pages/{page}/blocks/{contentBlock}/edit', function (string $page, ContentBlock $contentBlock) {
        abort_unless(array_key_exists($page, ContentBlock::PAGES), 404);

        return Inertia::render('Admin/BlockEditor', [
            'page' => $page,
            'label' => ContentBlock::PAGES[$page],
            'block' => $contentBlock->load('tags'),
            'tags' => Tag::orderBy('name')->get(),
        ]);
    })->name('blocks.edit');

    // Submissions manager
    Route::get('/submissions', [SubmissionController::class, 'index'])->name('submissions');
    Route::post('/submissions/{submission}/read', [SubmissionController::class, 'markAsRead'])->name('submissions.read');
    Route::post('/submissions/{submission}/unread', [SubmissionController::class, 'markAsUnread'])->name('submissions.unread');
    Route::delete('/submissions/{submission}', [SubmissionController::class, 'destroy'])->name('submissions.destroy');
});

// Review manager — accessible to all authenticated users (not just admins)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
});

require __DIR__.'/auth.php';
