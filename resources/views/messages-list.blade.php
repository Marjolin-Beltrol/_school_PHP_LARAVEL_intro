<div>
    <h2>meows</h2>
    <ul>
        @foreach($messages as $message)
{{--            <li>{{ $message->text }}</li>--}}
            <li><a href="{{ route('message.show', ['id' => $message->id]) }}">{{ $message->text }}</a></li>
        @endforeach
    </ul>
</div>
