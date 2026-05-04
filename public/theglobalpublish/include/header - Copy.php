<?php
include_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <link rel="canonical" href="https://theglobalpublishers.com<?= $_SERVER['REQUEST_URI'] ?>" />

    <?php

    $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if ($actual_link == 'https://theglobalpublishers.com/' || $actual_link == 'https://theglobalpublishers.com/') { ?>

        <title><?php echo $bname ?> | Transforming Stories into Masterpieces</title>

        <meta name="description"
            content="<?php echo $bname ?> helps authors write, publish, and market books that stand out. Our expert team brings your story to life and reaches readers worldwide." />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.png",
      "email": "<?php echo $email ?>",
      "telephone": "<?php echo $no ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "400 N Ashley Dr, Suite 1900",
        "addressLocality": "Tampa",
        "addressRegion": "FL",
        "postalCode": "33602",
        "addressCountry": "US"
      },
      "sameAs": [
        "https://www.facebook.com/theglobalpublishers1/",
        "https://www.instagram.com/theglobalpublishers/",
        "https://www.pinterest.com/theglobalpublishers9/",
        "https://www.linkedin.com/company/the-global-publishers",
        "https://x.com/GlobalPubz",
"https://www.trustpilot.com/review/theglobalpublishers.com"
      ]
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://theglobalpublishers.com/#localbusiness",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "image": "https://theglobalpublishers.com/assets/images/logo.png",
      "telephone": "<?php echo $no ?>",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "400 N Ashley Dr, Suite 1900",
        "addressLocality": "Tampa",
        "addressRegion": "FL",
        "postalCode": "33602",
        "addressCountry": "US"
      },
      "sameAs": [
        "https://www.facebook.com/theglobalpublishers1/",
        "https://www.instagram.com/theglobalpublishers/",
        "https://www.pinterest.com/theglobalpublishers9/",
        "https://www.linkedin.com/company/the-global-publishers",
        "https://x.com/GlobalPubz",
"https://www.trustpilot.com/review/theglobalpublishers.com"
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://theglobalpublishers.com/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long does the publishing process take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The timeline varies depending on the services you choose, but most projects are completed within 4 to 8 weeks. We always keep you updated at every stage."
          }
        },
        {
          "@type": "Question",
          "name": "Do I retain the rights to my book after it is published?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! You retain full ownership of your content. We help you publish without taking your rights, your story stays yours, always."
          }
        },
        {
          "@type": "Question",
          "name": "Can you help with both eBooks and printed copies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. We offer complete formatting, design, and distribution services for both digital and physical books, including Kindle, paperback, and hardcover editions."
          }
        },
        {
          "@type": "Question",
          "name": "Do you work with first-time authors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we love working with new authors! Our team provides hands-on support, clear communication, and expert guidance from start to finish, no experience needed."
          }
        },
        {
          "@type": "Question",
          "name": "What genres do you publish?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We work across all major genres, including fiction, nonfiction, memoirs, self-help, fantasy, romance, and more. Every book gets a tailored approach to suit its audience."
          }
        }
      ]
    }
  ]
}
</script>

<script type="application/ld+json"> 

