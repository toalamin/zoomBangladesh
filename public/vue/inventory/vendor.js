Vue.component('vue-pagination', paginationTawsif);
let delayTimer;
new Vue({
    el: '#app',
    name: 'VendorList',
    data: {
        vendors: {
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

        vendor: {
            vendorid: '',
            name: '',
            email: '',
            phone: '',
            address: '',
            credit_limit: '',
            status: 1
        },

        editVendor: {
            id: '',
            vendorid: '',
            name: '',
            email: '',
            phone: '',
            address: '',
            credit_limit: '',
            status: ''
        },
        errors: {},
        errorsWhileEdit: {},
        saveBtn: true,
        updateBtn:false,
        showForm:false
    },
    methods:{
        getVendors(){
                let route;
                if(this.searchInput == ''){
                    route = '/vendor/list-data?&page=' + this.vendors.current_page;
                }else{
                    route = '/vendor/list-data?&search_input='+ this.searchInput +'&page=' + this.vendors.current_page;
                }
                this.$http.get(route).then((response)=>{
                       // console.log(response.data.data);
                    if(response.data.code == 200){
                        this.vendors = response.data.data.vendors;
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
                    var route = '/vendor/list-data?&search_input=' + this.searchInput;
                    this.$http.get(route)
                        .then((response)=>{
                            if(response.data.data.vendors.data.length == 0){
                                this.vendors = {
                                    total: 0,
                                    per_page: 2,
                                    from: 1,
                                    to: 0,
                                    current_page: 1
                                }
                            }else{

                                this.vendors = response.data.data.vendors;
                            }
                            this.loaders.searching = false;
                        });
                }, 350);
                this.status = 0;
            }else{
                this.getVendors();
            }
        },
        saveVendor(){
            if(confirm('Are you sure you want to add this vendor?')){
                var route = '/saveVendor';
                this.$http.post(route,this.vendor).then((response)=>{
                    if(response.data.code == 201){
                        this.vendor = {
                            name: '',
                            email: '',
                            phone: '',
                            address: '',
                            credit_limit: '',
                            status: 1
                        };
                        this.getVendors();
                        this.showForm = false;
                        swal('Success',response.data.message, "success",{buttons: false,timer: 1000,});
                    }else{
                        this.errors = response.data.errors;
                            
                        swal('Error',response.data.message, "error",{buttons: false,timer: 2000,});
                    }
                }).catch((err)=>{
                    //disable loaders

                });
            }
        },
        setVendorForEdit(index){
                //console.log(this.categories.data[index].name);
                this.vendor = {
                id: this.vendors.data[index].id,
                vendorid: this.vendors.data[index].vendorid,
                name: this.vendors.data[index].name,
                email: this.vendors.data[index].email,
                phone: this.vendors.data[index].phone,
                address: this.vendors.data[index].address,
                credit_limit: this.vendors.data[index].credit_limit,
                status: this.vendors.data[index].status,
            },
           this.saveBtn= false,
           this.updateBtn=true,
           this.showForm = true;
        },
        updateVendor(){
            if(confirm('Are you sure you want to update this vendor?')){
                var route = '/updateVendor';
                this.$http.post(route, this.vendor).then((response)=>{
                    if(response.data.code == 204){
                        this.vendor = {
                            vendorid: '',
                            name: '',
                            email: '',
                            phone: '',
                            address: '',
                            credit_limit: '',
                            status: 1,
                            id : ''
                        };
                        this.getVendors();
                        this.saveBtn= true;
                        this.updateBtn=false;
                        this.showForm = false;
                        swal('Success',response.data.message, "success",{buttons: false,timer: 1000,});
                    }else{
                        //this.errorsWhileEdit = response.data.message;
                        this.errors = response.data.errors;
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
        this.getVendors();
    }
});
