<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restaurant Menu Page</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <img src="img/logo.png" id="img">
    <div class="Heading">
        <h1><u>Ruikar Restaurant</u></h1>
        <h2><u>Welcome</u></h2>
    </div>

    <div class="navbar">
        <a href="index.html">Home</a>
        <a href="menu.php" class="active">Menu</a>
        <a href="review.html">Reviews</a>
        <a href="login.html">Log in</a>
    </div>
    <hr>
    <form action="orderlist.php" class="form" method="POST">
        <label>MENU :</label>
        <h2 style='padding:0% 5%;margin:0% 5% 0% 3%;color:rgba(0, 0, 0, 0.942);background-color: #e28f139c;'>Soups :</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class='pad'>ID</th>
                    <th class='pad'>NAME</th>
                    <th class='pad'>FULL</th>
                    <th class='pad'>HALF</th>
                    <th class='pad'>Count(F)</th>
                    <th class='pad'>Count(H)</th>
                    <th class='pad'>ORDER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id=1;
                $conn = new mysqli('localhost', 'root', '', 'restaurant');
                if ($conn->connect_error) {
                    die("Connection Failed" . $conn->connect_error);
                }

                $sql = "SELECT * from menu where CATEGORY ='1'";
                $result = $conn->query($sql);
                
                while ($row=$result->fetch_assoc()) {
                    echo "<tr>
                    <td class='pad'>" . $id++ . "</td>
                    <td style='text-align:left' class='pad'>" . $row["NAME"] . "</td>
                    <td class='pad'>₹" . $row["FULL"] . "</td>
                    <td class='pad'>" . ($row["HALF"]==0? '-' : "₹".$row["HALF"]) . "</td>
                    <td class='pad'><input type='number' value=0 name='count[]' min='0' max='99'></td>
                    <td class='pad'>". ($row["HALF"]==0? '-' : "<input type='number' value=0 name='count[]' min='0' max='99'>")."</td>
                    <td class='pad'><input type='button' value='Add' class='button'></td>
                </tr> ";
                }
                ?>
            </tbody>
        </table>

        <h2 style='padding:0% 5%;margin:0% 5% 0% 3%;color:rgba(0, 0, 0, 0.942);background-color: #e28f139c;'>Veg Stater :</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class='pad'>ID</th>
                    <th class='pad'>NAME</th>
                    <th class='pad'>FULL</th>
                    <th class='pad'>HALF</th>
                    <th class='pad'>Count(F)</th>
                    <th class='pad'>Count(H)</th>
                    <th class='pad'>ORDER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id=1;
                $conn = new mysqli('localhost', 'root', '', 'restaurant');
                if ($conn->connect_error) {
                    die("Connection Failed" . $conn->connect_error);
                }

                $sql = "SELECT * from menu where CATEGORY ='2'";
                $result = $conn->query($sql);
                
                while ($row=$result->fetch_assoc()) {
                    echo "<tr>
                    <td class='pad'>" . $id++ . "</td>
                    <td style='text-align:left' class='pad'>" . $row["NAME"] . "</td>
                    <td class='pad'>₹" . $row["FULL"] . "</td>
                    <td class='pad'>" . ($row["HALF"]==0? '-' : "₹".$row["HALF"]) . "</td>
                    <td class='pad'><input type='number' value=0 name='count[]' min='0' max='99'></td>
                    <td class='pad'>". ($row["HALF"]==0? '-' : "<input type='number' value=0 name='count[]' min='0' max='99'>")."</td>
                    <td class='pad'><input type='button' value='Add' class='button'></td>
                </tr> ";
                }
                ?>
            </tbody>
        </table>

        <h2 style='padding:0% 5%;margin:0% 5% 0% 3%;color:rgba(0, 0, 0, 0.942);background-color: #e28f139c;'>non-Veg Stater : :</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class='pad'>ID</th>
                    <th class='pad'>NAME</th>
                    <th class='pad'>FULL</th>
                    <th class='pad'>HALF</th>
                    <th class='pad'>Count(F)</th>
                    <th class='pad'>Count(H)</th>
                    <th class='pad'>ORDER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id=1;
                $conn = new mysqli('localhost', 'root', '', 'restaurant');
                if ($conn->connect_error) {
                    die("Connection Failed" . $conn->connect_error);
                }

                $sql = "SELECT * from menu where CATEGORY ='3'";
                $result = $conn->query($sql);
                
                while ($row=$result->fetch_assoc()) {
                    echo "<tr>
                    <td class='pad'>" . $id++ . "</td>
                    <td style='text-align:left' class='pad'>" . $row["NAME"] . "</td>
                    <td class='pad'>₹" . $row["FULL"] . "</td>
                    <td class='pad'>" . ($row["HALF"]==0? '-' : "₹".$row["HALF"]) . "</td>
                    <td class='pad'><input type='number' value=0 name='count[]' min='0' max='99'></td>
                    <td class='pad'>". ($row["HALF"]==0? '-' : "<input type='number' value=0 name='count[]' min='0' max='99'>")."</td>
                    <td class='pad'><input type='button' value='Add' class='button'></td>
                </tr> ";
                }
                ?>
            </tbody>
        </table>

        <h2 style='padding:0% 5%;margin:0% 5% 0% 3%;color:rgba(0, 0, 0, 0.942);background-color: #e28f139c;'>Veg Dishes :</h2>
        <table class="table">
            <thead>
                <tr>
                    <

    
    <hr>
    <div class="footer">
        <img id="footerimg" src="img/logo.png">
        <h2><b>Contact Us</b></h2>
        <p>
            <b>Address - </b>
            Ruikar House, Omkar Nagar, Warora, Chandrapur, Maharashtra <br>
            PIN - 442907
            <br>
            <label> Phone No. <a href="#" class="contact">+91 9766695894</a></label>
            <br>
        </p>
        <div class="iconposition">
            <a href="https://www.instagram.com/mr_rajat_xr/"><img src="img\instagram.png" alt="instagram"
                    class="icon"></a>
            <a href="mailto:rajat1ruikar.com"><img src="img\social.png" alt="gmail" class="icon"></a>

            <a href="https://www.youtube.com/channel/UCXY-zHEgn691FQV44IqX9Gg"><img src="img\Youtube.png" alt="youtube"
                    class="icon"></a>
            <a
                href="https://www.google.com/maps/contrib/106837951548513496811/photos/@18.6668475,73.4857831,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?entry=ttu"><img
                    src="img\Map.png" alt="map" class="icon"></a>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>