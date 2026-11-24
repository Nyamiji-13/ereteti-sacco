
<?php
// post, because it sends information without displaying it in the URL.

$page_title = 'Application received';
include 'includes/header.php';

$routes = [
    '1' => 'Kiserian',
    '2' => 'Ngong',
    '3' => 'Rongai'
];

echo '<main>';

if (isset($_POST['first_name'])) {

    // Read the information submitted through the form
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $phone = $_POST['phone'];
    $route = $routes[$_POST['route']];

    echo '<h2>Thank you, ' . $first . ' ' . $last . '</h2>';

    echo '<p>We have your application to join the ' . $route . ' route.</p>';

    echo '<p>The office will call you on ' . $phone . ' when your member number is ready.</p>';

} else {

    echo '<h2>No application</h2>';

    echo '<p>This page answers the membership form. ';
    echo '<a href="register.php">Fill it in first.</a></p>';

}

echo '</main>';

include 'includes/footer.php';
?>
