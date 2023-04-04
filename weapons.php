
<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $weapons = [
        [   
            "img" => "ak47.png",
            "name" => "AK47",
            "type" => "Assault Rifle",
            "manufacturer" => "Kalashnikov Concer",
            "ammunition" => "7.62x39mm",
            "user" => ["Angola","Algeria","Albania","Afghanistan"]
        ],
        [
            "img" => "m16.png",
            "name" => "M16",
            "type" => "Assault Rifle",
            "manufacturer" => "Colt's Manufacturing Company",
            "ammunition" => "5.56x45mm",
            "user" => ["United States","Philippines","Japan","Ecuador"]
        ],
        [
            "img" => "glock.png",
            "name" => "Glock 17",
            "type" => "Semi-Automatic Pistol",
            "manufacturer" => "Glock Ges.m.b.H.",
            "ammunition" => "9mm",
            "user" => ["France","Ecuador","China","Canada"]
        ],
        [
            "img" => "m40.png",
            "name" => "M40",
            "type" => "Sniper Rifle",
            "manufacturer" => "Remington Arms",
            "ammunition" => "7.62mm",
            "user" => ["Philippines","Malaysia","Afghanistan","United States"]
        ],
        [
            "img" => "at4.png",
            "name" => "AT4",
            "type" => "Anti-Tank Launcher",
            "manufacturer" => "Saab Bofors Dynamics",
            "ammunition" => "74-mm Pansarskott",
            "user" => ["Norway", "Germany","Sweden","United States"]
        ]

    ];

    $data = json_encode($weapons);
    echo $data;
    
?>
