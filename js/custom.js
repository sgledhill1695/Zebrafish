const zooms = document.querySelectorAll(".zoom-io");
const helpHeader = document.querySelectorAll(".help-io");
const helpOneLeft = document.querySelectorAll(".help-one-left");
const helpOneRight = document.querySelectorAll(".help-one-right");
const svgUnderline = document.querySelectorAll(".help-one-right");
const test = document.querySelectorAll("#featured-options");
const drawSvgOne = document.querySelectorAll(".fish-drawing");
const drawSwimLine = document.querySelectorAll(".swim-line");
const drawSwimLineEnd = document.querySelectorAll(".swim-line-end");
const formAppear = document.querySelectorAll(".form-appear");

const appearOptions = {
    threshold: 1,
    rootMargin:"0px"
}

const appearOptionsTwo = {
    threshold: 1,
    rootMargin:"0px"
}

const appearOptionsThree = {
    threshold: 1,
    rootMargin:"0px"
}

const appearOptionsFour = {
    threshold: 1,
    rootMargin:"0px"
}

const appearOptionsFive = {
    threshold: 0.5,
    rootMargin:"0px"
}
/* FORM APPEAR */
const theFormAppear = new IntersectionObserver(function(entries, theFormAppear) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }   else {
            entry.target.classList.add("slide-bottom");
            theFormAppear.unobserve(entry.target);
        }
    });
}, appearOptionsFive);

formAppear.forEach(zoom => {
    theFormAppear.observe(zoom);
});

/* SWIM LINE END */
const theSwimLineEnd = new IntersectionObserver(function(entries, theSwimLineEnd) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }   else {
            entry.target.classList.add("swim-line-end-draw");
            theSwimLineEnd.unobserve(entry.target);
        }
    });
}, appearOptionsFour);

drawSwimLineEnd.forEach(zoom => {
    theSwimLineEnd.observe(zoom);
});
/* DRAW Swim LINE */
const theSwimLine = new IntersectionObserver(function(entries, theSwimLine) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }   else {
            entry.target.classList.add("swim-line-draw");
            theSwimLine.unobserve(entry.target);
        }
    });
}, appearOptionsFour);

drawSwimLine.forEach(zoom => {
    theSwimLine.observe(zoom);
});

/* DRAW FISH LINE */
const theDrawSvgOne = new IntersectionObserver(function(entries, theDrawSvgOne) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }   else {
            entry.target.classList.add("fish-drawing-draw");
            theDrawSvgOne.unobserve(entry.target);
        }
    });
}, appearOptionsFour);

drawSvgOne.forEach(zoom => {
    theDrawSvgOne.observe(zoom);
});
/* THINKING OF UPDATING YOUR WEBSITE */
/* TITLE */
const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }   else {
            entry.target.classList.add("zoom");
            appearOnScroll.unobserve(entry.target);
        }
    });
}, appearOptions);

zooms.forEach(zoom => {
    appearOnScroll.observe(zoom);
});

/* HOW WE CAN HELP */
const theHelpHeader = new IntersectionObserver(function(entries, theHelpHeader) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }   else {
            entry.target.classList.add("slide-bottom");
            theHelpHeader.unobserve(entry.target);
        }
    });
}, appearOptionsThree);

helpHeader.forEach(zoom => {
    theHelpHeader.observe(zoom);
});
/* ONE */
const helpOneLeftSide = new IntersectionObserver(function(entries, helpOneLeftSide) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }   else {
            entry.target.classList.add("slide-left");
            helpOneLeftSide.unobserve(entry.target);
        }
    });
}, appearOptionsThree);

helpOneLeft.forEach(zoom => {
    helpOneLeftSide.observe(zoom);
});



const helpOneRightSide = new IntersectionObserver(function(entries, helpOneRightSide) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }   else {
            entry.target.classList.add("slide-right");
            helpOneRightSide.unobserve(entry.target);
        }
    });
}, appearOptionsThree);

helpOneRight.forEach(zoom => {
    helpOneRightSide.observe(zoom);
});


/* FAQ */
/* test.addEventListener('click', function handleClick(event) {
console.log("clicked");
  }); */

