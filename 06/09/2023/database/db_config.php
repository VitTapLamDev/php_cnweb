<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "booking_web";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $records_per_page = 10;

    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $current_page = $_GET['page'];
    } else {
        $current_page = 1;
    }

    $start_from = ($current_page - 1) * $records_per_page;

    $sql = "SELECT * FROM `hotel_cred` LIMIT $start_from, $records_per_page";
    $result = $conn->query($sql);

    echo "<table class=' table table-bordered'>";
    echo "
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
            </tr>
        </thead>";
    echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_hotel"] . "</td>";
            echo "<td>" . $row["hotel_name"] . "</td>";
            echo "<td>" . $row["details"] . "</td>";
            echo "</tr>";
        }
    echo "</tbody>";

    $sql = "SELECT COUNT(`id_hotel`) AS total_records FROM `hotel_cred`";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_records = $row['total_records'];
    $total_pages = ceil($total_records / $records_per_page);

    $next_page = $current_page + 1;
    $previous_page = $current_page -1;

    if($previous_page == 0){
        echo "<nav aria-label='Page navigation example'>
        <ul class='pagination justify-content-center'>
            <li class='page-item disabled'>
                <a class='page-link' href='index.php?page=".$previous_page."'>Previous</a>
            </li>";
    }else{
        echo "<nav aria-label='Page navigation example'>
        <ul class='pagination justify-content-center'>
            <li class='page-item'>
                <a class='page-link' href='index.php?page=".$previous_page."'>Previous</a>
            </li>";
    }
    
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'>".$i."</a></li> ";
    }

    if($next_page > $total_pages){
        echo "
            <li class='page-item disabled'>
            <a class='page-link' href='index.php?page=".$next_page."'>Next</a>
            </li>
        </ul>
    </nav>";
    }else{
        echo "
            <li class='page-item'>
            <a class='page-link' href='index.php?page=".$next_page."'>Next</a>
            </li>
        </ul>
    </nav>";
    }
    
    $conn->close();

?>