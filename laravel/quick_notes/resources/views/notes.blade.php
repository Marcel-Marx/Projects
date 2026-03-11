<!DOCTYPE html>
<html>
<head>
    <title>My Quick Notes</title>
</head>
<body style="font-family: sans-serif; padding: 20px;">

    <h1>My Quick Notes</h1>

    <!-- Form to add Note -->
    <form action="/add-note" method="POST">
        @csrf
        <input type="text" name="content" placeholder="Type a note..." required>
        <button type="submit">Save Note</button>
    </form>

    <hr>

    <!-- Loop through Notes and display them -->
    <ul>
        @foreach($notes as $note)
            <li>{{ $note->content }}</li>
            <form action="/delete-note/{{ $note->id }}" method="POST" style="display:inline">
                @csrf
                <button type="submit">Delete</button>
        @endforeach
    </ul>

</body>
</html>
