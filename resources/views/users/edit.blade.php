<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form id="edit-user-form">
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $user->id }}">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}"><br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{ $user->city }}"><br><br>
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" value="{{ $user->mobile }}"><br><br>
        <input type="submit" value="Update User">
    </form>

    <script>
        const form = document.getElementById('edit-user-form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            fetch('/api/users/' + formData.get('id'), {
                method: 'PUT',
                body: formData,
            })
          .then(response => response.json())
          .then(data => console.log(data))
          .catch(error => console.error(error));
        });
    </script>
</body>
</html>