{ 


  "makesOffer": [ 

    { 

      "@type": "Offer", 

      "itemOffered": { 

        "@type": "Service", 

        "name": "Ghostwriting Services", 

        "description": "Professional ghostwriting services including fiction, memoir, business, and autobiography writing." 

      } 

    }, 

    { 

      "@type": "Offer", 

      "itemOffered": { 

        "@type": "Service", 

        "name": "Book Publishing", 

        "description": "Complete book publishing solutions with formatting, cover design, printing, and distribution." 

      } 

    }, 

    { 

      "@type": "Offer", 

      "itemOffered": { 

        "@type": "Service", 

        "name": "Book Marketing", 

        "description": "Marketing campaigns for authors including social media, PR, SEO, and Amazon promotion." 

      } 

    }, 

    { 

      "@type": "Offer", 

      "itemOffered": { 

        "@type": "Service", 

        "name": "Audiobook Production", 

        "description": "Audiobook narration and editing services for Audible and global platforms." 

      } 

    }, 

    { 

      "@type": "Offer", 

      "itemOffered": { 

        "@type": "Service", 

        "name": "Author Website Design", 

        "description": "Custom website design and development services for authors and book promotion." 

      } 

    }, 

    { 

      "@type": "Offer", 

      "itemOffered": { 

        "@type": "Service", 

        "name": "Book Cover Design", 

        "description": "Custom book cover design services to help your book stand out visually in the market." 

      } 

    }, 

    { 

      "@type": "Offer", 

      "itemOffered": { 

        "@type": "Service", 

        "name": "Book Editing & Proofreading", 

        "description": "Editing and proofreading services to polish and prepare your manuscript for publishing." 

      } 

    } 

  ] 

} 

