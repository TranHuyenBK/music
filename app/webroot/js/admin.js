$(document).ready(function(){
    var pathname = $(location).attr('pathname');
    pathname = pathname.split("/")[3];

    /** Register */
    $('input.first').on("change keyup paste", function(){
        if($(this).val()){
            $('input.second').removeAttr("readonly")
                                
        } else {
            $('input.second').attr("readonly", "readonly");
        }
    });

    $('input.second').on("change keyup paste",function(){
        if($(this).val()){
            $(this).parent().next().css("display", "block");
        } else {
            $(this).parent().next().css("display", "none");
        }
    });

    $('.next-button').hover(function(){
        $(this).css('cursor', 'pointer');
    });

    $('.next-button.name').click(function(){
        $('.name-section').addClass("fold-up");
        $('.contact-section').removeClass("folded");
        $('.instruction').text("How to contact with you?");
    });

    $('.next-button.contact').click(function(){
        $('.contact-section').addClass("fold-up");
        $('.instruction').text("Please enter your password");
        $('.password-section').removeClass("folded");
    });

    $('.next-button.password').click(function(){
        $('.password-section').addClass("fold-up");
        $('.instruction').text("That's all. Please wait for approval");
        $('.instruction').prev().hide();
        $('.success').css("marginTop", 0);
        $('#signupAdmin')[0].submit();
    });

    /** Navigation */
    var btnbell = $("#navbell-toggle");
    var btnuser = $("#navuser-toggle");
    var bell = $("#navbell");
    var user = $("#navuser");

    btnbell.on("click", function(){
        bell.show();
        user.hide();
    })

    btnuser.on("click", function(){
        bell.hide();
        user.show();
    })

    $("body").on("mouseup", function(){
        user.hide();
        bell.hide();
    });

    /** Table */
    var table = $('#darktable').DataTable( {
        "pagingType": "full_numbers",
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "dom": '<"darktable"l>tip',

        initComplete: function () {
            if( pathname == 'users') {
                //Select box user's role
                this.api().columns([5]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .prependTo( $("#col-user-role") )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                    column.data().unique().sort().each( function ( d ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );

                //Select box user's status
                this.api().columns([11]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .prependTo( $("#col-user-status") )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                    column.data().unique().sort().each( function ( d ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            };

            if( pathname == 'pictures') {
                //Select box pic's status
                this.api().columns([10]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .prependTo( $("#col-pic-status") )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                    column.data().unique().sort().each( function ( d ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }

            if( pathname == 'reports') {
                //Select box reported pic's status
                this.api().columns([3]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .prependTo( $("#col-report-pic-status") )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                    column.data().unique().sort().each( function ( d ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
                //Select box report's status
                this.api().columns([10]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .prependTo( $("#col-report-status") )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                    column.data().unique().sort().each( function ( d ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
                //Select box report's reason
                this.api().columns([7]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .prependTo( $("#col-report-reason") )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                    column.data().unique().sort().each( function ( d ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }
        }
        
    } );

    /** Input Search */
    // Search by keywords
    $("#keyword-search")
    .on('keyup', function() {
        if ($(this).val == null) {
            table.search($(this).val(), false, true).draw();
        } else {
            table.search($(this).val(), true, false).draw();
        }
    })
    .siblings('.empty').on('click', function(){
        $(this).siblings('input').val(null);
        table.search('', false, true).draw();
    });

    if(pathname == "users"){
        // Search by user name
        $("#user-name-search")
        .on('keyup', function() {
            if ($(this).val == null) {
                table.columns([1]).search($(this).val(), false, true).draw();
            } else {
                table.columns([1]).search($(this).val(), true, false).draw();
            }
        })
        .siblings('.empty').on('click', function(){
            $(this).siblings('input').val(null);
            table.columns([1]).search('', false, true).draw();
        });
    }

    if(pathname == "pictures"){
        // Search by pic name
        $("#pic-name-search")
        .on('keyup', function() {
            if ($(this).val == null) {
                table.columns([1]).search($(this).val(), false, true).draw();
            } else {
                table.columns([1]).search($(this).val(), true, false).draw();
            }
        })
        .siblings('.empty').on('click', function(){
            $(this).siblings('input').val(null);
            table.columns([1]).search('', false, true).draw();
        });
        // Search by pic owner
        $("#pic-owner-search")
        .on('keyup', function() {
            if ($(this).val == null) {
                table.columns([2]).search($(this).val(), false, true).draw();
            } else {
                table.columns([2]).search($(this).val(), true, false).draw();
            }
        })
        .siblings('.empty').on('click', function(){
            $(this).siblings('input').val(null);
            table.columns([2]).search('', false, true).draw();
        });
        // Search by pic tag
        $("#pic-tag-search")
        .on('keyup', function() {
            if ($(this).val == null) {
                table.columns([8]).search($(this).val(), false, true).draw();
            } else {
                table.columns([8]).search($(this).val(), true, false).draw();
            }
        })
        .siblings('.empty').on('click', function(){
            $(this).siblings('input').val(null);
            table.columns([8]).search('', false, true).draw();
        });
    }

    if(pathname == "tags"){
        // Search by tag name
        $("#tag-name-search")
        .on('keyup', function() {
            if ($(this).val == null) {
                table.columns([1]).search($(this).val(), false, true).draw();
            } else {
                table.columns([1]).search($(this).val(), true, false).draw();
            }
        })
        .siblings('.empty').on('click', function(){
            $(this).siblings('input').val(null);
            table.columns([1]).search('', false, true).draw();
        });
    }

    if(pathname == "reports"){
        // Search by reported picture's id
        $("#report-pic-search")
        .on('keyup', function() {
            if ($(this).val == null) {
                table.columns([1]).search($(this).val(), false, true).draw();
            } else {
                table.columns([1]).search($(this).val(), true, false).draw();
            }
        })
        .siblings('.empty').on('click', function(){
            $(this).siblings('input').val(null);
            table.columns([1]).search('', false, true).draw();
        });
        // Search by reported owner's name
        $("#report-owner-search")
        .on('keyup', function() {
            if ($(this).val == null) {
                table.columns([5]).search($(this).val(), false, true).draw();
            } else {
                table.columns([5]).search($(this).val(), true, false).draw();
            }
        })
        .siblings('.empty').on('click', function(){
            $(this).siblings('input').val(null);
            table.columns([5]).search('', false, true).draw();
        });
        // Search by reporter's name
        $("#report-er-search")
        .on('keyup', function() {
            if ($(this).val == null) {
                table.columns([6]).search($(this).val(), false, true).draw();
            } else {
                table.columns([6]).search($(this).val(), true, false).draw();
            }
        })
        .siblings('.empty').on('click', function(){
            $(this).siblings('input').val(null);
            table.columns([6]).search('', false, true).draw();
        });
    }

    /** Range Search */
    if(pathname == "users"){
        $.fn.dataTable.ext.search.push(
            function (settings, data) {
                //Search by a range of the number of followers
                var min = parseInt( $('#user-followers-min').val(), 10 );
                var max = parseInt( $('#user-followers-max').val(), 10 );
                var number = parseFloat( data[7] ) || 0;
                if ( ( isNaN( min ) && isNaN( max ) ) 
                    || ( isNaN( min ) && number <= max ) 
                    || ( min <= number   && isNaN( max ) )
                    || ( min <= number   && number <= max ) )
                {return true;}
                return false;
            },
            function (settings, data) {
                //Search by a range of the number of reported times
                var min = parseInt( $('#user-reports-min').val(), 10 );
                var max = parseInt( $('#user-reports-max').val(), 10 );
                var number = parseFloat( data[8] ) || 0;
                if ( ( isNaN( min ) && isNaN( max ) ) 
                    || ( isNaN( min ) && number <= max ) 
                    || ( min <= number   && isNaN( max ) )
                    || ( min <= number   && number <= max ) )
                {return true;}
                return false;
            },
            function (settings, data) {
                //Search by a range of creation time
                var min = $('#user-creation-from').datepicker("getDate");
                var max = $('#user-creation-to').datepicker("getDate");
                var startDate = new Date(data[9]);
                if ( ( min == null && max == null ) 
                    || ( min == null && startDate <= max ) 
                    || ( min <= startDate   && max == null )
                    || ( min <= startDate   && startDate <= max ) )
                {return true;}
                return false;
            },
            function (settings, data) {
                //Search by a range of login time
                var min = $('#user-login-from').datepicker("getDate");
                var max = $('#user-login-to').datepicker("getDate");
                var startDate = new Date(data[10]);
                if ( ( min == null && max == null ) 
                    || ( min == null && startDate <= max ) 
                    || ( min <= startDate   && max == null )
                    || ( min <= startDate   && startDate <= max ) )
                {return true;}
                return false;
            },
        )
    }

    if(pathname == "pictures"){
        $.fn.dataTable.ext.search.push(
            function (settings, data) {
                //Search by a range of the number of likes
                var min = parseInt( $('#pic-likes-min').val(), 10 );
                var max = parseInt( $('#pic-likes-max').val(), 10 );
                var number = parseFloat( data[4] ) || 0;
                if ( ( isNaN( min ) && isNaN( max ) ) 
                    || ( isNaN( min ) && number <= max ) 
                    || ( min <= number   && isNaN( max ) )
                    || ( min <= number   && number <= max ) )
                {return true;}
                return false;
            },
            function (settings, data) {
                //Search by a range of the number of shares
                var min = parseInt( $('#pic-shares-min').val(), 10 );
                var max = parseInt( $('#pic-shares-max').val(), 10 );
                var number = parseFloat( data[5] ) || 0;
                if ( ( isNaN( min ) && isNaN( max ) ) 
                    || ( isNaN( min ) && number <= max ) 
                    || ( min <= number   && isNaN( max ) )
                    || ( min <= number   && number <= max ) )
                {return true;}
                return false;
            },
            function (settings, data) {
                //Search by a range of the number of comments
                var min = parseInt( $('#pic-comments-min').val(), 10 );
                var max = parseInt( $('#pic-comments-max').val(), 10 );
                var number = parseFloat( data[6] ) || 0;
                if ( ( isNaN( min ) && isNaN( max ) ) 
                    || ( isNaN( min ) && number <= max ) 
                    || ( min <= number   && isNaN( max ) )
                    || ( min <= number   && number <= max ) )
                {return true;}
                return false;
            },
            function (settings, data) {
                //Search by a range of the number of pins
                var min = parseInt( $('#pic-pins-min').val(), 10 );
                var max = parseInt( $('#pic-pins-max').val(), 10 );
                var number = parseFloat( data[7] ) || 0;
                if ( ( isNaN( min ) && isNaN( max ) ) 
                    || ( isNaN( min ) && number <= max ) 
                    || ( min <= number   && isNaN( max ) )
                    || ( min <= number   && number <= max ) )
                {return true;}
                return false;
            },
            function (settings, data) {
                //Search by a range of the number of reported times
                var min = parseInt( $('#pic-reports-min').val(), 10 );
                var max = parseInt( $('#pic-reports-max').val(), 10 );
                var number = parseFloat( data[9] ) || 0;
                if ( ( isNaN( min ) && isNaN( max ) ) 
                    || ( isNaN( min ) && number <= max ) 
                    || ( min <= number   && isNaN( max ) )
                    || ( min <= number   && number <= max ) )
                {return true;}
                return false;
            },
        )
    }

    if(pathname == "tags"){
        $.fn.dataTable.ext.search.push(
            function (settings, data) {
                //Search by a range of the number of pictures
                var min = parseInt( $('#tag-pics-min').val(), 10 );
                var max = parseInt( $('#tag-pics-max').val(), 10 );
                var number = parseFloat( data[2] ) || 0;
                if ( ( isNaN( min ) && isNaN( max ) ) 
                    || ( isNaN( min ) && number <= max ) 
                    || ( min <= number   && isNaN( max ) )
                    || ( min <= number   && number <= max ) )
                {return true;}
                return false;
            },
        )
    }

    if(pathname == "reports"){
        $.fn.dataTable.ext.search.push(
            function (settings, data) {
                //Search by a range of report time
                var min = $('#report-time-from').datepicker("getDate");
                var max = $('#report-time-to').datepicker("getDate");
                var startDate = new Date(data[10]);
                if ( ( min == null && max == null ) 
                    || ( min == null && startDate <= max ) 
                    || ( min <= startDate   && max == null )
                    || ( min <= startDate   && startDate <= max ) )
                {return true;}
                return false;
            },
        )
    }

    $("#user-creation-from").datepicker({ 
        onSelect: function () { 
            table.draw(); 
        }, changeMonth: true, changeYear: true });
    $("#user-creation-to").datepicker({ 
        onSelect: function () { 
            table.draw(); 
        }, changeMonth: true, changeYear: true });

    $("#user-login-from").datepicker({ 
        onSelect: function () { 
            table.draw(); 
        }, changeMonth: true, changeYear: true });
    $("#user-login-to").datepicker({ 
        onSelect: function () { 
            table.draw(); 
        }, changeMonth: true, changeYear: true });

    $('.min, .max').change(function () {
        table.draw();
    });

    $('.adjust-quantity').on("click", function(){
        table.draw(); 
    })

    $('.max').parent().hide();
    $('.from-to-button').hide();

    $('.plus-button').on("click", function () {
        $(this).hide().siblings().show();
    });

    $('.from-to-button').on("click", function () {
        $(this) .hide()
                .siblings('.plus-button').show()
                .siblings('.range-max').hide()
                .children('input').val(null);
        table.draw();
    });

    //Select a single row
    $('#darktable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    //Edit records

    if(pathname == 'dashboard'){
        $('#nav-dashboard').addClass('text-white');
    }

    if(pathname == 'users'){
        $('#nav-manager, #nav-users-manager').addClass('text-white');
        var column = table.columns([6, 12]);
        column.visible( false );
    }

    if(pathname == 'pictures'){
        $('#nav-manager, #nav-pictures-manager').addClass('text-white');
        var column = table.columns([11]);
        column.visible( false );
    }

    if(pathname == 'tags'){
        $('#nav-manager, #nav-tags-manager').addClass('text-white');
    }

    if(pathname == 'reports'){
        $('#nav-manager, #nav-reports-manager').addClass('text-white');
        var column = table.columns([4, 11]);
        column.visible( false );
    }

    if(pathname == 'account'){
        $('#nav-account').addClass('text-white');
    }


    $('#edit').on( 'click', function () {
        column.visible( true );
    } );

    $('#cancel').on( 'click', function () {
        column.visible( false );
    } );


    /** Avatar Upload */
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });

    /** Admin Profile */
    $("#cancel-edit-profile, #submit-edit-profile, #reenter-password").hide();

    $("#edit-profile").click(function() {
        $("#cancel-edit-profile, #submit-edit-profile, #reenter-password").show();
        $("input").removeAttr('readonly');
    });
})