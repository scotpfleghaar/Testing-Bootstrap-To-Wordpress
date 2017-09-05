<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

    <!-- Sign Up ======================================-->
    <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>Are you ready to take you coding to the next level!</h2>
                    <p href="#" class="btn btn-lg btn-block btn-success">Yes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER ======================================-->
    <footer>
        <div class="container">
            <div class="col-sm-3">
                <p>
                    <a href="/"><img src="assets/img/logo.png" alt="bootstrap to wordpress"></a>
                </p>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                        <li>
                            <a href="">Resources</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
                        <li class="signup-link">
                            <a href="">Sign up now</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3">
                <p class="pull-right">&copy; Scot Pfleghaar</p>
            </div>
        </div>
    </footer>

    <!-- MODAL ======================================-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialoge">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envalope"></i>Subscribe to our mailing list</h4>
                </div>

                <div class="modal-body">
                    <p>Simply enter you name and e-mail</p>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-name">Your first name</label>
                            <input type="text" class="form-control" id="subscribe-name" placeholder="Your First Name">
                        </div>
                    </form>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">And your email</label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="and your e-mail">

                        </div>
                        <input type="submit" class="btn btn-danger" value="Suscribe!">
                    </form>
                    <hr>
                    <p>By providing your email to consent to recieving occasional promotional emails.</p>
                </div>
            </div>
        </div>
    </div>



    <?php wp_footer(); ?>
    <script src="assets/js/main.js"></script>

    </body>

    </html>
