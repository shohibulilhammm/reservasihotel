<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function redirect() {
            window.location.href = "index.php";
        }
        setTimeout(redirect, 3000);
        header("Location: success_popup.php");
        exit();

    </script>
</head>
<body>
    <div class="container">
        <div class="alert alert-success mt-5" role="alert">
            <h4 class="alert-heading">Message Sent!</h4>
            <p>Your message has been successfully sent.</p>
            <hr>
            <p class="mb-0">You will be redirected to the homepage in a few seconds...</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
