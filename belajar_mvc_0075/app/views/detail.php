<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f4f8; /* Warna latar belakang yang lebih netral */
            font-family: 'Roboto', sans-serif;
            color: #4a4a4a; /* Warna teks yang lebih lembut */
        }

        .container {
            max-width: 600px;
            margin-top: 60px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Bayangan lebih lembut */
            padding: 40px;
        }

        .header-title {
            color: #2c3e50; /* Warna teks header */
            font-weight: 600;
            margin-bottom: 25px;
            text-align: center;
            font-size: 1.75rem;
        }

        .card {
            background-color: #f9fafc; /* Warna latar belakang kartu */
            border: none;
            border-radius: 10px;
            padding: 30px;
        }

        .card h5 {
            color: #333;
            font-weight: 500;
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        .btn-custom:hover {
            background-color: #16a085; /* Warna hijau lebih gelap saat hover */
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #7f8c8d;
            font-weight: 500;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header-title">User Details</div>
        <div class="card">
            <div class="card-body">
                <h5>ID: <?php echo htmlspecialchars($data['id']); ?></h5>
                <h5>Name: <?php echo htmlspecialchars($data['name']); ?></h5>
                <h5>Email: <?php echo htmlspecialchars($data['email']); ?></h5>
                <div class="d-flex justify-content-center mt-4">
                    <a href="/belajar_mvc_0075" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
        <div class="footer">
            &copy; 0075 - All Rights Reserved
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
