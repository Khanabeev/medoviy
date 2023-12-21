<template>
    <div>
        <h1>{{productName}}</h1>
        <h3>Список цен</h3>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th scope="col">Цена</th>
                <th scope="col">Кол-во на единицу</th>
                <th scope="col">Ед. измерения</th>
                <th scope="col">Удалить</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="price in prices">
                <td>{{price.price}}</td>
                <td>{{price.quantity}}</td>
                <td>{{price.measure}}</td>

            </tr>
            </tbody>
        </table>
        <div>
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Цена">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Кол-во на ед.">
                    </div>
                    <div class="col">
                        <select class="custom-select" name="type" id="inputGroupSelect01" required>
                            <option selected>Ед.измерения...</option>
                            <option value="кг">кг</option>
                            <option value="гр">гр</option>
                            <option value="шт">шт</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="mt-3 btn btn-primary">+ Добавить цену</button>
            </form>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "prices",
        props:['productId'],
        data(){
            return {
                prices: {},
                productName: '',
            }
        },
        created() {
            this.fetchPrices();
        },
        methods: {
            fetchPrices() {
                axios
                .get('/admin/product/get-all-prices/'+this.productId)
                .then(res => {
                    this.prices = res.data.prices;
                    this.productName = res.data.name;
                })
            }
        }
    }
</script>

<style scoped>

</style>
