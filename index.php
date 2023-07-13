<?php
class Movie {
    public $genre;
    public $director;
    public $actors = ["Megan Fox","Shia LaBeouf","Josh Duhamel","John Turturro","Mark Wahlberg","John Cena"];
    public $plot;
    public $budget;

    function __construct(String $_genre, String $_director, Array $_actors, String $_plot, int $_budget){
        $this->genre = $_genre;
        $this->director = $_director;
        $this->actors = $_actors;
        $this->plot = $_plot;
        $this->budget = $_budget;
    }

    function getBestactors(){
        return $this->actors[0];
    }
}

$transformers = new Movie('Action', 'Michael Bay',[0], "Robot appartenenti a due diverse razze iniziano una guerra sulla Terra. Il destino dell'umanità rimane nelle mani di un ragazzo.", 1470000);

echo "<p>Genre: " . $transformers->genre . "</p>";
echo "<p>Director: " . $transformers->director . "</p>";
echo "<ul>";
foreach ($transformers->actors as $actor) {
    echo "<li>$actor</li>";
}
echo "</ul>";
echo "<p>Plot: " . $transformers->plot . "</p>";
echo "<p>Budget: " . $transformers->budget . " USD" . "</p>";

echo "<p>Best Actor: " . $transformers->getBestactors() . "</p>";


