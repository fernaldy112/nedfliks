<div class="">
    <h2 class="text-white  px-5 text-4xl font-bold mt-12">{{ $title }}</h2>
    <section class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory gap-5 px-5 py-5 no-scrollbar xl:grid 4xl:grid-cols-8 3xl:grid-cols-7 2.5xl:grid-cols-6 1.5xl:grid-cols-5 xl:grid-cols-4">
        @foreach ($shows as $show)
            <div class="rounded flex-none w-64 h-96 snap-center snap-always shadow-lg">
                <a href="#" class="block bg-center bg-no-repeat bg-cover bg-blend-multiply w-full h-full" style="background-image: url('{{ $show['poster_url'] }}');"></a>
            </div>
        @endforeach
    </section>
</div>

