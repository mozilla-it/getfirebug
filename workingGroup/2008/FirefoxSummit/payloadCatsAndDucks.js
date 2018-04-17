// default first line used
//@ sourceURL=res:/FireclipseTests/WebContent/payloadCatsAndDucks.js
function prod( animal) {
    animal.say();
};

var duck = function() {
    this.say = function() { // line 6 rel to this file; 22 + 6 = 28
        dump('quack\n');  
    };
};

var cat = function() {
    this.say = function() {
        dump('meow\n');
    };
};

// vvv  
//
//
//@ sourceURL=res:/FireclipseTests/WebContent/payloadCatsAndDucks.js

