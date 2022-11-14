const assert = require('assert')

describe('Array', function() {
    describe('IndexOf', function() {
        it('should retunr -1 when the value is not prevent', function() {
            assert.equal([1,2,3].indexOf(4), -1)
        });
    });
});
