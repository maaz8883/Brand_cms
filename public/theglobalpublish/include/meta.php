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
      "url": "https://theglobalpublishers.com/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://theglobalpublishers.com/assets/images/logo.webp"
      },
      "image": "https://theglobalpublishers.com/assets/images/logo.webp",
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
      "url": "https://theglobalpublishers.com/",
      "image": "https://theglobalpublishers.com/assets/images/logo.webp",
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
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "172",
        "bestRating": "5",
        "worstRating": "1"
      },
      "sameAs": [
        "https://www.facebook.com/theglobalpublishers1/",
        "https://www.instagram.com/theglobalpublishers/",
        "https://www.pinterest.com/theglobalpublishers9/",
        "https://www.linkedin.com/company/the-global-publishers",
        "https://x.com/GlobalPubz",
        "https://www.trustpilot.com/review/theglobalpublishers.com"
      ],
      "makesOffer": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "@id": "https://theglobalpublishers.com/book-publishing.php#service",
            "name": "Book Publishing",
            "url": "https://theglobalpublishers.com/book-publishing.php",
            "description": "Complete book publishing solutions including formatting, cover design, printing, and distribution.",
            "provider": {
              "@id": "https://theglobalpublishers.com/#localbusiness"
            },
            "areaServed": {
              "@type": "Country",
              "name": "United States"
            }
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "@id": "https://theglobalpublishers.com/audiobook-narrators.php#service",
            "name": "Audiobook Narration Services",
            "url": "https://theglobalpublishers.com/audiobook-narrators.php",
            "description": "Audiobook narration, recording, and editing services for Audible and global audiobook platforms.",
            "provider": {
              "@id": "https://theglobalpublishers.com/#localbusiness"
            },
            "areaServed": {
              "@type": "Country",
              "name": "United States"
            }
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "@id": "https://theglobalpublishers.com/ghostwriting-services.php#service",
            "name": "Ghostwriting Services",
            "url": "https://theglobalpublishers.com/ghostwriting-services.php",
            "description": "Professional ghostwriting services including fiction, memoir, business, and autobiography writing.",
            "provider": {
              "@id": "https://theglobalpublishers.com/#localbusiness"
            },
            "areaServed": {
              "@type": "Country",
              "name": "United States"
            }
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "@id": "https://theglobalpublishers.com/book-marketing.php#service",
            "name": "Book Marketing Services",
            "url": "https://theglobalpublishers.com/book-marketing.php",
            "description": "Marketing campaigns for authors including social media promotion, PR outreach, SEO, and Amazon marketing.",
            "provider": {
              "@id": "https://theglobalpublishers.com/#localbusiness"
            },
            "areaServed": {
              "@type": "Country",
              "name": "United States"
            }
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "@id": "https://theglobalpublishers.com/author-website-design.php#service",
            "name": "Author Website Design",
            "url": "https://theglobalpublishers.com/author-website-design.php",
            "description": "Custom website design and development services tailored for authors and book promotion.",
            "provider": {
              "@id": "https://theglobalpublishers.com/#localbusiness"
            },
            "areaServed": {
              "@type": "Country",
              "name": "United States"
            }
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "@id": "https://theglobalpublishers.com/book-editing-services.php#service",
            "name": "Book Editing Services",
            "url": "https://theglobalpublishers.com/book-editing-services.php",
            "description": "Professional editing and proofreading services to refine and prepare manuscripts for publishing.",
            "provider": {
              "@id": "https://theglobalpublishers.com/#localbusiness"
            },
            "areaServed": {
              "@type": "Country",
              "name": "United States"
            }
          }
        }
      ]
    },

    {
      "@type": "WebSite",
      "@id": "https://theglobalpublishers.com/#website",
      "url": "https://theglobalpublishers.com/",
      "name": "<?php echo $bname ?>",
      "publisher": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://theglobalpublishers.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },

    {
      "@type": "WebPage",
      "@id": "https://theglobalpublishers.com/#webpage",
      "url": "https://theglobalpublishers.com/",
      "name": "<?php echo $bname ?> | Book Publishing & Author Services",
      "isPartOf": {
        "@id": "https://theglobalpublishers.com/#website"
      },
      "about": {
        "@id": "https://theglobalpublishers.com/#organization"
      }
    },

    {
      "@type": "AboutPage",
      "@id": "https://theglobalpublishers.com/about-us.php#about",
      "url": "https://theglobalpublishers.com/about-us.php",
      "name": "About <?php echo $bname ?>",
      "isPartOf": {
        "@id": "https://theglobalpublishers.com/#website"
      }
    },

    {
      "@type": "ContactPage",
      "@id": "https://theglobalpublishers.com/contact-us.php#contact",
      "url": "https://theglobalpublishers.com/contact-us.php",
      "name": "Contact <?php echo $bname ?>",
      "isPartOf": {
        "@id": "https://theglobalpublishers.com/#website"
      }
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
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "442",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/book-publishing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/book-publishing.php#service",
      "name": "Book Publishing Services",
      "description": "Comprehensive book publishing services including formatting, cover design, printing, distribution, and publishing support for both print and digital formats to help authors successfully publish their books worldwide.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/book-publishing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/book-publishing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Book Publishing Services",
          "item": "https://theglobalpublishers.com/book-publishing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/ghostwriting-services.php') {  ?>

        <title>Professional Ghostwriting Services | Your Story, Our Expertise</title>

        <meta name="description"
            content="Our professional ghostwriting services capture your voice to create publish-ready manuscripts. Let our ghostwriters transform your ideas into compelling books." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "322",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/ghostwriting-services.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/ghostwriting-services.php#service",
      "name": "Ghostwriting Services",
      "description": "Professional ghostwriting services for fiction, nonfiction, memoirs, autobiographies, and business books.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/ghostwriting-services.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/ghostwriting-services.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Ghostwriting Services",
          "item": "https://theglobalpublishers.com/ghostwriting-services.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/ebook-writing.php') {  ?>

        <title>eBook Writing Services | Turn Ideas into Digital Books</title>

        <meta name="description"
            content="Get professional eBook writing services from <?php echo $bname ?>. We help authors write and publish engaging digital books across all genres." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "431",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/ebook-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/ebook-writing.php#service",
      "name": "eBook Writing Services",
      "description": "Professional eBook writing services for authors, entrepreneurs, and businesses. We research, write, edit, and format engaging digital books optimized for Kindle and other publishing platforms.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/ebook-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/ebook-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "eBook Writing Services",
          "item": "https://theglobalpublishers.com/ebook-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/memoir-writing.php') {  ?>

        <title>Memoir Writing Services | Share Your Life Story</title>

        <meta name="description"
            content="Capture your personal journey with our memoir writing services. <?php echo $bname ?> turns your memories into a powerful published memoir." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "387",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/memoir-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/memoir-writing.php#service",
      "name": "Memoir Writing Services",
      "description": "Professional memoir writing services that help you turn your life story, experiences, and personal journey into a compelling, professionally written and publish-ready book with expert research, writing, and editing support.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/memoir-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/memoir-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Memoir Writing Services",
          "item": "https://theglobalpublishers.com/memoir-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/biography-writing.php') {  ?>

        <title>Biography Writing Services | Tell a Life Story That Lasts</title>

        <meta name="description"
            content="Let our biography writers craft your legacy. We write compelling biographies that celebrate achievements and preserve stories for future generations." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "412",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/biography-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/biography-writing.php#service",
      "name": "Biography Writing Services",
      "description": "Expert biography writing services that help you tell someone’s impactful life story with professional research, narrative development, and publish-ready manuscript creation tailored for personal, historical, and professional biographies.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/biography-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/biography-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Biography Writing Services",
          "item": "https://theglobalpublishers.com/biography-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/business-book-writing.php') {  ?>

        <title>Business Book Writing Services | Share Your Expertise</title>

        <meta name="description"
            content="Establish your authority with a professionally written business book. We help entrepreneurs and thought leaders publish impactful business content." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "358",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/business-book-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/business-book-writing.php#service",
      "name": "Business Book Writing Services",
      "description": "Professional business book writing services that help entrepreneurs, executives, and thought leaders create compelling and strategic business books with research, narrative structuring, editing, and publish-ready formatting.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/business-book-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/business-book-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Business Book Writing Services",
          "item": "https://theglobalpublishers.com/business-book-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/non-fiction-writing.php') {  ?>

        <title>Non-Fiction Writing Services | Inform, Inspire, Impact</title>

        <meta name="description"
            content="Our non-fiction writing services help you educate and inspire readers. <?php echo $bname ?> delivers research-backed, clear, and engaging books." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "399",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/non-fiction-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/non-fiction-writing.php#service",
      "name": "Non‑Fiction Writing Services",
      "description": "Professional non‑fiction writing services for authors, entrepreneurs, and experts. We help craft fact‑based, engaging non‑fiction books with research, structure, editing, and publish‑ready manuscript preparation.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/non-fiction-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/non-fiction-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Non‑Fiction Writing Services",
          "item": "https://theglobalpublishers.com/non-fiction-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/fiction-writing.php') {  ?>

        <title>Fiction Writing Services | Craft Engaging Stories</title>

        <meta name="description"
            content="From plot development to vivid characters, our fiction writing services bring your story to life. Publish captivating novels with expert help." />
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
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "423",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/fiction-writing.php
#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/fiction-writing.php#service",
      "name": "Fiction Writing Services",
      "description": "Professional fiction writing services to help authors bring imaginative stories to life. From character development and plot structuring to editing and genre‑specific guidance, we deliver polished, publish‑ready manuscripts.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/fiction-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/fiction-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Fiction Writing Services",
          "item": "https://theglobalpublishers.com/fiction-writing.php"
        }
      ]
    }

  ]
}
</script>


    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/action-writing.php') {  ?>

        <title>Action Book Writing Services | Thrilling Plots, Bold Heroes</title>

        <meta name="description"
            content="Get action-packed books written by pros. Our action writing services deliver gripping narratives full of suspense, pace, and heroism." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "379",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/action-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/action-writing.php#service",
      "name": "Action Writing Services",
      "description": "Action writing services for authors aiming to craft thrilling, high‑impact narratives with expert pacing, dynamic plot progressions, and engaging character arcs — ideal for action genre books and stories.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/action-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/action-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Action Writing Services",
          "item": "https://theglobalpublishers.com/action-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/fantasy-writing.php') {  ?>

        <title>Fantasy Writing Services | Create Magical Worlds</title>

        <meta name="description"
            content="Unleash your imagination with our fantasy writing services. We help you craft epic tales, mythical creatures, and immersive fantasy realms." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "417",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/fantasy-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/fantasy-writing.php#service",
      "name": "Fantasy Writing Services",
      "description": "Professional fantasy writing services to bring your imaginative worlds, unique creatures, and epic storylines to life — from character development to plot crafting and polished manuscripts.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/fantasy-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/fantasy-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Fantasy Writing Services",
          "item": "https://theglobalpublishers.com/fantasy-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/science-fiction-writing.php') {  ?>

        <title>Science Fiction Writing Services | Explore New Worlds</title>

        <meta name="description"
            content="Take your readers on a futuristic journey. Our science fiction writers craft visionary stories filled with tech, adventure, and discovery." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "388",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/science-fiction-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/science-fiction-writing.php#service",
      "name": "Science Fiction Writing Services",
      "description": "Expert science fiction writing services for authors looking to craft futuristic, imaginative narratives with advanced world-building, compelling characters, and polished story development.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/science-fiction-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/science-fiction-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Science Fiction Writing Services",
          "item": "https://theglobalpublishers.com/science-fiction-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/horror-book-writing.php') {  ?>

        <title>Horror Book Writing Services | Spine-Chilling Tales</title>

        <meta name="description"
            content="Create terrifying tales that haunt and thrill. Our horror book writing services deliver eerie plots, suspense, and unforgettable fear." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "401",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/horror-book-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/horror-book-writing.php#service",
      "name": "Horror Book Writing Services",
      "description": "Professional horror book writing services designed to help authors craft chilling, suspenseful, and immersive horror stories with expert plot pacing, character development, and polished narrative structure.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/horror-book-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/horror-book-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Horror Book Writing Services",
          "item": "https://theglobalpublishers.com/horror-book-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/drama-writing.php') {  ?>

        <title>Drama Writing Services | Emotional, Realistic Stories</title>

        <meta name="description"
            content="Our drama writing services develop character-driven narratives that explore conflict, relationships, and emotion with authenticity." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "362",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/drama-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/drama-writing.php#service",
      "name": "Drama Writing Services",
      "description": "Drama writing services that help authors and playwrights create emotionally engaging, character-driven narratives with powerful dialogue and compelling story arcs for both stage and page.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/drama-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/drama-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Drama Writing Services",
          "item": "https://theglobalpublishers.com/drama-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/suspense-thriller-writing.php') {  ?>

        <title>Suspense & Thriller Writing Services | Edge-of-Seat Plots</title>

        <meta name="description"
            content="Hook readers with thrilling twists and suspenseful pacing. Our writers craft high-stakes thriller books that keep audiences turning pages." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "395",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/suspense-thriller-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/suspense-thriller-writing.php#service",
      "name": "Suspense Thriller Writing Services",
      "description": "Professional suspense thriller writing services that help authors craft edge-of-your-seat narratives with expert plot twists, atmospheric tension, character depth, and polished storytelling ready for publication.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/suspense-thriller-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/suspense-thriller-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Suspense Thriller Writing Services",
          "item": "https://theglobalpublishers.com/suspense-thriller-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/romance-writing.php') {  ?>

        <title>Romance Writing Services | Heartfelt Love Stories</title>

        <meta name="description"
            content="We write captivating romance novels full of passion, emotion, and connection. Our romance writing services deliver stories that resonate." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "428",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/romance-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/romance-writing.php#service",
      "name": "Romance Writing Services",
      "description": "Professional romance writing services to help authors craft passionate, character-driven love stories with compelling plots, vivid characterization, and publish-ready manuscripts tailored for the romance genre.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/romance-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/romance-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Romance Writing Services",
          "item": "https://theglobalpublishers.com/romance-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/mystery-writing.php') {  ?>

        <title>Mystery Writing Services | Solve Gripping Whodunits</title>

        <meta name="description"
            content="Our mystery writing services help you build tension, develop clues, and create satisfying reveals. Write crime, detective, or noir fiction with us." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "376",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/mystery-writing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/mystery-writing.php#service",
      "name": "Mystery Writing Services",
      "description": "Professional mystery writing services that help authors craft compelling whodunit narratives with intricately plotted suspense, engaging characters, and polished story structure ready for publication.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/mystery-writing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/mystery-writing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Mystery Writing Services",
          "item": "https://theglobalpublishers.com/mystery-writing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/book-editing-services.php') {  ?>

        <title>Professional Book Editing Services | Hire Expert Book Editors</title>

        <meta name="description"
            content="Get professional book editing services to polish your manuscript. We improve structure, grammar, flow, and clarity to make your book publish-ready." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "413",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/book-editing-services.php#service"
        }
      }
    },

    {s
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/book-editing-services.php#service",
      "name": "Book Editing Services",
      "description": "Professional book editing services including developmental editing, copyediting, proofreading, and manuscript polishing to help authors refine their work and ensure clarity, coherence, and publish-ready quality.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/book-editing-services.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/book-editing-services.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Book Editing Services",
          "item": "https://theglobalpublishers.com/book-editing-services.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/book-formatting-services.php') {  ?>

        <title>Book Formatting Services | Print & Digital Ready</title>

        <meta name="description"
            content="Professional book formatting for paperback, hardcover, and eBook. Ensure your manuscript meets publishing standards across all platforms." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "429",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/book-formatting-services.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/book-formatting-services.php#service",
      "name": "Book Formatting Services",
      "description": "Professional book formatting services to prepare your manuscript for print and digital publication, including layout for eBooks, paperbacks, and hardcovers with industry-standard formatting that enhances readability and design.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/book-formatting-services.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/book-formatting-services.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Book Formatting Services",
          "item": "https://theglobalpublishers.com/book-formatting-services.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/book-marketing.php') {  ?>

        <title>Book Marketing Services | Strategic Book Promotion</title>

        <meta name="description"
            content="Boost book sales with expert Book Marketing Services. Our complete Book Promotion includes social media, PR campaigns, and targeted reader outreach." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "415",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/book-marketing.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/book-marketing.php#service",
      "name": "Book Marketing Services",
      "description": "Professional book marketing services designed to help authors promote their work through social media marketing, email campaigns, PR outreach, Amazon advertising, SEO, and targeted promotional strategies to increase visibility and sales.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/book-marketing.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/book-marketing.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Book Marketing Services",
          "item": "https://theglobalpublishers.com/book-marketing.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/audiobook-narrators.php') {  ?>

        <title>Audiobook Narration Services | Voice Your Story</title>

        <meta name="description"
            content="Turn your book into a professional audiobook. Hire skilled narrators to engage listeners with clear, compelling voiceovers and high-quality audio." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "406",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/audiobook-narrators.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/audiobook-narrators.php#service",
      "name": "Audiobook Narrators Services",
      "description": "Professional audiobook narration services providing experienced narrators, voice talent selection, recording, editing, and production to create high‑quality audiobook versions for Audible and global platforms.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/audiobook-narrators.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/audiobook-narrators.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Audiobook Narrators Services",
          "item": "https://theglobalpublishers.com/audiobook-narrators.php"
        }
      ]
    }

  ]
}
</script>



    <?php } elseif ($actual_link == 'https://theglobalpublishers.com/author-website-design.php') {  ?>

        <title>Author Website Design Services | Build Your Online Presence</title>

        <meta name="description"
            content="Get a custom author website designed to promote your books and grow your brand. Our responsive, reader-friendly sites drive engagement." />
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://theglobalpublishers.com/#organization",
      "name": "<?php echo $bname ?>",
      "url": "https://theglobalpublishers.com",
      "logo": "https://theglobalpublishers.com/assets/images/logo.webp",
      "telephone": "<?php echo $no ?>",
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
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "392",
        "bestRating": "5",
        "worstRating": "1"
      },
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@id": "https://theglobalpublishers.com/author-website-design.php#service"
        }
      }
    },

    {
      "@type": "Service",
      "@id": "https://theglobalpublishers.com/author-website-design.php#service",
      "name": "Author Website Design Services",
      "description": "Custom author website design services that help writers, authors, and publishers build professional, mobile‑friendly, SEO‑optimized websites for book promotion, branding, audience engagement, and sales growth.",
      "provider": {
        "@id": "https://theglobalpublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "url": "https://theglobalpublishers.com/author-website-design.php"
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://theglobalpublishers.com/author-website-design.php#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://theglobalpublishers.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Author Website Design Services",
          "item": "https://theglobalpublishers.com/author-website-design.php"
        }
      ]
    }

  ]
}
</script>



    <?php }

    ?>