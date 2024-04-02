<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<style>
    /* Responsiveness for mobile (375px) */
    @media (min-width: 425px) {
        #heading1-homepage {
            font-size: 1rem;
            font-weight: 600;
            text-shadow: 2px 2px #e0bc6d;
        }

        #heading2-banner-homepage {
            font-size: 1rem;
            font-weight: 400;
            color: #fff
        }
    }

    /* Responsiveness for tablet (768px) */
    @media (min-width: 376px) and (max-width: 768px) {
        #heading1-homepage {
            font-size: 3.5rem;
            font-weight: 600;
            text-shadow: 2px 2px #e0bc6d;
        }

        #heading2-banner-homepage {
            font-size: 2.25rem;
            font-weight: 400;
            color: #fff
        }
    }

    /* Responsiveness for laptop (1024px) */
    @media (min-width: 769px) and (max-width: 1024px) {
        #heading1-homepage {
            font-size: 4.5rem;
            font-weight: 700;
            text-shadow: 2px 2px #e0bc6d;
        }

        #heading2-banner-homepage {
            font-size: 3.25rem;
            font-weight: 500;
            color: #fff
        }
    }

    /* Responsiveness for large laptop (1440px) */
    @media (min-width: 1025px) and (max-width: 1440px) {
        #heading1-homepage {
            font-size: 5.5rem;
            font-weight: 700;
            text-shadow: 2px 2px #e0bc6d;
        }

        #heading2-banner-homepage {
            font-size: 3.25rem;
            font-weight: 500;
            color: #fff
        }
    }

    /* Responsiveness for large desktop (1441px and above) */
    @media (min-width: 1441px) {
        #heading1-homepage {
            font-size: 5.5rem;
            font-weight: 700;
            text-shadow: 2px 2px #e0bc6d;
        }

        #heading2-banner-homepage {
            font-size: 3.25rem;
            font-weight: 500;
            color: #fff
        }
    }
</style>

