	<?php
  $robots = "INDEX , FOLLOW";
  $noFollow = "NOINDEX , NOFOLLOW";
  $metaData = [
    'home' => [
      'title' => "Hexa Publishers | Professional Book Publishing & Marketing",
      'description' => "Hexa Publishers offers expert book publishing, marketing, cover design, and author website services to help authors succeed in the competitive book industry.",
      'script' => '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hexapublishers.com/#organization",
      "name": "Hexa Publishers",
      "url": "https://hexapublishers.com/",
      "logo": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "description": "Hexa Publishers is a professional book publishers company in the USA offering book publishing, editing, cover design, marketing, audiobook production, and global distribution services for authors.",
      "sameAs": [
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
        "https://www.trustpilot.com/review/hexapublishers.com"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-925-236-0195",
        "contactType": "customer service",
        "areaServed": "US",
        "availableLanguage": "English"
      },

      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://hexapublishers.com/"
      },

      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "127",
        "bestRating": "5",
        "worstRating": "1"
      }
    },

    {
      "@type": "LocalBusiness",
      "@id": "https://hexapublishers.com/#localbusiness",
      "name": "Hexa Publishers",
      "image": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "url": "https://hexapublishers.com/",
      "telephone": "+1-925-236-0195",
      "email": "info@hexapublishers.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1990 N California Blvd 8 Floor",
        "addressLocality": "Walnut Creek",
        "addressRegion": "CA",
        "postalCode": "94596",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "priceRange": "$$",
      "description": "Professional book publishers in the USA providing complete publishing services including editing, writing, cover design, audiobook production, marketing, and worldwide distribution.",

      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "127",
        "bestRating": "5",
        "worstRating": "1"
      },

      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Publishing & Author Services",
        "itemListElement": [

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Publishing",
              "url": "https://hexapublishers.com/book-publishing"
            }
          },

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Marketing",
              "url": "https://hexapublishers.com/book-marketing"
            }
          },

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Author Website Development",
              "url": "https://hexapublishers.com/author-website"
            }
          },

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Audiobook Production",
              "url": "https://hexapublishers.com/audio-book"
            }
          },

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Cover Design",
              "url": "https://hexapublishers.com/book-cover"
            }
          },

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Editing",
              "url": "https://hexapublishers.com/book-editing"
            }
          },

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Trailer / Video",
              "url": "https://hexapublishers.com/book-video"
            }
          },

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Writing",
              "url": "https://hexapublishers.com/book-writing"
            }
          },

          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Illustration Services",
              "url": "https://hexapublishers.com/illustration"
            }
          }

        ]
      }
    },

    {
      "@type": "WebSite",
      "@id": "https://hexapublishers.com/#website",
      "url": "https://hexapublishers.com/",
      "name": "Hexa Publishers",
      "alternateName": "HexaPublishers.com",
      "inLanguage": "en-US",
      "publisher": {
        "@id": "https://hexapublishers.com/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://hexapublishers.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },

    {
      "@type": "WebPage",
      "@id": "https://hexapublishers.com/#webpage",
      "url": "https://hexapublishers.com/",
      "name": "Hexa Publishers | Professional Book Publishing Services",
      "isPartOf": {
        "@id": "https://hexapublishers.com/#website"
      },
      "about": {
        "@id": "https://hexapublishers.com/#organization"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "https://hexapublishers.com/assets/img/logo-blck.webp"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hexapublishers.com/#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "What services do Hexa Publishers offer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide complete publishing solutions from manuscript editing and formatting to cover design, publishing, distribution, and marketing. Our team of professional book publishers ensures your book is polished, market-ready, and reaches the right audience."
          }
        },

        {
          "@type": "Question",
          "name": "Can Hexa Publishers help first-time authors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely! Whether it’s your first book or your fifth, our experienced team guides you at every step. We specialize in making publishing easy and stress-free, helping authors feel confident and supported."
          }
        },

        {
          "@type": "Question",
          "name": "How long does the publishing process take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The timeline varies depending on your project, but we focus on efficiency without compromising quality. From editing to publication, our professional approach ensures a smooth process and a book you can be proud of."
          }
        },

        {
          "@type": "Question",
          "name": "Do you offer global distribution?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! As trusted book publishers USA, we make sure your book is available worldwide on major platforms, both in print and digital formats. Your story can reach readers anywhere in the world."
          }
        },

        {
          "@type": "Question",
          "name": "How do I hire Hexa Publishers to publish my book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It’s simple! Contact us today to discuss your manuscript, goals, and vision. Our team of book publishers online will guide you through every step and provide a customized plan to bring your book to life."
          }
        }

      ]
    }

  ]
}
</script>
    '
    ],
    'book-publishing' => [
      'title' => "Book Publishing Services | Publish Your Book with Experts",
      'description' => "Book Publishing Services at Hexa Publishers help authors publish professionally with editing, formatting, and global distribution for maximum reach.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hexapublishers.com/#organization",
      "name": "Hexa Publishers",
      "url": "https://hexapublishers.com/",
      "logo": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs": [
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
“https://www.trustpilot.com/review/hexapublishers.com”
      ]
    },

    {
      "@type": "LocalBusiness",
      "@id": "https://hexapublishers.com/#localbusiness",
      "name": "Hexa Publishers",
      "image": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "url": "https://hexapublishers.com/",
      "telephone": "+1-925-236-0195",
      "email": "info@hexapublishers.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1990 N California Blvd 8 Floor",
        "addressLocality": "Walnut Creek",
        "addressRegion": "CA",
        "postalCode": "94596",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "273"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hexapublishers.com/book-publishing/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://hexapublishers.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Book Publishing Services",
          "item": "https://hexapublishers.com/book-publishing"
        }
      ]
    },

    {
      "@type": "Service",
      "@id": "https://hexapublishers.com/book-publishing/#service",
      "name": "Professional Book Publishing Services in USA",
      "description": "Complete book publishing services including manuscript editing, formatting, ISBN registration, cover design, print and eBook production, and global distribution for authors.",
      "provider": {
        "@id": "https://hexapublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hexapublishers.com/book-publishing",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hexapublishers.com/book-publishing/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to Publish a Book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Publishing a book begins with a polished manuscript, professional editing, cover design, and formatting. Our book publishing services guide authors through each step, including ISBN registration, print and eBook production, and distribution setup."
          }
        },
        {
          "@type": "Question",
          "name": "How to Get a Book Published?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To get a book published, you can choose traditional publishing, hybrid publishing, or self-publishing. Working with a trusted book publishing company ensures your manuscript meets professional standards and reaches the right audience."
          }
        },
        {
          "@type": "Question",
          "name": "How to Self-Publish a Book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Self-publishing involves editing, formatting, designing a cover, and distributing your book through online retailers. Our online book publishing services make self-publishing simple while maintaining full creative control."
          }
        },
        {
          "@type": "Question",
          "name": "What Are Professional Book Publishing Services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional book publishing services include manuscript review, editing, design, production, and distribution to help authors achieve maximum visibility in competitive markets."
          }
        },
        {
          "@type": "Question",
          "name": "How Long Does It Take to Publish a Book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The timeline varies based on editing, design, and production needs. With streamlined publishing services, most authors complete the process efficiently without compromising quality."
          }
        }
      ]
    }

  ]
}
</script>

        	'
    ],
    'author-website' => [
      'title' => "Author Website Design | Professional Websites for Writers",
      'description' => "Author Website Design at Hexa Publishers builds professional, SEO-friendly websites to grow your online presence and connect with readers worldwide.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hexapublishers.com/#organization",
      "name": "Hexa Publishers",
      "url": "https://hexapublishers.com/",
      "logo": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs": [
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
"https://www.trustpilot.com/review/hexapublishers.com"
      ]
    },

    {
      "@type": "LocalBusiness",
      "@id": "https://hexapublishers.com/#localbusiness",
      "name": "Hexa Publishers",
      "image": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "url": "https://hexapublishers.com/",
      "telephone": "+1-925-236-0195",
      "email": "info@hexapublishers.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1990 N California Blvd 8 Floor",
        "addressLocality": "Walnut Creek",
        "addressRegion": "CA",
        "postalCode": "94596",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "286"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hexapublishers.com/author-website/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://hexapublishers.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Author Website Services",
          "item": "https://hexapublishers.com/author-website"
        }
      ]
    },

    {
      "@type": "Service",
      "@id": "https://hexapublishers.com/author-website/#service",
      "name": "Custom Author Website Design Services",
      "description": "Professional author website design services to help authors build a strong online presence, showcase books, and connect with readers through SEO-optimized, custom designs.",
      "provider": {
        "@id": "https://hexapublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hexapublishers.com/author-website",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hexapublishers.com/author-website/#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "What is an author website and why do I need one?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An author website is a central online hub where readers can learn about you and your books. It increases visibility, builds credibility, and helps you connect directly with your audience."
          }
        },

        {
          "@type": "Question",
          "name": "Do you provide SEO-optimized author websites?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! Our author website services include SEO optimization to help your site rank higher in search engines and attract organic traffic from readers and book buyers."
          }
        },

        {
          "@type": "Question",
          "name": "Can you integrate my book store and social profiles?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. We integrate your bookstore links, social media channels, email lists, and author branding into your website for a seamless reader experience."
          }
        },

        {
          "@type": "Question",
          "name": "How long does it take to build an author website?",
            "@acceptedAnswer": {
              "@type": "Answer",
              "text": "The timeline varies depending on design complexity and features, but most author websites are launched efficiently without sacrificing quality."
            }
        },

        {
          "@type": "Question",
          "name": "Can Hexa Publishers update my existing author website?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer updates and ongoing support for existing author websites to enhance performance, SEO, and user engagement."
          }
        }

      ]
    }

  ]
}
</script>

        	'
    ],
    'book-marketing' => [
      'title' => "Book Marketing Services | Promote & Sell Your Book Online",
      'description' => "Book Marketing Services at Hexa Publishers boost visibility with tailored promotion strategies to increase sales and author recognition globally.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hexapublishers.com/#organization",
      "name": "Hexa Publishers",
      "url": "https://hexapublishers.com/",
      "logo": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs": [
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
"https://www.trustpilot.com/review/hexapublishers.com"
      ]
    },

    {
      "@type": "LocalBusiness",
      "@id": "https://hexapublishers.com/#localbusiness",
      "name": "Hexa Publishers",
      "image": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "url": "https://hexapublishers.com/",
      "telephone": "+1-925-236-0195",
      "email": "info@hexapublishers.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1990 N California Blvd 8 Floor",
        "addressLocality": "Walnut Creek",
        "addressRegion": "CA",
        "postalCode": "94596",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "273"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hexapublishers.com/book-marketing/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://hexapublishers.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Book Marketing Services",
          "item": "https://hexapublishers.com/book-marketing"
        }
      ]
    },

    {
      "@type": "Service",
      "@id": "https://hexapublishers.com/book-marketing/#service",
      "name": "Book Marketing Services for Authors",
      "description": "Professional book marketing services including campaign creation, promotions, author branding, launch strategies, and distribution support to boost book visibility and sales.",
      "provider": {
        "@id": "https://hexapublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hexapublishers.com/book-marketing",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hexapublishers.com/book-marketing/#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "What services are included in book marketing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Book marketing includes promotions, author branding, social media campaigns, email campaigns, paid ads, launch strategies, and visibility optimization to reach your target readers."
          }
        },

        {
          "@type": "Question",
          "name": "How can book marketing help me sell more books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Effective book marketing increases visibility, expands audience reach, builds author credibility, and drives more sales through strategic promotions and targeted campaigns."
          }
        },

        {
          "@type": "Question",
          "name": "Do I need a book marketing plan before publishing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! A strong marketing plan before publishing improves launch success and long-term sales. Hexa Publishers helps authors build marketing strategies that align with their goals."
          }
        },

        {
          "@type": "Question",
          "name": "Can Hexa Publishers handle global book marketing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely! Our book marketing services support authors globally, ensuring effective campaigns across digital platforms and reader communities worldwide."
          }
        },

        {
          "@type": "Question",
          "name": "What makes a successful book marketing campaign?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A successful marketing campaign combines targeted audience research, engaging promotional materials, strong brand positioning, and smart distribution strategies."
          }
        }

      ]
    }

  ]
}
</script>

        	'
    ],
    'audio-book' => [
      'title' => "Audiobook Services | Turn Your Book into Engaging Audio",
      'description' => "Audiobook Services at Hexa Publishers transform your manuscript into high-quality audio productions, reaching new audiences across global platforms.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hexapublishers.com/#organization",
      "name": "Hexa Publishers",
      "url": "https://hexapublishers.com/",
      "logo": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs": [
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers"
      ]
    },

    {
      "@type": "LocalBusiness",
      "@id": "https://hexapublishers.com/#localbusiness",
      "name": "Hexa Publishers",
      "image": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "url": "https://hexapublishers.com/",
      "telephone": "+1-925-236-0195",
      "email": "info@hexapublishers.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1990 N California Blvd 8 Floor",
        "addressLocality": "Walnut Creek",
        "addressRegion": "CA",
        "postalCode": "94596",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "273"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hexapublishers.com/audio-book/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://hexapublishers.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Audiobook Production Services",
          "item": "https://hexapublishers.com/audio-book"
        }
      ]
    },

    {
      "@type": "Service",
      "@id": "https://hexapublishers.com/audio-book/#service",
      "name": "Audiobook Production & Distribution Services",
      "description": "Professional audiobook production and distribution services including narration, editing, mastering, and worldwide platform publishing to help authors reach audio listeners.",
      "provider": {
        "@id": "https://hexapublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hexapublishers.com/audio-book",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hexapublishers.com/audio-book/#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "What does audiobook production include?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Audiobook production includes professional narration, recording, editing, audio mastering, and preparation for publishing on major platforms like Audible and Apple Books."
          }
        },

        {
          "@type": "Question",
          "name": "Can I convert my book into an audiobook?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! We help authors convert their books into high-quality audiobooks with experienced narrators and full audio production, ready for global distribution."
          }
        },

        {
          "@type": "Question",
          "name": "How long does audiobook production take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The timeline depends on length and complexity, but our production team works efficiently to create professional audiobook files without compromising quality."
          }
        },

        {
          "@type": "Question",
          "name": "Will my audiobook be distributed globally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! We distribute audiobooks to all major platforms worldwide, making your audio book accessible to listeners across different platforms and regions."
          }
        },

        {
          "@type": "Question",
          "name": "Do you provide narration options?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely! We offer professional narration options, including male and female voice talent, to suit the tone and style of your book."
          }
        }

      ]
    }

  ]
}
</script>

        	'
    ],
    'book-cover' => [
      'title' => "Book Cover Design | Creative & Professional Cover Services",
      'description' => "Book Cover Design at Hexa Publishers delivers eye-catching, market-ready covers that attract readers and represent your book’s story perfectly.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hexapublishers.com/#organization",
      "name": "Hexa Publishers",
      "url": "https://hexapublishers.com/",
      "logo": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs": [
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
"https://www.trustpilot.com/review/hexapublishers.com"
      ]
    },

    {
      "@type": "LocalBusiness",
      "@id": "https://hexapublishers.com/#localbusiness",
      "name": "Hexa Publishers",
      "image": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "url": "https://hexapublishers.com/",
      "telephone": "+1-925-236-0195",
      "email": "info@hexapublishers.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1990 N California Blvd 8 Floor",
        "addressLocality": "Walnut Creek",
        "addressRegion": "CA",
        "postalCode": "94596",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "273"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hexapublishers.com/book-cover/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://hexapublishers.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Book Cover Design Services",
          "item": "https://hexapublishers.com/book-cover"
        }
      ]
    },

    {
      "@type": "Service",
      "@id": "https://hexapublishers.com/book-cover/#service",
      "name": "Custom Book Cover Design Services",
      "description": "Professional book cover design services including custom artwork, typography, layout, and visual branding to help your book attract readers and boost sales.",
      "provider": {
        "@id": "https://hexapublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hexapublishers.com/book-cover",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hexapublishers.com/book-cover/#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "What does professional book cover design include?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional book cover design includes custom artwork, layout, typography, and visual branding tailored to your genre and target readers."
          }
        },

        {
          "@type": "Question",
          "name": "Why is a well-designed book cover important?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A well-designed cover helps attract readers, communicate your book’s message, increase clicks, and boost sales across online stores and libraries."
          }
        },

        {
          "@type": "Question",
          "name": "Can I request revisions to my book cover design?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! We offer multiple revision options so you get a book cover that reflects your vision and resonates with your audience."
          }
        },

        {
          "@type": "Question",
          "name": "Will my cover work for print and eBook formats?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely! Our book cover designs are crafted for both print and digital formats to ensure a consistent and professional presentation everywhere."
          }
        },

        {
          "@type": "Question",
          "name": "Do you design covers for all genres?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We design custom book covers for all genres including fiction, nonfiction, children’s books, memoirs, and more."
          }
        }

      ]
    }

  ]
}
</script>

        	'
    ],
    'book-video' => [
      'title' => "Book Video Trailers | Promote Your Story with Engaging Media",
      'description' => "Book Video Trailers at Hexa Publishers create compelling video promotions to market your story visually and attract more readers worldwide.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://hexapublishers.com/#organization",
      "name": "Hexa Publishers",
      "url": "https://hexapublishers.com/",
      "logo": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs": [
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
"https://www.trustpilot.com/review/hexapublishers.com"
      ]
    },

    {
      "@type": "LocalBusiness",
      "@id": "https://hexapublishers.com/#localbusiness",
      "name": "Hexa Publishers",
      "image": "https://hexapublishers.com/assets/img/logo-blck.webp",
      "url": "https://hexapublishers.com/",
      "telephone": "+1-925-236-0195",
      "email": "info@hexapublishers.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1990 N California Blvd 8 Floor",
        "addressLocality": "Walnut Creek",
        "addressRegion": "CA",
        "postalCode": "94596",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "257"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://hexapublishers.com/book-video/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://hexapublishers.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Book Video Services",
          "item": "https://hexapublishers.com/book-video"
        }
      ]
    },

    {
      "@type": "Service",
      "@id": "https://hexapublishers.com/book-video/#service",
      "name": "Book Trailer & Promotional Video Services",
      "description": "Professional book video and trailer services including concept creation, script development, production, animation, and post-production editing to boost book engagement and visibility.",
      "provider": {
        "@id": "https://hexapublishers.com/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hexapublishers.com/book-video",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "FAQPage",
      "@id": "https://hexapublishers.com/book-video/#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "What are book trailer services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Book trailer services involve creating a short, cinematic video that promotes your book through visuals, text, music, and storytelling. These trailers help generate excitement, increase visibility, and attract potential readers across digital platforms."
          }
        },

        {
          "@type": "Question",
          "name": "How do professional book trailers help sell more books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional book trailers capture attention quickly and create an emotional connection with viewers. By presenting your story in a visually engaging format, you encourage readers to learn more about your book and ultimately make a purchase."
          }
        },

        {
          "@type": "Question",
          "name": "What is included in your video book trailer services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our video book trailer services include concept development, scriptwriting, storyboard planning, high-quality editing, music integration, and complete book trailer video production tailored to your genre and audience."
          }
        },

        {
          "@type": "Question",
          "name": "How long does book trailer production take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The timeline for book trailer production typically depends on the complexity of the project. On average, it takes a few weeks from initial concept approval to final delivery, ensuring quality and creative precision."
          }
        },

        {
          "@type": "Question",
          "name": "Do you offer book trailer services for all genres?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide book trailer services for authors across all genres, including fiction, nonfiction, memoirs, and children’s books. Each trailer is customized to reflect your unique story and target market."
          }
        }

      ]
    }

  ]
}
</script>


        	'
    ],
    'book-writing' => [
      'title' => "Expert Book Writing Services | Hexa Publishers",
      'description' => "Transform your ideas into a published book with our expert writing services. Hexa Publishers guides you from concept to completion with professional support.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph":[

    {
      "@type":"Organization",
      "@id":"https://hexapublishers.com/#organization",
      "name":"Hexa Publishers",
      "url":"https://hexapublishers.com/",
      "logo":"https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs":[
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
"https://www.trustpilot.com/review/hexapublishers.com"
      ]
    },

    {
      "@type":"LocalBusiness",
      "@id":"https://hexapublishers.com/#localbusiness",
      "name":"Hexa Publishers",
      "image":"https://hexapublishers.com/assets/img/logo-blck.webp",
      "url":"https://hexapublishers.com/",
      "telephone":"+1-925-236-0195",
      "email":"info@hexapublishers.com",
      "priceRange":"$$",
      "address":{
        "@type":"PostalAddress",
        "streetAddress":"1990 N California Blvd 8 Floor",
        "addressLocality":"Walnut Creek",
        "addressRegion":"CA",
        "postalCode":"94596",
        "addressCountry":"US"
      },
      "areaServed":{
        "@type":"Country",
        "name":"United States"
      },
      "aggregateRating":{
        "@type":"AggregateRating",
        "ratingValue":"4.9",
        "reviewCount":"269"
      }
    },

    {
      "@type":"BreadcrumbList",
      "@id":"https://hexapublishers.com/book-writing/#breadcrumb",
      "itemListElement":[
        {
          "@type":"ListItem",
          "position":1,
          "name":"Home",
          "item":"https://hexapublishers.com/"
        },
        {
          "@type":"ListItem",
          "position":2,
          "name":"Book Writing Services",
          "item":"https://hexapublishers.com/book-writing"
        }
      ]
    },

    {
      "@type":"Service",
      "@id":"https://hexapublishers.com/book-writing/#service",
      "name":"Professional Book Writing Services",
      "description":"Expert book writing services including concept development, research, outlining, drafting, editing, and refining your manuscript for publishing readiness.",
      "provider":{
        "@id":"https://hexapublishers.com/#organization"
      },
      "areaServed":{
        "@type":"Country",
        "name":"United States"
      },
      "offers":{
        "@type":"Offer",
        "url":"https://hexapublishers.com/book-writing",
        "priceCurrency":"USD",
        "availability":"https://schema.org/InStock"
      }
    },

    {
      "@type":"FAQPage",
      "@id":"https://hexapublishers.com/book-writing/#faq",
      "mainEntity":[

        {
          "@type":"Question",
          "name":"Why should I choose professional book writers for hire?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Professional book writers for hire ensure your ideas are transformed into a well-structured, engaging, and market-ready manuscript while maintaining your unique voice and vision."
          }
        },

        {
          "@type":"Question",
          "name":"What does professional book writing include?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Professional book writing includes concept development, research, outlining, drafting, editing, and refining your manuscript to meet industry publishing standards."
          }
        },

        {
          "@type":"Question",
          "name":"How do book writers maintain my voice?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Experienced book writers collaborate closely with you through interviews and feedback sessions to ensure your tone, message, and personality are authentically reflected in the book."
          }
        },

        {
          "@type":"Question",
          "name":"Is professional book writing suitable for first-time authors?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes, professional book writing is ideal for first-time authors who need expert guidance in structuring their ideas and navigating the writing process with confidence."
          }
        },

        {
          "@type":"Question",
          "name":"How long does book writing take?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"The timeline for book writing depends on the book’s length, genre, and complexity, but our team ensures a structured process with clear milestones and consistent communication."
          }
        }

      ]
    }

  ]
}
</script>

        	'
    ],
    'book-editing' => [
      'title' => "Professional Book Editing Services | Hexa Publishers",
      'description' => "Refine your manuscript with expert book editing services. Hexa Publishers ensures clarity, flow, and quality to make your book ready for publishing.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph":[

    {
      "@type":"Organization",
      "@id":"https://hexapublishers.com/#organization",
      "name":"Hexa Publishers",
      "url":"https://hexapublishers.com/",
      "logo":"https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs":[
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
"https://www.trustpilot.com/review/hexapublishers.com"
      ]
    },

    {
      "@type":"LocalBusiness",
      "@id":"https://hexapublishers.com/#localbusiness",
      "name":"Hexa Publishers",
      "image":"https://hexapublishers.com/assets/img/logo-blck.webp",
      "url":"https://hexapublishers.com/",
      "telephone":"+1-925-236-0195",
      "email":"info@hexapublishers.com",
      "priceRange":"$$",
      "address":{
        "@type":"PostalAddress",
        "streetAddress":"1990 N California Blvd 8 Floor",
        "addressLocality":"Walnut Creek",
        "addressRegion":"CA",
        "postalCode":"94596",
        "addressCountry":"US"
      },
      "areaServed":{
        "@type":"Country",
        "name":"United States"
      },
      "aggregateRating":{
        "@type":"AggregateRating",
        "ratingValue":"4.9",
        "reviewCount":"273"
      }
    },

    {
      "@type":"BreadcrumbList",
      "@id":"https://hexapublishers.com/book-editing/#breadcrumb",
      "itemListElement":[
        {
          "@type":"ListItem",
          "position":1,
          "name":"Home",
          "item":"https://hexapublishers.com/"
        },
        {
          "@type":"ListItem",
          "position":2,
          "name":"Book Editing Services",
          "item":"https://hexapublishers.com/book-editing"
        }
      ]
    },

    {
      "@type":"Service",
      "@id":"https://hexapublishers.com/book-editing/#service",
      "name":"Professional Book Editing & Manuscript Review Services",
      "description":"Expert book editing services including developmental editing, line editing, copyediting, proofreading, and manuscript review to help authors refine their writing and prepare for publishing.",
      "provider":{
        "@id":"https://hexapublishers.com/#organization"
      },
      "areaServed":{
        "@type":"Country",
        "name":"United States"
      },
      "offers":{
        "@type":"Offer",
        "url":"https://hexapublishers.com/book-editing",
        "priceCurrency":"USD",
        "availability":"https://schema.org/InStock"
      }
    },

    {
      "@type":"FAQPage",
      "@id":"https://hexapublishers.com/book-editing/#faq",
      "mainEntity":[

        {
          "@type":"Question",
          "name":"What exactly do your book editing services cover?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"We’ve got you covered from start to finish. Our professional book editors handle developmental edits, copy edits, proofreading, and even formatting tips to make your manuscript shine."
          }
        },

        {
          "@type":"Question",
          "name":"How do I know which editor is right for my book?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"No worries! We match you with an editor who knows your genre and style, so your story keeps its unique voice while getting the polish it deserves."
          }
        },

        {
          "@type":"Question",
          "name":"Are your book editing services affordable?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes! We offer affordable book editing services without cutting corners, quality editing that won’t break your budget."
          }
        },

        {
          "@type":"Question",
          "name":"How to hire an editor for your book?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Start by defining what you need from an editor. Look for someone who understands your genre, your style, and your goals. Ask about experience, process, and timelines, then choose the editor who feels like the best fit for your manuscript."
          }
        },

        {
          "@type":"Question",
          "name":"What makes Hexa Publishers’ editing services the best?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"We combine experience, attention to detail, and a love for stories. That’s why we’re recognized as one of the best book editing services around."
          }
        }

      ]
    }

  ]
}
</script>

        	'
    ],
    'illustration' => [
      'title' => "Book Illustration Services | Custom Artwork for Authors",
      'description' => "Book Illustration Services at Hexa Publishers provide custom illustrations and artwork that bring your story to life and engage readers visually.",
      'script' => '
        	<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph":[

    {
      "@type":"Organization",
      "@id":"https://hexapublishers.com/#organization",
      "name":"Hexa Publishers",
      "url":"https://hexapublishers.com/",
      "logo":"https://hexapublishers.com/assets/img/logo-blck.webp",
      "sameAs":[
        "https://www.facebook.com/hexapublishers1/",
        "https://www.instagram.com/hexa.publishers/",
        "https://www.linkedin.com/company/hexa-publishers",
"https://www.trustpilot.com/review/hexapublishers.com"
      ]
    },

    {
      "@type":"LocalBusiness",
      "@id":"https://hexapublishers.com/#localbusiness",
      "name":"Hexa Publishers",
      "image":"https://hexapublishers.com/assets/img/logo-blck.webp",
      "url":"https://hexapublishers.com/",
      "telephone":"+1-925-236-0195",
      "email":"info@hexapublishers.com",
      "priceRange":"$$",
      "address":{
        "@type":"PostalAddress",
        "streetAddress":"1990 N California Blvd 8 Floor",
        "addressLocality":"Walnut Creek",
        "addressRegion":"CA",
        "postalCode":"94596",
        "addressCountry":"US"
      },
      "areaServed":{
        "@type":"Country",
        "name":"United States"
      },
      "aggregateRating":{
        "@type":"AggregateRating",
        "ratingValue":"4.9",
        "reviewCount":"273"
      }
    },

    {
      "@type":"BreadcrumbList",
      "@id":"https://hexapublishers.com/illustration/#breadcrumb",
      "itemListElement":[
        {
          "@type":"ListItem",
          "position":1,
          "name":"Home",
          "item":"https://hexapublishers.com/"
        },
        {
          "@type":"ListItem",
          "position":2,
          "name":"Book Illustration Services",
          "item":"https://hexapublishers.com/illustration"
        }
      ]
    },

    {
      "@type":"Service",
      "@id":"https://hexapublishers.com/illustration/#service",
      "name":"Professional Book Illustration Services",
      "description":"Expert book illustration services including custom illustrations, concept sketches, character design, and print-ready artwork for children’s books, graphic novels, and illustrated guides.",
      "provider":{
        "@id":"https://hexapublishers.com/#organization"
      },
      "areaServed":{
        "@type":"Country",
        "name":"United States"
      },
      "offers":{
        "@type":"Offer",
        "url":"https://hexapublishers.com/illustration",
        "priceCurrency":"USD",
        "availability":"https://schema.org/InStock"
      }
    },

    {
      "@type":"FAQPage",
      "@id":"https://hexapublishers.com/illustration/#faq",
      "mainEntity":[

        {
          "@type":"Question",
          "name":"What types of books can you illustrate?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"We illustrate all kinds of books! From children’s stories to graphic novels and illustrated guides, our book illustration brings every story to life."
          }
        },

        {
          "@type":"Question",
          "name":"Can you create custom illustrations for my book?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Absolutely! Our custom illustrations are tailored to your story, characters, and style, ensuring your book is truly one-of-a-kind."
          }
        },
        {
          "@type":"Question",
          "name":"What’s your process for book illustration?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"We start with concept sketches, move to detailed custom illustrations, and finalize everything after your feedback. You’re involved every step of the way."
          }
        },

        {
          "@type":"Question",
          "name":"Are your illustrations suitable for publishing?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Definitely! Our professional book illustration services produce print-ready and digital-ready artwork, perfect for publishing platforms."
          }
        },
        {
          "@type":"Question",
          "name":"How do I get started with Hexa Publishers?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Getting started is easy! Contact us today for book illustration service, and we’ll guide you from concept to finished artwork."
          }
        }

      ]
    }

  ]
}
</script>

        	'
    ],
    'case-studies' => [
      'title' => "Book Publishing Case Studies | Hexa Publishers Success",
      'description' => "Book Publishing Case Studies at Hexa Publishers showcase author success stories, highlighting proven strategies that deliver results for writers.",
      'script' => ""
    ],
    'about' => [
      'title' => "About Hexa Publishers | Trusted Book Publishing Partner",
      'description' => "About Hexa Publishers explains our mission to support authors with publishing, marketing, and design services that help books achieve global success.",
      'script' => ""
    ],
    'contact-us' => [
      'title' => "Contact Hexa Publishers | Get in Touch with Our Team",
      'description' => "Contact Hexa Publishers today to discuss your publishing, marketing, or design needs. Our team is here to guide authors toward success.",
      'script' => ""
    ],
    'terms-conditions' => [
      'title' => "Terms & Conditions | Hexa Publishers Policies",
      'description' => "Terms & Conditions of Hexa Publishers outline our service guidelines, policies, and agreements to ensure transparency and trust with authors.",
      'robots' => "",
      'script' => ""
    ],
    'privacy-policy' => [
      'title' => "Privacy Policy | Hexa Publishers Data Protection",
      'description' => "Privacy Policy of Hexa Publishers explains how we handle, secure, and protect author and client information with complete transparency.",
      'robots' => "",
      'script' => ""
    ],
    'thankyou' => [
      'title' => "Thank You",
      'description' => "Thank you for contacting us. Our representative will contact you shortly",
      'robots' => "",
      'script' => ""
    ],
    '404' => [
      'title' => "404 Opps Page Not Found",
      'description' => "The page you are looking for is not found",
      'robots' => "",
      'script' => ""
    ],
  ];
  // ── Blog pages — injected dynamically ────────────────────────────────────
  if ($activePage === 'blogs') {
    $metaData['blogs'] = [
      'title'       => 'Blog | Tips & Insights on Book Publishing | ' . $bname,
      'description' => 'Read ' . $bname . ' blog for the latest publishing news, writing tips, and industry insights. Perfect for authors and publishers.',
      'script'      => '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Blog","url":"https://hexapublishers.com/blogs","name":"Hexa Publishers Blog","publisher":{"@id":"https://hexapublishers.com/#organization"}},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://hexapublishers.com/"},{"@type":"ListItem","position":2,"name":"Blog","item":"https://hexapublishers.com/blogs"}]}]}</script>',
    ];
  } elseif ($activePage === 'blog-detail') {
    $metaData['blog-detail'] = [
      'title'       => isset($hp_blog_seo_title) ? $hp_blog_seo_title : 'Blog | ' . $bname,
      'description' => isset($hp_blog_seo_desc)  ? $hp_blog_seo_desc  : '',
      'script'      => isset($hp_blog_schema_script) ? $hp_blog_schema_script : '',
    ];
  }
  // ─────────────────────────────────────────────────────────────────────────
  if (isset($metaData[$activePage])) {
    $class = $activePage;
    $title = $metaData[$activePage]['title'];
    $description = $metaData[$activePage]['description'];
    $robots = isset($metaData[$activePage]['robots']) ? $noFollow : $robots;
    $script = $metaData[$activePage]['script'];
  } else {
    $class = "random";
    $title = "Award-Winning Book Writing Company ";
    $description = "Are you looking for a professional book writing agency in the USA? Hire $bname which can offer the best book writing services by expert writers.";
    $robots = $noFollow;
    $script = "";
  }
  ?>
