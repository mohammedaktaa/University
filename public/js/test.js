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
// import Vue from 'vue'
// import Axios from 'axios'
// Vue.prototype.$http=axios;

class Errors {
    constructor() {
        this.errors = {};
    }

    get($field) {
        if (this.errors[$field])
            return this.errors[$field][0];
    }

    set($filed) {
        this.errors = $filed;
    }

    clear($field) {
        delete this.errors[$field.target.name]
    }

    has($field) {
        return this.errors.hasOwnProperty($field)
    }

    any() {
        return Object.keys(this.errors).length > 0;
    }
}

let app = new Vue({
    el: '#root',
    data: {
        name_en: 'Semester',
        name_ar: 'فثل',
        errors: new Errors()
    },
    // components: { Axios },
    methods: {
        onSubmit() {
            axios.post('test-vue', {
                name_ar: this.name_ar,
                name_en: this.name_en   /*or this.$data*/
            })
                .then(response => alert('success'))
                .catch(error => this.errors.set(error.response.data))
        }
    }
});
