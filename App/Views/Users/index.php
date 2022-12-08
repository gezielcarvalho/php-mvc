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
                    <button @click="getCostumers">Fetch data</button>
                    <!-- {{ username }} -->
                    <div>
                        <ul>
                            <li v-for="user in users">
                                {{ user }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

    </div> <!-- container -->

</div> <!-- content -->

<script>
    const {
        createApp
    } = Vue

    createApp({
        data() {
            return {
                users: '',
            }
        },
        mounted() {
            this.getCostumers();
        },
        methods: {
            getCostumers() {
                console.log('Fetching data...');
                axios.get('/api/users')
                    .then(response => {
                        this.users = response.data.result;
                        console.log('data fetched',response.data.result);
                    })
            },
        }
    }).mount('#app');
</script>