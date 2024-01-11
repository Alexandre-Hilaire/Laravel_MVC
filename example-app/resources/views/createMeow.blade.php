<h1>Créer un meow</h1>

<form method="POST" action="{{ route('meows.store') }}">
@csrf
@method('POST')

<label for="message"></label>
<input type="textarea" name="message" placeholder="Write your Meow...">
<button type="submit">Envoyer</button>
</form>