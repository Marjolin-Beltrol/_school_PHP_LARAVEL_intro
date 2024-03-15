
<div>
    <h2>Message {{ $message->id }}</h2>
    <div>{{ $message->text }}</div>
    <p>Créé le: {{ $message->created_at }}</p>
    <p>Modifié le: {{ $message->updated_at }}</p>
    <p>user :  {{ $message->user->name }} </p>
</div>
<div>
    <a href="{{ route('messages') }}">Retour à la liste</a>
</div>
