<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package obscura
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			//get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

			<!-- Begin Wrapper -->
			<div class="wrapper"><!-- Begin Intro -->
				<div class="intro">Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum, Vestibulum id ligula porta. </div>
				<ul class="social">
					<li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li><li><a class="twitter" href="#"></a></li><li><a class="pinterest" href="#"></a></li><li><a class="dribbble" href="#"></a></li><li><a class="flickr" href="#"></a></li><li><a class="linkedin" href="#"></a></li></ul><!-- End Intro -->

				<!-- Begin Blog Grid -->
				<div class="blog-wrap">
					<!-- Begin Blog -->
					<div class="blog-grid">
						<!-- Begin Image Format -->
						<div class="post format-image box">
							<div class="frame">
								<a href="post.html">
									<img src="style/images/art/post1.jpg" alt="" />
								</a>
							</div>
							<h2 class="title"><a href="post.html">Morning Glory</a></h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of autumn which I enjoy with my whole heart.</p>
							<div class="details">
								<span class="icon-image"><a href="#">September 26, 2012</a></span>
								<span class="likes"><a href="#" class="likeThis">44</a></span>
								<span class="comments"><a href="#">3</a></span>
							</div>
						</div>
						<!-- End Image Format -->


						<!-- Begin Quote Format -->
						<div class="post format-quote box">
							<blockquote>Scissors cuts paper, paper covers rock, rock crushes lizard, lizard poisons Spock, Spock smashes scissors, scissors decapitates lizard, lizard eats paper, paper disproves Spock, Spock vaporizes rock, and as it always has, rock crushes scissors.<cite>Sheldon Cooper</cite></blockquote>
							<div class="details">
								<span class="icon-quote"><a href="#">September 21, 2012</a></span>
								<span class="likes"><a href="#" class="likeThis">27</a></span>
								<span class="comments"><a href="#">4</a></span>
							</div>

						</div>
						<!-- End Quote Format -->


						<!-- Begin Video Format -->
						<div class="post format-video box">
							<div class="video frame"><iframe src="http://player.vimeo.com/video/40558553?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
							<h2 class="title"><a href="post.html">Fragments of Iceland</a></h2>
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>

							<div class="details">
								<span class="icon-video"><a href="#">September 13, 2012</a></span>
								<span class="likes"><a href="#" class="likeThis">18</a></span>
								<span class="comments"><a href="#">1</a></span>
							</div>

						</div>
						<!-- End Video Format -->


						<!-- Begin Audio Format -->
						<div class="post format-audio box">
							<div class="audio-wrapper">
								<div class="vinyl">
									<dl>
										<dt class="art">
											<img class="highlight" src="style/images/vinyl.png" />
											<img src="style/images/art/artwork.png" alt="" />
										</dt>
										<dd class="song"><div class="icon-song"></div> Om Du Möter Varg</dd>
										<dd class="artist"><div class="icon-artist"></div> Detektivbyrån</dd>
										<dd class="album"><div class="icon-album"></div> Wermland</dd>
									</dl>
								</div>
								<div class="clear"></div>
								<div class="audio">
									<audio controls="" preload="none" src="http://bayguzindesign.com/files/omdumotervarg.mp3"></audio>
								</div>
							</div>
							<p><strong>Detektivbyrån</strong> (&#8220;The Detective Agency&#8221;) was a <a title="Sweden" href="#">Swedish</a> <a title="Electronica" href="#">electronica</a> and <a title="Folk music" href="#">folk music</a> trio from <a title="Gothenburg" href="#">Gothenburg</a>. The group consisted of Anders &#8220;Flanders&#8221; Molin (<a title="Accordion" href="#">accordion</a>, <a title="Music box" href="#">music box</a>), Martin &#8220;MacGyver&#8221; Molin (<a title="Glockenspiel" href="#">glockenspiel</a>, traktofon, toy <a title="Piano" href="#">piano</a>, <a title="Theremin" href="#">Theremin</a>) and Jon Nils Emanuel Ekström <a title="Drum kit" href="#">drums</a>, <a title="Sound box" href="#">sound box</a>, <a title="Bell (instrument)" href="#">small bells</a>.</p>

							<div class="details">
								<span class="icon-audio"><a href="#">September 7, 2012</a></span>
								<span class="likes"><a href="#" class="likeThis">20</a></span>
								<span class="comments"><a href="#">1</a></span>
							</div>

						</div>
						<!-- End Audio Format -->


						<!-- Begin Standard Format -->
						<div class="post format-standard box">

							<h2 class="title"><a href="post.html">The Meridian Sun</a></h2>
							<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies.</p>
							<p>Then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains us, as it floats around us in an eternity of bliss; and then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!</p>

							<div class="details">
								<span class="icon-standard"><a href="#">August 13, 2012</a></span>
								<span class="likes"><a href="#" class="likeThis">11</a></span>
								<span class="comments"><a href="#">0</a></span>
							</div>

						</div>
						<!-- End Standard Format -->


						<!-- Begin Link Format -->
						<div class="post format-link box">

							<h2 class="title"><a href="http://bayguzin.ru/" target="_blank">The Italic Mountains<span class="arrow">&rarr;</span></a></h2>
							<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy.</p>

							<div class="details">
								<span class="icon-link"><a href="#">July 13, 2012</a></span>
								<span class="likes"><a href="#" class="likeThis">10</a></span>
								<span class="comments"><a href="#">0</a></span>
							</div>

						</div>
						<!-- End Link Format -->


						<!-- Begin Chat Format -->
						<div class="post format-chat box">
							<h2 class="title"><a href="post.html">Two Best Friends</a></h2>
							<ul>
								<li><strong>Barney:</strong> Stop pining over Marshall and Lily! Have some self respect. Now put this fiver in your mouth so that stripper with the lazy eye can vacuum it up with&#8230;</li>
								<li><strong>Ted:</strong> Barney! I&#8217;m allowed to miss them alright? They&#8217;re my two best friends.</li>
								<li><strong>Barney:</strong> I&#8217;m your two best friends!</li>
							</ul>

							<div class="details">
								<span class="icon-chat"><a href="#">June 13, 2012</a></span>
								<span class="likes"><a href="#" class="likeThis">5</a></span>
								<span class="comments"><a href="#">0</a></span>
							</div>

						</div>
						<!-- End Chat Format -->

					</div>
					<!-- End Blog -->
				</div>
				<!-- End Blog Grid -->

				<!-- Begin Page-navi -->
				<div id="navigation">
					<div class="nav-previous"><a href="#" ><span class="meta-nav-prev">&larr; Older posts</span></a></div>
					<!--
                <div class="nav-next"><a href="#" ><span class="meta-nav-next">Newer posts &rarr;</span></a></div>
                 -->
				</div>
				<!-- End Page-navi -->

			</div>
			<!-- End Wrapper -->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
