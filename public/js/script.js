
/*$( "#mypanel" ).trigger( "updatelayout" );

*/

/*$(document).no('pageshow' ,".main", function () {
    // body...
    alert();
});*/

/*$( document ).on( 'pagecreate ', "#swap_event", function() {
    $( document ).on( "swipeleft swiperight", "#swap_event", function( e ) {  
                        // We check if there is no open panel on the page because otherwise
                        // a swipe to close the left panel would also open the right panel (and v.v.).
                        // We do this by checking the data that the framework stores on the page element (panel: open).
                        if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) {
                            if ( e.type === "swipeleft" ) {
                                $( "#right-panel" ).panel( "open" );
                                load_users(id);

                            } else if ( e.type === "swiperight" ) {
                                $( "#left-panel" ).panel( "open" );
                                new_messages(5);
                            }
                        }
                    });
});


*/
/*  $( "#mypanel" ).trigger( "updatelayout" );
*/

//this to change the class in theame class 
//this is related to setting page and layout vuew
$( document ).on( 'pageshow',  function() {
   $("#theme-selector" ).on( "change",  function( event ) {
   var themeClass = $( "#theme-selector input:checked" ).attr( "id" );
   $('#theam-changer').removeClass('ui-page-theme-a ui-page-theme-b ui-page-theme-c ui-page-theme-d ui-page-theme-e');
    $('#theam-changer').addClass("ui-page-theme-"+ themeClass);
   // alert(themeClass)
   });

}); 



           /* $( "#theme-selector input" ).on( "change", function( event ) {
                var themeClass = $( "#theme-selector input:checked" ).attr( "id" );
                     
                $( "#testpage" ).removeClass( "ui-page-theme-a ui-page-theme-b" ).addClass( "ui-page-theme-" + themeClass );
                $( "#ui-body-test" ).removeClass( "ui-body-a ui-body-b" ).addClass( "ui-body-" + themeClass );
                $( "#ui-bar-test, #ui-bar-form" ).removeClass( "ui-bar-a ui-bar-b" ).addClass( "ui-bar-" + themeClass );
                $( ".ui-collapsible-content" ).removeClass( "ui-body-a ui-body-b" ).addClass( "ui-body-" + themeClass );
                $( ".theme" ).text( themeClass );
            });
            $( "#opt-shadow input" ).on( "change", function( event ) {
                if ( $( "#on" ).prop( "checked" ) ) {
                    $( "#testpage" ).removeClass( "noshadow" );
                } else if ( $( "#off" ).prop( "checked" ) ) {
                    $( "#testpage" ).addClass( "noshadow" );
                }
            });
            $( "#opt-navbars input" ).on( "change", function( event ) {
                if ( $( "#show" ).prop( "checked" ) ) {
                    $( "#testpage .ui-navbar" ).show();
                    $( "#testpage .ui-footer h4" ).hide();
                } else if ( $( "#hide" ).prop( "checked" ) ) {
                    $( "#testpage .ui-navbar" ).hide();
                    $( "#testpage .ui-footer h4" ).show();
                }
            });
        });
*/
        







  