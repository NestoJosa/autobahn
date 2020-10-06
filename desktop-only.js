/* 

  Animation Script

  src:
  - How to animate on scroll?
  https://medium.com/@ryanfinni/the-intersection-observer-api-practical-examples-7844dfa429e9

*/

// sanity check
console.log('desktop-only.js loaded!');

// get a list of all of the icons that have the js-hook class
const icons = document.querySelectorAll('.js-competence-card__icon');

// custom CB for the IntersectionObserver
function handleIntersection(entries) {
  entries.map((entry) => {
    if (entry.isIntersecting) {
      // if an element with the icon class is in the viewport
      // add a class to the element, which will trigger the
      // animation made with css (see style.css)
      entry.target.classList.add('competence-card__icon--animate');
      // remove the observer
      observer.unobserve(entry.target);
    }
  });
}

// create an instance of the observer with our custom CB
const observer = new IntersectionObserver(handleIntersection);

// add the observer to each of our icons 
icons.forEach(icon => observer.observe(icon));

