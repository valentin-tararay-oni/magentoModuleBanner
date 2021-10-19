define(['jquery'], function ($) {
    return function (config, element) {

        function sendAjax(data) {
            if (!data) {
                data = '';
            }
            $.ajax({
                url: config.url,
                type: "POST",
                data: {'oneshow': data},
                showLoader: true,
                cache: false,
                success: function (response) {
                    $(".banner-block").html(response.output);
                    $(".banner-block img").on('click',function (){
                        $('.popup').show();
                    })
                    $(".close-icon").on('click',function (){
                        $('.popup').hide();})
                    if ($(".banner-block img").attr('data-oneshow') !== undefined && $(".banner-block img").attr('data-oneshow') !== false) {
                        let id = $(".banner-block img").attr('data-id');

                        if (localStorage.getItem('oneShow')) {

                            let arId = JSON.parse(localStorage.getItem('oneShow'));
                            if (!arId.includes(id)) {
                                arId.push(id);
                                localStorage.setItem('oneShow', JSON.stringify(arId));
                            }
                        } else {
                            let arId = [];
                            arId.push(id)
                            localStorage.setItem('oneShow', JSON.stringify(arId))
                        }

                    }
                }
            });
        }

        if (config.action == 'getBanner') {
            let localStor = JSON.parse(localStorage.getItem('oneShow'));
            sendAjax(localStor);
        }

    }
});
