<?php

mysqli_connect("localhost", "root", "123", "pixel");

if (mysqli_connect_error()) {
    echo "An error occured while connecting";
} else {
    // connection is sucessful!
    return true;
}
