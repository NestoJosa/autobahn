console.log('custom.js loaded!');

/* load scripts for desktop-sized screens based on a media query */
/* src: https://www.encode8.com/js/how-to-conditionally-load-javascript-files/ */

/* if the screen is at least 1024px in width */
if (window.matchMedia("only screen and (min-width: 1024px)").matches) {

  /* create a script element, that will load our desktop-only.js*/
  var script = document.createElement("script");
  script.type = "text/javascript";
  
  script.src = "http://localhost:8888/web1/wp-content/themes/salient-child/desktop-only.js";
  
  /* use the following url to load the scripts from web1 */
  /* script.src = "http://web1.autobahncph.dk/wp-content/themes/salient-child/desktop-only.js"; */

  // add the newly created script element to the end of body
  document.body.appendChild(script);
};

