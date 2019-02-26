<template>
    <div>

        <div class="page-title">
            <h3 class="title">Welcome {{ authUser.name }} , Love to see you back.</h3>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-pink">
                    <i class="ion-eye"></i>
                    <h2 class="m-0 counter">{{stockin.length}}</h2>
                    <div><a :href="`/stocking`"><b>STOCK</b></a></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-purple">
                    <i class="ion-paper-airplane"></i>
                    <h2 class="m-0 counter">{{trans.length}}</h2>
                    <div><a  :href="`/stock/sold`"><b>SELL</b></a></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-info">
                    <i class="ion-ios7-pricetag"></i>
                    <h2 class="m-0 counter">{{trans.length}}</h2>
                    <div><a  :href="`/available`"><b>TRANSACTIONS</b></a></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-success">
                    <i class="ion-android-contacts"></i>
                    <h2 class="m-0 counter">{{stockin.length}}</h2>
                    <div><a  :href="`/stock/history`"><b>AVAILABLE<br>STOCK</b></a></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import {authUsers} from '../utilities/config'
    import {allstock} from '../utilities/config'
    import {allTrans} from '../utilities/config'
    export default{
        data(){
            return{
                authUser:{},
                stockin:{},
                trans:{}
            }
        },
        created(){
            this.authentic();
            this.allstock();
            this.alltransaction()
        },
        methods: {
            authentic() {
                axios.get(authUsers).then((res) => {
                    this.authUser = res.data
                })
            },
            allstock() {
                axios.get(allstock).then((res) => {
                    this.stockin = res.data
                })
            },
            alltransaction() {
                axios.get(allTrans).then((res) => {
                    this.trans = res.data
                })
            },

        }

    }
</script>