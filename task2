<?php

$employees = ['Mohammed', 'Saher', 'Ali', 'Ahmed', 'Tarak'];
$salary = ['Mohammed' => 15000, 'Saher' => 12000, 'Ali' => 10000, 'Ahmed' => 8000, 'Tarak' => 11000];
$job = ['Mohammed' => 'Boss', 'Saher' => 'Security', 'Ali' => 'Worker', 'Ahmed' => 'Worker', 'Tarak' => 'Security'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-primary">
        <div class="container ">
            <table class="table table-success table-striped table-hover table-bordered caption-top fs-3">
                <caption class="text-center text-black fs-3 fw-bold ">Employees Salaries</caption>
                
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Salary without taxes</th>
                        <th scope="col">Salary with taxes</th>
                    </tr>
                </thead>
                
                <tbody class='table'>
                    <tr>
                        <td><?= $employees[0] ?></td>
                        <td><?= $salary[$employees[0]] ?></td>
                        <td><?= $job[$employees[0]] != 'Boss' ? $salary[$employees[0]] - $salary[$employees[0]] * 0.1 : $salary[$employees[0]]   ?></td>
                    </tr>

                    <tr>
                        <td><?= $employees[1] ?></td>
                        <td><?= $salary[$employees[1]] ?></td>
                        <td><?= $job[$employees[1]] != 'Boss' ? $salary[$employees[1]] - $salary[$employees[1]] * 0.1 : $salary[$employees[1]]   ?></td>
                    </tr>
                    <tr>
                        <td><?= $employees[2] ?></td>
                        <td><?= $salary[$employees[2]] ?></td>
                        <td><?= $job[$employees[2]] != 'Boss' ? $salary[$employees[2]] - $salary[$employees[2]] * 0.1 : $salary[$employees[2]]   ?></td>
                    </tr>
                    <tr>
                        <td><?= $employees[3] ?></td>
                        <td><?= $salary[$employees[3]] ?></td>
                        <td><?= $job[$employees[3]] != 'Boss' ? $salary[$employees[3]] - $salary[$employees[3]] * 0.1 : $salary[$employees[3]]  ?></td>
                    </tr>

                    <tr>
                        <td><?= $employees[4] ?></td>
                        <td><?= $salary[$employees[4]] ?></td>
                        <td><?= $job[$employees[4]] != 'Boss' ? $salary[$employees[4]] - $salary[$employees[4]] * 0.1 : $salary[$employees[4]]  ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="bg-dark-subtle p-1 fs-3 text-green">
                <p class="text-center fw-bold">Employee Array with var_dump()</p>
               
<?php var_dump($employees) ?>
            </div>

            <div class="bg-dark-subtle p-1 fs-3 text-green">
                <p class="text-center fw-bold">Employee Array with print_r()</p>
                
<?php print_r($employees) ?>
            </div>

        </div>

    </div>

</body>

</html>
