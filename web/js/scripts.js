// alert('hello');
//     $('.container').append(`<div>Hello append</div>`);

setTimeout(()=>{
    $('.bootAlert').animate({
        'right' : -220
    }, 1000 , function () {
        $('.bootAlert').remove();
    });
},2000);


/*
$('body').on('click', '.bootAlert .closebut' , function () {
    $('.bootAlert').animate({
        'right' : -220
    }, 1000 , function () {
        $('.bootAlert').remove();
    });
})*/
