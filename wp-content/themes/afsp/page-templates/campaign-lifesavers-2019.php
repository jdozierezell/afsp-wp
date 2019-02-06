<?php
/**
 * Template Name: Campaign - Lifesavers Gala 2019
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
				<?php	if(have_posts()) : while(have_posts()) : the_post(); ?>

<section class="splash container">
    
        <?php afsp_imgix('splash__image', false, 'si', '100vw', 1532, 768, 768, 768); ?>
  
</section>
				
<div class="container lifesavers-2018">		
				
  <!-- <h2 class="green center">WEDNESDAY, MAY 16, 2018</h2>
  <p class="white center">The Appel Room, Jazz at Lincoln Center's Frederick P. Rose Hall<br />
                          Broadway at 60th Street, New York, NY 10019</p>
  <div class="flex">
    <div class="flex-box">
      <h2 class="green center">HOSTED BY</h2>
      <img src="http://afsp.imgix.net/wp-content/uploads/2018/03/Gideon-Glick-Headshot.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center">Gideon Glick, Broadway, Film and TV Actor</p>
    </div>
    <div class="flex-box">
      <h2 class="green center">GALA CHAIR</h2>
      <img src="http://afsp.imgix.net/wp-content/uploads/2018/03/Kellerman_Jonathon_018v2_hr6.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center">Jonathon Kellerman, Executive Vice President&nbsp;&&nbsp;Global Chief Compliance Officer, Allergan<br />AFSP National Board</p>
    </div>
  </div>
  <h2 class="green center">HONORING</h2>
  <div class="flex"> 
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2018/03/Phantogram_NSphoto.jpg.jpeg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Public Awareness Award</strong><br />Phantogram</p>
    </div>
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2018/03/Oskar-Laurie-Eustis.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Survivors of Loss Award</strong><br />Oskar &amp; Laurie Eustis</p>
    </div>
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2018/03/MichaelW028-Edit.png?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Public Service Award</strong><br />Michael Wasserman</p>
    </div>
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2018/03/Dr.-Cheryl-King.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Research Award</strong><br />Dr. Cheryl King,&nbsp;Ph.D.</p>
    </div>
  </div> -->
  <div class="program-feature__button">
    <a class="button features__button" href="https://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.event&eventID=5918">Purchase Tickets</a>
  </div>
  <!-- <h2 class="green center">ABOUT THE GALA</h2>
  <div class="about white">
    <p>Each year, the American Foundation for Suicide Prevention holds the Lifesaver’s Gala, at which we honor individuals and organizations that have made a substantial contribution to suicide prevention. From scientists, to public policy advocates, to loss and attempt survivors and others, Gala honorees have gone above and beyond in drawing attention to the cause, elevating public discourse around mental health and suicide, and successfully creating real change within our society as a means to ending this leading cause of death.</p>
    <p>In addition to raising much-needed funds for AFSP’s leading initiatives in the areas of research, education, advocacy and support for those affected by suicide, the Gala is an opportunity for our supporters to come together and recognize the past year’s accomplishments. Our distinguished guests share inspiring and informative stories about how suicide has affected them, and their valiant and passionate efforts to fight it.</p>
    <p>Together, we look forward to how we can all make a difference in the year ahead.</p>
  </div>
  <h2 class="green center">2018 LIFESAVERS GALA COMMITTEE</h2>
  <div class="committee flex">
    <p class="flex-box white"><strong>John Arena</strong><br />
                                      Lundbeck</p>
    <p class="flex-box white"><strong>John Bardi</strong><br />
                                      Otsuka America Pharmaceutical, Inc.</p>
    <p class="flex-box white"><strong>Carla Canuso, M.D.</strong><br />
                                      Janssen Research &amp; Development</p>
    <p class="flex-box white"><strong>Marian and James Cohen</strong><br />
                                      AFSP National Board</p>
    <p class="flex-box white"><strong>Jim Compton</strong><br />
                                      AFSP National Board</p>
    <p class="flex-box white"><strong>Nancy Farrell, MPA</strong><br />
                                      Regina Villa Associates &amp; AFSP National Board</p>
    <p class="flex-box white"><strong>Paul Ghiz</strong><br />
                                      Global Cloud</p>
    <p class="flex-box white"><strong>Todd Levy</strong><br />
                                      Global Cloud</p>
    <p class="flex-box white"><strong>Husseini Manji, M.D.</strong><br />
                                      Janssen Research &amp; Development</p>
    <p class="flex-box white"><strong>Elizabeth Pappadopulos, Ph.D.</strong><br />
                                      Pfizer Inc.</p>
    <p class="flex-box white"><strong>Ray Paul Jr.</strong><br />
                                      AFSP National Board</p>
    <p class="flex-box white"><strong>Kelly Posner, Ph.D.</strong><br />
                                      Columbia University Medical Center &amp; AFSP National Board</p>
    <p class="flex-box white"><strong>Andrew Rogoff, Esq.</strong><br />
                                      Pepper Hamilton LLP &amp; AFSP National Board</p>
    <p class="flex-box white"><strong>Maureen Sheltry</strong><br />
                                      Sunovion Pharmaceuticals, Inc.</p>
    <p class="flex-box white"><strong>Steve Siple</strong><br />
                                      Capstone Development Partners, LLC &amp; AFSP National Board Chair</p>
    <p class="flex-box white"><strong>Andrew Slaby, M.D., Ph.D., MPH</strong><br />
                                      New York University Medical School &amp; AFSP National Board</p>
    <p class="flex-box white"><strong>Marco Taglietti, M.D.</strong><br />
                                      SCYNEXIS, Inc. &amp; AFSP National Board</p>
  </div>
  <h2 class="green center">2018 LIFESAVERS GALA HOST &amp; HONOREE BIOS</h2>
  <div class="about white">
    <p><strong>Gideon Glick (Host)</strong> is a rising stage and film star who first came to attention in his lead role in the hit Broadway musical Spring Awakening, which dealt sensitively with the topic of suicide. He is currently the face of the Seize the Awkward PSA campaign, launched by AFSP in conjunction with the Ad Council, The Jed Foundation, and ad firm Droga5, in which he stars as the personification of Awkward Silence, comically appearing between people trying to have important – but potentially awkward – conversations about how they’re feeling. Gideon’s likable, relatable presence encourages its young audience of ages 16-24 to open up to their friends about mental health challenges. Gideon’s other stage credits include Significant Other, The Harvest, Into the Woods, The Few, and Spider-Man: Turn Off the Dark. He has appeared in motion pictures including Song One, co-starring Anne Hathaway. He can next be seen in the highly anticipated movie sequel Ocean’s 8, appearing alongside Sandra Bullock, Rihanna, Cate Blanchett, and Helena Bonham Carter. </p><br />
    <p>Sarah Barthel and Josh Carter comprise the celebrated music duo <strong>Phantogram</strong>. Their debut album, recorded in a barn in Saratoga Springs, New York (a stone’s throw from their hometown of Greenwich), was released in 2009. With Sarah on vocals and keyboard, and Josh on vocals and guitar, their music has been described as electro rock, dream pop, electronica and trip hop. Phantogram has since collaborated with musicians including Miley Cyrus, The Flaming Lips, and OutKast’s Big Boi. Their original music has been remixed and sampled by Kanye West, Charli XCX, and A$AP Rocky. Their most recent album, Three, bears the mark of personal tragedy, as Bartel’s sister (and Carter’s close friend since childhood) died by suicide while the band was in the process of recording. “It’s about heartbreak, and having to push forward and move on—and how challenging that is,” Barthel has remarked. “[The experience has] made us the people we really are, and it’s a huge part of what this record means to us.” Phantogram have since drawn attention to the cause, dedicating songs in their concerts to Sarah’s sister, and donating a portion of their tour’s ticket sales to AFSP. They continue to speak out forthrightly in interviews about mental health and suicide prevention, and urge those who are struggling to reach out for help.</p><br />
    <p><strong>Oskar and Laurie Eustis</strong> have been leaders of the artistic community in New York and across the country for more than 25 years. Oskar has served as the Artistic Director of The Public Theater since 2005. During his tenure at The Public he has produced such acclaimed pieces of theater as the revival of Hair; Fun Home by Lisa Kron and Jeannie Tesori; Hamlet starring Oscar Isaac; Here Lies Love by David Byrne and Alex Timbers; Father Comes Home From The Wars by Suzan-Lori Parks; and Lin-Manuel Miranda’s Hamilton. Laurie Eustis, during her time in Los Angeles, worked at Rogers and Cowan Public Relations and as a casting director at Embassy Television. She also served as a producer at Mark Taper Forum, where she championed their annual New Play Festival, among other projects. Here in New York, in addition to her work as a poet, she has served as Director of Development at both Lapham’s Quarterly and The Paris Review. Tragically, Oskar and Laurie lost their 16-year-old son Jack to suicide in 2014. Since then, Oskar and Laurie have been outspoken about their loss, finding and noting parallels in their work and drawing on the power of art to raise awareness and grapple with the complex grief caused by suicide.</p><br />
    <p><strong>Michael Wasserman</strong> is the CEO of Tiltify, the first crowdfunding platform designed specifically for charity livestreams. Having worked in the philanthropic industry for almost a decade, Michael has worked with dozens of top charities honing online and offline strategies, helping to raise tens of millions in donations. A lifelong entrepreneur as well as a bit of a tech geek and gamer, Michael co-founded Tiltify in 2013, seeing an emerging market in livestream fundraising, especially in the booming game stream market. Michael lost his brother to suicide, and has been instrumental in bringing AFSP to the streaming community through Tiltify, and the streaming platform Twitch. AFSP has since raised over half $1 million dollars on the Tiltify platform. Michael continues to use his platform to spread education and raise awareness for suicide prevention.</p><br />
    <p><strong>Dr. Cheryl King</strong> is a professor in the Departments of Psychiatry and Psychology at the University of Michigan and has focused her career on suicidal ideation and behavior among teens and young adults. <br /><br />Under her leadership, the Youth and Young Adult Depression and Suicide Prevention Research Program focuses on the development and improvement of evidence-based screening tools, risk assessment strategies, and psychosocial interventions for suicidal adolescents and young adults. She currently leads a large-scale National Institute of Mental Health-funded study that will develop and validate a personalized and adaptive youth suicide risk screening tool for use in medical emergency departments. Dr. King also currently leads two intervention studies, one of which examines the efficacy of eBridge, an online personalized suicide risk screening tool with optional online counseling for college students; the other examines a mentorship intervention for youth, ages 12 to 15, who are at risk for suicidal behavior due to experiences with bullying perpetration and victimization. Dr. King serves on AFSP’s Scientific Advisory Board, and has mentored AFSP Young Investigators. AFSP has funded Dr. King’s research, as well as those she has mentored, helping to expand our understanding of youth suicide prevention.</p>
  </div> -->
</div>  				 
  				
				<?php endwhile;
				endif; ?>

				<?php get_footer(); ?>