<template>
    <div>
        <section class="scrollable wrapper">
            <div class="row">
                <div class="col-xs-6">
                    <h4></h4>

                </div>
                <div class="col-xs-6 text-right">
                    <p class="h4">Order Id : #</p>
                    <p><b>Registration Date : </b> </p>
                    <p><b>Expiry Date : </b> </p>
                </div>
            </div>
            <div class="well m-t">
                <div class="row">
                    <div class="col-xs-6"> <strong>COMPANYy NAME:</strong>
                        <h4></h4>

                    </div>
                    <div class="col-xs-6"> <strong>BOUGHT BY:</strong>
                        <h4></h4>

                    </div>
                </div>
            </div>
            <p class="m-t m-b">Order date: <strong></strong><br>

                Order status:

            <div class="line"></div>
            <table class="table">
                <thead>
                <tr>
                    <th width="60">QTY</th>
                    <th>PRODUCT</th>
                    <th>SIZE</th>
                    <th width="140">UNIT PRICE</th>
                    <th width="90">TOTAL</th>
                </tr>
                </thead>
                <tbody>


                <tr v-for="inv in getinvoice">
                    <td>{{inv.quantity}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="3" class="text-right"><strong>Subtotal</strong></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right no-border"><strong>Tax/VAT Included in Total</strong></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right no-border"><strong>Total</strong></td>
                    <td><strong></strong></td>
                </tr>
                </tbody>
            </table>
        </section>
    </div>
</template>
<script>
    import {getTrans} from '../utilities/config'
    export default{
        data(){
            return{
                invoice:{

                },
                getinvoice:{}
            }
        },
        created(){
            this.getSelling();
        },
        methods:{
            getSelling() {
                axios.get(getTrans).then((response) =>{
                    this.getinvoice = response.data;
                })
            },
        }
    }
</script>