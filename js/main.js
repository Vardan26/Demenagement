$('.form__row__label').on('click', function () {
});
function checkbox() {
    var check = document.getElementById(".form__row__label").checked;
    var box = document.getElementById("form__row__label");

    if (check == true) {
        box.checked = false;
    }
    else if (check == false) {
        box.checked = true;
    }
}


var endTime,
    startTime = (new Date()).getTime();

window.addEventListener('load', function () {
    endTime = (new Date()).getTime();
    websiteDuration = endTime - startTime;
    console.log("website loaded in: " + websiteDuration);
    afterWebsiteLoaded(websiteDuration);
}, false);


// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
var videoid = $('#player').attr('data-videoid');
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '100%',
        width: '100%',
        allowtransparency: "true",
        playerVars: {
            loop: 0,
            autoplay: 1,
            controls: 0,
            showinfo: 0,
            autohide: 1,
            disablekb: 1,
            color: 'white',
            theme: 'light',
            rel: 0,
            modestbranding: 1,
            vq: 'hd720',
            start: 6,
            end: 190

        },
        videoId: videoid,
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    event.target.playVideo();
    player.mute();
}

var done = false;

function onPlayerStateChange(event) {
    $('#player').addClass('show');
    if (event.data == 0) {
        event.target.playVideo();
        console.log('end');
    }
}

function stopVideo() {
    player.stopVideo();
}


function afterWebsiteLoaded(websiteDuration) {
    $('#player').css({
        width: (($(window).innerWidth()) * 1.1) + 'px',
        height: (($(window).innerHeight()) * 1.2) + 'px',
        left: ((($(window).innerWidth()) * 1.1) / -12) + 'px'
    });
    if (!($('.playThis').length)) {
        stopVideo();
        $('#player').addClass('hidden');
    }
    if (websiteDuration > 12000) {
        stopVideo();
        $('#player').addClass('hidden');
    }
}

window.onresize = function () {
    $('#player').css({
        width: (($(window).innerWidth()) * 1.5) + 'px',
        height: (($(window).innerHeight()) * 1.2) + 'px',
        left: ((($(window).innerWidth()) * 1.5) / -8) + 'px'
    });
};