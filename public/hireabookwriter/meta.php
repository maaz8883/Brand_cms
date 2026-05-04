
<?php   

         $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 

         if($actual_link == 'https://hireabookwriter.com/' || $actual_link == 'https://hireabookwriter.com/index'){ ?> 

<title><?php echo $bname ?> | Professional Book Writing Services</title>  

<meta name="description" content="<?php echo $bname ?> to turn your story ideas into captivating books. We offer ghostwriting, publishing, editing, and marketing for all genres." /> 
<script type="application/ld+json">
{
"@context":"https://schema.org",
"@graph":[

{
"@type":"Organization",
"@id":"https://hireabookwriter.com/#organization",
"name":"<?php echo $bname ?>",
"alternateName":[
"Hire a Ghostwriter",
"Professional Book Writers",
"Book Writing Company",
"Book Writing Services",
"Ghostwriting Company"
],
"url":"https://hireabookwriter.com/",
"logo":"https://hireabookwriter.com/assets/images/header-logo.webp",
"image":"https://hireabookwriter.com/assets/images/header-logo.webp",
"description":"<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
"telephone":"+1-656-222-1812",
"foundingDate":"2015",
"address":{
"@type":"PostalAddress",
"streetAddress":"100 East Pine St, Suite 110",
"addressLocality":"Orlando",
"addressRegion":"FL",
"postalCode":"32801",
"addressCountry":"US"
},
"contactPoint":{
"@type":"ContactPoint",
"telephone":"+1-656-222-1812",
"contactType":"customer service",
"areaServed":"US",
"availableLanguage":[
"English"
]
},
"sameAs":[
"https://www.facebook.com/hireabookwriter/",
"https://www.instagram.com/hireabookwriter/",
"https://www.trustpilot.com/review/hireabookwriter.com"
],
"knowsAbout":[
"Ghostwriting",
"Book Writing",
"Autobiography Writing",
"Biography Writing",
"Memoir Writing",
"Fiction Writing",
"Book Publishing",
"Book Marketing",
"Book Cover Design"
],
"aggregateRating":{
"@type":"AggregateRating",
"ratingValue":"4.8",
"reviewCount":"231",
"bestRating":"5",
"worstRating":"1"
}
},

{
"@type":"ProfessionalService",
"@id":"https://hireabookwriter.com/#service",
"name":"<?php echo $bname ?>",
"url":"https://hireabookwriter.com/",
"image":"https://hireabookwriter.com/assets/images/header-logo.webp",
"telephone":"+1-656-222-1812",
"priceRange":"$$",
"areaServed":{
"@type":"Country",
"name":"United States"
},
"provider":{
"@id":"https://hireabookwriter.com/#organization"
},
"hasOfferCatalog":{
"@type":"OfferCatalog",
"name":"Book Writing & Publishing Services",
"itemListElement":[

{
"@type":"Offer",
"itemOffered":{
"@type":"Service",
"name":"Ghostwriting Services",
"url":"https://hireabookwriter.com/ghostwriting-services"
}
},

{
"@type":"Offer",
"itemOffered":{
"@type":"Service",
"name":"Autobiography Writing Services",
"url":"https://hireabookwriter.com/autobiography-writing-services"
}
},

{
"@type":"Offer",
"itemOffered":{
"@type":"Service",
"name":"Biography Writing Services",
"url":"https://hireabookwriter.com/biography-writing-services"
}
},

{
"@type":"Offer",
"itemOffered":{
"@type":"Service",
"name":"Memoir Writing Services",
"url":"https://hireabookwriter.com/memoir-writing-services"
}
},

{
"@type":"Offer",
"itemOffered":{
"@type":"Service",
"name":"Fiction Writing Services",
"url":"https://hireabookwriter.com/fiction-writing-servces"
}
},

{
"@type":"Offer",
"itemOffered":{
"@type":"Service",
"name":"Book Publishing Services",
"url":"https://hireabookwriter.com/book-publication-company"
}
},

{
"@type":"Offer",
"itemOffered":{
"@type":"Service",
"name":"Book Marketing Services",
"url":"https://hireabookwriter.com/book-marketing-company"
}
},

{
"@type":"Offer",
"itemOffered":{
"@type":"Service",
"name":"Book Cover Design",
"url":"https://hireabookwriter.com/book-cover"
}
}

]
}
},

{
"@type":"WebSite",
"@id":"https://hireabookwriter.com/#website",
"url":"https://hireabookwriter.com/",
"name":"<?php echo $bname ?>",
"alternateName":"HireABookWriter.com",
"inLanguage":"en-US",
"publisher":{
"@id":"https://hireabookwriter.com/#organization"
},
"potentialAction":{
"@type":"SearchAction",
"target":"https://hireabookwriter.com/?s={search_term_string}",
"query-input":"required name=search_term_string"
}
},

{
"@type":"WebPage",
"@id":"https://hireabookwriter.com/#webpage",
"url":"https://hireabookwriter.com/",
"name":"<?php echo $bname ?> | Professional Book Writing Services",
"isPartOf":{
"@id":"https://hireabookwriter.com/#website"
},
"about":{
"@id":"https://hireabookwriter.com/#organization"
},
"primaryImageOfPage":{
"@type":"ImageObject",
"url":"https://hireabookwriter.com/assets/images/header-logo.webp"
}
},

{
"@type":"FAQPage",
"@id":"https://hireabookwriter.com/#faq",
"mainEntity":[

{
"@type":"Question",
"name":"How do I get started with your book writing service?",
"acceptedAnswer":{
"@type":"Answer",
"text":"Contact us through our website and schedule a consultation where our team will discuss your book idea, genre, and writing goals."
}
},

{
"@type":"Question",
"name":"Will my book sound like me if I hire a ghostwriter?",
"acceptedAnswer":{
"@type":"Answer",
"text":"Yes. Our writers conduct interviews and research to capture your unique tone, personality, and writing voice."
}
},

{
"@type":"Question",
"name":"Do I own the rights to my book?",
"acceptedAnswer":{
"@type":"Answer",
"text":"Yes. Clients retain 100 percent ownership and rights to their completed manuscript and intellectual property."
}
},

{
"@type":"Question",
"name":"What genres do you specialize in?",
"acceptedAnswer":{
"@type":"Answer",
"text":"We work on memoirs, fiction, business books, autobiographies, biographies, and many other genres."
}
},

{
"@type":"Question",
"name":"How long does the book writing process take?",
"acceptedAnswer":{
"@type":"Answer",
"text":"Most projects take between three to six months depending on the book length and project scope."
}
}

]
}

]
}
</script>


<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $bname ?> | Professional Book Writing Services" />
<meta property="og:description" content="Work with professional ghostwriters, editors, and publishing experts. We provide full-service book writing, editing, publishing, and marketing solutions for authors worldwide." />
<meta property="og:url" content="https://hireabookwriter.com/" />
<meta property="og:site_name" content="<?php echo $bname ?>" />
<meta property="og:image" content="https://hireabookwriter.com/assets/images/header-logo.webp" />
<meta property="og:image:alt" content="<?php echo $bname ?> - Professional Book Writing Company" />
<meta property="og:locale" content="en_US" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo $bname ?> | Professional Ghostwriting & Publishing Services" />
<meta name="twitter:description" content="Looking to write a book? Our professional ghostwriters and editors help authors create, publish, and market books across all genres." />
<meta name="twitter:image" content="https://hireabookwriter.com/assets/images/header-logo.webp" />
<meta name="twitter:site" content="@hireabookwriter" />

<!-- Additional SEO Signals -->
<meta name="author" content="<?php echo $bname ?>" />
<meta name="robots" content="index, follow" />


<?php }   

 