</script>
    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/about-us.php') {  ?>

        <title>About <?php echo $bname ?> | Empowering Authors Worldwide</title>

        <meta name="description"
            content="Discover our mission to help authors craft meaningful stories. Learn how <?php echo $bname ?> combines storytelling and strategy for publishing success." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/contact-us.php') {  ?>

        <title>Contact <?php echo $bname ?> | Start Your Book Journey</title>

        <meta name="description"
            content="Get in touch with <?php echo $bname ?> to discuss your book. We’re here to support your publishing goals every step of the way." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/book-publishing.php') {  ?>

        <title>Professional Book Publishing Services | Self-Publish Your Book Today</title>

        <meta name="description"
            content="Expert Book Publishing Services in the USA, transforming manuscripts into competitively published books through professional editing, design, and distribution." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/ghostwriting-services.php') {  ?>

        <title>Professional Ghostwriting Services | Your Story, Our Expertise</title>

        <meta name="description"
            content="Our professional ghostwriting services capture your voice to create publish-ready manuscripts. Let our ghostwriters transform your ideas into compelling books." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/ebook-writing.php') {  ?>

        <title>eBook Writing Services | Turn Ideas into Digital Books</title>

        <meta name="description"
            content="Get professional eBook writing services from <?php echo $bname ?>. We help authors write and publish engaging digital books across all genres." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/memoir-writing.php') {  ?>

        <title>Memoir Writing Services | Share Your Life Story</title>

        <meta name="description"
            content="Capture your personal journey with our memoir writing services. <?php echo $bname ?> turns your memories into a powerful published memoir." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/biography-writing.php') {  ?>

        <title>Biography Writing Services | Tell a Life Story That Lasts</title>

        <meta name="description"
            content="Let our biography writers craft your legacy. We write compelling biographies that celebrate achievements and preserve stories for future generations." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/business-book-writing.php') {  ?>

        <title>Business Book Writing Services | Share Your Expertise</title>

        <meta name="description"
            content="Establish your authority with a professionally written business book. We help entrepreneurs and thought leaders publish impactful business content." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/non-fiction-writing.php') {  ?>

        <title>Non-Fiction Writing Services | Inform, Inspire, Impact</title>

        <meta name="description"
            content="Our non-fiction writing services help you educate and inspire readers. <?php echo $bname ?> delivers research-backed, clear, and engaging books." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/fiction-writing.php') {  ?>

        <title>Fiction Writing Services | Craft Engaging Stories</title>

        <meta name="description"
            content="From plot development to vivid characters, our fiction writing services bring your story to life. Publish captivating novels with expert help." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/action-writing.php') {  ?>

        <title>Action Book Writing Services | Thrilling Plots, Bold Heroes</title>

        <meta name="description"
            content="Get action-packed books written by pros. Our action writing services deliver gripping narratives full of suspense, pace, and heroism." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/fantasy-writing.php') {  ?>

        <title>Fantasy Writing Services | Create Magical Worlds</title>

        <meta name="description"
            content="Unleash your imagination with our fantasy writing services. We help you craft epic tales, mythical creatures, and immersive fantasy realms." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/science-fiction-writing.php') {  ?>

        <title>Science Fiction Writing Services | Explore New Worlds</title>

        <meta name="description"
            content="Take your readers on a futuristic journey. Our science fiction writers craft visionary stories filled with tech, adventure, and discovery." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/horror-book-writing.php') {  ?>

        <title>Horror Book Writing Services | Spine-Chilling Tales</title>

        <meta name="description"
            content="Create terrifying tales that haunt and thrill. Our horror book writing services deliver eerie plots, suspense, and unforgettable fear." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/drama-writing.php') {  ?>

        <title>Drama Writing Services | Emotional, Realistic Stories</title>

        <meta name="description"
            content="Our drama writing services develop character-driven narratives that explore conflict, relationships, and emotion with authenticity." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/suspense-thriller-writing.php') {  ?>

        <title>Suspense & Thriller Writing Services | Edge-of-Seat Plots</title>

        <meta name="description"
            content="Hook readers with thrilling twists and suspenseful pacing. Our writers craft high-stakes thriller books that keep audiences turning pages." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/romance-writing.php') {  ?>

        <title>Romance Writing Services | Heartfelt Love Stories</title>

        <meta name="description"
            content="We write captivating romance novels full of passion, emotion, and connection. Our romance writing services deliver stories that resonate." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/mystery-writing.php') {  ?>

        <title>Mystery Writing Services | Solve Gripping Whodunits</title>

        <meta name="description"
            content="Our mystery writing services help you build tension, develop clues, and create satisfying reveals. Write crime, detective, or noir fiction with us." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/book-editing-services.php') {  ?>

        <title>Professional Book Editing Services | Hire Expert Book Editors</title>

        <meta name="description"
            content="Get professional book editing services to polish your manuscript. We improve structure, grammar, flow, and clarity to make your book publish-ready." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/book-formatting-services.php') {  ?>

        <title>Book Formatting Services | Print & Digital Ready</title>

        <meta name="description"
            content="Professional book formatting for paperback, hardcover, and eBook. Ensure your manuscript meets publishing standards across all platforms." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/book-marketing.php') {  ?>

        <title>Book Marketing Services | Strategic Book Promotion</title>

        <meta name="description"
            content="Boost book sales with expert Book Marketing Services. Our complete Book Promotion includes social media, PR campaigns, and targeted reader outreach." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/audiobook-narrators.php') {  ?>

        <title>Audiobook Narration Services | Voice Your Story</title>

        <meta name="description"
            content="Turn your book into a professional audiobook. Hire skilled narrators to engage listeners with clear, compelling voiceovers and high-quality audio." />

    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/author-website-design.php') {  ?>

        <title>Author Website Design Services | Build Your Online Presence</title>

        <meta name="description"
            content="Get a custom author website designed to promote your books and grow your brand. Our responsive, reader-friendly sites drive engagement." />

    <?php }

    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1 user-scalable=no">
    <meta name="google-site-verification" content="XsSXSBkBXlER5o8ajXw5P1JlVWnlPEKSRH_1n742TI0" />
    <link rel="icon" type="image/png" href="/assets/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/assets/favicon.svg" />
