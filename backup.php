<?php
require 'DropboxUploader.php';

// set timezone
date_default_timezone_set('Europe/Skopje');

// MySQL username
$username = "username";
// MySQL password
$password = "password";
// Dropbox username
$dusername = "username";
// Dropbox password
$dpassword = "password";
// database name
$db = "database";
// hostname or IP
$host = "localhost";
// file prefix
$prefix = $db."_";
// Dropbox folder
$folder = "backups";
// tmp directory
$tmp = "/tmp/";

$sql = $tmp.$prefix.date('Y_m_d').".sql";
$filename = $prefix.date('Y_m_d').".tgz";
$backup = $tmp.$filename;

$command = "mysqldump -h ".$host." -u ".$username." --password='".$pass."' ".$db." > ".$sql;
$zipCommand = "tar cvzf $backup $sql";

// Execute commands
exec($command);
exec($zipCommand);

// Upload to Dropbox
try {
    $uploader = new DropboxUploader($dusername, $dpassword);
    $uploader->upload($backup, $folder,  $filename);
} catch(Exception $e) {
    die($e->getMessage());
}

// Delete files
unlink($sql);
unlink($backup);

?>
