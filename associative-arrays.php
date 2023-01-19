<?php

$student_info_keys = [
    'name',
    'age',
    'dob'
];

$students = [
    ['Shaun', 44, '1978-12-22'], //simple arrs have to have matched indexes on information
    ['01-02-1997', 'Gagandeep', 26]  //order is important
];

$aa_students = [
    [
        "name" => "Shaun McKinnon", //associative arr can have values instead of indexes
        "age" => 44,                //order isn't important
        "dob" => "1978-12-22" 
    ],                              //explicitly keys arrays = associative arrs
                                    //imlicitly keys arrays = simple arrays
    [
        "age" => 23,   
        "name" => "Amir",
        "dob" => "1233-23-23"
    ]
];

foreach ($aa_students as $student){
    echo $student["age"];      //prints all ages to console
}



?>