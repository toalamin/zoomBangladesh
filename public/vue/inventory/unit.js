Vue.component('vue-pagination', paginationTawsif);
let delayTimer;
new Vue({
    el: '#app',
    name: 'UnitList',
    data: {
        units: {
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

        unit: {
            name: '',
            status: 1
        },

        editUnit: {
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
        getUnits(){
                let route;
                if(this.searchInput == ''){
                    route = '/unit/list-data?&page=' + this.units.current_page;
                }else{
                    route = '/unit/list-data?&search_input='+ this.searchInput +'&page=' + this.units.current_page;
                }
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
        searchGivenInput(){
            if(this.searchInput.length > 0){
                clearTimeout(delayTimer);
                delayTimer = setTimeout(() => {
                    this.loaders.searching = true;
                    var route = '/unit/list-data?&search_input=' + this.searchInput;
                    this.$http.get(route)
                        .then((response)=>{
                            if(response.data.data.units.data.length == 0){
                                this.units = {
                                    total: 0,
                                    per_page: 2,
                                    from: 1,
                                    to: 0,
                                    current_page: 1
                                }
                            }else{

                                this.units = response.data.data.units;
                            }
                            this.loaders.searching = false;
                        });
                }, 350);
                this.status = 0;
            }else{
                this.getUnits();
            }
        },
        saveUnit(){
            if(confirm('Are you sure you want to add this unit?')){
                var route = '/saveUnit';
                this.$http.post(route,this.unit).then((response)=>{
                    if(response.data.code == 201){
                        this.unit = {
                            name: '',
                            status: 1
                        };
                        this.getUnits();
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
        setUnitForEdit(index){
                //console.log(this.categories.data[index].name);
                this.unit = {
                id: this.units.data[index].id,
                name: this.units.data[index].name,
                status: this.units.data[index].status,
            },
           this.saveBtn= false,
           this.updateBtn=true
        },
        updateUnit(){
            if(confirm('Are you sure you want to update this unit?')){
                var route = '/updateUnit';
                this.$http.post(route, this.unit).then((response)=>{
                    if(response.data.code == 204){
                        this.unit = {
                            name: '',
                            status: 1,
                            id : ''
                        };
                        this.getUnits();
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
        this.getUnits();
    }
});
