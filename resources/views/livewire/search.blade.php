<div>
    <input
        wire:model="search"
        type="text"
        placeholder="Search..."
        spellcheck="false"
        class="w-full"
    >

    @if($results)
        <div class="mt-2">
            <h3 class="font-semibold text-sm">Cities</h3>
            <ul>
                @forelse($results['cities'] as $city)
                    <li>
                        <span>{{ $city->name }}</span>
                        <span class="text-xs text-gray-600">{{ $city->state_code }}</span>
                        <span class="text-xs text-gray-600 italic">{{ $city->country->name}}</span>
                    </li>
                @empty
                    <li class="text-xs text-gray-600 italic">No cities found.</li>
                @endforelse
            </ul>
        </div>
        <div class="mt-4">
            <h3 class="font-semibold text-sm">States</h3>
            <ul>
                @forelse($results['states'] as $state)
                    <li>
                        <span>{{ $state->name }}</span>
                        <span class="text-xs text-gray-600 italic">{{ $state->country->name}}</span>
                    </li>
                @empty
                    <li class="text-xs text-gray-600 italic">No states found.</li>
                @endforelse
            </ul>
        </div>
        <div class="mt-4">
            <h3 class="font-semibold text-sm">Countries</h3>
            <ul>
                @forelse($results['countries'] as $country)
                    <li>{{ $country->name }}</li>
                @empty
                    <li class="text-xs text-gray-600 italic">No countries found.</li>
                @endforelse
            </ul>
        </div>
    @endif

</div>
