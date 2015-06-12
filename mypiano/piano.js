(function() {
    var notesOffset = 0;
    var blackKeys = {
        1: 1,
        3: 3,
        6: 1,
        8: 2,
        10: 3
    };

    $.each(blackKeys, function(k, v) {
        blackKeys[k] = ' black black' + v; //need a space before black, or else black keys will not display
    });

    function blackKeyClass(i) {
        return blackKeys[(i % 12) + (i < 0 ? 12 : 0)] || '';
    }

    var $keys = $('<div>', {'class': 'keys'}).appendTo('#piano');

    var buildingPiano = false;

    var isIos = navigator.userAgent.match(/(iPhone|iPad)/i);

    function buildPiano() {
        if (buildingPiano) return;
        buildingPiano = true;

        $keys.trigger('build-start.piano');
        $keys.empty().off('.play');

        function addKey(i) {
            var dataURI = isIos ? '' : Notes.getDataURI(i);

            // Create sound
            var sounds = [
                new Audio(dataURI),
                new Audio(dataURI),
                new Audio(dataURI)
            ];

            var curSound = 0;
            var pressedTimeout;
            dataURI = null;

            function play(evt) {
                sounds[curSound].pause();
                sounds[curSound].play();
                curSound = ++curSound % sounds.length;

                var $k = $keys.find('[data-key='+i+']').addClass('pressed');

                $keys.trigger('played-note.piano', [i, $k]);

                // visual feedback release pressed key
                window.clearTimeout(pressedTimeout);
                pressedTimeout = window.setTimeout(function() {
                    $k.removeClass('pressed');
                }, 200);
            }

            $keys.on('note-'+i+'.play', play);
            var $key = $('<div>', {
                'class': 'key' + blackKeyClass(i),
                'data-key': i,
                mousedown: function(evt) { $keys.trigger('note-'+i+'.play'); }
            }).appendTo($keys);
        }

        var i = -12, max = 14, addDelay = /Chrome/i.test(navigator.userAgent) ? 80 : 0;
        (function go() {
            addKey(i + notesOffset);
            if (++i < max) {
                window.setTimeout(go, addDelay);
            } else {
                buildingPiano = false;
                $keys.trigger('build-done.piano');
            }
        })();
    }

    buildPiano();
})();