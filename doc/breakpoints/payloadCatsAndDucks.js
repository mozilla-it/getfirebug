
window.Animals =
{
    prod: function(animal)	{
        animal.say();
    },

    Duck: function() {
        this.say = function() {
            console.log('quack');
        }
    },

    Cat: function() {
        this.say = function() {
            console.log('meow!!');
        }
    }
}
//@ sourceURL=Animals/payloadCatsAndDucks.js