elseif($actual_link == 'https://hireabookwriter.com/about-us'){  ?> 

<title>About <?php echo $bname ?> | Expert Book Writing Team</title> 

<meta name="description" content="Learn why authors choose <?php echo $bname ?> to write, edit, publish, and market their books. Discover our team’s passion for powerful storytelling." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional ghostwriting, book editing, publishing, and book marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": {
        "@id": "https://hireabookwriter.com/#organization"
      }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/#webpage",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?> | Professional Book Writing Services in Orlando, FL",
      "isPartOf": {
        "@id": "https://hireabookwriter.com/#website"
      },
      "about": {
        "@id": "https://hireabookwriter.com/#organization"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How do I get started with your book writing service?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Simply contact us through our website. We'll schedule a consultation to understand your goals, genre, and vision for your book."
          }
        },

        {
          "@type": "Question",
          "name": "Will my book sound like me if I hire a ghostwriter?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We use interviews and writing samples to match your tone, style, and voice as closely and authentically as possible."
          }
        },

        {
          "@type": "Question",
          "name": "Do I own all the rights to my book after it's written?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. Once completed, you retain 100 percent rights and ownership to your manuscript, title, and intellectual property."
          }
        },

        {
          "@type": "Question",
          "name": "What genres do you specialize in?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We work across genres including memoirs, fiction, self-help, business books, and more, always tailored to your voice and audience."
          }
        },

        {
          "@type": "Question",
          "name": "How long does the book writing process take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timelines vary, but most projects take between three to six months depending on the book’s length, complexity, and your input."
          }
        }

      ],
      "image": {
        "@type": "ImageObject",
        "url": "https://hireabookwriter.com/assets/images/header-logo.webp",
        "height": 600,
        "width": 600
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      }
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/contact'){  ?> 

<title>Contact | <?php echo $bname ?> to Start Your Journey</title> 

<meta name="description" content="Get in touch with <?php echo $bname ?> to start your journey. Let’s discuss your vision and how we can bring your story to life." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional ghostwriting, book editing, publishing, and book marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": {
        "@id": "https://hireabookwriter.com/#organization"
      }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/#webpage",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?> | Professional Book Writing Services in Orlando, FL",
      "isPartOf": {
        "@id": "https://hireabookwriter.com/#website"
      },
      "about": {
        "@id": "https://hireabookwriter.com/#organization"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How do I get started with your book writing service?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Simply contact us through our website. We'll schedule a consultation to understand your goals, genre, and vision for your book."
          }
        },

        {
          "@type": "Question",
          "name": "Will my book sound like me if I hire a ghostwriter?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We use interviews and writing samples to match your tone, style, and voice as closely and authentically as possible."
          }
        },

        {
          "@type": "Question",
          "name": "Do I own all the rights to my book after it's written?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. Once completed, you retain 100 percent rights and ownership to your manuscript, title, and intellectual property."
          }
        },

        {
          "@type": "Question",
          "name": "What genres do you specialize in?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We work across genres including memoirs, fiction, self-help, business books, and more, always tailored to your voice and audience."
          }
        },

        {
          "@type": "Question",
          "name": "How long does the book writing process take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timelines vary, but most projects take between three to six months depending on the book’s length, complexity, and your input."
          }
        }

      ],
      "image": {
        "@type": "ImageObject",
        "url": "https://hireabookwriter.com/assets/images/header-logo.webp",
        "height": 600,
        "width": 600
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      }
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/ghostwriting-services'){  ?> 

<title>Ghostwriting Services | <?php echo $bname ?> Today</title> 

