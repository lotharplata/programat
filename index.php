<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASTER EN CSS</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="Aprende CSS desde cero">

</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Curso CSS.</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
                </li>

                <img src="./images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Aprende CSS desde CERO hasta dominarlo.</h1>
            <p class="hero__paragraph">Elige aprender CSS de una vez por todas, una vez que termines este curso serás
                capaz de crear cualquier layout con CSS y crear tus propias animaciones.</p>
            <a href="#" class="cta">Comienza ahora</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué aprenderás en este curso?</h2>
            <p class="about__paragraph">Todo lo necesario y obligatorio de CSS, (Flexbox, Grid, Custom properties,
                Position, Animaciones, Box Model y más)</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./images/shapes.svg" class="about__icon">
                    <h3 class="about__title">CSS Layouts</h3>
                    <p class="about__paragrah"></p>
                </article>

                <article class="about__icons">
                    <img src="./images/paint.svg" class="about__icon">
                    <h3 class="about__title">Animaciones</h3>
                    <p class="about__paragrah"></p>
                </article>

                <article class="about__icons">
                    <img src="./images/code.svg" class="about__icon">
                    <h3 class="about__title">Sass</h3>
                    <p class="about__paragrah"></p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Curso completo de CSS. ¡Domina CSS de una vez por todas!</h2>
                    <p class="knowledge__paragraph">ALGO PARA DECIR...</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./images/macbook.png" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="price container">
            <h2 class="subtitle">Obten el plan perfecto para aprender</h2>

            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">Flexbox</p>
                    <h3 class="price__price">Free</h3>

                    <div class="price__items">
                        <p class="price__features">Flexbox</p>
                        <p class="price__features">Layouts</p>
                        <p class="price__features">Responsive</p>
                    </div>

                    <a href="#" class="price__cta">Empieza ahora</a>
                </div>


                <div class="price__element price__element--best">
                    <p class="price__name">Grid</p>
                    <h3 class="price__price">$30/mes</h3>

                    <div class="price__items">
                        <p class="price__features">Grid</p>
                        <p class="price__features">Implicit Grid</p>
                        <p class="price__features">Responsive</p>
                    </div>

                    <a href="#" class="price__cta">Empieza ahora</a>
                </div>


                <div class="price__element">
                    <p class="price__name">Animaciones</p>
                    <h3 class="price__price">$40/mes</h3>

                    <div class="price__items">
                        <p class="price__features">Animation</p>
                        <p class="price__features">Transition</p>
                        <p class="price__features">Render Website</p>
                    </div>

                    <a href="#" class="price__cta">Empieza ahora</a>
                </div>


            </div>
    

        <section class="questions container">
            <h2 class="subtitle">Introduccion a CSS</h2>
            <p class="questions__paragraph">INTRODUCCION...</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es CSS?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show"></p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué aprenderé en este curso?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">AUN ESTA POR VER...</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es CSS GRID?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show"> es una especificación de CSS que permite a los desarrolladores 
                        crear diseños de página más complejos y flexibles en comparación con los métodos tradicionales como 
                        el uso de floats o flexbox.</p>
                    </div>
                </article>
            </section>

            <section class="questions__offer">
                <h2 class="subtitle">¿Estas listo para aprender CSS?</h2>
                <p class="questions__copy"></p>
                <a href="#" class="cta">Aprende ahora</a>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Curso CSS.</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>

            <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
                <h2 class="footer__newsletter">Suscribete</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Camilo Rviera</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>