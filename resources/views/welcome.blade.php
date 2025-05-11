<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abhey Thakur</title>
  
  <!--========== Swiper CSS ==========-->
  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

  <!--========== Main style sheet ==========-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!--========== Remixicon ==========-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
  
  <!--========== ScrollReveal JS ==========-->
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  
</head>
<body>

  <!--========== Customized cursor ==========-->
  <div class="cursor">
    <div class="cursor-dot"></div>
    <div class="cursor-circle"></div>
  </div>

  <!--========== To top button with scroll indicator bar ==========-->
  <div class="to-top-btn">
    <a href="#home"><span>To Top</span></a>
    <div class="scroll-indicator-bar"></div>
  </div>

  <!--========== Header ==========-->
  <header class="abhey-header">
    <div class="abhey-container">
      <div class="inner">
        <div class="abhey-logo">
          <a href="#"><span>Abhey</span></a>
        </div>
        <div class="header-btns">
          <a href="#contact" class="abhey-btn-link">
            <div class="abhey-main-btn border-btn lets-talk-btn">Let's talk</div>
          </a>
          <a href="#contact" class="lets-talk-icon"><i class="ri-mail-line"></i></a>
          <div class="theme-btn" title="Toggle theme">
            <i class="ri-sun-fill sun-icon"></i>
            <i class="ri-moon-fill moon-icon"></i>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!--========== Bottom navigation menu ==========-->
  <div class="bottom-nav-container">
    <div class="bottom-nav">
      <div class="bottom-nav-inner">
        <i class="ri-arrow-left-down-line menu-hide-btn"></i>
            <ul class="menu">
                <li class="menu-item"><a href="#home" class="scroll-link current"><i class="ri-home-4-line"></i><span>Home</span></a></li>
                <li class="menu-item"><a href="#about" class="scroll-link"><i class="ri-user-line"></i><span>About</span></a></li>
                <li class="menu-item"><a href="#resume" class="scroll-link"><i class="ri-quote-text"></i><span>Resume</span></a></li>
                <li class="menu-item"><a href="#service" class="scroll-link"><i class="ri-service-line"></i><span>Services</span></a></li>
                <li class="menu-item"><a href="#portfolio" class="scroll-link"><i class="ri-briefcase-line"></i><span>Portfolio</span></a></li>
                <li class="menu-item"><a href="#contact" class="scroll-link"><i class="ri-chat-1-line"></i><span>Contact</span></a></li>
            </ul>
      </div>
    </div>
    <div class="menu-show-btn">
      <div class="bar-01"></div>
      <div class="bar-02"></div>
    </div>
  </div>

  <!--========== Home ==========-->
  <section class="abhey-section nav-menu-section" id="home">
    <div class="abhey-container home-container">
      <div class="abhey-wrapper">
        <div class="home-social">
          <span>Follow On</span>
          <div class="social-line"></div>
          <ul class="social-icons">
            <li><a href="https://www.linkedin.com/in/abheythakur" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
            <li><a href="https://github.com/abheythakur" target="_blank"><i class="ri-github-fill"></i></a></li>
          </ul>
        </div>
        <div class="avatar-container">
          <a href="#contact" class="abhey-btn-link">
            <div class="abhey-main-btn fill-btn hire-btn-01">Hire Me <i class="ri-user-follow-line"></i></div>
          </a>
          <div class="avatar-img">
            <img src="assets/images/avatar images/avatar-img-blue.png" alt="Abhey Thakur Avatar">
          </div>
          <div class="avatar-info">
            <div class="text-content">
              <h4 class="hello-text">Hello, I'm</h4>
              <h1 class="my-name">Abhey Thakur</h1>
              <p class="what-i-do">Full Stack Web Developer specializing in PHP & MERN Stack</p>
            </div>
            <a href="#contact" class="abhey-btn-link">
              <div class="abhey-main-btn fill-btn hire-btn-02">Hire Me <i class="ri-user-follow-line"></i></div>
            </a>
            
          </div>
        </div>
        <a href="#about" class="home-scroll-btn">
          <i class="ri-mouse-line mouse-icon"></i>
          <div>Scroll Down</div>
          <i class="ri-arrow-down-s-line arrow-icon"></i>
        </a>
      </div>
    </div>
  </section>

  <!--========== About Me ==========-->
  <section class="abhey-section nav-menu-section" id="about">
    <div class="abhey-container abhey-sub-container">
      <div class="abhey-wrapper">
        <div class="section-title about-title">
          <h3>About Me</h3>
          <p>What I do</p>
        </div>
        <div class="section-content">
          <div class="about-img">
            <img src="assets/images/avatar images/about-img.jpg" alt="Abhey Thakur Portrait">
          </div>
          <div class="about-details">
            <div class="about-info">
              <h4 class="iam">I'm a Full-Stack Web Developer</h4>
              <p class="about-description">I'm a web developer from Himachal Pradesh, India, with 1.5 years of experience in PHP, Laravel, and MERN stack. I've built efficient web applications, including school management systems and communication portals, for educational and small business clients.</p>          </div>
            <div class="pro-list">
              <div class="pro-card">
                <span>1.5</span>
                <p>Years Of Experience</p>
              </div>
              <div class="pro-card">
                <span>5+</span>
                <p>Client Projects</p>
              </div>
              <div class="pro-card">
                <span>High</span>
                <p>Client Satisfaction</p>
              </div>             
            </div>
            <div class="about-buttons">
              <a href="#contact" class="abhey-btn-link">
                <div class="abhey-main-btn fill-btn">Hire Me <i class="ri-user-follow-line"></i></div>
              </a>
              <a href="assets/pdf/Abhey_Thakur_CV.pdf" class="abhey-btn-link" download>
                <div class="abhey-main-btn border-btn">Download CV</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--========== My Resume ==========-->
  <section class="abhey-section nav-menu-section" id="resume">
    <div class="abhey-container abhey-sub-container">
      <div class="abhey-wrapper">
        <div class="section-title">
          <h3>My Resume</h3>
          <p>Combination Of Skills & Experience</p>
        </div>
        <div class="resume-tabs">
          <a class="tab-btn active"><i class="ri-graduation-cap-line"></i>Education</a>
          <a class="tab-btn"><i class="ri-sparkling-line"></i>Experience</a>
          <a class="tab-btn"><i class="ri-user-settings-line"></i>Personal Skills</a>
        </div>
        <div class="section-content">
          <div class="resume-tab-content education active">
            <div class="resume-line"></div>
            <div class="resume-items">
              <div class="item item-left">
                <div class="info">
                  <i class="ri-graduation-cap-fill"></i>
                  <div>
                    <h5>BCA</h5>
                    <p>MAHGU - University </p>
                    <span>2020-2023</span>
                  </div>
                </div>
              </div>

              <div class="item item-right">
                <div class="info">
                  <i class="ri-graduation-cap-fill"></i>
                  <div>
                    <h5>Twelfth</h5>
                  <p>HPBOSE - Hamirpur</p>
                  <span>2018-2019</span>
                  </div>
                </div>
              </div>

              <div class="item item-left">
                <div class="info">
                  <i class="ri-graduation-cap-fill"></i>
                  <div>
                    <h5>Matric</h5>
                    <p>HPBOSE - Hamirpur</p>
                    <span>2016-2017</span>
                  </div>
                </div>
              </div>
              <div class="item item-right">
                <div class="info">
                  <i class="ri-graduation-cap-fill"></i>
                  <div>
                    <h5>Web Development Training</h5>
                    <p>Duke Infosys & 30 Days Coding (Online)</p>
                    <span>2023-2025</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="resume-tab-content experience">
            <div class="resume-line"></div>
            <div class="resume-items">

              <div class="item item-left">
                <div class="info">
                  <i class="ri-sparkling-fill"></i>
                  <div>
                    <h5>Web Developer</h5>
                    <p>Duke Infosys, Chandigarh</p>
                    <span>2023-2024</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="resume-tab-content personal-skills">
            <div class="skill-container">
              <div class="skill-card">
                <div class="skill-title">
                  <i class="ri-code-box-fill"></i>
                  <span>Web Development Skills</span>
                </div>
                <div class="skill-categories">
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>HTML</h5>
                      <span>Advanced</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>CSS</h5>
                      <span>Advanced</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>JavaScript</h5>
                      <span>Intermediate</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>React.js</h5>
                      <span>Intermediate</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>Bootstrap</h5>
                      <span>Advanced</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>PHP</h5>
                      <span>Advanced</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>MySQL</h5>
                      <span>Advanced</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="skill-card">
                <div class="skill-title">
                  <i class="ri-git-repository-fill"></i>
                  <span>Development Tools & Frameworks</span>
                </div>
                <div class="skill-categories">
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>Git</h5>
                      <span>Advanced</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>GitHub</h5>
                      <span>Advanced</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>jQuery</h5>
                      <span>Intermediate</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>Laravel</h5>
                      <span>Advanced</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>Node.js</h5>
                      <span>Intermediate</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>Express.js</h5>
                      <span>Intermediate</span>
                    </div>
                  </div>
                  <div class="skill">
                    <i class="ri-checkbox-circle-fill"></i>
                    <div class="skill-info">
                      <h5>MongoDB</h5>
                      <span>Intermediate</span>
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

  <!--========== Services ==========-->
  <section class="abhey-section nav-menu-section" id="service">
    <div class="abhey-container abhey-sub-container">
      <div class="abhey-wrapper">
        <div class="section-title">
          <h3>Services</h3>
          <p>What I Provide</p>
        </div>
        <div class="section-content">
          <div class="service-container">

            <div class="card-with-modal">
              <div class="service-card">
                <div class="service-info">
                  <i class="ri-pencil-ruler-2-fill service-icon"></i>
                  <h4>Tailored Apps</h4>
                  <a class="service-see-more">See more <i class="ri-arrow-right-up-fill"></i></a>
                </div>
              </div>

              <div class="service-modal-backdrop">
                <div class="service-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-title">
                      <h3>Tailored Apps</h3>
                      <p>Specializing in Tailored Apps that solve unique business challenges efficiently.</p>
                    </div>
                    <h4>What I Provide</h4>
                    <ul class="my-services">
                      <li><i class="ri-checkbox-circle-fill"></i> School management tools</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Staff scheduling applications</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Database integration</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Scalability features</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Authentication systems</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Testing and quality assurance</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Support deployment processes</li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal">
              <div class="service-card">
                <div class="service-info">
                  <i class="ri-image-edit-line service-icon"></i>
                  <h4>Web Expertise</h4>
                  <a class="service-see-more">See more <i class="ri-arrow-right-up-fill"></i></a>
                </div>
              </div>

              <div class="service-modal-backdrop">
                <div class="service-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-title">
                      <h3>Web Expertise</h3>
                      <p>Leveraging Web Expertise to build responsive and scalable digital solutions.</p>
                    </div>
                    <h4>What I Provide</h4>
                    <ul class="my-services">
                      <li><i class="ri-checkbox-circle-fill"></i> Responsive website design</li>
                      <li><i class="ri-checkbox-circle-fill"></i> E-commerce platforms</li>
                      <li><i class="ri-checkbox-circle-fill"></i> CMS integration</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Performance optimization</li>
                      <li><i class="ri-checkbox-circle-fill"></i> SEO enhancement</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Ongoing maintenance</li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal">
              <div class="service-card">
                <div class="service-info">
                  <i class="ri-align-item-left-fill service-icon"></i>
                  <h4>User Experience</h4>
                  <a class="service-see-more">See more <i class="ri-arrow-right-up-fill"></i></a>
                </div>
              </div>

              <div class="service-modal-backdrop">
                <div class="service-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-title">
                      <h3>User Experience</h3>
                      <p>Enhancing User Experience through intuitive and impactful design strategies.</p>
                    </div>
                    <h4>What I Provide</h4>
                    <ul class="my-services">
                      <li><i class="ri-checkbox-circle-fill"></i> User research and analysis</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Wireframing and prototyping</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Visual design creation</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Usability testing</li>
                      <li><i class="ri-checkbox-circle-fill"></i> Design system development</li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--========== Portfolio ==========-->
  <section class="abhey-section nav-menu-section" id="portfolio">
    <div class="abhey-container abhey-sub-container">
      <div class="abhey-wrapper">
        <div class="section-title">
          <h3>Portfolio</h3>
          <p>My Creative Works</p>
        </div>
        <div class="portfolio-tabs">
          <a class="tab-btn active" data-filter="all">All</a>
          <a class="tab-btn" data-filter="web-design">Web Design</a>
          <a class="tab-btn" data-filter="ui-design">UX/UI Design</a>
          <a class="tab-btn" data-filter="photoshop">Photoshop</a>
          <a class="tab-btn" data-filter="templates">Templates</a>
        </div>
        <div class="section-content">
          <div class="portfolio-container">

            <div class="card-with-modal web-design">
              <div class="portfolio-card">
                <div class="card-img">
                  <img src="assets/images/portfolio images/portfolio-img-01.jpg" alt="">
                </div>
                <div class="card-info">
                  <span>Web design</span>
                  <h4>Dynamic</h4>
                  <i class="ri-arrow-right-up-line card-btn"></i>
                </div>
              </div>

              <div class="portfolio-modal-backdrop">
                <div class="portfolio-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-img">
                      <img src="assets/images/portfolio images/portfolio-img-01.jpg" alt="">
                    </div>
                    <h4 class="modal-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal ui-design">
              <div class="portfolio-card">
                <div class="card-img">
                  <img src="assets/images/portfolio images/portfolio-img-02.jpg" alt="">
                </div>
                <div class="card-info">
                  <span>UI/UX Design</span>
                  <h4>Submarine</h4>
                  <i class="ri-arrow-right-up-line card-btn"></i>
                </div>
              </div>

              <div class="portfolio-modal-backdrop">
                <div class="portfolio-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-img">
                      <img src="assets/images/portfolio images/portfolio-img-02.jpg" alt="">
                    </div>
                    <h4 class="modal-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal templates">
              <div class="portfolio-card">
                <div class="card-img">
                  <img src="assets/images/portfolio images/portfolio-img-03.jpg" alt="">
                </div>
                <div class="card-info">
                  <span>Templates</span>
                  <h4>Seven Studio</h4>
                  <i class="ri-arrow-right-up-line card-btn"></i>
                </div>
              </div>

              <div class="portfolio-modal-backdrop">
                <div class="portfolio-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-img">
                      <img src="assets/images/portfolio images/portfolio-img-03.jpg" alt="">
                    </div>
                    <h4 class="modal-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal photoshop">
              <div class="portfolio-card">
                <div class="card-img">
                  <img src="assets/images/portfolio images/portfolio-img-04.jpg" alt="">
                </div>
                <div class="card-info">
                  <span>Photoshop</span>
                  <h4>Raven Studio</h4>
                  <i class="ri-arrow-right-up-line card-btn"></i>
                </div>
              </div>

              <div class="portfolio-modal-backdrop">
                <div class="portfolio-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-img">
                      <img src="assets/images/portfolio images/portfolio-img-04.jpg" alt="">
                    </div>
                    <h4 class="modal-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal web-design">
              <div class="portfolio-card">
                <div class="card-img">
                  <img src="assets/images/portfolio images/portfolio-img-05.jpg" alt="">
                </div>
                <div class="card-info">
                  <span>Web design</span>
                  <h4>Pro Studio</h4>
                  <i class="ri-arrow-right-up-line card-btn"></i>
                </div>
              </div>

              <div class="portfolio-modal-backdrop">
                <div class="portfolio-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-img">
                      <img src="assets/images/portfolio images/portfolio-img-05.jpg" alt="">
                    </div>
                    <h4 class="modal-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal templates">
              <div class="portfolio-card">
                <div class="card-img">
                  <img src="assets/images/portfolio images/portfolio-img-06.jpg" alt="">
                </div>
                <div class="card-info">
                  <span>Templates</span>
                  <h4>Design One</h4>
                  <i class="ri-arrow-right-up-line card-btn"></i>
                </div>
              </div>
              
              <div class="portfolio-modal-backdrop">
                <div class="portfolio-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-img">
                      <img src="assets/images/portfolio images/portfolio-img-06.jpg" alt="">
                    </div>
                    <h4 class="modal-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal ui-design">
              <div class="portfolio-card">
                <div class="card-img">
                  <img src="assets/images/portfolio images/portfolio-img-07.jpg" alt="">
                </div>
                <div class="card-info">
                  <span>UX/UI Design</span>
                  <h4>Color Seven</h4>
                  <i class="ri-arrow-right-up-line card-btn"></i>
                </div>
              </div>

              <div class="portfolio-modal-backdrop">
                <div class="portfolio-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-img">
                      <img src="assets/images/portfolio images/portfolio-img-07.jpg" alt="">
                    </div>
                    <h4 class="modal-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-with-modal web-design">
              <div class="portfolio-card">
                <div class="card-img">
                  <img src="assets/images/portfolio images/portfolio-img-08.jpg" alt="">
                </div>
                <div class="card-info">
                  <span>Web Design</span>
                  <h4>Grid Studio</h4>
                  <i class="ri-arrow-right-up-line card-btn"></i>
                </div>
              </div>

              <div class="portfolio-modal-backdrop">
                <div class="portfolio-modal">
                  <a class="modal-close-btn"><i class="ri-close-line"></i></a>
                  <div class="modal-content">
                    <div class="modal-img">
                      <img src="assets/images/portfolio images/portfolio-img-08.jpg" alt="">
                    </div>
                    <h4 class="modal-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ipsam quod odio ad, quibusdam consectetur architecto magni tenetur vero at aspernatur possimus fuga nostrum eligendi, earum quisquam dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem inventore earum corporis est quo praesentium beatae laudantium nisi reiciendis eius, voluptate tenetur ullam autem dignissimos, nulla minus repellat, maiores sunt.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="testimonials">
        <div class="section-title">
          <h3>Awesome Clients</h3>
          <p>Words From My Clients</p>
        </div>
        <div class="section-content">
          <div class="swiper abhey-client-swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="client-img">
                  <img src="assets/images/client images/client-img-01.jpg" alt="">
                </div>
                <div class="client-details">
                  <h3>Sahil Thakur</h3>
                  <span>Manager, Hotel Industry</span>
                  <p>I am thoroughly impressed with the website developed for our hotel. The design is both intuitive and professional, significantly enhancing our online presence.</p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="client-img">
                  <img src="assets/images/client images/client-img-02.jpg" alt="">
                </div>
                <div class="client-details">
                  <h3>Lovesh Thakur</h3>
                  <span>Business Analyst, Tech Firm</span>
                  <p>The support provided for our business portal was exceptional. The solutions were delivered with efficiency and reliability, meeting all our expectations.</p>                
                </div>
              </div>

              <div class="swiper-slide">
                <div class="client-img">
                  <img src="assets/images/client images/client-img-03.jpg" alt="">
                </div>
                <div class="client-details">
                  <h3>Aman Kumar</h3>
                  <span>Coordinator, Sports Department</span>
                  <p>The scheduling application for our sports events was expertly crafted. It has streamlined our operations and improved overall efficiency.</p>                
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client-img">
                  <img src="assets/images/client images/client-img-03.jpg" alt="">
                </div>
                <div class="client-details">
                  <h3>Sonali</h3>
                  <span>Influencer, Online Cloth Marketing</span>
                  <p>The e-commerce platform developed for my clothing brand has significantly boosted my online sales. The design and functionality are outstanding.</p>                
                </div>
              </div>
            </div>
            <div class="swiper-button-next">
              <i class="ri-arrow-right-s-line"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="ri-arrow-left-s-line"></i>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--========== Contact Me ==========-->
  <section class="abhey-section nav-menu-section" id="contact">
    <div class="abhey-container abhey-sub-container">
      <div class="abhey-wrapper">
        <div class="section-title">
          <h3>Contact Me</h3>
          <p>Get In Touch</p>
        </div>
        <div class="section-content">
          <div class="contact-container">

            <div class="contact-info">
              <h3>Contact Info</h3>
              <ul class="contact-details">

                <li class="contact-item">
                  <div class="contact-icon">
                    <i class="ri-mail-send-fill"></i>
                  </div>
                  <div class="contact-method">
                    <span>E-mail</span>
                    <h4>abheythakur545@gmail.com</h4>
                    <a href="mailto:abheythakur545@gmail.com" target="_blank"><span>Send <i class="ri-arrow-right-up-line"></i></span></a>
                  </div>
                </li>
                <li class="contact-item">
                  <div class="contact-icon">
                    <i class="ri-whatsapp-line"></i>
                  </div>
                  <div class="contact-method">
                    <span>Whatsapp</span>
                    <h4>+91 8580536393</h4>
                    <a href="https://wa.me/+918580536393?text=Hello%20there!%20How%20can%20I%20help%20you?" target="_blank"><span>Send <i class="ri-arrow-right-up-line"></i></span></a>
                  </div>
                </li>

                <li class="contact-item">
                  <div class="contact-icon">
                    <i class="ri-instagram-fill"></i>
                  </div>
                  <div class="contact-method">
                    <span>Instagram</span>
                    <h4>World Wallet</h4>
                    <a href="https://www.instagram.com/_worldwallet" target="_blank"><span>View Profile <i class="ri-arrow-right-up-line"></i></span></a>
                  </div>
                </li>

              </ul>

              <h3>Social Info</h3>
              <ul class="contact-social-links">
                <li><a href=""><i class="ri-facebook-fill"></i></a></li>
                <li><a href=""><i class="ri-twitter-x-fill"></i></a></li>
                <li><a href=""><i class="ri-linkedin-fill"></i></a></li>
              </ul>

            </div>

            <div class="contact-form-body">
              <h2>Let's work <span>together.</span></h2>
              <p>Feel free to fill out the form below to get in touch with me. I’m available to assist you 24/7, though I might be occupied with projects for a few days at times. Please bear with me during those periods, and I’ll respond as soon as possible. You can also reach me via email, WhatsApp, or Instagram for quicker communication.</p>              <form action="" method="POST" id="abhey-contact-form">
                <div class="input-group">
                  <input type="text" name="full-name" placeholder="Your Name *" required>
                </div>
                <div class="input-group">
                  <input type="text" name="email" placeholder="Your Email *" required>
                </div>
                <div class="input-group">
                  <input type="text" name="subject" placeholder="Your Subject *" required>
                </div>
                <div class="input-group">
                  <textarea name="message" placeholder="Your Message *" required></textarea>
                </div>
                <div class="input-group send-message">
                  <button class="abhey-main-btn fill-btn submit-btn" name="submit" type="submit">Send Message</button>
                  <div class="contact-form-alert"></div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--========== Footer ==========-->
  <footer class="abhey-footer">
    <div class="abhey-container">
      <div class="inner">
        <div class="abhey-logo">
          <a href="#home"><span>Abhey Thakur</span></a>
        </div>
        <ul class="footer-menu">
          <li class="menu-item"><a href="#about">About</a></li>
          <li class="menu-item"><a href="#resume">Resume</a></li>
          <li class="menu-item"><a href="#service">Service</a></li>
          <li class="menu-item"><a href="#portfolio">Portfolio</a></li>
        </ul>
        <p class="copy-right">© 2025 <a href="">Abhey Thakur</a>, All rights reserved. </p>
      </div>
    </div>
  </footer>

  <!--========== Swiper JS ==========-->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
  <!--========== EmailJS ==========-->
<script src="{{ asset('js/email.min.js') }}"></script>
  <!--========== Main javascript ==========-->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>