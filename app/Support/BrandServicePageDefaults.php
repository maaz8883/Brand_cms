<?php

namespace App\Support;

/**
 * Default structure for a brand service landing page (all sections from Orbit-style template).
 */
class BrandServicePageDefaults
{
    public static function all(): array
    {
        return [
            'hero' => [
                'background_image' => '',
                'heading' => 'Get Professional Self-Publishing Services and',
                'heading_highlight' => 'Start Your Book Publishing Process!',
                'description' => 'Our team of expert book publishers are ready to help you turn your manuscript into a published book. Your publishing journey begins here with professional book publishing services.',
            ],
            'featured_in' => [
                'use_default_logos' => true,
                'logos' => [],
            ],
            'sub_service_areas' => [
                'enabled' => false,
                'state_name' => '',
                'headline' => '',
                'intro' => 'Now we are providing exceptional services all across {state} including,',
                'outro' => 'and beyond.',
                'link_child_pages' => false,
            ],
            'intro' => [
                'heading' => 'Explore Comprehensive Book Publishing Services Here',
                'description' => 'Every author and every book has different publishing needs. Some books sell better in hard cover and some books have high demand in ebook format. Our team of book publishers are experienced in all formats of book publishing, whether it\'s self-publishing, traditional publishing, or digital publishing, we\'ve got you covered.',
            ],
            'service_tabs' => [
                'tabs' => [
                    [
                        'tab_title' => 'TRADITIONAL PUBLISHING',
                        'title' => 'Traditional',
                        'title_highlight' => 'Book Publishing',
                        'title_suffix' => 'Services',
                        'description' => 'Get traditional book publishing services and let our expert book publishing consultants help you out. Our book consultants connect you with top publishing houses and ensure your book meets the highest standards.',
                        'checklist' => [
                            'Professional Writers',
                            'Extensive Research',
                            'Expert Editing Support',
                            'Literary Agent Assistance',
                            'Time Management',
                            'Structuring & Organization',
                            'Publisher Submissions',
                            'High-Quality Standards',
                        ],
                        'image' => '',
                        'button_label' => 'Get Started',
                    ],
                    [
                        'tab_title' => 'SELF PUBLISHING',
                        'title' => 'Self Publishing',
                        'title_highlight' => 'Publishing',
                        'title_suffix' => 'Services',
                        'description' => 'Our exceptional self-publishing services empower authors to take control of their publishing journey. From manuscript formatting and cover design to book marketing and distribution, we provide everything you need.',
                        'checklist' => [
                            'Full Creative Control',
                            '100% Royalties Retained',
                            'ISBN & Copyright Assistance',
                            'Professional Cover Design',
                            'Interior Formatting',
                            'Global Distribution',
                            'Marketing Strategy Support',
                            'Author Website Integration',
                        ],
                        'image' => '',
                        'button_label' => 'Get Started',
                    ],
                    [
                        'tab_title' => 'DIGITAL PUBLISHING',
                        'title' => 'Digital',
                        'title_highlight' => 'Publishing',
                        'title_suffix' => 'Services',
                        'description' => 'Get into the world of ebooks and audiobooks with our digital publishing services. We help you publish and distribute your piece across major platforms, fast, affordable, and professionally done.',
                        'checklist' => [
                            'eBook Formatting & Conversion',
                            'Audiobook Production',
                            'Distribution on Amazon, Apple, and More',
                            'Fast Turnaround Time',
                            'Mobile-Optimized Design',
                            'DRM Protection & File Security',
                            'Royalty Reporting Tools',
                            'Multi-Platform Marketing Support',
                        ],
                        'image' => '',
                        'button_label' => 'Get Started',
                    ],
                ],
            ],
            'mid_cta' => [
                'background_image' => '',
                'heading' => 'DO YOU DREAM OF BECOMING A',
                'heading_highlight' => 'BEST-SELLING AUTHOR',
                'subheading' => 'Let us help you in your journey.',
                'phone' => '',
                'button_label' => 'Get Started',
            ],
            'why_choose' => [
                'heading' => 'Why We Are the',
                'heading_highlight' => "Author's Trusted Partner in Book Publishing",
                'description' => 'Our book publishers understand that publishing a book is more than just putting words on a page. That\'s why we offer an end-to-end book publishing experience designed for authors who want results.',
                'cards' => [
                    ['title' => 'Expert Collaboration', 'description' => 'Work with a professional team of writers, editors, designers, and marketers.'],
                    ['title' => 'Precision Publishing', 'description' => 'We craft customized publishing strategies for every author.'],
                    ['title' => 'Market-Ready Content', 'description' => 'We refine every element so your book stands out.'],
                    ['title' => 'Ongoing Support', 'description' => 'Continuous post-publishing support to grow your brand.'],
                ],
            ],
            'success_features' => [
                'heading_strong' => 'Everything An Author',
                'heading_span' => 'Needs to Succeed',
                'button_label' => 'Get Started',
                'items' => [
                    ['image' => '', 'title' => 'Affordable Pricing', 'description' => 'Get professional publishing services that respect your budget.'],
                    ['image' => '', 'title' => 'Hassle-Free Experience', 'description' => 'We handle the complex publishing tasks so you don\'t have to.'],
                    ['image' => '', 'title' => 'Strategic Distribution', 'description' => 'Reach readers across the globe through trusted platforms.'],
                    ['image' => '', 'title' => 'Experienced Team', 'description' => 'Work with professionals who understand what authors need.'],
                    ['image' => '', 'title' => 'Personalized Support', 'description' => 'We treat every book and every author as unique.'],
                    ['image' => '', 'title' => 'Unlimited Revisions', 'description' => 'We\'re not done until you\'re completely satisfied.'],
                    ['image' => '', 'title' => 'Genre Versatility', 'description' => 'No matter your genre, we\'ve got the experience to match.'],
                    ['image' => '', 'title' => 'Marketing-Ready Output', 'description' => 'Your book won\'t just look good, it will sell.'],
                ],
            ],
            'platform_section' => [
                'heading' => 'Get Our Professional Book Publishing Services &',
                'heading_highlight' => 'Get Your Book on Major Platforms',
                'paragraphs' => [
                    'Publishing your book shouldn\'t be overwhelming. We offer full-service book publishing to authors across all genres, managing everything from formatting and cover design to ISBN registration and global distribution.',
                    'Whether you\'re self-publishing or exploring traditional options, our experts guide you every step of the way.',
                ],
                'side_image' => '',
                'button_label' => 'Get Started',
                'phone' => '',
            ],
            'platform_logos_row' => [
                'use_default_platform_logos' => true,
                'logos' => [],
            ],
            'secondary_section' => [
                'image' => '',
                'heading' => 'Custom Book Publishing Solutions Tailored',
                'heading_highlight' => 'for Aspiring & Established Authors',
                'description' => 'Our expert team specializes in delivering customized book publishing services to match your unique voice, goals, and audience.',
                'button_label' => 'Get Started',
                'phone' => '',
            ],
            'process' => [
                'heading' => 'Here\'s the 4-Step Process of Our Book Publishing Service',
                'description' => 'Our collaborative and transparent publishing ensures that you remain informed throughout the process.',
                'center_logo' => '',
                'steps' => [
                    ['number' => '01', 'title' => 'Manuscript Submission', 'description' => 'Send us your draft to begin the publishing journey.'],
                    ['number' => '02', 'title' => 'Professional Editing', 'description' => 'We refine, format, and polish your manuscript to perfection.'],
                    ['number' => '03', 'title' => 'Design & Setup', 'description' => 'Custom cover design, layout, and ISBN registration handled.'],
                    ['number' => '04', 'title' => 'Publish & Distribute', 'description' => 'Your book goes live on major global platforms.'],
                ],
            ],
            'portfolio' => [
                'heading' => 'See Our Recent Work',
                'description' => 'Explore a small part of our portfolio of published books across various genres.',
                'images' => [],
            ],
            'testimonials' => [
                'heading' => 'Still Hesitant to Hire Us?',
                'sidebar_text' => 'We believe proven results and professional support speak for themselves. Check out what our customers are saying.',
                'items' => [
                    ['quote' => 'Their team took the time to understand my story, voice, and message.', 'author' => 'Sarah Jennings'],
                    ['quote' => 'They helped me transform my rough ideas into a structured, compelling business book.', 'author' => 'Jonathan Malik'],
                    ['quote' => 'Their marketing team developed a custom strategy that increased visibility and reviews.', 'author' => 'Cynthia Reed'],
                ],
            ],
            'faq' => [
                'heading' => 'Frequently Asked Questions',
                'side_image' => '',
                'items' => [
                    [
                        'question' => 'What do your book publishing services include?',
                        'answer' => 'Our book publishing services cover everything, from editing, formatting, cover design, ISBN registration, and global distribution. We handle it all so you don\'t have to.',
                    ],
                    [
                        'question' => 'What is the difference between self-publishing and traditional publishing?',
                        'answer' => 'We offer both self-publishing services and traditional publishing. Our expert book publishers help you choose the right path based on your goals and audience.',
                    ],
                    [
                        'question' => 'How do I hire a professional book publisher at Orbit?',
                        'answer' => 'Simply share your manuscript with us. Our professional book publishers review your goals and build a customized publishing plan tailored specifically to your book.',
                    ],
                    [
                        'question' => 'How long do your book publishing services take?',
                        'answer' => 'Our professional book publishing process typically takes 4 to 12 weeks. We keep you informed at every stage so there are no surprises.',
                    ],
                    [
                        'question' => 'Which platforms do you distribute books on?',
                        'answer' => 'As trusted book publishers in USA, we distribute your book on Amazon, Barnes & Noble, Google Books, Apple Books, and all major global platforms.',
                    ],
                ],
            ],
            'final_cta' => [
                'heading' => 'Start Your Publishing Journey with {brand}',
                'description' => 'Ready to turn your idea into a published book? Get guidance through writing, editing, publishing, and marketing with a process designed to be simple, efficient, and results-driven.',
                'button_label' => 'Get Started',
                'support_image' => '',
            ],
            'seo' => [
                /** Optional full JSON-LD document; replaces auto-generated Service schema on the public site when non-empty. */
                'json_ld' => '',
            ],
        ];
    }

