<?php

$courses = [
    "c0" => "PHP 1",
    "c1" => "PHP 2",
    "c2" => "PHP 3"
];

/**
 * get_courses lấy giá trị của mảng
 * @return array
 */
function get_courses() : array{
    global $courses;

    return array_values($courses);
}


/**
 * find_by_semester dùng để tìm khoá học theo key
 * @param string $semester
 * @return string
 */
function find_by_semester($semester){
    global $courses;
    return array_key_exists($semester, $courses) ? $courses[$semester] : "Không tìm thấy khoá học";
}