$.validate({
    lang: 'en'
  });

$(document).ready(function(){


    $('body').on('change', '#brandStatus', function(){
        var id = $(this).attr('data-id');
        if(this.checked){
            var status = 1;
        }else{
            var status = 0;
        }

        $.ajax({
            url: 'brandStatus/'+id+'/'+status,
            method: 'get',
            success: function(result){
                console.log(result);
            }
        });

    });
    
    $('body').on('change', '#categoryStatus', function(){
        var id = $(this).attr('data-id');
        if(this.checked){
            var status = 1;
        }else{
            var status = 0;
        }

        $.ajax({
            url: 'categoryStatus/'+id+'/'+status,
            method: 'get',
            success: function(result){
                console.log(result);
            }
        });

    });

});


  