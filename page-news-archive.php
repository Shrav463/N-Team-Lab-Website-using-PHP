<?php
/* Template Name: News Archive */
get_header(); ?>
<style>
  body, header {
    margin: 0;
    padding: 0;
}

    .lab-logo {
      max-height: 60px;
       margin: 0;
    }

    .menu {
      display: flex;
      gap: 20px;
      font-family:'Times New Roman', Times, serif;
      font-size: 16px;
    }

    .menu a {
      text-decoration: none;
      color: #444;
      font-weight: bold;
    }
     nav.menu a:hover {
        text-decoration: underline;
    }

   #hero {
    margin: 0; /* Ensures no gap between header and hero */
    padding: 0;
    position: relative;
    background: url("your-image.png") no-repeat center center;
    background-size: cover;
    height: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 4em;
    font-weight: bold;
    color: white;
    overflow: hidden;
}
    #hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    #hero span {
      position: relative;
      z-index: 2;
    }

    section {
      max-width: 1000px;
      margin: 0 auto;
      padding: 30px 20px;
      line-height: 1.6;
    }

    section h2 {
      margin-top: 0;
      color: #002d72;
    }

    .news-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .news-entry {
      flex: 1 1 45%;
      background-color: rgba(190, 247, 255, 0.949);
      border-radius: 8px;
      padding: 20px;
      font-family:'Times New Roman', Times, serif;
      font-size: 0.95em;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    footer {
            text-align: center;
            padding: 20px;
            background-color: #f4f4f4;
            font-size: 14px;
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

  <!-- Consistent Hero Banner -->
  <div id="hero"><span>News Archive</span></div>

  <section id="NewsArchive">
    <h2>News Archive</h2>
    <div class="news-section">
      <div class="news-entry">
        <p><strong>Dr. Walsh</strong> will be taking part in the 4th Annual New York Tech Biotechnology Conference at the NYIT Long Island Campus on February 28th 2024. The theme this year will be <em>"Precision Medicine: Unlocking the Future of Healthcare"</em>. Outstanding lineup of speakers from academia and industry. <a href="https://lnkd.in/etb_hh4k">More Info</a></p>
      </div>
      <div class="news-entry">
        <p>Are you a student at the Long Island Campus of New York Tech interested in Biomedical Engineering? Join us on Thursday, December 7th, 2023 from 12:45–2:00 PM in 220 Harry Schure Hall to learn more about the new LI Biomedical Engineering Society and how to get involved!</p>
      </div>
      <div class="news-entry">
        <p><strong>Dr. Walsh</strong> will be presenting at the NYIT College of Medicine symposium on September 21st.</p>
      </div>
      <div class="news-entry">
        <p>We will have six students presenting at the upcoming 2023 National Conference for Undergraduate Research (NCUR) from April 13–15, 2023. Five posters and one oral presentation. <a href="https://www.uwec.edu/ncur/">Details</a></p>
      </div>
      <div class="news-entry">
        <p>2022 Summer undergraduate research is underway in the Spectral Pathology Lab at UWEC thanks to the NSF REU grant, the Blugold Biomedical Innovator Program, the Ronald E. McNair Postbaccalaureate Achievement Program, and UWEC ORSP!</p>
      </div>
    </div>
  </section>

  <script src="Lab_website.js"></script>
</body>
<?php get_footer(); ?>
