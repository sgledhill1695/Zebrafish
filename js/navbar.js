const header = document.querySelector(".navbar");
const headerLink = document.querySelector(".nav-link");
const sectionOne = document.querySelector("#about-us");
const sectionTwo = document.querySelector("#how-we-can-help");
const sectionThree = document.querySelector("#design-process-two");
const sectionFour = document.querySelector("#design-process-section");
const sectionFive = document.querySelector("#pricing-section");
const navLogo = document.querySelector("#navbar-logo");






const sectionOneOptions = {
  threshold: 0,
  rootMargin: "0px 0px -200px 0px"
};

const sectionOneOptionsLogo = {
  threshold: 0,
  rootMargin: "0px 0px -200px 0px"
};

const sectionTwoOptions = {
    rootMargin: "0px 0px -500px 0px"
  };

  const sectionTwoOptionsLogo = {
    rootMargin: "0px 0px -500px 0px"
  };

  const sectionThreeOptionsLogo = {
    rootMargin: "0px 0px -753px 0px"
  };

  const sectionFourOptionsLogo = {
    rootMargin: "0px 0px -500px 0px"
  };

  const sectionFiveOptionsLogo = {
    rootMargin: "0px 0px -710px 0px"
  };


/* SECTION ONE */
const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        header.classList.add("navbar-scrolled");
    } else {
      header.classList.remove("navbar-scrolled");
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

/* SECTION ONE LOGO */
const sectionOneObserverLogo = new IntersectionObserver(function(
  entries,
  sectionOneObserverLogo
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      console.log("sectionOneLOGO");
         document.getElementById("navbar-logo").src = "adobe-files/1dark-logo.svg";
    } else {
      return;
    }
  });
},
sectionOneOptionsLogo);

sectionOneObserverLogo.observe(sectionOne);





/* SECTION TWO */
const sectionTwoObserver = new IntersectionObserver(function(
  entries,
  sectionTwoObserver
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        header.classList.add("navbar-scrolled-two");
    } else {
      header.classList.remove("navbar-scrolled-two");
return;
    }
  });
},
sectionTwoOptions);

sectionTwoObserver.observe(sectionTwo);

/* SECTION TWO LOGO */

const sectionTwoObserverLogo = new IntersectionObserver(function(
  entries,
  sectionTwoObserverLogo
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        document.getElementById("navbar-logo").src = "adobe-files/1light-logo.svg";
    } else {
      return;
return;
    }
  });
},
sectionTwoOptionsLogo);

sectionTwoObserverLogo.observe(sectionTwo);

/* SECTION THREE */
const sectionThreeObserver = new IntersectionObserver(function(
  entries,
  sectionThreeObserver
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        header.classList.add("navbar-scrolled");
    } else {
      header.classList.remove("navbar-scrolled");
return;
    }
  });
},
sectionTwoOptions);

sectionThreeObserver.observe(sectionThree);


/* SECTION Three LOGO */

const sectionThreeObserverLogo = new IntersectionObserver(function(
  entries,
  sectionThreeObserverLogo
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        document.getElementById("navbar-logo").src = "adobe-files/1dark-logo.svg";
    } else {
      return;
return;
    }
  });
},
sectionThreeOptionsLogo);

sectionThreeObserverLogo.observe(sectionThree);





/* SECTION FOUR */
const sectionFourObserver = new IntersectionObserver(function(
  entries,
  sectionFourObserver
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        header.classList.add("navbar-scrolled-two");
    } else {
      header.classList.remove("navbar-scrolled-two");
return;
    }
  });
},
sectionTwoOptions);

sectionFourObserver.observe(sectionFour);

/* SECTION FOUR LOGO */
const sectionFourObserverLogo = new IntersectionObserver(function(
  entries,
  sectionFourObserverLogo
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        document.getElementById("navbar-logo").src = "adobe-files/1light-logo.svg";
    } else {
return;
    }
  });
},
sectionFourOptionsLogo);

sectionFourObserverLogo.observe(sectionFour);




/* SECTION FIVE */
const sectionFiveObserver = new IntersectionObserver(function(
  entries,
  sectionFiveObserver
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        header.classList.add("navbar-scrolled");
    } else {
      header.classList.remove("navbar-scrolled");
return;
    }
  });
},
sectionTwoOptions);

sectionFiveObserver.observe(sectionFive);


/* SECTION FIVE LOGO */
const sectionFiveObserverLogo = new IntersectionObserver(function(
  entries,
  sectionFiveObserverLogo
) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        document.getElementById("navbar-logo").src = "adobe-files/1dark-logo.svg";
    } else {
return;
    }
  });
},
sectionFiveOptionsLogo);

sectionFiveObserverLogo.observe(sectionFive);






/*  if (nav.classList.contains('navbar-scrolled')) {
  alert("it worked");
} else {
  alert("not worked");
}  */

