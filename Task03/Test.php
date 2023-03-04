<?php 

use App\Student;
use App\StudentsList;

function runTest()
{
    $sl1 = new StudentsList(array());
    $s1 = new Student();
    $s1->setLastname("Азаркина")
    ->setFirstname("Наталья")
    ->setFaculty("ФМиИТ")
    ->setCourse(3)
    ->setGroup(302);
    echo $s1 . PHP_EOL;

    $sl1->add($s1);
    echo "Количество студентов в списке: " . $sl1->count() . PHP_EOL;

    $s2 = new Student();
    $s2->setLastname("Фистин")
    ->setFirstname("Глеб")
    ->setFaculty("ФМиИТ")
    ->setCourse(3)
    ->setGroup(302);
    echo $s2 . PHP_EOL;

    $sl1->add($s2);
    echo "Количество студентов в списке: " . $sl1->count() . PHP_EOL;

    $sl1->store("StudentsList.bin");

    $s3 = new Student();
    $s3->setLastname("Авсарагов")
    ->setFirstname("Андрей")
    ->setFaculty("ФМиИТ")
    ->setCourse(3)
    ->setGroup(301);
    echo $s3 . PHP_EOL;

    $sl1->add($s3);
    echo "Количество студентов в списке: " . $sl1->count() . PHP_EOL;

    for ($i = 0; $i < $sl1->count(); $i++) {
        echo "\nStudentsList1" . $sl1->get($i) . PHP_EOL;
    }

    $sl2 = new StudentsList(array());
    echo "Количество студентов в списке: " . $sl2->count() . PHP_EOL;

    $sl2->load("StudentsList.bin");
    echo "Количество студентов в списке: " . $sl2->count() . PHP_EOL;
    for ($i = 0; $i < $sl2->count(); $i++) {
        echo "\nStudentsList2" . $sl2->get($i) . PHP_EOL;
    }
}
