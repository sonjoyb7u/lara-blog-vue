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
                            <li class="breadcrumb-item active"><router-link to="/home/categories">Manage Category</router-link></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category List of Datatable</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="categoryDataTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <img src="" alt="Category Image" width="100" height="70">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="categoryStatusToggle" data-id=""  data-toggle="toggle" data-size="xs" data-on="Active" data-off="InActive" data-onstyle="success" data-offstyle="danger" >
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info btn-sm" id="showCategory" title="View Category"><i class="fas fa-eye"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

</template>

<script>
    export default {
        name: "IndexComponent",
        mounted() {
            console.log('Category Component mounted.')
        }
    }
</script>

<style scoped>

</style>
