<?php
class Movie {
    public $name;
    public $genre;
    public $director;
    public $actors;
    public $plot;
    public $budget;
    public $img;

    function __construct(String $name,String $genre, String $director, Array $actors, String $plot, int $budget,String $img){
        $this->name = $name;
        $this->genre = $genre;
        $this->director = $director;
        $this->actors = $actors = ["Megan Fox","Shia LaBeouf","Josh Duhamel","John Turturro","Mark Wahlberg","John Cena"];
        $this->plot = $plot;
        $this->budget = $budget;
        $this->img = $img;
    }

    function getBestactors(){
        return $this->actors[0];
    }
}

$transformers = new Movie('Transformers','Action', 'Michael Bay',"$actors", "Robot appartenenti a due diverse razze iniziano una guerra sulla Terra. Il destino dell'umanità rimane nelle mani di un ragazzo.", 1470000,"https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcRL1XgVEINwK9ZkYMu2_3Sw_4RRp7p0WRSVM6mHwvbOR-e_Lc-qMM-o3XPGXRy3GDx4");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 1</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2798/2798007.png">
    <!-- BOOTSTRAP LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- CSS LINK  -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
        <div class="card" style="width: 18rem;">
             <img src="<?php echo $transformers->img; ?>" class="card-img-top" :alt="<?php $transformers->name ;?>">
               <div class="card-body">
               <h5 class="card-title"> <strong>Movie:</strong> <?php echo  $transformers->name ; ?></h5>
               <p class="card-text"><strong>Genre: </strong><?php echo $transformers->genre; ?></p>
               <p class="card-text"><strong>Director: </strong><?php echo $transformers->director; ?></p>
               <ul class='p-0'>
                <li>
                   <strong>Actors: </strong>
                <?php foreach ($transformers->actors as $key => $actor) {
                   echo "-" . $actor;
                } ?>
                </li>
               </ul>
               <p class="card-text"> <strong>Plot: </strong>  <?php echo $transformers->plot; ?></p>
               <p class="card-text"> <strong>Budget: </strong>  <?php echo $transformers->budget . " USD" ;?></p>
               <p class="card-text"> <strong>Best Actor: </strong>  <?php echo $transformers->getBestactors(); ?></p>
        </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>