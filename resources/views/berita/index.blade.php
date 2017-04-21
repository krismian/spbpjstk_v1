{{ $berita->links() }}
@foreach($berita as $news)

    <h1><a href="/berita/{{ $news->id }}">{{ $news->title }}</a> </h1>
    <p style="text-align: justify">{!! str_limit(strip_tags($news->content), 500) !!}</p>
    <a href="/berita/{{ $news->id }}/#komentar">

        <button class="btn btn-primary" type="button">
            Komentar <span class="badge">4</span>
        </button>
        <hr>
        @endforeach
    </a>

{{ $berita->links() }}