<?php
include __DIR__ . './assets/layout/head.php';
include __DIR__ . './assets/partials/header.php'
?>
<main>
    <div class="container-lg py-5 ">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-3">
            <div class="col" v-for="production in productions" style="min-height: 100%;">
                <div class="card" style="width:18rem; min-height: 100%;" @click="modal(production)">
                    <div class="container_img d-flex align-items-center" style="height: 300px;">
                        <img :src="production.image" class="card-img-top" alt="...">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Title: {{production.title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">Language: {{production.language}}</h6>
                        <p class="card-text">Vote: {{production.vote}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal-es" v-show="display">
    <!-- button clicked change value bool of display -->
    <button type="button" class="btn_close_modal" aria-label="Close" @click="display = !display">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="container d-flex align-items-center justify-content-center h-100">
        <div class="container_card">

            <img :src="productionActive.image" alt="" style="width: 550px;">
            <div class="card-body text-center text-light mt-3">
                <!-- get value of the key 'title' for ever disco -->
                <h4 class="card-title">{{productionActive.genre}}</h4>



            </div>
        </div>
    </div>


</div>

<?php include __DIR__ . './assets/layout/foot.php'
?>