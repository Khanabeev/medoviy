<template>
    <div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h1 class="float-left">Список продуктов</h1>
                <a href="/admin/product/create" class="btn btn-success ml-5"> + Добавить продукт</a>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6">
                <input class="form-control" @input="filterProduct($event)" placeholder="Поиск по названию" id="search" v-model="search">
            </div>
            <!-- /.col-md-6 -->
        </div>


        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Опубликован</th>
                <th scope="col">Тип</th>
                <th scope="col">Название</th>
                <th scope="col">URL</th>
                <th scope="col">Редактировать</th>
                <th scope="col">Удалить</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products">
                <td>
                    <button @click="changeAvailability(product.id)" v-if="product.is_available" class="btn btn-success">Да</button>
                    <button @click="changeAvailability(product.id)" v-else class="btn btn-danger">Нет</button>
                </td>
                <td v-if="product.type == 'honey'" class="text-danger">Мёд</td>
                <td v-else class="text-info">Продукт</td>
                <td>{{ product.name }}</td>
                <td><a :href="'/' + product.url" target="_blank">{{ product.url }}</a></td>
                <td>
                    <a :href="'/admin/product/'+product.id+'/edit'" class="btn btn-warning">Редактировать</a>
                </td>
                <td>
                    <button @click="deleteProduct(product.id)" class="btn btn-danger">Удалить</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "store",
        data(){
            return {
                products: {},
                search:'',
                allProducts:{},
            }
        },
        created() {
            this.fetchProducts();
        },
        methods: {
            fetchProducts(){
                axios
                    .get('/admin/products/get-all')
                    .then(res => {
                        this.products = res.data.products;
                        this.allProducts = this.products;
                        console.log(this.products);
                    });
            },
            deleteProduct(id) {

                if(confirm("Вы уверены?")) {
                    axios
                        .delete(`/admin/product/${id}`)
                        .then(res => {
                            if(res.data.status === 'success') {
                                alert(res.data.message);
                                this.products = this.products.filter(function (item) {
                                    if(item.id !== id) {
                                        return true;
                                    }
                                })
                            }
                        });
                }

            },
            changeAvailability(product_id) {
               this.products = this.products.map(function (item) {
                    if (item.id === product_id) {
                        item.is_available = !item.is_available
                    }
                    return item;
                });
               axios
                .post('/admin/product/change-availability',{id:product_id})
                .then(res => {
                    console.log(res.data.status);
                })
            },
            filterProduct(event) {
                this.products = this.allProducts.filter(function (item) {
                    return item.name.toLowerCase().includes(event.target.value);
                })
            }
        },
    }
</script>

<style scoped>

</style>
