<?php
class Movie {
    public $name;
    public $genre;
    public $director;
    public $actors = ["Megan Fox","Shia LaBeouf","Josh Duhamel","John Turturro","Mark Wahlberg","John Cena"];
    public $plot;
    public $budget;
    public $img;

    function __construct(String $_name,String $_genre, String $_director, Array $_actors, String $_plot, int $_budget,String $_img){
        $this->name = $_name;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->actors = $_actors = ["Megan Fox","Shia LaBeouf","Josh Duhamel","John Turturro","Mark Wahlberg","John Cena"];
        $this->plot = $_plot;
        $this->budget = $_budget;
        $this->img = $_img;
    }

    function getBestactors(){
        return $this->actors[0];
    }
}

$transformers = new Movie('Transformers','Action', 'Michael Bay',[0,1], "Robot appartenenti a due diverse razze iniziano una guerra sulla Terra. Il destino dell'umanità rimane nelle mani di un ragazzo.", 1470000,"https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcRL1XgVEINwK9ZkYMu2_3Sw_4RRp7p0WRSVM6mHwvbOR-e_Lc-qMM-o3XPGXRy3GDx4");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        img{
    height: 500px;
}

</style>

<?php
    
echo "<p>Movie: " . $transformers->name . "</p>";
echo "<p>Genre: " . $transformers->genre . "</p>";
echo "<p>Director: " . $transformers->director . "</p>";
foreach ($transformers->actors as $key => $actor) {
    echo "<span>" . $actor . "</span>";
  }
echo "<p>Plot: " . $transformers->plot . "</>";
echo "<p>Budget: " . $transformers->budget . " USD" . "</p>";
echo "<p>Best Actor: " . $transformers->getBestactors() . "</p>";
echo "<img src='$transformers->img'>";    
    ?>

</body>
</html>