
define(['jquery'], function($){
    return function(config, element) {

        function sendAjax(data) {
            $.ajax({
                url: config.url,
                type: "POST",
                data: {'oneshow': data},
                showLoader: true,
                cache: false,
                success:  function (response) {
                    $(".banner-block").html(response.output);
                    if ($(".banner-block img").attr('data-oneshow') !== undefined && $(".banner-block img").attr('data-oneshow') !== false) {
                        let id = $(".banner-block img").attr('data-id');
                        if(localStorage.getItem('oneShow')){
                            let arId = localStorage.getItem('oneShow');

                            if(!arId.includes(id)){
                                arId.push(id);
                                 localStorage.setItem('oneShow',JSON.stringify(arId));
                            }

                        }else{
                            localStorage.setItem('oneShow',JSON.stringify([id]))
                        }

                    }
                }
            });
        }



        if(config.action == 'getBanner') {
            let localStor = localStorage.getItem('oneShow');
        sendAjax(localStor);

        }

    }
});
