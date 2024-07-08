<?php
$uploadDir = './uploads/';
$testFile = $uploadDir . 'test.txt';

if (is_writable($uploadDir)) {
    // Try to create a test file in the uploads directory
    if (file_put_contents($testFile, 'Test file content')) {
        echo 'Directory is writable. Test file created successfully.';
        // Remove the test file
        unlink($testFile);
    } else {
        echo 'Directory is writable, but test file could not be created.';
    }
} else {
    echo 'Directory is not writable.';
}
?>
