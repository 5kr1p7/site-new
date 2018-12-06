
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)

        <url>
            <loc>{{ url($post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

        <url>
            <loc>{{ url('/') }}</loc>
            <lastmod>{{ Carbon\Carbon::parse(date("Y-m-d H:i:s", $index))->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>

        <url>
            <loc>{{ url('/blog') }}</loc>
            <lastmod>{{ $post->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>hourly</changefreq>
            <priority>1.0</priority>
        </url>

        <url>
            <loc>{{ url('/contacts') }}</loc>
            <lastmod>{{ $contact->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
</urlset>
