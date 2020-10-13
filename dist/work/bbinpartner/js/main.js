//REMOVE INLINE-BLOCK NODE
$(function(){
    $('.removeTextNodes').contents().filter(function() {
        return this.nodeType === 3;
    }).remove();
});


