<div>
    <h2>meows</h2>
    <ul>
        @foreach($messages as $message)
            <li>{{ $message->text }}</li>
        @endforeach
    </ul>
</div>
