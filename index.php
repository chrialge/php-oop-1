<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Document</title>
    <link href='./assets/css/style.css' rel='stylesheet'>
</head>

<body>
    <div id='app'>
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="#">primary</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarID">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>

                        </div>
                    </div>
                </div>
            </nav>
        </header>
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
        <!-- Development only cdn, disable in production -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
        <script src='./assets/js/app.js'></script>
</body>

</html>