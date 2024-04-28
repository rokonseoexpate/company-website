<?php
$title = "Home";
$content = ob_get_clean();
include '../layouts/master.php';
?>

<div class="content-wrapper" style="min-height: 485px;">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <?php
                            if (isset($_SESSION['msg1'])) {
                                echo '<p style="color: red;" class="text-center">' . $_SESSION['msg1'] . '</p>';
                                unset($_SESSION['msg1']);
                            }
                        ?>
                        <div class="card-header">
                            <form action="chngpwd.php" method="POST" class="mx-auto mt-2 mb-2">
                                <div class="form-group">
                                    <label for="opwd">Old Password :</label>
                                    <input type="password" name="opwd" class="form-control" id="opwd" required>
                                </div>
                                <div class="form-group">
                                    <label for="npwd">New Password :</label>
                                    <input type="password" name="npwd" class="form-control" id="npwd" required>
                                </div>
                                <div class="form-group">
                                    <label for="cpwd">Confirm Password :</label>
                                    <input type="password" name="cpwd" class="form-control" id="cpwd" required>
                                </div>
                                <button type="submit" name="Submit" class="btn btn-primary">Change Password</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>