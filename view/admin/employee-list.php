<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 
    <header>
        <div class="menu-bar">
            <h1 class="logo">Employee Management</h1>
        </div>
    </header>
    <main>
        <div class="table-container">
            <h2>Employee List</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Date of Birth</th>
                        <th>Department ID</th>
                        <th>Account Status</th>
                        <th>Update Activation</th>
                        <th>Update Department</th>
                        <th>Delete Employee</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Row -->
                    <tr>
                        <td>john.doe@example.com</td>
                        <td>John Doe</td>
                        <td>********</td>
                        <td>1990-01-01</td>
                        <td>101</td>
                        <td>Activated</td>
                        <td>
                            <button class="btn activate-btn">Activate</button>   
                          
                            <button class="btn activate-btn">Disable</button>
                        </td>
                        <td>
                            <button class="btn update-dept-btn">Update</button>
                        </td>
                        <td>
                            <button class="btn delete-btn">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
