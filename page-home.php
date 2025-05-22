<?php
/* Template Name: Home */
get_header(); ?>
<style>
  body {
      margin: 0;
      padding: 0;
    }

   header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 5px 20px; /* reduce padding */
  margin: 0;          /* ensure no default margin */
  background-color: #f8f9ff; /* or your preferred color */
}

.lab-logo {
  max-height: 60px;   /* reduce image height if needed */
  margin: 0;          /* remove space below image */
  padding: 0;         /* reset padding */
}

  .menu {
    display: flex;
    gap: 20px;
    font-family: 'Times New Roman', Times, serif;
    font-size: 16px;
    font-weight: bold;
  }

  .menu a {
    text-decoration: none;
    color: #000;
  }

  #hero {
    position: relative;
    background-size: cover;
    background-position: center;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    font-size: 5em;
    font-weight: 700;
    overflow: hidden;
    transition: background-image 1s ease-in-out;
  }

  #hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 1;
  }

  #hero span {
    position: relative;
    z-index: 2;
  }

  .flex-container {
    display: flex;
    justify-content: center;
    padding: 30px;
  }

  .description {
    max-width: 800px;
    font-family: 'Times New Roman', Times, serif;
    color: #181848;
    font-weight: normal;
    line-height: 1.7;
    text-align: justify;
    font-size: 1.1em;
  }

  section {
    max-width: 900px;
    margin: 0 auto;
    padding: 30px 20px;
    line-height: 1.6;
  }

  section h2 {
    margin-top: 0;
    color: #002d72;
  }

  .publication-list {
    padding-left: 30px;
    font-family: 'Times New Roman', Times, serif;
    font-size: 1.05em;
    line-height: 1.7;
  }

  .publication-list li {
    margin-bottom: 25px;
    text-align: justify;
  }

  .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    padding: 20px;
  }

  .gallery img {
    width: 100%;
    max-width: 300px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
  }
</style>

<header>
  <img src="<?php echo get_template_directory_uri(); ?>/Blue Modern Initial N Technology Logo.png" alt="N-TEAM Lab Logo" class="lab-logo" />
  <nav class="menu">
    <a href="<?php echo site_url('/home'); ?>">Home</a>
    <a href="<?php echo site_url('/research'); ?>">Research</a>
    <a href="<?php echo site_url('/lab-members'); ?>">Lab Members</a>
    <a href="<?php echo site_url('/publications'); ?>">Publications</a>
    <a href="<?php echo site_url('/news-archive'); ?>">News Archive</a>
    <a href="<?php echo site_url('/contact'); ?>">Contact</a>
  </nav>
</header>

<div class="container" id="hero">
  <span>Homepage</span>
</div>

<div class="flex-container">
  <div class="description">
    <p>Our research group, led by Dr. Karrer Alghazali, focuses on biomaterials and tissue engineering strategies to create advanced therapeutic solutions for regenerative medicine.</p>
    <p>The team is engaged in innovative projects involving muscle regeneration, diabetic wound healing, and cancer tissue engineering, with the goal of developing next-generation treatments that address some of the most critical health challenges.</p>
  </div>
</div>

<section id="pi">
  <h2>Principal Investigator</h2>
  <h3>Dr. Karrer Alghazali</h3>
  <p>Dr. Karrer Alghazali is the Principal Investigator of N-TEAM Lab. His research integrates biomaterials, scaffold fabrication, and spectroscopic technologies to advance tissue regeneration. Dr. Alghazali's projects focus on muscle regeneration, diabetic wound healing, and cancer tissue engineering.</p>
</section>

<section id="Publications">
  <h2>Publications</h2>
  <ul class="publication-list">
    <li>
      <strong>Nanoparticle-Labeled Exosomes as Theranostic Agents: A Review.</strong><br>
      <em>ACS Applied Nano Materials</em>, 2022.<br>
      DOI: 10.1021/XXXXXXX
    </li>
    <li>
      <strong>Graphene-based 2D Constructs for Enhanced Fibroblast Support.</strong><br>
      <em>PLOS ONE</em>, 2020.<br>
      DOI: 10.1371/journal.pone.XXXXXXX
    </li>
    <li>
      <strong>Tracking Gold Nanorods’ Interaction with 3D Tumor Spheroids by Multimodal Imaging.</strong><br>
      <em>Scientific Reports</em>, 2020.<br>
      DOI: 10.1038/s41598-020-XXXX-X
    </li>
  </ul>
</section>

<section id="gallery">
  <h2>Conference Highlights</h2>
  <div class="gallery">
    <img src="<?php echo get_template_directory_uri(); ?>/images.jpg" alt="Conference Image 1">
    <img src="<?php echo get_template_directory_uri(); ?>/images.jpg" alt="Conference Image 2">
    <img src="<?php echo get_template_directory_uri(); ?>/images.jpg" alt="Conference Image 3">
    <img src="<?php echo get_template_directory_uri(); ?>/images.jpg" alt="Conference Image 4">
  </div>
</section>

<section id="Contact">
  <h2>Join Us</h2>
  <p>We welcome motivated students and researchers to join the N-TEAM Lab. If you're interested in contributing to our projects or pursuing research with us, please contact Dr. Karrer Alghazali.</p>
  <p><strong>Contact:</strong> <a href="mailto:kalghaza@nyit.edu">kalghaza@nyit.edu</a></p>
</section>
<?php get_footer(); ?>
