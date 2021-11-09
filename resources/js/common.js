function enableBSPopovers() {
    let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    window.popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl, {
            trigger: 'focus',
            container: 'body',
            html: true,
        });
    });
};

 function rangeSlider(selector, config, onChange) {
    $(".js-range-slider").ionRangeSlider({
        ...config,
        onChange: (data) => onChange(data),
        // onUpdate: (data) => onChange(data),
    });
};

 function createApplicationAssistSlider(callback) {
     rangeSlider(`.js-range-slider`, {
         skin: "square",
         values: [7, 14, 21, 30],
         grid: true,
         suffix: 'Days',
         postfix: ' days',
     }, (data) => callback(data));
 }


function createCkEditorInstance(element) {
    return ClassicEditor
        .create(document.querySelector(element), {
            toolbar: {
                items: [
                    'bold',
                    'italic',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'undo',
                    'redo'
                ]
            },
            language: 'en-gb',
            licenseKey: '',
        })
        .catch(error => {
            console.error('Oops, something went wrong! Unable to setup RTE');
            // console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
            // console.warn('Build id: egovwaupqek6-s9ijv3q58sk');
            console.error(error);
        });
}

function prepareForSignalVideo() {
    window.addEventListener('goToVideo', event => {
        let player = videojs('signal-video-player');
        player.src({type: event.detail.type, src:event.detail.url});

        let modelHolder = document.getElementById('signal-video-modal');
        let modal = bootstrap.Modal.getOrCreateInstance(modelHolder);
        modal.show();

        modelHolder.addEventListener('hide.bs.modal', () => {
            player.pause();
        })
    });
    window.addEventListener('initiateDelete', event => {
        if (!confirm(`Are you sure to delete "${event.detail.title}"? This cannot be undone`)) {
            return;
        }

        let target = document.getElementById('delete-form');
        target.action = event.detail.action;
        target.submit();
    });
}

enableBSPopovers();
