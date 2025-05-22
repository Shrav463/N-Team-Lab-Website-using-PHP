<?php
/* Template Name: Research */
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
    padding: 5px 20px;
    margin: 0;
    background-color: #f8f9ff;
  }

  .lab-logo {
    max-height: 60px;
    margin: 0;
    padding: 0;
    display: block;
  }

  .menu {
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    font-size: 16px;
  }

  .menu a {
    text-decoration: none;
    color: #444;
  }

  #hero {
    position: relative;
    height: 300px;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 5em;
    font-weight: bold;
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
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
  }

  #hero span {
    position: relative;
    z-index: 2;
  }

  section {
    max-width: 900px;
    margin: 0 auto;
    padding: 25px 20px;
    line-height: 1.6;
  }

  section h2 {
    color: #002d72;
    margin: 2px 0 15px;
    font-size: 26px;
  }

  section h3 {
    margin: 0 0 10px;
    font-size: 20px;
    color: #002d72;
  }

  ul {
    padding-left: 20px;
  }

  ul li {
    margin-bottom: 10px;
  }

  .about-section {
    display: flex;
    align-items: flex-start;
    gap: 20px;
  }

  .about-section img {
    max-width: 200px;
    height: auto;
    border-radius: 10px;
  }

  .about-text {
    flex: 1;
  }

  .highlight-box {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    border: 2px solid #004080;
    background-color: #e0f0ff;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 6px;
  }

  .highlight-box img {
    width: 40px;
    height: 40px;
    margin-top: 5px;
  }

  .contact-button {
    display: inline-block;
    padding: 12px 24px;
    background-color: #002d72;
    color: #ffffff;
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 16px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: none;
  }

  .contact-button:hover {
    background-color: #0046a6;
    transform: translateY(-2px);
  }
</style>

<body>
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

  <div id="hero"><span>Research</span></div>

  <section id="about">
  <h2>About / Research Focus</h2>
  <div class="about-section">
    <div class="about-text">
      <p>
        Our research group, led by Dr. Karrer Alghazali, focuses on biomaterials and tissue engineering strategies to create advanced therapeutic solutions for regenerative medicine. The team is engaged in innovative projects involving muscle regeneration, diabetic wound healing, and cancer tissue engineering, with the goal of developing next-generation treatments that address some of the most critical health challenges.
      </p>

      <p>
        The N-TEAM Lab, led by Dr. Karrer Alghazali, focuses on advancing regenerative medicine and tissue engineering. Our mission is to develop innovative solutions that restore and repair damaged tissues, improving patient outcomes through interdisciplinary research.
      </p>

        <p><strong>TEAM’s research program</strong> is centered on leveraging biomaterials and tissue engineering strategies to address critical challenges in regenerative medicine. The work spans three interconnected projects:</p>

        <div class="highlight-box">
          <div>
            <strong>Volumetric Muscle Loss (VML):</strong><br>
            Developing advanced 3D scaffolds integrated with regenerative cues to restore structure and function in severe muscle injuries. This includes bioinspired materials and fabrication techniques to promote vascularization, innervation, and muscle regeneration.
          </div>
        </div>

        <div class="highlight-box">
          <div>
            <strong>Diabetic Wound Healing:</strong><br>
            Focuses on treating chronic wounds in diabetic patients using hydrogel dressings, bioactive scaffolds, and controlled therapeutic release (e.g., exosomes, growth factors) to support angiogenesis and reduce inflammation.
          </div>
        </div>

        <div class="highlight-box">
          <div>
            <strong>Cancer Tissue Engineering:</strong><br>
            Aims to reverse-engineer the tumor microenvironment to study cancer tissue growth and metastasis, using these insights to develop biomimetic scaffolds for regenerative and therapeutic applications.
          </div>
        </div>
      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/Professor_pic.png" alt="Professor Picture">
    </div>
  </section>

 <section id="pi" style="margin: 0 auto; padding: 10px 20px; max-width: 900px;">
  <h2 style="margin-bottom: 10px;">Principal Investigator</h2>
  <h3 style="margin: 0;">Dr. Karrer Alghazali</h3>
  <p style="margin-top: 10px; text-align: justify;">
    Dr. Karrer Alghazali is the Principal Investigator of N-TEAM Lab. His research integrates biomaterials, scaffold fabrication, and spectroscopic technologies to advance tissue regeneration. Dr. Alghazali's projects focus on muscle regeneration, diabetic wound healing, and cancer tissue engineering.
  </p>
</section>

<section id="Contact" style="margin: 0 auto; padding: 10px 20px; max-width: 900px;">
  <h2 style="margin-bottom: 10px;">Join Us</h2>
  <p style="text-align: justify;">
    We welcome motivated students and researchers to join the N-TEAM Lab. If you're interested in contributing to our projects or pursuing research with us, please contact Dr. Karrer Alghazali.
  </p>
  <button><a href="contact.html" class="contact-button">Contact</a></button>
</section>
  <script src="Lab_website.js"></script>
</body>
<?php get_footer(); ?>
