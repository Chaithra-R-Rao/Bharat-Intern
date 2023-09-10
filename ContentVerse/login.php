<?php require "header.php" ?>


<header class="masthead" style="background-image: url('https://img.freepik.com/free-vector/abstract-geometric-wireframe-background_52683-59421.jpg?size=626&ext=jpg&ga=GA1.1.188829649.1679056526&semt=ais');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto position-relative">
                <div class="site-heading">
                    <h1><strong>Admin Login</strong></h1>
                    <main class="page login-page">
                        <section class="clean-block clean-form dark">
                            <div class="container" style="background-color:black;opacity:.7;padding:10px;border-radius:15px;">

                                <?php
                                if (isset($_GET['error'])) {
                                    if ($_GET['error'] == "emptyFields") {
                                        echo '<p class="signuperror">Please fill in all fields!</p>';
                                    } elseif ($_GET['error'] == "invalid_user") {
                                        echo '<p class="signuperror">Invalid email or password!</p>';
                                    } elseif ($_GET['error'] == "invalidPassword") {
                                        echo '<p class="signuperror">Invalid email or password!</p>';
                                    } elseif ($_GET['error'] == "sqlerror") {
                                        echo '<p class="signuperror">Database connection error!</p>';
                                    }
                                } elseif (isset($_GET['login']) && $_GET['login'] == "success") {
                                    echo '<p class="signupsuccess">Login successful!</p>';
                                }
                                ?>
                            
                                <form method="post" action="includes/login.inc.php" autocomplete="off">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control item" type="email" name="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" type="password" name="password" required="">
                                    </div>
                                    <div class="mb-3" style="text-align:left;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkbox">
                                            <label class="form-check-label" for="checkbox">Remember me</label>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="submit" name="login">Log In</button>
                                    </div>
                                </form>

                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
</header>
<hr>


<?php require "footer.php" ?>