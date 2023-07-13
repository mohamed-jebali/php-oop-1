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
        $this->actors = $actors;
        $this->plot = $plot;
        $this->budget = $budget;
        $this->img = $img;
    }

    function getBestactors(){
        return $this->actors[0];
    }
}

$transformers = new Movie('Transformers','Action', 'Michael Bay',["Megan Fox","Shia LaBeouf","Josh Duhamel","John Turturro","Mark Wahlberg","John Cena"], "Robot appartenenti a due diverse razze iniziano una guerra sulla Terra. Il destino dell'umanità rimane nelle mani di un ragazzo.", 1470000,"https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcRL1XgVEINwK9ZkYMu2_3Sw_4RRp7p0WRSVM6mHwvbOR-e_Lc-qMM-o3XPGXRy3GDx4");

$TheRing = new Movie('The Ring','Horror', 'Gore Verbinski',["Naomi Watts","Shia LaBeouf","David Dorfman","Daveigh Chase","Martin Henderson"], "Quattro adolescenti muoiono in circostanze misteriose, esattamente una settimana dopo aver guardato una videocassetta.", 480000,"https://m.media-amazon.com/images/M/MV5BYTQzZjhiYjYtNDMzOS00ZjNiLTg2MGMtYWZmYWNjN2U5YTVmXkEyXkFqcGdeQXVyNjI3OTcxOTU@._V1_.jpg");

$hangover = new Movie('The Hangover','Comedy', 'Todd Phillips',["Bradley Cooper","Ken Jeong","Mike Tyson","Zach Galifianakis","Edward Parker"], "Arrivato a Las Vegas per festeggiare l'addio al celibato del loro amico Doug, durante la notte il gruppetto si dà alla pazza gioia.", 4700000,"https://musicart.xboxlive.com/7/b1035100-0000-0000-0000-000000000002/504/image.jpg?w=1920&h=1080");

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
    <header class='bg-black container-fluid py-3 mb-5'>
        <h1 class='text-center text-white'>
        Php oop 1 Movies
        </h1>
    </header>
<div class="container mx-auto">
    <div class="row">
        <div class="col-4 mb-3">
             <div class="card">
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
        <div class="col-4 mb-3">
             <div class="card">
             <img src="<?php echo $TheRing->img; ?>" class="card-img-top" :alt="<?php $TheRing->name ;?>">
               <div class="card-body">
               <h5 class="card-title"> <strong>Movie:</strong> <?php echo  $TheRing->name ; ?></h5>
               <p class="card-text"><strong>Genre: </strong><?php echo $TheRing->genre; ?></p>
               <p class="card-text"><strong>Director: </strong><?php echo $TheRing->director; ?></p>
               <ul class='p-0'>
                <li>
                   <strong>Actors: </strong>
                <?php foreach ($TheRing->actors as $key => $actor) {
                   echo "-" . $actor;
                } ?>
                </li>
               </ul>
               <p class="card-text"> <strong>Plot: </strong>  <?php echo $TheRing->plot; ?></p>
               <p class="card-text"> <strong>Budget: </strong>  <?php echo $TheRing->budget . " USD" ;?></p>
               <p class="card-text"> <strong>Best Actor: </strong>  <?php echo $TheRing->getBestactors(); ?></p>
             </div>
            </div>
        </div>
        <div class="col-4 mb-3">
             <div class="card">
             <img src="<?php echo $hangover->img; ?>" class="card-img-top" :alt="<?php $hangover->name ;?>">
               <div class="card-body">
               <h5 class="card-title"> <strong>Movie:</strong> <?php echo  $hangover->name ; ?></h5>
               <p class="card-text"><strong>Genre: </strong><?php echo $hangover->genre; ?></p>
               <p class="card-text"><strong>Director: </strong><?php echo $hangover->director; ?></p>
               <ul class='p-0'>
                <li>
                   <strong>Actors: </strong>
                <?php foreach ($hangover->actors as $key => $actor) {
                   echo "-" . $actor;
                } ?>
                </li>
               </ul>
               <p class="card-text"> <strong>Plot: </strong>  <?php echo $hangover->plot; ?></p>
               <p class="card-text"> <strong>Budget: </strong>  <?php echo $hangover->budget . " USD" ;?></p>
               <p class="card-text"> <strong>Best Actor: </strong>  <?php echo $hangover->getBestactors(); ?></p>
             </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>