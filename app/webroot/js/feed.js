
$(function(){
	var pathname = $(location).attr('pathname');
	$('.trang').click(function(event) {
		$('.div-notificetions').removeClass('hienlen');
		$('#autocompleteTest').empty();
		$(this).removeClass('hienlen');
	});
	$.ajax({
		url: location.protocol + "//" + document.domain + "/picceo/feeds/findUserAndTag"
	})
	.done(function(res) {
		availableTags = $.parseJSON(res);

		$("#searchText").click(function () {
        $("#x").removeClass('hide');
	    });
	    $(".list-group-item").hover(function () {
	        $(this,".list-group-item").css('background-color','rgba(172, 172, 172, 0.11)');

	    },function () {
	        $(this,".list-group-item").css('background-color','white');
	    });

	    $("#searchText").on( "trigger", function () {
	        if ($( "#searchText" ).val()==''){
	            $('#autocompleteTest').empty();
	        }
	        return false;
	    } );
	    $("#autocompleteTest").empty();
	    // var availableTags = [
	    // 	{
	    // 		value: 'Jons',
	    // 		id: 1
	    // 	},
	    // 	{
	    // 		value: 'Aons',
	    // 		id: 2
	    // 	},
	    // 	{
	    // 		value: 'Bons',
	    // 		id: 3
	    // 	},
	    // 	{
	    // 		value: '#Qons',
	    // 		id: 4
	    // 	},
	    // 	{
	    // 		value: '#Hons',
	    // 		id: 5
	    // 	},
	    // 	{
	    // 		value: '#Uons',
	    // 		id: 6
	    // 	},
	    // 	{
	    // 		value: 'Ions',
	    // 		id: 7
	    // 	},
	    // 	{
	    // 		value: 'Ions',
	    // 		id: 6
	    // 	} 
	    // ];
	    //console.log(availableTags);
	    $('#searchText').autocomplete({
	        search: function(event, ui) {
	            $('#autocompleteTest').empty();
	            $("#x").removeClass('hide');
	            $('.trang').addClass('hienlen');
	        },
	        close:function(){
	            if ($('#searchText').val()==''){
	                $('#autocompleteTest').empty();
	                $('.trang').removeClass('hienlen');
	            }
	            $("#x").addClass('hide');
	            $('.trang').removeClass('hienlen');
	        },
	        minLength: 1,
	        source: availableTags
	    }).data('ui-autocomplete')._renderItem = function(ul, item) {
	    	$divContent = $('<div/>').addClass('row row-search').attr({});

	    	$divContentImag = $('<div/>').addClass('col-3 div-avatar-search').css({
	 
	    	}).appendTo($divContent);

	    	$checkdata = item.value.search("#");

	    	if($checkdata == -1){
	    		$avatar = $('<img>').attr({
	    			src: location.protocol + "//" + document.domain + "/cakephp/app/webroot/img/avatar.jpg",
	    		}).addClass('div-img-avatar-search').appendTo($divContentImag);
	    	}else {
	    		$icontags = $('<i/>').addClass('fa fa-hashtag icon-img-search').appendTo($divContentImag);
	    	}

	    	$divContentSearch = $('<div/>').addClass('col-9 div-content-search-2').appendTo($divContent).text(item.value);
	        return $DivDataSearch = $('<div/>').data('ui-autocomplete-item', item).append($divContent).appendTo($('#autocompleteTest'));
	    };

	    $("#x").on("click",function () {
	        $("#searchText").val('');
	    })
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	

	window.formsReplaceFileToImgUploader = function(fileInputEl) {
		var fileEl = $(fileInputEl);
		var newBtn = $('<input>', {type:'button', value:'Photo', class:'btn btn-default btn-block'});
		newBtn.click(function(){$(fileEl).click();});
		fileEl.after($('<div>').append(newBtn));
		if (fileEl.data('preview')) {
			var imgEl = $(fileEl.data('preview'));
			if (imgEl.length) {
				fileEl.change(function(){
	            	if (!this.files || !this.files.length) return;
	            	if ( ['image/png', 'image/jpeg', 'image/gif'].indexOf( this.files.item(0).type ) < 0 ) return;
	
	            	var reader = new FileReader();
	                reader.onload = function (e) {
	                    imgEl.attr('src', e.target.result);
	                }
	            	reader.readAsDataURL(this.files[0]);
				});
			}
		}
	}
	
	$('.file-img-uploader').each(function(index, el){
		formsReplaceFileToImgUploader($(el));
	});
	$('.navigation__link.1').click(function(event) {
		$('.uploadfile').addClass('hienlen');
		$('.den').addClass('hienlen');
	});
	$('.den').click(function(event) {
		$('.uploadfile').removeClass('hienlen');
		$(this).removeClass('hienlen');
	});
	$("ion-icon").click(function(event) {
		if($(this).hasClass('liked')){
			var numLike = $(this).parent().next().children('#countLike').attr('class'); 
			$(this).removeClass('liked');
			$(this).parent().next().children('#countLike').empty();
			$(this).parent().next().children('#countLike').html(--numLike);
			$(this).parent().next().children('#countLike').attr('class',numLike);
		}else{
			var numLike = $(this).parent().next().children('#countLike').attr('class');
			$(this).addClass('liked');
			$(this).parent().next().children('#countLike').empty();
			$(this).parent().next().children('#countLike').html(++numLike);

			$(this).parent().next().children('#countLike').attr('class',numLike);
		}
	});

	$('.btn-danger').click(function(event) {
		$(this).addClass('chedi');
		$(this).next().removeClass('chedi');
	});
	$('.btn-primary').click(function(event) {
		$(this).addClass('chedi');
		$(this).prev().removeClass('chedi');
	});
	$('.follow').click(function(event) {
		$.ajax({
			url: location.protocol + "//" + document.domain + "/cakephp/profiles/follow/"+$('.profile__title').attr('id')

		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
	$('.photoadd-comment').keypress(function(e) {
	    var key = e.which;
	    if (key == 13) // the enter key code
	    {
	    	if($(this).val() != ''){
	    		$.ajax({
		        url: location.protocol + "//" + document.domain + "/cakephp/comments/comment/" +$(this).attr('id'),
		        type: 'POST',
		        data: {
		            content : $(this).val()
		        }
			    }).done(function(res){
			    	res = $.parseJSON(res);
			        var li = $('<li>').appendTo($('.list-group'));
			        var span = $('<span>').addClass('photo__comment--author').text(res['username']+'  ').appendTo($(li));
			        $(li).append(res['content']);
			        $('.photoadd-comment').val('');
			    });
	    	}
	    }
	});
	$('.photo__addcomment-area').keypress(function(e) {
	    var key = e.which;
	    if (key == 13) // the enter key code
	    {
	    	if($(this).val() != ''){
	    		$.ajax({
		        url: location.protocol + "//" + document.domain + "/cakephp/comments/comment/" +$(this).attr('id'),
		        type: 'POST',
		        data: {
		            content : $(this).val()
		        }
			    }).done(function(res){
			    	res = $.parseJSON(res);
			        var li = $('<li>').appendTo($('.comments'));
			        var span = $('<span>').addClass('photo__comment--author').text(res['username']+'  ').appendTo($(li));
			        $(li).append(res['content']);
			        $('.photo__addcomment-area').val('');
			    });
	    	}
	    }
	});
	//post
	$('.btn-info').click(function(event) {
			if ($('.file-img-uploader').val()) { 
				var file = $('.file-img-uploader')[0].files[0];
				var flag = 1;
			}else{ 
				var file = '';
				var flag = 0;
			}
			var formData = new FormData();
			formData.append('description',$('#description').val());
			formData.append('flag',flag);
			formData.append('image',file);
			$.ajax({
				url: location.protocol + "//" + document.domain + "/cakephp/feeds/postFeed",
				type: 'POST',
				processData: false,
				contentType: false,
				data: formData
			})
			.done(function(res) {
				res = $.parseJSON(res);
				console.log(res);
				if(window.location.href =='http://192.168.64.2/cakephp/feeds'){
					var article = $('<article>').addClass('photo__container').prependTo($('.div_left'));
					var header = $('<header>').addClass('photo__header').appendTo($(article));
					var a = $('<a>').attr({
						href: 'profiles/profile/'+res['id_user']
					}).appendTo($(header));
					var img = $('<img>').attr({
						class: 'photo__avatar',
						src: 'app/webroot/img/avatarUsers/'+res['profilePic'],
						alt: 'avatar__image'
					}).appendTo($(a));
					var a2 = $('<a>').attr({
						href: 'profiles/profile/'+res['id_user'],
						class: 'userFeed'
					}).appendTo($(header));
					var div = $('<div>').addClass('photo_info').appendTo($(a2));
					var span = $('<span>').addClass('photo__author').text(res['username']).appendTo($(div));
					var a3 = $('<a>').attr({
						href: 'feeds/image_detail/'+res['id']
					}).appendTo($(article));
					var img = $('<img>').attr({
						class: 'photo__image',
						src: 'app/webroot/img/upload/'+res['image'],
						alt: 'main__feedphoto',
						title: 'main__feedphoto'
					}).appendTo($(a3));
					var div2 = $('<div>').addClass('photo__main').appendTo($(article));
					var div3 = $('<div>').addClass('photo__actions').appendTo($(div2));
					var heart = $('<ion-icon>').attr({
						name: 'heart',
						id: res['id'],
						class:'likeBtn',
						onclick:"likeFunc($(this))"
					}).appendTo($(div3));
					var i = $('<i>').addClass('fa fa-comment-o fa-2x').appendTo($(div3));
					var i2 = $('<i>').attr({
						class: 'fa fa-bookmark fa-2x',
						id: res['id']
					}).appendTo($(div3));
					var div4 = $('<div>').addClass('divlike').appendTo($(div2));
					var span2 = $('<span>').attr({
						id: 'countLike',
						class: '0'
					}).css({
						'padding-left': '14px',
					}).text('0').appendTo($(div4));
					var span7 = $('<span>').text(' Likes').appendTo($(div4));
					var div5 = $('<div>').addClass('comment more').appendTo($(div2));
					var span3 = $('<span>').addClass('span_username').text(res['username']).appendTo($(div5));
					var span_des = $('<span>').text(' '+res['description']).appendTo($(div5));
					var ul = $('<ul>').addClass('comments').appendTo($(div2));
					var li = $('<li>').addClass('photo__comment').appendTo($(ul));
					var span4 = $('<span>').addClass('photo__comment--author').appendTo($(li));
					var span5 = $('<span>').addClass('photo__date').text(res['create_at']).appendTo($(div2));
					var div6 = $('<div>').addClass('photo__addcomment-container').appendTo($(div2));
					var textarea = $('<textarea>').attr({
						class: 'photo__addcomment-area photoadd-comment',
						name: 'comment',
						placeholder: 'Add a comment...',
						id:res['id']
					}).appendTo($(div6));
					var i3 = $('<i>').attr({
						class: 'fa fa-ellipsis-h',
						id: res['id']
					}).appendTo($(div6));
				}
				$('.uploadfile').removeClass('hienlen');
				$('.den').removeClass('hienlen');
			})
			.fail(function() {
				console.log("error");
			});
			
		});

});
function likeFunc(obj){
		$.ajax({
			url: location.protocol + "//" + document.domain + "/cakephp/feeds/likeFunc/"+$(obj).attr('id')
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
}
