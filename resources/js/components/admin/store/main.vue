<template>
    <div>
        <h1 class="float-left">Магазин</h1>
        <a href="/admin/product/create" class="btn btn-success ml-5"> + Добавить продукт</a>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th scope="col">Опубликован</th>
                <th scope="col">Название</th>
                <th scope="col">Редактировать</th>
                <th scope="col">Удалить</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <button class="btn btn-success">Да</button></td>
                <td>Майский мед</td>
                <td>
                    <button class="btn btn-warning">Редактировать</button>
                </td>
                <td>
                    <button class="btn btn-danger">Удалить</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "store"
    }
</script>

<style scoped>

</style>
