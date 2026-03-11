<!DOCTYPE html>
<html>
<head>
    <title>My Contact Book</title>
</head>
<body style="font-family: sans-serif; padding: 20px;">

    <h1>My Contact Book</h1>

    <!-- Form to add a new contact -->
    <form action="/add-contact" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="phonenumber" placeholder="Phone Number" required>
        <button type="submit">Save Contact</button>
    </form>

    <hr>

    <!-- Display the list of contacts -->
    <h3>Saved Contacts:</h3>
    <ul>
        @foreach($contacts as $contact)
            <li>
                {{ $contact->name }}
                {{ $contact->phonenumber }}
            </li>
                <!-- Delete Button -->
                <form action="/delete-contact/{{ $contact->id }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
        @endforeach
    </ul>

</body>
</html>
