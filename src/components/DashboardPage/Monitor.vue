<template>
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">
    <div>

        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lorem</th>
                    <th scope="col">Ipsum</th>
                    <th scope="col">Dolor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Sit</td>
                    <td>Amet</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Adipisicing</td>
                    <td>Elit</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Hic</td>
                    <td>Fugiat</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</template>

<script>



export default {
    name: 'Monitor',
    props: {
        msg: String
    }
}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;

@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}
</style>
