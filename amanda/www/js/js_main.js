
$( document ).ready( function(){
       
        var path;
       $("#inputFile").change(function() {
        
        $("#imageform").ajaxForm({
            target: '#leftSide', 
            beforeSubmit:function() {
                $('#waitingImgUpl').css('display', 'block');
            }, 
            success:function(data){
               var tempImgPath = data;
               var end = tempImgPath.indexOf(" class"); //cut path from returned DB value
               path = tempImgPath.substring(10,end-1);
               $('#waitingImgUpl').css('display', 'none');
            }, 
            error:function(){
                alert('error')
            } 
        }).submit();
    });
    // upload photo on server and insert path link, name and description into DB
    $('#publish').click(function () {
        var iPhName = 'no name';
        var discr = 'no description';
        if($('#iPhName').val())
        iPhName = $('#iPhName').val();
        if($('#discr').val())
        discr = $('#discr').val();
        
       $.ajax({
            url: '/functions/upload_db.php',
            type: 'POST',
            chache: false,
            data: {'iPhName' : iPhName, 'discr' : discr, 'path' : path},
            dataType: 'html',
          success: function(data){
               
                 alert(data);
                 
          }
        }); 
    });
    
	// Scroll: if scroll height + window height == docement height ->add 8 photos from DB
	var num = 0;
    $(window).scroll( function (){
    	var windowScroll = $(window).scrollTop();
    	var windowHeight = $(window).height();
    	var documentHeight = $(document).height();
    	console.log(Math.ceil(windowScroll) + " " + windowHeight + " " + documentHeight)
    	 if((Math.ceil(windowScroll) + windowHeight) == documentHeight) {
    	 	
    	 	$.ajax({
         	url: "/functions/scrollImg.php",
          	type: "GET",
         	data: {'num': num},
         	beforeSend: function() {
         		$('#waiting').css('display', 'block');
         		
         	},        	 
          	cache: false,
          	success: function(response){
          		$('#waiting').css('display', 'none');
              if(response == 0){  
                 alert("fail");
                 
              }else{
                 $('#ulmain').append(response);
                 num = num + 8;
                 
              }
           }
        });


    	 } 
    });
 
	

	var index = 1;
	var tag;
	var tagN;
	var close_tagN;
	$('#s_TxTagAdder').click( function (){
		tag = $('#i_TxTagAdder').val();
		tagN = '#tagN' + index;
		close_tagN = "#close_tagN" + index;
		$('<div class="tags" id="tagN' + index + '"></div>').appendTo('#tagWind');
		$(tagN).text(tag );
		$(tagN).append('<span class="close_tag" id="close_tagN' + index + '">X</span>');
		
		index++;
		
	});
		$('.close_tag').click( function(){
		
		$(this).parent().remove();
	
		});
	$('a#go').click( function(event){ 
		event.preventDefault(); // 
		$('#overlay').fadeIn(400, 
		 	function(){ 
				$('#modalForm') 
					.css('display', 'block') 
					.animate({opacity: 1, top: '50%'}, 200); 
		});
	});
    
	$('#modalClose, #overlay').click( function(){ 
		$('#modalForm')
			.animate({opacity: 0, top: '45%'}, 200,   
				function(){ // пoсле aнимaции
					$(this).css('display', 'none'); 
					$('#overlay').fadeOut(400); 
				}
			);
	});

	$('.blink')
		.focus(function(){
			if( $(this).attr('value') == $(this).attr('title') ) {
				$(this).attr({ 'value': '' });
			}
		})
		.blur(function(){
			if( $(this).attr('value') == '' || typeof($(this).attr('value')) == 'undefined') {
				$(this).attr({ 'value': $(this).attr('title') })
			}
		});
		

	
	
});
