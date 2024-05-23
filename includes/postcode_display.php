<?php
// Check if the form is submitted and the postcode is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['postcode'])) {
    // Retrieve the submitted postcode and sanitize it
    $postcode = trim($_POST['postcode']); // Remove leading and trailing whitespace

    // Replace any whitespace characters (spaces, tabs, etc.) with empty strings
    $postcode = str_replace(' ', '', $postcode);

    // Lookup geographical information for the submitted postcode
    $geographical_info = lookupPostcode($postcode);

    // Output the geographical information
    if ($geographical_info && $geographical_info['status'] == 200) {
        echo "<div class='container mt-3 p-0' id='postcode_info'>";
        echo "<div class='alert alert-primary' role='alert'>";
        echo "<h3>Geographical Information for Postcode: $postcode</h3>";
        echo "<p><strong>Longitude:</strong> " . $geographical_info['result']['longitude'] . "</p>";
        echo "<p><strong>Latitude:</strong> " . $geographical_info['result']['latitude'] . "</p>";
        echo "<p><strong>Country:</strong> " . $geographical_info['result']['country'] . "</p>";
        echo "<p><strong>District:</strong> " . $geographical_info['result']['admin_district'] . "</p>";
        echo "</div>";
        // Output other relevant information as needed
        echo "</div>";
    } else {
        echo "<div class='container mt-3 p-0' id='postcode_info'>";
        echo "<div class='alert alert-danger' role='alert'>Error: Unable to retrieve geographical information for the postcode: $postcode</div>";
        echo "</div>";
    }
}
