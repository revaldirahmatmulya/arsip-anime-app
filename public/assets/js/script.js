$('.anime-card').on('click', '.title-clicked', function () {
    $(document).ready(function () {
        console.log("ready!");
    });
    // let apiKey = "AIzaSyD2cTxPXuFEOAbdC8BicdGRhpzo0Mb44Lg"
    // let search = $(this).data('id') + " pv"
    // console.log(search);
    // $.ajax({
    //     url: 'https://www.googleapis.com/youtube/v3/search?key=' + apiKey + '&type=video&part=snippet&q=' + search + '&maxresult=1',
    //     type: 'get',
    //     dataType: 'json',
    //     success: function (data) {
    //         console.log(data.items[0].id.videoId)
    //         if (data) {
    //             $(".video").html(`
    //         <h5 class="border-bottom">Video Promotion</h5>
    //         <iframe width="420" height="315" src="http://www.youtube.com/embed/${data.items[0].id.videoId}" frameborder="0" allowfullscreen></iframe>

    //         `)
    //         } else {
    //             $(".video").html(`
    //                     < h3 > ERROR FROM SERVER!</h3 >
    //                     `)
    //         }
    //     }
    // })
    console.log("oke");

})