<?php 
session_start();

include 'config.php';
$loggedInUserMail = $_SESSION["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $starting = $_POST["startinglocation"];
    $ending = $_POST["endinglocation"];
    $train = $_POST["train"];
    $tickets = $_POST["tickets"];
    $date = $_POST["date"];
    $status = $_POST["status"];
    $role = $_POST["role"];
    $amount = 500;

    // If the number of tickets is more than 1, multiply the amount by the number of tickets
    if ($tickets > 1) {
        $amount = $amount * $tickets;
    }

    $sql = "INSERT INTO users (name,email, startinglocation, endinglocation, train, tickets, date,status,role)
            VALUES ('$name','$loggedInUserMail', '$starting', '$ending', '$train', $tickets, '$date','$status','$role')";

    if ($conn_booking->query($sql) === TRUE) {
        echo '<div style="text-align: center;"> <h4>Name: ' . $name . '</h4><h4>From: ' . $starting . ' </h4><h4>To: ' . $ending . ' </h4><h4>Date: ' . $date . ' </h4><h4>Tickets: ' . $tickets . ' </h4><h4>Train: ' . $train . ' </h4><h4>Total: ' . $amount . ' </h4 </div>';

        echo '<div style="text-align: center;"><a href="#" id="downloadBtn" onclick="downloadForm()">Download Form</a></div>';

    } else {
        echo "Error: " . $sql . "<br>" . $conn_booking->error;
    }
}

$conn_booking->close();
?>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    // Function to trigger the download of the form as an image
    function downloadForm() {
        // Use html2canvas to convert the content to an image
        html2canvas(document.body).then(function(canvas) {
            // Create a temporary link element
            var link = document.createElement('a');
            // Convert the canvas to a data URL and set it as the href
            link.href = canvas.toDataURL();
            // Set the download attribute to specify the filename
            link.download = 'booking_form.png';
            // Append the link to the body and trigger the click event
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    }
</script>