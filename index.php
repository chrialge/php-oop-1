<?php
include __DIR__ . './assets/layout/head.php';
include __DIR__ . './assets/partials/header.php'
?>
<main>
    <div class="container-lg py-5 ">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-3" v-for="seriesAndMovie in productions">
            <div class="col" v-for="movie in seriesAndMovie" style="min-height: 100%;">
                <div class="card" style="width:18rem; min-height: 100%;">
                    <div class="container_img d-flex align-items-center" style="height: 300px;">
                        <img :src="movie.image" class="card-img-top" alt="...">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Title: {{movie.title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">Language: {{movie.language}}</h6>
                        <p class="card-text">Vote: {{movie.vote}}</p>
                        <p class="card-text" v-if="movie.time">Time: {{movie.time}}</p>
                        <p class="card-text" v-if="movie.profile">Profits: {{movie.profits}}</p>
                        <p class="card-text" v-if="movie.profile">Profits: {{movie.profits}}</p>
                        <p class="card-text" v-if="movie.season">Season: {{movie.season}}</p>

                        <p class="card-text">geners: {{movie.genre.name}}</p>
                        <p class="card-text">description: {{movie.genre.description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . './assets/layout/foot.php'
?>