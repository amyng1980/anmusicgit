
(function() {

    // test if we can use blobs
    var canBlob = false;
    if (window.webkitURL && window.Blob) {
        try {
            new Blob();
            canBlob = true;
        } catch(e) {}
    }

    function asBytes(value, bytes) {
        var result = [];
        for (; bytes>0; bytes--) {
            result.push(String.fromCharCode(value & 255));
            value >>= 8;
        }
        return result.join('');
    }

    function attack(i) {
        return i < 200 ? (i/200) : 1;
    }

    var DataGenerator = $.extend(function(styleFn, volumeFn, cfg) {
        cfg = $.extend({
            freq: 440,
            volume: 32767,
            sampleRate: 11025, // Hz
            seconds: .5,
            channels: 1
        }, cfg);

        var data = [];
        var maxI = cfg.sampleRate * cfg.seconds;
        for (var i=0; i < maxI; i++) {
            for (var j=0; j < cfg.channels; j++) {
                data.push(
                    asBytes(
                        volumeFn(
                            styleFn(cfg.freq, cfg.volume, i, cfg.sampleRate, cfg.seconds, maxI),
                            cfg.freq, cfg.volume, i, cfg.sampleRate, cfg.seconds, maxI
                        ) * attack(i), 2
                    )
                );
            }
        }
        return data;
    }, {
        style: {
            wave: function(freq, volume, i, sampleRate, seconds) {
                return Math.sin((2 * Math.PI) * (i / sampleRate) * freq);
            }
        },
        volume: {

            linearFade: function(data, freq, volume, i, sampleRate, seconds, maxI) {
                return volume * ((maxI - i) / maxI) * data;
            },
        }
    });
    DataGenerator.style.default = DataGenerator.style.wave;
    DataGenerator.volume.default = DataGenerator.volume.linearFade;


    function toDataURI(cfg) {
        cfg = $.extend({
            channels: 1,
            sampleRate: 11025, // Hz
            bitDepth: 16, // bits/sample
            seconds: .5,
            volume: 20000,//32767,
            freq: 440
        }, cfg);

        //
        // Format Sub-Chunk
        //

        var fmtChunk = [
            'fmt ', // sub-chunk identifier
            asBytes(16, 4), // chunk-length
            asBytes(1, 2), // audio format (1 is linear quantization)
            asBytes(cfg.channels, 2),
            asBytes(cfg.sampleRate, 4),
            asBytes(cfg.sampleRate * cfg.channels * cfg.bitDepth / 8, 4), // byte rate
            asBytes(cfg.channels * cfg.bitDepth / 8, 2),
            asBytes(cfg.bitDepth, 2)
        ].join('');

        //
        // Data Sub-Chunk
        //

        var sampleData = DataGenerator(
            cfg.styleFn || DataGenerator.style.default,
            cfg.volumeFn || DataGenerator.volume.default,
            cfg);
        var samples = sampleData.length;

        var dataChunk = [
            'data', // sub-chunk identifier
            asBytes(samples * cfg.channels * cfg.bitDepth / 8, 4), // chunk length
            sampleData.join('')
        ].join('');


        var data = [
            'RIFF',
            asBytes(4 + (8 + fmtChunk.length) + (8 + dataChunk.length), 4),
            'WAVE',
            fmtChunk,
            dataChunk
        ].join('');

        if (canBlob) {
            var view = new Uint8Array(data.length);
            for (var i = 0; i < view.length; i++) {
                view[i] = data.charCodeAt(i);
            }
            var blob = new Blob([view], {type: 'audio/wav'});
            return  window.webkitURL.createObjectURL(blob);
        } else {
            return 'data:audio/wav;base64,' + btoa(data);
        }
    }

    function noteToFreq(stepsFromMiddleC) {
        return 440 * Math.pow(2, (stepsFromMiddleC+3) / 12);
    }

    var Notes = {
        sounds: {},
        getDataURI: function(n, cfg) {
            cfg = cfg || {};
            cfg.freq = noteToFreq(n);
            return toDataURI(cfg);
        },
        noteToFreq: noteToFreq
    };

    window.DataGenerator = DataGenerator;
    window.Notes = Notes;
})();
