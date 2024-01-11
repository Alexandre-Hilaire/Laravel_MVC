<div>
    <h1>Meow numéro : {{ $meow->id }}</h1>
    <div>
        <span>
            Autor : {{ $meow->users->name }}<br>
            Date : {{ $meow->created_at }}<br>
            Meow : {{ $meow->message }}<br>
        </span>
        <form method="POST" action="{{ route('meows.destroy', $meow) }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce meow ?')">
        @csrf
        @method('DELETE')

        <button type="submit">Supprimer</button>
        </form>
    </div>
</div>
