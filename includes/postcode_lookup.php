<?php
// Function to lookup geographical information for a postcode
function lookupPostcode($postcode) {
    $url = 'https://api.postcodes.io/postcodes/' . urlencode($postcode);
    $response = file_get_contents($url);
    return json_decode($response, true);
}
