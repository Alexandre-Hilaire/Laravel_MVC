<h1>Modifier un meow</h1>

<form method="POST" action="{{ route('meows.update', $meow) }}">
@csrf
@method('PUT')

<label for="message"></label>
<textarea name="message">{{ $meow->message }}</textarea>
@error("message")
<div>{{ $message }}</div>
@enderror
<button type="submit">Envoyer</button>

</form>