<meta name="description" content="<?php echo $bname ?> for expert Ghostwriting Services. We craft fiction, memoirs, self-help books, and more with your voice and vision." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 345
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional ghostwriting, book editing, publishing, and book marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/ghostwriting-services#webpage",
      "url": "https://hireabookwriter.com/ghostwriting-services",
      "name": "Ghostwriting Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/ghostwriting-services#service",
      "name": "Ghostwriting Services",
      "description": "Professional ghostwriting services for fiction, non-fiction, memoirs, and business books. Hire a skilled writer to bring your ideas to life.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/ghostwriting-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/ghostwriting-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How do I begin with writing a fiction book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Begin with a meticulous narrative outline, delineate your characters, and craft the setting. Strategize your writing timetable, construct meaningful chapters, seek valuable input, refine through edits, and culminate the process with thorough proofreading, meticulous polishing, and final editing before presenting your work to the world."
          }
        },

        {
          "@type": "Question",
          "name": "What are the core elements that define a compelling fiction story?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A compelling fiction story encompasses engaging thematic exploration, immersive storytelling, relevance to contemporary topics, conflict, and believable resolutions."
          }
        },

        {
          "@type": "Question",
          "name": "How much time does it typically take to write a fiction novel with <?php echo $bname ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The time required for a fiction novel with <?php echo $bname ?> depends on writing speed, length, intricacy, and commitment. It could take anywhere from months to years."
          }
        },

        {
          "@type": "Question",
          "name": "Is it suitable to employ a writer to assist me in writing my fiction book with <?php echo $bname ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, you can hire a writer from <?php echo $bname ?> for a seamless writing experience. Collaboration with a skilled writer can bring in diverse expertise, save time, and enhance the quality and creativity of your fiction book project."
          }
        },

        {
          "@type": "Question",
          "name": "What types of fiction genres does <?php echo $bname ?> ghostwriter?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "<?php echo $bname ?>'s team comprises professional ghostwriters specializing in various genres. Our versatile ghostwriters excel in popular and niche genres, ensuring our customers a wide range of options."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/story-writing-services'){  ?> 

<title>Story Writing Services | Professional Book Writers</title> 

<meta name="description" content="<?php echo $bname ?> to create original, engaging stories. We bring your plot and characters to life with compelling storytelling." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 374
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional story writing, ghostwriting, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/story-writing-services#webpage",
      "url": "https://hireabookwriter.com/story-writing-services",
      "name": "Story Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/story-writing-services#service",
      "name": "Story Writing Services",
      "description": "Professional story writing services for fiction, non-fiction, memoirs, and business books. Hire a skilled writer to craft compelling stories.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/story-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/story-writing-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How do I begin with writing a fiction book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Begin with a meticulous narrative outline, delineate your characters, and craft the setting. Strategize your writing timetable, construct meaningful chapters, seek valuable input, refine through edits, and culminate the process with thorough proofreading, meticulous polishing, and final editing before presenting your work to the world."
          }
        },

        {
          "@type": "Question",
          "name": "What are the core elements that define a compelling fiction story?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A compelling fiction story encompasses engaging thematic exploration, immersive storytelling, relevance to contemporary topics, conflict, and believable resolutions."
          }
        },

        {
          "@type": "Question",
          "name": "How much time does it typically take to write a fiction novel with <?php echo $bname ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The time required for a fiction novel with <?php echo $bname ?> depends on writing speed, length, intricacy, and commitment. It could take anywhere from months to years."
          }
        },

        {
          "@type": "Question",
          "name": "Is it suitable to employ a writer to assist me in writing my fiction book with <?php echo $bname ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, you can hire a writer from <?php echo $bname ?> for a seamless writing experience. Collaboration with a skilled writer can bring in diverse expertise, save time, and enhance the quality and creativity of your fiction book project."
          }
        },

        {
          "@type": "Question",
          "name": "What types of fiction genres does <?php echo $bname ?> ghostwrite?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "<?php echo $bname ?>'s team comprises professional ghostwriters specializing in various genres. Our versatile ghostwriters excel in popular and niche genres, ensuring our customers a wide range of options."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/autobiography-writing-services'){  ?> 

<title>Autobiography Writing Services | Tell Your Life Story</title> 

<meta name="description" content="Share your journey with the world. <?php echo $bname ?> to craft your autobiography with honesty, structure, and emotional impact." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 378
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional autobiography writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/autobiography-writing-services#webpage",
      "url": "https://hireabookwriter.com/autobiography-writing-services",
      "name": "Autobiography Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/autobiography-writing-services#service",
      "name": "Autobiography Writing Services",
      "description": "Professional autobiography writing services to craft compelling, authentic life stories. Hire skilled writers to bring your unique journey to life.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/autobiography-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/autobiography-writing-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How do you collaborate with authors on their autobiographies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We collaborate with authors, delving into their life experiences and character traits through insightful conversations and in-depth interviews. This ensures a personalized approach that captures the essence of their unique journey."
          }
        },

        {
          "@type": "Question",
          "name": "How do you capture the author's voice and perspective in the autobiography?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Capturing the author's voice is paramount in our autobiographies. Through meticulous interviews and a deep understanding of their story, our writers skillfully infuse each word, ensuring the narrative resonates authentically with the author's perspective."
          }
        },

        {
          "@type": "Question",
          "name": "Can you provide examples of your written autobiographies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While we prioritize client confidentiality, we can share excerpts of our diverse autobiographies upon request. Each represents our commitment to unique storytelling and capturing individual experiences."
          }
        },

        {
          "@type": "Question",
          "name": "Do you help organize and structure the autobiography for a cohesive narrative?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We take pride in helping authors organize and structure their autobiographies. Our skilled writers collaborate closely with the clients, creating a cohesive narrative that preserves the chronological flow while emphasizing key themes and milestones."
          }
        },

        {
          "@type": "Question",
          "name": "How do you balance the author's experiences with reader engagement in the autobiography?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our forte is to strike the perfect balance between the author's experiences and reader engagement. We intricately weave together the true reflection of a person by using captivating storytelling techniques, ensuring the autobiography not only reflects the author's journey but also captivates a broad audience."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/novel-writing'){  ?> 

<title>Novel Writing Services | Hire Fiction Book Writers</title> 

<meta name="description" content="Get help writing your novel with creative plot development, character arcs, and immersive world-building." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 372
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional novel writing, ghostwriting, editing, publishing, and book marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/novel-writing#webpage",
      "url": "https://hireabookwriter.com/novel-writing",
      "name": "Novel Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/novel-writing#service",
      "name": "Novel Writing Services",
      "description": "Professional novel writing services for fiction, non-fiction, and genre novels. Hire expert writers to craft compelling and immersive stories.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/novel-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/songwriting-services'){  ?> 

<title>Songwriting Services | Custom Lyrics & Melody Writing</title> 

<meta name="description" content="Hire professional songwriters to write original lyrics, hooks, and melodies that express your message and style." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional songwriting, ghostwriting, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/songwriting-services#webpage",
      "url": "https://hireabookwriter.com/songwriting-services",
      "name": "Songwriting Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/songwriting-services#service",
      "name": "Songwriting Services",
      "description": "Professional songwriting services to transform your ideas into a polished, original book while preserving your voice and message.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/songwriting-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/songwriting-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "Why should I hire a songwriter?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A songwriter turns your ideas into a professional book, helping you stay focused while ensuring quality, structure, and a strong narrative."
          }
        },

        {
          "@type": "Question",
          "name": "What exactly does a songwriter do?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "They write the book on your behalf, using your ideas, experiences, or notes, all while keeping your voice and message intact."
          }
        },

        {
          "@type": "Question",
          "name": "Will I still be the author of the book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You’ll be credited as the sole author, and the songwriter remains anonymous unless agreed otherwise."
          }
        },

        {
          "@type": "Question",
          "name": "How long does a songwriter take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Depending on your project’s complexity, it can take anywhere from a few weeks to several months to complete."
          }
        },

        {
          "@type": "Question",
          "name": "Is the content truly original?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, every project is written from scratch and tailored to your story. No templates, no plagiarism, just original, custom work."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/seo-content-writing-services'){  ?> 

<title>SEO Content Writing | High-Quality & Optimized Content</title> 

<meta name="description" content="Improve your online visibility with SEO content writing services that deliver quality, relevance, and results." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional songwriting, ghostwriting, book editing, publishing, SEO content writing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/seo-content-writing-services#webpage",
      "url": "https://hireabookwriter.com/seo-content-writing-services",
      "name": "SEO Content Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/seo-content-writing-services#service",
      "name": "SEO Content Writing Services",
      "description": "Professional SEO content writing services including blog posts, website copy, product and service descriptions, landing pages, and optimized content to boost search engine visibility and traffic.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/seo-content-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/seo-content-writing-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "What is seo-writing and how could it help my business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SEO writing is the act of creating content that will be visible to search engines, like Google. If done properly, the user will type in a keyword or phrase that your website specifically targets; your website comes up in the search results; they click on it, and you hopefully turn that click into a legitimate lead/sale. SEO writing involves strategically placing keywords; writing high quality content, and giving the content proper formatting."
          }
        },

        {
          "@type": "Question",
          "name": "What content do you produce for SEO writing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We produce a variety of content related to SEO writing, including, but not limited to, blog posts, website copy, product and service descriptions, landing pages, and any other type of content that needs to be optimized according to your brand, audience, and SEO marketing goals."
          }
        },

        {
          "@type": "Question",
          "name": "How do you choose the best keyword for your content?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We will do extensive keyword research based on your industry, competitor, and target audience. We pay attention to keywords that have the greatest return on value (with search intent) and we will integrate them into your content appropriately and naturally with the intent of pushing your rankings without overextending on keywords."
          }
        },

        {
          "@type": "Question",
          "name": "Can you update or optimize my existing content on my website?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! We can conduct an audit on what is currently there and find ways to improve upon it, either through rewriting it, optimizing for SEO, or both, providing it follows the best practices of SEO. This will re-energize the content on your site without having to start from scratch."
          }
        },

        {
          "@type": "Question",
          "name": "What is the timeline to see results with SEO?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SEO is a long-term strategy for traffic growth, and you can typically expect to start seeing results after about 2-6 months, depending on the competition, authority of the website, and the quality of the content used. Our priority is sustainable traffic growth with content that promises great performance over time."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/wiki-writing'){  ?>

<title>Wikipedia Writing Services | Verified Wiki Pages</title>

<meta name="description" content="Hire expert wiki writers to create, edit, and manage your professional Wikipedia page with compliance and credibility." />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional ghostwriting, wiki writing, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/wiki-writing#webpage",
      "url": "https://hireabookwriter.com/wiki-writing",
      "name": "Wiki Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/wiki-writing#service",
      "name": "Wiki Writing Services",
      "description": "Professional wiki writing services to create well-researched, informative, and optimized wiki content tailored to your brand or topic.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/wiki-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/memoir-writing-services'){  ?> 

<title>Memoir Writing Services | Share Your Personal Story</title> 

<meta name="description" content="<?php echo $bname ?> to turn your life experiences into a powerful memoir that connects with readers and leaves a lasting impression." />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional ghostwriting, memoir writing, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/memoir-writing-services#webpage",
      "url": "https://hireabookwriter.com/memoir-writing-services",
      "name": "Memoir Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/memoir-writing-services#service",
      "name": "Memoir Writing Services",
      "description": "Professional memoir writing services to transform your personal memories into a compelling, structured story while preserving your voice and authenticity.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/memoir-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/memoir-writing-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "Why should I hire a ghostwriter for my memoir?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A memoir ghostwriter helps you shape personal memories into a powerful, structured story, preserving your voice while making your experiences resonate with readers."
          }
        },

        {
          "@type": "Question",
          "name": "What does a memoir ghostwriter actually do?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "They listen to your story, gather your experiences, and craft a compelling narrative that feels authentic and emotionally true, as if written by you."
          }
        },

        {
          "@type": "Question",
          "name": "Will I still be considered the author of my memoir?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. You retain full authorship and credit. Our ghostwriters remain behind the scenes unless you choose to acknowledge them."
          }
        },

        {
          "@type": "Question",
          "name": "How long does memoir writing usually take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Depending on the depth of your story and how much material you provide, it typically takes a few weeks to several months to complete your memoir."
          }
        },

        {
          "@type": "Question",
          "name": "Is my story written from scratch?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every memoir is custom-written based on your life, interviews, or notes. We never use templates. Your story is as unique as you are."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/military-fiction-writing'){  ?> 

<title>Military Fiction Writing | Authentic War Stories</title> 

<meta name="description" content="Hire expert writers to craft thrilling military fiction with real-world details, compelling characters, and strong emotional arcs." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional military fiction writing, ghostwriting, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/military-fiction-writing#webpage",
      "url": "https://hireabookwriter.com/military-fiction-writing",
      "name": "Military Fiction Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/military-fiction-writing#service",
      "name": "Military Fiction Writing Services",
      "description": "Professional military fiction writing services to craft thrilling, authentic, and compelling military stories that resonate with readers.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/military-fiction-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/speech-writing'){  ?> 

<title>Speech Writing Services | Memorable & Impactful</title> 

<meta name="description" content="Hire a professional speechwriter to deliver your message with clarity, confidence, and powerful storytelling." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional ghostwriting, speech writing, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/speech-writing#webpage",
      "url": "https://hireabookwriter.com/speech-writing",
      "name": "Speech Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/speech-writing#service",
      "name": "Speech Writing Services",
      "description": "Professional speech writing services to craft powerful, persuasive, and impactful speeches tailored for your audience, event, and goals.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/speech-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/non-fiction-writing-services'){  ?> 

<title>Non-Fiction Writing Services | Hire Expert Writers</title> 

<meta name="description" content="From self-help to business books, <?php echo $bname ?> to craft informative, well-structured non-fiction that informs and engages." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional non-fiction writing, ghostwriting, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/non-fiction-writing-services#webpage",
      "url": "https://hireabookwriter.com/non-fiction-writing-services",
      "name": "Non-Fiction Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/non-fiction-writing-services#service",
      "name": "Non-Fiction Writing Services",
      "description": "Professional non-fiction ghostwriting services to transform your expertise, insights, and experiences into a structured, compelling, and research-backed book.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/non-fiction-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/non-fiction-writing-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "Why should I hire a ghostwriter for my non-fiction book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A ghostwriter brings structure, clarity, and polish to your ideas, helping you share your knowledge or story in a compelling, professional format without getting overwhelmed by the writing process."
          }
        },

        {
          "@type": "Question",
          "name": "What exactly does a ghostwriter do?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "They craft your manuscript based on your input, be it notes, interviews, or conversations, while maintaining your unique voice and aligning with your vision and message."
          }
        },

        {
          "@type": "Question",
          "name": "Will I still be recognized as the author?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. You retain full authorship credit, and the ghostwriter stays behind the scenes unless you choose to acknowledge them."
          }
        },

        {
          "@type": "Question",
          "name": "How long does it take to write a non-fiction book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timelines vary depending on length and research needs. Most projects take between 4 and 16 weeks, but we’ll provide a tailored estimate after understanding your scope."
          }
        },

        {
          "@type": "Question",
          "name": "Is the content truly original and research-backed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, all work is 100% original and customized. For non-fiction, we also include accurate research, citations (if needed), and ensure your content is factually sound and plagiarism-free."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/script-writing-services'){  ?> 

<title>Script Writing Services | Hire Screen & TV Writers</title> 

<meta name="description" content="Hire writers for screenplays, TV scripts, or web series. We bring your visual stories to life with professional scriptwriting." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional script writing, ghostwriting, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/script-writing-services#webpage",
      "url": "https://hireabookwriter.com/script-writing-services",
      "name": "Script Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/script-writing-services#service",
      "name": "Script Writing Services",
      "description": "Professional script writing services for film, television, animation, video games, comics, and branded content—crafted to industry standards and tailored to your vision.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/script-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/script-writing-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "I only have a rough idea. Can you help turn it into a full script?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Many of our clients come to us with just a concept or a few notes. Our scriptwriters collaborate with you to shape your idea into a full, production-ready script and guide you through every step of the creative process."
          }
        },

        {
          "@type": "Question",
          "name": "What types of scripts do you specialize in?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We craft scripts for film, TV, animated shorts, video games, comic books, and branded content. Each script is tailored to match the tone, format, and audience requirements of your project."
          }
        },

        {
          "@type": "Question",
          "name": "How long does it take to receive a completed script?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timelines vary based on project scope, but most scripts are delivered within 2 to 4 weeks. Expedited services are also available for tight deadlines."
          }
        },

        {
          "@type": "Question",
          "name": "Can I request changes once the script is complete?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. We offer multiple revision rounds and work closely with you to ensure your voice, vision, and expectations are fully met."
          }
        },

        {
          "@type": "Question",
          "name": "Will the script be formatted to industry standards?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every script is formatted according to industry-specific guidelines, whether for screenplays, comics, or games, ensuring your project is professionally polished and pitch-ready."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/movie-writing'){  ?> 

<title>Movie Script Writing | Powerful Cinematic Stories</title> 

<meta name="description" content="<?php echo $bname ?> to turn your film idea into a compelling movie script with character depth and cinematic appeal." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional movie writing, ghostwriting, book editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/movie-writing#webpage",
      "url": "https://hireabookwriter.com/movie-writing",
      "name": "Movie Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/movie-writing#service",
      "name": "Movie Writing Services",
      "description": "Professional movie writing services to develop original screenplays and narrative treatments for films that captivate audiences and meet industry standards.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/movie-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/rhyme-writing-services'){  ?> 

<title>Rhyme Writing Services | Creative & Original Rhymes</title> 

<meta name="description" content="Hire rhyme writers for poems, lyrics, or children’s books. We craft catchy, clever rhymes for any style or purpose." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional rhyme writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/rhyme-writing-services#webpage",
      "url": "https://hireabookwriter.com/rhyme-writing-services",
      "name": "Rhyme Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/rhyme-writing-services#service",
      "name": "Rhyme Writing Services",
      "description": "Professional rhyme writing services to craft lyrical, rhythmic, and emotionally resonant verses tailored to your message, voice, and audience.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/rhyme-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/rhyme-writing-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "Why should I hire a rhyme writer for my project?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A professional rhyme writer brings rhythm, emotional depth, and structure to your ideas, helping you deliver a lyrical message that resonates without the stress of perfecting rhyme, meter, or flow on your own."
          }
        },
        {
          "@type": "Question",
          "name": "What exactly does a rhyme writer do?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "They transform your themes, concepts, or drafts into refined, impactful rhymes. Whether you provide raw ideas or recorded thoughts, we shape them into polished verse that reflects your voice and intent."
          }
        },
        {
          "@type": "Question",
          "name": "Will I still be credited as the writer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. You remain the sole credited author or lyricist, and our writers stay anonymous unless you choose to acknowledge their contribution."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to write a custom rhyme or piece?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timeframes vary based on complexity and length. Most rhyme projects are completed within 1 to 3 weeks, but we’ll give a custom timeline after reviewing your creative scope."
          }
        },
        {
          "@type": "Question",
          "name": "Is the rhyme original and tailored to my style?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every piece is 100% original, crafted uniquely for your tone, message, and audience. We ensure your rhyme reflects both creative integrity and your intended style."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/narrative-writing-services'){  ?> 

<title>Narrative Writing Services | Bring Stories to Life</title> 

<meta name="description" content="Hire expert storytellers to write captivating narratives that entertain, inform, or emotionally connect with readers." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional narrative writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/narrative-writing-services#webpage",
      "url": "https://hireabookwriter.com/narrative-writing-services",
      "name": "Narrative Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/narrative-writing-services#service",
      "name": "Narrative Writing Services",
      "description": "Professional narrative writing and ghostwriting services to craft powerful, well-structured stories, memoirs, and fictional manuscripts tailored to your voice and vision.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/narrative-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/narrative-writing-services#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "Why should I hire a narrative ghostwriter?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A narrative ghostwriter helps shape your personal story, memoir, or fictional idea into a powerful, well-structured manuscript. We bring professional storytelling skills to ensure your story resonates with readers and flows seamlessly from beginning to end."
          }
        },
        {
          "@type": "Question",
          "name": "What exactly does a narrative ghostwriter do?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We work closely with you to understand your story, voice, and goals, then write the manuscript on your behalf. Whether it’s based on your life, imagination, or a rough draft, we turn your vision into a compelling and cohesive narrative."
          }
        },
        {
          "@type": "Question",
          "name": "Will I still be the author of the story?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You remain the sole author. We bring your story to life behind the scenes, while you receive full credit for the finished work."
          }
        },
        {
          "@type": "Question",
          "name": "How long does narrative ghostwriting take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timelines vary depending on the story’s depth and scope. Some projects take a few weeks, while others—especially memoirs or complex fiction—may take several months."
          }
        },
        {
          "@type": "Question",
          "name": "Is the story truly original?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. Every story is crafted from scratch and tailored to your voice and experience. No templates, no shortcuts—just authentic storytelling that’s uniquely yours."
          }
        }

      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/screen-writing'){  ?> 

