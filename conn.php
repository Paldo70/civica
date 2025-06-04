<?php

$db = new mysqli('localhost', 'root', '', 'agenzia_interinale', 3307);

if ($db->connect_error) {
    die("Connessione fallita: " . $db->connect_error);
}
echo "OK.";
?>