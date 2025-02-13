<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include('db.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $student_id = $_POST['student_id'];
        $event = $_POST['event'];
        $city = $_POST['city'];
        $state = $_POST['state'];

        $sql = "INSERT INTO events (name, email, mobile, student_id, event, city, state) values (?, ?, ?, ?, ?, ?, ?);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssisss", $name, $email, $mobile, $student_id, $event, $city, $state);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    ?>
    <img class="image" src="static/background.jpg" alt="background">
    <div class="main">
        <div class="submitted">
            <h1 class="success-msg text-center alert-success">You have successfully registered to event : <?= $event ?></h1>
            <a class="submitted-btn btn btn-primary" href="index.php">Go to Home Page</a>
            <a class="submitted-btn btn btn-primary" href="registered_students.php">View Registered Students</a>
        </div>
    </div>
</body>
</html>