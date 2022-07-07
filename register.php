<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aiotouch Softwares">
    <meta name="description" content="Registration for Aiotouch Softwares Javascript Tutorial">

    <title>Registration</title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="all.css">
    <script src="jquery.js"></script>
</head>

<body style="background-color: rgba(0, 0, 0, 0.5);">
    <div class="container">
        <div class="container mt-5 py-5">
            <h2 class="text-center h1 rounded"><span style="color: magenta;">Aiotouch</span> Softwares Java<span
                    style="color: yellow;">Script</span> Course</h2>
            <div id="root" class="container mt-5">
                <div class="card">
                    <h3 class="card-header text-center h2 p-3">Register Here</h3>
                    <div class="card-body">
                        <div class="container p-3">
                            <div class="container">
                                <form autocomplete="on">
                                    <div class="form-group mb-3">
                                        <label class="h5" for="exampleInputPassword1">Firstname</label>
                                        <input name="firstname" type="text" class="form-control" id="firstname">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="h5" for="exampleInputPassword1">Lastname</label>
                                        <input name="firstname" type="text" class="form-control" id="lastname">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="h5" for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                            aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with
                                            anyone else.</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="h5" for="exampleInputPassword1">Phone</label>
                                        <input name="firstname" type="phone" class="form-control" id="phone"
                                            placeholder="e.g +2349059070371">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Course</label>
                                        </div>
                                        <select class="custom-select" id="courseSelect">
                                            <option selected>Select a Course</option>
                                            <option value="1">JavaScript</option>
                                            <option value="2">PHP</option>
                                            <option value="3">Bootstrap</option>
                                            <option value="4">Python</option>
                                            <option value="5">JAVA</option>
                                            <option value="6">C programming language</option>
                                            <option value="7">HTML5</option>
                                            <option value="8">JQuery</option>
                                            <option value="9">SQL</option>
                                            <option value="10">Ajax</option>
                                            <option value="11">Modern Web Development</option>
                                            <option value="12">Mobile App Development</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="catSelect">Options</label>
                                        </div>
                                        <select class="custom-select" id="catSelect">
                                            <option selected>Category</option>
                                            <option value="1">Beginner</option>
                                            <option value="2">Beginner to Intermediate</option>
                                            <option value="3">Beginner to Advanced</option>
                                        </select>
                                    </div>
                                </form>
                                <button id="submit_btn" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("ready", function () {
            document.querySelector("#submit_btn").addEventListener("click", function () {
                var xhr = new XMLHttpRequest;
                xhr.open("post", "save.php", {
                    firstname: "good",
                    lastname: "boss"
                }, function () {
                    root.html(firstname);
                });
            });
        });
    </script>


    <!-- <script type="text/javascript">
        $(document).ready(function () {
            $('#submit_btn').click(function () {
                var root = $('#root');
                var firstname = $('#firstname').val;
                var lastname = $('#lastname').val;
                var email = $('#email').val;
                var phone = $('#phone').val;
                var courseSelect = $('#courseSelect');
                var catSelect = $('#catSelect');


                $.post("save.php", {
                        firstname: firstname,
                        lastname: lastname,
                        email: email,
                        phone: phone,
                        courseSelect: courseSelect,
                        catSelect: catSelect
                    }, function (data, status) {
                        var greet = `Congratulations ${firstname}, you have been successfully registered!`;
                        root.html(greet);
                    });

            });

        });
    </script> -->
</body>

</html>