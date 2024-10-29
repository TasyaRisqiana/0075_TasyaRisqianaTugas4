<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f1f3f5; /* Warna abu-abu yang lebih lembut */
            font-family: Arial, sans-serif; /* Font default */
        }

        .container {
            max-width: 600px;
            margin-top: 60px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Bayangan halus */
            padding: 35px;
        }

        h2 {
            color: #1f3f5b; /* Biru tua yang lebih profesional */
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
        
        }

        .btn-primary:hover {
            background-color: #17324a; /* Biru tua yang lebih gelap saat hover */
            border-color: #17324a;
        }

        .form-label {
            color: #495057;
            font-weight: 600;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #6c757d;
            font-size: 0.9rem;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Edit User</h2>
        <form action="index.php?action=update&id=<?php echo $data['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($data['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
        <div class="footer">
            &copy; 0075 - All Rights Reserved
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
