Vue.component('vue-pagination', paginationTawsif);
let delayTimer;
new Vue({
    el: '#app',
    name: 'CourseCategoryList',
    data: {
        categories: {
            total: 0,
            per_page: 2,
            from: 1,
            to: 0,
            current_page: 1
        },
        searchInput: '',

        loaders:{
            listLoader: false,
            searching: false,
        },

        category: {
            name: '',
            status: 1
        },

        editCategory: {
            id: '',
            name: '',
            status: ''
        },
        errors: {},
        errorsWhileEdit: {},
        
        saveBtn: true,
        updateBtn:false
    },
    methods:{
        getCategories(){
                let route;
                if(this.searchInput == ''){
                    route = '/category/list-data?&page=' + this.categories.current_page;
                }else{
                    route = '/category/list-data?&search_input='+ this.searchInput +'&page=' + this.categories.current_page;
                }
                this.$http.get(route).then((response)=>{
                       // console.log(response.data.data);
                    if(response.data.code == 200){
                        this.categories = response.data.data.categories;
                    }else{
                    }
                }).catch((err)=>{
                    //disable loaders
                    console.log(err);
                });  
        },
        searchGivenInput(){
            if(this.searchInput.length > 0){
                clearTimeout(delayTimer);
                delayTimer = setTimeout(() => {
                    this.loaders.searching = true;
                    var route = '/category/list-data?&search_input=' + this.searchInput;
                    this.$http.get(route)
                        .then((response)=>{
                            if(response.data.data.categories.data.length == 0){
                                this.categories = {
                                    total: 0,
                                    per_page: 2,
                                    from: 1,
                                    to: 0,
                                    current_page: 1
                                }
                            }else{

                                this.categories = response.data.data.categories;
                            }

                            this.loaders.searching = false;
                        });
                }, 350);

                this.status = 0;
            }else{
                this.getCategories();
            }
        },
        saveCategory(){
            if(confirm('Are you sure you want to add this category?')){
                var route = '/saveCategory';
                this.$http.post(route,this.category).then((response)=>{
                    if(response.data.code == 201){
                        this.category = {
                            name: '',
                            status: 1
                        };
                        this.getCategories();
                        swal('Success',response.data.message, "success",{buttons: false,timer: 1000,});
                    }else{
                        this.errors = response.data.message;
                        swal('Error',response.data.message, "error",{buttons: false,timer: 2000,});
                    }
                }).catch((err)=>{
                    //disable loaders

                });
            }
        },
        setCategoryForEdit(index){
                //console.log(this.categories.data[index].name);
                this.category = {
                id: this.categories.data[index].id,
                name: this.categories.data[index].name,
                status: this.categories.data[index].status,
            },
           this.saveBtn= false,
           this.updateBtn=true
        },
        updateCategory(){
            if(confirm('Are you sure you want to update this category?')){
                var route = '/updateCategory';
                this.$http.post(route, this.category ).then((response)=>{
                    if(response.data.code == 204){
                        this.category = {
                            name: '',
                            status: 1,
                            id : ''
                        };
                        this.getCategories();
                        this.saveBtn= true;
                        this.updateBtn=false;
                        swal('Success',response.data.message, "success",{buttons: false,timer: 1000,});
                    }else{
                        this.errorsWhileEdit = response.data.message;
                        swal('Success',response.data.message, "error",{buttons: false,timer: 1000,});
                    }
                }).catch((err)=>{
                    //disable loaders
                });
            }
        }
    },
    mounted(){
        Vue.http.headers.common['X-CSRF-TOKEN'] = document.getElementById('_token').getAttribute('content');
        this.getCategories();
    }
});
