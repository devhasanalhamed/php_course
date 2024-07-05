<?php

/*
التكليف 08

    لديك ال Output التالي
    عليك كتابة محتوى ال Array وطباعتها لتظهر هذا ال Output

 */

$arr = [
    "FrontEnd" => [
        0 => "HTML", 1 => "CSS", "JS" => [
            "Vuejs" => [2 => "v2", 3 => "v3",],

            0 => "Reactjs",
            1 => "Svelte",
        ],
    ],

    "BackEnd" => [
        0 => "PHP",
        1 => "MySQL",
        2 => "Security",
    ],

    0 => "Git",
    1 => "Github",
    "Testing" => [
        0 => "Unit Testing",
        1 => "End To End",
        2 => "Integration",
    ],
];

echo "<pre>";
print_r($arr);
echo "</pre>";


 /*
 Array
(
  [FrontEnd] => Array
    (
      [0] => HTML
      [1] => CSS
      [JS] => Array
        (
          [Vuejs] => Array
            (
              [2] => v2
              [3] => v3
            )

          [0] => Reactjs
          [1] => Svelte
        )
    )

  [BackEnd] => Array
    (
      [0] => PHP
      [1] => MySQL
      [2] => Security
    )

  [0] => Git
  [1] => Github
  [Testing] => Array
    (
      [0] => Unit Testing
      [1] => End To End
      [2] => Integration
    )
)
  */