<x-layout>


    <h2>Currently Available ninjas</h2>
    {{ $ninjas->links() }}

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja['skill'] > 70">
                    <div>
                        <h3>{{ $ninja->name }}</h3>
                        <p>{{ $ninja->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

</x-layout>
