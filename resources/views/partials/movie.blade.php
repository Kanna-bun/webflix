
        <div class="col">
            <a class="text-reset" href="/films/{{$movie->id}}">
                <img class="img-fluid" src="{{ $movie->cover }}" alt="{{ $movie->title }}">
            </a>
            <a class="text-reset" href="/films/{{ $movie->id }}">{{ $movie->title }}</a>
                <p>{{ $movie->released_at->translatedFormat('d F Y') }} | {{ $movie->category->name }} | {{ $movie->formatDuration() }}</p>
        </div>