<title>Screenwriting Services | Hire a Script Writer</title> 

<meta name="description" content="From concept to screenplay, hire a screenwriter to build dramatic arcs, dialogues, and scenes for TV and film." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional screen writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/screen-writing#webpage",
      "url": "https://hireabookwriter.com/screen-writing",
      "name": "Screen Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/screen-writing#service",
      "name": "Screen Writing Services",
      "description": "Professional screen writing services to craft compelling screenplays, scripts, and format-ready content for film, television, and digital media.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/screen-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/comic-writing'){  ?> 

<title>Comic Book Writing Services | Heroes, Plots & Panels</title> 

<meta name="description" content="<?php echo $bname ?> to develop original comic book scripts with engaging characters and strong visual storytelling." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": [
        { "@type": "City", "name": "Orlando" },
        { "@type": "State", "name": "Florida" },
        { "@type": "Country", "name": "United States" }
      ],
      "description": "Professional comic writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/comic-writing#webpage",
      "url": "https://hireabookwriter.com/comic-writing",
      "name": "Comic Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/comic-writing#service",
      "name": "Comic Writing Services",
      "description": "Professional comic writing services to craft original stories, dialogue, and narrative panels tailored for comics, graphic novels, and illustrated series.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/comic-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/comic-writing#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/#website",
            "name": "Services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/comic-writing",
            "name": "Comic Writing Services"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/fantasy-writing'){  ?> 

