<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            display: flex;
            max-width: 800px;
            width: 100%;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .left {
            flex: 1;
            overflow: hidden;
        }

        .left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right {
            flex: 1;
            padding: 20px;
        }

        .form {
            max-width: 400px;
            margin: auto;
        }

        .form h2 {
            text-align: center;
            color: #333;
        }

        .form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
            }

            .left,
            .right {
                flex: 1;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div>
            <!-- Display login errors, if any -->
            <?php if (session()->getFlashdata('errors')) : ?>
                <div><?= session()->getFlashdata('errors') ?></div>
            <?php endif; ?>
        </div>
        <div class="left">
            <img src="<?= base_url('assets/images/background.jpg') ?>" alt="Background Image">
        </div>
        <div class="right">
            <div class="form">
                <h2>Login</h2>
                <form action="<?= base_url('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>