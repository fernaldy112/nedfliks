<x-header>
    <x-navigation/>
    @if ($show_jumbotron)
        <x-jumbotron/>
    @endif
    @foreach ($sections as $section)
        <x-horizontal-cards :title="$section['name']" :shows="$section['shows']"/>
    @endforeach
</x-header>