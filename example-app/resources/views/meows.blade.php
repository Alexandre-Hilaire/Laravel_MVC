<div>
    <h1>Liste des Meows</h1>
    @foreach($meows as $meow)
        <div>
            <li>Autor : {{ $meow->users->name }}</li>
            <li> Date : {{ $meow->created_at }}</li>
            <li> Meow : {{ $meow->message }}</li><br>
        </div>
    @endforeach
</div>
