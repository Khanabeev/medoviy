<template>
<div>

    <div class="alert alert-info" v-if="items.length < 1">Вам необходимо выбрать продукт в <a style="font-weight:bold;" href="/store.html">магазине </a></div>
    <div v-if="isSent" class="alert alert-success">Спасибо за ваш заказ, мы свяжемся с вами в ближайшее время!</div>
    <table class="table" id="myPrice">
        <thead>
        <tr>
            <th></th>
            <th>Продукт</th>
            <th>Кол.</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in items" :key="item.price_id">
            <td><button @click="deleteFromOrder(item.price_id)" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button></td>
            <td>{{item.product_name}} <br> <span class="measure-price">{{item.quantity}} {{item.measure}} / {{item.price}}р.</span></td>
            <td><input type="number" min=1 max=999 style="width:60px" @input="calculateItem($event,item.price_id)" :value="item.qwt"></td>
            <td class="font-weight-bold">{{item.total}}р.</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class="text-right">Всего:</td>
            <td class="font-weight-bold">{{total}}р.</td>
        </tr>
        </tbody>
    </table>

    <hr>

    <div v-if="items.length >= 1 && !isSent" class="card">
        <div class="card-header">
            Данные заказа
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="client_name">Ваше имя</label>
                    <input v-model="client_name" type="text" class="form-control" id="client_name" placeholder="Введите ваше имя" required>
                    <div class="mt-2 alert alert-danger" v-show="errors.name">Пожалуйста, укажите свое имя.</div>
                </div>

                <div class="form-group">
                    <label for="client_name">Ваш город</label>
                    <input v-model="client_city" type="text" class="form-control" id="client_city" placeholder="Введите название вашего города" required>
                    <div class="mt-2 alert alert-danger" v-show="errors.city">Пожалуйста, укажите ваш город.</div>
                </div>

                <div class="form-group">
                    <label for="client_phone">Ваш номер телефона</label>
                    <input v-model="client_phone" class="form-control" id="client_phone" placeholder="Введите ваш номер" required>
                    <div class="mt-2 alert alert-danger" v-show="errors.phone">Пожалуйста, укажите номер телефона.</div>
                    <div class="mt-2 alert alert-danger" v-show="errors.wrongPhone">Пожалуйста, укажите корректный номер (Пример: 79261234567).</div>
                </div>
                <div class="form-group">
                    <a class="text-info" href="/agreement.html" target="_blank">ссылка на соглашение</a><br>
                    <label for="personal_data">согласие на обработку персональных данных</label>
                    <input v-model="isChecked" type="checkbox" class="double" id="personal_data" name="checkbox" style="width:20px;" required>
                    <div class="mt-2 alert alert-danger" v-show="errors.checked">Пожалуйста, дайте согласие на обработку ваших данных.</div>
                </div>
                <button @click.prevent="sendOrder"  class="btn btn-info" v-if="!isLoading">Заказать</button>
                <div class="alert-info alert" v-if="isLoading">Идет обработка вашего заказа...</div>
            </form>

        </div>

    </div>
</div>
</template>

<script>
    import _ from "lodash"
    import axios from "axios"
    export default {
        name: "orderPage",
        data() {
            return {
                items: {},
                total: 0,
                prices_ids:[],
                isChecked: false,
                client_name: '',
                client_phone: '',
                client_city: '',
                errors: {
                    phone:false,
                    name:false,
                    city:false,
                    checked:false,
                    wrongPhone:false,
                },
                isOrderSent:false,
                isLoading:false,
                isSent:false
            }
        },
        created() {
            this.fetchOrder();
        },
        watch: {},
        methods: {
            fetchOrder() {
                this.prices_ids = JSON.parse(localStorage.getItem("cart"))
                axios
                .post('/store/get-order',{ids:this.prices_ids})
                .then(res => {
                    this.items = res.data.data;
                    this.total = res.data.total;
                })
            },
            deleteFromOrder(price_id) {
                this.items = this.items.filter(function (item) {
                    return item.price_id !== price_id;
                });
                this.prices_ids = this.prices_ids.filter(function (item) {
                    return item !== price_id;
                });
                localStorage.setItem("cart",JSON.stringify(this.prices_ids));
                this.total = this.calculateTotal();
            },
            calculateTotal() {
                let res = 0;
                this.items.forEach(function (item) {
                    res += item.total;
                });
                return res;
            },
            calculateItem($event, price_id){
                this.items = this.items.map(function (item) {
                    if(item.price_id === price_id) {
                        item.qwt = $event.target.value;
                        item.total = item.qwt * item.price;
                    }
                    return item;
                });
                let arr1 = [];
                this.items.forEach(function(item) {
                    let arr2 = _.flatten(_.times(item.qwt, function () {
                        return [item.price_id]
                    }));
                    arr1 = arr1.concat(arr2);
                });
                localStorage.setItem("cart",JSON.stringify(arr1));
                this.total = this.calculateTotal();
            },
            sendOrder() {
                this.errors.name = false;
                this.errors.phone = false;
                this.errors.city = false;
                this.errors.checked = false;
                this.errors.wrongPhone = false;
                if(!this.client_name) {
                    this.errors.name = true;
                }
                if(!this.client_city) {
                    this.errors.city = true;
                }
                if(!this.client_phone) {
                    this.errors.phone = true;
                    return;
                }
                if(!this.isChecked) {
                    this.errors.checked = true;
                    return;
                }
                let re = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/i;
                let checkPhone = this.client_phone.match(re);
                if(!checkPhone) {
                    this.errors.wrongPhone = true;
                    return;
                }

                if(this.client_name && this.client_city && this.client_phone && this.isChecked && checkPhone && this.items) {
                    this.isLoading = true;
                    axios
                    .post('/store/order-success',{
                        name: this.client_name,
                        phone: this.client_phone,
                        city: this.client_city,
                        order: this.items,
                        checked: this.isChecked
                    })
                    .then(res => {
                        this.isLoading = false;
                        this.isSent = true;
                        let emptyCart = [];
                        localStorage.setItem('cart',JSON.stringify(emptyCart));
                        this.items = {};
                        this.total = 0;
                    })
                }
            }
        }
    }
</script>

<style scoped>
    .measure-price{
        border: 1px solid grey;
        padding: 3px;
        border-radius: 3px;
        background-color: cornflowerblue;
        color: white
    }
    .double {
        zoom: 1;
        transform: scale(2);
        -ms-transform: scale(2);
        -webkit-transform: scale(2);
        -o-transform: scale(2);
        -moz-transform: scale(2);
        transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        -webkit-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
    }
</style>
