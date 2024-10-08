<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        Este trabalho paga um salário de {{ $job['salary'] }} anual.
    </p>
</x-layout>
