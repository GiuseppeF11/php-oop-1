<?php
class Movie
{
    public string $title;
    public $categories = [];
    public function __construct(string $title, array $categories)
    {
        $this->title = $title;
        $this->categories = $categories;
    }
    public function kids_block()
    {
        if (in_array('horror', $this->categories) || in_array('thriller', $this->categories)) {
            return '18+';
        } else {
            return 'Per tutta la famiglia!';
        }
    }
}

$saw = new Movie('Saw l\'enigmista', ['horror','thriller']);
$shrek = new Movie('Saw l\'enigmista', ['animation','love','commedy']);
$romanzo_criminale = new Movie('Romanzo Criminale', ['romantic','thriller']);
var_dump($saw);
var_dump('Il fim è: ' . $saw->kids_block());
var_dump($shrek);
var_dump('Il fim è: ' . $shrek->kids_block());
var_dump($romanzo_criminale);
var_dump('Il fim è: ' . $romanzo_criminale->kids_block());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js" integrity="sha512-TjBzDQIDnc6pWyeM1bhMnDxtWH0QpOXMcVooglXrali/Tj7W569/wd4E8EDjk1CwOAOPSJon1VfcEt1BI4xIrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>php-oop-1</title>
</head>

<body>

    <div id="app">

    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- MY JS -->
    <script type="text/javascript" src="./js/scripts.js"></script>

</body>


</html>