<x-layout>


    <h2>Currently Available Tools</h2>

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <p>
                    {{ $ninja['name'] }}

                </p>
                <a href="/tools/{{ $ninja['id'] }}">
                    View Details
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
