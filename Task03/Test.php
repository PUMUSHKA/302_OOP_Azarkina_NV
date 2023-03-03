<?php

namespace App\Tests;

class
public function testTextRepresentation()
{
    $s1 = new Student();
    $s1 -> setName("Vagazov") -> setLastName("Arman") -> setFaculty("FMiIT") -> setCourse(1) -> setGroup(102);
    $this -> assertSame(
        "Id: 1" . "\n" .
        "Фамилия: Azarkina" . "\n" .
        "Имя: Natalia" . "\n" .
        "Факультет: FMiIT" . "\n" .
        "Курс: 3" . "\n" .
        "Группа: 302",
        $s1 -> __toString()
    );
}

public function testGetFuntions()
{
    $s1 = new Student();
    $s1 -> setName("Natalia") -> setLastName("Vagazova") -> setFaculty("FMiIT") -> setCourse(1) -> setGroup(102);
    $this ->  assertSame("Natalia", $s1 -> getName());
    $this ->  assertSame("Azarkina", $s1 -> getLastName());
    $this ->  assertSame("FMiIT", $s1 -> getFaculty());
    $this ->  assertSame(1, $s1 -> getCourse());
    $this ->  assertSame(102, $s1 -> getGroup());
}
