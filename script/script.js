window.addEventListener("load", () => {
  const toggleBtn = document.querySelector(".header__toggle-btn");
  const toggleBtnLine = document.querySelectorAll(".header__toggle-btn-line");
  const nav = document.querySelector(".header__nav-wrapper");
  const navItem = document.querySelectorAll('.header__list-item')
  const mainWrapper = document.querySelector("main");
  const masonry = document.querySelector('.gallery__grid-wrapper')
  const readMore = document.querySelector('.about-me__read-more-wrapper')
  const contactInfo = document.querySelector('.contact__info-title-left')
  const contactContact = document.querySelector('.contact__info-title-right')


  const openMobileNav = () => {
    nav.classList.toggle("open");
    toggleBtnLine.forEach(line => {
      line.classList.toggle('active')
    })
    mainWrapper.classList.toggle('main-hidden');

    window.onscroll = function () {
      if (nav.classList.contains("open")) {
        window.scrollTo(0, 0);
      }
      else {
        null
      }

    };
  }

  const openReadMore = () => {
    const text = document.querySelector('.about-me__text-addition-wrapper');
    const img = document.querySelector('.about-me__img');
    readMore.style.display = "none";
    text.classList.add('about-me__text-addition-wrapper--read-more');
    img.style.minHeight = 'unset'
  }

  const openShowMore = (e) => {
    let click = e.target

    const rightTitle = document.querySelector(".contact__info-title-right")
    const leftTitle = document.querySelector(".contact__info-title-left")

    const rightForm = document.querySelector(".contact__right")
    const leftInfo = document.querySelector(".contact__left")

    if (click.closest('.contact__info-title-right')) {
      rightTitle.classList.add('visible')
      leftTitle.classList.remove('visible')

      rightForm.classList.add("contact__show-info")
      leftInfo.classList.remove("contact__show-info")

    } else if (click.closest('.contact__info-title-left')) {
      leftTitle.classList.add('visible')
      rightTitle.classList.remove('visible')

      rightForm.classList.remove("contact__show-info")
      leftInfo.classList.add("contact__show-info")
    }

  }

  if (masonry) {
    let changeGridBtn = document.querySelectorAll('.gallery__btn');
    let macyInstance = Macy({
      container: ".gallery__grid-wrapper",
      columns: 3,
      margin: {
        x: 15,
        y: 15
      },
      mobileFirst: true,
      breakAt: {
        200: {
          columns: 1
        },
        600: {
          columns: 2
        },
        900: {
          columns: 3
        }
      }
    });

    let changeGallery = (e) => {

      const target = e.target.closest('.gallery__btn');
      const buttons = document.querySelectorAll(".gallery__btn");


      buttons.forEach(btn => {
        btn.classList.remove("gallery__btn--active");
        target.classList.add("gallery__btn--active");
      })

      if (target.classList.contains("gallery__btn--single")) {
        let wrapper = document.querySelector(".gallery__grid-wrapper");
        wrapper.classList.add('gallery__grid-wrapper--single');
        wrapper.classList.remove('gallery__grid-wrapper--grid');


        let macyInstance2 = Macy({
          container: ".gallery__grid-wrapper--single",
          columns: 1,
          margin: {
            x: 15,
            y: 15
          },
          mobileFirst: true
        });
      }
      else if (target.classList.contains("gallery__btn--grid")) {
        let wrapper = document.querySelector(".gallery__grid-wrapper");
        wrapper.classList.add('gallery__grid-wrapper--grid')
        wrapper.classList.remove('gallery__grid-wrapper--single')

        let macyInstance2 = Macy({
          container: ".gallery__grid-wrapper",
          columns: 3,
          margin: {
            x: 15,
            y: 15
          },
          mobileFirst: true,
          breakAt: {
            200: {
              columns: 1
            },
            600: {
              columns: 2
            },
            900: {
              columns: 3
            }
          }
        });
      }
    }

    changeGridBtn.forEach(btn => {
      btn.addEventListener('click', changeGallery)
    })
  }

  toggleBtn.addEventListener("click", openMobileNav);

  navItem.forEach(link => {
    link.addEventListener('click', openMobileNav)
  })

  if (readMore) {
    readMore.addEventListener('click', openReadMore)
  }

  if (contactContact) {
    contactContact.addEventListener('click', openShowMore)
    contactInfo.addEventListener('click', openShowMore)

  }

});


