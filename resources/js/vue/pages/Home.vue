<template>
    <link rel="stylesheet" href="/css/home.css" />
    <header role="banner" class="navbar" id="navbar">
        <div class="container navbar navbar-expand-lg">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between">
                    <a href="#" class="navbar-brand">
                        <img
                            src="/img/appdev-light.png"
                            alt=""
                            srcset=""
                            class="w-25"
                        />
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">
                                <span>About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <router-link :to="{ name: 'login' }">
                                    <span>Login</span></router-link
                                >
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper body-wrapper">
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="title">BUILD WITH US</h1>
                        <br />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Cras porttitor semper ex, quis aliquam nulla
                            fringilla nec. Ut pellentesque, ipsum et condimentum
                            posuere, risus turpis vehicula urna, sed vulputate
                            nibh tortor sit amet eros. Maecenas commodo aliquam
                            mauris, quis elementum ligula semper at. Sed
                            vulputate pulvinar porta.
                        </p>
                        <p>
                            Aenean ut eleifend mauris. Duis nec egestas ipsum.
                            Donec ultricies fringilla consectetur. Pellentesque
                            lectus metus, pulvinar sed dapibus eu, venenatis
                            semper est.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="/img/appdev-dark.png" class="about-logo" />
                    </div>
                    <div class="col-md-4 about-section">
                        <div class="icon-wrapper">
                            <img src="/img/team.svg" alt="team" class="icon" />
                        </div>
                        <h3 class="headline">Who are we?</h3>
                        <p class="description">
                            Etiam elementum lectus mi, at viverra diam venenatis
                            at. Etiam ullamcorper justo sed lacinia lobortis.
                            Cras tempor fringilla ante sollicitudin congue.
                            Phasellus libero augue, porta eu ligula quis,
                            sagittis aliquam risus. Praesent ante arcu,
                            scelerisque ac diam eget, facilisis fringilla nibh.
                            Vestibulum gravida purus ut ipsum condimentum, eu
                            pellentesque ante posuere. Nam tempor massa arcu,
                            eget finibus risus consectetur at.
                        </p>
                    </div>
                    <div class="col-md-4 about-section">
                        <div class="icon-wrapper">
                            <img src="/img/crm.svg" alt="crm" class="icon" />
                        </div>
                        <h3 class="headline">What we do?</h3>
                        <p class="description">
                            Fusce facilisis euismod porta. Phasellus quis
                            lobortis mi. Praesent sollicitudin enim justo, quis
                            imperdiet mi rhoncus ut. Curabitur ligula nisi,
                            viverra quis pharetra nec, vulputate sed urna.
                            Vestibulum in lobortis orci. Morbi efficitur neque
                            in tristique ornare. Curabitur cursus porta quam
                            fringilla sollicitudin. Curabitur sagittis sem id
                            vestibulum tristique. Aliquam malesuada, odio vitae
                            finibus pellentesque, elit lacus tempor nisl, sit
                            amet scelerisque massa augue et nunc. Pellentesque
                            ut nisi aliquet purus tincidunt sodales.
                        </p>
                    </div>
                    <div class="col-md-4 about-section">
                        <div class="icon-wrapper">
                            <img src="/img/goal.svg" alt="goal" class="icon" />
                        </div>
                        <h3 class="headline">What is our goal?</h3>
                        <p class="description">
                            Donec vel arcu metus. Nulla nec orci vitae quam
                            ultrices laoreet. Donec nulla sapien, cursus eget
                            ipsum eu, tincidunt congue enim. Nullam aliquam
                            eleifend nunc, quis congue nibh fermentum vitae.
                            Mauris mollis tempor velit quis ornare. Morbi
                            tincidunt sed tellus id dignissim. Phasellus libero
                            lectus, placerat a urna eu, volutpat tincidunt eros.
                            Aenean vel velit at ligula sollicitudin porttitor at
                            id tellus. Cras nec tincidunt nisl.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contributors"></section>
    </div>
</template>

<script>
export default {};
</script>