<link rel="shortcut icon" href="/assets/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Global Publishers" />
<link rel="manifest" href="/assets/site.webmanifest" />
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/main.css?v86-45">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- drop-down scroll -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M354D54Q');
    </script>
    <!-- End Google Tag Manager -->



    <script type="application/ld+json">
        {

            "@context": "https://schema.org",

            "@type": "Organization",

            "name": "<?php echo $bname ?>",

            "url": "https://theglobalpublishers.com",

            "logo": "https://theglobalpublishers.com/assets/images/logo.png",

            "email": "<?php echo $email ?>",

            "telephone": "<?php echo $no ?>",

            "address": {

                "@type": "PostalAddress",

                "streetAddress": "10754 129TH ST S",

                "addressLocality": "RICHMOND HILL",

                "addressRegion": "NY",

                "postalCode": "11419",

                "addressCountry": "US"

            },

            "sameAs": [

                "https://www.facebook.com/theglobalpublishers",

                "https://www.instagram.com/theglobalpublishers"

            ],

            "makesOffer": [

                {

                    "@type": "Offer",

                    "itemOffered": {

                        "@type": "Service",

                        "name": "Ghostwriting Services",

                        "description": "Professional ghostwriting services including fiction, memoir, business, and autobiography writing."

                    }

                },

                {

                    "@type": "Offer",

                    "itemOffered": {

                        "@type": "Service",

                        "name": "Book Publishing",

                        "description": "Complete book publishing solutions with formatting, cover design, printing, and distribution."

                    }

                },

                {

                    "@type": "Offer",

                    "itemOffered": {

                        "@type": "Service",

                        "name": "Book Marketing",

                        "description": "Marketing campaigns for authors including social media, PR, SEO, and Amazon promotion."

                    }

                },

                {

                    "@type": "Offer",

                    "itemOffered": {

                        "@type": "Service",

                        "name": "Audiobook Production",

                        "description": "Audiobook narration and editing services for Audible and global platforms."

                    }

                },

                {

                    "@type": "Offer",

                    "itemOffered": {

                        "@type": "Service",

                        "name": "Author Website Design",

                        "description": "Custom website design and development services for authors and book promotion."

                    }

                },

                {

                    "@type": "Offer",

                    "itemOffered": {

                        "@type": "Service",

                        "name": "Book Cover Design",

                        "description": "Custom book cover design services to help your book stand out visually in the market."

                    }

                },

                {

                    "@type": "Offer",

                    "itemOffered": {

                        "@type": "Service",

                        "name": "Book Editing & Proofreading",

                        "description": "Editing and proofreading services to polish and prepare your manuscript for publishing."

                    }

                }

            ]

        }
    </script>

</head>

