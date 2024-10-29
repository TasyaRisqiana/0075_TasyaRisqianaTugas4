<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f3f4f6; /* Warna latar yang lembut */
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
        }

        h2 {
            font-size: 1.8rem;
            color: #495057; /* Warna netral */
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-label {
            color: #343a40;
            font-weight: 500;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            width: 100%;
            font-weight: 500;
            padding: 10px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .footer {
            text-align: center;
            color: #6c757d;
            margin-top: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add New User</h2>
        <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
        <div class="footer">
            &copy; 0075 - All Rights Reserved
        </div>
    </div>
</body>

</html>