<title>Fantasy Writing Services | Epic Worlds & Characters</title> 

<meta name="description" content="Hire fantasy writers to create immersive worlds, magical systems, and unforgettable characters in your fantasy book." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional fantasy writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/fantasy-writing#webpage",
      "url": "https://hireabookwriter.com/fantasy-writing",
      "name": "Fantasy Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/fantasy-writing#service",
      "name": "Fantasy Writing Services",
      "description": "Professional fantasy writing services to create immersive, imaginative stories, worldbuilding, and engaging characters tailored for fantasy novels, series, and creative projects.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/fantasy-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/fantasy-writing#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/fantasy-writing",
            "name": "Fantasy Writing Services",
            "url": "https://hireabookwriter.com/fantasy-writing"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/fiction-writing-servces'){  ?> 

<title>Fiction Writing Services | <?php echo $bname ?></title> 

<meta name="description" content="<?php echo $bname ?> to bring your fictional story to life with compelling plots, developed characters, and immersive settings." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non-fiction authors.",
      "telephone": "+1-656-222-1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1-656-222-1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional fiction writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/fiction-writing-servces#webpage",
      "url": "https://hireabookwriter.com/fiction-writing-servces",
      "name": "Fiction Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/fiction-writing-servces#service",
      "name": "Fiction Writing Services",
      "description": "Professional fiction writing services to craft compelling stories, characters, and narratives for novels, series, and creative projects.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/fiction-writing-servces",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/fiction-writing-servces#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I begin with writing a fiction book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Begin with a meticulous narrative outline, delineate your characters, and craft the setting. Strategize your writing timetable, construct meaningful chapters, seek valuable input, refine through edits, and culminate the process with thorough proofreading, meticulous polishing, and final editing before presenting your work to the world."
          }
        },
        {
          "@type": "Question",
          "name": "What are the core elements that define a compelling fiction story?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A compelling fiction story encompasses engaging thematic exploration, immersive storytelling, relevance to contemporary topics, conflict, and believable resolutions."
          }
        },
        {
          "@type": "Question",
          "name": "How much time does it typically take to write a fiction novel with <?php echo $bname ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The time required for a fiction novel with <?php echo $bname ?> depends on writing speed, length, intricacy, and commitment. It could take anywhere from months to years."
          }
        },
        {
          "@type": "Question",
          "name": "Is it suitable to employ a writer to assist me in writing my fiction book with <?php echo $bname ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, you can hire a writer from <?php echo $bname ?> for a seamless writing experience. Collaboration with a skilled writer can bring in diverse expertise, save time, and enhance the quality and creativity of your fiction book project."
          }
        },
        {
          "@type": "Question",
          "name": "What types of fiction genres does <?php echo $bname ?> ghostwrite?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "<?php echo $bname ?>'s team comprises professional ghostwriters specializing in various genres. Our versatile ghostwriters excel in popular and niche genres, ensuring our customers a wide range of options."
          }
        }
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/fiction-writing-servces#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/fiction-writing-servces",
            "name": "Fiction Writing Services",
            "url": "https://hireabookwriter.com/fiction-writing-servces"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/horror-book-writing'){  ?> 