    /**
     * Deep merge: request values override defaults; preserves nested structure.
     */
    public static function merge(array $defaults, array $input): array
    {
        foreach ($input as $key => $value) {
            if (is_array($value) && isset($defaults[$key]) && is_array($defaults[$key]) && self::isAssoc($defaults[$key]) && self::isAssoc($value)) {
                $defaults[$key] = self::merge($defaults[$key], $value);
            } elseif (is_array($value) && isset($defaults[$key]) && is_array($defaults[$key])) {
                // Replace list-like arrays entirely when provided (e.g. tabs, checklist)
                $defaults[$key] = $value;
            } else {
                $defaults[$key] = $value;
            }
        }

        return $defaults;
    }

    /**
     * Header/footer stay in static templates — never store in service JSON.
     */
    public static function stripLayoutOnlyKeys(array $content): array
    {
        unset($content['navigation'], $content['footer_cta']);

        if (isset($content['sub_service_areas']) && is_array($content['sub_service_areas'])) {
            foreach ([
                'city_source',
                'cities_list',
                'state_abbr',
                'service_label',
                'headline_template',
            ] as $ssaKey) {
                unset($content['sub_service_areas'][$ssaKey]);
            }
        }

        if (isset($content['hero']) && is_array($content['hero'])) {
            foreach ([
                'chat_url',
                'phone',
                'free_quote_label',
                'chat_label',
                'form_book_placeholder',
                'form_submit_label',
            ] as $heroKey) {
                unset($content['hero'][$heroKey]);
            }
        }

        return $content;
    }

    private static function isAssoc(array $arr): bool
    {
        if ($arr === []) {
            return false;
        }

        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}
