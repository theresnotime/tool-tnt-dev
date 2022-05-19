/*jshint esversion: 6 */
$( document ).ready(function() {
    $('td.listen').each(function() {
        let col = $(this).prevAll().length;
        let row = $(this).closest('tr');
        let headerObj = $(this).parents('table').find('th').eq(col);
        if(headerObj.data().engineStatus == 1) {
            console.log($(this).find('img'));
            $(this).attr('title', 'Click to listen');
            $(this).find('img').attr('src', 'static/img/Audio_Green.png');
        } else if(headerObj.data().engineStatus == 2) {
            $(this).attr('title', 'File may be missing');
            $(this).find('img').attr('src', 'static/img/Audio_Amber.png');
        } else {
            $(this).find('img').attr('src', 'static/img/Audio_Red.png');
        }
    });
    $('td.listen').click(function () {
        let col = $(this).prevAll().length;
        let row = $(this).closest('tr');
        let headerObj = $(this).parents('table').find('th').eq(col);
        playAudio(
            getAudioURI(
                row.data(),
                headerObj.data()
            )
        );
    });

    function getAudioURI(row, header) {
        console.debug('Clicked on word "' + row.word + '" for engine "' + header.engine + '"');
        let audioURI = header.engineDir + '/' + row.word + '.mp3';
        console.debug('Getting audio from ' + audioURI);
        return audioURI;
    }

    function playAudio(audioURI) {
        let sound = new Howl({src: [audioURI]});
        sound.play();
    }
});
