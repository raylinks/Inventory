<template>
    <div>
        <div class="container">
            <div class="row col-md-4 col-lg-4 col-sm-4" style="background:white; margin:10px;">

                <h3 style="color:lightskyblue">Due payed</h3>
                <form @submit.prevent="add()">


                    <div class="form-group">
                        <label>DUE PAYABLE<span class="required">*</span> </label>
                        <input type="text" v-model="payable.due" class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <label>PAID<span class="required">*</span> </label>
                        <input type="text" v-model="payable.paid" class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <label>BALANCE<span class="required">*</span> </label>
                        <input type="text"  class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <label>DATE<span class="required">*</span> </label>
                        <input type="date" v-model="payable.date" class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    import {getTrans} from '../utilities/config'
    export default{
        data(){
            return{
                due:{
                    payed:'',
                    date:'',
                    paid:'',
                    balance:''

                },
                payable:{}
            }
        },
        created(){
            this.duePayable();
        },
        methods:{
            duePayable(){

                axios.get(getTrans).then((res) => {
                    this.payable = res.data
                })
            }

        }
    }
</script>