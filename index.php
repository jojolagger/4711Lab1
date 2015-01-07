<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //import student file
            include('student.php');
            
            //makes array of students
            $students = array();

            //adds a student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            //and another
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //then the best student
            $third = new Student();
            $third->surname = "Dellow";
            $third->first_name = "Alex";
            $third->add_email('Formal','alex_dellow@hotmail.co.uk');
            $third->add_email('Casual','jojolagger@gmail.com');
            $third->add_email('School','adellow@my.bcit.ca');
            $third->add_grade(80);
            $third->add_grade(84);
            $third->add_grade(82);
            $students['a455'] = $third;
            
            //sort them by the key they were put into the array with
            ksort($students);
            
            //for each student, display them
            foreach($students as $student){
                echo $student->toString();
            }

        ?>
    </body>
</html>
