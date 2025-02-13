<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="image" src="static/background.jpg" alt="background">
    <div class="main">
        <div class="form">
            <h1 class="text-center">Registration Form</h1>
            <form action="submit_form.php" id="registrationForm" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input name="email" type="email" class="form-control" placeholder="Eg. name@example.com" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Mobile Number</label>
                    <input name="mobile" type="number" class="form-control" placeholder="Eg. 9999999999" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Student Id</label>
                    <input name="student_id" type="number" class="form-control" placeholder="Eg. 15" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect">Select Event</label>
                    <select name="event" class="form-control" required>
                        <option class="options" value="" selected disabled>Select an event</option>
                        <option class="options">CodeIgnite 2025</option>
                        <option class="options">Web Wizards Workshop</option>
                        <option class="options">Hack the Freshers</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Fees</label>
                    <input name="fees" type="number" class="form-control" readonly value="100" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">City</label>
                    <input name="city" type="text" class="form-control" placeholder="Eg. Hyderabad" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">State</label>
                    <input name="state" type="text" class="form-control" placeholder="Eg. Telangana" required>
                </div>
                <button type="submit" class="form-btn btn btn-success">Register</button>
                <a href="index.php" class="form-btn btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>
    <script>
        document.getElementById("registrationForm").addEventListener("submit", function (event) {
            event.preventDefault();
            Swal.fire({
                title: "Form Submitted!",
                text: "You have been successfully registered.",
                icon: "success"
            }).then(() => {
                event.target.submit();
            });
        });
    </script>
</body>
</html>
