document.getElementById( 'length' ).addEventListener(
    'input',
    function ( e ) {
        var password = '';
        var length = e.srcElement.value;

        while ( length-- > 0 ) {
            dummy = Math.floor( 100 * Math.random() ) % 36;
            if ( dummy < 10 ) {
                password += dummy;
            }
            else {
                password += String.fromCharCode( dummy - 10 + 97 );
            }
        }

        document.getElementById( 'password' ).innerHTML = password;
    }
);
