window.addEventListener("load", () => {
  const toggleBtn = document.querySelector(".header__toggle-btn");
  toggleBtnLine = document.querySelectorAll(".header__toggle-btn-line");
  nav = document.querySelector(".header__nav-wrapper");
  navItem = document.querySelectorAll('.header__list-item')
  mainWrapper = document.querySelector("main");
  changeGridBtn = document.querySelectorAll('.gallery__btn');
  readMore = document.querySelector('.about-me__read-more-wrapper')
  contactInfo = document.querySelector('.contact__info-title-left')
  contactContact = document.querySelector('.contact__info-title-right')
  languages = document.querySelectorAll('.languages li')
  console.log(languages)

  const changeLang = (e) => {
    let target = e.target
    languages.forEach(btn => {
      btn.classList.remove("active");
      target.classList.add("active");
    })
  }

  languages.forEach(btn => {
    btn.addEventListener('click', changeLang)
  })


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

  console.log()
  const openReadMore = () => {
    const text = document.querySelector('.about-me__text-wrapper');
    const img = document.querySelector('.about-me__img');
    let readMoreText = readMore.querySelector('.about-me__read-more')

    text.classList.toggle('about-me__text-wrapper--read-more');
    img.style.minHeight = 'unset';

    if (readMoreText.classList.contains("more")) {
      readMoreText.innerHTML = "CZYTAJ MNIEJ";
      readMoreText.classList.remove("more")
      readMoreText.classList.add("less")

    } else if (readMoreText.classList.contains("less")) {
      readMoreText.innerHTML = "CZYTAJ WIĘCEJ"
      readMoreText.classList.remove("less")
      readMoreText.classList.add("more")
      text.scrollTo(0, 0)

    }
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


