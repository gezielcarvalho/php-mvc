<div id="app" class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <?php
                            foreach ($breadcrumbs as $item) {
                            ?>
                                <li class="breadcrumb-item <?= $item['href'] === 'active' ? 'active' : '' ?>">
                                    <?= $item['href'] !== 'active' ? '<a href="' . $item['href'] . '">' . $item['title'] .
                                        '</a>' : $item['title'] ?>
                                </li>
                            <?php
                            }
                            ?>
                        </ol>
                    </div>
                    <h4 class="page-title">User Management</h4>
                    <!-- table -->
                    <!-- table -->
                    <!-- table -->
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Surname</th>
                                <th scope="col">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- renders the table  -->
                            <tr v-for="user in showingUsers" :key="user.user_id">
                                <th scope="row">{{ user.id }}</th>
                                <td>{{ user.name }}</td>
                                <td>{{ user.surname }}</td>
                                <td>{{ user.username }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end page title -->

    </div> <!-- container -->
    <!-- pagination -->
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <!-- <li class="page-item"><a class="page-link">Previous</a></li> -->
            <li style="cursor:pointer;" v-for="(page, index) in pageCount" :key="index" class="page-item" @click="setPage(page)">
                <a :class="page == current_page ? 'text-info':''" class="page-link" v-html="page"></a>
            </li>
            <!-- <li class="page-item"><a class="page-link">Next</a></li> -->
        </ul>
    </nav>

</div> <!-- content -->

<script>
    const {
        createApp
    } = Vue

    createApp({
        data() {
            return {
                users: '',
                current_page: 1,
                pageCount: 0,
                showingUsers: []
            }
        },
        mounted() {
            this.getCostumers();
        },
        methods: {
            getCostumers() {
                console.log('Fetching data...');
                axios.get(`/api/users`)
                    .then(response => {
                        this.users = response.data.result;
                        console.log('data fetched raw', response.data);
                        console.log('data fetched', response.data.result);
                        this.showingUsers = this.users.slice(0, 10);
                    })
            },
            setPage(page) {
                this.current_page = page;
                this.showingUsers = this.users.slice((page - 1) * 10, page * 10);
            }
        },
        watch: {
            users(value) {
                this.pageCount = Math.ceil(value.length / 10)
            }
        }
    }).mount('#app');
</script>