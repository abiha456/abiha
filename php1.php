<?php
    $std1 = array(
        'Name'      => "sara",
        'Rollno'    => 101,
        'Subject'   => "english",
        'Marks'     => 84
    );

    $std2 = array(
        'name'      => "sana",
        'rollno'    => 102,
        'subject'   => "english",
        'marks'     => 92
    );
    
    print_r (array_merge($std1,$std2));

    echo "</br>";
    echo "</br>";

//multidimensional array

    $stds = array(
        'Saba' => array(
            'eng'     => 82,
            'math'    => 76,
            'urdu'    => 89
        ),
        'Rida' => array(
            'eng'     => 91,
            'math'    => 84,
            'urdu'    => 78
        ),
        'Fatima' => array(
            'eng'     => 74,
            'math'    => 85,
            'urdu'    => 80
        )
    );

    print_r ($stds);
    
?>