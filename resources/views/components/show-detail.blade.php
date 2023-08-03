<section class="w-full h-screen-70 flex items-center justify-center">
    <div class="flex aspect-2/1 w-1/2">
        <img src="{{ asset($show['poster_url']) }}" alt="" class="w-1/3">
        <div class="w-2/3 ms-4">
            <p class="text-white text-3xl font-semibold mb-2">{{ $show["title"] }}</p>
            <p class="text-white text-sm">Release year: {{ $show["release_year"] }}</p>
            <p class="text-white text-sm">Rating: {{ $show["maturity_rating"] }}</p>
            <p class="text-white text-sm">Duration: {{ $show["hours"] }}h {{ $show["minutes"] }}m</p>
            <p class="text-white text-sm">{{ $show["description"] }}</p>
            <p class="text-white text-sm"></p>
        </div>
    </div>
</section>