<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}</strong> | Salary: R${{ $job['salary'] / 100 }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
