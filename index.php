<?php
class Movie {
    public $name;
    public $genre;
    public $director;
    public $actors = ["Megan Fox","Shia LaBeouf","Josh Duhamel","John Turturro","Mark Wahlberg","John Cena"];
    public $plot;
    public $budget;

    function __construct(String $_name,String $_genre, String $_director, Array $_actors, String $_plot, int $_budget){
        $this->name = $_name;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->actors = $_actors = ["Megan Fox","Shia LaBeouf","Josh Duhamel","John Turturro","Mark Wahlberg","John Cena"];
        $this->plot = $_plot;
        $this->budget = $_budget;
    }

    function getBestactors(){
        return $this->actors[0];
    }
}

$transformers = new Movie('Transformers','Action', 'Michael Bay',[0,1], "Robot appartenenti a due diverse razze iniziano una guerra sulla Terra. Il destino dell'umanità rimane nelle mani di un ragazzo.", 1470000);

echo "<p>Movie: " . $transformers->name . "</p>";
echo "<p>Genre: " . $transformers->genre . "</p>";
echo "<p>Director: " . $transformers->director . "</p>";
echo "<p>Actors: " . $transformers->actors[0] . "</p>";
echo "<p>Plot: " . $transformers->plot . "</p>";
echo "<p>Budget: " . $transformers->budget . " USD" . "</p>";

echo "<p>Best Actor: " . $transformers->getBestactors() . "</p>";


