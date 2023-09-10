<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['usrId'])) {
    //echo "403 Forbidden Access";
    header("location: ../login.php");
    exit();
}
?>

<?php require "header.php" ?>

<header class="masthead" style="background-image: url('assets/img/home-bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto position-relative">
                <div class="site-heading">
                    <?php echo "<h2>Welcome {$_SESSION['usrName']}!</h2><br> <h4>Add Content</h4>" ?>

                    <main class="page login-page">
                        <section class="clean-block clean-form dark">
                            <div class="container" style="background-color:black;opacity:.7;padding:10px;border-radius:15px;">

                                <?php if (isset($_GET['error'])) : ?>
                                    <p> <?php echo $_GET['error']; ?></p>
                                <?php
                                elseif (isset($_GET['upload']) && $_GET['upload'] == "success") :
                                ?>
                                    <script>
                                        swal("Done!", "Contents uploaded successfully!", "success");
                                    </script>
                                <?php endif  ?>

                                <form method="post" action="upload.php" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label class="form-label" for="title"> Enter the title</label>
                                        <input class="form-control item" type="text" name="title" required="">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="description"> Enter 1 line description</label>
                                        <textarea class="form-control item" name="description" required=""></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="image"> Upload Image</label><br>
                                        <input type="file" name="topic_image" required="">
                                        <small>(Max 750 KB)</small>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="para1"> Enter Paragraph 1 contents</label>
                                        <textarea class="form-control item" name="para1" required=""></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="para2"> Enter paragraph 2 contents</label>
                                        <textarea class="form-control item" name="para2" required=""></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="para3"> Enter Paragraph 3 contents</label>
                                        <textarea class="form-control item" name="para3" required=""></textarea>
                                    </div>

                                    <button class="btn btn-primary" type="submit" name="upload">Upload Contents</button>

                                </form>

                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
</header>


<?php require "footer.php" ?>