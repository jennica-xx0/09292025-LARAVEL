<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-6 py-8 border boder-gray-200 rounded-lg ">
            <div class="font-bold text-blue-600 text-sm">{{ $job->employer->name }}</div>

            <div>
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </div>
        </a>
        @endforeach

        <div>
           {{ $jobs->links() }}
        </div>
    </div>
</x-layout>