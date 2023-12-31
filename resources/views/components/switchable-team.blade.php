@props(['team', 'component' => 'dropdown-link'])


<form method="POST" class="" action="{{ route('current-team.update') }}" x-data>
    @method('PUT')
    @csrf

    <!-- Hidden Team ID -->
    <input type="hidden" name="team_id" value="{{ $team->id }}">

    <a class="dropdown-item" href="#" x-on:click.prevent="$root.submit();">
        <div class="d-flex align-items-center">
            @if (Auth::user()->isCurrentTeam($team))
                <svg class="me-2" style="height: 1.25rem;width:1.25rem" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            @endif

            <div class="truncate">{{ $team->name }}</div>
        </div>
    </a>
</form>

