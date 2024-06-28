<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <table id="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Mobile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="users-tbody">
            <!-- users will be displayed here -->
        </tbody>
    </table>

    <script>
        fetch('/api/users')
           .then(response => response.json())
           .then(data => {
                const tbody = document.getElementById('users-tbody');
                data.forEach(user => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.city}</td>
                        <td>${user.mobile}</td>
                        <td>
                            <button class="update-btn" data-id="${user.id}">Update</button>
                            <button class="delete-btn" data-id="${user.id}">Delete</button>
                        </td>
                    `;
                    tbody.appendChild(row);
                });
            })
          .catch(error => console.error(error));
          document.addEventListener('DOMContentLoaded', () => {
            const deleteBtns = document.querySelectorAll('.delete-btn');
            deleteBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
            const id = e.target.dataset.id;
            if (confirm('Are you sure you want to delete this user?')) {
                fetch('/api/users/' + id, {
                    method: 'DELETE',
                })
              .then(response => response.json())
              .then(data => console.log(data))
              .catch(error => console.error(error));
            }
        });
    });
});
    </script>
</body>
</html>