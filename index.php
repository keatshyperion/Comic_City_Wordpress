<?php
    /*
        Template Name: Blog
    */
?>

<?php get_header(); ?>
<div class="row register--Title">
                    <h1><?php single_post_title(); ?></h1>
                </div>
<div class="row">
    <div class="col-lg-9 articles">
        <div class="row shop d-flex shop--Title justify-content-center hot--art">

                <div class="shopping d-flex col-12 col-lg-3 flex-column align-items-center">
                    <div class="the thee">THE</div>
                    <div class="shopText blog--text">HOT</div>
                    <div class="shopText blog--text">STORIES</div>
                    <div class="collections"><span class="cursor">ALL ARTICLES</span> | <span class="cursor">ALL STORIES</span></div>
                </div>
                <div id="cov4" class="shop--Big--Item col-lg-3 hot--story">
                    <div class="coverBig">
                        <img src="lastest_Posts/superman--small.png" alt="">

                        <button id="btn4" class="cart">READ MORE</button>
                    </div>
                    <div class="genre">Article</div>
                    <div class="title">
                        Last chapter of Superman?
                    </div>
                    <div class="avail">
                        Johnny | Today
                    </div>
                </div>
                <div id="cov1" class="col-lg-3 shop--Big--Item hot--story">
                    <div class="coverBig">
                        <img src="lastest_Posts/harry--small.png" alt="">
                        <button id="btn1" class="cart">READ MORE</button>
                    </div>
                    <div class="genre">COMIC BOOK</div>
                    <div class="title">
                        Harry Potter new Avenger?!
                    </div>
                    <div class="avail">
                        Jane | Two Weeks Ago
                    </div>
                </div>
                <div id="cov2" class="shop--Big--Item col-lg-3 hot--story">
                    <div class="coverBig">
                        <img src="lastest_Posts/rogue--small.png" alt="">
                        <button id="btn2" class="cart">READ MORE</button>
                    </div>
                    <div class="genre">COMIC BOOK</div>
                    <div class="title">
                        12 most powerful female superheroes.
                    </div>
                    <div class="avail">
                        Elizabeth | Month Ago
                    </div>
                </div>
            </div>
            <div class="artykuly">
                <?php if (have_posts() ) : while ( have_posts() ) : the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
            </div>
            <div class="col-lg-3 sidekick">
        <div class="row share">
            <div class="row share--title">SHARE ONLINE</div>
                <div class="col-lg-3 share--button"><i class="icon-facebook-circled"></i></div>      
                <div class="col-lg-3 share--button"> <i class="icon-twitter-circled"></i></div>
                <div class="col-lg-3 share--button"><i class="icon-gplus-circled"></i></div>
                <div class="col-lg-3 share--button"> <i class="icon-youtube-play"></i></div>
            </div>
            <div class="last--comments">
                <div class="row share--title">LAST COMMENTS</div>
                <ul>
                    <li><a href="#">WHEN DO WE STOP?</a></li>
                    <li><a href="#">MARVEL IS NOT STOPPING</a></li>
                    <li><a href="#">AUGUST FULL OF SURPRISES</a></li>
                    <li><a href="#">SHADOW OVER GOTHAM</a></li>
                    <li><a href="#">MARQUEE FROM 80'S</a></li>
                    <li><a href="#">DON'T BLINK</a></li>
                </ul>
            </div>
            <div class="categories">
                <div class="row share--title">CATEGORIES</div>
                <div class="d-flex justify-content-center">
                    <select>
                        <option value="volvo">Marvel</option>
                        <option value="volvo">DC Comics</option>
                        <option value="volvo">Avengers</option>
                        <option value="volvo">Dark Horse</option>
                        <option value="volvo">Top Lists</option>
                        <option value="volvo">Reviews</option>
                        <option value="volvo">Translations</option>
                        <option value="volvo">Games</option>
                        <option value="volvo">Movie Adaptations</option>
                    </select></div>
            </div>
            <div class="tags">
                <div class="row share--title">TAGS</div>
                <div class="row t1">
                    <div class="col-lg-3 tag--item">AVENGER</div>
                    <div class="col-lg-3 tag--item">BATMAN</div>
                    <div class="col-lg-3 tag--item">NASA</div>
                </div>
                <div class="row t1">
                    <div class="col-lg-6 tag--item">JOKER</div>
                    <div class="col-lg-3 tag--item">DC COMICS</div>
                </div>
                <div class="row t1">
                    <div class="col-lg-3 tag--item">FEMALE</div>
                    <div class="col-lg-4 tag--item">PANTS</div>
                    <div class="col-lg-3 tag--item">FIGHT</div>
                </div>
                <div class="row t1">
                    <div class="col-lg-5 tag--item">POWERS</div>
                    <div class="col-lg-2 tag--item">DR</div>
                    <div class="col-lg-3 tag--item">STRANGE</div>
                </div>
                <div class="row t1">
                    <div class="col-lg-3 tag--item">DEADPOOL</div>
                    <div class="col-lg-3 tag--item">TONY</div>
                    <div class="col-lg-3 tag--item">SUPERMAN</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</div>
<?php get_footer(); ?>