<!DOCTYPE html>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/style.css">

        <title>Responsive Portfolio Website</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
          <nav class="nav container">
              <a href="#" class="nav__logo">Hicham</a>
              <div class="nav__menu" id="nav-menu">
                  <ul class="nav__list grid">
                      <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Acceuil
                        </a>
                      </li>
                      <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> A propos
                        </a>
                      </li>
                      <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Compétences
                        </a>
                      </li>
                      <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i> Services
                        </a>
                      </li>
                      <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Portfolio
                        </a>
                      </li>
                      <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> Me Contacter
                        </a>
                      </li>
                  </ul>
                  <i class="uil uil-times nav__close nav__icon" id="nav-close"></i>
              </div>

              <div class="nav__btns">
                <!-- Them change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                  <div class="nav__toogle" id="nav-toogle">
                    <i class="uil uil-apps"></i>  
                  </div>
              </div>
          </nav>  
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
               <div class="home__container container grid">
                 <div class="home__content grid">
                   <div class="home__social">
                    <a href="https://www.linkedin.com/in/hicham-saidi-b14512221/" target="_blank" class="home__social-icon">
                      <i class="uil uil-linkedin-alt"></i>
                    </a>

                    <a href="http://jojoworld.herokuapp.com/" target="_blank" class="home__social-icon">
                      <i class="uil uil-dribbble"></i>
                    </a>
                     
                    <a href="https://github.com/hicham68" target="_blank" class="home__social-icon">
                      <i class="uil uil-github-alt"></i> 
                    </a>
                   </div>
                   <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <mask id="mask0" mask-type="alpha">
                          <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                          130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                          97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                          0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                      </mask>
                      <g mask="url(#mask0)">
                          <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                          165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                          129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                          -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                          <image class="home__blob-img" x='18' y='18' xlink:href="assets/img/profil.png"/>
                      </g>
                  </svg>
                   </div>
                   <div class="home__data">
                      <h1 class="home__title">Salut je m'appelle Hicham Saidi</h1>
                      <h3 class="home__subtitle">Développeur full stack</h3>
                      <p class="home__description">Haut niveaux d'expérience en web design et développement, produit un travail de qualité !</p>
                      <a href="#contact" class="button button--flex">
                      Me contacter <i class="uil uil-message button__icon"></i>
                      </a>
                   </div>
                 </div>
                 <div class="home__scroll">
                   <a href="#about" class="home__scroll-button button--flex">
                    <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                    <span class="home__sroll-name">Tout défiler</span>
                    <i class="uil uil-arrow-down home__scroll-arrow"></i>
                   </a>
                 </div>
               </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
              <h2 class="section__title">A propos</h2>
              <span class="section__subtitle">Introduction</span>
              
              <div class="about__container container grid">
                <img src="assets/img/about.jpg" alt="" class="about__img">
                
                <div class="about__data">
                   <p class="about__description">Développeur web, avec de grandes connaissances et plusieurs années d'expérience, travaille dans les techniques web, fournissant un travail de qualité.</p>
                    
                    <div class="about__info">
                      <div>
                        <span class="about__info-title">02+</span>
                        <span class="about__info-name">Ans <br> d'expérience</span>
                      </div>
                    

                    
                      <div>
                        <span class="about__info-title">02+</span>
                        <span class="about__info-name">Projets <br> compléter</span>
                      </div>
                    

                    
                      <div>
                        <span class="about__info-title">02+</span>
                        <span class="about__info-name">Travails <br> en entreprise</span>
                      </div>
                    

                      
                    </div>
                    <div class="about__buttons">
                      <a download="" href="assets/pdf/pdf-exemple.pdf" class="button button--flex">
                        Télécharger CV <i class="uil uil-download-alt button__icon"></i>
                      </a>
                    </div>
                </div>
              </div>
            </section>

            <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
              <h2 class="section__title">Compétences</h2>
              <span class="section__subtitle">Mon niveau technique</span>

              <div class="skills__container container grid">

                <div>
                  <!--==================== SKILLS 1====================-->
                  <div class="skills__content skills__open">

                    <div class="skills__header">
                      <i class="uil uil-brackets-curly skills__icon"></i>

                      <div>
                        <h1 class="skills__titles">Frontend développeur</h1>
                        <span class="skills__subtitle">Plus de 1 an</span>
                      </div>
                      <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="skills__list grid">
                      <div class="skills__data">
                        <div class="skills__titles">
                          <h3 class="skills__name">HTML</h3>
                          <span class="skills__number">90%</span>
                        </div>
                        <div class="skills__bar">
                          <span class="skills__percentage skills__html"></span>
                        </div>
                      </div>

                      <div class="skills__data">
                        <div class="skills__titles">
                          <h3 class="skills__name">CSS</h3>
                          <span class="skills__number">80%</span>
                        </div>
                        <div class="skills__bar">
                          <span class="skills__percentage skills__css"></span>
                        </div>
                      </div>

                      <div class="skills__data">
                        <div class="skills__titles">
                          <h3 class="skills__name">JavaScript</h3>
                          <span class="skills__number">70%</span>
                        </div>
                        <div class="skills__bar">
                          <span class="skills__percentage skills__js"></span>
                        </div>
                      </div>

                      <div class="skills__data">
                        <div class="skills__titles">
                          <h3 class="skills__name">React</h3>
                          <span class="skills__number">60%</span>
                        </div>
                        <div class="skills__bar">
                          <span class="skills__percentage skills__php"></span>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                   <!--==================== SKILLS 2 ====================-->
                   <div class="skills__content skills__close">

                    <div class="skills__header">
                      <i class="uil uil-server-network skills__icon"></i>

                      <div>
                        <h1 class="skills__titles">Backend développeur</h1>
                        <span class="skills__subtitle">Plus de 1 an</span>
                      </div>
                      <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="skills__list grid">
                      <div class="skills__data">
                        <div class="skills__titles">
                          <h3 class="skills__name">PHP</h3>
                          <span class="skills__number">70%</span>
                        </div>
                        <div class="skills__bar">
                          <span class="skills__percentage skills__php"></span>
                        </div>
                      </div>

                      <div class="skills__data">
                        <div class="skills__titles">
                          <h3 class="skills__name">NodeJS</h3>
                          <span class="skills__number">80%</span>
                        </div>
                        <div class="skills__bar">
                          <span class="skills__percentage skills__node"></span>
                        </div>
                      </div>

                      <div class="skills__data">
                        <div class="skills__titles">
                          <h3 class="skills__name">FireBase</h3>
                          <span class="skills__number">70%</span>
                        </div>
                        <div class="skills__bar">
                          <span class="skills__percentage skills__firebase"></span>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <!--==================== SKILLS 3 ====================-->
                  <div class="skills__content skills__close">

                    <div class="skills__header">
                      <i class="uil uil-swatchbook skills__icon"></i>

                      <div>
                        <h1 class="skills__titles">Designer</h1>
                        <span class="skills__subtitle">Plus de 1 an</span>
                      </div>
                      <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="skills__list grid">
                      <div class="skills__data">
                        <div class="skills__titles">
                          <h3 class="skills__name">Photoshop</h3>
                          <span class="skills__number">70%</span>
                        </div>
                        <div class="skills__bar">
                          <span class="skills__percentage skills__photoshop"></span>
                        </div>
                      </div>

                      

                     
                      </div>
                      
                    </div>
                  </div>
                
                </div>

                <div>

                </div>

              </div>
            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
              <h2 class="section__title">Qualification</h2>
              <span class="section__subtitle">Mon parcours</span>
            
              <div class="qualication__container container">
                <div class="qualification__tabs">
                  <div class="qualification__button button--flex qualification__active" data-target="#education">
                    <i class="uil uil-graduation-cap qualification__icon"></i>
                      Education

                  </div>
                  <div class="qualification__button button--flex" data-target="#work">
                    <i class="uil uil-briefcase-alt qualication__icon"></i>
                      Travaux

                  </div>

                </div>
                <div class="qualification__sections">
                  <!--==================== QUALIFICATION CONTENT 1 ====================-->
                  <div class="qualification__content qualification__active" data-content id="education">
                    <!--==================== QUALIFICATION 1 ====================-->
                    <div class="qualification__data">
                      <div>
                        <h3 class="qualification__title">Certification Openclassroom</h3>
                        <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                        <div class="qualification__calendar">
                          <i class="uil uil-calendar-alt"></i>
                          2021
                        </div>
                      </div>

                      <div>
                        <span class="qualification__rounder"></span>
                        <span class="qualification__line"></span>
                      </div>

                    </div>

                     <!--==================== QUALIFICATION 2 ====================-->
                     <div class="qualification__data">
                       <div></div>

                      <div>
                        <span class="qualification__rounder"></span>
                        <span class="qualification__line"></span>
                      </div>

                      <div>
                        <h3 class="qualification__title">Certification Openclassroom</h3>
                        <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                        <div class="qualification__calendar">
                          <i class="uil uil-calendar-alt"></i>
                          2021
                        </div>
                      </div>


                    </div>

                     <!--==================== QUALIFICATION 3 ====================-->
                     <div class="qualification__data">
                      <div>
                        <h3 class="qualification__title">Certification Openclassroom</h3>
                        <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                        <div class="qualification__calendar">
                          <i class="uil uil-calendar-alt"></i>
                          2021
                        </div>
                      </div>

                      <div>
                        <span class="qualification__rounder"></span>
                        <span class="qualification__line"></span>
                      </div>

                    </div>

                    <!--==================== QUALIFICATION 4 ====================-->
                     <div class="qualification__data">
                       <div></div>

                      <div>
                        <span class="qualification__rounder"></span>
                        <span class="qualification__line"></span>
                      </div>

                      <div>
                        <h3 class="qualification__title">Certification Openclassroom</h3>
                        <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                        <div class="qualification__calendar">
                          <i class="uil uil-calendar-alt"></i>
                          2021
                        </div>
                      </div>


                    </div>

                     <!--==================== QUALIFICATION 5 ====================-->
                     <div class="qualification__data">
                      

                     

                      <div>
                        <h3 class="qualification__title">Certification Openclassroom</h3>
                        <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                        <div class="qualification__calendar">
                          <i class="uil uil-calendar-alt"></i>
                          2021
                        </div>
                      </div>

                        <div>
                        <span class="qualification__rounder"></span>
                        <!-- <span class="qualification__line"></span> -->
                      </div>

                    </div>
                  </div>
                      <!--==================== QUALIFICATION CONTENT 2 ====================-->
                      <div class="qualification__content" data-content id="work">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                          <div>
                            <h3 class="qualification__title">Cert</h3>
                            <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                            <div class="qualification__calendar">
                              <i class="uil uil-calendar-alt"></i>
                              2021
                            </div>
                          </div>
    
                          <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                          </div>
    
                        </div>
    
                         <!--==================== QUALIFICATION 2 ====================-->
                         <div class="qualification__data">
                           <div></div>
    
                          <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                          </div>
    
                          <div>
                            <h3 class="qualification__title">Certification Openclassroom</h3>
                            <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                            <div class="qualification__calendar">
                              <i class="uil uil-calendar-alt"></i>
                              2021
                            </div>
                          </div>
    
    
                        </div>
    
                         <!--==================== QUALIFICATION 3 ====================-->
                         <div class="qualification__data">
                          <div>
                            <h3 class="qualification__title">Certification Openclassroom</h3>
                            <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                            <div class="qualification__calendar">
                              <i class="uil uil-calendar-alt"></i>
                              2021
                            </div>
                          </div>
    
                          <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                          </div>
    
                        </div>
    
                        <!--==================== QUALIFICATION 4 ====================-->
                         <div class="qualification__data">
                           <div></div>
    
                          <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                          </div>
    
                          <div>
                            <h3 class="qualification__title">Certification Openclassroom</h3>
                            <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                            <div class="qualification__calendar">
                              <i class="uil uil-calendar-alt"></i>
                              2021
                            </div>
                          </div>
    
    
                        </div>
    
                         <!--==================== QUALIFICATION 5 ====================-->
                         <div class="qualification__data">
                          
    
                         
    
                          <div>
                            <h3 class="qualification__title">Certification Openclassroom</h3>
                            <span class="qualification__subtitle">Concevez votre site web avec PHP et MySQL</span>
                            <div class="qualification__calendar">
                              <i class="uil uil-calendar-alt"></i>
                              2021
                            </div>
                          </div>
    
                            <div>
                            <span class="qualification__rounder"></span>
                            <!-- <span class="qualification__line"></span> -->
                          </div>
    
                        </div>
                      </div>
                </div>
              </div>
            </section>
            

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
               <h2 class="section__title">Services</h2> 
               <span class="section__subtitle">Ce que je propose</span>

               <div class="services__container container grid">
                  <!--==================== SERVICES 1 ====================-->
                  <div class="services__content">
                    <div>
                      <i class="uil uil-web-grid services__icon"></i>
                      <h3 class="services__title">Ui/Ux <br> Designer</h3>
                    </div>
                    
                    <span class="button button--flex button--small button--link services__button">
                      Voir plus
                      <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                      <div class="services__modal-content">
                        <h4 class="services__modal-title">Ui/Ux <br> Designer</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                          <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Je développe l'interface utilisateur</p>
                          </li>

                          <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>web page development</p>
                          </li>

                          <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I create ux element interactions</p>
                          </li>

                          <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I position your company brand</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                       <!--==================== SERVICES 2 ====================-->
                       <div class="services__content">
                        <div>
                          <i class="uil uil-arrow services__icon"></i>
                          <h3 class="services__title">Frontend <br> Dévelopeur</h3>
                        </div>
                        
                        <span class="button button--flex button--small button--link services__button">
                          Voir plus
                          <i class="uil uil-arrow-right button__icon"></i>
                        </span>
    
                        <div class="services__modal">
                          <div class="services__modal-content">
                            <h4 class="services__modal-title">Frontend <br> Dévelopeur</h4>
                            <i class="uil uil-times services__modal-close"></i>
    
                            <ul class="services__modal-services grid">
                              <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Je développe l'interface utilisateur</p>
                              </li>
    
                              <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>web page development</p>
                              </li>
    
                              <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I create ux element interactions</p>
                              </li>
    
                              <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I position your company brand</p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                           <!--==================== SERVICES 3 ====================-->
                  <div class="services__content">
                    <div>
                      <i class="uil uil-pen services__icon"></i>
                      <h3 class="services__title">Branding <br> Designer</h3>
                    </div>
                    
                    <span class="button button--flex button--small button--link services__button">
                      Voir plus
                      <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                      <div class="services__modal-content">
                        <h4 class="services__modal-title">Ui/Ux <br> Designer</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                          <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>Je développe l'interface utilisateur</p>
                          </li>

                          <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>web page development</p>
                          </li>

                          <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I create ux element interactions</p>
                          </li>

                          <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I position your company brand</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

               </div>
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
              <h2 class="section__title">Portfolio</h2>
              <span class="section__subtitle">Travail le plus récent</span>

              <div class="portfolio__container container swiper-container">
                <div class="swiper-wrapper">
                  <!--==================== PORTFOLIO 1 ====================-->
                  <div class="portfolio__content grid swiper-slide">
                    <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">

                    <div class="portfolio__data">
                      <h3 class="portfolio__title">Modern Website</h3>
                      <p class="portfolio__description">Site web adapté a toutes platformes, avec des éléments Ui 
                        et des interactions animé.</p>
                        <a href="#" class="button button--flex button--small portfolio__button">
                            Demo
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>
                  </div>

                    <!--==================== PORTFOLIO 2 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                      <img src="assets/img/portfolio2.jpg" alt="" class="portfolio__img">
  
                      <div class="portfolio__data">
                        <h3 class="portfolio__title">Brand Disign</h3>
                        <p class="portfolio__description">Site web adapté a toutes platformes, avec des éléments Ui 
                          et des interactions animé.</p>
                          <a href="#" class="button button--flex button--small portfolio__button">
                              Demo
                              <i class="uil uil-arrow-right button__icon"></i>
                          </a>
                      </div>
                    </div>

                      <!--==================== PORTFOLIO 3 ====================-->
                  <div class="portfolio__content grid swiper-slide">
                    <img src="assets/img/portfolio3.jpg" alt="" class="portfolio__img">

                    <div class="portfolio__data">
                      <h3 class="portfolio__title">Online Store</h3>
                      <p class="portfolio__description">Site web adapté a toutes platformes, avec des éléments Ui 
                        et des interactions animé.</p>
                        <a href="#" class="button button--flex button--small portfolio__button">
                            Demo
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>
                  </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next">
                  <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                  <i class="uil uil-angle-left swiper-portfolio-icon"></i>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>

            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">
              <div class="project__bg">
                <div class="project__container container grid">
                  <div class="project__data">
                    <h2 class="project__title">Vous avez un nouveau project</h2>
                    <p class="project__description">Contacter moi maintenant et obtener 30% de réduction sur votre nouveau project.</p>
                    <a href="#contact" class="button button--flex button--white">
                      Me contacter
                      <i class="uil uil-message project__icon button__icon"></i>
                    </a>
                  </div>

                  <img src="assets/img/project.png" alt="" class="project__img">
                </div>
              </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                <h2 class="section__title">Testimonial</h2>
                <span class="section__subtitle">L'avis de mes clients</span>

                <div class="testimonial__container container swiper-container">
                  <div class="swiper-wrapper">
                     <!--==================== TESTIMONIAL 1 ====================-->
                     <div class="testimonial__content swiper-slide">
                       <div class="testimonial__data">
                         <div class="testimonial__header">
                           <img src="assets/img/testimonial1.jpeg" alt="" class="testimonial__img">

                           <div>
                             <h3 class="testimonial__name">Luidgi Clairboy</h3>
                             <span class="testimonial__client">Client</span>
                           </div>
                         </div>
                        
                         <div>
                         <i class="uil uil-star testimonial__icon-star"></i>
                         <i class="uil uil-star testimonial__icon-star"></i>
                         <i class="uil uil-star testimonial__icon-star"></i>
                         <i class="uil uil-star testimonial__icon-star"></i>
                         <i class="uil uil-star testimonial__icon-star"></i>
                         </div>
                       </div>

                       <p class="testimonial__description">Bonne impression de hicham

                       </p>
                     </div>

                  <!--==================== TESTIMONIAL 2 ====================-->
                  <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                      <div class="testimonial__header">
                        <img src="assets/img/testimonial1.jpeg" alt="" class="testimonial__img">

                        <div>
                          <h3 class="testimonial__name">Luidgi Clairboy</h3>
                          <span class="testimonial__client">Client</span>
                        </div>
                      </div>
                     
                      <div>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      </div>
                    </div>

                    <p class="testimonial__description">Bonne impression de hicham

                    </p>
                  </div>

                  <!--==================== TESTIMONIAL 3 ====================-->
                  <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                      <div class="testimonial__header">
                        <img src="assets/img/testimonial1.jpeg" alt="" class="testimonial__img">

                        <div>
                          <h3 class="testimonial__name">Luidgi Clairboy</h3>
                          <span class="testimonial__client">Client</span>
                        </div>
                      </div>
                     
                      <div>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      <i class="uil uil-star testimonial__icon-star"></i>
                      </div>
                    </div>

                    <p class="testimonial__description">Bonne impression de hicham

                    </p>
                  </div>
                  </div>

                  <!-- Add Pagination -->
                  <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>
              </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
              <h2 class="section__title">Me contacter</h2>
              <span class="section__subtitle">Get in touch</span>

              <div class="contact__container container grid">
                <div>
                  <div class="contact__information">
                    <i class="uil uil-phone contact__icon"></i>

                    <div>
                      <h3 class="contact__title">Appeler moi</h3>
                      <span class="contact__subtitle">07/69/69/07/64</span>
                    </div>
                  </div>

                  <div class="contact__information">
                    <i class="uil uil-envelope contact__icon"></i>

                    <div>
                      <h3 class="contact__title">Email</h3>
                      <span class="contact__subtitle">hichampro68@gmail.com</span>
                    </div>
                  </div>

                  <div class="contact__information">
                    <i class="uil uil-map-marker contact__icon"></i>

                    <div>
                      <h3 class="contact__title">Localisation</h3>
                      <span class="contact__subtitle">France - Illfurth 10 rue burnkirch</span>
                    </div>
                  </div>
                </div>

                <form action="contactform.php" class="contact__form grid" method="post">
                  <div class="contact_inputs grid">
                    <div class="contact__content">
                      <label for="" class="contact__label">Nom</label>
                      <input type="text" name="name" class="contact__input" placeholder="Nom complet">
                    </div>
                    <div class="contact__content">
                      <label for="" class="contact__label">Email</label>
                      <input type="email" name="mail" class="contact__input" placeholder="Adresse Mail">
                    </div>
                  </div>
                  <div class="contact__content">
                    <label for="" class="contact__label">Project</label>
                    <input type="text" name="subject" class="contact__input" placeholder="Project">
                  </div>
                  <div class="contact__content">
                    <label for="" class="contact__label">Message</label>
                   <textarea name="message" id="" cols="0" rows="7" class="contact__input" placeholder="Message"></textarea>
                  </div>

                  <div>
                    <button type="submit" name="submit" class="button">
                    
                      Envoyer Message
                      <i class="uil uil-message button__icon"></i>
                    </button>
                  </div>
                </form>
              </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
          <div class="footer__bg">
            <div class="footer__container container grid">
              <div>
                <h1 class="footer__title">Hicham</h1>
                <span class="footer__subtitle">Frontend développeur</span>
              </div>

              <ul class="footer__links">
                <li>
                  <a href="#services" class="footer__link">Services</a>
                </li>
                <li>
                  <a href="#portfolio" class="footer__link">Portfolio</a>
                </li>
                <li>
                  <a href="#contact" class="footer__link">Me contacter</a>
                </li>
              </ul>

              <div class="footer__socials">
                <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                <i class="uil uil-facebook-f"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="footer__social">
                <i class="uil uil-instagram"></i>
                  </a>
                  <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                  <i class="uil uil-twitter"></i>
                  </a>
              </div>
            </div>

            <p class="footer__copy">&#169; Hicham saidi All right reserved</p>
          </div>
            
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>