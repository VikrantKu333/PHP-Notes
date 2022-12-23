<!-- PHP CRUD Operations in MySQL - (Create, Read, Update, Delete) -->

<?php
# = = = = = MySQLi Procedural = = = = = 
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "college";
// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check POST Request Method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check POST Method and Insert Data
    if (isset($_POST['create'])) {
        $name = $_POST["name"];
        $course = $_POST["course"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $location = $_POST["location"];
        // sql to insert data
        $sql = "INSERT INTO `students` (`name`, `course`, `age`, `email`, `location`) VALUES ('$name', '$course', '$age', '$email', '$location');";
        $insertData = mysqli_query($conn, $sql);
        if ($insertData) {
            echo '<div class="alert alert-primary alert-dismissible fade show m-2" role="alert">
                    <strong>Success!</strong> Your record has been inserted successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
    // Check POST Method and Read Data
    if (isset($_POST['read'])) {
        echo "Read Method";
    }
    // Check POST Method and Update Data
    if (isset($_POST['update'])) {
        $id = $_POST['student_id'];
        $name = $_POST["name"];
        $course = $_POST["course"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $location = $_POST["location"];
        // sql to update data
        $sql = "UPDATE `students` SET `name` = '$name', `course` = '$course', `age` = '$age', `email` = '$email', `location` = '$location' WHERE `students`.`id` = $id;";
        $updateData = mysqli_query($conn, $sql);
        if ($updateData) {
            echo '<div class="alert alert-success alert-dismissible fade show m-2" role="alert">
                    <strong>Success!</strong> Your record has been Updated successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
    // Check POST Method and Delete Data
    if (isset($_POST['delete'])) {
        $id = $_POST['student_id'];
        // sql to delete data
        $sql = "DELETE FROM `students` WHERE `id` = $id";
        $deleteData = mysqli_query($conn, $sql);
        if ($deleteData) {
            echo '<div class="alert alert-warning alert-dismissible fade show m-2" role="alert">
                    <strong>Success!</strong> Your record has been Deleted successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
}
// Close Connection
// mysqli_close($conn);
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <title>CRUD Operations in MySQL</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Data Table CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        label {
            margin: 10px;
        }

        .dataTables_info,
        .dataTables_paginate {
            margin: 10px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="p-3 bg-dark">
        <h4 class="text-warning">PHP <span class="text-danger">CRUD</span> Operations <small class="text-primary">in MySQL</small></h4>
        <small class="text-light">Create, Read, Update, Delete</small>
    </header>
    <!-- Create Student Data In Form -->
    <section class="bg-secondary text-center p-3 my-2">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="text" class="form-control my-2" name="name" placeholder="Name">
                    <input type="text" class="form-control my-2" name="course" placeholder="Course">
                    <input type="number" class="form-control my-2" name="age" placeholder="Age">
                    <input type="email" class="form-control my-2" name="email" placeholder="Email ID">
                    <input type="text" class="form-control my-2" name="location" placeholder="Location">
                    <input type="submit" class="btn btn-primary my-2" title="Create" name="create" value="Save Data in MySQL">
                </form>
            </div>
        </div>
    </section>
    <!-- Display Student Data -->
    <section class="container rounded bg-info p-3 mb-2">
        <div class="text-center bg-info rounded p-3 m-3 shadow-lg">
            <h3>Students Details</h3>
        </div>
        <div class="table-responsive bg-light rounded shadow m-3">
            <table id="students_table" class="table table-light table-bordered table-hover align-middle mb-0 display">
                <thead class="table-secondary">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Course</th>
                        <th class="text-center">Age</th>
                        <th class="text-center">Email ID</th>
                        <th class="text-center">Location</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- PHP Select and Display Data -->
                    <?php
                    // sql to select data
                    $sql = "SELECT * FROM `students`;";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo    "<tr>
                                            <td>" . $row["id"] . "</td>
                                            <td>" . $row["name"] . "</td>
                                            <td>" . $row["course"] . "</td>
                                            <td>" . $row["age"] . "</td>
                                            <td>" . $row["email"] . "</td>
                                            <td>" . $row["location"] . "</td>
                                            <td class='text-center'>
                                                <div class='btn-group'>
                                                    <button class='btn btn-primary read' title='Read' id=r" . $row['id'] . " data-bs-toggle='modal' data-bs-target='#readModal'>&#128065;</button>
                                                    <button class='btn btn-success mx-2 edit' title='Update' id=u" . $row['id'] . " data-bs-toggle='modal' data-bs-target='#updateModal'>&#128393;</button>
                                                    <button class='btn btn-warning delete' title='Delete' id=d" . $row['id'] . " data-bs-toggle='modal' data-bs-target='#deleteModal'>&#9940;</button>
                                                </div>
                                            </td>
                                    </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </section>
    <!-- Read Modal -->
    <div class="modal fade" id="readModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="readModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Read</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td id="sName"></td>
                            </tr>
                            <tr>
                                <td>Course</td>
                                <td id="sCourse"></td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td id="sAge"></td>
                            </tr>
                            <tr>
                                <td>Email ID</td>
                                <td id="sEmail"></td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td id="sLocation"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Update Modal -->
    <div class="modal fade" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="modal-body text-center">
                        <input type="hidden" class="form-control my-2" name="student_id" placeholder="ID" id="studentID">
                        <input type="text" class="form-control my-2" name="name" placeholder="Name" id="studentName">
                        <input type="text" class="form-control my-2" name="course" placeholder="Course" id="studentCourse">
                        <input type="number" class="form-control my-2" name="age" placeholder="Age" id="studentAge">
                        <input type="email" class="form-control my-2" name="email" placeholder="Email ID" id="studentEmail">
                        <input type="text" class="form-control my-2" name="location" placeholder="Location" id="studentLocation">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="modal-body text-center">
                        <input type="hidden" name="student_id" id="student_ID">
                        <p class="text-danger h5">Are you sure?</p>
                        <p>Do you really want to delete these records?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="delete" class="btn btn-danger">Yes</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="p-3 bg-dark text-center">
        <a href='https://www.facebook.com/Vikrant360' class='text-primary fs-4 m-1 p-1'><i class='fa-brands fa-facebook'></i></a>
        <a href='https://www.instagram.com/vikrant360_' class='text-warning fs-4 m-1 p-1'><i class='fa-brands fa-instagram'></i></a>
        <a href='https://www.youtube.com/channel/UCWuZVmfiLevNSNUEXrwXn9A' class='text-danger fs-4 m-1 p-1'><i class='fa-brands fa-youtube'></i></a>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <!-- Data Table JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        // Data Table JS Function Call
        $(document).ready(function() {
            $('#students_table').DataTable();
        });
        // Read Button
        reads = document.querySelectorAll('.read');
        Array.from(reads).forEach((element) => {
            element.addEventListener('click', (e) => {
                tableRow = e.target.parentNode.parentNode.parentNode;

                sName.innerText = tableRow.querySelectorAll('td')[1].innerText;
                sCourse.innerText = tableRow.querySelectorAll('td')[2].innerText;
                sAge.innerText = tableRow.querySelectorAll('td')[3].innerText;
                sEmail.innerText = tableRow.querySelectorAll('td')[4].innerText;
                sLocation.innerText = tableRow.querySelectorAll('td')[5].innerText;
            })
        })
        // Edit Button
        edits = document.querySelectorAll('.edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener('click', (e) => {
                tableRow = e.target.parentNode.parentNode.parentNode;

                s_id = tableRow.querySelectorAll('td')[0].innerText;
                s_name = tableRow.querySelectorAll('td')[1].innerText;
                s_course = tableRow.querySelectorAll('td')[2].innerText;
                s_age = tableRow.querySelectorAll('td')[3].innerText;
                s_email = tableRow.querySelectorAll('td')[4].innerText;
                s_location = tableRow.querySelectorAll('td')[5].innerText;

                studentID.value = s_id;
                studentName.value = s_name
                studentCourse.value = s_course;
                studentAge.value = s_age;
                studentEmail.value = s_email;
                studentLocation.value = s_location;
            })
        })
        // Delete Button
        deletes = document.querySelectorAll('.delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener('click', function(e) {
                tableRowNumber = e.target.id.substr(1);
                student_ID.value = tableRowNumber;
            })
        })
        // Auto Close Alert
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
    </script>
</body>

</html>