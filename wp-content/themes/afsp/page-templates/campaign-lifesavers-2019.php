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
				
<div class="container lifesavers-2019">		
				
  <h2 class="blue center">WEDNESDAY, MAY 7, 2019</h2>
  <p class="white center">The Appel Room, Jazz at Lincoln Center's Frederick P. Rose Hall<br />
                          Broadway at 60th Street, New York, NY 10019</p>
  <div class="flex">
    <div class="flex-box">
      <h2 class="blue center">HOSTED BY</h2>
      <img src="http://afsp.imgix.net/wp-content/uploads/2018/03/Gideon-Glick-Headshot.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center">Alex Boy&eacute;, Singer, Songwriter</p>
    </div>
    <div class="flex-box">
      <h2 class="blue center">GALA CHAIR</h2>
      <img src="http://afsp.imgix.net/wp-content/uploads/2019/03/Manji_Husseini.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center">Husseini Manji, M.D., Global Therapeutic Head, Neuroscience, JAnssen Research and Development, LLC</p>
    </div>
  </div>
  <h2 class="blue center">HONORING</h2>
  <div class="flex"> 
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2019/03/greg-simon-head-shot-2017.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Research Award</strong><br />Greg Simon, M.D., Senior Investigator, Kaiser Permanente Washington Health Research Institute</p>
    </div>
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2019/03/11_01_18_NYP_Phys_Dr_Mann_56.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Research Lifetime Achievement Award</strong><br />J. John Mann, M.D., The Paul Janssen Professor of Translational Neuroscience in Psychiatry and Radiology, Columbia University</p>
    </div>
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2019/03/thumbnail_IMG_6451.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Survivors of Loss Award</strong><br />Solomon Thomas (San Francisco 49ers), parents Chris &amp; Martha Thomas</p>
    </div>
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2019/03/Snow-Headshot.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Public Awareness Award</strong><br />Kate Snow, NBC News Senior National Correspondent</p>
    </div>
    <div class="flex-box">
      <img src="http://afsp.imgix.net/wp-content/uploads/2019/03/140225123034-anderson-cooper-profile-full-169.jpg?crop=faces&fit=crop&w=600&h=600">
      <p class="white center"><strong>Public Awareness Award</strong><br />Anderson Cooper, CNN Anchor and 60 Minutes Correspondent</p>
    </div>
  </div> -->
  <div class="program-feature__button">
    <a class="button features__button" href="https://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.event&eventID=5918">Purchase Tickets</a>
  </div>
  <!-- <h2 class="blue center">ABOUT THE GALA</h2>
  <div class="about white">
    <p>Each year, the American Foundation for Suicide Prevention holds the Lifesaver’s Gala, at which we honor individuals and organizations that have made a substantial contribution to suicide prevention. From scientists, to public policy advocates, to loss and attempt survivors and others, Gala honorees have gone above and beyond in drawing attention to the cause, elevating public discourse around mental health and suicide, and successfully creating real change within our society as a means to ending this leading cause of death.</p>
    <p>In addition to raising much-needed funds for AFSP’s leading initiatives in the areas of research, education, advocacy and support for those affected by suicide, the Gala is an opportunity for our supporters to come together and recognize the past year’s accomplishments. Our distinguished guests share inspiring and informative stories about how suicide has affected them, and their valiant and passionate efforts to fight it.</p>
    <p>Together, we look forward to how we can all make a difference in the year ahead.</p>
  </div>
  <h2 class="blue center">2018 LIFESAVERS GALA COMMITTEE</h2>
  <div class="committee flex">
    <p class="flex-box white"><strong>David Biondi</strong><br />
                                      Lundbeck</p>
    <p class="flex-box white"><strong>Carla Canuso, M.D.</strong><br />
                                      Janssen Research &amp; Development</p>
    <p class="flex-box white"><strong>Marian and James Cohen</strong><br />
                                      AFSP National Board</p>
    <p class="flex-box white"><strong>Jim Compton</strong><br />
                                      AFSP National Board</p>
    <p class="flex-box white"><strong>Nancy Farrell, MPA</strong><br />
                                      Regina Villa Associates &amp; AFSP National Board</p>
    <p class="flex-box white"><strong>Nina Gussack</strong><br />
                                      Pepper Hamilton LLP</p>
    <p class="flex-box white"><strong>Jonathon Kellerman</strong><br />
                                      Allergan & AFSP National Board</p>
    <p class="flex-box white"><strong>Mary Michael</strong><br />
                                      Otsuka</p>
    <p class="flex-box white"><strong>Elizabeth Pappadopulos, Ph.D.</strong><br />
                                      Pfizer Inc.</p>
    <p class="flex-box white"><strong>Ray Paul Jr.</strong><br />
                                      AFSP National Board</p>
    <p class="flex-box white"><strong>Kelly Posner, Ph.D.</strong><br />
                                      Columbia University Medical Center &amp; AFSP National Board</p>
    <p class="flex-box white"><strong>Maureen Sheltry</strong><br />
                                      Sunovion Pharmaceuticals, Inc.</p>
    <p class="flex-box white"><strong>Steve Siple</strong><br />
                                      AFSP National Board Chair</p>
    <p class="flex-box white"><strong>Andrew Slaby, M.D., Ph.D., MPH</strong><br />
                                      New York University Medical School &amp; AFSP National Board</p>
    <p class="flex-box white"><strong>Marco Taglietti, M.D.</strong><br />
                                      SCYNEXIS, Inc. &amp; AFSP National Board</p>
  </div>
  <h2 class="blue center">2019 LIFESAVERS GALA HOST &amp; HONOREE BIOS</h2>
  <div class="about white">
    <p><strong>Alex Boy&eacute; (Host)</strong> is a musician who began his career in the successful European boy band Awesome before moving to the U.S. to pursue a career as a solo artist. He was named the "2017 Rising Artist of the Year" in a contest sponsored by Pepsi and Hard Rock Café. His blend of African-infused pop music with lyrics that contain messages of positivity and perseverance, captured in visually dynamic music videos, has led to viral hits, with almost one billion views on his YouTube channel. He has shared the stage with many notable artists including, Jay-Z, Tim McGraw, George Michael, Missy Elliott, Justin Timberlake and The Beach Boys, and has opened for Olivia Newton John at the world-renowned Royal Albert Hall in London. In 2016, he appeared in a duet with Marie Osmond on her album Music is Medicine. This past September, he partnered with producer Randy Jackson of "American Idol," the American Foundation for Suicide Prevention and the Forever Young Foundation to release a suicide prevention-themed song and video entitled "Bend Not Break." Currently, Alex is working on his forthcoming album, set for release early next year.</p><br />
    <p><strong>Gregory Simon, M.D., MPH</strong> is an investigator at Kaiser Permanente Washington Health Research Institute and a psychiatrist in Kaiser Permanente’s Behavioral Health Service. He is also a research professor in the Department of Psychiatry and Behavioral Sciences at the University of Washington. Dr. Simon’s research focuses on improving access to and quality of mental health care, especially for mood disorders. He strives to bring research findings into clinical practice, and works to identify who is at risk for suicide and how to provide interventions to save lives. Specific areas of research include: improving adherence to medication; increasing the availability of effective psychotherapy; evaluating peer support by and for people with mood disorders; identifying and reducing risk of suicidal behavior; cost-effectiveness of treatment; and comorbidity of mood disorders with chronic medical conditions. He recently published a landmark paper that analyzed electronic medical record information to understand who may be at risk for suicide. Dr. Simon currently leads the Mental Health Research Network, a National Institute of Mental Health-funded cooperative agreement supporting population-based mental health research across 13 large health systems.</p><br />
    <p><strong>J. John Mann, M.D.</strong> is The Paul Janssen Professor of Translational Neuroscience (in psychiatry and radiology) at Columbia University and Director, Molecular Imaging and Neuropathology Division (M.I.N.D.) at the New York State Psychiatric Institute. He is a past president of the Society of Biological Psychiatry, the International Academy of Suicide Research and the American Foundation for Suicide Prevention. He is a Distinguished Life Fellow of the American Psychiatric Association and a Fellow of the American College of Neuropsychopharmacology. Dr. Mann’s research employs functional brain imaging, neurochemistry and molecular genetics to probe the causes of depression and suicide. In private practice he specializes in the treatment of mood disorders, and has been repeatedly named as America's and New York Best Doctors by Castle Connolly. A major contributor to suicide prevention research for decades with over 500 publications and 11 books, Dr. Mann’s contributions have shaped our understanding of the biology of suicide and the impact of suicide loss on the bereaved. He has mentored many of the suicide researchers who continue to contribute to the field of suicide prevention. Dr. Mann has received numerous research and teaching awards, including the American Suicide Foundation Research Award, the American Association of Suicidology Louis I. Dublin Award, and the New York State Office of Mental Health Research Award.</p><br />
    <p>In 2018, San Francisco 49ers football star <strong>Solomon Thomas</strong> lost his beloved sister Ella to suicide. Alongside his parents <strong>Chris and Martha</strong>, and with the rest of the Thomas family, Solomon has bravely used his platform in the NFL to go public with the message that suicide is preventable, and that there is always an outlet for those seeking help. From participating in the 2018 Dallas Out of the Darkness Overnight Walk, to sparking a national conversation about suicide through a powerful article and interview on ESPN about their loss, Solomon and the Thomas Family have become fierce advocates for suicide prevention, and have involved the San Francisco 49ers in supporting AFSP’s Northern California chapter, honoring Ella’s memory by helping to raise awareness and funds. Solomon, in his ESPN interview, conveyed a message of hope to other families who have lost someone, as well as to those who struggle: "To families out there going through this: The best thing you can do is stay together. It's always one day at a time…I feel like someone out there is reading this right now who doesn't know how they are going to be able to make it through the rest of their life without the person who has just taken their life…But I know it can be done, as painful as it is…And to the people who are struggling with anxiety and depression, please…do not feel ashamed. It's not your fault…and there is help."</p><br />
    <p><strong>Kate Snow</strong> is the anchor of "NBC Nightly News" Sunday and an award-winning Senior National Correspondent for NBC News. Before joining NBC News in 2010, she was a co-anchor for the weekend edition of "Good Morning America" on ABC from 2004 to 2010. Her reporting appears across all platforms of NBC News and MSNBC. She currently contributes regularly to "Nightly News with Lester Holt," "TODAY," and "Dateline NBC." Kate is perhaps best known for insightful stories that make an impact. Her reporting has won both Emmy and duPont awards. Kate has also covered politics throughout her career, including five presidential elections, the White House and Congress. In 2015, she interviewed Zelda Williams following the loss of her father, Robin Williams. And in the wake of the tragic deaths of Kate Spade and Anthony Bourdain, Kate shared a very personal take on mental illness in a segment on "TODAY," revealing the devastating impact her father-in-law’s suicide had on her family. Kate has safely shared her story and responsibly reported on suicide, using appropriate language and safe messaging as recommended by AFSP. She has been outspoken about her loss on NBC, social media and beyond, decreasing the sense of shame that sometimes surrounds mental health and suicide. Kate also served as host of the 27th Annual Lifesavers Gala in 2015.</p><br />
    <p><strong>Anderson Cooper</strong> is the anchor of CNN's "Anderson Cooper 360°," a global newscast that goes beyond the headlines with in-depth reporting and investigations. Since the start of his career in 1992, Anderson has worked in more than forty countries and has covered nearly all-major news events around the world, often reporting from the scene. He has played a pivotal role in CNN's political and election coverage, and has anchored from conventions and moderated several presidential primary debates and town halls. In addition to his shows on CNN, Anderson is also a regular correspondent for CBS's "60 Minutes." He has been awarded 16 Emmy Awards, including two for his coverage of the earthquake in Haiti, and an Edward R Murrow award. Anderson is a survivor of suicide loss, losing his brother Carter, in 1988. In 2016, his book "The Rainbow Comes and Goes: A Mother and Son on Life, Love, and Loss" – a collection of correspondence between Anderson and his mother, Gloria Vanderbilt – debuted at the top of the "New York Times" Best-Sellers List and remained on the list for three months. Following the deaths this past year of Kate Spade and his friend Anthony Bourdain, Anderson’s contribution to the cause was extraordinary, helping to elevate the conversation about suicide through "Finding Hope: Battling America's Suicide Crisis," a special CNN report on "Anderson Cooper 360°."</p>
  </div>
</div>  				 
  				
				<?php endwhile;
				endif; ?>

				<?php get_footer(); ?>