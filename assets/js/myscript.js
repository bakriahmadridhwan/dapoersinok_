const flashData = $('.flash-data').data('flashdata');
// const flashData2 = $('.flash').data('flashdata2');
const fData3 = $('.dashboard').data('flashdata');

if(flashData){
    Swal({
        title: 'Done!',
        text: flashData,
        type: 'success'
    });
}

// tombol-hapus
$('.tombol-hapus').on('click', function(e) {


    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

// tombol-kirim
    





// // flashData2
// // cek-akses
// $(function(){
//     var Toast = Swal.mixin({
//         toast: true,
//         position: top-end,
//         showConfirmButton: false,
//         timer: 3000
//     });

//     if(flash){
//         Toast.fire({
//             icon: 'success',
//             title: flash
//         });
//     }
// });

// fData3
// if(fData3){
//     Swal.fire({
//         title: 'Custom width, padding, background.',
//         width: 600,
//         padding: '3em',
//         background: '#fff url(/images/trees.png)',
//         backdrop: `
//             rgba(0,0,123,0.4)
//             url("/images/nyan-cat.gif")
//             left top
//             no-repeat
//             `
//     })
// }