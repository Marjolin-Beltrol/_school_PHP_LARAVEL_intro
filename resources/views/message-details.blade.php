
<div>
    <h2>Message {{ $message->id }}</h2>
    <div>{{ $message->text }}</div>
    <p>Créé le: {{ $message->created_at }}</p>
    <p>Modifié le: {{ $message->updated_at }}</p>
    <p>user : <a href="{{ route('user.show', ['uuid' => $message->user->id]) }}">{{ $message->user->name }}</a></p>
    <p>user : <a href="{{ route('user.show', $message->user->id) }}">{{ $message->user->name }}</a></p>
</div>
<div>
    <a href="{{ route('messages') }}">Retour à la liste</a>
</div>
