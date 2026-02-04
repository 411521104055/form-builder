<!DOCTYPE html>
<html>
<head>
    <title>Form Builder</title>

    <style>
        body {
            background: #f2f4f8;
            font-family: Arial, sans-serif;
        }

        .form-box {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #0066cc;
        }
    </style>
</head>

<body>

<div class="form-box">
    <h2>Contact Form</h2>

    <form action="save.php" method="POST">
        Name:
        <input type="text" name="name" required>

        Email:
        <input type="email" name="email" required>

        Phone:
        <input type="text" name="phone">

        Message:
        <textarea name="message"></textarea>

        <button type="submit">Submit</button>
    </form>

    <a href="list.php">View Submitted Data</a>
</div>

</body>
</html>
