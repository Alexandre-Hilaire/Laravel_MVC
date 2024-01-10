<div>
    <h1>Meow numéro : {{ $meow->id }}</h1>
    <div>
        <span>
            Autor : {{ $meow->users->name }}<br>
            Date : {{ $meow->created_at }}<br>
            Meow : {{ $meow->message }}<br>
        </span>
    </div>
</div>
