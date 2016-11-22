<?php

  get_header_front_page();

?>
<div id="content" class="site-content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class="container-fluid module">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-sm-4">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/me.jpg" alt="Liam Richardson" class="responsive-image about-me__image" />
            </div>

            <div class="col-sm-8">
              <h2>Hey there</h2>
              <p>I'm Liam Richardson, a Front End Web Developer and Designer currently situated in the North East of England.</p><p>Since graduating with a first class honours degree in Web Design in 2013, I have had the privilege of working with some of the
best talent in the industry, creating exciting digital experiences for high profile clients such as Citizens Advice, International
Hotels Group, Gazprom Energy and Astra Zeneca.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="module module--background" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/japan-bw.jpg);">
        <div class="container-fluid ">
          <div class="row flex--center-desktop">
            <div class="col-sm-8">
              <h2>Projects</h2>
              <p>I have had the opportunity to work with a diverse range of clients on a large number of exciting projects over the past few years, from being the lead front end developer on the Citzens Advice re-development project, to helping Sport England continue to keep the spirit of sport alive following the 2012 London Olympic games.</p>
            </div>

            <div class="col-sm-4 align-right">
              <a href="projects/" class="margin-top-mobile square-link square-link--white">See all</a>
            </div>
          </div>
        </div>
      </section>

      <section class="container-fluid module">
        <div class="container-fluid ">
          <div class="row flex--center-desktop">

            <div class="col-sm-8 col-sm-push-4">
              <h2>Talks & Workshops</h2>
              <p>I have both spoken and conducted workshops at a number of institutions and events such as UCLAN, MMU, Manchester Front End, Manchester Tech Nights, Front End North and Camp Digital.</p>
              <p>My sessions have focused on an a eclectic range of topics, including responsive design, CSS animations, modern CSS features
and the emotional issues of working within a fast paced industry.</p>
            </div>

            <div class="col-sm-4 col-sm-pull-8 align-left">
              <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/me-talk.jpg" alt="Liam Richardson" class="responsive-image about-me__image" /> -->
              <a href="https://www.youtube.com/watch?v=gdCNH26v-EQ" target="_blank" class="margin-top-mobile square-link square-link--black">Watch a talk</a>
            </div>
          </div>
        </div>
      </section>

      <section class="module module--block module--center" >
        <div class="container-fluid ">
          <div class="row">
            <div class="col-sm-12">
              <h2>Drop me a line</h2>
              <p>Trying to contact me? Looking to hire me? Curious as to why I think that Resident Evil 4 is arguably the
              greatest video game ever created? Baffled as to why I quite enjoy the 2005 film adaptation of The Hitchhiker's Guide to the Galaxy
            despite it having poor casting choices and straying too far from the original source material? Wanting to congratulate me
              for my undying love of non-offensive indie music? Then send me a message.
            </p>
              <a href="get-in-touch/" class="square-link square-link--white square-link--margin-top">Get in touch</a>
            </div>
          </div>
        </div>
      </section>

    </main>
  </div>
</div>

<?php

  get_footer();

?>
