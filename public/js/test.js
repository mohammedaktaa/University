// function getSelected(url) {
//     console.log('twstUrl:'+url);
//     $.ajax({
//         type:'GET',
//         url: url,
//         success: function (data) {
//             console.log(JSON.parse(data));
//             var items = [];
//             for (var i = 0; i < data.length; i++) {
//
//                 items.push({
//                     "id": data[i].id,
//                     "text": data[i].text
//                 });
//                 // console.log(items)
//                 // $this.append("<option value=\"" + items[i].id + "\" selected>" + items[i].text + "</option>");
//             }
//         },
//         error: function () {
//             alert('failed');
//         }
//     })
// };
// $(function () {
//
// $('#study_year_id').select2({
//     placeholder: "Choose Your Study Year",
//     // minimumInputLength: 1,
//     theme: "bootstrap"
//                                                 });
//     var url = $('#study_year_id').data('url');
//     getSelected(url);
//
// });
//
// let data={
//     message:'Hello Mohammad'
// }
// new Vue({
//     el:'#root',
//     data:data
// })
