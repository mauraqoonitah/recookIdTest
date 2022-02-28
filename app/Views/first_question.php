<?php

// Membuat fungsi dengan 1 parameter
// Menampilkan value dari parameter tersebut
// note: variable type dapat berupa angka,string,array

function welcome($name)
{
    echo 'Selamat Datang, ' . $name . "!";
    echo "<br>";
}

welcome('Maura Qoonitah Putri');

function addUser($id)
{
    //multidimensional array
    $users = [
        [
            'id' => '1',
            'role' => 'admin',
        ],
        [
            'id' => $id,
            'role' => 'chef',
        ],

    ];

    foreach ($users as $user) {
        echo "<hr>";
        echo "id: " . $user['id'];
        echo "<br>";
        echo "role: " . $user['role'];
        echo "<hr>";
    }
}
addUser(15);
