<div class="card">
    <header class="card-header">
        <p class="card-header-title">departements</p>
        <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('departements.index') }}" @unless($slug) selected @endunless>Toutes catégories</option>
                @foreach($regions as $region)
                    <option value="{{ route('departements.region', $region->slug) }}" {{ $slug == $region->slug ? 'selected' : '' }}>{{ $region->name }}</option>
                @endforeach
            </select>
        </div>
        <a class="button is-info" href="{{ route('departements.create') }}">Créer un film</a>
    </header>