/*jshint esversion: 6 */
$( document ).ready( function() {
    $( 'td.listen' ).each( function() {
        let headerObj = getTableHeader( $( this ) );

        if(headerObj.data().engineStatus == 1) {
            $( this ).attr( 'title', 'Click to listen' );
            $( this ).find( 'img' ).attr( 'src', 'static/img/Audio_Green.png' );
        } else if( headerObj.data().engineStatus == 2 ) {
            $( this ).attr( 'title', 'File may be missing' );
            $( this ).find( 'img' ).attr( 'src', 'static/img/Audio_Amber.png' );
        } else {
            $( this ).find( 'img' ).attr( 'src', 'static/img/Audio_Red.png' );
        }
    });
    $( 'td.listen' ).click( function () {
        let row = $( this ).closest( 'tr' );
        let headerObj = getTableHeader( $( this ) );
        playAudio(
            getAudioURI(
                row.data(),
                headerObj.data()
            )
        );
    });

    function getTableHeader( td ) {
        let col = $( td ).prevAll().length;
        return $( td ).parents( 'table' ).find( 'th' ).eq( col );
    }

    function getAudioURI( row, header ) {
        let audioURI = header.engineDir + '/' + row.word + '.' + header.ext;
        return audioURI;
    }

    function playAudio( audioURI ) {
        let sound = new Howl(
            {
                src: [
                    audioURI
                ]
            }
        );
        sound.play();
    }
});
