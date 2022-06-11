$(document).on('click', '#bookBtn', function (e) {
    e.preventDefault()
   reservation();

})
$(document).on('click', '#contact', function (e) {
    e.preventDefault()
    sentMessage();

})
// $(document).on('click', '#pretrazi', function (e) {
//     e.preventDefault()
//     search();
//
// })
var form_data = new FormData();
const token = $('meta[name="csrf-token"]').attr('content');
var regexName=`([A-Z][a-zA-Z]*)`
var regexEmail=`^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4}$`
var regexPhone=`^(\\+)?([ 0-9]){10,16}$`;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': token
    }}
)

function setFormDataForInsertReservation() {
    form_data.set('id', $('#id').val());
    form_data.set('idKor', $('#korID').val());
    form_data.set('nameFull',$('#nameFull').val())
    form_data.set('email', $('#email').val());
    form_data.set('roomName', $('#roomName').val());
    form_data.set('category', $('#category').val());
    form_data.set('dateIn', $('#dateIn').val());
    form_data.set('dateOut', $('#dateOut').val());
    form_data.set('cena',$("#cena").val())
    form_data.set('_token', token);
}

function reservation(){
    setFormDataForInsertReservation();
    var url='/room';
    $.ajax({
        url:baseUrl+url,
        type:"post",
        data:form_data,
        success:function(data){
            console.log("da")
           $('.res').html("Reservation is successful!")
            deleteInput();
        },
        error:function(xhr){
            console.log(xhr)
            if(xhr.status){$('.errorRes').html("Invalid value!")}
        },
        contentType: false,
        processData: false

    });
}
function deleteInput()
{
    $('#roomName').val("");
    $('#category').val("");
     $('#dateIn').val("");
     $('#dateOut').val("");
   $("#cena").val("");
}
function  deleteInputMes()
{
    $('#name').val("");
    $('#email').val("");
    $('#phone').val("");
    $('#message').val("")
}

function setFromDataMessage()
{
    form_data.set('name', $('#name').val());
    form_data.set('email', $('#email').val());
    form_data.set('phone',$('#phone').val())
    form_data.set('message',$('#message').val())
    form_data.set('_token', token);
}
function validMessage(){
    var niz=[];
    if(!(form_data.get('name') && form_data.get('name').match(regexName) ))
    {
        $('.nameEro').html("eg. Rajko");
    }
    if(!(form_data.get('email') && form_data.get('email').match(regexEmail) ))
    {
        $('.nameEm').html("eg. rajko@gmail.com");
    }
    if(!(form_data.get('phone') && form_data.get('phone').match(regexPhone) ))
    {
        $('.nameTel').html("eg. +39 999 999 99599");
    }
    if(niz.length==0){return true}
}
function sentMessage(){
    setFromDataMessage();
    if(validMessage()) {
        // console.log("da")
        var url = '/contact';
        $.ajax({
            url: baseUrl + url,
            type: "post",
            data: form_data,
            success: function (data) {
                $('.res').html("Messages is successful sent!")
                deleteInputMes();
            },
            error: function (xhr) {
                console.log(xhr)
                if (xhr.status) {
                    $('.errorRes').html("Invalid value!")
                }
            },
            contentType: false,
            processData: false

        });
    }
}











//  function boxCheck(){
//      return  values = (function() {
//          var a = [];
//          $(".form-check-input:checked").each(function() {
//              a.push(this.value);
//          });
//          return a;
//      })()
//  }

// function search(){
//     setFromDataSearch();
//     // console.log(form_data.getAll('text'));
//     var url='/roomSearch';
//     $.ajax({
//         url:baseUrl+url,
//         type:"get",
//         data:form_data,
//         success:function(data){
//             console.log(data);
//             // $('.res').html("Reservation is successful!")
//             // deleteInput();
//         },
//         error:function(xhr){
//             console.log(xhr)
//             if(xhr.status){$('.errorRes').html("Invalid value!")}
//         },
//         contentType: false,
//         processData: false
//
//     });
// }
// var ispis='';
// function printRooms(data){
//     console.log('da')
//     if(data.length==0)
//     {
//         ispis="Not rooms found";
//     }
//     else{
//         for (const d of data) {
//             ispis+=`<div class="col-md-4 col-sm-6">
//     <div id="serv_hover"  class="room">
//         <div class="room_img">
//             <figure><img src="${publicFolder}assets/images/${d.image}"  alt="${d.name}"/></figure>
//         </div>
//         <div class="bed_room">
//             <h3>${d.name}</h3>
//             <p>${d.description}</p>
//             <a href="{{route('room.show',['id'=>${d.id}])}}"><span class="span">Details...</span></a>
//         </div>
//     </div>
// </div>`
//         }
//     }
//     $("#sobe").html(ispis)
// }


