$(document).ready(function(){
	var base_url = location.protocol + "//" + document.domain + "/music/app/webroot/img/feed_logo.png";

	$('#img-logo-picceo').attr('src', base_url);

	$('#way-back-home').attr('href', location.protocol + "//" + document.domain +"/music/feeds");

	$("#way-go-profile").attr('href', location.protocol + "//" + document.domain +"/music/profiles/profile/" + $("#way-go-profile").attr('id_session'));

	$(".avatar-profile-tt").attr('src', location.protocol + "//" + document.domain +"/music/app/webroot/img/avatarUsers/default.jpg");
	var cog = $('#cog');
	var popUp = $('.popUp');
	var closePopUp = $('#closePopUp');
	var cancelPopUp = $('#cancelPopUp');

	cog.click(function(){
		popUp.fadeIn(500);
	});

	closePopUp.click(function(){
		popUp.fadeOut(500);
	});

	cancelPopUp.click(function(){
		popUp.slideUp(500);
	});
	$(".comment").shorten();

var limit = 3;
var start = 0;
var action = 'inactive';
function load_country_data(limit, start)
{
$.ajax({
url: location.protocol + "//" + document.domain +"/music/feeds/home_content",
method:"POST",
data:{limit:limit, start:start},
cache:false,
success:function(data)
{
$('#load_data').append(data);
if(data == '')
{
$('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
action = 'active';
}
else
{
action = "inactive";
}
}
});
}

if(action == 'inactive')
{
action = 'active';
load_country_data(limit, start);
}
$(window).scroll(function(){
if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
{
action = 'active';
start = start + limit;
setTimeout(function(){
load_country_data(limit, start);
}, 1000);
}
});


	$("#file-upload").change(function() {
        var reader = new FileReader();
		reader.onload = function (e) {
			$('#avatar-pic').attr('src', e.target.result);
		}
		reader.readAsDataURL(this.files[0]);
    });
    //MOre
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
    var availableTags = [
    	{
    		value: 'Jons',
    		id: 1
    	},
    	{
    		value: 'Aons',
    		id: 2
    	},
    	{
    		value: 'Bons',
    		id: 3
    	},
    	{
    		value: '#Qons',
    		id: 4
    	},
    	{
    		value: '#Hons',
    		id: 5
    	},
    	{
    		value: '#Uons',
    		id: 6
    	},
    	{
    		value: 'Ions',
    		id: 7
    	},
    	{
    		value: 'Ions',
    		id: 6
    	} 
    ];
    console.log(availableTags);
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
    			src: location.protocol + "//" + document.domain + "../img/avatar.jpg",
    		}).addClass('div-img-avatar-search').appendTo($divContentImag);
    	}else {
    		$icontags = $('<i/>').addClass('fa fa-hashtag icon-img-search').appendTo($divContentImag);
    	}

    	$divContentSearch = $('<div/>').addClass('col-9 div-content-search-2').appendTo($divContent).text(item.value + item.id);
        return $DivDataSearch = $('<div/>').data('ui-autocomplete-item', item).append($divContent).appendTo($('#autocompleteTest'));
    };

    $("#x").on("click",function () {
        $("#searchText").val('');
    })

});


