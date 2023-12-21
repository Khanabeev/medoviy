<template>
    <div>
        <div class="row mb-3">
            <div class="container justify-content-end">
                <a class="float-left btn btn-success mr-3" :class="{disabled: cart.length < 1}" href="/store.html/order">Оформить заказ</a>
                <span>Корзина: {{qwt}} шт.</span>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6" v-for="product in products">
                <div class="card">
                    <a :href="product.url">
                        <img class="card-img-top" :src="'storage/'+product.image" :alt="product.name">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{product.name}}</h5>
                        <div class="option-card"><span></span>
                            <button @click="addToCart(price.id)" v-for="price in product.prices" class="btn-danger btn btn-block my-cart-btn btn-sm">
                                {{price.quantity + " " + price.measure}} | {{price.price}}р.
                                <i v-show="isShowCart(price.id)"  class="fa fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-footer">{{product.proposal}}</div>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    import axios from 'axios';

    export default {
        name: "mainComponent",
        data() {
            return {
                products: {},
                cart: [],
                qwt: 0,
            }
        },
        created() {
            this.fetchItems();
            this.localStorageCheck();
        },
        methods: {
            localStorageCheck() {
                if (localStorage.getItem("cart") !== null) {
                    this.cart = JSON.parse(localStorage.getItem("cart"));
                    this.qwt = this.cart.length;
                } else {
                    localStorage.setItem('cart',JSON.stringify([]));
                }
            },
            fetchItems() {
                axios
                .get('/store/fetch-all-items')
                .then(res => {
                    this.products = res.data;
                })
            },
            addToCart(id) {
                this.cart.push(id);
                this.qwt = this.cart.length;
                localStorage.setItem("cart", JSON.stringify(this.cart))
            },
            makeOrder() {
                axios
                .post('/store/make-order',{price_ids:this.cart})
                .then(res => {});
            },
            isShowCart(price_id) {
                this.cart = JSON.parse(localStorage.getItem("cart"));
                return this.cart.includes(price_id);
            }
        }
    }
</script>

<style scoped>

</style>
