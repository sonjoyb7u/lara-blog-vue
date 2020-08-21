<template>
    <div class="container">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><router-link to="/categories/create">Add Category</router-link></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8 offset-2">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="addCategory">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Category Name</label>
                                        <input type="text" class="form-control" id="name" v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Enter Category Name">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                    <label>Status</label>
                                    <div class="form-group clearfix">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="active" v-model="form.status" value="active">
                                            <label for="active">Active
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="inactive" v-model="form.status" value="inactive">
                                            <label for="inactive">Inactive
                                            </label>
                                        </div>
                                        <span :class="{ 'is-invalid': form.errors.has('status') }"></span>
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" :disabled="form.busy" class="btn btn-primary">Add Category</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "CreateComponent",
        data: function() {
            return {
                form: new Form({
                    name: null,
                    status: null,
                }),
            }
        },
        methods: {
            addCategory: function() {
                this.form.post('/category/store')
                    .then(
                            // ES 6 using...
                            // ({data}) => { console.log(data) }
                            function(data) {
                                // console.log(data);
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Category Added success',
                                })

                            }

                    )
            }
        },
        mounted() {
            console.log('Create Category Component mounted.')
        }
    }
</script>

<style scoped>

</style>
