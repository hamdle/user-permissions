<template>
    <div>
        <b-button variant="primary" v-b-modal.modal-1>
            <i class="far fa-edit"></i>
        </b-button>
        <edit-permissions-modal></edit-permissions-modal>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
