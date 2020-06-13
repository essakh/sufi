<template>
    <div class="container">
        sda
    </div>
</template>

<script>
    import Search from './Search';

    export default
    {
        created()
        {

            Search(
                {
                apiKey: 'AIzaSyAJht6EDlVvAfcwD81hg730aWmRLusazXU',
                term: 'laravel repository'
            });

        }

    }

</script>



