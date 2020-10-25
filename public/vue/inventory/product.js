Vue.component('vue-pagination', paginationTawsif);
let delayTimer;
new Vue({
    el: '#app',
    name: 'ProductList',
    data: {
        products: {
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

        product: {
            productid:'',
            name: '',
            category_id: '',
            brand_id: '',
            unit_id: '',
            purchases_price: '',
            sales_price: '',
            alarm_qty: '',
            status: 1
        },
        editProduct: {
            id: '',
            productid: '',
            name: '',
            category_id: '',
            brand_id: '',
            unit_id: '',
            purchases_price: '',
            sales_price: '',
            alarm_qty: '',
            status: ''
        },
        errors: {},
        categorys:[],
        brands:[],
        units:[],
        errorsWhileEdit: {},
        saveBtn: true,
        updateBtn:false,
        showForm:true,
        productid:''
    },
    methods:{
        getProductId(){
                var route = '/get-product-id';
                this.$http.get(route).then((response)=>{
                       // console.log(response.data.data);
                    if(response.data.code == 200){
                         this.product.productid = response.data.data.productid;
                    }else{
                    }
                }).catch((err)=>{
                    //disable loaders
                    console.log(err);
                });  
        },
        getCategory(){
                var route = '/all-category';
                this.$http.get(route).then((response)=>{
                       // console.log(response.data.data);
                    if(response.data.code == 200){
                        this.categorys = response.data.data.categorys;
                       
                    }else{
                    }
                }).catch((err)=>{
                    //disable loaders
                    console.log(err);
                });  
        },
         getBrand(){
                var route = '/all-brand';
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
         getUnit(){
                var route = '/all-unit';
                this.$http.get(route).then((response)=>{
                       // console.log(response.data.data);
                    if(response.data.code == 200){
                        this.units = response.data.data.units;
                    }else{
                    }
                }).catch((err)=>{
                    //disable loaders
                    console.log(err);
                });  
        },
        
        getProducts(){
                let route;
                if(this.searchInput == ''){
                    route = '/product/list-data?&page=' + this.products.current_page;
                }else{
                    route = '/product/list-data?&search_input='+ this.searchInput +'&page=' + this.products.current_page;
                }
                this.$http.get(route).then((response)=>{
                       // console.log(response.data.data);
                    if(response.data.code == 200){
                        this.products = response.data.data.products;
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
                    var route = '/product/list-data?&search_input=' + this.searchInput;
                    this.$http.get(route)
                        .then((response)=>{
                            if(response.data.data.products.data.length == 0){
                                this.products = {
                                    total: 0,
                                    per_page: 2,
                                    from: 1,
                                    to: 0,
                                    current_page: 1
                                }
                            }else{

                                this.products = response.data.data.products;
                            }
                            this.loaders.searching = false;
                        });
                }, 350);
                this.status = 0;
            }else{
                this.getProducts();
            }
        },
        saveProduct(){

            console.log(this.product.category_id);
           
            console.log(this.product.name);
            console.log("alamin");

            if(confirm('Are you sure you want to add this Product?')){

               

                var route = '/saveProduct';
                this.$http.post(route,this.product).then((response)=>{
                    if(response.data.code == 201){
                        this.product = {
                           
                            name: '',
                            category_id: '',
                            brand_id: '',
                            unit_id: '',
                            purchases_price: '',
                            sales_price: '',
                            alarm_qty: '',
                            status: 1
                        };
                        this.getProducts();
                        this.showForm = false;
                        swal('Success',response.data.message, "success",{buttons: false,timer: 1000,});
                    }else{

                            console.log(response.data);


                        this.errors = response.data.errors;
                        swal('Error',response.data.message, "error",{buttons: false,timer: 2000,});
                    }
                }).catch((err)=>{
                    //disable loaders

                });
            }
        },
        setProductForEdit(index){
                //console.log(this.categories.data[index].name);
                this.product = {
                id: this.products.data[index].id,
               
                name: this.products.data[index].name,
                category_id: this.products.data[index].category_id,
                brand_id: this.products.data[index].brand_id,
                unit_id: this.products.data[index].unit_id,
                purchases_price: this.products.data[index].purchases_price,
                sales_price: this.products.data[index].sales_price,
                alarm_qty: this.products.data[index].alarm_qty,
                status: this.products.data[index].status,
            },
           this.saveBtn= false,
           this.updateBtn=true,
           this.showForm = true;
        },
        updateProduct(){
            if(confirm('Are you sure you want to update this product?')){
                var route = '/updateProduct';
                this.$http.post(route, this.product).then((response)=>{
                    if(response.data.code == 204){
                        this.product = {
                          
                            name: '',
                            category_id: '',
                            brand_id: '',
                            unit_id: '',
                            purchases_price: '',
                            sales_price: '',
                            alarm_qty: '',
                            id : ''
                        };
                        this.getProducts();
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
        this.getProducts();
        this.getCategory();
        this.getBrand();
        this.getUnit();
        this.getProductId();
    }
});
