<?php

// $dbServerName = "localhost";
// $dbUserName = "root";
// $dbPassword = "";
// $dbName = "netmatters_mysql";

// $db = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

// $db = new PDO("mysql:host=localhost;db_name=netmatters_mysql;port=3306", "Username", "Password");


// $user = "root";
// $pass = "";

    try {
        $db = new PDO("mysql:host=127.0.0.1;port=8889;dbname=netmatters;charset=utf8mb4", "root", "root");
        $sql = 'SELECT * from articles ORDER BY date_published DESC LIMIT 3';

        foreach($db->query($sql) as $article) {
            // print_r($article);
            // echo $article['title'];
            // echo "</br>";
            // echo $article['description'];
            // echo "</br></br>";

            echo "<div class='article-item a-section article " . $article['department_theme'] . "'>";
            echo "<div class='title-img-wrap'>";
            echo "<span class='label'>" . $article['category'] . "</span>";
            echo "<div class='title-img'> <img src='assets/articles/images/" . $article['image'] . "'> </div>";
            echo "</div>";
            echo "<div class='article-desc a-section flexy'>";
            echo "<h3 class='title'><a href='#'>" . $article['title'] . "</a></h3>";
            echo "<p class='desc'>" . substr($article['description'], 0, 100) . "...</p>";
            echo "<a class='btn'><p>Read More</p></a>";
            echo "</div>";
            echo "<div class='article-credit a-section'>";
            echo "<img src='assets/articles/authors/" . $article['author_image'] . "' alt='An image of " . $article['author'] . " the author of this article'>";
            echo "<strong>Posted by " . $article['author'] . "</strong>";
            echo "<p>" . date("jS F Y" , strtotime($article['date_published'])) . "</p>";
            echo "</div></div>";
        }
        $db = null;
        
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }


