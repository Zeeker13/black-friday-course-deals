    <?php
/* Template Name: Black Friday Cyber Monday*/
/*echo "<pre>";

print_r($_GET);

echo "</pre>";
*/

// get_header(vibe_get_header());

// Project Management Courses
$pMAllCoursesLink = "https://www.1training.org/course-cat/project-quality-management/prince2-project-management/";
$pMCourses = [
  [
    'title' => 'PRINCE2® Practitioner Certification',
    'price' => '£549.00',
    'original_price' => '£1,089.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/prince2-7-practitioner-interactive-certification/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=269276',
  ],
  [
    'title' => 'PRINCE2® Foundation Certification',
    'price' => '£499.00',
    'original_price' => '£899.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/prince2-7-foundation-interactive-certification/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=269274',
  ],
  [
    'title' => 'PRINCE2® Foundation & Practitioner Certification',
    'price' => '£859.00',
    'original_price' => '£1,499.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/prince2-7-foundation-practitioner-interactive-bundle/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=269108',
  ],
  [
    'title' => 'PRINCE2® Foundation & Practitioner with Take2 Resit Exams',
    'price' => '£959.00',
    'original_price' => '£1,649.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/prince2-7-foundation-practitioner-interactive-edition/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=267271',
  ],
  [
    'title' => 'PRINCE2® Practitioner with Take2 Resit Exam',
    'price' => '£599.00',
    'original_price' => '£1,149.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/prince2-7-practitioner-interactive-edition/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=267099',
  ],
  [
    'title' => 'PRINCE2® Foundation with Take2 Resit Exam',
    'price' => '£559.00',
    'original_price' => '£999.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/prince2-7-foundation-interactive-edition/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=266735',
  ],
];

// Business Management Courses
$bMAllCoursesLink = "https://www.1training.org/course-cat/btec/";
$bMCourses = [
  [
    'title' => 'Pearson BTEC Level 7 Extended Diploma in Strategic Management and Leadership',
    'price' => '£999.00',
    'original_price' => '£1,998.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/btec-level-7-extended-diploma-in-sml/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=229893',
  ],
  [
    'title' => 'Pearson BTEC Level 7 Diploma in Strategic Management and Leadership',
    'price' => '£849.00',
    'original_price' => '£1,698.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/btec-level-7-diploma-in-sml/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=229891',
  ],
  [
    'title' => 'Pearson BTEC Level 7 Certificate in Strategic Management and Leadership',
    'price' => '£499.00',
    'original_price' => '£998.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/btec-level-7-certificate-in-sml/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=229886',
  ],
  [
    'title' => 'Pearson BTEC Level 5 Certificate in Management and Leadership',
    'price' => '£449.00',
    'original_price' => '£898.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/pearson-btec-level-5-certificate-in-strategic-management-and-leadership-with-official-exam/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=147944',
  ],
  [
    'title' => 'Pearson BTEC Level 5 Diploma in Management and Leadership',
    'price' => '£599.00',
    'original_price' => '£1,198.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/pearson-btec-level-5-diploma-in-strategic-management-and-leadership-with-official-exam/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=148035',
  ],
  [
    'title' => 'Pearson BTEC Level 4 Diploma in Management and Leadership with Official Exam',
    'price' => '£549.00',
    'original_price' => '£1,098.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/pearson-btec-level-4-diploma-in-management-and-leadership-with-official-exam/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=148053',
  ],
];

// Health & Social Care Courses
$healthAndSocialAllCoursesLink = "https://www.1training.org/course-cat/health-safety/heath-social-care/";
$healthAndSocialCourses = [
  [
    'title' => 'Autism Awareness',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/autism-awareness/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=191647',
  ],
  [
    'title' => 'Behavioural Safety',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/behavioural-safety/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=191656',
  ],
  [
    'title' => 'Basic Legionella Management',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/basic-legionella-management/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=191648',
  ],
  [
    'title' => 'Control of Substances Hazardous to Health (COSHH)',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/control-of-substances-hazardous-to-health-coshh/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=191655',
  ],
  [
    'title' => 'Emergency First Aid at Work – Annual Online Refresher',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/emergency-first-aid-at-work-annual-online-refresher/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=191670',
  ],
  [
    'title' => 'Duty of Care',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/duty-of-care/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=191664',
  ],
];

// Nursing Courses
$nursingAllCoursesLink = "https://www.1training.org/course-cat/health-safety/nursing/";
$nursingCourses = [
  [
    'title' => 'Diploma in Adult Nursing Essentials',
    'price' => '£39.00',
    'original_price' => '£390.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/diploma-in-adult-nursing-essentials/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=64796',
  ],
  [
    'title' => 'Nannying and Childcare',
    'price' => '£39.00',
    'original_price' => '£390.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/nannying-and-childcare-training/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=64141',
  ],
  [
    'title' => 'Diploma in Stress Management Skills Development',
    'price' => '£39.00',
    'original_price' => '£390.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/diploma-in-stress-management/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=64076',
  ],
  [
    'title' => 'Diploma in Nursing Assistant',
    'price' => '£39.00',
    'original_price' => '£390.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/nursing-assistant-training/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=64142',
  ],
  [
    'title' => 'End of Life Care',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/end-of-life-care/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=191673',
  ],
  [
    'title' => 'Introduction to Safe Handling of Medicines',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/introduction-to-safe-handling-of-medicines/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=191688',
  ],
];

// Teaching & Education Courses
$teachingAllCoursesLink = "https://www.1training.org/course-cat/teaching-education/education-training-online-course/";
$teachingCourses = [
  [
    'title' => 'Level 4 Certificate in Education and Training',
    'price' => '£549.00',
    'original_price' => '£1,098.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/level-4-certificate-in-education-and-training-2-2/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=95586',
  ],
  [
    'title' => 'Level 3 Award in Education and Training - AET (Formerly PTLLS)',
    'price' => '£189.00',
    'original_price' => '£315.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/online-award-in-education-and-training-pttls-level-3-4/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=109723',
  ],
  [
    'title' => 'Diploma in Adult Nursing Essentials',
    'price' => '£39.00',
    'original_price' => '£390.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/diploma-in-adult-nursing-essentials/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=64796',
  ],
  [
    'title' => 'Risk Management Professional Training',
    'price' => '£39.00',
    'original_price' => '£390.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/risk-management-professional-training-course/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=64089',
  ],
  [
    'title' => 'Educational Psychology Certification',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/educational-psychology-online-certification/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=64098',
  ],
  [
    'title' => 'Effective Classroom Management',
    'price' => '£19.00',
    'original_price' => '£39.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/classroom-management-essentials-training-online/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=64150',
  ],
];

// Six Sigma Courses
$sixSigmaAllCoursesLink = "https://www.1training.org/course-cat/iassc/";
$sixSigmaCourses = [
  [
    'title' => 'IASSC Certified Lean Six Sigma Yellow Belt™, Green Belt™ & Black Belt™ Bundle',
    'price' => '£836.00',
    'original_price' => '£1,672.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/iassc-certified-lean-six-sigma-yellow-belt-green-belt-black-belt-bundle/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=261511',
  ],
  [
    'title' => 'IASSC Certified Lean Six Sigma Green Belt™ & Black Belt™ Bundle',
    'price' => '£656.00',
    'original_price' => '£1,312.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/iassc-certified-lean-six-sigma-green-belt-black-belt-bundle-2/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=203495',
  ],
  [
    'title' => 'IASSC Certified Lean Six Sigma Yellow Belt™ & Green Belt™ Bundle',
    'price' => '£512.00',
    'original_price' => '£1,024.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/iassc-certified-lean-six-sigma-yellow-belt-green-belt-bundle/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=203494',
  ],
  [
    'title' => 'IASSC Lean Six Sigma Black Belt Exam',
    'price' => '£359.00',
    'original_price' => '£369.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/iassc-lean-six-sigma-black-belt-exam/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=200414',
  ],
  [
    'title' => 'IASSC Certified Lean Six Sigma Black Belt™ with Official Exam (ICBB™)',
    'price' => '£422.00',
    'original_price' => '£844.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/iassc-lean-sixsigma-black-belt-icbb/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=268152',
  ],
  [
    'title' => 'IASSC Certified Lean Six Sigma Green Belt™ with Official Exam (ICGB™)',
    'price' => '£350.00',
    'original_price' => '£700.00',
    'discount' => '£75',
    'coursePageLink' => 'https://www.1training.org/course/iassc-lean-sixsigma-green-belt-icgb/',
    'enrollNowLink' => 'https://www.1training.org/checkout/?add-to-cart=268153',
  ],
];

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="1Training">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <title>Black Friday & Cyber Monday 1Training Online Course Deals | UK</title>
  <meta name="description" content="Get ready for Black Friday & Cyber Monday with 1Training exclusive online course deals in the UK! Enjoy 10% off on all courses and enhance your skills for less.">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="https://www.1training.org/wp-content/uploads/2016/11/fav-2.png" sizes="32x32">
  <link rel="icon" href="https://www.1training.org/wp-content/uploads/2016/11/fav-2.png" sizes="192x192">
  <link rel="apple-touch-icon" href="https://www.1training.org/wp-content/uploads/2016/11/fav-2.png">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NCLCFFF');</script>
    <!-- End Google Tag Manager -->

  <style>
    /* style.css */
    :root {
      --background-color: #0A0A0A;
      --primary-color: #252525;
      --primary-light: #8ecae6;
      --secondary-color: #999999;
      --accent-color: #141414;
      --border-primary: #2D2D2D;
    }

    .bg-primary {
      background-color: var(--background-color);
    }

    .bg-primary-light {
      background-color: var(--primary-light);
    }

    .bg-primary-dark {
      background: linear-gradient(90deg, #FF9500 0%, #FFB247 100%);
    }

    .text-secondary {
      color: var(--secondary-color);
    }

    .text-accent {
      color: var(--accent-color);
    }

    .border-primary {
      border: 2px solid #2D2D2D;
      background-color: #131A1D;
    }

    .border-secondary {
      border: 1px solid #DADADA;
    }

    .border-bottom {
      border-bottom: 1px solid #DADADA !important;
    }

    .border-dashed {
      border: 2px dashed #FFFFFF;
      background-color: #282828;
    }

    .border-ash-100 {
      border: 1px solid #535353 !important;
    }

    .text-nowarp {
      white-space: nowrap;
    }

    .gradient-text {
      background: linear-gradient(180deg, #FFFFFF 0%, #999999 91.67%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      color: transparent;
    }

    .dark-gradient-text {
      background: linear-gradient(180deg, #767676 0%, #141414 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      color: transparent;
    }

    .bg-yellow-100 {
      background-color: #FFFCF1 !important;
    }

    .bg-purple-100 {
      background-color: #F2F1FF !important;
    }

    .border-btn {
      border: 1px solid #14141433 !important;
    }

    .text-gray-100 {
      color: #888888 !important;
    }

    .bg-black-100 {
      background-color: #161616 !important;
    }

    .card-title {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
    }

    .h-24 {
      height: 84px !important;
    }

    @media (min-width: 1024px) {
      .border-right {
        border-right: 2px dashed #DADADA !important;
      }
    }
  </style>

</head>

<body class="font-sans">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCLCFFF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="bg-[#151D20] py-4 sticky top-0 z-50">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <div class="flex items-center">
            <a class="navbar-brand flex items-center" href="https://www.1training.org">
              <img src="https://www.1training.org/wp-content/uploads/2019/09/new-logo-light-1.png" data-alt-logo="https://www.1training.org/wp-content/uploads/2019/09/new-logo-light-1.png" id="header_logo" alt="1Training" width="217.217" height="50">
            </a>
          </div>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="https://www.1training.org/about-us/"
            class="text-white hover:text-gray-700">About us
          </a>
          <a href="https://www.1training.org/all-online/"
            class="text-white hover:text-gray-700">Courses</a>
          <a href="https://www.1training.org/contact/"
            class="text-white hover:text-gray-700">Contact
            us</a>
          <a href="#" class="text-white font-medium hover:text-gray-700">Enquire Now →</a>
          <a href="tel:+442081260448">
            <div class="flex items-center space-x-2 bg-black text-white px-4 py-2 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                </path>
              </svg>
              <span>020 8126 0448</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </nav>

    <!-- Hero Section -->
    <section class="bg-primary text-white py-16 sm:py-32">
        <div class="max-w-7xl mx-auto px-4 lg:grid lg:grid-cols-12 lg:gap-8 text-center lg:text-left">
          <!-- Left Column -->
          <div class="col-span-12 lg:col-span-7 flex flex-col justify-center mb-8 lg:mb-0">
            <div class="flex justify-center lg:justify-start">
              <h1 class="text-xl font-normal text-white border-2 border-primary rounded-full py-2.5 px-4 w-max">
                Cyber Monday Savings!
              </h1>
            </div>
            <p class="text-3xl sm:text-6xl text-nowrap font-semibold gradient-text mt-5">Get Extra Discounts on</p>
            <p class="text-3xl sm:text-6xl font-semibold text-secondary">All Online Courses</p>
            <img src="https://www.1training.org/wp-content/uploads/2024/11/line.webp" alt="Placeholder image"
              class="w-full pt-8">
            <div class="mt-7 lg:flex items-center gap-10">
              <div class="text-5xl sm:text-7xl font-bold gradient-text">
                <div>10%</div>
                <div>OFF</div>
              </div>
              <div class="mt-5 lg:mt-0">
                <!-- Countdown Timer -->
                <div id="countdown"
                  class="text-4xl sm:text-5xl font-bold flex gap-2 justify-center lg:justify-start gradient-text">
                  <div>
                    <span id="days">00</span>
                    <div class="text-base sm:text-xl font-normal text-center">Days</div>
                  </div>
                  <div>:</div>
                  <div>
                    <span id="hours">00</span>
                    <div class="text-base sm:text-xl font-normal text-center">Hours</div>
                  </div>
                  <div>:</div>
                  <div>
                    <span id="minutes">00</span>
                    <div class="text-base sm:text-xl font-normal text-center">Minutes</div>
                  </div>
                  <div>:</div>
                  <div>
                    <span id="seconds">00</span>
                    <div class="text-base sm:text-xl font-normal text-center">Seconds</div>
                  </div>
                </div>
                <div class="mt-5 lg:flex gap-4 justify-center lg:justify-start">
                  <button class="bg-primary-dark text-black text-lg font-semibold px-5 py-5 rounded-md">
                    Claim Offers
                  </button>
                  <div onclick="copyCouponCode()"
                    class="flex items-center border-dashed text-white px-7 py-5 rounded-full cursor-pointer mt-5 lg:mt-0 justify-center">
                    <span id="couponCode" class="mr-2 text-lg font-semibold">CYBERMONDAY10</span>
                    <button class="border-l-2 pl-3">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M18.8335 7.6543H9.66683C8.65431 7.6543 7.8335 8.47511 7.8335 9.48763V18.6543C7.8335 19.6668 8.65431 20.4876 9.66683 20.4876H18.8335C19.846 20.4876 20.6668 19.6668 20.6668 18.6543V9.48763C20.6668 8.47511 19.846 7.6543 18.8335 7.6543Z"
                          stroke="white" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path
                          d="M4.16683 14.9876C3.1585 14.9876 2.3335 14.1626 2.3335 13.1543V3.98763C2.3335 2.9793 3.1585 2.1543 4.16683 2.1543H13.3335C14.3418 2.1543 15.1668 2.9793 15.1668 3.98763"
                          stroke="white" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Right Column -->
          <div class="col-span-12 lg:col-span-5 flex justify-center">
            <img src="https://www.1training.org/wp-content/uploads/2024/12/Cyber-Monday-sales.webp" alt="Placeholder image"
              class="w-full rounded-lg shadow-lg">
          </div>
        </div>
      </section>

    <!-- Course cards -->
    <section class="bg-purple-100 py-16 mt-14 sm:mt-28 rounded-xl border-secondary max-w-7xl mx-4 xl:mx-auto">
        <div class="">
          <div class="flex items-center gap-3 justify-center">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.5" y="0.5" width="45" height="45" rx="7.5" fill="#F5F5F5" />
              <rect x="0.5" y="0.5" width="45" height="45" rx="7.5" stroke="#535353" />
              <path
                d="M17 33V15C17 14.4696 17.2107 13.9609 17.5858 13.5858C17.9609 13.2107 18.4696 13 19 13H27C27.5304 13 28.0391 13.2107 28.4142 13.5858C28.7893 13.9609 29 14.4696 29 15V33H17Z"
                stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M17 23H15C14.4696 23 13.9609 23.2107 13.5858 23.5858C13.2107 23.9609 13 24.4696 13 25V31C13 31.5304 13.2107 32.0391 13.5858 32.4142C13.9609 32.7893 14.4696 33 15 33H17"
                stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M29 20H31C31.5304 20 32.0391 20.2107 32.4142 20.5858C32.7893 20.9609 33 21.4696 33 22V31C33 31.5304 32.7893 32.0391 32.4142 32.4142C32.0391 32.7893 31.5304 33 31 33H29"
                stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21 17H25" stroke="#141414" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M21 21H25" stroke="#141414" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M21 25H25" stroke="#141414" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M21 29H25" stroke="#141414" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <p class="text-lg sm:text-xl font-semibold text-accent">Explore Our Course Categories</p>
          </div>
          <h2 class="mt-6 text-xl sm:text-4xl font-semibold dark-gradient-text text-center">Explore Courses and Save
            10% Today!</h2>
          <p class="mt-10 text-lg sm:text-2xl font-normal text-center text-primary lg:w-3/4 mx-auto">Discover the
            ideal course that will elevate your career while taking advantage of incredible Cyber Monday offers!</p>
          <div class="mt-16 course-card">
            <div class="container mx-auto px-4">
    
              <!-- Tabs Section -->
              <div id="tabs" class="flex flex-wrap gap-3 justify-center mb-4 lg:w-4/5 mx-auto">
                <button onclick="showTab('Project Management')" id="tab-Project Management"
                  class="px-4 py-2 rounded-full  flex items-center gap-2  hover:bg-black hover:text-white">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="18" r="18" fill="#F7F7F7" />
                    <path
                      d="M10.6668 25.3333H25.3335C25.8197 25.3333 26.286 25.1402 26.6299 24.7964C26.9737 24.4525 27.1668 23.9862 27.1668 23.5V14.3333C27.1668 13.8471 26.9737 13.3808 26.6299 13.037C26.286 12.6932 25.8197 12.5 25.3335 12.5H18.0643C17.7624 12.4984 17.4655 12.4223 17.2 12.2784C16.9345 12.1345 16.7087 11.9272 16.5427 11.675L15.791 10.575C15.6249 10.3228 15.3991 10.1155 15.1337 9.97161C14.8682 9.82769 14.5713 9.75156 14.2693 9.75H10.6668C10.1806 9.75 9.71428 9.94315 9.37047 10.287C9.02665 10.6308 8.8335 11.0971 8.8335 11.5833V23.5C8.8335 24.5083 9.6585 25.3333 10.6668 25.3333Z"
                      stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.3335 16.1666V19.8333" stroke="#141414" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18 16.1666V18" stroke="#141414" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M21.6665 16.1666V21.6666" stroke="#141414" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  Project Management</button>
                <button onclick="showTab('Business Management')" id="tab-Business Management"
                  class="px-4 py-2 rounded-full  flex items-center gap-2  hover:bg-black hover:text-white">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="18" r="18" fill="#F7F7F7" />
                    <path
                      d="M10.6668 25.3333H25.3335C25.8197 25.3333 26.286 25.1402 26.6299 24.7964C26.9737 24.4525 27.1668 23.9862 27.1668 23.5V14.3333C27.1668 13.8471 26.9737 13.3808 26.6299 13.037C26.286 12.6932 25.8197 12.5 25.3335 12.5H18.0643C17.7624 12.4984 17.4655 12.4223 17.2 12.2784C16.9345 12.1345 16.7087 11.9272 16.5427 11.675L15.791 10.575C15.6249 10.3228 15.3991 10.1155 15.1337 9.97161C14.8682 9.82769 14.5713 9.75156 14.2693 9.75H10.6668C10.1806 9.75 9.71428 9.94315 9.37047 10.287C9.02665 10.6308 8.8335 11.0971 8.8335 11.5833V23.5C8.8335 24.5083 9.6585 25.3333 10.6668 25.3333Z"
                      stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.3335 16.1666V19.8333" stroke="#141414" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18 16.1666V18" stroke="#141414" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M21.6665 16.1666V21.6666" stroke="#141414" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  Business Management</button>
                <button onclick="showTab('Health & Social Care')" id="tab-Health & Social Care"
                  class="px-4 py-2 rounded-full  flex items-center gap-2  hover:bg-black hover:text-white">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="18" r="18" fill="#F7F7F7" />
                    <path
                      d="M24.4168 19.8333C25.7827 18.495 27.1668 16.8908 27.1668 14.7917C27.1668 13.4545 26.6357 12.1722 25.6902 11.2267C24.7447 10.2812 23.4623 9.75 22.1252 9.75C20.5118 9.75 19.3752 10.2083 18.0002 11.5833C16.6252 10.2083 15.4885 9.75 13.8752 9.75C12.538 9.75 11.2557 10.2812 10.3102 11.2267C9.36467 12.1722 8.8335 13.4545 8.8335 14.7917C8.8335 16.9 10.2085 18.5042 11.5835 19.8333L18.0002 26.25L24.4168 19.8333Z"
                      stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M9.95166 18H15.7083L16.1667 17.0833L18 21.2083L19.8333 14.7916L21.2083 18H26.0392"
                      stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  Health & Social Care</button>
                <button onclick="showTab('Nursing')" id="tab-Nursing"
                  class="px-4 py-2 rounded-full  flex items-center gap-2  hover:bg-black hover:text-white">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="18" r="18" fill="#F7F7F7" />
                    <path d="M18 17.0834V20.75" stroke="#141414" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M19.8332 18.9166H16.1665" stroke="#141414" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M21.6668 12.5V10.6667C21.6668 10.1805 21.4737 9.71416 21.1299 9.37034C20.786 9.02653 20.3197 8.83337 19.8335 8.83337H16.1668C15.6806 8.83337 15.2143 9.02653 14.8705 9.37034C14.5267 9.71416 14.3335 10.1805 14.3335 10.6667V12.5"
                      stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M23.5 12.5V25.3333" stroke="#141414" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M12.5 12.5V25.3333" stroke="#141414" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path
                      d="M25.3335 12.5H10.6668C9.65431 12.5 8.8335 13.3208 8.8335 14.3333V23.5C8.8335 24.5125 9.65431 25.3333 10.6668 25.3333H25.3335C26.346 25.3333 27.1668 24.5125 27.1668 23.5V14.3333C27.1668 13.3208 26.346 12.5 25.3335 12.5Z"
                      stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  Nursing</button>
    
                <button onclick="showTab('Teaching & Education')" id="tab-Teaching & Education"
                  class="px-4 py-2 rounded-full  flex items-center gap-2  hover:bg-black hover:text-white">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="18" r="18" fill="#F7F7F7" />
                    <g clip-path="url(#clip0_221_3949)">
                      <path
                        d="M22.5835 8.83337H13.4168C12.4043 8.83337 11.5835 9.65419 11.5835 10.6667V14.3334C11.5835 15.3459 12.4043 16.1667 13.4168 16.1667H22.5835C23.596 16.1667 24.4168 15.3459 24.4168 14.3334V10.6667C24.4168 9.65419 23.596 8.83337 22.5835 8.83337Z"
                        stroke="#141414" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M25.3335 19.8334H10.6668C9.65431 19.8334 8.8335 20.6542 8.8335 21.6667V25.3334C8.8335 26.3459 9.65431 27.1667 10.6668 27.1667H25.3335C26.346 27.1667 27.1668 26.3459 27.1668 25.3334V21.6667C27.1668 20.6542 26.346 19.8334 25.3335 19.8334Z"
                        stroke="#141414" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M12.5 23.5H14.3333" stroke="#141414" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M18 23.5H23.5" stroke="#141414" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_221_3949">
                        <rect width="22" height="22" fill="white" transform="translate(7 7)" />
                      </clipPath>
                    </defs>
                  </svg>
                  Teaching & Education</button>
                <button onclick="showTab('Six Sigma')" id="tab-Six Sigma"
                  class="px-4 py-2 rounded-full  flex items-center gap-2  hover:bg-black hover:text-white">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="18" r="18" fill="#F7F7F7" />
                    <path d="M8.8335 27.1666H27.1668" stroke="#252525" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M12.8302 22.95L10.6668 22.5833L8.8335 18.9166L9.84183 18.4125C10.0977 18.2835 10.3803 18.2163 10.6668 18.2163C10.9534 18.2163 11.2359 18.2835 11.4918 18.4125L11.6477 18.5041C11.9036 18.6331 12.1861 18.7002 12.4727 18.7002C12.7592 18.7002 13.0418 18.6331 13.2977 18.5041L14.3335 18L11.5835 12.5L12.4085 12.0875C12.7134 11.9374 13.0541 11.8751 13.3924 11.9075C13.7307 11.9399 14.0534 12.0657 14.3243 12.2708L18.0093 15.0208C18.2812 15.2277 18.6056 15.3545 18.9457 15.3869C19.2858 15.4193 19.6283 15.356 19.9343 15.2041L23.7752 13.3158C24.266 13.0684 24.8314 13.0128 25.361 13.16L26.2502 13.4166C26.4339 13.4676 26.6039 13.559 26.7479 13.6839C26.8919 13.8089 27.0063 13.9644 27.0826 14.1391C27.159 14.3138 27.1955 14.5033 27.1895 14.6939C27.1834 14.8845 27.135 15.0713 27.0477 15.2408L26.6993 15.9375C26.4885 16.3591 26.1493 16.7075 25.7185 16.9275L13.9485 22.7666C13.6024 22.938 13.211 22.9958 12.8302 22.9316V22.95Z"
                      stroke="#252525" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  Six Sigma</button>
              </div>
    
              <!-- Courses Section -->
              <div class="mt-12">
                <!-- Tab Content -->
    
                <!-- Project Management -->
                <div id="Project Management" class="tab-content">
                  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($pMCourses as $course): ?>
                      <div class="course-card bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl text-primary overflow-hidden h-24 font-semibold card-title">
                          <a href="<?php echo $course['coursePageLink']; ?>"><?php echo $course['title']; ?></a>
                        </h3>
                        <div class="flex items-center mt-2 border-bottom pb-5">
                          <span class="text-2xl font-bold text-primary"><?php echo $course['price']; ?></span>
                          <span class="ml-2 text-gray-100 font-medium text-lg line-through"><?php echo $course['original_price']; ?></span>
                          <span
                            class="ml-4 px-4 py-2 bg-primary-dark text-black rounded-full text-lg font-semibold">Extra
                            10% OFF</span>
                        </div>
                        <button class="mt-4 text-primary text-lg font-semibold hover:underline"> <a href="<?php echo $course['enrollNowLink']; ?>">Enrol Now</a>
                          →</button>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <div class="text-center mt-8">
                    <button id="toggle-button"
                      class="mt-4 px-4 py-4 rounded-md  border border-black text-accent hover:bg-black hover:text-white"> <a href="<?php echo $pMAllCoursesLink; ?>">View More</a>
                    </button>
                  </div>
                </div>
    
                <!-- Business Management -->
                <div id="Business Management" class="tab-content">
                  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($bMCourses as $course): ?>
                      <div class="course-card bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl text-primary overflow-hidden h-24 font-semibold card-title">
                          <a href="<?php echo $course['coursePageLink']; ?>"><?php echo $course['title']; ?></a>
                        </h3>
                        <div class="flex items-center mt-2 border-bottom pb-5">
                          <span class="text-2xl font-bold text-primary"><?php echo $course['price']; ?></span>
                          <span class="ml-2 text-gray-100 font-medium text-lg line-through"><?php echo $course['original_price']; ?></span>
                          <span
                            class="ml-4 px-4 py-2 bg-primary-dark text-black rounded-full text-lg font-semibold">Extra
                            10% OFF</span>
                        </div>
                        <button class="mt-4 text-primary text-lg font-semibold hover:underline"> <a href="<?php echo $course['enrollNowLink']; ?>">Enrol Now</a>
                          →</button>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <div class="text-center mt-8">
                    <button id="toggle-button"
                      class="mt-4 px-4 py-4 rounded-md  border border-black text-accent hover:bg-black hover:text-white"> <a href="<?php echo $bMAllCoursesLink; ?>">View More</a>
                    </button>
                  </div>
                </div>
    
                <!-- Health & Social Care -->
                <div id="Health & Social Care" class="tab-content">
                  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($healthAndSocialCourses as $course): ?>
                      <div class="course-card bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl text-primary overflow-hidden h-24 font-semibold card-title">
                          <a href="<?php echo $course['coursePageLink']; ?>"><?php echo $course['title']; ?></a>
                        </h3>
                        <div class="flex items-center mt-2 border-bottom pb-5">
                          <span class="text-2xl font-bold text-primary"><?php echo $course['price']; ?></span>
                          <span class="ml-2 text-gray-100 font-medium text-lg line-through"><?php echo $course['original_price']; ?></span>
                          <span
                            class="ml-4 px-4 py-2 bg-primary-dark text-black rounded-full text-lg font-semibold">Extra
                            10% OFF</span>
                        </div>
                        <button class="mt-4 text-primary text-lg font-semibold hover:underline"> <a href="<?php echo $course['enrollNowLink']; ?>">Enrol Now</a>
                          →</button>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <div class="text-center mt-8">
                    <button id="toggle-button"
                      class="mt-4 px-4 py-4 rounded-md  border border-black text-accent hover:bg-black hover:text-white"> <a href="<?php echo $healthAndSocialAllCoursesLink; ?>">View More</a>
                    </button>
                  </div>
                </div>
                <!-- Nursing -->
                <div id="Nursing" class="tab-content">
                  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($nursingCourses as $course): ?>
                      <div class="course-card bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl text-primary overflow-hidden h-24 font-semibold card-title">
                          <a href="<?php echo $course['coursePageLink']; ?>"><?php echo $course['title']; ?></a>
                        </h3>
                        <div class="flex items-center mt-2 border-bottom pb-5">
                          <span class="text-2xl font-bold text-primary"><?php echo $course['price']; ?></span>
                          <span class="ml-2 text-gray-100 font-medium text-lg line-through"><?php echo $course['original_price']; ?></span>
                          <span
                            class="ml-4 px-4 py-2 bg-primary-dark text-black rounded-full text-lg font-semibold">Extra
                            10% OFF</span>
                        </div>
                        <button class="mt-4 text-primary text-lg font-semibold hover:underline"> <a href="<?php echo $course['enrollNowLink']; ?>">Enrol Now</a>
                          →</button>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <div class="text-center mt-8">
                    <button id="toggle-button"
                      class="mt-4 px-4 py-4 rounded-md  border border-black text-accent hover:bg-black hover:text-white"> <a href="<?php echo $nursingAllCoursesLink; ?>">View More</a>
                    </button>
                  </div>
                </div>
    
                <!-- Teaching & Education -->
                <div id="Teaching & Education" class="tab-content">
                  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($teachingCourses as $course): ?>
                      <div class="course-card bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl text-primary overflow-hidden h-24 font-semibold card-title">
                          <a href="<?php echo $course['coursePageLink']; ?>"><?php echo $course['title']; ?></a>
                        </h3>
                        <div class="flex items-center mt-2 border-bottom pb-5">
                          <span class="text-2xl font-bold text-primary"><?php echo $course['price']; ?></span>
                          <span class="ml-2 text-gray-100 font-medium text-lg line-through"><?php echo $course['original_price']; ?></span>
                          <span
                            class="ml-4 px-4 py-2 bg-primary-dark text-black rounded-full text-lg font-semibold">Extra
                            10% OFF</span>
                        </div>
                        <button class="mt-4 text-primary text-lg font-semibold hover:underline"> <a href="<?php echo $course['enrollNowLink']; ?>">Enrol Now</a>
                          →</button>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <div class="text-center mt-8">
                    <button id="toggle-button"
                      class="mt-4 px-4 py-4 rounded-md  border border-black text-accent hover:bg-black hover:text-white"> <a href="<?php echo $teachingAllCoursesLink; ?>">View More</a>
                    </button>
                  </div>
                </div>
    
                <!-- Six Sigma -->
                <div id="Six Sigma" class="tab-content">
                  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($sixSigmaCourses as $course): ?>
                      <div class="course-card bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl text-primary overflow-hidden h-24 font-semibold card-title">
                          <a href="<?php echo $course['coursePageLink']; ?>"><?php echo $course['title']; ?></a>
                        </h3>
                        <div class="flex items-center mt-2 border-bottom pb-5">
                          <span class="text-2xl font-bold text-primary"><?php echo $course['price']; ?></span>
                          <span class="ml-2 text-gray-100 font-medium text-lg line-through"><?php echo $course['original_price']; ?></span>
                          <span
                            class="ml-4 px-4 py-2 bg-primary-dark text-black rounded-full text-lg font-semibold">Extra
                            10% OFF</span>
                        </div>
                        <button class="mt-4 text-primary text-lg font-semibold hover:underline"> <a href="<?php echo $course['enrollNowLink']; ?>">Enrol Now</a>
                          →</button>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <div class="text-center mt-8">
                    <button id="toggle-button"
                      class="mt-4 px-4 py-4 rounded-md  border border-black text-accent hover:bg-black hover:text-white"> <a href="<?php echo $sixSigmaAllCoursesLink; ?>">View More</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Why Choose us -->
    <section class="bg-yellow-100 py-16 mt-14 sm:mt-28 rounded-xl border-secondary max-w-7xl mx-4 xl:mx-auto">
        <div class="">
          <div class="flex items-center gap-3 justify-center">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.5" y="0.5" width="45" height="45" rx="7.5" fill="#F5F5F5" />
              <rect x="0.5" y="0.5" width="45" height="45" rx="7.5" stroke="#535353" />
              <path
                d="M17 33V15C17 14.4696 17.2107 13.9609 17.5858 13.5858C17.9609 13.2107 18.4696 13 19 13H27C27.5304 13 28.0391 13.2107 28.4142 13.5858C28.7893 13.9609 29 14.4696 29 15V33H17Z"
                stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M17 23H15C14.4696 23 13.9609 23.2107 13.5858 23.5858C13.2107 23.9609 13 24.4696 13 25V31C13 31.5304 13.2107 32.0391 13.5858 32.4142C13.9609 32.7893 14.4696 33 15 33H17"
                stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M29 20H31C31.5304 20 32.0391 20.2107 32.4142 20.5858C32.7893 20.9609 33 21.4696 33 22V31C33 31.5304 32.7893 32.0391 32.4142 32.4142C32.0391 32.7893 31.5304 33 31 33H29"
                stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21 17H25" stroke="#141414" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M21 21H25" stroke="#141414" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M21 25H25" stroke="#141414" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M21 29H25" stroke="#141414" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <p class="text-lg sm:text-xl font-semibold text-accent">Why Choose Us?</p>
          </div>
          <h2 class="mt-6 text-xl sm:text-4xl font-semibold dark-gradient-text text-center">Unlock Your Potential with
            Confidence</h2>
          <p class="mt-10 text-lg sm:text-2xl font-normal text-center text-primary lg:w-3/4 mx-auto">Trusted by
            thousands. Accredited certifications, expert-led courses, and unmatched 24/7 support to help you
            succeed.</p>
          <div class="mt-16">
            <div class="mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 text-center gap-3 xl:gap-0">
    
              <!-- Feature 1 -->
              <div class="flex flex-col items-center space-y-4 border-right px-2">
                <img src="https://www.1training.org/wp-content/uploads/2024/11/Willingness-To-Learn.png" alt="Learn Anytime, Anywhere" class="h-12 w-12">
                <h3 class="text-xl font-semibold text-accent">Learn Anytime, Anywhere</h3>
                <p class="text-primary text-lg font-normal">Study on your own schedule with our flexible online
                  courses.</p>
              </div>
    
              <!-- Feature 2 -->
              <div class="flex flex-col items-center space-y-4 border-right px-2">
                <img src="https://www.1training.org/wp-content/uploads/2024/11/Earth-Care.webp"
                  alt="Globally Recognized Certificates" class="h-12 w-12">
                <h3 class="text-xl font-semibold text-accent">Globally Recognized Certificates</h3>
                <p class="text-primary text-lg font-normal">Earn certifications respected by employers
                  worldwide.</p>
              </div>
    
              <!-- Feature 3 -->
              <div class="flex flex-col items-center space-y-4 border-right px-2">
                <img src="https://www.1training.org/wp-content/uploads/2024/11/Lecturer.webp"
                  alt="Learn from Industry Experts" class="h-12 w-12">
                <h3 class="text-xl font-semibold text-accent">Learn from Industry Experts</h3>
                <p class="text-primary text-lg font-normal">Gain insights from experienced professionals leading
                  each course.</p>
              </div>
    
              <!-- Feature 4 -->
              <div class="flex flex-col items-center space-y-4">
                <img src="https://www.1training.org/wp-content/uploads/2024/11/Request-Service.webp"
                  alt="Support When You Need It" class="h-12 w-12">
                <h3 class="text-xl font-semibold text-accent">Support When You Need It</h3>
                <p class="text-primary text-lg font-normal">Our team is available round-the-clock to assist you
                  at any stage.</p>
              </div>
    
            </div>
          </div>
    
        </div>
      </section>

    <section class="mt-14 sm:mt-28">
    <div class="max-w-7xl mx-4 xl:mx-auto rounded-xl py-16 lg:py-28 bg-cover"
      style="background-image: url('https://www.1training.org/wp-content/uploads/2024/11/contact.webp')">
      <div class="flex flex-col items-center justify-center mx-2">
        <div class="text-white text-center">
          <h1 class="text-xl sm:text-2xl font-semibold mb-4 gradient-text">Need Assistance?</h1>
          <p class="text-3xl sm:text-4xl font-semibold mb-8 gradient-text">We're Here to Help 24/7</p>
          <p class="text-lg gradient-text mb-8 font-normal">Our support team is available around the clock to
            answer your questions and provide
            guidance. Contact us now!</p>
          <div class="grid sm:flex gap-4 justify-center">
            <button
              class="bg-black-100 border-ash-100 text-white px-14 py-3 rounded-md text-lg font-medium flex items-center gap-3">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M21.9999 16.92V19.92C22.0011 20.1985 21.944 20.4742 21.8324 20.7293C21.7209 20.9845 21.5572 21.2136 21.352 21.4019C21.1468 21.5901 20.9045 21.7335 20.6407 21.8227C20.3769 21.9119 20.0973 21.9451 19.8199 21.92C16.7428 21.5856 13.7869 20.5341 11.1899 18.85C8.77376 17.3147 6.72527 15.2662 5.18993 12.85C3.49991 10.2412 2.44818 7.27099 2.11993 4.18C2.09494 3.90346 2.12781 3.62476 2.21643 3.36162C2.30506 3.09849 2.4475 2.85669 2.6347 2.65162C2.82189 2.44655 3.04974 2.28271 3.30372 2.17052C3.55771 2.05833 3.83227 2.00026 4.10993 2H7.10993C7.59524 1.99522 8.06572 2.16708 8.43369 2.48353C8.80166 2.79998 9.04201 3.23944 9.10993 3.72C9.23656 4.68006 9.47138 5.62272 9.80993 6.53C9.94448 6.88792 9.9736 7.27691 9.89384 7.65088C9.81408 8.02484 9.6288 8.36811 9.35993 8.64L8.08993 9.91C9.51349 12.4135 11.5864 14.4864 14.0899 15.91L15.3599 14.64C15.6318 14.3711 15.9751 14.1858 16.3491 14.1061C16.723 14.0263 17.112 14.0555 17.4699 14.19C18.3772 14.5285 19.3199 14.7634 20.2799 14.89C20.7657 14.9585 21.2093 15.2032 21.5265 15.5775C21.8436 15.9518 22.0121 16.4296 21.9999 16.92Z"
                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
             <a href="tel:+442081260448"> Call us now </a>
            </button>
            <button class="border-ash-100 text-white px-14 py-3 rounded-md text-lg font-medium">Enquire
              now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Footer -->
    <footer class="bg-[#363A43] py-8 border-t mt-14">
        <div class="container max-w-7xl mx-auto px-4 sm:px-0">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-between mb-10">
            <!-- Logo and Social Links -->
            <div class="space-y-6">
              <a class="navbar-brand flex items-center" href="https://www.1training.org">
                <img src="https://www.1training.org/wp-content/uploads/2019/09/new-logo-light-1.png" data-alt-logo="https://www.1training.org/wp-content/uploads/2019/09/new-logo-light-1.png" id="header_logo" alt="1Training" width="217.217" height="50">
              </a>
              <div class="flex space-x-4">
                <a href="https://www.facebook.com/1training.org/" class="bg-[#FFF3E9] p-3 rounded-full border">
                  <span class="sr-only">Facebook</span>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                  </svg>
                </a>
                <a href="https://www.instagram.com/1training_uk/" class="bg-[#FFF3E9] p-3 rounded-full border">
                  <span class="sr-only">Instagram</span>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                  </svg>
                </a>
                <a href="https://twitter.com/1training_org" class="bg-[#FFF3E9] p-3 rounded-full border">
                  <span class="sr-only">Twitter</span>
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                  </svg>
                </a>
                <a href="https://www.linkedin.com/company/1training-org/" class="bg-[#FFF3E9] p-3 rounded-full border">
                  <span class="sr-only">LinkedIn</span>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                  </svg>
                </a>
    
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    
              <!-- Phone Section -->
              <div>
                <h3 class="text-white text-lg font-semibold mb-3">Phone</h3>
                <a href="tel:+442081260448" class="text-white hover:text-gray-900">
                  020 8126 0448
                </a>
              </div>
    
              <!-- Email Section -->
              <div>
                <h3 class="text-white text-lg font-semibold mb-3">Email</h3>
                <a href="mailto:info@1training.org" class="text-white hover:text-gray-900">
                  info@1training.org
                </a>
              </div>
    
    
              <!-- WhatsApp Section -->
              <div>
                <h3 class="text-white text-lg font-semibold mb-3">WhatsApp</h3>
                <a href="https://web.whatsapp.com/send?phone=447838690099&text=Hi%201training,%20I%20want%20to%20know%20about..." class="text-white hover:text-gray-900">
                  +4478-3869-0099
                </a>
              </div>
    
              <!-- Address Section - Full Width -->
              <div class="md:col-span-3">
                <h3 class="text-white text-lg font-semibold mb-3">Address</h3>
                <p class="text-white">
                  The Clubhouse Holborn,
                  20 St. Andrew street, London.
    
                </p>
              </div>
    
            </div>
          </div>
          <div class="border-t border-gray-300 pt-4">
            <div class="container mx-auto">
              <div class="flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0">
                <p class="text-md text-white text-left">COPYRIGHT © 1TRAINING.ORG 2023
                </p>
                <div class="w-full md:w-auto">
                  <img src="https://www.study365.co.uk/wp-content/uploads/2024/11/footer-payment-logos-mep.png"
                    alt="Payment logos" class="h-8 md:h-12 object-contain mx-auto md:mx-0">
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    
    <script>
        // Set the countdown date
        const countdownDate = new Date("Dec 06, 2024 23:59:59").getTime();
    
        // Update the countdown every 1 second
        const countdownFunction = setInterval(function() {
          const now = new Date().getTime();
          const distance = countdownDate - now;
    
          // Calculate time components
          const days = Math.floor(distance / (1000 * 60 * 60 * 24));
          const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
          // Display the result in the respective elements
          document.getElementById("days").innerText = days < 10 ? "0" + days : days;
          document.getElementById("hours").innerText = hours < 10 ? "0" + hours : hours;
          document.getElementById("minutes").innerText = minutes < 10 ? "0" + minutes : minutes;
          document.getElementById("seconds").innerText = seconds < 10 ? "0" + seconds : seconds;
    
          // If the countdown is over, clear the interval
          if (distance < 0) {
            clearInterval(countdownFunction);
            document.getElementById("countdown").innerHTML = "EXPIRED";
          }
        }, 1000);
    
        // Copy coupon code to clipboard
        function copyCouponCode() {
          const couponCode = document.getElementById("couponCode").innerText;
          navigator.clipboard.writeText(couponCode).then(() => {
            alert("Coupon code copied: " + couponCode);
          }).catch((err) => {
            console.error("Failed to copy text: ", err);
          });
        }
    
        // Function to toggle "View More" and "View Less"
        function toggleCourses() {
          const coursesContainer = document.getElementById('courses-container');
          const viewMoreBtn = document.getElementById('view-more-btn');
    
          if (coursesContainer.classList.contains('max-h-96')) {
            coursesContainer.classList.remove('max-h-96', 'overflow-hidden');
            viewMoreBtn.textContent = 'View Less';
          } else {
            coursesContainer.classList.add('max-h-96', 'overflow-hidden');
            viewMoreBtn.textContent = 'View More';
          }
        }
    
        // Initially hide extra courses by adding max height and overflow
        document.getElementById('courses-container').classList.add('max-h-96', 'overflow-hidden');
      </script>
    
    <script>
        let currentTab = 'Project Management'; // Track the current active tab
        let showingMore = false; // Track if "View More" is active
    
        // Function to show the selected tab
        function showTab(tabId) {
          currentTab = tabId;
          document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));
          document.querySelectorAll('#tabs button').forEach(tab => {
            tab.classList.remove('bg-black', 'text-white', 'border-2', 'border-black');
            tab.classList.add('text-primary', 'border-btn');
          });
          document.getElementById(tabId).classList.remove('hidden');
          document.getElementById(`tab-${tabId}`).classList.add('bg-black', 'text-white');
          showingMore = false;
          document.getElementById('toggle-button').innerText = 'View More';
        }
    
        // Function to toggle between "View More" and "View Less"
        function toggleViewMore() {
          const cards = document.querySelector(`#${currentTab}`).querySelectorAll('.course-card');
    
          if (showingMore) {
            cards.forEach((card, index) => {
              card.style.display = index < 6 ? 'block' : 'none';
            });
            document.getElementById('toggle-button').innerText = 'View More';
          } else {
            cards.forEach(card => card.style.display = 'block');
            document.getElementById('toggle-button').innerText = 'View Less';
          }
    
          showingMore = !showingMore;
        }
    
        // Initialize view on page load
        window.onload = () => {
          showTab('Project Management'); // Set the default tab to display
        };
      </script>
      
    <!-- Brevo Conversations {literal} -->
    <script>
        (function(d, w, c) {
            w.BrevoConversationsID = '659e7a1641df5f2088273a84';
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            var s = d.createElement('script');
            s.async = true;
            s.src = 'https://conversations-widget.brevo.com/brevo-conversations.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'BrevoConversations');
    </script>
    <!-- /Brevo Conversations {/literal} -->
    <!-- PopupSmart -->
    <script src="https://cdn.popupsmart.com/bundle.js" data-id="851049" async defer></script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebPage",
          "about": "Best Black friday & Cyber Monday Deals",
          "keywords": [
            "Online courses free",
            "online courses with certificates",
            "free online courses UK",
            "online courses with qualifications",
            "online courses UK with certification",
            "free online courses with certificates UK",
            "government free online courses with certificates",
            "online courses UK for adults",
            "Black Friday online course deals",
            "online courses UK Black Friday",
            "best Black Friday deals for online education",
            "online courses Black Friday discounts",
            "top online courses Black Friday",
            "Affordable Cyber Monday online courses discounts",
            "Best Cyber Monday deals on online education",
            "Top e-learning platforms Cyber Monday offers",
            "Cyber Monday certification course deals",
            "Cyber Monday Skillshare course discounts",
            "Exclusive Cyber Monday course bundles",
            "Cheapest courses for Cyber Monday 2024",
            "Cyber Monday AI and machine learning course offers",
            "PRINCE2 Cyber Monday",
            "Cyber Monday courses",
            "Cyber Monday project management",
            "Cyber Monday online courses",
            "Online Course Cyber Monday sale",
            "Cyber Monday certification",
            "Cyber Monday certification deals",
            "online course Black Friday sale",
            "Cyber Monday certification deals",
            "Black Friday training UK",
            "Cyber deals UK",
            "Black Monday sales UK",
            "Cyber Monday websites UK"
          ]
        }
        </script>

</body>
