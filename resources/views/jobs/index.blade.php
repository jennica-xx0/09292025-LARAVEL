<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job->id }}" class="block px-6 py-8 border border-gray-200 rounded-lg hover:shadow">
                <div class="font-bold text-blue-600 text-sm">
                    {{ $job->employer->name ?? 'No Employer' }}
                </div>

                <div>
                    <strong>{{ $job->title }}</strong> — Pays {{ $job->salary }}
                </div>
            </a>
        @endforeach

        <div class="mt-6">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
