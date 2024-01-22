<section class="w-full h-screen-70 flex justify-center lg:items-center">
    <div class="flex flex-col lg:flex-row aspect-2/1 w-1/2">
        <img src="{{ asset($show['poster_url']) }}" alt="" class="aspect-2/3 w-4/5 sm:w-1/2 lg:w-1/3 self-center">
        <div class="lg:w-2/3 lg:ms-4">
            <p class="text-white text-md sm:text-xl md:text-3xl font-semibold mb-2">{{ $show["title"] }}</p>
            <p class="text-white text-xs md:text-sm">Release year: {{ $show["release_year"] }}</p>
            <p class="text-white text-xs md:text-sm">Rating: {{ $show["maturity_rating"] }}</p>
            @if ($show["type"]=="MOVIE")
                <p class="text-white text-xs md:text-sm">Duration: {{ $show["hours"] }}h {{ $show["minutes"] }}m</p>
            @else
                <p class="text-white text-xs md:text-sm">Number of season: {{ $show["number_of_seasons"] }}</p>
            @endif
            <p class="text-white text-xs md:text-sm">{{ $show["description"] }}</p>
            <form action="/my_list/{{ $show["id"] }}" method="POST">
                @csrf
                @if ($isInMyList)
                    <button type="submit" class="w-44 text-netflix-red bg-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4">Remove from My List</button>
                @else
                    <button type="submit" class="w-44 text-white bg-netflix-red focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4">Add to My List</button>
                @endif
            </form>
        </div>
    </div>
</section>