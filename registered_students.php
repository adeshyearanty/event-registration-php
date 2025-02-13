<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Candidates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="registered.css">
</head>
<body>
    <?php
        include('db.php');
        $sql = "SELECT * FROM events;";
        $res = $conn->query($sql);
    ?>

    <div class="container mt-4">
        <h1 class="text-center text-success">Registered Students</h1>
        <div class="mb-3">
            <label for="eventFilter" class="form-label">Filter by Event:</label>
            <select id="eventFilter" class="form-select">
                <option value="">All Events</option>
                <option value="CodeIgnite 2025">CodeIgnite 2025</option>
                <option value="Web Wizards Workshop">Web Wizards Workshop</option>
                <option value="Hack the Freshers">Hack the Freshers</option>
            </select>
        </div>

        <table id="student_table" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Event</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Fees</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $res->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?= $row['id'] ?></th>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['mobile'] ?></td>
                        <td><?= $row['event'] ?></td>
                        <td><?= $row['student_id'] ?></td>
                        <td><?= $row['fees'] ?></td>
                        <td><?= $row['city'] ?></td>
                        <td><?= $row['state'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="view-btn btn btn-primary" href="index.php">Go to Home Page</a>
        <a class="view-btn btn btn-primary" href="register.php">Register Another Event</a>
    </div>

    <script>
        $(document).ready(function () {
            let table = $('#student_table').DataTable();
            $('#eventFilter').on('change', function () {
                let selectedEvent = $(this).val();
                table.column(4).search(selectedEvent).draw();
            });
        });
    </script>
</body>
</html>
