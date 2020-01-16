/**
 * Created by RAJITHA on 5/8/2018.
 */


function DropDown(el) {
    this.dd = el;
    this.initEvents();
}
DropDown.prototype = {
    initEvents : function() {
        var obj = this;

        obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            event.stopPropagation();
        });
    }
}

$(function() {

    var dd = new DropDown( $('#dd') );

    $(document).click(function() {
        // all dropdowns
        $('.wrapper-dropdown-5').removeClass('active');
    });

});

