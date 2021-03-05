$( document ).ready(function() {
   
    var text = '';
    $.ajax({
      url: "https://studip3g-test.rz.uni-osnabrueck.de/studip/qplus-koop/plugins.php/KoOp/menu/faecher",
      success: function (data){
            text = data;
      }
    });
    console.log(text);
    console.log($('.cw-sidebar'));
     $('.cw-sidebar').after(text);
});

