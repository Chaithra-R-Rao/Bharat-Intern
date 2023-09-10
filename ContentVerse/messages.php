<?php require "header.php" ?>

<header class="masthead" style="background-image: url('assets/img/message-bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto position-relative">
                <div class="site-heading">
                    <h1><strong>ContentVerse</strong></h1><span class="subheading">"Customer Feedback and Messages"</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Start: Features Image -->
<div class="container py-4 py-xl-5">

    <?php
    if (isset($_SESSION)) {

        require 'includes/dbh.inc.php';

        $query = "Select * from messages order by mid desc "; //mid= message id

        try {
            $con = new PDO(

                "mysql:host=$servername;dbname=$dbName",
                $dbUsername,
                $dbPassword
            );

            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $con->prepare($query);

            // EXECUTING THE QUERY 
            $stmt->execute();
            $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            // FETCHING DATA FROM DATABASE 
            $result = $stmt->fetchAll();

            foreach ($result as $row) {
    ?>
                <div class="post-preview">
                    <?php
                    echo '<h3 class=post-subtitle style=color:#665866 >"&nbsp;' . $row['message'] . '&nbsp;"</h3>';
                    echo "<br>";
                    echo "<p class=post-meta > Sent by : " . $row["name"] . "<br>Email Id: " . $row["email"] .  "<br>Phone Number: " . $row["phone"] . " </p>";
                    ?>
                </div>
                <hr />
    <?php
            }
        } catch (PDOException $e) {

            echo "Error: " . $e->getMessage();
        }
    }
    ?>

</div>
<?php require "footer.php" ?>