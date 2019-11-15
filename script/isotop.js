window.addEventListener("load", () => {
    const elem = document.querySelector('.gallery__grid-wrapper--grid');
    if (elem) {
        let iso;

        iso = new Isotope(elem, {
            itemSelector: '.gallery__image-wrapper',
            layoutMode: 'masonry',
            percentPosition: true,
            columnWidth: '.gallery__grid-sizer',

        });

        let filterFns = {}

        let filtersElem = document.querySelector('.gallery__filters-wrapper');
        filtersElem.addEventListener('click', function (event) {
            if (!matchesSelector(event.target, 'div')) {
                return;
            }
            let filterValue = event.target.getAttribute('data-filter');
            console.log(filterValue)
            // use matching filter function
            filterValue = filterFns[filterValue] || filterValue;
            iso.arrange({ filter: filterValue });
        });


        const buttonGroups = document.querySelectorAll('.gallery__filter');
        buttonGroups.forEach(button => {
            button.addEventListener('click', (event) => {
                if (button.classList.contains('.gallery__filter--active')) {
                    button.classList.remove('.gallery__filter--active')
                } else {
                    buttonGroups.forEach(btn => {
                        btn.classList.remove('gallery__filter--active')
                    })
                    button.classList.add('gallery__filter--active')
                }
            });
        })

        let changeGallery = (e) => {

            const target = e.target.closest('.gallery__btn');
            const buttons = document.querySelectorAll(".gallery__btn");

            buttons.forEach(btn => {
                btn.classList.remove("gallery__btn--active");
                target.classList.add("gallery__btn--active");
            })

            if (target.classList.contains("gallery__btn--single")) {
                let wrapper = document.querySelectorAll(".gallery__grid-sizer");
                wrapper.forEach(img => {
                    img.classList.add('gallery__grid-sizer-lg')
                    img.classList.remove('gallery__grid-sizer-sm')
                })
                let elem = document.querySelector('.gallery__grid-wrapper--grid');
                iso = new Isotope(elem, {
                    itemSelector: '.gallery__image-wrapper',
                    layoutMode: 'masonry',
                    percentPosition: true,
                    columnWidth: '.gallery__grid-sizer-lg',

                });

            }
            else if (target.classList.contains("gallery__btn--grid")) {
                let wrapper = document.querySelectorAll(".gallery__grid-sizer");
                wrapper.forEach(img => {
                    img.classList.add('gallery__grid-sizer-sm')
                    img.classList.remove('gallery__grid-sizer-lg')
                })
                let elem = document.querySelector('.gallery__grid-wrapper--grid');
                iso = new Isotope(elem, {
                    itemSelector: '.gallery__image-wrapper',
                    layoutMode: 'masonry',
                    percentPosition: true,
                    columnWidth: '.gallery__grid-sizer-sm',

                });
            }
            return iso
        }

        changeGridBtn.forEach(btn => {
            btn.addEventListener('click', changeGallery)
        })
    }

})