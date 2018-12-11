$(document).ready(function(){

    if ($('#messageWrapper').length > 0) {

        $('#messageWrapper').scrollTop($('#messageWrapper')[0].scrollHeight);


        $('#messageWrapper').animate({opacity: 1}, 100);
    }

    $('.delete-btn').click(function(){
    if( !confirm('Are you sure? This post be lost to the sands of time and never found again. You cannot undo this action.') ){
        return false;
    }

});




}); // END DOCUMENT READY

function previewFile() {

    var preview = document.getElementById('img-preview');
    var file = document.getElementById('file-with-preview').files[0];

    var reader = new FileReader();

    reader.onloadend = function(){
        preview.src = reader.result;
    }

    if(file) {
        reader.readAsDataURL(file);
    }else{
        preview.src = "";
    }

}
