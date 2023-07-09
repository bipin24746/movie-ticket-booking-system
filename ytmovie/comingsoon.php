<?php
include("header.php");
include("conn.php");

$con = new connec();
$tbl = "movie";
$result = $con->select_movie($tbl, "now()");
?>

<section class="mt-5">
    <h5 class="text-center pb-2">Coming Soon</h5>

    <div class="container">
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $ind = $con->select("industry", $row["industry_id"]);
                    $indrow = $ind->fetch_assoc();

                    $lang = $con->select("language", $row["lang_id"]);
                    $langrow = $lang->fetch_assoc();

                    $genre = $con->select("genre", $row["genre_id"]);
                    $genrerow = $genre->fetch_assoc();
                    ?>
                    <div class="col-md-3">
                        <img src="<?php echo $row["movie_banner"]; ?>" style="width: 100%; height: 250px;">
                        <h6 class="text-center"><?php echo $row["name"]; ?></h6>
                        <div class="mt-2">
                            <p class="pb-2">Release Date: <?php echo $row["rel_date"]; ?></p>
                            <p class="pb-2">Industry: <?php echo $indrow["industry_name"]; ?></p>
                            <p class="pb-2">Language: <?php echo $langrow["lang_name"]; ?></p>
                            <p class="pb-2">Genre: <?php echo $genrerow["genre_name"]; ?></p>
                        </div>
                        <div>
                            <a href="trailer.php" class="btn bg-red-950 text-white mb-4">Watch Trailer</a>
                        </div>
                    </div>
                    <?php
                }
            }else {
                echo "<p>No movies currently showing.</p>";
            }
            ?>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>
