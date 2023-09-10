<?php require "header.php" ?>

<header class="masthead" style="background-image: url('assets/img/home-bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto position-relative">
                <div class="site-heading">
                    <h1><strong>ContentVerse</strong></h1><span class="subheading">"Explore a Universe of Diverse Content"</span>
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

        $query = "Select * from content  order by uno desc ";

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
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col-lg-4">

                        <!-- images -->
                        <img class="rounded w-100 h-100 fit-cover" style="min-height: 300px;padding-right: 0px;margin-right: 0px;" src="uploads/<?= $row['image_url'] ?>" width="250" height="373">
                    </div>

                    <div class="col-md-10 col-lg-7 col-xxl-7">
                        <div class="post-preview">

                            <a href="post.php?id=<?php echo $row["uno"]; ?>&name=<?php echo $row["title"]; ?>">

                                <?php

                                echo "<h2 class=post-title style=padding-right: 0px;margin-right: 0px;>" . $row["title"] . "</h2>";
                                echo "<h3 class=post-subtitle>" . $row["description"] . "&nbsp;</h3>";
                                echo "</a><br>";

                                $pid = $row["pid"];
                                $sql1 = "SELECT name FROM admin WHERE id = $pid";
                                $result1 = $conn->query($sql1);
                                // Fetch the data
                                $row1 = $result1->fetch_assoc();

                                $timestamp = $row["time"];
                                $formattedDate = date('d-m-Y', strtotime($timestamp));

                                echo "<p class=post-meta> Posted by : " . $row1["name"] . "&nbsp;on " . $formattedDate . " </p>";
                                ?>
                        </div>

                        <a href="post.php?id=<?php echo $row["uno"]; ?>&name=<?php echo $row["title"]; ?>">
                            Learn More&nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <hr />
    <?php
            }
        } catch (PDOException $e) {

            echo "Error: " . $e->getMessage();
        }
    }
    ?>
    <!-- Use when there's a lot of posts -->
    <!-- <div class="clearfix">        
        <button class="btn btn-primary float-end" type="button">Older Posts&nbsp;⇒</button>
    </div> -->
</div>

<?php require "footer.php" ?>