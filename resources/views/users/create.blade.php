<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>
    <form id="create-user-form">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br><br>
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile"><br><br>
        <input type="submit" value="Create User">
    </form>

    <script>
        const form = document.getElementById('create-user-form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            fetch('/api/users', {
                method: 'POST',
                body: formData,
            })
           .then(response => response.json())
           .then(data => console.log(data))
           .catch(error => console.error(error));
        });
    </script>
</body>
</html>