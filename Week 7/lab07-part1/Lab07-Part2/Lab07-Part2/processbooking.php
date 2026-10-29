<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    
    <?php
        // Kiểm tra xem dữ liệu có được gửi lên từ form hay không
        if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {
            // Lấy các giá trị từ form
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            
            // Lấy tour (vì tour có thể là checkbox nhiều lựa chọn nên dùng implode nếu là mảng, hoặc xử lý tùy theo form của bạn)
            // Nếu form gửi tour dạng mảng checkbox:
            $tours = isset($_POST["tour"]) ? $_POST["tour"] : array();
            $tour_str = "";
            if (is_array($tours)) {
                // Nối các tour lại theo đúng cấu trúc đề: "the One-day tour and Four-day tour" hoặc tương tự
                $tour_str = implode(" and ", $tours);
            } else {
                $tour_str = $tours;
            }

            $species = isset($_POST["species"]) ? $_POST["species"] : "";
            $age = isset($_POST["age"]) ? $_POST["age"] : "";
            $meal = isset($_POST["meal"]) ? $_POST["meal"] : "";
            $travellers = isset($_POST["travellers"]) ? $_POST["travellers"] : "";

            // Hiển thị ra màn hình đúng định dạng như trong hình mẫu
            echo "<p>Welcome $firstname $lastname !</p>";
            echo "<p>You are now booked on the $tour_str</p>";
            echo "<p>Species: $species</p>";
            echo "<p>Age: $age</p>";
            echo "<p>Meal Preference: $meal</p>";
            echo "<p>Number of travellers: $travellers</p>";

        } else {
            echo "<p>No booking data received.</p>";
        }
    ?>
</body>
</html>