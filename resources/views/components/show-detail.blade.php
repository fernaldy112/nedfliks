<section class="w-full h-screen-70 flex items-center justify-center">
    <div class="flex flex-col lg:flex-row aspect-2/1 w-1/2">
        <img src="{{ asset($show['poster_url']) }}" alt="" class="aspect-2/3 w-4/5 sm:w-1/2 lg:w-1/3 self-center">
        <div class="lg:w-2/3 lg:ms-4 border">
            <p class="text-white text-md sm:text-xl md:text-3xl font-semibold mb-2">{{ $show["title"] }}</p>
            <p class="text-white text-xs md:text-sm">Release year: {{ $show["release_year"] }}</p>
            <p class="text-white text-xs md:text-sm">Rating: {{ $show["maturity_rating"] }}</p>
            <p class="text-white text-xs md:text-sm">Duration: {{ $show["hours"] }}h {{ $show["minutes"] }}m</p>
            <p class="text-white text-xs md:text-sm">{{ $show["description"] }}</p>
            <p class="text-white text-xs md:text-sm"></p>
        </div>
    </div>
</section>