require('./bootstrap'); // bootstrapping our application: load libraries/frameworks ..

/* Note:
  setting the components to the global scope `window` is not
  considered a best practice, I'm okay with this practice
  now because it's small one-page project written in
  few hours.. */

window.data = require('./data.js').data; // data source

// Fuse.js options
/* Note: `threshold` & `distance` options set by ..., well,
  arbitary testing!! Really! until I found this rates
  is the best to meet arabic-common-errors */
var options = {
  shouldSort: true,
  threshold: 0.4,
  location: 0,
  distance: 40,
  maxPatternLength: 32,
  minMatchCharLength: 1,
  keys: [
    "name",
]
};

// fuse.js main object ..
window.fuse = new Fuse(window.data, options);

// vue.js search component
window.search_component = Vue.component('search-control', require('./components/search-control.vue'));

// inititing vue.js app, should be wrapper of the components
/* Note:
  in Vue.js 2.0 you can't set `body` as your
  app, this is best for moduling your apps,
  or you can just workaround it like:
  <body><span id='app'></span></body>
  and Vue({el: '#app'})
  */
window.app = new Vue({
    el: 'body'
});

// datatable object
require('./modules/datatable');

// set the .count-results value
window.$(document).ready(function(){
	window.search_component.countResults();
});