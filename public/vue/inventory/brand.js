Vue.component('vue-pagination', paginationTawsif);
let delayTimer;
new Vue({
    el: '#app',
    name: 'BrandList',
    data: {
        brands: {
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

        brand: {
            name: '',
            status: 1
        },

        editBrand: {
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
        getBrands(){
                let route;
                if(this.searchInput == ''){
                    route = '/brand/list-data?&page=' + this.brands.current_page;
                }else{
                    route = '/brand/list-data?&search_input='+ this.searchInput +'&page=' + this.brands.current_page;
                }
                this.$http.get(route).then((response)=>{
                       // console.log(response.data.data);
                    if(response.data.code == 200){
                        this.brands = response.data.data.brands;
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
                    var route = '/brand/list-data?&search_input=' + this.searchInput;
                    this.$http.get(route)
                        .then((response)=>{
                            if(response.data.data.brands.data.length == 0){
                                this.brands = {
                                    total: 0,
                                    per_page: 2,
                                    from: 1,
                                    to: 0,
                                    current_page: 1
                                }
                            }else{

                                this.brands = response.data.data.brands;
                            }
                            this.loaders.searching = false;
                        });
                }, 350);
                this.status = 0;
            }else{
                this.getBrands();
            }
        },
        saveBrand(){
            if(confirm('Are you sure you want to add this brand?')){
                var route = '/saveBrand';
                this.$http.post(route,this.brand).then((response)=>{
                    if(response.data.code == 201){
                        this.brand = {
                            name: '',
                            status: 1
                        };
                        this.getBrands();
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
        setBrandForEdit(index){
                //console.log(this.categories.data[index].name);
                this.brand = {
                id: this.brands.data[index].id,
                name: this.brands.data[index].name,
                status: this.brands.data[index].status,
            },
           this.saveBtn= false,
           this.updateBtn=true
        },
        updateBrand(){
            if(confirm('Are you sure you want to update this brand?')){
                var route = '/updateBrand';
                this.$http.post(route, this.brand ).then((response)=>{
                    if(response.data.code == 204){
                        this.brand = {
                            name: '',
                            status: 1,
                            id : ''
                        };
                        this.getBrands();
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
        this.getBrands();
    }
});
