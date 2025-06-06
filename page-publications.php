<?php
/* Template Name: Publications */
get_header(); ?>
 <style>
  html, body {
    margin: 0 !important;
    padding: 0 !important;
}

body.admin-bar {
    margin-top: 0 !important;
    padding-top: 0 !important;
}

.wp-site-blocks,
.site,
.entry-content,
#page {
    margin-top: 0 !important;
    padding-top: 0 !important;
}

header {
    margin-top: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}


    .lab-logo {
        max-height: 60px;
        margin: 0;
        padding: 0;
        display: block;
    }
h2, h3 {
    color: #002d72;
    margin-top: 10px;
    margin-bottom: 5px;
}

section {
    margin-bottom: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: left;
}

    .menu {
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
        gap: 20px;
        height: 60px;
        font-family: 'Times New Roman', Times, serif;
    }

    nav.menu a {
        color: #000;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
    }

    nav.menu a:hover {
        text-decoration: underline;
    }

    #hero {
        position: relative;
        background: url("tissue_theme.png") no-repeat center center;
        background-size: cover;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 5em;
        font-weight: bold;
        color: white;
        overflow: hidden;
        margin-bottom: 0;
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
        padding: 30px 40px;
        margin: 0 auto;
        max-width: 1200px;
        box-shadow: 0 0 8px rgba(0,0,0,0.05);
    }

    main {
        padding: 10px 0;
    }

    section {
        margin-bottom: 20px;
        text-align: left;
    }

    h2, h3 {
        color: #002d72;
        margin-bottom: 8px;
        margin-top: 15px;
    }

    .text-info p,
    section p {
        margin: 8px 0;
        font-size: 16px;
        line-height: 1.5;
    }

    ol.patent-list li,
    ol.Journal-list li,
    ol.Co-Author li,
    ul.Course_list li {
        margin-bottom: 8px;
        line-height: 1.4;
    }

    footer {
        padding: 20px;
        text-align: center;
        border-top: 3px solid #002d72;
        font-size: 14px;
        background-color: #002d72;
        color: #fff;
    }

    a {
        color: #002d72;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
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

<!-- HERO BANNER SECTION -->
<div id="hero">
    <span>Publications</span>
</div>

<div class="container">
    <main>
        <section>
            <h3>Biography</h3>
            <p>Karrer Alghazali received his B.S. in Applied Physics from the University of Technology in Baghdad in 2008 and subsequently earned a master's degree in Material Science from the same university in 2010. In August 2018, he obtained a second master's in Applied Science from the University of Arkansas at Little Rock. In 2020, he received his Ph.D. in Applied Science with a focus on tissue regeneration, with his doctoral dissertation titled "Novel Material for Advanced Tissue Regeneration." His doctoral studies were marked by major accomplishments in research, publications, and commercialization.</p>
            <p>He is an expert in regenerative medicine, biomedical devices under design control, tissue engineering, bone regeneration, nerve regeneration, and nanosciences. He holds several patents/patent applications in the field of tissue regeneration. His research results have been published and presented in over 24 peer-reviewed articles in leading scientific journals and at international conferences. His publication record includes Scientific Reports (Nature Publisher Group), PLOS ONE, Journal of Nanomedicine: Nanotechnology, Biology and Medicine, Nanomaterials, ACS Applied Bio Materials, Nanoscale, and RSC Advances.</p>
            <p>As a former research manager at a biomedical company, Alghazali has a strong bioengineering industrial background as an R&D professional and scientist. He has a proven track record in steering the end-to-end new product development lifecycle from conceptualization to successful market launch. Recognized for continuously refining processes through adept program management and strategic insights, he excels in leading cross-functional teams in pioneering research and development initiatives, particularly in advanced materials for biomedical applications. His biomedical device development research was funded by NIH, where he is the principal investigator of two NIH-SBIR-STTR financed projects.</p>
        </section>

        <section>
            <h3>Recent Projects and Research</h3>
            <p><strong>Title:</strong> Commercialization Readiness for Bone Filler Scaffold Device to Aid in Dental, has been awarded a 3-year, $3M.</p>
            <p><strong>Award Number:</strong> SB1DE028213 Applications and Reconstruction Funding Agency/Requiring Activity: NIH, National</p>
            <p><strong>Institute of Dental & Craniofacial Research (NIDCR):</strong> Principal Investigator.</p>
            <p><strong>Title:</strong> Feasibility study of a nanostructural system for bone regeneration in preparation for dental implants, SBIR Fast Track, Phase II. 1.5 M.</p>
            <p><strong>Award Number:</strong> 4R44DE028213-02 Funding Agency/Requiring Activity: NIH</p>
            <p><strong>National Institute of Dental & Craniofacial Research (NIDCR) Role:</strong> Principal Investigator.</p>
        </section>

        <section>
            <h3>Selected Publications and Presentations</h3>
        </section>

        <section>
            <h3>Patents and Patent Applications</h3>
            <ol class="patent-list">
                <li>United States Patent Application: "Biocompatible structure, and fabricating methods and applications of same" by Karrer Alghazali, Viney Saini, Alexandru S. Biris, and Shawn E. Bourdo. U.S. Patent Application No. 17/893,273.</li>
                <li>United States Patent Awarded: "Graft scaffold with plasmonic activity, and methods of making and using same" by Alexandru Biris, Karrer Alghazali, Zeid Nima. U.S. Patent Application No. 10390927.</li>
                <li>United States Patent Application: "Tunable porous 3D biodegradable, biocompatible polymer/nanomaterial scaffolds, and fabricating methods and applications of same" by Karrer Alghazali, V Saini, AS Biris, SE Bourdo. U.S. Patent Application No. 16137771.</li>
                <li>United States Patent Application: "Tunable porous 3d biodegradable, biocompatible polymer/nanomaterial scaffolds, and fabricating methods and applications of same" by Karrer Alghazali, AS Biris, SE Bourdo, Zeid Nima. U.S. Patent Application No. 15834699.</li>
                <li>United States Patent Application: "Biocompatible structure for tissue regeneration and methods of making and using same" by Karrer Alghazali, Zeid Nima, Alexandru Biris. U.S. Patent Application No. 15/591,728.</li>
                <li>International Patent Application: "Biodegradable Intraluminal Small Intestinal Anastomotic Guide" by David Anderson, Alexandru Biris, Karrer Alghazali, Alisha Potter. International Application No. WO2020/014576A1.</li>
                <li>United States Patent Application: "Expandable bone and tissue regeneration system, and applications of same" by Alexandru S. Biris, Karrer Alghazali, and Anwer Dheyaa Mahdi Mhannawee. U.S. Patent Application No. 16/783,256.</li>
                <li>United States Patent Application: "Biodegradable intraluminal small intestinal anastomotic guide" by David Edgar Anderson, Alexandru Biris, Karrer Alghazali, and Alisha Potter Pedersen. U.S. Patent Application No. 17/259,802</li>
            </ol>
        </section>

        <section>
            <h3>Journal Publications</h3>
            <ol class="Journal-list">
                <li>KM Alghazali., Pedersen, A.P., Hamzah, R.N., Mulon, P.Y., Rifkin, R.E., Mhannawee, A., Nima Alsudani, Z.A., Griffin, C., Muhi, M.A., Mullen, N. and Donnell, R.L., Scientific Reports 12.1 (2022): 1–13. Development of a polymeric biomedical device platform with controlled disassembly and in vivo testing in a swine intestinal model.</li>
                <li>Co-First Authors / KD Sharma, KM Alghazali, RN Hamzah, SC Pandanaboina, Nanomaterials 12 (6), 2022, 929. Gold Nanorod Substrate for Rat Fetal Neural Stem Cell Differentiation into Oligodendrocytes.</li>
                <li>Co-First Authors / Safina, I., KM Alghazali., Childress, L., Griffin, C., Hashoosh, A., Kannarpady, G., … & Vang, K. B. (2021), Journal of Applied Toxicology, 41(9), 1456–1466. Dendritic cell biocompatibility of ether‐based urethane films</li>
                <li>Co-First Authors / Grzeskowiak, R. M., KM Alghazali., Hecht, S., Donnell, R. L., Doherty, T. J., Smith, C. K.& Adair, H.S., Veterinary Surgery: VS, 50(5), 2021, 1117–1127. Influence of a novel scaffold composed of polyurethane, hydroxyapatite, and decellularized bone particles on healing fourth metacarpal defects in mares.</li>
                <li>Co-First Authors / Karrar Alghazali, Beenken, Karen E., Mara J. Campbell, Aura M. Ramirez, Christopher M. Walker, Bailey Jackson, Christopher Griffin, et al., Scientific reports 11, no. 1 (2021): 1–10. Evaluation of a bone filler scaffold for local antibiotic delivery to prevent Staphylococcus aureus infection in a contaminated bone defect</li>
                <li>Co-First Authors / Pedersen, Alisha P., Karrer M. Alghazali, Rabab N. Hamzah, Pierre-Yves Mulon, Megan McCracken, Rebecca E. Rifkin, Anwer Mhannawee et al., Frontiers in Surgery 7 (2020): 587951. Development and in vivo assessment of a rapidly collapsible anastomotic guide for small intestine anastomosis: a swine model pilot study.</li>
                <li>KM Alghazali, RN Hamzah, ZA Nima, R Steiner, M Dhar, DE Anderson, Nanomaterials 9 (7), 1029. Plasmonic nanofactors as switchable devices to promote or inhibit neuronal activity and function.</li>
                <li>Co-First Authors / SC Pandanaboina, KM Alghazali, ZA Nima, RA Alawajji, KD Sharma, F Watanabe, V Saini, AS Biris, M Srivatsan, Nanomedicine: Nanotechnology, Biology and Medicine 21, 102048, 2019. Plasmonic nano surface for neuronal differentiation and manipulation.</li>
                <li>KM Alghazali, SD Newby, ZA Nima, RN Hamzah, F Watanabe, SE Bourdo, TJ Masi, SM Stephenson, DE Anderson, AS Biris, Scientific Reports 7 (1), 1–12, 2017. Functionalized gold nanorod nanocomposite system to modulate differentiation of human mesenchymal stem cells into neural-like progenitors.</li>
                <li>KM Alghazali, ZA Nima, RN Hamzah, MS Dhar, DE Anderson, AS Biris, Drug metabolism reviews 47 (4), 431–454, 2015. Bone-tissue engineering: complex tunable structural and biological responses to injury, drug delivery, and cell-based therapies</li>
            </ol>
        </section>

        <section>
            <h3>As Co-Author</h3>
            <ol class="Co-Author">
                <li>Rabab Hamzah, Karrer Alghazali, Alexandru Biris, and Robert J. Griffin, ACS Applied Nano Materials 2022 5 (9), 12265–12275 Nanoparticle-Labeled Exosomes as Theranostic Agents: A Review.</li>
                <li>Hamzah, R.N., KM Alghazali., Biris, A.S., & Griffin, R.J. (2021), International Journal of Molecular Sciences, 22(10), 2021, 5346. Exosome traceability and cell source dependence on composition and cell-cell cross-talk.</li>
                <li>Safina, I., Bourdo, S.E., KM Alghazali, Kannarpady, G., Watanabe, F., Vang, K.B., & Biris, A.S., PLoS One (2020), 15(5). Graphene-based 2D constructs for enhanced fibroblast support.</li>
                <li>E Darrigues, ZA Nima, DA Nedosekin, F Watanabe, KM Alghazali, VP Zharov, AS Biris, Scientific reports 10 (1), 1–14, 2020. Tracking gold nanorods' interaction with large 3D pancreatic-stromal tumor spheroids by fluorescence, photoacoustic, and photothermal microscopies by multimodal imaging.</li>
                <li>CM Parnell, BP Chhetri, TB Mitchell, F Watanabe, G Kannarpady, AB RanguMagar, H Zhou, KM Alghazali, AS Biris, A Ghosh, Scientific reports 9 (1), 1–13, 2019. Simultaneous electrochemical deposition of cobalt complex and poly (pyrrole) thin films for supercapacitor electrodes.</li>
                <li>A Bow, S Newby, R Rifkin, BK Jackson, A Matavosian, C Griffin, W King, KM Alghazali, A Mhannawee, SB Berryhill, R Morello, S Hecht, AS Biris, DE Anderson, SE Bourdo, M Dhar, ACS Applied Bio Materials 2 (5), 1815-1829, 2019. Evaluation of a polyurethane platform for delivery of nanohydroxyapatite and decellularized bone particles in a porous three-dimensional scaffold.</li>
                <li>ZA Nima, KB Vang, D Nedosekin, G Kannarpady, V Saini, SE Bourdo, W Majeed, F Watanabe, E Darrigues, KM Alghazali, RA Alawajji, D Petibone, S Ali, AR Biris, D Casciano, A Ghosh, G Salamo, V Zharov, AS Biris, Nanoscale 11 (3), 932–944, 2019. Quantification of cellular-associated graphene and induced surface receptor responses.</li>
                <li>W Majeed, S Bourdo, DM Petibone, V Saini, KB Vang, ZA Nima, KM Alghazali, E Darrigues, A Ghosh, F Watanabe, D Casciano, SF Ali, AS Biris, Journal of Applied Toxicology 37 (4), 462–470, 2017. The role of surface chemistry in the cytotoxicity profile of graphene.</li>
                <li>Elkhenany, H., Bourdo, S., Hecht, S., Donnell, R., Gerard, D., Abdelwahed, R., Lafont, A., KM Alghazali., Watanabe, F., Biris, A.S. and Anderson, D., 2017, Nanomedicine: Nanotechnology, Biology and Medicine, 13(7), pp.2117–2126. Graphene nanoparticles as osteoinductive and osteoconductive platform for stem cell and bone regeneration.</li>
                <li>ZA Nima, YR Davletshin, F Watanabe, KM Alghazali, JC Kumaradas, AS Biris, RSC advances 7 (84), 53164–53171, 2017. Bimetallic gold core–silver shell nanorod performance for surface-enhanced Raman spectroscopy.</li>
                <li>H Elkhenany, S Bourdo, S Hecht, R Donnell, D Gerard, R Abdelwahed, A Lafont, KM Alghazali, F Watanabe, AS Biris, D Anderson, M Dhar, Nanomedicine: Nanotechnology, Biology, and Medicine 13 (7), 2117–2126, 2017. Graphene nanoparticles as an osteoinductive and osteoconductive platform for stem cell and bone regeneration.</li>
                <li>BA Ibrahim, KM Alghazali, International Journal of Engineering & Technology 12 (3), 19–27, 2012. Morphology studies and mechanical properties for PS/SBS blends.</li>
                <li>NM AL-Araji, KM Alghazali, AA AL-Dayni, Int. J. Sci. Eng. Res 2 (12), 1, 2011. Effect of friction stir welding pressure on the microstructure and mechanical properties of weld joints.</li>
                <li>BA Ibrahim, KM Alghazali, Modern Applied Science 4 (9), 157, 2010. Influence of polymer blending on mechanical and thermal properties.</li>
  </ol>         
        </section>
<section>
    <h3>Book Publications</h3>
    <ol>
        <li>Exosomes as naturally occurring, abundant nanoscale soft materials: potential as biomarkers and delivery vehicles for solving biomedical problems, RN Hamzah, RA Kore, KM Alghazali, F Watanabe, AS Biris, RJ Griffin, World Scientific Series in Nanoscience and Nanotechnology, Soft Matter and Biomaterials on the Nanoscale, pp. 247–278 (2020).</li>
        </ol>
</section>
        <section>
            <h3>Courses Taught at New York Tech</h3>
            <ul class="Course_list">
                <li>Introduction to Biomaterials</li>
                <li>Introduction to Bioengineering</li>
                <li>Medical Devices</li>
            </ul>
        </section>
    </main>
</div>
<footer>
    <p>&copy; N-TEAM Lab</p>
</footer>
<script src="Lab_website.js"></script>
</body>
<?php get_footer(); ?>