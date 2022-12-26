$(document).ready(function () {
    $('.submit').click(function (e) {

        e.preventDefault();

        let form = $(this).parent().parent();
        let type = form.data('type');
        let name = form.find('input[name=name]');
        let phone = form.find('input[name=phone]');
        let hr = form.find('input[name=hr]');

        let formData = new FormData(form[0]);
        formData.append('action', 'send');

        if (hr.val() != '' && hr.val() != undefined) {
            formData.append('hr', 'hr');
        }

        if ((name.val() != '' && name.val() != undefined) && (phone.val() != '' && phone.val() != undefined)) {
            if (type == 'popup') {
                ym(85043107, 'reachGoal', 'popup');
                gtag('event', 'popup', { 'event_category': 'popup' });
            }
            else {
                ym(85043107, 'reachGoal', 'forma');
                gtag('event', 'forma', { 'event_category': 'forma' });
            }

            $.ajax({
                type: 'POST',
                url: ajax.ajax_url,
                contentType: false,
                processData: false,
                data: formData,
                success: function () {
                    $.fancybox.open(
                        {
                            src: '#modal-success',
                            type: 'inline'
                        }
                    );
                    form.trigger("reset");
                    $('.send__form-upload label span').text('Прикрепить файл');
                },
                error: function () {
                    $.fancybox.open(
                        {
                            src: '#modal-error',
                            type: 'inline'
                        }
                    );
                }
            })

        }
        else {
            $.fancybox.open(
                {
                    src: '#modal-warning',
                    type: 'inline'
                }
            );
        }

        return false;

    });

    $.fn.setCursorPosition = function (pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };

    $("input[name=phone]").click(function () {
        $(this).setCursorPosition(3);
    }).mask("+7(999)99-99-999");
});