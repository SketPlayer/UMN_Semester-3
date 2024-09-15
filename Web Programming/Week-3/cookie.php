<?php
setcookie('nama', 'John Thor', time() + (86400 * 30), "/");

if(!isset($_COOKIE['nama'])) {
    echo "COOKIE[nama] belum di-set.";
} else {
    echo "COOKIE[nama] sudah di-set.<br />";
    echo "COOKIE[nama]: " . $_COOKIE['nama'];
}