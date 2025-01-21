<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{now()->toAtomString()}}</lastmod>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('a-propos') }}</loc>
        <lastmod>{{now()->toAtomString()}}</lastmod>
        <priority>1.0</priority>
    </url>

    @foreach ($articles as $article)
        <url>
            <loc>{{ url('article/' . $article->slug) }}</loc>
            <lastmod>{{ $article->updated_at->toAtomString() }}</lastmod>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($categories as $category)
        <url>
            <loc>{{ url(str_replace(' ', '-', $category->name)) }}</loc>
            <lastmod>2025-01-21T17:22:49+00:00</lastmod>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
