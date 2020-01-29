<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ $now }}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach($product_category as $post)
        <url>
            <loc>{{ url('/').'/'.$post->slug }}</loc>
            <lastmod>{{ $post->created_at->toAtomString() }}</lastmod>
            <changefreq>Daily</changefreq>
            <priority>0.8</priority>
        </url>
        @if($loop->last)
            <url>
                <loc>{{ url('/').'/is-ilanlari' }}</loc>
                <lastmod>{{ $post->created_at->toAtomString() }}</lastmod>
                <changefreq>Daily</changefreq>
                <priority>0.8</priority>
            </url>
        @endif
    @endforeach
    @foreach($product as $post)
        <url>
            <loc>{{ url('/').'/'.$post->category_slug.'/'.$post->slug }}</loc>
            <lastmod>{{ $post->created_at->toAtomString() }}</lastmod>
            <changefreq>Daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
