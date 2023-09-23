/**
 * Custom Script Javascript
 * Made by Freyza Kusuma
 */
document.addEventListener('DOMContentLoaded', () => {
    "use strict"

    /**
   * Preloader
   */
    let preloader = document.querySelector('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove()
        });
    }

    /**
     * Correct scrolling position upon page load for URLs containing hash links.
     */
    window.addEventListener('load', function(e) {
        if (window.location.hash) {
            if (document.querySelector(window.location.hash)) {
                setTimeout(() => {
                    let section = document.querySelector(window.location.hash)
                    let scrollMarginTop = getComputedStyle(section).scrollMarginTop
                    window.scrollTo({
                        top: section.offsetTop - parseInt(scrollMarginTop),
                        behavior: 'smooth'
                    })
                }, 100)
            }
        }
    })

    /**
    * Easy on scroll event listener
    */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
    * Toggle .header-scrolled class to #header when page is scrolled
    */
    let selectHeader = document.querySelector('#header')
    let selectNavbar = document.querySelector('.navbar')
    let selectNavbarHome = document.querySelector('.navbar-home')
    let selectNavlink = document.querySelector('.navbar-nav')
    if (selectHeader && selectNavbarHome) {
        const headerScrolled = () => {
            if (window.scrollY > 30) {
                selectNavbar.classList.add('bg-white')
                selectNavbar.classList.add('shadow')
                selectNavlink.classList.add('nav-scrolled')
            } else {
                selectNavbar.classList.remove('bg-white')
                selectNavbar.classList.remove('shadow')
                selectNavlink.classList.remove('nav-scrolled')
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    } else if (selectHeader && !selectNavbarHome) {
        const headerScrolled = () => {
            if (window.scrollY > 25) {
                selectNavbar.classList.add('shadow')
                selectNavbar.classList.remove('shadow-sm')
            } else {
                selectNavbar.classList.add('shadow-sm')
                selectNavbar.classList.remove('shadow')
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }

    /**
   * Initiate glightbox
   */
    // const glightbox = GLightbox({
    //     selector: '.glightbox'
    // });

    /**
     * Initiate gallery lightbox
     */
    const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
    });

    /**
     * Testimonials slider
     */
    // new Swiper('.testimonials-slider', {
    //     speed: 600,
    //     loop: true,
    //     autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false
    //     },
    //     slidesPerView: 'auto',
    //     pagination: {
    //     el: '.swiper-pagination',
    //     type: 'bullets',
    //     clickable: true
    //     }
    // });

    /**
     * Animation on scroll
     */
    // window.addEventListener('load', () => {
    //     AOS.init({
    //         duration: 700,
    //         easing: 'ease-in-out',
    //         once: false,
    //         mirror: false
    //     })
    // });

    /**
     * Hover effect articles
     */
    // let selectArticleContent = document.querySelector('.articles-card')
    // let selectCardTitle = document.querySelector('.card-title')
    // selectArticleContent.addEventListener('mouseover', () => {
    //     selectCardTitle.classList.add('articles-content-header')
    // })
})
