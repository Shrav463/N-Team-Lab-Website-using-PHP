<?php
/* Template Name: Lab Members */
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
    position: relative;
    background: url("tissue_theme.png") no-repeat center center;
    background-size: cover;
    height: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    font-size: 4em;
    font-weight: bold;
    overflow: hidden;
    margin-top: 0; /* ✅ NEW: remove top margin */
    padding: 0;     /* ✅ NEW: prevent extra padding */
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

    .container {
        background-color: rgba(255, 255, 255, 0.95);
        padding: 20px 30px;
        margin: 0 auto;
        max-width: 1200px;
        box-shadow: 0 0 5px rgba(0,0,0,0.03);
    }

    .section-title {
        color: #002d72;
        padding: 15px 0 10px;
        font-size: 20px;
        font-weight: bold;
        border-bottom: 2px solid #ccc;
        margin-top: 0;
    }

    .member {
        display: flex;
        padding: 20px 0;
        border-bottom: 1px solid #ddd;
        align-items: flex-start;
        gap: 20px;
    }

    .member img {
        width: 150px;
        border-radius: 5px;
    }

    .member-info {
        max-width: 800px;
    }

   .member-info h3 {
    margin: 5px 0;
    color: #002d72;
    text-align: left;

}
  .member-info p {
    margin: 4px 0;
    text-align: left; /* ✅ NEW */
}

    footer {
        text-align: center;
        padding: 15px;
        background-color: #002d72;
        color: white;
        font-size: 13px;
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

<!-- HERO BANNER -->
<div id="hero">
    <span>Lab Members</span>
</div>

<!-- MAIN CONTAINER -->
<div class="container">
    <div class="section-title">Principal Investigator</div>
    <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>/Professor_pic.png" alt="Dr. Karrer Alghazali"/>
        <div class="member-info">
            <h3>Dr. Karrer Alghazali</h3>
            <p><strong>Title:</strong> Assistant Professor</p>
            <p><strong>Department:</strong> Bioengineering</p>
            <p><strong>Campus:</strong> New York City</p>
            <p><strong>Expertise:</strong> Tissue Engineering, Regenerative Medicine, Medical Device Development, Biomaterials</p>
            <p><strong>Education:</strong> Ph.D.</p>
            <p><strong>Joined:</strong> 2024</p>
        </div>
    </div>

    <div class="section-title">Current Lab Members</div>

    <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>/member4.jpeg" alt="Lab Member"/>
        <div class="member-info">
            <h3>Chris DCosta</h3>
            <p>Master of Science in Bioengineering, New York Institute of Technology</p>
        </div>
    </div>

    <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>/member4.jpeg" alt="Lab Member"/>
        <div class="member-info">
            <h3>Vic Valera</h3>
            <p>Bachelor of Science in Bioengineering, New York Institute of Technology</p>
        </div>
    </div>

    <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>/member4.jpeg" alt="Lab Member"/>
        <div class="member-info">
            <h3>Matthew Duazo</h3>
            <p>Doctor of Osteopathic Medicine (D.O.), New York Institute of Technology</p>
        </div>
    </div>

    <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>/member4.jpeg" alt="Lab Member"/>
        <div class="member-info">
            <h3>Shravani Kalisetty</h3>
            <p>Master of Science in Computer Science, New York Institute of Technology</p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; N-TEAM Lab</p>
</footer>
<script src="Lab_website.js"></script>
</body>
<?php get_footer(); ?>
