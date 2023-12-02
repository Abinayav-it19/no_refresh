<?php
$file = 'data.txt'; // File to store data

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'save') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $native = $_POST['native'];

        $data = "<tr><td>$name</td><td>$email</td><td>$contact</td><td>$native</td>";
        $data .= "<td><button onclick='editRow(this.parentNode.parentNode)'>Edit</button></td>";
        $data .= "<td><button onclick='deleteRow(this.parentNode.parentNode)'>Delete</button></td></tr>";

        file_put_contents($file, $data, FILE_APPEND);

        echo $data;
    } elseif ($_POST['action'] === 'delete') {
        // Handle delete operation
        // Remove the specific line from the file based on the unique identifier or position
    } elseif ($_POST['action'] === 'update') {
        // Handle update operation
        // Update the specific line in the file based on the unique identifier or position
    }
}
?>
