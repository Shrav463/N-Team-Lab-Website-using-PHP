<?php
/* Template Name: Contact */
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

    nav.menu {
      display: flex;
      gap: 25px;
      font-size: 16px;
    }

    nav.menu a {
      color: #000;
      text-decoration: none;
      font-weight: bold;
    }

    nav.menu a:hover {
      text-decoration: underline;
    }

    #hero {
      position: relative;
      background-size: cover;
      height: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 5em;
      font-weight: bold;
      color: white;
      overflow: hidden;
    }

    #hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      transition: background-image 1s ease-in-out;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    #hero span {
      position: relative;
      z-index: 2;
    }
    main {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px 30px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(48, 40, 40, 0.1);
      border-radius: 8px;
    }
    main p {
      font-size: 1.2em;
      color: #002d72;
      line-height: 1.6;
    }
    footer {
      text-align: center;
      padding: 20px;
      font-size: 0.9em;
      color: #666;
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
  <div id="hero"><span>Contact</span></div>
  <main>
    <p><strong> Department of Electrical and Computer Engineering (NYC campus)</strong></p>
    <p><strong>Email:</strong> <a href="kalghaza@nyit.edu">kalghaza@nyit.edu</a></p>
    <p><strong>Address:</strong> Room#801A, 1855 Broadway, New York, NY 10023</p>
    <p><strong>Linkedln:</strong></p><a href="https://www.linkedin.com/in/karrer-alghazali-859351147/">https://www.linkedin.com/in/karrer-alghazali-859351147/</a>
  </main>
  <script src="Lab_website.js"></script>
</body>
<?php get_footer(); ?>
