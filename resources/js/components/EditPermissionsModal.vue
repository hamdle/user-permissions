<template>
    <b-modal id="modal-1" size="xl" title="BootstrapVue" hide-footer>
        <edit-permissions-accordion></edit-permissions-accordion>
    </b-modal>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