<title>Horror Writing Services | Chilling & Gripping Tales</title> 

<meta name="description" content="Hire horror writers to craft eerie, suspenseful stories that keep readers on edge and turn pages till the end." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional horror book writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/horror-book-writing#webpage",
      "url": "https://hireabookwriter.com/horror-book-writing",
      "name": "Horror Book Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/horror-book-writing#service",
      "name": "Horror Book Writing Services",
      "description": "Professional horror book writing services to craft chilling, suspenseful, and immersive horror stories tailored for novels, series, and creative projects.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/horror-book-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/horror-book-writing#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/horror-book-writing",
            "name": "Horror Book Writing Services",
            "url": "https://hireabookwriter.com/horror-book-writing"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/science-fiction-writing'){  ?> 

<title>Sci-Fi Writing Services | Explore New Worlds</title> 

<meta name="description" content="Hire expert sci-fi writers to create futuristic adventures, complex tech, and thought-provoking speculative fiction." />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional science fiction writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/science-fiction-writing#webpage",
      "url": "https://hireabookwriter.com/science-fiction-writing",
      "name": "Science Fiction Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/science-fiction-writing#service",
      "name": "Science Fiction Writing Services",
      "description": "Professional science fiction writing services to create futuristic, imaginative and compelling stories tailored for sci‑fi novels, series, and creative projects.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/science-fiction-writing",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/science-fiction-writing#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/science-fiction-writing",
            "name": "Science Fiction Writing Services",
            "url": "https://hireabookwriter.com/science-fiction-writing"
          }
        }
      ]
    }

  ]
}
</script>

<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/action-adventure'){  ?> 

<title>Action & Adventure Writing | Thrilling Storytelling</title> 

<meta name="description" content="<?php echo $bname ?> to craft gripping action stories with fast-paced plots, daring heroes, and thrilling twists." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional action and adventure writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/action-adventure#webpage",
      "url": "https://hireabookwriter.com/action-adventure",
      "name": "Action & Adventure Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/action-adventure#service",
      "name": "Action & Adventure Writing Services",
      "description": "Professional action and adventure writing services to craft thrilling, dynamic stories and engaging narratives tailored for novels, series, and creative writing projects.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/action-adventure",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/action-adventure#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/action-adventure",
            "name": "Action & Adventure Writing Services",
            "url": "https://hireabookwriter.com/action-adventure"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/biography-writing-services'){  ?> 

<title>Biography Writing Services | Tell a Life Story</title> 

<meta name="description" content="Hire expert biographers to write inspiring life stories with accuracy, structure, and emotional depth." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional biography writing, ghostwriting, editing, publishing, and marketing services based in Orlando, Florida serving clients nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/biography-writing-services#webpage",
      "url": "https://hireabookwriter.com/biography-writing-services",
      "name": "Biography Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/biography-writing-services#service",
      "name": "Biography Writing Services",
      "description": "Professional biography writing services to create compelling, well-structured life stories, corporate profiles, and personal histories tailored to your goals.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/biography-writing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/biography-writing-services#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a biography writing service?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A biography writing service provides individuals with the needed assistance to write their professional and compelling Life Stories for a variety of reasons. You may need it for a personal biography, a family history or legacy project, a corporate profile, or personal promotional purposes. Skilled writers will work with you to write your biography in a clear, engaging and accurate manner."
          }
        },
        {
          "@type": "Question",
          "name": "What is the biography writing process?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The biography process usually starts with an initial consultation to identify your goals and gather some basic information. From there, we move into interviews, research, the writing stage, and then revisions. We will provide you the chance to view and approve each stage so that you know your voice and vision are being considered."
          }
        },
        {
          "@type": "Question",
          "name": "How long will it take to write my biography?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timeline length will vary, depending on the length and complexity of your story. Short professional bios may take a few days, while full-length biographies or memoirs may take several weeks to months to complete. We will discuss and offer you a timeline proposal after our initial consultation."
          }
        },
        {
          "@type": "Question",
          "name": "Will my story remain confidential?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, absolutely. Your privacy is important to us. Any information that you share with us will be confidential and can sign a non-disclosure agreement should you wish to do so."
          }
        },
        {
          "@type": "Question",
          "name": "Will you help with publishing or formatting the biography?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! Our writing services don't stop there. We give you simple options for editing, formatting for print or digital readers, and even self-publishing assistance. Whether you want to print a keepsake or publish a book professionally in book format, we will help you make it happen!"
          }
        }
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/biography-writing-services#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/biography-writing-services",
            "name": "Biography Writing Services",
            "url": "https://hireabookwriter.com/biography-writing-services"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/book-publication-company'){  ?> 