<!-- ========== header end============= -->
<div data-elementor-type="wp-page" data-elementor-id="234" class="elementor elementor-234">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-c69dd4c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c69dd4c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1cf64a" data-id="f1cf64a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-156ef9f elementor-widget elementor-widget-egens_slider" data-id="156ef9f" data-element_type="widget" data-widget_type="egens_slider.default">
                        <div class="elementor-widget-container">
                            <section class="hero-banner">
                                <div class="swiper hero-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img loading="lazy" decoding="async" src="<?= base_url('assets/images/slide-1.jpg') ?>" alt="" />
                                            <div class=" hero-wrapper">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-9">
                                                            <div class="hero-content">
                                                                <!-- <span id="subtitle-banner-homepage"><?= $language == 'id' ? $homepage['sub_title_id'] : $homepage['sub_title_en'] ?></span> -->
                                                                <h1 id="heading1-homepage"><?= $language == 'id' ? $homepage['title_id'] : $homepage['title_en']  ?></h1>
                                                                <h2 id="heading2-banner-homepage">
                                                                    <a href="#">
                                                                        <?= $language == 'id' ? $homepage['description_id'] : $homepage['description_en'] ?>
                                                                    </a>
                                                                </h2>

                                                                <div class="btn-group">
                                                                    <div class="dsc-btn">
                                                                        <a href="#" style="background-color: #e0bc6d;" onmouseout="this.style.cursor='default'" onmouseover="this.style.cursor='pointer'">
                                                                            <i aria-hidden="true" class="fab fa-telegram-plane"></i>
                                                                            <?= lang("text_homepage.banner_button") ?>
                                                                        </a>
                                                                    </div>
                                                                    <a target="_blank" href="https://www.trustpilot.com/review/yourprivateeurope.eu?utm_medium=trustbox&utm_source=MicroReviewCount" class="rating-wrap">
                                                                        <div class="trip-rating">
                                                                            <!-- <div class="icon" style="background-color: transparent !important;">
                                                                                <img loading="lazy" src="<?= base_url('assets/images/trustpilot.svg') ?>" alt="" style="height: fit-content;">
                                                                            </div> -->
                                                                            <div class="cnt">
                                                                                <!-- <h4>Trustpilot</h4> -->
                                                                                <img loading="lazy" src="<?= base_url('assets/images/trustpilot.svg') ?>" alt="trustpilot-rating" style="height: 30px !important;width: 130px ;">
                                                                                <p>See our <span>37</span> reviews on Trustpilot</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="hero-pagination"></div>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element
      elementor-element-a3bd80e elementor-section-full_width
      elementor-section-height-default elementor-section-height-default" data-id="a3bd80e" data-element_type="section" data-settings="{" background_background":"classic"}"="">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7eb456c" data-id="7eb456c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section class="elementor-section elementor-inner-section
            elementor-element elementor-element-e142efa elementor-section-boxed
            elementor-section-height-default elementor-section-height-default" data-id="e142efa" data-element_type="section" data-settings="{" background_background":"classic"}"="">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5fffbce" data-id="5fffbce" data-element_type="column" style="width: 100% !important;">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6ac66df elementor-widget elementor-widget-astrip_heading" data-id="6ac66df" data-element_type="widget" data-widget_type="astrip_heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="justify-content-center">
                                                <div class="section-title2 d-flex flex-column justify-content-center">
                                                    <span>
                                                        <?= $language == 'id' ? $aboutUs['heading_id'] : $aboutUs['heading_en'] ?>
                                                    </span>
                                                    <h2>
                                                        <?= $language == 'id' ? $aboutUs['title_id'] : $aboutUs['title_en'] ?>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-842954f elementor-widget elementor-widget-text-editor" data-id="842954f" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.17.0 - 08-11-2023 */
                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                    background-color: #69727d;
                                                    color: #fff;
                                                }

                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                    color: #69727d;
                                                    border: 3px solid;
                                                    background-color: transparent;
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                    margin-top: 8px;
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                    width: 1em;
                                                    height: 1em;
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                    float: left;
                                                    text-align: center;
                                                    line-height: 1;
                                                    font-size: 50px;
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                    display: inline-block;
                                                }
                                            </style>
                                            <p>
                                                <?= $language == 'id' ? $aboutUs['description_id'] : $aboutUs['description_en'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-15c7e1e elementor-widget elementor-widget-astrip_button" data-id="15c7e1e" data-element_type="widget" data-widget_type="astrip_button.default">
                                        <div class="elementor-widget-container">
                                            <div class="row justify-content-center">
                                                <div class="btn-align">
                                                    <a href="#" target="_blank" class="eg-btn btn--primary-outline btn--lg" style="background-color: #e0bc6d;" onmouseover="this.style.color='#e0bc6d'" onmouseout="this.style.color='white'">
                                                        <?= lang("text_homepage.button_about_us") ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-aa8649e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="aa8649e" data-element_type="section" style="margin-top: 150px !important;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c7b2d8" data-id="7c7b2d8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ef6b795 elementor-widget elementor-widget-astrip_heading" data-id="ef6b795" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">


                            <div class=" justify-content-center">
                                <div class="section-title1">
                                    <span>
                                        <?= $language == 'id' ? $homepage['our_services_section_id'] : $homepage['our_services_section_en'] ?>
                                    </span>
                                    <h2>
                                        <?= $language == 'id' ? $homepage['our_services_title_id'] : $homepage['our_services_title_en'] ?>
                                    </h2>
                                    <div class="heading-ribbon flex justify-center">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#e0bc6d"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#e0bc6d"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#e0bc6d"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#e0bc6d"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#e0bc6d"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#e0bc6d"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#e0bc6d"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#e0bc6d"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-04a950f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="04a950f" data-element_type="section" style="margin-top: 0px !important;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-34259fb" data-id="34259fb" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-916128e elementor-widget elementor-widget-astrip_blog" data-id="916128e" data-element_type="widget" data-widget_type="astrip_blog.default">
                        <div class="elementor-widget-container">

                            <div class="blog-section overflow-hidden">
                                <div class="row justify-content-center">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                        <div class="blog-single1">
                                            <div class="image">
                                                <img loading="lazy" decoding="async" width="870" height="500" src="<?= base_url('assets/images/blog-dt8.jpg') ?>" class="img-fluid wp-post-image" alt="our-service" srcset="<?= base_url('assets/images/blog-dt8.jpg') ?> 870w, <?= base_url('assets/images/blog-dt8-600x345.jpg') ?> 600w, <?= base_url('assets/images/blog-dt8-300x172.jpg') ?> 300w, <?= base_url('assets/images/blog-dt8-768x441.jpg') ?> 768w, <?= base_url('assets/images/blog-dt8-370x213.jpg') ?> 370w" sizes="(max-width: 870px) 100vw, 870px">
                                                <!-- <span class="blog-date">
                                                    <a href="#2023/02/18"></a>
                                                </span> -->
                                            </div>
                                            <div class="content">
                                                <h4 style="text-align: center;">
                                                    <a href="#">
                                                        VIP Services
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                        <div class="blog-single1">
                                            <div class="image">
                                                <img loading="lazy" decoding="async" width="870" height="500" src="<?= base_url('assets/images/blog-dt9.jpg') ?>" class="img-fluid wp-post-image" alt="our-service" srcset="<?= base_url('assets/images/blog-dt9.jpg') ?> 870w, <?= base_url('assets/images/blog-dt9-600x345.jpg') ?> 600w, <?= base_url('assets/images/blog-dt9-300x172.jpg') ?> 300w, <?= base_url('assets/images/blog-dt9-768x441.jpg') ?> 768w, <?= base_url('assets/images/blog-dt9-370x213.jpg') ?> 370w" sizes="(max-width: 870px) 100vw, 870px">
                                                <!-- <span class="blog-date">
                                                    <a href="#2023/02/18"></a>
                                                </span> -->
                                            </div>
                                            <div class="content">
                                                <h4 style="text-align: center;">
                                                    <a href="#">
                                                        Private Tour
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                        <div class="blog-single1">
                                            <div class="image">
                                                <img loading="lazy" decoding="async" width="870" height="500" src="<?= base_url('assets/images/blog-dt10.jpg') ?>" class="img-fluid wp-post-image" alt="our-service" srcset="<?= base_url('assets/images/blog-dt10.jpg') ?> 870w, <?= base_url('assets/images/blog-dt10-600x345.jpg') ?> 600w, <?= base_url('assets/images/blog-dt10-300x172.jpg') ?> 300w, <?= base_url('assets/images/blog-dt10-768x441.jpg') ?> 768w, <?= base_url('assets/images/blog-dt10-370x213.jpg') ?> 370w" sizes="(max-width: 870px) 100vw, 870px">
                                                <!-- <span class="blog-date">
                                                    <a href="#2023/02/18"></a>
                                                </span> -->
                                            </div>
                                            <div class="content">
                                                <h4 style="text-align: center;">
                                                    <a href="#">
                                                        MICE
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-86a3b54 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86a3b54" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default" style="max-width: 1140px;">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0442f94" data-id="0442f94" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3062334 elementor-widget elementor-widget-astrip_heading" data-id="3062334" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span>
                                        <?= $language == 'id' ? $homepage['usp_section_id'] : $homepage['usp_section_en'] ?>
                                    </span>
                                    <h3 style="font-size: 30px; font-weight: bold;">
                                        <?= $language == 'id' ? $homepage['usp_title_id'] : $homepage['usp_title_en'] ?>
                                    </h3>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#e0bc6d"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#e0bc6d"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#e0bc6d"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#e0bc6d"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#e0bc6d"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#e0bc6d"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#e0bc6d"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#e0bc6d"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-e2c78fd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2c78fd" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default" style="display: flex;justify-content: center; padding: 50px 0px 0px 0px;">
            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-b17fe2a" data-id="b17fe2a" data-element_type="column" style="width: 100%;">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-68b1738 elementor-widget elementor-widget-astrip_accordion" data-id="68b1738" data-element_type="widget" data-widget_type="astrip_accordion.default">
                        <div class="elementor-widget-container">
                            <div class="faq-wrap">
                                <div class="accordion" id="accordionExample">

                                    <?php foreach ($usp as $dataUsp) : ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading<?= $dataUsp['id'] ?>">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $dataUsp['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $dataUsp['id'] ?>">
                                                    <p>
                                                        <?= $language == 'id' ? strtoupper($dataUsp['title_id']) : strtoupper($dataUsp['title_en']) ?>
                                                    </p>
                                                </button>
                                            </h2>
                                            <div id="collapse<?= $dataUsp['id'] ?>" class="accordion-collapse collapse " aria-labelledby="heading<?= $dataUsp['id'] ?>" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">

                                                    <?= $language == 'id' ? $dataUsp['description_id'] : $dataUsp['description_en'] ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- </div> -->
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-86a3b54 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86a3b54" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0442f94" data-id="0442f94" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3062334 elementor-widget elementor-widget-astrip_heading" data-id="3062334" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span>
                                        <?= $language == 'id' ? $homepage['testimonial_section_id'] : $homepage['testimonial_section_en'] ?>
                                    </span>
                                    <h3 style="font-size: 30px; font-weight: bold;">
                                        <?= $language == 'id' ? $homepage['testimonial_title_id'] : $homepage['testimonial_title_en'] ?>
                                    </h3>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#e0bc6d"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#e0bc6d"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#e0bc6d"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#e0bc6d"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#e0bc6d"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#e0bc6d"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#e0bc6d"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#e0bc6d"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-969e467 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="969e467" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1243d0f" data-id="1243d0f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5bb28db elementor-widget elementor-widget-astrip_testimonial" data-id="5bb28db" data-element_type="widget" data-widget_type="astrip_testimonial.default">
                        <div class="elementor-widget-container">
                            <script></script>

                            <div class="testimonial-section overflow-hidden">
                                <div class="container-fluid px-0">
                                    <div class="testimonial-wrapper">
                                        <div class="testimonial-area">
                                            <div class="testi-quote">
                                                <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.05">
                                                        <path d="M65.45 15.6653C64.7992 16.409 52.5273 31.7954 38.1637 49.8778C17.4781 76.002 12.0859 83.1141 12.0859 84.1368C12.0859 85.2524 12.7832 86.0426 16.1301 88.8317C18.4078 90.6446 23.1492 95.1536 26.7285 98.7329C41.2316 113.375 49.7383 127.693 52.7133 142.335C53.6895 146.984 53.6895 156.141 52.7133 161.812C49.8313 178.825 38.5355 199.232 22.6844 216.152C20.0348 218.941 19.0586 220.336 19.0586 221.219C19.0586 224.241 21.1969 224.287 28.0766 221.405C47.6 213.177 67.2164 200.115 81.5801 185.705C100.174 167.111 111.051 146.751 115.56 122.254C116.862 115.328 116.769 102.173 115.374 95.386C110.029 68.9829 95.2 41.836 73.9102 19.384C68.6109 13.8059 67.5883 13.3876 65.45 15.6653ZM74.7004 28.1231C90.6445 46.5774 102.452 67.4024 108.076 87.1118C113.004 104.497 112.632 118.07 106.635 136.432C96.827 166.414 72.3297 193.003 38.1172 210.76C32.9574 213.456 32.0277 213.782 32.7715 212.806C41.557 201.324 44.8574 196.304 48.9945 188.262C53.55 179.29 56.7109 169.761 58.152 160.743C59.0352 154.932 58.4773 143.451 57.0363 137.966C53.1316 123.137 44.532 109.145 30.7262 95.293C26.9609 91.5278 22.6379 87.3442 21.0574 85.9497L18.1754 83.4395L43.091 52.1555L67.9602 20.8715L69.1223 21.9407C69.773 22.545 72.2832 25.2876 74.7004 28.1231Z" fill="white"></path>
                                                        <path d="M174.688 15.6652C174.037 16.4089 161.766 31.7953 147.402 49.8777C126.716 76.0019 121.324 83.114 121.324 84.1367C121.324 85.2523 122.021 86.0425 125.415 88.8316C127.646 90.6445 132.387 95.1535 135.967 98.7327C150.47 113.375 158.977 127.693 161.952 142.335C162.928 146.984 162.928 156.141 161.952 161.812C161.068 166.879 158.698 174.688 156.188 180.452C151.307 191.701 141.452 206.112 131.318 216.803C129.18 219.081 128.297 220.382 128.297 221.266C128.297 224.241 130.435 224.287 137.315 221.405C161.44 211.271 185.705 193.514 200.441 175.246C211.132 161.998 219.267 145.868 223.079 130.389C225.17 121.928 225.635 118.07 225.635 109.006C225.635 101.15 225.542 99.523 224.38 94.3167C218.755 68.0066 204.206 41.557 183.148 19.3839C177.849 13.8058 176.827 13.3875 174.688 15.6652ZM186.356 30.9121C206.67 55.2699 219.732 84.0902 220.661 106.449C221.312 121.975 216.106 140.615 206.623 156.838C193.84 178.779 171.992 198.442 145.868 211.55C141.824 213.596 141.312 213.735 142.056 212.759C151.353 200.673 154.607 195.653 158.977 186.635C162.416 179.616 164.834 172.968 166.507 165.949C167.39 162.091 167.53 160.278 167.53 152.004C167.53 143.172 167.437 142.149 166.321 137.966C162.23 122.905 153.724 109.145 139.964 95.2929C136.199 91.5277 131.876 87.3441 130.296 85.9495L127.414 83.4394L152.376 52.1089L177.291 20.732L180.266 23.9859C181.94 25.7523 184.682 28.8667 186.356 30.9121Z" fill="white"></path>
                                                    </g>
                                                </svg>
                                            </div>

                                            <div class="testimonial-wrap">
                                                <div class="swiper testimonial1-slider">
                                                    <div class="swiper-wrapper">

                                                        <?php foreach ($testimonials as $testimonial) : ?>
                                                            <div class="swiper-slide">
                                                                <div class="testimonial-single1">
                                                                    <div class="testimonial-content">
                                                                        <ul class="star-list">

                                                                            <?php for ($i = 1; $i <= $testimonial['rating']; $i++) { ?>
                                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                            <?php } ?>

                                                                        </ul>

                                                                        <p>
                                                                            <?= $language == 'id' ? $testimonial['description_id'] : $testimonial['description_en']  ?>
                                                                        </p>
                                                                    </div>
                                                                    <div class="testi-author1">
                                                                        <div class="image">
                                                                            <img loading="lazy" decoding="async" src="<?= base_url('assets/images/testimonials/') . $testimonial['image'] ?>" alt="<?= $testimonial['alt_image'] ?>" />
                                                                        </div>
                                                                        <div class="author-text">
                                                                            <h5>
                                                                                <?= $testimonial['name'] ?>
                                                                            </h5>

                                                                            <!-- <p>South America.</p> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>

                                                    </div>
                                                    <div class="testimonial1-pagination d-flex align-items-center justify-content-sm-end justify-content-center pt-sm-0 pt-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column
        elementor-element elementor-element-214672d" data-id="214672d" data-element_type="column" data-settings="{" background_background":"classic"}"="">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-fdaed90 elementor-widget elementor-widget-egens_newsletter" data-id="fdaed90" data-element_type="widget" data-widget_type="egens_newsletter.default">
                        <div class="elementor-widget-container">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-86a3b54 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86a3b54" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0442f94" data-id="0442f94" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3062334 elementor-widget elementor-widget-astrip_heading" data-id="3062334" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span>
                                        <?= $language == 'id' ? $homepage['commitment_section_id'] : $homepage['commitment_section_en'] ?>
                                    </span>
                                    <h3 style="font-size: 30px; font-weight: bold;">
                                        <?= $language == 'id' ? $homepage['commitment_title_id'] : $homepage['commitment_title_en'] ?>
                                    </h3>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#e0bc6d"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#e0bc6d"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#e0bc6d"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#e0bc6d"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#e0bc6d"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#e0bc6d"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#e0bc6d"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#e0bc6d"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-926134b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="926134b" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4cda8d9" data-id="4cda8d9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0c74e90 elementor-widget elementor-widget-astrip_info_box" data-id="0c74e90" data-element_type="widget" data-widget_type="astrip_info_box.default">
                        <div class="elementor-widget-container">
                            <div class="category-section">
                                <div class="row justify-content-center g-xxl-5 g-4">
                                    <?php foreach ($commitments as $commitment) : ?>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                                            <div class="category-single1">
                                                <div class="icon">
                                                    <img loading="lazy" style="max-width: 44px;" src="<?= base_url('assets/images/commitments/') . $commitment['image'] ?>" alt="<?= $commitment['alt_image'] ?>" srcset="">
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        <a href="#">
                                                            <?= $language == 'id' ? $commitment['title_id'] : $commitment['title_en'] ?>
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-16674b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16674b5" data-element_type="section" style="margin-top: 150px !important;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2bd2882" data-id="2bd2882" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a26396d elementor-widget elementor-widget-astrip_heading" data-id="a26396d" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span>
                                        <?= $language == 'id' ? $homepage['trending_destination_section_id'] : $homepage['trending_destination_section_en'] ?>
                                    </span>
                                    <h2>
                                        <?= $language == 'id' ? $homepage['trending_destination_title_id'] : $homepage['trending_destination_title_en'] ?>
                                    </h2>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#e0bc6d"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#e0bc6d"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#e0bc6d"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#e0bc6d"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#e0bc6d"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#e0bc6d"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#e0bc6d"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#e0bc6d"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-535e7b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="535e7b3" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-811c3aa" data-id="811c3aa" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-8eaecf0 elementor-widget elementor-widget-astrip_tour_package" data-id="8eaecf0" data-element_type="widget" data-widget_type="astrip_tour_package.default">
                        <div class="elementor-widget-container">
                            <div class="deal-section">
                                <div class="container-fluid">
                                    <div class="row justify-content-center g-4">

                                        <?php foreach ($destinations as $destination) : ?>
                                            <!-- Content  -->
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                                <div class="deal-single1">
                                                    <div class="deal-image">
                                                        <img loading="lazy" fetchpriority="high" decoding="async" width="425" height="345" src="<?= base_url('assets/images/destinations/') . $destination['image'] ?>" class="img-fluid wp-post-image" alt="<?= $destination['alt_image'] ?>" />
                                                    </div>
                                                    <div class="deal-content">
                                                        <div class="review-area"></div>
                                                        <h4>
                                                            <a href="/<?= $language ?>/destination/<?= $destination['slug'] ?>">
                                                                <?= $destination['title'] ?>
                                                            </a>
                                                        </h4>
                                                        <div class="price">
                                                            <span>
                                                                <?= $language == 'id' ? $destination['duration_id'] : $destination['duration_en'] ?>
                                                            </span>
                                                        </div>
                                                        <a href="/<?= $language ?>/destination/<?= $destination['slug'] ?>" class="eg-btn btn--primary-outline btn--md"><?= lang("text_homepage.trending_destination") ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Content End -->
                                        <?php endforeach; ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-e8d46a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e8d46a5" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b17e34d" data-id="b17e34d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-9b0a438 elementor-widget elementor-widget-astrip_button" data-id="9b0a438" data-element_type="widget" data-widget_type="astrip_button.default">
                                            <div class="elementor-widget-container">
                                                <div class="row justify-content-center">
                                                    <div class="btn-align">
                                                        <a href="/<?= $language ?>/destination" target="_blank" class="eg-btn btn--primary-outline btn--lg">
                                                            <?= lang("text_homepage.all_destination") ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-8104c8f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8104c8f" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-128b5f8" data-id="128b5f8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b5e1550 elementor-widget elementor-widget-astrip_heading" data-id="b5e1550" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span>
                                        <?= $language == 'id' ? $homepage['upcoming_events_section_id'] : $homepage['upcoming_events_section_en'] ?>
                                    </span>
                                    <h2>
                                        <?= $language == 'id' ? $homepage['upcoming_events_title_id'] : $homepage['upcoming_events_title_en'] ?>
                                    </h2>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#e0bc6d"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#e0bc6d"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#e0bc6d"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#e0bc6d"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#e0bc6d"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#e0bc6d"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#e0bc6d"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#e0bc6d"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="blog-grid-section pt-120 pb-120">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-single2">
                        <div class="image">
                            <img loading="lazy" width="870" height="500" src="<?= base_url('assets/images/blog-dt8.jpg') ?>" class="img-fluid wp-post-image" alt="" decoding="async" srcset="
                    <?= base_url('assets/images/blog-dt8.jpg') ?>         870w,
                    <?= base_url('assets/images/blog-dt8-600x345.jpg') ?> 600w,
                    <?= base_url('assets/images/blog-dt8-300x172.jpg') ?> 300w,
                    <?= base_url('assets/images/blog-dt8-768x441.jpg') ?> 768w,
                    <?= base_url('assets/images/blog-dt8-370x213.jpg') ?> 370w
                  " sizes="(max-width: 870px) 100vw, 870px" />

                        </div>
                        <div class="content">
                            <h5>
                                <a href="#">Li river, China’s orignial postcard landcaspe</a>
                            </h5>
                            <div class="blog-date">
                                <i class="bi bi-calendar-check"></i><span><a href="#">February 18, 2023</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-single2">
                        <div class="image">
                            <img loading="lazy" width="870" height="500" src="<?= base_url('assets/images/blog-dt9.jpg') ?>" class="img-fluid wp-post-image" alt="" decoding="async" srcset="
                    <?= base_url('assets/images/blog-dt9.jpg') ?>         870w,
                    <?= base_url('assets/images/blog-dt9-600x345.jpg') ?> 600w,
                    <?= base_url('assets/images/blog-dt9-300x172.jpg') ?> 300w,
                    <?= base_url('assets/images/blog-dt9-768x441.jpg') ?> 768w,
                    <?= base_url('assets/images/blog-dt9-370x213.jpg') ?> 370w
                  " sizes="(max-width: 870px) 100vw, 870px" />

                        </div>
                        <div class="content">
                            <h5>
                                <a href="#">The social art of zaha Hadid, architecture’s presence</a>
                            </h5>
                            <div class="blog-date">
                                <i class="bi bi-calendar-check"></i><span><a href="#">February 18, 2023</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-single2">
                        <div class="image">
                            <img loading="lazy" width="870" height="500" src="<?= base_url('assets/images/blog-dt10.jpg') ?>" class="img-fluid wp-post-image" alt="" decoding="async" srcset="
                    <?= base_url('assets/images/blog-dt10.jpg') ?>         870w,
                    <?= base_url('assets/images/blog-dt10-600x345.jpg') ?> 600w,
                    <?= base_url('assets/images/blog-dt10-300x172.jpg') ?> 300w,
                    <?= base_url('assets/images/blog-dt10-768x441.jpg') ?> 768w,
                    <?= base_url('assets/images/blog-dt10-370x213.jpg') ?> 370w
                  " sizes="(max-width: 870px) 100vw, 870px" />

                        </div>
                        <div class="content">
                            <h5>
                                <a href="#">Jungles in Paris vermont’s rugged, retro Ski mountain</a>
                            </h5>
                            <div class="blog-date">
                                <i class="bi bi-calendar-check"></i><span><a href="#">February 18, 2023</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-single2">
                        <div class="image">
                            <img loading="lazy" width="870" height="500" src="<?= base_url('assets/images/blog-dt7.jpg') ?>" class="img-fluid wp-post-image" alt="" decoding="async" srcset="
                    <?= base_url('assets/images/blog-dt7.jpg') ?>         870w,
                    <?= base_url('assets/images/blog-dt7-600x345.jpg') ?> 600w,
                    <?= base_url('assets/images/blog-dt7-300x172.jpg') ?> 300w,
                    <?= base_url('assets/images/blog-dt7-768x441.jpg') ?> 768w,
                    <?= base_url('assets/images/blog-dt7-370x213.jpg') ?> 370w
                  " sizes="(max-width: 870px) 100vw, 870px" />

                        </div>
                        <div class="content">
                            <h5>
                                <a href="#">Day out on the Ile de Re. Getting hotter and hotter.</a>
                            </h5>
                            <div class="blog-date">
                                <i class="bi bi-calendar-check"></i><span><a href="#">January 10, 2023</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-single2">
                        <div class="image">
                            <img loading="lazy" width="870" height="500" src="<?= base_url('assets/images/blog-dt1.jpg') ?>" class="img-fluid wp-post-image" alt="" decoding="async" srcset="
                    <?= base_url('assets/images/blog-dt1.jpg') ?>         870w,
                    <?= base_url('assets/images/blog-dt1-600x345.jpg') ?> 600w,
                    <?= base_url('assets/images/blog-dt1-300x172.jpg') ?> 300w,
                    <?= base_url('assets/images/blog-dt1-768x441.jpg') ?> 768w,
                    <?= base_url('assets/images/blog-dt1-370x213.jpg') ?> 370w
                  " sizes="(max-width: 870px) 100vw, 870px" />

                        </div>
                        <div class="content">
                            <h5>
                                <a href="#">Benefit from a 15% discount to make your reservations.</a>
                            </h5>
                            <div class="blog-date">
                                <i class="bi bi-calendar-check"></i><span><a href="#2022/10/12">October 12, 2022</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-single2">
                        <div class="image">
                            <img loading="lazy" width="870" height="500" src="<?= base_url('assets/images/blog-dt2.jpg') ?>" class="img-fluid wp-post-image" alt="" decoding="async" srcset="
                    <?= base_url('assets/images/blog-dt2.jpg') ?>         870w,
                    <?= base_url('assets/images/blog-dt2-600x345.jpg') ?> 600w,
                    <?= base_url('assets/images/blog-dt2-300x172.jpg') ?> 300w,
                    <?= base_url('assets/images/blog-dt2-768x441.jpg') ?> 768w,
                    <?= base_url('assets/images/blog-dt2-370x213.jpg') ?> 370w
                  " sizes="(max-width: 870px) 100vw, 870px" />

                        </div>
                        <div class="content">
                            <h5>
                                <a href="#">How to select the perfect quality camping tent.</a>
                            </h5>
                            <div class="blog-date">
                                <i class="bi bi-calendar-check"></i><span><a href="#2022/10/11">October 11, 2022</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-8104c8f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8104c8f" data-element_type="section" style="margin-top: 0px !important;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-128b5f8" data-id="128b5f8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b5e1550 elementor-widget elementor-widget-astrip_heading" data-id="b5e1550" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span>
                                        <?= $language == 'id' ? $homepage['how_it_works_section_id'] : $homepage['how_it_works_section_en'] ?>
                                    </span>
                                    <h2>
                                        <?= $language == 'id' ? $homepage['how_it_works_title_id'] : $homepage['how_it_works_title_en'] ?>
                                    </h2>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#e0bc6d"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#e0bc6d"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#e0bc6d"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#e0bc6d"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#e0bc6d"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#e0bc6d"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#e0bc6d"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#e0bc6d"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-3f21453 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3f21453" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fe9d011" data-id="fe9d011" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-530c731 elementor-widget elementor-widget-astrip_package_with_facilities" data-id="530c731" data-element_type="widget" data-widget_type="astrip_package_with_facilities.default">
                        <div class="elementor-widget-container">
                            <div class="best-plan-section overflow-hidden">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 position-relative">
                                            <div class="swiper best-plan-slider position-relative">
                                                <div class="swiper-wrapper">

                                                    <?php foreach ($howItWorks as $howItWork) : ?>
                                                        <div class="swiper-slide">
                                                            <div class="best-plan-single1" style="border: none;">
                                                                <div class="image" style="display: flex;justify-content: center;">

                                                                    <div style="width:225px;height: 145px; display: flex;justify-content: center; align-items: center;" class="img-fluid wp-post-image">
                                                                        <!-- <i class="fa-solid fa-envelope fa-2xl" style="color: #e0bc6d; "></i> -->
                                                                        <img loading="lazy" style="max-width: 44px;" src="<?= base_url('assets/images/how_it_works/') . $howItWork['image'] ?>" alt="<?= $howItWork['alt_image'] ?>" srcset="">
                                                                    </div>
                                                                </div>
                                                                <div class="content">

                                                                    <h4 style="text-align: center;">
                                                                        <a href="">
                                                                            <?= $language == 'id' ? $howItWork['title_id'] : $howItWork['title_en'] ?>
                                                                        </a>
                                                                    </h4>
                                                                    <div class="best-plan-meta">

                                                                        <span class="rating"> </span>
                                                                    </div>
                                                                    <div class="list-area">

                                                                        <ul class="plan-list1">
                                                                            <?= $language == 'id' ? $howItWork['description_id'] : $howItWork['description_en'] ?>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
<section style="margin-top: 110px;" class="elementor-section elementor-top-section elementor-element elementor-element-86a3b54 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86a3b54" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default" style="max-width: 1140px;">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0442f94" data-id="0442f94" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-3062334 elementor-widget elementor-widget-astrip_heading" data-id="3062334" data-element_type="widget" data-widget_type="astrip_heading.default">
                    <div class="elementor-widget-container">
                        <div class="justify-content-center">
                            <div class="section-title1">
                                <span>
                                    <?= $language == 'id' ? $homepage['faq_section_id'] : $homepage['faq_section_en'] ?>
                                </span>
                                <h3 style="font-size: 30px; font-weight: bold;">
                                    <?= $language == 'id' ? $homepage['faq_title_id'] : $homepage['faq_title_en'] ?>
                                </h3>
                                <div class="heading-ribbon">
                                    <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#e0bc6d"></path>
                                        <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#e0bc6d"></path>
                                        <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#e0bc6d"></path>
                                        <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#e0bc6d"></path>
                                        <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#e0bc6d"></path>
                                        <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#e0bc6d"></path>
                                        <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                        <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                        <defs>
                                            <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#e0bc6d"></stop>
                                                <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="white"></stop>
                                                <stop offset="1" stop-color="#e0bc6d"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="margin-bottom: 100px" class="elementor-section elementor-top-section elementor-element elementor-element-e2c78fd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2c78fd" data-element_type="section" style="margin-bottom: 50px !important;">
    <div class="elementor-container elementor-column-gap-default" style="display: flex;justify-content: center; padding: 50px 0px 0px 0px;">
        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-b17fe2a" data-id="b17fe2a" data-element_type="column" style="width: 100%;">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-68b1738 elementor-widget elementor-widget-astrip_accordion" data-id="68b1738" data-element_type="widget" data-widget_type="astrip_accordion.default">
                    <div class="elementor-widget-container">
                        <div class="faq-wrap">
                            <div class="accordion" id="accordionExample">

                                <?php foreach ($faqs as $faq) : ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading<?= $faq['id'] ?>">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $faq['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $faq['id'] ?>">
                                                <p>
                                                    <?= $language == 'id' ? $faq['title_id'] : $faq['title_en'] ?>
                                                </p>
                                            </button>
                                        </h2>
                                        <div id="collapse<?= $faq['id'] ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $faq['id'] ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?= $language == 'id' ? $faq['description_id'] : $faq['description_en'] ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-9b0a438 elementor-widget elementor-widget-astrip_button" data-id="9b0a438" data-element_type="widget" data-widget_type="astrip_button.default">
                        <div class="elementor-widget-container">
                            <div class="row justify-content-center">
                                <div class="btn-align" style="display: flex;justify-content: center;">
                                    <a href="/<?= $language ?>/faq" class="eg-btn btn--primary-outline btn--lg">
                                        <?= lang("text_homepage.all_faq") ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- </div> -->
</section>



<?= $this->endSection() ?>