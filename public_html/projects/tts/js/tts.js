/*jshint esversion: 6 */
$( document ).ready(function() {
    $('td.listen').click(function () {
        let col = $(this).prevAll().length;
        let row = $(this).closest('tr');
        let headerObj = $(this).parents('table').find('th').eq(col);
        getData(row.data(), headerObj.data());
    });

    function getData(row, header) {
        console.debug('Clicked on word "' + row.word + '" for engine "' + header.engine + '"');
        let audioURI = header.engineDir + '/' + row.word + '.mp3';
        console.debug('Getting audio from ' + audioURI);
        let sound = new Howl({src: [audioURI]});
        sound.play();
    }
});