<title>Book Publishing Services | Print & Digital Ready</title> 

<meta name="description" content="Publish your book with ease. Our team handles formatting, distribution, ISBNs, and more to make your work publish-ready." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book publication services, ghostwriting, editing, and marketing support for authors in Orlando, Florida and nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/book-publication-company#webpage",
      "url": "https://hireabookwriter.com/book-publication-company",
      "name": "Book Publication Company | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/book-publication-company#service",
      "name": "Book Publication Company",
      "description": "Comprehensive book publication services including editing, formatting, cover design, and distribution to help authors successfully publish their fiction or non-fiction books.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/book-publication-company",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/book-publication-company#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/book-publication-company",
            "name": "Book Publication Company",
            "url": "https://hireabookwriter.com/book-publication-company"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/book-editing-services'){  ?> 

<title>Book Editing Services | Polish Your Manuscript</title> 

<meta name="description" content="Hire editors to refine your manuscript with content editing, proofreading, and formatting for publishing." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book editing services, ghostwriting, and publishing support for authors in Orlando, Florida and nationwide."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/book-editing-services#webpage",
      "url": "https://hireabookwriter.com/book-editing-services",
      "name": "Book Editing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/book-editing-services#service",
      "name": "Book Editing Services",
      "description": "Professional book editing services including developmental editing, copyediting, proofreading, and manuscript review to help authors refine and perfect their work.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/book-editing-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hireabookwriter.com/book-editing-services#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why should I hire a ghostwriter?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A ghostwriter turns your ideas into a professional book, helping you stay focused while ensuring quality, structure, and a strong narrative."
          }
        },
        {
          "@type": "Question",
          "name": "What exactly does a ghostwriter do?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "They write the book on your behalf, using your ideas, experiences, or notes, all while keeping your voice and message intact."
          }
        },
        {
          "@type": "Question",
          "name": "Will I still be the author of the book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You’ll be credited as the sole author, and the ghostwriter remains anonymous unless agreed otherwise."
          }
        },
        {
          "@type": "Question",
          "name": "How long does ghostwriting take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Depending on your project’s complexity, it can take anywhere from a few weeks to several months to complete."
          }
        },
        {
          "@type": "Question",
          "name": "Is the content truly original?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, every project is written from scratch and tailored to your story. No templates, no plagiarism, just original, custom work."
          }
        }
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/book-editing-services#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/book-editing-services",
            "name": "Book Editing Services",
            "url": "https://hireabookwriter.com/book-editing-services"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/book-formatting'){  ?> 

<title>Book Formatting Services | Print & eBook Layout</title> 

<meta name="description" content="Ensure your book looks professional with expert formatting for Kindle, paperback, hardcover, and digital platforms." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book formatting services, including eBook and print formatting, to help authors create professional, reader-ready manuscripts."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/book-formatting#webpage",
      "url": "https://hireabookwriter.com/book-formatting",
      "name": "Book Formatting Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/book-formatting#service",
      "name": "Book Formatting Services",
      "description": "Professional book formatting services for both print and digital formats, ensuring your manuscript meets industry standards and provides a seamless reading experience.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/book-formatting",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/book-formatting#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/book-formatting",
            "name": "Book Formatting Services",
            "url": "https://hireabookwriter.com/book-formatting"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/children-book-editors'){  ?> 

<title>Children’s Book Editors | Polished & Engaging Reads</title> 

<meta name="description" content="Hire editors who specialize in children’s books to refine story flow, age-appropriate tone, and illustrations alignment." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional children’s book editing services, including developmental editing, copyediting, and proofreading to help authors refine their stories for young readers."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/children-book-editors#webpage",
      "url": "https://hireabookwriter.com/children-book-editors",
      "name": "Children Book Editors | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/children-book-editors#service",
      "name": "Children Book Editing Services",
      "description": "Professional editing services for children’s books, tailored to enhance storytelling, clarity, age‑appropriate language, and overall reader engagement.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/children-book-editors",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/children-book-editors#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/children-book-editors",
            "name": "Children Book Editors",
            "url": "https://hireabookwriter.com/children-book-editors"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/book-proofreaders'){  ?> 

<title>Book Proofreading Services | Error-Free Content</title> 

<meta name="description" content="Ensure your book is clean and polished. Our proofreaders correct grammar, punctuation, and spelling before publishing." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book proofreading services to ensure error‑free manuscripts with correct grammar, punctuation, consistency, and readability for all authors."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/book-proofreaders#webpage",
      "url": "https://hireabookwriter.com/book-proofreaders",
      "name": "Book Proofreaders | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/book-proofreaders#service",
      "name": "Book Proofreading Services",
      "description": "Expert book proofreading services that catch and correct spelling, grammar, punctuation, formatting, and consistency issues to polish manuscripts before publication.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/book-proofreaders",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/book-proofreaders#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/book-proofreaders",
            "name": "Book Proofreaders",
            "url": "https://hireabookwriter.com/book-proofreaders"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/book-cover'){  ?> 

<title>Book Cover Design | Custom & Genre-Specific Art</title> 

<meta name="description" content="Hire designers to create eye-catching book covers that grab attention and reflect your book’s theme." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book cover design services to create eye‑catching, market‑ready covers that attract readers and boost book visibility."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/book-cover#webpage",
      "url": "https://hireabookwriter.com/book-cover",
      "name": "Book Cover Design Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/book-cover#service",
      "name": "Book Cover Design Services",
      "description": "Expert book cover design services combining market research, creative design, and genre‑specific elements to help authors create visually compelling book covers.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/book-cover",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/book-cover#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/book-cover",
            "name": "Book Cover Design Services",
            "url": "https://hireabookwriter.com/book-cover"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/translation'){  ?> 

<title>Book Translation Services | Reach Global Readers</title> 

<meta name="description" content="Translate your book into multiple languages with native experts and preserve tone, voice, and cultural nuances." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, translation, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book translation services to translate manuscripts accurately between languages, preserving tone, meaning, and style for global audiences."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/translation#webpage",
      "url": "https://hireabookwriter.com/translation",
      "name": "Book Translation Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/translation#service",
      "name": "Book Translation Services",
      "description": "Expert book translation services for authors seeking to reach international readers with accurately translated manuscripts that maintain original tone, voice, and intent.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/translation",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/translation#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/translation",
            "name": "Translation Services",
            "url": "https://hireabookwriter.com/translation"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/audiobook-narrators'){  ?> 

<title>Audiobook Narrators | Bring Your Story to Life</title> 

