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
                                <?= $item['href'] !=='active' ? '<a href="' . $item['href'] . '">' . $item['title'] .
                                    '</a>' : $item['title'] ?>
                            </li>
                            <?php
                            }
                            ?>
                        </ol>
                    </div>
                    <h4 class="page-title">User Management</h4>
                    
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
                costumers: '',
                username: 'sysadmin',
                form: {
                    surname: 'Doe',
                    name: 'John',
                    username: '',
                    password: '',
                    user_type: '',
                    account_status: '',
                    balance: '',
                    currency: '',
                    email: '',
                    phone: '',
                    address: '',
                    city: '',
                    province: '',
                    comune: '',
                    ipaddress: '',
                },
                response: 0,
                load: false,
            }
        },
        mounted() {
            this.getCostumers();
        },
        methods: {
            getCostumers() {
                console.log("getCostumers");
                axios.get('/api/users')
                .then(response => {
                    console.log({response});
                    //this.costumers = response.data
                })
            },
        }
    }).mount('#app');
</script>