<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insegnanti</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>



    <?php

        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

    ?>
    <div class="gray">

      <?php
      foreach ($db as $type => $teachers) {
        if ($type === "teachers"){
        foreach ($teachers as $user) {
          echo $user["name"]. " " .$user["lastname"]. "<br>";
        }
      };
    };
       ?>


    </div>
    <div class="green">

      <?php
      foreach ($db as $type => $pm) {
        if ($type === "pm"){
        foreach ($pm as $user) {
          echo $user["name"]. " " .$user["lastname"]. "<br>";
        }
      };
    };
       ?>

    </div>

  </body>
</html>



<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo
grigio e i PM in un rettangolo verde. -->