<meta name="description" content="Hire skilled narrators and producers to turn your book into a high-quality audiobook for Audible and more." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, audiobook narration, and book marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional audiobook narration services to bring your book to life through engaging narration by experienced voice artists."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/audiobook-narrators#webpage",
      "url": "https://hireabookwriter.com/audiobook-narrators",
      "name": "Audiobook Narrators | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/audiobook-narrators#service",
      "name": "Audiobook Narration Services",
      "description": "Expert audiobook narration services with professional voice talent to produce high‑quality, engaging audio versions of your book.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/audiobook-narrators",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/audiobook-narrators#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/audiobook-narrators",
            "name": "Audiobook Narrators",
            "url": "https://hireabookwriter.com/audiobook-narrators"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/book-marketing-company'){  ?> 

<title>Book Marketing Services | Boost Sales & Visibility</title> 

<meta name="description" content="Promote your book with SEO, Amazon ads, social media, and PR. We help authors reach their ideal readers." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, marketing, and audiobook services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book marketing services to help authors promote their titles, build visibility, and reach targeted readers across platforms."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/book-marketing-company#webpage",
      "url": "https://hireabookwriter.com/book-marketing-company",
      "name": "Book Marketing Company | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/book-marketing-company#service",
      "name": "Book Marketing Services",
      "description": "Expert book marketing services including promotional planning, social media strategy, email outreach, advertising campaigns, and audience building to increase book sales and visibility.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/book-marketing-company",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/book-marketing-company#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/book-marketing-company",
            "name": "Book Marketing Company",
            "url": "https://hireabookwriter.com/book-marketing-company"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/book-trailer'){  ?> 

<title>Book Trailer Services | Promote Visually</title> 

<meta name="description" content="Capture your audience with cinematic book trailers that tease your story and increase reader engagement." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, marketing, and creative services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book trailer creation services to showcase your book with dynamic visuals, compelling storytelling, and engaging multimedia content."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/book-trailer#webpage",
      "url": "https://hireabookwriter.com/book-trailer",
      "name": "Book Trailer Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/book-trailer#service",
      "name": "Book Trailer Creation Services",
      "description": "Expert book trailer creation services to help authors promote their books with professional video trailers that capture readers’ interest and boost engagement.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/book-trailer",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/book-trailer#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/book-trailer",
            "name": "Book Trailer Services",
            "url": "https://hireabookwriter.com/book-trailer"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/book-illustration-services'){  ?> 

<title>Book Illustration Services | Beautiful Custom Art</title> 

<meta name="description" content="Hire illustrators to create stunning visuals for children’s books, comics, and covers that enhance storytelling." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, illustration, and marketing services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional book illustration services including character, cover, and interior illustrations tailored to every genre and author’s vision."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/book-illustration-services#webpage",
      "url": "https://hireabookwriter.com/book-illustration-services",
      "name": "Book Illustration Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/book-illustration-services#service",
      "name": "Book Illustration Services",
      "description": "Custom book illustration services by experienced artists, including character art, interior illustrations, children’s book artwork, and visually engaging graphic elements.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/book-illustration-services",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/book-illustration-services#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/book-illustration-services",
            "name": "Book Illustration Services",
            "url": "https://hireabookwriter.com/book-illustration-services"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/author-website-design'){  ?> 

<title>Author Website Design | Professional Online Presence</title> 

<meta name="description" content="Get a custom author website that showcases your work, builds your brand, and connects with readers online." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, marketing, and creative services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional author website design services to help authors develop custom, responsive, and engaging websites that attract readers and build author brands."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/author-website-design#webpage",
      "url": "https://hireabookwriter.com/author-website-design",
      "name": "Author Website Design | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/author-website-design#service",
      "name": "Author Website Design Services",
      "description": "Custom author website design services including responsive layout, SEO optimization, professional branding elements, and integration with book sales platforms.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/author-website-design",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/author-website-design#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/author-website-design",
            "name": "Author Website Design",
            "url": "https://hireabookwriter.com/author-website-design"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

 

elseif($actual_link == 'https://hireabookwriter.com/children-book'){  ?> 

<title>Children’s Book Writing | Fun & Engaging Stories</title> 

<meta name="description" content="Hire a children’s book writer to create magical stories with age-appropriate tone, rhythm, and lovable characters." /> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hireabookwriter.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://hireabookwriter.com/",
      "logo": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "description": "<?php echo $bname ?> is a professional book writing company offering expert ghostwriting, editing, publishing, and creative book services for fiction and non‑fiction authors.",
      "telephone": "+1‑656‑222‑1812",
      "sameAs": [
        "https://www.facebook.com/hireabookwriter/",
        "https://www.instagram.com/hireabookwriter/",
        "https://www.trustpilot.com/review/hireabookwriter.com"
      ]
    },

    {
      "@type": "ProfessionalService",
      "@id": "https://hireabookwriter.com/#professionalservice",
      "name": "<?php echo $bname ?>",
      "image": "https://hireabookwriter.com/assets/images/header-logo.webp",
      "url": "https://hireabookwriter.com/",
      "telephone": "+1‑656‑222‑1812",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 East Pine St, Suite 110",
        "addressLocality": "Orlando",
        "addressRegion": "FL",
        "postalCode": "32801",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5417,
        "longitude": -81.3792
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": 379
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "description": "Professional children’s book writing and publishing services to help authors create engaging, age‑appropriate stories for young readers."
    },

    {
      "@type": "WebSite",
      "@id": "https://hireabookwriter.com/#website",
      "url": "https://hireabookwriter.com/",
      "name": "<?php echo $bname ?>",
      "publisher": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "WebPage",
      "@id": "https://hireabookwriter.com/children-book#webpage",
      "url": "https://hireabookwriter.com/children-book",
      "name": "Children Book Writing Services | <?php echo $bname ?>",
      "isPartOf": { "@id": "https://hireabookwriter.com/#website" },
      "about": { "@id": "https://hireabookwriter.com/#organization" }
    },

    {
      "@type": "Service",
      "@id": "https://hireabookwriter.com/children-book#service",
      "name": "Children Book Writing Services",
      "description": "Expert children’s book writing services including story development, narrative structure, character creation, and editing to produce polished, publish‑ready books for kids.",
      "provider": { "@id": "https://hireabookwriter.com/#professionalservice" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "offers": {
        "@type": "Offer",
        "url": "https://hireabookwriter.com/children-book",
        "priceCurrency": "USD",
        "price": "Varies",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hireabookwriter.com/children-book#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://hireabookwriter.com/",
            "name": "Home",
            "url": "https://hireabookwriter.com/"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://hireabookwriter.com/services",
            "name": "Services",
            "url": "https://hireabookwriter.com/services"
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https://hireabookwriter.com/children-book",
            "name": "Children Book Writing Services",
            "url": "https://hireabookwriter.com/children-book"
          }
        }
      ]
    }

  ]
}
</script>
<?php } 

?>