<div>
    <h1>Liste des Meows</h1>
    <a href="{{ route('meows.create')}}">Post a Meow</a>
    @foreach($meows as $meow)
        <div>
            <li> Autor : {{ $meow->users->name }}</li>
            <li> Date : {{ $meow->created_at }}</li>
            <li> Meow : {{ $meow->message }}</li><br>
        </div>
    @endforeach
</div>
