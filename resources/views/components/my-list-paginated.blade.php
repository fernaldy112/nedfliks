<div class="w-8/12 mx-auto">
    <div class="text-white lg:grid lg:grid-cols-2 gap-4">
        @foreach ($shows as $show)
            <a href="/show/{{ $show["id"] }}" class="flex items-center justify-center py-4 border-b border-gray-700">
                <img src="{{ asset($show['poster_url']) }}" alt="" class="aspect-2/3 w-4/12 sm:w-3/12">
                <p class="w-60 pl-4">{{ $show->title }}</p>
            </a>
        @endforeach
    </div>
    <div class="my-4">
        {{ $shows->links() }}
    </div>
</div>