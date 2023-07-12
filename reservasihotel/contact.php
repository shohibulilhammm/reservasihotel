<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function showMessageAndRedirect() {
            var popup = document.getElementById("success-popup");
            popup.style.display = "block";
            setTimeout(function() {
                popup.style.display = "none";
                window.location.href = "index.php";
            }, 3000);
        }
    </script>
    <style>
        #success-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Admin</h1>

        <form action="index.php" method="post" onsubmit="showMessageAndRedirect()">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="pesan" class="form-label">Message</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" onclick="this.disabled=true; this.form.submit();">Send Message</button>

        </form>
    </div>

    <div id="success-popup">
        <h3>Success!</h3>
        <p>Your message has been successfully sent.</p>
        <p>You will be redirected to the homepage shortly...</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
