<h1>Créer un meow</h1>

<form method="POST" action="{{ route('meows.store') }}">
@csrf
@method('POST')

<label for="message"></label>
<textarea type="textarea" name="message" placeholder="Write your Meow..."></textarea>
@error("message")
<div>{{ $message }}</div>
@enderror
<button type="submit">Envoyer</button>
</form>