<body cz-shortcut-listen="true">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M354D54Q" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <div class="wrapper">
        <header class="sticky-header">
            <div class="headerMain">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-12 col-md-12 col-12 logoMainWrap">
                            <div class="logoMain">
                                <a href="">
                                    <img src="assets/images/logo.png" alt="Logo">
                                </a>
                                <div class="mobileMenuIcon">
                                    <img src="assets/images/menuIcon.svg" alt="MenuIcon">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-12 col-12 headerMenuMain">
                            <div class="closeMenu mobileMenuIcon">
                                <img src="assets/images/closeMenu.svg" alt="Close Menu">
                            </div>
                            <div class="headerMenuWrap">
                                <div class="mobile-logo">
                                    <a href="">
                                        <img src="assets/images/mob-logo.png" alt="Logo">
                                    </a>
                                </div>
                                <ul>
                                    <li><a href="about-us.php">ABOUT US</a></li>
                                    <li><a href="book-publishing.php">Book Publishing</a></li>
                                    <li class="hasChild parentMenu">
                                        <span><a href="javascript:;">Ghostwriting <svg
                                                    class="svg-inline--fa fa-chevron-down" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="chevron-down"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com --></a>
                                            <ul class="dropDown">
                                                <li><a
                                                        href="ghostwriting-services.php">Ghostwriting</a>
                                                </li>
                                                <li><a href="ebook-writing.php">Ebook Writers</a>
                                                </li>
                                                <li><a href="memoir-writing.php">Memoir
                                                        Writing</a></li>
                                                <li><a href="biography-writing.php">Biography
                                                        Writing</a></li>
                                                <li><a href="business-book-writing.php">Business
                                                        Book Writing</a></li>
                                                <li><a
                                                        href="non-fiction-writing.php">Non-Fiction</a>
                                                </li>
                                                <!-- <li><a href="/children-book-writing">Children's Book Writing</a></li> -->
                                            </ul>
                                            <div class="openDropdown"><svg class="svg-inline--fa fa-chevron-down"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="chevron-down" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com -->
                                            </div>
                                        </span>
                                    </li>
                                    <li class="hasChild parentMenu"><span><a href="javascript:;">Fiction Writing <svg
                                                    class="svg-inline--fa fa-chevron-down" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="chevron-down"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com --></a>
                                            <ul class="dropDown">
                                                <li><a href="fiction-writing.php">Fiction
                                                        Writing</a></li>
                                                <li><a href="action-writing.php">Action
                                                        Adventure</a></li>
                                                <li><a href="fantasy-writing.php">Fantasy
                                                        Writing</a></li>
                                                <li><a href="science-fiction-writing.php">Sci-Fi
                                                        Writing</a></li>
                                                <li><a href="horror-book-writing.php">Horror
                                                        Writing</a></li>
                                                <li><a href="drama-writing.php">Drama Writing</a>
                                                </li>
                                                <!-- <li><a href="adventure-writing.php">Adventure Writing</a></li> -->
                                                <li><a href="suspense-thriller-writing.php">Suspense/Thriller
                                                        Writing</a>
                                                </li>
                                                <li><a href="romance-writing.php">Romance
                                                        Writing</a></li>
                                                <li><a href="mystery-writing.php">Mystery
                                                        Writing</a></li>
                                            </ul>
                                            <div class="openDropdown"><svg class="svg-inline--fa fa-chevron-down"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="chevron-down" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com -->
                                            </div>
                                        </span>
                                    </li>
                                    <li class="hasChild parentMenu"><span><a href="javascript:;">Editing &amp;
                                                Formatting <svg class="svg-inline--fa fa-chevron-down"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="chevron-down" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com --></a>
                                            <ul class="dropDown">
                                                <li><a href="book-editing-services.php">Book
                                                        Editing</a></li>
                                                <li><a href="book-formatting-services.php">Book
                                                        Formatting</a></li>
                                            </ul>
                                            <div class="openDropdown"><svg class="svg-inline--fa fa-chevron-down"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="chevron-down" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com -->
                                            </div>
                                        </span>
                                    </li>
                                    <li class="hasChild parentMenu"><span><a href="javascript:;">Other Services <svg
                                                    class="svg-inline--fa fa-chevron-down" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="chevron-down"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com --></a>
                                            <ul class="dropDown">
                                                <li><a href="book-marketing.php">Book
                                                        Marketing</a></li>
                                                <!-- <li><a href="book-publishing.php">Book Publishing</a></li> -->
                                                <li><a href="audiobook-narrators.php">Audio
                                                        Books</a></li>
                                                <li><a href="author-website-design.php">Author
                                                        Web Design</a></li>
                                            </ul>
                                            <div class="openDropdown"><svg class="svg-inline--fa fa-chevron-down"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="chevron-down" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com -->
                                            </div>
                                        </span>
                                    </li>
                                    <!--<li><a href="blogs">BLOGS</a></li>-->
                                    <li><a href="contact-us.php">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-12 ctaRight">
                            <div class="HederCtaRight">
                                <div class="headerCta">
                                    <a href="javascript:;" class="openPopup">Request A Quote <svg
                                            class="svg-inline--fa fa-arrow-right-long" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="arrow-right-long" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa-solid fa-arrow-right-long"></i> Font Awesome fontawesome.com --></a>
                                </div>
                                <div class="HeaderCtaPhoneEmail">
                                    <a href="<?php echo $no1 ?>"><svg class="svg-inline--fa fa-phone" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="phone" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                            </path>
                                        </svg><!-- <i class="fa-solid fa-phone"></i> Font Awesome fontawesome.com -->
                                        <?php echo $no ?></a>
                                    <a href="mailto:<?php echo $email ?>"><svg
                                            class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="envelope" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                            </path>
                                        </svg><!-- <i class="fa-solid fa-envelope"></i> Font Awesome fontawesome.com -->
                                        <?php echo $email ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
