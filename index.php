<?php

$pages = [
    'server_configuration' => [
        'server_config.htm' => 'Basic Configuration',
    ],
    'user_input' => [
        'target_blank.htm' => 'Target Blank Vulnerability',
        'xss1.php'         => 'XSS Attacks',
        'xss2.htm'         => 'Thumbs Up!',
        'csrf1.php'        => 'CSRF Vulnerabilities',
        'csrf2.php'        => 'Puppies!!!',
        'sql_injection.php' => 'SQL Injection',
        'hashes.php' => 'Hashing Passwords',
        'inappropriate_data1.php' => 'Inappropriate Data',
    ],
];
echo '<h1>Bad User Input</h1>';
echo '<ul>';
foreach ($pages as $section => $type)
{
    echo '<li>'.ucwords(str_replace('_', ' ', $section)).'<ul>';
    foreach ($type as $link => $title)
    {
        echo '<li><a href="./' . $section . '/' .$link . '" target="_blank">' . $title . '</a></li>';
    }
    echo '</li></ul>';
}
echo '</ul>';
?>
<style>
    a:visited {
        color: blue;
    }
</style>
