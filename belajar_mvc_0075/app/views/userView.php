<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BELAJAR MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
    
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f5f7fa;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 900px;
            margin-top: 50px;
        }

        .header-title h1 {
            color: #495057;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table {
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead {
            background-color: #495057;
            color: #ffffff;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #f0f4f8;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-sm {
            font-size: 14px;
            padding: 6px 12px;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #495057;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header-title">
            <h1>User Details</h1>
            <a href="index.php?action=add" class="btn btn-primary">Add User</a>
        </div>
        
        <div class="card p-4 mt-3">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($user as $data): ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><?php echo htmlspecialchars($data['name']); ?></td>
                                <td><?php echo htmlspecialchars($data['email']); ?></td>
                                <td>
                                    <a href="index.php?action=view&id=<?php echo $data['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                                    <a href="index.php?action=edit&id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?action=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="footer">
            &copy; 0075 - All Rights Reserved
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
