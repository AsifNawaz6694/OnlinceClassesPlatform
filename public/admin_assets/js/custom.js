var base_url = 'http://localhost/actor-pass/';
$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

//on form submit change Admin Profile picture
$('#change_admin_profile_pic').change(function(e){
    e.preventDefault();
    console.log("herezz");
    var form = new FormData(this);
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: form,
        processData: false,
        contentType: false,
        success: function(response){
            if(response.code === 200){
                $('.image-box > img').attr('src', response.img);
                // alert(response.img);
            }
            if(response.code === 202){
                // alert(response.error);
                //alert(response.img);
            }
            if(response.code === 202){
                //alert(response.error);
            }
        },
        error: function(){
            alert('Image uploading failed');
        }
    });
});

$('.video_lecture').click(function(e){

    var link = $(this).data('message');
    var description = $(this).data('description');
    var src= base_url+"public/assets/lecturevideos/"+link;
    $("#video_link_model").attr("src", src);  
    $("#video_description > p").text(description);  

    console.log(src);
});