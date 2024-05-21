<?php

define('__ROOT__', dirname(dirname(__FILE__)));

class Gallery {
    public function showGallery() {
        $data = json_decode(file_get_contents(__ROOT__.'/data/gallery.json'), true);
        $link = $data["link"];
        $title = $data["title"];
        $genre = $data["genre"];
        $director = $data["director"];
        $rating = $data["rating"];

        $rep = (int) ceil(count($link) / 4);

        $am = count($link);

        $c = 0;

        for ($i=0; $i < $rep; $i++) {
            if ($i == 0) {
                echo '<div class="carousel-item active">';
            } else {
                echo '<div class="carousel-item">';
            }
            
            echo '<div class="container w-75">';
            echo '<div class="row gap-5 d-flex justify-content-center mt-5 mb-5">';
            for ($j=0; $j < min($am, 4); $j++) {
                echo '<div class="image-container col-md-5 align-self-center">';
                $x = __ROOT__.$link[$c];
                echo '<img style="width: 100%;" src="'.$link[$c].'" alt="...">';
                echo '<div class="text-center overlay">';
                echo '<p><h4>'.$title[$c].'</h4></p>';
                echo '<p>Genre - '.$genre[$c].'</p>';
                echo '<p>Director - '.$director[$c].'</p>';
                echo '<p>IMDB - '.$rating[$c].'</p>';
                echo '</div>';
                echo '</div>';
                $c++;
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
            $am -= 4;
        }
    }
}

?>