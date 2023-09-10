<?php require "header.php" ?>

<?php
if (isset($_SESSION)) {

    require 'includes/dbh.inc.php';

    $uid = $_GET["id"];
    $title = $_GET["name"];

    $query = "Select * from content where uno=$uid ";

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
            <header class="masthead" style="background-image: url('uploads/<?= $row['image_url'] ?>');">

                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 mx-auto position-relative">
                            <div class="post-heading">

                                <?php

                                echo "<h1>" . $row["title"] . "</h1>";
                                echo "<h2 class=subheading>" . $row["description"] . " </h2> ";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 mx-auto">

                            <?php
                            echo "<h2 class=section-heading>" . $row["title"] . "</h2>";
                            echo "<p>" . $row["paragraph1"] . "</p>";
                            echo "<p>" . $row["paragraph2"] . "</p>";
                            echo "<p>" . $row["paragraph3"] . "</p>";
                            $pid = $row["pid"];

                            $sql1 = "SELECT name FROM admin WHERE id = $pid";
                            $result1 = $conn->query($sql1);
                            // Fetch the data
                            $row1 = $result1->fetch_assoc();

                            $timestamp = $row["time"];
                            $formattedDate = date('d-m-Y', strtotime($timestamp));

                            // Output the uploader's name and formatted date and time
                            echo "<p class=post-meta style=text-align:right;>- Posted by : " . $row1["name"] . "&nbsp;on " . $formattedDate . " </p>";

                            ?>
                        </div>
                    </div>
            </article>
            <hr />

<?php
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
}
?>

<?php require "footer.php" ?>