(function($) {
    $.fn.shorten = function(settings) {
        "use strict";

        var config = {
            showChars: 80,
            minHideChars: 10,
            ellipsesText: "...",
            moreText: "Read More...",
            lessText: "...Less",
            onLess: function() {},
            onMore: function() {},
            errMsg: null,
            force: false
        };

        if (settings) {
            $.extend(config, settings);
        }

        if ($(this).data('jquery.shorten') && !config.force) {
            return false;
        }
        $(this).data('jquery.shorten', true);

        $(document).off("click", '.morelink');

        $(document).on({
            click: function() {

                var $this = $(this);
                if ($this.hasClass('less')) {
                    $this.removeClass('less');
                    $this.html(config.moreText);
                    $this.parent().prev().animate({'height':'0'+'%'}, function () { $this.parent().prev().prev().show(); }).hide('fast', function() {
                        config.onLess();
                      });

                } else {
                    $this.addClass('less');
                    $this.html(config.lessText);
                    $this.parent().prev().animate({'height':'100'+'%'}, function () { $this.parent().prev().prev().hide(); }).show('fast', function() {
                        config.onMore();
                      });
                }
                return false;
            }
        }, '.morelink');

        return this.each(function() {
            var $this = $(this);

            var content = $this.html();
            var contentlen = $this.text().length;
            if (contentlen > config.showChars + config.minHideChars) {
                var c = content.substr(0, config.showChars);
                if (c.indexOf('<') >= 0) // If there's HTML don't want to cut it
                {
                    var inTag = false; // I'm in a tag?
                    var bag = ''; // Put the characters to be shown here
                    var countChars = 0; // Current bag size
                    var openTags = []; // Stack for opened tags, so I can close them later
                    var tagName = null;

                    for (var i = 0, r = 0; r <= config.showChars; i++) {
                        if (content[i] == '<' && !inTag) {
                            inTag = true;

                            // This could be "tag" or "/tag"
                            tagName = content.substring(i + 1, content.indexOf('>', i));

                            // If its a closing tag
                            if (tagName[0] == '/') {


                                if (tagName != '/' + openTags[0]) {
                                    config.errMsg = 'ERROR en HTML: the top of the stack should be the tag that closes';
                                } else {
                                    openTags.shift(); // Pops the last tag from the open tag stack (the tag is closed in the retult HTML!)
                                }

                            } else {
                                // There are some nasty tags that don't have a close tag like <br/>
                                if (tagName.toLowerCase() != 'br') {
                                    openTags.unshift(tagName); // Add to start the name of the tag that opens
                                }
                            }
                        }
                        if (inTag && content[i] == '>') {
                            inTag = false;
                        }

                        if (inTag) { bag += content.charAt(i); } // Add tag name chars to the result
                        else {
                            r++;
                            if (countChars <= config.showChars) {
                                bag += content.charAt(i); // Fix to ie 7 not allowing you to reference string characters using the []
                                countChars++;
                            } else // Now I have the characters needed
                            {
                                if (openTags.length > 0) // I have unclosed tags
                                {
                                    //console.log('They were open tags');
                                    //console.log(openTags);
                                    for (j = 0; j < openTags.length; j++) {
                                        //console.log('Cierro tag ' + openTags[j]);
                                        bag += '</' + openTags[j] + '>'; // Close all tags that were opened

                                        // You could shift the tag from the stack to check if you end with an empty stack, that means you have closed all open tags
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    c = $('<div/>').html(bag + '<span class="ellip">' + config.ellipsesText + '</span>').html();
                }else{
                    c+=config.ellipsesText;
                }

                var html = '<div class="shortcontent">' + c +
                    '</div><div class="allcontent">' + content +
                    '</div><span><a href="javascript://nop/" class="morelink">' + config.moreText + '</a></span>';

                $this.html(html);
                $this.find(".allcontent").hide(); // Hide all text
                $('.shortcontent p:last', $this).css('margin-bottom', 0); //Remove bottom margin on last paragraph as it's likely shortened
            }
        });
    };
})(jQuery);


function send_change_pass(){
	$.ajax({
		url: location.protocol + "//" + document.domain + "/music/profiles/check_old_pass",
		type: 'POST',
		data: {
			old_pass : $("#old_password").val()
		}
	}).done(function(res){
		if(res != "Old_Pass_True"){
			alert("Not Found Old Pass");
		}else {
			if($("#new_password").val() == $("#comfirm_new_pass").val() ){
				alert("Re Login");
				change_pass();
			} else {
				alert("2 Pass moi ko");
			}
		}
	});
}

function change_pass(){
	$.ajax({
		url: location.protocol + "//" + document.domain + "/music/profiles/change_pass",
		type: 'POST',
		data: {
			new_pass : $("#new_password").val()
		}
	}).done(function(){
		console.log("Saved");
		$(location).attr('href', location.protocol + "//" + document.domain + "/music/users/login");
	});
}

function show_nitifications(){
	//$('.trang').toggleClass('hienlen');
	$('.trang').addClass('hienlen');
	$('.div-notificetions').addClass('hienlen');
}

function send_edit_profile(){
	if($('#file-upload').val()){
		var file = $('#file-upload')[0].files[0];
		var flag = 1;
	} else {
		var file = '';
		var flag = 0;
	}
	var formData = new FormData();
	formData.append('firstName', $("#first_name").val());
	formData.append('lastName', $("#last_name").val());
	formData.append('Bio', $("#intro").val());
	formData.append('phone_number', $("#phone-number").val());
	formData.append('address', $("#adress").val());

	formData.append('flag',flag);
	formData.append('upload_input',file);
	$.ajax({
		url: location.protocol + "//" + document.domain + "/music/profiles/send_edit_profile",
		type: 'POST',
		method: 'post',
		processData: false,
		contentType: false,
		data: formData
	}).done(function(res){
		alert("Update Seccefully");
		//$(location).attr('href', location.protocol + "//" + document.domain + "/music/feeds");
	});
}

function test(){
    console.log("JKHJhkjs");
}